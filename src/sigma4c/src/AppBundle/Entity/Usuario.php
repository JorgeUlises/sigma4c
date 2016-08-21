<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="IDX_2265B05D664AF320", columns={"id_empresa"}), @ORM\Index(name="IDX_2265B05D90F1D76D", columns={"id_rol"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="usuario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", nullable=true)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", nullable=true)
     */
    private $nombre;

    /**
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     * })
     */
    private $idEmpresa;

    /**
     * @var \Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rol", referencedColumnName="id")
     * })
     */
    private $idRol;



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
     * Set alias
     *
     * @param string $alias
     * @return Usuario
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Usuario
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * Set idEmpresa
     *
     * @param \AppBundle\Entity\Empresa $idEmpresa
     * @return Usuario
     */
    public function setIdEmpresa(\AppBundle\Entity\Empresa $idEmpresa = null)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return \AppBundle\Entity\Empresa 
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set idRol
     *
     * @param \AppBundle\Entity\Rol $idRol
     * @return Usuario
     */
    public function setIdRol(\AppBundle\Entity\Rol $idRol = null)
    {
        $this->idRol = $idRol;

        return $this;
    }

    /**
     * Get idRol
     *
     * @return \AppBundle\Entity\Rol 
     */
    public function getIdRol()
    {
        return $this->idRol;
    }
}
