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

/* partials/_navigation.html.twig */
class __TwigTemplate_6d846a14aae73bad4463b6280893672f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_navigation.html.twig"));

        // line 1
        echo "\t\t\t\t<nav class=\"navbar navbar-default\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"fh5co-navbar-brand\">
\t\t\t\t\t\t\t\t<a class=\"fh5co-logo\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Narrow</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-9 main-nav\">
\t\t\t\t\t\t\t<ul class=\"nav text-right\">
\t\t\t\t\t\t\t\t<li class=\"";
        // line 10
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", [0 => "_route"], "method", false, false, false, 10) == "index")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><span>Home</span></a></li>
\t\t\t\t\t\t\t\t<li class=\"";
        // line 11
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "attributes", [], "any", false, false, false, 11), "get", [0 => "_route"], "method", false, false, false, 11) == "services")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">Services</a></li>
\t\t\t\t\t\t\t\t<li class=\"";
        // line 12
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", [0 => "_route"], "method", false, false, false, 12) == "product")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        echo "\">Products</a></li>
                                <li class=\"";
        // line 13
        echo ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13) == "blog") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13) == "single_post"))) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog");
        echo "\">Blog</a></li>
\t\t\t\t\t\t\t\t<li class=\"";
        // line 14
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "attributes", [], "any", false, false, false, 14), "get", [0 => "_route"], "method", false, false, false, 14) == "about")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a></li>
\t\t\t\t\t\t\t\t<li class=\"";
        // line 15
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", [0 => "_route"], "method", false, false, false, 15) == "contact")) ? ("active") : (""));
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
\t\t\t\t\t\t\t\t";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "\t\t\t\t\t\t\t\t\t<li class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", [0 => "_route"], "method", false, false, false, 17) == "new_post")) ? ("active") : (""));
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_post");
            echo "\"><i class=\"fa fa-plus-square sr-icons\"></i> New post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fa fa-sign-out sr-icons\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
            echo " - Logout</a></li>
\t\t\t\t\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t\t\t\t\t<li class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "attributes", [], "any", false, false, false, 20), "get", [0 => "_route"], "method", false, false, false, 20) == "app_login")) ? ("active") : (""));
            echo " lien\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"><i class=\"fa fa-sign-in sr-icons\"></i> Login</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"";
            // line 21
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", [0 => "_route"], "method", false, false, false, 21) == "app_register")) ? ("active") : (""));
            echo " \"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"><i class=\"fa fa-user-secret sr-icons\"></i> Register</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 23,  116 => 21,  109 => 20,  102 => 18,  95 => 17,  93 => 16,  87 => 15,  81 => 14,  75 => 13,  69 => 12,  63 => 11,  57 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t\t\t\t<nav class=\"navbar navbar-default\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"fh5co-navbar-brand\">
\t\t\t\t\t\t\t\t<a class=\"fh5co-logo\" href=\"{{ path('index') }}\">Narrow</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-9 main-nav\">
\t\t\t\t\t\t\t<ul class=\"nav text-right\">
\t\t\t\t\t\t\t\t<li class=\"{{ (app.request.attributes.get('_route') == 'index')  ? 'active': ''}}\"><a href=\"{{ path('index') }}\"><span>Home</span></a></li>
\t\t\t\t\t\t\t\t<li class=\"{{ (app.request.attributes.get('_route') == 'services')  ? 'active': ''}}\"><a href=\"{{ path('services') }}\">Services</a></li>
\t\t\t\t\t\t\t\t<li class=\"{{ (app.request.attributes.get('_route') == 'product')  ? 'active': ''}}\"><a href=\"{{ path('product') }}\">Products</a></li>
                                <li class=\"{{ (app.request.attributes.get('_route') == 'blog' or app.request.attributes.get('_route') == 'single_post')  ? 'active': ''}}\"><a href=\"{{ path('blog') }}\">Blog</a></li>
\t\t\t\t\t\t\t\t<li class=\"{{ (app.request.attributes.get('_route') == 'about')  ? 'active': ''}}\"><a href=\"{{ path('about') }}\">About</a></li>
\t\t\t\t\t\t\t\t<li class=\"{{ (app.request.attributes.get('_route') == 'contact')  ? 'active': ''}}\"><a href=\"{{ path('contact') }}\">Contact</a></li>
\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t<li class=\"{{ (app.request.attributes.get('_route') == 'new_post')  ? 'active': ''}}\"><a href=\"{{ path('new_post') }}\"><i class=\"fa fa-plus-square sr-icons\"></i> New post</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_logout') }}\"><i class=\"fa fa-sign-out sr-icons\"></i> {{ app.user.name }} - Logout</a></li>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li class=\"{{ (app.request.attributes.get('_route') == 'app_login')  ? 'active': ''}} lien\"><a href=\"{{ path('app_login') }}\"><i class=\"fa fa-sign-in sr-icons\"></i> Login</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"{{ (app.request.attributes.get('_route') == 'app_register')  ? 'active': ''}} \"><a href=\"{{ path('app_register') }}\"><i class=\"fa fa-user-secret sr-icons\"></i> Register</a></li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>", "partials/_navigation.html.twig", "/home/alumno/Documentos/CandelaBlog/templates/partials/_navigation.html.twig");
    }
}
