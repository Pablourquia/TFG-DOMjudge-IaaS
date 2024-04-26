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

/* jury/team.html.twig */
class __TwigTemplate_8003319fba956fc4735905d47fff8bf1 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team.html.twig", 1);
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

        echo "Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 4, $this->source); })()), "teamid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Team ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 13, $this->source); })()), "effectiveName", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 20, $this->source); })()), "teamid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 25, $this->source); })()), "externalid", [], "any", false, false, false, 25), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 31, $this->source); })()), "icpcid", [], "any", false, false, false, 31)) {
            // line 32
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 32, $this->source); })()), "icpcid", [], "any", false, false, false, 32), "html", null, true);
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
                    <th>Name</th>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Display name</th>
                    <td>
                        ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 45, $this->source); })()), "displayName", [], "any", false, false, false, 45)) {
            // line 46
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 46, $this->source); })()), "displayName", [], "any", false, false, false, 46), "html", null, true);
            echo "
                        ";
        } else {
            // line 48
            echo "                            -
                        ";
        }
        // line 50
        echo "                    </td>
                </tr>
                <tr>
                    <th>First login</th>
                    <td>
                        ";
        // line 55
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 55, $this->source); })()), "users", [], "any", false, false, false, 55)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 55, $this->source); })()), "users", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), "firstLogin", [], "any", false, false, false, 55))) {
            // line 56
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 56, $this->source); })()), "users", [], "any", false, false, false, 56), "first", [], "any", false, false, false, 56), "firstLogin", [], "any", false, false, false, 56), "D d M Y H:i:s T"), "html", null, true);
            echo "
                        ";
        } else {
            // line 58
            echo "                            -
                        ";
        }
        // line 60
        echo "                    </td>
                </tr>
                <tr>
                    <th>IP</th>
                    <td>
                        ";
        // line 65
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 65, $this->source); })()), "users", [], "any", false, false, false, 65)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 65, $this->source); })()), "users", [], "any", false, false, false, 65), "first", [], "any", false, false, false, 65), "lastIpAddress", [], "any", false, false, false, 65))) {
            // line 66
            echo "                            ";
            echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 66, $this->source); })()), "users", [], "any", false, false, false, 66), "first", [], "any", false, false, false, 66), "lastIpAddress", [], "any", false, false, false, 66), true);
            echo "
                        ";
        } else {
            // line 68
            echo "                            -
                        ";
        }
        // line 70
        echo "                    </td>
                </tr>
                ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 72, $this->source); })()), "penalty", [], "any", false, false, false, 72)) {
            // line 73
            echo "                    <tr>
                        <th>Penalty time</th>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 75, $this->source); })()), "penalty", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 78
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 78, $this->source); })()), "room", [], "any", false, false, false, 78)) {
            // line 79
            echo "                    <tr>
                        <th>Location</th>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 81, $this->source); })()), "room", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 84
        echo "                <tr>
                    <th>User</th>
                    <td>
                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 87, $this->source); })()), "users", [], "any", false, false, false, 87));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 88
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, $context["user"], "userid", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 88), "html", null, true);
            echo "</a>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 91
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_add", ["team" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 91, $this->source); })()), "teamid", [], "any", false, false, false, 91)]), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-user-plus\"></i> add user
                                </a>
                            ";
            }
            // line 95
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    </td>
                </tr>
            </table>
        </div>

        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Category</th>
                    <td>
                        ";
        // line 106
        if (twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 106, $this->source); })()), "category", [], "any", false, false, false, 106)) {
            // line 107
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 107, $this->source); })()), "category", [], "any", false, false, false, 107), "categoryid", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\">
                                ";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 108, $this->source); })()), "category", [], "any", false, false, false, 108), "name", [], "any", false, false, false, 108), "html", null, true);
            echo "
                            </a>
                        ";
        } else {
            // line 111
            echo "                            -
                        ";
        }
        // line 113
        echo "                    </td>
                </tr>
                ";
        // line 115
        if (((isset($context["showAffiliations"]) || array_key_exists("showAffiliations", $context) ? $context["showAffiliations"] : (function () { throw new RuntimeError('Variable "showAffiliations" does not exist.', 115, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 115, $this->source); })()), "affiliation", [], "any", false, false, false, 115))) {
            // line 116
            echo "                    <tr>
                        <th>Affiliation</th>
                        <td>
                            ";
            // line 119
            $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 119, $this->source); })()), "affiliation", [], "any", false, false, false, 119), "affilid", [], "any", false, false, false, 119);
            // line 120
            echo "                            ";
            if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 120, $this->source); })()), "affiliation", [], "any", false, false, false, 120))) {
                // line 121
                echo "                                ";
                $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 121, $this->source); })()), "affiliation", [], "any", false, false, false, 121), "externalid", [], "any", false, false, false, 121);
                // line 122
                echo "                            ";
            }
            // line 123
            echo "                            ";
            $context["affiliationLogo"] = $this->env->getFilter('assetPath')->getCallable()((isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 123, $this->source); })()), "affilation");
            // line 124
            echo "                            ";
            if ((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 124, $this->source); })())) {
                // line 125
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 125, $this->source); })())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 125, $this->source); })()), "affiliation", [], "any", false, false, false, 125), "shortname", [], "any", false, false, false, 125), "html", null, true);
                echo "\"
                                     title=\"";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 126, $this->source); })()), "affiliation", [], "any", false, false, false, 126), "shortname", [], "any", false, false, false, 126), "html", null, true);
                echo "\" class=\"affiliation-logo\"/>
                            ";
            }
            // line 128
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 128, $this->source); })()), "affiliation", [], "any", false, false, false, 128), "affilid", [], "any", false, false, false, 128)]), "html", null, true);
            echo "\">
                                ";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 129, $this->source); })()), "affiliation", [], "any", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 134
        echo "                ";
        if ((((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 134, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 134, $this->source); })()), "affiliation", [], "any", false, false, false, 134)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 134, $this->source); })()), "affiliation", [], "any", false, false, false, 134), "country", [], "any", false, false, false, 134))) {
            // line 135
            echo "                    <tr>
                        <th>Country</th>
                        <td>
                            ";
            // line 138
            echo $this->extensions['App\Twig\TwigExtension']->countryFlag(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 138, $this->source); })()), "affiliation", [], "any", false, false, false, 138), "country", [], "any", false, false, false, 138), true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 142
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 142, $this->source); })()), "contests", [], "any", false, false, false, 142)) > 0)) {
            // line 143
            echo "                <tr>
                    <th>Contests</th>
                    <td>
                        ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 146, $this->source); })()), "contests", [], "any", false, false, false, 146));
            foreach ($context['_seq'] as $context["_key"] => $context["ucontest"]) {
                // line 147
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, $context["ucontest"], "cid", [], "any", false, false, false, 147)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ucontest"], "shortname", [], "any", false, false, false, 147), "html", null, true);
                echo "</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ucontest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "                    </td>
                </tr>
                ";
        }
        // line 152
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 152, $this->source); })()), "internalcomments", [], "any", false, false, false, 152))) {
            // line 153
            echo "                <tr>
                    <th>Internal comments (Jury only)</th>
                    <td>
                        ";
            // line 156
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 156, $this->source); })()), "internalcomments", [], "any", false, false, false, 156), "html", null, true));
            echo "
                    </td>
                </tr>
                ";
        }
        // line 160
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 160, $this->source); })()), "publicdescription", [], "any", false, false, false, 160))) {
            // line 161
            echo "                    <tr>
                        <th>Description (Public)</th>
                        <td>";
            // line 163
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 163, $this->source); })()), "publicdescription", [], "any", false, false, false, 163), "html", null, true));
            echo "</td>
                    </tr>
                ";
        }
        // line 166
        echo "            </table>
        </div>
    ";
        // line 168
        $context["teamId"] = twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 168, $this->source); })()), "teamid", [], "any", false, false, false, 168);
        // line 169
        echo "    ";
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 169, $this->source); })()))) {
            // line 170
            echo "        ";
            $context["teamId"] = twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 170, $this->source); })()), "externalid", [], "any", false, false, false, 170);
            // line 171
            echo "    ";
        }
        // line 172
        echo "    ";
        $context["teamImage"] = $this->env->getFilter('assetPath')->getCallable()((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 172, $this->source); })()), "team");
        // line 173
        echo "    ";
        if ((isset($context["teamImage"]) || array_key_exists("teamImage", $context) ? $context["teamImage"] : (function () { throw new RuntimeError('Variable "teamImage" does not exist.', 173, $this->source); })())) {
            // line 174
            echo "        <div class=\"col\">
        <img id=\"teampicture\" src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["teamImage"]) || array_key_exists("teamImage", $context) ? $context["teamImage"] : (function () { throw new RuntimeError('Variable "teamImage" does not exist.', 175, $this->source); })())), "html", null, true);
            echo "\" alt=\"Picture of team ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 175, $this->source); })()), "name", [], "any", false, false, false, 175), "html", null, true);
            echo "\"
             title=\"Picture of team ";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 176, $this->source); })()), "effectiveName", [], "any", false, false, false, 176), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 179
        echo "    </div>

    <div class=\"button-row\">";
        // line 182
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 183
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_edit", ["teamId" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 183, $this->source); })()), "teamid", [], "any", false, false, false, 183)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 184
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_delete", ["teamId" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 184, $this->source); })()), "teamid", [], "any", false, false, false, 184)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 186
        echo "        ";
        echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_send", ["teamto" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 186, $this->source); })()), "teamid", [], "any", false, false, false, 186)]), "Send message", "secondary", "envelope");
        echo "
        ";
        // line 187
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/team.html.twig", 187)->display(twig_array_merge($context, ["table" => "team", "id" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 187, $this->source); })()), "teamid", [], "any", false, false, false, 187), "buttonClass" => "btn-secondary"]));
        // line 188
        echo "    </div>

    <div data-ajax-refresh-target>
        ";
        // line 191
        $this->loadTemplate("jury/partials/team_score_and_submissions.html.twig", "jury/team.html.twig", 191)->display($context);
        // line 192
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 192,  535 => 191,  530 => 188,  528 => 187,  523 => 186,  518 => 184,  514 => 183,  512 => 182,  508 => 179,  502 => 176,  496 => 175,  493 => 174,  490 => 173,  487 => 172,  484 => 171,  481 => 170,  478 => 169,  476 => 168,  472 => 166,  466 => 163,  462 => 161,  459 => 160,  452 => 156,  447 => 153,  444 => 152,  439 => 149,  428 => 147,  424 => 146,  419 => 143,  416 => 142,  409 => 138,  404 => 135,  401 => 134,  393 => 129,  388 => 128,  383 => 126,  376 => 125,  373 => 124,  370 => 123,  367 => 122,  364 => 121,  361 => 120,  359 => 119,  354 => 116,  352 => 115,  348 => 113,  344 => 111,  338 => 108,  333 => 107,  331 => 106,  319 => 96,  313 => 95,  305 => 91,  303 => 90,  293 => 88,  288 => 87,  283 => 84,  277 => 81,  273 => 79,  270 => 78,  264 => 75,  260 => 73,  258 => 72,  254 => 70,  250 => 68,  244 => 66,  242 => 65,  235 => 60,  231 => 58,  225 => 56,  223 => 55,  216 => 50,  212 => 48,  206 => 46,  204 => 45,  196 => 40,  190 => 36,  186 => 34,  180 => 32,  178 => 31,  173 => 28,  167 => 25,  163 => 23,  161 => 22,  156 => 20,  146 => 13,  143 => 12,  130 => 11,  115 => 8,  110 => 7,  97 => 6,  69 => 4,  55 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Team {{ team.teamid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Team {{ team.effectiveName }}</h1>

    <div class=\"row\">
        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>{{ team.teamid }}</td>
                </tr>
                {% if showExternalId(team) %}
                    <tr>
                        <th>External ID</th>
                        <td>{{ team.externalid }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>ICPC ID</th>
                    <td>
                        {% if team.icpcid %}
                            {{ team.icpcid }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ team.name }}</td>
                </tr>
                <tr>
                    <th>Display name</th>
                    <td>
                        {% if team.displayName %}
                            {{ team.displayName }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>First login</th>
                    <td>
                        {% if team.users is not empty and team.users.first.firstLogin %}
                            {{ team.users.first.firstLogin | printtime('D d M Y H:i:s T') }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>IP</th>
                    <td>
                        {% if team.users is not empty and team.users.first.lastIpAddress %}
                            {{ team.users.first.lastIpAddress | printHost(true) }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                {% if team.penalty %}
                    <tr>
                        <th>Penalty time</th>
                        <td>{{ team.penalty }}</td>
                    </tr>
                {% endif %}
                {% if team.room %}
                    <tr>
                        <th>Location</th>
                        <td>{{ team.room }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>User</th>
                    <td>
                        {% for user in team.users %}
                            <a href=\"{{ path('jury_user', {'userId': user.userid}) }}\">{{ user.username }}</a>
                        {% else %}
                            {%- if is_granted('ROLE_ADMIN') -%}
                                <a href=\"{{ path('jury_user_add', {'team': team.teamid}) }}\">
                                    <i class=\"fas fa-user-plus\"></i> add user
                                </a>
                            {% endif %}
                        {% endfor %}
                    </td>
                </tr>
            </table>
        </div>

        <div class=\"col\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Category</th>
                    <td>
                        {% if team.category %}
                            <a href=\"{{ path('jury_team_category', {'categoryId': team.category.categoryid}) }}\">
                                {{ team.category.name }}
                            </a>
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                {% if showAffiliations and team.affiliation %}
                    <tr>
                        <th>Affiliation</th>
                        <td>
                            {% set affiliationId = team.affiliation.affilid %}
                            {% if showExternalId(team.affiliation) %}
                                {% set affiliationId = team.affiliation.externalid %}
                            {% endif %}
                            {% set affiliationLogo = affiliationId | assetPath('affilation') %}
                            {% if affiliationLogo %}
                                <img src=\"{{ asset(affiliationLogo) }}\" alt=\"{{ team.affiliation.shortname }}\"
                                     title=\"{{ team.affiliation.shortname }}\" class=\"affiliation-logo\"/>
                            {% endif %}
                            <a href=\"{{ path('jury_team_affiliation', {'affilId': team.affiliation.affilid}) }}\">
                                {{ team.affiliation.name }}
                            </a>
                        </td>
                    </tr>
                {% endif %}
                {% if showFlags and team.affiliation and team.affiliation.country %}
                    <tr>
                        <th>Country</th>
                        <td>
                            {{ team.affiliation.country | countryFlag(true) }}
                        </td>
                    </tr>
                {% endif %}
                {% if team.contests|length > 0 %}
                <tr>
                    <th>Contests</th>
                    <td>
                        {% for ucontest in team.contests %}
                            <a href=\"{{ path('jury_contest', {'contestId': ucontest.cid}) }}\">{{ ucontest.shortname }}</a>
                        {% endfor %}
                    </td>
                </tr>
                {% endif %}
                {% if team.internalcomments is not empty %}
                <tr>
                    <th>Internal comments (Jury only)</th>
                    <td>
                        {{ team.internalcomments | nl2br }}
                    </td>
                </tr>
                {% endif %}
                {% if team.publicdescription is not empty %}
                    <tr>
                        <th>Description (Public)</th>
                        <td>{{ team.publicdescription | nl2br }}</td>
                    </tr>
                {% endif %}
            </table>
        </div>
    {% set teamId = team.teamid %}
    {% if showExternalId(team) %}
        {% set teamId = team.externalid %}
    {% endif %}
    {% set teamImage = teamId | assetPath('team') %}
    {% if teamImage %}
        <div class=\"col\">
        <img id=\"teampicture\" src=\"{{ asset(teamImage) }}\" alt=\"Picture of team {{ team.name }}\"
             title=\"Picture of team {{ team.effectiveName }}\">
        </div>
    {% endif %}
    </div>

    <div class=\"button-row\">
        {%- if is_granted('ROLE_ADMIN') -%}
            {{ button(path('jury_team_edit', {'teamId': team.teamid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_team_delete', {'teamId': team.teamid}), 'Delete', 'danger', 'trash-alt', true) }}
        {% endif %}
        {{ button(path('jury_clarification_send', {'teamto': team.teamid}), 'Send message', 'secondary', 'envelope') }}
        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'team', id: team.teamid, buttonClass: 'btn-secondary'} %}
    </div>

    <div data-ajax-refresh-target>
        {% include 'jury/partials/team_score_and_submissions.html.twig' %}
    </div>

{% endblock %}
", "jury/team.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/team.html.twig");
    }
}
