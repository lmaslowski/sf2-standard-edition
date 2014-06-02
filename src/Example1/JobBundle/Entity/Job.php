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
     * @ORM\Column(type="intger")
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
}