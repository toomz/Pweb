<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Pweb\CompteBundle\Entity\Commande;
use Pweb\CompteBundle\Entity\StatutCom;
use Pweb\AccueilBundle\Entity\Produit;
use Symfony\Component\Security\Core\SecurityContext;

class CmdController extends Controller{

	public function indexAction(){	
		
		$em = $this->getDoctrine()->getEntityManager();
    	$query = $em->createQuery('SELECT c FROM PwebCompteBundle:Commande c LEFT JOIN c.produits p LEFT JOIN c.statut s');
		$commande_list = $query->getResult();

		$statut_list = $em->getRepository("PwebCompteBundle:StatutCom")->findAll();
		return $this->render('PwebCompteBundle:Cmd:index.html.twig', array('commande_list' => $commande_list, 'statut_list' => $statut_list));

	}

	public function modifAction() {

		/*
		$em = $this->getDoctrine()->getEntityManager();
    	$commande_list = $em->getRepository("PwebCompteBundle:Commande")->findAll();
    	$stackCom = array();
    	$statut_list = $em->getRepository("PwebCompteBundle:StatutCom")->findAll();
    	$stackStat = array();
      
	    foreach($commande_list as $commande)
	      $stack[$commande->getId()] = $commande->getId();

	    foreach($statut_list as $statut)
	      $stack[$statut->getLibelleStat()] = $statut->getLibelleStat();
	      
	    $commande = new Commande();
	    $formBuilder = $this->createFormBuilder($commande);
	    $formBuilder
	      ->add('id', 'choice', array(
	        'choices' => $stackCom,
	        'required' => false,'label'=>'Commandes : ','multiple'=>false
	      ))
	      ->add('libelleStat', 'choice', array(
	        'choices' => $stackStat,
	        'required' => false,'label'=>'Statut : ','multiple'=>false
	      ));

		$form = $formBuilder->getForm();
	    $request = $this->get('request');
	    
	    if ($request->getMethod() == 'POST'){
	      
	      	$form->bind($request);

	      	if ($form->isValid()){

		        unset($stack[$produit->getLibelleProd()]);

		        $produit = $em->getRepository("PwebAccueilBundle:Produit")->findOneBy(array('libelleProd'=>$produit->getLibelleProd()));
		        $formBuilder = $this->createFormBuilder($produit);
		        $formBuilder
		          ->add('libelleProd', 'choice', array(
		        'choices' => $stack,
		        'required' => false,'label'=>'Produits : ','multiple'=>false
		        ));
		        
		        $form = $formBuilder->getForm();
		        $em->remove($produit);
		        $em->flush();

		        return $this->render('PwebCompteBundle:Prod:remove.html.twig',array(
		          'form'=>$form->createView(),
		          'success'=>'Le produit "'.$produit->getLibelleProd().'" a été supprimé avec succès.',
		          'error'=>''
		          ));

	      	}

	      	return $this->render('PwebCompteBundle:Prod:remove.html.twig',array(
	        	'form'=>$form->createView(),
	        	'success'=>'',
	        	'error'=>'ERROR : something wrong happened but i don\'t know what ! '
	        ));

    	}

    	return $this->render('PwebCompteBundle:Prod:remove.html.twig',array(
        	'form'=>$form->createView(),
        	'success'=>'',
        	'error'=>''
    	));
		*/

		return $this->render('PwebCompteBundle:Cmd:modif.html.twig');

	}

}
