<?php

namespace App\Form;

use App\Entity\Planing;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PlaningType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('startDate', DateType::class, [
            'label' => 'à quelle date débute le planing',
            'attr' => ['placeholder' => 'Sélectionner une date de début'],
            'widget' => 'single_text',
        ])
        
        ->add('endDate', DateType::class, [
            'label' => 'à quelle date se termine le planing',
            'attr' => ['placeholder' => 'Sélectionner une date de fin'],
            'widget' => 'single_text',
        ])
        
        ->add('startTime', TimeType::class, [
            'label' => 'à quelle heure souhaitez-vous commencer votre journée',
            'attr' => ['placeholder' => 'Choisir une heure de début'],
            'hours' => array_combine(range(6, 22), range(6, 22)), // Mapping des heures aux libellés
            'minutes' => [0, 15, 30, 45], // Définition des minutes disponibles

            'widget' => 'choice',
        ])
        
        ->add('endTime', TimeType::class, [
            'label' => 'Quand souhaitez-vous terminer votre journée', // Libellé du champ
            'hours' => array_combine(range(6, 22), range(6, 22)), // Mapping des heures aux libellés
            'minutes' => [0, 15, 30, 45], // Définition des minutes disponibles
            'widget' => 'choice', // Utilisation d'un widget de type choix
            'with_seconds' => false, // Désactivation de l'affichage des secondes
        ])
        
        ->add('weekendStatus', ChoiceType::class, [
            'label' => 'Choisissez l\'ouverture le week-end.',
            'placeholder' => 'Sélectionner...',
            'choices' => [
                'Ouvert le samedi et le dimanche' => '11',
                'Ouvert le samedi, fermé le dimanche' => '1-',
                'Fermé le samedi, ouvert le dimanche' => '-1',
                'Fermé le samedi et le dimanche' => '--',
            ],
        ])
        
        ->add('exceptionaleClosure', CollectionType::class, [
            'label' => 'Insérez ci-dessous les dates de fermetures exceptionnelles',
            'entry_type' => TextType::class,
            'allow_add' => true,
            'allow_delete' => true,
            'prototype' => true,
            'attr' => ['placeholder' => 'Ajouter une fermeture exceptionnelle'],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Planing::class,
        ]);
    }
    }