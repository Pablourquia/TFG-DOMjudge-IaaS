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

/* jury/contest.html.twig */
class __TwigTemplate_aab596a14260fbd1abca167833a2daa3 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/contest.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/contest.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/contest.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/contest.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/contest.html.twig", 1);
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

        echo "Contest ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 4, $this->source); })()), "cid", [], "any", false, false, false, 4), "html", null, true);
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
        echo twig_call_macro($macros["macros"], "macro_toggle_extrahead", [], 9, $context, $this->getSourceContext());
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
    <h1>Contest ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>

    ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 16, $this->source); })()), "isActive", [], "any", false, false, false, 16)) {
            // line 17
            echo "        <div class=\"alert alert-success\">
            This contest is currently active.
        </div>
    ";
        }
        // line 21
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 21, $this->source); })()), "enabled", [], "any", false, false, false, 21)) {
            // line 22
            echo "        <div class=\"alert alert-danger\">
            This contest is disabled.
        </div>
    ";
        }
        // line 26
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 26, $this->source); })()), "finalizetime", [], "any", false, false, false, 26))) {
            // line 27
            echo "        <div class=\"alert alert-info\">
            This contest is final.
        </div>
    ";
        }
        // line 31
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 31, $this->source); })()), "isLocked", [], "any", false, false, false, 31))) {
            // line 32
            echo "<div class=\"alert alert-warning\">
            This contest is locked. Unlock it to edit contest data.
        </div>
    ";
        }
        // line 36
        echo "
    <div class=\"row\">
        <div class=\"col-lg-5\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>CID</th>
                    <td>c";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 42, $this->source); })()), "cid", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 44
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 44, $this->source); })()))) {
            // line 45
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 47, $this->source); })()), "externalid", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 50
        echo "                <tr>
                    <th>Short name</th>
                    <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 52, $this->source); })()), "shortname", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Activate time</th>
                    <td>
                        ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 57, $this->source); })()), "activatetimeString", [], "any", false, false, false, 57), "html", null, true);
        echo "
                        ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 58, $this->source); })()), "isActive", [], "any", false, false, false, 58)) {
            // line 59
            echo "                            <i class=\"fas fa-check\"></i>
                        ";
        }
        // line 61
        echo "                    </td>
                </tr>
                <tr>
                    <th>Start time</th>
                    <td>
                        ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 66, $this->source); })()), "starttimeEnabled", [], "any", false, false, false, 66)) {
            // line 67
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 67, $this->source); })()), "starttimeString", [], "any", false, false, false, 67), "html", null, true);
            echo "
                            ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 68, $this->source); })()), "state", [], "any", false, false, false, 68), "started", [], "any", false, false, false, 68)) {
                // line 69
                echo "                                <i class=\"fas fa-check\"></i>
                            ";
            }
            // line 71
            echo "                        ";
        } else {
            // line 72
            echo "                            <span class=\"ignore\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 72, $this->source); })()), "starttimeString", [], "any", false, false, false, 72), "html", null, true);
            echo "</span> <em>delayed</em>
                        ";
        }
        // line 74
        echo "                    </td>
                </tr>
                <tr>
                    <th>Scoreboard freeze</th>
                    <td>
                        ";
        // line 79
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezetimeString", [], "any", true, true, false, 79)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezetimeString", [], "any", false, false, false, 79), "-")) : ("-")), "html", null, true);
        echo "
                        ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 80, $this->source); })()), "state", [], "any", false, false, false, 80), "frozen", [], "any", false, false, false, 80)) {
            // line 81
            echo "                            <i class=\"fas fa-check\"></i>
                        ";
        }
        // line 83
        echo "                    </td>
                </tr>
                <tr>
                    <th>End time</th>
                    <td>
                        ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 88, $this->source); })()), "endtimeString", [], "any", false, false, false, 88), "html", null, true);
        echo "
                        ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 89, $this->source); })()), "state", [], "any", false, false, false, 89), "ended", [], "any", false, false, false, 89)) {
            // line 90
            echo "                            <i class=\"fas fa-check\"></i>
                        ";
        }
        // line 92
        echo "                    </td>
                </tr>
                <tr>
                    <th>Scoreboard unfreeze</th>
                    <td>
                        ";
        // line 97
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "unfreezetimeString", [], "any", true, true, false, 97)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "unfreezetimeString", [], "any", false, false, false, 97), "-")) : ("-")), "html", null, true);
        echo "
                        ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 98, $this->source); })()), "state", [], "any", false, false, false, 98), "thawed", [], "any", false, false, false, 98)) {
            // line 99
            echo "                            <i class=\"fas fa-check\"></i>
                        ";
        }
        // line 101
        echo "                    </td>
                </tr>
                <tr>
                    <th>Deactivate time</th>
                    <td>";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 105, $this->source); })()), "deactivatetimeString", [], "any", false, false, false, 105), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Allow submit</th>
                    <td>
                        <form action=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_toggle_submit", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 110, $this->source); })()), "cid", [], "any", false, false, false, 110)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                            <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\" data-off=\"No\"
                                   name=\"allow_submit\" ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 112, $this->source); })()), "allowSubmit", [], "any", false, false, false, 112)) {
            echo "checked";
        }
        echo ">
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Process balloons</th>
                    <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 118, $this->source); })()), "processBalloons", [], "any", false, false, false, 118)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Process medals</th>
                    <td>";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 122, $this->source); })()), "medalsEnabled", [], "any", false, false, false, 122)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Medals</th>
                    <td>
                        ";
        // line 127
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 127, $this->source); })()), "medalsEnabled", [], "any", false, false, false, 127)) {
            // line 128
            echo "                            <div class=\"card\">
                                <h6 class=\"card-header\" id=\"categories\">
                                    <a class=\"collapsed d-block text-dark pt-0 pb-0\" data-toggle=\"collapse\" href=\"#collapsecategories\" aria-expanded=\"true\" aria-controls=\"collapsecategories\" id=\"collapseheader\">
                                        ";
            // line 131
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 131, $this->source); })()), "goldMedals", [], "any", false, false, false, 131) > 0) + (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 131, $this->source); })()), "silverMedals", [], "any", false, false, false, 131) > 0)) + (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 131, $this->source); })()), "bronzeMedals", [], "any", false, false, false, 131) > 0)), "html", null, true);
            echo " different types of medals (Show/Hide details)
                                        <i class=\"fa fa-chevron-down float-right\"></i>
                                    </a>
                                </h6>
                                <div id=\"collapsecategories\" class=\"collapse collapsed\" aria-labelledby=\"categories\">
                                    <div class=\"card-body pb-1\">
                                        <a>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 137, $this->source); })()), "goldMedals", [], "any", false, false, false, 137), "html", null, true);
            echo " Gold Medal(s)</a>
                                        <br>
                                        <a>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 139, $this->source); })()), "silverMedals", [], "any", false, false, false, 139), "html", null, true);
            echo " Silver Medal(s)</a>
                                        <br>
                                        <a>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 141, $this->source); })()), "bronzeMedals", [], "any", false, false, false, 141), "html", null, true);
            echo " Bronze Medal(s)</a>
                                        <br>
                                        For all teams from the following categories:
                                        <ul>
                                            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 145, $this->source); })()), "medalCategories", [], "any", false, false, false, 145));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 146
                echo "                                                <li>
                                                    <a href=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 147)]), "html", null, true);
                echo "\">
                                                        ";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 148), "html", null, true);
                echo "
                                                    </a>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
        } else {
            // line 157
            echo "                            <em>none</em>
                        ";
        }
        // line 159
        echo "                    </td>
                </tr>
                <tr>
                    <th>Publicly visible</th>
                    <td>";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 163, $this->source); })()), "public", [], "any", false, false, false, 163)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Open to all teams</th>
                    <td>";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 167, $this->source); })()), "openToAllTeams", [], "any", false, false, false, 167)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Teams</th>
                    <td>
                        ";
        // line 172
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 172, $this->source); })()), "openToAllTeams", [], "any", false, false, false, 172)) {
            // line 173
            echo "                            <em>all teams</em>
                        ";
        } else {
            // line 175
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 175, $this->source); })()), "teams", [], "any", false, false, false, 175));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 176
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 176)]), "html", null, true);
                echo "\">
                                    ";
                // line 177
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "effectiveName", [], "any", false, false, false, 177), "html", null, true);
                echo " ";
                echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge($context["team"], "t");
                echo "
                                </a>
                                <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 181, $this->source); })()), "teamCategories", [], "any", false, false, false, 181));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 182
                echo "                                All teams from
                                <a href=\"";
                // line 183
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 183)]), "html", null, true);
                echo "\">
                                    ";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 184), "html", null, true);
                echo "
                                </a>
                                <br>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "                        ";
        }
        // line 189
        echo "                    </td>
                </tr>
                <tr>
                    <th>Static scoreboard ZIP</th>
                    <td>
                        <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_scoreboard_data_zip", ["contest" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 194, $this->source); })()), "cid", [], "any", false, false, false, 194)]), "html", null, true);
        echo "\">
                            <i class=\"fas fa-download\"></i> Download
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Sample data ZIP</th>
                    <td>
                        <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_samples_data_zip", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 202, $this->source); })()), "cid", [], "any", false, false, false, 202)]), "html", null, true);
        echo "\">
                            <i class=\"fas fa-download\"></i> Download
                        </a>
                        <br/>
                        <small class=\"text-muted\">
                            Contains samples, attachments and statement for all problems.
                        </small>
                    </td>
                </tr>
                ";
        // line 211
        $context["contestId"] = twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 211, $this->source); })()), "cid", [], "any", false, false, false, 211);
        // line 212
        echo "                ";
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 212, $this->source); })()))) {
            // line 213
            echo "                    ";
            $context["contestId"] = twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 213, $this->source); })()), "externalid", [], "any", false, false, false, 213);
            // line 214
            echo "                ";
        }
        // line 215
        echo "                ";
        $context["banner"] = $this->env->getFilter('assetPath')->getCallable()((isset($context["contestId"]) || array_key_exists("contestId", $context) ? $context["contestId"] : (function () { throw new RuntimeError('Variable "contestId" does not exist.', 215, $this->source); })()), "contest");
        // line 216
        echo "                ";
        if ( !(isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 216, $this->source); })())) {
            // line 217
            echo "                    ";
            $context["banner"] = $this->env->getFunction('globalBannerAssetPath')->getCallable()();
            // line 218
            echo "                ";
        }
        // line 219
        echo "                ";
        if ((isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 219, $this->source); })())) {
            // line 220
            echo "                    <tr>
                        <th>Banner</th>
                        <td><img style=\"max-width: 300px;\" src=\"";
            // line 222
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 222, $this->source); })())), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 222, $this->source); })()), "name", [], "any", false, false, false, 222), "html", null, true);
            echo "\" /></td>
                ";
        }
        // line 224
        echo "                <tr>
                    <th>Warning message</th>
                    <td>";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 226, $this->source); })()), "warningMessage", [], "any", false, false, false, 226), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
    </div>

    ";
        // line 232
        if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 232, $this->source); })()), "finalizetime", [], "any", false, false, false, 232)) {
            // line 233
            echo "        <h2>Finalized</h2>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"table table-sm table-striped\">
                    <tr>
                        <th>Finalized at</th>
                        <td>";
            // line 240
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 240, $this->source); })()), "finalizetime", [], "any", false, false, false, 240), "Y-m-d H:i:s (T)"), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>B</th>
                        <td>";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 244, $this->source); })()), "b", [], "any", false, false, false, 244), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>Comment</th>
                        <td>";
            // line 248
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 248, $this->source); })()), "finalizecomment", [], "any", false, false, false, 248), "html", null, true));
            echo "</td>
                    </tr>
                </table>
            </div>
        </div>
    ";
        }
        // line 254
        echo "
    ";
        // line 255
        if ((isset($context["allowRemovedIntervals"]) || array_key_exists("allowRemovedIntervals", $context) ? $context["allowRemovedIntervals"] : (function () { throw new RuntimeError('Variable "allowRemovedIntervals" does not exist.', 255, $this->source); })())) {
            // line 256
            echo "        <h2>Removed intervals</h2>
        ";
            // line 257
            if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 257, $this->source); })()), "removedIntervals", [], "any", false, false, false, 257)))) {
                // line 258
                echo "            <p class=\"nodata\">None.</p>
        ";
            } else {
                // line 260
                echo "            ";
                if (array_key_exists("removedIntervalForm", $context)) {
                    // line 261
                    echo "                ";
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 261, $this->source); })()), 'form_start');
                    echo "
            ";
                }
                // line 263
                echo "            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <table class=\"table data-table table-sm table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>From</th>
                            <th></th>
                            <th>To</th>
                            <th>Duration</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["removedIntervals"]) || array_key_exists("removedIntervals", $context) ? $context["removedIntervals"] : (function () { throw new RuntimeError('Variable "removedIntervals" does not exist.', 277, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["removedInterval"]) {
                    // line 278
                    echo "                            <tr>
                                <td>";
                    // line 279
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "intervalid", [], "any", false, false, false, 279), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 280
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "starttimeString", [], "any", false, false, false, 280), "html", null, true);
                    echo "</td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>";
                    // line 282
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["removedInterval"], "endtimeString", [], "any", false, false, false, 282), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 283
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, $context["removedInterval"], "starttime", [], "any", false, false, false, 283), twig_get_attribute($this->env, $this->source, $context["removedInterval"], "endtime", [], "any", false, false, false, 283)), "html", null, true);
                    echo "</td>
                                <td>
                                    <button class=\"btn btn-sm btn-danger remove-interval-button\" type=\"button\"
                                            data-submit-url=\"";
                    // line 286
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_remove_interval", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 286, $this->source); })()), "cid", [], "any", false, false, false, 286), "intervalId" => twig_get_attribute($this->env, $this->source, $context["removedInterval"], "intervalid", [], "any", false, false, false, 286)]), "html", null, true);
                    echo "\">
                                        <i class=\"fas fa-trash-alt\"></i></button>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['removedInterval'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 291
                echo "                        ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 292
                    echo "                            <tr>
                                <td>new</td>
                                <td>
                                    ";
                    // line 295
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 295, $this->source); })()), "starttimeString", [], "any", false, false, false, 295), 'errors');
                    echo "
                                    ";
                    // line 296
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 296, $this->source); })()), "starttimeString", [], "any", false, false, false, 296), 'widget');
                    echo "
                                </td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>
                                    ";
                    // line 300
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 300, $this->source); })()), "endtimeString", [], "any", false, false, false, 300), 'errors');
                    echo "
                                    ";
                    // line 301
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 301, $this->source); })()), "endtimeString", [], "any", false, false, false, 301), 'widget');
                    echo "
                                </td>
                                <td></td>
                                <td>";
                    // line 304
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 304, $this->source); })()), "add", [], "any", false, false, false, 304), 'widget');
                    echo "</td>
                            </tr>
                        ";
                }
                // line 307
                echo "                        </tbody>
                    </table>
                </div>
            </div>
            ";
                // line 311
                if (array_key_exists("removedIntervalForm", $context)) {
                    // line 312
                    echo "                <small class=\"text-muted\">Use the format <b><code>YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone</code></b> for
                    start/end times.
                </small>
                ";
                    // line 315
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["removedIntervalForm"]) || array_key_exists("removedIntervalForm", $context) ? $context["removedIntervalForm"] : (function () { throw new RuntimeError('Variable "removedIntervalForm" does not exist.', 315, $this->source); })()), 'form_end');
                    echo "
            ";
                }
                // line 317
                echo "        ";
            }
            // line 318
            echo "
        <script>
            \$(function () {
                \$('.remove-interval-button').on('click', function () {
                    if (confirm('Really delete interval?')) {
                        var \$form = \$('<form method=\"post\" />');
                        \$form.attr('action', \$(this).data('submit-url'));
                        // Some browsers require the form to be present in the DOM,
                        // so append it to the body
                        \$(document.body).append(\$form);
                        \$form.submit();
                    }
                    return false;
                });
            });
        </script>

    ";
        }
        // line 336
        echo "
    <h2 class=\"mt-2\">Problems</h2>

    ";
        // line 339
        if (twig_test_empty((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 339, $this->source); })()))) {
            // line 340
            echo "        <p class=\"nodata\">No problems added yet</p>
    ";
        } else {
            // line 342
            echo "        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"table data-table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Shortname</th>
                        <th>Points</th>
                        <th>Allow<br>submit</th>
                        <th>Allow<br>judge</th>
                        <th>Color</th>
                        <th>Lazy eval</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 360
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 360, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 361
                echo "                        <tr>
                            ";
                // line 362
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 362)]);
                // line 363
                echo "                            <td><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 363, $this->source); })()), "html", null, true);
                echo "\">p";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 363), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 364
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 364, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 364), "name", [], "any", false, false, false, 364), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 365
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 365, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 365), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 366
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 366, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 366), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 367
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 367, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "allowSubmit", [], "any", false, false, false, 367)), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 368
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 368, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["problem"], "allowJudge", [], "any", false, false, false, 368)), "html", null, true);
                echo "</a></td>
                            ";
                // line 369
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 369))) {
                    // line 370
                    echo "                                <td><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 370, $this->source); })()), "html", null, true);
                    echo "\">&nbsp;</a></td>
                            ";
                } else {
                    // line 372
                    echo "                                <td title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 372), "html", null, true);
                    echo "\">
                                    <a href=\"";
                    // line 373
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 373, $this->source); })()), "html", null, true);
                    echo "\">
                                        ";
                    // line 374
                    echo $this->extensions['App\Twig\TwigExtension']->problemBadge($context["problem"]);
                    echo "
                                    </a>
                                </td>
                            ";
                }
                // line 378
                echo "                            <td>
                                <a href=\"";
                // line 379
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 379, $this->source); })()), "html", null, true);
                echo "\">
                                    ";
                // line 380
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printLazyMode(twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 380)), "html", null, true);
                echo "
                                </a>
                            </td>
                            <td>
                                ";
                // line 384
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") &&  !twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 384, $this->source); })()), "isLocked", [], "any", false, false, false, 384))) {
                    // line 385
                    echo "                                    <a title=\"Unlink problem from contest\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_problem_delete", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 385, $this->source); })()), "cid", [], "any", false, false, false, 385), "probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 385)]), "html", null, true);
                    echo "\"
                                       data-ajax-modal>
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                ";
                }
                // line 390
                echo "                            </td>
                            <td>
                                ";
                // line 392
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 393
                    echo "                                    <a title=\"Judge remaining testcases\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_problem_request_remaining", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 393, $this->source); })()), "cid", [], "any", false, false, false, 393), "probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 393)]), "html", null, true);
                    echo "\">
                                        <i class=\"fas fa-gavel\"></i>
                                    </a>
                                ";
                }
                // line 397
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 400
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 405
        echo "
    <div class=\"button-row\">";
        // line 407
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 408
            if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 408, $this->source); })()), "isLocked", [], "any", false, false, false, 408)) {
                // line 409
                echo "                ";
                echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_unlock", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 409, $this->source); })()), "cid", [], "any", false, false, false, 409)]), "Unlock", "danger", "unlock");
                echo "
            ";
            } else {
                // line 411
                echo "                ";
                echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_edit", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 411, $this->source); })()), "cid", [], "any", false, false, false, 411)]), "Edit", "primary", "edit");
                echo "
                ";
                // line 412
                echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_delete", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 412, $this->source); })()), "cid", [], "any", false, false, false, 412)]), "Delete", "danger", "trash-alt", true);
                echo "
                ";
                // line 413
                echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_lock", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 413, $this->source); })()), "cid", [], "any", false, false, false, 413)]), "Lock", "secondary", "lock");
                echo "
                ";
                // line 414
                if (twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 414, $this->source); })()), "finalizetime", [], "any", false, false, false, 414)) {
                    // line 415
                    echo "                    ";
                    echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_finalize", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 415, $this->source); })()), "cid", [], "any", false, false, false, 415)]), "Update finalization", "secondary", "lock");
                    echo "
                ";
                } else {
                    // line 417
                    echo "                    ";
                    echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_finalize", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 417, $this->source); })()), "cid", [], "any", false, false, false, 417)]), "Finalize this contest", "secondary", "flag-checkered");
                    echo "
                ";
                }
                // line 419
                echo "            ";
            }
            // line 420
            echo "            ";
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_request_remaining", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 420, $this->source); })()), "cid", [], "any", false, false, false, 420)]), "Judge remaining testcases", "secondary", "gavel");
            echo "
        ";
        }
        // line 422
        echo "        ";
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest_prefetch", ["contestId" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 422, $this->source); })()), "cid", [], "any", false, false, false, 422)]), "Heat up judgehosts with contest data", "secondary", "download");
        echo "
        ";
        // line 423
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/contest.html.twig", 423)->display(twig_array_merge($context, ["table" => "contest", "id" => twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 423, $this->source); })()), "cid", [], "any", false, false, false, 423), "buttonClass" => "btn-secondary"]));
        // line 424
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 428
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 429
        echo "    ";
        echo twig_call_macro($macros["macros"], "macro_toggle_autosubmit_extrafooter", [], 429, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/contest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1006 => 429,  993 => 428,  978 => 424,  976 => 423,  971 => 422,  965 => 420,  962 => 419,  956 => 417,  950 => 415,  948 => 414,  944 => 413,  940 => 412,  935 => 411,  929 => 409,  927 => 408,  925 => 407,  922 => 405,  915 => 400,  907 => 397,  899 => 393,  897 => 392,  893 => 390,  884 => 385,  882 => 384,  875 => 380,  871 => 379,  868 => 378,  861 => 374,  857 => 373,  852 => 372,  846 => 370,  844 => 369,  838 => 368,  832 => 367,  826 => 366,  820 => 365,  814 => 364,  807 => 363,  805 => 362,  802 => 361,  798 => 360,  778 => 342,  774 => 340,  772 => 339,  767 => 336,  747 => 318,  744 => 317,  739 => 315,  734 => 312,  732 => 311,  726 => 307,  720 => 304,  714 => 301,  710 => 300,  703 => 296,  699 => 295,  694 => 292,  691 => 291,  680 => 286,  674 => 283,  670 => 282,  665 => 280,  661 => 279,  658 => 278,  654 => 277,  638 => 263,  632 => 261,  629 => 260,  625 => 258,  623 => 257,  620 => 256,  618 => 255,  615 => 254,  606 => 248,  599 => 244,  592 => 240,  583 => 233,  581 => 232,  572 => 226,  568 => 224,  561 => 222,  557 => 220,  554 => 219,  551 => 218,  548 => 217,  545 => 216,  542 => 215,  539 => 214,  536 => 213,  533 => 212,  531 => 211,  519 => 202,  508 => 194,  501 => 189,  498 => 188,  488 => 184,  484 => 183,  481 => 182,  476 => 181,  464 => 177,  459 => 176,  454 => 175,  450 => 173,  448 => 172,  440 => 167,  433 => 163,  427 => 159,  423 => 157,  416 => 152,  406 => 148,  402 => 147,  399 => 146,  395 => 145,  388 => 141,  383 => 139,  378 => 137,  369 => 131,  364 => 128,  362 => 127,  354 => 122,  347 => 118,  336 => 112,  331 => 110,  323 => 105,  317 => 101,  313 => 99,  311 => 98,  307 => 97,  300 => 92,  296 => 90,  294 => 89,  290 => 88,  283 => 83,  279 => 81,  277 => 80,  273 => 79,  266 => 74,  260 => 72,  257 => 71,  253 => 69,  251 => 68,  246 => 67,  244 => 66,  237 => 61,  233 => 59,  231 => 58,  227 => 57,  219 => 52,  215 => 50,  209 => 47,  205 => 45,  203 => 44,  198 => 42,  190 => 36,  184 => 32,  182 => 31,  176 => 27,  173 => 26,  167 => 22,  164 => 21,  158 => 17,  156 => 16,  151 => 14,  148 => 13,  135 => 12,  120 => 9,  116 => 8,  111 => 7,  98 => 6,  70 => 4,  56 => 1,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Contest {{ contest.cid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
    {{ macros.toggle_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Contest {{ contest.name }}</h1>

    {% if contest.isActive %}
        <div class=\"alert alert-success\">
            This contest is currently active.
        </div>
    {% endif %}
    {% if not contest.enabled %}
        <div class=\"alert alert-danger\">
            This contest is disabled.
        </div>
    {% endif %}
    {% if contest.finalizetime is not empty %}
        <div class=\"alert alert-info\">
            This contest is final.
        </div>
    {% endif %}
    {%- if is_granted('ROLE_ADMIN') and contest.isLocked -%}
        <div class=\"alert alert-warning\">
            This contest is locked. Unlock it to edit contest data.
        </div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-lg-5\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>CID</th>
                    <td>c{{ contest.cid }}</td>
                </tr>
                {% if showExternalId(contest) %}
                    <tr>
                        <th>External ID</th>
                        <td>{{ contest.externalid }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Short name</th>
                    <td>{{ contest.shortname }}</td>
                </tr>
                <tr>
                    <th>Activate time</th>
                    <td>
                        {{ contest.activatetimeString }}
                        {% if contest.isActive %}
                            <i class=\"fas fa-check\"></i>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Start time</th>
                    <td>
                        {% if contest.starttimeEnabled %}
                            {{ contest.starttimeString }}
                            {% if contest.state.started %}
                                <i class=\"fas fa-check\"></i>
                            {% endif %}
                        {% else %}
                            <span class=\"ignore\">{{ contest.starttimeString }}</span> <em>delayed</em>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Scoreboard freeze</th>
                    <td>
                        {{ contest.freezetimeString|default('-') }}
                        {% if contest.state.frozen %}
                            <i class=\"fas fa-check\"></i>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>End time</th>
                    <td>
                        {{ contest.endtimeString }}
                        {% if contest.state.ended %}
                            <i class=\"fas fa-check\"></i>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Scoreboard unfreeze</th>
                    <td>
                        {{ contest.unfreezetimeString|default('-') }}
                        {% if contest.state.thawed %}
                            <i class=\"fas fa-check\"></i>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Deactivate time</th>
                    <td>{{ contest.deactivatetimeString }}</td>
                </tr>
                <tr>
                    <th>Allow submit</th>
                    <td>
                        <form action=\"{{ path('jury_contest_toggle_submit', {'contestId': contest.cid}) }}\" method=\"post\" class=\"d-inline\">
                            <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\" data-off=\"No\"
                                   name=\"allow_submit\" {% if contest.allowSubmit %}checked{% endif %}>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Process balloons</th>
                    <td>{{ contest.processBalloons | printYesNo }}</td>
                </tr>
                <tr>
                    <th>Process medals</th>
                    <td>{{ contest.medalsEnabled | printYesNo }}</td>
                </tr>
                <tr>
                    <th>Medals</th>
                    <td>
                        {% if contest.medalsEnabled %}
                            <div class=\"card\">
                                <h6 class=\"card-header\" id=\"categories\">
                                    <a class=\"collapsed d-block text-dark pt-0 pb-0\" data-toggle=\"collapse\" href=\"#collapsecategories\" aria-expanded=\"true\" aria-controls=\"collapsecategories\" id=\"collapseheader\">
                                        {{ (contest.goldMedals > 0) + (contest.silverMedals > 0) + (contest.bronzeMedals > 0) }} different types of medals (Show/Hide details)
                                        <i class=\"fa fa-chevron-down float-right\"></i>
                                    </a>
                                </h6>
                                <div id=\"collapsecategories\" class=\"collapse collapsed\" aria-labelledby=\"categories\">
                                    <div class=\"card-body pb-1\">
                                        <a>{{ contest.goldMedals }} Gold Medal(s)</a>
                                        <br>
                                        <a>{{ contest.silverMedals }} Silver Medal(s)</a>
                                        <br>
                                        <a>{{ contest.bronzeMedals }} Bronze Medal(s)</a>
                                        <br>
                                        For all teams from the following categories:
                                        <ul>
                                            {% for category in contest.medalCategories %}
                                                <li>
                                                    <a href=\"{{ path('jury_team_category', {'categoryId': category.categoryid}) }}\">
                                                        {{ category.name }}
                                                    </a>
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <em>none</em>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Publicly visible</th>
                    <td>{{ contest.public | printYesNo }}</td>
                </tr>
                <tr>
                    <th>Open to all teams</th>
                    <td>{{ contest.openToAllTeams | printYesNo }}</td>
                </tr>
                <tr>
                    <th>Teams</th>
                    <td>
                        {% if contest.openToAllTeams %}
                            <em>all teams</em>
                        {% else %}
                            {% for team in contest.teams %}
                                <a href=\"{{ path('jury_team', {'teamId': team.teamid}) }}\">
                                    {{ team.effectiveName }} {{ team | entityIdBadge('t') }}
                                </a>
                                <br>
                            {% endfor %}
                            {% for category in contest.teamCategories %}
                                All teams from
                                <a href=\"{{ path('jury_team_category', {'categoryId': category.categoryid}) }}\">
                                    {{ category.name }}
                                </a>
                                <br>
                            {% endfor %}
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Static scoreboard ZIP</th>
                    <td>
                        <a class=\"btn btn-sm btn-secondary\" href=\"{{ path('public_scoreboard_data_zip', {contest: contest.cid}) }}\">
                            <i class=\"fas fa-download\"></i> Download
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Sample data ZIP</th>
                    <td>
                        <a class=\"btn btn-sm btn-secondary\" href=\"{{ path('jury_contest_samples_data_zip', {contestId: contest.cid}) }}\">
                            <i class=\"fas fa-download\"></i> Download
                        </a>
                        <br/>
                        <small class=\"text-muted\">
                            Contains samples, attachments and statement for all problems.
                        </small>
                    </td>
                </tr>
                {% set contestId = contest.cid %}
                {% if showExternalId(contest) %}
                    {% set contestId = contest.externalid %}
                {% endif %}
                {% set banner = contestId | assetPath('contest') %}
                {% if not banner %}
                    {% set banner = globalBannerAssetPath() %}
                {% endif %}
                {% if banner %}
                    <tr>
                        <th>Banner</th>
                        <td><img style=\"max-width: 300px;\" src=\"{{ asset(banner) }}\" title=\"{{ contest.name }}\" /></td>
                {% endif %}
                <tr>
                    <th>Warning message</th>
                    <td>{{ contest.warningMessage }}</td>
                </tr>
            </table>
        </div>
    </div>

    {% if contest.finalizetime %}
        <h2>Finalized</h2>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"table table-sm table-striped\">
                    <tr>
                        <th>Finalized at</th>
                        <td>{{ contest.finalizetime | printtime('Y-m-d H:i:s (T)') }}</td>
                    </tr>
                    <tr>
                        <th>B</th>
                        <td>{{ contest.b }}</td>
                    </tr>
                    <tr>
                        <th>Comment</th>
                        <td>{{ contest.finalizecomment | nl2br }}</td>
                    </tr>
                </table>
            </div>
        </div>
    {% endif %}

    {% if allowRemovedIntervals %}
        <h2>Removed intervals</h2>
        {% if not is_granted('ROLE_ADMIN') and contest.removedIntervals is empty %}
            <p class=\"nodata\">None.</p>
        {% else %}
            {% if removedIntervalForm is defined %}
                {{ form_start(removedIntervalForm) }}
            {% endif %}
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <table class=\"table data-table table-sm table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>From</th>
                            <th></th>
                            <th>To</th>
                            <th>Duration</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for removedInterval in removedIntervals %}
                            <tr>
                                <td>{{ removedInterval.intervalid }}</td>
                                <td>{{ removedInterval.starttimeString }}</td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>{{ removedInterval.endtimeString }}</td>
                                <td>{{ removedInterval.starttime | printtimediff(removedInterval.endtime) }}</td>
                                <td>
                                    <button class=\"btn btn-sm btn-danger remove-interval-button\" type=\"button\"
                                            data-submit-url=\"{{ path('jury_contest_remove_interval', {'contestId': contest.cid, 'intervalId': removedInterval.intervalid}) }}\">
                                        <i class=\"fas fa-trash-alt\"></i></button>
                                </td>
                            </tr>
                        {% endfor %}
                        {% if is_granted('ROLE_ADMIN') %}
                            <tr>
                                <td>new</td>
                                <td>
                                    {{ form_errors(removedIntervalForm.starttimeString) }}
                                    {{ form_widget(removedIntervalForm.starttimeString) }}
                                </td>
                                <td><i class=\"fas fa-arrow-right\"></i></td>
                                <td>
                                    {{ form_errors(removedIntervalForm.endtimeString) }}
                                    {{ form_widget(removedIntervalForm.endtimeString) }}
                                </td>
                                <td></td>
                                <td>{{ form_widget(removedIntervalForm.add) }}</td>
                            </tr>
                        {% endif %}
                        </tbody>
                    </table>
                </div>
            </div>
            {% if removedIntervalForm is defined %}
                <small class=\"text-muted\">Use the format <b><code>YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone</code></b> for
                    start/end times.
                </small>
                {{ form_end(removedIntervalForm) }}
            {% endif %}
        {% endif %}

        <script>
            \$(function () {
                \$('.remove-interval-button').on('click', function () {
                    if (confirm('Really delete interval?')) {
                        var \$form = \$('<form method=\"post\" />');
                        \$form.attr('action', \$(this).data('submit-url'));
                        // Some browsers require the form to be present in the DOM,
                        // so append it to the body
                        \$(document.body).append(\$form);
                        \$form.submit();
                    }
                    return false;
                });
            });
        </script>

    {% endif %}

    <h2 class=\"mt-2\">Problems</h2>

    {% if problems is empty %}
        <p class=\"nodata\">No problems added yet</p>
    {% else %}
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <table class=\"table data-table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Shortname</th>
                        <th>Points</th>
                        <th>Allow<br>submit</th>
                        <th>Allow<br>judge</th>
                        <th>Color</th>
                        <th>Lazy eval</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for problem in problems %}
                        <tr>
                            {% set link = path('jury_problem', {'probId': problem.probid}) %}
                            <td><a href=\"{{ link }}\">p{{ problem.probid }}</a></td>
                            <td><a href=\"{{ link }}\">{{ problem.problem.name }}</a></td>
                            <td><a href=\"{{ link }}\">{{ problem.shortname }}</a></td>
                            <td><a href=\"{{ link }}\">{{ problem.points }}</a></td>
                            <td><a href=\"{{ link }}\">{{ problem.allowSubmit | printYesNo }}</a></td>
                            <td><a href=\"{{ link }}\">{{ problem.allowJudge | printYesNo }}</a></td>
                            {% if problem.color is empty %}
                                <td><a href=\"{{ link }}\">&nbsp;</a></td>
                            {% else %}
                                <td title=\"{{ problem.color }}\">
                                    <a href=\"{{ link }}\">
                                        {{ problem | problemBadge }}
                                    </a>
                                </td>
                            {% endif %}
                            <td>
                                <a href=\"{{ link }}\">
                                    {{ problem.lazyEvalResults | printLazyMode }}
                                </a>
                            </td>
                            <td>
                                {% if is_granted('ROLE_ADMIN') and not contest.isLocked %}
                                    <a title=\"Unlink problem from contest\" href=\"{{ path('jury_contest_problem_delete', {'contestId': contest.cid, 'probId': problem.probid}) }}\"
                                       data-ajax-modal>
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </a>
                                {% endif %}
                            </td>
                            <td>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <a title=\"Judge remaining testcases\" href=\"{{ path('jury_contest_problem_request_remaining', {'contestId': contest.cid, 'probId': problem.probid}) }}\">
                                        <i class=\"fas fa-gavel\"></i>
                                    </a>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    {% endif %}

    <div class=\"button-row\">
        {%- if is_granted('ROLE_ADMIN') -%}
            {% if contest.isLocked %}
                {{ button(path('jury_contest_unlock', {'contestId': contest.cid}), 'Unlock', 'danger', 'unlock') }}
            {% else %}
                {{ button(path('jury_contest_edit', {'contestId': contest.cid}), 'Edit', 'primary', 'edit') }}
                {{ button(path('jury_contest_delete', {'contestId': contest.cid}), 'Delete', 'danger', 'trash-alt', true) }}
                {{ button(path('jury_contest_lock', {'contestId': contest.cid}), 'Lock', 'secondary', 'lock') }}
                {% if contest.finalizetime %}
                    {{ button(path('jury_contest_finalize', {'contestId': contest.cid}), 'Update finalization', 'secondary', 'lock') }}
                {% else %}
                    {{ button(path('jury_contest_finalize', {'contestId': contest.cid}), 'Finalize this contest', 'secondary', 'flag-checkered') }}
                {% endif %}
            {% endif %}
            {{ button(path('jury_contest_request_remaining', {'contestId': contest.cid}), 'Judge remaining testcases', 'secondary', 'gavel') }}
        {% endif %}
        {{ button(path('jury_contest_prefetch', {'contestId': contest.cid}), 'Heat up judgehosts with contest data', 'secondary', 'download') }}
        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'contest', id: contest.cid, buttonClass: 'btn-secondary'} %}
    </div>

{% endblock %}

{% block extrafooter %}
    {{ macros.toggle_autosubmit_extrafooter() }}
{% endblock %}

", "jury/contest.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/contest.html.twig");
    }
}
