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

/* jury/export/clarifications.html.twig */
class __TwigTemplate_a9adc40b5069ca131e6567ceee9bf3db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/export/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/export/clarifications.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/export/clarifications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/export/clarifications.html.twig"));

        $this->parent = $this->loadTemplate("jury/export/layout.html.twig", "jury/export/clarifications.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
        h2 {
            padding-top: 0;
        }

        td:first-child {
            padding-right: 10px;
        }

        tr.top-line {
            border-top: 4px solid #ccc;
        }

        tr.top-line td {
            padding-top: 8px;
        }

        .page-break {
            page-break-before: always;
        }

        /* CSS from Bootstrap for the team id badge. */
        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
        }
        .badge-secondary {
            color: #fff;
            background-color: #6c757d;
        }
    </style>

    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grouped"]) || array_key_exists("grouped", $context) ? $context["grouped"] : (function () { throw new RuntimeError('Variable "grouped" does not exist.', 43, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["queue"] => $context["clarifications"]) {
            // line 44
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 44)) {
                // line 45
                echo "            <div class=\"page-break\"></div>
            <h1>";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 46, $this->source); })()), "html", null, true);
                echo "</h1>
        ";
            }
            // line 48
            echo "        <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 48, $this->source); })()), $context["queue"], [], "array", false, false, false, 48), "html", null, true);
            echo "</h2>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Contest time</th>
                <th scope=\"col\">From</th>
                <th scope=\"col\">To</th>
                <th scope=\"col\">Subject</th>
                <th scope=\"col\">Answered?</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["clarifications"]);
            foreach ($context['_seq'] as $context["_key"] => $context["clarification"]) {
                // line 62
                echo "                <tr class=\"top-line\">
                    <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarId", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                    <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["clarification"], "submitTime", [], "any", false, false, false, 64), null, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 64, $this->source); })())), "html", null, true);
                echo "</td>
                    <td>
                        ";
                // line 66
                if (twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 66)) {
                    // line 67
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 67), "effectiveName", [], "any", false, false, false, 67), "html", null, true);
                    echo " ";
                    echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 67), "t");
                    echo "
                        ";
                } else {
                    // line 69
                    echo "                            Jury (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 69), "html", null, true);
                    echo ")
                        ";
                }
                // line 71
                echo "                    </td>
                    <td>
                        ";
                // line 73
                if ((twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 73) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 73)))) {
                    // line 74
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 74), "effectiveName", [], "any", false, false, false, 74), "html", null, true);
                    echo " ";
                    echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 74), "t");
                    echo "
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 75
$context["clarification"], "sender", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "                            Jury
                        ";
                } else {
                    // line 78
                    echo "                            All
                        ";
                }
                // line 80
                echo "                    </td>
                    <td>
                        ";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 83, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 83), "probid", [], "any", false, false, false, 83), [], "array", false, false, false, 83), "shortName", [], "any", false, false, false, 83), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83), "html", null, true);
                    echo "
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 84
$context["clarification"], "category", [], "any", false, false, false, 84) && twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 84), [], "array", true, true, false, 84))) {
                    // line 85
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 85, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 85), [], "array", false, false, false, 85), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 87
                    echo "                            General
                        ";
                }
                // line 89
                echo "                    </td>
                    <td>
                        ";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["clarification"], "answered", [], "any", false, false, false, 91)), "html", null, true);
                echo "
                    </td>
                </tr>
                <tr>
                    <td><b>Content</b></td>
                    <td colspan=\"5\">
                        <pre>";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->wrapUnquoted(twig_get_attribute($this->env, $this->source, $context["clarification"], "body", [], "any", false, false, false, 97), 80), "html", null, true);
                echo "</pre>
                    </td>
                </tr>
                ";
                // line 100
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["clarification"], "replies", [], "any", false, false, false, 100))) {
                    // line 101
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["clarification"], "replies", [], "any", false, false, false, 101));
                    foreach ($context['_seq'] as $context["idx"] => $context["reply"]) {
                        // line 102
                        echo "                        <tr>
                            <td>
                                <b>
                                    ";
                        // line 105
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "replies", [], "any", false, false, false, 105), "count", [], "any", false, false, false, 105) > 1)) {
                            // line 106
                            echo "                                        Reply #";
                            echo twig_escape_filter($this->env, ($context["idx"] + 1), "html", null, true);
                            echo "
                                    ";
                        } else {
                            // line 108
                            echo "                                        Reply
                                    ";
                        }
                        // line 110
                        echo "                                </b>
                            </td>
                            <td colspan=\"5\">
                                <pre>";
                        // line 113
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->wrapUnquoted(twig_get_attribute($this->env, $this->source, $context["reply"], "body", [], "any", false, false, false, 113), 80), "html", null, true);
                        echo "</pre>
                            </td>
                        </tr>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['idx'], $context['reply'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 117
                    echo "                ";
                }
                // line 118
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clarification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "            </tbody>
        </table>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['queue'], $context['clarifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/export/clarifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 119,  304 => 118,  301 => 117,  291 => 113,  286 => 110,  282 => 108,  276 => 106,  274 => 105,  269 => 102,  264 => 101,  262 => 100,  256 => 97,  247 => 91,  243 => 89,  239 => 87,  233 => 85,  231 => 84,  224 => 83,  222 => 82,  218 => 80,  214 => 78,  210 => 76,  208 => 75,  201 => 74,  199 => 73,  195 => 71,  189 => 69,  181 => 67,  179 => 66,  174 => 64,  170 => 63,  167 => 62,  163 => 61,  146 => 48,  141 => 46,  138 => 45,  135 => 44,  118 => 43,  77 => 4,  64 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/export/layout.html.twig' %}

{% block body %}
    <style>
        h2 {
            padding-top: 0;
        }

        td:first-child {
            padding-right: 10px;
        }

        tr.top-line {
            border-top: 4px solid #ccc;
        }

        tr.top-line td {
            padding-top: 8px;
        }

        .page-break {
            page-break-before: always;
        }

        /* CSS from Bootstrap for the team id badge. */
        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
        }
        .badge-secondary {
            color: #fff;
            background-color: #6c757d;
        }
    </style>

    {% for queue, clarifications in grouped %}
        {% if not loop.first %}
            <div class=\"page-break\"></div>
            <h1>{{ title }}</h1>
        {% endif %}
        <h2>{{ queues[queue] }}</h2>
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Contest time</th>
                <th scope=\"col\">From</th>
                <th scope=\"col\">To</th>
                <th scope=\"col\">Subject</th>
                <th scope=\"col\">Answered?</th>
            </tr>
            </thead>
            <tbody>
            {% for clarification in clarifications %}
                <tr class=\"top-line\">
                    <td>{{ clarification.clarId }}</td>
                    <td>{{ clarification.submitTime | printtime(null, contest) }}</td>
                    <td>
                        {% if clarification.sender %}
                            {{ clarification.sender.effectiveName }} {{ clarification.sender | entityIdBadge('t') }}
                        {% else %}
                            Jury ({{ clarification.juryMember }})
                        {% endif %}
                    </td>
                    <td>
                        {% if clarification.recipient and clarification.sender is empty %}
                            {{ clarification.recipient.effectiveName }} {{ clarification.recipient | entityIdBadge('t') }}
                        {% elseif clarification.sender %}
                            Jury
                        {% else %}
                            All
                        {% endif %}
                    </td>
                    <td>
                        {% if clarification.problem %}
                            {{ problems[clarification.problem.probid].shortName }}: {{ clarification.problem.name }}
                        {% elseif clarification.category and categories[clarification.category] is defined %}
                            {{ categories[clarification.category] }}
                        {% else %}
                            General
                        {% endif %}
                    </td>
                    <td>
                        {{ clarification.answered | printYesNo }}
                    </td>
                </tr>
                <tr>
                    <td><b>Content</b></td>
                    <td colspan=\"5\">
                        <pre>{{ clarification.body | wrapUnquoted(80) }}</pre>
                    </td>
                </tr>
                {% if clarification.replies is not empty %}
                    {% for idx, reply in clarification.replies %}
                        <tr>
                            <td>
                                <b>
                                    {% if clarification.replies.count > 1 %}
                                        Reply #{{ idx + 1 }}
                                    {% else %}
                                        Reply
                                    {% endif %}
                                </b>
                            </td>
                            <td colspan=\"5\">
                                <pre>{{ reply.body | wrapUnquoted(80) }}</pre>
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    {% endfor %}
{% endblock %}
", "jury/export/clarifications.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/export/clarifications.html.twig");
    }
}
