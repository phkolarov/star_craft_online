<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galaxies
 *
 * @ORM\Table(name="galaxies")
 * @ORM\Entity
 */
class Galaxies
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="guidid", type="string", length=50, nullable=false)
     */
    private $guidid;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
    public function getGuidid(): string
    {
        return $this->guidid;
    }

    /**
     * @param string $guidid
     */
    public function setGuidid(string $guidid)
    {
        $this->guidid = $guidid;
    }


}

