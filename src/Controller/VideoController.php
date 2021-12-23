<?php

namespace App\Controller;

use App\Entity\Video;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    /**
     * @Route("/videos/{name}", name="video")
     */
    public function index(Video $video): Response
    {
        $em = $this->getDoctrine()->getManager();

        $video = $em->getRepository(Video::class)->findAll();

        return $this->render('video/index.html.twig', [
            'videos' => $video
        ]);
    }
}
