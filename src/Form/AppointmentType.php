<?php

namespace App\Form;

use App\Entity\Appointment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $timeChoices = $options['time_choices'];

        $builder
            ->add('time', ChoiceType::class, [
                'choices' => array_reduce(array_keys($timeChoices), function ($carry, $date) use ($timeChoices) {
                    foreach ($timeChoices[$date] as $time => $label) {
                        $carry["$date $time"] = "$date $time";
                    }
                    return $carry;
                }, []),
                'label' => 'Créneauff horaire',
                'expanded' => true,
                'multiple' => false,
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
            'time_choices' => [],
        ]);
    }
}
