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
use App\Form\UserEditType;

class PerfilController extends Controller
{
      /**
     * @Route("/perfil", name="app_perfil")
     */
    public function index()
    {

        return $this->render('perfil/index.html.twig', [
            'controller_name' => 'PerfilController',
        ]);
    }

    /**
     * @Route("/perfil/{id}/edit", name="app_perfil_cambiar")
     */
    public function cambiarPerfil(Request $request, $id)
    {
        $title="Edit";
        $post = $this->getDoctrine()->getRepository(User::class)->find($id);
        //create the form
        $form = $this->createForm(UserEditType::class, $post);
        $form->handleRequest($request);
        $error = $form->getErrors();
        if ($form->isSubmitted() && $form->isValid()) {
            //handle the entities
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($post);
            $entityManager->flush();
            $this->addFlash(
                'succes', 'Perfil edited'
            );
            return $this->redirectToRoute('app_perfil');
        }
        return $this->render('perfil/formedit.html.twig', [
            'error' => $error,
            'form' => $form->createView()
        ]);
    }

    
}