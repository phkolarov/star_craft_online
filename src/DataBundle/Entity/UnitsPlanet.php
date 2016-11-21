<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitsPlanet
 *
 * @ORM\Table(name="units_planet", indexes={@ORM\Index(name="FK_UNITS_PLANET_units", columns={"unit_id"}), @ORM\Index(name="FK_UNITS_PLANET_planets", columns={"planet_id"})})
 * @ORM\Entity
 */
class UnitsPlanet
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
     * @ORM\Column(name="level", type="integer", nullable=true)
     */
    private $level = '1';

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
     * @var \Units
     *
     * @ORM\ManyToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unit_id", referencedColumnName="id")
     * })
     */
    private $unit;


}

