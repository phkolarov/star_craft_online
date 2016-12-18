<?php
/**
 * Created by PhpStorm.
 * User: mst
 * Date: 14-Dec-16
 * Time: 1:15 PM
 */

namespace DataBundle\Repository;


use Doctrine\ORM\EntityRepository;

class TaskRepository extends EntityRepository
{
    public function getTasks(){


        return 1;
    }
}