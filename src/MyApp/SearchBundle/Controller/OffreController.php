<?php

namespace MyApp\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OffreController extends Controller {

    public function searchAction() {
        
        $em = $this->getDoctrine()->getManager();
        
        
        $Request = $this->getRequest();
        $search = $Request->get('titre');
        $offres = $em->getRepository('MyAppProjetBundle:Offre')->findBy(array("titre" => $search));
        
 
        return $this->render('MyAppSearchBundle:Offre:search.html.twig', array(
         'offres'=>$offres           
        ));
    }

}
