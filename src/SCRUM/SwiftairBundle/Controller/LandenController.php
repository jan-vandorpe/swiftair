<?php

namespace SCRUM\SwiftairBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SCRUM\SwiftairBundle\Entity\Landen;

/**
 * Landen controller.
 *
 * @Route("/landen")
 */
class LandenController extends Controller
{

    /**
     * Lists all Landen entities.
     *
     * @Route("/", name="landen")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SCRUMSwiftairBundle:Landen')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Landen entity.
     *
     * @Route("/{id}", name="landen_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SCRUMSwiftairBundle:Landen')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Landen entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
}
