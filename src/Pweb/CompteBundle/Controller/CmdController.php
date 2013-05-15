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

}