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

/* jury/balloons.html.twig */
class __TwigTemplate_8a45eb1254b2dcff9302986f11f44914 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/balloons.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/balloons.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/balloons.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/balloons.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/balloons.html.twig", 1);
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

        echo "Balloons ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "shortname", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "shortname", [], "any", false, false, false, 4), "")) : ("")), "html", null, true);
        echo " - ";
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
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    ";
        // line 14
        if ((null === (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "        <h1>Balloons</h1>
        <p class=\"nodata\">No active contest</p>
    ";
        } else {
            // line 18
            echo "
    <h1>Balloons - ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</h1>

    ";
            // line 21
            if ((isset($context["isfrozen"]) || array_key_exists("isfrozen", $context) ? $context["isfrozen"] : (function () { throw new RuntimeError('Variable "isfrozen" does not exist.', 21, $this->source); })())) {
                // line 22
                echo "        <div class=\"alert alert-info\"><i class=\"fas fa-snowflake\"></i> Scoreboard of c";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 22, $this->source); })()), "cid", [], "any", false, false, false, 22), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 22, $this->source); })()), "shortname", [], "any", false, false, false, 22), "html", null, true);
                echo ") is now frozen.</div>
    ";
            }
            // line 24
            echo "
    <div class=\"mb-3\">
        <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
            <label class=\"btn btn-outline-secondary ";
            // line 27
            if ((isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 27, $this->source); })())) {
                echo "active";
            }
            echo "\">
                <input type=\"checkbox\" id=\"filter-toggle\" ";
            // line 28
            if ((isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 28, $this->source); })())) {
                echo "checked";
            }
            echo " autocomplete=\"off\">
                <i class=\"fas fa-filter\"></i> Filter
            </label>
        </div>
        <div class=\"card mt-3";
            // line 32
            if ( !(isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 32, $this->source); })())) {
                echo " d-none";
            }
            echo "\" id=\"filter-card\">
            <div class=\"card-body\">
                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"affiliation-filter\">Filter on affiliation(s)</label>
                        <select id=\"affiliation-filter\" class=\"select2 form-control\" multiple data-filter-field=\"affiliation-id\"
                                data-ajax-url=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "affiliations", "select2" => true]), "html", null, true);
            echo "\">";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filteredAffiliations"]) || array_key_exists("filteredAffiliations", $context) ? $context["filteredAffiliations"] : (function () { throw new RuntimeError('Variable "filteredAffiliations" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["affiliation"]) {
                // line 40
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "affilid", [], "any", false, false, false, 40), "html", null, true);
                echo "\" selected>
                                    ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 41), "html", null, true);
                echo " (a";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "affilid", [], "any", false, false, false, 41), "html", null, true);
                echo ")
                                </option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                        </select>
                        <label for=\"location-filter\">Filter on locations(s)</label>
                        <select id=\"location-filter\" class=\"select2 form-control\" multiple data-filter-field=\"location-str\"
                                data-ajax-url=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_data", ["datatype" => "locations", "select2" => true]), "html", null, true);
            echo "\">";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filteredLocations"]) || array_key_exists("filteredLocations", $context) ? $context["filteredLocations"] : (function () { throw new RuntimeError('Variable "filteredLocations" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 49
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "room", [], "any", false, false, false, 49), "html", null, true);
                echo "\" selected>
                                    ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["location"], "room", [], "any", false, false, false, 50), "html", null, true);
                echo "
                                </option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                        </select>
                    </div>
                </div>

                <button class=\"btn btn-secondary\" id=\"clear-filters\"><i class=\"fas fa-times-circle\"></i> Clear all
                    filters
                </button>
            </div>
        </div>
    </div>
    <div data-ajax-refresh-target data-ajax-refresh-after=\"process_balloons_filter\">";
            // line 64
            $this->loadTemplate("jury/partials/balloon_list.html.twig", "jury/balloons.html.twig", 64)->display($context);
            // line 65
            echo "    </div>
    ";
        }
        // line 67
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 70
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 71
        echo "    <script>
        \$(function () {
            \$('#filter-toggle').on('change', function () {
                if (\$(this).is(':checked')) {
                    \$('#filter-card').removeClass('d-none');
                } else {
                    \$('#filter-card').addClass('d-none');
                }
            });

            \$('.select2').each(function () {
                var \$elem = \$(this);
                \$elem.select2({
                    minimumInputLength: 1,
                    ajax: {
                        url: \$elem.data('ajax-url'),
                        dataType: 'json',
                        delay: 250
                    }
                })
            });

            \$('#clear-filters').on('click', function () {
                \$('select[data-filter-field]').val([]).trigger('change');
            });

            window.process_balloons_filter = function () {
                var \$trs = \$('table.balloons-table > tbody tr');

                var filters = [];

                \$('select[data-filter-field]').each(function () {
                    var \$filterField = \$(this);
                    if (\$filterField.val().length) {
                        filters.push({
                            field: \$filterField.data('filter-field'),
                            values: \$filterField.val()
                        });
                    }
                });

                var balloons_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    balloons_filter[filters[i].field] = filters[i].values;
                }

                setCookie('domjudge_balloonsfilter', JSON.stringify(balloons_filter));

                if (filters.length === 0) {
                    \$trs.show();
                } else {
                    \$trs
                        .hide()
                        .filter(function () {
                            var \$tr = \$(this);

                            for (var i = 0; i < filters.length; i++) {
                                var value = \"\" + \$tr.data(filters[i].field);
                                if (filters[i].values.indexOf(value) === -1) {
                                    return false;
                                }
                            }

                            return true;
                        })
                        .show();
                }
            };

            \$('select[data-filter-field]').on('change', process_balloons_filter);
            window.process_balloons_filter();
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/balloons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 71,  286 => 70,  272 => 67,  268 => 65,  266 => 64,  254 => 53,  246 => 50,  241 => 49,  237 => 48,  234 => 47,  229 => 44,  219 => 41,  214 => 40,  210 => 39,  207 => 38,  196 => 32,  187 => 28,  181 => 27,  176 => 24,  168 => 22,  166 => 21,  161 => 19,  158 => 18,  153 => 15,  151 => 14,  148 => 13,  135 => 12,  120 => 9,  116 => 8,  111 => 7,  98 => 6,  70 => 4,  56 => 1,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Balloons {{ current_contest.shortname | default('') }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
    {{ macros.select2_extrahead() }}
{% endblock %}

{% block content %}

    {% if current_contest is null %}
        <h1>Balloons</h1>
        <p class=\"nodata\">No active contest</p>
    {% else %}

    <h1>Balloons - {{ current_contest.name }}</h1>

    {% if isfrozen %}
        <div class=\"alert alert-info\"><i class=\"fas fa-snowflake\"></i> Scoreboard of c{{ current_contest.cid }} ({{ current_contest.shortname }}) is now frozen.</div>
    {% endif %}

    <div class=\"mb-3\">
        <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
            <label class=\"btn btn-outline-secondary {% if hasFilters %}active{% endif %}\">
                <input type=\"checkbox\" id=\"filter-toggle\" {% if hasFilters %}checked{% endif %} autocomplete=\"off\">
                <i class=\"fas fa-filter\"></i> Filter
            </label>
        </div>
        <div class=\"card mt-3{% if not hasFilters %} d-none{% endif %}\" id=\"filter-card\">
            <div class=\"card-body\">
                <div class=\"form-row\">
                    <div class=\"form-group col-sm-6\">
                        <label for=\"affiliation-filter\">Filter on affiliation(s)</label>
                        <select id=\"affiliation-filter\" class=\"select2 form-control\" multiple data-filter-field=\"affiliation-id\"
                                data-ajax-url=\"{{ path('jury_ajax_data', {datatype: 'affiliations', select2: true}) }}\">
                            {%- for affiliation in filteredAffiliations %}
                                <option value=\"{{ affiliation.affilid }}\" selected>
                                    {{ affiliation.name }} (a{{ affiliation.affilid }})
                                </option>
                            {%- endfor %}
                        </select>
                        <label for=\"location-filter\">Filter on locations(s)</label>
                        <select id=\"location-filter\" class=\"select2 form-control\" multiple data-filter-field=\"location-str\"
                                data-ajax-url=\"{{ path('jury_ajax_data', {datatype: 'locations', select2: true}) }}\">
                            {%- for location in filteredLocations %}
                                <option value=\"{{ location.room }}\" selected>
                                    {{ location.room }}
                                </option>
                            {%- endfor %}
                        </select>
                    </div>
                </div>

                <button class=\"btn btn-secondary\" id=\"clear-filters\"><i class=\"fas fa-times-circle\"></i> Clear all
                    filters
                </button>
            </div>
        </div>
    </div>
    <div data-ajax-refresh-target data-ajax-refresh-after=\"process_balloons_filter\">
        {%- include 'jury/partials/balloon_list.html.twig' %}
    </div>
    {% endif %}

{% endblock %}

{% block extrafooter %}
    <script>
        \$(function () {
            \$('#filter-toggle').on('change', function () {
                if (\$(this).is(':checked')) {
                    \$('#filter-card').removeClass('d-none');
                } else {
                    \$('#filter-card').addClass('d-none');
                }
            });

            \$('.select2').each(function () {
                var \$elem = \$(this);
                \$elem.select2({
                    minimumInputLength: 1,
                    ajax: {
                        url: \$elem.data('ajax-url'),
                        dataType: 'json',
                        delay: 250
                    }
                })
            });

            \$('#clear-filters').on('click', function () {
                \$('select[data-filter-field]').val([]).trigger('change');
            });

            window.process_balloons_filter = function () {
                var \$trs = \$('table.balloons-table > tbody tr');

                var filters = [];

                \$('select[data-filter-field]').each(function () {
                    var \$filterField = \$(this);
                    if (\$filterField.val().length) {
                        filters.push({
                            field: \$filterField.data('filter-field'),
                            values: \$filterField.val()
                        });
                    }
                });

                var balloons_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    balloons_filter[filters[i].field] = filters[i].values;
                }

                setCookie('domjudge_balloonsfilter', JSON.stringify(balloons_filter));

                if (filters.length === 0) {
                    \$trs.show();
                } else {
                    \$trs
                        .hide()
                        .filter(function () {
                            var \$tr = \$(this);

                            for (var i = 0; i < filters.length; i++) {
                                var value = \"\" + \$tr.data(filters[i].field);
                                if (filters[i].values.indexOf(value) === -1) {
                                    return false;
                                }
                            }

                            return true;
                        })
                        .show();
                }
            };

            \$('select[data-filter-field]').on('change', process_balloons_filter);
            window.process_balloons_filter();
        });
    </script>
{% endblock %}
", "jury/balloons.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/balloons.html.twig");
    }
}
