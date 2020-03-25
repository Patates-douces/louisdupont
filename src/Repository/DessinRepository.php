<?php

namespace App\Repository;

use App\Entity\Dessin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class DessinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dessin::class);
    }

    public function FindAll()
    {
        return $this->createQueryBuilder('d')
            ->where('d.title != null')
            ->getQuery()
            ->getResult();
    }

    public function FindSold()
    {
        return $this->createQueryBuilder('d')
            ->where('d.sold = true')
            ->getQuery()
            ->getResult();
    }

    public function FindNotSold()
    {
        return $this->createQueryBuilder('d')
            ->where('d.sold = false')
            ->getQuery()
            ->getResult();
    }

}
