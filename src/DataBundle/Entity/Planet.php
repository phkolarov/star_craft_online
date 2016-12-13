<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planet
 *
 * @ORM\Table(name="planet", indexes={@ORM\Index(name="FK_planets_planet_types", columns={"type"}), @ORM\Index(name="FK_planet_players", columns={"owner"})})
 * @ORM\Entity
 */
class Planet
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image_uri", type="string", length=255, nullable=false)
     */
    private $imageUri;

    /**
     * @var integer
     *
     * @ORM\Column(name="x", type="integer", nullable=true)
     */
    private $x;

    /**
     * @var integer
     *
     * @ORM\Column(name="y", type="integer", nullable=true)
     */
    private $y;

    /**
     * @var float
     *
     * @ORM\Column(name="mineral", type="float", precision=10, scale=0, nullable=true)
     */
    private $mineral;

    /**
     * @var float
     *
     * @ORM\Column(name="metal", type="float", precision=10, scale=0, nullable=true)
     */
    private $metal;

    /**
     * @var float
     *
     * @ORM\Column(name="gas", type="float", precision=10, scale=0, nullable=true)
     */
    private $gas;

    /**
     * @var \Players
     *
     * @ORM\ManyToOne(targetEntity="Players")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="owner", referencedColumnName="id")
     * })
     */
    private $owner;

    /**
     * @var \PlanetTypes
     *
     * @ORM\ManyToOne(targetEntity="PlanetTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="id")
     * })
     */
    private $type;

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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getImageUri(): string
    {
        return $this->imageUri;
    }

    /**
     * @param string $imageUri
     */
    public function setImageUri(string $imageUri)
    {
        $this->imageUri = $imageUri;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @param int $x
     */
    public function setX(int $x)
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $y
     */
    public function setY(int $y)
    {
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getMineral(): float
    {
        return $this->mineral;
    }

    /**
     * @param float $mineral
     */
    public function setMineral(float $mineral)
    {
        $this->mineral = $mineral;
    }

    /**
     * @return float
     */
    public function getMetal(): float
    {
        return $this->metal;
    }

    /**
     * @param float $metal
     */
    public function setMetal(float $metal)
    {
        $this->metal = $metal;
    }

    /**
     * @return float
     */
    public function getGas(): float
    {
        return $this->gas;
    }

    /**
     * @param float $gas
     */
    public function setGas(float $gas)
    {
        $this->gas = $gas;
    }

    /**
     * @return \Players
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param \Players $owner
     */
    public function setOwner(Players $owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return \PlanetTypes
     */
    public function getType(): PlanetTypes
    {
        return $this->type;
    }

    /**
     * @param \PlanetTypes $type
     */
    public function setType(PlanetTypes $type)
    {
        $this->type = $type;
    }



}

