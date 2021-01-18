<?php

namespace App\Repository;

use App\Entity\ClasseEleve;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClasseEleve|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClasseEleve|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClasseEleve[]    findAll()
 * @method ClasseEleve[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClasseEleveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClasseEleve::class);
    }

    // /**
    //  * @return ClasseEleve[] Returns an array of ClasseEleve objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClasseEleve
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
