<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SCRUM\SwiftairBundle\Entity\Klasses;
use SCRUM\SwiftairBundle\Form\KlassesType;

/**
 * Klasses controller.
 *
 * @Route("/klasses")
 */
class KlassesController extends Controller
{

    /**
     * Lists all Klasses entities.
     *
     * @Route("/", name="klasses")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SCRUMSwiftairBundle:Klasses')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Klasses entity.
     *
     * @Route("/", name="klasses_create")
     * @Method("POST")
     * @Template("SCRUMSwiftairBundle:Klasses:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Klasses();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('klasses_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Klasses entity.
     *
     * @param Klasses $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Klasses $entity)
    {
        $form = $this->createForm(new KlassesType(), $entity, array(
            'action' => $this->generateUrl('klasses_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Klasses entity.
     *
     * @Route("/new", name="klasses_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Klasses();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Klasses entity.
     *
     * @Route("/{id}", name="klasses_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Klasses')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Klasses entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Klasses entity.
     *
     * @Route("/{id}/edit", name="klasses_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Klasses')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Klasses entity.');
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
    * Creates a form to edit a Klasses entity.
    *
    * @param Klasses $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Klasses $entity)
    {
        $form = $this->createForm(new KlassesType(), $entity, array(
            'action' => $this->generateUrl('klasses_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Klasses entity.
     *
     * @Route("/{id}", name="klasses_update")
     * @Method("PUT")
     * @Template("SCRUMSwiftairBundle:Klasses:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Klasses')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Klasses entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('klasses_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Klasses entity.
     *
     * @Route("/{id}", name="klasses_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SCRUMSwiftairBundle:Klasses')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Klasses entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('klasses'));
    }

    /**
     * Creates a form to delete a Klasses entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('klasses_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
