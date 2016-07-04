<?php

namespace Redes\SivelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchivosPersona
 *
 * @ORM\Table(name="archivos_persona", uniqueConstraints={@ORM\UniqueConstraint(name="path_archivo", columns={"path_archivo"})}, indexes={@ORM\Index(name="id_persona", columns={"id_persona"})})
 * @ORM\Entity
 */
class ArchivosPersona
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
     * @ORM\Column(name="nombre_archivo", type="text", length=65535, nullable=false)
     */
    private $nombreArchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="path_archivo", type="text", length=65535, nullable=false)
     */
    private $pathArchivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_archivo", type="datetime", nullable=false)
     */
    private $registroArchivo;

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
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     * @return ArchivosPersona
     */
    public function setNombreArchivo($nombreArchivo)
    {
        $this->nombreArchivo = $nombreArchivo;

        return $this;
    }

    /**
     * Get nombreArchivo
     *
     * @return string 
     */
    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }

    /**
     * Set pathArchivo
     *
     * @param string $pathArchivo
     * @return ArchivosPersona
     */
    public function setPathArchivo($pathArchivo)
    {
        $this->pathArchivo = $pathArchivo;

        return $this;
    }

    /**
     * Get pathArchivo
     *
     * @return string 
     */
    public function getPathArchivo()
    {
        return $this->pathArchivo;
    }

    /**
     * Set registroArchivo
     *
     * @param \DateTime $registroArchivo
     * @return ArchivosPersona
     */
    public function setRegistroArchivo($registroArchivo)
    {
        $this->registroArchivo = $registroArchivo;

        return $this;
    }

    /**
     * Get registroArchivo
     *
     * @return \DateTime 
     */
    public function getRegistroArchivo()
    {
        return $this->registroArchivo;
    }

    /**
     * Set idPersona
     *
     * @param \Redes\SivelBundle\Entity\Persona $idPersona
     * @return ArchivosPersona
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
