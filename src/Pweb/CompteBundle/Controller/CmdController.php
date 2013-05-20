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
		
		$em = $this->getDoctrine()->getEntityManager();
    	$query = $em->createQuery('SELECT c FROM PwebCompteBundle:CommandeProd c LEFT JOIN c.commande co LEFT JOIN c.produit p LEFT JOIN co.statut s');
		$commande_list = $query->getResult();

		$statut_list = $em->getRepository("PwebCompteBundle:StatutCom")->findAll();
		return $this->render('PwebCompteBundle:Cmd:index.html.twig', array('commande_list' => $commande_list, 'statut_list' => $statut_list));

	}

	public function modifAction($id) {

		$entityManager = $this->getDoctrine()->getManager();
		$commande = $entityManager->getRepository('PwebCompteBundle:Commande')->find($id);
	    $statuts = new EntityChoiceList($entityManager,'Pweb\CompteBundle\Entity\StatutCom');

	    $formBuilder = $this->createFormBuilder($commande);
	    $formBuilder
	    	->add('id','number')
	      	->add('statut','choice',array('choice_list'=> $statuts));
		$form = $formBuilder->getForm();
	    $request = $this->get('request');
	    
		if ($request->getMethod() == 'POST'){
  
  			$form->bind($request);

  			if ($form->isValid()){
      			$em = $this->getDoctrine()->getManager();
	      
	      		$em->persist($commande);
	      		$em->flush();
	    
	      		return $this->render('PwebCompteBundle:Cmd:modif.html.twig',array(
	        		'form'=>$form->createView(),
	        		'success'=>'Le statut a été modifé.',
	        		'error'=>''
	      		));       
  			}

  		}

	  	return $this->render('PwebCompteBundle:Cmd:modif.html.twig',array(
	    	'form'=>$form->createView(),
	      	'error'=>'',
	      	'success'=>''
	  	));

	}

}
