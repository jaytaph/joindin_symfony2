<?php

namespace joindin\EventBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\Query;

/**
* EventsRepository
*
*/
class EventsRepository extends EntityRepository
{

    /**
     * Finds the hottest events based on a (simple) calculation
     *
     * @param int $limit
     * @return array
     */
    function findHotEvents($limit = 10) {
        /**
         * @TODO: This is the query.. the biggest issue is the order by score stuff...
         *
         * SELECT
         *      *,
         *      (select if (event_cfp_start IS NOT NULL AND event_cfp_start > 0 AND 1339887600 BETWEEN event_cfp_start AND event_cfp_end, 1, 0)) as is_cfp,
         *      (select count(*) from user_attend where user_attend.eid = events.ID) as num_attend,
         *      (select count(*) from event_comments where event_comments.event_id = events.ID) as num_comments,
         *      abs(0) as user_attending,
         *      abs(datediff(from_unixtime(events.event_start), from_unixtime(1339887600))) as score,
         *      CASE WHEN (((events.event_start - 86400) < 1339887600) and (events.event_start + (3*30*3600*24)) > 1339887600) THEN 1 ELSE 0 END as allow_comments
         *  FROM `events`
         *  WHERE
         *      active = 1
         *      AND (pending = 0 OR pending IS NULL)
         *      AND private!='Y'
         *  ORDER BY
         *      score - ((num_comments + num_attend + 1) / 5)
         *  LIMIT 7
         */

        // Add RAND() as a custom DQL function
        //$config = $this->getEntityManager()->getConfiguration();
        //$config->addCustomNumericFunction('RAND', 'DoctrineExtensions\Query\Mysql\Rand');

        // Add a HIDDEN field, so we can sort on it (needs doctrine 2.2+)
        // score - ((num_comments + num_attend + 1) / 5)
        // $qb->addSelect('RAND() AS HIDDEN hotness_factor');
        // $qb->orderBy('(e.score - ((e.num_comments + e.num_attends + 1) / 5)', 'DESC');
        //$qb->orderBy("RAND()");

        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->setMaxResults($limit);

        return $this->_getEvents($qb);
    }

    /**
     * Finds the next upcoming events
     *
     * @param int $limit
     * @return array
     */
    function findUpcomingEvents($limit = 10) {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->orderBy('e.eventStart', 'ASC');
        $qb->where('(e.eventStart >= '. (mktime(0,0,0) - (3 * 86400)).')');
        $qb->setMaxResults($limit);

        return $this->_getEvents($qb);
    }

    /**
     * Returns the last past events
     *
     * @param int $limit
     * @return array
     */
    function findPastEvents($limit = 10) {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->orderBy('e.eventStart', 'DESC');
        $qb->where('(e.eventEnd <= '. (mktime(0,0,0) - (3 * 86400)).')');
        $qb->setMaxResults($limit);

        return $this->_getEvents($qb);
    }

    /**
     * Find all events (limited on certain number)
     *
     * @param int $limit
     * @return array
     */
    function findAllEvents($limit = 10) {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->setMaxResults($limit);

        return $this->_getEvents($qb);
    }


    /**
     * Returns events based on the query builder. Can (and should) have prefilled fields (like ordering and where clauses)
     *
     * @param \Doctrine\ORM\QueryBuilder $qb
     * @return array
     */
    protected function _getEvents(\Doctrine\ORM\QueryBuilder $qb) {
        $qb->addSelect('e')
            ->from('joindin\EventBundle\Entity\Events', 'e')
        ->andWhere('e.active = 1')
        ->andWhere("e.private != 'YES'");

        return $qb->getQuery()->getResult();
    }
}