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
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                "label" => false,])

            ->add('closedDates', CollectionType::class, [
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                "label" => false,])
            
            ->add('openinghours', CollectionType::class, [
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                "label" => false,])
            
            ->add('specialdates', CollectionType::class, [
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                "label" => false,])
            
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
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Planing::class,
        ]);
    }
}
