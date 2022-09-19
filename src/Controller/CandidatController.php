<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class CandidatController extends AbstractController
{
      /**
     *@Route("/candidat" , name="app_candidat")
     */
  public function slide()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/Ajoutc.html.twig',['admins' => $admins]);  
  }
  
}
