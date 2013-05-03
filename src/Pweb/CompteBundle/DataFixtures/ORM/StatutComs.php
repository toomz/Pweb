<?php
 
namespace Pweb\CompteBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\CompteBundle\Entity\StatutCom; 

class StatutComs extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager){

      $stat = new StatutCom();
      $stat->setLibelle("en cours");
      $manager->persist($stat);
      
      $stat = new StatutCom();
      $stat->setLibelle("en livraison");
      $manager->persist($stat);
      
      $stat = new StatutCom();
      $stat->setLibelle("close");
      $manager->persist($stat);
      
      $manager->flush();

  }

  public function getOrder(){
    return 1; // the order in which fixtures will be loaded
  }

}

?>


