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
                
            ])

            ->add('dateConcert', DateType::class, [
                'widget' => 'single_text',
                'html5' => false,
                'attr' => ['class' => 'datepicker validate']
                // this is actually the default format for single_text
                
            ])

            ->add('publier', CheckboxType::class, [
                'label'    => 'Show this entry publicly?',
                'required' => false,
                'attr' => ['checked' => 'checked']
            ])

            ->add('chanteur' , TextType::class , [
                'attr' => array(
                )
            ])

            ->add('picture', FileType::class, [
                'data_class' => null,
                /*'mapped' => false,*/
                
                'required' => false,
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
