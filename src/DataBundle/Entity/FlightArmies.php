<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FlightArmies
 *
 * @ORM\Table(name="flight_armies", indexes={@ORM\Index(name="FK_FLIGHT_ARMIES_flights", columns={"flight_id"}), @ORM\Index(name="FK_FLIGHT_ARMIES_armies", columns={"army_id"})})
 * @ORM\Entity
 */
class FlightArmies
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
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount = '0';

    /**
     * @var \Armies
     *
     * @ORM\ManyToOne(targetEntity="Armies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="army_id", referencedColumnName="id")
     * })
     */
    private $army;

    /**
     * @var \Flights
     *
     * @ORM\ManyToOne(targetEntity="Flights")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="flight_id", referencedColumnName="id")
     * })
     */
    private $flight;


}

