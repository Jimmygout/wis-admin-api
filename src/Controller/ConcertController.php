<?php

namespace App\Controller;

use App\Entity\Concert;
use App\Form\ConcertType;
use App\Repository\ConcertRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/concert")
 */
class ConcertController extends AbstractController
{
    /**
     * @Route("/", name="concert_index", methods={"GET"})
     */
    public function index(ConcertRepository $concertRepository, Request $request): Response
    {
        $concert = new Concert();
        return $this->render('concert/index.html.twig', [
            'concerts' => $concertRepository->findAll(),
            'concert' => $concert,
        ]);
    }

    /**
     * @Route("/new", name="concert_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $concert = new Concert();
        $form = $this->createForm(ConcertType::class, $concert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($concert->getPicture() !== null) {
                $file = $form->get('picture')->getData();
                $fileName = uniqid(). '.' .$file->guessExtension();

                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e) {
                    return new Response($e->getMessage());
                }

                $concert->setPicture($fileName);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($concert);
            $entityManager->flush();

            return $this->redirectToRoute('concert_index');
        }

        return $this->render('concert/new.html.twig', [
            'concert' => $concert,
            'form_concert' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="concert_show", methods={"GET"})
     */
    public function show(Concert $concert): Response
    {
        return $this->render('concert/show.html.twig', [
            'concert' => $concert,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="concert_edit")
     */
    public function edit(Request $request, Concert $concert): Response
    {
        $oldPicture = $concert->getPicture();

        $form = $this->createForm(ConcertType::class, $concert);
        $form->handleRequest($request);
        $uploadFile = $form->get('picture')->getData();
        if ($form->isSubmitted() && $form->isValid()) {
            if ($uploadFile) {
                $file = $form->get('picture')->getData();
                $fileName = uniqid(). '.' .$file->guessExtension();

                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e) {
                    return new Response($e->getMessage());
                }

                $concert->setPicture($fileName);
            } else {
                $concert->setPicture($oldPicture);
            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('concert_index');
        }

        return $this->render('concert/edit.html.twig', [
            'concert' => $concert,
            'form_concert' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="concert_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Concert $concert): Response
    {
        if ($this->isCsrfTokenValid('delete'.$concert->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($concert);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin');
    }
}
