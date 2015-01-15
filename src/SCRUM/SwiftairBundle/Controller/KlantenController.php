<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SCRUM\SwiftairBundle\Entity\Klanten;
use SCRUM\SwiftairBundle\Form\KlantenType;

/**
 * Klanten controller.
 *
 * @Route("/klanten")
 */
class KlantenController extends Controller
{

    /**
     * Lists all Klanten entities.
     *
     * @Route("/", name="klanten")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SCRUMSwiftairBundle:Klanten')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Klanten entity.
     *
     * @Route("/", name="klanten_create")
     * @Method("POST")
     * @Template("SCRUMSwiftairBundle:Klanten:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Klanten();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('klanten_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Klanten entity.
     *
     * @param Klanten $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Klanten $entity)
    {
        $form = $this->createForm(new KlantenType(), $entity, array(
            'action' => $this->generateUrl('klanten_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Klanten entity.
     *
     * @Route("/new", name="klanten_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Klanten();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Klanten entity.
     *
     * @Route("/{id}", name="klanten_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Klanten')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Klanten entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Klanten entity.
     *
     * @Route("/{id}/edit", name="klanten_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Klanten')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Klanten entity.');
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
    * Creates a form to edit a Klanten entity.
    *
    * @param Klanten $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Klanten $entity)
    {
        $form = $this->createForm(new KlantenType(), $entity, array(
            'action' => $this->generateUrl('klanten_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Klanten entity.
     *
     * @Route("/{id}", name="klanten_update")
     * @Method("PUT")
     * @Template("SCRUMSwiftairBundle:Klanten:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Klanten')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Klanten entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('klanten_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Klanten entity.
     *
     * @Route("/{id}", name="klanten_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SCRUMSwiftairBundle:Klanten')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Klanten entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('klanten'));
    }

    /**
     * Creates a form to delete a Klanten entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('klanten_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
