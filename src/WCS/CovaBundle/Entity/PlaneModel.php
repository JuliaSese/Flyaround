<?php

namespace WCS\CovaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaneModel
 *
 * @ORM\Table(name="plane_model")
 * @ORM\Entity(repositoryClass="WCS\CovaBundle\Repository\PlaneModelRepository")
 */
class PlaneModel
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
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=128)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="manufacter", type="string", length=64)
     */
    private $manufacter;

    /**
     * @var int
     *
     * @ORM\Column(name="cruiseSpeed", type="smallint", nullable=true)
     */
    private $cruiseSpeed;

    /**
     * @var int
     *
     * @ORM\Column(name="planeNbSeats", type="smallint")
     */
    private $planeNbSeats;

    /**
     * @var bool
     *
     * @ORM\Column(name="isAvaliable", type="boolean")
     */
    private $isAvaliable;


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
     * Set model
     *
     * @param string $model
     *
     * @return PlaneModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacter
     *
     * @param string $manufacter
     *
     * @return PlaneModel
     */
    public function setManufacter($manufacter)
    {
        $this->manufacter = $manufacter;

        return $this;
    }

    /**
     * Get manufacter
     *
     * @return string
     */
    public function getManufacter()
    {
        return $this->manufacter;
    }

    /**
     * Set cruiseSpeed
     *
     * @param integer $cruiseSpeed
     *
     * @return PlaneModel
     */
    public function setCruiseSpeed($cruiseSpeed)
    {
        $this->cruiseSpeed = $cruiseSpeed;

        return $this;
    }

    /**
     * Get cruiseSpeed
     *
     * @return int
     */
    public function getCruiseSpeed()
    {
        return $this->cruiseSpeed;
    }

    /**
     * Set planeNbSeats
     *
     * @param integer $planeNbSeats
     *
     * @return PlaneModel
     */
    public function setPlaneNbSeats($planeNbSeats)
    {
        $this->planeNbSeats = $planeNbSeats;

        return $this;
    }

    /**
     * Get planeNbSeats
     *
     * @return int
     */
    public function getPlaneNbSeats()
    {
        return $this->planeNbSeats;
    }

    /**
     * Set isAvaliable
     *
     * @param boolean $isAvaliable
     *
     * @return PlaneModel
     */
    public function setIsAvaliable($isAvaliable)
    {
        $this->isAvaliable = $isAvaliable;

        return $this;
    }

    /**
     * Get isAvaliable
     *
     * @return bool
     */
    public function getIsAvaliable()
    {
        return $this->isAvaliable;
    }
}

