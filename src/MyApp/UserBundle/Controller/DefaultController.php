<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppUserBundle:Default:index.html.twig', array('name' => $name));
    }
    public function  loginAction(){
        return $this->render('MyAppUserBundle:Security:login.html.twig');
    }
}
