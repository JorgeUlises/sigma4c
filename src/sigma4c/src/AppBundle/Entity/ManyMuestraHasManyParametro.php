<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Muestra
 */
class ManyMuestraHasManyParametro
{
    /**
     * @var integer
     */
    private $idMuestra;

    /**
     * @var integer
     */
    private $idParametro;

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
     * Set idMuestra
     *
     * @param integer $idMuestra
     * @return Muestra
     */
    public function setIdMuestra($idMuestra)
    {
        $this->idMuestra = ($idMuestra);

        return $this;
    }

    /**
     * Get idMuestra
     *
     * @return string
     */
    public function getIdMuestra()
    {
        return $this->idMuestra;
    }

    /**
     * Set idParametro
     *
     * @param integer $idParametro
     * @return Muestra
     */
    public function getIdParametro($idParametro)
    {
        $this->idParametro = ($idParametro);

        return $this;
    }

    /**
     * Get idParametro
     *
     * @return string
     */
    public function setIdParametro()
    {
        return $this->idParametro;
    }

    /**
     * Set concentracion
     *
     * @param float $concentracion
     * @return Muestra
     */
    public function setConcentracion($concentracion)
    {
        $this->concentracion = ($concentracion);

        return $this;
    }

    /**
     * Get concentracion
     *
     * @return string
     */
    public function getConcentracion()
    {
        return $this->concentracion;
    }


    /**
     * Set tecAnalitica
     *
     * @param string $tecAnalitica
     * @return Muestra
     */
    public function setTecAnalitica($tecAnalitica)
    {
        $this->tecAnalitica = ($tecAnalitica);

        return $this;
    }

    /**
     * Get tecAnalitica
     *
     * @return string
     */
    public function getTecAnalitica()
    {
        return $this->lc;
    }

    /**
     * Set lc
     *
     * @param string $lc
     * @return Muestra
     */
    public function setLc($lc)
    {
        $this->lc = ($lc);

        return $this;
    }

    /**
     * Get lc
     *
     * @return string
     */
    public function getLc()
    {
        return $this->lc;
    }

    /**
     * Set incertidumbre
     *
     * @param string $incertidumbre
     * @return Muestra
     */
    public function setIncertidumbre($incertidumbre)
    {
        $this->incertidumbre = ($incertidumbre);

        return $this;
    }

    /**
     * Get incertidumbre
     *
     * @return string
     */
    public function getIncertidumbre()
    {
        return $this->lc;
    }


}
