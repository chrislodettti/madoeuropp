<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use App\Entity\User;
use App\Form\RegisterType;

class UserController extends Controller
{
    public function __construct() {
        $this->session= new Session();
    }
    
    /**
     * @Route("/register",name="register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();        
        //rol
        $user->setRole('ROLE_USER');
        
        //crear form
        $form = $this->createForm(RegisterType::class, $user);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $password=$passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $status="User registred";
            $this->session->getFlashBag()->add("status",$status);
            
            return $this->redirectToRoute('homeaction');
        }
        // en templates user 
        return $this->render('user/regform.html.twig', array(
            'form' => $form->createView(),
        ));
         
    }
    
    /**
     * @Route("/login",name="login")
     */
    public function login(Request $request,AuthenticationUtils $authUtils){
        $error=$authUtils->getLastAuthenticationError();
        //last Username
        $lastUsername=$authUtils->getLastUsername();
        
        return $this->render('user/login.html.twig',[
            'error'=>$error,
            'last_username'=>$lastUsername
        ]);
    }
    
    public function logout(){
        $this->redirectToRoute('logout');
    }
    
    /**
     * @Route("/profile",name="profile")
     */
    public function myprofile($name='demo'){
        $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        
        return $this->render('user/profile.html.twig',[
            'users' => $users,
            'name'=> $name]);
    }
    /**
     * @Route("/profile/edituser",name="edituser")
     */
    public function editUser(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $leagues = $this->getDoctrine()->getRepository('App:User')->findAll();
            // user
           $user=$this->getUser();
        
        //crear form
        $form = $this->createForm(RegisterType::class, $user);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
 
            $password=$passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();            
            return $this->redirectToRoute('profile');
        }
        //redire form
        return $this->render('user/edituser.html.twig', array(
            'form' => $form->createView(),
            'users' => $user
        ));
         //esto de momento no funciona 
    }
    
    /**
     * @Route("/profile/deleteuser",name="deleteuser")
     */
    public function deleteUser(Request $request, TokenStorageInterface $tokenStorage)
    {
            $deleted=0;
           //this user
           $user=$this->getUser();
           //Elimina usuario
           if($user->getRole() != "ROLE_ADMIN"){
           if($deleted==0){
               $tokenStorage->setToken(null);
               
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($user);
                $entityManager->flush(); 
           }
            
    }
            return $this->redirectToRoute('homeaction');
         
    }
    
    
}