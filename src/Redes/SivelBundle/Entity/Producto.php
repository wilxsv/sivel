<?php

namespace Redes\SivelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto", indexes={@ORM\Index(name="id_categoria", columns={"id_categoria"}), @ORM\Index(name="id_financiamiento", columns={"id_financiamiento"}), @ORM\Index(name="id_unidad", columns={"id_unidad"}), @ORM\Index(name="id_persona", columns={"id_persona"})})
 * @ORM\Entity
 */
class Producto
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
     * @ORM\Column(name="nombre_producto", type="text", length=65535, nullable=false)
     */
    private $nombreProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_producto", type="text", length=65535, nullable=false)
     */
    private $descripcionProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="dimencion_producto", type="text", length=65535, nullable=false)
     */
    private $dimencionProducto;

    /**
     * @var float
     *
     * @ORM\Column(name="precio_producto", type="float", precision=10, scale=0, nullable=false)
     */
    private $precioProducto;

    /**
     * @var integer
     *
     * @ORM\Column(name="produccion_producto", type="bigint", nullable=false)
     */
    private $produccionProducto;

    /**
     * @var integer
     *
     * @ORM\Column(name="visto_producto", type="bigint", nullable=false)
     */
    private $vistoProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="img0_producto", type="text", length=65535, nullable=true)
     */
    private $img0Producto;

    /**
     * @var string
     *
     * @ORM\Column(name="img1_producto", type="text", length=65535, nullable=true)
     */
    private $img1Producto;

    /**
     * @var string
     *
     * @ORM\Column(name="img2_producto", type="text", length=65535, nullable=true)
     */
    private $img2Producto;

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
     * @var \UnidadMedida
     *
     * @ORM\ManyToOne(targetEntity="UnidadMedida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_unidad", referencedColumnName="id")
     * })
     */
    private $idUnidad;

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
     * Set nombreProducto
     *
     * @param string $nombreProducto
     * @return Producto
     */
    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;

        return $this;
    }

    /**
     * Get nombreProducto
     *
     * @return string 
     */
    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    /**
     * Set descripcionProducto
     *
     * @param string $descripcionProducto
     * @return Producto
     */
    public function setDescripcionProducto($descripcionProducto)
    {
        $this->descripcionProducto = $descripcionProducto;

        return $this;
    }

    /**
     * Get descripcionProducto
     *
     * @return string 
     */
    public function getDescripcionProducto()
    {
        return $this->descripcionProducto;
    }

    /**
     * Set dimencionProducto
     *
     * @param string $dimencionProducto
     * @return Producto
     */
    public function setDimencionProducto($dimencionProducto)
    {
        $this->dimencionProducto = $dimencionProducto;

        return $this;
    }

    /**
     * Get dimencionProducto
     *
     * @return string 
     */
    public function getDimencionProducto()
    {
        return $this->dimencionProducto;
    }

    /**
     * Set precioProducto
     *
     * @param float $precioProducto
     * @return Producto
     */
    public function setPrecioProducto($precioProducto)
    {
        $this->precioProducto = $precioProducto;

        return $this;
    }

    /**
     * Get precioProducto
     *
     * @return float 
     */
    public function getPrecioProducto()
    {
        return $this->precioProducto;
    }

    /**
     * Set produccionProducto
     *
     * @param integer $produccionProducto
     * @return Producto
     */
    public function setProduccionProducto($produccionProducto)
    {
        $this->produccionProducto = $produccionProducto;

        return $this;
    }

    /**
     * Get produccionProducto
     *
     * @return integer 
     */
    public function getProduccionProducto()
    {
        return $this->produccionProducto;
    }

    /**
     * Set vistoProducto
     *
     * @param integer $vistoProducto
     * @return Producto
     */
    public function setVistoProducto($vistoProducto)
    {
        $this->vistoProducto = $vistoProducto;

        return $this;
    }

    /**
     * Get vistoProducto
     *
     * @return integer 
     */
    public function getVistoProducto()
    {
        return $this->vistoProducto;
    }

    /**
     * Set img0Producto
     *
     * @param string $img0Producto
     * @return Producto
     */
    public function setImg0Producto($img0Producto)
    {
        $this->img0Producto = $img0Producto;

        return $this;
    }

    /**
     * Get img0Producto
     *
     * @return string 
     */
    public function getImg0Producto()
    {
        return $this->img0Producto;
    }

    /**
     * Set img1Producto
     *
     * @param string $img1Producto
     * @return Producto
     */
    public function setImg1Producto($img1Producto)
    {
        $this->img1Producto = $img1Producto;

        return $this;
    }

    /**
     * Get img1Producto
     *
     * @return string 
     */
    public function getImg1Producto()
    {
        return $this->img1Producto;
    }

    /**
     * Set img2Producto
     *
     * @param string $img2Producto
     * @return Producto
     */
    public function setImg2Producto($img2Producto)
    {
        $this->img2Producto = $img2Producto;

        return $this;
    }

    /**
     * Get img2Producto
     *
     * @return string 
     */
    public function getImg2Producto()
    {
        return $this->img2Producto;
    }

    /**
     * Set registro
     *
     * @param \DateTime $registro
     * @return Producto
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
     * @return Producto
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
     * @return Producto
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
     * Set idUnidad
     *
     * @param \Redes\SivelBundle\Entity\UnidadMedida $idUnidad
     * @return Producto
     */
    public function setIdUnidad(\Redes\SivelBundle\Entity\UnidadMedida $idUnidad = null)
    {
        $this->idUnidad = $idUnidad;

        return $this;
    }

    /**
     * Get idUnidad
     *
     * @return \Redes\SivelBundle\Entity\UnidadMedida 
     */
    public function getIdUnidad()
    {
        return $this->idUnidad;
    }

    /**
     * Set idPersona
     *
     * @param \Redes\SivelBundle\Entity\Persona $idPersona
     * @return Producto
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
