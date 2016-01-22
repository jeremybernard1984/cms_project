<?php

namespace PointWeb\ProductBundle\Entity;


use PointWeb\AppBundle\Entity\PagerRepository;
/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends PagerRepository
{
    public function findAllByCatByPos()
    {
        $queryBuilder = $this->createQueryBuilder('r')
            ->orderBy('r.product_category', 'ASC')
            ->orderBy('r.position', 'ASC')
        ;
        $query = $queryBuilder->getQuery();
        $results = $query->getResult();
        return $results;

    }
    public function findAllByCatByPosVisible()
    {
        $queryBuilder = $this->createQueryBuilder('r')
            ->where('r.online = 1')
            ->orderBy('r.product_category', 'ASC')
            ->orderBy('r.position', 'ASC')
        ;
        $query = $queryBuilder->getQuery();
        $results = $query->getResult();
        return $results;
    }
    public function findAllById($id)
    {
        $query = $this->createQueryBuilder('a')
            ->add('select', 'a')
            ->where('a.product_category = :id')
            ->setParameter('id',$id)
        ;
        $query = $query->getQuery()->getResult();
        //var_dump($query);//die;
        return $query;

    }
}