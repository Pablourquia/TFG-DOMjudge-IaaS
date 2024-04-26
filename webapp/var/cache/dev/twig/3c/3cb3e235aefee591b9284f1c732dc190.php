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

/* jury/internal_error.html.twig */
class __TwigTemplate_7054de19cab0ba081bc3f39870dc0d52 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/internal_error.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/internal_error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/internal_error.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/internal_error.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/internal_error.html.twig", 1);
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

        echo "Internal error e";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 4, $this->source); })()), "errorid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Internal error e";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 13, $this->source); })()), "errorid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Description</th>
                    <td>
                        ";
        // line 21
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21))) {
            // line 22
            echo "                            <span class=\"nodata\">None</span>
                        ";
        } else {
            // line 24
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true);
            echo "
                        ";
        }
        // line 26
        echo "                    </td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 30, $this->source); })()), "time", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34)), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 36, $this->source); })()), "judging", [], "any", false, false, false, 36))) {
            // line 37
            echo "                    <tr>
                        <th>Related judging</th>
                        <td>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 40, $this->source); })()), "judging", [], "any", false, false, false, 40), "judgingid", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                                j";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 41, $this->source); })()), "judging", [], "any", false, false, false, 41), "judgingid", [], "any", false, false, false, 41), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 46
        echo "                ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 46, $this->source); })()), "affectedJudgings", [], "any", false, false, false, 46))) {
            // line 47
            echo "                    <tr>
                        <th>Additional affected judgings</th>
                        <td>
                            <ul>";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 51, $this->source); })()), "affectedJudgings", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 52
                echo "<li>
                                    <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\">
                                        j";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 54), "html", null, true);
                echo "
                                    </a>
                                </li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</ul>
                        </td>
                    </tr>
                ";
        }
        // line 62
        echo "                ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 62, $this->source); })()), "contest", [], "any", false, false, false, 62))) {
            // line 63
            echo "                    <tr>
                        <th>Related contest</th>
                        <td>
                            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 66, $this->source); })()), "contest", [], "any", false, false, false, 66), "cid", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">
                                c";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 67, $this->source); })()), "contest", [], "any", false, false, false, 67), "cid", [], "any", false, false, false, 67), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 72
        echo "                ";
        if ( !(null === (isset($context["affectedText"]) || array_key_exists("affectedText", $context) ? $context["affectedText"] : (function () { throw new RuntimeError('Variable "affectedText" does not exist.', 72, $this->source); })()))) {
            // line 73
            echo "                    <tr>
                        <th>Affected ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 74, $this->source); })()), "disabled", [], "any", false, false, false, 74), "kind", [], "any", false, false, false, 74), "html", null, true);
            echo "</th>
                        <td>
                            ";
            // line 76
            if ((isset($context["affectedLink"]) || array_key_exists("affectedLink", $context) ? $context["affectedLink"] : (function () { throw new RuntimeError('Variable "affectedLink" does not exist.', 76, $this->source); })())) {
                // line 77
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["affectedLink"]) || array_key_exists("affectedLink", $context) ? $context["affectedLink"] : (function () { throw new RuntimeError('Variable "affectedLink" does not exist.', 77, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["affectedText"]) || array_key_exists("affectedText", $context) ? $context["affectedText"] : (function () { throw new RuntimeError('Variable "affectedText" does not exist.', 77, $this->source); })()), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 79
                echo "                                ";
                echo twig_escape_filter($this->env, (isset($context["affectedText"]) || array_key_exists("affectedText", $context) ? $context["affectedText"] : (function () { throw new RuntimeError('Variable "affectedText" does not exist.', 79, $this->source); })()), "html", null, true);
                echo "
                            ";
            }
            // line 81
            echo "                        </td>
                    </tr>
                ";
        }
        // line 84
        echo "                <tr>
                    <th>Judgehost log snippet</th>
                    <td>
                        <pre class=\"output_text\">";
        // line 87
        echo twig_escape_filter($this->env, base64_decode(twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 87, $this->source); })()), "judgehostlog", [], "any", false, false, false, 87)), "html", null, true);
        echo "</pre>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    ";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 94, $this->source); })()), "status", [], "any", false, false, false, 94) == "open")) {
            // line 95
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_error_handle", ["errorId" => twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 95, $this->source); })()), "errorid", [], "any", false, false, false, 95), "action" => "ignore"]), "html", null, true);
            echo "\"
              method=\"post\" class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-danger\">
                <i class=\"fas fa-times\"></i> Ignore error
            </button>
        </form>

        <form action=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_error_handle", ["errorId" => twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 102, $this->source); })()), "errorid", [], "any", false, false, false, 102), "action" => "resolve"]), "html", null, true);
            echo "\"
              method=\"post\" class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-success\">
                <i class=\"fas fa-check\"></i> Mark as resolved and re-enable ";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["internalError"]) || array_key_exists("internalError", $context) ? $context["internalError"] : (function () { throw new RuntimeError('Variable "internalError" does not exist.', 105, $this->source); })()), "disabled", [], "any", false, false, false, 105), "kind", [], "any", false, false, false, 105), "html", null, true);
            echo "
            </button>
        </form>
    ";
        }
        // line 109
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/internal_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 109,  326 => 105,  320 => 102,  309 => 95,  307 => 94,  297 => 87,  292 => 84,  287 => 81,  281 => 79,  273 => 77,  271 => 76,  266 => 74,  263 => 73,  260 => 72,  252 => 67,  248 => 66,  243 => 63,  240 => 62,  234 => 58,  225 => 54,  221 => 53,  218 => 52,  214 => 51,  209 => 47,  206 => 46,  198 => 41,  194 => 40,  189 => 37,  187 => 36,  182 => 34,  175 => 30,  169 => 26,  163 => 24,  159 => 22,  157 => 21,  146 => 13,  143 => 12,  130 => 11,  115 => 8,  110 => 7,  97 => 6,  69 => 4,  55 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Internal error e{{ internalError.errorid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Internal error e{{ internalError.errorid }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Description</th>
                    <td>
                        {% if internalError.description is empty %}
                            <span class=\"nodata\">None</span>
                        {% else %}
                            {{ internalError.description }}
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td>{{ internalError.time | printtime('Y-m-d H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ internalError.status | capitalize }}</td>
                </tr>
                {% if internalError.judging is not null %}
                    <tr>
                        <th>Related judging</th>
                        <td>
                            <a href=\"{{ path('jury_submission_by_judging', {jid: internalError.judging.judgingid}) }}\">
                                j{{ internalError.judging.judgingid }}
                            </a>
                        </td>
                    </tr>
                {% endif %}
                {% if internalError.affectedJudgings is not null %}
                    <tr>
                        <th>Additional affected judgings</th>
                        <td>
                            <ul>
                            {%- for judging in internalError.affectedJudgings -%}
                                <li>
                                    <a href=\"{{ path('jury_submission_by_judging', {jid: judging.judgingid}) }}\">
                                        j{{ judging.judgingid }}
                                    </a>
                                </li>
                            {%- endfor -%}
                            </ul>
                        </td>
                    </tr>
                {% endif %}
                {% if internalError.contest is not null %}
                    <tr>
                        <th>Related contest</th>
                        <td>
                            <a href=\"{{ path('jury_contest', {'contestId': internalError.contest.cid}) }}\">
                                c{{ internalError.contest.cid }}
                            </a>
                        </td>
                    </tr>
                {% endif %}
                {% if affectedText is not null %}
                    <tr>
                        <th>Affected {{ internalError.disabled.kind }}</th>
                        <td>
                            {% if affectedLink %}
                                <a href=\"{{ affectedLink }}\">{{ affectedText }}</a>
                            {% else %}
                                {{ affectedText }}
                            {% endif %}
                        </td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Judgehost log snippet</th>
                    <td>
                        <pre class=\"output_text\">{{ internalError.judgehostlog | base64_decode }}</pre>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    {% if internalError.status == 'open' %}
        <form action=\"{{ path('jury_internal_error_handle', {errorId: internalError.errorid, action: 'ignore'}) }}\"
              method=\"post\" class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-danger\">
                <i class=\"fas fa-times\"></i> Ignore error
            </button>
        </form>

        <form action=\"{{ path('jury_internal_error_handle', {errorId: internalError.errorid, action: 'resolve'}) }}\"
              method=\"post\" class=\"d-inline\">
            <button type=\"submit\" class=\"btn btn-success\">
                <i class=\"fas fa-check\"></i> Mark as resolved and re-enable {{ internalError.disabled.kind }}
            </button>
        </form>
    {% endif %}

{% endblock %}
", "jury/internal_error.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/internal_error.html.twig");
    }
}
