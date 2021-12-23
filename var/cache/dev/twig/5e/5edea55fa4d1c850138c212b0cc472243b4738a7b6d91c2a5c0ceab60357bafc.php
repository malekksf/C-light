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

/* course/index.html.twig */
class __TwigTemplate_22612af49796cec25b192044decd2f44aaac67d2a5aa2b1bbdd2969344cd694b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "course/index.html.twig", 1);
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
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/styles/videos-list.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/styles/video-sharp.css"), "html", null, true);
        echo "\">
\t\t</head>

\t\t<h5>
\t\t\t<i>Level up your
\t\t\t\t<b>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</b>
\t\t\t\tskills !</i>
\t\t</h5>
\t\t<figure class=\"video\">
\t\t\t<iframe src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 16, $this->source); })()), "trailer", [], "any", false, false, false, 16), "html", null, true);
        echo "\"></iframe>
\t\t</figure>

\t\t<p>
\t\t\t<i class=\"fas fa-user-graduate\"></i>
\t\t\tViews :
\t\t\t<b>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 22, $this->source); })()), "views", [], "any", false, false, false, 22), "html", null, true);
        echo "</b>
\t\t</p>
\t\t<p>Category :
\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 25, $this->source); })()), "categorie", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
\t\t<p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
\t\t<br>
\t\t<div class=\"table\">
\t\t\t<table>
\t\t\t\t<center>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Videos</th>
\t\t\t\t\t\t<th>Links</th>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 36
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "url", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t</center>
\t\t\t</table>
\t\t</div>
\t</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  134 => 38,  130 => 37,  127 => 36,  123 => 35,  111 => 26,  107 => 25,  101 => 22,  92 => 16,  85 => 12,  77 => 7,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block slides %}
\t<!DOCTYPE html>
\t<html>
\t\t<head>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('/assets/styles/videos-list.css') }}\">
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('/assets/styles/video-sharp.css') }}\">
\t\t</head>

\t\t<h5>
\t\t\t<i>Level up your
\t\t\t\t<b>{{ course.name }}</b>
\t\t\t\tskills !</i>
\t\t</h5>
\t\t<figure class=\"video\">
\t\t\t<iframe src=\"{{course.trailer}}\"></iframe>
\t\t</figure>

\t\t<p>
\t\t\t<i class=\"fas fa-user-graduate\"></i>
\t\t\tViews :
\t\t\t<b>{{ course.views }}</b>
\t\t</p>
\t\t<p>Category :
\t\t\t{{ course.categorie.name }}</p>
\t\t<p>{{ course.description }}</p>
\t\t<br>
\t\t<div class=\"table\">
\t\t\t<table>
\t\t\t\t<center>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Videos</th>
\t\t\t\t\t\t<th>Links</th>
\t\t\t\t\t</tr>
\t\t\t\t\t{% for video in videos %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ video.name }}</td>
\t\t\t\t\t\t\t<td>{{video.url}}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</center>
\t\t\t</table>
\t\t</div>
\t</html>
{% endblock %}
", "course/index.html.twig", "/home/malek/projets-symfony/C-light/templates/course/index.html.twig");
    }
}
