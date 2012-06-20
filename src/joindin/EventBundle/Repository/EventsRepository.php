<?php

namespace joindin\EventBundle\Repository;

use Doctrine\ORM\Mapping;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityRepository;

/**
* EventsRepository
*
*/
class EventsRepository extends EntityRepository
{

    public function __construct($em, Mapping\ClassMetadata $class)
    {
        parent::__construct($em, $class);
        $this->getEntityManager()->getConfiguration()->addCustomHydrationMode('ScalarObjectHydrator', 'joindin\defaultBundle\Hydrators\ScalarObjectHydrator');
    }

    /**
     * Finds the hottest events based on a (simple) calculation
     *
     * @param int $limit
     * @return array
     */
    function findHotEvents($limit = 10) {
        $rsm = new ResultSetMapping();
        $rsm->addEntityResult('joindin\EventBundle\Entity\Events', 'e');
        $rsm->addFieldResult('e', 'id', 'id');
        $rsm->addFieldResult('e', 'event_name', 'eventName');
        $rsm->addFieldResult('e', 'event_start', 'eventStart');
        $rsm->addFieldResult('e', 'event_end', 'eventEnd');
        $rsm->addFieldResult('e', 'event_lat', 'eventLat');
        $rsm->addFieldResult('e', 'event_long', 'eventLong');
        $rsm->addFieldResult('e', 'event_desc', 'eventDesc');
        $rsm->addFieldResult('e', 'active', 'active');
        $rsm->addFieldResult('e', 'event_stub', 'eventStub');
        $rsm->addFieldResult('e', 'event_icon', 'eventIcon');
        $rsm->addFieldResult('e', 'pending', 'pending');
        $rsm->addFieldResult('e', 'event_hashtag', 'eventHashtag');
        $rsm->addFieldResult('e', 'event_href', 'eventHref');
        $rsm->addFieldResult('e', 'event_cfp_start', 'eventCfpStart');
        $rsm->addFieldResult('e', 'event_cfp_end', 'eventCfpEnd');
        $rsm->addFieldResult('e', 'event_voting', 'eventVoting');
        $rsm->addFieldResult('e', 'private', 'private');
        $rsm->addFieldResult('e', 'event_tz_cont', 'eventTzCont');
        $rsm->addFieldResult('e', 'event_tz_place', 'eventTzPlace');
        $rsm->addFieldResult('e', 'event_contact_name', 'eventContactName');
        $rsm->addFieldResult('e', 'event_contact_email', 'eventContactEmail');
        $rsm->addFieldResult('e', 'event_cfp_url', 'eventCfpUrl');

        $rsm->addScalarResult('is_cfp', 'cfp');
        $rsm->addScalarResult('score', 'score');
        $rsm->addScalarResult('allow_comments', 'allowComments');


        $sql = "SELECT
                        *,
                        (select if (event_cfp_start IS NOT NULL AND event_cfp_start > 0 AND 1339887600 BETWEEN event_cfp_start AND event_cfp_end, 1, 0)) as is_cfp,
                        (select count(*) from user_attend where user_attend.eid = events.ID) as num_attend,
                        (select count(*) from event_comments where event_comments.event_id = events.ID) as num_comments,
                        abs(0) as user_attending,
                        abs(datediff(from_unixtime(events.event_start), from_unixtime(1339887600))) as score,
                        CASE WHEN (((events.event_start - 86400) < 1339887600) and (events.event_start + (3*30*3600*24)) > 1339887600) THEN 1 ELSE 0 END as allow_comments
                    FROM `events`
                    WHERE
                        active = 1
                        AND (pending = 0 OR pending IS NULL)
                        AND private!='Y'
                    ORDER BY
                        score - ((num_comments + num_attend + 1) / 5)";

        $em = $this->getEntityManager();


        if ($limit) {
            // Add limit if needed
            $sql .= " LIMIT :limit";
            $query = $em->createNativeQuery($sql, $rsm);
            $query->setParameter("limit", $limit);
        } else {
            $query = $em->createNativeQuery($sql, $rsm);
        }

        return $query->getResult('ScalarObjectHydrator');
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

    function findOpenCfPEvents($limit = 10) {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $qb->orderBy('e.eventCfpEnd', 'ASC');
        $qb->where('e.eventCfpStart <= ' . mktime(0,0,0, date('m'), date('d'), date('Y')));
        $qb->andWhere('e.eventCfpEnd >= ' . mktime(0,0,0, date('m'), date('d'), date('Y')));

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