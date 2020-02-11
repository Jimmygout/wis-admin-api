<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Alert;
use App\Entity\Article;
use App\Entity\Concert;
use App\Entity\Actualite;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function admin(Request $request): Response
    {
        $articles = $this->getDoctrine()->getRepository(Article::class)->findBy(
            [],
            ['lastUpdateDate' => 'DESC']
        );

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $actualites = $this->getDoctrine()->getRepository(Actualite::class)->findAll();
        $alert = $this->getDoctrine()->getRepository(Alert::class)->findAll();

        $concert = $this->getDoctrine()->getRepository(Concert::class)->findAll();


        return $this->render('admin/index.html.twig', [
            'articles' => $articles,
            'users' => $users,
            'actualites' => $actualites,
            'concerts' => $concert,
            'alerts' => $alert,
 ]);
    }

    /**
     * Transform a string to a valid url
     * @param  string $str       [description]
     * @param  array  $replace   [description]
     * @param  string $delimiter [description]
     * @return string            [description]
     */
    public function generateSlug($str, $replace = [], $delimiter = '-'): string
    {
        if (!empty($replace)) {
            $str = str_replace((array) $replace, ' ', $str);
        }

        $accent = ["é", "è"];
        $str    = str_replace($accent, 'e', $str);
        $str    = str_replace('ç', 'c', $str);

        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower(trim($clean, '-'));
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

        if (substr($clean, -1) == '-') {
            $clean = substr($clean, 0, strlen($clean) - 1);
        }

        return $clean;
    }
}
