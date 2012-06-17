<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\OauthRequestTokens
 *
 * @ORM\Table(name="oauth_request_tokens")
 * @ORM\Entity
 */
class OauthRequestTokens
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
     * @var string $requestToken
     *
     * @ORM\Column(name="request_token", type="string", length=8, nullable=false)
     */
    private $requestToken;

    /**
     * @var string $requestTokenSecret
     *
     * @ORM\Column(name="request_token_secret", type="string", length=32, nullable=false)
     */
    private $requestTokenSecret;

    /**
     * @var string $callback
     *
     * @ORM\Column(name="callback", type="string", length=400, nullable=true)
     */
    private $callback;

    /**
     * @var string $verification
     *
     * @ORM\Column(name="verification", type="string", length=20, nullable=true)
     */
    private $verification;

    /**
     * @var integer $authorisedUserId
     *
     * @ORM\Column(name="authorised_user_id", type="integer", nullable=true)
     */
    private $authorisedUserId;

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
     * Set requestToken
     *
     * @param string $requestToken
     */
    public function setRequestToken($requestToken)
    {
        $this->requestToken = $requestToken;
    }

    /**
     * Get requestToken
     *
     * @return string 
     */
    public function getRequestToken()
    {
        return $this->requestToken;
    }

    /**
     * Set requestTokenSecret
     *
     * @param string $requestTokenSecret
     */
    public function setRequestTokenSecret($requestTokenSecret)
    {
        $this->requestTokenSecret = $requestTokenSecret;
    }

    /**
     * Get requestTokenSecret
     *
     * @return string 
     */
    public function getRequestTokenSecret()
    {
        return $this->requestTokenSecret;
    }

    /**
     * Set callback
     *
     * @param string $callback
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
    }

    /**
     * Get callback
     *
     * @return string 
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * Set verification
     *
     * @param string $verification
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;
    }

    /**
     * Get verification
     *
     * @return string 
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Set authorisedUserId
     *
     * @param integer $authorisedUserId
     */
    public function setAuthorisedUserId($authorisedUserId)
    {
        $this->authorisedUserId = $authorisedUserId;
    }

    /**
     * Get authorisedUserId
     *
     * @return integer 
     */
    public function getAuthorisedUserId()
    {
        return $this->authorisedUserId;
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