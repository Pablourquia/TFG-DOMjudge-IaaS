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

/* jury/team_category.html.twig */
class __TwigTemplate_b5e5729269b3da994487ba3b4bb77872 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team_category.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team_category.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team_category.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team_category.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team_category.html.twig", 1);
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

        echo "Category ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 4, $this->source); })()), "categoryid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Category ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 20, $this->source); })()), "categoryid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 25, $this->source); })()), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>ICPC ID</th>
                    <td>
                        ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 31, $this->source); })()), "icpcid", [], "any", false, false, false, 31)) {
            // line 32
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 32, $this->source); })()), "icpcid", [], "any", false, false, false, 32), "html", null, true);
            echo "
                        ";
        } else {
            // line 34
            echo "                            -
                        ";
        }
        // line 36
        echo "                    </td>
                </tr>
                <tr>
                    <th>Sortorder</th>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 40, $this->source); })()), "sortorder", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 42, $this->source); })()), "color", [], "any", false, false, false, 42)) {
            // line 43
            echo "                    <tr>
                        <th>Color</th>
                        <td style=\"background-color: ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 45, $this->source); })()), "color", [], "any", false, false, false, 45), "html", null, true);
            echo ";\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 45, $this->source); })()), "color", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 48
        echo "                <tr>
                    <th>Visible</th>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 50, $this->source); })()), "visible", [], "any", false, false, false, 50)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Allow self-registration</th>
                    <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 54, $this->source); })()), "allowSelfRegistration", [], "any", false, false, false, 54)), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
    </div>";
        // line 60
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 61
            echo "<p>
            ";
            // line 62
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category_edit", ["categoryId" => twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 62, $this->source); })()), "categoryid", [], "any", false, false, false, 62)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 63
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category_delete", ["categoryId" => twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 63, $this->source); })()), "categoryid", [], "any", false, false, false, 63)]), "Delete", "danger", "trash-alt", true);
            echo "
            ";
            // line 64
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category_request_remaining", ["categoryId" => twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 64, $this->source); })()), "categoryid", [], "any", false, false, false, 64)]), "Judge remaining testcases", "secondary", "gavel");
            echo "
        </p>
    ";
        }
        // line 67
        echo "
    <h3>Teams</h3>
    ";
        // line 69
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 69, $this->source); })()), "teams", [], "any", false, false, false, 69))) {
            // line 70
            echo "        <p class=\"nodata\">no teams</p>
    ";
        } else {
            // line 72
            echo "        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"data-table table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th style=\"text-align: right;\">ID</th>
                        <th>Teamname</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["teamCategory"]) || array_key_exists("teamCategory", $context) ? $context["teamCategory"] : (function () { throw new RuntimeError('Variable "teamCategory" does not exist.', 82, $this->source); })()), "teams", [], "any", false, false, false, 82));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 83
                echo "                        <tr>
                            <td style=\"text-align: right\">
                                <a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\">";
                echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge($context["team"], "t");
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 88)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "effectiveName", [], "any", false, false, false, 88), "html", null, true);
                echo "</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                    </tbody>
                </table>
            </div>
        </div>

        <h3>Submissions</h3>

        <div data-ajax-refresh-target>";
            // line 100
            $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/team_category.html.twig", 100)->display(twig_array_merge($context, ["showTestcases" => false]));
            // line 101
            echo "        </div>
    ";
        }
        // line 103
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/team_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 103,  313 => 101,  311 => 100,  302 => 92,  290 => 88,  282 => 85,  278 => 83,  274 => 82,  262 => 72,  258 => 70,  256 => 69,  252 => 67,  246 => 64,  242 => 63,  238 => 62,  235 => 61,  233 => 60,  226 => 54,  219 => 50,  215 => 48,  207 => 45,  203 => 43,  201 => 42,  196 => 40,  190 => 36,  186 => 34,  180 => 32,  178 => 31,  173 => 28,  167 => 25,  163 => 23,  161 => 22,  156 => 20,  146 => 13,  143 => 12,  130 => 11,  115 => 8,  110 => 7,  97 => 6,  69 => 4,  55 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Category {{ teamCategory.categoryid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Category {{ teamCategory.name }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>{{ teamCategory.categoryid }}</td>
                </tr>
                {% if showExternalId(teamCategory) %}
                    <tr>
                        <th>External ID</th>
                        <td>{{ teamCategory.externalid }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>ICPC ID</th>
                    <td>
                        {% if teamCategory.icpcid %}
                            {{ teamCategory.icpcid }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Sortorder</th>
                    <td>{{ teamCategory.sortorder }}</td>
                </tr>
                {% if teamCategory.color %}
                    <tr>
                        <th>Color</th>
                        <td style=\"background-color: {{ teamCategory.color }};\">{{ teamCategory.color }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Visible</th>
                    <td>{{ teamCategory.visible | printYesNo }}</td>
                </tr>
                <tr>
                    <th>Allow self-registration</th>
                    <td>{{ teamCategory.allowSelfRegistration | printYesNo }}</td>
                </tr>
            </table>
        </div>
    </div>

    {%- if is_granted('ROLE_ADMIN') -%}
        <p>
            {{ button(path('jury_team_category_edit', {'categoryId': teamCategory.categoryid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_team_category_delete', {'categoryId': teamCategory.categoryid}), 'Delete', 'danger', 'trash-alt', true) }}
            {{ button(path('jury_team_category_request_remaining', {'categoryId': teamCategory.categoryid}), 'Judge remaining testcases', 'secondary', 'gavel') }}
        </p>
    {% endif %}

    <h3>Teams</h3>
    {% if teamCategory.teams is empty %}
        <p class=\"nodata\">no teams</p>
    {% else %}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"data-table table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th style=\"text-align: right;\">ID</th>
                        <th>Teamname</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for team in teamCategory.teams %}
                        <tr>
                            <td style=\"text-align: right\">
                                <a href=\"{{ path('jury_team', {'teamId': team.teamid}) }}\">{{ team | entityIdBadge('t') }}</a>
                            </td>
                            <td>
                                <a href=\"{{ path('jury_team', {'teamId': team.teamid}) }}\">{{ team.effectiveName }}</a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        <h3>Submissions</h3>

        <div data-ajax-refresh-target>
            {%- include 'jury/partials/submission_list.html.twig' with {showTestcases: false} %}
        </div>
    {% endif %}

{% endblock %}
", "jury/team_category.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/team_category.html.twig");
    }
}
