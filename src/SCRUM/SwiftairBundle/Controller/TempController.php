<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TempController extends Controller
{
    public function indexAction()
    {
        return $this->render('SCRUMSwiftairBundle:Temp:index.html.twig');
    }
}
