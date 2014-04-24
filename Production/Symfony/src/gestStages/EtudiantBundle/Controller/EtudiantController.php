<?php

namespace gestStages\EtudiantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use gestStages\EtudiantBundle\Entity\Section;
use gestStages\EtudiantBundle\Entity\Promo;
use gestStages\EtudiantBundle\Entity\Etudiant;
use gestStages\EtudiantBundle\Form\EtudiantType;

class EtudiantController extends Controller
{
    public function indexAction()
    {
        return $this->render('gestStagesEtudiantBundle:Etudiant:index.html.twig');
    }
	
	public function EtudiantConsulterAction()
	{
		$repository = $this->getDoctrine()
					->getManager()
					->getRepository('gestStagesEtudiantBundle:Etudiant');
		$lesEtudiants = $repository->findAll();
		
		return $this->render('gestStagesEtudiantBundle:Etudiant:ConsulterEtudiant.html.twig',array('etudiants'=>$lesEtudiants));
	}

	
	public function EtudiantRechercherAction($name)
	{
		$repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('gestStagesEtudiantBundle:Etudiant');

		$TabEtudiants = $repository->rechercherEtudiant($name);
		
		return $this->render('gestStagesEtudiantBundle:Etudiant:ConsulterEtudiant.html.twig',array('etudiants'=>$TabEtudiants));
	}
	
	public function EtudiantConnexionAction()
	{
		return new Response("Formulaire de connexion");
	}
	
	public function EtudiantModifierAction($id)
	{
		return new Response("Modification de l'étudiant ".$id."");
	}
	
	public function EtudiantAjouterAction()
	{
		$etudiant = new Etudiant ();
		$form = $this->createForm(new EtudiantType, $etudiant);
		
		/**
		***    INSTRUCTIONS DE SOUMISSION DU FORMULAIRE
		**/
		
		// 1. On récupère la requête HTTP
    	$request = $this->get('request');
   
		// 2. On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {
			// 3. On fait le lien Requête <-> Formulaire
			// À partir de maintenant, la variable $etudiant contient les valeurs entrées dans le 	formulaire par le visiteur
			$form->bind($request);
 
			// On vérifie que les valeurs entrées sont correctes
			if ($form->isValid()) {
				// On enregistre notre objet $etudiant dans la base de données
				$em = $this->getDoctrine()->getManager();
				$em->persist($etudiant);
				$em->flush();
 
				// On redirige vers la page de visualisation de l'article nouvellement créé
				return $this->redirect($this->generateUrl('Etudiant_consulter', array('id' => $etudiant->getId())));
			}
		}
 
		// À ce point là :
		// - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
		// - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
 
		return $this->render('gestStagesEtudiantBundle:Etudiant:ajouterEtudiant.html.twig', array(
		'form' => $form->createView(),
		));
	}
	
	
	public function ajouterSectionAction()
	{
		// Etape 0 – creation de l'objet Section
		$section = new Section();
		$section->setCode('SIO');
		$section->setLibelle('BTS Services Informatique aux Organisations');

		// Etape 1 On récupère l'EntityManager
		$em = $this->getDoctrine()->getManager();
 
		// Étape 2 : On « persiste » l'entité
		$em->persist($section);
   
		// Étape 3 : On « flush » tout ce qui a été persisté avant
		$em->flush();
   
		return $this->render('gestStagesEtudiantBundle:Etudiant:index.html.twig');
	}
	
	
}
