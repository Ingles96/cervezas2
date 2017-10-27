<?php

namespace CervezasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CervezasController extends Controller
{
    /**
     * @Route("/cervezas/{id}", name="all")
     */
    public function allAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('CervezasBundle:Cervezas');
        // find *all* cervezas
        $cervezas = $repository->findById($id);
        return $this->render('CervezasBundle:Default:cervezas.html.twig',array("cervezas"=>$cervezas));
    }
}
