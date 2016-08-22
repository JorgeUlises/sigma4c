<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empresa_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoempresa", type="string", nullable=true)
     */
    private $tipoempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="representantelegal", type="string", nullable=true)
     */
    private $representantelegal;

    /**
     * @var string
     *
     * @ORM\Column(name="rut", type="string", nullable=true)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", nullable=true)
     */
    private $nit;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", nullable=true)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", nullable=true)
     */
    private $direccion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Proyecto", mappedBy="idEmpresa")
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipoempresa
     *
     * @param string $tipoempresa
     * @return Empresa
     */
    public function setTipoempresa($tipoempresa)
    {
        $this->tipoempresa = $tipoempresa;

        return $this;
    }

    /**
     * Get tipoempresa
     *
     * @return string 
     */
    public function getTipoempresa()
    {
        return $this->tipoempresa;
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
     * Set representantelegal
     *
     * @param string $representantelegal
     * @return Empresa
     */
    public function setRepresentantelegal($representantelegal)
    {
        $this->representantelegal = $representantelegal;

        return $this;
    }

    /**
     * Get representantelegal
     *
     * @return string 
     */
    public function getRepresentantelegal()
    {
        return $this->representantelegal;
    }

    /**
     * Set rut
     *
     * @param string $rut
     * @return Empresa
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return string 
     */
    public function getRut()
    {
        return $this->rut;
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
    public function __toString()
    {
        return $this->nombre;
    }
}
