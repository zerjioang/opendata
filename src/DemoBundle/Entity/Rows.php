<?php

namespace DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var Row
     *
     * @ORM\Column(name="evento", type="object")
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
     * @param Row $row
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
     * @return Row
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Set num
     *
     * @param integer $num
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
     * @return integer
     */
    public function getNum()
    {
        return $this->num;
    }
}

