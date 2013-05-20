<?php
 
namespace Pweb\AccueilBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Pweb\AccueilBundle\Entity\Produit; 
use Pweb\AccueilBundle\Entity\Categorie; 

class Produits extends AbstractFixture implements OrderedFixtureInterface{

    public function load(ObjectManager $manager){
 
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy S3");
      $prod->setDescription("Plébiscité par les utilisateurs du monde entier, le smartphone phare de Samsung revient dans une version améliorée.Le Galaxy S3 s'articule autour d'un écran Super AMOLED HD de 4,8 pouces.");
      $prod->setPrix(300);
      $prod->setPoids(132);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-s3-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-s3.png");
      $prod->setDateSortie(new \DateTime('28-05-2012'));
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
     
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Ericsson w995");
      $prod->setDescription("Deuxième photophone 8 mégapixels de la gamme Sony Ericsson, le W995 dispose également d'un lecteur vidéo d'une qualité exceptionnelle qui vous permettra notamment de regarder des séries TV, des journaux télévisés, des films ou encore consulter les dernières vidéos YouTube en Turbo 3G ou Wi-Fi.");
      $prod->setPrix(150);
      $prod->setPoids(104);
      $prod->setImageMin("/Pweb/images/sony-ericsson-w995-black-min.png");
      $prod->setImage("/Pweb/images/sony-ericsson-w995-black.png");
      $prod->setDateSortie(new \DateTime('23-04-2009'));
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "portable"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony Ericsson"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Nokia Lumia 920");
      $prod->setDescription("La nouvelle gamme Nokia Lumia 820 / 920 intègre la technologie de photographie et vidéo PureView, de nouvelles fonctionnalités de navigation et une fonction de charge sans fil sous Windows Phone 8");
      $prod->setPrix(250);
      $prod->setPoids(185);
      $prod->setImageMin("/Pweb/images/nokia-lumia-920-yellow-min.png");
      $prod->setImage("/Pweb/images/nokia-lumia-920-yellow.png");
      $prod->setDateSortie(new \DateTime('15-10-2012'));
      
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Nokia"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Ipad 5");
      $prod->setDescription("Un nouvel iPad émerge en cette fin d’année; au rang des nouveautés : un processeur plus puissant et le nouveau connecteur Lightning.");
      $prod->setPrix(500);
      $prod->setPoids(500);
      $prod->setImageMin("/Pweb/images/ipad-5-min.png");
      $prod->setImage("/Pweb/images/ipad-5.png");
      $prod->setDateSortie(new \DateTime('28-08-2013'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));

      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("HTC One");
      $prod->setDescription("Le HTC One est un smartphone 4G haut de gamme premium habillé d’une coque monobloc toute en aluminium et équipé d’un écran Full HD (1080p) de 4,7 pouces. Ce smartphone sous Android 4.1 Jelly Bean est animé par un chipset quadruple cœur Qualcomm Snapdragon 600 boosté à 1,7 GHz. et accompagné par 2 Go de mémoire vive (RAM). ");
      $prod->setPrix(300);
      $prod->setPoids(143);
      $prod->setImageMin("/Pweb/images/htc-one-min.png");
      $prod->setImage("/Pweb/images/htc-one.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "HTC"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("iPhone 4 ");
      $prod->setDescription("Près d'un an et demi après les versions 16 Go et 32 Go, c'est en version 8 Go que l'iPhone 4 est décliné. Pour le reste on retrouve exactement le même produit dont l'écran Retina d'Apple, avec la meilleure résolution jamais proposée sur un téléphone. L'écran conserve ses dimensions de 3,5 pouces mais offre désormais une résolution de 960 x 640 pixels, soit quatre fois plus de pixels que pour l'iPhone 3GS et 78 pour cent des pixels d'un iPad.");
      $prod->setPrix(400);
      $prod->setPoids(137);
      $prod->setImageMin("/Pweb/images/iphone-4-min.png");
      $prod->setImage("/Pweb/images/iphone-4.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));
     
      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
           
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("iPhone 4S");
      $prod->setDescription("À peine sorti, et l'iPhone 4S atomise déjà tous les scores de vente. Pourtant, contrairement à l'iPhone 4 qui tranchait radicalement avec ses prédécesseurs, le 4S semble plus conservateur, en dépit d'une fiche technique chatoyante.");
      $prod->setPrix(450);
      $prod->setPoids(140);
      $prod->setImageMin("/Pweb/images/iphone-4s-min.png");
      $prod->setImage("/Pweb/images/iphone-4s.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
       
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy S4");
      $prod->setDescription("Le Samsung Galaxy S4 succède au célèbre Galaxy S3 (mai 2012). Le design du smartphone ne surprendra personne. On retrouve les mêmes lignes que celles du prédécesseur dans un format fin (7,9 mm) et léger (130 grammes). Disponible en deux versions (noire et blanc glacé) au lancement, une palette de nouvelles couleurs sera proposée par la suite.");
      $prod->setPrix(650);
      $prod->setPoids(130);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-s4-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-s4.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
       
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy Note II");
      $prod->setDescription("Le Samsung Galaxy Note revient dans une version estampillée 2 ! Ce terminal à mi-chemin entre un smartphone et une tablette se distingue grâce à son écran géant de 5,5 pouces Super AMOLED HD (140,9 mm), d’une résolution de 1 280 pixels par 720 pour un rendu exceptionnel. Le rapport 16:9 de son écran permet une lecture adaptée aux vidéos et la finesse du cadre, une prise en main optimale. ");
      $prod->setPrix(530);
      $prod->setPoids(177);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-note-2-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-note-2.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
       
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy S3 Mini");
      $prod->setDescription("Le Samsung Galaxy S3 mini est la version compacte du célèbre Galaxy S3 sorti en mai 2012. Ce smartphone sous Android 4.1 (Jelly Bean) apporte les performances, l'ergonomie intuitive et le design du Galaxy S3 dans un smartphone compact doté d'un écran Super AMOLED 4.0 pouces. ");
      $prod->setPrix(270);
      $prod->setPoids(120);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-s3-mini-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-s3-mini.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
       
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy Ace");
      $prod->setDescription("Samsung lance un nouveau smartphone Android milieu de gamme. Son design fin et compact ainsi que ses nouvelles matières au niveau de la coque arrière lui confère un aspect anti-dérapant.");
      $prod->setPrix(170);
      $prod->setPoids(113);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-ace-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-ace.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
       
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy Y");
      $prod->setDescription("Le Samsung Galaxy Y est un smartphone d'entrée de gamme animé par l'OS Android 2.3 (Gingerbread) et un processeur cadencé à 832 MHz. Il intègre un écran tactile 3 pouces, un appareil photo 2 mégapixels capable d'enregistrer des séquences vidéos dans une qualité moyenne (240x320 pixels).");
      $prod->setPrix(100);
      $prod->setPoids(99);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-y-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-y.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);      
       
     /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("LG Optimus L9");
      $prod->setDescription("LG lance une nouvelle gamme de smartphones baptisée L-Style, qui s’inscrit dans la lignée des précédentes perles esthétiques signées LG, dont les modèles Chocolate, Shine ou encore Secret. Après les L3, L5 et L7, la gamme accueille le L9, le tout premier smartphone Android de cette famille à proposer un chipset double coeur. ");
      $prod->setPrix(260);
      $prod->setPoids(125);
      $prod->setImageMin("/Pweb/images/lg-optimus-l9-min.png");
      $prod->setImage("/Pweb/images/lg-optimus-l9.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "LG"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    

      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("LG Optimus L5 2");
      $prod->setDescription("LG fait évoluer sa gamme de produits Optimus L Series, qui porte l’héritage de la précédente génération en l’actualisant en terme de design et fonctionnalités. Le LG Optimus L5 II est un smartphone 3G+ milieu de gamme dont le processeur est cadencé à 1 GHz. Il dispose d'un écran tactile capacitif multipoint de 4,0 pouces HVGA (800 x 480 pixels), et d'un capteur photo 5 mégapixels avec autofocus, flash LED et la possibilité d'enregistrer des vidéos. ");
      $prod->setPrix(170);
      $prod->setPoids(110);
      $prod->setImageMin("/Pweb/images/lg-optimus-l5-2-min.png");
      $prod->setImage("/Pweb/images/lg-optimus-l5-2.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "LG"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Nokia Lumia 620");
      $prod->setDescription("Aux côtés du fer de lance que constitue le Nokia Lumia 920 et du modèle de milieu de gamme Nokia Lumia 820, le Nokia Lumia 620 présente un nouveau design compact et se décline en une gamme de coloris à double effet avec coques interchangeables. En effet, ce Windows Phone 8 utilise une nouvelle technique qui génère un double effet de couleurs, qui permet d’offrir une variété de nuances et d’effets de textures, produit par l’ajout d’une couche de revêtement polycarbonate coloré, transparent ou translucide sur la couche de base afin d’obtenir des mélanges de couleurs et des effets saisissants. Au total, ce sont pas moins de sept différentes coques interchangeables que l'utilisateur pourra choisir.");
      $prod->setPrix(200);
      $prod->setPoids(127);
      $prod->setImageMin("/Pweb/images/nokia-lumia-620-min.png");
      $prod->setImage("/Pweb/images/nokia-lumia-620.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Nokia"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Xperia U");
      $prod->setDescription("Le Sony Xperia U est le plus compact de la série. Dévoilé au MWC de Barcelone en février 2012, il est doté d’une bague transparente dont la couleur change en fonction des photos visionnées ou des albums musique en écoute. Il embarque un processeur dual-core cadencé à 1 GHz, et un écran tactile LCD LED Reality Display 3,5 pouces avec correcteur d’images mobile BRAVIA.");
      $prod->setPrix(170);
      $prod->setPoids(110);
      $prod->setImageMin("/Pweb/images/sony-xperia-u-min.png");
      $prod->setImage("/Pweb/images/sony-xperia-u.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Blackberry Curve 9320");
      $prod->setDescription("La famille BlackBerry Curve accueille un nouveau smartphone plutôt orienté sur les réseaux sociaux. Le Curve 9320 est un smartphone sous BlackBerry OS 7.1. Il prend en charge les réseaux 3G à haut débit (HSDPA) du monde entier, et est bien entendu doté du célèbre clavier AZERTY complet et d'un trackpad optique.");
      $prod->setPrix(170);
      $prod->setPoids(103);
      $prod->setImageMin("/Pweb/images/blackberry-curve-9320-min.png");
      $prod->setImage("/Pweb/images/blackberry-curve-9320.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Blackberry"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Alcatel One Touch 997 D");
      $prod->setDescription("Alcatel One Touch propose un nouveau smartphone qui intègre la technologie Dual SIM Dual Standby (DSDS) qui permet au smartphone d’avoir la capacité d’embarquer deux cartes SIM. Le One Touch 997D estampillé Android 4.0 (Ice Cream Sandwich), il est animé par un processeur double coeur cadencé à 1 GHz, et 512 de mémoire vive (RAM)");
      $prod->setPrix(220);
      $prod->setPoids(143);
      $prod->setImageMin("/Pweb/images/alcatel-one-touch-997-d-min.png");
      $prod->setImage("/Pweb/images/alcatel-one-touch-997-d.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Alcatel"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Xperia S");
      $prod->setDescription("Le Xperia S est l'un des tout premiers mobiles de Sony sous sa propre marque, après l'aventure Sony Ericsson. Le Xperia S est également le premier à intégré un chipset double coeur chez le constructeur. Il s'agit d'un Snapdragon MSM8260 cadencé à 1,5 GHz et flanqué de 1 Go de mémoire interne (RAM).");
      $prod->setPrix(350);
      $prod->setPoids(144);
      $prod->setImageMin("/Pweb/images/sony-xperia-s-min.png");
      $prod->setImage("/Pweb/images/sony-xperia-s.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("iphone 5");
      $prod->setDescription("Plus léger, plus fin, plus rapide, plus beau le nouvel iPhone redéfinit ce qu'est un smartphone haut de gamme. Il est plus fin que ses prédécesseurs avec 7,6 mm d'épaisseur, contre 9,4 mm pour les iPhone 4 et 4S. En revanche, il est également plus allongé dans la mesure où il embarque un écran Retina Display de 4 pouces, pour une résolution de 1136 x 640 pixels (326 ppp) et un ratio de 16:9.");
      $prod->setPrix(650);
      $prod->setPoids(112);
      $prod->setImageMin("/Pweb/images/iphone-5-min.png");
      $prod->setImage("/Pweb/images/iphone-5.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Xperia T");
      $prod->setDescription(" Smartphone officiel de James Bond dans le dernier opus Skyfall, Xperia T incarne le nouveau modèle emblématique de la gamme. Doté du meilleur écran de téléphone haute définition de Sony, il offre également un appareil photo et les fonctions One-touch à technologie NFC (Near Field Communications).");
      $prod->setPrix(350);
      $prod->setPoids(139);
      $prod->setImageMin("/Pweb/images/sony-xperia-t-min.png");
      $prod->setImage("/Pweb/images/sony-xperia-t.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Xperia P");
      $prod->setDescription("Le Sony Xperia P bénéficie d'un design unibody aluminium et d'un écran WhiteMagic qui permet un rendu d'image optimum même dans des conditions extérieures difficiles comme à la plage. L'écran Reality Display avec moteur Mobile BRAVIA est de type TFT anti-rayures de 4 pouces avec rétroéclairage par LED, et affiche une résolution qHD, soit 960 x 540 pixels. Le système intelligent de gestion de l’énergie ajuste la luminosité de l’écran en fonction du contexte et de l’environnement, afin de préserver au maximum l’autonomie de la batterie.");
      $prod->setPrix(270);
      $prod->setPoids(120);
      $prod->setImageMin("/Pweb/images/sony-xperia-p-min.png");
      $prod->setImage("/Pweb/images/sony-xperia-p.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("LG optimus L7");
      $prod->setDescription("LG lance une nouvelle gamme de smartphones baptisée L-Style, qui s’inscrit dans la lignée des précédentes perles esthétiques signées LG, dont les modèles Chocolate, Shine ou encore Secret. On y retrouve trois nouveaux modèles : l’Optimus L3 (Android 2.3.6) et son écran de 3,2 pouces, l’Optimus L5 (écran 4 pouces) et L7 (écran 4,3 pouces), tous deux sous Android 4.0 Ice Cream Sandwich. ");
      $prod->setPrix(210);
      $prod->setPoids(120);
      $prod->setImageMin("/Pweb/images/lg-optimus-l7-min.png");
      $prod->setImage("/Pweb/images/lg-optimus-l7.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "LG"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Caterpillar CAT B10");
      $prod->setDescription("Compact et simple d'utilisation, le CAT B10 résiste aux conditions les plus extrêmes et vous permet de rester en contact avec le reste du monde très simplement. Véritable smartphone Android, il vous permettra de tout faire et d'être connecté à internet en permanence. Waterproof et insensible à la poussière, il dispose aussi d'un appareil photo de 5 MP, du Wi-fi 802.11 b/g/n, du Bluetooth et d'une autonomie exemplaire.");
      $prod->setPrix(350);
      $prod->setPoids(201);
      $prod->setImageMin("/Pweb/images/caterpillar-cat-b10-min.png");
      $prod->setImage("/Pweb/images/caterpillar-cat-b10.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Caterpillar"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Huawei Ascend Mate");
      $prod->setDescription("Le Huawei Ascend Mate est un smartphone Android doté d'un écran HD de 6,1 pouces (soit 15,5 cm de diagonale) pour une résolution HD 720p, soit 1280 x 720 pixels. Le mobile est animé par un chipset quadruple cœur Hi-Silicon K3V2 propre à Huawei et cadencé à 1,5 GHz, sans oublier 2 Go de mémoire vive (RAM). L'ensemble tourne sous l'OS Android 4.1 Jelly Bean et la capacité de stockage atteint 4 Go, mais peut être étendue avec une carte micro SD (jusqu'à 64 Go supplémentaires).");
      $prod->setPrix(390);
      $prod->setPoids(198);
      $prod->setImageMin("/Pweb/images/huawei-ascend-mate-min.png");
      $prod->setImage("/Pweb/images/huawei-ascend-mate.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Huawei"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Acer Liquid E1");
      $prod->setDescription("Destiné aux amateurs de multimédia, le Liquid E1 est un smartphone Android animé par un processeur double coeur cadencé à la vitesse de 1 GHz et accompagné par 1 Go de mémoire vive (RAM) et 4 Go de mémoire interne, extensible par carte microSD (jusqu’à 32GB). Il est doté d'un grand écran qHD de 4,5 pouces et de deux haut-parleurs pour gérer le multimédia et les communications de façon transparente.");
      $prod->setPrix(160);
      $prod->setPoids(130);
      $prod->setImageMin("/Pweb/images/acer-liquid-e1-min.png");
      $prod->setImage("/Pweb/images/acer-liquid-e1.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "smartphone"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Acer"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
                                          
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Alcatel One Touch Tab T20");
      $prod->setDescription("Tablette tactile avec écran 7 capacitif - Processeur Cortex A8 @ 1.2GHz - Mémoire 512Mo - Stockage 2 Go - Slot MicroSD Jusqu'a 16Go - Caméra frontale 0.3Mpixels - WiFi 802.11 b/g/n - Android 4.0 Ice Cream Sandwich");
      $prod->setPrix(180);
      $prod->setPoids(739);
      $prod->setImageMin("/Pweb/images/alcatel-one-touch-tab-t20-min.png");
      $prod->setImage("/Pweb/images/alcatel-one-touch-tab-t20.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Alcatel"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Archos 80 Cobalt");
      $prod->setDescription("L’ARCHOS 80 Cobalt fonctionne avec Android™4.0, « IceCream Sandwich ». Spécialement conçu et optimisé pour les tablettes, il vous donne une expérience complète pour surfer sur le Web, pour la communication et pour profiter des applications. ");
      $prod->setPrix(150);
      $prod->setPoids(470);
      $prod->setImageMin("/Pweb/images/archos-80-cobalt-min.png");
      $prod->setImage("/Pweb/images/archos-80-cobalt.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Archos"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("HP Envy X2");
      $prod->setDescription("Le PC portable qui se change en tablette. Une autonomie incroyable. Et surtout la simplicité du tactile avec Windows 8.");
      $prod->setPrix(890);
      $prod->setPoids(890);
      $prod->setImageMin("/Pweb/images/hp-envy-x2-min.png");
      $prod->setImage("/Pweb/images/hp-envy-x2.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "HP"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy Note 10.1");
      $prod->setDescription("Samsung habille Android 4.0.4 Ice Cream Sandwich de son interface TouchWiz, qui comprend ici des services et applications exclusives, donc certaines adaptées pour l'usage au stylet ; outil d'écriture et de dessin qui comprend 1024 points de pression différents. ");
      $prod->setPrix(500);
      $prod->setPoids(587);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-note-10-1-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-note-10-1.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Galaxy Tab 2 10.1");
      $prod->setDescription("La tablette Galaxy Tab 2 10.1 accompagne la tablette de 7 pouces Galaxy Tab 2 7.0 testée précédemment. Elle représente la relève de la tablette Galaxy Tab 10.1, lancée l'été dernier et fer de lance de l'offensive de Samsung contre Apple et son iPad. ");
      $prod->setPrix(350);
      $prod->setPoids(588);
      $prod->setImageMin("/Pweb/images/samsung-galaxy-tab-2-10-1-min.png");
      $prod->setImage("/Pweb/images/samsung-galaxy-tab-2-10-1.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /*************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Acer Iconia W510");
      $prod->setDescription("La tablette Iconia W510 à tout ce qu’il faut pour faire tourner sans problème Windows 8. Que ce soit son processeur double-coeurs ou les 2 Go de Ram, la fluidité et la rapidité sont là.");
      $prod->setPrix(500);
      $prod->setPoids(580);
      $prod->setImageMin("/Pweb/images/acer-iconia-w510-min.png");
      $prod->setImage("/Pweb/images/acer-iconia-w510.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Acer"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Huawei MediaPad 10");
      $prod->setDescription("La MediaPad 10 FHD, la tablette du fabricant Huawei est commercialisée depuis février 2013 avec la version de l’OS Android 4.0 au prix constructeur de 449€ et disponible en boutique à partir de 328€ sur Amazon.fr MarketPlace. La machine est proposée avec un grand écran de 10 pouces procurant une résolution de 1920x1200 pixels, qui affiche un poids de seulement 580 g et présentant les mensurations de 257.4 x 175.9 x 8.8 mm");
      $prod->setPrix(450);
      $prod->setPoids(580);
      $prod->setImageMin("/Pweb/images/huawei-mediapad-10-min.png");
      $prod->setImage("/Pweb/images/huawei-mediapad-10.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Huawei"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Asus Transformer Book");
      $prod->setDescription("Que vous souhaitiez utiliser votre Transformer Book comme tablette multipoint équipée de Windows 8, ou comme ordinateur portable avec clavier et pavé tactile, cet ultraportable sera toujours en mesure de vous offrir des performances incroyables. Son processeur Intel® Core™ de 3ème génération prend parfaitement en charge la plateforme multitâche de Windows 8, et la technologie Intel® Turbo Boost 2.0 se chargera de donner un coup d'accélérateur si nécessaire. ");
      $prod->setPrix(500);
      $prod->setPoids(580);
      $prod->setImageMin("/Pweb/images/asus-transformer-book-min.png");
      $prod->setImage("/Pweb/images/asus-transformer-book.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Asus"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
    
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("HP Slate 7");
      $prod->setDescription("Cette petite tablette 7 pouces moyennement équipée tourne avec la version 4.1 Android, et sa principale qualité, c'est son prix !");
      $prod->setPrix(150);
      $prod->setPoids(370);
      $prod->setImageMin("/Pweb/images/hp-slate-7-min.png");
      $prod->setImage("/Pweb/images/hp-slate-7.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "HP"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("iPad mini");
      $prod->setDescription("Dès le départ, l’iPad a tout pour plaire. Il est simple, mais puissant. Fin, léger, et pourtant complet. Il peut faire à peu près tout et devenir à peu près tout. Et il est si facile à utiliser qu’on ne peut que l’adorer.");
      $prod->setPrix(340);
      $prod->setPoids(308);
      $prod->setImageMin("/Pweb/images/ipad-mini-min.png");
      $prod->setImage("/Pweb/images/ipad-mini.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Samsung Nexus 10");
      $prod->setDescription("Conçue par Google et Samsung, la Nexus 10 est une des tablettes 10 pouces les plus en vue du moment.");
      $prod->setPrix(400);
      $prod->setPoids(603);
      $prod->setImageMin("/Pweb/images/samsung-nexus-10-min.png");
      $prod->setImage("/Pweb/images/samsung-nexus-10.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Sony Xperia Tablet S");
      $prod->setDescription("Plus d'activités, de vidéos, de découvertes et de jeux grâce au nouveau Xperia™ Tablet série S conçu pour enrichir votre vie.");
      $prod->setPrix(400);
      $prod->setPoids(585);
      $prod->setImageMin("/Pweb/images/sony-xperia-tablet-s-min.png");
      $prod->setImage("/Pweb/images/sony-xperia-tablet-s.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Sony"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
  
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Dell XPS 10");
      $prod->setDescription("Sobre, sans prise de risque côté design, cette tablette Windows RT souffre non seulement des faiblesses de cet OS light de Microsoft, mais aussi de quelques approximations techniques et de défauts d'optimisation. Reste tout de même une XPS 10 dotée d'un excellent clavier physique complet en matière de connectique et assurant une belle autonomie.");
      $prod->setPrix(490);
      $prod->setPoids(635);
      $prod->setImageMin("/Pweb/images/dell-xps-10-min.png");
      $prod->setImage("/Pweb/images/dell-xps-10.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Dell"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
  
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Kindle Fire 8.9");
      $prod->setDescription("La Kindle Fire HD 8.9 de Amazon est équipée d'un processeur double-cœur, fourni par Texas Instruments, un OMAP 4470 (ARM Cortex-A9), cadencé à 1,5 GHz. Du côté du GPU, on trouve un PowerVR SGX 544 et la tablette dispose de 1 Go de RAM. La capacité de stockage se décline en 16 ou 32 Go et il n'y a pas d'extension possible via microSD. ");
      $prod->setPrix(280);
      $prod->setPoids(567);
      $prod->setImageMin("/Pweb/images/kindle-fire-8-9-min.png");
      $prod->setImage("/Pweb/images/kindle-fire-8-9.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "tablette"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Amazon"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Coque iphone 5 Moustache");
      $prod->setDescription("Protégez votre iPhone 5 avec nos coques originales");
      $prod->setPrix(20);
      $prod->setPoids(2);
      $prod->setImageMin("/Pweb/images/coque-iphone-5-moustache-min.png");
      $prod->setImage("/Pweb/images/coque-iphone-5-moustache.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
  
  
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Coque iphone 4 Pingouin");
      $prod->setDescription("Protégez votre iPhone 4 avec nos coques originales");
      $prod->setPrix(10);
      $prod->setPoids(2);
      $prod->setImageMin("/Pweb/images/coque-iphone-4-pingouin-min.png");
      $prod->setImage("/Pweb/images/coque-iphone-4-pingouin.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
  
  
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Coque iphone 4 Motif");
      $prod->setDescription("Protégez votre iPhone 4 avec nos coques originales");
      $prod->setPrix(10);
      $prod->setPoids(2);
      $prod->setImageMin("/Pweb/images/coque-iphone-4-motif-min.png");
      $prod->setImage("/Pweb/images/coque-iphone-4-motif.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
  
  
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Coque iphone 5 Bleue");
      $prod->setDescription("Protégez votre iPhone 5 avec nos coques originales");
      $prod->setPrix(8);
      $prod->setPoids(2);
      $prod->setImageMin("/Pweb/images/coque-iphone-5-bleue-min.png");
      $prod->setImage("/Pweb/images/coque-iphone-5-bleue.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Coque Samsung Galaxy S3 Superman");
      $prod->setDescription("Protégez votre Samsung Galaxy S3 avec nos coques originales");
      $prod->setPrix(15);
      $prod->setPoids(2);
      $prod->setImageMin("/Pweb/images/coque-s3-superman-min.png");
      $prod->setImage("/Pweb/images/coque-s3-superman.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Coque Samsung Galaxy S3 Verte");
      $prod->setDescription("Protégez votre Samsung Galaxy S3 avec nos coques originales");
      $prod->setPrix(8);
      $prod->setPoids(2);
      $prod->setImageMin("/Pweb/images/coque-s3-vert-min.png");
      $prod->setImage("/Pweb/images/coque-s3-vert.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Etui Samsung Galaxy s3 Bleu");
      $prod->setDescription("Protégez votre Samsung Galaxy S3 avec nos étuis chaussettes");
      $prod->setPrix(10);
      $prod->setPoids(2);
      $prod->setImageMin("/Pweb/images/etui-s3-bleu-min.png");
      $prod->setImage("/Pweb/images/etui-s3-bleu.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Etui iphone Bleu");
      $prod->setDescription("Protégez votre iphone avec nos étuis chaussettes");
      $prod->setPrix(10);
      $prod->setPoids(2);
      $prod->setImageMin("/Pweb/images/etui-iphone-bleu-min.png");
      $prod->setImage("/Pweb/images/etui-iphone-bleu.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Cable USB iphone");
      $prod->setDescription("Cable USB pour iphone et ipod");
      $prod->setPrix(5);
      $prod->setPoids(5);
      $prod->setImageMin("/Pweb/images/usb-iphone-min.png");
      $prod->setImage("/Pweb/images/usb-iphone.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Cable micro USB 1m");
      $prod->setDescription("Cable USB pour charger tous type de smartphone (sauf iphone)");
      $prod->setPrix(5);
      $prod->setPoids(5);
      $prod->setImageMin("/Pweb/images/usb-micro-min.png");
      $prod->setImage("/Pweb/images/usb-micro.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Autre"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Films protections iphone 4");
      $prod->setDescription("Films pour proteger votre iphone de rayures");
      $prod->setPrix(5);
      $prod->setPoids(1);
      $prod->setImageMin("/Pweb/images/film-iphone-4-min.png");
      $prod->setImage("/Pweb/images/film-iphone-4.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Films protections iphone 5");
      $prod->setDescription("Films pour proteger votre iphone de rayures");
      $prod->setPrix(5);
      $prod->setPoids(1);
      $prod->setImageMin("/Pweb/images/film-iphone-5-min.png");
      $prod->setImage("/Pweb/images/film-iphone-5.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Apple"));
      
      $prod->setCategorie($cat);
      $prod->setMarque($marque);
      $manager->persist($prod);    
      
      /**************************************************************/
      $prod = new Produit();
      $prod->setLibelleProd("Films protection Samsung Galaxy S3");
      $prod->setDescription("Films pour proteger votre samsung galaxy s3 de rayures");
      $prod->setPrix(5);
      $prod->setPoids(1);
      $prod->setImageMin("/Pweb/images/film-s3-min.png");
      $prod->setImage("/Pweb/images/film-s3.png");
      $prod->setDateSortie(new \DateTime('02-04-2012'));

      $cat = $manager->getRepository("PwebAccueilBundle:Categorie")->findOneBy(array('libelleCat' => "accessoire"));
      $marque = $manager->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => "Samsung"));
      
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
