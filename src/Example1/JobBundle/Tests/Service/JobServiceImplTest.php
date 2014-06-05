<?php
namespace Example1\JobBundle\Test\JobServiceImplTest;

use Example1\JobBundle\Dao\JobDaoDoctrineImpl;
use Example1\JobBundle\Service\JobServiceImpl;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Example1\JobBundle\Entity\Job;

use \Mockery as m;

class JobServiceImplTest extends KernelTestCase{
    
    private $jobServiceImpl;
    private $jobDaoDoctrineImplMock;
    
    public function setUp(){
        parent::setUp();
        KernelTestCase :: bootKernel();
    
    }
    public function testJobServiceCreate(){
//         $appKernel = self::$kernel;
//         $entityManager = $appKernel->getContainer()->get('Doctrine')->getManager();
//         $jobService = new JobServiceImpl(new JobDaoDoctrineImpl($entityManager));
        
//         $job = new Job();
//         $job->setCompany('Company_1');
//         $job->setTitle('Title_1');
//         $job->setDecrtiption('Description_1');
//         $job->setDate('Date_1');
//         $job->setGitHubId('GitHubId_1');
        
        
//         $jobResult = $jobService->createJob($job);
//         $this->assertEquals($jobResult, $job);
    }
    
    public function testDelete(){
        
    }
    
    public function testUpdate(){
        
    }
    
    public function testFindJob(){
        
    }
    
    public function testGetJobs(){
        //given
        $this->jobDaoDoctrineImplMock = m::mock(new JobDaoDoctrineImpl(m::mock('\Doctrine\ORM\EntityManager')));
        $this->jobServiceImpl = new JobServiceImpl($this->jobDaoDoctrineImplMock);
        $_jobs = $this->_getJobs(2);
        $this->jobDaoDoctrineImplMock->shouldReceive('getJobs')->times(1)->andReturn($_jobs);
        
        //when 
        $jobs = $this->jobServiceImpl->getJobs();
        
        //then
        $this->assertEquals($_jobs, $jobs);
    }

    public function _getJobs($j){
        $jobs = array();

        for($i=0;$i<$j;$i++){
            $job = new Job;
            $job->setCompany('company_'.$i);
            $job->setDate('date_'.$i);
            $job->setDecrtiption('desc_'.$i);
            $job->setGitHubId('gitHubId_'.$i);
            $job->setTitle('title_'.$i);
            $jobs[] = $job;
        }
        return $jobs;
    }
    
    protected function tearDown()
    {
        m::close();
    }
}