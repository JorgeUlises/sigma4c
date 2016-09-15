<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 */
class Empresa
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $nit;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $ciudad;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idProyecto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProyecto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Empresa
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
     * Set nit
     *
     * @param string $nit
     * @return Empresa
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Empresa
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Empresa
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Empresa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Empresa
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
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
     * Add idProyecto
     *
     * @param \AppBundle\Entity\Proyecto $idProyecto
     * @return Empresa
     */
    public function addIdProyecto(\AppBundle\Entity\Proyecto $idProyecto)
    {
        $this->idProyecto[] = $idProyecto;

        return $this;
    }

    /**
     * Remove idProyecto
     *
     * @param \AppBundle\Entity\Proyecto $idProyecto
     */
    public function removeIdProyecto(\AppBundle\Entity\Proyecto $idProyecto)
    {
        $this->idProyecto->removeElement($idProyecto);
    }

    /**
     * Get idProyecto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }
}
