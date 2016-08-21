<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametro
 *
 * @ORM\Table(name="parametro")
 * @ORM\Entity
 */
class Parametro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="parametro_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad", type="string", nullable=true)
     */
    private $unidad;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Muestra", mappedBy="idParametro")
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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
