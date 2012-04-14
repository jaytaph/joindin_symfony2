<?php

namespace ji\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ji\defaultBundle\Entity\PendingTalkClaims
 *
 * @ORM\Table(name="pending_talk_claims")
 * @ORM\Entity
 */
class PendingTalkClaims
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
     * @var integer $submittedBy
     *
     * @ORM\Column(name="submitted_by", type="integer", nullable=true)
     */
    private $submittedBy;

    /**
     * @var integer $speakerId
     *
     * @ORM\Column(name="speaker_id", type="integer", nullable=true)
     */
    private $speakerId;

    /**
     * @var integer $dateAdded
     *
     * @ORM\Column(name="date_added", type="integer", nullable=true)
     */
    private $dateAdded;

    /**
     * @var integer $claimId
     *
     * @ORM\Column(name="claim_id", type="integer", nullable=true)
     */
    private $claimId;



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
     * Set submittedBy
     *
     * @param integer $submittedBy
     */
    public function setSubmittedBy($submittedBy)
    {
        $this->submittedBy = $submittedBy;
    }

    /**
     * Get submittedBy
     *
     * @return integer 
     */
    public function getSubmittedBy()
    {
        return $this->submittedBy;
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
     * Set dateAdded
     *
     * @param integer $dateAdded
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;
    }

    /**
     * Get dateAdded
     *
     * @return integer 
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set claimId
     *
     * @param integer $claimId
     */
    public function setClaimId($claimId)
    {
        $this->claimId = $claimId;
    }

    /**
     * Get claimId
     *
     * @return integer 
     */
    public function getClaimId()
    {
        return $this->claimId;
    }
}