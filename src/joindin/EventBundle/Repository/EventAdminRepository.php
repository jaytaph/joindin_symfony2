<?php

namespace joindin\EventBundle\Repository;

use Doctrine\ORM\Mapping;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityRepository;

/**
* EventAdminRepository
*
*/
class EventAdminRepository extends EntityRepository
{

    public function getEventClaims() {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->addSelect('ea')
            ->from('joindin\EventBundle\Entity\EventAdmin', 'ea')
            ->where('ea.rcode LIKE :rcode');
        $qb->setParameter("rcode", "pending");

        return $qb->getQuery()->getResult();
    }
}