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
     */
    private $nombre;

    /**
     * @var string
     */
    private $unidad;

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
}
