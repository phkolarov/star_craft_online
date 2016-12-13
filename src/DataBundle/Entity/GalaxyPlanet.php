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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return \Galaxy
     */
    public function getGalaxy(): Galaxy
    {
        return $this->galaxy;
    }

    /**
     * @param \Galaxy $galaxy
     */
    public function setGalaxy(Galaxy $galaxy)
    {
        $this->galaxy = $galaxy;
    }

    /**
     * @return \Planet
     */
    public function getPlanet(): Planet
    {
        return $this->planet;
    }

    /**
     * @param \Planet $planet
     */
    public function setPlanet(Planet $planet)
    {
        $this->planet = $planet;
    }



}

