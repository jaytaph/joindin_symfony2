<?php

namespace joindin\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * joindin\EventBundle\Entity\Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="joindin\EventBundle\Repository\EventsRepository")
 */
class Events
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
     * @var string $eventName
     *
     * @ORM\Column(name="event_name", type="string", length=200, nullable=true)
     */
    private $eventName;

    /**
     * @var integer $eventStart
     *
     * @ORM\Column(name="event_start", type="integer", nullable=true)
     */
    private $eventStart;

    /**
     * @var integer $eventEnd
     *
     * @ORM\Column(name="event_end", type="integer", nullable=true)
     */
    private $eventEnd;

    /**
     * @var decimal $eventLat
     *
     * @ORM\Column(name="event_lat", type="decimal", nullable=true)
     */
    private $eventLat;

    /**
     * @var decimal $eventLong
     *
     * @ORM\Column(name="event_long", type="decimal", nullable=true)
     */
    private $eventLong;

    /**
     * @var text $eventLoc
     *
     * @ORM\Column(name="event_loc", type="text", nullable=true)
     */
    private $eventLoc;

    /**
     * @var text $eventDesc
     *
     * @ORM\Column(name="event_desc", type="text", nullable=true)
     */
    private $eventDesc;

    /**
     * @var integer $active
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    /**
     * @var string $eventStub
     *
     * @ORM\Column(name="event_stub", type="string", length=30, nullable=true)
     */
    private $eventStub;

    /**
     * @var string $eventIcon
     *
     * @ORM\Column(name="event_icon", type="string", length=30, nullable=true)
     */
    private $eventIcon;

    /**
     * @var integer $pending
     *
     * @ORM\Column(name="pending", type="integer", nullable=true)
     */
    private $pending;

    /**
     * @var string $eventHashtag
     *
     * @ORM\Column(name="event_hashtag", type="string", length=100, nullable=true)
     */
    private $eventHashtag;

    /**
     * @var string $eventHref
     *
     * @ORM\Column(name="event_href", type="string", length=600, nullable=true)
     */
    private $eventHref;

    /**
     * @var integer $eventCfpStart
     *
     * @ORM\Column(name="event_cfp_start", type="integer", nullable=true)
     */
    private $eventCfpStart;

    /**
     * @var integer $eventCfpEnd
     *
     * @ORM\Column(name="event_cfp_end", type="integer", nullable=true)
     */
    private $eventCfpEnd;

    /**
     * @var string $eventVoting
     *
     * @ORM\Column(name="event_voting", type="string", length=1, nullable=true)
     */
    private $eventVoting;

    /**
     * @var string $private
     *
     * @ORM\Column(name="private", type="string", length=1, nullable=true)
     */
    private $private;

    /**
     * @var string $eventTzCont
     *
     * @ORM\Column(name="event_tz_cont", type="string", length=30, nullable=true)
     */
    private $eventTzCont;

    /**
     * @var string $eventTzPlace
     *
     * @ORM\Column(name="event_tz_place", type="string", length=70, nullable=true)
     */
    private $eventTzPlace;

    /**
     * @var string $eventContactName
     *
     * @ORM\Column(name="event_contact_name", type="string", length=200, nullable=true)
     */
    private $eventContactName;

    /**
     * @var string $eventContactEmail
     *
     * @ORM\Column(name="event_contact_email", type="string", length=200, nullable=true)
     */
    private $eventContactEmail;

    /**
     * @var string $eventCfpUrl
     *
     * @ORM\Column(name="event_cfp_url", type="string", length=200, nullable=true)
     */
    private $eventCfpUrl;


    /**
     * @ORM\OneToMany(targetEntity="joindin\EventBundle\Entity\EventComments", mappedBy="event")
     */
    protected $comments;

    /**
     * @ORM\ManyToMany(targetEntity="joindin\UserBundle\Entity\User")
     * @ORM\JoinTable(name="user_attend",
     *      joinColumns={@ORM\JoinColumn(name="eid", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="uid", referencedColumnName="id")}
     *      )
     */
    protected $attendees;

    /**
     * @ORM\OneToMany(targetEntity="joindin\EventBundle\Entity\EventAdmin", mappedBy="event")
     */
    protected $admins;

    /**
     * @ORM\OneToMany(targetEntity="joindin\TalkBundle\Entity\Talks", mappedBy="event")
     */
    protected $talks;

    /**
     * @ORM\OneToMany(targetEntity="joindin\EventBundle\Entity\EventTrack", mappedBy="event")
     */
    protected $tracks;


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
     * Set eventName
     *
     * @param string $eventName
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * Get eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventStart
     *
     * @param integer $eventStart
     */
    public function setEventStart($eventStart)
    {
        $this->eventStart = $eventStart;
    }

    /**
     * Get eventStart
     *
     * @return integer
     */
    public function getEventStart()
    {
        return $this->eventStart;
    }

    /**
     * Set eventEnd
     *
     * @param integer $eventEnd
     */
    public function setEventEnd($eventEnd)
    {
        $this->eventEnd = $eventEnd;
    }

    /**
     * Get eventEnd
     *
     * @return integer
     */
    public function getEventEnd()
    {
        return $this->eventEnd;
    }

    /**
     * Set eventLat
     *
     * @param decimal $eventLat
     */
    public function setEventLat($eventLat)
    {
        $this->eventLat = $eventLat;
    }

    /**
     * Get eventLat
     *
     * @return decimal
     */
    public function getEventLat()
    {
        return $this->eventLat;
    }

    /**
     * Set eventLong
     *
     * @param decimal $eventLong
     */
    public function setEventLong($eventLong)
    {
        $this->eventLong = $eventLong;
    }

    /**
     * Get eventLong
     *
     * @return decimal
     */
    public function getEventLong()
    {
        return $this->eventLong;
    }

    /**
     * Set eventLoc
     *
     * @param text $eventLoc
     */
    public function setEventLoc($eventLoc)
    {
        $this->eventLoc = $eventLoc;
    }

    /**
     * Get eventLoc
     *
     * @return text
     */
    public function getEventLoc()
    {
        return $this->eventLoc;
    }

    /**
     * Set eventDesc
     *
     * @param text $eventDesc
     */
    public function setEventDesc($eventDesc)
    {
        $this->eventDesc = $eventDesc;
    }

    /**
     * Get eventDesc
     *
     * @return text
     */
    public function getEventDesc()
    {
        return $this->eventDesc;
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
     * Set eventStub
     *
     * @param string $eventStub
     */
    public function setEventStub($eventStub)
    {
        $this->eventStub = $eventStub;
    }

    /**
     * Get eventStub
     *
     * @return string
     */
    public function getEventStub()
    {
        return $this->eventStub;
    }

    /**
     * Set eventIcon
     *
     * @param string $eventIcon
     */
    public function setEventIcon($eventIcon)
    {
        $this->eventIcon = $eventIcon;
    }

    /**
     * Get eventIcon
     *
     * @return string
     */
    public function getEventIcon()
    {
        return $this->eventIcon;
    }

    /**
     * Set pending
     *
     * @param integer $pending
     */
    public function setPending($pending)
    {
        $this->pending = $pending;
    }

    /**
     * Get pending
     *
     * @return integer
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * Set eventHashtag
     *
     * @param string $eventHashtag
     */
    public function setEventHashtag($eventHashtag)
    {
        $this->eventHashtag = $eventHashtag;
    }

    /**
     * Get eventHashtag
     *
     * @return string
     */
    public function getEventHashtag()
    {
        return $this->eventHashtag;
    }

    /**
     * Set eventHref
     *
     * @param string $eventHref
     */
    public function setEventHref($eventHref)
    {
        $this->eventHref = $eventHref;
    }

    /**
     * Get eventHref
     *
     * @return string
     */
    public function getEventHref()
    {
        return $this->eventHref;
    }

    /**
     * Set eventCfpStart
     *
     * @param integer $eventCfpStart
     */
    public function setEventCfpStart($eventCfpStart)
    {
        $this->eventCfpStart = $eventCfpStart;
    }

    /**
     * Get eventCfpStart
     *
     * @return integer
     */
    public function getEventCfpStart()
    {
        return $this->eventCfpStart;
    }

    /**
     * Set eventCfpEnd
     *
     * @param integer $eventCfpEnd
     */
    public function setEventCfpEnd($eventCfpEnd)
    {
        $this->eventCfpEnd = $eventCfpEnd;
    }

    /**
     * Get eventCfpEnd
     *
     * @return integer
     */
    public function getEventCfpEnd()
    {
        return $this->eventCfpEnd;
    }

    /**
     * Set eventVoting
     *
     * @param string $eventVoting
     */
    public function setEventVoting($eventVoting)
    {
        $this->eventVoting = $eventVoting;
    }

    /**
     * Get eventVoting
     *
     * @return string
     */
    public function getEventVoting()
    {
        return $this->eventVoting;
    }

    /**
     * Set private
     *
     * @param string $private
     */
    public function setPrivate($private)
    {
        $this->private = $private;
    }

    /**
     * Get private
     *
     * @return string
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set eventTzCont
     *
     * @param string $eventTzCont
     */
    public function setEventTzCont($eventTzCont)
    {
        $this->eventTzCont = $eventTzCont;
    }

    /**
     * Get eventTzCont
     *
     * @return string
     */
    public function getEventTzCont()
    {
        return $this->eventTzCont;
    }

    /**
     * Set eventTzPlace
     *
     * @param string $eventTzPlace
     */
    public function setEventTzPlace($eventTzPlace)
    {
        $this->eventTzPlace = $eventTzPlace;
    }

    /**
     * Get eventTzPlace
     *
     * @return string
     */
    public function getEventTzPlace()
    {
        return $this->eventTzPlace;
    }

    /**
     * Set eventContactName
     *
     * @param string $eventContactName
     */
    public function setEventContactName($eventContactName)
    {
        $this->eventContactName = $eventContactName;
    }

    /**
     * Get eventContactName
     *
     * @return string
     */
    public function getEventContactName()
    {
        return $this->eventContactName;
    }

    /**
     * Set eventContactEmail
     *
     * @param string $eventContactEmail
     */
    public function setEventContactEmail($eventContactEmail)
    {
        $this->eventContactEmail = $eventContactEmail;
    }

    /**
     * Get eventContactEmail
     *
     * @return string
     */
    public function getEventContactEmail()
    {
        return $this->eventContactEmail;
    }

    /**
     * Set eventCfpUrl
     *
     * @param string $eventCfpUrl
     */
    public function setEventCfpUrl($eventCfpUrl)
    {
        $this->eventCfpUrl = $eventCfpUrl;
    }

    /**
     * Get eventCfpUrl
     *
     * @return string
     */
    public function getEventCfpUrl()
    {
        return $this->eventCfpUrl;
    }


    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->attendees = new \Doctrine\Common\Collections\ArrayCollection();
        $this->talks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comments
     *
     * @param joindin\EventBundle\Entity\EventComments $comments
     * @return Events
     */
    public function addEventComments(\joindin\EventBundle\Entity\EventComments $comments)
    {
        $this->comments[] = $comments;
        return $this;
    }

    /**
     * Get comments
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add attendees
     *
     * @param joindin\UserBundle\Entity\User $attendees
     * @return Events
     */
    public function addAttendee(\joindin\UserBundle\Entity\User $attendees)
    {
        $this->attendees[] = $attendees;
        return $this;
    }

    /**
     * Get attendees
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getAttendees()
    {
        return $this->attendees;
    }

    /**
     * Add talks
     *
     * @param joindin\TalkBundle\Entity\Talks $talks
     * @return Events
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
     * Add attendees
     *
     * @param joindin\UserBundle\Entity\User $attendees
     * @return Events
     */
    public function addUser(\joindin\UserBundle\Entity\User $attendees)
    {
        $this->attendees[] = $attendees;
        return $this;
    }


    /**
     * Return a collection with talks that have slides
     * @return mixed
     */
    public function getTalksWithSlides() {
        return $this->getTalks()->filter(
            function(\joindin\TalkBundle\Entity\Talks $talk) {
                $link = $talk->getSlidesLink();
                return (! empty($link));
            }
        );
    }

    /**
     * Add admins
     *
     * @param joindin\EventBundle\Entity\EventAdmin $admins
     * @return Events
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
     * Add tracks
     *
     * @param joindin\EventBundle\Entity\EventTrack $tracks
     * @return Events
     */
    public function addEventTrack(\joindin\EventBundle\Entity\EventTrack $tracks)
    {
        $this->tracks[] = $tracks;
        return $this;
    }

    /**
     * Get tracks
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * Check if the specified user is a speaker in (one of) the talks from the event.
     *
     * @param \joindin\UserBundle\Entity\User $user
     * @return bool
     */
    function isSpeaker(\joindin\UserBundle\Entity\User $user) {
        /**
         * @var $talk \joindin\talkBundle\Entity\Talks
         */

        foreach ($this->getTalks() as $talk) {
            foreach ($talk->getSpeakers() as $speaker) {
                if ($speaker->getUser() != null && $speaker->getUser()->getId() == $user->getId()) {      // Don't think I'm allowed to compare objects here
                    return true;
                }
            }
        }
        return false;
    }
}