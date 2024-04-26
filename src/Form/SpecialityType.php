<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Reason;
use App\Entity\Speciality;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SpecialityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            
            ->add('reasons', EntityType::class, [
                'class' => 'App\Entity\Reason', // Remplacez par le chemin de votre entité Reason
                'choice_label' => 'name', // Propriété de Reason à afficher dans la liste déroulante
                'multiple' => true, // Permettre à l'utilisateur de sélectionner plusieurs raisons
                'expanded' => true, // Afficher les options sous forme de cases à cocher
                // Vous pouvez également ajouter d'autres options comme 'required' si nécessaire
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Speciality::class,
        ]);
    }
}
