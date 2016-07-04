<?php

namespace Redes\SivelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidad
 *
 * @ORM\Table(name="localidad", uniqueConstraints={@ORM\UniqueConstraint(name="nombre_localidad", columns={"nombre_localidad"})}, indexes={@ORM\Index(name="id_localidad", columns={"id_localidad"})})
 * @ORM\Entity
 */
class Localidad
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
     * @ORM\Column(name="nombre_localidad", type="text", length=65535, nullable=false)
     */
    private $nombreLocalidad;

    /**
     * @var float
     *
     * @ORM\Column(name="latitud_localidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitudLocalidad;

    /**
     * @var float
     *
     * @ORM\Column(name="longitud_localidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitudLocalidad;

    /**
     * @var \Localidad
     *
     * @ORM\ManyToOne(targetEntity="Localidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_localidad", referencedColumnName="id")
     * })
     */
    private $idLocalidad;



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
     * Set nombreLocalidad
     *
     * @param string $nombreLocalidad
     * @return Localidad
     */
    public function setNombreLocalidad($nombreLocalidad)
    {
        $this->nombreLocalidad = $nombreLocalidad;

        return $this;
    }

    /**
     * Get nombreLocalidad
     *
     * @return string 
     */
    public function getNombreLocalidad()
    {
        return $this->nombreLocalidad;
    }

    /**
     * Set latitudLocalidad
     *
     * @param float $latitudLocalidad
     * @return Localidad
     */
    public function setLatitudLocalidad($latitudLocalidad)
    {
        $this->latitudLocalidad = $latitudLocalidad;

        return $this;
    }

    /**
     * Get latitudLocalidad
     *
     * @return float 
     */
    public function getLatitudLocalidad()
    {
        return $this->latitudLocalidad;
    }

    /**
     * Set longitudLocalidad
     *
     * @param float $longitudLocalidad
     * @return Localidad
     */
    public function setLongitudLocalidad($longitudLocalidad)
    {
        $this->longitudLocalidad = $longitudLocalidad;

        return $this;
    }

    /**
     * Get longitudLocalidad
     *
     * @return float 
     */
    public function getLongitudLocalidad()
    {
        return $this->longitudLocalidad;
    }

    /**
     * Set idLocalidad
     *
     * @param \Redes\SivelBundle\Entity\Localidad $idLocalidad
     * @return Localidad
     */
    public function setIdLocalidad(\Redes\SivelBundle\Entity\Localidad $idLocalidad = null)
    {
        $this->idLocalidad = $idLocalidad;

        return $this;
    }

    /**
     * Get idLocalidad
     *
     * @return \Redes\SivelBundle\Entity\Localidad 
     */
    public function getIdLocalidad()
    {
        return $this->idLocalidad;
    }
}
