<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\SpeakerTokens
 *
 * @ORM\Table(name="speaker_tokens")
 * @ORM\Entity
 */
class SpeakerTokens
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
     * @var integer $speakerProfileId
     *
     * @ORM\Column(name="speaker_profile_id", type="integer", nullable=true)
     */
    private $speakerProfileId;

    /**
     * @var string $accessToken
     *
     * @ORM\Column(name="access_token", type="string", length=50, nullable=true)
     */
    private $accessToken;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @var integer $created
     *
     * @ORM\Column(name="created", type="integer", nullable=true)
     */
    private $created;



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
     * Set speakerProfileId
     *
     * @param integer $speakerProfileId
     */
    public function setSpeakerProfileId($speakerProfileId)
    {
        $this->speakerProfileId = $speakerProfileId;
    }

    /**
     * Get speakerProfileId
     *
     * @return integer 
     */
    public function getSpeakerProfileId()
    {
        return $this->speakerProfileId;
    }

    /**
     * Set accessToken
     *
     * @param string $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * Get accessToken
     *
     * @return string 
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set created
     *
     * @param integer $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }
}