<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planets
 *
 * @ORM\Table(name="planets", uniqueConstraints={@ORM\UniqueConstraint(name="x_y", columns={"x", "y"})}, indexes={@ORM\Index(name="FK_planets_planet_types", columns={"type"})})
 * @ORM\Entity
 */
class Planets
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
     * @var \PlanetTypes
     *
     * @ORM\ManyToOne(targetEntity="PlanetTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Players", inversedBy="planet")
     * @ORM\JoinTable(name="planet_players",
     *   joinColumns={
     *     @ORM\JoinColumn(name="planet_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     *   }
     * )
     */
    private $player;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->player = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

