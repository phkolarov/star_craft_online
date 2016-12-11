<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerUnits
 *
 * @ORM\Table(name="player_units", indexes={@ORM\Index(name="FK_player_units_players", columns={"playerId"}), @ORM\Index(name="FK_player_units_units", columns={"unitId"})})
 * @ORM\Entity
 */
class PlayerUnits
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
     * @var Players
     *
     * @ORM\ManyToOne(targetEntity="Players")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="playerId", referencedColumnName="id")
     * })
     */
    private $playerid;

    /**
     * @var Units
     *
     * @ORM\ManyToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unitId", referencedColumnName="id")
     * })
     */
    private $unitid;

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
     * @return Players
     */
    public function getPlayerid(): Players
    {
        return $this->playerid;
    }

    /**
     * @param Players $playerid
     */
    public function setPlayerid(Players $playerid)
    {
        $this->playerid = $playerid;
    }

    /**
     * @return Units
     */
    public function getUnitid(): Units
    {
        return $this->unitid;
    }

    /**
     * @param Units $unitid
     */
    public function setUnitid(Units $unitid)
    {
        $this->unitid = $unitid;
    }


}

