<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GalaxiesPlanets
 *
 * @ORM\Table(name="galaxies_planets", indexes={@ORM\Index(name="FK_galaxies_planets_galaxies", columns={"galaxy_Id"}), @ORM\Index(name="FK_galaxies_planets_planets", columns={"planet_Id"})})
 * @ORM\Entity
 */
class GalaxiesPlanets
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
     * @var \Galaxies
     *
     * @ORM\ManyToOne(targetEntity="Galaxies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="galaxy_Id", referencedColumnName="id")
     * })
     */
    private $galaxy;

    /**
     * @var \Planets
     *
     * @ORM\ManyToOne(targetEntity="Planets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="planet_Id", referencedColumnName="id")
     * })
     */
    private $planet;


}

