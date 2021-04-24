<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Photos;


/**
 * MemoiresinterRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below. Copier coller de visites 
 */
class PhotosRepository extends ServiceEntityRepository
{
     public function __construct(ManagerRegistry $registry)
                    {
                        parent::__construct($registry, Photos::class);
                    }
}