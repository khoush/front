<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
      /**
     *@Route("/admin" , name="app_admin")
     */
  public function home()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/admin.html.twig',['admins' => $admins]);  
  }
  
}
