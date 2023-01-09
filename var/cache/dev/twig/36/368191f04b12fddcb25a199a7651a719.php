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

/* page/about.html.twig */
class __TwigTemplate_4786b0292a896fb896b9e2ec01e15055 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/about.html.twig", 1);
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

        echo "About";
        
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
\t\t\t\t\t\t\t<h2>About Us</h2>
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
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"about-section\">
\t\t\t\t\t\t\t<h3 class=\"animate-box\">Company Background</h3>
\t\t\t\t\t\t\t<img class=\"display-left animate-box\" src=\"images/about.jpg\" alt=\"about\">
\t\t\t\t\t\t\t<p class=\"animate-box\">Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t\t<img class=\"display-right animate-box\" src=\"images/about.jpg\" alt=\"about\">
\t\t\t\t\t\t\t<p class=\"animate-box\">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t\t<blockquote class=\"animate-box\">
\t\t\t\t\t\t\t\t<p>“Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.”</p>
\t\t\t\t\t\t\t\t<span>&mdash; John Doe - Co Founder</span>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t\t\t<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t\t\t<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t\t\t<div class=\"inner animate-box\">
\t\t\t\t\t\t\t\t<h2>Featured Products</h2>
\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"img-responsive\" src=\"images/product-2.jpg\" alt=\"product\"></a>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"inner animate-box\">
\t\t\t\t\t\t\t\t<h2>Categories</h2>
\t\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Bookmarksgrove</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vokalia</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Semantics</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Mountains</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Countries</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vokalia</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Semantics</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Mountains</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Countries</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"inner animate-box\">
\t\t\t\t\t\t\t\t<h2>Customers Says</h2>
\t\t\t\t\t\t\t\t<p class=\"quote\">“If you really want to do something, You will find a way, If you don't you'll find an excure”</p>
\t\t\t\t\t\t\t\t<span>&mdash; John Doe - Co Founder</span>
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
        return "page/about.html.twig";
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
{% block title %}About{% endblock %}
{% block body %}
\t\t<div id=\"fh5co-intro-section\" class=\"section-overlay animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t<div class=\"fh5co-intro-cover text-center\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/intro.jpg);\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 float-overlay\">
\t\t\t\t\t\t\t<h2>About Us</h2>
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
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t<div class=\"about-section\">
\t\t\t\t\t\t\t<h3 class=\"animate-box\">Company Background</h3>
\t\t\t\t\t\t\t<img class=\"display-left animate-box\" src=\"images/about.jpg\" alt=\"about\">
\t\t\t\t\t\t\t<p class=\"animate-box\">Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t\t<img class=\"display-right animate-box\" src=\"images/about.jpg\" alt=\"about\">
\t\t\t\t\t\t\t<p class=\"animate-box\">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t\t<blockquote class=\"animate-box\">
\t\t\t\t\t\t\t\t<p>“Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.”</p>
\t\t\t\t\t\t\t\t<span>&mdash; John Doe - Co Founder</span>
\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t\t\t<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t\t\t\t\t<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t\t\t<div class=\"inner animate-box\">
\t\t\t\t\t\t\t\t<h2>Featured Products</h2>
\t\t\t\t\t\t\t\t<a href=\"#\"><img class=\"img-responsive\" src=\"images/product-2.jpg\" alt=\"product\"></a>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"inner animate-box\">
\t\t\t\t\t\t\t\t<h2>Categories</h2>
\t\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Bookmarksgrove</a>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vokalia</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Semantics</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Mountains</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Countries</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Vokalia</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Semantics</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Mountains</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Countries</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"inner animate-box\">
\t\t\t\t\t\t\t\t<h2>Customers Says</h2>
\t\t\t\t\t\t\t\t<p class=\"quote\">“If you really want to do something, You will find a way, If you don't you'll find an excure”</p>
\t\t\t\t\t\t\t\t<span>&mdash; John Doe - Co Founder</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
{% endblock %}  
", "page/about.html.twig", "/home/alumno/Documentos/CandelaBlog/templates/page/about.html.twig");
    }
}
