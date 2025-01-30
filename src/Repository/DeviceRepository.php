<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Device;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Device|null find($id, $lockMode = null, $lockVersion = null)
 * @method Device|null findOneBy(array $criteria, array $orderBy = null)
 * @method Device[]    findAll()
 * @method Device[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeviceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Device::class);
    }

    public function findOneByName(string $name): ?Device
    {
        return $this->createQueryBuilder('o')
            ->join('o.names', 'names')
            ->andWhere('names.name = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function findAllByOrder(string $order = 'DESC'): ?array
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.order', $order)
            ->getQuery()
            ->execute()
        ;
    }
}
