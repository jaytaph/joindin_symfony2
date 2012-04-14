<?php

namespace ji\defaultBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\Query;

/**
* EventsRepository
*
*/
class EventsRepository extends EntityRepository
{

    function findHotEvents($limit = 10) {
        $qb = $this->_em->createQueryBuilder();
        $qb->setMaxResults($limit);
        return $this->_getEvents($qb);
    }

    function findUpcomingEvents($limit = 10) {
        $qb = $this->_em->createQueryBuilder();
        $qb->setMaxResults($limit);
        return $this->_getEvents($qb);
    }

    protected function _getEvents($qb) {
        $qb->select('e')
           ->from('ji\defaultBundle\Entity\Events', 'e')
           ->where('e.active = 1')
           ->where("e.private != 'YES'");
        return $qb->getQuery()->getResult();
    }
}