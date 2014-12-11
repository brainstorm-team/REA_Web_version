<?php

namespace MyApp\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyAppSearchBundle:Default:index.html.twig', array('name' => $name));
    }
}
