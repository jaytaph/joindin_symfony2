<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\OauthAccessTokens
 *
 * @ORM\Table(name="oauth_access_tokens")
 * @ORM\Entity
 */
class OauthAccessTokens
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
     * @var string $accessToken
     *
     * @ORM\Column(name="access_token", type="string", length=16, nullable=false)
     */
    private $accessToken;

    /**
     * @var string $accessTokenSecret
     *
     * @ORM\Column(name="access_token_secret", type="string", length=32, nullable=false)
     */
    private $accessTokenSecret;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var datetime $createdDate
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    private $createdDate;

    /**
     * @var datetime $lastUsedDate
     *
     * @ORM\Column(name="last_used_date", type="datetime", nullable=true)
     */
    private $lastUsedDate;



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
     * Set accessToken
     *
     * @param string $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * Get accessToken
     *
     * @return string 
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Set accessTokenSecret
     *
     * @param string $accessTokenSecret
     */
    public function setAccessTokenSecret($accessTokenSecret)
    {
        $this->accessTokenSecret = $accessTokenSecret;
    }

    /**
     * Get accessTokenSecret
     *
     * @return string 
     */
    public function getAccessTokenSecret()
    {
        return $this->accessTokenSecret;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
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

    /**
     * Set lastUsedDate
     *
     * @param datetime $lastUsedDate
     */
    public function setLastUsedDate($lastUsedDate)
    {
        $this->lastUsedDate = $lastUsedDate;
    }

    /**
     * Get lastUsedDate
     *
     * @return datetime 
     */
    public function getLastUsedDate()
    {
        return $this->lastUsedDate;
    }
}