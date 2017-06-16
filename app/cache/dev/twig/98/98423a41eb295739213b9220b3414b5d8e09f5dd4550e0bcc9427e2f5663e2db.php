<?php

/* SymplificaBundle:Index:refrescartablaPaciente.html.twig */
class __TwigTemplate_9e09f01dd73ad31df6817df4e1c5c7441fa9320203f239d832645f3ae1416740 extends Twig_Template
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
        $__internal_4c11846e944b82b4c949a7ff5eec83183dbf51d90d71cbf4a956f45aa92135d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c11846e944b82b4c949a7ff5eec83183dbf51d90d71cbf4a956f45aa92135d2->enter($__internal_4c11846e944b82b4c949a7ff5eec83183dbf51d90d71cbf4a956f45aa92135d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymplificaBundle:Index:refrescartablaPaciente.html.twig"));

        // line 1
        echo "<table border=\"2\" width=\"100%\" class=\"tablaPaciente\">
    <tr>
        <td width=\"20%\"><b>ID</b>
        <td width=\"20%\"><b>NOMBRE</b>
        <td width=\"20%\"><b>CEDULA</b>
        <td width=\"20%\"><b>TELEFONO</b>
        <td width=\"20%\"><b>HABITACION</b>
        </td>
    </tr>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paciente"]) ? $context["paciente"] : $this->getContext($context, "paciente")));
        foreach ($context['_seq'] as $context["_key"] => $context["pacientes"]) {
            // line 11
            echo "        <tr data-id2 = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacientes"], "id", array()), "html", null, true);
            echo "\">
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacientes"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacientes"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacientes"], "cedula", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["pacientes"], "telefono", array()), "html", null, true);
            echo "</td>
            <td>PENDIENTE POR ASIGNAR</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pacientes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    <tr>
</table>";
        
        $__internal_4c11846e944b82b4c949a7ff5eec83183dbf51d90d71cbf4a956f45aa92135d2->leave($__internal_4c11846e944b82b4c949a7ff5eec83183dbf51d90d71cbf4a956f45aa92135d2_prof);

    }

    public function getTemplateName()
    {
        return "SymplificaBundle:Index:refrescartablaPaciente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  37 => 11,  33 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table border=\"2\" width=\"100%\" class=\"tablaPaciente\">
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
</table>", "SymplificaBundle:Index:refrescartablaPaciente.html.twig", "/Users/martinandresgutierrezsalinas/symplifica/src/SymplificaBundle/Resources/views/Index/refrescartablaPaciente.html.twig");
    }
}
