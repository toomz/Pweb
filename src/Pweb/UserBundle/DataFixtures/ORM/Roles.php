<?php
 
namespace Pweb\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\UserBundle\Entity\Role; 

class Roles extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager){
	                          
    $userRole = new Role;
    $userRole->setNom("ROLE_ADMIN");
    $manager->persist($userRole);
    $userRole = new Role;
    $userRole->setNom("ROLE_CLIENT");
    $manager->persist($userRole);
    $manager->flush();

  }

  public function getOrder(){
    return 1; // the order in which fixtures will be loaded
  }

}

?>
