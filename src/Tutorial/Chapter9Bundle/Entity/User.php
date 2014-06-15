<?php
namespace Tutorial\Chapter9Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity
 * @ORM\Table(name="user") 
 */
class User
{
    /** 
     * @ORM\Id 
     * @ORM\GeneratedValue 
     * @ORM\Column(type="string") 
     */
    private $id;

    /**
     * Bidirectional - Many users have Many favorite comments (OWNING SIDE)
     *
     * @ORM\ManyToMany(targetEntity="Comment", inversedBy="userFavorites")
     * @ORM\JoinTable(name="user_favorite_comments")
     */
    private $favorites;

    /**
     * Unidirectional - Many users have marked many comments as read
     *
     * @ORM\ManyToMany(targetEntity="Comment")
     * @ORM\JoinTable(name="user_read_comments")
     */
    private $commentsRead;

    /**
     * Bidirectional - One-To-Many (INVERSE SIDE)
     *
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="author")
     */
    private $commentsAuthored;

    /**
     * Unidirectional - Many-To-One
     *
     * @ORM\ManyToOne(targetEntity="Comment")
     */
    private $firstComment;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->favorites = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commentsRead = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commentsAuthored = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add favorites
     *
     * @param \Tutorial\Chapter9Bundle\Entity\Comment $favorites
     * @return User
     */
    public function addFavorite(\Tutorial\Chapter9Bundle\Entity\Comment $favorites)
    {
        $this->favorites[] = $favorites;

        return $this;
    }

    /**
     * Remove favorites
     *
     * @param \Tutorial\Chapter9Bundle\Entity\Comment $favorites
     */
    public function removeFavorite(\Tutorial\Chapter9Bundle\Entity\Comment $favorites)
    {
        $this->favorites->removeElement($favorites);
    }

    /**
     * Get favorites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFavorites()
    {
        return $this->favorites;
    }

    /**
     * Add commentsRead
     *
     * @param \Tutorial\Chapter9Bundle\Entity\Comment $commentsRead
     * @return User
     */
    public function addCommentsRead(\Tutorial\Chapter9Bundle\Entity\Comment $commentsRead)
    {
        $this->commentsRead[] = $commentsRead;

        return $this;
    }

    /**
     * Remove commentsRead
     *
     * @param \Tutorial\Chapter9Bundle\Entity\Comment $commentsRead
     */
    public function removeCommentsRead(\Tutorial\Chapter9Bundle\Entity\Comment $commentsRead)
    {
        $this->commentsRead->removeElement($commentsRead);
    }

    /**
     * Get commentsRead
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentsRead()
    {
        return $this->commentsRead;
    }

    /**
     * Add commentsAuthored
     *
     * @param \Tutorial\Chapter9Bundle\Entity\Comment $commentsAuthored
     * @return User
     */
    public function addCommentsAuthored(\Tutorial\Chapter9Bundle\Entity\Comment $commentsAuthored)
    {
        $this->commentsAuthored[] = $commentsAuthored;

        return $this;
    }

    /**
     * Remove commentsAuthored
     *
     * @param \Tutorial\Chapter9Bundle\Entity\Comment $commentsAuthored
     */
    public function removeCommentsAuthored(\Tutorial\Chapter9Bundle\Entity\Comment $commentsAuthored)
    {
        $this->commentsAuthored->removeElement($commentsAuthored);
    }

    /**
     * Get commentsAuthored
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentsAuthored()
    {
        return $this->commentsAuthored;
    }

    /**
     * Set firstComment
     *
     * @param \Tutorial\Chapter9Bundle\Entity\Comment $firstComment
     * @return User
     */
    public function setFirstComment(\Tutorial\Chapter9Bundle\Entity\Comment $firstComment = null)
    {
        $this->firstComment = $firstComment;

        return $this;
    }

    /**
     * Get firstComment
     *
     * @return \Tutorial\Chapter9Bundle\Entity\Comment 
     */
    public function getFirstComment()
    {
        return $this->firstComment;
    }
}
