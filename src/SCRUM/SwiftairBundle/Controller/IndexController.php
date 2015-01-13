<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('SCRUMSwiftairBundle:Index:index.html.twig');
    }
}
