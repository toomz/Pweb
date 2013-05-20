<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\Security\Core\SecurityContext;
use Pweb\CompteBundle\Entity\Acheteur;
use Pweb\UserBundle\Entity\User;

class CompteController extends Controller{

	public function indexAction(){

		$logger = $this->get('my_logger');
		$logger->info('Entrée dans Compte:indexAction()');

		$em = $this->getDoctrine()->getEntityManager();
		
		$user = $this->container->get('security.context')->getToken()->getUser();
		$acheteur = $em->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user->getUsername()));
		
		return $this->render('PwebCompteBundle:Compte:index.html.twig', array('acheteur' => $acheteur));
		
	}

	public function modifAction($id){

		$logger = $this->get('my_logger');
		$logger->info('Entrée dans Compte:modifAction()');

		$entityManager = $this->getDoctrine()->getEntityManager();
		$user = $this->container->get('security.context')->getToken()->getUser();
		$acheteur = $entityManager->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user->getUsername()));
		
		$acheteur = $entityManager->getRepository('PwebCompteBundle:Acheteur')->find($id);

	    $formBuilder = $this->createFormBuilder($acheteur);
	    $formBuilder
	    	->add('username', 'text', array('read_only' => true))
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
		$acheteur = $entityManager->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user->getUsername()));

		return $this->render('PwebCompteBundle:Compte:commande.html.twig', array('acheteur' => $acheteur));

	}

	public function panierAction(){

		$entityManager = $this->getDoctrine()->getEntityManager();
		$user = $this->container->get('security.context')->getToken()->getUser();
		$acheteur = $entityManager->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user->getUsername()));

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

			return $this->render('PwebCompteBundle:Compte:panier.html.twig',array('panier' => $panier, 'acheteur' => $acheteur));

		}

		else{
      		return $this->render('PwebCompteBundle:Compte:panier.html.twig',array(
      			'panier'=>'Aucun produit dans votre panier',
      			'acheteur' => $acheteur
      		)); 
		}

	}

	public function ajoutpanierAction($id){

		$entityManager = $this->getDoctrine()->getEntityManager();
		$user = $this->container->get('security.context')->getToken()->getUser();
		$acheteur = $entityManager->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user->getUsername()));
		$produit = $entityManager->getRepository('PwebAccueilBundle:Produit')->find($id);

		//On chope la session et le tableau panier
		$session = $this->getRequest()->getSession();
		$panier = $session->get('panier');

		//Utilisé pour ajouter un produit au panier
		if($panier == null){
			$panier[] = $id;
			$session->set('panier', $panier);
			return $this->render('PwebCompteBundle:Compte:ajoutpanier.html.twig', array('panier' => 'votre produit n\'a pas été ajouté', 'acheteur' => $acheteur));
		}

		else{
			//Si le produit est déjà dans le panier, on ne l'ajoute plus
			if(!in_array($id, $panier)){
				$panier[] = $id;
				$session->set('panier', $panier);
				return $this->render('PwebCompteBundle:Compte:ajoutpanier.html.twig', array('panier' => 'votre produit n\'a pas été ajouté', 'acheteur' => $acheteur));
			}
		}

		return $this->render('PwebCompteBundle:Compte:ajoutpanier.html.twig', array('panier' => 'votre produit a été ajouté', 'acheteur' => $acheteur));

	}

	public function supelepanierAction(){

		//Pour supprimer un élément du panier
		$panier = $session->get('panier');
		unset($panier[array_search($idProduit, $panier)]);
		$session->set('panier', $panier);

	}

	public function suppanier(){

		//Pour vider le panier
		$session->remove('panier');			
		return $this->render('PwebCompteBundle:Compte:panier.html.twig');

	}

}
