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

/* page/index.html.twig */
class __TwigTemplate_6d47de3ba252c3cfe9955ecc53e6433d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/index.html.twig", 1);
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

        echo "Index";
        
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
        echo "\t\t<div class=\"owl-carousel owl-carousel1 owl-carousel-fullwidth fh5co-light-arrow animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 6
            echo "\t\t\t\t<div class=\"item\"><a href=\"images/img_large_1.jpg\" class=\"image-popup\"><img src='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/index/gallery/" . twig_get_attribute($this->env, $this->source, $context["image"], "file", [], "any", false, false, false, 6))), "html", null, true);
            echo "' style=\"width:1370px;height:636px\" alt=\"image\"></a></div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t\t</div>
\t\t<div id=\"fh5co-media-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row animate-box\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center heading-section\">
\t\t\t\t\t\t<h3>Welcome to Narrow</h3>
\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-7 animate-box\">
\t\t\t\t\t\t<div class=\"fh5co-cover\" style=\"background-image: url(images/work-1.jpg);\">
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"fh5co-cover\">
\t\t\t\t\t\t\t<div class=\"fh5co-cover-hero animate-box\">
\t\t\t\t\t\t\t\t<div class=\"fh5co-cover-thumb\" style=\"background-image: url(images/work-2.jpg);\"></div>
\t\t\t\t\t\t\t\t<div class=\"desc-thumb\">
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the</p>
\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"fh5co-cover-hero animate-box\">
\t\t\t\t\t\t\t\t<div class=\"fh5co-cover-thumb\" style=\"background-image: url(images/work-3.jpg);\"></div>
\t\t\t\t\t\t\t\t<div class=\"desc-thumb\">
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the</p>
\t\t\t\t\t\t\t\t\t<span>User Experience</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"fh5co-cover-hero animate-box\">
\t\t\t\t\t\t\t\t<div class=\"fh5co-cover-thumb\" style=\"background-image: url(images/work-4.jpg);\"></div>
\t\t\t\t\t\t\t\t<div class=\"desc-thumb\">
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the</p>
\t\t\t\t\t\t\t\t\t<span>Web Developement</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- END fh5co-media-section -->
\t\t<div id=\"fh5co-intro-section\">
\t\t\t<div class=\"fh5co-intro-cover text-center animate-box\" data-animate-effect=\"fadeIn\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/intro.jpg);\">
\t\t\t\t<a href=\"#\" class=\"btn\">Serving You Is Our First Priority</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- END fh5co-intro-section -->
\t\t<div id=\"fh5co-product-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
\t\t\t\t\t\t<h3>Products</h3>
\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"owl-carousel owl-carousel2\">
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-1.jpg\" class=\"image-popup\"><img src=\"images/product-1.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-2.jpg\" class=\"image-popup\"><img src=\"images/product-2.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-3.jpg\" class=\"image-popup\"><img src=\"images/product-3.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-4.jpg\" class=\"image-popup\"><img src=\"images/product-4.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-1.jpg\" class=\"image-popup\"><img src=\"images/product-1.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-2.jpg\" class=\"image-popup\"><img src=\"images/product-2.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-3.jpg\" class=\"image-popup\"><img src=\"images/product-3.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-4.jpg\" class=\"image-popup\"><img src=\"images/product-4.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-1.jpg\" class=\"image-popup\"><img src=\"images/product-1.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-2.jpg\" class=\"image-popup\"><img src=\"images/product-2.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-3.jpg\" class=\"image-popup\"><img src=\"images/product-3.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-4.jpg\" class=\"image-popup\"><img src=\"images/product-2.jpg\" alt=\"image\"></a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- END fh5co-product-section -->
\t\t<div id=\"fh5co-section\" class=\"fh5co-grey-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t\t\t<div class=\"fh5co-inner\">
\t\t\t\t\t\t\t<i class=\"icon-shield\"></i>
\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t<h3>About Us</h3>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t\t\t<div class=\"fh5co-inner\">
\t\t\t\t\t\t\t<i class=\"icon-strategy\"></i>
\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t<h3>What We Doe</h3>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t\t\t<div class=\"fh5co-inner\">
\t\t\t\t\t\t\t<i class=\"icon-bike\"></i>
\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t<h3>Why We Choose Us</h3>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
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
        return "page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 8,  95 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Index{% endblock %}
{% block body %}
\t\t<div class=\"owl-carousel owl-carousel1 owl-carousel-fullwidth fh5co-light-arrow animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t{% for image in images %}
\t\t\t\t<div class=\"item\"><a href=\"images/img_large_1.jpg\" class=\"image-popup\"><img src='{{ asset('images/index/gallery/' ~ image.file) }}' style=\"width:1370px;height:636px\" alt=\"image\"></a></div>
\t\t\t{% endfor %}
\t\t</div>
\t\t<div id=\"fh5co-media-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row animate-box\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center heading-section\">
\t\t\t\t\t\t<h3>Welcome to Narrow</h3>
\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-7 animate-box\">
\t\t\t\t\t\t<div class=\"fh5co-cover\" style=\"background-image: url(images/work-1.jpg);\">
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"fh5co-cover\">
\t\t\t\t\t\t\t<div class=\"fh5co-cover-hero animate-box\">
\t\t\t\t\t\t\t\t<div class=\"fh5co-cover-thumb\" style=\"background-image: url(images/work-2.jpg);\"></div>
\t\t\t\t\t\t\t\t<div class=\"desc-thumb\">
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the</p>
\t\t\t\t\t\t\t\t\t<span>Web Design</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"fh5co-cover-hero animate-box\">
\t\t\t\t\t\t\t\t<div class=\"fh5co-cover-thumb\" style=\"background-image: url(images/work-3.jpg);\"></div>
\t\t\t\t\t\t\t\t<div class=\"desc-thumb\">
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the</p>
\t\t\t\t\t\t\t\t\t<span>User Experience</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"fh5co-cover-hero animate-box\">
\t\t\t\t\t\t\t\t<div class=\"fh5co-cover-thumb\" style=\"background-image: url(images/work-4.jpg);\"></div>
\t\t\t\t\t\t\t\t<div class=\"desc-thumb\">
\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the</p>
\t\t\t\t\t\t\t\t\t<span>Web Developement</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- END fh5co-media-section -->
\t\t<div id=\"fh5co-intro-section\">
\t\t\t<div class=\"fh5co-intro-cover text-center animate-box\" data-animate-effect=\"fadeIn\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/intro.jpg);\">
\t\t\t\t<a href=\"#\" class=\"btn\">Serving You Is Our First Priority</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- END fh5co-intro-section -->
\t\t<div id=\"fh5co-product-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center heading-section animate-box\">
\t\t\t\t\t\t<h3>Products</h3>
\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"owl-carousel owl-carousel2\">
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-1.jpg\" class=\"image-popup\"><img src=\"images/product-1.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-2.jpg\" class=\"image-popup\"><img src=\"images/product-2.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-3.jpg\" class=\"image-popup\"><img src=\"images/product-3.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-4.jpg\" class=\"image-popup\"><img src=\"images/product-4.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-1.jpg\" class=\"image-popup\"><img src=\"images/product-1.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-2.jpg\" class=\"image-popup\"><img src=\"images/product-2.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-3.jpg\" class=\"image-popup\"><img src=\"images/product-3.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-4.jpg\" class=\"image-popup\"><img src=\"images/product-4.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-1.jpg\" class=\"image-popup\"><img src=\"images/product-1.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-2.jpg\" class=\"image-popup\"><img src=\"images/product-2.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-3.jpg\" class=\"image-popup\"><img src=\"images/product-3.jpg\" alt=\"image\"></a></div>
\t\t\t\t\t<div class=\"item animate-box\"><a href=\"images/product-4.jpg\" class=\"image-popup\"><img src=\"images/product-2.jpg\" alt=\"image\"></a></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- END fh5co-product-section -->
\t\t<div id=\"fh5co-section\" class=\"fh5co-grey-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t\t\t<div class=\"fh5co-inner\">
\t\t\t\t\t\t\t<i class=\"icon-shield\"></i>
\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t<h3>About Us</h3>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t\t\t<div class=\"fh5co-inner\">
\t\t\t\t\t\t\t<i class=\"icon-strategy\"></i>
\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t<h3>What We Doe</h3>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t\t\t<div class=\"fh5co-inner\">
\t\t\t\t\t\t\t<i class=\"icon-bike\"></i>
\t\t\t\t\t\t\t<div class=\"holder-section\">
\t\t\t\t\t\t\t\t<h3>Why We Choose Us</h3>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
{% endblock %}  ", "page/index.html.twig", "/home/alumno/Documentos/CandelaBlog/templates/page/index.html.twig");
    }
}
