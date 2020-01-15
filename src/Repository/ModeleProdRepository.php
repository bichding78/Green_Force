<?php

namespace App\Repository;

use App\Entity\ModeleProd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ModeleProd|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeleProd|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeleProd[]    findAll()
 * @method ModeleProd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeleProdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeleProd::class);
    }

    // /**
    //  * @return ModeleProd[] Returns an array of ModeleProd objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ModeleProd
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
