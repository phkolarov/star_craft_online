<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Races
 *
 * @ORM\Table(name="races")
 * @ORM\Entity
 */
class Races
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
     * @ORM\Column(name="attack_bonus", type="float", precision=10, scale=0, nullable=false)
     */
    private $attackBonus = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="defence_bonus", type="float", precision=10, scale=0, nullable=false)
     */
    private $defenceBonus = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="resource_bonus", type="float", precision=10, scale=0, nullable=false)
     */
    private $resourceBonus = '0';

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
    public function getAttackBonus(): float
    {
        return $this->attackBonus;
    }

    /**
     * @param float $attackBonus
     */
    public function setAttackBonus(float $attackBonus)
    {
        $this->attackBonus = $attackBonus;
    }

    /**
     * @return float
     */
    public function getDefenceBonus(): float
    {
        return $this->defenceBonus;
    }

    /**
     * @param float $defenceBonus
     */
    public function setDefenceBonus(float $defenceBonus)
    {
        $this->defenceBonus = $defenceBonus;
    }

    /**
     * @return float
     */
    public function getResourceBonus(): float
    {
        return $this->resourceBonus;
    }

    /**
     * @param float $resourceBonus
     */
    public function setResourceBonus(float $resourceBonus)
    {
        $this->resourceBonus = $resourceBonus;
    }




}

