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
    	$query = $em->createQuery('SELECT c.date, p.libelleProd, s.libelle FROM PwebCompteBundle:Commande p LEFT JOIN p.categorie c LEFT JOIN p.marque m');
		$produit_list = $query->getResult();
		return $this->render('PwebCompteBundle:Prod:index.html.twig', array('produit_list' => $produit_list));

	}

}