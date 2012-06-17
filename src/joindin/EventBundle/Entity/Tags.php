<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\Tags
 *
 * @ORM\Table(name="tags")
 * @ORM\Entity
 */
class Tags
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
     * @var string $tagValue
     *
     * @ORM\Column(name="tag_value", type="string", length=200, nullable=true)
     */
    private $tagValue;



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
     * Set tagValue
     *
     * @param string $tagValue
     */
    public function setTagValue($tagValue)
    {
        $this->tagValue = $tagValue;
    }

    /**
     * Get tagValue
     *
     * @return string 
     */
    public function getTagValue()
    {
        return $this->tagValue;
    }
}