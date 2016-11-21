<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuildingsResourceCost
 *
 * @ORM\Table(name="buildings_resource_cost", indexes={@ORM\Index(name="FK__buildings", columns={"building_id"}), @ORM\Index(name="FK__resources", columns={"resource_id"})})
 * @ORM\Entity
 */
class BuildingsResourceCost
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
     * @ORM\Column(name="amount", type="integer", nullable=false)
     */
    private $amount = '0';

    /**
     * @var \Buildings
     *
     * @ORM\ManyToOne(targetEntity="Buildings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="building_id", referencedColumnName="id")
     * })
     */
    private $building;

    /**
     * @var \Resources
     *
     * @ORM\ManyToOne(targetEntity="Resources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resource_id", referencedColumnName="id")
     * })
     */
    private $resource;


}

