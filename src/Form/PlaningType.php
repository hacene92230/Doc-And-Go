<?php

namespace App\Form;

use App\Entity\Planing;
use App\Form\DayWorkType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
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

            ->add('dayWorks', CollectionType::class, [
                'entry_type' => DayWorkType::class,
                "label" => false,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                // Configurez ici les options supplémentaires si nécessaire
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Planing::class,
        ]);
    }
}
