<?php
namespace Orm\TutorialBundle\Tests;

use \Mockery as m;
use Orm\TutorialBundle\Dao\UserDaoImpl;
use Orm\TutorialBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserDaoTest extends KernelTestCase{
    
    public function setUp(){
        parent::setUp();
        KernelTestCase :: bootKernel();
        $this->em = self::$kernel->getContainer()->get('Doctrine')->getManager();
    }

    public function testCreate(){
        //given
        $userDao = new UserDaoImpl($this->em );
        $user = new User();
        $user->setName('Okok_1');
        
        //when
        $userResult = $userDao->create($user);
        
        //then
        $this->assertEquals($userResult, $user);
    }
    
    /**
     * @todo słaby test
     */
    public function testGetAll(){
        //given
        $userDao = new UserDaoImpl($this->em );
        
        //when 
        $userList = $userDao->getAll();
        
        //then
        $this->assertEquals($userList[0]->getName(), 'Okok_1');
        
    }
}