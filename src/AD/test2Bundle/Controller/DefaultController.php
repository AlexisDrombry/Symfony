<?php

namespace AD\test2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ADtest2Bundle:Default:index.html.twig');
    }
    public function index2Action()
    {
        return $this->render('ADtest2Bundle:Default:index2.html.twig');
    }
}
