<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuildingsUnits
 *
 * @ORM\Table(name="buildings_units", indexes={@ORM\Index(name="FK_BUILDINGS_UNITS_buildings", columns={"building_id"}), @ORM\Index(name="FK_buildings_units_units", columns={"unit_id"})})
 * @ORM\Entity
 */
class BuildingsUnits
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
     * @var \Buildings
     *
     * @ORM\ManyToOne(targetEntity="Buildings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="building_id", referencedColumnName="id")
     * })
     */
    private $building;

    /**
     * @var \Units
     *
     * @ORM\ManyToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unit_id", referencedColumnName="id")
     * })
     */
    private $unit;


}

