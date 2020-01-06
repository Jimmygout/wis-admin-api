<?php

namespace App\Repository;

use App\Entity\StandInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method StandInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method StandInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method StandInfo[]    findAll()
 * @method StandInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StandInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StandInfo::class);
    }

    // /**
    //  * @return StandInfo[] Returns an array of StandInfo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StandInfo
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
