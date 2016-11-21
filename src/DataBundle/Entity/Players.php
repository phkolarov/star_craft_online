<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Players
 *
 * @ORM\Table(name="players", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email"})}, indexes={@ORM\Index(name="FK_players_races", columns={"race_id"})})
 * @ORM\Entity
 */
class Players
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
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar_uri", type="string", length=255, nullable=false)
     */
    private $avatarUri;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="xp", type="integer", nullable=false)
     */
    private $xp = '0';

    /**
     * @var \Races
     *
     * @ORM\ManyToOne(targetEntity="Races")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="race_id", referencedColumnName="id")
     * })
     */
    private $race;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Players", inversedBy="recesiver")
     * @ORM\JoinTable(name="messages",
     *   joinColumns={
     *     @ORM\JoinColumn(name="recesiver_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="sender_id", referencedColumnName="id")
     *   }
     * )
     */
    private $sender;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Planets", mappedBy="player")
     */
    private $planet;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Resources", inversedBy="player")
     * @ORM\JoinTable(name="player_resouces",
     *   joinColumns={
     *     @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="resource_id", referencedColumnName="id")
     *   }
     * )
     */
    private $resource;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sender = new \Doctrine\Common\Collections\ArrayCollection();
        $this->planet = new \Doctrine\Common\Collections\ArrayCollection();
        $this->resource = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

