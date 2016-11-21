<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Armies
 *
 * @ORM\Table(name="armies", indexes={@ORM\Index(name="FK_armies_planets", columns={"planet_id"})})
 * @ORM\Entity
 */
class Armies
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
     * @var integer
     *
     * @ORM\Column(name="max_count", type="integer", nullable=false)
     */
    private $maxCount;

    /**
     * @var float
     *
     * @ORM\Column(name="bonusAtack", type="float", precision=10, scale=0, nullable=false)
     */
    private $bonusatack;

    /**
     * @var float
     *
     * @ORM\Column(name="bonusDefence", type="float", precision=10, scale=0, nullable=false)
     */
    private $bonusdefence;

    /**
     * @var \Planets
     *
     * @ORM\ManyToOne(targetEntity="Planets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="planet_id", referencedColumnName="id")
     * })
     */
    private $planet;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Resources", inversedBy="army")
     * @ORM\JoinTable(name="armies_time_cost",
     *   joinColumns={
     *     @ORM\JoinColumn(name="army_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="resource_id", referencedColumnName="id")
     *   }
     * )
     */
    private $resource;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Units", inversedBy="army")
     * @ORM\JoinTable(name="armies_units",
     *   joinColumns={
     *     @ORM\JoinColumn(name="army_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="unit_id", referencedColumnName="id")
     *   }
     * )
     */
    private $unit;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->resource = new \Doctrine\Common\Collections\ArrayCollection();
        $this->unit = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

