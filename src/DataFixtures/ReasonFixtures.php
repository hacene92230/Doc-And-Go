<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Reason;
use App\Entity\Speciality;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ReasonFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        $specialities = $manager->getRepository(Speciality::class)->findAll();

        foreach ($specialities as $speciality) {
            for ($i = 0; $i < 5; $i++) {
                $reason = new Reason();
                $reason->setName($faker->sentence());
                $speciality->addReason($reason);
                $manager->persist($reason);
            }
//            $manager->persist($speciality);
        }
        $manager->flush();
}
}
