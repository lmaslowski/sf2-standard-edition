<?php
namespace Tutorial\Chapter9Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity
 * @ORM\Table(name="comment") 
 */
class Comment
{
    /** 
     * @ORM\Id
     * @ORM\GeneratedValue 
     * @ORM\Column(type="string") 
     */
    private $id;

    /**
     * Bidirectional - Many comments are favorited by many users (INVERSE SIDE)
     *
     * @ORM\ManyToMany(targetEntity="User", mappedBy="favorites")
     */
    private $userFavorites;

    /**
     * Bidirectional - Many Comments are authored by one user (OWNING SIDE)
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="commentsAuthored")
     */
    private $author;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userFavorites = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add userFavorites
     *
     * @param \Tutorial\Chapter9Bundle\Entity\User $userFavorites
     * @return Comment
     */
    public function addUserFavorite(\Tutorial\Chapter9Bundle\Entity\User $userFavorites)
    {
        $this->userFavorites[] = $userFavorites;

        return $this;
    }

    /**
     * Remove userFavorites
     *
     * @param \Tutorial\Chapter9Bundle\Entity\User $userFavorites
     */
    public function removeUserFavorite(\Tutorial\Chapter9Bundle\Entity\User $userFavorites)
    {
        $this->userFavorites->removeElement($userFavorites);
    }

    /**
     * Get userFavorites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserFavorites()
    {
        return $this->userFavorites;
    }

    /**
     * Set author
     *
     * @param \Tutorial\Chapter9Bundle\Entity\User $author
     * @return Comment
     */
    public function setAuthor(\Tutorial\Chapter9Bundle\Entity\User $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \Tutorial\Chapter9Bundle\Entity\User 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
