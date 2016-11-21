<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flights
 *
 * @ORM\Table(name="flights", indexes={@ORM\Index(name="FK_FLIGHTS_players", columns={"attacker_planet_id"}), @ORM\Index(name="FK_FLIGHTS_players_2", columns={"defender_planet_id"})})
 * @ORM\Entity
 */
class Flights
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
     * @var \DateTime
     *
     * @ORM\Column(name="impact_on", type="datetime", nullable=false)
     */
    private $impactOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="arriving_on", type="datetime", nullable=false)
     */
    private $arrivingOn;

    /**
     * @var \Players
     *
     * @ORM\ManyToOne(targetEntity="Players")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attacker_planet_id", referencedColumnName="id")
     * })
     */
    private $attackerPlanet;

    /**
     * @var \Players
     *
     * @ORM\ManyToOne(targetEntity="Players")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="defender_planet_id", referencedColumnName="id")
     * })
     */
    private $defenderPlanet;


}

