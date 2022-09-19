<?php
namespace App\Controller;
Use App\Entity\User;
Use App\Form\RegistrationType;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class RegisterController extends AbstractController
{
      /**
     *@Route("/register" , name="register")
     */
  public function inscription(Request $request , EntityManagerInterface $doctrine ):Response
  {
    $user = new User();
    $form = $this->createForm(RegistrationType::class,$user);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
        $user=$form->getData();
        
        $passworld =$encodage->hasherpassword($user, $user->getPassword());
        $user->setPassword($passworld);

        $doctrine->persist($user);
        $doctrine->flush();
        return $this->redirectToRoute('login');
    }



      return $this->render('admin/register.html.twig' , ['form' => $form -> createView()
  ]);
  }
  
}
