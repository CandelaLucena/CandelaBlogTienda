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
class __TwigTemplate_6bc9a9867b96688b2dc37173756fa065 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> 
    <html class=\"no-js\"> <!--<![endif]-->
\t<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Narrow &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
\t<meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
\t<meta name=\"author\" content=\"FREEHTML5.CO\" />

    <!-- 
\t//////////////////////////////////////////////////////

\tFREE HTML5 TEMPLATE 
\tDESIGNED & DEVELOPED by FREEHTML5.CO
\t\t
\tWebsite: \t\thttp://freehtml5.co/
\tEmail: \t\t\tinfo@freehtml5.co
\tTwitter: \t\thttp://twitter.com/fh5co
\tFacebook: \t\thttps://www.facebook.com/fh5co

\t//////////////////////////////////////////////////////
\t -->

  \t<!-- Facebook and Twitter integration -->
\t<meta property=\"og:title\" content=\"\"/>
\t<meta property=\"og:image\" content=\"\"/>
\t<meta property=\"og:url\" content=\"\"/>
\t<meta property=\"og:site_name\" content=\"\"/>
\t<meta property=\"og:description\" content=\"\"/>
\t<meta name=\"twitter:title\" content=\"\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"\" />
\t<meta name=\"twitter:card\" content=\"\" />

\t<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
\t<link rel=\"shortcut icon\" href=\"favicon.ico\">

\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
\t
\t<!-- Animate.css -->
\t<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
\t<!-- Icomoon Icon Fonts-->
\t<link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
\t<!-- Bootstrap  -->
\t<link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
\t<!-- Owl Carousel -->
\t<link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">

\t<link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">


\t<!-- Modernizr JS -->
\t<script src=\"js/modernizr-2.6.2.min.js\"></script>
\t<!-- FOR IE9 below -->
\t<!--[if lt IE 9]>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->

\t</head>
\t<body>
\t<div class=\"box-wrap\">
\t\t<header role=\"banner\" id=\"fh5co-header\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 70
        echo twig_include($this->env, $context, "partials/_navigation.html.twig");
        echo "
\t\t  \t</div>
\t\t</header>
\t\t<!-- END: header -->
    ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo " 
\t\t<footer>
\t\t\t<div id=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center\">
\t\t\t\t\t\t\t<p>Copyright 2016 Free Html5 <a href=\"#\">Narrow</a>. All Rights Reserved. <br>Made with <i class=\"icon-heart3 love\"></i> by <a href=\"http://freehtml5.co/\" target=\"_blank\">Freehtml5.co</a> / Demo Images: <a href=\"https://unsplash.com/\" target=\"_blank\">Unsplash</a></p>
\t\t\t\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter-with-circle\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook-with-circle\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram-with-circle\"></i></a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>
\t<!-- END: box-wrap -->
\t
\t<!-- jQuery -->
\t<script src=\"js/jquery.min.js\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"js/jquery.easing.1.3.js\"></script>
\t<!-- Bootstrap -->
\t<script src=\"js/bootstrap.min.js\"></script>
\t<!-- Owl carousel -->
\t<script src=\"js/owl.carousel.min.js\"></script>
\t<!-- Waypoints -->
\t<script src=\"js/jquery.waypoints.min.js\"></script>
\t<!-- Parallax Stellar -->
\t<script src=\"js/jquery.stellar.min.js\"></script>
\t<!-- Main JS (Do not remove) -->
\t<script src=\"js/main.js\"></script>
\t</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 75
        echo "

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  197 => 75,  187 => 74,  142 => 77,  140 => 74,  133 => 70,  115 => 55,  110 => 53,  106 => 52,  101 => 50,  96 => 48,  91 => 46,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> 
    <html class=\"no-js\"> <!--<![endif]-->
\t<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Narrow &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
\t<meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
\t<meta name=\"author\" content=\"FREEHTML5.CO\" />

    <!-- 
\t//////////////////////////////////////////////////////

\tFREE HTML5 TEMPLATE 
\tDESIGNED & DEVELOPED by FREEHTML5.CO
\t\t
\tWebsite: \t\thttp://freehtml5.co/
\tEmail: \t\t\tinfo@freehtml5.co
\tTwitter: \t\thttp://twitter.com/fh5co
\tFacebook: \t\thttps://www.facebook.com/fh5co

\t//////////////////////////////////////////////////////
\t -->

  \t<!-- Facebook and Twitter integration -->
\t<meta property=\"og:title\" content=\"\"/>
\t<meta property=\"og:image\" content=\"\"/>
\t<meta property=\"og:url\" content=\"\"/>
\t<meta property=\"og:site_name\" content=\"\"/>
\t<meta property=\"og:description\" content=\"\"/>
\t<meta name=\"twitter:title\" content=\"\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"\" />
\t<meta name=\"twitter:card\" content=\"\" />

\t<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
\t<link rel=\"shortcut icon\" href=\"favicon.ico\">

\t<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
\t
\t<!-- Animate.css -->
\t<link rel=\"stylesheet\" href=\"{{ asset(\"css/animate.css\") }}\">
\t<!-- Icomoon Icon Fonts-->
\t<link rel=\"stylesheet\" href=\"{{ asset(\"css/icomoon.css\") }}\">
\t<!-- Bootstrap  -->
\t<link rel=\"stylesheet\" href=\"{{ asset(\"css/bootstrap.css\") }}\">
\t<!-- Owl Carousel -->
\t<link rel=\"stylesheet\" href=\"{{ asset(\"css/owl.carousel.min.css\") }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset(\"css/owl.theme.default.min.css\") }}\">

\t<link rel=\"stylesheet\" href=\"{{ asset(\"css/style.css\") }}\">


\t<!-- Modernizr JS -->
\t<script src=\"js/modernizr-2.6.2.min.js\"></script>
\t<!-- FOR IE9 below -->
\t<!--[if lt IE 9]>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->

\t</head>
\t<body>
\t<div class=\"box-wrap\">
\t\t<header role=\"banner\" id=\"fh5co-header\">
\t\t\t<div class=\"container\">
\t\t\t\t{{ include ('partials/_navigation.html.twig')}}
\t\t  \t</div>
\t\t</header>
\t\t<!-- END: header -->
    {% block body %}


    {% endblock %} 
\t\t<footer>
\t\t\t<div id=\"footer\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center\">
\t\t\t\t\t\t\t<p>Copyright 2016 Free Html5 <a href=\"#\">Narrow</a>. All Rights Reserved. <br>Made with <i class=\"icon-heart3 love\"></i> by <a href=\"http://freehtml5.co/\" target=\"_blank\">Freehtml5.co</a> / Demo Images: <a href=\"https://unsplash.com/\" target=\"_blank\">Unsplash</a></p>
\t\t\t\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter-with-circle\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook-with-circle\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram-with-circle\"></i></a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t</div>
\t<!-- END: box-wrap -->
\t
\t<!-- jQuery -->
\t<script src=\"js/jquery.min.js\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"js/jquery.easing.1.3.js\"></script>
\t<!-- Bootstrap -->
\t<script src=\"js/bootstrap.min.js\"></script>
\t<!-- Owl carousel -->
\t<script src=\"js/owl.carousel.min.js\"></script>
\t<!-- Waypoints -->
\t<script src=\"js/jquery.waypoints.min.js\"></script>
\t<!-- Parallax Stellar -->
\t<script src=\"js/jquery.stellar.min.js\"></script>
\t<!-- Main JS (Do not remove) -->
\t<script src=\"js/main.js\"></script>
\t</body>
</html>", "base.html.twig", "/home/alumno/Documentos/CandelaBlog/templates/base.html.twig");
    }
}
