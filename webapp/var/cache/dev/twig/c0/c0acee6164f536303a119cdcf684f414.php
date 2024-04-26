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

/* jury/import_export.html.twig */
class __TwigTemplate_46ef6065561a0c38d88b22cdecbcec3e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/import_export.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/import_export.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/import_export.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/import_export.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Import and export - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <h1>Import and export</h1>

    <div class=\"importexport\">
    <h2 id=\"problemarchive\">Problems</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Import archive</h3>
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["problem_form"]) || array_key_exists("problem_form", $context) ? $context["problem_form"] : (function () { throw new RuntimeError('Variable "problem_form" does not exist.', 15, $this->source); })()), 'form');
        echo "
            </div>
        </div>
    </div>

    <h2 id=\"contests\">Contests</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Import JSON / YAML</h3>
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contest_import_form"]) || array_key_exists("contest_import_form", $context) ? $context["contest_import_form"] : (function () { throw new RuntimeError('Variable "contest_import_form" does not exist.', 25, $this->source); })()), 'form');
        echo "
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Export YAML</h3>
                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contest_export_form"]) || array_key_exists("contest_export_form", $context) ? $context["contest_export_form"] : (function () { throw new RuntimeError('Variable "contest_export_form" does not exist.', 31, $this->source); })()), 'form');
        echo "
            </div>
        </div>
    </div>

    <h2 id=\"problems\">Problems</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Import JSON / YAML</h3>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["problems_import_form"]) || array_key_exists("problems_import_form", $context) ? $context["problems_import_form"] : (function () { throw new RuntimeError('Variable "problems_import_form" does not exist.', 41, $this->source); })()), 'form');
        echo "
            </div>
        </div>
    </div>


    <h2 id=\"teams\">Teams &amp; groups</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
            <h3>Import tab-separated</h3>
                ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tsv_form"]) || array_key_exists("tsv_form", $context) ? $context["tsv_form"] : (function () { throw new RuntimeError('Variable "tsv_form" does not exist.', 52, $this->source); })()), 'form');
        echo "
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Export tab-separated</h3>
                <ul>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "groups", 1 => "teams"]);
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 60
            echo "                    <li>
                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_tsv_export", ["type" => $context["type"]]), "html", null, true);
            echo "\"><code>";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo ".tsv</code></a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
            <h3>Import JSON / YAML</h3>
                ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["json_form"]) || array_key_exists("json_form", $context) ? $context["json_form"] : (function () { throw new RuntimeError('Variable "json_form" does not exist.', 72, $this->source); })()), 'form');
        echo "
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
            <h3>Import teams from ICPC CMS</h3>
                ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["icpccms_form"]) || array_key_exists("icpccms_form", $context) ? $context["icpccms_form"] : (function () { throw new RuntimeError('Variable "icpccms_form" does not exist.', 80, $this->source); })()), 'form_start');
        echo "
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["icpccms_form"]) || array_key_exists("icpccms_form", $context) ? $context["icpccms_form"] : (function () { throw new RuntimeError('Variable "icpccms_form" does not exist.', 81, $this->source); })()), "contest_id", [], "any", false, false, false, 81), 'row');
        echo "
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["icpccms_form"]) || array_key_exists("icpccms_form", $context) ? $context["icpccms_form"] : (function () { throw new RuntimeError('Variable "icpccms_form" does not exist.', 82, $this->source); })()), "access_token", [], "any", false, false, false, 82), 'row');
        echo "
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["icpccms_form"]) || array_key_exists("icpccms_form", $context) ? $context["icpccms_form"] : (function () { throw new RuntimeError('Variable "icpccms_form" does not exist.', 83, $this->source); })()), "fetch_teams", [], "any", false, false, false, 83), 'widget');
        echo "
                ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["icpccms_form"]) || array_key_exists("icpccms_form", $context) ? $context["icpccms_form"] : (function () { throw new RuntimeError('Variable "icpccms_form" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>

    <h2 id=\"results\">Results</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
        </div>
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Export &lt;html&gt;</h3>
                    <ul>
                        <li>
                            <code>results.html</code>:
                            <ul>
                                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort_orders"]) || array_key_exists("sort_orders", $context) ? $context["sort_orders"] : (function () { throw new RuntimeError('Variable "sort_orders" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["sort_order"] => $context["names"]) {
            // line 101
            echo "                                    <li>
                                        <a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "results", "sort_order" => $context["sort_order"]]), "html", null, true);
            echo "\">for sort order ";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "</a>
                                        (";
            // line 103
            echo twig_escape_filter($this->env, twig_join_filter($context["names"], ", "), "html", null, true);
            echo ")
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sort_order'], $context['names'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                            </ul>
                        </li>
                    <li>
                        <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_html_export", ["type" => "clarifications"]);
        echo "\" target=\"_blank\"><code>clarifications.html</code></a>
                    </li>
                    </ul>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
        </div>
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Export tab-separated</h3>
                    <ul>
                        <li>
                            <code>results.tsv</code>:
                            <ul>
                            ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sort_orders"]) || array_key_exists("sort_orders", $context) ? $context["sort_orders"] : (function () { throw new RuntimeError('Variable "sort_orders" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["sort_order"] => $context["names"]) {
            // line 126
            echo "                                <li>
                                    <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_tsv_export", ["type" => "results", "sort_order" => $context["sort_order"]]), "html", null, true);
            echo "\">for sort order ";
            echo twig_escape_filter($this->env, $context["sort_order"], "html", null, true);
            echo "</a>
                                    (";
            // line 128
            echo twig_escape_filter($this->env, twig_join_filter($context["names"], ", "), "html", null, true);
            echo ")
                                 </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sort_order'], $context['names'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                            </ul>
                        </li>
                    </ul>
             </div>
        </div>
    </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/import_export.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 131,  307 => 128,  301 => 127,  298 => 126,  294 => 125,  275 => 109,  270 => 106,  261 => 103,  255 => 102,  252 => 101,  248 => 100,  229 => 84,  225 => 83,  221 => 82,  217 => 81,  213 => 80,  202 => 72,  192 => 64,  181 => 61,  178 => 60,  174 => 59,  164 => 52,  150 => 41,  137 => 31,  128 => 25,  115 => 15,  104 => 6,  91 => 5,  65 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}Import and export - {{ parent() }}{% endblock %}

{% block content %}

    <h1>Import and export</h1>

    <div class=\"importexport\">
    <h2 id=\"problemarchive\">Problems</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Import archive</h3>
                {{ form(problem_form) }}
            </div>
        </div>
    </div>

    <h2 id=\"contests\">Contests</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Import JSON / YAML</h3>
                {{ form(contest_import_form) }}
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Export YAML</h3>
                {{ form(contest_export_form) }}
            </div>
        </div>
    </div>

    <h2 id=\"problems\">Problems</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Import JSON / YAML</h3>
                {{ form(problems_import_form) }}
            </div>
        </div>
    </div>


    <h2 id=\"teams\">Teams &amp; groups</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
            <h3>Import tab-separated</h3>
                {{ form(tsv_form) }}
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Export tab-separated</h3>
                <ul>
                {% for type in ['groups', 'teams'] %}
                    <li>
                        <a href=\"{{ path('jury_tsv_export', {'type': type}) }}\"><code>{{ type }}.tsv</code></a>
                    </li>
                {% endfor %}
                </ul>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
            <h3>Import JSON / YAML</h3>
                {{ form(json_form) }}
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"tile\">
            <h3>Import teams from ICPC CMS</h3>
                {{ form_start(icpccms_form) }}
                {{ form_row(icpccms_form.contest_id) }}
                {{ form_row(icpccms_form.access_token) }}
                {{ form_widget(icpccms_form.fetch_teams) }}
                {{ form_end(icpccms_form) }}
            </div>
        </div>
    </div>

    <h2 id=\"results\">Results</h2>
    <div class=\"row\">
        <div class=\"col-md-6\">
        </div>
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Export &lt;html&gt;</h3>
                    <ul>
                        <li>
                            <code>results.html</code>:
                            <ul>
                                {% for sort_order, names in sort_orders %}
                                    <li>
                                        <a href=\"{{ path('jury_html_export', {'type': 'results', 'sort_order': sort_order}) }}\">for sort order {{ sort_order }}</a>
                                        ({{ names | join(', ') }})
                                    </li>
                                {% endfor %}
                            </ul>
                        </li>
                    <li>
                        <a href=\"{{ path('jury_html_export', {'type': 'clarifications'}) }}\" target=\"_blank\"><code>clarifications.html</code></a>
                    </li>
                    </ul>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
        </div>
        <div class=\"col-md-6\">
            <div class=\"tile\">
                <h3>Export tab-separated</h3>
                    <ul>
                        <li>
                            <code>results.tsv</code>:
                            <ul>
                            {% for sort_order, names in sort_orders %}
                                <li>
                                    <a href=\"{{ path('jury_tsv_export', {'type': 'results', 'sort_order': sort_order}) }}\">for sort order {{ sort_order }}</a>
                                    ({{ names | join(', ') }})
                                 </li>
                            {% endfor %}
                            </ul>
                        </li>
                    </ul>
             </div>
        </div>
    </div>
    </div>

{% endblock %}
", "jury/import_export.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/import_export.html.twig");
    }
}
