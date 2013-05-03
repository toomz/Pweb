<?php
 
namespace Pweb\AccueilBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\AccueilBundle\Entity\Marque; 

class Marques extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager){

      $marque = new Marque();
      $marque->setLibelle("Samsung");
      $manager->persist($marque);
      
      $marque = new Marque();
      $marque->setLibelle("HTC");
      $manager->persist($marque);
      
      $marque = new Marque();
      $marque->setLibelle("Nokia");
      $manager->persist($marque);
      
      $marque = new Marque();
      $marque->setLibelle("Apple");
      $manager->persist($marque);
      
      $marque = new Marque();
      $marque->setLibelle("Sony Ericsson");
      $manager->persist($marque);
      
      $manager->flush();

  }

  public function getOrder(){
    return 1; // the order in which fixtures will be loaded
  }

}

?>


