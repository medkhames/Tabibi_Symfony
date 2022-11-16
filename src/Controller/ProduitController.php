<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit')]
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     * @Route ("/Produit/add")
     */

    function AddProduit(Request $request){
        $produit=new Produit();
        $form=$this->createForm(ProduitType::class,$produit);
       // $form->add('Ajout',SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
           // return  $this->redirectToRoute('AfficheClass');
        }
        return $this->render('produit/index.html.twig',[
            'form'=>$form->createView(),
            'controller_name' => 'Ajout Produit'
        ]);

    }

    /**
     * @param ProduitRepository $repository
     * @return Response
     * @Route("/AfficheProduit",name="AfficheProduit")
     */
    public function AfficheProduit(ProduitRepository $repository){
        //$repo=$this->getDoctrine()->getRepository(Produit::class);
        $produit=$repository->findAll();
        return $this->render('produit/AfficheProd.html.twig',
            ['produit'=>$produit]);
    }

    /**
     * @param $id
     * @param ProduitRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("Delete/{id}",name="D")
     */
    function DeleteProduit($id,ProduitRepository $repository){
        $produit=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute('AfficheProduit');

    }

    /**
     * @param ProduitRepository $repository
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("Produit/Update/{id}",name="U")
     */
    function UpdateProduit(ProduitRepository $repository, $id,Request $request){
        $produit=$repository->find($id);
        $form=$this->createForm(ProduitType::class,$produit);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheProduit");
        }
        return $this->render('classroom/Update.html.twig',[
            'f'=>$form->createView()
        ]);

    }
}
