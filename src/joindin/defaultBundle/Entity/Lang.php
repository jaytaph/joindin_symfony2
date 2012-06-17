<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\Lang
 *
 * @ORM\Table(name="lang")
 * @ORM\Entity
 */
class Lang
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
     * @var string $langName
     *
     * @ORM\Column(name="lang_name", type="string", length=200, nullable=true)
     */
    private $langName;

    /**
     * @var string $langAbbr
     *
     * @ORM\Column(name="lang_abbr", type="string", length=20, nullable=true)
     */
    private $langAbbr;



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
     * Set langName
     *
     * @param string $langName
     */
    public function setLangName($langName)
    {
        $this->langName = $langName;
    }

    /**
     * Get langName
     *
     * @return string 
     */
    public function getLangName()
    {
        return $this->langName;
    }

    /**
     * Set langAbbr
     *
     * @param string $langAbbr
     */
    public function setLangAbbr($langAbbr)
    {
        $this->langAbbr = $langAbbr;
    }

    /**
     * Get langAbbr
     *
     * @return string 
     */
    public function getLangAbbr()
    {
        return $this->langAbbr;
    }
}