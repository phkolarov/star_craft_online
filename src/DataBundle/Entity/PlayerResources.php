<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerResources
 *
 * @ORM\Table(name="player_resources", indexes={@ORM\Index(name="FK_player_resouces_players", columns={"player_id"}), @ORM\Index(name="FK_player_resouces_resources", columns={"resource_id"})})
 * @ORM\Entity
 */
class PlayerResources
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
     * @ORM\Column(name="amount", type="float", nullable=false)
     */
    private $amount = '100';

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
     * @var \Resources
     *
     * @ORM\ManyToOne(targetEntity="Resources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resource_id", referencedColumnName="id")
     * })
     */
    private $resource;

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
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount)
    {
        $this->amount = $amount;
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

    /**
     * @return \Resources
     */
    public function getResource(): Resources
    {
        return $this->resource;
    }

    /**
     * @param \Resources $resource
     */
    public function setResource(Resources $resource)
    {
        $this->resource = $resource;
    }



}

