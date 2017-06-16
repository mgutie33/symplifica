<?php

/* SymplificaBundle:Index:ingresarPacienteHabitacion.html.twig */
class __TwigTemplate_c8493475c5390bfc1c3fab73dcec4fee3a993d246b5d342b1ff86610ebaa64e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b18f99f330a924e03bca155e248f43b84e62dc3dcf64530eda017d0e851d1ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18f99f330a924e03bca155e248f43b84e62dc3dcf64530eda017d0e851d1ae6->enter($__internal_b18f99f330a924e03bca155e248f43b84e62dc3dcf64530eda017d0e851d1ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymplificaBundle:Index:ingresarPacienteHabitacion.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form", "id" => ((array_key_exists("id3", $context)) ? (_twig_default_filter((isset($context["id3"]) ? $context["id3"] : $this->getContext($context, "id3")), "form")) : ("form")))));
        echo "

";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form3"]) ? $context["form3"] : $this->getContext($context, "form3")), 'form_end');
        echo "

<h3>Ingresar Paciente en Habitacion</h3>
<hr>

<table>
    <tr>
        <td>
            <label for=\"nombre\">Habitación: </label>
        <td>
            ";
        // line 14
        echo "            <select class=\"form-control menu_clase_habitacion\" name=\"Habitacion\" width=\"100%\" id=\"id_habitacion\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["habitacion"]) ? $context["habitacion"] : $this->getContext($context, "habitacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["habitaciones"]) {
            // line 16
            echo "                    <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["habitaciones"], "id", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitaciones'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </select>
        </td>
    <tr>
        <td>
            <label for=\"nombre\">Paciente: </label>
        <td>
            ";
        // line 25
        echo "            <select class=\"form-control menu_clase_paciente\" name=\"Paciente\" width=\"100%\" id=\"id_paciente\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")));
        foreach ($context['_seq'] as $context["_key"] => $context["pacientes"]) {
            // line 27
            echo "                    <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacientes"], "id", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacientes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </select>
        </td>
    <tr>
        <td colspan=\"2\" align=\"right\">

            <a style=\"background-color: purple; border-color: purple;\" class=\"btn btn-sm btn-success batpf glyphicon glyphicon-plus agregarPacienteHabitacion\">

            </a>
        </td>
    </tr>
</table>

<h3>Historial de asignaciones</h3>
<hr>
<table border=\"2\" width=\"100%\" class=\"tablaHabitacionPaciente\">
    <tr>
        <td width=\"20%\"><b>ID</b>
        <td width=\"20%\"><b>HABITACION</b>
        <td width=\"20%\"><b>PACIENTE</b>
        </td>
    </tr>
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["habitacionPaciente"]) ? $context["habitacionPaciente"] : $this->getContext($context, "habitacionPaciente")));
        foreach ($context['_seq'] as $context["_key"] => $context["asignacion"]) {
            // line 51
            echo "        <tr data-id3 = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "id", array()), "html", null, true);
            echo "\">
            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "habitacion", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["asignacion"], "paciente", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asignacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    <tr>
</table>

<script>
    \$(\".agregarPacienteHabitacion\").click(function ()
    {
        var form = \$('#adicionar-paciente-habitacion');
        var url = form.attr('action');

        var idHabitacion = (document.getElementById('id_habitacion').value) * 1;
        var idPaciente = (document.getElementById('id_paciente').value) * 1;

        \$.post(url, {id_habitacion: idHabitacion,
            id_paciente: idPaciente
        }, function (data)
        {
            
            \$.post(\"refrescartablaHabitacion\", function (htmlExterno) {
                \$(\".tablaHabitacion\").html(htmlExterno);
            });
            
            if (data[0].habitacionPaciente_id == null)
            {
                alert(\"Esta habitacion no tiene más capacidad\");
            } else
            {
                \$(\".tablaHabitacionPaciente\").append('<tr>' +
                        '<td>' + data[0].habitacionPaciente_id + '</td>' +
                        '<td>' + data[0].habitacionPaciente_id_habitacion + '</td>' +
                        '<td>' + data[0].habitacionPaciente_id_paciente + '</td>' +
                        '</tr>');
            }
        }).fail(function () {
            alert('ERROR');

        });
    });

</script>";
        
        $__internal_b18f99f330a924e03bca155e248f43b84e62dc3dcf64530eda017d0e851d1ae6->leave($__internal_b18f99f330a924e03bca155e248f43b84e62dc3dcf64530eda017d0e851d1ae6_prof);

    }

    public function getTemplateName()
    {
        return "SymplificaBundle:Index:ingresarPacienteHabitacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  120 => 54,  116 => 53,  112 => 52,  107 => 51,  103 => 50,  80 => 29,  71 => 27,  67 => 26,  64 => 25,  56 => 18,  47 => 16,  43 => 15,  40 => 14,  27 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form3, { 'attr' : {'novalidate': 'novalidate', 'role' : 'form', 'id': id3|default('form')} }) }}

{{ form_end(form3) }}

<h3>Ingresar Paciente en Habitacion</h3>
<hr>

<table>
    <tr>
        <td>
            <label for=\"nombre\">Habitación: </label>
        <td>
            {#            <input type=\"text\" id=\"id_habitacion\" placeholder=\"Habitacion\" name=\"id_habitacion\" />#}
            <select class=\"form-control menu_clase_habitacion\" name=\"Habitacion\" width=\"100%\" id=\"id_habitacion\">
                {% for habitaciones in habitacion %}
                    <option>{{habitaciones.id}}</option>
                {% endfor %}
            </select>
        </td>
    <tr>
        <td>
            <label for=\"nombre\">Paciente: </label>
        <td>
            {#            <input type=\"text\" id=\"id_paciente\" placeholder=\"Paciente\" name=\"id_paciente\" />#}
            <select class=\"form-control menu_clase_paciente\" name=\"Paciente\" width=\"100%\" id=\"id_paciente\">
                {% for pacientes in paciente %}
                    <option>{{pacientes.id}}</option>
                {% endfor %}
            </select>
        </td>
    <tr>
        <td colspan=\"2\" align=\"right\">

            <a style=\"background-color: purple; border-color: purple;\" class=\"btn btn-sm btn-success batpf glyphicon glyphicon-plus agregarPacienteHabitacion\">

            </a>
        </td>
    </tr>
</table>

<h3>Historial de asignaciones</h3>
<hr>
<table border=\"2\" width=\"100%\" class=\"tablaHabitacionPaciente\">
    <tr>
        <td width=\"20%\"><b>ID</b>
        <td width=\"20%\"><b>HABITACION</b>
        <td width=\"20%\"><b>PACIENTE</b>
        </td>
    </tr>
    {% for asignacion in habitacionPaciente %}
        <tr data-id3 = \"{{ asignacion.id }}\">
            <td>{{asignacion.id}}</td>
            <td>{{asignacion.habitacion}}</td>
            <td>{{asignacion.paciente}}</td>
        </tr>
    {% endfor %}
    <tr>
</table>

<script>
    \$(\".agregarPacienteHabitacion\").click(function ()
    {
        var form = \$('#adicionar-paciente-habitacion');
        var url = form.attr('action');

        var idHabitacion = (document.getElementById('id_habitacion').value) * 1;
        var idPaciente = (document.getElementById('id_paciente').value) * 1;

        \$.post(url, {id_habitacion: idHabitacion,
            id_paciente: idPaciente
        }, function (data)
        {
            
            \$.post(\"refrescartablaHabitacion\", function (htmlExterno) {
                \$(\".tablaHabitacion\").html(htmlExterno);
            });
            
            if (data[0].habitacionPaciente_id == null)
            {
                alert(\"Esta habitacion no tiene más capacidad\");
            } else
            {
                \$(\".tablaHabitacionPaciente\").append('<tr>' +
                        '<td>' + data[0].habitacionPaciente_id + '</td>' +
                        '<td>' + data[0].habitacionPaciente_id_habitacion + '</td>' +
                        '<td>' + data[0].habitacionPaciente_id_paciente + '</td>' +
                        '</tr>');
            }
        }).fail(function () {
            alert('ERROR');

        });
    });

</script>", "SymplificaBundle:Index:ingresarPacienteHabitacion.html.twig", "/Users/martinandresgutierrezsalinas/symplifica/src/SymplificaBundle/Resources/views/Index/ingresarPacienteHabitacion.html.twig");
    }
}
