<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\UserAttend
 *
 * @ORM\Table(name="user_attend")
 * @ORM\Entity
 */
class UserAttend
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
     * @var integer $uid
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid;

    /**
     * @var integer $eid
     *
     * @ORM\Column(name="eid", type="integer", nullable=true)
     */
    private $eid;



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
}