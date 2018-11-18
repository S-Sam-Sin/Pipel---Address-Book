<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixture extends Fixture
{
    private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }

    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user->setUsername('root');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'root'
        ));
        $user->setRoles(['ROLE_ROOT']);

        $manager->persist($user);
        $manager->flush();
    }
}
