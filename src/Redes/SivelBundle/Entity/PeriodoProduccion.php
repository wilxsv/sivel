<?php

namespace Redes\SivelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PeriodoProduccion
 *
 * @ORM\Table(name="periodo_produccion", indexes={@ORM\Index(name="id_producto", columns={"id_producto"})})
 * @ORM\Entity
 */
class PeriodoProduccion
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
     * @var \DateTime
     *
     * @ORM\Column(name="inicio_periodo", type="date", nullable=false)
     */
    private $inicioPeriodo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_periodo", type="date", nullable=false)
     */
    private $finPeriodo;

    /**
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producto", referencedColumnName="id")
     * })
     */
    private $idProducto;



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
     * Set inicioPeriodo
     *
     * @param \DateTime $inicioPeriodo
     * @return PeriodoProduccion
     */
    public function setInicioPeriodo($inicioPeriodo)
    {
        $this->inicioPeriodo = $inicioPeriodo;

        return $this;
    }

    /**
     * Get inicioPeriodo
     *
     * @return \DateTime 
     */
    public function getInicioPeriodo()
    {
        return $this->inicioPeriodo;
    }

    /**
     * Set finPeriodo
     *
     * @param \DateTime $finPeriodo
     * @return PeriodoProduccion
     */
    public function setFinPeriodo($finPeriodo)
    {
        $this->finPeriodo = $finPeriodo;

        return $this;
    }

    /**
     * Get finPeriodo
     *
     * @return \DateTime 
     */
    public function getFinPeriodo()
    {
        return $this->finPeriodo;
    }

    /**
     * Set idProducto
     *
     * @param \Redes\SivelBundle\Entity\Producto $idProducto
     * @return PeriodoProduccion
     */
    public function setIdProducto(\Redes\SivelBundle\Entity\Producto $idProducto = null)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return \Redes\SivelBundle\Entity\Producto 
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }
}
