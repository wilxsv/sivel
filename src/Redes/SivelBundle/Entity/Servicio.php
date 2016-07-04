<?php

namespace Redes\SivelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 *
 * @ORM\Table(name="servicio", indexes={@ORM\Index(name="id_categoria", columns={"id_categoria"}), @ORM\Index(name="id_financiamiento", columns={"id_financiamiento"}), @ORM\Index(name="id_persona", columns={"id_persona"})})
 * @ORM\Entity
 */
class Servicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_servicio", type="text", length=65535, nullable=false)
     */
    private $nombreServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_servicio", type="text", length=65535, nullable=false)
     */
    private $descripcionServicio;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_servicio", type="float", precision=10, scale=0, nullable=false)
     */
    private $precioServicio;

    /**
     * @var integer
     *
     * @ORM\Column(name="visto_servicio", type="bigint", nullable=false)
     */
    private $vistoServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="img0_servicio", type="text", length=65535, nullable=true)
     */
    private $img0Servicio;

    /**
     * @var string
     *
     * @ORM\Column(name="img1_servicio", type="text", length=65535, nullable=true)
     */
    private $img1Servicio;

    /**
     * @var string
     *
     * @ORM\Column(name="img2_servicio", type="text", length=65535, nullable=true)
     */
    private $img2Servicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro", type="datetime", nullable=false)
     */
    private $registro;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categoria", referencedColumnName="id")
     * })
     */
    private $idCategoria;

    /**
     * @var \Financiamiento
     *
     * @ORM\ManyToOne(targetEntity="Financiamiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_financiamiento", referencedColumnName="id")
     * })
     */
    private $idFinanciamiento;

    /**
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_persona", referencedColumnName="id")
     * })
     */
    private $idPersona;



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
     * Set nombreServicio
     *
     * @param string $nombreServicio
     * @return Servicio
     */
    public function setNombreServicio($nombreServicio)
    {
        $this->nombreServicio = $nombreServicio;

        return $this;
    }

    /**
     * Get nombreServicio
     *
     * @return string 
     */
    public function getNombreServicio()
    {
        return $this->nombreServicio;
    }

    /**
     * Set descripcionServicio
     *
     * @param string $descripcionServicio
     * @return Servicio
     */
    public function setDescripcionServicio($descripcionServicio)
    {
        $this->descripcionServicio = $descripcionServicio;

        return $this;
    }

    /**
     * Get descripcionServicio
     *
     * @return string 
     */
    public function getDescripcionServicio()
    {
        return $this->descripcionServicio;
    }

    /**
     * Set precioServicio
     *
     * @param float $precioServicio
     * @return Servicio
     */
    public function setPrecioServicio($precioServicio)
    {
        $this->precioServicio = $precioServicio;

        return $this;
    }

    /**
     * Get precioServicio
     *
     * @return float 
     */
    public function getPrecioServicio()
    {
        return $this->precioServicio;
    }

    /**
     * Set vistoServicio
     *
     * @param integer $vistoServicio
     * @return Servicio
     */
    public function setVistoServicio($vistoServicio)
    {
        $this->vistoServicio = $vistoServicio;

        return $this;
    }

    /**
     * Get vistoServicio
     *
     * @return integer 
     */
    public function getVistoServicio()
    {
        return $this->vistoServicio;
    }

    /**
     * Set img0Servicio
     *
     * @param string $img0Servicio
     * @return Servicio
     */
    public function setImg0Servicio($img0Servicio)
    {
        $this->img0Servicio = $img0Servicio;

        return $this;
    }

    /**
     * Get img0Servicio
     *
     * @return string 
     */
    public function getImg0Servicio()
    {
        return $this->img0Servicio;
    }

    /**
     * Set img1Servicio
     *
     * @param string $img1Servicio
     * @return Servicio
     */
    public function setImg1Servicio($img1Servicio)
    {
        $this->img1Servicio = $img1Servicio;

        return $this;
    }

    /**
     * Get img1Servicio
     *
     * @return string 
     */
    public function getImg1Servicio()
    {
        return $this->img1Servicio;
    }

    /**
     * Set img2Servicio
     *
     * @param string $img2Servicio
     * @return Servicio
     */
    public function setImg2Servicio($img2Servicio)
    {
        $this->img2Servicio = $img2Servicio;

        return $this;
    }

    /**
     * Get img2Servicio
     *
     * @return string 
     */
    public function getImg2Servicio()
    {
        return $this->img2Servicio;
    }

    /**
     * Set registro
     *
     * @param \DateTime $registro
     * @return Servicio
     */
    public function setRegistro($registro)
    {
        $this->registro = $registro;

        return $this;
    }

    /**
     * Get registro
     *
     * @return \DateTime 
     */
    public function getRegistro()
    {
        return $this->registro;
    }

    /**
     * Set idCategoria
     *
     * @param \Redes\SivelBundle\Entity\Categoria $idCategoria
     * @return Servicio
     */
    public function setIdCategoria(\Redes\SivelBundle\Entity\Categoria $idCategoria = null)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return \Redes\SivelBundle\Entity\Categoria 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set idFinanciamiento
     *
     * @param \Redes\SivelBundle\Entity\Financiamiento $idFinanciamiento
     * @return Servicio
     */
    public function setIdFinanciamiento(\Redes\SivelBundle\Entity\Financiamiento $idFinanciamiento = null)
    {
        $this->idFinanciamiento = $idFinanciamiento;

        return $this;
    }

    /**
     * Get idFinanciamiento
     *
     * @return \Redes\SivelBundle\Entity\Financiamiento 
     */
    public function getIdFinanciamiento()
    {
        return $this->idFinanciamiento;
    }

    /**
     * Set idPersona
     *
     * @param \Redes\SivelBundle\Entity\Persona $idPersona
     * @return Servicio
     */
    public function setIdPersona(\Redes\SivelBundle\Entity\Persona $idPersona = null)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get idPersona
     *
     * @return \Redes\SivelBundle\Entity\Persona 
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }
}
