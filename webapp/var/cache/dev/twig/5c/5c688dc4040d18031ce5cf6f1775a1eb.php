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

/* jury/partials/rejudging_matrix.html.twig */
class __TwigTemplate_ff5d706d939a85417674706e87f064b6 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_matrix.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_matrix.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_matrix.html.twig"));

        // line 1
        echo "<div class=\"mt-2\">
    <h2>Overview of changes</h2>
    <table class=\"rejudgetable\">
        <tr>
            <th title=\"old vs. new verdicts\">-\\+</th>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["verdicts"]) || array_key_exists("verdicts", $context) ? $context["verdicts"] : (function () { throw new RuntimeError('Variable "verdicts" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 7
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["verdict"], [], "array", true, true, false, 7)) {
                // line 8
                echo "                    <th title=\"";
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo " (new)\">";
                echo twig_escape_filter($this->env, $context["abbreviation"], "html", null, true);
                echo "</th>
                ";
            }
            // line 10
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </tr>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["verdictTable"]) || array_key_exists("verdictTable", $context) ? $context["verdictTable"] : (function () { throw new RuntimeError('Variable "verdictTable" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["originalVerdict"] => $context["changedVerdicts"]) {
            // line 14
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["originalVerdict"], [], "array", true, true, false, 14)) {
                // line 15
                echo "                <tr>
                    <th title=\"";
                // line 16
                echo twig_escape_filter($this->env, $context["originalVerdict"], "html", null, true);
                echo " (old)\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verdicts"]) || array_key_exists("verdicts", $context) ? $context["verdicts"] : (function () { throw new RuntimeError('Variable "verdicts" does not exist.', 16, $this->source); })()), $context["originalVerdict"], [], "array", false, false, false, 16), "html", null, true);
                echo "</th>
                    ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["changedVerdicts"]);
                foreach ($context['_seq'] as $context["newVerdict"] => $context["submitIds"]) {
                    // line 18
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, ($context["used"] ?? null), $context["newVerdict"], [], "array", true, true, false, 18)) {
                        // line 19
                        echo "                            ";
                        $context["numSubmissions"] = twig_length_filter($this->env, $context["submitIds"]);
                        // line 20
                        echo "                            ";
                        $context["link"] = null;
                        // line 21
                        echo "                            ";
                        if (($context["originalVerdict"] == $context["newVerdict"])) {
                            // line 22
                            echo "                                ";
                            $context["class"] = "identical";
                            // line 23
                            echo "                            ";
                        } elseif (((isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 23, $this->source); })()) == 0)) {
                            // line 24
                            echo "                                ";
                            $context["class"] = "zero";
                            // line 25
                            echo "                            ";
                        } else {
                            // line 26
                            echo "                                ";
                            $context["class"] = "changed";
                            // line 27
                            echo "                                ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 27, $this->source); })()), "rejudgingid", [], "any", false, false, false, 27), "view" => "all", "oldverdict" => $context["originalVerdict"], "newverdict" => $context["newVerdict"]]);
                            // line 28
                            echo "                            ";
                        }
                        // line 29
                        echo "                            <td class=\"";
                        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 29, $this->source); })()), "html", null, true);
                        echo "\">
                                ";
                        // line 30
                        if ( !(null === (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 30, $this->source); })()))) {
                            // line 31
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 31, $this->source); })()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 31, $this->source); })()), "html", null, true);
                            echo "</a>
                                ";
                        } else {
                            // line 33
                            echo "                                    ";
                            echo twig_escape_filter($this->env, (isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 33, $this->source); })()), "html", null, true);
                            echo "
                                ";
                        }
                        // line 35
                        echo "                            </td>
                        ";
                    }
                    // line 37
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['newVerdict'], $context['submitIds'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                </tr>
            ";
            }
            // line 40
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['originalVerdict'], $context['changedVerdicts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </table>
</div>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/rejudging_matrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 41,  166 => 40,  162 => 38,  156 => 37,  152 => 35,  146 => 33,  138 => 31,  136 => 30,  131 => 29,  128 => 28,  125 => 27,  122 => 26,  119 => 25,  116 => 24,  113 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  98 => 18,  94 => 17,  88 => 16,  85 => 15,  82 => 14,  78 => 13,  74 => 11,  68 => 10,  60 => 8,  57 => 7,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mt-2\">
    <h2>Overview of changes</h2>
    <table class=\"rejudgetable\">
        <tr>
            <th title=\"old vs. new verdicts\">-\\+</th>
            {% for verdict, abbreviation in verdicts %}
                {% if used[verdict] is defined %}
                    <th title=\"{{ verdict }} (new)\">{{ abbreviation }}</th>
                {% endif %}
            {% endfor %}
        </tr>

        {% for originalVerdict, changedVerdicts in verdictTable %}
            {% if used[originalVerdict] is defined %}
                <tr>
                    <th title=\"{{ originalVerdict }} (old)\">{{ verdicts[originalVerdict] }}</th>
                    {% for newVerdict, submitIds in changedVerdicts %}
                        {% if used[newVerdict] is defined %}
                            {% set numSubmissions = submitIds | length %}
                            {% set link = null %}
                            {% if originalVerdict == newVerdict %}
                                {% set class = 'identical' %}
                            {% elseif numSubmissions == 0 %}
                                {% set class = 'zero' %}
                            {% else %}
                                {% set class = 'changed' %}
                                {% set link = path('jury_rejudging', {rejudgingId: rejudging.rejudgingid, view: 'all', oldverdict: originalVerdict, newverdict: newVerdict}) %}
                            {% endif %}
                            <td class=\"{{ class }}\">
                                {% if link is not null %}
                                    <a href=\"{{ link }}\">{{ numSubmissions }}</a>
                                {% else %}
                                    {{ numSubmissions }}
                                {% endif %}
                            </td>
                        {% endif %}
                    {% endfor %}
                </tr>
            {% endif %}
        {% endfor %}
    </table>
</div>
", "jury/partials/rejudging_matrix.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/rejudging_matrix.html.twig");
    }
}
