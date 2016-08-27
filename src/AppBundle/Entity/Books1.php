<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Books1
 *
 * @ORM\Table(name="books1")
 * @ORM\Entity
 */
class Books1
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="releasedate", type="date", precision=0, scale=0, nullable=false, unique=false)
     */
    private $releasedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="generes", type="text", precision=0, scale=0, nullable=false, unique=false)
     */
    private $generes;


}

