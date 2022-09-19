<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
      /**
     *@Route("/login" , name="login")
     */
  public function login()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/login.html.twig',['admins' => $admins]);  
  }
  
}
