<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\UserAdmin
 *
 * @ORM\Table(name="user_admin")
 * @ORM\Entity
 */
class UserAdmin
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
     * @var integer $uid
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid;

    /**
     * @var integer $rid
     *
     * @ORM\Column(name="rid", type="integer", nullable=true)
     */
    private $rid;

    /**
     * @var string $rtype
     *
     * @ORM\Column(name="rtype", type="string", length=20, nullable=true)
     */
    private $rtype;

    /**
     * @var string $rcode
     *
     * @ORM\Column(name="rcode", type="string", length=40, nullable=true)
     */
    private $rcode;



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
     * Set rid
     *
     * @param integer $rid
     */
    public function setRid($rid)
    {
        $this->rid = $rid;
    }

    /**
     * Get rid
     *
     * @return integer 
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * Set rtype
     *
     * @param string $rtype
     */
    public function setRtype($rtype)
    {
        $this->rtype = $rtype;
    }

    /**
     * Get rtype
     *
     * @return string 
     */
    public function getRtype()
    {
        return $this->rtype;
    }

    /**
     * Set rcode
     *
     * @param string $rcode
     */
    public function setRcode($rcode)
    {
        $this->rcode = $rcode;
    }

    /**
     * Get rcode
     *
     * @return string 
     */
    public function getRcode()
    {
        return $this->rcode;
    }
}