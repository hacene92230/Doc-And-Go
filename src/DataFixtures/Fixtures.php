<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use DateTimeImmutable;
use App\Entity\Speciality;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
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
        $faker = Factory::create('fr_FR');

//création des spécialitées

$specialities = [
    "Infirmier",
    "Masseur-kinésithérapeute",
    "Pédicure-podologue",
    "Ergothérapeute",
    "Psychomotricien",
    "Orthophoniste",
    "Orthoptiste",
    "Manipulateur d'électroradiologie médicale",
    "Technicien de laboratoire médical",
    "Audioprothésiste",
    "Opticien-lunetier",
    "Prothésiste",
    "Orthésiste",
    "Diététicien",
    "Aide-soignant",
    "Auxiliaire de puériculture",
    "Ambulancier",
    "Assistant dentaire",
    "Conseiller en génétique",
    "Chiropracteur",
    "Ostéopathe",
    "Psychologue",
    "Psychothérapeute",
    "Allergologie ou immunologie",
    "Anesthésiologie",
    "Andrologie",
    "Cardiologie",
    "Chirurgie",
    "Chirurgie cardiaque",
    "Chirurgie esthétique, plastique et reconstructive",
    "Chirurgie générale",
    "Chirurgie maxillo-faciale",
    "Chirurgie pédiatrique",
    "Chirurgie thoracique",
    "Chirurgie vasculaire",
    "Neurochirurgie",
    "Dermatologie",
    "Endocrinologie",
    "Gastro-entérologie",
    "Gériatrie",
    "Gynécologie",
    "Hématologie",
    "Hépatologie",
    "Infectiologie",
    "Médecine aiguë",
    "Médecine du travail",
    "Médecine générale",
    "Médecine interne",
    "Médecine nucléaire",
    "Médecine palliative",
    "Médecine physique",
    "Médecine préventive",
    "Néonatologie",
    "Néphrologie",
    "Neurologie",
    "Odontologie",
    "Oncologie",
    "Obstétrique",
    "Ophtalmologie",
    "Orthopédie",
    "Oto-rhino-laryngologie",
    "Pédiatrie",
    "Pneumologie",
    "Psychiatrie",
    "Radiologie",
    "Radiothérapie",
    "Rhumatologie",
    "Urologie"
];  
foreach ($specialities as $specialityName) {
    $speciality = new Speciality();
    $speciality->setName($specialityName);
    $manager->persist($speciality);
}
$manager->flush();

        // Créer 100 utilisateurs avec le rôle "ROLE_DOCTOR"
        for ($i = 0; $i < 50; $i++) {
            $user = new User();
            $user->setEmail($faker->email);
            $user->setFirstName($faker->firstName);
            $user->setLastName($faker->lastName);
            $user->setRoles(['ROLE_DOCTOR']);
            
            // Hacher le mot de passe
            $hashedPassword = $this->passwordHasher->hashPassword($user, 'password');
            $user->setPassword($hashedPassword);
$user->setCreatedAt(new DateTimeImmutable());            
$user->setStreet($faker->streetAddress);
$user->setCity($faker->city);
$user->setZipCode($faker->postcode);
$user->setPhonenumber($faker->phoneNumber);

$randomSpecialityIndex = array_rand($specialities);
$randomSpecialityName = $specialities[$randomSpecialityIndex];
$randomSpeciality = $manager->getRepository(Speciality::class)->findOneBy(['name' => $randomSpecialityName]);
if ($randomSpeciality) {
    $user->addSpeciality($randomSpeciality);
}
$manager->persist($user);      
}

        $manager->flush();
    }
}
