<?php

namespace joindin\defaultBundle\Repository;

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
        // Add RAND() as a custom DQL function
        $config = $this->getEntityManager()->getConfiguration();
        $config->addCustomNumericFunction('RAND', 'DoctrineExtensions\Query\Mysql\Rand');

        $qb = $this->getEntityManager()->createQueryBuilder();

        // Add a HIDDEN field, so we can sort on it (needs doctrine 2.2+)
        $qb->addSelect('RAND() AS HIDDEN hotness_factor');
        $qb->orderBy('hotness_factor', 'DESC');

        $qb->setMaxResults($limit);

        return $this->_getEvents($qb);
    }

    function findUpcomingEvents($limit = 10) {
        $qb = $this->getEntityManager()->createQueryBuilder();

        // Add a HIDDEN field, so we can sort on it (needs doctrine 2.2+)
        $qb->addSelect('RAND() AS HIDDEN hotness_factor');
        $qb->orderBy('e.event_start', 'ASC');

        $qb->where('(events.event_start>='. (mktime(0,0,0) - (3 * 86400)).')');

        $qb->setMaxResults($limit);

        return $this->_getEvents($qb);
    }

    protected function _getEvents(\Doctrine\ORM\QueryBuilder $qb) {
        $qb->addSelect('e')
            ->from('joindin\defaultBundle\Entity\Events', 'e')
            ->where('e.active = 1')
            ->where("e.private != 'YES'");

        print "<pre>";
        print $qb->getDQL();
        print "</pre>";

        return $qb->getQuery()->getResult();
    }
}