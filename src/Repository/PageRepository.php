<?php

namespace Aropixel\SyliusPagesPlugin\Repository;

use Aropixel\SyliusPagesPlugin\Entity\Page;
use Aropixel\SyliusPagesPlugin\Entity\PageInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Page|null find($id, $lockMode = null, $lockVersion = null)
 * @method Page|null findOneBy(array $criteria, array $orderBy = null)
 * @method Page[]    findAll()
 * @method Page[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageRepository extends ServiceEntityRepository implements PageRepositoryInterface
{
    public function __construct(
        ManagerRegistry $registry,
        $pageEntityClass
    )
    {
        parent::__construct($registry, $pageEntityClass);
    }
}
