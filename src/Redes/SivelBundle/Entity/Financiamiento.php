<?php

namespace Redes\SivelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Financiamiento
 *
 * @ORM\Table(name="financiamiento", uniqueConstraints={@ORM\UniqueConstraint(name="nombre_financiamiento", columns={"nombre_financiamiento"})})
 * @ORM\Entity
 */
class Financiamiento
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
     * @ORM\Column(name="nombre_financiamiento", type="text", length=65535, nullable=false)
     */
    private $nombreFinanciamiento;



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
     * Set nombreFinanciamiento
     *
     * @param string $nombreFinanciamiento
     * @return Financiamiento
     */
    public function setNombreFinanciamiento($nombreFinanciamiento)
    {
        $this->nombreFinanciamiento = $nombreFinanciamiento;

        return $this;
    }

    /**
     * Get nombreFinanciamiento
     *
     * @return string 
     */
    public function getNombreFinanciamiento()
    {
        return $this->nombreFinanciamiento;
    }
}
