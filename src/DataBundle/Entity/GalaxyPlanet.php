<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GalaxyPlanet
 *
 * @ORM\Table(name="galaxy_planet", indexes={@ORM\Index(name="FK_galaxy_planet_galaxy", columns={"galaxy_id"}), @ORM\Index(name="FK_galaxy_planet_planet", columns={"planet_id"})})
 * @ORM\Entity
 */
class GalaxyPlanet
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
     * @var \Galaxy
     *
     * @ORM\ManyToOne(targetEntity="Galaxy")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="galaxy_id", referencedColumnName="id")
     * })
     */
    private $galaxy;

    /**
     * @var \Planet
     *
     * @ORM\ManyToOne(targetEntity="Planet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="planet_id", referencedColumnName="id")
     * })
     */
    private $planet;


}

