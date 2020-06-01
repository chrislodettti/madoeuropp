<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Vino;
use App\Entity\creditcard;
use App\Form\CreditCardType;
use App\Form\VinoType;


class VinoController extends Controller
{
    /**
     * @Route("/vino", name="infovino")
     */
    public function index(Request $request)
    {

     $vinos = $this->getDoctrine()->getRepository('App:Vino')->findAll();
        $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        $compras = $this->getDoctrine()->getRepository('App:Compra')->findAll();
        return $this->render('vino/index.html.twig',[
            
            'vinos' => $vinos, 
            'users' => $users,
            'compras' => $compras]);
    }
    
    
     /**
     * @Route("/vino/vinofi", name="infovi")
     */
    public function vinofi()
    {
        return $this->render('vino/vinofi.html.twig', [
            'controller_name' => 'VinoController',
        ]);
    }
    

    
      /**
     * @Route("/vino/cardform",name="CreditCard")
     */
        
      public function addCard (Request $request){
        $creditcards = $this->getDoctrine()->getRepository('App:creditcard')->findAll();
        $vinos = $this->getDoctrine()->getRepository('App:Vino')->findAll();
        $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        $compras = $this->getDoctrine()->getRepository('App:Compra')->findAll();
         $name='demo';
        $card=new CreditCard();
        
        //crear form
        $form = $this->createForm(CreditCardType::class,$card);
        $form->handleRequest($request);
       
        if($form->isSubmitted() && $form->isValid()){
             $card=$form->getData();
             $card->setid(rand(0,24));
            $card->setUser($this->getUser());
            //handle the entities
           // dump($card);
            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($card);
            $entityManager->flush();
            return $this->redirectToRoute('compraend');
        }
        //render the form
        return $this->render('vino/cardform.html.twig',array (
           'form' => $form->createView(),
            
            'creditcards' => $creditcards,
            'vinos' => $vinos,
            'users' => $users,
            'compras' => $compras,
            'name'=> $name
        ));

    }
      /**
     * @Route("/vino", name="vinos")
     */
    public function articulovino($id)
    {
            $vinos = $this->getDoctrine()->getRepository(Vino::class)->find($id);
         return $this->render('vino/index.html.twig',  array(
            'vinos' => $vinos,
        ));
    }
     
    /**
     * @Route("/vino",name="vinoss")
     */
    public function altvinos($name='demo'){
         //Request $request: Por la duda
        // para obtener todas los datos de vehiculos.        
        $vinoss = $this->getDoctrine()->getRepository('App:Vino')->findAll();
        $users = $this->getDoctrine()->getRepository('App:User')->findAll();
        $compras = $this->getDoctrine()->getRepository('App:Compra')->findAll();
        return $this->render('vino/index.html.twig',[
            
            'vinoss' => $vinos, 
            'users' => $users,
            'compras' => $compras, 
            'name'=> $name]);
    }
    
      /**
     * @Route("/vino/productoid", name="prodvino")
     */
    public function productid(Request $req = null)
    {

       if($req->get("vino"))
        {
           
        }
        else
        {
            $vinos = $this->getDoctrine()
                        ->getRepository(vino::class)
                        ->findBy([], [
                            'id' => 'asc'
                        ]);
        }
        return $this->render('vino/productoid.html.twig',[
            
            'vinos' => $vinos]);
    }
      /**
     * @Route("/vino/vinofi",name="Comprafin")
     */
        
      public function addCompra (Request $request){
        $card=new CreditCard();
        
       
        //crear form
        $form = $this->createForm(CreditCardType::class,$card);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            //handle the entities
           // dump($card);
            $entityManager=$this->getDoctrine()->getManager();
            $entityManager->persist($card);
            $entityManager->flush();
            return $this->redirectToRoute('homeaction');
        }
        //render the form
        return $this->render('vino/vinofi.html.twig',[
            'form'=>$form->createView()
        ]);

    }
    
     /**
     * @Route("/vino/nvino", name="newvino")
     */
   public function createVehicle(Request $request)
    {
          $vinos = $this->getDoctrine()->getRepository('App:Vino')->findAll();
            $users = $this->getDoctrine()->getRepository('App:User')->findAll();
          $compras = $this->getDoctrine()->getRepository('App:Compra')->findAll();
        $name='demo';
        
        $vino = new vino();
        $form = $this->createForm(VinoType::class, $vino);
        //$form = $this->createForm(VehicleType::class, $vehicle);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
           $vino=$form->getData();
           $vino->setid(rand(1, 24));
           $vino->setCompra_id(rand(1, 10));
            $vino->setMarca_id(rand(1, 24));   
           $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($vino);
            $entityManager->flush();
            
           /*$em = $this->getDoctrine()->getManager();
           $em->persist($vehicle);
           $em->flush();
           
           $user=$this->getUser();
           $bm = $this->getDoctrine()->getManager();
           $bm->persist($user);
           $bm->flush();*/
           
           return $this->redirectToRoute('homeaction');
       }
       //rendering form
        return $this->render('vino/nvino.html.twig', array(
            'form' => $form->createView(),
            
            'vinos' => $vinos,
            'users' => $users,
            'compras' => $compras,
            'name'=> $name
        ));
    }
       /**
     * @Route("/vino/compraend", name="compraend")
     */
    public function compraend()
    {
     
        return $this->render('vino/compraend.html.twig', [
            'controller_name' => 'VinoController',
        ]);
    }
    
    
    
}
