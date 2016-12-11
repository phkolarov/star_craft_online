<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Players
 *
 * @ORM\Table(name="players", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email"})}, indexes={@ORM\Index(name="FK_players_races", columns={"race_id"})})
 * @ORM\Entity
 */
class Players implements UserInterface
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
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

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
     * @ORM\Column(name="avatar_uri", type="string", length=255, nullable=true)
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
        $this->resource = new \Doctrine\Common\Collections\ArrayCollection();
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
    public function getUsername(): string
    {
        return $this->email;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getAvatarUri(): string
    {
        return $this->avatarUri;
    }

    /**
     * @param string $avatarUri
     */
    public function setAvatarUri(string $avatarUri)
    {
        $this->avatarUri = $avatarUri;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level)
    {
        $this->level = $level;
    }

    /**
     * @return int
     */
    public function getXp(): int
    {
        return $this->xp;
    }

    /**
     * @param int $xp
     */
    public function setXp(int $xp)
    {
        $this->xp = $xp;
    }

    /**
     * @return Races
     */
    public function getRace(): Races
    {
        return $this->race;
    }

    /**
     * @param Races $race
     */
    public function setRace(Races $race)
    {
        $this->race = $race;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSender(): \Doctrine\Common\Collections\Collection
    {
        return $this->sender;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $sender
     */
    public function setSender(\Doctrine\Common\Collections\Collection $sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResource(): \Doctrine\Common\Collections\Collection
    {
        return $this->resource;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $resource
     */
    public function setResource(\Doctrine\Common\Collections\Collection $resource)
    {
        $this->resource = $resource;
    }

    public function getRoles()
    {
        return [];
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }


}

