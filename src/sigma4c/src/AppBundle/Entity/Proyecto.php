<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 *
 * @ORM\Table(name="proyecto")
 * @ORM\Entity
 */
class Proyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="proyecto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="involucrados", type="string", nullable=true)
     */
    private $involucrados;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="encargado", type="string", nullable=true)
     */
    private $encargado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Empresa", inversedBy="idProyecto")
     * @ORM\JoinTable(name="many_proyecto_has_many_empresa",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_proyecto", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     *   }
     * )
     */
    private $idEmpresa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="FuenteHidrica", inversedBy="idProyecto")
     * @ORM\JoinTable(name="many_proyecto_has_many_fuente_hidrica",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_proyecto", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_fuente_hidrica", referencedColumnName="id")
     *   }
     * )
     */
    private $idFuenteHidrica;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEmpresa = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idFuenteHidrica = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set involucrados
     *
     * @param string $involucrados
     * @return Proyecto
     */
    public function setInvolucrados($involucrados)
    {
        $this->involucrados = $involucrados;

        return $this;
    }

    /**
     * Get involucrados
     *
     * @return string
     */
    public function getInvolucrados()
    {
        return $this->involucrados;
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
     * Set encargado
     *
     * @param string $encargado
     * @return Proyecto
     */
    public function setEncargado($encargado)
    {
        $this->encargado = $encargado;

        return $this;
    }

    /**
     * Get encargado
     *
     * @return string
     */
    public function getEncargado()
    {
        return $this->encargado;
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
     * Add idFuenteHidrica
     *
     * @param \AppBundle\Entity\FuenteHidrica $idFuenteHidrica
     * @return Proyecto
     */
    public function addIdFuenteHidrica(\AppBundle\Entity\FuenteHidrica $idFuenteHidrica)
    {
        $this->idFuenteHidrica[] = $idFuenteHidrica;

        return $this;
    }

    /**
     * Remove idFuenteHidrica
     *
     * @param \AppBundle\Entity\FuenteHidrica $idFuenteHidrica
     */
    public function removeIdFuenteHidrica(\AppBundle\Entity\FuenteHidrica $idFuenteHidrica)
    {
        $this->idFuenteHidrica->removeElement($idFuenteHidrica);
    }

    /**
     * Get idFuenteHidrica
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdFuenteHidrica()
    {
        return $this->idFuenteHidrica;
    }
    public function __toString()
    {
        return $this->nombre;
    }
}
