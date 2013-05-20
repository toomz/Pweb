<?php
 
namespace Pweb\CompteBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\CompteBundle\Entity\Acheteur;
use Pweb\UserBundle\Entity\User; 

class Acheteurs extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager){
 
      /**************************************************************/
      /**************************************************************/
      $acheteur = new Acheteur();
      
      $acheteur->setNom('THEUIL');
      $acheteur->setPrenom('Elsa');
      $acheteur->setAdresse('10 rue jean Henri Schnitzler');
      $acheteur->setCP('67000');
      $acheteur->setVille('Strasbourg');
      $acheteur->setEmail('elsa.theuil@gmail.com');
      $acheteur->setTelephone('0619942312');

      $username = $manager->getRepository("PwebUserBundle:User")->findOneBy(array('username' => "THEUILElsa67"));     
      $acheteur->setUsername($username);

      $manager->persist($acheteur);
      
      /**************************************************************/
      /**************************************************************/

      $acheteur = new Acheteur();
      
      $acheteur->setNom('PIRRI');
      $acheteur->setPrenom('Eleonore');
      $acheteur->setAdresse('rue');
      $acheteur->setCP('67400');
      $acheteur->setVille('Illkirch');
      $acheteur->setEmail('eleonore.pirri@gmail.com');
      $acheteur->setTelephone('06');

      $username = $manager->getRepository("PwebUserBundle:User")->findOneBy(array('username' => "PIRRIEleonore67"));     
      $acheteur->setUsername($username);

      $manager->persist($acheteur);

      
      $manager->flush();

  }

  public function getOrder(){
    return 3; // the order in which fixtures will be loaded
  }

}

?>

