<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SCRUM\SwiftairBundle\Entity\Prijzen;
use SCRUM\SwiftairBundle\Form\PrijzenType;

/**
 * Prijzen controller.
 *
 * @Route("/prijzen")
 */
class PrijzenController extends Controller
{

    /**
     * Lists all Prijzen entities.
     *
     * @Route("/", name="prijzen")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SCRUMSwiftairBundle:Prijzen')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Prijzen entity.
     *
     * @Route("/", name="prijzen_create")
     * @Method("POST")
     * @Template("SCRUMSwiftairBundle:Prijzen:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Prijzen();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('prijzen_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Prijzen entity.
     *
     * @param Prijzen $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Prijzen $entity)
    {
        $form = $this->createForm(new PrijzenType(), $entity, array(
            'action' => $this->generateUrl('prijzen_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Prijzen entity.
     *
     * @Route("/new", name="prijzen_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Prijzen();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Prijzen entity.
     *
     * @Route("/{id}", name="prijzen_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Prijzen')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prijzen entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Prijzen entity.
     *
     * @Route("/{id}/edit", name="prijzen_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Prijzen')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prijzen entity.');
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
    * Creates a form to edit a Prijzen entity.
    *
    * @param Prijzen $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Prijzen $entity)
    {
        $form = $this->createForm(new PrijzenType(), $entity, array(
            'action' => $this->generateUrl('prijzen_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Prijzen entity.
     *
     * @Route("/{id}", name="prijzen_update")
     * @Method("PUT")
     * @Template("SCRUMSwiftairBundle:Prijzen:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Prijzen')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prijzen entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('prijzen_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Prijzen entity.
     *
     * @Route("/{id}", name="prijzen_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SCRUMSwiftairBundle:Prijzen')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Prijzen entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('prijzen'));
    }

    /**
     * Creates a form to delete a Prijzen entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('prijzen_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
