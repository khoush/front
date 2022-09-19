<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class SlideController extends AbstractController
{
      /**
     *@Route("/slide" , name="slide")
     */
  public function slide()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/slide.html.twig',['admins' => $admins]);  
  }
  
}
