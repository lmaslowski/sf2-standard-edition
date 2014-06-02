<?php
namespace Example1\JobBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Job
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @var unknown
     */
    private $company;

    /**
     * @ORM\Column(type="string", length=100)
     * @var unknown
     */
    private $title;
    
    
    /**
     * @ORM\Column(type="string", length=255)
     * @var unknown
     */
    private $decrtiption;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @var unknown
     */
    private $date;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @var unknown
     */
    private $gitHubId;

    /**
     * Get id
     *
     * @return \intger 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return Job
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Job
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
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
     * Set decrtiption
     *
     * @param string $decrtiption
     * @return Job
     */
    public function setDecrtiption($decrtiption)
    {
        $this->decrtiption = $decrtiption;

        return $this;
    }

    /**
     * Get decrtiption
     *
     * @return string 
     */
    public function getDecrtiption()
    {
        return $this->decrtiption;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return Job
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set gitHubId
     *
     * @param string $gitHubId
     * @return Job
     */
    public function setGitHubId($gitHubId)
    {
        $this->gitHubId = $gitHubId;

        return $this;
    }

    /**
     * Get gitHubId
     *
     * @return string 
     */
    public function getGitHubId()
    {
        return $this->gitHubId;
    }
}
