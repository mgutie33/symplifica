<?php

/* SymplificaBundle:Index:ingresarHabitacion.html.twig */
class __TwigTemplate_6b1160500c4bce1f7d5756d1a6bf9ccd2d4d3d6e8f5bed668f0518a1c9d78c07 extends Twig_Template
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
        $__internal_b62dbf4b4c0b9be3e59ebbfb9d0c1577de9b87cab9ac08276211f49abe544cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62dbf4b4c0b9be3e59ebbfb9d0c1577de9b87cab9ac08276211f49abe544cca->enter($__internal_b62dbf4b4c0b9be3e59ebbfb9d0c1577de9b87cab9ac08276211f49abe544cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymplificaBundle:Index:ingresarHabitacion.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form", "id" => ((array_key_exists("id1", $context)) ? (_twig_default_filter((isset($context["id1"]) ? $context["id1"] : $this->getContext($context, "id1")), "form")) : ("form")))));
        echo "

";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form1"]) ? $context["form1"] : $this->getContext($context, "form1")), 'form_end');
        echo "

<h3>Ingresar Habitacion</h3>
<hr>
";
        // line 8
        echo "<table>
    <tr>
        <td>
            <label for=\"nombre\">Número: </label>
        <td>
            <input type=\"text\" id=\"numero_habitacion\" placeholder=\"Numero\" name=\"numero_habitacion\"/>
        </td>
    <tr>
        <td>
            <label for=\"nombre\">Capacidad: </label>
        <td>
            <input type=\"text\" id=\"capacidad_habitacion\" placeholder=\"Capacidad\" name=\"capacidad_habitacion\"/>
        </td>
    <tr>
        <td colspan=\"2\" align=\"right\">
            ";
        // line 24
        echo "
            <a style=\"background-color: purple; border-color: purple;\" class=\"btn btn-sm btn-success batpf glyphicon glyphicon-plus agregarHabitacion\">
                ";
        // line 27
        echo "            </a>            
        </td>
    </tr>
</table>
";
        // line 32
        echo "<h3>Listado de habitaciones</h3>
<hr>
<table border=\"2\" width=\"100%\" class=\"tablaHabitacion\">
    <tr>
        <td width=\"33%\"><b>ID</b>
        <td width=\"34%\"><b>NUMERO</b>
        <td width=\"33%\"><b>CAPACIDAD</b>
        </td>
    <tr>
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["habitacion"]) ? $context["habitacion"] : $this->getContext($context, "habitacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["habitaciones"]) {
            // line 42
            echo "        <tr data-id1 = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["habitaciones"], "id", array()), "html", null, true);
            echo "\">
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["habitaciones"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["habitaciones"], "numero", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["habitaciones"], "capacidad", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitaciones'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</table>

<script>
    \$(\".agregarHabitacion\").click(function ()
    {
        var form = \$('#adicionar-habitacion');
        var url = form.attr('action');
";
        // line 56
        echo "
";
        // line 58
        echo "        var numeroHabitacion = document.getElementById('numero_habitacion').value;
        var capacidadHabitacion = document.getElementById('capacidad_habitacion').value;

        \$.post(url, {numero_habitacion: numeroHabitacion, 
                     capacidad_habitacion: capacidadHabitacion}, function (data)
        {
";
        // line 69
        echo "  
            \$.post(\"refrescartablaHabitacion\", function (htmlExterno) {
                \$(\".tablaHabitacion\").html(htmlExterno);
            });
    
    
               ";
        // line 78
        echo "    
            \$(\".menu_clase_habitacion\").append('<option>'+data[0].habitacion_id+'</option>');
            
            }).fail(function () {
                alert('ERROR');
";
        // line 84
        echo "            });
    });
</script>





";
        
        $__internal_b62dbf4b4c0b9be3e59ebbfb9d0c1577de9b87cab9ac08276211f49abe544cca->leave($__internal_b62dbf4b4c0b9be3e59ebbfb9d0c1577de9b87cab9ac08276211f49abe544cca_prof);

    }

    public function getTemplateName()
    {
        return "SymplificaBundle:Index:ingresarHabitacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 84,  126 => 78,  118 => 69,  110 => 58,  107 => 56,  98 => 48,  89 => 45,  85 => 44,  81 => 43,  76 => 42,  72 => 41,  61 => 32,  55 => 27,  51 => 24,  34 => 8,  27 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form1, { 'attr' : {'novalidate': 'novalidate', 'role' : 'form', 'id': id1|default('form')} }) }}

{{ form_end(form1) }}

<h3>Ingresar Habitacion</h3>
<hr>
{#<form action=\"{{path('index_procesarHabitacion')}}\" method=\"post\">#}
<table>
    <tr>
        <td>
            <label for=\"nombre\">Número: </label>
        <td>
            <input type=\"text\" id=\"numero_habitacion\" placeholder=\"Numero\" name=\"numero_habitacion\"/>
        </td>
    <tr>
        <td>
            <label for=\"nombre\">Capacidad: </label>
        <td>
            <input type=\"text\" id=\"capacidad_habitacion\" placeholder=\"Capacidad\" name=\"capacidad_habitacion\"/>
        </td>
    <tr>
        <td colspan=\"2\" align=\"right\">
            {#                <input type=\"submit\" value=\"Agregar\" class=\"agregarHabitacion\"/>#}

            <a style=\"background-color: purple; border-color: purple;\" class=\"btn btn-sm btn-success batpf glyphicon glyphicon-plus agregarHabitacion\">
                {# ADICIONAR TIPO PRENDA BOTON CHULITO #}
            </a>            
        </td>
    </tr>
</table>
{#</form>#}
<h3>Listado de habitaciones</h3>
<hr>
<table border=\"2\" width=\"100%\" class=\"tablaHabitacion\">
    <tr>
        <td width=\"33%\"><b>ID</b>
        <td width=\"34%\"><b>NUMERO</b>
        <td width=\"33%\"><b>CAPACIDAD</b>
        </td>
    <tr>
    {% for habitaciones in habitacion %}
        <tr data-id1 = \"{{ habitaciones.id }}\">
            <td>{{habitaciones.id}}</td>
            <td>{{habitaciones.numero}}</td>
            <td>{{habitaciones.capacidad}}</td>
        </tr>
    {% endfor %}
</table>

<script>
    \$(\".agregarHabitacion\").click(function ()
    {
        var form = \$('#adicionar-habitacion');
        var url = form.attr('action');
{#        var tipoPrenda = \$(this).parents('table');#}

{#        var IdTipoPrenda = tipoPrenda.data('id56');#}
        var numeroHabitacion = document.getElementById('numero_habitacion').value;
        var capacidadHabitacion = document.getElementById('capacidad_habitacion').value;

        \$.post(url, {numero_habitacion: numeroHabitacion, 
                     capacidad_habitacion: capacidadHabitacion}, function (data)
        {
{#            \$(\".tablaHabitacion\").append('<tr>' +
                    '<td>'+ data[0].habitacion_id +'</td>' + 
                    '<td>'+ data[0].habitacion_numero +'</td>' + 
                    '<td>'+ data[0].habitacion_capacidad +'</td>' +
                    '</tr>');#}
  
            \$.post(\"refrescartablaHabitacion\", function (htmlExterno) {
                \$(\".tablaHabitacion\").html(htmlExterno);
            });
    
    
               {# \$.post(\"refrescarTableTipoPrenda\", function (htmlExterno) {
                \$(\".div-tipo-prenda-neon\").html(htmlExterno);
            });#}
    
            \$(\".menu_clase_habitacion\").append('<option>'+data[0].habitacion_id+'</option>');
            
            }).fail(function () {
                alert('ERROR');
{#                row.show();#}
            });
    });
</script>





", "SymplificaBundle:Index:ingresarHabitacion.html.twig", "/Users/martinandresgutierrezsalinas/symplifica/src/SymplificaBundle/Resources/views/Index/ingresarHabitacion.html.twig");
    }
}
