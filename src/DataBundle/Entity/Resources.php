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

}

