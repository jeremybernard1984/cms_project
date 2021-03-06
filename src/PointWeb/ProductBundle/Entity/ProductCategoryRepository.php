<?php

namespace PointWeb\ProductBundle\Entity;

use Gedmo\Tree\Entity\Repository\NestedTreeRepository;

/**
 * ProductCategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductCategoryRepository extends NestedTreeRepository
{
    public function byCategorie($categorie)
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.product_category = :categorie')
            ->orderBy('u.position')
            ->setParameter('categorie', $categorie);
        return $qb->getQuery()->getResult();
    }

    public function findAllByLvl()
    {
        $queryBuilder = $this->createQueryBuilder('a')
            ->where('a.lvl = 0')
            //->orderBy('r.lvl', 'ASC')
        ;
        $query = $queryBuilder->getQuery();
        $results = $query->getResult();
        return $results;

    }
}
