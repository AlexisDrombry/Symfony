<?php

namespace AD\LeBtsSioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ADLeBtsSioBundle:Default:index.html.twig');
    }
    public function presentationAction()
    {
        return $this->render('ADLeBtsSioBundle:Default:presentation.html.twig');
    }
}
