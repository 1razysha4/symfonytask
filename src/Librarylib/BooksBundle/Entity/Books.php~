<?php

namespace Librarylib\BooksBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * @ORM\Entity
 * Books
 */
class Books
{
    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @var \DateTime
     * @ORM\Column(type="DateTime")
     */
    private $releasedate;

    /**
     * @var integer
     */
    private $length;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $generes;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Books
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set releasedate
     *
     * @param \DateTime $releasedate
     *
     * @return Books
     */
    public function setReleasedate($releasedate)
    {
        $this->releasedate = $releasedate;

        return $this;
    }

    /**
     * Get releasedate
     *
     * @return \DateTime
     */
    public function getReleasedate()
    {
        return $this->releasedate;
    }

    /**
     * Set length
     *
     * @param integer $length
     *
     * @return Books
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set generes
     *
     * @param string $generes
     *
     * @return Books
     */
    public function setGeneres($generes)
    {
        $this->generes = $generes;

        return $this;
    }

    /**
     * Get generes
     *
     * @return string
     */
    public function getGeneres()
    {
        return $this->generes;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
