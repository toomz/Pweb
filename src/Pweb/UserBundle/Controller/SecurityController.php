<?php

// src/Iaato/UserBundle/Controller/SecurityController.php

namespace Pweb\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller{

  public function loginAction(){

    // Si le visiteur est déjà identifié, on le redirige vers l'acceuil
    /*if($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')){
      return $this->redirect($this->generateUrl('pweb_accueil'));	
    }*/
   
    $request = $this->getRequest();
    $session = $request->getSession();
    
    // On verifie s'il y a des erreurs d'une précédente soumission du formulaire
    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
      $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    }else{
      $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
      $session->remove(SecurityContext::AUTHENTICATION_ERROR);
    }

    return $this->render('PwebUserBundle:Security:login.html.twig', array(
      'last_username' => $session->get(SecurityContext::LAST_USERNAME),
      'error'         => $error,
    ));

  }

  public function inscriptionAction(){

    return $this->render('PwebUserBundle:Security:inscription.html.twig');

  }
  
}

?>
