<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametro
 */
class Parametro
{
    /**
     * @var string
     *
     * @ORM\Column(name="prefijo", type="string", nullable=true)
     */
    private $prefijo;


    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $unidad;

    /**
     * @var string
     *
     * @ORM\Column(name="metodo", type="string", nullable=true)
     */
    private $metodo;

    /**
     * @var float
     *
     * @ORM\Column(name="max_l", type="float", precision=10, scale=0, nullable=true)
     */
    private $maxL;

    /**
     * @var float
     *
     * @ORM\Column(name="min_l", type="float", precision=10, scale=0, nullable=true)
     */
    private $minL;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idMuestra;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMuestra = new \Doctrine\Common\Collections\ArrayCollection();
    }

     /**
     * Set prefijo
     *
     * @param string $prefijo
     * @return Parametro
     */
    public function setPrefijo($prefijo)
    {
        $this->prefijo = $prefijo;

        return $this;
    }

    /**
     * Get prefijo
     *
     * @return string
     */
    public function getPrefijo()
    {
        return $this->prefijo;
    }


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Parametro
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
     * Set unidad
     *
     * @param string $unidad
     * @return Parametro
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return string
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set metodo
     *
     * @param string $metodo
     * @return Parametro
     */
    public function setMetodo($metodo)
    {
        $this->metodo = $metodo;

        return $this;
    }

    /**
     * Get metodo
     *
     * @return string
     */
    public function getMetodo()
    {
        return $this->metodo;
    }

    /**
     * Set maxL
     *
     * @param float $maxL
     * @return Parametro
     */
    public function setMaxL($maxL)
    {
        $this->maxL = $maxL;

        return $this;
    }

    /**
     * Get maxL
     *
     * @return float
     */
    public function getMaxL()
    {
        return $this->maxL;
    }

    /**
     * Set minL
     *
     * @param float $minL
     * @return Parametro
     */
    public function setMinL($minL)
    {
        $this->minL = $minL;

        return $this;
    }

    /**
     * Get minL
     *
     * @return float
     */
    public function getMinL()
    {
        return $this->minL;
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
     * Add idMuestra
     *
     * @param \AppBundle\Entity\Muestra $idMuestra
     * @return Parametro
     */
    public function addIdMuestra(\AppBundle\Entity\Muestra $idMuestra)
    {
        $this->idMuestra[] = $idMuestra;

        return $this;
    }

    /**
     * Remove idMuestra
     *
     * @param \AppBundle\Entity\Muestra $idMuestra
     */
    public function removeIdMuestra(\AppBundle\Entity\Muestra $idMuestra)
    {
        $this->idMuestra->removeElement($idMuestra);
    }

    /**
     * Get idMuestra
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdMuestra()
    {
        return $this->idMuestra;
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
