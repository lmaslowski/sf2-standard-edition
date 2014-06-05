<?php
namespace Orm\TutorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table (name="bug")
 *
 */
class Bug{
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string")
     * @var unknown
     */
    protected $description;
    
    /**
     * @ORM\Column(type="string")
     * @var unknown
     */
    protected $created;
    
    /**
    * @ORM\Column(type="string")
    * @var unknown
    */   
    protected $statius;

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
     * Set description
     *
     * @param string $description
     * @return Bug
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set created
     *
     * @param string $created
     * @return Bug
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return string 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set statius
     *
     * @param string $statius
     * @return Bug
     */
    public function setStatius($statius)
    {
        $this->statius = $statius;

        return $this;
    }

    /**
     * Get statius
     *
     * @return string 
     */
    public function getStatius()
    {
        return $this->statius;
    }
}
