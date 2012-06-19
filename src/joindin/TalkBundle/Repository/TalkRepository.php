<?php

namespace joindin\TalkBundle\Repository;

use Doctrine\ORM\Mapping;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\Query;

/**
* TalkRepository
*
*/
class TalkRepository extends EntityRepository
{
    public function __construct($em, Mapping\ClassMetadata $class)
    {
        parent::__construct($em, $class);

        $this->getEntityManager()->getConfiguration()->addCustomHydrationMode('TalkHydrator', 'joindin\TalkBundle\Hydrators\TalkHydrator');
    }

    protected function _createResultSetMapping() {
        $rsm = new ResultSetMapping();
        $rsm->addEntityResult('joindin\TalkBundle\Entity\Talks', 't');
        $rsm->addFieldResult('t', 'id', 'id');
        $rsm->addFieldResult('t', 'talk_title', 'talkTitle');
        $rsm->addFieldResult('t', 'speaker', 'speaker');
        $rsm->addFieldResult('t', 'slides_link', 'slidesLink');
        $rsm->addFieldResult('t', 'date_given', 'dateGiven');
        $rsm->addFieldResult('t', 'event_id', 'eventId');
        $rsm->addFieldResult('t', 'talk_desc', 'talkDesc');
        $rsm->addFieldResult('t', 'active', 'active');
        $rsm->addFieldResult('t', 'owner_id', 'ownerId');
        $rsm->addFieldResult('t', 'lang', 'lang');
        return $rsm;
    }


    function findRecentPopularTalks($limit = 7) {
        $rsm = $this->_createResultSetMapping();

        // Add rating, since we will need this in our views
        $rsm->addScalarResult('tavg', 'rating');

        $query = $this->_em->createNativeQuery("
            SELECT
              DISTINCT t.id,
              COUNT(tc.id) as ccount,
              get_talk_rating(t.id) AS tavg,
              t.*
            FROM
                talks t
            JOIN events e
                ON e.id=t.event_id
            JOIN talk_comments tc
                ON tc.talk_id=t.id AND tc.private = 0
            INNER JOIN talk_speaker ts
                ON t.id = ts.talk_id
            WHERE
                e.event_start > :start
              AND
                (ts.status != 'pending' OR ts.status is null)
              AND
                (tc.user_id != 0 AND tc.rating != 0)
            GROUP BY
              t.ID
            HAVING
              tavg>3 AND ccount>3
            ORDER BY
                ccount DESC
            LIMIT :limit", $rsm);
        $query->setParameter("start", strtotime("-3 months"));
        $query->setParameter("limit", $limit);

        return $query->getResult('TalkHydrator');
    }

    function findAlltimePopularTalks($limit = 7) {
        $rsm = $this->_createResultSetMapping();

        // Add rating, since we will need this in our views
        $rsm->addScalarResult('tavg', 'rating');

        $query = $this->_em->createNativeQuery("
            SELECT
                COUNT(tc.ID) AS ccount,
                get_talk_rating(t.ID) AS tavg,
                t.*
            FROM
                talks t
            JOIN talk_comments tc
                ON tc.talk_id=t.ID AND tc.private = 0
            JOIN events e
                ON e.ID=t.event_id
            WHERE
                t.active=1
                AND (tc.user_id != 0 AND tc.rating != 0)
            GROUP BY
                t.id
            ORDER BY
                ccount DESC
            LIMIT :limit", $rsm);
        $query->setParameter("limit", $limit);

        return $query->getResult('TalkHydrator');
    }

}