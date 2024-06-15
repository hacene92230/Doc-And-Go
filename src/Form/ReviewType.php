<?php

namespace App\Form;

use App\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('notation', ChoiceType::class, [
                'choices' => [
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                ],
                'expanded' => true,
                'multiple' => false,
                'label' => false,
            ])

            ->add('reason', ChoiceType::class, [
                'choices' => [
                    'Prise de rendez-vous' => 'Prise de rendez-vous',
                    'Consultation avec un médecin' => 'Consultation avec un médecin',
                    'Opération pratiquée' => 'Opération pratiquée',
                    'Soin effectué' => 'Soin effectué',
                    'Navigation sur le site' => 'Navigation sur le site',
                    'Autre' => 'Autre',
                ],
                'label' => false,
            ])
            ->add('comment', TextareaType::class, [
                'label' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}
