<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\UserEventAdmin
 *
 * @ORM\Table(name="user_event_admin")
 * @ORM\Entity
 */
class UserEventAdmin
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $user_id
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $user_id;

    /**
     * @var integer $event_id
     *
     * @ORM\Column(name="event_id", type="integer", nullable=false)
     */
    private $event_id;

    /**
     * @var string $rcode
     *
     * @ORM\Column(name="rcode", type="string", length=40, nullable=true)
     */
    private $rcode;

    /**
     * @ORM\ManyToOne(targetEntity="joindin\defaultBundle\Entity\User", inversedBy="id")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="joindin\EventBundle\Entity\Events", inversedBy="id")
     */
    protected $event;



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
     * @return UserEventAdmin
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
     * @return UserEventAdmin
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
     * @return UserEventAdmin
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
     * @param joindin\defaultBundle\Entity\User $user
     * @return UserEventAdmin
     */
    public function setUser(\joindin\defaultBundle\Entity\User $user = null)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return joindin\defaultBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set event
     *
     * @param joindin\EventBundle\Entity\Events $event
     * @return UserEventAdmin
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