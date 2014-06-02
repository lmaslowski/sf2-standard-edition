<?php

namespace Example1\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Example1HelloBundle:Default:index.html.twig', array('name' => $name));
    }
}
