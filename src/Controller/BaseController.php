<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
      /**
     *@Route("/bases" , name="app_base")
     */
  public function home()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/tables.html.twig',['admins' => $admins]);  
  }
  
}
