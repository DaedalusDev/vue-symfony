<?php

namespace ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * Example
 *
 * @ORM\Table(name="example")
 * @ORM\Entity(repositoryClass="ApiBundle\Repository\ExampleRepository")
 */
class Example
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Serializer\Groups({"getExample"})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     *
     * @Serializer\Groups({"getExample", "postExample"})
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     *
     * @Serializer\Groups({"getExample", "postExample"})
     */
    private $age = 29;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     *
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     * @Serializer\Groups({"getExample", "postExample"})
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="loveCamelCase", type="boolean", nullable=true)
     *
     * @Serializer\Groups({"getExample"})
     */
    private $loveCamelCase = true;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Example
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
     * Set age
     *
     * @param integer $age
     *
     * @return Example
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Example
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set loveCamelCase
     *
     * @param boolean $loveCamelCase
     *
     * @return Example
     */
    public function setLoveCamelCase($loveCamelCase)
    {
        $this->loveCamelCase = $loveCamelCase;

        return $this;
    }

    /**
     * Get loveCamelCase
     *
     * @return boolean
     */
    public function getLoveCamelCase()
    {
        return $this->loveCamelCase;
    }
}

