<?php

namespace App\DataFixtures;

use App\Entity\Link;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $link = new Link();
        $link->setTitle("Campus Virtuel TIC");
        $link->setUrl("https://cvtic.unilim.fr/");
        $link->setDescription("Site internet du CvTIC.");
        $manager->persist($link);

        $link = new Link();
        $link->setTitle("Duck Duck Go");
        $link->setUrl("https://duckduckgo.com/");
        $link->setDescription("Le moteur de recherche qui ne trace pas ses utilisateurs.");
        $manager->persist($link);

        $link = new Link();
        $link->setTitle("Framasoft");
        $link->setUrl("https://framasoft.org/");
        $link->setDescription("Un réseau dédié à la promotion du « libre » en général et du logiciel libre en particulier.");
        $manager->persist($link);

        $manager->flush();
    }
}
