<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Eleve;
use Faker;

class Eleve_Fixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Localiser Faker en français
        $faker = Faker\Factory::create('fr_FR');
        
        for ($i=0; $i < 40; $i++) { 
            $eleve = new Eleve();
            
                $eleve->setNom($faker->lastName);
                $eleve->setPrenom($faker->firstName);
                $eleve->setDateNaissance($faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null));
                $eleve->setMoyenne($faker->numberBetween($min = 0, $max = 20));
            $eleve->setIdClasse($faker->);
           
            $manager->persist($eleve);

        }
            

        $manager->flush();
    }
}
