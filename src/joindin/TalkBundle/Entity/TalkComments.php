<?php

namespace joindin\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * joindin\defaultBundle\Entity\TalkComments
 *
 * @ORM\Table(name="talk_comments")
 * @ORM\Entity
 */
class TalkComments
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
     * @var integer $talkId
     *
     * @ORM\Column(name="talk_id", type="integer", nullable=true)
     */
    private $talkId;

    /**
     * @var integer $rating
     *
     * @ORM\Column(name="rating", type="integer", nullable=true)
     */
    private $rating;

    /**
     * @var text $comment
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var integer $dateMade
     *
     * @ORM\Column(name="date_made", type="integer", nullable=true)
     */
    private $dateMade;

    /**
     * @var integer $private
     *
     * @ORM\Column(name="private", type="integer", nullable=true)
     */
    private $private;

    /**
     * @var integer $active
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string $commentType
     *
     * @ORM\Column(name="comment_type", type="string", length=10, nullable=true)
     */
    private $commentType;

    /**
     * @var string $source
     *
     * @ORM\Column(name="source", type="string", length=25, nullable=true)
     */
    private $source;



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
     * Set talkId
     *
     * @param integer $talkId
     */
    public function setTalkId($talkId)
    {
        $this->talkId = $talkId;
    }

    /**
     * Get talkId
     *
     * @return integer 
     */
    public function getTalkId()
    {
        return $this->talkId;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set comment
     *
     * @param text $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return text 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set dateMade
     *
     * @param integer $dateMade
     */
    public function setDateMade($dateMade)
    {
        $this->dateMade = $dateMade;
    }

    /**
     * Get dateMade
     *
     * @return integer 
     */
    public function getDateMade()
    {
        return $this->dateMade;
    }

    /**
     * Set private
     *
     * @param integer $private
     */
    public function setPrivate($private)
    {
        $this->private = $private;
    }

    /**
     * Get private
     *
     * @return integer 
     */
    public function getPrivate()
    {
        return $this->private;
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
     * Set commentType
     *
     * @param string $commentType
     */
    public function setCommentType($commentType)
    {
        $this->commentType = $commentType;
    }

    /**
     * Get commentType
     *
     * @return string 
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * Set source
     *
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }
}