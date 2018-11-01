<?php

/* base.html.twig */
class __TwigTemplate_295e440349952fe148c35fffa57140bad91e0f0a1b9944bff936a182934bfa61 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new Twig_Error_Runtime('Variable "lang" does not exist.', 2, $this->source); })()), "html", null, true);
        echo ">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        echo "        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons|Raleway\" rel=\"stylesheet\">
        <link href=\"/assets/bootstrap/global/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"/assets/bootstrap/global/plugins/simple-line-icons/simple-line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\">
        ";
        // line 13
        echo "        <link href=\"/assets/bootstrap/global/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"/assets/bootstrap/layouts/layout/css/layout.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"/assets/bootstrap/layouts/layout/css/layout.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"/assets/bootstrap/layouts/layout/css/themes/darkblue.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\">
        <link href=\"/assets/bootstrap/layouts/layout/css/custom.min.css\" rel=\"stylesheet\" type=\"text/css\">

        ";
        // line 20
        echo "        ";
        if (((isset($context["styles"]) || array_key_exists("styles", $context)) &&  !twig_test_empty((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new Twig_Error_Runtime('Variable "styles" does not exist.', 20, $this->source); })())))) {
            // line 21
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new Twig_Error_Runtime('Variable "styles" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
                // line 22
                echo "                <link rel=\"stylesheet\" href=\"/assets/css/";
                echo twig_escape_filter($this->env, $context["style"], "html", null, true);
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        // line 25
        echo "        
        

    </head>
    <body class=\"page-header-fixed page-sidebar-closed-hide-logo page-sidebar-mobile-offcanvas page-md\">
        ";
        // line 30
        $this->loadTemplate("shell/head.html.twig", "base.html.twig", 30)->display($context);
        // line 31
        echo "        <div class=\"page-container\">
            ";
        // line 32
        $this->loadTemplate("shell/sidebar.html.twig", "base.html.twig", 32)->display($context);
        // line 33
        echo "            <div class=\"page-content-wrapper\">
                <div class=\"page-content\">
                    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "                </div>
            </div>
        </div>
    </body>
    <footer>

    ";
        // line 43
        echo "    <script src=\"/assets/bootstrap/global/plugins/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/global/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/global/plugins/js.cookie.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/global/scripts/app.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/layouts/layout/scripts/layout.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/layouts/global/scripts/quick-sidebar.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/layouts/global/scripts/quick-nav.min.js\" type=\"text/javascript\"></script>
    ";
        // line 51
        echo "    ";
        if (((isset($context["scripts"]) || array_key_exists("scripts", $context)) &&  !twig_test_empty((isset($context["scripts"]) || array_key_exists("scripts", $context) ? $context["scripts"] : (function () { throw new Twig_Error_Runtime('Variable "scripts" does not exist.', 51, $this->source); })())))) {
            // line 52
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) || array_key_exists("scripts", $context) ? $context["scripts"] : (function () { throw new Twig_Error_Runtime('Variable "scripts" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 53
                echo "            <script src=\"/assets/js/";
                echo twig_escape_filter($this->env, $context["script"], "html", null, true);
                echo "\"></script>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "    ";
        }
        // line 56
        echo "    </footer>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 35,  148 => 7,  136 => 56,  133 => 55,  124 => 53,  119 => 52,  116 => 51,  107 => 43,  99 => 36,  97 => 35,  93 => 33,  91 => 32,  88 => 31,  86 => 30,  79 => 25,  76 => 24,  67 => 22,  62 => 21,  59 => 20,  51 => 13,  46 => 9,  42 => 7,  34 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang={{lang}}>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {# fuentes #}
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons|Raleway\" rel=\"stylesheet\">
        <link href=\"/assets/bootstrap/global/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"/assets/bootstrap/global/plugins/simple-line-icons/simple-line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\">
        {# estilos de bootstrap #}
        <link href=\"/assets/bootstrap/global/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"/assets/bootstrap/layouts/layout/css/layout.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"/assets/bootstrap/layouts/layout/css/layout.min.css\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"/assets/bootstrap/layouts/layout/css/themes/darkblue.min.css\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\">
        <link href=\"/assets/bootstrap/layouts/layout/css/custom.min.css\" rel=\"stylesheet\" type=\"text/css\">

        {# custom styles #}
        {% if styles is defined and styles is not empty %}
            {% for style in styles %}
                <link rel=\"stylesheet\" href=\"/assets/css/{{style}}\" />
            {% endfor %}
        {% endif %}
        
        

    </head>
    <body class=\"page-header-fixed page-sidebar-closed-hide-logo page-sidebar-mobile-offcanvas page-md\">
        {% include 'shell/head.html.twig' %}
        <div class=\"page-container\">
            {% include 'shell/sidebar.html.twig' %}
            <div class=\"page-content-wrapper\">
                <div class=\"page-content\">
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>
    </body>
    <footer>

    {# js de bootstrap #}
    <script src=\"/assets/bootstrap/global/plugins/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/global/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/global/plugins/js.cookie.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/global/scripts/app.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/layouts/layout/scripts/layout.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/layouts/global/scripts/quick-sidebar.min.js\" type=\"text/javascript\"></script>
    <script src=\"/assets/bootstrap/layouts/global/scripts/quick-nav.min.js\" type=\"text/javascript\"></script>
    {# custom js #}
    {% if scripts is defined and scripts is not empty %}
        {% for script in scripts %}
            <script src=\"/assets/js/{{script}}\"></script>
        {% endfor %}
    {% endif %}
    </footer>
</html>
", "base.html.twig", "/home/alejandro/Trabajo/shops-admin/templates/base.html.twig");
    }
}
