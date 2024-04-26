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

/* jury/refresh_cache.html.twig */
class __TwigTemplate_a57a0979b3cd6e442e16b28b34da808b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'content' => [$this, 'block_content'],
            'extrafooter' => [$this, 'block_extrafooter'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/refresh_cache.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/refresh_cache.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/refresh_cache.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/refresh_cache.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/refresh_cache.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Refresh cache - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    <h1>Refresh cache</h1>

    ";
        // line 15
        if ((isset($context["doRefresh"]) || array_key_exists("doRefresh", $context) ? $context["doRefresh"] : (function () { throw new RuntimeError('Variable "doRefresh" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "        ";
            echo twig_call_macro($macros["macros"], "macro_progress_bar", [], 16, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 18
            echo "        <div class=\"alert alert-warning\">
            <h5 class=\"alert-heading\">Significant database impact</h5>
            <hr>
            <p>
                Refreshing the scoreboard cache can have a significant impact on the database load,
                and is not necessary in normal operating circumstances.
                <br/><br/>
                Refresh scoreboard cache for
                ";
            // line 26
            if ( !twig_test_empty((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 26, $this->source); })()))) {
                // line 27
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
                echo "
                ";
            } else {
                // line 29
                echo "                    all active contests
                ";
            }
            // line 31
            echo "                now?
            </p>
            <form action=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
            echo "\" method=\"post\">
                ";
            // line 34
            if ( !twig_test_empty((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 34, $this->source); })()))) {
                // line 35
                echo "                    <input type=\"hidden\" name=\"cid\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 35, $this->source); })()), "cid", [], "any", false, false, false, 35), "html", null, true);
                echo "\"/>
                ";
            }
            // line 37
            echo "                <button type=\"submit\" class=\"btn btn-danger\" name=\"refresh\">
                    <i class=\"fas fa-sync-alt\"></i> Refresh now!
                </button>
            </form>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 45
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 46
        echo "    ";
        if ((isset($context["doRefresh"]) || array_key_exists("doRefresh", $context) ? $context["doRefresh"] : (function () { throw new RuntimeError('Variable "doRefresh" does not exist.', 46, $this->source); })())) {
            // line 47
            echo "        ";
            $context["progressUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
            // line 48
            echo "        ";
            if ( !twig_test_empty((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 48, $this->source); })()))) {
                // line 49
                echo "            ";
                $context["progressUrl"] = (((isset($context["progressUrl"]) || array_key_exists("progressUrl", $context) ? $context["progressUrl"] : (function () { throw new RuntimeError('Variable "progressUrl" does not exist.', 49, $this->source); })()) . "?cid=") . twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 49, $this->source); })()), "cid", [], "any", false, false, false, 49));
                // line 50
                echo "        ";
            }
            // line 51
            echo "        ";
            echo twig_call_macro($macros["macros"], "macro_progress_loader", [(isset($context["progressUrl"]) || array_key_exists("progressUrl", $context) ? $context["progressUrl"] : (function () { throw new RuntimeError('Variable "progressUrl" does not exist.', 51, $this->source); })())], 51, $context, $this->getSourceContext());
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/refresh_cache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 51,  237 => 50,  234 => 49,  231 => 48,  228 => 47,  225 => 46,  212 => 45,  193 => 37,  187 => 35,  185 => 34,  181 => 33,  177 => 31,  173 => 29,  167 => 27,  165 => 26,  155 => 18,  149 => 16,  147 => 15,  142 => 12,  129 => 11,  114 => 8,  109 => 7,  96 => 6,  70 => 4,  56 => 1,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Refresh cache - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Refresh cache</h1>

    {% if doRefresh %}
        {{ macros.progress_bar() }}
    {% else %}
        <div class=\"alert alert-warning\">
            <h5 class=\"alert-heading\">Significant database impact</h5>
            <hr>
            <p>
                Refreshing the scoreboard cache can have a significant impact on the database load,
                and is not necessary in normal operating circumstances.
                <br/><br/>
                Refresh scoreboard cache for
                {% if current_contest is not empty %}
                    {{ current_contest.name }}
                {% else %}
                    all active contests
                {% endif %}
                now?
            </p>
            <form action=\"{{ path('jury_refresh_cache') }}\" method=\"post\">
                {% if current_contest is not empty %}
                    <input type=\"hidden\" name=\"cid\" value=\"{{ current_contest.cid }}\"/>
                {% endif %}
                <button type=\"submit\" class=\"btn btn-danger\" name=\"refresh\">
                    <i class=\"fas fa-sync-alt\"></i> Refresh now!
                </button>
            </form>
        </div>
    {% endif %}
{% endblock %}

{% block extrafooter %}
    {% if doRefresh %}
        {% set progressUrl = path('jury_refresh_cache') %}
        {% if current_contest is not empty %}
            {% set progressUrl = progressUrl ~ '?cid=' ~ current_contest.cid %}
        {% endif %}
        {{ macros.progress_loader(progressUrl) }}
    {% endif %}
{% endblock %}
", "jury/refresh_cache.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/refresh_cache.html.twig");
    }
}
