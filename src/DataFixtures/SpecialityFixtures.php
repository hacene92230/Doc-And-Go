<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Reason;
use DateTimeImmutable;
use App\Entity\Speciality;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SpecialityFixtures extends Fixture
{

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
}
}