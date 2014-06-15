<?php
namespace Orm\TutorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table (name="user_orm_tutorial")
 */
class User{
    /**
     * @Doctrine\ORM\Mapping\Column(type="integer")
     * @Doctrine\ORM\Mapping\Id
     * @Doctrine\ORM\Mapping\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @Doctrine\ORM\Mapping\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="Bug", mappedBy="reporter")
     */
    protected $reportedBugs ;
    
    /**
     * @ORM\OneToMany(targetEntity="Bug", mappedBy="enginner")
     */
    protected $assignedBugs;
    
    public function __construct(){
        $this->reportedBugs = new ArrayCollection();
        $this->assingedBugs = new ArrayCollection();
    }
    
    public function addReportedBug($bug)
    {
        $this->reportedBugs[] = $bug;
    }
    
    public function assignedToBug($bug)
    {
        $this->assignedBugs[] = $bug;
    }
    
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
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
