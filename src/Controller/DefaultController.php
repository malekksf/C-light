<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Course;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();

        $courses = $em->getRepository(Course::class)->findAll();
        $categories = $em->getRepository(Categorie::class)->findAll();

        return $this->render('default/index.html.twig', [
            'courses' => $courses,
            'categories' => $categories
        ]);
    }
}
