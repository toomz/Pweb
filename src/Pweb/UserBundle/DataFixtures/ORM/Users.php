<?php
 
namespace Pweb\UserBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\UserBundle\Entity\User; 

class Users extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager){

      $user = new User;
      $user->setUsername('superadmin');
      $user->setPassword(sha1('pweb_AAMEE'));
      $user->setSalt('');
      $user->setRoles(array('ROLE_ADMIN'));
      $manager->persist($user);
      
      $user = new User;
      $user->setUsername('THEUILElsa67');
      $user->setPassword(sha1('THEUIL'));
      $user->setSalt('');
      $user->setRoles(array('ROLE_CLIENT'));
      $manager->persist($user);
      
      $user = new User;
      $user->setUsername('PIRRIEleonore67');
      $user->setPassword(sha1('PIRRI'));
      $user->setSalt('');
      $user->setRoles(array('ROLE_CLIENT'));
      $manager->persist($user);
      
      $manager->flush();

  }

  public function getOrder(){
    return 1; // the order in which fixtures will be loaded
  }

}

?>
