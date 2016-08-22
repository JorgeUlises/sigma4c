<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CrEOF\Spatial\PHP\Types\Geometry\LineString;
use CrEOF\Spatial\PHP\Types\Geometry\Point;
use CrEOF\Spatial\PHP\Types\Geometry\MultiLineString;

/**
 * FuenteHidrica
 *
 * @ORM\Table(name="fuente_hidrica")
 * @ORM\Entity
 */
class FuenteHidrica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fuente_hidrica_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var geometry
     *
     * @ORM\Column(name="geometria", type="geometry", nullable=true)
     */
    private $geometria;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=true)
     */
    private $nombre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Proyecto", mappedBy="idFuenteHidrica")
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
     * Set geometria
     *
     * @param geometry $geometria
     * @return FuenteHidrica
     */
    public function setGeometria($geometria)
    {
      $lineStrings = array(
          new LineString(
              array(
                  new Point(0, 0),
                  new Point(10, 0),
                  new Point(10, 10),
                  new Point(0, 10),
                  new Point(0, 0)
              )
          ),
          new LineString(
              array(
                  new Point(0, 0),
                  new Point(10, 0),
                  new Point(10, 10),
                  new Point(0, 10),
                  new Point(0, 0)
              )
          )
      );
      $multiLineString = new MultiLineString($lineStrings, 4326);
        $this->geometria = $multiLineString;

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
     * Set nombre
     *
     * @param string $nombre
     * @return FuenteHidrica
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
     * Add idProyecto
     *
     * @param \AppBundle\Entity\Proyecto $idProyecto
     * @return FuenteHidrica
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
