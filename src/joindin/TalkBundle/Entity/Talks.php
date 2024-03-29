<?php

namespace joindin\TalkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\TalkBundle\Entity\Talks
 *
 * @ORM\Table(name="talks")
 * @ORM\Entity(repositoryClass="joindin\TalkBundle\Repository\TalkRepository")
 */
class Talks
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
     * @var text $talkTitle
     *
     * @ORM\Column(name="talk_title", type="text", nullable=true)
     */
    private $talkTitle;

    /**
     * @var text $speaker
     *
     * @ORM\Column(name="speaker", type="text", nullable=true)
     */
    private $speaker;

    /**
     * @var text $slidesLink
     *
     * @ORM\Column(name="slides_link", type="text", nullable=true)
     */
    private $slidesLink;

    /**
     * @var integer $dateGiven
     *
     * @ORM\Column(name="date_given", type="integer", nullable=true)
     */
    private $dateGiven;

    /**
     * @var integer $eventId
     *
     * @ORM\Column(name="event_id", type="integer", nullable=true)
     */
    private $eventId;

    /**
     * @var text $talkDesc
     *
     * @ORM\Column(name="talk_desc", type="text", nullable=true)
     */
    private $talkDesc;

    /**
     * @var integer $active
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    /**
     * @var integer $ownerId
     *
     * @ORM\Column(name="owner_id", type="integer", nullable=true)
     */
    private $ownerId;

    /**
     * @var integer $lang
     *
     * @ORM\Column(name="lang", type="integer", nullable=true)
     */
    private $lang;


    // @TODO
    private $rating;

    /**
     * @ORM\ManyToMany(targetEntity="joindin\EventBundle\Entity\EventTrack", inversedBy="id")
     * @ORM\JoinTable(name="talk_track")
     */
    protected $track;


    /**
     * @ORM\OneToMany(targetEntity="joindin\TalkBundle\Entity\TalkComments", mappedBy="talk")
     */
    protected $comments;

    /**
     * @ORM\ManyToMany(targetEntity="joindin\defaultBundle\Entity\Categories")
     * @ORM\JoinTable(name="talk_cat",
     *      joinColumns={@ORM\JoinColumn(name="talk_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="cat_id", referencedColumnName="id")}
     *      )
     */
    protected $categories;

    /**
     * @ORM\OneToMany(targetEntity="joindin\TalkBundle\Entity\TalkSpeaker", mappedBy="talk")
     */
    protected $speakers;

    /**
     * @ORM\ManyToOne(targetEntity="joindin\defaultBundle\Entity\Lang", inversedBy="id")
     * @ORM\JoinColumn(name="lang", referencedColumnName="id")
     */
    protected $language;

    /**
     * @ORM\ManyToOne(targetEntity="joindin\EventBundle\Entity\Events", inversedBy="id")
     * @ORM\JoinColumn(name="eventId", referencedColumnName="id")
     */
    protected $event;


    public function getRating() {
        if (isset($this->staticRating)) {
            return $this->staticRating;
        }

        // @TODO: Ratings should be an aggregate thingie.
        // http://doctrine-orm.readthedocs.org/en/latest/cookbook/aggregate-fields.html
        if ($this->rating == null) {
            $this->rating = rand(1,5);
        }
        return $this->rating;
    }

    public function setRating($rating) {
        $this->rating = $rating;
    }
    public function __construct()
    {
        $this->track = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->speakers = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set talkTitle
     *
     * @param text $talkTitle
     * @return Talks
     */
    public function setTalkTitle($talkTitle)
    {
        $this->talkTitle = $talkTitle;
        return $this;
    }

    /**
     * Get talkTitle
     *
     * @return text 
     */
    public function getTalkTitle()
    {
        return $this->talkTitle;
    }

    /**
     * Set speaker
     *
     * @param text $speaker
     * @return Talks
     */
    public function setSpeaker($speaker)
    {
        $this->speaker = $speaker;
        return $this;
    }

    /**
     * Get speaker
     *
     * @return text 
     */
    public function getSpeaker()
    {
        return $this->speaker;
    }

    /**
     * Set slidesLink
     *
     * @param text $slidesLink
     * @return Talks
     */
    public function setSlidesLink($slidesLink)
    {
        $this->slidesLink = $slidesLink;
        return $this;
    }

    /**
     * Get slidesLink
     *
     * @return text 
     */
    public function getSlidesLink()
    {
        return $this->slidesLink;
    }

    /**
     * Set dateGiven
     *
     * @param integer $dateGiven
     * @return Talks
     */
    public function setDateGiven($dateGiven)
    {
        $this->dateGiven = $dateGiven;
        return $this;
    }

    /**
     * Get dateGiven
     *
     * @return integer 
     */
    public function getDateGiven()
    {
        return $this->dateGiven;
    }

    /**
     * Set eventId
     *
     * @param integer $eventId
     * @return Talks
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
        return $this;
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
     * Set talkDesc
     *
     * @param text $talkDesc
     * @return Talks
     */
    public function setTalkDesc($talkDesc)
    {
        $this->talkDesc = $talkDesc;
        return $this;
    }

    /**
     * Get talkDesc
     *
     * @return text 
     */
    public function getTalkDesc()
    {
        return $this->talkDesc;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return Talks
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
     * Set ownerId
     *
     * @param integer $ownerId
     * @return Talks
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     * Get ownerId
     *
     * @return integer 
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Set lang
     *
     * @param integer $lang
     * @return Talks
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Get lang
     *
     * @return integer 
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Add track
     *
     * @param joindin\EventBundle\Entity\EventTrack $track
     * @return Talks
     */
    public function addEventTrack(\joindin\EventBundle\Entity\EventTrack $track)
    {
        $this->track[] = $track;
        return $this;
    }

    /**
     * Get track
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * Add comments
     *
     * @param joindin\TalkBundle\Entity\TalkComments $comments
     * @return Talks
     */
    public function addTalkComments(\joindin\TalkBundle\Entity\TalkComments $comments)
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
     * Add categories
     *
     * @param joindin\defaultBundle\Entity\Categories $categories
     * @return Talks
     */
    public function addCategories(\joindin\defaultBundle\Entity\Categories $categories)
    {
        $this->categories[] = $categories;
        return $this;
    }

    /**
     * Get categories
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add speakers
     *
     * @param joindin\TalkBundle\Entity\TalkSpeaker $speakers
     * @return Talks
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

    /**
     * Set language
     *
     * @param joindin\defaultBundle\Entity\Lang $language
     * @return Talks
     */
    public function setLanguage(\joindin\defaultBundle\Entity\Lang $language = null)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Get language
     *
     * @return joindin\defaultBundle\Entity\Lang 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set event
     *
     * @param joindin\EventBundle\Entity\Events $event
     * @return Talks
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