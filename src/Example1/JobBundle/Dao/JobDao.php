<?php
namespace Example1\JobBundle\Dao;

use Example1\JobBundle\Entity\Job;

interface JobDao{
    
    /**
     * @return Job[]
     */
    public function getJobs();

    /**
     * 
     * @param Job $job
     * @return void
     */
    public function createJob(Job $job);
    
    /**
     * 
     * @param Job $job
     * @return void
     */
    public function updateJob(Job $job);
    
    /**
     * @param Job $job
     * @return void
     */
    public function deleteJob(Job $job);
    
    /**
     * @param unknown $id
     * @reuturn Job
     */
    public function find($id);
}