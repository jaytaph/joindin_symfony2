<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\MetaData
 *
 * @ORM\Table(name="meta_data")
 * @ORM\Entity
 */
class MetaData
{
    /**
     * @var string $entry
     *
     * @ORM\Column(name="entry", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entry;

    /**
     * @var string $value
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;



    /**
     * Get entry
     *
     * @return string 
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Set value
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}