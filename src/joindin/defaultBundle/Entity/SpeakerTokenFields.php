<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\SpeakerTokenFields
 *
 * @ORM\Table(name="speaker_token_fields")
 * @ORM\Entity
 */
class SpeakerTokenFields
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
     * @var integer $speakerTokenId
     *
     * @ORM\Column(name="speaker_token_id", type="integer", nullable=true)
     */
    private $speakerTokenId;

    /**
     * @var string $fieldName
     *
     * @ORM\Column(name="field_name", type="string", length=200, nullable=true)
     */
    private $fieldName;



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
     * Set speakerTokenId
     *
     * @param integer $speakerTokenId
     */
    public function setSpeakerTokenId($speakerTokenId)
    {
        $this->speakerTokenId = $speakerTokenId;
    }

    /**
     * Get speakerTokenId
     *
     * @return integer 
     */
    public function getSpeakerTokenId()
    {
        return $this->speakerTokenId;
    }

    /**
     * Set fieldName
     *
     * @param string $fieldName
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
    }

    /**
     * Get fieldName
     *
     * @return string 
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }
}