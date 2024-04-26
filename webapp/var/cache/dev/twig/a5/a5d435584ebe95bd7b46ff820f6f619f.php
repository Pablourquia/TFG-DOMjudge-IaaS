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

/* partials/team.html.twig */
class __TwigTemplate_e5839893a71739a750af9acac6577df3 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/team.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/team.html.twig"));

        // line 1
        if (twig_test_empty((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <div class=\"alert alert-danger mt-4\">
        No team found by this id.
    </div>
";
        } else {
            // line 6
            echo "
    <div class=\"row\">
        <div class=\"col-lg-";
            // line 8
            echo twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 8, $this->source); })()), 4)) : (4)), "html", null, true);
            echo "\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Name</th>
                    <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 12, $this->source); })()), "effectiveName", [], "any", false, false, false, 12), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 16, $this->source); })()), "category", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                </tr>
                ";
            // line 18
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 18, $this->source); })()), "publicdescription", [], "any", false, false, false, 18))) {
                // line 19
                echo "                    <tr>
                        <th>Description</th>
                        <td>";
                // line 21
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 21, $this->source); })()), "publicdescription", [], "any", false, false, false, 21), "html", null, true));
                echo "</td>
                    </tr>
                ";
            }
            // line 24
            echo "                ";
            if (((isset($context["showAffiliations"]) || array_key_exists("showAffiliations", $context) ? $context["showAffiliations"] : (function () { throw new RuntimeError('Variable "showAffiliations" does not exist.', 24, $this->source); })()) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 24, $this->source); })()), "affiliation", [], "any", false, false, false, 24)))) {
                // line 25
                echo "                    <tr>
                        <th>Affiliation</th>
                        <td>
                        ";
                // line 28
                $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 28, $this->source); })()), "affiliation", [], "any", false, false, false, 28), "affilid", [], "any", false, false, false, 28);
                // line 29
                echo "                        ";
                if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 29, $this->source); })()), "affiliation", [], "any", false, false, false, 29))) {
                    // line 30
                    echo "                            ";
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 30, $this->source); })()), "affiliation", [], "any", false, false, false, 30), "externalid", [], "any", false, false, false, 30);
                    // line 31
                    echo "                        ";
                }
                // line 32
                echo "                        ";
                $context["affiliationLogo"] = $this->env->getFilter('assetPath')->getCallable()((isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 32, $this->source); })()), "affiliation");
                // line 33
                echo "                        ";
                if ((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 33, $this->source); })())) {
                    // line 34
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 34, $this->source); })())), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 34, $this->source); })()), "affiliation", [], "any", false, false, false, 34), "shortname", [], "any", false, false, false, 34), "html", null, true);
                    echo "\"
                                 title=\"";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 35, $this->source); })()), "affiliation", [], "any", false, false, false, 35), "shortname", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" class=\"affiliation-logo\">
                        ";
                }
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 37, $this->source); })()), "affiliation", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                    </tr>
                    ";
                // line 39
                if (((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 39, $this->source); })()) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 39, $this->source); })()), "affiliation", [], "any", false, false, false, 39), "country", [], "any", false, false, false, 39)))) {
                    // line 40
                    echo "                        <tr>
                            <th>Country</th>
                            <td>
                                ";
                    // line 43
                    echo $this->extensions['App\Twig\TwigExtension']->countryFlag(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 43, $this->source); })()), "affiliation", [], "any", false, false, false, 43), "country", [], "any", false, false, false, 43), true);
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 47
                echo "                ";
            }
            // line 48
            echo "                ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 48, $this->source); })()), "room", [], "any", false, false, false, 48))) {
                // line 49
                echo "                    <tr>
                        <th>Location</th>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 51, $this->source); })()), "room", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            // line 54
            echo "            </table>
        </div>
    ";
            // line 56
            $context["teamId"] = twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 56, $this->source); })()), "teamid", [], "any", false, false, false, 56);
            // line 57
            echo "    ";
            if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 57, $this->source); })()))) {
                // line 58
                echo "        ";
                $context["teamId"] = twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 58, $this->source); })()), "externalid", [], "any", false, false, false, 58);
                // line 59
                echo "    ";
            }
            // line 60
            echo "    ";
            $context["teamImage"] = $this->env->getFilter('assetPath')->getCallable()((isset($context["teamId"]) || array_key_exists("teamId", $context) ? $context["teamId"] : (function () { throw new RuntimeError('Variable "teamId" does not exist.', 60, $this->source); })()), "team");
            // line 61
            echo "    ";
            if ((isset($context["teamImage"]) || array_key_exists("teamImage", $context) ? $context["teamImage"] : (function () { throw new RuntimeError('Variable "teamImage" does not exist.', 61, $this->source); })())) {
                // line 62
                echo "        <div class=\"col-lg-";
                echo twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 62, $this->source); })()), 4)) : (4)), "html", null, true);
                echo "\">
        <img id=\"teampicture\" src=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["teamImage"]) || array_key_exists("teamImage", $context) ? $context["teamImage"] : (function () { throw new RuntimeError('Variable "teamImage" does not exist.', 63, $this->source); })())), "html", null, true);
                echo "\" alt=\"Picture of team ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 63, $this->source); })()), "effectiveName", [], "any", false, false, false, 63), "html", null, true);
                echo "\"
             title=\"Picture of team ";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 64, $this->source); })()), "effectiveName", [], "any", false, false, false, 64), "html", null, true);
                echo "\">
        </div>
    ";
            }
            // line 67
            echo "    </div>
";
        }
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 67,  193 => 64,  187 => 63,  182 => 62,  179 => 61,  176 => 60,  173 => 59,  170 => 58,  167 => 57,  165 => 56,  161 => 54,  155 => 51,  151 => 49,  148 => 48,  145 => 47,  138 => 43,  133 => 40,  131 => 39,  126 => 37,  121 => 35,  114 => 34,  111 => 33,  108 => 32,  105 => 31,  102 => 30,  99 => 29,  97 => 28,  92 => 25,  89 => 24,  83 => 21,  79 => 19,  77 => 18,  72 => 16,  65 => 12,  58 => 8,  54 => 6,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if team is empty %}
    <div class=\"alert alert-danger mt-4\">
        No team found by this id.
    </div>
{% else %}

    <div class=\"row\">
        <div class=\"col-lg-{{ size | default(4) }}\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Name</th>
                    <td>{{ team.effectiveName }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ team.category.name }}</td>
                </tr>
                {% if team.publicdescription is not empty %}
                    <tr>
                        <th>Description</th>
                        <td>{{ team.publicdescription | nl2br }}</td>
                    </tr>
                {% endif %}
                {% if showAffiliations and team.affiliation is not empty %}
                    <tr>
                        <th>Affiliation</th>
                        <td>
                        {% set affiliationId = team.affiliation.affilid %}
                        {% if showExternalId(team.affiliation) %}
                            {% set affiliationId = team.affiliation.externalid %}
                        {% endif %}
                        {% set affiliationLogo = affiliationId | assetPath('affiliation') %}
                        {% if affiliationLogo %}
                            <img src=\"{{ asset(affiliationLogo) }}\" alt=\"{{ team.affiliation.shortname }}\"
                                 title=\"{{ team.affiliation.shortname }}\" class=\"affiliation-logo\">
                        {% endif %}
{{ team.affiliation.name }}</td>
                    </tr>
                    {% if showFlags and team.affiliation.country is not empty %}
                        <tr>
                            <th>Country</th>
                            <td>
                                {{ team.affiliation.country | countryFlag(true) }}
                            </td>
                        </tr>
                    {% endif %}
                {% endif %}
                {% if team.room is not empty %}
                    <tr>
                        <th>Location</th>
                        <td>{{ team.room }}</td>
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
        <div class=\"col-lg-{{ size | default(4) }}\">
        <img id=\"teampicture\" src=\"{{ asset(teamImage) }}\" alt=\"Picture of team {{ team.effectiveName }}\"
             title=\"Picture of team {{ team.effectiveName }}\">
        </div>
    {% endif %}
    </div>
{% endif %}
", "partials/team.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/partials/team.html.twig");
    }
}
