<?php
namespace Example1\JobBundle\Test\JobServiceImplTest;

use Example1\JobBundle\Dao\JobDaoDoctrineImpl;
use Example1\JobBundle\Service\JobServiceImpl;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Example1\JobBundle\Entity\Job;

use \Mockery as m;


class JobServiceImplTest extends KernelTestCase{
    
    public function setUp(){
        parent::setUp();
        KernelTestCase :: bootKernel();
    }
    public function testJobServiceCreate(){
        $appKernel = self::$kernel;
        
        echo get_class(self::$kernel);
        echo get_class($appKernel->getContainer()->get('Doctrine')->getManager());
        
        $entityManager = $appKernel->getContainer()->get('Doctrine')->getManager();
        echo get_class($entityManager );
        
        $jobService = new JobServiceImpl(new JobDaoDoctrineImpl($entityManager));
        
        $job = new Job();
        $job->setCompany('Company_1');
        $job->setTitle('Title_1');
        $job->setDecrtiption('Description_1');
        $job->setDate('Date_1');
        $job->setGitHubId('GitHubId_1');
        $jobResult = $jobService->createJob($job);
        $this->assertEquals($jobResult, $job);
    }
    
    public function testDelete(){
        
    }
    
    public function testUpdate(){
        
    }
    
    public function testFindJob(){
        
    }
    
    public function testGetJobs(){
        $entityManager1 = self::$kernel->getContainer()->get('doctrine')->getManager();
        $entityManager2 = self::$kernel->getContainer()->get('doctrine.orm.default_entity_manager');
        $this->assertEquals($entityManager1, $entityManager2);
        
        $jobDaoDoctrineImplMock = m::mock(new JobDaoDoctrineImpl());
        $jobDaoDoctrineImplMock->shouldReceive('getJobs')->times(1)->andReturn(array(new Job()), 12, 14);

        $jobServiceImpl = new JobServiceImpl($jobDaoDoctrineImplMock);
        $jobDaoDoctrineImplMock->getJobs();
    }

    protected function tearDown()
    {
        m::close();
    }
}