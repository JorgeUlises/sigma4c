<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PuntoControl
 */
class PuntoControl
{
    /**
     * @var string
     */
    private $etiqueta;

    /**
     * @var geometry
     */
    private $geometria;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Proyecto
     */
    private $idProyecto;


    /**
     * Set etiqueta
     *
     * @param string $etiqueta
     * @return PuntoControl
     */
    public function setEtiqueta($etiqueta)
    {
        $this->etiqueta = $etiqueta;

        return $this;
    }

    /**
     * Get etiqueta
     *
     * @return string 
     */
    public function getEtiqueta()
    {
        return $this->etiqueta;
    }

    /**
     * Set geometria
     *
     * @param geometry $geometria
     * @return PuntoControl
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
     * Set idProyecto
     *
     * @param \AppBundle\Entity\Proyecto $idProyecto
     * @return PuntoControl
     */
    public function setIdProyecto(\AppBundle\Entity\Proyecto $idProyecto = null)
    {
        $this->idProyecto = $idProyecto;

        return $this;
    }

    /**
     * Get idProyecto
     *
     * @return \AppBundle\Entity\Proyecto 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }
}
