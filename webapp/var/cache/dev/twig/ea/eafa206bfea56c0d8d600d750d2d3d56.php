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

/* team/partials/clarification.html.twig */
class __TwigTemplate_58b35ea5df758b75a0f4f4dc60171992 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/clarification.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/clarification.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/clarification.html.twig"));

        // line 1
        echo "<div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-sm\">
                Subject:
                ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 6, $this->source); })()), "problem", [], "any", false, false, false, 6)) {
            // line 7
            echo "                    Problem ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 7, $this->source); })()), "problem", [], "any", false, false, false, 7), "contestProblems", [], "any", false, false, false, 7), "first", [], "any", false, false, false, 7), "shortname", [], "any", false, false, false, 7), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 7, $this->source); })()), "problem", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
            echo "
                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 8, $this->source); })()), "category", [], "any", false, false, false, 8)) {
            // line 9
            echo "                    ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 9, $this->source); })()), "category", [], "any", false, false, false, 9), [], "array", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 9, $this->source); })()), "category", [], "any", false, false, false, 9), [], "array", false, false, false, 9), "general")) : ("general")), "html", null, true);
            echo "
                ";
        } else {
            // line 11
            echo "                    General issue
                ";
        }
        // line 13
        echo "            </div>
            <div class=\"col-sm text-muted text-right\">";
        // line 14
        echo $this->extensions['App\Twig\TwigExtension']->printtimeHover(twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 14, $this->source); })()), "submittime", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 14, $this->source); })()), "contest", [], "any", false, false, false, 14));
        echo "</div>
        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"card-title\">
            <div class=\"row\">
                <div class=\"col-sm\">
                    From:
                    ";
        // line 22
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 22, $this->source); })()), "sender", [], "any", false, false, false, 22))) {
            // line 23
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 23, $this->source); })()), "sender", [], "any", false, false, false, 23), "effectiveName", [], "any", false, false, false, 23), "html", null, true);
            echo " (t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 23, $this->source); })()), "sender", [], "any", false, false, false, 23), "teamid", [], "any", false, false, false, 23), "html", null, true);
            echo ")
                    ";
        } else {
            // line 25
            echo "                        Jury
                    ";
        }
        // line 27
        echo "                </div>
                <div class=\"col-sm\">To:
                    ";
        // line 29
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 29, $this->source); })()), "recipient", [], "any", false, false, false, 29))) {
            // line 30
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 30, $this->source); })()), "recipient", [], "any", false, false, false, 30), "effectiveName", [], "any", false, false, false, 30), "html", null, true);
            echo " (t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 30, $this->source); })()), "recipient", [], "any", false, false, false, 30), "teamid", [], "any", false, false, false, 30), "html", null, true);
            echo ")
                    ";
        } elseif ( !(null === twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 31, $this->source); })()), "sender", [], "any", false, false, false, 31))) {
            // line 32
            echo "                        Jury
                    ";
        } else {
            // line 34
            echo "                        <strong>All</strong>
                    ";
        }
        // line 36
        echo "                </div>
            </div>
        </div>

        <div class=\"card-text\">
            <pre class=\"output-text bg-light p-3\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->wrapUnquoted(twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 41, $this->source); })()), "body", [], "any", false, false, false, 41), 78), "html", null, true);
        echo "</pre>
        </div>
    </div>
</div>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/clarification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 41,  125 => 36,  121 => 34,  117 => 32,  115 => 31,  108 => 30,  106 => 29,  102 => 27,  98 => 25,  90 => 23,  88 => 22,  77 => 14,  74 => 13,  70 => 11,  64 => 9,  62 => 8,  55 => 7,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3\">
    <div class=\"card-header\">
        <div class=\"row\">
            <div class=\"col-sm\">
                Subject:
                {% if clarification.problem %}
                    Problem {{ clarification.problem.contestProblems.first.shortname }}: {{ clarification.problem.name }}
                {% elseif clarification.category %}
                    {{ categories[clarification.category]|default('general') }}
                {% else %}
                    General issue
                {% endif %}
            </div>
            <div class=\"col-sm text-muted text-right\">{{ clarification.submittime | printtimeHover(clarification.contest) }}</div>
        </div>
    </div>
    <div class=\"card-body\">
        <div class=\"card-title\">
            <div class=\"row\">
                <div class=\"col-sm\">
                    From:
                    {% if clarification.sender is not empty %}
                        {{ clarification.sender.effectiveName }} (t{{ clarification.sender.teamid }})
                    {% else %}
                        Jury
                    {% endif %}
                </div>
                <div class=\"col-sm\">To:
                    {% if clarification.recipient is not empty %}
                        {{ clarification.recipient.effectiveName }} (t{{ clarification.recipient.teamid }})
                    {% elseif clarification.sender is not null %}
                        Jury
                    {% else %}
                        <strong>All</strong>
                    {% endif %}
                </div>
            </div>
        </div>

        <div class=\"card-text\">
            <pre class=\"output-text bg-light p-3\">{{ clarification.body|wrapUnquoted(78) }}</pre>
        </div>
    </div>
</div>
", "team/partials/clarification.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/team/partials/clarification.html.twig");
    }
}
