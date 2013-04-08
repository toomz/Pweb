<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PwebCompteBundle:Default:index.html.twig', array('name' => $name));
    }
}
