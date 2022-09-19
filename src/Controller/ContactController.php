<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
      /**
     *@Route("/contact" , name="app_contact")
     */
  public function home()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/contact.html.twig',['admins' => $admins]);  
  }
  
}
