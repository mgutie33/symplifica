<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_36a40696d5f64e9098d1a55c01e6a509ee2b9698618c1358e4e634795cf128bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3676a6c0b39a36e17f0c3aff4679edfa4d8ef8dc7543d8e087b8c550fe1e84f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3676a6c0b39a36e17f0c3aff4679edfa4d8ef8dc7543d8e087b8c550fe1e84f5->enter($__internal_3676a6c0b39a36e17f0c3aff4679edfa4d8ef8dc7543d8e087b8c550fe1e84f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3676a6c0b39a36e17f0c3aff4679edfa4d8ef8dc7543d8e087b8c550fe1e84f5->leave($__internal_3676a6c0b39a36e17f0c3aff4679edfa4d8ef8dc7543d8e087b8c550fe1e84f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a261dcefd7e78b0527fc2f28ad5c3d851d29d36651fe13fb1b5ce58b0e8c6b6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a261dcefd7e78b0527fc2f28ad5c3d851d29d36651fe13fb1b5ce58b0e8c6b6b->enter($__internal_a261dcefd7e78b0527fc2f28ad5c3d851d29d36651fe13fb1b5ce58b0e8c6b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a261dcefd7e78b0527fc2f28ad5c3d851d29d36651fe13fb1b5ce58b0e8c6b6b->leave($__internal_a261dcefd7e78b0527fc2f28ad5c3d851d29d36651fe13fb1b5ce58b0e8c6b6b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b0c3f214292f821330457c39e5c7018a212d738b9c1f3ab9f32e84a6d1fa591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0c3f214292f821330457c39e5c7018a212d738b9c1f3ab9f32e84a6d1fa591->enter($__internal_2b0c3f214292f821330457c39e5c7018a212d738b9c1f3ab9f32e84a6d1fa591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b0c3f214292f821330457c39e5c7018a212d738b9c1f3ab9f32e84a6d1fa591->leave($__internal_2b0c3f214292f821330457c39e5c7018a212d738b9c1f3ab9f32e84a6d1fa591_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4442d0fe85fd4fd085135ef74fe3142796f5927c153ed1e2af21b2c21d15bd48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4442d0fe85fd4fd085135ef74fe3142796f5927c153ed1e2af21b2c21d15bd48->enter($__internal_4442d0fe85fd4fd085135ef74fe3142796f5927c153ed1e2af21b2c21d15bd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4442d0fe85fd4fd085135ef74fe3142796f5927c153ed1e2af21b2c21d15bd48->leave($__internal_4442d0fe85fd4fd085135ef74fe3142796f5927c153ed1e2af21b2c21d15bd48_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/martinandresgutierrezsalinas/symplifica/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
