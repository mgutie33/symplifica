<?php

namespace SymplificaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HabitacionPaciente
 *
 * @ORM\Table(name="habitacion_paciente")
 * @ORM\Entity(repositoryClass="SymplificaBundle\Repository\HabitacionPacienteRepository")
 */
class HabitacionPaciente {

    /**
     * @ORM\ManyToOne(targetEntity="Habitacion", inversedBy="habitacion_paciente")
     * @ORM\JoinColumn(name="habitacion_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $habitacion;

    /**
     * @ORM\ManyToOne(targetEntity="Paciente", inversedBy="habitacion_paciente")
     * @ORM\JoinColumn(name="paciente_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $paciente;    
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaRegistro", type="datetime")
     */
    private $fechaRegistro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaIngreso", type="datetime")
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaSalida", type="datetime")
     */
    private $fechaSalida;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return HabitacionPaciente
     */
    public function setFechaRegistro($fechaRegistro) {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro() {
        return $this->fechaRegistro;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return HabitacionPaciente
     */
    public function setFechaIngreso($fechaIngreso) {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso() {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     * @return HabitacionPaciente
     */
    public function setFechaSalida($fechaSalida) {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime 
     */
    public function getFechaSalida() {
        return $this->fechaSalida;
    }


    /**
     * Set habitacion
     *
     * @param \SymplificaBundle\Entity\Habitacion $habitacion
     * @return HabitacionPaciente
     */
    public function setHabitacion(\SymplificaBundle\Entity\Habitacion $habitacion = null)
    {
        $this->habitacion = $habitacion;

        return $this;
    }

    /**
     * Get habitacion
     *
     * @return \SymplificaBundle\Entity\Habitacion 
     */
    public function getHabitacion()
    {
        return $this->habitacion;
    }

    /**
     * Set paciente
     *
     * @param \SymplificaBundle\Entity\Paciente $paciente
     * @return HabitacionPaciente
     */
    public function setPaciente(\SymplificaBundle\Entity\Paciente $paciente = null)
    {
        $this->paciente = $paciente;

        return $this;
    }

    /**
     * Get paciente
     *
     * @return \SymplificaBundle\Entity\Paciente 
     */
    public function getPaciente()
    {
        return $this->paciente;
    }
    
    public function __toString() {
        return (string) $this->getId();
    }    
}
