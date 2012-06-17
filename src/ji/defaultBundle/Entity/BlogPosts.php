<?php

namespace ji\defaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ji\defaultBundle\Entity\BlogPosts
 *
 * @ORM\Table(name="blog_posts")
 * @ORM\Entity
 */
class BlogPosts
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
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=250, nullable=true)
     */
    private $title;

    /**
     * @var text $content
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var integer $datePosted
     *
     * @ORM\Column(name="date_posted", type="integer", nullable=true)
     */
    private $datePosted;

    /**
     * @var integer $authorId
     *
     * @ORM\Column(name="author_id", type="integer", nullable=true)
     */
    private $authorId;

    /**
     * @var integer $views
     *
     * @ORM\Column(name="views", type="integer", nullable=true)
     */
    private $views;



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
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param text $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return text 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set datePosted
     *
     * @param integer $datePosted
     */
    public function setDatePosted($datePosted)
    {
        $this->datePosted = $datePosted;
    }

    /**
     * Get datePosted
     *
     * @return integer 
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }

    /**
     * Set authorId
     *
     * @param integer $authorId
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
    }

    /**
     * Get authorId
     *
     * @return integer 
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set views
     *
     * @param integer $views
     */
    public function setViews($views)
    {
        $this->views = $views;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }
}