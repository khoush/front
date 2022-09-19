<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class ChatController extends AbstractController
{
      /**
     *@Route("/chat" , name="app_chat")
     */
  public function home()
  {
      $admins = ['admin1', 'admin 2','admin 3'];
    return  $this->render('admin/chat.html.twig',['admins' => $admins]);  
  }
  
}
