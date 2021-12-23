<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const CATEGORIES = [
        "DevOps", "Web programming", "Desktop Programming", "Cloud", "Security", "Infrastructure", "Design", "Modeling"
    ];

    public const CATEGORY_REFERENCE = 'category_';

    public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORIES as $key => $data) {
            $category = (new Categorie())
                ->setName($data);
            $this->addReference(self::CATEGORY_REFERENCE.$key, $category);
            $manager->persist($category);
        }
        $manager->flush();
    }
}
