<?php

namespace CervezasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CervezasController extends Controller
{
    /**
     * @Route("/", name="all")
     */
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('CervezasBundle:Cervezas');
        // find *all* cervezas
        $cervezas = $repository->findAll();
        return $this->render('CervezasBundle:Cervezas:all.html.twig',array("cervezas"=>$cervezas));
    }
}
