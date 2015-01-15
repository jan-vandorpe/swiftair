<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SCRUM\SwiftairBundle\Entity\Capaciteiten;
use SCRUM\SwiftairBundle\Form\CapaciteitenType;

/**
 * Capaciteiten controller.
 *
 * @Route("/capaciteiten")
 */
class CapaciteitenController extends Controller
{

    /**
     * Lists all Capaciteiten entities.
     *
     * @Route("/", name="capaciteiten")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SCRUMSwiftairBundle:Capaciteiten')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Capaciteiten entity.
     *
     * @Route("/", name="capaciteiten_create")
     * @Method("POST")
     * @Template("SCRUMSwiftairBundle:Capaciteiten:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Capaciteiten();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('capaciteiten_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Capaciteiten entity.
     *
     * @param Capaciteiten $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Capaciteiten $entity)
    {
        $form = $this->createForm(new CapaciteitenType(), $entity, array(
            'action' => $this->generateUrl('capaciteiten_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Capaciteiten entity.
     *
     * @Route("/new", name="capaciteiten_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Capaciteiten();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Capaciteiten entity.
     *
     * @Route("/{id}", name="capaciteiten_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Capaciteiten')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Capaciteiten entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Capaciteiten entity.
     *
     * @Route("/{id}/edit", name="capaciteiten_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Capaciteiten')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Capaciteiten entity.');
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
    * Creates a form to edit a Capaciteiten entity.
    *
    * @param Capaciteiten $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Capaciteiten $entity)
    {
        $form = $this->createForm(new CapaciteitenType(), $entity, array(
            'action' => $this->generateUrl('capaciteiten_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Capaciteiten entity.
     *
     * @Route("/{id}", name="capaciteiten_update")
     * @Method("PUT")
     * @Template("SCRUMSwiftairBundle:Capaciteiten:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Capaciteiten')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Capaciteiten entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('capaciteiten_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Capaciteiten entity.
     *
     * @Route("/{id}", name="capaciteiten_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SCRUMSwiftairBundle:Capaciteiten')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Capaciteiten entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('capaciteiten'));
    }

    /**
     * Creates a form to delete a Capaciteiten entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('capaciteiten_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
