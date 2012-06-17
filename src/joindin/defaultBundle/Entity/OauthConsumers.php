<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\OauthConsumers
 *
 * @ORM\Table(name="oauth_consumers")
 * @ORM\Entity
 */
class OauthConsumers
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
     * @var string $consumerKey
     *
     * @ORM\Column(name="consumer_key", type="string", length=30, nullable=false)
     */
    private $consumerKey;

    /**
     * @var string $consumerSecret
     *
     * @ORM\Column(name="consumer_secret", type="string", length=10, nullable=false)
     */
    private $consumerSecret;

    /**
     * @var datetime $createdDate
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    private $createdDate;



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
     * Set consumerKey
     *
     * @param string $consumerKey
     */
    public function setConsumerKey($consumerKey)
    {
        $this->consumerKey = $consumerKey;
    }

    /**
     * Get consumerKey
     *
     * @return string 
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     * Set consumerSecret
     *
     * @param string $consumerSecret
     */
    public function setConsumerSecret($consumerSecret)
    {
        $this->consumerSecret = $consumerSecret;
    }

    /**
     * Get consumerSecret
     *
     * @return string 
     */
    public function getConsumerSecret()
    {
        return $this->consumerSecret;
    }

    /**
     * Set createdDate
     *
     * @param datetime $createdDate
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * Get createdDate
     *
     * @return datetime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }
}