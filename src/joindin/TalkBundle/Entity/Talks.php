<?php

namespace joindin\TalkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\TalkBundle\Entity\Talks
 *
 * @ORM\Table(name="talks")
 * @ORM\Entity
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

    /**
     * @ORM\ManyToOne(targetEntity="joindin\EventBundle\Entity\Events", inversedBy="id")
     */
    protected $event;


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
     */
    public function setTalkTitle($talkTitle)
    {
        $this->talkTitle = $talkTitle;
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
     */
    public function setSpeaker($speaker)
    {
        $this->speaker = $speaker;
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
     */
    public function setSlidesLink($slidesLink)
    {
        $this->slidesLink = $slidesLink;
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
     */
    public function setDateGiven($dateGiven)
    {
        $this->dateGiven = $dateGiven;
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
     * Set talkDesc
     *
     * @param text $talkDesc
     */
    public function setTalkDesc($talkDesc)
    {
        $this->talkDesc = $talkDesc;
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
     * Set ownerId
     *
     * @param integer $ownerId
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
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
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
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
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
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
}