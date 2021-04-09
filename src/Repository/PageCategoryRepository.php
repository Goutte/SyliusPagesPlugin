<?php

namespace Aropixel\SyliusPagesPlugin\Repository;

use Aropixel\SyliusPagesPlugin\Entity\PageCategory;
use Aropixel\SyliusPagesPlugin\Entity\PageCategoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PageCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageCategory[]    findAll()
 * @method PageCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageCategoryRepository extends ServiceEntityRepository
{
    public function __construct(
        ManagerRegistry $registry,
        PageCategoryInterface $pageCategoryEntityClass
    )
    {
        parent::__construct($registry, $pageCategoryEntityClass);
    }
}
