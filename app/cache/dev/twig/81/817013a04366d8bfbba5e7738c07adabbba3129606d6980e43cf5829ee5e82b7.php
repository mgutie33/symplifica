<?php

/* SymplificaBundle:Default:index.html.twig */
class __TwigTemplate_e6dcba466c90c40357ad480bfb749bf01540af0542548aa35941307c9042bb84 extends Twig_Template
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
        $__internal_cb5bcf6cc9a8da04a9022b6478263fb5a5ef6afc03eb9ce483505cdca08095c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5bcf6cc9a8da04a9022b6478263fb5a5ef6afc03eb9ce483505cdca08095c9->enter($__internal_cb5bcf6cc9a8da04a9022b6478263fb5a5ef6afc03eb9ce483505cdca08095c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SymplificaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_cb5bcf6cc9a8da04a9022b6478263fb5a5ef6afc03eb9ce483505cdca08095c9->leave($__internal_cb5bcf6cc9a8da04a9022b6478263fb5a5ef6afc03eb9ce483505cdca08095c9_prof);

    }

    public function getTemplateName()
    {
        return "SymplificaBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "SymplificaBundle:Default:index.html.twig", "/Users/martinandresgutierrezsalinas/symplifica/src/SymplificaBundle/Resources/views/Default/index.html.twig");
    }
}
