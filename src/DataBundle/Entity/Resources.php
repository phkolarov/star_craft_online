<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resources
 *
 * @ORM\Table(name="resources")
 * @ORM\Entity
 */
class Resources
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Armies", mappedBy="resource")
     */
    private $army;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Players", mappedBy="resource")
     */
    private $player;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->army = new \Doctrine\Common\Collections\ArrayCollection();
        $this->player = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArmy(): \Doctrine\Common\Collections\Collection
    {
        return $this->army;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $army
     */
    public function setArmy(\Doctrine\Common\Collections\Collection $army)
    {
        $this->army = $army;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlayer(): \Doctrine\Common\Collections\Collection
    {
        return $this->player;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $player
     */
    public function setPlayer(\Doctrine\Common\Collections\Collection $player)
    {
        $this->player = $player;
    }


}

