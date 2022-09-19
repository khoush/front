<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class EverienceController extends AbstractController
{
      /**
     *@Route("/everience" , name="app_ever")
     */
  public function home()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/everience.html.twig',['admins' => $admins]);  
  }
  
}
