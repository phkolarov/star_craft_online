<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanetPlayers
 *
 * @ORM\Table(name="planet_players", indexes={@ORM\Index(name="FK_planet_players_planets", columns={"planet_id"}), @ORM\Index(name="FK_planet_players_players", columns={"player_id"})})
 * @ORM\Entity
 */
class PlanetPlayers
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
     * @var \Planets
     *
     * @ORM\ManyToOne(targetEntity="Planets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="planet_id", referencedColumnName="id")
     * })
     */
    private $planet;

    /**
     * @var \Players
     *
     * @ORM\ManyToOne(targetEntity="Players")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     * })
     */
    private $player;

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
     * @return \Planets
     */
    public function getPlanet(): Planets
    {
        return $this->planet;
    }

    /**
     * @param \Planets $planet
     */
    public function setPlanet(Planets $planet)
    {
        $this->planet = $planet;
    }

    /**
     * @return \Players
     */
    public function getPlayer(): Players
    {
        return $this->player;
    }

    /**
     * @param \Players $player
     */
    public function setPlayer(Players $player)
    {
        $this->player = $player;
    }



}

