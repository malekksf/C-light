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

/* security/signup.html.twig */
class __TwigTemplate_3dea815e9c741d612c15e2e8f138d5160fe5033fe3de8c721d95b4db4a531ad9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/signup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/signup.html.twig"));

        // line 1
        echo "<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link
            rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"
            integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

    <!--Fontawesome CDN-->
    <link
            rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\"
            integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    <!--Custom styles-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/styles/login.css"), "html", null, true);
        echo "\">
</head>
<body>
<div class=\"container\">
    <div class=\"d-flex justify-content-center h-100\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h3>Sign Up</h3>
            </div>
            <div class=\"card-body\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 34
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), 'form_start');
        echo "
                <div class=\"input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">
                            <i class=\"fas fa-user\"></i>
                        </span>
                    </div>
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "firstName", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Firstname"]]);
        echo "
                </div>

                <div class=\"input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">
                            <i class=\"fas fa-user\"></i>
                        </span>
                    </div>
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "lastName", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Lastname"]]);
        echo "
                </div>

                <div class=\"input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">
                            <i class=\"fas fa-envelope\"></i>
                        </span>
                    </div>
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e-mail"]]);
        echo "
                </div>

                <div class=\"input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">
                            <i class=\"fas fa-key\"></i>
                        </span>
                    </div>
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "plainPassword", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        echo "
                </div>

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn float-right login_btn\">Register</button>
                </div>

                ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"card-footer\">
                <div class=\"d-flex justify-content-center links\">
                    Already have an account?<a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Sign in</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 81,  150 => 77,  140 => 70,  128 => 61,  116 => 52,  104 => 43,  93 => 36,  84 => 34,  80 => 33,  67 => 23,  43 => 1,);
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
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link
            rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"
            integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

    <!--Fontawesome CDN-->
    <link
            rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\"
            integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    <!--Custom styles-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('/assets/styles/login.css') }}\">
</head>
<body>
<div class=\"container\">
    <div class=\"d-flex justify-content-center h-100\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h3>Sign Up</h3>
            </div>
            <div class=\"card-body\">
                {% for flashError in app.flashes('verify_email_error') %}
                    <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
                {% endfor %}
                {{ form_start(registrationForm) }}
                <div class=\"input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">
                            <i class=\"fas fa-user\"></i>
                        </span>
                    </div>
                    {{ form_widget(registrationForm.firstName, { 'attr': {'class': 'form-control', 'placeholder': 'Firstname'} }) }}
                </div>

                <div class=\"input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">
                            <i class=\"fas fa-user\"></i>
                        </span>
                    </div>
                    {{ form_widget(registrationForm.lastName, { 'attr': {'class': 'form-control', 'placeholder': 'Lastname'} }) }}
                </div>

                <div class=\"input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">
                            <i class=\"fas fa-envelope\"></i>
                        </span>
                    </div>
                    {{ form_widget(registrationForm.email, { 'attr': {'class': 'form-control', 'placeholder': 'e-mail'} }) }}
                </div>

                <div class=\"input-group form-group\">
                    <div class=\"input-group-prepend\">
                        <span class=\"input-group-text\">
                            <i class=\"fas fa-key\"></i>
                        </span>
                    </div>
                    {{ form_widget(registrationForm.plainPassword, { 'attr': {'class': 'form-control', 'placeholder': 'Password'} }) }}
                </div>

                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn float-right login_btn\">Register</button>
                </div>

                {{ form_end(registrationForm) }}
            </div>
            <div class=\"card-footer\">
                <div class=\"d-flex justify-content-center links\">
                    Already have an account?<a href=\"{{ path('app_login') }}\">Sign in</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
", "security/signup.html.twig", "/home/malek/projets-symfony/C-light/templates/security/signup.html.twig");
    }
}
