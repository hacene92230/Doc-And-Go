<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Planing;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PlaningType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('weekendStatus', CollectionType::class, [
                'label' => 'Statut du week-end',
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'required' => false,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['placeholder' => 'Statut du week-end'],
                ],
                'attr' => ['class' => 'collection'],
            ])
            ->add('closedDates', CollectionType::class, [
                'label' => 'Dates de fermeture',
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'required' => false,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['placeholder' => 'Date de fermeture'],
                ],
                'attr' => ['class' => 'collection'],
            ])
            ->add('openinghours', CollectionType::class, [
                'label' => 'Heures d\'ouverture',
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'required' => false,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['placeholder' => 'Heures d\'ouverture'],
                ],
                'attr' => ['class' => 'collection'],
            ])
            ->add('specialdates', CollectionType::class, [
                'label' => 'Dates spéciales',
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'required' => false,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['placeholder' => 'Date spéciale'],
                ],
                'attr' => ['class' => 'collection'],
            ])
            ->add('defaultopeningtime', TextType::class, [
                'label' => 'Heure d\'ouverture par défaut',
                'attr' => ['placeholder' => 'Heure d\'ouverture par défaut'],
            ])
            ->add('defaultclosingtime', TextType::class, [
                'label' => 'Heure de fermeture par défaut',
                'attr' => ['placeholder' => 'Heure de fermeture par défaut'],
            ])
            ->add('weekendclosed', TextType::class, [
                'label' => 'Week-end fermé',
                'attr' => ['placeholder' => 'Week-end fermé'],
            ])
            ->add('user', EntityType::class, [
                'label' => 'Utilisateur',
                'class' => User::class,
                'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Planing::class,
        ]);
    }
}
