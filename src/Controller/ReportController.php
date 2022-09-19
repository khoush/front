<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{
      /**
     *@Route("/report" , name="app_report")
     */
  public function home()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/report.html.twig',['admins' => $admins]);  
  }
  
}
