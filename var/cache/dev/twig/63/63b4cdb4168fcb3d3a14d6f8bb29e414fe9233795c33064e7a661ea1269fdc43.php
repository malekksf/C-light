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

/* security/login.html.twig */
class __TwigTemplate_b4014cdeed0f9679657a68520f67601e8a7750bbb547d17560e136612174c8c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
\t<title>Login Page</title>
\t<!--Made with love by Mutiullah Samim -->

\t<!--Bootsrap 4 CDN-->
\t<link
\t\t\trel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

\t<!--Fontawesome CDN-->
\t<link
\t\t\trel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

\t<!--Custom styles-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/styles/login.css"), "html", null, true);
        echo "\">
</head>
<body>
<div class=\"container\">
\t<div class=\"d-flex justify-content-center h-100\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3>Sign In</h3>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form method=\"post\">
\t\t\t\t\t";
        // line 32
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 33, $this->source); })()), "messageKey", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 33, $this->source); })()), "messageData", [], "any", false, false, false, 33), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            echo "\t\t\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\t\t\tYou are logged in as ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "username", [], "any", false, false, false, 37), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"username\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\">

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-key\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"password\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\"
\t\t\t\t\t\t\t   value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Login\" class=\"btn float-right login_btn\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\tDon't have an account?<a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        echo "\">Sign Up</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 66,  123 => 57,  109 => 46,  101 => 40,  93 => 37,  90 => 36,  87 => 35,  81 => 33,  79 => 32,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
\t<title>Login Page</title>
\t<!--Made with love by Mutiullah Samim -->

\t<!--Bootsrap 4 CDN-->
\t<link
\t\t\trel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

\t<!--Fontawesome CDN-->
\t<link
\t\t\trel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

\t<!--Custom styles-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('/assets/styles/login.css') }}\">
</head>
<body>
<div class=\"container\">
\t<div class=\"d-flex justify-content-center h-100\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<h3>Sign In</h3>
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form method=\"post\">
\t\t\t\t\t{% if error %}
\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\t\t\tYou are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"username\" value=\"{{ last_username }}\">

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group form-group\">
\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-key\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"password\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\"
\t\t\t\t\t\t\t   value=\"{{ csrf_token('authenticate') }}\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Login\" class=\"btn float-right login_btn\">
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<div class=\"d-flex justify-content-center links\">
\t\t\t\t\tDon't have an account?<a href=\"{{path('app_signup')}}\">Sign Up</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</body>
</html>
", "security/login.html.twig", "/home/malek/projets-symfony/C-light/templates/security/login.html.twig");
    }
}
