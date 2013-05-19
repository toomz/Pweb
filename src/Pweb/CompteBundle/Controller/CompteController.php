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

		return $this->render('PwebCompteBundle:Compte:commande.html.twig');

	}

	public function panierAction(){

		return $this->render('PwebCompteBundle:Compte:panier.html.twig');

	}

}
