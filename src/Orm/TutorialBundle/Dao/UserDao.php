<?php
namespace Orm\TutorialBundle\Dao;

use Orm\TutorialBundle\Entity\User;

interface UserDao{
    public function getAll();
    public function create(User $user);
//     public function find($id);
//     public function update(User $user);
//     public function delete(User $user);
} 