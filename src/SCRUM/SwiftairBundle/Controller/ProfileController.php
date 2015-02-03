<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SCRUM\SwiftairBundle\Entity\Klanten;

class ProfileController extends Controller {
    public function indexAction(Request $request) {
        $klant = new Klanten();
        
        $form = $this->createFormBuilder($klant)
//            ->setAction($this->generateUrl('scrum_swiftair_booking')) 
            ->add('email')
            ->add('password', 'password')
            ->add('login', 'submit', array('label' => 'Login'))
            ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $from = $form['vertrek']->getData();
            $to = $form['bestemming']->getData();
            $class = $form['klasse']->getData();
            $num = $form['aantal']->getData();
            return $this->redirect($this->generateUrl('scrum_swiftair_booking', array('from' => $from, 'to' => $to, 'class' => $class, 'num' => $num)));
        }
        
        return $this->render('SCRUMSwiftairBundle:Profile:profile.html.twig', array('form' => $form->createView()));
    }
}