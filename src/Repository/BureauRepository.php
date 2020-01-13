<?php

namespace App\Repository;

use App\Entity\Bureau;
use Doctrine\ORM\Query;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Bureau|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bureau|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bureau[]    findAll()
 * @method Bureau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BureauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bureau::class);
    }
    public function findPagination() : Query{
        return $this->createQueryBuilder('v')
                      ->getQuery();

             
    }

    // /**
    //  * @return Bureau[] Returns an array of Bureau objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bureau
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
