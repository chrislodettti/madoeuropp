<?php

namespace App\Repository;

use App\Entity\Vino;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


class VinoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Vino::class);
    }
    public function vinonom(string $orden) {
        return $this->createQueryBuilder('vino')
                    ->select('nombre')
                    ->orderBy('nombre',($orden))
                    ->getQuery()
                    ->getResult();
    }
    
      public function vinoprice(string $orden) {
        return $this->createQueryBuilder('vino')
                    ->select('price')
                    ->orderBy('price', $orden)
                    ->getQuery()
                    ->getResult();
    }
        public function vinovolum(string $orden) {
        return $this->createQueryBuilder('vino')
                    ->select('volumen')
                    ->orderBy('volumen', $orden)
                    ->getQuery()
                    ->getResult();
    }

}

