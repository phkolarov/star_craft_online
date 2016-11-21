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


}

