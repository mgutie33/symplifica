<?php

/* SymplificaBundle:Index:menuPrincipal.html.twig */
class __TwigTemplate_61d1bb293e3fff31268079ac6ae5f5a8b9fb4d17f4551b021cff6ce5fc00b50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "SymplificaBundle:Index:menuPrincipal.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92cf1eacd04d29e136d2fb319065e774c06705aef0ed0c0922079904e7e40481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cf1eacd04d29e136d2fb319065e774c06705aef0ed0c0922079904e7e40481->enter($__internal_92cf1eacd04d29e136d2fb319065e774c06705aef0ed0c0922079904e7e40481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymplificaBundle:Index:menuPrincipal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92cf1eacd04d29e136d2fb319065e774c06705aef0ed0c0922079904e7e40481->leave($__internal_92cf1eacd04d29e136d2fb319065e774c06705aef0ed0c0922079904e7e40481_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ee6e4908d1f215a2ae12579c17a03f6841d4e8546a471db8e461d17b1173f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee6e4908d1f215a2ae12579c17a03f6841d4e8546a471db8e461d17b1173f07->enter($__internal_3ee6e4908d1f215a2ae12579c17a03f6841d4e8546a471db8e461d17b1173f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <table border=\"2\" width=\"100%\">
        <tr>
            <td width=\"35%\">
                ";
        // line 7
        echo twig_include($this->env, $context, "SymplificaBundle:Index:ingresarHabitacion.html.twig", array("form1" =>         // line 8
(isset($context["add_habitacion_form_ajax"]) ? $context["add_habitacion_form_ajax"] : $this->getContext($context, "add_habitacion_form_ajax")), "id1" => "adicionar-habitacion"));
        // line 10
        echo "
            <td width=\"35%\">
                ";
        // line 12
        echo twig_include($this->env, $context, "SymplificaBundle:Index:ingresarPaciente.html.twig", array("form2" =>         // line 13
(isset($context["add_paciente_form_ajax"]) ? $context["add_paciente_form_ajax"] : $this->getContext($context, "add_paciente_form_ajax")), "id2" => "adicionar-paciente"));
        // line 15
        echo "
            <td width=\"30%\">
                ";
        // line 17
        echo twig_include($this->env, $context, "SymplificaBundle:Index:ingresarPacienteHabitacion.html.twig", array("form3" =>         // line 18
(isset($context["add_paciente_habitacion_form_ajax"]) ? $context["add_paciente_habitacion_form_ajax"] : $this->getContext($context, "add_paciente_habitacion_form_ajax")), "id3" => "adicionar-paciente-habitacion"));
        // line 20
        echo "
            </td>
        </tr>
    </table>
";
        
        $__internal_3ee6e4908d1f215a2ae12579c17a03f6841d4e8546a471db8e461d17b1173f07->leave($__internal_3ee6e4908d1f215a2ae12579c17a03f6841d4e8546a471db8e461d17b1173f07_prof);

    }

    public function getTemplateName()
    {
        return "SymplificaBundle:Index:menuPrincipal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  63 => 18,  62 => 17,  58 => 15,  56 => 13,  55 => 12,  51 => 10,  49 => 8,  48 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}
{% block body %}
    {{ parent() }}
    <table border=\"2\" width=\"100%\">
        <tr>
            <td width=\"35%\">
                {{ include('SymplificaBundle:Index:ingresarHabitacion.html.twig', { 
                    form1: add_habitacion_form_ajax,
                    id1: 'adicionar-habitacion'
                }) }}
            <td width=\"35%\">
                {{ include('SymplificaBundle:Index:ingresarPaciente.html.twig', { 
                    form2: add_paciente_form_ajax,
                    id2: 'adicionar-paciente'
                }) }}
            <td width=\"30%\">
                {{ include('SymplificaBundle:Index:ingresarPacienteHabitacion.html.twig', { 
                    form3: add_paciente_habitacion_form_ajax,
                    id3: 'adicionar-paciente-habitacion'
                }) }}
            </td>
        </tr>
    </table>
{% endblock %}

", "SymplificaBundle:Index:menuPrincipal.html.twig", "/Users/martinandresgutierrezsalinas/symplifica/src/SymplificaBundle/Resources/views/Index/menuPrincipal.html.twig");
    }
}
