<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Pweb\CompteBundle\Entity\Commande;
use Symfony\Component\Security\Core\SecurityContext;

class CmdController extends Controller{

	public function indexAction(){	
		
		$em = $this->getDoctrine()->getEntityManager();
    	$commande_list = $em->getRepository("PwebCompteBundle:Commande")->findAll();
    	return $this->render('PwebCompteBundle:Cmd:index.html.twig',array('commande_list'=>$commande_list));
		
	}

}