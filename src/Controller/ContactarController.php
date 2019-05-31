<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Contactar;
use App\Form\ContactarType;

class ContactarController extends Controller
{
    /**
     * @Route("/contact",name="contact")
     */
    public function contact(Request $request)
    {   
        
         $cont = new Contactar();
        //crear form
        $form = $this->createForm(ContactarType::class, $cont);
       
        //envio de formulario
         $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
               $cont->getNombre("christian");
               $cont->getApellido("lodetti");
               $cont->getEmail("cristian@email.com");
               $cont->getMensaje("mensake");
               $cont->getTelefono(123456789);
                $em = $this->getDoctrine()->getManager();
                 $em->persist($cont);
              //Insertarmos en la base de datos
               $em->flush();
            
            return $this->redirectToRoute('homeaction');
        }
        
        return $this->render('contactar/regcontac.html.twig', array(
            'form' => $form->createView(),
        ));
         
    }
 public function createAction()
{
    $em = $this->getDoctrine()->getEntityManager();

    $form = $this->createForm(new RegistrationType(), new Registration());

    $form->bind($this->getRequest());

    if ($form->isValid()) {
        $registration = $form->getData();

        $em->persist($registration->getUser());
        $em->flush();

    }

    return $this->render(
        'AcmeAccountBundle:Account:register.html.twig',
        array('form' => $form->createView())
    );
}

  /**
     * @Route("/contactos",name="contactos")
     */
    public function altcontactar($name='demo'){
         //Request $request: Por la duda
        // para obtener todas los datos de contactar.
          $contactos = $this->getDoctrine()->getRepository('App:Contactar')->findAll();
         $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        
        return $this->render('admin/contactos.html.twig',[
            'users' => $users,
    'contactos' => $contactos]);
        
    }
    
}