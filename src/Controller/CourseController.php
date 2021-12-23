<?php

namespace App\Controller;

use App\Entity\Course;
use App\Entity\Video;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
    /**
     * @Route("/courses/{id}", name="single_course")
     */
    public function index(Course $course): Response
    {
        $em = $this->getDoctrine()->getManager();

        $video = $em->getRepository(Video::class)->findAll();

        return $this->render('course/index.html.twig', [
            'course' => $course,
            'videos' => $video
        ]);
    }
}

class ProductController extends AbstractController
{
    /**
     * @Route("/product/liste", name="product_list")
     */
    public function index(Product $product): Response
    {
        $p = $this->getDoctrine()->getManager();

        $product = $p->getRepository(product::class)->findAll();

        return $this->render('product/index.html.twig', [
            'product' => $product,
        ]);
    }
}