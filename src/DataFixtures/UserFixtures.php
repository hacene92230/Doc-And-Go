<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Speciality;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        // Créer 15 utilisateurs avec le rôle "ROLE_DOCTOR" pour chaque spécialité
        $specialities = $manager->getRepository(Speciality::class)->findAll();

        foreach ($specialities as $speciality) {
            for ($i = 0; $i < 15; $i++) {
                $user = new User();
                $user->setEmail($faker->email);
                $user->setFirstName($faker->firstName);
                $user->setLastName($faker->lastName);
                $user->setRoles(['ROLE_DOCTOR']);

                // Hacher le mot de passe
                $hashedPassword = $this->passwordHasher->hashPassword($user, 'password');
                $user->setPassword($hashedPassword);
                $user->setCreatedAt(new \DateTimeImmutable());
                $user->setStreet($faker->streetAddress);
                $user->setCity($faker->city);
                $user->setZipCode($faker->postcode);
                $user->setPhonenumber($faker->phoneNumber);

                // Associer l'utilisateur à la spécialité en cours
                $speciality->addDoctor($user);

                $manager->persist($user);
            }
            $manager->persist($speciality);
        }

        $manager->flush();
    }
}
