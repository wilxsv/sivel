<?php

namespace Redes\SivelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria", uniqueConstraints={@ORM\UniqueConstraint(name="nombre_categoria", columns={"nombre_categoria"})}, indexes={@ORM\Index(name="id_categoria", columns={"id_categoria"})})
 * @ORM\Entity
 */
class Categoria
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
     * @ORM\Column(name="nombre_categoria", type="text", length=65535, nullable=false)
     */
    private $nombreCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_categoria", type="text", length=65535, nullable=true)
     */
    private $descripcionCategoria;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreCategoria
     *
     * @param string $nombreCategoria
     * @return Categoria
     */
    public function setNombreCategoria($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;

        return $this;
    }

    /**
     * Get nombreCategoria
     *
     * @return string 
     */
    public function getNombreCategoria()
    {
        return $this->nombreCategoria;
    }

    /**
     * Set descripcionCategoria
     *
     * @param string $descripcionCategoria
     * @return Categoria
     */
    public function setDescripcionCategoria($descripcionCategoria)
    {
        $this->descripcionCategoria = $descripcionCategoria;

        return $this;
    }

    /**
     * Get descripcionCategoria
     *
     * @return string 
     */
    public function getDescripcionCategoria()
    {
        return $this->descripcionCategoria;
    }

    /**
     * Set idCategoria
     *
     * @param \Redes\SivelBundle\Entity\Categoria $idCategoria
     * @return Categoria
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
}
