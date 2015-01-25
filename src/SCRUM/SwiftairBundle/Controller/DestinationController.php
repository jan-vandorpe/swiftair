<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DestinationController extends Controller
{
    public function indexAction()
    {
        return $this->render('SCRUMSwiftairBundle:Destination:destination.html.twig');
    }
}
