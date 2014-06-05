<?php
namespace Orm\TutorialBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OrmTutorialBundle:Default:index.html.twig', array('name' => $name));
    }
}
