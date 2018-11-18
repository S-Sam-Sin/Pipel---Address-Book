<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Grouping;

class GroupFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $groupsOptions = ['Friends', 'Family', 'Coworkers'];

        foreach ($groupsOptions as $groupOption)
        {
            $group = new Grouping();
            $group->setName($groupOption);
            $manager->persist($group);
        }

        $manager->flush();
    }
}
