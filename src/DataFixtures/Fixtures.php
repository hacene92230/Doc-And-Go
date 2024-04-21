<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class Fixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {
        // Créer 100 utilisateurs avec le rôle "ROLE_DOCTOR"
        for ($i = 0; $i < 50; $i++) {
            $user = new User();
            $user->setEmail('doctor' . $i . '@example.com');
            $user->setFirstName('Prénom'.$i);
            $user->setLastName('nom' . $i);
            $user->setRoles(['ROLE_DOCTOR']);
            
            // Hacher le mot de passe
            $hashedPassword = $this->passwordHasher->hashPassword($user, 'password');
            $user->setPassword($hashedPassword);
$user->setCreatedAt(new DateTimeImmutable());            
$user->setStreet("rue".$i);
$user->setCity("ville".$i);
$user->setZipCode(random_int(1,100));
            $manager->persist($user);
        }

        $manager->flush();
    }
}
