<?php

namespace App\DataFixtures;

use App\Entity\Course;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CourseFixtures extends Fixture implements DependentFixtureInterface
{
    public const COURSES = [
        0 => [
            'name' => 'Docker',
            'author' => 'Mohamed',
            'trailer' => '/assets/videos/Docker-intro.mp4',
            'description' => 'Docker is an open platform for developing, shipping, and running applications ,
            Docker enables you to separate your applications from your infrastructure so you can deliver software quickly. ',
            'views' => 1564,
            'category' => CategoryFixtures::CATEGORY_REFERENCE . "0",
            'ratings' => [
                RatingFixtures::RATING_REFERENCE . "0",
                RatingFixtures::RATING_REFERENCE . "2",
                RatingFixtures::RATING_REFERENCE . "3",
                RatingFixtures::RATING_REFERENCE . "4",
                RatingFixtures::RATING_REFERENCE . "5"
            ],
            'videos' => [
                VideoFixtures::VIDEO_REFERENCE . "1",
            ],
            'image' => '/assets/images/docker.png',
        ],
        1 => [
            'name' => 'Gitlab',
            'author' => 'Pierre',
            'trailer' => '/assets/videos/GitLab-intro.mp4',
            'description' => 'GitLab is a complete DevOps platform, delivered as a single application. This makes GitLab unique and creates a streamlined software workflow, 
            unlocking your organization from the constraints of a pieced together toolchain.',
            'views' => 520,
            'category' => CategoryFixtures::CATEGORY_REFERENCE . "0",
            'ratings' => [
                RatingFixtures::RATING_REFERENCE . "0",
                RatingFixtures::RATING_REFERENCE . "2",
                RatingFixtures::RATING_REFERENCE . "8",
                RatingFixtures::RATING_REFERENCE . "7",
                RatingFixtures::RATING_REFERENCE . "6"
            ],
            'videos' => [
                VideoFixtures::VIDEO_REFERENCE . "0"
            ],
            'image' => '/assets/images/gitlab.png',
        ],
        2 => [
            'name' => 'JavaScript',
            'author' => 'Alexis',
            'trailer' => 'https://www.youtube.com/watch?v=upDLs1sn7g4',
            'description' => 'JavaScript is a text-based programming language used both on the client-side and server-side that 
            allows you to make web pages interactive.',
            'views' => 52000,
            'category' => CategoryFixtures::CATEGORY_REFERENCE . "1",
            'ratings' => [
                RatingFixtures::RATING_REFERENCE . "1",
                RatingFixtures::RATING_REFERENCE . "7"
            ],
            'videos' => [
                VideoFixtures::VIDEO_REFERENCE . "1",
                VideoFixtures::VIDEO_REFERENCE . "3"
            ],
            'image' => '/assets/images/js.png',
        ],
        3 => [
            'name' => 'Wordpress',
            'author' => 'Matt',
            'trailer' => 'https://www.youtube.com/watch?v=71EZb94AS1k',
            'description' => 'WordPress is web publishing software you can use to create a beautiful website or blog. 
            It just may be the easiest and most flexible blogging and website content management system (CMS) for beginners.',
            'views' => 12,
            'category' => CategoryFixtures::CATEGORY_REFERENCE . "2",
            'ratings' => [
                RatingFixtures::RATING_REFERENCE . "0",
                RatingFixtures::RATING_REFERENCE . "2",
                RatingFixtures::RATING_REFERENCE . "6",
                RatingFixtures::RATING_REFERENCE . "1",
                RatingFixtures::RATING_REFERENCE . "0",
                RatingFixtures::RATING_REFERENCE . "3",
                RatingFixtures::RATING_REFERENCE . "4"
            ],
            'videos' => [
                VideoFixtures::VIDEO_REFERENCE . "2",
            ],
            'image' => '/assets/images/wordpress.png',
        ],

    ];

    public function load(ObjectManager $manager)
    {
        foreach (self::COURSES as $key => $data) {
            $course = (new Course())
                ->setName($data['name'])
                ->setAuthor($data['author'])
                ->setTrailer($data['trailer'])
                ->setImage($data['image'])
                ->setDescription($data['description'])
                ->setViews($data['views'])
                ->setCategorie($this->getReference($data['category']));
            foreach ($data['ratings'] as $rating) {
                $course->addRating($this->getReference($rating));
            }
            foreach ($data['videos'] as $video) {
                $course->addVideo($this->getReference($video));
            }
            $manager->persist($course);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
            UserFixtures::class,
            RatingFixtures::class
        ];
    }
}
