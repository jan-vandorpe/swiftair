<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SCRUM\SwiftairBundle\Entity\Card;
use SCRUM\SwiftairBundle\Form\CardType;

/**
 * Card controller.
 *
 * @Route("/card")
 */
class CardController extends Controller
{

    /**
     * Lists all Card entities.
     *
     * @Route("/", name="card")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SCRUMSwiftairBundle:Card')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Card entity.
     *
     * @Route("/", name="card_create")
     * @Method("POST")
     * @Template("SCRUMSwiftairBundle:Card:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Card();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('card_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Card entity.
     *
     * @param Card $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Card $entity)
    {
        $form = $this->createForm(new CardType(), $entity, array(
            'action' => $this->generateUrl('card_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Card entity.
     *
     * @Route("/new", name="card_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Card();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Card entity.
     *
     * @Route("/{id}", name="card_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Card')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Card entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Card entity.
     *
     * @Route("/{id}/edit", name="card_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Card')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Card entity.');
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
    * Creates a form to edit a Card entity.
    *
    * @param Card $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Card $entity)
    {
        $form = $this->createForm(new CardType(), $entity, array(
            'action' => $this->generateUrl('card_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Card entity.
     *
     * @Route("/{id}", name="card_update")
     * @Method("PUT")
     * @Template("SCRUMSwiftairBundle:Card:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Card')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Card entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('card_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Card entity.
     *
     * @Route("/{id}", name="card_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SCRUMSwiftairBundle:Card')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Card entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('card'));
    }

    /**
     * Creates a form to delete a Card entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('card_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
