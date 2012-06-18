<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
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
     * @var string $catTitle
     *
     * @ORM\Column(name="cat_title", type="string", length=200, nullable=true)
     */
    private $catTitle;

    /**
     * @var text $catDesc
     *
     * @ORM\Column(name="cat_desc", type="text", nullable=true)
     */
    private $catDesc;



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
     * Set catTitle
     *
     * @param string $catTitle
     */
    public function setCatTitle($catTitle)
    {
        $this->catTitle = $catTitle;
    }

    /**
     * Get catTitle
     *
     * @return string 
     */
    public function getCatTitle()
    {
        return $this->catTitle;
    }

    /**
     * Set catDesc
     *
     * @param text $catDesc
     */
    public function setCatDesc($catDesc)
    {
        $this->catDesc = $catDesc;
    }

    /**
     * Get catDesc
     *
     * @return text 
     */
    public function getCatDesc()
    {
        return $this->catDesc;
    }
}