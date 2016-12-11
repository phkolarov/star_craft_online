<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GalaxiesPlanets
 *
 * @ORM\Table(name="galaxies_planets", indexes={@ORM\Index(name="FK_galaxies_planets_galaxies", columns={"galaxyId"}), @ORM\Index(name="FK_galaxies_planets_planets", columns={"planetId"})})
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
     *   @ORM\JoinColumn(name="galaxyId", referencedColumnName="id")
     * })
     */
    private $galaxyid;

    /**
     * @var \Planets
     *
     * @ORM\ManyToOne(targetEntity="Planets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="planetId", referencedColumnName="id")
     * })
     */
    private $planetid;

    /**
     * @return \Galaxies
     */
    public function getGalaxyid(): \Galaxies
    {
        return $this->galaxyid;
    }

    /**
     * @param \Galaxies $galaxyid
     */
    public function setGalaxyid(\Galaxies $galaxyid)
    {
        $this->galaxyid = $galaxyid;
    }

    /**
     * @return \Planets
     */
    public function getPlanetid(): \Planets
    {
        return $this->planetid;
    }

    /**
     * @param \Planets $planetid
     */
    public function setPlanetid(\Planets $planetid)
    {
        $this->planetid = $planetid;
    }



}

