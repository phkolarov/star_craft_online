<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanetTypes
 *
 * @ORM\Table(name="planet_types")
 * @ORM\Entity
 */
class PlanetTypes
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
     * @var float
     *
     * @ORM\Column(name="typeBonusCoefficient", type="float", precision=10, scale=0, nullable=false)
     */
    private $typebonuscoefficient = '0.6';


}

