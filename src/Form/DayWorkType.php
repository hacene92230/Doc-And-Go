<?php

namespace App\Form;

use App\Entity\DayWork;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\LessThan;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class DayWorkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
              ->add('startHour', TimeType::class, [
            'label' => 'à quelle heure souhaitez-vous commencer votre journée',
            'attr' => ['placeholder' => 'Choisir une heure de début'],
            'hours' => array_combine(range(6, 13), range(6, 13)), // Mapping des heures aux libellés
            'minutes' => [0, 15, 30, 45], // Définition des minutes disponibles
            'widget' => 'choice',
        ])
        
        ->add('endHour', TimeType::class, [
            'label' => 'Quand souhaitez-vous terminer votre journée', // Libellé du champ
            'hours' => array_combine(range(13, 22), range(13, 22)), // Mapping des heures aux libellés
            'minutes' => [0, 15, 30, 45], // Définition des minutes disponibles
            'widget' => 'choice', // Utilisation d'un widget de type choix
            'with_seconds' => false, // Désactivation de l'affichage des secondes
        ])

        ->add('slotDuration', IntegerType::class, [
            'label' => 'Durée des créneaux en minutes', // Libellé du champ
            'attr' => [
                'min' => 10, // Valeur minimale autorisée
                'step' => 10, // Pas de changement
                "max" => 60,
                "value" => 10,
            ],
        ])

        ->add('date', DateType::class, [
            'label' => 'Date de la journée',

        ]);
    }
    
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DayWork::class,
        ]);
    }
}
