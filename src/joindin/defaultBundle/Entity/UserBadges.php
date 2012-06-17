<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\UserBadges
 *
 * @ORM\Table(name="user_badges")
 * @ORM\Entity
 */
class UserBadges
{
    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var integer $badgeId
     *
     * @ORM\Column(name="badge_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $badgeId;

    /**
     * @var integer $level
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;



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
     * Set badgeId
     *
     * @param integer $badgeId
     */
    public function setBadgeId($badgeId)
    {
        $this->badgeId = $badgeId;
    }

    /**
     * Get badgeId
     *
     * @return integer 
     */
    public function getBadgeId()
    {
        return $this->badgeId;
    }

    /**
     * Set level
     *
     * @param integer $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }
}