<?php

namespace SCRUM\SwiftairBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SCRUM\SwiftairBundle\Entity\Luchthavens;

/**
 * Luchthavens controller.
 *
 * @Route("/luchthavens")
 */
class LuchthavensController extends Controller
{

    /**
     * Lists all Luchthavens entities.
     *
     * @Route("/", name="luchthavens")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SCRUMSwiftairBundle:Luchthavens')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Luchthavens entity.
     *
     * @Route("/{id}", name="luchthavens_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Luchthavens')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Luchthavens entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
}
