<?php

namespace App\DataFixtures;

use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class VideoFixtures extends Fixture
{
    public const VIDEOS = [
        [
            'name' => 'intro',
            'url' => 'https://youtube.com/vid1'
        ],
        [
            'name' => 'about',
            'url' => 'https://youtube.com/vid2'
        ],
        [
            'name' => 'explanation',
            'url' => 'https://youtube.com/vid3'
        ],
        [
            'name' => 'conclusion',
            'url' => 'https://youtube.com/vid4'
        ]
    ];

    public const VIDEO_REFERENCE = 'video_';


    public function load(ObjectManager $manager)
    {
        foreach (self::VIDEOS as $key => $data) {
            $video = (new Video())
                ->setName($data['name'])
                ->setUrl($data['url'])
            ;
            $this->addReference(self::VIDEO_REFERENCE.$key, $video);
            $manager->persist($video);
        }
        $manager->flush();
    }
}
