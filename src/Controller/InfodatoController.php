<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InfodatoController extends Controller
{
    /**
     * @Route("/infodato", name="infodato")
     */
    public function index()
    {
        return $this->render('infodato/index.html.twig', [
            'controller_name' => 'InfodatoController',
        ]);
    }
    
      /**
     * @Route("/infodato/indexx", name="infodatox")
     */
    public function indexx()
    {
        return $this->render('infodato/indexx.html.twig', [
            'controller_name' => 'InfodatoController',
        ]);
    }

    /**
     * @Route("/infodato/vendimia", name="uva")
     */
    public function vendimia()
    {
        return $this->render('infodato/vendimia.html.twig', [
            'controller_name' => 'InfodatoController',
        ]);
    }

    /**
     * @Route("/infodato/bodega", name="almacen")
     */
    public function bodega()
    {
        return $this->render('infodato/bodega.html.twig', [
            'controller_name' => 'InfodatoController',
        ]);
    }

    /**
     * @Route("/infodato/vinoblanco", name="blanco")
     */
    public function vinoblanco()
    {
        return $this->render('infodato/vinoblanco.html.twig', [
            'controller_name' => 'InfodatoController',
        ]);
    }

    /**
     * @Route("/infodato/vinorosado", name="rosado")
     */
    public function vinorosado()
    {
        return $this->render('infodato/vinorosado.html.twig', [
            'controller_name' => 'InfodatoController',
        ]);
    }

    /**
     * @Route("/infodato/vinotinto", name="tinto")
     */
    public function vinotinto()
    {
        return $this->render('infodato/vinotinto.html.twig', [
            'controller_name' => 'InfodatoController',
        ]);
    }
    /**
     * @Route("/infodato/nosotros", name="historia")
     */
    public function nosotros()
    {
        return $this->render('infodato/nosotros.html.twig', [
            'controller_name' => 'InfodatoController',
        ]);
    }

}