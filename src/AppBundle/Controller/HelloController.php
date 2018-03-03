<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends Controller
{
    /**
     * @Route("/hello")
     */
    public function helloAction()
    {
        $name = "toto";
        return $this->render('hello.html.twig', array('name' => $name));
    }
}
