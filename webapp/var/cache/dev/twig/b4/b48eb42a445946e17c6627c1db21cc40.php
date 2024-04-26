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

/* jury/contests.html.twig */
class __TwigTemplate_bc96b5ab0fb8201dbc5acf15698525be extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/contests.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/contests.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/contests.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contests.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contests.html.twig", 1);
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

        echo "Contests - ";
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
        echo "    <h1>Contests</h1>

    <h3>Current contests</h3>

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contest"]) {
            // line 17
            echo "        ";
            // line 18
            echo "        <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"contest\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "cid", [], "any", false, false, false, 19), "html", null, true);
            echo "\"/>
            <div class=\"row mb-4\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "shortname", [], "any", false, false, false, 24), "html", null, true);
            echo " - c";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contest"], "cid", [], "any", false, false, false, 24), "html", null, true);
            echo ")
                            ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["contest"], "locked", [], "any", false, false, false, 25)) {
                // line 26
                echo "                                <i class=\"fas fa-lock\"></i>
                            ";
            }
            // line 28
            echo "                        </div>
                        <div class=\"card-body\">
                            ";
            // line 30
            if (( !twig_get_attribute($this->env, $this->source, $context["contest"], "starttimeEnabled", [], "any", false, false, false, 30) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["contest"], "finalizetime", [], "any", false, false, false, 30)))) {
                // line 31
                echo "                                <div class=\"alert alert-warning\">
                                    <strong>Warning:</strong> start time is undefined, but contest is finalized!
                                </div>
                            ";
            }
            // line 35
            echo "                            <table class=\"table table-hover\">
                                <tbody>
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["contest"], "dataForJuryInterface", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["type"] => $context["data"]) {
                // line 38
                echo "                                    <tr>
                                        <td class=\"";
                // line 39
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 39), "")) : ("")), "html", null, true);
                echo "\">
                                            ";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["data"], "icon", [], "any", true, true, false, 40)) {
                    // line 41
                    echo "                                                <i class=\"fas fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "icon", [], "any", false, false, false, 41), "html", null, true);
                    echo "\"></i>
                                            ";
                }
                // line 43
                echo "                                        </td>
                                        <td class=\"";
                // line 44
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 44), "")) : ("")), "html", null, true);
                echo "\"><b>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "label", [], "any", false, false, false, 44), "html", null, true);
                echo ":</b></td>
                                        <td class=\"";
                // line 45
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["data"], "class", [], "any", false, false, false, 45), "")) : ("")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "time", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                                        ";
                // line 46
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 47
                    echo "                                            <td>
                                                ";
                    // line 48
                    if (twig_get_attribute($this->env, $this->source, $context["data"], "show_button", [], "any", false, false, false, 48)) {
                        // line 49
                        echo "                                                    <input type=\"submit\" class=\"btn btn-primary btn-sm\"
                                                           name=\"donow[";
                        // line 50
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                        echo " now\"/>
                                                ";
                    }
                    // line 52
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", true, true, false, 52)) {
                        // line 53
                        echo "                                                    <input type=\"submit\" class=\"btn btn-primary btn-sm\"
                                                           name=\"donow[";
                        // line 54
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", false, false, false, 54), "type", [], "any", false, false, false, 54), "html", null, true);
                        echo "]\"
                                                           value=\"";
                        // line 55
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "extra_button", [], "any", false, false, false, 55), "label", [], "any", false, false, false, 55), "html", null, true);
                        echo "\"/>
                                                ";
                    }
                    // line 57
                    echo "                                            </td>
                                        ";
                }
                // line 59
                echo "                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "        ";
            if (twig_test_empty((isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 69, $this->source); })()))) {
                // line 70
                echo "            <div class=\"alert alert-danger\">
                No upcoming contest
            </div>
        ";
            } else {
                // line 74
                echo "            <div class=\"alert alert-warning\">
                <strong>No active contest.</strong> Upcoming:<br/>
                <p>
                    <i>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 77, $this->source); })()), "name", [], "any", false, false, false, 77), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 77, $this->source); })()), "shortname", [], "any", false, false, false, 77), "html", null, true);
                echo ")</i>;
                    active from ";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 78, $this->source); })()), "activatetime", [], "any", false, false, false, 78), "D d M Y H:i:s T"), "html", null, true);
                echo "
                </p>
                <form action=\"";
                // line 80
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
                echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"contest\" value=\"";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["upcoming_contest"]) || array_key_exists("upcoming_contest", $context) ? $context["upcoming_contest"] : (function () { throw new RuntimeError('Variable "upcoming_contest" does not exist.', 81, $this->source); })()), "cid", [], "any", false, false, false, 81), "html", null, true);
                echo "\"/>
                    <input type=\"submit\" class=\"btn btn-primary\" name=\"donow[activate]\" value=\"Activate now\"/>
                </form>
            </div>
        ";
            }
            // line 86
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
    <h3>All available contests</h3>

    ";
        // line 90
        echo twig_call_macro($macros["macros"], "macro_table", [(isset($context["contests_table"]) || array_key_exists("contests_table", $context) ? $context["contests_table"] : (function () { throw new RuntimeError('Variable "contests_table" does not exist.', 90, $this->source); })()), (isset($context["table_fields"]) || array_key_exists("table_fields", $context) ? $context["table_fields"] : (function () { throw new RuntimeError('Variable "table_fields" does not exist.', 90, $this->source); })())], 90, $context, $this->getSourceContext());
        echo "

    ";
        // line 92
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 93
            echo "        <p>
            ";
            // line 94
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_add"), "Add new contest", "primary", "plus");
            echo "
            ";
            // line 95
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_import_export", ["_fragment" => "contests"]), "Import contest", "primary", "upload");
            echo "
        </p>
    ";
        }
        // line 98
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/contests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 98,  348 => 95,  344 => 94,  341 => 93,  339 => 92,  334 => 90,  329 => 87,  323 => 86,  315 => 81,  311 => 80,  306 => 78,  300 => 77,  295 => 74,  289 => 70,  286 => 69,  274 => 61,  267 => 59,  263 => 57,  258 => 55,  254 => 54,  251 => 53,  248 => 52,  241 => 50,  238 => 49,  236 => 48,  233 => 47,  231 => 46,  225 => 45,  219 => 44,  216 => 43,  210 => 41,  208 => 40,  204 => 39,  201 => 38,  197 => 37,  193 => 35,  187 => 31,  185 => 30,  181 => 28,  177 => 26,  175 => 25,  167 => 24,  159 => 19,  154 => 18,  152 => 17,  147 => 16,  141 => 12,  128 => 11,  113 => 8,  108 => 7,  95 => 6,  69 => 4,  55 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Contests - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}
    <h1>Contests</h1>

    <h3>Current contests</h3>

    {% for contest in current_contests %}
        {# TODO: at some point use real Symfony forms here? Is maybe hard because of all the submit buttons... #}
        <form action=\"{{ path('jury_contests') }}\" method=\"post\">
            <input type=\"hidden\" name=\"contest\" value=\"{{ contest.cid }}\"/>
            <div class=\"row mb-4\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            {{ contest.name }} ({{ contest.shortname }} - c{{ contest.cid }})
                            {% if contest.locked %}
                                <i class=\"fas fa-lock\"></i>
                            {% endif %}
                        </div>
                        <div class=\"card-body\">
                            {% if not contest.starttimeEnabled and contest.finalizetime is not empty %}
                                <div class=\"alert alert-warning\">
                                    <strong>Warning:</strong> start time is undefined, but contest is finalized!
                                </div>
                            {% endif %}
                            <table class=\"table table-hover\">
                                <tbody>
                                {% for type, data in contest.dataForJuryInterface %}
                                    <tr>
                                        <td class=\"{{ data.class|default('') }}\">
                                            {% if data.icon is defined %}
                                                <i class=\"fas fa-{{ data.icon }}\"></i>
                                            {% endif %}
                                        </td>
                                        <td class=\"{{ data.class|default('') }}\"><b>{{ data.label }}:</b></td>
                                        <td class=\"{{ data.class|default('') }}\">{{ data.time }}</td>
                                        {% if is_granted('ROLE_ADMIN') %}
                                            <td>
                                                {% if data.show_button %}
                                                    <input type=\"submit\" class=\"btn btn-primary btn-sm\"
                                                           name=\"donow[{{ type }}]\" value=\"{{ type }} now\"/>
                                                {% endif %}
                                                {% if data.extra_button is defined %}
                                                    <input type=\"submit\" class=\"btn btn-primary btn-sm\"
                                                           name=\"donow[{{ data.extra_button.type }}]\"
                                                           value=\"{{ data.extra_button.label }}\"/>
                                                {% endif %}
                                            </td>
                                        {% endif %}
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    {% else %}
        {% if upcoming_contest is empty %}
            <div class=\"alert alert-danger\">
                No upcoming contest
            </div>
        {% else %}
            <div class=\"alert alert-warning\">
                <strong>No active contest.</strong> Upcoming:<br/>
                <p>
                    <i>{{ upcoming_contest.name }} ({{ upcoming_contest.shortname }})</i>;
                    active from {{ upcoming_contest.activatetime | printtime('D d M Y H:i:s T') }}
                </p>
                <form action=\"{{ path('jury_contests') }}\" method=\"post\">
                    <input type=\"hidden\" name=\"contest\" value=\"{{ upcoming_contest.cid }}\"/>
                    <input type=\"submit\" class=\"btn btn-primary\" name=\"donow[activate]\" value=\"Activate now\"/>
                </form>
            </div>
        {% endif %}
    {% endfor %}

    <h3>All available contests</h3>

    {{ macros.table(contests_table, table_fields) }}

    {% if is_granted('ROLE_ADMIN') %}
        <p>
            {{ button(path('jury_contest_add'), 'Add new contest', 'primary', 'plus') }}
            {{ button(path('jury_import_export', {'_fragment':'contests'}), 'Import contest', 'primary', 'upload') }}
        </p>
    {% endif %}

{% endblock %}
", "jury/contests.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/contests.html.twig");
    }
}
