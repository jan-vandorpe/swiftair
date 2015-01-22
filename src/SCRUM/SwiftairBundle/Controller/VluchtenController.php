<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SCRUM\SwiftairBundle\Entity\Vluchten;
use SCRUM\SwiftairBundle\Form\VluchtenType;

/**
 * Vluchten controller.
 *
 * @Route("/vluchten")
 */
class VluchtenController extends Controller
{

    /**
     * Lists all Vluchten entities.
     *
     * @Route("/", name="vluchten")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SCRUMSwiftairBundle:Vluchten')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Vluchten entity.
     *
     * @Route("/", name="vluchten_create")
     * @Method("POST")
     * @Template("SCRUMSwiftairBundle:Vluchten:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Vluchten();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('vluchten_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Vluchten entity.
     *
     * @param Vluchten $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Vluchten $entity)
    {
        $form = $this->createForm(new VluchtenType(), $entity, array(
            'action' => $this->generateUrl('vluchten_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Vluchten entity.
     *
     * @Route("/new", name="vluchten_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Vluchten();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Vluchten entity.
     *
     * @Route("/{id}", name="vluchten_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Vluchten')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vluchten entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Vluchten entity.
     *
     * @Route("/{id}/edit", name="vluchten_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Vluchten')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vluchten entity.');
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
    * Creates a form to edit a Vluchten entity.
    *
    * @param Vluchten $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Vluchten $entity)
    {
        $form = $this->createForm(new VluchtenType(), $entity, array(
            'action' => $this->generateUrl('vluchten_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Vluchten entity.
     *
     * @Route("/{id}", name="vluchten_update")
     * @Method("PUT")
     * @Template("SCRUMSwiftairBundle:Vluchten:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Vluchten')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Vluchten entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('vluchten_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Vluchten entity.
     *
     * @Route("/{id}", name="vluchten_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SCRUMSwiftairBundle:Vluchten')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Vluchten entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('vluchten'));
    }

    /**
     * Creates a form to delete a Vluchten entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vluchten_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
