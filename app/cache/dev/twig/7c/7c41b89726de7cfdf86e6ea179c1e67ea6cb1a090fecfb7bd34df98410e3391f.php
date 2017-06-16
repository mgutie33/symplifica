<?php

/* layout.html.twig */
class __TwigTemplate_172f6518e02d24645beca0614a2f313ae5ad823d07939e3486e7ee8e2e49d086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c773179b53a1966154d0b02a3e72365c3bc23f559dd511b589e7af5fdad62aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c773179b53a1966154d0b02a3e72365c3bc23f559dd511b589e7af5fdad62aa->enter($__internal_9c773179b53a1966154d0b02a3e72365c3bc23f559dd511b589e7af5fdad62aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "    </body>
</html>";
        
        $__internal_9c773179b53a1966154d0b02a3e72365c3bc23f559dd511b589e7af5fdad62aa->leave($__internal_9c773179b53a1966154d0b02a3e72365c3bc23f559dd511b589e7af5fdad62aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dc667d08f30b94b160f71931f58ef0a26fcdfd206567c7de8bade56add41d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc667d08f30b94b160f71931f58ef0a26fcdfd206567c7de8bade56add41d74->enter($__internal_5dc667d08f30b94b160f71931f58ef0a26fcdfd206567c7de8bade56add41d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignación de tareas";
        
        $__internal_5dc667d08f30b94b160f71931f58ef0a26fcdfd206567c7de8bade56add41d74->leave($__internal_5dc667d08f30b94b160f71931f58ef0a26fcdfd206567c7de8bade56add41d74_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77d6d0888b6b2b4303eb75484502e9b4c8aceb608bb826835e42949012be67be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d6d0888b6b2b4303eb75484502e9b4c8aceb608bb826835e42949012be67be->enter($__internal_77d6d0888b6b2b4303eb75484502e9b4c8aceb608bb826835e42949012be67be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            
            <!-- Bootstrap Core CSS -->
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- MetisMenu CSS -->
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/vendor/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Custom CSS -->
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Custom Fonts -->
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            
            <!-- Librerias adicionales de la plantilla que inicialmente se implementó-->
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">            
            
        ";
        
        $__internal_77d6d0888b6b2b4303eb75484502e9b4c8aceb608bb826835e42949012be67be->leave($__internal_77d6d0888b6b2b4303eb75484502e9b4c8aceb608bb826835e42949012be67be_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e5a4f1e32dffbaa1d5cd7a6b400f0d403f13817f62b15a8272701e2c49c1779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5a4f1e32dffbaa1d5cd7a6b400f0d403f13817f62b15a8272701e2c49c1779->enter($__internal_2e5a4f1e32dffbaa1d5cd7a6b400f0d403f13817f62b15a8272701e2c49c1779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "
            <!-- jQuery -->
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/vendor/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Custom Theme JavaScript -->
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

            <!-- Librerías adicionales de la plantilla que incialmente se implementó -->
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/ui/1.12.1/jquery-ui.js"), "html", null, true);
        echo "\"></script>            
            
        ";
        
        $__internal_2e5a4f1e32dffbaa1d5cd7a6b400f0d403f13817f62b15a8272701e2c49c1779->leave($__internal_2e5a4f1e32dffbaa1d5cd7a6b400f0d403f13817f62b15a8272701e2c49c1779_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_ffaa4b8b93a571996584a155653d580a194c2bc2e999a3a6aecec6df7763e79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffaa4b8b93a571996584a155653d580a194c2bc2e999a3a6aecec6df7763e79f->enter($__internal_ffaa4b8b93a571996584a155653d580a194c2bc2e999a3a6aecec6df7763e79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 51
            echo "                ";
            echo twig_include($this->env, $context, "menu.html.twig");
            echo "
            ";
        }
        // line 53
        echo "        ";
        
        $__internal_ffaa4b8b93a571996584a155653d580a194c2bc2e999a3a6aecec6df7763e79f->leave($__internal_ffaa4b8b93a571996584a155653d580a194c2bc2e999a3a6aecec6df7763e79f_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 53,  167 => 51,  164 => 50,  158 => 49,  148 => 46,  142 => 43,  136 => 40,  130 => 37,  124 => 34,  120 => 32,  114 => 29,  104 => 23,  98 => 20,  92 => 17,  86 => 14,  80 => 11,  76 => 9,  70 => 6,  58 => 5,  50 => 54,  47 => 49,  45 => 29,  38 => 26,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Asignación de tareas{% endblock %}</title>
        {% block stylesheets %}
{#            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.min.css') }}\"/>
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/style.css') }}\"/>#}
            
            <!-- Bootstrap Core CSS -->
            <link href=\"{{ asset('public/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

            <!-- MetisMenu CSS -->
            <link href=\"{{ asset('public/vendor/metisMenu/metisMenu.min.css') }}\" rel=\"stylesheet\">

            <!-- Custom CSS -->
            <link href=\"{{ asset('public/dist/css/sb-admin-2.css') }}\" rel=\"stylesheet\">

            <!-- Custom Fonts -->
            <link href=\"{{ asset('public/vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
            
            <!-- Librerias adicionales de la plantilla que inicialmente se implementó-->
            <link href=\"{{ asset('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') }}\" rel=\"stylesheet\">            
            
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block javascripts %}
{#            <script src=\"{{ asset('public/js/jquery-3.2.0.min.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootstrap.min.js') }}\"></script>#}

            <!-- jQuery -->
            <script src=\"{{ asset('public/vendor/jquery/jquery.min.js') }}\"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src=\"{{ asset('public/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src=\"{{ asset('public/vendor/metisMenu/metisMenu.min.js') }}\"></script>

            <!-- Custom Theme JavaScript -->
            <script src=\"{{ asset('public/dist/js/sb-admin-2.js') }}\"></script>

            <!-- Librerías adicionales de la plantilla que incialmente se implementó -->
            <script src=\"{{ asset('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}\"></script>            
            
        {% endblock %}
        {% block body %}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {{ include('menu.html.twig') }}
            {% endif %}
        {% endblock %}
    </body>
</html>", "layout.html.twig", "/Users/martinandresgutierrezsalinas/symplifica/app/Resources/views/layout.html.twig");
    }
}
