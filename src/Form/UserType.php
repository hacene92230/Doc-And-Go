<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\EqualTo;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('gender', ChoiceType::class, [
"label" => "Votre sexe",
            'choices' => [
                'Homme' => 'Monsieur',
                'Femme' => 'Madame',
            ],
            'placeholder' => 'Choisissez votre sexe',
            'required' => true,
        ])

        ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                ],
                'attr' => [
                    'placeholder' => 'Entrez votre prénom',
                ],
            ])

            ->add('lastname', TextType::class, [
                'label' => 'Nom',
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                ],
                'attr' => [
                    'placeholder' => 'Entrez votre nom',
                ],
            ])

            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new Email(),
                ],
                'attr' => [
                    'placeholder' => 'Entrer votre Email',
                ],
            ])

            ->add('street', TextType::class, [
                'label' => 'Numéro et nom de rue',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Entrez votre numéro et nom de rue'
                ]
            ])

            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Entrez le nom de la ville'
                ]
            ])

            ->add('zipCode', NumberType::class, [
                'label' => 'Code postal',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Entrer le code postal',
                    'min' => 5
                ]
            ])

            ->add('phoneNumber', TextType::class, [
                'label' => 'Numéro de téléphone',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Entrez le numéro de téléphone'
                ]
                ]);

            if ($options['edit_mode'] != true) {
                $builder->add(
        'plainPassword',
        RepeatedType::class,
        [
            'mapped' => false,
            'type' => PasswordType::class,
            'first_options' => [
                'label' => 'Mot de passe',
                'attr' => ['minlength' => 8, 'maxlength' => 20, 'placeholder' => 'Minimum 8 caractères']
            ],
            'second_options' => [
                'label' => 'Confirmez le mot de passe',
                'attr' => ['minlength' => 8, 'maxlength' => 20, 'placeholder' => 'Confirmez votre mot de passe']
            ]
        ]
            )
            
            ->add('agreeTerms', CheckboxType::class, [
                'label' => 'Je confirme avoir lu et accepté l\'intégralité des conditions générales d\'utilisation ainsi que les conditions générales de vente.',
                'mapped' => false,
            ]);
}
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'edit_mode' => false,
        ]);
    }
}
