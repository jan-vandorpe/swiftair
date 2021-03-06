<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SCRUM\SwiftairBundle\Entity\Bestellingen;
use SCRUM\SwiftairBundle\Form\BestellingenType;

use SCRUM\SwiftairBundle\Entity\Tickets;
use SCRUM\SwiftairBundle\Entity\Passagiers;
use SCRUM\SwiftairBundle\Entity\Klanten;
use SCRUM\SwiftairBundle\Entity\Card;
use SCRUM\SwiftairBundle\Entity\Klasses;

/**
 * Bestellingen controller.
 *
 * @Route("/bestellingen")
 */
class BestellingenController extends Controller
{
    /**
     * Lists all Bestellingen entities.
     *
     * @Route("/", name="bestellingen")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SCRUMSwiftairBundle:Bestellingen')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    
    /**
     * Creates a new Bestellingen entity.
     *
     * @Route("/", name="bestellingen_create")
     * @Method("POST")
     * @Template("SCRUMSwiftairBundle:Bestellingen:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Bestellingen();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bestellingen_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Bestellingen entity.
     *
     * @param Bestellingen $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Bestellingen $entity)
    {
        $form = $this->createForm(new BestellingenType(), $entity, array(
            'action' => $this->generateUrl('bestellingen_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Bestellingen entity.
     *
     * @Route("/new", name="bestellingen_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Bestellingen();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Bestellingen entity.
     *
     * @Route("/{id}", name="bestellingen_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Bestellingen')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bestellingen entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Bestellingen entity.
     *
     * @Route("/{id}/edit", name="bestellingen_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Bestellingen')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bestellingen entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Bestellingen entity.
    *
    * @param Bestellingen $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Bestellingen $entity)
    {
        $form = $this->createForm(new BestellingenType(), $entity, array(
            'action' => $this->generateUrl('bestellingen_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    
    /**
     * Edits an existing Bestellingen entity.
     *
     * @Route("/{id}", name="bestellingen_update")
     * @Method("PUT")
     * @Template("SCRUMSwiftairBundle:Bestellingen:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Bestellingen')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bestellingen entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('bestellingen_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    
    /**
     * Deletes a Bestellingen entity.
     *
     * @Route("/{id}", name="bestellingen_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SCRUMSwiftairBundle:Bestellingen')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bestellingen entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('bestellingen'));
    }

    /**
     * Creates a form to delete a Bestellingen entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bestellingen_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    public function bookingAction(Request $request ,$from, $to, $class, $num) {
        $em = $this->getDoctrine()->getManager();
        $klasse = $em->getRepository('SCRUMSwiftairBundle:Klasses')->find($class);
        
        $booking = new Bestellingen();
        $klant = new Klanten();
        $booking->getKlanten()->add($klant);
        $krediet = new Card();
        $booking->getKrediet()->add($krediet);
        for ($i = 0; $i < $num; $i++) {
            $passagier = new Passagiers();
            $booking->getPassagiers()->add($passagier);
        }
        
        $form = $this->createForm(new BestellingenType(), $booking);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $klant = $booking->getKlanten()[0];
            $klant->setPassword(123456);
            $em->persist($klant);
            $em->flush();
            $booking->setKlantid($klant);
            $em->persist($booking);
            $em->flush();
            
            foreach ($booking->getPassagiers() as $passagier) {
                $em->persist($passagier);
                $em->flush();
                $bagage = $passagier->getBagage();
                $verzekering = $passagier->getVerzekering();
                
                $ticket = new Tickets();
                $ticket->setBestellingid($booking);
                $ticket->setPassagierid($passagier);
                $ticket->setKlasseid($klasse);
                $ticket->setVerzekering($bagage);
                $ticket->setBagage($verzekering);
                $ticket->setPrijs(100);
                $ticket->setAnnulatie(false);
                $em->persist($ticket);
            }
            
            $em->flush();
            return $this->redirect($this->generateUrl('scrum_swiftair_profile'));
        }

        return $this->render('SCRUMSwiftairBundle:Bestellingen:booking.html.twig', array('form' => $form->createView(), 'vertrek' => $from, 'bestemming' => $to, 'aantal' => $num, 'klasse' => $klasse));
    }
    
    public function bookingsAction() {
        $em = $this->getDoctrine()->getManager();
        $klantid = 1;
        $bestellingen = $em->getRepository('SCRUMSwiftairBundle:Bestellingen')->findAll();
        $betret = array();
        foreach ($bestellingen as $bestelling) {
            array_push($betret, $bestelling);
        }
        
        return $this->render('SCRUMSwiftairBundle:Bestellingen:bookings.html.twig', array('bestellingen' => $betret));
    }
}
