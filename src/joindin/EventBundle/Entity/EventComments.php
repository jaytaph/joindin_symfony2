<?php

namespace joindin\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\EventBundle\Entity\EventComments
 *
 * @ORM\Table(name="event_comments")
 * @ORM\Entity
 */
class EventComments
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
     * @var integer $eventId
     *
     * @ORM\Column(name="event_id", type="integer", nullable=true)
     */
    private $eventId;

    /**
     * @var text $comment
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var integer $dateMade
     *
     * @ORM\Column(name="date_made", type="integer", nullable=true)
     */
    private $dateMade;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer $active
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    /**
     * @var string $cname
     *
     * @ORM\Column(name="cname", type="string", length=100, nullable=true)
     */
    private $cname;

    /**
     * @var string $commentType
     *
     * @ORM\Column(name="comment_type", type="string", length=100, nullable=true)
     */
    private $commentType;

    /**
     * @var string $source
     *
     * @ORM\Column(name="source", type="string", length=25, nullable=true)
     */
    private $source;


    /**
     * @ORM\ManyToOne(targetEntity="joindin\EventBundle\Entity\Events", inversedBy="id")
     */
    protected $event;

    /**
     * @ORM\ManyToOne(targetEntity="joindin\defaultBundle\Entity\User", inversedBy="id")
     */
    protected $user;

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
     * Set eventId
     *
     * @param integer $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * Get eventId
     *
     * @return integer 
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set comment
     *
     * @param text $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return text 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set dateMade
     *
     * @param integer $dateMade
     */
    public function setDateMade($dateMade)
    {
        $this->dateMade = $dateMade;
    }

    /**
     * Get dateMade
     *
     * @return integer 
     */
    public function getDateMade()
    {
        return $this->dateMade;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set active
     *
     * @param integer $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set cname
     *
     * @param string $cname
     */
    public function setCname($cname)
    {
        $this->cname = $cname;
    }

    /**
     * Get cname
     *
     * @return string 
     */
    public function getCname()
    {
        return $this->cname;
    }

    /**
     * Set commentType
     *
     * @param string $commentType
     */
    public function setCommentType($commentType)
    {
        $this->commentType = $commentType;
    }

    /**
     * Get commentType
     *
     * @return string 
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * Set source
     *
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set event
     *
     * @param joindin\EventBundle\Entity\Events $event
     * @return EventComments
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

    /**
     * Set user
     *
     * @param joindin\defaultBundle\Entity\User $user
     * @return EventComments
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
}