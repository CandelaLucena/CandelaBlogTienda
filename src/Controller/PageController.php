<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ContactFormType;
use App\Entity\Image;
use App\Entity\Team;
use App\Entity\Product;

class PageController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ManagerRegistry $doctrine, Request $request): Response
    {
        $repository = $doctrine->getRepository(Image::class);
        $images = $repository->findAll();
    
        return $this->render('page/index.html.twig', array('images' => $images));
    }

    #[Route('/about', name: 'about')]
    public function about(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Team::class);
        $team = $repository->findAll();
        return $this->render('page/about.html.twig', array('team' => $team));
    }

    #[Route('/contact', name: 'contact')]
    public function contact(ManagerRegistry $doctrine, Request $request): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactFormType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contacto = $form->getData();    
            $entityManager = $doctrine->getManager();    
            $entityManager->persist($contacto);
            $entityManager->flush();
            return $this->render('page/thanks.html.twig', []);
        }
        return $this->render('page/contact.html.twig', array(
            'form' => $form->createView()    
        ));
    }

    #[Route('/services', name: 'services')]
    public function services(): Response
    {
        return $this->render('page/services.html.twig', []);
    }

    #[Route('/product', name: 'product')]
    public function product(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Product::class);
        $products = $repository->findAll();
        return $this->render('page/product.html.twig', array('products' => $products));
    }

}
