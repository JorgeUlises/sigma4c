<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use CrEOF\Spatial\PHP\Types\Geometry\Point;

/**
 * Muestra
 *
 * @ORM\Table(name="muestra", indexes={@ORM\Index(name="IDX_70FE1350E15F1503", columns={"id_fuente_hidrica"})})
 * @ORM\Entity
 */
class Muestra
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="muestra_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="responsable", type="string", nullable=true)
     */
    private $responsable;

    /**
     * @var string
     *
     * @ORM\Column(name="producto", type="string", nullable=true)
     */
    private $producto;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar_toma", type="string", nullable=true)
     */
    private $lugarToma;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", nullable=true)
     */
    private $foto;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_muestras", type="integer", nullable=true)
     */
    private $nMuestras;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_toma", type="date", nullable=true)
     */
    private $fechaToma;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_recepcion", type="date", nullable=true)
     */
    private $fechaRecepcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_analisis", type="date", nullable=true)
     */
    private $fechaAnalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_muestreo", type="string", nullable=true)
     */
    private $tipoMuestreo;

    /**
     * @var geometry
     *
     * @ORM\Column(name="geometria", type="geometry", nullable=true)
     */
    private $geometria;

    /**
     * @var \FuenteHidrica
     *
     * @ORM\ManyToOne(targetEntity="FuenteHidrica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fuente_hidrica", referencedColumnName="id")
     * })
     */
    private $idFuenteHidrica;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Parametro", inversedBy="idMuestra")
     * @ORM\JoinTable(name="many_muestra_has_many_parametro",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_muestra", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_parametro", referencedColumnName="id")
     *   }
     * )
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Set producto
     *
     * @param string $producto
     * @return Muestra
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return string
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set lugarToma
     *
     * @param string $lugarToma
     * @return Muestra
     */
    public function setLugarToma($lugarToma)
    {
        $this->lugarToma = $lugarToma;

        return $this;
    }

    /**
     * Get lugarToma
     *
     * @return string
     */
    public function getLugarToma()
    {
        return $this->lugarToma;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Muestra
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set nMuestras
     *
     * @param integer $nMuestras
     * @return Muestra
     */
    public function setNMuestras($nMuestras)
    {
        $this->nMuestras = $nMuestras;

        return $this;
    }

    /**
     * Get nMuestras
     *
     * @return integer
     */
    public function getNMuestras()
    {
        return $this->nMuestras;
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
     * Set geometria
     *
     * @param geometry $geometria
     * @return Muestra
     */
    public function setGeometria($geometria)
    {
        var_dump($geometria);
        $coordenadas = $geometria.explode(',');
        $x = $coordenadas[0];
        $y = $coordenadas[0];
        $point = new Point($x, $y, 4326);
        $this->geometria = $point;

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
     * Set idFuenteHidrica
     *
     * @param \AppBundle\Entity\FuenteHidrica $idFuenteHidrica
     * @return Muestra
     */
    public function setIdFuenteHidrica(\AppBundle\Entity\FuenteHidrica $idFuenteHidrica = null)
    {
        $this->idFuenteHidrica = $idFuenteHidrica;

        return $this;
    }

    /**
     * Get idFuenteHidrica
     *
     * @return \AppBundle\Entity\FuenteHidrica
     */
    public function getIdFuenteHidrica()
    {
        return $this->idFuenteHidrica;
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

    public function __toString()
    {
        return $this->producto;
    }
}
