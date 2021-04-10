<?php

namespace Aropixel\SyliusPagesPlugin\Controller;

use Aropixel\SyliusPagesPlugin\Repository\PageRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PageController extends AbstractController
{

    /**
     * @var PageRepositoryInterface
     */
    private $pageRepository;

    public function __construct(PageRepositoryInterface $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * @param $pageSlug
     * @return Response
     */
    public function showPage($pageSlug): Response
    {
        $page = $this->pageRepository->findOneBy(['slug' => $pageSlug]);

        return $this->render('@AropixelSyliusPagesPlugin/Front/Page/show.html.twig', [
            'page' => $page
        ]);
    }

}
