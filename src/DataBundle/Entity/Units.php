<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Units
 *
 * @ORM\Table(name="units")
 * @ORM\Entity
 */
class Units
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image_uri", type="string", length=255, nullable=false)
     */
    private $imageUri;

    /**
     * @var float
     *
     * @ORM\Column(name="attack", type="float", precision=10, scale=0, nullable=false)
     */
    private $attack;

    /**
     * @var float
     *
     * @ORM\Column(name="defence", type="float", precision=10, scale=0, nullable=false)
     */
    private $defence;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Armies", mappedBy="unit")
     */
    private $army;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->army = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

