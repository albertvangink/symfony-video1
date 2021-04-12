<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RegistrationController extends AbstractController{
  /**
   * @Route("/")
   * @method({"GET"})
   */
  public function index() {
    //return new Response('<html><body>Hellow</body></html>');

    $registrations = ['Reg1', 'reg2', 'post3'];

    return $this->render('registrations/index.html.twig', array('registrations' => $registrations));
  }
}