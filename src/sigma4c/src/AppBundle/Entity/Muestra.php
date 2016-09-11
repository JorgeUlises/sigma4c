<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Muestra
 */
class Muestra
{
    /**
     * @var string
     */
    private $responsable;

    /**
     * @var string
     */
    private $elementoAmbiental;

    /**
     * @var string
     */
    private $fotos;

    /**
     * @var \DateTime
     */
    private $fechaToma;

    /**
     * @var \DateTime
     */
    private $fechaRecepcion;

    /**
     * @var \DateTime
     */
    private $fechaAnalisis;

    /**
     * @var string
     */
    private $tipoMuestreo;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\PuntoControl
     */
    private $idPuntoControl;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idParametro;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idParametro = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return Muestra
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set elementoAmbiental
     *
     * @param string $elementoAmbiental
     * @return Muestra
     */
    public function setElementoAmbiental($elementoAmbiental)
    {
        $this->elementoAmbiental = $elementoAmbiental;

        return $this;
    }

    /**
     * Get elementoAmbiental
     *
     * @return string 
     */
    public function getElementoAmbiental()
    {
        return $this->elementoAmbiental;
    }

    /**
     * Set fotos
     *
     * @param string $fotos
     * @return Muestra
     */
    public function setFotos($fotos)
    {
        $this->fotos = $fotos;

        return $this;
    }

    /**
     * Get fotos
     *
     * @return string 
     */
    public function getFotos()
    {
        return $this->fotos;
    }

    /**
     * Set fechaToma
     *
     * @param \DateTime $fechaToma
     * @return Muestra
     */
    public function setFechaToma($fechaToma)
    {
        $this->fechaToma = $fechaToma;

        return $this;
    }

    /**
     * Get fechaToma
     *
     * @return \DateTime 
     */
    public function getFechaToma()
    {
        return $this->fechaToma;
    }

    /**
     * Set fechaRecepcion
     *
     * @param \DateTime $fechaRecepcion
     * @return Muestra
     */
    public function setFechaRecepcion($fechaRecepcion)
    {
        $this->fechaRecepcion = $fechaRecepcion;

        return $this;
    }

    /**
     * Get fechaRecepcion
     *
     * @return \DateTime 
     */
    public function getFechaRecepcion()
    {
        return $this->fechaRecepcion;
    }

    /**
     * Set fechaAnalisis
     *
     * @param \DateTime $fechaAnalisis
     * @return Muestra
     */
    public function setFechaAnalisis($fechaAnalisis)
    {
        $this->fechaAnalisis = $fechaAnalisis;

        return $this;
    }

    /**
     * Get fechaAnalisis
     *
     * @return \DateTime 
     */
    public function getFechaAnalisis()
    {
        return $this->fechaAnalisis;
    }

    /**
     * Set tipoMuestreo
     *
     * @param string $tipoMuestreo
     * @return Muestra
     */
    public function setTipoMuestreo($tipoMuestreo)
    {
        $this->tipoMuestreo = $tipoMuestreo;

        return $this;
    }

    /**
     * Get tipoMuestreo
     *
     * @return string 
     */
    public function getTipoMuestreo()
    {
        return $this->tipoMuestreo;
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
     * Set idPuntoControl
     *
     * @param \AppBundle\Entity\PuntoControl $idPuntoControl
     * @return Muestra
     */
    public function setIdPuntoControl(\AppBundle\Entity\PuntoControl $idPuntoControl = null)
    {
        $this->idPuntoControl = $idPuntoControl;

        return $this;
    }

    /**
     * Get idPuntoControl
     *
     * @return \AppBundle\Entity\PuntoControl 
     */
    public function getIdPuntoControl()
    {
        return $this->idPuntoControl;
    }

    /**
     * Add idParametro
     *
     * @param \AppBundle\Entity\Parametro $idParametro
     * @return Muestra
     */
    public function addIdParametro(\AppBundle\Entity\Parametro $idParametro)
    {
        $this->idParametro[] = $idParametro;

        return $this;
    }

    /**
     * Remove idParametro
     *
     * @param \AppBundle\Entity\Parametro $idParametro
     */
    public function removeIdParametro(\AppBundle\Entity\Parametro $idParametro)
    {
        $this->idParametro->removeElement($idParametro);
    }

    /**
     * Get idParametro
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdParametro()
    {
        return $this->idParametro;
    }
}
