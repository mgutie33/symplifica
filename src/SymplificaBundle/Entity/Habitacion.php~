<?php

namespace SymplificaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Habitacion
 *
 * @ORM\Table(name="habitacion")
 * @ORM\Entity(repositoryClass="SymplificaBundle\Repository\HabitacionRepository")
 */
class Habitacion {

    /**
     * @ORM\OneToMany(targetEntity="HabitacionPaciente", mappedBy="habitacion") 
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
     * @var int
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var int
     *
     * @ORM\Column(name="capacidad", type="integer")
     */
    private $capacidad;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Habitacion
     */
    public function setNumero($numero) {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Set capacidad
     *
     * @param integer $capacidad
     * @return Habitacion
     */
    public function setCapacidad($capacidad) {
        $this->capacidad = $capacidad;

        return $this;
    }

    /**
     * Get capacidad
     *
     * @return integer 
     */
    public function getCapacidad() {
        return $this->capacidad;
    }

    /**
     * Add habitacion_paciente
     *
     * @param \SymplificaBundle\Entity\HabitacionPaciente $habitacionPaciente
     * @return Habitacion
     */
    public function addHabitacionPaciente(\SymplificaBundle\Entity\HabitacionPaciente $habitacionPaciente) {
        $this->habitacion_paciente[] = $habitacionPaciente;

        return $this;
    }

    /**
     * Remove habitacion_paciente
     *
     * @param \SymplificaBundle\Entity\HabitacionPaciente $habitacionPaciente
     */
    public function removeHabitacionPaciente(\SymplificaBundle\Entity\HabitacionPaciente $habitacionPaciente) {
        $this->habitacion_paciente->removeElement($habitacionPaciente);
    }

    /**
     * Get habitacion_paciente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHabitacionPaciente() {
        return $this->habitacion_paciente;
    }

    public function __toString() {
        return (string) $this->getId();
    }
}
