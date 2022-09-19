<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class ProjetController extends AbstractController
{
      /**
     *@Route("/projet" , name="app_proj")
     */
  public function home()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/ajoutp.html.twig',['admins' => $admins]);  
  }
  
}
