<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\Security\Core\SecurityContext;
use Pweb\CompteBundle\Entity\Acheteur;
use Pweb\AccueilBundle\Entity\Produit;
use Pweb\CompteBundle\Entity\StatutCom;
use Pweb\CompteBundle\Entity\Commande;
use Pweb\CompteBundle\Entity\CommandeProd;
use Pweb\UserBundle\Entity\User;

class CompteController extends Controller{

	public function indexAction(){

		$logger = $this->get('my_logger');
		$logger->info('Entrée dans Compte:indexAction()');

		$em = $this->getDoctrine()->getEntityManager();
		
		$user = $this->container->get('security.context')->getToken()->getUser();
		$acheteur = $em->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user));
		
		return $this->render('PwebCompteBundle:Compte:index.html.twig', array('acheteur' => $acheteur));
		
	}

	public function modifAction($id){

		$logger = $this->get('my_logger');
		$logger->info('Entrée dans Compte:modifAction()');

		$entityManager = $this->getDoctrine()->getEntityManager();
		$user = $this->container->get('security.context')->getToken()->getUser();
		$acheteur = $entityManager->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user));
		
		$acheteur = $entityManager->getRepository('PwebCompteBundle:Acheteur')->find($id);

	    $formBuilder = $this->createFormBuilder($acheteur);
	    $formBuilder
	    	->add('nom','text', array('read_only' => true))
	      	->add('prenom','text', array('read_only' => true))
	      	->add('adresse', 'text')
	      	->add('CP', 'text')
	      	->add('ville', 'text')
	      	->add('email', 'email')
	      	->add('telephone', 'text', array('label' => 'Téléphone (0+)'));
		$form = $formBuilder->getForm();
	    $request = $this->get('request');
	    $logger->info('création formulaire modification compte');
	    
		if ($request->getMethod() == 'POST'){
  
  			$form->bind($request);

  			if ($form->isValid()){
  				$logger->info('formulaire valide -> compte modifié');
      			$entityManager = $this->getDoctrine()->getManager();
	      
	      		$entityManager->persist($acheteur);
	      		$entityManager->flush();
	    
	      		return $this->render('PwebCompteBundle:Compte:modif.html.twig',array(
	        		'form'=>$form->createView(),
	        		'success'=>'Vos données ont été modifées.',
	        		'error'=>'',
	        		'acheteur' => $acheteur
	      		));       
  			}
  			$logger->info('formulaire non valide');

  		}

	  	return $this->render('PwebCompteBundle:Compte:modif.html.twig',array(
	    	'form'=>$form->createView(),
	      	'error'=>'',
	      	'success'=>'',
	      	'acheteur' => $acheteur
	  	));


	}

	public function commandeAction(){

		$entityManager = $this->getDoctrine()->getEntityManager();
		$user = $this->container->get('security.context')->getToken()->getUser();
		$acheteur = $entityManager->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user));
		
		$commande_list = $entityManager->getRepository("PwebCompteBundle:Commande")->findBy(array('acheteur' => $acheteur));

		return $this->render('PwebCompteBundle:Compte:commande.html.twig', array('commande_list' => $commande_list, 'acheteur' => $acheteur));

	}

	public function panierAction(){

		$entityManager = $this->getDoctrine()->getEntityManager();
		$user = $this->container->get('security.context')->getToken()->getUser();
		$acheteur = $entityManager->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user));

		//On chope la session et le tableau panier
		$session = $this->getRequest()->getSession();
		$panier = $session->get('panier');

		//Utilisé pour récupérer les objets du panier
		if($panier){

			$entityManager = $this->getDoctrine()->getManager();
			$liste_panier = null;

			//On parcours le panier 
			foreach($panier as $id){
				$liste_panier[$id] = $entityManager->getRepository('PwebAccueilBundle:Produit')->find($id);
			}

			return $this->render('PwebCompteBundle:Compte:panier.html.twig',array('panier' => $panier, 'acheteur' => $acheteur, 'success' => ''));

		}

		else{
      		return $this->render('PwebCompteBundle:Compte:panier.html.twig',array(
      			'success'=>'Aucun produit dans votre panier',
      			'acheteur' => $acheteur
      		)); 
		}

	}

	public function ajoutpanierAction($id){

		$entityManager = $this->getDoctrine()->getEntityManager();
		$user = $this->container->get('security.context')->getToken()->getUser();
		$acheteur = $entityManager->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user));
		$produit = $entityManager->getRepository('PwebAccueilBundle:Produit')->find($id);

		//On chope la session et le tableau panier
		$session = $this->getRequest()->getSession();
		$panier = $session->get('panier');

		//Utilisé pour ajouter un produit au panier
		//$panier[] = $id;
		if($panier == NULL){
			$panier = array();
		}
		
		$panier[] = $produit;
		$session->set('panier', $panier);
		

		return $this->render('PwebCompteBundle:Compte:panier.html.twig', array('panier' => $panier, 'acheteur' => $acheteur, 'success' => ''));

	}

	/*public function supelepanierAction(){

		//Pour supprimer un élément du panier
		$panier = $session->get('panier');
		unset($panier[array_search($idProduit, $panier)]);
		$session->set('panier', $panier);

	}*/

	public function suppanierAction(){

		$entityManager = $this->getDoctrine()->getEntityManager();
		$user = $this->container->get('security.context')->getToken()->getUser();
		$acheteur = $entityManager->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user));

		//On chope la session et le tableau panier
		$session = $this->getRequest()->getSession();
		$panier = $session->get('panier');

		//Pour vider le panier
		$session->remove('panier');			
		return $this->render('PwebCompteBundle:Compte:panier.html.twig', array('success' => 'Votre panier a été vidé', 'acheteur' => $acheteur));

	}

	public function validepanierAction(){

		$entityManager = $this->getDoctrine()->getEntityManager();
		$user = $this->container->get('security.context')->getToken()->getUser();
		$acheteur = $entityManager->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user));

		//On chope la session et le tableau panier
		$session = $this->getRequest()->getSession();
		$panier = $session->get('panier');

		//Transforme le panier en commande
		$commande = new Commande();
		$commande->setDate(new \DateTime);
		$stat = $entityManager->getRepository("PwebCompteBundle:StatutCom")->findOneBy(array('libelleStat' => "en cours"));
		$commande->setStatut($stat);
		$commande->setAcheteur($acheteur);

      	$entityManager->persist($commande);
      	$entityManager->flush();

      	foreach($panier as $id){
			$prod = $entityManager->getRepository('PwebAccueilBundle:Produit')->findOneBy(array('id' => $id));
			if(($comProdBis = $entityManager->getRepository('PwebCompteBundle:CommandeProd')->findOneBy(array('commande' => $commande, 'produit' => $prod)))!=NULL){
				$comProdBis->setQuantite($comProdBis->getQuantite() + 1);
				$entityManager->persist($comProdBis);
      		}else{
				$comProd = new CommandeProd();
      			$comProd->setCommande($commande);
      			$comProd->setQuantite(1);
				$liste_panier[$id] = $entityManager->getRepository('PwebAccueilBundle:Produit')->find($id);
			
				$comProd->setProduit($prod);	
				$entityManager->persist($comProd);
				$entityManager->flush();
			}

		}

		$session->remove('panier');
		return $this->render('PwebCompteBundle:Compte:panier.html.twig', array('success' => 'Votre commande a été validée', 'acheteur' => $acheteur));

	}

}
