<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class DevoteamController extends AbstractController
{
      /**
     *@Route("/devo" , name="app_devo")
     */
  public function home()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/devoteam.html.twig',['admins' => $admins]);  
  }
  
}
