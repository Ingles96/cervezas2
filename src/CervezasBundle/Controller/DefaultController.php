<?php

namespace CervezasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="cervezas")
     */
    public function cervezasAction()
    {
        return $this->render('CervezasBundle:Default:cervezas.html.twig');
    }
}
