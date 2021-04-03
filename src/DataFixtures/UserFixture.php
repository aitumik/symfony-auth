<?php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $password = '$2y$13$wZwO06CfeDUxunyLlooC1.sK6iD43GJX4c.Q54ceIdeNLJtd64Voy';
        $user = new User();
        $user->setPassword( $password);
        $user->setEmail("aitumik@bloggy.com");
        $manager->persist($user);
        $manager->flush();
    }
}
