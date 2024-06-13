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
            'label' => 'À quelle heure souhaitez-vous commencer votre journée ?',
            'attr' => ['class' => 'form-select right-0 appearance-none bg-white border border-gray-400 w-1/12 px-4 py-2 rounded-sm shadow'],
            // Utilisation des classes Tailwind CSS pour les formulaires
            'hours' => array_combine(range(6, 13), range(6, 13)),
            'minutes' => [0, 15, 30, 45],
            'widget' => 'choice',
        ])
        
        ->add('endHour', TimeType::class, [
            'label' => 'Quand souhaitez-vous terminer votre journée',
            'attr' => ['class' => 'form-select appearance-none bg-white border border-gray-400 w-1/12 px-4 py-2 rounded-sm shadow'], // Utilisation de la classe Tailwind pour les select
            'hours' => array_combine(range(13, 22), range(13, 22)),
            'minutes' => [0, 15, 30, 45],
            'widget' => 'choice',
            'with_seconds' => false,
        ])
        
        ->add('slotDuration', IntegerType::class, [
            'label' => 'Durée des créneaux en minutes',
            'attr' => [
                'class' => 'form-input appearance-none bg-white border border-gray-400 w-1/12 px-4 py-2 rounded-sm shadow', // Utilisation de la classe Tailwind pour les input
                'min' => 10,
                'step' => 10,
                'max' => 60,
                'value' => 10,
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
