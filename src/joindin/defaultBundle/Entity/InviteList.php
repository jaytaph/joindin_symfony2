<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\InviteList
 *
 * @ORM\Table(name="invite_list")
 * @ORM\Entity
 */
class InviteList
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
     * @var integer $eid
     *
     * @ORM\Column(name="eid", type="integer", nullable=true)
     */
    private $eid;

    /**
     * @var integer $uid
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid;

    /**
     * @var string $accepted
     *
     * @ORM\Column(name="accepted", type="string", length=1, nullable=true)
     */
    private $accepted;

    /**
     * @var integer $dateAdded
     *
     * @ORM\Column(name="date_added", type="integer", nullable=true)
     */
    private $dateAdded;



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
     * Set eid
     *
     * @param integer $eid
     */
    public function setEid($eid)
    {
        $this->eid = $eid;
    }

    /**
     * Get eid
     *
     * @return integer 
     */
    public function getEid()
    {
        return $this->eid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set accepted
     *
     * @param string $accepted
     */
    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;
    }

    /**
     * Get accepted
     *
     * @return string 
     */
    public function getAccepted()
    {
        return $this->accepted;
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
}