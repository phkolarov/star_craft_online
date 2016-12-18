<?php
/**
 * Created by PhpStorm.
 * User: mst
 * Date: 14-Dec-16
 * Time: 1:24 PM
 */

namespace DataBundle\Repository;


use DataBundle\Entity\Players;
use Doctrine\ORM\EntityRepository;

class BuildingTaskRepository extends EntityRepository
{

    public function getTask(Players $player){


        $tasks = [];
        $tasksEntities = $this->findBy(['player'=> $player]);

        foreach ($tasksEntities as $tasksEntity) {

            $tasks[] = array(
                'name' =>$tasksEntity->getBuilding()->getName(),
                'dietime' => $tasksEntity->getFinish()->format('Y-m-d H:i:s')
            );
        }
        return $tasks;
    }

}