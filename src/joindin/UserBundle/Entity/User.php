<?php

namespace joindin\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\UserBundle\Entity\User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
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
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=100, nullable=true)
     */
    private $username;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=true)
     */
    private $password;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=true)
     */
    private $email;

    /**
     * @var integer $lastLogin
     *
     * @ORM\Column(name="last_login", type="integer", nullable=true)
     */
    private $lastLogin;

    /**
     * @var integer $admin
     *
     * @ORM\Column(name="admin", type="integer", nullable=true)
     */
    private $admin;

    /**
     * @var string $fullName
     *
     * @ORM\Column(name="full_name", type="string", length=200, nullable=true)
     */
    private $fullName;

    /**
     * @var integer $active
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    /**
     * @var string $twitterUsername
     *
     * @ORM\Column(name="twitter_username", type="string", length=20, nullable=true)
     */
    private $twitterUsername;

    /**
     * @var string $requestCode
     *
     * @ORM\Column(name="request_code", type="string", length=8, nullable=true)
     */
    private $requestCode;


    /**
     * @ORM\OneToMany(targetEntity="joindin\EventBundle\Entity\EventAdmin", mappedBy="user")
     */
    protected $admins;


    // protected $events_attended;



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
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set lastLogin
     *
     * @param integer $lastLogin
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
    }

    /**
     * Get lastLogin
     *
     * @return integer 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set admin
     *
     * @param integer $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    /**
     * Get admin
     *
     * @return integer 
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set fullName
     *
     * @param string $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
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
     * Set twitterUsername
     *
     * @param string $twitterUsername
     */
    public function setTwitterUsername($twitterUsername)
    {
        $this->twitterUsername = $twitterUsername;
    }

    /**
     * Get twitterUsername
     *
     * @return string 
     */
    public function getTwitterUsername()
    {
        return $this->twitterUsername;
    }

    /**
     * Set requestCode
     *
     * @param string $requestCode
     */
    public function setRequestCode($requestCode)
    {
        $this->requestCode = $requestCode;
    }

    /**
     * Get requestCode
     *
     * @return string 
     */
    public function getRequestCode()
    {
        return $this->requestCode;
    }
    public function __construct()
    {
        $this->admins = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add admins
     *
     * @param joindin\EventBundle\Entity\EventAdmin $admins
     * @return User
     */
    public function addEventAdmin(\joindin\EventBundle\Entity\EventAdmin $admins)
    {
        $this->admins[] = $admins;
        return $this;
    }

    /**
     * Get admins
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAdmins()
    {
        return $this->admins;
    }
}