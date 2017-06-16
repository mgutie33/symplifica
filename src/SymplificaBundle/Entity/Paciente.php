<?php

namespace SymplificaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Paciente
 *
 * @ORM\Table(name="paciente")
 * @ORM\Entity(repositoryClass="SymplificaBundle\Repository\PacienteRepository")
 */
class Paciente {

    /**
     * @ORM\OneToMany(targetEntity="HabitacionPaciente", mappedBy="paciente") 
     */
    protected $habitacion_paciente;

    public function __construct() {
        $this->habitacion_paciente = new ArrayCollection();
        $this->isActive = true;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="cedula", type="integer")
     */
    private $cedula;

    /**
     * @var int
     *
     * @ORM\Column(name="telefono", type="integer")
     */
    private $telefono;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Paciente
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set cedula
     *
     * @param integer $cedula
     * @return Paciente
     */
    public function setCedula($cedula) {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return integer 
     */
    public function getCedula() {
        return $this->cedula;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     * @return Paciente
     */
    public function setTelefono($telefono) {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer 
     */
    public function getTelefono() {
        return $this->telefono;
    }


    /**
     * Add habitacion_paciente
     *
     * @param \SymplificaBundle\Entity\HabitacionPaciente $habitacionPaciente
     * @return Paciente
     */
    public function addHabitacionPaciente(\SymplificaBundle\Entity\HabitacionPaciente $habitacionPaciente)
    {
        $this->habitacion_paciente[] = $habitacionPaciente;

        return $this;
    }

    /**
     * Remove habitacion_paciente
     *
     * @param \SymplificaBundle\Entity\HabitacionPaciente $habitacionPaciente
     */
    public function removeHabitacionPaciente(\SymplificaBundle\Entity\HabitacionPaciente $habitacionPaciente)
    {
        $this->habitacion_paciente->removeElement($habitacionPaciente);
    }

    /**
     * Get habitacion_paciente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHabitacionPaciente()
    {
        return $this->habitacion_paciente;
    }
    
    public function __toString() {
        return (string) $this->getId();
    }    
}
