<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use CrEOF\Spatial\PHP\Types\Geometry\LineString;
use CrEOF\Spatial\PHP\Types\Geometry\Point;
use CrEOF\Spatial\PHP\Types\Geometry\Polygon;
// use CrEOF\Spatial\PHP\Types\Geometry\MultiLineString;

/**
 * Proyecto
 */
class Proyecto
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var geometry
     */
    private $geometria;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idEmpresa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEmpresa = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set geometria
     *
     * @param geometry $geometria
     * @return Proyecto
     */
    public function setGeometria($geometria)
    {
      $parent = '/[\(\)]/i';
      $nada = '$1';
      $geometria = preg_replace($parent, $nada, $geometria);
      $coordenadas = explode(',',$geometria);
      //var_dump($coordenadas);
      //echo('<br>');
      $puntos = array();
      foreach ($coordenadas as $key => $coordenada) {
        $aux = explode(' ',$coordenada);
        $x = $aux[0];
        $y = $aux[1];
        //var_dump('x:'.$x,'y:'.$y);
        //echo('<br>');
        $puntos[] = new Point($x, $y);
      }
      $lineStrings = array(
           new LineString(
           $puntos
         )
       );
       //var_dump($lineStrings);

        // $lineStrings = array(
        //     new LineString(
        //         array(
        //             new Point(0, 0),
        //             new Point(10, 0),
        //             new Point(10, 10),
        //             new Point(0, 10),
        //             new Point(0, 0)
        //         )
        //     ),
        //     new LineString(
        //         array(
        //             new Point(0, 0),
        //             new Point(10, 0),
        //             new Point(10, 10),
        //             new Point(0, 10),
        //             new Point(0, 0)
        //         )
        //     )
        // );
        // $multiLineString = new MultiLineString($lineStrings, 4326);
        // $this->geometria = $multiLineString;

        // $rings = array(
        //     new LineString(
        //         array(
        //             new Point(0, 0),
        //             new Point(10, 0),
        //             new Point(10, 10),
        //             new Point(0, 10),
        //             new Point(0, 0)
        //         )
        //     )
        // );
        //https://github.com/creof/doctrine2-spatial/blob/master/tests/CrEOF/Spatial/Tests/PHP/Types/Geometry/PolygonTest.php#L46
        $polygon = new Polygon($lineStrings, 4326);
        $this->geometria = $polygon;
        //  $this->geometria = $geometria;
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
     * Get display name
     *
     * @return String
     */
    public function __toString()
    {
        return $this->nombre;
    }
}
