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

/* default/index.html.twig */
class __TwigTemplate_006479f796aab459e08ad72fd0d87846ac01c4e86c0f3b66a882c4681f1d8a18 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'slides' => [$this, 'block_slides'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slides"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slides"));

        // line 3
        echo "\t<!DOCTYPE html>
\t<html>
\t\t<head>
\t\t\t<meta
\t\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t\t<!-- Add the slick-theme.css if you want default styling -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/slicks/slick.css"), "html", null, true);
        echo "\"/>
\t\t\t<!-- Add the slick-theme.css if you want default styling -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/slicks/slick-theme.css"), "html", null, true);
        echo "\"/>
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/styles/slides.css"), "html", null, true);
        echo "\">
\t\t\t<!--Rating-->
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/styles/rating.css"), "html", null, true);
        echo "\">
\t\t\t<!-- Footer -->
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/styles/footer.css"), "html", null, true);
        echo "\">
\t\t</head>
\t\t<body>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/slicks/slick.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/scripts/slides.js"), "html", null, true);
        echo "\"></script>
\t\t\t<div class=\"slideshow\">
\t\t\t\t<div class=\"slider-home\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"/assets/images/security.jpg\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"/assets/images/iot.jpg\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"/assets/images/devops.jpeg\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"/assets/images/data-science.jpg\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<h3>
\t\t\t\t<center>
\t\t\t\t\t<i>“Push yourself because , no one else is going to do it for you!”</i>
\t\t\t\t</center>
\t\t\t</h3>
\t\t\t<br>
\t\t\t<br>

\t\t\t<h2>Recommendations</h2>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/styles/cards.css"), "html", null, true);
        echo "\">
\t\t\t<div class=\" card-deck\">

\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 55
            echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img class=\"card-img-top\" src=";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "image", [], "any", false, false, false, 56), "html", null, true);
            echo " alt=\"Card image cap\" styles=\"width:80%\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_course", ["id" => twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "description", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "views", [], "any", false, false, false, 63), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\tviews</small>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<script src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/vendor/rating/rating.js"), "html", null, true);
            echo "\"></script>
\t\t\t\t\t\t\t<script src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/scripts/ratingStars.js"), "html", null, true);
            echo "\"></script>
\t\t\t\t\t\t\t<div class=\"star-widget\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rate\" id=\"rate-5\">
\t\t\t\t\t\t\t\t<label for=\"rate-5\" class=\"fas fa-star\"></label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rate\" id=\"rate-4\">
\t\t\t\t\t\t\t\t<label for=\"rate-4\" class=\"fas fa-star\"></label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rate\" id=\"rate-3\">
\t\t\t\t\t\t\t\t<label for=\"rate-3\" class=\"fas fa-star\"></label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rate\" id=\"rate-2\">
\t\t\t\t\t\t\t\t<label for=\"rate-2\" class=\"fas fa-star\"></label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rate\" id=\"rate-1\">
\t\t\t\t\t\t\t\t<label for=\"rate-1\" class=\"fas fa-star\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t</div>


\t\t\t<br><h2>
\t\t\t\t<b>TOP Categories</b>
\t\t\t</h2>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" ";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/styles/flip-cards.css"), "html", null, true);
        echo "\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 96
            echo "\t\t\t\t\t\t\t<li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 96), "html", null, true);
            echo "</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-s-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"flip-card\">
\t\t\t\t\t\t\t<div class=\"flip-card-inner\">
\t\t\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t\t\t<img src=\"/assets/images/IOT.jpg\" alt=\"Avatar\" style=\"width:300px;height:auto;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<center>Let's make life much easier with having the ability of controlling everything !<br>
\t\t\t\t\t\t\t\t\t\t\t:)</center>
\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Explore</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-s-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"flip-card\">
\t\t\t\t\t\t\t<div class=\"flip-card-inner\">
\t\t\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t\t\t<img src=\"/assets/images/devops-card2.jpg\" alt=\"Avatar\" style=\"height:200px;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<center>Let's make life much easier with having the ability of controlling everything !<br>
\t\t\t\t\t\t\t\t\t\t\t:)</center>
\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Explore</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-s-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"flip-card\">
\t\t\t\t\t\t\t<div class=\"flip-card-inner\">
\t\t\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t\t\t<img src=\"/assets/images/webdev.jpg\" alt=\"Avatar\" style=\"width:300px;height:auto;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<center>Let's make life much easier with having the ability of controlling everything !<br>
\t\t\t\t\t\t\t\t\t\t\t:)</center>
\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Explore</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-s-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"flip-card\">
\t\t\t\t\t\t\t<div class=\"flip-card-inner\">
\t\t\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t\t\t<img src=\"/assets/images/security-card.jpg\" alt=\"Avatar\" style=\"width:300px;height:auto;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<center>Let's make life much easier with having the ability of controlling everything !<br>
\t\t\t\t\t\t\t\t\t\t\t:)</center>
\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Explore</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--Footer-->
\t\t\t<div class=\"footer-basic\">
\t\t\t\t<footer>
\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"icon ion-social-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"icon ion-social-snapchat\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"icon ion-social-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"icon ion-social-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">Services</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">About</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">Terms</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">Privacy Policy</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<p class=\"copyright\">C-light © 2021</p>
\t\t\t\t</footer>
\t\t\t</div>

\t\t</body>
\t</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 98,  223 => 96,  219 => 95,  211 => 90,  203 => 84,  181 => 68,  177 => 67,  170 => 63,  165 => 61,  158 => 59,  152 => 56,  149 => 55,  145 => 54,  139 => 51,  110 => 25,  106 => 24,  100 => 21,  93 => 17,  87 => 14,  82 => 12,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block slides %}
\t<!DOCTYPE html>
\t<html>
\t\t<head>
\t\t\t<meta
\t\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t\t<!-- Add the slick-theme.css if you want default styling -->
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{asset ('/assets/vendor/slicks/slick.css')}}\"/>
\t\t\t<!-- Add the slick-theme.css if you want default styling -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset ('/assets/vendor/slicks/slick-theme.css')}}\"/>
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('/assets/styles/slides.css') }}\">
\t\t\t<!--Rating-->
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"{{asset ('/assets/styles/rating.css')}}\">
\t\t\t<!-- Footer -->
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('/assets/styles/footer.css')}}\">
\t\t</head>
\t\t<body>
\t\t\t<script type=\"text/javascript\" src=\"{{asset ('/assets/vendor/slicks/slick.min.js')}}\"></script>
\t\t\t<script type=\"text/javascript\" src=\"{{ asset ('assets/scripts/slides.js')}}\"></script>
\t\t\t<div class=\"slideshow\">
\t\t\t\t<div class=\"slider-home\">
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"/assets/images/security.jpg\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"/assets/images/iot.jpg\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"/assets/images/devops.jpeg\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img src=\"/assets/images/data-science.jpg\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<h3>
\t\t\t\t<center>
\t\t\t\t\t<i>“Push yourself because , no one else is going to do it for you!”</i>
\t\t\t\t</center>
\t\t\t</h3>
\t\t\t<br>
\t\t\t<br>

\t\t\t<h2>Recommendations</h2>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" {{ asset ('/assets/styles/cards.css') }}\">
\t\t\t<div class=\" card-deck\">

\t\t\t\t{% for course in courses %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img class=\"card-img-top\" src={{course.image }} alt=\"Card image cap\" styles=\"width:80%\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h5 class=\"card-title\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('single_course', {'id' : course.id}) }}\">{{ course.name }}</a>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<p class=\"card-text\">{{ course.description }}</p>
\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t<small class=\"text-muted\">{{course.views}}
\t\t\t\t\t\t\t\t\tviews</small>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<script src=\"{{ asset ('/assets/vendor/rating/rating.js')}}\"></script>
\t\t\t\t\t\t\t<script src=\"{{ asset ('/assets/scripts/ratingStars.js')}}\"></script>
\t\t\t\t\t\t\t<div class=\"star-widget\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rate\" id=\"rate-5\">
\t\t\t\t\t\t\t\t<label for=\"rate-5\" class=\"fas fa-star\"></label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rate\" id=\"rate-4\">
\t\t\t\t\t\t\t\t<label for=\"rate-4\" class=\"fas fa-star\"></label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rate\" id=\"rate-3\">
\t\t\t\t\t\t\t\t<label for=\"rate-3\" class=\"fas fa-star\"></label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rate\" id=\"rate-2\">
\t\t\t\t\t\t\t\t<label for=\"rate-2\" class=\"fas fa-star\"></label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rate\" id=\"rate-1\">
\t\t\t\t\t\t\t\t<label for=\"rate-1\" class=\"fas fa-star\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>


\t\t\t<br><h2>
\t\t\t\t<b>TOP Categories</b>
\t\t\t</h2>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\" {{ asset ('/assets/styles/flip-cards.css') }}\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t<li>{{ category.name }}</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-s-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"flip-card\">
\t\t\t\t\t\t\t<div class=\"flip-card-inner\">
\t\t\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t\t\t<img src=\"/assets/images/IOT.jpg\" alt=\"Avatar\" style=\"width:300px;height:auto;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<center>Let's make life much easier with having the ability of controlling everything !<br>
\t\t\t\t\t\t\t\t\t\t\t:)</center>
\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Explore</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-s-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"flip-card\">
\t\t\t\t\t\t\t<div class=\"flip-card-inner\">
\t\t\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t\t\t<img src=\"/assets/images/devops-card2.jpg\" alt=\"Avatar\" style=\"height:200px;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<center>Let's make life much easier with having the ability of controlling everything !<br>
\t\t\t\t\t\t\t\t\t\t\t:)</center>
\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Explore</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-s-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"flip-card\">
\t\t\t\t\t\t\t<div class=\"flip-card-inner\">
\t\t\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t\t\t<img src=\"/assets/images/webdev.jpg\" alt=\"Avatar\" style=\"width:300px;height:auto;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<center>Let's make life much easier with having the ability of controlling everything !<br>
\t\t\t\t\t\t\t\t\t\t\t:)</center>
\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Explore</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-s-6 col-xs-12\">
\t\t\t\t\t\t<div class=\"flip-card\">
\t\t\t\t\t\t\t<div class=\"flip-card-inner\">
\t\t\t\t\t\t\t\t<div class=\"flip-card-front\">
\t\t\t\t\t\t\t\t\t<img src=\"/assets/images/security-card.jpg\" alt=\"Avatar\" style=\"width:300px;height:auto;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flip-card-back\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<center>Let's make life much easier with having the ability of controlling everything !<br>
\t\t\t\t\t\t\t\t\t\t\t:)</center>
\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn\">Explore</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--Footer-->
\t\t\t<div class=\"footer-basic\">
\t\t\t\t<footer>
\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"icon ion-social-instagram\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"icon ion-social-snapchat\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"icon ion-social-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<i class=\"icon ion-social-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">Services</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">About</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">Terms</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t<a href=\"#\">Privacy Policy</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<p class=\"copyright\">C-light © 2021</p>
\t\t\t\t</footer>
\t\t\t</div>

\t\t</body>
\t</html>
{% endblock %}
", "default/index.html.twig", "/home/malek/projets-symfony/C-light/templates/default/index.html.twig");
    }
}
