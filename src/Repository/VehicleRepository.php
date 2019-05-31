<?php
namespace App\Repository;

use App\Entity\Vehicle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


class VehicleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Vehicle::class);
    }
    
      public function vehiclemo(string $orden) {
        return $this->createQueryBuilder('vehicle')
                    ->select('modelo')
                    ->orderBy('modelo',($orden))
                    ->getQuery()
                    ->getResult();
    }
    
      public function vehiclema(string $orden) {
        return $this->createQueryBuilder('vehicle')
                    ->select('marca')
                    ->orderBy('marca', $orden)
                    ->getQuery()
                    ->getResult();
    }
        public function vehiclekm(string $orden) {
        return $this->createQueryBuilder('vehicle')
                    ->select('Km')
                    ->orderBy('Km', $orden)
                    ->getQuery()
                    ->getResult();
    }
            public function vehicleprice(string $orden) {
        return $this->createQueryBuilder('vehicle')
                    ->select('price')
                    ->orderBy('price', $orden)
                    ->getQuery()
                    ->getResult();
    }
    
}
