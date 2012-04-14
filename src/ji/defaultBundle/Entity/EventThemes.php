<?php

namespace ji\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ji\defaultBundle\Entity\EventThemes
 *
 * @ORM\Table(name="event_themes")
 * @ORM\Entity
 */
class EventThemes
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
     * @var string $themeName
     *
     * @ORM\Column(name="theme_name", type="string", length=200, nullable=true)
     */
    private $themeName;

    /**
     * @var text $themeDesc
     *
     * @ORM\Column(name="theme_desc", type="text", nullable=true)
     */
    private $themeDesc;

    /**
     * @var integer $active
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    /**
     * @var integer $eventId
     *
     * @ORM\Column(name="event_id", type="integer", nullable=true)
     */
    private $eventId;

    /**
     * @var string $cssFile
     *
     * @ORM\Column(name="css_file", type="string", length=200, nullable=true)
     */
    private $cssFile;

    /**
     * @var integer $createdBy
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy;

    /**
     * @var integer $createdAt
     *
     * @ORM\Column(name="created_at", type="integer", nullable=true)
     */
    private $createdAt;



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
     * Set themeName
     *
     * @param string $themeName
     */
    public function setThemeName($themeName)
    {
        $this->themeName = $themeName;
    }

    /**
     * Get themeName
     *
     * @return string 
     */
    public function getThemeName()
    {
        return $this->themeName;
    }

    /**
     * Set themeDesc
     *
     * @param text $themeDesc
     */
    public function setThemeDesc($themeDesc)
    {
        $this->themeDesc = $themeDesc;
    }

    /**
     * Get themeDesc
     *
     * @return text 
     */
    public function getThemeDesc()
    {
        return $this->themeDesc;
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
     * Set cssFile
     *
     * @param string $cssFile
     */
    public function setCssFile($cssFile)
    {
        $this->cssFile = $cssFile;
    }

    /**
     * Get cssFile
     *
     * @return string 
     */
    public function getCssFile()
    {
        return $this->cssFile;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * Get createdBy
     *
     * @return integer 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set createdAt
     *
     * @param integer $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return integer 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}