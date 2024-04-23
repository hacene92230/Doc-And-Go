<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Reason;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ReasonFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        //création des motifs
for($i = 1; $i <=5; $i++)
{
$reason = new Reason();
    $reason->setName($faker->sentence());
}

}
}