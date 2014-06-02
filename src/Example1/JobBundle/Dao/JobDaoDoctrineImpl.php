<?php
namespace Example1\JobBundle\Dao;

use Example1\JobBundle\Dao\JobDao;
use Example1\JobBundle\Entity\Job;

class JobDaoDoctrineImpl implements JobDao
{
    public $entityManager;
    public $repository;
    
    public function __construct(\Doctrine\ORM\EntityManager $entityManager = null){
        $this->entityManager = $entityManager;
    }

    public function setEntityManager(\Doctrine\ORM\EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }
    
    
    public function getEntityManager(){
        return $this->entityManager;
    }    
    
    public function getRepository(){
        return $this->getEntityManager()->getRepository('Example1JobBundle:Job');
    }
    
    public function getJobs(){
         return $this->getRepository()->findAll();   
    }
    
    public function find($id){
        return $this->getRepository()->find($id);
    }
    
    public function createJob(Job $job){
        $this->getEntityManager()->persist($job);
        $this->getEntityManager()->flush();
        return $job;
    }
    
    public function updateJob(Job $job){
        $this->getEntityManager()->persist(job);
        $this->getEntityManaeger()->flush();
        return $job;
    }
    
    public function deleteJob(Job $job){
        $this->getEntityManager()->persist(job);
        $this->getEntityManager()->flush();
        return $job;
    }
}