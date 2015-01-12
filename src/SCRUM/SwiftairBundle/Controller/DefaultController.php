<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SCRUMSwiftairBundle:Default:index.html.twig', array('name' => $name));
    }
}
