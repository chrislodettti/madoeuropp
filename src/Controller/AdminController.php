<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Form\RegisterType;
use App\Form\VehicleAdminType;
use App\Form\VehicleTypeType;
use App\Form\ContactarType;

class AdminController extends Controller
{
    /**
     * @Route("/adminpanel",name="adminpanel")
     */
    public function admin(){
        $vehicles = $this->getDoctrine()->getRepository('App:Vehicle')->findAll();
        
        return $this->render('admin/panel.html.twig', array(
            'vehicles' => $vehicles
        ));
    }
    /**
     * @Route("/adminpanel/users",name="adminusers")
     */
    public function adminUsers(){
        $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        $vehicles = $this->getDoctrine()->getRepository('App:Vehicle')->findAll();
        $compras = $this->getDoctrine()->getRepository('App:Compra')->findAll();
        
        return $this->render('admin/users.html.twig',[
            'users' => $users,
            'vehicles' => $vehicles,
            'compras' => $compras]);
    }
    /**
     * @Route("/adminpanel/vehicles",name="adminvehicles")
     */
    public function adminVehicle(){
        $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        $vehicles = $this->getDoctrine()->getRepository('App:Vehicle')->findAll();
        $compras = $this->getDoctrine()->getRepository('App:Compra')->findAll();
        
        return $this->render('admin/vehicles.html.twig',[
            'users' => $users,
            'vehicles' => $vehicles,
            'compras' => $compras]);
    }
    
        /**
     * @Route("/adminpanel/contactos",name="admincontactos")
     */
        public function adminContacto(){
        $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        $contactos = $this->getDoctrine()->getRepository('App:Contactar')->findAll();

        
        return $this->render('admin/contactos.html.twig',[
            'users' => $users,
            'contactos' => $contactos]);
    }
    
    
    public function adminCompras(){
 $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        $vehicles = $this->getDoctrine()->getRepository('App:Vehicle')->findAll();
        $compras = $this->getDoctrine()->getRepository('App:Compra')->findAll();
        
        return $this->render('admin/compra.html.twig',[
            'users' => $users,
            'vehicles' => $vehicles,
            'compras' => $compras]);
    }
    /**
     * @Route("/adminpanel/{thisid}/edituser",name="adminedituser")
     */
    public function editUser(Request $request, UserPasswordEncoderInterface $passwordEncoder, $thisid)
    {
        $le = $this->getDoctrine()->getRepository('App:Compra')->findAll();
        $user=$this->getUser();
        if($user->getRole()=="ROLE_ADMIN"){
                $repository = $this->getDoctrine()->getRepository('App:User');
                $thisuser = $repository->findOneBy(['id' => $thisid]);
                if($thisuser->getRole()!="ROLE_ADMIN")
                {

                $form = $this->createForm(RegisterType::class, $thisuser);

                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                    $password=$passwordEncoder->encodePassword($thisuser, $thisuser->getPassword());
                    $thisuser->setPassword($password);
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($thisuser);
                    $entityManager->flush();            
                    return $this->redirectToRoute('adminusers');
                }
                //nos vamos 
                return $this->render('admin/edituser.html.twig', array(
                    'form' => $form->createView(),
                    'le' => $le
                ));
            }
        }

    }
    /**
     * @Route("/adminpanel/{thisid}/deleteuser",name="admindeleteuser")
     */
    public function deleteUser(Request $request, $thisid)
    {
           $deleted=0;
           // usuario
           $user=$this->getUser();
           if($user->getRole()=="ROLE_ADMIN"){
           $repository = $this->getDoctrine()->getRepository('App:User');
           $thisuser = $repository->findOneBy(['id' => $thisid]);
           if($thisuser->getRole() != "ROLE_ADMIN"){
             $flag=0;
               $users = $this->getDoctrine()->getRepository('App:User')->findAll();
           }
           if($deleted==0){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($thisuser);
                $entityManager->flush(); 
            
    }
    }
            return $this->adminUsers();
         
    }
    
      /**
     * @Route("/adminpanel/{thisid}/editvehicle",name="admineditvehicle")
     */
    public function editvehicle(Request $request, $thisid)
    {
        $vehicles = $this->getDoctrine()->getRepository('App:Vehicle')->findAll();
         $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        $compras = $this->getDoctrine()->getRepository('App:Compra')->findAll();
        $user=$this->getUser();
        if($user->getRole()=="ROLE_ADMIN"){
            //this user
                $repository = $this->getDoctrine()->getRepository('App:User');
                $thisuser = $repository->findOneBy(['id' => $thisid]);
                if($thisuser->getRole()!="ROLE_ADMIN")
                {

                $form = $this->createForm(VehicleType::class, $thisuser);

                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                    $password=$passwordEncoder->encodePassword($thisuser, $thisuser->getPassword());
                    $thisuser->setPassword($password);
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($thisuser);
                    $entityManager->flush();            
                    return $this->redirectToRoute('adminusers');
                }
                //rendering form
                return $this->render('admin/editvehicles.html.twig', array(
                    'form' => $form->createView(),
                    'le' => $le
                ));
            }
        }

    }//EDIT Vehiculo
    
      /**
     * @Route("/adminpanel/{thisid}/deletevehicle",name="admindeletevehicle")
     */
    public function deletevehicle(Request $request, $thisid)
    {
           $deleted=0;
           //this user
           $user=$this->getUser();
           if($user->getRole()=="ROLE_ADMIN"){
           $vehicles = $this->getDoctrine()->getRepository('App:Vehicle');
           $repository = $this->getDoctrine()->getRepository('App:User');
        $compras = $this->getDoctrine()->getRepository('App:Compra');
        
           $thisvehicle = $repository->findOneBy(['id' => $thisid]);
           $vehicles = $repository->getId("id");

           if($deleted==0){
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($thisvehicle);
                $entityManager->flush(); 
            
    }
    }
            return $this->adminUsers();
         
    }
    
    /**
    * @return string
    */
    private function generateUniqueFileName()
    {
    return md5(uniqid());
    }
  
    
}

