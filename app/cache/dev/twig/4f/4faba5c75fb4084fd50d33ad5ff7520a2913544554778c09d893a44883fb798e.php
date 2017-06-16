<?php

/* SymplificaBundle:Index:ingresarPaciente.html.twig */
class __TwigTemplate_977f77b785e562b2c6fb5fdde69f5e3f2680c7048b07bf3097789d5df454b95d extends Twig_Template
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
        $__internal_05e2b3e0864dffe48b636d335c7e8cbf19e5e86004b9280c2a2e8e3a4e3d17ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e2b3e0864dffe48b636d335c7e8cbf19e5e86004b9280c2a2e8e3a4e3d17ef->enter($__internal_05e2b3e0864dffe48b636d335c7e8cbf19e5e86004b9280c2a2e8e3a4e3d17ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymplificaBundle:Index:ingresarPaciente.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form", "id" => ((array_key_exists("id2", $context)) ? (_twig_default_filter((isset($context["id2"]) ? $context["id2"] : $this->getContext($context, "id2")), "form")) : ("form")))));
        echo "

";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_end');
        echo "

<h3>Ingresar Paciente</h3>
<hr>
";
        // line 8
        echo "<table>
    <tr>
        <td>
            <label for=\"nombre\">Nombre: </label>
        <td>
            <input type=\"text\" id=\"nombre_paciente\" placeholder=\"Nombre\" name=\"nombre_paciente\" />
        </td>
    <tr>
        <td>
            <label for=\"nombre\">Cédula: </label>
        <td>
            <input type=\"text\" id=\"cedula_paciente\" placeholder=\"Cedula\" name=\"cedula_paciente\" />
        </td>
    <tr>
        <td>
            <label for=\"nombre\">Teléfono: </label>
        <td>
            <input type=\"text\" id=\"telefono_paciente\" placeholder=\"Telefono\" name=\"telefono_paciente\" />
        </td>
    <tr>
        <td colspan=\"2\" align=\"right\">
            ";
        // line 30
        echo "            <a style=\"background-color: purple; border-color: purple;\" class=\"btn btn-sm btn-success batpf glyphicon glyphicon-plus agregarPaciente\">
                ";
        // line 32
        echo "            </a>
        </td>
    </tr>
</table>
";
        // line 37
        echo "<h3>Listado de pacientes</h3>
<hr>
<table border=\"2\" width=\"100%\" class=\"tablaPaciente\">
    <tr>
        <td width=\"20%\"><b>ID</b>
        <td width=\"20%\"><b>NOMBRE</b>
        <td width=\"20%\"><b>CEDULA</b>
        <td width=\"20%\"><b>TELEFONO</b>
        <td width=\"20%\"><b>HABITACION</b>
        </td>
    </tr>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")));
        foreach ($context['_seq'] as $context["_key"] => $context["pacientes"]) {
            // line 49
            echo "        <tr data-id2 = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacientes"], "id", array()), "html", null, true);
            echo "\">
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacientes"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacientes"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacientes"], "cedula", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacientes"], "telefono", array()), "html", null, true);
            echo "</td>
            <td>PENDIENTE POR ASIGNAR</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacientes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    <tr>
</table>

<script>
    \$(\".agregarPaciente\").click(function ()
    {
        var form = \$('#adicionar-paciente');
        var url = form.attr('action');

        var nombrePaciente = document.getElementById('nombre_paciente').value;
        var cedulaPaciente = document.getElementById('cedula_paciente').value;
        var telefonoPaciente = document.getElementById('telefono_paciente').value;

        \$.post(url, {nombre_paciente: nombrePaciente,
            cedula_paciente: cedulaPaciente,
            telefono_paciente: telefonoPaciente
        }, function (data)
        {
";
        // line 82
        echo "  
            \$.post(\"refrescartablaPaciente\", function (htmlExterno) {
                \$(\".tablaPaciente\").html(htmlExterno);
            });
    
            \$(\".menu_clase_paciente\").append('<option>'+data[0].paciente_id+'</option>');
            
        }).fail(function () {
            alert('ERROR');

        });
    });
</script>


";
        
        $__internal_05e2b3e0864dffe48b636d335c7e8cbf19e5e86004b9280c2a2e8e3a4e3d17ef->leave($__internal_05e2b3e0864dffe48b636d335c7e8cbf19e5e86004b9280c2a2e8e3a4e3d17ef_prof);

    }

    public function getTemplateName()
    {
        return "SymplificaBundle:Index:ingresarPaciente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 82,  110 => 57,  100 => 53,  96 => 52,  92 => 51,  88 => 50,  83 => 49,  79 => 48,  66 => 37,  60 => 32,  57 => 30,  34 => 8,  27 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form2, { 'attr' : {'novalidate': 'novalidate', 'role' : 'form', 'id': id2|default('form')} }) }}

{{ form_end(form2) }}

<h3>Ingresar Paciente</h3>
<hr>
{#    <form action=\"{{path('index_procesarPaciente')}}\" method=\"post\">#}
<table>
    <tr>
        <td>
            <label for=\"nombre\">Nombre: </label>
        <td>
            <input type=\"text\" id=\"nombre_paciente\" placeholder=\"Nombre\" name=\"nombre_paciente\" />
        </td>
    <tr>
        <td>
            <label for=\"nombre\">Cédula: </label>
        <td>
            <input type=\"text\" id=\"cedula_paciente\" placeholder=\"Cedula\" name=\"cedula_paciente\" />
        </td>
    <tr>
        <td>
            <label for=\"nombre\">Teléfono: </label>
        <td>
            <input type=\"text\" id=\"telefono_paciente\" placeholder=\"Telefono\" name=\"telefono_paciente\" />
        </td>
    <tr>
        <td colspan=\"2\" align=\"right\">
            {#                        <input type=\"submit\" value=\"Agregar\" class=\"agregarPaciente\"/>#}
            <a style=\"background-color: purple; border-color: purple;\" class=\"btn btn-sm btn-success batpf glyphicon glyphicon-plus agregarPaciente\">
                {# ADICIONAR TIPO PRENDA BOTON CHULITO #}
            </a>
        </td>
    </tr>
</table>
{#    </form>#}
<h3>Listado de pacientes</h3>
<hr>
<table border=\"2\" width=\"100%\" class=\"tablaPaciente\">
    <tr>
        <td width=\"20%\"><b>ID</b>
        <td width=\"20%\"><b>NOMBRE</b>
        <td width=\"20%\"><b>CEDULA</b>
        <td width=\"20%\"><b>TELEFONO</b>
        <td width=\"20%\"><b>HABITACION</b>
        </td>
    </tr>
    {% for pacientes in paciente %}
        <tr data-id2 = \"{{ pacientes.id }}\">
            <td>{{pacientes.id}}</td>
            <td>{{pacientes.nombre}}</td>
            <td>{{pacientes.cedula}}</td>
            <td>{{pacientes.telefono}}</td>
            <td>PENDIENTE POR ASIGNAR</td>
        </tr>
    {% endfor %}
    <tr>
</table>

<script>
    \$(\".agregarPaciente\").click(function ()
    {
        var form = \$('#adicionar-paciente');
        var url = form.attr('action');

        var nombrePaciente = document.getElementById('nombre_paciente').value;
        var cedulaPaciente = document.getElementById('cedula_paciente').value;
        var telefonoPaciente = document.getElementById('telefono_paciente').value;

        \$.post(url, {nombre_paciente: nombrePaciente,
            cedula_paciente: cedulaPaciente,
            telefono_paciente: telefonoPaciente
        }, function (data)
        {
{#            \$(\".tablaPaciente\").append('<tr>' +
                    '<td>'+ data[0].paciente_id +'</td>' + 
                    '<td>'+ data[0].paciente_nombre +'</td>' + 
                    '<td>'+ data[0].paciente_cedula +'</td>' + 
                    '<td>'+ data[0].paciente_telefono +'</td>' + 
                    '<td>PENDIENTE POR ASIGNAR</td>' +
                    '</tr>');#}
  
            \$.post(\"refrescartablaPaciente\", function (htmlExterno) {
                \$(\".tablaPaciente\").html(htmlExterno);
            });
    
            \$(\".menu_clase_paciente\").append('<option>'+data[0].paciente_id+'</option>');
            
        }).fail(function () {
            alert('ERROR');

        });
    });
</script>


{#                        var varClothType_id = (data[0].clothType_id);#}
{#                        var varClothType_name = (data[0].clothType_name);#}", "SymplificaBundle:Index:ingresarPaciente.html.twig", "/Users/martinandresgutierrezsalinas/symplifica/src/SymplificaBundle/Resources/views/Index/ingresarPaciente.html.twig");
    }
}
