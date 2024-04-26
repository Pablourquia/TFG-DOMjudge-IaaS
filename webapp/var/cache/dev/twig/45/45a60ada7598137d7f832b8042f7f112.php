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

/* jury/rejudging.html.twig */
class __TwigTemplate_e7e3720c7c7e08eda2436dddda2d9ade extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/rejudging.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/rejudging.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/rejudging.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/rejudging.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/rejudging.html.twig", 1);
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

        echo "Rejudging r";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 4, $this->source); })()), "rejudgingid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Rejudging r";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 14, $this->source); })()), "rejudgingid", [], "any", false, false, false, 14), "html", null, true);
        echo " ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 14, $this->source); })()), "valid", [], "any", false, false, false, 14)) {
            echo "(canceled)";
        }
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Reason</th>
                    <td>
                        ";
        // line 22
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 22, $this->source); })()), "reason", [], "any", false, false, false, 22))) {
            // line 23
            echo "                            <span class=\"nodata\">none</span>
                        ";
        } else {
            // line 25
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 25, $this->source); })()), "reason", [], "any", false, false, false, 25), "html", null, true);
            echo "
                        ";
        }
        // line 27
        echo "                    </td>
                </tr>
                ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 29, $this->source); })()), "startUser", [], "any", false, false, false, 29)) {
            // line 30
            echo "                    <tr>
                        <th>Issued by</th>
                        <td>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 33, $this->source); })()), "startUser", [], "any", false, false, false, 33), "userid", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">
                                ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 34, $this->source); })()), "startUser", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 39
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 39, $this->source); })()), "endtime", [], "any", false, false, false, 39)) {
            // line 40
            echo "                    <tr>
                        <th>";
            // line 41
            if (twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 41, $this->source); })()), "valid", [], "any", false, false, false, 41)) {
                echo "Accepted";
            } else {
                echo "Canceled";
            }
            echo " by</th>
                        <td>
                            ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 43, $this->source); })()), "autoapply", [], "any", false, false, false, 43)) {
                // line 44
                echo "                                automatically applied
                            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 45
(isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 45, $this->source); })()), "repeat", [], "any", false, false, false, 45)) {
                // line 46
                echo "                                part of a repeated judging
                            ";
            } else {
                // line 48
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 48, $this->source); })()), "finishUser", [], "any", false, false, false, 48), "userid", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\">
                                    ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 49, $this->source); })()), "finishUser", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
                echo "
                                </a>
                            ";
            }
            // line 52
            echo "                        </td>
                    </tr>
                ";
        }
        // line 55
        echo "                <tr>
                    <th>Start time</th>
                    <td>
                        ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 58, $this->source); })()), "starttime", [], "any", false, false, false, 58)) {
            // line 59
            echo "                            <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 59, $this->source); })()), "starttime", [], "any", false, false, false, 59), "Y-m-d H:i:s (T)"), "html", null, true);
            echo "\">
                                ";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 60, $this->source); })()), "starttime", [], "any", false, false, false, 60)), "html", null, true);
            echo "
                            </span>
                        ";
        } else {
            // line 63
            echo "                            <span class=\"nodata\">-</span>
                        ";
        }
        // line 65
        echo "                    </td>
                </tr>
                <tr>
                    <th>Apply time</th>
                    <td>
                        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 70, $this->source); })()), "endtime", [], "any", false, false, false, 70)) {
            // line 71
            echo "                            <span title=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 71, $this->source); })()), "endtime", [], "any", false, false, false, 71), "Y-m-d H:i:s (T)"), "html", null, true);
            echo "\">
                                ";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 72, $this->source); })()), "endtime", [], "any", false, false, false, 72)), "html", null, true);
            echo "
                            </span>
                        ";
        } else {
            // line 75
            echo "                            <span class=\"nodata\">-</span>
                        ";
        }
        // line 77
        echo "                    </td>
                </tr>
                <tr ";
        // line 79
        if (((isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new RuntimeError('Variable "todo" does not exist.', 79, $this->source); })()) <= 0)) {
            echo "class=\"d-none\"";
        }
        echo ">
                    <th>Queued</th>
                    <td><span data-todo>";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new RuntimeError('Variable "todo" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "</span> unfinished judgings</td>
                </tr>
                ";
        // line 83
        if ((isset($context["repetitions"]) || array_key_exists("repetitions", $context) ? $context["repetitions"] : (function () { throw new RuntimeError('Variable "repetitions" does not exist.', 83, $this->source); })())) {
            // line 84
            echo "                    <tr>
                        <th>Repetitions</th>
                        <td>
                            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["repetitions"]) || array_key_exists("repetitions", $context) ? $context["repetitions"] : (function () { throw new RuntimeError('Variable "repetitions" does not exist.', 87, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                // line 88
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => $context["rep"]]), "html", null, true);
                echo "\">
                                    r";
                // line 89
                echo twig_escape_filter($this->env, $context["rep"], "html", null, true);
                echo "<br/>
                                </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                        </td>
                    </tr>
                ";
        }
        // line 95
        echo "            </table>
        </div>
    </div>

    <div data-rejudging-buttons>
        ";
        // line 100
        $this->loadTemplate("jury/partials/rejudging_buttons.html.twig", "jury/rejudging.html.twig", 100)->display($context);
        // line 101
        echo "    </div>

    ";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 103, $this->source); })()), "autoapply", [], "any", false, false, false, 103) &&  !twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 103, $this->source); })()), "endtime", [], "any", false, false, false, 103))) {
            // line 104
            echo "         <br/>
         <div class=\"alert alert-warning\">Judgings in this rejudging will be applied automatically.</div>
    ";
        }
        // line 107
        echo "
    <div data-rejudging-matrix>
        ";
        // line 109
        $this->loadTemplate("jury/partials/rejudging_matrix.html.twig", "jury/rejudging.html.twig", 109)->display($context);
        // line 110
        echo "    </div>

    ";
        // line 112
        if ((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 112, $this->source); })())) {
            // line 113
            echo "        <h2>Statistics over repeated rejudgings</h2>
        <h4>Runtime spread</h4>
            <table class=\"table table-sm table-striped\">
                <tr><th>submission/testcase</th><th>spread</th><th>#judgings</th><th>result</th></tr>
\t\t";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 117, $this->source); })()), "runtime_spread", [], "any", false, false, false, 117));
            foreach ($context['_seq'] as $context["_key"] => $context["spread"]) {
                // line 118
                echo "\t\t    <tr>
                        <td>s";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spread"], "submitid", [], "any", false, false, false, 119), "html", null, true);
                echo "/tc";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spread"], "rank", [], "any", false, false, false, 119), "html", null, true);
                echo "</td>
                        <td>";
                // line 120
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spread"], "spread", [], "any", false, false, false, 120), 3), "html", null, true);
                echo "s</td>
                        <td>";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["spread"], "count", [], "any", false, false, false, 121), "html", null, true);
                echo "</td>
                        <td>";
                // line 122
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["spread"], "verdict", [], "any", false, false, false, 122));
                echo "</td>
\t\t    </tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "\t    </table>
        ";
            // line 126
            if (twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 126, $this->source); })()), "judging_runs_differ", [], "any", false, false, false, 126)) {
                // line 127
                echo "            <h4>Judging Run Differences</h4>
            <ul>
                ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 129, $this->source); })()), "judging_runs_differ", [], "any", false, false, false, 129));
                foreach ($context['_seq'] as $context["_key"] => $context["diff"]) {
                    // line 130
                    echo "                    <li>s";
                    echo twig_escape_filter($this->env, $context["diff"], "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['diff'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "            </ul>
            ";
                // line 133
                if ((twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 133, $this->source); })()), "judging_runs_differ_overflow", [], "any", false, false, false, 133) > 0)) {
                    // line 134
                    echo "                <em>Left out ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 134, $this->source); })()), "judging_runs_differ_overflow", [], "any", false, false, false, 134), "html", null, true);
                    echo " submissions with different judging results.</em>
            ";
                }
                // line 136
                echo "        ";
            }
            // line 137
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 137, $this->source); })()), "judgehost_stats", [], "any", false, false, false, 137)) > 1)) {
                // line 138
                echo "            <h4>Judgehost stats</h4>
            <table class=\"table table-sm table-striped\">
                <tr><th>Judgehost</th><th>#judgings</th><th>avg. runtime</th><th>std.dev.</th><th>avg. duration</th></tr>
                ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 141, $this->source); })()), "judgehost_stats", [], "any", false, false, false, 141));
                foreach ($context['_seq'] as $context["_key"] => $context["judgehost"]) {
                    // line 142
                    echo "                    <tr>
                        <td>";
                    // line 143
                    echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, $context["judgehost"], "judgehost", [], "any", false, false, false, 143));
                    echo "</td>
                        <td>";
                    // line 144
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judgehost"], "njudged", [], "any", false, false, false, 144), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 145
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judgehost"], "avgrun", [], "any", false, false, false, 145), 3), "html", null, true);
                    echo "s</td>
                        <td>";
                    // line 146
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judgehost"], "stddev", [], "any", false, false, false, 146), 3), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 147
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judgehost"], "avgduration", [], "any", false, false, false, 147), 3), "html", null, true);
                    echo "s</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judgehost'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "            </table>
        ";
            }
            // line 152
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 152, $this->source); })()), "judgings", [], "any", false, false, false, 152)) {
                // line 153
                echo "            <h4>Judging verdicts</h4>
            <table class=\"table table-sm table-striped\">
                <tr><th>jID</th><th>rID</th><th>Judgehost</th><th>duration (incl. compile)</th><th>verdict</th></tr>
                ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 156, $this->source); })()), "judgings", [], "any", false, false, false, 156));
                foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                    // line 157
                    echo "                    <tr>
                        <td>j";
                    // line 158
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 158), "html", null, true);
                    echo "</td>
                        <td>r";
                    // line 159
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudgingid", [], "any", false, false, false, 159), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 160
                    echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, $context["judging"], "hostname", [], "any", false, false, false, 160));
                    echo "</td>
                        <td>";
                    // line 161
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "duration", [], "any", false, false, false, 161), 3), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 162
                    echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 162));
                    echo "</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "            </table>
        ";
            }
            // line 167
            echo "    ";
        }
        // line 168
        echo "
    <h2 class=\"mt-4\">Details</h2>

    <div class=\"btn-toolbar mb-3\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
        <div class=\"btn-group btn-group-toggle btn-group-sm input-group-sm\" data-toggle=\"buttons\">
            <div class=\"input-group-prepend\">
                <div class=\"input-group-text listtoggles\">Show:</div>
            </div>";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
            // line 177
            echo "
                <label class=\"btn btn-secondary ";
            // line 178
            if (($context["idx"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 178, $this->source); })()))) {
                echo "active";
            }
            echo "\">
                    <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 179
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"
                           ";
            // line 180
            if (($context["idx"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 180, $this->source); })()))) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "
                </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "        </div>&nbsp;
        ";
        // line 184
        if (twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 184, $this->source); })()), "repeat", [], "any", false, false, false, 184)) {
            // line 185
            echo "            <div class=\"btn-group-toggle btn-group-sm\" data-toggle=\"buttons\">
                <label class=\"btn btn-outline-secondary ";
            // line 186
            if ((isset($context["showStatistics"]) || array_key_exists("showStatistics", $context) ? $context["showStatistics"] : (function () { throw new RuntimeError('Variable "showStatistics" does not exist.', 186, $this->source); })())) {
                echo "active";
            }
            echo "\">
                    <input type=\"checkbox\" id=\"statistics-toggle\" ";
            // line 187
            if ((isset($context["showStatistics"]) || array_key_exists("showStatistics", $context) ? $context["showStatistics"] : (function () { throw new RuntimeError('Variable "showStatistics" does not exist.', 187, $this->source); })())) {
                echo "checked";
            }
            echo " autocomplete=\"off\">
                    <i class=\"fas fa-list-ol\"></i> Statistics
                </label>
            </div>
        ";
        }
        // line 192
        echo "    </div>

    <form action=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 194, $this->source); })()), "rejudgingid", [], "any", false, false, false, 194)]), "html", null, true);
        echo "\" method=\"get\">
        <input type=\"hidden\" name=\"view\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 195, $this->source); })()), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 195, $this->source); })()), [], "array", false, false, false, 195), "html", null, true);
        echo "\"/>
        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                <label for=\"oldverdict\">Old verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"oldverdict\" id=\"oldverdict\">
                    <option value=\"all\" ";
        // line 200
        if (((isset($context["oldverdict"]) || array_key_exists("oldverdict", $context) ? $context["oldverdict"] : (function () { throw new RuntimeError('Variable "oldverdict" does not exist.', 200, $this->source); })()) == "all")) {
            echo "selected";
        }
        echo ">all</option>";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["verdicts"]) || array_key_exists("verdicts", $context) ? $context["verdicts"] : (function () { throw new RuntimeError('Variable "verdicts" does not exist.', 201, $this->source); })()));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 202
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "\" ";
            if (((isset($context["oldverdict"]) || array_key_exists("oldverdict", $context) ? $context["oldverdict"] : (function () { throw new RuntimeError('Variable "oldverdict" does not exist.', 202, $this->source); })()) == $context["verdict"])) {
                echo "selected";
            }
            echo ">
                            ";
            // line 203
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "
                        </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        echo "
                </select>
            </div>
            <div class=\"form-group col-md-4\">
                <label for=\"newverdict\">New verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"newverdict\" id=\"newverdict\">
                    <option value=\"all\" ";
        // line 212
        if (((isset($context["newverdict"]) || array_key_exists("newverdict", $context) ? $context["newverdict"] : (function () { throw new RuntimeError('Variable "newverdict" does not exist.', 212, $this->source); })()) == "all")) {
            echo "selected";
        }
        echo ">all</option>";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["verdicts"]) || array_key_exists("verdicts", $context) ? $context["verdicts"] : (function () { throw new RuntimeError('Variable "verdicts" does not exist.', 213, $this->source); })()));
        foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
            // line 214
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "\" ";
            if (((isset($context["newverdict"]) || array_key_exists("newverdict", $context) ? $context["newverdict"] : (function () { throw new RuntimeError('Variable "newverdict" does not exist.', 214, $this->source); })()) == $context["verdict"])) {
                echo "selected";
            }
            echo ">
                            ";
            // line 215
            echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
            echo "
                        </option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "
                </select>
            </div>
            <div class=\"form-group col-md-2\">
                <label>&nbsp;</label>
                <input class=\"btn btn-primary form-control\" type=\"submit\" value=\"Filter\"/>
            </div>
            <div class=\"form-group col-md-2\">
                <label>&nbsp;</label>
                <a href=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 227, $this->source); })()), "rejudgingid", [], "any", false, false, false, 227), "view" => twig_get_attribute($this->env, $this->source, (isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 227, $this->source); })()), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 227, $this->source); })()), [], "array", false, false, false, 227)]), "html", null, true);
        echo "\"
                   class=\"btn btn-secondary form-control\">Clear</a>
            </div>
        </div>
    </form>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"updateMatrix\">
        ";
        // line 234
        $this->loadTemplate("jury/partials/rejudging_submissions.html.twig", "jury/rejudging.html.twig", 234)->display($context);
        // line 235
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 239
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 240
        echo "    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 243, $this->source); })()), "rejudgingid", [], "any", false, false, false, 243), "view" => "REPLACE_ME", "oldverdict" => (isset($context["oldverdict"]) || array_key_exists("oldverdict", $context) ? $context["oldverdict"] : (function () { throw new RuntimeError('Variable "oldverdict" does not exist.', 243, $this->source); })()), "newverdict" => (isset($context["newverdict"]) || array_key_exists("newverdict", $context) ? $context["newverdict"] : (function () { throw new RuntimeError('Variable "newverdict" does not exist.', 243, $this->source); })()), "show_statistics" => (isset($context["showStatistics"]) || array_key_exists("showStatistics", $context) ? $context["showStatistics"] : (function () { throw new RuntimeError('Variable "showStatistics" does not exist.', 243, $this->source); })())]), "html", null, true);
        echo "'.replace('REPLACE_ME', \$(this).val()).replaceAll('&amp;', '&');
            });

            \$('#statistics-toggle').on('change', function () {
                window.location = '";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 247, $this->source); })()), "rejudgingid", [], "any", false, false, false, 247), "view" => twig_get_attribute($this->env, $this->source, (isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 247, $this->source); })()), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 247, $this->source); })()), [], "array", false, false, false, 247), "oldverdict" => (isset($context["oldverdict"]) || array_key_exists("oldverdict", $context) ? $context["oldverdict"] : (function () { throw new RuntimeError('Variable "oldverdict" does not exist.', 247, $this->source); })()), "newverdict" => (isset($context["newverdict"]) || array_key_exists("newverdict", $context) ? $context["newverdict"] : (function () { throw new RuntimeError('Variable "newverdict" does not exist.', 247, $this->source); })()), "show_statistics" => "REPLACE_ME"]), "html", null, true);
        echo "'.replace('REPLACE_ME', \$(this).is(':checked')).replaceAll('&amp;', '&');
            });

            \$('.select2').select2();

            window.updateMatrix = function () {
                var \$matrixData = \$('[data-new-rejudging-matrix]');
                var \$matrix = \$('[data-rejudging-matrix]');
                \$matrix.html(\$matrixData.children());

                var \$buttonData = \$('[data-new-rejudging-buttons]');
                var \$button = \$('[data-rejudging-buttons]');
                \$button.html(\$buttonData.children());

                var todo = \$('[data-new-todo]').text();
                var \$todo = \$('[data-todo]');
                \$todo.text(todo);
                if (parseInt(todo) <= 0) {
                    \$todo.closest('tr').addClass('d-none');
                } else {
                    \$todo.closest('tr').removeClass('d-none');
                }
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/rejudging.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 247,  724 => 243,  719 => 240,  706 => 239,  691 => 235,  689 => 234,  679 => 227,  668 => 218,  660 => 215,  651 => 214,  647 => 213,  642 => 212,  634 => 206,  626 => 203,  617 => 202,  613 => 201,  608 => 200,  600 => 195,  596 => 194,  592 => 192,  582 => 187,  576 => 186,  573 => 185,  571 => 184,  568 => 183,  556 => 180,  552 => 179,  546 => 178,  543 => 177,  539 => 176,  530 => 168,  527 => 167,  523 => 165,  514 => 162,  510 => 161,  506 => 160,  502 => 159,  498 => 158,  495 => 157,  491 => 156,  486 => 153,  483 => 152,  479 => 150,  470 => 147,  466 => 146,  462 => 145,  458 => 144,  454 => 143,  451 => 142,  447 => 141,  442 => 138,  439 => 137,  436 => 136,  430 => 134,  428 => 133,  425 => 132,  416 => 130,  412 => 129,  408 => 127,  406 => 126,  403 => 125,  394 => 122,  390 => 121,  386 => 120,  380 => 119,  377 => 118,  373 => 117,  367 => 113,  365 => 112,  361 => 110,  359 => 109,  355 => 107,  350 => 104,  348 => 103,  344 => 101,  342 => 100,  335 => 95,  330 => 92,  321 => 89,  316 => 88,  312 => 87,  307 => 84,  305 => 83,  300 => 81,  293 => 79,  289 => 77,  285 => 75,  279 => 72,  274 => 71,  272 => 70,  265 => 65,  261 => 63,  255 => 60,  250 => 59,  248 => 58,  243 => 55,  238 => 52,  232 => 49,  227 => 48,  223 => 46,  221 => 45,  218 => 44,  216 => 43,  207 => 41,  204 => 40,  201 => 39,  193 => 34,  189 => 33,  184 => 30,  182 => 29,  178 => 27,  172 => 25,  168 => 23,  166 => 22,  151 => 14,  148 => 13,  135 => 12,  120 => 9,  116 => 8,  111 => 7,  98 => 6,  70 => 4,  56 => 1,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Rejudging r{{ rejudging.rejudgingid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
    {{ macros.select2_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Rejudging r{{ rejudging.rejudgingid }} {% if not rejudging.valid %}(canceled){% endif %}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Reason</th>
                    <td>
                        {% if rejudging.reason is empty %}
                            <span class=\"nodata\">none</span>
                        {% else %}
                            {{ rejudging.reason }}
                        {% endif %}
                    </td>
                </tr>
                {% if rejudging.startUser %}
                    <tr>
                        <th>Issued by</th>
                        <td>
                            <a href=\"{{ path('jury_user', {'userId': rejudging.startUser.userid}) }}\">
                                {{ rejudging.startUser.name }}
                            </a>
                        </td>
                    </tr>
                {% endif %}
                {% if rejudging.endtime %}
                    <tr>
                        <th>{% if rejudging.valid %}Accepted{% else %}Canceled{% endif %} by</th>
                        <td>
                            {% if rejudging.autoapply %}
                                automatically applied
                            {% elseif rejudging.repeat %}
                                part of a repeated judging
                            {% else %}
                                <a href=\"{{ path('jury_user', {'userId': rejudging.finishUser.userid}) }}\">
                                    {{ rejudging.finishUser.name }}
                                </a>
                            {% endif %}
                        </td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Start time</th>
                    <td>
                        {% if rejudging.starttime %}
                            <span title=\"{{ rejudging.starttime | printtime('Y-m-d H:i:s (T)') }}\">
                                {{ rejudging.starttime | printtime }}
                            </span>
                        {% else %}
                            <span class=\"nodata\">-</span>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Apply time</th>
                    <td>
                        {% if rejudging.endtime %}
                            <span title=\"{{ rejudging.endtime | printtime('Y-m-d H:i:s (T)') }}\">
                                {{ rejudging.endtime | printtime }}
                            </span>
                        {% else %}
                            <span class=\"nodata\">-</span>
                        {% endif %}
                    </td>
                </tr>
                <tr {% if todo <= 0 %}class=\"d-none\"{% endif %}>
                    <th>Queued</th>
                    <td><span data-todo>{{ todo }}</span> unfinished judgings</td>
                </tr>
                {% if repetitions %}
                    <tr>
                        <th>Repetitions</th>
                        <td>
                            {% for rep in repetitions %}
                                <a href=\"{{ path('jury_rejudging', {rejudgingId: rep}) }}\">
                                    r{{ rep }}<br/>
                                </a>
                            {% endfor %}
                        </td>
                    </tr>
                {% endif %}
            </table>
        </div>
    </div>

    <div data-rejudging-buttons>
        {% include 'jury/partials/rejudging_buttons.html.twig' %}
    </div>

    {% if rejudging.autoapply and not rejudging.endtime %}
         <br/>
         <div class=\"alert alert-warning\">Judgings in this rejudging will be applied automatically.</div>
    {% endif %}

    <div data-rejudging-matrix>
        {% include 'jury/partials/rejudging_matrix.html.twig' %}
    </div>

    {% if stats %}
        <h2>Statistics over repeated rejudgings</h2>
        <h4>Runtime spread</h4>
            <table class=\"table table-sm table-striped\">
                <tr><th>submission/testcase</th><th>spread</th><th>#judgings</th><th>result</th></tr>
\t\t{% for spread in stats.runtime_spread %}
\t\t    <tr>
                        <td>s{{ spread.submitid }}/tc{{ spread.rank }}</td>
                        <td>{{ spread.spread | number_format(3) }}s</td>
                        <td>{{ spread.count }}</td>
                        <td>{{ spread.verdict | printResult }}</td>
\t\t    </tr>
\t\t{% endfor %}
\t    </table>
        {% if stats.judging_runs_differ %}
            <h4>Judging Run Differences</h4>
            <ul>
                {% for diff in stats.judging_runs_differ %}
                    <li>s{{ diff }}</li>
                {% endfor %}
            </ul>
            {% if stats.judging_runs_differ_overflow > 0 %}
                <em>Left out {{ stats.judging_runs_differ_overflow }} submissions with different judging results.</em>
            {% endif %}
        {% endif %}
        {% if stats.judgehost_stats | length > 1 %}
            <h4>Judgehost stats</h4>
            <table class=\"table table-sm table-striped\">
                <tr><th>Judgehost</th><th>#judgings</th><th>avg. runtime</th><th>std.dev.</th><th>avg. duration</th></tr>
                {% for judgehost in stats.judgehost_stats %}
                    <tr>
                        <td>{{ judgehost.judgehost | printHost }}</td>
                        <td>{{ judgehost.njudged }}</td>
                        <td>{{ judgehost.avgrun | number_format(3) }}s</td>
                        <td>{{ judgehost.stddev | number_format(3) }}</td>
                        <td>{{ judgehost.avgduration | number_format(3) }}s</td>
                    </tr>
                {% endfor %}
            </table>
        {% endif %}
        {% if stats.judgings %}
            <h4>Judging verdicts</h4>
            <table class=\"table table-sm table-striped\">
                <tr><th>jID</th><th>rID</th><th>Judgehost</th><th>duration (incl. compile)</th><th>verdict</th></tr>
                {% for judging in stats.judgings %}
                    <tr>
                        <td>j{{ judging.judgingid }}</td>
                        <td>r{{ judging.rejudgingid }}</td>
                        <td>{{ judging.hostname | printHost }}</td>
                        <td>{{ judging.duration | number_format(3) }}</td>
                        <td>{{ judging.result | printResult }}</td>
                    </tr>
                {% endfor %}
            </table>
        {% endif %}
    {% endif %}

    <h2 class=\"mt-4\">Details</h2>

    <div class=\"btn-toolbar mb-3\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
        <div class=\"btn-group btn-group-toggle btn-group-sm input-group-sm\" data-toggle=\"buttons\">
            <div class=\"input-group-prepend\">
                <div class=\"input-group-text listtoggles\">Show:</div>
            </div>
            {%- for idx, type in viewTypes %}

                <label class=\"btn btn-secondary {% if idx == view %}active{% endif %}\">
                    <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"{{ type }}\"
                           {% if idx == view %}checked{% endif %}> {{ type }}
                </label>
            {%- endfor %}
        </div>&nbsp;
        {% if rejudging.repeat %}
            <div class=\"btn-group-toggle btn-group-sm\" data-toggle=\"buttons\">
                <label class=\"btn btn-outline-secondary {% if showStatistics %}active{% endif %}\">
                    <input type=\"checkbox\" id=\"statistics-toggle\" {% if showStatistics %}checked{% endif %} autocomplete=\"off\">
                    <i class=\"fas fa-list-ol\"></i> Statistics
                </label>
            </div>
        {% endif %}
    </div>

    <form action=\"{{ path('jury_rejudging', {rejudgingId: rejudging.rejudgingid}) }}\" method=\"get\">
        <input type=\"hidden\" name=\"view\" value=\"{{ viewTypes[view] }}\"/>
        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                <label for=\"oldverdict\">Old verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"oldverdict\" id=\"oldverdict\">
                    <option value=\"all\" {% if oldverdict == 'all' %}selected{% endif %}>all</option>
                    {%- for verdict, abbreviation in verdicts %}
                        <option value=\"{{ verdict }}\" {% if oldverdict == verdict %}selected{% endif %}>
                            {{ verdict }}
                        </option>
                    {%- endfor %}

                </select>
            </div>
            <div class=\"form-group col-md-4\">
                <label for=\"newverdict\">New verdict</label>
                <select style=\"width: 100%\" class=\"select2 form-control\" name=\"newverdict\" id=\"newverdict\">
                    <option value=\"all\" {% if newverdict == 'all' %}selected{% endif %}>all</option>
                    {%- for verdict, abbreviation in verdicts %}
                        <option value=\"{{ verdict }}\" {% if newverdict == verdict %}selected{% endif %}>
                            {{ verdict }}
                        </option>
                    {%- endfor %}

                </select>
            </div>
            <div class=\"form-group col-md-2\">
                <label>&nbsp;</label>
                <input class=\"btn btn-primary form-control\" type=\"submit\" value=\"Filter\"/>
            </div>
            <div class=\"form-group col-md-2\">
                <label>&nbsp;</label>
                <a href=\"{{ path('jury_rejudging', {rejudgingId: rejudging.rejudgingid, view: viewTypes[view]}) }}\"
                   class=\"btn btn-secondary form-control\">Clear</a>
            </div>
        </div>
    </form>

    <div data-ajax-refresh-target data-ajax-refresh-after=\"updateMatrix\">
        {% include 'jury/partials/rejudging_submissions.html.twig' %}
    </div>

{% endblock %}

{% block extrafooter %}
    <script>
        \$(function () {
            \$('input[name=viewtype]').on('change', function () {
                window.location = '{{ path('jury_rejudging', {rejudgingId: rejudging.rejudgingid, view: 'REPLACE_ME', oldverdict: oldverdict, newverdict: newverdict, show_statistics: showStatistics}) }}'.replace('REPLACE_ME', \$(this).val()).replaceAll('&amp;', '&');
            });

            \$('#statistics-toggle').on('change', function () {
                window.location = '{{ path('jury_rejudging', {rejudgingId: rejudging.rejudgingid, view: viewTypes[view], oldverdict: oldverdict, newverdict: newverdict, show_statistics: 'REPLACE_ME'}) }}'.replace('REPLACE_ME', \$(this).is(':checked')).replaceAll('&amp;', '&');
            });

            \$('.select2').select2();

            window.updateMatrix = function () {
                var \$matrixData = \$('[data-new-rejudging-matrix]');
                var \$matrix = \$('[data-rejudging-matrix]');
                \$matrix.html(\$matrixData.children());

                var \$buttonData = \$('[data-new-rejudging-buttons]');
                var \$button = \$('[data-rejudging-buttons]');
                \$button.html(\$buttonData.children());

                var todo = \$('[data-new-todo]').text();
                var \$todo = \$('[data-todo]');
                \$todo.text(todo);
                if (parseInt(todo) <= 0) {
                    \$todo.closest('tr').addClass('d-none');
                } else {
                    \$todo.closest('tr').removeClass('d-none');
                }
            }
        });
    </script>
{% endblock %}
", "jury/rejudging.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/rejudging.html.twig");
    }
}
