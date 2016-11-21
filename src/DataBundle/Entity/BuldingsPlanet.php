<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuldingsPlanet
 *
 * @ORM\Table(name="buldings_planet", indexes={@ORM\Index(name="FK_BULDINGS_PLANET_buildings", columns={"building_id"}), @ORM\Index(name="FK_BULDINGS_PLANET_planets", columns={"planet_id"})})
 * @ORM\Entity
 */
class BuldingsPlanet
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
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level = '0';

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
     * @var \Planets
     *
     * @ORM\ManyToOne(targetEntity="Planets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="planet_id", referencedColumnName="id")
     * })
     */
    private $planet;


}

