<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuildingsTimeCost
 *
 * @ORM\Table(name="buildings_time_cost", indexes={@ORM\Index(name="FK_BUILDINGS_TIME_COST_buildings", columns={"building_id"})})
 * @ORM\Entity
 */
class BuildingsTimeCost
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
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=true)
     */
    private $amount;

    /**
     * @var \Buildings
     *
     * @ORM\ManyToOne(targetEntity="Buildings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="building_id", referencedColumnName="id")
     * })
     */
    private $building;


}

