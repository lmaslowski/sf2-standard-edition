<?php

namespace Example1\JobBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Example1JobBundle:Default:index.html.twig', array('name' => $name));
    }
}
