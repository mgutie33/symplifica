<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a2ec6d84468c97e78b6c5a3838dcbb8296ac3c171c623c77ace2d97e84db5054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa1c7ac747a47478a76c99b3124d857ae5c63de6c1d2bf04c9fc4bf69bb2770a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1c7ac747a47478a76c99b3124d857ae5c63de6c1d2bf04c9fc4bf69bb2770a->enter($__internal_aa1c7ac747a47478a76c99b3124d857ae5c63de6c1d2bf04c9fc4bf69bb2770a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa1c7ac747a47478a76c99b3124d857ae5c63de6c1d2bf04c9fc4bf69bb2770a->leave($__internal_aa1c7ac747a47478a76c99b3124d857ae5c63de6c1d2bf04c9fc4bf69bb2770a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b920f1df0c29ab022bb9aec6b8af3a8c6d68873c56790726aec7da9d568f6547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b920f1df0c29ab022bb9aec6b8af3a8c6d68873c56790726aec7da9d568f6547->enter($__internal_b920f1df0c29ab022bb9aec6b8af3a8c6d68873c56790726aec7da9d568f6547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b920f1df0c29ab022bb9aec6b8af3a8c6d68873c56790726aec7da9d568f6547->leave($__internal_b920f1df0c29ab022bb9aec6b8af3a8c6d68873c56790726aec7da9d568f6547_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2e376f6124f0262cfc6a4e53268f46dc3241730f60f89e7cf4478a67767017f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e376f6124f0262cfc6a4e53268f46dc3241730f60f89e7cf4478a67767017f->enter($__internal_f2e376f6124f0262cfc6a4e53268f46dc3241730f60f89e7cf4478a67767017f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f2e376f6124f0262cfc6a4e53268f46dc3241730f60f89e7cf4478a67767017f->leave($__internal_f2e376f6124f0262cfc6a4e53268f46dc3241730f60f89e7cf4478a67767017f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_130c991066acb863a57d82924c0d8796e12f1bca31da0c683985072196c69a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130c991066acb863a57d82924c0d8796e12f1bca31da0c683985072196c69a56->enter($__internal_130c991066acb863a57d82924c0d8796e12f1bca31da0c683985072196c69a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_130c991066acb863a57d82924c0d8796e12f1bca31da0c683985072196c69a56->leave($__internal_130c991066acb863a57d82924c0d8796e12f1bca31da0c683985072196c69a56_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/martinandresgutierrezsalinas/symplifica/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
