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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getAvatarUri()
    {
        return $this->avatarUri;
    }

    /**
     * @param string $avatarUri
     */
    public function setAvatarUri($avatarUri)
    {
        $this->avatarUri = $avatarUri;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return int
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * @param int $xp
     */
    public function setXp($xp)
    {
        $this->xp = $xp;
    }

    /**
     * @return \Races
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @param \Races $race
     */
    public function setRace($race)
    {
        $this->race = $race;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlanet()
    {
        return $this->planet;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $planet
     */
    public function setPlanet($planet)
    {
        $this->planet = $planet;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }

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

