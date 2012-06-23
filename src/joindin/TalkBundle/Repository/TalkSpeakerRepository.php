<?php

namespace joindin\TalkBundle\Repository;

use Doctrine\ORM\Mapping;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\Query;

/**
* TalkSpeakerRepository
*
*/
class TalkSpeakerRepository extends EntityRepository
{

    public function getTalkClaims(\joindin\UserBundle\Entity\User $user)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->addSelect('ts')
            ->from('joindin\TalkBundle\Entity\TalkSpeaker', 'ts')
            ->where('ts.status LIKE :status');
        $qb->setParameter("status", "pending");

        return $qb->getQuery()->getResult();

    }

}