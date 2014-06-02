<?php
namespace Example1\JobBundle\Dao;

class JobDaoDoctrineImpl implements JobDao
{
    protected $entityManager;
    protected $repository;
    
    public function JobDaoDoctrineImpl(\Doctrine\ORM\EntityManager $entityManager){
        $this->entityManager = $entityManager;
    }

    protected function getEntityManager(){
        return $this->entityManager;
    }    
    
    protected function getRepository(){
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
        $this->getEntityManager()->flush();
        return $job;
    }
    
    public function deleteJob(Job $job){
        $this->getEntityManager()->persist(job);
        $this->getEntityManager()->flush();
        return $job;
    }
}