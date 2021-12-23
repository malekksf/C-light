<?php

namespace App\DataFixtures;

use App\Entity\Rating;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class RatingFixtures extends Fixture implements DependentFixtureInterface
{
    public const RATINGS = [
        [
            'rating' => 1,
            'user' => UserFixtures::USER_REFERENCE."0"
        ],
        [
            'rating' => 5,
            'user' => UserFixtures::USER_REFERENCE."0"
        ],
        [
            'rating' => 4,
            'user' => UserFixtures::USER_REFERENCE."0"
        ],
        [
            'rating' => 3,
            'user' => UserFixtures::USER_REFERENCE."1"
        ],
        [
            'rating' => 3,
            'user' => UserFixtures::USER_REFERENCE."2"
        ],
        [
            'rating' => 4,
            'user' => UserFixtures::USER_REFERENCE."3"
        ],
        [
            'rating' => 2,
            'user' => UserFixtures::USER_REFERENCE."4"
        ],
        [
            'rating' => 3,
            'user' => UserFixtures::USER_REFERENCE."5"
        ],
        [
            'rating' => 4,
            'user' => UserFixtures::USER_REFERENCE."5"
        ]
    ];

    public const RATING_REFERENCE = 'rating_';

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        foreach (self::RATINGS as $key => $data) {
            $rating = (new Rating())
                ->setRating($data['rating'])
                ->setUser($this->getReference($data['user']))
                ->setRatingdate($faker->dateTime())
            ;
            $this->addReference(self::RATING_REFERENCE.$key, $rating);
            $manager->persist($rating);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [UserFixtures::class];
    }
}
