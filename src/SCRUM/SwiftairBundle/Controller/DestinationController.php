<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SCRUM\SwiftairBundle\Entity\Destination;

class DestinationController extends Controller {
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $landen = $em->getRepository('SCRUMSwiftairBundle:Landen')->findAll();
        $klasses = $em->getRepository('SCRUMSwiftairBundle:Klasses')->findAll();

        $destination = new Destination();
        
        $form = $this->createFormBuilder($destination)
            ->setAction($this->generateUrl('scrum_swiftair_booking')) 
            ->add('vertrek', 'choice', array( 'label' => 'Vertrek:', 'choices' => $this->getChoices($landen)))
            ->add('bestemming', 'choice', array( 'label' => 'Bestemming:', 'choices' => $this->getChoices($landen)))
            ->add('klasse', 'choice', array('label' => 'Klasse', 'choices' => $this->getClasses($klasses)))
            ->add('aantal', 'choice', array('label' => 'Aantal Passagiers', 'choices' => $this->getNumber()))
            ->add('save', 'submit', array('label' => 'Zoek Vlucht'))
            ->getForm();
        
        return $this->render('SCRUMSwiftairBundle:Destination:destination.html.twig', array('landen' => $landen, 'form' => $form->createView()));
    }
    
    public function getChoices($landen) {
        $choices = array();
        $choices[0] = '--- Kies Land ---';
        
        foreach ($landen as $land) { $choices[$land->getId()] = $land->getNaam(); }
        
        return $choices;
    }
    
    public function getClasses($klasses) {
        $classes = array();
        $classes[0] = '--- Kies Klasse ---';
        
        foreach ($klasses as $klasse) { $classes[$klasse->getId()] = $klasse->getNaam(); }
        
        return $classes;
    }
    
    public function getNumber() {
        $numbers = array();
        $numbers[0] = '--- Kies Aantal ---';
        
        for ($i = 1; $i <= 20; $i++) {
            $numbers[$i] = $i;
        }
        
        return $numbers;
    }
}
