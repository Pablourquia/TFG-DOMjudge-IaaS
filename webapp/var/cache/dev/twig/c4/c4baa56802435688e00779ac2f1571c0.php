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

/* jury/external_contest.html.twig */
class __TwigTemplate_ae8b7f2f33e796d9d555f603b8e9c2b0 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/external_contest.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/external_contest.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/external_contest.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/external_contest.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/external_contest.html.twig", 1);
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

        echo "External contest - ";
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
    <style>
        .table-wrapper {
            display: block;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "
    <h1>External contest</h1>

    <div data-configuration-info>
        ";
        // line 22
        $this->loadTemplate("jury/partials/external_contest_info.html.twig", "jury/external_contest.html.twig", 22)->display($context);
        // line 23
        echo "    </div>

    <p>
        ";
        // line 26
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_external_contest_manage"), "Edit", "primary", "edit");
        echo "
    </p>

    <div data-warning-header>
        ";
        // line 30
        $this->loadTemplate("jury/partials/external_contest_warning_header.html.twig", "jury/external_contest.html.twig", 30)->display($context);
        // line 31
        echo "    </div>

    <div class=\"mb-3\">
        <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
            <label class=\"btn btn-outline-secondary ";
        // line 35
        if ((isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 35, $this->source); })())) {
            echo "active";
        }
        echo "\">
                <input type=\"checkbox\" id=\"filter-toggle\" ";
        // line 36
        if ((isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 36, $this->source); })())) {
            echo "checked";
        }
        echo " autocomplete=\"off\">
                <i class=\"fas fa-filter\"></i> Filter
            </label>
        </div>
        <div class=\"card mt-3";
        // line 40
        if ( !(isset($context["hasFilters"]) || array_key_exists("hasFilters", $context) ? $context["hasFilters"] : (function () { throw new RuntimeError('Variable "hasFilters" does not exist.', 40, $this->source); })())) {
            echo " d-none";
        }
        echo "\" id=\"filter-card\">
            <div class=\"card-body col-sm-6\">
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form');
        echo "
            </div>
        </div>
    </div>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"updateData\">
        ";
        // line 48
        $this->loadTemplate("jury/partials/external_contest_warnings.html.twig", "jury/external_contest.html.twig", 48)->display($context);
        // line 49
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 53
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 54
        echo "    <script>
        \$(function () {
            \$('#filter-toggle').on('change', function () {
                if (\$(this).is(':checked')) {
                    \$('#filter-card').removeClass('d-none');
                } else {
                    \$('#filter-card').addClass('d-none');
                }
            });

            \$('#external_configuration_warnings_filter_clear').on('click', function () {
                \$('select[data-filter-field]').val([]).trigger('change');
            });

            window.process_warnings_filter = function () {
                var \$trs = \$('div.warnings-table table.data-table > tbody > tr');

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

                var warnings_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    warnings_filter[filters[i].field] = filters[i].values;
                }

                setCookie('domjudge_external_configuration_filter', JSON.stringify(warnings_filter));

                if (filters.length === 0) {
                    \$trs.show();
                } else {
                    \$trs
                        .hide()
                        .filter(function () {
                            var \$tr = \$(this);

                            for (var i = 0; i < filters.length; i++) {
                                var value = \"\" + \$('td[data-' + filters[i].field + ']', \$tr).data(filters[i].field);
                                if (filters[i].values.indexOf(value) === -1) {
                                    return false;
                                }
                            }

                            return true;
                        })
                        .show();
                }
            };

            \$('select[data-filter-field]').on('change', process_warnings_filter);
            window.process_warnings_filter();

            window.updateData = function () {
                var \$configurationInfoData = \$('[data-new-configuration-info]');
                var \$configurationInfo = \$('[data-configuration-info]');
                \$configurationInfo.html(\$configurationInfoData.children());

                var \$warningHeaderData = \$('[data-new-warning-header]');
                var \$warningHeader = \$('[data-warning-header]');
                \$warningHeader.html(\$warningHeaderData.children());

                window.process_warnings_filter();
            };
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/external_contest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 54,  227 => 53,  212 => 49,  210 => 48,  201 => 42,  194 => 40,  185 => 36,  179 => 35,  173 => 31,  171 => 30,  164 => 26,  159 => 23,  157 => 22,  151 => 18,  138 => 17,  118 => 9,  114 => 8,  109 => 7,  96 => 6,  70 => 4,  56 => 1,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}External contest - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
    {{ macros.select2_extrahead() }}
    <style>
        .table-wrapper {
            display: block;
        }
    </style>
{% endblock %}

{% block content %}

    <h1>External contest</h1>

    <div data-configuration-info>
        {% include 'jury/partials/external_contest_info.html.twig' %}
    </div>

    <p>
        {{ button(path('jury_external_contest_manage'), 'Edit', 'primary', 'edit') }}
    </p>

    <div data-warning-header>
        {% include 'jury/partials/external_contest_warning_header.html.twig' %}
    </div>

    <div class=\"mb-3\">
        <div class=\"btn-group-toggle\" data-toggle=\"buttons\">
            <label class=\"btn btn-outline-secondary {% if hasFilters %}active{% endif %}\">
                <input type=\"checkbox\" id=\"filter-toggle\" {% if hasFilters %}checked{% endif %} autocomplete=\"off\">
                <i class=\"fas fa-filter\"></i> Filter
            </label>
        </div>
        <div class=\"card mt-3{% if not hasFilters %} d-none{% endif %}\" id=\"filter-card\">
            <div class=\"card-body col-sm-6\">
                {{ form(form) }}
            </div>
        </div>
    </div>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"updateData\">
        {% include 'jury/partials/external_contest_warnings.html.twig' %}
    </div>

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

            \$('#external_configuration_warnings_filter_clear').on('click', function () {
                \$('select[data-filter-field]').val([]).trigger('change');
            });

            window.process_warnings_filter = function () {
                var \$trs = \$('div.warnings-table table.data-table > tbody > tr');

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

                var warnings_filter = {};
                for (var i = 0; i < filters.length; i++) {
                    warnings_filter[filters[i].field] = filters[i].values;
                }

                setCookie('domjudge_external_configuration_filter', JSON.stringify(warnings_filter));

                if (filters.length === 0) {
                    \$trs.show();
                } else {
                    \$trs
                        .hide()
                        .filter(function () {
                            var \$tr = \$(this);

                            for (var i = 0; i < filters.length; i++) {
                                var value = \"\" + \$('td[data-' + filters[i].field + ']', \$tr).data(filters[i].field);
                                if (filters[i].values.indexOf(value) === -1) {
                                    return false;
                                }
                            }

                            return true;
                        })
                        .show();
                }
            };

            \$('select[data-filter-field]').on('change', process_warnings_filter);
            window.process_warnings_filter();

            window.updateData = function () {
                var \$configurationInfoData = \$('[data-new-configuration-info]');
                var \$configurationInfo = \$('[data-configuration-info]');
                \$configurationInfo.html(\$configurationInfoData.children());

                var \$warningHeaderData = \$('[data-new-warning-header]');
                var \$warningHeader = \$('[data-warning-header]');
                \$warningHeader.html(\$warningHeaderData.children());

                window.process_warnings_filter();
            };
        });
    </script>
{% endblock %}
", "jury/external_contest.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/external_contest.html.twig");
    }
}
