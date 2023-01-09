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

/* blog/single_post.html.twig */
class __TwigTemplate_bb5134990eca8fa4e20e8f93b9792c68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/single_post.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/single_post.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/single_post.html.twig", 1);
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

        echo "Single Post";
        
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
\t\t\t<div class=\"fh5co-intro-cover text-center\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url(";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/index/gallery/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 5, $this->source); })()), "image", [], "any", false, false, false, 5))), "html", null, true);
        echo ");\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 float-overlay\">
\t\t\t\t\t\t\t<h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"animate-box\">
\t\t\t<div class=\"blog_section_2\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<div class=\"section_1\">
\t\t\t\t\t\t\t<p style=\"word-break: break-all\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "content", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_post", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 23, $this->source); })()), "slug", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\" class=\"btn\" style=\"width: 70%\">Posted by ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 23, $this->source); })()), "postUser", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
        echo " in ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 23, $this->source); })()), "publishedAt", [], "any", false, false, false, 23), "d"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 23, $this->source); })()), "publishedAt", [], "any", false, false, false, 23), "F"), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/comment.png"), "html", null, true);
        echo "\" style=\"width: 20px;\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 24, $this->source); })()), "numComments", [], "any", false, false, false, 24), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favorite.png"), "html", null, true);
        echo "\" style=\"width: 20px;\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 25, $this->source); })()), "numLikes", [], "any", false, false, false, 25), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_like", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "slug", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\">LIKE</a></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h2>Comentarios</h2>
\t\t\t\t\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 35, $this->source); })()), "comments", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 36
            echo "\t\t\t\t\t\t<div class=\"section_1\">
                            <h3>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t<p>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "text", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"single_post.html\" style=\"width: 100%\">Posted by ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo " in ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "publishedAt", [], "any", false, false, false, 40), "d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "publishedAt", [], "any", false, false, false, 40), "F"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t\t\t";
        echo twig_include($this->env, $context, "partials/_form_comment.html.twig");
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t
                    <div class=\"col-sm-6\">
                        <h2>Post recientes</h2>
\t\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 50
            echo "                        <div class=\"section_1\">
                            <h3>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 51), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("single_post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn\" href=\"single_post.html\" style=\"width: 70%\">Posted by ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "postUser", [], "any", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
            echo " in ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 53), "d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 53), "F"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t<img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/comment.png"), "html", null, true);
            echo "\" style=\"width: 20px;\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "numComments", [], "any", false, false, false, 54), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favorite.png"), "html", null, true);
            echo "\" style=\"width: 20px;\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "numLikes", [], "any", false, false, false, 55), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
                        </div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </div>
                </div>
\t\t\t</div>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/single_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 59,  219 => 55,  213 => 54,  203 => 53,  198 => 51,  195 => 50,  191 => 49,  182 => 44,  168 => 40,  163 => 38,  159 => 37,  156 => 36,  152 => 35,  140 => 26,  134 => 25,  128 => 24,  118 => 23,  113 => 21,  98 => 9,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Single Post{% endblock %}
{% block body %}
\t\t<div id=\"fh5co-intro-section\" class=\"section-overlay animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t<div class=\"fh5co-intro-cover text-center\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url({{asset('images/index/gallery/' ~ post.image) }});\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 float-overlay\">
\t\t\t\t\t\t\t<h2>{{post.title}}</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"animate-box\">
\t\t\t<div class=\"blog_section_2\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<div class=\"section_1\">
\t\t\t\t\t\t\t<p style=\"word-break: break-all\">{{post.content}}</p>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"{{ path('single_post', {'slug': post.slug}) }}\" class=\"btn\" style=\"width: 70%\">Posted by {{post.postUser.name}} in {{post.publishedAt | date('d') }} {{ post.publishedAt | date('F') }}</a>
\t\t\t\t\t\t\t\t<img src=\"{{asset('images/comment.png')}}\" style=\"width: 20px;\"> {{ post.numComments }}
\t\t\t\t\t\t\t\t<img src=\"{{asset('images/favorite.png')}}\" style=\"width: 20px;\"> {{post.numLikes}}
\t\t\t\t\t\t\t\t<a href=\"{{ path('post_like', {slug: post.slug}) }}\">LIKE</a></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h2>Comentarios</h2>
\t\t\t\t\t\t{% for comment in post.comments %}
\t\t\t\t\t\t<div class=\"section_1\">
                            <h3>{{comment.name}}</h3>
\t\t\t\t\t\t\t<p>{{comment.text}}</p>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a class=\"btn\" href=\"single_post.html\" style=\"width: 100%\">Posted by {{comment.name}} in {{comment.publishedAt | date('d') }} {{ comment.publishedAt | date('F') }}</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{{ include ('partials/_form_comment.html.twig') }}
\t\t\t\t\t</div>
\t\t\t\t\t
                    <div class=\"col-sm-6\">
                        <h2>Post recientes</h2>
\t\t\t\t\t\t{% for post in posts %}
                        <div class=\"section_1\">
                            <h3>{{post.title}}</h3>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<a href=\"{{ path('single_post', {'slug': post.slug}) }}\" class=\"btn\" href=\"single_post.html\" style=\"width: 70%\">Posted by {{post.postUser.name}} in {{post.publishedAt | date('d') }} {{ post.publishedAt | date('F') }}</a>
\t\t\t\t\t\t\t\t<img src=\"{{asset('images/comment.png')}}\" style=\"width: 20px;\"> {{ post.numComments }}
\t\t\t\t\t\t\t\t<img src=\"{{asset('images/favorite.png')}}\" style=\"width: 20px;\"> {{post.numLikes}}
\t\t\t\t\t\t\t</div>
                        </div>
\t\t\t\t\t\t{% endfor %}
                    </div>
                </div>
\t\t\t</div>
        </div>
{% endblock %}
", "blog/single_post.html.twig", "/home/alumno/Documentos/CandelaBlog/templates/blog/single_post.html.twig");
    }
}
