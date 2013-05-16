<?php
 
namespace Pweb\AccueilBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\AccueilBundle\Entity\Categorie; 

class Categories extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager){

      $cat = new Categorie();
      $cat->setLibelleCat("smartphone");
      $manager->persist($cat);
      
      $cat = new Categorie();
      $cat->setLibelleCat("portable");
      $manager->persist($cat);
      
      $cat = new Categorie();
      $cat->setLibelleCat("tablette");
      $manager->persist($cat);

      $cat = new Categorie();
      $cat->setLibelleCat("accessoire");
      $manager->persist($cat);
      
      $manager->flush();

  }

  public function getOrder(){
    return 1; // the order in which fixtures will be loaded
  }

}

?>

