<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\Talks
 *
 * @ORM\Table(name="talks")
 * @ORM\Entity
 */
class Talks
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
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
}