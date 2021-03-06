<?php

namespace App\Repository;

use App\Entity\Betaal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Betaal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Betaal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Betaal[]    findAll()
 * @method Betaal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BetaalRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Betaal::class);
    }

    // /**
    //  * @return Betaal[] Returns an array of Betaal objects
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
    public function findOneBySomeField($value): ?Betaal
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
