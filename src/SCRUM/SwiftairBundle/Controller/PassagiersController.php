<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SCRUM\SwiftairBundle\Entity\Passagiers;
use SCRUM\SwiftairBundle\Form\PassagiersType;

/**
 * Passagiers controller.
 *
 * @Route("/passagiers")
 */
class PassagiersController extends Controller
{

    /**
     * Lists all Passagiers entities.
     *
     * @Route("/", name="passagiers")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SCRUMSwiftairBundle:Passagiers')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Passagiers entity.
     *
     * @Route("/", name="passagiers_create")
     * @Method("POST")
     * @Template("SCRUMSwiftairBundle:Passagiers:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Passagiers();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('passagiers_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Passagiers entity.
     *
     * @param Passagiers $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Passagiers $entity)
    {
        $form = $this->createForm(new PassagiersType(), $entity, array(
            'action' => $this->generateUrl('passagiers_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Passagiers entity.
     *
     * @Route("/new", name="passagiers_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Passagiers();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Passagiers entity.
     *
     * @Route("/{id}", name="passagiers_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Passagiers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Passagiers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Passagiers entity.
     *
     * @Route("/{id}/edit", name="passagiers_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Passagiers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Passagiers entity.');
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
    * Creates a form to edit a Passagiers entity.
    *
    * @param Passagiers $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Passagiers $entity)
    {
        $form = $this->createForm(new PassagiersType(), $entity, array(
            'action' => $this->generateUrl('passagiers_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Passagiers entity.
     *
     * @Route("/{id}", name="passagiers_update")
     * @Method("PUT")
     * @Template("SCRUMSwiftairBundle:Passagiers:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Passagiers')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Passagiers entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('passagiers_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Passagiers entity.
     *
     * @Route("/{id}", name="passagiers_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SCRUMSwiftairBundle:Passagiers')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Passagiers entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('passagiers'));
    }

    /**
     * Creates a form to delete a Passagiers entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('passagiers_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
