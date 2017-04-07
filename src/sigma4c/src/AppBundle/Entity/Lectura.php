<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lectura
 */
class Lectura
{
    /**
     * @var float
     */
    private $concentracion;

    /**
     * @var string
     */
    private $tecAnalitica;

    /**
     * @var float
     */
    private $lc;

    /**
     * @var float
     */
    private $incertidumbre;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Parametro
     */
    private $idParametro;

    /**
     * @var \AppBundle\Entity\Muestra
     */
    private $idMuestra;


    /**
     * Set concentracion
     *
     * @param float $concentracion
     * @return Lectura
     */
    public function setConcentracion($concentracion)
    {
        $this->concentracion = $concentracion;

        return $this;
    }

    /**
     * Get concentracion
     *
     * @return float 
     */
    public function getConcentracion()
    {
        return $this->concentracion;
    }

    /**
     * Set tecAnalitica
     *
     * @param string $tecAnalitica
     * @return Lectura
     */
    public function setTecAnalitica($tecAnalitica)
    {
        $this->tecAnalitica = $tecAnalitica;

        return $this;
    }

    /**
     * Get tecAnalitica
     *
     * @return string 
     */
    public function getTecAnalitica()
    {
        return $this->tecAnalitica;
    }

    /**
     * Set lc
     *
     * @param float $lc
     * @return Lectura
     */
    public function setLc($lc)
    {
        $this->lc = $lc;

        return $this;
    }

    /**
     * Get lc
     *
     * @return float 
     */
    public function getLc()
    {
        return $this->lc;
    }

    /**
     * Set incertidumbre
     *
     * @param float $incertidumbre
     * @return Lectura
     */
    public function setIncertidumbre($incertidumbre)
    {
        $this->incertidumbre = $incertidumbre;

        return $this;
    }

    /**
     * Get incertidumbre
     *
     * @return float 
     */
    public function getIncertidumbre()
    {
        return $this->incertidumbre;
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
     * Set idParametro
     *
     * @param \AppBundle\Entity\Parametro $idParametro
     * @return Lectura
     */
    public function setIdParametro(\AppBundle\Entity\Parametro $idParametro = null)
    {
        $this->idParametro = $idParametro;

        return $this;
    }

    /**
     * Get idParametro
     *
     * @return \AppBundle\Entity\Parametro 
     */
    public function getIdParametro()
    {
        return $this->idParametro;
    }

    /**
     * Set idMuestra
     *
     * @param \AppBundle\Entity\Muestra $idMuestra
     * @return Lectura
     */
    public function setIdMuestra(\AppBundle\Entity\Muestra $idMuestra = null)
    {
        $this->idMuestra = $idMuestra;

        return $this;
    }

    /**
     * Get idMuestra
     *
     * @return \AppBundle\Entity\Muestra 
     */
    public function getIdMuestra()
    {
        return $this->idMuestra;
    }
}
