<?php

namespace App\Controller;

use App\Form\ContactFormType;
use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    /**
     * @Route("/show")
     */
    public function show(Environment $twig, Request $request, EntityManagerInterface $entityManager)
    {
        $contact = new Contact();

        $form = $this->createForm(ContactFormType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($contact);
            $entityManager->flush();

            //return new Response('Contact number ' . $contact->getId() . ' created..');
            return new Response('Köszönjük szépen a kérdésedet. Válaszunkkal hamarosan keresünk a megadott e-mail címen.');
        }

        return new Response($twig->render('contact/show.html.twig', [
            'contact_form' => $form->createView()
        ]));
    }
}

