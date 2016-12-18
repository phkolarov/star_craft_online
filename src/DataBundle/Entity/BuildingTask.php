<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * BuildingTask
 *
 * @ORM\Table(name="building_task", indexes={@ORM\Index(name="FK__players_t", columns={"player"}), @ORM\Index(name="FK__buildings_t", columns={"building"})})
 * @ORM\Entity(repositoryClass="DataBundle\Repository\BuildingTaskRepository")
 */
class BuildingTask
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finish", type="datetime", nullable=false)
     */
    private $finish;

    /**
     * @var \Buildings
     *
     * @ORM\ManyToOne(targetEntity="Buildings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="building", referencedColumnName="id")
     * })
     */
    private $building;

    /**
     * @var \Players
     *
     * @ORM\ManyToOne(targetEntity="Players")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="player", referencedColumnName="id")
     * })
     */
    private $player;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getFinish(): \DateTime
    {
        return $this->finish;
    }

    /**
     * @param \DateTime $finish
     */
    public function setFinish(\DateTime $finish)
    {
        $this->finish = $finish;
    }

    /**
     * @return \Buildings
     */
    public function getBuilding(): Buildings
    {
        return $this->building;
    }

    /**
     * @param \Buildings $building
     */
    public function setBuilding(Buildings $building)
    {
        $this->building = $building;
    }

    /**
     * @return \Players
     */
    public function getPlayer(): Players
    {
        return $this->player;
    }

    /**
     * @param \Players $player
     */
    public function setPlayer(Players $player)
    {
        $this->player = $player;
    }



}

