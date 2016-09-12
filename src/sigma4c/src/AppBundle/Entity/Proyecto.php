<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 */
class Proyecto
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var geometry
     */
    private $geometria;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idEmpresa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEmpresa = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Proyecto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set geometria
     *
     * @param geometry $geometria
     * @return Proyecto
     */
    public function setGeometria($geometria)
    {
        $this->geometria = $geometria;

        return $this;
    }

    /**
     * Get geometria
     *
     * @return geometry
     */
    public function getGeometria()
    {
        return $this->geometria;
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

    /**
     * Add idEmpresa
     *
     * @param \AppBundle\Entity\Empresa $idEmpresa
     * @return Proyecto
     */
    public function addIdEmpresa(\AppBundle\Entity\Empresa $idEmpresa)
    {
        $this->idEmpresa[] = $idEmpresa;

        return $this;
    }

    /**
     * Remove idEmpresa
     *
     * @param \AppBundle\Entity\Empresa $idEmpresa
     */
    public function removeIdEmpresa(\AppBundle\Entity\Empresa $idEmpresa)
    {
        $this->idEmpresa->removeElement($idEmpresa);
    }

    /**
     * Get idEmpresa
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Get display name
     *
     * @return String
     */
    public function __toString()
    {
        return $this->nombre;
    }
}
