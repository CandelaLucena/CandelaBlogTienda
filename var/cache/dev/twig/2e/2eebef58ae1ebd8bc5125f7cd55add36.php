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

/* blog/blog.html.twig */
class __TwigTemplate_b418d8e3ba0bb288137bec1e4fc46846 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/blog.html.twig", 1);
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

        echo "Blog";
        
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
\t\t\t\t\t\t\t<h2>Our Blog</h2>
\t\t\t\t\t\t\t<h3>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"animate-box\">
\t\t\t<div class=\"blog_section_2\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 20, $this->source); })()), "results", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"section_1\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/index/gallery/" . twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 23))), "html", null, true);
            echo "\" style=\"max-width: 100%; height: 500px;\"></div>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn\"  style=\"width: 100%;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t<p style=\"word-break: break-all; text-overflow: ellipsis;\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: right;\">By ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "postUser", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo " in ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 26), "d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 26), "F"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn\"  style=\"width: 70%\">READ MORE...</a>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/comment.png"), "html", null, true);
            echo "\" style=\"width: 20px;\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "numComments", [], "any", false, false, false, 29), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favorite.png"), "html", null, true);
            echo "\"style=\"width: 20px;\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "numLikes", [], "any", false, false, false, 30), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>



\t\t<form class=\"\" action='";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_buscar");
        echo "'>
\t\t\t<input type=\"text\" class=\"form-control\" style=\"display:unset; width:90%\" placeholder=\"Research\" name='searchTerm'>
\t\t\t<button type='submit' class=\"btn btn-primary btn-danger\">Buscar<i class=\"fa fa-search\"></i>
\t\t\t</button>
\t\t</form>

\t\t";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", [0 => "_route"], "method", false, false, false, 47) == "blog")) {
            // line 48
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 48, $this->source); })()), "hasToPaginate", [], "any", false, false, false, 48)) {
                // line 49
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 49, $this->source); })()), "hasToPaginate", [], "any", false, false, false, 49)) {
                    // line 50
                    echo "\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t";
                    // line 52
                    if (twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 52, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 52)) {
                        // line 53
                        echo "\t\t\t\t\t\t\t\t<li class=\"prev\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 53, $this->source); })()), "previousPage", [], "any", false, false, false, 53)]), "html", null, true);
                        echo "\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> Previous</a></li>
\t\t\t\t\t\t\t";
                    } else {
                        // line 55
                        echo "\t\t\t\t\t\t\t\t<li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> Previous </span></li>
\t\t\t\t\t\t\t";
                    }
                    // line 57
                    echo "
\t\t\t\t\t\t\t";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 58, $this->source); })()), "lastPage", [], "any", false, false, false, 58)));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 59
                        echo "\t\t\t\t\t\t\t\t";
                        if (($context["i"] == twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 59, $this->source); })()), "currentPage", [], "any", false, false, false, 59))) {
                            // line 60
                            echo "\t\t\t\t\t\t\t\t\t<li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "</span></li>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 62
                            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog", ["page" => $context["i"]]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "</a></li>
\t\t\t\t\t\t\t\t";
                        }
                        // line 64
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "
\t\t\t\t\t\t\t";
                    // line 66
                    if (twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 66, $this->source); })()), "hasNextPage", [], "any", false, false, false, 66)) {
                        // line 67
                        echo "\t\t\t\t\t\t\t\t<li class=\"next\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 67, $this->source); })()), "nextPage", [], "any", false, false, false, 67)]), "html", null, true);
                        echo "\" rel=\"next\">Next <i class=\"fa fw fa-arrow-right\"></i></a></li>
\t\t\t\t\t\t\t";
                    } else {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t<li class=\"next disabled\"><span>Next <i class=\"fa fw fa-arrow-right\"></i></span></li>
\t\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 74
                echo "\t\t\t";
            }
            // line 75
            echo "\t\t";
        } else {
            // line 76
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 76, $this->source); })()), "hasToPaginate", [], "any", false, false, false, 76)) {
                // line 77
                echo "\t\t\t\t<div class=\"text-left\">
\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t";
                // line 79
                if (twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 79, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "\t\t\t\t\t\t<li class=\"prev\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_buscar", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 80, $this->source); })()), "previousPage", [], "any", false, false, false, 80)]), "html", null, true);
                    echo "?searchTerm=";
                    echo twig_escape_filter($this->env, (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 80, $this->source); })()), "html", null, true);
                    echo "\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> Previous</a></li>
\t\t\t\t\t";
                } else {
                    // line 82
                    echo "\t\t\t\t\t\t<li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> Previous </span></li>
\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 84, $this->source); })()), "lastPage", [], "any", false, false, false, 84)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 85
                    echo "\t\t\t\t\t\t";
                    if (($context["i"] == twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 85, $this->source); })()), "currentPage", [], "any", false, false, false, 85))) {
                        // line 86
                        echo "\t\t\t\t\t\t\t<li class=\"active\"><span>";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</span></li>
\t\t\t\t\t\t";
                    } else {
                        // line 88
                        echo "\t\t\t\t\t\t\t<li><a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_buscar", ["page" => $context["i"]]), "html", null, true);
                        echo "?searchTerm=";
                        echo twig_escape_filter($this->env, (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 88, $this->source); })()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t";
                    }
                    // line 90
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 91, $this->source); })()), "hasNextPage", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "\t\t\t\t\t\t<li class=\"next\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_buscar", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 92, $this->source); })()), "nextPage", [], "any", false, false, false, 92)]), "html", null, true);
                    echo "?searchTerm=";
                    echo twig_escape_filter($this->env, (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 92, $this->source); })()), "html", null, true);
                    echo "\" rel=\"next\">Next <i class=\"fa fw fa-arrow-right\"></i></a></li>
\t\t\t\t\t";
                } else {
                    // line 94
                    echo "\t\t\t\t\t\t<li class=\"next disabled\"><span>Next <i class=\"fa fw fa-arrow-right\"></i></span></li>
\t\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
            }
            // line 99
            echo "\t\t";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 99,  323 => 96,  319 => 94,  311 => 92,  308 => 91,  302 => 90,  292 => 88,  286 => 86,  283 => 85,  278 => 84,  274 => 82,  266 => 80,  264 => 79,  260 => 77,  257 => 76,  254 => 75,  251 => 74,  246 => 71,  242 => 69,  236 => 67,  234 => 66,  231 => 65,  225 => 64,  217 => 62,  211 => 60,  208 => 59,  204 => 58,  201 => 57,  197 => 55,  191 => 53,  189 => 52,  185 => 50,  182 => 49,  179 => 48,  177 => 47,  168 => 41,  160 => 35,  147 => 30,  141 => 29,  137 => 28,  128 => 26,  124 => 25,  118 => 24,  114 => 23,  110 => 21,  106 => 20,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Blog{% endblock %}
{% block body %}
\t\t<div id=\"fh5co-intro-section\" class=\"section-overlay animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t<div class=\"fh5co-intro-cover text-center\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(images/intro.jpg);\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 float-overlay\">
\t\t\t\t\t\t\t<h2>Our Blog</h2>
\t\t\t\t\t\t\t<h3>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"animate-box\">
\t\t\t<div class=\"blog_section_2\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for post in posts.results %}
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"section_1\">
\t\t\t\t\t\t\t\t\t\t<div><img src=\"{{ asset('images/index/gallery/' ~ post.image) }}\" style=\"max-width: 100%; height: 500px;\"></div>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('single_post', {'slug': post.slug}) }}\" class=\"btn\"  style=\"width: 100%;\">{{post.title}}</a>
\t\t\t\t\t\t\t\t\t\t<p style=\"word-break: break-all; text-overflow: ellipsis;\">{{post.content}}</p>
\t\t\t\t\t\t\t\t\t\t<p style=\"text-align: right;\">By {{post.postUser.name}} in {{post.publishedAt | date('d') }} {{ post.publishedAt | date('F') }}</p>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('single_post', {'slug': post.slug}) }}\" class=\"btn\"  style=\"width: 70%\">READ MORE...</a>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('images/comment.png')}}\" style=\"width: 20px;\"> {{post.numComments}}
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('images/favorite.png')}}\"style=\"width: 20px;\"> {{post.numLikes}}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>



\t\t<form class=\"\" action='{{ path('blog_buscar') }}'>
\t\t\t<input type=\"text\" class=\"form-control\" style=\"display:unset; width:90%\" placeholder=\"Research\" name='searchTerm'>
\t\t\t<button type='submit' class=\"btn btn-primary btn-danger\">Buscar<i class=\"fa fa-search\"></i>
\t\t\t</button>
\t\t</form>

\t\t{% if (app.request.attributes.get('_route') == 'blog') %}
\t\t\t{% if posts.hasToPaginate %}
\t\t\t\t{% if posts.hasToPaginate %}
\t\t\t\t\t<div class=\"text-left\">
\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t{% if posts.hasPreviousPage %}
\t\t\t\t\t\t\t\t<li class=\"prev\"><a href=\"{{ path('blog', {page: posts.previousPage}) }}\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> Previous</a></li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> Previous </span></li>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% for i in 1..posts.lastPage %}
\t\t\t\t\t\t\t\t{% if i == posts.currentPage %}
\t\t\t\t\t\t\t\t\t<li class=\"active\"><span>{{ i }}</span></li>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('blog', {page: i}) }}\">{{ i }}</a></li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t{% if posts.hasNextPage %}
\t\t\t\t\t\t\t\t<li class=\"next\"><a href=\"{{ path('blog', {page: posts.nextPage}) }}\" rel=\"next\">Next <i class=\"fa fw fa-arrow-right\"></i></a></li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li class=\"next disabled\"><span>Next <i class=\"fa fw fa-arrow-right\"></i></span></li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t{% else %}
\t\t\t{% if posts.hasToPaginate %}
\t\t\t\t<div class=\"text-left\">
\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t{% if posts.hasPreviousPage %}
\t\t\t\t\t\t<li class=\"prev\"><a href=\"{{ path('blog_buscar', {page: posts.previousPage}) }}?searchTerm={{searchTerm}}\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> Previous</a></li>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> Previous </span></li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% for i in 1..posts.lastPage %}
\t\t\t\t\t\t{% if i == posts.currentPage %}
\t\t\t\t\t\t\t<li class=\"active\"><span>{{ i }}</span></li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li><a href=\"{{ path('blog_buscar', {page: i}) }}?searchTerm={{searchTerm}}\">{{ i }}</a></li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% if posts.hasNextPage %}
\t\t\t\t\t\t<li class=\"next\"><a href=\"{{ path('blog_buscar', {page: posts.nextPage}) }}?searchTerm={{searchTerm}}\" rel=\"next\">Next <i class=\"fa fw fa-arrow-right\"></i></a></li>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"next disabled\"><span>Next <i class=\"fa fw fa-arrow-right\"></i></span></li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% endif %}
{% endblock %}
", "blog/blog.html.twig", "/home/alumno/Documentos/CandelaBlog/templates/blog/blog.html.twig");
    }
}
