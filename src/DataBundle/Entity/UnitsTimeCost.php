<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitsTimeCost
 *
 * @ORM\Table(name="units_time_cost")
 * @ORM\Entity
 */
class UnitsTimeCost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount = '0';

    /**
     * @var \Units
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unit_id", referencedColumnName="id")
     * })
     */
    private $unit;


}

