<?php

namespace ji\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ji\defaultBundle\Entity\Badges
 *
 * @ORM\Table(name="badges")
 * @ORM\Entity
 */
class Badges
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=false)
     */
    private $description;

    /**
     * @var string $levels
     *
     * @ORM\Column(name="levels", type="string", length=100, nullable=false)
     */
    private $levels;



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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Set levels
     *
     * @param string $levels
     */
    public function setLevels($levels)
    {
        $this->levels = $levels;
    }

    /**
     * Get levels
     *
     * @return string 
     */
    public function getLevels()
    {
        return $this->levels;
    }
}