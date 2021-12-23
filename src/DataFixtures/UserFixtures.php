<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture implements DependentFixtureInterface
{
    public const USERS = [
        0 => [
            'email' => 'user_1@gmail.com',
            'firstName' => 'firstname1',
            'lastName' => 'lastname1',
            'password' => 'yu8758$@kjua'
        ],
        1 => [
            'email' => 'user_2@gmail.com',
            'firstName' => 'firstname2',
            'lastName' => 'lastname2',
            'password' => 'yu8758$@kjua'
        ],
        2 => [
            'email' => 'user_3@gmail.com',
            'firstName' => 'firstname3',
            'lastName' => 'lastname3',
            'password' => 'yu8758$@kjua'
        ],
        3 => [
            'email' => 'user_4@gmail.com',
            'firstName' => 'firstname4',
            'lastName' => 'lastname4',
            'password' => 'yu8758$@kjua'
        ],
        4 => [
            'email' => 'user_5@gmail.com',
            'firstName' => 'firstname5',
            'lastName' => 'lastname5',
            'password' => 'yu8758$@kjua'
        ],
        5 => [
            'email' => 'user_6@gmail.com',
            'firstName' => 'firstname6',
            'lastName' => 'lastname6',
            'password' => 'yu8758$@kjua'
        ],
    ];

    public const USER_REFERENCE = 'user_';

    public function load(ObjectManager $manager)
    {
        foreach (self::USERS as $key => $data) {
            $user = (new User())
                ->setEmail($data['email'])
                ->setFirstName($data['firstName'])
                ->setLastName($data['lastName'])
                ->setPassword($data['password'])
            ;
            $this->addReference(self::USER_REFERENCE.$key, $user);
            $manager->persist($user);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class
        ];
    }

}
