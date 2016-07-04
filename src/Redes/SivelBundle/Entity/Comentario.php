<?php

namespace Redes\SivelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentario
 *
 * @ORM\Table(name="comentario")
 * @ORM\Entity
 */
class Comentario
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
     * @var boolean
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_productoservicio", type="bigint", nullable=false)
     */
    private $idProductoservicio;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_comentario", type="string", length=250, nullable=false)
     */
    private $nombreComentario;

    /**
     * @var string
     *
     * @ORM\Column(name="email_comentario", type="string", length=150, nullable=false)
     */
    private $emailComentario;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_comentario", type="text", nullable=false)
     */
    private $descripcionComentario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_comentario", type="datetime", nullable=false)
     */
    private $registroComentario;



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
     * Set tipo
     *
     * @param boolean $tipo
     * @return Comentario
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return boolean 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idProductoservicio
     *
     * @param integer $idProductoservicio
     * @return Comentario
     */
    public function setIdProductoservicio($idProductoservicio)
    {
        $this->idProductoservicio = $idProductoservicio;

        return $this;
    }

    /**
     * Get idProductoservicio
     *
     * @return integer 
     */
    public function getIdProductoservicio()
    {
        return $this->idProductoservicio;
    }

    /**
     * Set nombreComentario
     *
     * @param string $nombreComentario
     * @return Comentario
     */
    public function setNombreComentario($nombreComentario)
    {
        $this->nombreComentario = $nombreComentario;

        return $this;
    }

    /**
     * Get nombreComentario
     *
     * @return string 
     */
    public function getNombreComentario()
    {
        return $this->nombreComentario;
    }

    /**
     * Set emailComentario
     *
     * @param string $emailComentario
     * @return Comentario
     */
    public function setEmailComentario($emailComentario)
    {
        $this->emailComentario = $emailComentario;

        return $this;
    }

    /**
     * Get emailComentario
     *
     * @return string 
     */
    public function getEmailComentario()
    {
        return $this->emailComentario;
    }

    /**
     * Set descripcionComentario
     *
     * @param string $descripcionComentario
     * @return Comentario
     */
    public function setDescripcionComentario($descripcionComentario)
    {
        $this->descripcionComentario = $descripcionComentario;

        return $this;
    }

    /**
     * Get descripcionComentario
     *
     * @return string 
     */
    public function getDescripcionComentario()
    {
        return $this->descripcionComentario;
    }

    /**
     * Set registroComentario
     *
     * @param \DateTime $registroComentario
     * @return Comentario
     */
    public function setRegistroComentario($registroComentario)
    {
        $this->registroComentario = $registroComentario;

        return $this;
    }

    /**
     * Get registroComentario
     *
     * @return \DateTime 
     */
    public function getRegistroComentario()
    {
        return $this->registroComentario;
    }
}
