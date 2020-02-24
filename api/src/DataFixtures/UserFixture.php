<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new \App\Entity\User();
        $user->setEmail('test@test.com');
        // password = test
        $user->setPassword('$argon2id$v=19$m=65536,t=4,p=1$X3hRiXaimAZmBwhvjFFzIg$5bF48C3tH2pPb4wlx9nxKBPL3hO+ri5mT/27oMILBng');
        $manager->persist($user);

        $manager->flush();
    }
}
