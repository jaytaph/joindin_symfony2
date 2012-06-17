<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\TalkTrack
 *
 * @ORM\Table(name="talk_track")
 * @ORM\Entity
 */
class TalkTrack
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
     * @var integer $talkId
     *
     * @ORM\Column(name="talk_id", type="integer", nullable=true)
     */
    private $talkId;

    /**
     * @var integer $trackId
     *
     * @ORM\Column(name="track_id", type="integer", nullable=true)
     */
    private $trackId;



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
     * Set talkId
     *
     * @param integer $talkId
     */
    public function setTalkId($talkId)
    {
        $this->talkId = $talkId;
    }

    /**
     * Get talkId
     *
     * @return integer 
     */
    public function getTalkId()
    {
        return $this->talkId;
    }

    /**
     * Set trackId
     *
     * @param integer $trackId
     */
    public function setTrackId($trackId)
    {
        $this->trackId = $trackId;
    }

    /**
     * Get trackId
     *
     * @return integer 
     */
    public function getTrackId()
    {
        return $this->trackId;
    }
}