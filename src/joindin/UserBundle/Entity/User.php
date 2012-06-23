<?php

namespace joindin\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\UserBundle\Entity\User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string $fullName
     *
     * @ORM\Column(name="full_name", type="string", length=200, nullable=true)
     */
    protected $fullName;

    /**
     * @var integer $active
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    protected $active;

    /**
     * @var string $twitterUsername
     *
     * @ORM\Column(name="twitter_username", type="string", length=20, nullable=true)
     */
    protected $twitterUsername;

    /**
     * @var string $requestCode
     *
     * @ORM\Column(name="request_code", type="string", length=8, nullable=true)
     */
    protected $requestCode;


    /**
     * @ORM\OneToMany(targetEntity="joindin\EventBundle\Entity\EventAdmin", mappedBy="user")
     */
    protected $admins;

    /**
     * @ORM\ManyToMany(targetEntity="joindin\EventBundle\Entity\Events", mappedBy="attendees")
     */
    protected $events;

    /**
     * @ORM\OneToMany(targetEntity="joindin\TalkBundle\Entity\TalkSpeaker", mappedBy="user")
     */
    protected $speakers;

    public function __construct()
    {
        $this->admins = new \Doctrine\Common\Collections\ArrayCollection();
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
        $this->talks = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set fullName
     *
     * @param string $fullName
     * @return User
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
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
     * Set twitterUsername
     *
     * @param string $twitterUsername
     * @return User
     */
    public function setTwitterUsername($twitterUsername)
    {
        $this->twitterUsername = $twitterUsername;
        return $this;
    }

    /**
     * Get twitterUsername
     *
     * @return string 
     */
    public function getTwitterUsername()
    {
        return $this->twitterUsername;
    }

    /**
     * Set requestCode
     *
     * @param string $requestCode
     * @return User
     */
    public function setRequestCode($requestCode)
    {
        $this->requestCode = $requestCode;
        return $this;
    }

    /**
     * Get requestCode
     *
     * @return string 
     */
    public function getRequestCode()
    {
        return $this->requestCode;
    }

    /**
     * Add admins
     *
     * @param joindin\EventBundle\Entity\EventAdmin $admins
     * @return User
     */
    public function addEventAdmin(\joindin\EventBundle\Entity\EventAdmin $admins)
    {
        $this->admins[] = $admins;
        return $this;
    }

    /**
     * Get admins
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAdmins()
    {
        return $this->admins;
    }

    /**
     * Add events
     *
     * @param joindin\EventBundle\Entity\Events $events
     * @return User
     */
    public function addEvents(\joindin\EventBundle\Entity\Events $events)
    {
        $this->events[] = $events;
        return $this;
    }

    /**
     * Get events
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Add talks
     *
     * @param joindin\TalkBundle\Entity\Talks $talks
     * @return User
     */
    public function addTalks(\joindin\TalkBundle\Entity\Talks $talks)
    {
        $this->talks[] = $talks;
        return $this;
    }

    /**
     * Get talks
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTalks()
    {
        return $this->talks;
    }

    /**
     * Add speakers
     *
     * @param joindin\TalkBundle\Entity\TalkSpeaker $speakers
     * @return User
     */
    public function addTalkSpeaker(\joindin\TalkBundle\Entity\TalkSpeaker $speakers)
    {
        $this->speakers[] = $speakers;
        return $this;
    }

    /**
     * Get speakers
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSpeakers()
    {
        return $this->speakers;
    }
}