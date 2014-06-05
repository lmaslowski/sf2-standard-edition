<?php
namespace Orm\TutorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Orm\TutorialBundle\Entity\User as User;
use Orm\TutorialBundle\Entity\Product as Product;
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
    protected $status;

    /**
     * @ORM\ManyToOne(targetEntity="User",inversedBy="assignedBugs")
     * @var unknown
     */
    protected $engineer;
    
    /**
     * @ORM\ManyToOne(targetEntity="User",inversedBy="reportedBugs")
     * @var unknown
     */
    protected $reporter;
    
    /**
     * @ORM\ManyToMany(targetEntity="Product")
     */
    protected $products;

    public function __construct(){
        $this->products = new ArrayCollection();
        
    }
    
    public function setEngineer($enginner){
        $this->engineer = $enginner;
    }
    
    public function getEnginner(){
        return $this->enginner;
    }
    
    public function setReporter($reporter){
        $this->reporter = $reporter;
    }
    
    public function getReporter(){
        return $this->reporter;
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
    public function setStatus($statius)
    {
        $this->status = $statius;

        return $this;
    }

    /**
     * Get statius
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
