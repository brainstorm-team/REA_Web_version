<?php

namespace MyApp\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OffreController extends Controller {

    public function searchAction() {
        $Request = $this->get('request');
        
        $titre = $Request->get('titre');
        $type = $Request->get('type');
        $categorie = $Request->get('categorie');
        $ville = $Request->get('ville');
        $prix = $Request->get('prix');
        $surface = $Request->get('surface'); 
        
          if ($titre!=null && $type!=null && $ville != null && $prix != null && $categorie != null && $surface != null) 
            {
            $em=$this->getDoctrine()->getManager();
            $qb=$em->createQueryBuilder();
            $qb->select('o');
            $qb->from('MyAppProjetBundle:Offre','o')->where('o.titre like :titre')
                    ->setParameter('titre','%'.$titre.'%')
                    ->andwhere('o.type like :type')
                    ->setParameter('type' , '%'.$type.'%')
                    ->andwhere('o.categorie = :categorie')
                    ->setParameter('categorie',$categorie)
                    ->andwhere('o.ville  like :ville')
                    ->setParameter('ville' , '%'.$ville.'%')
                    ->andwhere('o.prix = :prix')
                    ->setParameter('prix' , $prix)
                    ->andwhere('o.surface = :surface')
                    ->setParameter('surface' , $surface);
            $offres=$qb->getQuery()->getResult();
            //var_dump($offres);
            }
        return $this->render('MyAppSearchBundle:Offre:search.html.twig', array(
                    'offres' => $offres
        ));
    }

}
