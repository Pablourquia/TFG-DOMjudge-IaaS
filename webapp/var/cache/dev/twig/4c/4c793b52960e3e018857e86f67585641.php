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

/* jury/team_affiliation.html.twig */
class __TwigTemplate_f8624898b27cd75c51e0f394e52d443f extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team_affiliation.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team_affiliation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/team_affiliation.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/team_affiliation.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/team_affiliation.html.twig", 1);
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

        echo "Affiliation ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 4, $this->source); })()), "affilid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Affiliation ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 20, $this->source); })()), "affilid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 25, $this->source); })()), "externalid", [], "any", false, false, false, 25), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 31, $this->source); })()), "icpcid", [], "any", false, false, false, 31)) {
            // line 32
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 32, $this->source); })()), "icpcid", [], "any", false, false, false, 32), "html", null, true);
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
                    <th>Shortname</th>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 40, $this->source); })()), "shortname", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Logo</th>
                    <td class=\"affiliation-logo\">
                        ";
        // line 45
        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 45, $this->source); })()), "affilid", [], "any", false, false, false, 45);
        // line 46
        echo "                        ";
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 46, $this->source); })()))) {
            // line 47
            echo "                            ";
            $context["affiliationId"] = twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 47, $this->source); })()), "externalid", [], "any", false, false, false, 47);
            // line 48
            echo "                        ";
        }
        // line 49
        echo "                        ";
        $context["affiliationLogo"] = $this->env->getFilter('assetPath')->getCallable()((isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 49, $this->source); })()), "affiliation");
        // line 50
        echo "                        ";
        if ((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 50, $this->source); })())) {
            // line 51
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 51, $this->source); })())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 51, $this->source); })()), "shortname", [], "any", false, false, false, 51), "html", null, true);
            echo "\"
                                 title=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 52, $this->source); })()), "shortname", [], "any", false, false, false, 52), "html", null, true);
            echo "\" class=\"affiliation-logo\"/>
                        ";
        } else {
            // line 54
            echo "                            Not available
                        ";
        }
        // line 56
        echo "                    </td>
                </tr>
                ";
        // line 58
        if ((((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 58, $this->source); })()) && (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 58, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 58, $this->source); })()), "country", [], "any", false, false, false, 58))) {
            // line 59
            echo "                    <tr>
                        <th>Country</th>
                        <td>
                            ";
            // line 62
            echo $this->extensions['App\Twig\TwigExtension']->countryFlag(twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 62, $this->source); })()), "country", [], "any", false, false, false, 62), true);
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 66
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 66, $this->source); })()), "internalcomments", [], "any", false, false, false, 66))) {
            // line 67
            echo "                    <tr>
                        <th>Comments</th>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 69, $this->source); })()), "internalcomments", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 72
        echo "            </table>
        </div>
    </div>";
        // line 76
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 77
            echo "<p>
            ";
            // line 78
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation_edit", ["affilId" => twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 78, $this->source); })()), "affilid", [], "any", false, false, false, 78)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 79
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation_delete", ["affilId" => twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 79, $this->source); })()), "affilid", [], "any", false, false, false, 79)]), "Delete", "danger", "trash-alt", true);
            echo "
        </p>
    ";
        }
        // line 82
        echo "
    <h3>Teams</h3>
    ";
        // line 84
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 84, $this->source); })()), "teams", [], "any", false, false, false, 84))) {
            // line 85
            echo "        <p class=\"nodata\">no teams</p>
    ";
        } else {
            // line 87
            echo "        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"data-table table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th style=\"text-align: right;\">ID</th>
                        <th>Teamname</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["teamAffiliation"]) || array_key_exists("teamAffiliation", $context) ? $context["teamAffiliation"] : (function () { throw new RuntimeError('Variable "teamAffiliation" does not exist.', 97, $this->source); })()), "teams", [], "any", false, false, false, 97));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 98
                echo "                        <tr>
                            <td style=\"text-align: right;\">
                                <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 100)]), "html", null, true);
                echo "\">";
                echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge($context["team"], "t");
                echo "</a>
                            </td>
                            <td>
                                <a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 103)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "effectiveName", [], "any", false, false, false, 103), "html", null, true);
                echo "</a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                    </tbody>
                </table>
            </div>
        </div>

        ";
            // line 112
            if (array_key_exists("scoreboard", $context)) {
                // line 113
                echo "            <div data-ajax-refresh-target>
                ";
                // line 114
                $this->loadTemplate("partials/scoreboard_table.html.twig", "jury/team_affiliation.html.twig", 114)->display(twig_array_merge($context, ["displayRank" => true, "jury" => true]));
                // line 115
                echo "            </div>
        ";
            }
            // line 117
            echo "    ";
        }
        // line 118
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/team_affiliation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 118,  355 => 117,  351 => 115,  349 => 114,  346 => 113,  344 => 112,  337 => 107,  325 => 103,  317 => 100,  313 => 98,  309 => 97,  297 => 87,  293 => 85,  291 => 84,  287 => 82,  281 => 79,  277 => 78,  274 => 77,  272 => 76,  268 => 72,  262 => 69,  258 => 67,  255 => 66,  248 => 62,  243 => 59,  241 => 58,  237 => 56,  233 => 54,  228 => 52,  221 => 51,  218 => 50,  215 => 49,  212 => 48,  209 => 47,  206 => 46,  204 => 45,  196 => 40,  190 => 36,  186 => 34,  180 => 32,  178 => 31,  173 => 28,  167 => 25,  163 => 23,  161 => 22,  156 => 20,  146 => 13,  143 => 12,  130 => 11,  115 => 8,  110 => 7,  97 => 6,  69 => 4,  55 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Affiliation {{ teamAffiliation.affilid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Affiliation {{ teamAffiliation.name }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>{{ teamAffiliation.affilid }}</td>
                </tr>
                {% if showExternalId(teamAffiliation) %}
                    <tr>
                        <th>External ID</th>
                        <td>{{ teamAffiliation.externalid }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>ICPC ID</th>
                    <td>
                        {% if teamAffiliation.icpcid %}
                            {{ teamAffiliation.icpcid }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Shortname</th>
                    <td>{{ teamAffiliation.shortname }}</td>
                </tr>
                <tr>
                    <th>Logo</th>
                    <td class=\"affiliation-logo\">
                        {% set affiliationId = teamAffiliation.affilid %}
                        {% if showExternalId(teamAffiliation) %}
                            {% set affiliationId = teamAffiliation.externalid %}
                        {% endif %}
                        {% set affiliationLogo = affiliationId | assetPath('affiliation') %}
                        {% if affiliationLogo %}
                            <img src=\"{{ asset(affiliationLogo) }}\" alt=\"{{ teamAffiliation.shortname }}\"
                                 title=\"{{ teamAffiliation.shortname }}\" class=\"affiliation-logo\"/>
                        {% else %}
                            Not available
                        {% endif %}
                    </td>
                </tr>
                {% if showFlags and teamAffiliation and teamAffiliation.country %}
                    <tr>
                        <th>Country</th>
                        <td>
                            {{ teamAffiliation.country | countryFlag(true) }}
                        </td>
                    </tr>
                {% endif %}
                {% if teamAffiliation.internalcomments is not empty %}
                    <tr>
                        <th>Comments</th>
                        <td>{{ teamAffiliation.internalcomments }}</td>
                    </tr>
                {% endif %}
            </table>
        </div>
    </div>

    {%- if is_granted('ROLE_ADMIN') -%}
        <p>
            {{ button(path('jury_team_affiliation_edit', {'affilId': teamAffiliation.affilid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_team_affiliation_delete', {'affilId': teamAffiliation.affilid}), 'Delete', 'danger', 'trash-alt', true) }}
        </p>
    {% endif %}

    <h3>Teams</h3>
    {% if teamAffiliation.teams is empty %}
        <p class=\"nodata\">no teams</p>
    {% else %}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"data-table table table-sm table-striped table-hover\">
                    <thead>
                    <tr>
                        <th style=\"text-align: right;\">ID</th>
                        <th>Teamname</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for team in teamAffiliation.teams %}
                        <tr>
                            <td style=\"text-align: right;\">
                                <a href=\"{{ path('jury_team', {'teamId': team.teamid}) }}\">{{ team | entityIdBadge('t') }}</a>
                            </td>
                            <td>
                                <a href=\"{{ path('jury_team', {'teamId': team.teamid}) }}\">{{ team.effectiveName }}</a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>

        {% if scoreboard is defined %}
            <div data-ajax-refresh-target>
                {% include 'partials/scoreboard_table.html.twig' with {displayRank: true, jury: true} %}
            </div>
        {% endif %}
    {% endif %}

{% endblock %}
", "jury/team_affiliation.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/team_affiliation.html.twig");
    }
}
