<?php

namespace SCRUM\SwiftairBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfileController extends Controller
{
    public function indexAction()
    {
        return $this->render('SCRUMSwiftairBundle:Profile:profile.html.twig');
    }
}
