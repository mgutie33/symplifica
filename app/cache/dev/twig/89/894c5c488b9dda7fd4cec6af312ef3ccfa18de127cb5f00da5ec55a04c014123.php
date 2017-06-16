<?php

/* SymplificaBundle:Index:refrescartablaHabitacion.html.twig */
class __TwigTemplate_03f99da87bb1f03950628e4332df4f684508429164bf11497004b9820c7c7c74 extends Twig_Template
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
        $__internal_b8b7ee034a39df5eba2dd95d893f8275edec5ecc73ae36639bd8b3c63437797e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b7ee034a39df5eba2dd95d893f8275edec5ecc73ae36639bd8b3c63437797e->enter($__internal_b8b7ee034a39df5eba2dd95d893f8275edec5ecc73ae36639bd8b3c63437797e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymplificaBundle:Index:refrescartablaHabitacion.html.twig"));

        // line 1
        echo "<table border=\"2\" width=\"100%\" class=\"tablaHabitacion\">
    <tr>
        <td width=\"33%\"><b>ID</b>
        <td width=\"34%\"><b>NUMERO</b>
        <td width=\"33%\"><b>CAPACIDAD</b>
        </td>
    <tr>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["habitacion"]) ? $context["habitacion"] : $this->getContext($context, "habitacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["habitaciones"]) {
            // line 9
            echo "        <tr data-id1 = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["habitaciones"], "id", array()), "html", null, true);
            echo "\">
            <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["habitaciones"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["habitaciones"], "numero", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["habitaciones"], "capacidad", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitaciones'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</table>";
        
        $__internal_b8b7ee034a39df5eba2dd95d893f8275edec5ecc73ae36639bd8b3c63437797e->leave($__internal_b8b7ee034a39df5eba2dd95d893f8275edec5ecc73ae36639bd8b3c63437797e_prof);

    }

    public function getTemplateName()
    {
        return "SymplificaBundle:Index:refrescartablaHabitacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  48 => 12,  44 => 11,  40 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table border=\"2\" width=\"100%\" class=\"tablaHabitacion\">
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
</table>", "SymplificaBundle:Index:refrescartablaHabitacion.html.twig", "/Users/martinandresgutierrezsalinas/symplifica/src/SymplificaBundle/Resources/views/Index/refrescartablaHabitacion.html.twig");
    }
}
