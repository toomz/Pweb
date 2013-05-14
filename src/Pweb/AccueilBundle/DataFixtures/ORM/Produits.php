<?php
 
namespace Pweb\AccueilBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\AccueilBundle\Entity\Produit; 
use Pweb\AccueilBundle\Entity\Image; 
use Pweb\AccueilBundle\Entity\Categorie; 

class Produits extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager){
 
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy S3");
      $prod->setDescription("Une des dernières trouvailles de samsungs");
      $prod->setPrix(300);
      $prod->setPoids(132);
      $prod->setImage("/Pweb/images/samsung-galaxy-s3.jpg");
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
     
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Ericsson w995");
      $prod->setDescription("Une des dernières trouvailles de sony");
      $prod->setPrix(150);
      $prod->setPoids(104);
      $prod->setImage("/Pweb/images/sony-ericsson-w995.jpg");
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "portable"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony Ericsson"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Nokia Lumia 920");
      $prod->setDescription("Une des dernières trouvailles de microsoft");
      $prod->setPrix(250);
      $prod->setPoids(185);
      $prod->setImage("/Pweb/images/nokia-lumia-920-yellow.jpg");
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Nokia"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Ipad 5");
      $prod->setDescription("Une des dernières trouvailles d'Apple");
      $prod->setPrix(500);
      $prod->setPoids(500);
      $prod->setImage("/Pweb/images/ipad-5.jpg");
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setImage($image);

      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("HTC One");
      $prod->setDescription("Une des dernières trouvailles d'HTC");
      $prod->setPrix(300);
      $prod->setPoids(143);
      $prod->setImage("/Pweb/images/htc-one.jpg");

      $image = new Image();
      $image->setUrl("/Pweb/images/htc-one.jpg");
      $image->setAlt("HTC One");
      $manager->persist($image);

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "HTC"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      $manager->flush();

  }

  public function getOrder(){
    return 2; // the order in which fixtures will be loaded
  }

}

?>
