<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Bridge\Doctrine\Form\ChoiceList\EntityChoiceList;
use Pweb\CompteBundle\Entity\Commande;
use Pweb\CompteBundle\Entity\CommandeProd;
use Pweb\CompteBundle\Entity\StatutCom;
use Pweb\AccueilBundle\Entity\Produit;
use Symfony\Component\Security\Core\SecurityContext;

class CmdController extends Controller{

	public function indexAction(){	

		$logger = $this->get('my_logger');
		$logger->info('Entrée dans Cmd:indexAction()');
		
		$em = $this->getDoctrine()->getEntityManager();
    	//$query = $em->createQuery('SELECT c FROM PwebCompteBundle:CommandeProd c LEFT JOIN c.commande co LEFT JOIN c.produit p LEFT JOIN co.statut s');
		$commande_list = $em->getRepository("PwebCompteBundle:Commande")->findAll();
		$statut_list = $em->getRepository("PwebCompteBundle:StatutCom")->findAll();
		$acheteur_list = $em->getRepository("PwebCompteBundle:Acheteur")->findAll();

		return $this->render('PwebCompteBundle:Cmd:index.html.twig', array('acheteur_list' => $acheteur_list, 'commande_list' => $commande_list, 'statut_list' => $statut_list));

	}

	public function modifAction($id) {

		$logger = $this->get('my_logger');
		$logger->info('Entrée dans Cmd:modifAction()');

		$entityManager = $this->getDoctrine()->getManager();
		$commande = $entityManager->getRepository('PwebCompteBundle:Commande')->find($id);
	    $statuts = new EntityChoiceList($entityManager,'Pweb\CompteBundle\Entity\StatutCom');

	    $formBuilder = $this->createFormBuilder($commande);
	    $formBuilder
	    	->add('id','number')
	      	->add('statut','choice',array('choice_list'=> $statuts));
		$form = $formBuilder->getForm();
	    $request = $this->get('request');
	    $logger->info('création formulaire modification statut commande');
	    
		if ($request->getMethod() == 'POST'){
  
  			$form->bind($request);

  			if ($form->isValid()){
  				$logger->info('formulaire valide -> statut modifié');
      			$em = $this->getDoctrine()->getManager();
	      
	      		$em->persist($commande);
	      		$em->flush();
	    
	      		return $this->render('PwebCompteBundle:Cmd:modif.html.twig',array(
	        		'form'=>$form->createView(),
	        		'success'=>'Le statut a été modifé.',
	        		'error'=>''
	      		));       
  			}
  			$logger->info('formulaire non valide');

  		}

	  	return $this->render('PwebCompteBundle:Cmd:modif.html.twig',array(
	    	'form'=>$form->createView(),
	      	'error'=>'',
	      	'success'=>''
	  	));

	}

}
