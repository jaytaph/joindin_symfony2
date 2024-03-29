<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\EventAdmin
 */
class EventAdmin
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $user_id
     */
    private $user_id;

    /**
     * @var integer $event_id
     */
    private $event_id;

    /**
     * @var string $rcode
     */
    private $rcode;

    /**
     * @var joindin\UserBundle\Entity\User
     */
    private $user;

    /**
     * @var joindin\EventBundle\Entity\Events
     */
    private $event;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return EventAdmin
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set event_id
     *
     * @param integer $eventId
     * @return EventAdmin
     */
    public function setEventId($eventId)
    {
        $this->event_id = $eventId;
        return $this;
    }

    /**
     * Get event_id
     *
     * @return integer 
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Set rcode
     *
     * @param string $rcode
     * @return EventAdmin
     */
    public function setRcode($rcode)
    {
        $this->rcode = $rcode;
        return $this;
    }

    /**
     * Get rcode
     *
     * @return string 
     */
    public function getRcode()
    {
        return $this->rcode;
    }

    /**
     * Set user
     *
     * @param joindin\UserBundle\Entity\User $user
     * @return EventAdmin
     */
    public function setUser(\joindin\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return joindin\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set event
     *
     * @param joindin\EventBundle\Entity\Events $event
     * @return EventAdmin
     */
    public function setEvent(\joindin\EventBundle\Entity\Events $event = null)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Get event
     *
     * @return joindin\EventBundle\Entity\Events 
     */
    public function getEvent()
    {
        return $this->event;
    }
}