<?php

namespace SymplificaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use SymplificaBundle\Entity\Habitacion;
use SymplificaBundle\Form\HabitacionType;
use SymplificaBundle\Entity\Paciente;
use SymplificaBundle\Form\PacienteType;
use SymplificaBundle\Entity\HabitacionPaciente;
use SymplificaBundle\Form\HabitacionPacienteType;

class SymplificaController extends Controller {

    public function indexAction() {
        return $this->render('SymplificaBundle:Default:index.html.twig');
    }

    public function menuPrincipalAction() {
        $em = $this->getDoctrine()->getManager();

        $habitacion = $em->getRepository('SymplificaBundle:Habitacion')->findAll();
        $paciente = $em->getRepository('SymplificaBundle:Paciente')->findAll();
        $habitacionPaciente = $em->getRepository('SymplificaBundle:HabitacionPaciente')->findAll();

        $habitacionEntity = new Habitacion;
        $pacienteEntity = new Paciente;
        $habitacionPacienteEntity = new HabitacionPaciente;

        $add_habitacion_form_ajax = $this->createCustomForm(
                new \SymplificaBundle\Form\HabitacionType(), $habitacionEntity, 'POST', 'index_procesarHabitacion');

        $add_paciente_form_ajax = $this->createCustomForm(
                new \SymplificaBundle\Form\PacienteType(), $pacienteEntity, 'POST', 'index_procesarPaciente');

        $add_paciente_habitacion_form_ajax = $this->createCustomForm(
                new \SymplificaBundle\Form\HabitacionPacienteType(), $habitacionPacienteEntity, 'POST', 'index_procesarHabitacionPaciente');

        return $this->render('SymplificaBundle:Index:menuPrincipal.html.twig', array(
                    'add_habitacion_form_ajax' => $add_habitacion_form_ajax->createView(),
                    'add_paciente_form_ajax' => $add_paciente_form_ajax->createView(),
                    'add_paciente_habitacion_form_ajax' => $add_paciente_habitacion_form_ajax->createView(),
                    'habitacion' => $habitacion,
                    'paciente' => $paciente,
                    'habitacionPaciente' => $habitacionPaciente
        ));
    }

//    public function ingresarHabitacionAction() {
//        return $this->render('SymplificaBundle:Index:ingresarHabitacion.html.twig');
//    }

    public function procesarHabitacionAction(Request $request) {
        $numero_habitacion = $_POST["numero_habitacion"];
        $capacidad_habitacion = $_POST["capacidad_habitacion"];

        $em = $this->getDoctrine()->getManager();
        if ($request->isXMLHttpRequest()) {
            $habitacion = new Habitacion();
            $habitacion->setNumero($numero_habitacion);
            $habitacion->setCapacidad($capacidad_habitacion);

            $em->persist($habitacion);
            $em->flush();

            $response = array();
            $response[] = array(
                'habitacion_id' => $habitacion->getId(),
                'habitacion_numero' => $habitacion->getNumero(),
                'habitacion_capacidad' => $habitacion->getCapacidad()
            );

            return new Response(json_encode($response), 200, array('Content-Type' => 'application/json'));
        }
        return $this->redirectToRoute('index_menuPrincipal');
    }

//    public function ingresarPacienteAction() {
//        return $this->render('SymplificaBundle:Index:ingresarPaciente.html.twig');
//    }

    public function procesarPacienteAction(Request $request) {
        $nombre_paciente = $_POST["nombre_paciente"];
        $cedula_paciente = $_POST["cedula_paciente"];
        $telefono_paciente = $_POST["telefono_paciente"];

        $em = $this->getDoctrine()->getManager();
        if ($request->isXMLHttpRequest()) {
            $paciente = new Paciente();
            $paciente->setNombre($nombre_paciente);
            $paciente->setCedula($cedula_paciente);
            $paciente->setTelefono($telefono_paciente);

            $em->persist($paciente);
            $em->flush();

            $response = array();
            $response[] = array(
                'paciente_id' => $paciente->getId(),
                'paciente_nombre' => $paciente->getNombre(),
                'paciente_cedula' => $paciente->getCedula(),
                'paciente_telefono' => $paciente->getTelefono()
            );

            return new Response(json_encode($response), 200, array('Content-Type' => 'application/json'));
        }
        return $this->redirectToRoute('index_menuPrincipal');
    }

    public function procesarHabitacionPacienteAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $id_habitacion = $_POST["id_habitacion"];
        $id_paciente = $_POST["id_paciente"];

        $habitacion = $em->getRepository('SymplificaBundle:Habitacion')->findOneById($id_habitacion);
        $paciente = $em->getRepository('SymplificaBundle:Paciente')->findOneById($id_paciente);

        $fecha_ingreso = null;
        $fecha_salida = null;

        $query = $em->createQuery(
                        'SELECT h 
                FROM SymplificaBundle:Habitacion h 
                WHERE h.id = :valorId AND h.capacidad = 0'
                )->setParameter('valorId', $id_habitacion);

        $query->getResult();
        
        // Si la capacidad es CERO que no haga nada; Si la capacidad es diferente de CERO entonces que me lo ejecute
        if ($query->getResult()) {
            
        } else {
            if ($request->isXMLHttpRequest()) {
                $habitacionPaciente = new HabitacionPaciente();

                $habitacionPaciente->setHabitacion($habitacion);
                $habitacionPaciente->setPaciente($paciente);
                $habitacionPaciente->setFechaIngreso($fecha_ingreso);
                $habitacionPaciente->setFechaSalida($fecha_salida);

                $em->persist($habitacionPaciente);
                $em->flush();

                
                $capacidadHabitacion = $habitacion->getCapacidad();
                
                // prueba: actualizar a cero la capacidad de la respectiva habitacion
                $habitacion->setCapacidad($capacidadHabitacion-1);
                $em->flush();
                
                
                
                $response = array();
                $response[] = array(
                    'habitacionPaciente_id' => $habitacionPaciente->getId(),
                    'habitacionPaciente_id_habitacion' => $habitacionPaciente->getHabitacion()->getId(),
                    'habitacionPaciente_id_paciente' => $habitacionPaciente->getPaciente()->getId()
                );

                
                
                
                
                return new Response(json_encode($response), 200, array('Content-Type' => 'application/json'));
            }
            
        }

        return $this->redirectToRoute('index_menuPrincipal');
    }

    private function createCustomForm($objForm, $objEntity, $method, $route) {
        $form = $this->createForm($objForm, $objEntity, array(
            'action' => $this->generateUrl($route),
            'method' => $method
        ));

        return $form;
    }
    
    public function refrescartablaHabitacionAction()
    {
        $em = $this->getDoctrine()->getManager();

        $habitacion = $em->getRepository('SymplificaBundle:Habitacion')->findAll();

        return $this->render('SymplificaBundle:Index:refrescartablaHabitacion.html.twig', array(
                    'habitacion' => $habitacion
                        )
        );
    }
    
    public function refrescartablaPacienteAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $paciente = $em->getRepository('SymplificaBundle:Paciente')->findAll();
        
        return $this->render('SymplificaBundle:Index:refrescartablaPaciente.html.twig', array (
                    'paciente' => $paciente
                        )
        );
    }

}
