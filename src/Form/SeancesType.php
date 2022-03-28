<?php

namespace App\Form;

use App\Entity\Seances;
use App\Entity\Population;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class SeancesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Nom de la séance',
                'empty_data' => '',
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('content', TextType::class, [
                'label' => 'Explication rapide de la séance',
                'empty_data' => '',
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('duration', IntegerType::class, [
                'label' => 'Durée de la séance en minutes',
                'empty_data' => '',
                'constraints' => [
                    new NotBlank(),
                ],  
            ])
            ->add('price', IntegerType::class, [
                'label' => 'Prix de la séance',
                'empty_data' => '',
                'constraints' => [
                    new NotBlank(),
                ],  
            ])
            ->add('population', EntityType::class, [
                'class' => Population::class,
                'choice_label' => 'title',
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            // ->add('createdAt')
            // ->add('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Seances::class,
        ]);
    }
}
