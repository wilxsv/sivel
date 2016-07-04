<?php

namespace Redes\SivelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="persona", uniqueConstraints={@ORM\UniqueConstraint(name="dui_persona", columns={"dui_persona"}), @ORM\UniqueConstraint(name="nit_persona", columns={"nit_persona"})}, indexes={@ORM\Index(name="id_localidad", columns={"id_localidad"})})
 * @ORM\Entity
 */
class Persona
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
     * @ORM\Column(name="nombre_persona", type="text", length=65535, nullable=false)
     */
    private $nombrePersona;

    /**
     * @var string
     *
     * @ORM\Column(name="dui_persona", type="text", length=65535, nullable=false)
     */
    private $duiPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="nit_persona", type="text", length=65535, nullable=false)
     */
    private $nitPersona;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nacimiento_persona", type="date", nullable=false)
     */
    private $nacimientoPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="movil_persona", type="string", length=15, nullable=false)
     */
    private $movilPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_persona", type="string", length=15, nullable=false)
     */
    private $telefonoPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="correo_persona", type="text", length=65535, nullable=false)
     */
    private $correoPersona;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sexo_persona", type="boolean", nullable=false)
     */
    private $sexoPersona;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ingreso_persona", type="date", nullable=false)
     */
    private $ingresoPersona;

    /**
     * @var float
     *
     * @ORM\Column(name="latitud_persona", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitudPersona;

    /**
     * @var float
     *
     * @ORM\Column(name="longitud_persona", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitudPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion_persona", type="text", nullable=false)
     */
    private $direccionPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen_persona", type="text", nullable=false)
     */
    private $imagenPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion_persona", type="text", nullable=false)
     */
    private $observacionPersona;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro", type="datetime", nullable=false)
     */
    private $registro;

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
     * Set nombrePersona
     *
     * @param string $nombrePersona
     * @return Persona
     */
    public function setNombrePersona($nombrePersona)
    {
        $this->nombrePersona = $nombrePersona;

        return $this;
    }

    /**
     * Get nombrePersona
     *
     * @return string 
     */
    public function getNombrePersona()
    {
        return $this->nombrePersona;
    }

    /**
     * Set duiPersona
     *
     * @param string $duiPersona
     * @return Persona
     */
    public function setDuiPersona($duiPersona)
    {
        $this->duiPersona = $duiPersona;

        return $this;
    }

    /**
     * Get duiPersona
     *
     * @return string 
     */
    public function getDuiPersona()
    {
        return $this->duiPersona;
    }

    /**
     * Set nitPersona
     *
     * @param string $nitPersona
     * @return Persona
     */
    public function setNitPersona($nitPersona)
    {
        $this->nitPersona = $nitPersona;

        return $this;
    }

    /**
     * Get nitPersona
     *
     * @return string 
     */
    public function getNitPersona()
    {
        return $this->nitPersona;
    }

    /**
     * Set nacimientoPersona
     *
     * @param \DateTime $nacimientoPersona
     * @return Persona
     */
    public function setNacimientoPersona($nacimientoPersona)
    {
        $this->nacimientoPersona = $nacimientoPersona;

        return $this;
    }

    /**
     * Get nacimientoPersona
     *
     * @return \DateTime 
     */
    public function getNacimientoPersona()
    {
        return $this->nacimientoPersona;
    }

    /**
     * Set movilPersona
     *
     * @param string $movilPersona
     * @return Persona
     */
    public function setMovilPersona($movilPersona)
    {
        $this->movilPersona = $movilPersona;

        return $this;
    }

    /**
     * Get movilPersona
     *
     * @return string 
     */
    public function getMovilPersona()
    {
        return $this->movilPersona;
    }

    /**
     * Set telefonoPersona
     *
     * @param string $telefonoPersona
     * @return Persona
     */
    public function setTelefonoPersona($telefonoPersona)
    {
        $this->telefonoPersona = $telefonoPersona;

        return $this;
    }

    /**
     * Get telefonoPersona
     *
     * @return string 
     */
    public function getTelefonoPersona()
    {
        return $this->telefonoPersona;
    }

    /**
     * Set correoPersona
     *
     * @param string $correoPersona
     * @return Persona
     */
    public function setCorreoPersona($correoPersona)
    {
        $this->correoPersona = $correoPersona;

        return $this;
    }

    /**
     * Get correoPersona
     *
     * @return string 
     */
    public function getCorreoPersona()
    {
        return $this->correoPersona;
    }

    /**
     * Set sexoPersona
     *
     * @param boolean $sexoPersona
     * @return Persona
     */
    public function setSexoPersona($sexoPersona)
    {
        $this->sexoPersona = $sexoPersona;

        return $this;
    }

    /**
     * Get sexoPersona
     *
     * @return boolean 
     */
    public function getSexoPersona()
    {
        return $this->sexoPersona;
    }

    /**
     * Set ingresoPersona
     *
     * @param \DateTime $ingresoPersona
     * @return Persona
     */
    public function setIngresoPersona($ingresoPersona)
    {
        $this->ingresoPersona = $ingresoPersona;

        return $this;
    }

    /**
     * Get ingresoPersona
     *
     * @return \DateTime 
     */
    public function getIngresoPersona()
    {
        return $this->ingresoPersona;
    }

    /**
     * Set latitudPersona
     *
     * @param float $latitudPersona
     * @return Persona
     */
    public function setLatitudPersona($latitudPersona)
    {
        $this->latitudPersona = $latitudPersona;

        return $this;
    }

    /**
     * Get latitudPersona
     *
     * @return float 
     */
    public function getLatitudPersona()
    {
        return $this->latitudPersona;
    }

    /**
     * Set longitudPersona
     *
     * @param float $longitudPersona
     * @return Persona
     */
    public function setLongitudPersona($longitudPersona)
    {
        $this->longitudPersona = $longitudPersona;

        return $this;
    }

    /**
     * Get longitudPersona
     *
     * @return float 
     */
    public function getLongitudPersona()
    {
        return $this->longitudPersona;
    }

    /**
     * Set direccionPersona
     *
     * @param string $direccionPersona
     * @return Persona
     */
    public function setDireccionPersona($direccionPersona)
    {
        $this->direccionPersona = $direccionPersona;

        return $this;
    }

    /**
     * Get direccionPersona
     *
     * @return string 
     */
    public function getDireccionPersona()
    {
        return $this->direccionPersona;
    }

    /**
     * Set imagenPersona
     *
     * @param string $imagenPersona
     * @return Persona
     */
    public function setImagenPersona($imagenPersona)
    {
        $this->imagenPersona = $imagenPersona;

        return $this;
    }

    /**
     * Get imagenPersona
     *
     * @return string 
     */
    public function getImagenPersona()
    {
        return $this->imagenPersona;
    }

    /**
     * Set observacionPersona
     *
     * @param string $observacionPersona
     * @return Persona
     */
    public function setObservacionPersona($observacionPersona)
    {
        $this->observacionPersona = $observacionPersona;

        return $this;
    }

    /**
     * Get observacionPersona
     *
     * @return string 
     */
    public function getObservacionPersona()
    {
        return $this->observacionPersona;
    }

    /**
     * Set registro
     *
     * @param \DateTime $registro
     * @return Persona
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
     * Set idLocalidad
     *
     * @param \Redes\SivelBundle\Entity\Localidad $idLocalidad
     * @return Persona
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
