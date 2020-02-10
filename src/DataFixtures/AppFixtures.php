<?php

namespace App\DataFixtures;
use App\Entity\Informations;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
     // On configure dans quelles langues nous voulons nos données
     $faker = Faker\Factory::create('fr_FR');

     // on créé 10 personnes
     for ($i = 0; $i < 10; $i++) {
         $personne = new Informations();
         $personne->setName($faker->name);
         $personne->setDescription($faker->description);
         $personne->setPremium($faker->premium);
         $personne->setActive($faker->active);
         $personne->setPreview($faker->preview);
     }

     $manager->flush();
 }
}

