<?php
namespace Orm\TutorialBundle\Dao;

use Orm\TutorialBundle\Entity\User;

class UserDaoImpl implements UserDao{
    
    private $entityManager;
    
    public function __construct(\Doctrine\ORM\EntityManager $entityManager){
        $this->em = $entityManager; 
    }
    
    public function getEm(){
        return $this->em;
    }
    
    public function getAll(){
        return $this->getEm()->getRepository('Orm\TutorialBundle\Entity\User')->findAll();
    }
    
    public function create(User $user){
        $em = $this->getEm();
        $em->persist($user);
        $em->flush($user);
        return $user; 
    }
}
