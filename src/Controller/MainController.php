<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(): Response
    {
/*         $produit = new Produit();
        $produit->setlibelle('PC');
        $produit->setprix(1999);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($produit);
        $entityManager->flush();
        return new Response('Saved new product with id '.$produit->getId()); */
        return new Response('OK');
    }
/*     public function index()
    {
    $toto = 'Ma variable toto';
        return $this->render('main/index.html.twig', [
            'toto' => $toto,
        ]); 
    } */

    /**
     * @Route("/test", name="test")
     */
/*     public function test(): Response
    {
        $produit = new Produit();
        $produit->setlibelle('PC');
        $produit->setprix(1999);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($produit);
        $entityManager->flush();
        return new Response('Saved new product with id '.$produit->getId());
    } */
}