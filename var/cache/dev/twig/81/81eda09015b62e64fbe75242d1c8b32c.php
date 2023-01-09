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

/* admin/images.html.twig */
class __TwigTemplate_70813134544c425043852223ea750c7f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/images.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/images.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/images.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Images";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t\t<div id=\"fh5co-intro-section\" class=\"section-overlay animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t<div class=\"fh5co-intro-cover text-center\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/intro.jpg);\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 float-overlay\">
\t\t\t\t\t\t\t<h2>Admin</h2>
\t\t\t\t\t\t\t<h3>Images</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t\t<div id=\"images\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-8 col-sm-push-2\">
\t\t\t\t\t\t<h1>Images</h1>
\t\t\t\t\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form', ["attr" => ["class" => "form-horizontal"]]);
        echo "
\t\t\t\t\t\t<hr class=\"divider\">
\t\t\t\t\t</div>   
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<br>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 31
            echo "\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<img style='width:150px;' src='";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/index/gallery/" . twig_get_attribute($this->env, $this->source, $context["image"], "file", [], "any", false, false, false, 34))), "html", null, true);
            echo "'>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tViews";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "numViews", [], "any", false, false, false, 36), "html", null, true);
            echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tLikes";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "numLikes", [], "any", false, false, false, 38), "html", null, true);
            echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tDowloads";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "numDowloads", [], "any", false, false, false, 40), "html", null, true);
            echo "

\t\t\t\t\t\t\t<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_images_borrar", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Borrar Imagen</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 45,  151 => 42,  146 => 40,  141 => 38,  136 => 36,  131 => 34,  126 => 32,  123 => 31,  119 => 30,  107 => 21,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title%}Images{% endblock %}
{% block body%}
\t\t<div id=\"fh5co-intro-section\" class=\"section-overlay animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t<div class=\"fh5co-intro-cover text-center\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/intro.jpg);\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 float-overlay\">
\t\t\t\t\t\t\t<h2>Admin</h2>
\t\t\t\t\t\t\t<h3>Images</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t\t<div id=\"images\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-8 col-sm-push-2\">
\t\t\t\t\t\t<h1>Images</h1>
\t\t\t\t\t\t{{ form(form, {'attr': {'class':'form-horizontal'}}) }}
\t\t\t\t\t\t<hr class=\"divider\">
\t\t\t\t\t</div>   
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<br>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for image in images %}
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t{{ image.id }}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<img style='width:150px;' src='{{ asset('images/index/gallery/' ~ image.file) }}'>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tViews{{ image.numViews }}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tLikes{{ image.numLikes }}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tDowloads{{ image.numDowloads }}

\t\t\t\t\t\t\t<a href=\"{{ path('app_images_borrar', {'id': image.id}) }}\">Borrar Imagen</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t
{% endblock %}
", "admin/images.html.twig", "/home/alumno/Documentos/CandelaBlog/templates/admin/images.html.twig");
    }
}
