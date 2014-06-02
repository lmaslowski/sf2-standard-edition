<?php
namespace Example1\JobBundle\Service;

use Example1\JobBundle\Entity\Job;
interface JobService{
    public function getJobs();
    public function find($id);
    public function createJob(Job $job);
    public function updateJob(Job $job);
    public function deleteJob(Job $job);

}