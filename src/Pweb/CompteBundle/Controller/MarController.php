<?php

namespace Pweb\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bridge\Doctrine\Form\ChoiceList\EntityChoiceList;
use Pweb\AccueilBundle\Entity\Marque;

class MarController extends Controller{

	public function indexAction(){	

    $logger = $this->get('my_logger');
    $logger->info('Entrée dans Mar:indexAction()');
		
    $em = $this->getDoctrine()->getEntityManager();
    $marque_list = $em->getRepository("PwebAccueilBundle:Marque")->findAll();
		return $this->render('PwebCompteBundle:Mar:index.html.twig', array('marque_list' => $marque_list));

	}

	public function addAction(){

    $logger = $this->get('my_logger');
    $logger->info('Entrée dans Mar:addAction()');

		$marque = new Marque();

  	$entityManager = $this->getDoctrine()->getEntityManager();

    $formBuilder = $this->createFormBuilder($marque);
  	$formBuilder
    	->add('libelleMar','text', array('label' => 'Libellé'));

  	$form = $formBuilder->getForm();
  	$request = $this->get('request');
    $logger->info('création formulaire ajout marque');
  
  	if ($request->getMethod() == 'POST'){
  
  		$form->bind($request);

  		if ($form->isValid()){
          $logger->info('formulaire valide');
      		$em = $this->getDoctrine()->getManager();
      
      		if($em->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar' => $marque->getLibelleMar()))!=NULL){
            $logger->info('ajout d une marque déjà existante');
        		return $this->render('PwebCompteBundle:Mar:add.html.twig',array(
            		'form'=>$form->createView(),
            		'error'=>'La marque "'.$marque->getLibelleMar().'" n\'a pas été ajoutée  : Le nom existe déjà',
            		'success'=>''
          		));
          }
      
      		$em->persist($marque);
      		$em->flush();

          $logger->info('ajout de la marque');
    
      		return $this->render('PwebCompteBundle:Mar:add.html.twig',array(
        		'form'=>$form->createView(),
        		'success'=>'La marque "'.$marque->getLibelleMar().'" a été ajoutée.',
        		'error'=>''
      		));       
  		}
      $logger->info('formulaire non valide');

  	}

  	return $this->render('PwebCompteBundle:Mar:add.html.twig',array(
    	'form'=>$form->createView(),
      'error'=>'',
      'success'=>''
  	));

	}

	public function removeAction(){

    $logger = $this->get('my_logger');
    $logger->info('Entrée dans Mar:removeAction()');

    $em = $this->getDoctrine()->getEntityManager();
    $marque_list = $em->getRepository("PwebAccueilBundle:Marque")->findAll();
    $stack = array();
      
    foreach($marque_list as $marque)
      $stack[$marque->getlibelleMar()] = $marque->getLibelleMar();
      
    $marque = new Marque();
    $formBuilder = $this->createFormBuilder($marque);
    $formBuilder
      ->add('libelleMar', 'choice', array(
        'choices' => $stack,
        'required' => false,'label'=>'Marques : ','multiple'=>false
      ));

    $form = $formBuilder->getForm();
    $request = $this->get('request');
    $logger->info('création formulaire suppression marque');
    
    if ($request->getMethod() == 'POST'){
      
      $form->bind($request);

      if ($form->isValid()){

        $logger->info('formulaire valide -> suppression marque');
        unset($stack[$marque->getLibelleMar()]);

        $marque = $em->getRepository("PwebAccueilBundle:Marque")->findOneBy(array('libelleMar'=>$marque->getLibelleMar()));
        $formBuilder = $this->createFormBuilder($marque);
        $formBuilder
          ->add('libelleMar', 'choice', array(
        'choices' => $stack,
        'required' => false,'label'=>'Marques : ','multiple'=>false
        ));
        
        $form = $formBuilder->getForm();
        $em->remove($marque);
        $em->flush();

        return $this->render('PwebCompteBundle:Mar:remove.html.twig',array(
          'form'=>$form->createView(),
          'success'=>'La marque "'.$marque->getLibelleMar().'" a été supprimée avec succès.',
          'error'=>''
          ));

      }

      $logger->info('formulaire non valide');
      return $this->render('PwebCompteBundle:Mar:remove.html.twig',array(
        'form'=>$form->createView(),
        'success'=>'',
        'error'=>'ERROR : something wrong happened but i don\'t know what ! '
        ));

    }

    return $this->render('PwebCompteBundle:Mar:remove.html.twig',array(
        'form'=>$form->createView(),
        'success'=>'',
        'error'=>''
    ));
    
  }

}