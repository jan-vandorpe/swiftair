<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SCRUM\SwiftairBundle\Entity\Destination;

class IndexController extends Controller {
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $landen = $em->getRepository('SCRUMSwiftairBundle:Landen')->findAll();
        
        $destination = new Destination();
        
        $form = $this->createFormBuilder($destination)
            ->setAction($this->generateUrl('scrum_swiftair_booking')) 
            ->add('vertrek', 'choice', array( 'label' => 'Vertrek:', 'choices' => $this->getChoices($landen)))
            ->add('bestemming', 'choice', array( 'label' => 'Bestemming:', 'choices' => $this->getChoices($landen)))
            ->add('save', 'submit', array('label' => 'Zoek Vlucht'))
            ->getForm();

        return $this->render('SCRUMSwiftairBundle:Index:index.html.twig', array('landen' => $landen, 'form' => $form->createView()));
    }
    
    public function getChoices($landen) {
        $choices = array();
        $choices[0] = '--- Kies Land ---';
        
        foreach ($landen as $land) { $choices[$land->getId()] = $land->getNaam(); }
        
        return $choices;
    }
}
