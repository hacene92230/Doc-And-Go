<?php

namespace App\Form;

use App\Entity\Appointment;
use App\Entity\Reason;
use App\Entity\Speciality;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('reason', EntityType::class, [
            "label" => "choisir le motif de votre consultation",
            "required" => true,
            'class' => Reason::class,
            'choice_label' => 'name',
            'multiple' => false,
            'expanded' => true,
        ])
    

        ->add('dateTime', DateTimeType::class, [
            'label' => 'Choisir un créneau horaire',
            'attr' => ['class' => 'hidden-time-field'],
        ])

                    ->add('comment', TextType::class, [
                "label" => "Saisir un commentaire.",
                "required" => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
}
