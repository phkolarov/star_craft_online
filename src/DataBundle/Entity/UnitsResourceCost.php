<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitsResourceCost
 *
 * @ORM\Table(name="units_resource_cost", indexes={@ORM\Index(name="FK_UNITS_RESOURCE_COST_units", columns={"unit_id"}), @ORM\Index(name="FK_UNITS_RESOURCE_COST_resources", columns={"resource_id"})})
 * @ORM\Entity
 */
class UnitsResourceCost
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
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=true)
     */
    private $amount;

    /**
     * @var \Resources
     *
     * @ORM\ManyToOne(targetEntity="Resources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resource_id", referencedColumnName="id")
     * })
     */
    private $resource;

    /**
     * @var \Units
     *
     * @ORM\ManyToOne(targetEntity="Units")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unit_id", referencedColumnName="id")
     * })
     */
    private $unit;


}

