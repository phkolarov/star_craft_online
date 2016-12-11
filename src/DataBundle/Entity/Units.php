<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Units
 *
 * @ORM\Table(name="units")
 * @ORM\Entity
 */
class Units
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
     * @var float
     *
     * @ORM\Column(name="attack", type="float", precision=10, scale=0, nullable=false)
     */
    private $attack;

    /**
     * @var float
     *
     * @ORM\Column(name="defence", type="float", precision=10, scale=0, nullable=false)
     */
    private $defence;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Armies", mappedBy="unit")
     */
    private $army;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->army = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return float
     */
    public function getAttack(): float
    {
        return $this->attack;
    }

    /**
     * @param float $attack
     */
    public function setAttack(float $attack)
    {
        $this->attack = $attack;
    }

    /**
     * @return float
     */
    public function getDefence(): float
    {
        return $this->defence;
    }

    /**
     * @param float $defence
     */
    public function setDefence(float $defence)
    {
        $this->defence = $defence;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArmy(): \Doctrine\Common\Collections\Collection
    {
        return $this->army;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $army
     */
    public function setArmy(\Doctrine\Common\Collections\Collection $army)
    {
        $this->army = $army;
    }


}

