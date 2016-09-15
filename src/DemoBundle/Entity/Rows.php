<?php

namespace DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;

/**
 * Rows
 *
 * @ORM\Table(name="agenda")
 * @ORM\Entity(repositoryClass="DemoBundle\Repository\AgendaRepository")
 */
class Rows
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\Column(name="num", type="integer")
     */
    private $num;

    /**
     * @var array
     *
     * @ORM\Column(name="evento", type="array")
     * @Type("array<DemoBundle\Entity\Row>")
     */
    private $row;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set row
     *
     * @param array $row
     *
     * @return Agenda
     */
    public function setRow($row)
    {
        $this->row = $row;

        return $this;
    }

    /**
     * Get row
     *
     * @return array
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Set num
     *
     * @param array $num
     *
     * @return Agenda
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return array
     */
    public function getNum()
    {
        return $this->num;
    }
}

