<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_b53b736bad85ef1752f016a94dce8735db95d534f061dc7452aa15c6e8caa875 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'slides' => [$this, 'block_slides'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title></title>
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Varela+Round\">
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
\t\t<link
\t\trel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

\t\t<!--Custom styles-->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/styles/navbar.css"), "html", null, true);
        echo "\">
\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/scripts/navbar.js"), "html", null, true);
        echo "\"></script>
\t</head>

\t<body>
\t\t";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "\t</body>
</html>
";
        // line 86
        $this->displayBlock('slides', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "\t\t\t<nav
\t\t\t\tclass=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t\t\t\t";
        // line 26
        echo "\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/lamp.png"), "html", null, true);
        echo "\" alt=\"logo\">
\t\t\t\t</div>
\t\t\t\t<button
\t\t\t\t\ttype=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
\t\t\t\t\t";
        // line 32
        echo "\t\t\t\t\t<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/images/menu.svg"), "html", null, true);
        echo "\" alt=\"logo\"></button>
\t\t\t\t<!-- Collection of nav links, forms, and other content for toggling -->
\t\t\t\t<div id=\"navbarCollapse\" class=\"collapse navbar-collapse justify-content-start\">
\t\t\t\t\t<div class=\"navbar-nav\">
\t\t\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\" class=\"nav-item nav-link\">Home</a>
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class=\"nav-item nav-link dropdown-toggle\">Categories</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Web Development</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">DevOps</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">IOT</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Data Science</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Security</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"nav-item nav-link active\">About</a>
\t\t\t\t\t\t";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48)) {
            // line 49
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"nav-item nav-link\">Logout
\t\t\t\t\t\t\t\t<b>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "username", [], "any", false, false, false, 50), "html", null, true);
            echo "</b>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-item nav-link\">Login</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
            echo "\" class=\"nav-item nav-link\">Signup</a>
\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t<div class=\"nav-item dropdown search-dropdown\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"nav-item nav-link dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"nav-item nav-link dropdown-toggle d-none\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group search-box\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here...\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slides"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slides"));

        
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
        return array (  197 => 86,  160 => 56,  155 => 54,  150 => 53,  144 => 50,  139 => 49,  137 => 48,  122 => 36,  114 => 32,  107 => 27,  104 => 26,  100 => 23,  90 => 22,  80 => 86,  76 => 84,  74 => 22,  67 => 18,  60 => 14,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<title></title>
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Varela+Round\">
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
\t\t<link
\t\trel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">

\t\t<!--Custom styles-->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('/assets/styles/navbar.css') }}\">
\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"{{ asset ('assets/scripts/navbar.js')}}\"></script>
\t</head>

\t<body>
\t\t{% block body %}
\t\t\t<nav
\t\t\t\tclass=\"navbar navbar-expand-lg navbar-dark bg-dark\">
\t\t\t\t{# <i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"></i> #}
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<img src=\"{{ asset ('/assets/images/lamp.png') }}\" alt=\"logo\">
\t\t\t\t</div>
\t\t\t\t<button
\t\t\t\t\ttype=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
\t\t\t\t\t{# <span class=\"navbar-toggler-icon\"></span> #}
\t\t\t\t\t<img src=\"{{ asset ('/assets/images/menu.svg') }}\" alt=\"logo\"></button>
\t\t\t\t<!-- Collection of nav links, forms, and other content for toggling -->
\t\t\t\t<div id=\"navbarCollapse\" class=\"collapse navbar-collapse justify-content-start\">
\t\t\t\t\t<div class=\"navbar-nav\">
\t\t\t\t\t\t<a href=\"{{path('default')}}\" class=\"nav-item nav-link\">Home</a>
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class=\"nav-item nav-link dropdown-toggle\">Categories</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Web Development</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">DevOps</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">IOT</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Data Science</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Security</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"#\" class=\"nav-item nav-link active\">About</a>
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\" class=\"nav-item nav-link\">Logout
\t\t\t\t\t\t\t\t<b>{{ app.user.username }}</b>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\" class=\"nav-item nav-link\">Login</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_signup') }}\" class=\"nav-item nav-link\">Signup</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t<div class=\"nav-item dropdown search-dropdown\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"nav-item nav-link dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"nav-item nav-link dropdown-toggle d-none\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group search-box\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here...\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t{% endblock %}
\t</body>
</html>
{% block slides %}{% endblock %}
", "base.html.twig", "/home/malek/projets-symfony/C-light/templates/base.html.twig");
    }
}
