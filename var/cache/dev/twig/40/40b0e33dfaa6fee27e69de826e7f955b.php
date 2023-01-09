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

/* page/services.html.twig */
class __TwigTemplate_f7ff3fc8dcf967abf0ccd313b9ffe854 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/services.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/services.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/services.html.twig", 1);
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

        echo "Services";
        
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
\t\t\t\t\t\t\t<h2>Our Services</h2>
\t\t\t\t\t\t\t<h3>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- END fh5co-intro-section -->
\t\t<div id=\"fh5co-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t<div class=\"fh5co-inner fh5co-services\">
\t\t\t\t\t\t\t\t<i class=\"icon-heart\"></i>
\t\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t\t<h3>Crafted With Love</h3>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t<div class=\"fh5co-inner fh5co-services\">
\t\t\t\t\t\t\t\t<i class=\"icon-laptop\"></i>
\t\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t\t<h3>Web Developement</h3>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t<div class=\"fh5co-inner fh5co-services\">
\t\t\t\t\t\t\t\t<i class=\"icon-video\"></i>
\t\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t\t<h3>Video Editing</h3>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t<div class=\"fh5co-inner fh5co-services\">
\t\t\t\t\t\t\t\t<i class=\"icon-mobile\"></i>
\t\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t\t<h3>Mobile Optimization</h3>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t<div class=\"fh5co-inner fh5co-services\">
\t\t\t\t\t\t\t\t<i class=\"icon-gears\"></i>
\t\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t\t<h3>Search Engine Optimization</h3>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t<div class=\"fh5co-inner fh5co-services\">
\t\t\t\t\t\t\t\t<i class=\"icon-piechart\"></i>
\t\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t\t<h3>Web Marketing</h3>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "page/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Services{% endblock %}
{% block body %}
\t\t<div id=\"fh5co-intro-section\" class=\"section-overlay animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t<div class=\"fh5co-intro-cover text-center\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/intro.jpg);\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 float-overlay\">
\t\t\t\t\t\t\t<h2>Our Services</h2>
\t\t\t\t\t\t\t<h3>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- END fh5co-intro-section -->
\t\t<div id=\"fh5co-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t<div class=\"fh5co-inner fh5co-services\">
\t\t\t\t\t\t\t\t<i class=\"icon-heart\"></i>
\t\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t\t<h3>Crafted With Love</h3>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t<div class=\"fh5co-inner fh5co-services\">
\t\t\t\t\t\t\t\t<i class=\"icon-laptop\"></i>
\t\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t\t<h3>Web Developement</h3>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t<div class=\"fh5co-inner fh5co-services\">
\t\t\t\t\t\t\t\t<i class=\"icon-video\"></i>
\t\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t\t<h3>Video Editing</h3>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t<div class=\"fh5co-inner fh5co-services\">
\t\t\t\t\t\t\t\t<i class=\"icon-mobile\"></i>
\t\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t\t<h3>Mobile Optimization</h3>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t<div class=\"fh5co-inner fh5co-services\">
\t\t\t\t\t\t\t\t<i class=\"icon-gears\"></i>
\t\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t\t<h3>Search Engine Optimization</h3>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t<div class=\"fh5co-inner fh5co-services\">
\t\t\t\t\t\t\t\t<i class=\"icon-piechart\"></i>
\t\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t\t<h3>Web Marketing</h3>
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
{% endblock %} ", "page/services.html.twig", "/home/alumno/Documentos/CandelaBlog/templates/page/services.html.twig");
    }
}
