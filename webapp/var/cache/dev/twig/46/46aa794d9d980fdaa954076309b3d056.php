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

/* jury/problem.html.twig */
class __TwigTemplate_5ab3e1bac11b93c0f15ada336099cba2 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem.html.twig", 1);
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

        echo "Problem ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 4, $this->source); })()), "probid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Problem ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>p";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 20, $this->source); })()), "probid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 25, $this->source); })()), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>Testcases</th>
                    <td>
                        ";
        // line 31
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 31, $this->source); })()), "testcases", [], "any", false, false, false, 31))) {
            // line 32
            echo "                            <em>no testcases</em>
                        ";
        } else {
            // line 34
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 34, $this->source); })()), "testcases", [], "any", false, false, false, 34), "count", [], "any", false, false, false, 34), "html", null, true);
            echo "
                        ";
        }
        // line 36
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcases", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 36, $this->source); })()), "probid", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">details";
        // line 37
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") &&  !(isset($context["lockedProblem"]) || array_key_exists("lockedProblem", $context) ? $context["lockedProblem"] : (function () { throw new RuntimeError('Variable "lockedProblem" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "/ edit
                            ";
        }
        // line 40
        echo "                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Timelimit</th>
                    <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 45, $this->source); })()), "timelimit", [], "any", false, false, false, 45), "html", null, true);
        echo " sec</td>
                </tr>
                <tr>
                    <th>Memory limit</th>
                    <td>
                        ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 50, $this->source); })()), "memlimit", [], "any", false, false, false, 50) == null)) {
            // line 51
            echo "                            ";
            echo twig_escape_filter($this->env, (isset($context["defaultMemoryLimit"]) || array_key_exists("defaultMemoryLimit", $context) ? $context["defaultMemoryLimit"] : (function () { throw new RuntimeError('Variable "defaultMemoryLimit" does not exist.', 51, $this->source); })()), "html", null, true);
            echo " kB (default)
                        ";
        } else {
            // line 53
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 53, $this->source); })()), "memlimit", [], "any", false, false, false, 53), "html", null, true);
            echo " kB
                        ";
        }
        // line 55
        echo "                    </td>
                </tr>
                <tr>
                    <th>Output limit</th>
                    <td>
                        ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 60, $this->source); })()), "outputlimit", [], "any", false, false, false, 60) == null)) {
            // line 61
            echo "                            ";
            echo twig_escape_filter($this->env, (isset($context["defaultOutputLimit"]) || array_key_exists("defaultOutputLimit", $context) ? $context["defaultOutputLimit"] : (function () { throw new RuntimeError('Variable "defaultOutputLimit" does not exist.', 61, $this->source); })()), "html", null, true);
            echo " kB (default)
                        ";
        } else {
            // line 63
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 63, $this->source); })()), "outputlimit", [], "any", false, false, false, 63), "html", null, true);
            echo " kB
                        ";
        }
        // line 65
        echo "                    </td>
                </tr>
                ";
        // line 67
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 67, $this->source); })()), "problemtextType", [], "any", false, false, false, 67))) {
            // line 68
            echo "                    <tr>
                        <th>Problem text</th>
                        <td>
                            <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 71, $this->source); })()), "probid", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">
                                <i title=\"view problem description\"
                                   class=\"fas fa-file-";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 73, $this->source); })()), "problemtextType", [], "any", false, false, false, 73), "html", null, true);
            echo "\"></i>
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 78
        echo "                <tr>
                    <th>Run script</th>
                    <td class=\"filename\">
                        ";
        // line 81
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 81, $this->source); })()), "runExecutable", [], "any", false, false, false, 81))) {
            // line 82
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 82, $this->source); })()), "runExecutable", [], "any", false, false, false, 82), "execid", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 82, $this->source); })()), "runExecutable", [], "any", false, false, false, 82), "execid", [], "any", false, false, false, 82), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 84
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => (isset($context["defaultRunExecutable"]) || array_key_exists("defaultRunExecutable", $context) ? $context["defaultRunExecutable"] : (function () { throw new RuntimeError('Variable "defaultRunExecutable" does not exist.', 84, $this->source); })())]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["defaultRunExecutable"]) || array_key_exists("defaultRunExecutable", $context) ? $context["defaultRunExecutable"] : (function () { throw new RuntimeError('Variable "defaultRunExecutable" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "</a>
                            (default)
                        ";
        }
        // line 87
        echo "                    </td>
                </tr>
                ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 89, $this->source); })()), "combinedRunCompare", [], "any", false, false, false, 89)) {
            // line 90
            echo "                    <tr>
                        <th>Compare script</th>
                        <td>Run script combines run and compare script.</td>
                    </tr>
                ";
        } else {
            // line 95
            echo "                    <tr>
                        <th>Compare script</th>
                        <td class=\"filename\">
                            ";
            // line 98
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 98, $this->source); })()), "compareExecutable", [], "any", false, false, false, 98))) {
                // line 99
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 99, $this->source); })()), "compareExecutable", [], "any", false, false, false, 99), "execid", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 99, $this->source); })()), "compareExecutable", [], "any", false, false, false, 99), "execid", [], "any", false, false, false, 99), "html", null, true);
                echo "</a>
                            ";
            } else {
                // line 101
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => (isset($context["defaultCompareExecutable"]) || array_key_exists("defaultCompareExecutable", $context) ? $context["defaultCompareExecutable"] : (function () { throw new RuntimeError('Variable "defaultCompareExecutable" does not exist.', 101, $this->source); })())]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["defaultCompareExecutable"]) || array_key_exists("defaultCompareExecutable", $context) ? $context["defaultCompareExecutable"] : (function () { throw new RuntimeError('Variable "defaultCompareExecutable" does not exist.', 101, $this->source); })()), "html", null, true);
                echo "</a>
                                (default)
                            ";
            }
            // line 104
            echo "                        </td>
                    </tr>
                ";
        }
        // line 107
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 107, $this->source); })()), "specialCompareArgs", [], "any", false, false, false, 107))) {
            // line 108
            echo "                    <tr>
                        <th>Compare script arguments</th>
                        <td class=\"filename\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 110, $this->source); })()), "specialCompareArgs", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 113
        echo "            </table>
        </div>
    </div>

    <div class=\"button-row\">";
        // line 118
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 119
            if ( !(isset($context["lockedProblem"]) || array_key_exists("lockedProblem", $context) ? $context["lockedProblem"] : (function () { throw new RuntimeError('Variable "lockedProblem" does not exist.', 119, $this->source); })())) {
                // line 120
                echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_edit", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 120, $this->source); })()), "probid", [], "any", false, false, false, 120)]), "Edit", "primary", "edit");
                echo "
                ";
                // line 121
                echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_delete", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 121, $this->source); })()), "probid", [], "any", false, false, false, 121)]), "Delete", "danger", "trash-alt", true);
                echo "
            ";
            }
            // line 123
            echo "            ";
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_request_remaining", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 123, $this->source); })()), "probid", [], "any", false, false, false, 123)]), "Judge remaining testcases", "secondary", "gavel");
            echo "
        ";
        }
        // line 125
        echo "        ";
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_export_problem", ["problemId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 125, $this->source); })()), "probid", [], "any", false, false, false, 125)]), "Export", "secondary", "download");
        echo "
        ";
        // line 126
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/problem.html.twig", 126)->display(twig_array_merge($context, ["table" => "problem", "id" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 126, $this->source); })()), "probid", [], "any", false, false, false, 126), "buttonClass" => "btn-secondary"]));
        // line 127
        echo "    </div>

    <h3>Contests</h3>

    ";
        // line 131
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 131, $this->source); })()), "contestProblems", [], "any", false, false, false, 131))) {
            // line 132
            echo "        <p class=\"nodata\">No contests defined</p>
    ";
        } else {
            // line 134
            echo "        <div class=\"row\">
            <div class=\"col-md-6\">
                <table
                    class=\"data-table table table-hover table-striped table-sm\">
                    <thead class=\"thead-light\">
                    <tr>
                        <th>CID</th>
                        <th>Contest<br/>shortname</th>
                        <th>Contest<br/>name</th>
                        <th>Problem<br/>shortname</th>
                        <th>Allow<br/>submit</th>
                        <th>Allow<br/>judge</th>
                        <th>Colour</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 150, $this->source); })()), "contestProblems", [], "any", false, false, false, 150));
            foreach ($context['_seq'] as $context["_key"] => $context["contestProblem"]) {
                // line 151
                echo "                        ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, $context["contestProblem"], "cid", [], "any", false, false, false, 151)]);
                // line 152
                echo "                        <tr>
                            <td>
                                <a href=\"";
                // line 154
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 154, $this->source); })()), "html", null, true);
                echo "\">c";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "cid", [], "any", false, false, false, 154), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 157
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 157, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "contest", [], "any", false, false, false, 157), "shortname", [], "any", false, false, false, 157), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 160
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 160, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "contest", [], "any", false, false, false, 160), "name", [], "any", false, false, false, 160), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 163
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 163, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "shortname", [], "any", false, false, false, 163), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 166
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 166, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "allowSubmit", [], "any", false, false, false, 166)), "html", null, true);
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 169
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 169, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "allowJudge", [], "any", false, false, false, 169)), "html", null, true);
                echo "</a>
                            </td>
                            ";
                // line 171
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "color", [], "any", false, false, false, 171))) {
                    // line 172
                    echo "                                <td><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 172, $this->source); })()), "html", null, true);
                    echo "\">&nbsp;</a></td>
                            ";
                } else {
                    // line 174
                    echo "                                <td title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "color", [], "any", false, false, false, 174), "html", null, true);
                    echo "\">
                                    <a href=\"";
                    // line 175
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 175, $this->source); })()), "html", null, true);
                    echo "\">
                                        ";
                    // line 176
                    echo $this->extensions['App\Twig\TwigExtension']->problemBadge($context["contestProblem"]);
                    echo "
                                    </a>
                                </td>
                            ";
                }
                // line 180
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contestProblem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 187
        echo "
    <h3>Attachments</h3>

    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 192
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["problemAttachmentForm"]) || array_key_exists("problemAttachmentForm", $context) ? $context["problemAttachmentForm"] : (function () { throw new RuntimeError('Variable "problemAttachmentForm" does not exist.', 192, $this->source); })()), 'form_start');
        echo "
            <table class=\"table table-sm table-striped table-hover\">
                <thead class=\"thead-light\">
                <tr>
                    <th>Name</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 201
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 201, $this->source); })()), "attachments", [], "any", false, false, false, 201))) {
            // line 202
            echo "                    <tr>
                        <td colspan=\"2\">
                            <p class=\"nodata\">No attachments</p>
                        </td>
                    </tr>
                ";
        } else {
            // line 208
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 208, $this->source); })()), "attachments", [], "any", false, false, false, 208));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 209
                echo "                        <tr>
                            <td>";
                // line 210
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 210), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 212
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_attachment_fetch", ["attachmentId" => twig_get_attribute($this->env, $this->source, $context["attachment"], "attachmentid", [], "any", false, false, false, 212)]), "html", null, true);
                echo "\"
                                   class=\"btn btn-sm btn-primary\">
                                    <i class=\"fas fa-download\"></i>
                                </a>
                                ";
                // line 216
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") &&  !(isset($context["lockedProblem"]) || array_key_exists("lockedProblem", $context) ? $context["lockedProblem"] : (function () { throw new RuntimeError('Variable "lockedProblem" does not exist.', 216, $this->source); })()))) {
                    // line 217
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_attachment_delete", ["attachmentId" => twig_get_attribute($this->env, $this->source, $context["attachment"], "attachmentid", [], "any", false, false, false, 217)]), "html", null, true);
                    echo "\"
                                       class=\"btn btn-sm btn-danger\"
                                       data-ajax-modal>
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                ";
                }
                // line 223
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "                ";
        }
        // line 227
        echo "
                ";
        // line 228
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") &&  !(isset($context["lockedProblem"]) || array_key_exists("lockedProblem", $context) ? $context["lockedProblem"] : (function () { throw new RuntimeError('Variable "lockedProblem" does not exist.', 228, $this->source); })()))) {
            // line 229
            echo "                    <tr>
                        <td>
                            ";
            // line 231
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["problemAttachmentForm"]) || array_key_exists("problemAttachmentForm", $context) ? $context["problemAttachmentForm"] : (function () { throw new RuntimeError('Variable "problemAttachmentForm" does not exist.', 231, $this->source); })()), "content", [], "any", false, false, false, 231), 'errors');
            echo "
                            ";
            // line 232
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["problemAttachmentForm"]) || array_key_exists("problemAttachmentForm", $context) ? $context["problemAttachmentForm"] : (function () { throw new RuntimeError('Variable "problemAttachmentForm" does not exist.', 232, $this->source); })()), "content", [], "any", false, false, false, 232), 'widget');
            echo "
                        </td>
                        <td>
                            ";
            // line 235
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["problemAttachmentForm"]) || array_key_exists("problemAttachmentForm", $context) ? $context["problemAttachmentForm"] : (function () { throw new RuntimeError('Variable "problemAttachmentForm" does not exist.', 235, $this->source); })()), "add", [], "any", false, false, false, 235), 'widget');
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 239
        echo "                </tbody>
            </table>
            ";
        // line 241
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["problemAttachmentForm"]) || array_key_exists("problemAttachmentForm", $context) ? $context["problemAttachmentForm"] : (function () { throw new RuntimeError('Variable "problemAttachmentForm" does not exist.', 241, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

    <h3>Submissions</h3>

    <div data-ajax-refresh-target>";
        // line 248
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/problem.html.twig", 248)->display(twig_array_merge($context, ["showTestcases" => false]));
        // line 249
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/problem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 249,  622 => 248,  613 => 241,  609 => 239,  602 => 235,  596 => 232,  592 => 231,  588 => 229,  586 => 228,  583 => 227,  580 => 226,  572 => 223,  562 => 217,  560 => 216,  553 => 212,  548 => 210,  545 => 209,  540 => 208,  532 => 202,  530 => 201,  518 => 192,  511 => 187,  504 => 182,  497 => 180,  490 => 176,  486 => 175,  481 => 174,  475 => 172,  473 => 171,  466 => 169,  458 => 166,  450 => 163,  442 => 160,  434 => 157,  426 => 154,  422 => 152,  419 => 151,  415 => 150,  397 => 134,  393 => 132,  391 => 131,  385 => 127,  383 => 126,  378 => 125,  372 => 123,  367 => 121,  363 => 120,  361 => 119,  359 => 118,  353 => 113,  347 => 110,  343 => 108,  340 => 107,  335 => 104,  326 => 101,  318 => 99,  316 => 98,  311 => 95,  304 => 90,  302 => 89,  298 => 87,  289 => 84,  281 => 82,  279 => 81,  274 => 78,  266 => 73,  261 => 71,  256 => 68,  254 => 67,  250 => 65,  244 => 63,  238 => 61,  236 => 60,  229 => 55,  223 => 53,  217 => 51,  215 => 50,  207 => 45,  200 => 40,  196 => 38,  194 => 37,  190 => 36,  184 => 34,  180 => 32,  178 => 31,  173 => 28,  167 => 25,  163 => 23,  161 => 22,  156 => 20,  146 => 13,  143 => 12,  130 => 11,  115 => 8,  110 => 7,  97 => 6,  69 => 4,  55 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Problem {{ problem.probid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Problem {{ problem.name }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>p{{ problem.probid }}</td>
                </tr>
                {% if showExternalId(problem) %}
                    <tr>
                        <th>External ID</th>
                        <td>{{ problem.externalid }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Testcases</th>
                    <td>
                        {% if problem.testcases is empty %}
                            <em>no testcases</em>
                        {% else %}
                            {{ problem.testcases.count }}
                        {% endif %}
                        <a href=\"{{ path('jury_problem_testcases', {'probId': problem.probid}) }}\">details
                            {%- if is_granted('ROLE_ADMIN') and not lockedProblem -%}
                                / edit
                            {% endif %}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Timelimit</th>
                    <td>{{ problem.timelimit }} sec</td>
                </tr>
                <tr>
                    <th>Memory limit</th>
                    <td>
                        {% if problem.memlimit == null %}
                            {{ defaultMemoryLimit }} kB (default)
                        {% else %}
                            {{ problem.memlimit }} kB
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Output limit</th>
                    <td>
                        {% if problem.outputlimit == null %}
                            {{ defaultOutputLimit }} kB (default)
                        {% else %}
                            {{ problem.outputlimit }} kB
                        {% endif %}
                    </td>
                </tr>
                {% if problem.problemtextType is not empty %}
                    <tr>
                        <th>Problem text</th>
                        <td>
                            <a href=\"{{ path('jury_problem_text', {'probId': problem.probid}) }}\">
                                <i title=\"view problem description\"
                                   class=\"fas fa-file-{{ problem.problemtextType }}\"></i>
                            </a>
                        </td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Run script</th>
                    <td class=\"filename\">
                        {% if problem.runExecutable is not empty %}
                            <a href=\"{{ path('jury_executable', {'execId': problem.runExecutable.execid}) }}\">{{ problem.runExecutable.execid }}</a>
                        {% else %}
                            <a href=\"{{ path('jury_executable', {'execId': defaultRunExecutable}) }}\">{{ defaultRunExecutable }}</a>
                            (default)
                        {% endif %}
                    </td>
                </tr>
                {% if problem.combinedRunCompare %}
                    <tr>
                        <th>Compare script</th>
                        <td>Run script combines run and compare script.</td>
                    </tr>
                {% else %}
                    <tr>
                        <th>Compare script</th>
                        <td class=\"filename\">
                            {% if problem.compareExecutable is not empty %}
                                <a href=\"{{ path('jury_executable', {'execId': problem.compareExecutable.execid}) }}\">{{ problem.compareExecutable.execid }}</a>
                            {% else %}
                                <a href=\"{{ path('jury_executable', {'execId': defaultCompareExecutable}) }}\">{{ defaultCompareExecutable }}</a>
                                (default)
                            {% endif %}
                        </td>
                    </tr>
                {% endif %}
                {% if problem.specialCompareArgs is not empty %}
                    <tr>
                        <th>Compare script arguments</th>
                        <td class=\"filename\">{{ problem.specialCompareArgs }}</td>
                    </tr>
                {% endif %}
            </table>
        </div>
    </div>

    <div class=\"button-row\">
        {%- if is_granted('ROLE_ADMIN') -%}
            {%- if not lockedProblem -%}
                {{ button(path('jury_problem_edit', {'probId': problem.probid}), 'Edit', 'primary', 'edit') }}
                {{ button(path('jury_problem_delete', {'probId': problem.probid}), 'Delete', 'danger', 'trash-alt', true) }}
            {% endif %}
            {{ button(path('jury_problem_request_remaining', {'probId': problem.probid}), 'Judge remaining testcases', 'secondary', 'gavel') }}
        {% endif %}
        {{ button(path('jury_export_problem', {'problemId': problem.probid}), 'Export', 'secondary', 'download') }}
        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'problem', id: problem.probid, buttonClass: 'btn-secondary'} %}
    </div>

    <h3>Contests</h3>

    {% if problem.contestProblems is empty %}
        <p class=\"nodata\">No contests defined</p>
    {% else %}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <table
                    class=\"data-table table table-hover table-striped table-sm\">
                    <thead class=\"thead-light\">
                    <tr>
                        <th>CID</th>
                        <th>Contest<br/>shortname</th>
                        <th>Contest<br/>name</th>
                        <th>Problem<br/>shortname</th>
                        <th>Allow<br/>submit</th>
                        <th>Allow<br/>judge</th>
                        <th>Colour</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for contestProblem in problem.contestProblems %}
                        {% set link = path('jury_contest', {'contestId': contestProblem.cid}) %}
                        <tr>
                            <td>
                                <a href=\"{{ link }}\">c{{ contestProblem.cid }}</a>
                            </td>
                            <td>
                                <a href=\"{{ link }}\">{{ contestProblem.contest.shortname }}</a>
                            </td>
                            <td>
                                <a href=\"{{ link }}\">{{ contestProblem.contest.name }}</a>
                            </td>
                            <td>
                                <a href=\"{{ link }}\">{{ contestProblem.shortname }}</a>
                            </td>
                            <td>
                                <a href=\"{{ link }}\">{{ contestProblem.allowSubmit | printYesNo }}</a>
                            </td>
                            <td>
                                <a href=\"{{ link }}\">{{ contestProblem.allowJudge | printYesNo }}</a>
                            </td>
                            {% if contestProblem.color is empty %}
                                <td><a href=\"{{ link }}\">&nbsp;</a></td>
                            {% else %}
                                <td title=\"{{ contestProblem.color }}\">
                                    <a href=\"{{ link }}\">
                                        {{ contestProblem | problemBadge }}
                                    </a>
                                </td>
                            {% endif %}
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    {% endif %}

    <h3>Attachments</h3>

    <div class=\"row\">
        <div class=\"col-md-6\">
            {{ form_start(problemAttachmentForm) }}
            <table class=\"table table-sm table-striped table-hover\">
                <thead class=\"thead-light\">
                <tr>
                    <th>Name</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {% if problem.attachments is empty %}
                    <tr>
                        <td colspan=\"2\">
                            <p class=\"nodata\">No attachments</p>
                        </td>
                    </tr>
                {% else %}
                    {% for attachment in problem.attachments %}
                        <tr>
                            <td>{{ attachment.name }}</td>
                            <td>
                                <a href=\"{{ path('jury_attachment_fetch', {'attachmentId': attachment.attachmentid}) }}\"
                                   class=\"btn btn-sm btn-primary\">
                                    <i class=\"fas fa-download\"></i>
                                </a>
                                {% if is_granted('ROLE_ADMIN') and not lockedProblem %}
                                    <a href=\"{{ path('jury_attachment_delete', {'attachmentId': attachment.attachmentid}) }}\"
                                       class=\"btn btn-sm btn-danger\"
                                       data-ajax-modal>
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}

                {% if is_granted('ROLE_ADMIN') and not lockedProblem %}
                    <tr>
                        <td>
                            {{ form_errors(problemAttachmentForm.content) }}
                            {{ form_widget(problemAttachmentForm.content) }}
                        </td>
                        <td>
                            {{ form_widget(problemAttachmentForm.add) }}
                        </td>
                    </tr>
                {% endif %}
                </tbody>
            </table>
            {{ form_end(problemAttachmentForm) }}
        </div>
    </div>

    <h3>Submissions</h3>

    <div data-ajax-refresh-target>
        {%- include 'jury/partials/submission_list.html.twig' with {showTestcases: false} %}
    </div>

{% endblock %}
", "jury/problem.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/problem.html.twig");
    }
}
