<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class OffreController extends AbstractController
{
      /**
     *@Route("/offre" , name="app_offre")
     */
  public function offre()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/offre.html.twig',['admins' => $admins]);  
  }
  
}
