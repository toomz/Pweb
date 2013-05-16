<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller{

	public function indexAction(){

		
		return $this->render('PwebCompteBundle:Admin:index.html.twig');
		
	}

}