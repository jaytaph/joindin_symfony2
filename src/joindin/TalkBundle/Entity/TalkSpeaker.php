<?php

namespace joindin\TalkBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\TalkBundle\Entity\TalkSpeaker
 *
 * @ORM\Table(name="talk_speaker")
 * @ORM\Entity(repositoryClass="joindin\TalkBundle\Repository\TalkSpeakerRepository")
 */
class TalkSpeaker
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
     * @var integer $talkId
     *
     * @ORM\Column(name="talk_id", type="integer", nullable=false)
     */
    private $talkId;

    /**
     * @var string $speakerName
     *
     * @ORM\Column(name="speaker_name", type="string", length=200, nullable=true)
     */
    private $speakerName;

    /**
     * @var integer $speakerId
     *
     * @ORM\Column(name="speaker_id", type="integer", nullable=true)
     */
    private $speakerId;

    /**
     * @var string $status
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;


    /**
     * @ORM\ManyToOne(targetEntity="joindin\TalkBundle\Entity\Talks", inversedBy="id")
     */
    protected $talk;

    /**
     * @ORM\ManyToOne(targetEntity="joindin\UserBundle\Entity\User", inversedBy="id")
     * @ORM\JoinColumn(name="speaker_id", referencedColumnName="id")
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
     * Set speakerName
     *
     * @param string $speakerName
     */
    public function setSpeakerName($speakerName)
    {
        $this->speakerName = $speakerName;
    }

    /**
     * Get speakerName
     *
     * @return string 
     */
    public function getSpeakerName()
    {
        return $this->speakerName;
    }

    /**
     * Set speakerId
     *
     * @param integer $speakerId
     */
    public function setSpeakerId($speakerId)
    {
        $this->speakerId = $speakerId;
    }

    /**
     * Get speakerId
     *
     * @return integer 
     */
    public function getSpeakerId()
    {
        return $this->speakerId;
    }

    /**
     * Set status
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set talk
     *
     * @param joindin\TalkBundle\Entity\Talks $talk
     * @return TalkSpeaker
     */
    public function setTalk(\joindin\TalkBundle\Entity\Talks $talk = null)
    {
        $this->talk = $talk;
        return $this;
    }

    /**
     * Get talk
     *
     * @return joindin\TalkBundle\Entity\Talks 
     */
    public function getTalk()
    {
        return $this->talk;
    }

    /**
     * Set user
     *
     * @param joindin\UserBundle\Entity\User $user
     * @return TalkSpeaker
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
}