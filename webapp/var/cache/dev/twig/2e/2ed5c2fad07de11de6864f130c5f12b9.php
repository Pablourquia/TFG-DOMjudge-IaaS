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

/* jury/partials/balloon_list.html.twig */
class __TwigTemplate_d1a058a5ef8ee8e474b366d4b9f00cf4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/balloon_list.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/balloon_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/balloon_list.html.twig"));

        // line 3
        echo "
";
        // line 4
        if (twig_test_empty((isset($context["balloons"]) || array_key_exists("balloons", $context) ? $context["balloons"] : (function () { throw new RuntimeError('Variable "balloons" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "    <div class=\"alert alert-warning\">No balloons</div>
";
        } else {
            // line 7
            echo "    <table class=\"data-table table table-hover table-striped table-sm balloons-table\" style=\"width:auto\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">&nbsp;</th>
            <th scope=\"col\">ID</th>
            <th scope=\"col\">time</th>
            <th scope=\"col\">solved</th>
            <th scope=\"col\">team</th>
            <th scope=\"col\">affiliation</th>
            <th scope=\"col\">location</th>
            <th scope=\"col\">category</th>
            <th scope=\"col\">total</th>
            <th scope=\"col\">awards</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["balloons"]) || array_key_exists("balloons", $context) ? $context["balloons"] : (function () { throw new RuntimeError('Variable "balloons" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["balloon"]) {
                // line 25
                echo "            <tr class=\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 25), "done", [], "any", false, false, false, 25)) {
                    echo "disabled";
                }
                echo "\"
                data-affiliation-id=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 26), "affiliationid", [], "any", false, false, false, 26), "html", null, true);
                echo "\"
                data-location-str=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 27), "location", [], "any", false, false, false, 27), "html", null, true);
                echo "\">
                <td>";
                // line 29
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 29), "done", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "<i class=\"far fa-check-circle\"></i>";
                } else {
                    // line 32
                    echo "<i class=\"far fa-hourglass\"></i>";
                }
                // line 34
                echo "<td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 34), "balloonid", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                <td data-order=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 35), "time", [], "any", false, false, false, 35), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 35), "time", [], "any", false, false, false, 35)), "html", null, true);
                echo "</td>
                <td>";
                // line 36
                echo $this->extensions['App\Twig\TwigExtension']->problemBadge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 36), "contestproblem", [], "any", false, false, false, 36));
                echo "</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 37), "team", [], "any", false, false, false, 37)), "truncate", [0 => (isset($context["teamname_max_length"]) || array_key_exists("teamname_max_length", $context) ? $context["teamname_max_length"] : (function () { throw new RuntimeError('Variable "teamname_max_length" does not exist.', 37, $this->source); })()), 1 => "…"], "method", false, false, false, 37), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 38), "affiliation", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 39), "location", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 40), "category", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                <td>";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 42), "total", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["totalballoon"]) {
                    // line 43
                    echo $this->extensions['App\Twig\TwigExtension']->problemBadge($context["totalballoon"]);
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['totalballoon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "</td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 46), "awards", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 48), "done", [], "any", false, false, false, 48)) {
                    // line 49
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons_setdone", ["balloonId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["balloon"], "data", [], "any", false, false, false, 49), "balloonid", [], "any", false, false, false, 49)]);
                    // line 50
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 50, $this->source); })()), "html", null, true);
                    echo "\" title=\"mark balloon as done\">
                    <i class=\"fas fa-running\"></i>
                    </a>
                </td>";
                }
                // line 55
                echo "</tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['balloon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
        </tbody>
    </table>

";
        }
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/balloon_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 57,  161 => 55,  153 => 50,  151 => 49,  149 => 48,  145 => 46,  142 => 45,  135 => 43,  131 => 42,  127 => 40,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  105 => 35,  100 => 34,  97 => 32,  94 => 30,  92 => 29,  88 => 27,  84 => 26,  77 => 25,  73 => 24,  55 => 7,  51 => 5,  49 => 4,  46 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# Render a list of balloons for a jury page #}
{# @var \\App\\Entity\\Balloon balloonfoo #}

{% if balloons is empty %}
    <div class=\"alert alert-warning\">No balloons</div>
{% else %}
    <table class=\"data-table table table-hover table-striped table-sm balloons-table\" style=\"width:auto\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">&nbsp;</th>
            <th scope=\"col\">ID</th>
            <th scope=\"col\">time</th>
            <th scope=\"col\">solved</th>
            <th scope=\"col\">team</th>
            <th scope=\"col\">affiliation</th>
            <th scope=\"col\">location</th>
            <th scope=\"col\">category</th>
            <th scope=\"col\">total</th>
            <th scope=\"col\">awards</th>
            <th scope=\"col\"></th>
        </tr>
        </thead>
        <tbody>
        {%- for balloon in balloons %}
            <tr class=\"{% if balloon.data.done %}disabled{% endif %}\"
                data-affiliation-id=\"{{ balloon.data.affiliationid }}\"
                data-location-str=\"{{ balloon.data.location }}\">
                <td>
                {%- if balloon.data.done -%}
                    <i class=\"far fa-check-circle\"></i>
                {%- else -%}
                    <i class=\"far fa-hourglass\"></i>
                {%- endif -%}
                <td>{{ balloon.data.balloonid }}</td>
                <td data-order=\"{{ balloon.data.time }}\">{{ balloon.data.time | printtime }}</td>
                <td>{{ balloon.data.contestproblem | problemBadge }}</td>
                <td>{{ balloon.data.team | u.truncate(teamname_max_length, '…') }}</td>
                <td>{{ balloon.data.affiliation }}</td>
                <td>{{ balloon.data.location }}</td>
                <td>{{ balloon.data.category }}</td>
                <td>
                {%- for totalballoon in balloon.data.total -%}
                    {{ totalballoon | problemBadge }}&nbsp;
                {%- endfor -%}
                </td>
                <td>{{ balloon.data.awards }}</td>
                <td>
                    {%- if not balloon.data.done -%}
                    {%- set link = path('jury_balloons_setdone', {balloonId: balloon.data.balloonid}) %}
                    <a href=\"{{ link }}\" title=\"mark balloon as done\">
                    <i class=\"fas fa-running\"></i>
                    </a>
                </td>
                {%- endif -%}
            </tr>
        {%- endfor %}

        </tbody>
    </table>

{% endif %}
", "jury/partials/balloon_list.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/balloon_list.html.twig");
    }
}
