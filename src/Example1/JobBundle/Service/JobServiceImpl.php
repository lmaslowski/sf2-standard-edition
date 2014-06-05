<?php
namespace Example1\JobBundle\Service;
use Example1\JobBundle\Service\JobService;
use Example1\JobBundle\Dao\JobDao;
use Example1\JobBundle\Entity\Job;
class JobServiceImpl implements JobService{
    private $jobDao;
    
    public function __construct(JobDao $jobDao){
        $this->jobDao = $jobDao;
    }
    
    public function getJobDao(){
        return $this->jobDao;
    }
    
    public function getJobs(){
        $jobs = $this->getJobDao()->getJobs();
        return $jobs;
    }
    
    public function find($id){
        try{
            $job = $this->getJobDao()->find($id);
            return $job;
        }catch(Exception $e){
            throw $e;
        }
    }
    
    public function createJob(Job $job){
        $job = $this->getJobDao()->createJob($job);
        return $job;
    }
    
    public function deleteJob(Job $jon){
        $job = $this->getJobDao()->deleteJob($job);
        return $job;
    }
    
    public function updateJob(Job $job){
        $job = $this->getJobDao()->updateJob($job);
        return $job;
    }
}