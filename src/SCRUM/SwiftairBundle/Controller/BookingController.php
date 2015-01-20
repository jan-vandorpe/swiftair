<?php

namespace SCRUM\SwiftairBundle\Controller;

use SCRUM\SwiftairBundle\Entity\Destination;
use SCRUM\SwiftairBundle\Entity\Booking;
use SCRUM\SwiftairBundle\Entity\Passagiers;
use SCRUM\SwiftairBundle\Entity\Klanten;
use SCRUM\SwiftairBundle\Form\BookingType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookingController extends Controller {
    public function indexAction(Request $request) {
        $destination = new Destination();
        $destinationForm = $this->createFormBuilder($destination)
            ->add('vertrek')
            ->add('bestemming')
            ->getForm();
        
        $destinationForm->handleRequest($request);
        $from = $destinationForm['vertrek']->getData();
        $to = $destinationForm['bestemming']->getData();
        
        $booking = new Booking();
        $klant = new Klanten();
        $booking->getKlanten()->add($klant);
        $passagier = new Passagiers();
        $booking->getPassagiers()->add($passagier);
        
        $form = $this->createForm(new BookingType(), $booking);
        $form->handleRequest($request);
        
//        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist
//        }

        return $this->render('SCRUMSwiftairBundle:Booking:booking.html.twig', array('form' => $form->createView(), 'vertrek' => $from, 'bestemming' => $to));
    }
}
