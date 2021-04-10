<?php


namespace Aropixel\SyliusPagesPlugin\Controller;


use Aropixel\SyliusPagesPlugin\Repository\PageRepository;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PageController extends AbstractController
{

    /**
     * @Rest\Route("/{categorySlug}/{pageSlug}", name="show_page", methods={"GET"})
     * @param $pageSlug
     * @param PageRepository $pageRepository
     * @return Response
     */
    public function showPage($pageSlug, PageRepository $pageRepository): Response
    {
        $page = $pageRepository->findOneBy(['slug' => $pageSlug]);

        return $this->render('Front/Page/show.html.twig', [
            'page' => $page
        ]);
    }

}
