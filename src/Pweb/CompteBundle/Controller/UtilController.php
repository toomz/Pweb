<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Pweb\UserBundle\Entity\User;
use Pweb\CompteBundle\Entity\Acheteur;
use Symfony\Component\Security\Core\SecurityContext;

class UtilController extends Controller{

	public function indexAction(){

		$logger = $this->get('my_logger');
    	$logger->info('Entrée dans Util:indexAction()');
		
		$em = $this->getDoctrine()->getEntityManager();
    	$user_list = $em->getRepository("PwebUserBundle:User")->findAll();
    	
    	return $this->render('PwebCompteBundle:Util:index.html.twig',array('user_list'=>$user_list));
		
	}

	public function addAction(){

		$logger = $this->get('my_logger');
    	$logger->info('Entrée dans Util:addAction()');
		
		$user = new User();

	  	$entityManager = $this->getDoctrine()->getEntityManager();

	    $formBuilder = $this->createFormBuilder($user);
	  	$formBuilder
	    	->add('username','text', array('label' => 'Identifiant'))
	    	->add('password', 'repeated', array(
				'type' => 'password',
				'invalid_message' => 'The password fields must match.',
				'options' => array('attr' => array('class' => 'password-field')),
				'required' => true,
				'first_options'  => array('label' => 'Password'),
				'second_options' => array('label' => 'Repeat Password'),
			));

	  	$form = $formBuilder->getForm();
	  	$request = $this->get('request');
	  	$logger->info('création formulaire ajout user');
	  
	  	if ($request->getMethod() == 'POST'){
	  
	  		$form->bind($request);

	  		if ($form->isValid()){
	  			$logger->info('formulaire valide');
	      		$em = $this->getDoctrine()->getManager();
	      		
      			$user->setSalt('');
      			$user->setRoles(array('ROLE_ADMIN'));

	      		if($em->getRepository("PwebUserBundle:User")->findOneBy(array('username' => $user->getUsername()))!=NULL){
	      			$logger->info('ajout d un user deja existant');
	        		return $this->render('PwebCompteBundle:Util:add.html.twig',array(
	            		'form'=>$form->createView(),
	            		'error'=>'Utilisateur "'.$user->getUsername().'" n\'a pas été ajouté  : Le nom existe déjà',
	            		'success'=>''
	          		));
	        	}
	      
	      		$em->persist($user);
	      		$em->flush();
	    		$logger->info('ajout du user');

	      		return $this->render('PwebCompteBundle:Util:add.html.twig',array(
	        		'form'=>$form->createView(),
	        		'success'=>'Utilisateur "'.$user->getUsername().'" a été ajouté.',
	        		'error'=>''
	      		));       
	  		}
	  		$logger->info('formulaire non valide');

	  	}

	  	return $this->render('PwebCompteBundle:Util:add.html.twig',array(
	    	'form'=>$form->createView(),
	      	'error'=>'',
	      	'success'=>''
	  	));

	}

	public function removeAction(){

		$logger = $this->get('my_logger');
    	$logger->info('Entrée dans Util:removeAction()');
		
	    $em = $this->getDoctrine()->getEntityManager();
	    $user_list = $em->getRepository("PwebUserBundle:User")->findAll();
	    /**/
	    $stack = array();
	      
	    foreach($user_list as $user)
	      	$stack[$user->getUsername()] = $user->getUsername();
	      
	    $user = new User();
	    $formBuilder = $this->createFormBuilder($user);
	    $formBuilder
	      	->add('username', 'choice', array(
	        	'choices' => $stack,
	        	'required' => false,'label'=>'Utilisateurs : ','multiple'=>false
	      	));

	    $form = $formBuilder->getForm();
	    $request = $this->get('request');
	    $logger->info('création formulaire suppression user');
	    
	    if ($request->getMethod() == 'POST'){
	      
	      	$form->bind($request);

	      	if ($form->isValid()){
	      		$logger->info('formulaire valide -> suppression user');
	      		$acheteur = $em->getRepository("PwebCompteBundle:Acheteur")->findOneBy(array('username' => $user->getUsername()));
		        unset($stack[$user->getUsername()]);

		        $user = $em->getRepository("PwebUserBundle:User")->findOneBy(array('username'=>$user->getUsername()));
		        $formBuilder = $this->createFormBuilder($user);
		        $formBuilder
		          	->add('username', 'choice', array(
		        		'choices' => $stack,
		        		'required' => false,'label'=>'Utilisateurs : ','multiple'=>false
		        	));
		        
		        $form = $formBuilder->getForm();
		        $em->remove($user);
		        $em->remove($acheteur);
		        $em->flush();

		        return $this->render('PwebCompteBundle:Util:remove.html.twig',array(
		          	'form'=>$form->createView(),
		          	'success'=>'Utilisateur "'.$user->getUsername().'" a été supprimé avec succès.',
		          	'error'=>''
		        ));

	      	}

	      	$logger->info('formulaire non valide');

		    return $this->render('PwebCompteBundle:Util:remove.html.twig',array(
		    	'form'=>$form->createView(),
		        'success'=>'',
		        'error'=>'ERROR : something wrong happened but i don\'t know what ! '
		    ));

	    }

	    return $this->render('PwebCompteBundle:Util:remove.html.twig',array(
	        'form'=>$form->createView(),
	        'success'=>'',
	        'error'=>''
	    ));
	    
    }

}