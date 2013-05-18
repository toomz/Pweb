<?php

// src/Iaato/UserBundle/Controller/SecurityController.php

namespace Pweb\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Pweb\CompteBundle\Entity\Acheteur;
use Pweb\UserBundle\Entity\User;
use Pweb\UserBundle\Form\UserType;

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

    $acheteur = new Acheteur();

    $formBuilder = $this->createFormBuilder($acheteur);
      $formBuilder
        ->add('nom','text', array('label' => 'Nom'))
        ->add('prenom', 'text', array('label' => 'Prénom'))
        ->add('adresse', 'text', array('label' => 'Adresse'))
        ->add('CP', 'text', array('label' => 'Code postal'))
        ->add('ville', 'text', array('label' => 'Ville'))
        ->add('email', 'email', array('label' => 'Email'))
        ->add('telephone', 'text', array('label' => 'Téléphone'));

    $form = $formBuilder->getForm();
    $request = $this->get('request');
      
        if ($request->getMethod() == 'POST'){
      
          $form->bind($request);

          if ($form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $user = new User();
            $user->setUsername($acheteur->getNom() . $acheteur->getPrenom() . substr($acheteur->getCP(), 0, 2));
            $user->setPassword(sha1($acheteur->getNom()));
            $user->setSalt('');
            $user->setRoles(array('ROLE_CLIENT'));
            $em->persist($user);
            $acheteur->setUsername($user->getUsername());

            if($em->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $acheteur->getUsername()))!=NULL)
              return $this->render('PwebUserBundle:Security:inscription.html.twig',array(
                  'form'=>$form->createView(),
                  'error'=>'Acheteur "'.$acheteur->getUsername().'" n\'a pas été ajouté  : Le nom existe déjà',
                  'success'=>''
              ));
            
            $em->persist($acheteur);
            
            $em->flush();
      
            return $this->render('PwebUserBundle:Security:inscription.html.twig',array(
              'form'=>$form->createView(),
              'success'=>'Acheteur "'.$acheteur->getUsername().'" a été ajouté. Votre mot de passe vous a été envoyé par mail',
              'error'=>''
            ));       
          } 

        }

        return $this->render('PwebUserBundle:Security:inscription.html.twig',array(
          'form'=>$form->createView(),
            'error'=>'',
            'success'=>''
        ));

  }
  
}

?>
