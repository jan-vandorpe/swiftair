<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SCRUM\SwiftairBundle\Entity\Credit;
use SCRUM\SwiftairBundle\Form\CreditType;

/**
 * Credit controller.
 *
 * @Route("/credit")
 */
class CreditController extends Controller
{

    /**
     * Lists all Credit entities.
     *
     * @Route("/", name="credit")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SCRUMSwiftairBundle:Credit')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Credit entity.
     *
     * @Route("/", name="credit_create")
     * @Method("POST")
     * @Template("SCRUMSwiftairBundle:Credit:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Credit();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('credit_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Credit entity.
     *
     * @param Credit $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Credit $entity)
    {
        $form = $this->createForm(new CreditType(), $entity, array(
            'action' => $this->generateUrl('credit_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Credit entity.
     *
     * @Route("/new", name="credit_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Credit();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Credit entity.
     *
     * @Route("/{id}", name="credit_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Credit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Credit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Credit entity.
     *
     * @Route("/{id}/edit", name="credit_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Credit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Credit entity.');
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
    * Creates a form to edit a Credit entity.
    *
    * @param Credit $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Credit $entity)
    {
        $form = $this->createForm(new CreditType(), $entity, array(
            'action' => $this->generateUrl('credit_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Credit entity.
     *
     * @Route("/{id}", name="credit_update")
     * @Method("PUT")
     * @Template("SCRUMSwiftairBundle:Credit:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Credit')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Credit entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('credit_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Credit entity.
     *
     * @Route("/{id}", name="credit_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SCRUMSwiftairBundle:Credit')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Credit entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('credit'));
    }

    /**
     * Creates a form to delete a Credit entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('credit_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
