<?php

namespace App\Form;

use App\Entity\Concert;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
class ConcertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation' , TextType::class , [
                'label' => false,
                'attr' => array(
                    'placeholder' => "Designation"
                )
            ])
            
            ->add('dateConcert', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'datepicker validate'],
            ])


            ->add('publier', CheckboxType::class, [
                'label'    => 'Show this entry publicly?',
                'required' => false,
                'attr' => ['checked' => 'checked']
            ])

            ->add('chanteur' , TextType::class , [
                'label' => false,
                'attr' => array(
                    'placeholder' => "Nom du chanteur",
                    'class' => 'fadeIn second',
                    'id' => 'login'
                )
            ])
            ->add('picture', FileType::class, [
                'required' => false,
                'data_class' => null
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Concert::class,
        ]);
    }
}
