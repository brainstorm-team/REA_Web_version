<?php

namespace MyApp\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjetController extends Controller  {

    public function affichageAction()
    {
        return $this->render('MyAppProjetBundle::layout.html.twig', array());
    }
    public function ContactAction() {
        
                return $this->render('MyAppProjetBundle:Agence:Contact.html.twig', array());

    }
    
}
