<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class CurriculumController extends AbstractController
{
      /**
     *@Route("/curriculum" , name="curriculum")
     */
  public function home()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/curriculum.html.twig',['admins' => $admins]);  
  }
  
}
