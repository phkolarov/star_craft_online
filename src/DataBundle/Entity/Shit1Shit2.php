<?php

namespace DataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shit1Shit2
 *
 * @ORM\Table(name="shit1_shit2", indexes={@ORM\Index(name="FK_shit1_shit2_shit", columns={"shit_Id"}), @ORM\Index(name="FK_shit1_shit2_shit2", columns={"shit2_Id"})})
 * @ORM\Entity
 */
class Shit1Shit2
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
     * @var \Shit
     *
     * @ORM\ManyToOne(targetEntity="Shit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shit_Id", referencedColumnName="id")
     * })
     */
    private $shit;

    /**
     * @var \Shit2
     *
     * @ORM\ManyToOne(targetEntity="Shit2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shit2_Id", referencedColumnName="id")
     * })
     */
    private $shit2;


}

