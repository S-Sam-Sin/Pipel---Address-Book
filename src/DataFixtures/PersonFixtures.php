<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Person;
use Faker\Factory;

class PersonFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        $genderOptions = ['male', 'female'];
        $gender = $genderOptions[random_int(0,1)];

        for($i = 0; $i <= 11 ; $i++)
        {
            $person = new Person();
            $person->setTitle($faker->title($gender));
            $person->setFirstName($faker->firstName($gender));
            $person->setLastName($faker->lastName());
            $person->setSlug('test-person');
            $person->setPhoneNumber($faker->e164PhoneNumber);
            $person->setDescription($faker->realText);
            $manager->persist($person);
        }

        $manager->flush();
    }
}
