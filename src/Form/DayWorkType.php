<?php

namespace App\Form;

use App\Entity\DayWork;
use App\Entity\Planing;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class DayWorkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('startHour', TimeType::class, [
            'label' => 'Heure de début de la journée',
            'attr' => [
                'class' => 'start-hour-field',
                'min' => '00:00',
                'max' => '23:59'
            ]
        ])
        
        ->add('endHour', TimeType::class, [
            'label' => 'Heure de fin de la journée',
            'attr' => [
                'class' => 'end-hour-field',
                'min' => '00:00',
                'max' => '23:59'
            ]
        ])
        
        ->add('slotDuration', IntegerType::class, [
            'label' => 'Durée du créneau (en minutes)',
            'attr' => [
                'class' => 'slot-duration-field',
                'min' => '1',
                'max' => '1440', // 24 heures en minutes
           "value" => 30
                ]
        ])
        
        ->add('date', DateType::class, [
            'label' => 'Date de la journée',
        ]
        );    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DayWork::class,
        ]);
    }
}
