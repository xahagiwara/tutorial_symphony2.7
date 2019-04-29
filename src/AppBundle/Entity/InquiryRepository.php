<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * InquiryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InquiryRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllByKeyword($keyword)
    {
        $query = $this->createQueryBuilder('i')
            ->where('i.name LIKE :keyword')
            ->orWhere('i.tel LIKE :keyword')
            ->orWhere('i.email LIKE :keyword')
            ->orderBy('i.id', 'DESC')
            ->setParameters([
                ':keyword' =>'%'.$keyword.'%'
            ])
            ->getQuery();
        return new ArrayCollection($query->getResult());
    }

    public function findUnprocessed()
    {
        $query = $this->createQueryBuilder('i')
            ->where('i.processStatus = :processStatus')
            ->orWhere('i.processStatus is null')
            ->orderBy('i.id', 'ASC')
            ->setParameters([
                ':provessStatus' => '0'
            ])
            ->getQuery();

        return $query->execute();
    }
}
