<?php

namespace ji\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ji\defaultBundle\Entity\EventTrack
 *
 * @ORM\Table(name="event_track")
 * @ORM\Entity
 */
class EventTrack
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
     * @var integer $eventId
     *
     * @ORM\Column(name="event_id", type="integer", nullable=true)
     */
    private $eventId;

    /**
     * @var string $trackName
     *
     * @ORM\Column(name="track_name", type="string", length=300, nullable=true)
     */
    private $trackName;

    /**
     * @var text $trackDesc
     *
     * @ORM\Column(name="track_desc", type="text", nullable=true)
     */
    private $trackDesc;

    /**
     * @var string $trackColor
     *
     * @ORM\Column(name="track_color", type="string", length=6, nullable=true)
     */
    private $trackColor;



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
     * Set trackName
     *
     * @param string $trackName
     */
    public function setTrackName($trackName)
    {
        $this->trackName = $trackName;
    }

    /**
     * Get trackName
     *
     * @return string 
     */
    public function getTrackName()
    {
        return $this->trackName;
    }

    /**
     * Set trackDesc
     *
     * @param text $trackDesc
     */
    public function setTrackDesc($trackDesc)
    {
        $this->trackDesc = $trackDesc;
    }

    /**
     * Get trackDesc
     *
     * @return text 
     */
    public function getTrackDesc()
    {
        return $this->trackDesc;
    }

    /**
     * Set trackColor
     *
     * @param string $trackColor
     */
    public function setTrackColor($trackColor)
    {
        $this->trackColor = $trackColor;
    }

    /**
     * Get trackColor
     *
     * @return string 
     */
    public function getTrackColor()
    {
        return $this->trackColor;
    }
}