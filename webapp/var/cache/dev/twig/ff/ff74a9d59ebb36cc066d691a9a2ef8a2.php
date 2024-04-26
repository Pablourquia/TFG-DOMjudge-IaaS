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

/* partials/scoreboard_table.html.twig */
class __TwigTemplate_3fd5508ddbf0c33f2c7c14bf1af9e7b3 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_table.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_table.html.twig"));

        // line 1
        if ( !array_key_exists("limitToTeams", $context)) {
            // line 2
            echo "    ";
            $context["limitToTeams"] = null;
            // line 3
            echo "    ";
            $context["limitToTeamIds"] = null;
        } else {
            // line 5
            echo "    ";
            $context["limitToTeamIds"] = [];
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context) ? $context["limitToTeams"] : (function () { throw new RuntimeError('Variable "limitToTeams" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 7
                echo "        ";
                $context["limitToTeamIds"] = twig_array_merge((isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 7, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 7)]);
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        if ( !array_key_exists("showLegends", $context)) {
            // line 11
            echo "    ";
            $context["showLegends"] = false;
        }
        // line 13
        if ( !array_key_exists("static", $context)) {
            // line 14
            echo "    ";
            $context["static"] = false;
        }
        // line 16
        $context["showPoints"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 16, $this->source); })()), "showPoints", [], "any", false, false, false, 16);
        // line 17
        $context["usedCategories"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 17, $this->source); })()), "usedCategories", [0 => (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 17, $this->source); })())], "method", false, false, false, 17);
        // line 18
        $context["hasDifferentCategoryColors"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 18, $this->source); })()), "categoryColors", [0 => (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 18, $this->source); })())], "method", false, false, false, 18);
        // line 19
        $context["scores"] = twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 19, $this->source); })()), "scores", [], "any", false, false, false, 19), function ($__score__) use ($context, $macros) { $context["score"] = $__score__; return ((null === (isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context) ? $context["limitToTeams"] : (function () { throw new RuntimeError('Variable "limitToTeams" does not exist.', 19, $this->source); })())) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 19, $this->source); })()), "team", [], "any", false, false, false, 19), "teamid", [], "any", false, false, false, 19), (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 19, $this->source); })()))); });
        // line 20
        $context["problems"] = twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 20, $this->source); })()), "problems", [], "any", false, false, false, 20);
        // line 21
        $context["medalsEnabled"] = twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 21, $this->source); })()), "medalsEnabled", [], "any", false, false, false, 21);
        // line 22
        echo "
";
        // line 23
        if (((isset($context["maxWidth"]) || array_key_exists("maxWidth", $context) ? $context["maxWidth"] : (function () { throw new RuntimeError('Variable "maxWidth" does not exist.', 23, $this->source); })()) > 0)) {
            // line 24
            echo "    <style>
        .forceWidth {
            max-width: ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["maxWidth"]) || array_key_exists("maxWidth", $context) ? $context["maxWidth"] : (function () { throw new RuntimeError('Variable "maxWidth" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "px;
        }
    </style>
";
        }
        // line 30
        echo "
<table class=\"scoreboard center ";
        // line 31
        if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 31, $this->source); })())) {
            echo "scoreboard_jury";
        }
        echo "\">

    ";
        // line 34
        echo "    <colgroup>
        <col id=\"scorerank\"/>
        ";
        // line 36
        if ((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "            <col id=\"scoreflags\"/>
        ";
        } else {
            // line 39
            echo "            <col/>
        ";
        }
        // line 41
        echo "        ";
        if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "            <col id=\"scorelogos\"/>
        ";
        }
        // line 44
        echo "        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        ";
        // line 51
        if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 51, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 51, $this->source); })()))) {
            // line 52
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 53
                echo "                <col class=\"scoreprob\"/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        ";
        }
        // line 56
        echo "    </colgroup>

    ";
        // line 58
        $context["teamColspan"] = 2;
        // line 59
        echo "    ";
        if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 59, $this->source); })())) {
            // line 60
            echo "        ";
            $context["teamColspan"] = ((isset($context["teamColspan"]) || array_key_exists("teamColspan", $context) ? $context["teamColspan"] : (function () { throw new RuntimeError('Variable "teamColspan" does not exist.', 60, $this->source); })()) + 1);
            // line 61
            echo "    ";
        }
        // line 62
        echo "
    <thead>
    <tr class=\"scoreheader\" data-static=\"";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["teamColspan"]) || array_key_exists("teamColspan", $context) ? $context["teamColspan"] : (function () { throw new RuntimeError('Variable "teamColspan" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        ";
        // line 68
        if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 68, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 68, $this->source); })()))) {
            // line 69
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 69, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 70
                echo "                ";
                $context["link"] = null;
                // line 71
                echo "                ";
                $context["target"] = "_self";
                // line 72
                echo "                ";
                if ( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 72, $this->source); })())) {
                    // line 73
                    echo "                    ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 73, $this->source); })())) {
                        // line 74
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 74)]);
                        // line 75
                        echo "                    ";
                    } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 75), "problemtextType", [], "any", false, false, false, 75))) {
                        // line 76
                        echo "                        ";
                        if ((isset($context["public"]) || array_key_exists("public", $context) ? $context["public"] : (function () { throw new RuntimeError('Variable "public" does not exist.', 76, $this->source); })())) {
                            // line 77
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 77)]);
                            // line 78
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 79
                            echo "                        ";
                        } else {
                            // line 80
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 80)]);
                            // line 81
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 82
                            echo "                        ";
                        }
                        // line 83
                        echo "                    ";
                    }
                    // line 84
                    echo "                ";
                }
                // line 85
                echo "                <th title=\"problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
                echo "\" scope=\"col\">
                    <a ";
                // line 86
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 86, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 86, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " target=\"";
                echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 86, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 87
                echo $this->extensions['App\Twig\TwigExtension']->problemBadge($context["problem"]);
                echo "
                        ";
                // line 88
                if ((isset($context["showPoints"]) || array_key_exists("showPoints", $context) ? $context["showPoints"] : (function () { throw new RuntimeError('Variable "showPoints" does not exist.', 88, $this->source); })())) {
                    // line 89
                    echo "                            <span class='problempoints'>
                                [";
                    // line 90
                    if ((twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 90) == 1)) {
                        echo "1 point";
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 90), "html", null, true);
                        echo " points";
                    }
                    echo "]
                            </span>
                        ";
                }
                // line 93
                echo "                    </a>
                </th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "        ";
        }
        // line 97
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 100
        $context["previousSortOrder"] =  -1;
        // line 101
        echo "    ";
        $context["previousTeam"] = null;
        // line 102
        echo "    ";
        $context["backgroundColors"] = ["#FFFFFF" => 1];
        // line 103
        echo "    ";
        $context["medalCount"] = 0;
        // line 104
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 104, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 105
            echo "        ";
            $context["classes"] = [];
            // line 106
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 106), "category", [], "any", false, false, false, 106), "sortorder", [], "any", false, false, false, 106) != (isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 106, $this->source); })()))) {
                // line 107
                echo "            ";
                if (((isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 107, $this->source); })()) !=  -1)) {
                    // line 108
                    echo "                ";
                    // line 109
                    echo "                ";
                    $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 109)->display(twig_array_merge($context, ["sortOrder" => (isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 109, $this->source); })())]));
                    // line 110
                    echo "            ";
                }
                // line 111
                echo "            ";
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 111, $this->source); })()), [0 => "sortorderswitch"]);
                // line 112
                echo "            ";
                $context["previousSortOrder"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 112), "category", [], "any", false, false, false, 112), "sortorder", [], "any", false, false, false, 112);
                // line 113
                echo "            ";
                $context["previousTeam"] = null;
                // line 114
                echo "        ";
            }
            // line 115
            echo "
        ";
            // line 117
            echo "        ";
            $context["medalColor"] = "";
            // line 118
            echo "        ";
            if ((isset($context["showLegends"]) || array_key_exists("showLegends", $context) ? $context["showLegends"] : (function () { throw new RuntimeError('Variable "showLegends" does not exist.', 118, $this->source); })())) {
                // line 119
                echo "            ";
                $context["medalColor"] = $this->env->getFilter('medalType')->getCallable()(twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 119), (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 119, $this->source); })()), (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 119, $this->source); })()));
                // line 120
                echo "        ";
            }
            // line 121
            echo "
        ";
            // line 123
            echo "        ";
            if ((array_key_exists("myTeamId", $context) && ((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context) ? $context["myTeamId"] : (function () { throw new RuntimeError('Variable "myTeamId" does not exist.', 123, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 123), "teamid", [], "any", false, false, false, 123)))) {
                // line 124
                echo "            ";
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 124, $this->source); })()), [0 => "scorethisisme"]);
                // line 125
                echo "            ";
                $context["color"] = "#FFFF99";
                // line 126
                echo "        ";
            } else {
                // line 127
                echo "            ";
                $context["color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 127), "category", [], "any", false, false, false, 127), "color", [], "any", false, false, false, 127);
                // line 128
                echo "        ";
            }
            // line 129
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 129, $this->source); })()), " "), "html", null, true);
            echo "\" id=\"team:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 129), "teamid", [], "any", false, false, false, 129), "html", null, true);
            echo "\">
            <td class=\"scorepl ";
            // line 130
            echo twig_escape_filter($this->env, (isset($context["medalColor"]) || array_key_exists("medalColor", $context) ? $context["medalColor"] : (function () { throw new RuntimeError('Variable "medalColor" does not exist.', 130, $this->source); })()), "html", null, true);
            echo "\">
                ";
            // line 132
            echo "                ";
            if ( !(isset($context["displayRank"]) || array_key_exists("displayRank", $context) ? $context["displayRank"] : (function () { throw new RuntimeError('Variable "displayRank" does not exist.', 132, $this->source); })())) {
                // line 133
                echo "                    ?
                ";
            } elseif (((null ===             // line 134
(isset($context["previousTeam"]) || array_key_exists("previousTeam", $context) ? $context["previousTeam"] : (function () { throw new RuntimeError('Variable "previousTeam" does not exist.', 134, $this->source); })())) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 134, $this->source); })()), "scores", [], "any", false, false, false, 134), twig_get_attribute($this->env, $this->source, (isset($context["previousTeam"]) || array_key_exists("previousTeam", $context) ? $context["previousTeam"] : (function () { throw new RuntimeError('Variable "previousTeam" does not exist.', 134, $this->source); })()), "teamid", [], "any", false, false, false, 134), [], "array", false, false, false, 134), "rank", [], "any", false, false, false, 134) != twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 134)))) {
                // line 135
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 135), "html", null, true);
                echo "
                ";
            } else {
                // line 137
                echo "                ";
            }
            // line 138
            echo "                ";
            $context["previousTeam"] = twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 138);
            // line 139
            echo "            </td>
            <td class=\"scoreaf\">
                ";
            // line 141
            if ((isset($context["showFlags"]) || array_key_exists("showFlags", $context) ? $context["showFlags"] : (function () { throw new RuntimeError('Variable "showFlags" does not exist.', 141, $this->source); })())) {
                // line 142
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 142), "affiliation", [], "any", false, false, false, 142)) {
                    // line 143
                    echo "                        ";
                    $context["link"] = null;
                    // line 144
                    echo "                        ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 144, $this->source); })())) {
                        // line 145
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 145), "affiliation", [], "any", false, false, false, 145), "affilid", [], "any", false, false, false, 145)]);
                        // line 146
                        echo "                        ";
                    }
                    // line 147
                    echo "                        <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 147, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 147, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 148
                    echo $this->extensions['App\Twig\TwigExtension']->countryFlag(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 148), "affiliation", [], "any", false, false, false, 148), "country", [], "any", false, false, false, 148));
                    echo "
                        </a>
                    ";
                }
                // line 151
                echo "                ";
            }
            // line 152
            echo "            </td>
            ";
            // line 153
            if ((isset($context["showAffiliationLogos"]) || array_key_exists("showAffiliationLogos", $context) ? $context["showAffiliationLogos"] : (function () { throw new RuntimeError('Variable "showAffiliationLogos" does not exist.', 153, $this->source); })())) {
                // line 154
                echo "                <td class=\"scoreaf\">
                    ";
                // line 155
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 155), "affiliation", [], "any", false, false, false, 155)) {
                    // line 156
                    echo "                        ";
                    $context["link"] = null;
                    // line 157
                    echo "                        ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 157, $this->source); })())) {
                        // line 158
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 158), "affiliation", [], "any", false, false, false, 158), "affilid", [], "any", false, false, false, 158)]);
                        // line 159
                        echo "                        ";
                    }
                    // line 160
                    echo "                        <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 160, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 160, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 161
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 161), "affiliation", [], "any", false, false, false, 161), "affilid", [], "any", false, false, false, 161);
                    // line 162
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 162), "affiliation", [], "any", false, false, false, 162))) {
                        // line 163
                        echo "                                ";
                        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 163), "affiliation", [], "any", false, false, false, 163), "externalid", [], "any", false, false, false, 163);
                        // line 164
                        echo "                            ";
                    }
                    // line 165
                    echo "                            ";
                    $context["affiliationImage"] = $this->env->getFilter('assetPath')->getCallable()((isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 165, $this->source); })()), "affiliation");
                    // line 166
                    echo "                            ";
                    if ((isset($context["affiliationImage"]) || array_key_exists("affiliationImage", $context) ? $context["affiliationImage"] : (function () { throw new RuntimeError('Variable "affiliationImage" does not exist.', 166, $this->source); })())) {
                        // line 167
                        echo "                                <img loading=\"lazy\" class=\"affiliation-logo\"
                                     src=\"";
                        // line 168
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationImage"]) || array_key_exists("affiliationImage", $context) ? $context["affiliationImage"] : (function () { throw new RuntimeError('Variable "affiliationImage" does not exist.', 168, $this->source); })())), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 168), "affiliation", [], "any", false, false, false, 168), "name", [], "any", false, false, false, 168), "html", null, true);
                        echo "\"
                                     title=\"";
                        // line 169
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 169), "affiliation", [], "any", false, false, false, 169), "name", [], "any", false, false, false, 169), "html", null, true);
                        echo "\">
                            ";
                    } else {
                        // line 171
                        echo "                                ";
                        echo twig_escape_filter($this->env, (isset($context["affiliationId"]) || array_key_exists("affiliationId", $context) ? $context["affiliationId"] : (function () { throw new RuntimeError('Variable "affiliationId" does not exist.', 171, $this->source); })()), "html", null, true);
                        echo "
                            ";
                    }
                    // line 173
                    echo "                        </a>
                    ";
                }
                // line 175
                echo "                </td>
            ";
            }
            // line 177
            echo "            ";
            if ((null === (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 177, $this->source); })()))) {
                // line 178
                echo "                ";
                $context["color"] = "#FFFFFF";
                // line 179
                echo "                ";
                $context["colorClass"] = "_FFFFFF";
                // line 180
                echo "            ";
            } else {
                // line 181
                echo "                ";
                $context["colorClass"] = twig_replace_filter((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 181, $this->source); })()), ["#" => "_"]);
                // line 182
                echo "                ";
                $context["backgroundColors"] = twig_array_merge((isset($context["backgroundColors"]) || array_key_exists("backgroundColors", $context) ? $context["backgroundColors"] : (function () { throw new RuntimeError('Variable "backgroundColors" does not exist.', 182, $this->source); })()), [(isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 182, $this->source); })()) => 1]);
                // line 183
                echo "            ";
            }
            // line 184
            echo "            <td class=\"scoretn cl";
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 184, $this->source); })()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 184), "effectiveName", [], "any", false, false, false, 184), "html", null, true);
            echo "\">
                ";
            // line 185
            $context["link"] = null;
            // line 186
            echo "                ";
            $context["extra"] = null;
            // line 187
            echo "                ";
            if ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 187, $this->source); })())) {
                // line 188
                echo "                    ";
                $context["link"] = "#";
                // line 189
                echo "                    ";
                $context["extra"] = (("data-toggle=\"modal\" data-target=\"#team-modal-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 189), "teamid", [], "any", false, false, false, 189)) . "\"");
                // line 190
                echo "                ";
            } else {
                // line 191
                echo "                    ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 191, $this->source); })())) {
                    // line 192
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 192), "teamid", [], "any", false, false, false, 192)]);
                    // line 193
                    echo "                    ";
                } elseif ((isset($context["public"]) || array_key_exists("public", $context) ? $context["public"] : (function () { throw new RuntimeError('Variable "public" does not exist.', 193, $this->source); })())) {
                    // line 194
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 194), "teamid", [], "any", false, false, false, 194)]);
                    // line 195
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 196
                    echo "                    ";
                } else {
                    // line 197
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 197), "teamid", [], "any", false, false, false, 197)]);
                    // line 198
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 199
                    echo "                    ";
                }
                // line 200
                echo "                ";
            }
            // line 201
            echo "                <a ";
            if ( !(null === (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 201, $this->source); })()))) {
                echo (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 201, $this->source); })());
            }
            echo " ";
            if ( !(null === (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 201, $this->source); })()))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 201, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">
                    <span class=\"forceWidth\">
                        ";
            // line 203
            if (((twig_length_filter($this->env, (isset($context["usedCategories"]) || array_key_exists("usedCategories", $context) ? $context["usedCategories"] : (function () { throw new RuntimeError('Variable "usedCategories" does not exist.', 203, $this->source); })())) > 1) && twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 203, $this->source); })()), "bestInCategory", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 203), 1 => (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 203, $this->source); })())], "method", false, false, false, 203))) {
                // line 204
                echo "                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            ";
                // line 205
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 205), "category", [], "any", false, false, false, 205), "name", [], "any", false, false, false, 205), "html", null, true);
                echo "
                        </span>
                        ";
            }
            // line 208
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 208), "effectiveName", [], "any", false, false, false, 208), "html", null, true);
            echo "
                    </span>
                    ";
            // line 210
            if ((isset($context["showAffiliations"]) || array_key_exists("showAffiliations", $context) ? $context["showAffiliations"] : (function () { throw new RuntimeError('Variable "showAffiliations" does not exist.', 210, $this->source); })())) {
                // line 211
                echo "                        <span class=\"univ forceWidth\">
                            ";
                // line 212
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 212), "affiliation", [], "any", false, false, false, 212)) {
                    // line 213
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 213), "affiliation", [], "any", false, false, false, 213), "name", [], "any", false, false, false, 213), "html", null, true);
                    echo "
                            ";
                }
                // line 215
                echo "                        </span>
                    ";
            }
            // line 217
            echo "                </a>
            </td>
            ";
            // line 219
            $context["totalTime"] = twig_get_attribute($this->env, $this->source, $context["score"], "totalTime", [], "any", false, false, false, 219);
            // line 220
            echo "            ";
            if ((isset($context["scoreInSeconds"]) || array_key_exists("scoreInSeconds", $context) ? $context["scoreInSeconds"] : (function () { throw new RuntimeError('Variable "scoreInSeconds" does not exist.', 220, $this->source); })())) {
                // line 221
                echo "                ";
                $context["totalTime"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative((isset($context["totalTime"]) || array_key_exists("totalTime", $context) ? $context["totalTime"] : (function () { throw new RuntimeError('Variable "totalTime" does not exist.', 221, $this->source); })()));
                // line 222
                echo "            ";
            }
            // line 223
            echo "            ";
            $context["totalPoints"] = twig_get_attribute($this->env, $this->source, $context["score"], "numPoints", [], "any", false, false, false, 223);
            // line 224
            echo "            <td class=\"scorenc\">";
            echo twig_escape_filter($this->env, (isset($context["totalPoints"]) || array_key_exists("totalPoints", $context) ? $context["totalPoints"] : (function () { throw new RuntimeError('Variable "totalPoints" does not exist.', 224, $this->source); })()), "html", null, true);
            echo "</td>
            <td class=\"scorett\">";
            // line 225
            echo twig_escape_filter($this->env, (isset($context["totalTime"]) || array_key_exists("totalTime", $context) ? $context["totalTime"] : (function () { throw new RuntimeError('Variable "totalTime" does not exist.', 225, $this->source); })()), "html", null, true);
            echo "</td>

            ";
            // line 227
            if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 227, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 227, $this->source); })()))) {
                // line 228
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 228, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 229
                    echo "                    ";
                    // line 230
                    echo "                    ";
                    $context["scoreCssClass"] = "score_neutral";
                    // line 231
                    echo "                    ";
                    $context["matrixItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 231, $this->source); })()), "matrix", [], "any", false, false, false, 231), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 231), "teamid", [], "any", false, false, false, 231), [], "array", false, false, false, 231), twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 231), [], "array", false, false, false, 231);
                    // line 232
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 232, $this->source); })()), "isCorrect", [], "any", false, false, false, 232)) {
                        // line 233
                        echo "                        ";
                        $context["scoreCssClass"] = "score_correct";
                        // line 234
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 234, $this->source); })()), "solvedFirst", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 234), 1 => $context["problem"]], "method", false, false, false, 234)) {
                            // line 235
                            echo "                            ";
                            $context["scoreCssClass"] = ((isset($context["scoreCssClass"]) || array_key_exists("scoreCssClass", $context) ? $context["scoreCssClass"] : (function () { throw new RuntimeError('Variable "scoreCssClass" does not exist.', 235, $this->source); })()) . " score_first");
                            // line 236
                            echo "                        ";
                        }
                        // line 237
                        echo "                    ";
                    } elseif (((isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 237, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 237, $this->source); })()), "numSubmissionsPending", [], "any", false, false, false, 237) > 0))) {
                        // line 238
                        echo "                        ";
                        $context["scoreCssClass"] = "score_pending";
                        // line 239
                        echo "                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 239, $this->source); })()), "numSubmissions", [], "any", false, false, false, 239) > 0)) {
                        // line 240
                        echo "                        ";
                        $context["scoreCssClass"] = "score_incorrect";
                        // line 241
                        echo "                    ";
                    }
                    // line 242
                    echo "
                    ";
                    // line 243
                    $context["numSubmissions"] = twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 243, $this->source); })()), "numSubmissions", [], "any", false, false, false, 243);
                    // line 244
                    echo "                    ";
                    if (((isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 244, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 244, $this->source); })()), "numSubmissionsPending", [], "any", false, false, false, 244) > 0))) {
                        // line 245
                        echo "                        ";
                        $context["numSubmissions"] = (((isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 245, $this->source); })()) . " + ") . twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 245, $this->source); })()), "numSubmissionsPending", [], "any", false, false, false, 245));
                        // line 246
                        echo "                    ";
                    }
                    // line 247
                    echo "
                    ";
                    // line 249
                    echo "                    ";
                    $context["time"] = "";
                    // line 250
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 250, $this->source); })()), "isCorrect", [], "any", false, false, false, 250)) {
                        // line 251
                        echo "                        ";
                        $context["time"] = twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 251, $this->source); })()), "time", [], "any", false, false, false, 251);
                        // line 252
                        echo "                        ";
                        if ((isset($context["scoreInSeconds"]) || array_key_exists("scoreInSeconds", $context) ? $context["scoreInSeconds"] : (function () { throw new RuntimeError('Variable "scoreInSeconds" does not exist.', 252, $this->source); })())) {
                            // line 253
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->scoreTime((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 253, $this->source); })())));
                            // line 254
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 254, $this->source); })()), "numSubmissions", [], "any", false, false, false, 254) > 1)) {
                                // line 255
                                echo "                                ";
                                $context["time"] = (((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 255, $this->source); })()) . " + ") . $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->calculatePenaltyTime(true, twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 255, $this->source); })()), "numSubmissions", [], "any", false, false, false, 255))));
                                // line 256
                                echo "                            ";
                            }
                            // line 257
                            echo "                        ";
                        } else {
                            // line 258
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->scoreTime((isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 258, $this->source); })()));
                            // line 259
                            echo "                        ";
                        }
                        // line 260
                        echo "                    ";
                    }
                    // line 261
                    echo "
                    ";
                    // line 262
                    $context["link"] = null;
                    // line 263
                    echo "                    ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 263, $this->source); })())) {
                        // line 264
                        echo "                        ";
                        $context["restrict"] = ["probid" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 264)];
                        // line 265
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 265), "teamid", [], "any", false, false, false, 265), "restrict" => (isset($context["restrict"]) || array_key_exists("restrict", $context) ? $context["restrict"] : (function () { throw new RuntimeError('Variable "restrict" does not exist.', 265, $this->source); })())]);
                        // line 266
                        echo "                    ";
                    }
                    // line 267
                    echo "
                    <td class=\"score_cell\">
                        ";
                    // line 269
                    if (((isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 269, $this->source); })()) != "0")) {
                        // line 270
                        echo "                            <a ";
                        if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 270, $this->source); })())) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 270, $this->source); })()), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                <div class=\"";
                        // line 271
                        echo twig_escape_filter($this->env, (isset($context["scoreCssClass"]) || array_key_exists("scoreCssClass", $context) ? $context["scoreCssClass"] : (function () { throw new RuntimeError('Variable "scoreCssClass" does not exist.', 271, $this->source); })()), "html", null, true);
                        echo "\">
                                    ";
                        // line 272
                        if (twig_get_attribute($this->env, $this->source, (isset($context["matrixItem"]) || array_key_exists("matrixItem", $context) ? $context["matrixItem"] : (function () { throw new RuntimeError('Variable "matrixItem" does not exist.', 272, $this->source); })()), "isCorrect", [], "any", false, false, false, 272)) {
                            echo twig_escape_filter($this->env, (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 272, $this->source); })()), "html", null, true);
                        } else {
                            echo "&nbsp;";
                        }
                        // line 273
                        echo "                                    <span>
                                        ";
                        // line 274
                        if (((isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 274, $this->source); })()) === 1)) {
                            // line 275
                            echo "                                            1 try
                                        ";
                        } else {
                            // line 277
                            echo "                                            ";
                            echo twig_escape_filter($this->env, (isset($context["numSubmissions"]) || array_key_exists("numSubmissions", $context) ? $context["numSubmissions"] : (function () { throw new RuntimeError('Variable "numSubmissions" does not exist.', 277, $this->source); })()), "html", null, true);
                            echo " tries
                                        ";
                        }
                        // line 279
                        echo "                                    </span>
                                </div>
                            </a>
                        ";
                    }
                    // line 283
                    echo "                    </td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "            ";
            }
            // line 286
            echo "        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "
    ";
        // line 290
        echo "    ";
        $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 290)->display(twig_array_merge($context, ["sortOrder" => (isset($context["previousSortOrder"]) || array_key_exists("previousSortOrder", $context) ? $context["previousSortOrder"] : (function () { throw new RuntimeError('Variable "previousSortOrder" does not exist.', 290, $this->source); })())]));
        // line 291
        echo "    </tbody>
</table>

";
        // line 294
        if ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 294, $this->source); })())) {
            // line 295
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["scores"]) || array_key_exists("scores", $context) ? $context["scores"] : (function () { throw new RuntimeError('Variable "scores" does not exist.', 295, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
                // line 296
                echo "        ";
                $this->loadTemplate("partials/scoreboard_table.html.twig", "partials/scoreboard_table.html.twig", 296, "1164373148")->display(twig_array_merge($context, ["modalId" => ("team-modal-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 296), "teamid", [], "any", false, false, false, 296))]));
                // line 302
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 304
        echo "
";
        // line 305
        if ((isset($context["showLegends"]) || array_key_exists("showLegends", $context) ? $context["showLegends"] : (function () { throw new RuntimeError('Variable "showLegends" does not exist.', 305, $this->source); })())) {
            // line 306
            echo "    <p><br/><br/></p>

    ";
            // line 309
            echo "    ";
            if ((((null === (isset($context["limitToTeamIds"]) || array_key_exists("limitToTeamIds", $context) ? $context["limitToTeamIds"] : (function () { throw new RuntimeError('Variable "limitToTeamIds" does not exist.', 309, $this->source); })())) && (twig_length_filter($this->env, (isset($context["usedCategories"]) || array_key_exists("usedCategories", $context) ? $context["usedCategories"] : (function () { throw new RuntimeError('Variable "usedCategories" does not exist.', 309, $this->source); })())) > 1)) && (isset($context["hasDifferentCategoryColors"]) || array_key_exists("hasDifferentCategoryColors", $context) ? $context["hasDifferentCategoryColors"] : (function () { throw new RuntimeError('Variable "hasDifferentCategoryColors" does not exist.', 309, $this->source); })()))) {
                // line 310
                echo "        <table id=\"categ_legend\" class=\"scoreboard scorelegend ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 310, $this->source); })())) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">
                    ";
                // line 314
                $context["link"] = null;
                // line 315
                echo "                    ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 315, $this->source); })())) {
                    // line 316
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
                    // line 317
                    echo "                    ";
                }
                // line 318
                echo "                    <a ";
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 318, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 318, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 323
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 323, $this->source); })()), "categories", [], "any", false, false, false, 323), function ($__category__) use ($context, $macros) { $context["category"] = $__category__; return twig_get_attribute($this->env, $this->source, ($context["usedCategories"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 323), [], "array", true, true, false, 323); }));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 324
                    echo "                <tr ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 324)) {
                        echo "style=\"background: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 324), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                    <td>
                        ";
                    // line 326
                    $context["link"] = null;
                    // line 327
                    echo "                        ";
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 327, $this->source); })())) {
                        // line 328
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 328)]);
                        // line 329
                        echo "                        ";
                    }
                    // line 330
                    echo "                        <a ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 330, $this->source); })())) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 330, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 330), "html", null, true);
                    echo "</a>
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 334
                echo "            </tbody>
        </table>
    ";
            }
            // line 337
            echo "
    ";
            // line 338
            if (((isset($context["showTeamSubmissions"]) || array_key_exists("showTeamSubmissions", $context) ? $context["showTeamSubmissions"] : (function () { throw new RuntimeError('Variable "showTeamSubmissions" does not exist.', 338, $this->source); })()) || (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 338, $this->source); })()))) {
                // line 339
                echo "        ";
                $context["cellColors"] = ["first" => "Solved first", "correct" => "Solved", "incorrect" => "Tried, incorrect", "pending" => "Tried, pending", "neutral" => "Untried"];
                // line 340
                echo "        <table id=\"cell_legend\" class=\"scoreboard scorelegend ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 340, $this->source); })())) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 347
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cellColors"]) || array_key_exists("cellColors", $context) ? $context["cellColors"] : (function () { throw new RuntimeError('Variable "cellColors" does not exist.', 347, $this->source); })()));
                foreach ($context['_seq'] as $context["color"] => $context["description"]) {
                    // line 348
                    echo "                ";
                    if ((($context["color"] != "pending") || (isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 348, $this->source); })()))) {
                        // line 349
                        echo "                    <tr class=\"score_";
                        echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                        echo "\">
                        <td>";
                        // line 350
                        echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                        echo "</td>
                    </tr>
                ";
                    }
                    // line 353
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 354
                echo "            </tbody>
        </table>
    ";
            }
            // line 357
            echo "
    ";
            // line 358
            if ((isset($context["medalsEnabled"]) || array_key_exists("medalsEnabled", $context) ? $context["medalsEnabled"] : (function () { throw new RuntimeError('Variable "medalsEnabled" does not exist.', 358, $this->source); })())) {
                // line 359
                echo "        <table class=\"scoreboard scorelegend ";
                if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 359, $this->source); })())) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">Medals ";
                // line 362
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 362, $this->source); })()), "freezeData", [], "any", false, false, false, 362), "showFinal", [], "any", false, false, false, 362)) {
                    echo "(tentative)";
                }
                echo "</th>
            </tr>
            </thead>
            <tbody>
                ";
                // line 366
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable([0 => "Gold", 1 => "Silver", 2 => "Bronze"]);
                foreach ($context['_seq'] as $context["_key"] => $context["medalType"]) {
                    // line 367
                    echo "                    <tr class=\"";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["medalType"]), "html", null, true);
                    echo "-medal\">
                        <td>";
                    // line 368
                    echo twig_escape_filter($this->env, $context["medalType"], "html", null, true);
                    echo " Medal</td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medalType'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 371
                echo "            </tbody>
        </table>
    ";
            }
        }
        // line 375
        echo "
<style>
    ";
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["backgroundColors"]) || array_key_exists("backgroundColors", $context) ? $context["backgroundColors"] : (function () { throw new RuntimeError('Variable "backgroundColors" does not exist.', 377, $this->source); })()));
        foreach ($context['_seq'] as $context["color"] => $context["i"]) {
            // line 378
            echo "        ";
            $context["colorClass"] = twig_replace_filter($context["color"], ["#" => "_"]);
            // line 379
            echo "
        .cl";
            // line 380
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 380, $this->source); })()), "html", null, true);
            echo " {
            background-color: ";
            // line 381
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";
        }

        ";
            // line 384
            $context["cMin"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 0);
            // line 385
            echo "        ";
            $context["cMax"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 1);
            // line 386
            echo "
        .cl";
            // line 387
            echo twig_escape_filter($this->env, (isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 387, $this->source); })()), "html", null, true);
            echo " .forceWidth.toolong:after {
            background: linear-gradient(to right,
                ";
            // line 389
            echo twig_escape_filter($this->env, (isset($context["cMin"]) || array_key_exists("cMin", $context) ? $context["cMin"] : (function () { throw new RuntimeError('Variable "cMin" does not exist.', 389, $this->source); })()), "html", null, true);
            echo " 0%,
                ";
            // line 390
            echo twig_escape_filter($this->env, (isset($context["cMax"]) || array_key_exists("cMax", $context) ? $context["cMax"] : (function () { throw new RuntimeError('Variable "cMax" does not exist.', 390, $this->source); })()), "html", null, true);
            echo " 96%);
        }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['color'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 393
        echo "</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/scoreboard_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1168 => 393,  1159 => 390,  1155 => 389,  1150 => 387,  1147 => 386,  1144 => 385,  1142 => 384,  1136 => 381,  1132 => 380,  1129 => 379,  1126 => 378,  1122 => 377,  1118 => 375,  1112 => 371,  1103 => 368,  1098 => 367,  1094 => 366,  1085 => 362,  1076 => 359,  1074 => 358,  1071 => 357,  1066 => 354,  1060 => 353,  1054 => 350,  1049 => 349,  1046 => 348,  1042 => 347,  1029 => 340,  1026 => 339,  1024 => 338,  1021 => 337,  1016 => 334,  999 => 330,  996 => 329,  993 => 328,  990 => 327,  988 => 326,  978 => 324,  974 => 323,  961 => 318,  958 => 317,  955 => 316,  952 => 315,  950 => 314,  940 => 310,  937 => 309,  933 => 306,  931 => 305,  928 => 304,  913 => 302,  910 => 296,  892 => 295,  890 => 294,  885 => 291,  882 => 290,  879 => 288,  864 => 286,  861 => 285,  854 => 283,  848 => 279,  842 => 277,  838 => 275,  836 => 274,  833 => 273,  827 => 272,  823 => 271,  814 => 270,  812 => 269,  808 => 267,  805 => 266,  802 => 265,  799 => 264,  796 => 263,  794 => 262,  791 => 261,  788 => 260,  785 => 259,  782 => 258,  779 => 257,  776 => 256,  773 => 255,  770 => 254,  767 => 253,  764 => 252,  761 => 251,  758 => 250,  755 => 249,  752 => 247,  749 => 246,  746 => 245,  743 => 244,  741 => 243,  738 => 242,  735 => 241,  732 => 240,  729 => 239,  726 => 238,  723 => 237,  720 => 236,  717 => 235,  714 => 234,  711 => 233,  708 => 232,  705 => 231,  702 => 230,  700 => 229,  695 => 228,  693 => 227,  688 => 225,  683 => 224,  680 => 223,  677 => 222,  674 => 221,  671 => 220,  669 => 219,  665 => 217,  661 => 215,  655 => 213,  653 => 212,  650 => 211,  648 => 210,  642 => 208,  636 => 205,  633 => 204,  631 => 203,  617 => 201,  614 => 200,  611 => 199,  608 => 198,  605 => 197,  602 => 196,  599 => 195,  596 => 194,  593 => 193,  590 => 192,  587 => 191,  584 => 190,  581 => 189,  578 => 188,  575 => 187,  572 => 186,  570 => 185,  563 => 184,  560 => 183,  557 => 182,  554 => 181,  551 => 180,  548 => 179,  545 => 178,  542 => 177,  538 => 175,  534 => 173,  528 => 171,  523 => 169,  517 => 168,  514 => 167,  511 => 166,  508 => 165,  505 => 164,  502 => 163,  499 => 162,  497 => 161,  488 => 160,  485 => 159,  482 => 158,  479 => 157,  476 => 156,  474 => 155,  471 => 154,  469 => 153,  466 => 152,  463 => 151,  457 => 148,  448 => 147,  445 => 146,  442 => 145,  439 => 144,  436 => 143,  433 => 142,  431 => 141,  427 => 139,  424 => 138,  421 => 137,  415 => 135,  413 => 134,  410 => 133,  407 => 132,  403 => 130,  396 => 129,  393 => 128,  390 => 127,  387 => 126,  384 => 125,  381 => 124,  378 => 123,  375 => 121,  372 => 120,  369 => 119,  366 => 118,  363 => 117,  360 => 115,  357 => 114,  354 => 113,  351 => 112,  348 => 111,  345 => 110,  342 => 109,  340 => 108,  337 => 107,  334 => 106,  331 => 105,  313 => 104,  310 => 103,  307 => 102,  304 => 101,  302 => 100,  297 => 97,  294 => 96,  286 => 93,  275 => 90,  272 => 89,  270 => 88,  266 => 87,  256 => 86,  251 => 85,  248 => 84,  245 => 83,  242 => 82,  239 => 81,  236 => 80,  233 => 79,  230 => 78,  227 => 77,  224 => 76,  221 => 75,  218 => 74,  215 => 73,  212 => 72,  209 => 71,  206 => 70,  201 => 69,  199 => 68,  194 => 66,  189 => 64,  185 => 62,  182 => 61,  179 => 60,  176 => 59,  174 => 58,  170 => 56,  167 => 55,  160 => 53,  155 => 52,  153 => 51,  144 => 44,  140 => 42,  137 => 41,  133 => 39,  129 => 37,  127 => 36,  123 => 34,  116 => 31,  113 => 30,  106 => 26,  102 => 24,  100 => 23,  97 => 22,  95 => 21,  93 => 20,  91 => 19,  89 => 18,  87 => 17,  85 => 16,  81 => 14,  79 => 13,  75 => 11,  73 => 10,  66 => 8,  63 => 7,  58 => 6,  55 => 5,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if limitToTeams is not defined %}
    {% set limitToTeams = null %}
    {% set limitToTeamIds = null %}
{% else %}
    {% set limitToTeamIds = [] %}
    {% for team in limitToTeams %}
        {% set limitToTeamIds = limitToTeamIds | merge([team.teamid]) %}
    {% endfor %}
{% endif %}
{% if showLegends is not defined %}
    {% set showLegends = false %}
{% endif %}
{% if static is not defined %}
    {% set static = false %}
{% endif %}
{% set showPoints = scoreboard.showPoints %}
{% set usedCategories = scoreboard.usedCategories(limitToTeamIds) %}
{% set hasDifferentCategoryColors = scoreboard.categoryColors(limitToTeamIds) %}
{% set scores = scoreboard.scores | filter(score => limitToTeams is null or score.team.teamid in limitToTeamIds) %}
{% set problems = scoreboard.problems %}
{% set medalsEnabled = contest.medalsEnabled %}

{% if maxWidth > 0 %}
    <style>
        .forceWidth {
            max-width: {{ maxWidth }}px;
        }
    </style>
{% endif %}

<table class=\"scoreboard center {% if jury %}scoreboard_jury{% endif %}\">

    {# output table column groups (for the styles) #}
    <colgroup>
        <col id=\"scorerank\"/>
        {% if showFlags %}
            <col id=\"scoreflags\"/>
        {% else %}
            <col/>
        {% endif %}
        {% if showAffiliationLogos %}
            <col id=\"scorelogos\"/>
        {% endif %}
        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        {% if showTeamSubmissions or jury %}
            {% for problem in problems %}
                <col class=\"scoreprob\"/>
            {% endfor %}
        {% endif %}
    </colgroup>

    {% set teamColspan = 2 %}
    {% if showAffiliationLogos %}
        {% set teamColspan = teamColspan + 1 %}
    {% endif %}

    <thead>
    <tr class=\"scoreheader\" data-static=\"{{ static }}\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"{{ teamColspan }}\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        {% if showTeamSubmissions or jury %}
            {% for problem in problems %}
                {% set link = null %}
                {% set target = '_self' %}
                {% if not static %}
                    {% if jury %}
                        {% set link = path('jury_problem', {'probId': problem.probid}) %}
                    {% elseif problem.problem.problemtextType is not empty %}
                        {% if public %}
                            {% set link = path('public_problem_text', {probId: problem.probid}) %}
                            {% set target = '_blank' %}
                        {% else %}
                            {% set link = path('team_problem_text', {probId: problem.probid}) %}
                            {% set target = '_blank' %}
                        {% endif %}
                    {% endif %}
                {% endif %}
                <th title=\"problem {{ problem.problem.name }}\" scope=\"col\">
                    <a {% if link %}href=\"{{ link }}\"{% endif %} target=\"{{ target }}\">
                        {{  problem | problemBadge }}
                        {% if showPoints %}
                            <span class='problempoints'>
                                [{% if problem.points == 1 %}1 point{% else %}{{ problem.points }} points{% endif %}]
                            </span>
                        {% endif %}
                    </a>
                </th>
            {% endfor %}
        {% endif %}
    </tr>
    </thead>
    <tbody>
    {% set previousSortOrder = -1 %}
    {% set previousTeam = null %}
    {% set backgroundColors = {\"#FFFFFF\": 1} %}
    {% set medalCount = 0 %}
    {% for score in scores %}
        {% set classes = [] %}
        {% if score.team.category.sortorder != previousSortOrder %}
            {% if previousSortOrder != -1 %}
                {# Output summary of previous sort order #}
                {% include 'partials/scoreboard_summary.html.twig' with {sortOrder: previousSortOrder} %}
            {% endif %}
            {% set classes = classes | merge(['sortorderswitch']) %}
            {% set previousSortOrder = score.team.category.sortorder %}
            {% set previousTeam = null %}
        {% endif %}

        {# process medal color #}
        {% set medalColor = '' %}
        {% if showLegends %}
            {% set medalColor = score.team | medalType(contest, scoreboard) %}
        {% endif %}

        {# check whether this is us, otherwise use category colour #}
        {% if myTeamId is defined and myTeamId == score.team.teamid %}
            {% set classes = classes | merge(['scorethisisme']) %}
            {% set color = '#FFFF99' %}
        {% else %}
            {% set color = score.team.category.color %}
        {% endif %}
        <tr class=\"{{ classes | join(' ') }}\" id=\"team:{{ score.team.teamid }}\">
            <td class=\"scorepl {{medalColor}}\">
                {# Only print rank when score is different from the previous team #}
                {% if not displayRank %}
                    ?
                {% elseif previousTeam is null or scoreboard.scores[previousTeam.teamid].rank != score.rank %}
                    {{ score.rank }}
                {% else %}
                {% endif %}
                {% set previousTeam = score.team %}
            </td>
            <td class=\"scoreaf\">
                {% if showFlags %}
                    {% if score.team.affiliation %}
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_affiliation', {'affilId': score.team.affiliation.affilid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>
                            {{ score.team.affiliation.country|countryFlag }}
                        </a>
                    {% endif %}
                {% endif %}
            </td>
            {% if showAffiliationLogos %}
                <td class=\"scoreaf\">
                    {% if score.team.affiliation %}
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_affiliation', {'affilId': score.team.affiliation.affilid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>
                            {% set affiliationId = score.team.affiliation.affilid %}
                            {% if showExternalId(score.team.affiliation) %}
                                {% set affiliationId = score.team.affiliation.externalid %}
                            {% endif %}
                            {% set affiliationImage = affiliationId | assetPath('affiliation') %}
                            {% if affiliationImage %}
                                <img loading=\"lazy\" class=\"affiliation-logo\"
                                     src=\"{{ asset(affiliationImage) }}\" alt=\"{{ score.team.affiliation.name }}\"
                                     title=\"{{ score.team.affiliation.name }}\">
                            {% else %}
                                {{ affiliationId }}
                            {% endif %}
                        </a>
                    {% endif %}
                </td>
            {% endif %}
            {% if color is null %}
                {% set color = \"#FFFFFF\" %}
                {% set colorClass = \"_FFFFFF\" %}
            {% else %}
                {% set colorClass = color | replace({\"#\": \"_\"}) %}
                {% set backgroundColors = backgroundColors | merge({(color): 1}) %}
            {% endif %}
            <td class=\"scoretn cl{{ colorClass }}\" title=\"{{ score.team.effectiveName }}\">
                {% set link = null %}
                {% set extra = null %}
                {% if static %}
                    {% set link = '#' %}
                    {% set extra = 'data-toggle=\"modal\" data-target=\"#team-modal-' ~ score.team.teamid ~ '\"' %}
                {% else %}
                    {% if jury %}
                        {% set link = path('jury_team', {teamId: score.team.teamid}) %}
                    {% elseif public %}
                        {% set link = path('public_team', {teamId: score.team.teamid}) %}
                        {% set extra = 'data-ajax-modal' %}
                    {% else %}
                        {% set link = path('team_team', {teamId: score.team.teamid}) %}
                        {% set extra = 'data-ajax-modal' %}
                    {% endif %}
                {% endif %}
                <a {% if extra is not null %}{{ extra | raw }}{% endif %} {% if link is not null %}href=\"{{ link }}\"{% endif %}>
                    <span class=\"forceWidth\">
                        {% if usedCategories | length > 1 and scoreboard.bestInCategory(score.team, limitToTeamIds) %}
                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            {{ score.team.category.name }}
                        </span>
                        {% endif %}
                        {{ score.team.effectiveName }}
                    </span>
                    {% if showAffiliations %}
                        <span class=\"univ forceWidth\">
                            {% if score.team.affiliation %}
                                {{ score.team.affiliation.name }}
                            {% endif %}
                        </span>
                    {% endif %}
                </a>
            </td>
            {% set totalTime = score.totalTime %}
            {% if scoreInSeconds %}
                {% set totalTime = totalTime | printTimeRelative %}
            {% endif %}
            {% set totalPoints = score.numPoints %}
            <td class=\"scorenc\">{{ totalPoints }}</td>
            <td class=\"scorett\">{{ totalTime }}</td>

            {% if showTeamSubmissions or jury %}
                {% for problem in problems %}
                    {# CSS class for correct/incorrect/neutral results #}
                    {% set scoreCssClass = 'score_neutral' %}
                    {% set matrixItem = scoreboard.matrix[score.team.teamid][problem.probid] %}
                    {% if matrixItem.isCorrect %}
                        {% set scoreCssClass = 'score_correct' %}
                        {% if scoreboard.solvedFirst(score.team, problem) %}
                            {% set scoreCssClass = scoreCssClass ~ ' score_first' %}
                        {% endif %}
                    {% elseif showPending and matrixItem.numSubmissionsPending > 0 %}
                        {% set scoreCssClass = 'score_pending' %}
                    {% elseif matrixItem.numSubmissions > 0 %}
                        {% set scoreCssClass = 'score_incorrect' %}
                    {% endif %}

                    {% set numSubmissions = matrixItem.numSubmissions %}
                    {% if showPending and matrixItem.numSubmissionsPending > 0 %}
                        {% set numSubmissions = numSubmissions ~ ' + ' ~ matrixItem.numSubmissionsPending %}
                    {% endif %}

                    {# If correct, print time scored. The format will vary depending on the scoreboard resolution setting #}
                    {% set time = '' %}
                    {% if matrixItem.isCorrect %}
                        {% set time = matrixItem.time %}
                        {% if scoreInSeconds %}
                            {% set time = time | scoreTime | printTimeRelative %}
                            {% if matrixItem.numSubmissions > 1 %}
                                {% set time = time ~ ' + ' ~ (calculatePenaltyTime(true, matrixItem.numSubmissions) | printTimeRelative) %}
                            {% endif %}
                        {% else %}
                            {% set time = time | scoreTime %}
                        {% endif %}
                    {% endif %}

                    {% set link = null %}
                    {% if jury %}
                        {% set restrict = {probid: problem.probid} %}
                        {% set link = path('jury_team', {teamId: score.team.teamid, restrict: restrict}) %}
                    {% endif %}

                    <td class=\"score_cell\">
                        {% if numSubmissions != '0' %}
                            <a {% if link %}href=\"{{ link }}\"{% endif %}>
                                <div class=\"{{ scoreCssClass }}\">
                                    {% if matrixItem.isCorrect %}{{ time }}{% else %}&nbsp;{% endif %}
                                    <span>
                                        {% if numSubmissions is same as(1) %}
                                            1 try
                                        {% else %}
                                            {{ numSubmissions }} tries
                                        {% endif %}
                                    </span>
                                </div>
                            </a>
                        {% endif %}
                    </td>
                {% endfor %}
            {% endif %}
        </tr>
    {% endfor %}

    {# Output summary of last sort order #}
    {% include 'partials/scoreboard_summary.html.twig' with {sortOrder: previousSortOrder} %}
    </tbody>
</table>

{% if static %}
    {% for score in scores %}
        {% embed 'partials/modal.html.twig' with {'modalId': 'team-modal-' ~ score.team.teamid} %}
            {% block title %}{{ score.team.effectiveName }}{% endblock %}
            {% block content %}
                {% include 'partials/team.html.twig' with {size: 6, team: score.team} %}
            {% endblock %}
        {% endembed %}
    {% endfor %}
{% endif %}

{% if showLegends %}
    <p><br/><br/></p>

    {# only print legend when there's more than one category #}
    {% if limitToTeamIds is null and usedCategories | length > 1 and hasDifferentCategoryColors %}
        <table id=\"categ_legend\" class=\"scoreboard scorelegend {% if jury %}scoreboard_jury{% endif %}\">
            <thead>
            <tr>
                <th scope=\"col\">
                    {% set link = null %}
                    {% if jury %}
                        {% set link = path('jury_team_categories') %}
                    {% endif %}
                    <a {% if link %}href=\"{{ link }}\"{% endif %}>Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            {% for category in scoreboard.categories | filter(category => usedCategories[category.categoryid] is defined) %}
                <tr {% if category.color %}style=\"background: {{ category.color }};\"{% endif %}>
                    <td>
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_category', {'categoryId': category.categoryid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>{{ category.name }}</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if showTeamSubmissions or jury %}
        {% set cellColors = {first: 'Solved first', correct: 'Solved', incorrect: 'Tried, incorrect', pending: 'Tried, pending', neutral: 'Untried'} %}
        <table id=\"cell_legend\" class=\"scoreboard scorelegend {% if jury %}scoreboard_jury{% endif %}\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            {% for color, description in cellColors %}
                {% if color != 'pending' or showPending %}
                    <tr class=\"score_{{ color }}\">
                        <td>{{ description }}</td>
                    </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if medalsEnabled %}
        <table class=\"scoreboard scorelegend {% if jury %}scoreboard_jury{% endif %}\">
            <thead>
            <tr>
                <th scope=\"col\">Medals {% if not scoreboard.freezeData.showFinal %}(tentative){% endif %}</th>
            </tr>
            </thead>
            <tbody>
                {% for medalType in ['Gold', 'Silver', 'Bronze'] %}
                    <tr class=\"{{ medalType | lower }}-medal\">
                        <td>{{ medalType }} Medal</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endif %}

<style>
    {% for color,i in backgroundColors %}
        {% set colorClass = color | replace({\"#\": \"_\"}) %}

        .cl{{ colorClass }} {
            background-color: {{ color }};
        }

        {% set cMin = color|hexColorToRGBA(0) %}
        {% set cMax = color|hexColorToRGBA(1) %}

        .cl{{ colorClass }} .forceWidth.toolong:after {
            background: linear-gradient(to right,
                {{ cMin }} 0%,
                {{ cMax }} 96%);
        }
    {% endfor %}
</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
", "partials/scoreboard_table.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/partials/scoreboard_table.html.twig");
    }
}


/* partials/scoreboard_table.html.twig */
class __TwigTemplate_3fd5508ddbf0c33f2c7c14bf1af9e7b3___1164373148 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 296
        return "partials/modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_table.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard_table.html.twig"));

        $this->parent = $this->loadTemplate("partials/modal.html.twig", "partials/scoreboard_table.html.twig", 296);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 297
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 297, $this->source); })()), "team", [], "any", false, false, false, 297), "effectiveName", [], "any", false, false, false, 297), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 298
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 299
        echo "                ";
        $this->loadTemplate("partials/team.html.twig", "partials/scoreboard_table.html.twig", 299)->display(twig_array_merge($context, ["size" => 6, "team" => twig_get_attribute($this->env, $this->source, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 299, $this->source); })()), "team", [], "any", false, false, false, 299)]));
        // line 300
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "partials/scoreboard_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1701 => 300,  1698 => 299,  1685 => 298,  1660 => 297,  1631 => 296,  1168 => 393,  1159 => 390,  1155 => 389,  1150 => 387,  1147 => 386,  1144 => 385,  1142 => 384,  1136 => 381,  1132 => 380,  1129 => 379,  1126 => 378,  1122 => 377,  1118 => 375,  1112 => 371,  1103 => 368,  1098 => 367,  1094 => 366,  1085 => 362,  1076 => 359,  1074 => 358,  1071 => 357,  1066 => 354,  1060 => 353,  1054 => 350,  1049 => 349,  1046 => 348,  1042 => 347,  1029 => 340,  1026 => 339,  1024 => 338,  1021 => 337,  1016 => 334,  999 => 330,  996 => 329,  993 => 328,  990 => 327,  988 => 326,  978 => 324,  974 => 323,  961 => 318,  958 => 317,  955 => 316,  952 => 315,  950 => 314,  940 => 310,  937 => 309,  933 => 306,  931 => 305,  928 => 304,  913 => 302,  910 => 296,  892 => 295,  890 => 294,  885 => 291,  882 => 290,  879 => 288,  864 => 286,  861 => 285,  854 => 283,  848 => 279,  842 => 277,  838 => 275,  836 => 274,  833 => 273,  827 => 272,  823 => 271,  814 => 270,  812 => 269,  808 => 267,  805 => 266,  802 => 265,  799 => 264,  796 => 263,  794 => 262,  791 => 261,  788 => 260,  785 => 259,  782 => 258,  779 => 257,  776 => 256,  773 => 255,  770 => 254,  767 => 253,  764 => 252,  761 => 251,  758 => 250,  755 => 249,  752 => 247,  749 => 246,  746 => 245,  743 => 244,  741 => 243,  738 => 242,  735 => 241,  732 => 240,  729 => 239,  726 => 238,  723 => 237,  720 => 236,  717 => 235,  714 => 234,  711 => 233,  708 => 232,  705 => 231,  702 => 230,  700 => 229,  695 => 228,  693 => 227,  688 => 225,  683 => 224,  680 => 223,  677 => 222,  674 => 221,  671 => 220,  669 => 219,  665 => 217,  661 => 215,  655 => 213,  653 => 212,  650 => 211,  648 => 210,  642 => 208,  636 => 205,  633 => 204,  631 => 203,  617 => 201,  614 => 200,  611 => 199,  608 => 198,  605 => 197,  602 => 196,  599 => 195,  596 => 194,  593 => 193,  590 => 192,  587 => 191,  584 => 190,  581 => 189,  578 => 188,  575 => 187,  572 => 186,  570 => 185,  563 => 184,  560 => 183,  557 => 182,  554 => 181,  551 => 180,  548 => 179,  545 => 178,  542 => 177,  538 => 175,  534 => 173,  528 => 171,  523 => 169,  517 => 168,  514 => 167,  511 => 166,  508 => 165,  505 => 164,  502 => 163,  499 => 162,  497 => 161,  488 => 160,  485 => 159,  482 => 158,  479 => 157,  476 => 156,  474 => 155,  471 => 154,  469 => 153,  466 => 152,  463 => 151,  457 => 148,  448 => 147,  445 => 146,  442 => 145,  439 => 144,  436 => 143,  433 => 142,  431 => 141,  427 => 139,  424 => 138,  421 => 137,  415 => 135,  413 => 134,  410 => 133,  407 => 132,  403 => 130,  396 => 129,  393 => 128,  390 => 127,  387 => 126,  384 => 125,  381 => 124,  378 => 123,  375 => 121,  372 => 120,  369 => 119,  366 => 118,  363 => 117,  360 => 115,  357 => 114,  354 => 113,  351 => 112,  348 => 111,  345 => 110,  342 => 109,  340 => 108,  337 => 107,  334 => 106,  331 => 105,  313 => 104,  310 => 103,  307 => 102,  304 => 101,  302 => 100,  297 => 97,  294 => 96,  286 => 93,  275 => 90,  272 => 89,  270 => 88,  266 => 87,  256 => 86,  251 => 85,  248 => 84,  245 => 83,  242 => 82,  239 => 81,  236 => 80,  233 => 79,  230 => 78,  227 => 77,  224 => 76,  221 => 75,  218 => 74,  215 => 73,  212 => 72,  209 => 71,  206 => 70,  201 => 69,  199 => 68,  194 => 66,  189 => 64,  185 => 62,  182 => 61,  179 => 60,  176 => 59,  174 => 58,  170 => 56,  167 => 55,  160 => 53,  155 => 52,  153 => 51,  144 => 44,  140 => 42,  137 => 41,  133 => 39,  129 => 37,  127 => 36,  123 => 34,  116 => 31,  113 => 30,  106 => 26,  102 => 24,  100 => 23,  97 => 22,  95 => 21,  93 => 20,  91 => 19,  89 => 18,  87 => 17,  85 => 16,  81 => 14,  79 => 13,  75 => 11,  73 => 10,  66 => 8,  63 => 7,  58 => 6,  55 => 5,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if limitToTeams is not defined %}
    {% set limitToTeams = null %}
    {% set limitToTeamIds = null %}
{% else %}
    {% set limitToTeamIds = [] %}
    {% for team in limitToTeams %}
        {% set limitToTeamIds = limitToTeamIds | merge([team.teamid]) %}
    {% endfor %}
{% endif %}
{% if showLegends is not defined %}
    {% set showLegends = false %}
{% endif %}
{% if static is not defined %}
    {% set static = false %}
{% endif %}
{% set showPoints = scoreboard.showPoints %}
{% set usedCategories = scoreboard.usedCategories(limitToTeamIds) %}
{% set hasDifferentCategoryColors = scoreboard.categoryColors(limitToTeamIds) %}
{% set scores = scoreboard.scores | filter(score => limitToTeams is null or score.team.teamid in limitToTeamIds) %}
{% set problems = scoreboard.problems %}
{% set medalsEnabled = contest.medalsEnabled %}

{% if maxWidth > 0 %}
    <style>
        .forceWidth {
            max-width: {{ maxWidth }}px;
        }
    </style>
{% endif %}

<table class=\"scoreboard center {% if jury %}scoreboard_jury{% endif %}\">

    {# output table column groups (for the styles) #}
    <colgroup>
        <col id=\"scorerank\"/>
        {% if showFlags %}
            <col id=\"scoreflags\"/>
        {% else %}
            <col/>
        {% endif %}
        {% if showAffiliationLogos %}
            <col id=\"scorelogos\"/>
        {% endif %}
        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        {% if showTeamSubmissions or jury %}
            {% for problem in problems %}
                <col class=\"scoreprob\"/>
            {% endfor %}
        {% endif %}
    </colgroup>

    {% set teamColspan = 2 %}
    {% if showAffiliationLogos %}
        {% set teamColspan = teamColspan + 1 %}
    {% endif %}

    <thead>
    <tr class=\"scoreheader\" data-static=\"{{ static }}\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"{{ teamColspan }}\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        {% if showTeamSubmissions or jury %}
            {% for problem in problems %}
                {% set link = null %}
                {% set target = '_self' %}
                {% if not static %}
                    {% if jury %}
                        {% set link = path('jury_problem', {'probId': problem.probid}) %}
                    {% elseif problem.problem.problemtextType is not empty %}
                        {% if public %}
                            {% set link = path('public_problem_text', {probId: problem.probid}) %}
                            {% set target = '_blank' %}
                        {% else %}
                            {% set link = path('team_problem_text', {probId: problem.probid}) %}
                            {% set target = '_blank' %}
                        {% endif %}
                    {% endif %}
                {% endif %}
                <th title=\"problem {{ problem.problem.name }}\" scope=\"col\">
                    <a {% if link %}href=\"{{ link }}\"{% endif %} target=\"{{ target }}\">
                        {{  problem | problemBadge }}
                        {% if showPoints %}
                            <span class='problempoints'>
                                [{% if problem.points == 1 %}1 point{% else %}{{ problem.points }} points{% endif %}]
                            </span>
                        {% endif %}
                    </a>
                </th>
            {% endfor %}
        {% endif %}
    </tr>
    </thead>
    <tbody>
    {% set previousSortOrder = -1 %}
    {% set previousTeam = null %}
    {% set backgroundColors = {\"#FFFFFF\": 1} %}
    {% set medalCount = 0 %}
    {% for score in scores %}
        {% set classes = [] %}
        {% if score.team.category.sortorder != previousSortOrder %}
            {% if previousSortOrder != -1 %}
                {# Output summary of previous sort order #}
                {% include 'partials/scoreboard_summary.html.twig' with {sortOrder: previousSortOrder} %}
            {% endif %}
            {% set classes = classes | merge(['sortorderswitch']) %}
            {% set previousSortOrder = score.team.category.sortorder %}
            {% set previousTeam = null %}
        {% endif %}

        {# process medal color #}
        {% set medalColor = '' %}
        {% if showLegends %}
            {% set medalColor = score.team | medalType(contest, scoreboard) %}
        {% endif %}

        {# check whether this is us, otherwise use category colour #}
        {% if myTeamId is defined and myTeamId == score.team.teamid %}
            {% set classes = classes | merge(['scorethisisme']) %}
            {% set color = '#FFFF99' %}
        {% else %}
            {% set color = score.team.category.color %}
        {% endif %}
        <tr class=\"{{ classes | join(' ') }}\" id=\"team:{{ score.team.teamid }}\">
            <td class=\"scorepl {{medalColor}}\">
                {# Only print rank when score is different from the previous team #}
                {% if not displayRank %}
                    ?
                {% elseif previousTeam is null or scoreboard.scores[previousTeam.teamid].rank != score.rank %}
                    {{ score.rank }}
                {% else %}
                {% endif %}
                {% set previousTeam = score.team %}
            </td>
            <td class=\"scoreaf\">
                {% if showFlags %}
                    {% if score.team.affiliation %}
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_affiliation', {'affilId': score.team.affiliation.affilid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>
                            {{ score.team.affiliation.country|countryFlag }}
                        </a>
                    {% endif %}
                {% endif %}
            </td>
            {% if showAffiliationLogos %}
                <td class=\"scoreaf\">
                    {% if score.team.affiliation %}
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_affiliation', {'affilId': score.team.affiliation.affilid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>
                            {% set affiliationId = score.team.affiliation.affilid %}
                            {% if showExternalId(score.team.affiliation) %}
                                {% set affiliationId = score.team.affiliation.externalid %}
                            {% endif %}
                            {% set affiliationImage = affiliationId | assetPath('affiliation') %}
                            {% if affiliationImage %}
                                <img loading=\"lazy\" class=\"affiliation-logo\"
                                     src=\"{{ asset(affiliationImage) }}\" alt=\"{{ score.team.affiliation.name }}\"
                                     title=\"{{ score.team.affiliation.name }}\">
                            {% else %}
                                {{ affiliationId }}
                            {% endif %}
                        </a>
                    {% endif %}
                </td>
            {% endif %}
            {% if color is null %}
                {% set color = \"#FFFFFF\" %}
                {% set colorClass = \"_FFFFFF\" %}
            {% else %}
                {% set colorClass = color | replace({\"#\": \"_\"}) %}
                {% set backgroundColors = backgroundColors | merge({(color): 1}) %}
            {% endif %}
            <td class=\"scoretn cl{{ colorClass }}\" title=\"{{ score.team.effectiveName }}\">
                {% set link = null %}
                {% set extra = null %}
                {% if static %}
                    {% set link = '#' %}
                    {% set extra = 'data-toggle=\"modal\" data-target=\"#team-modal-' ~ score.team.teamid ~ '\"' %}
                {% else %}
                    {% if jury %}
                        {% set link = path('jury_team', {teamId: score.team.teamid}) %}
                    {% elseif public %}
                        {% set link = path('public_team', {teamId: score.team.teamid}) %}
                        {% set extra = 'data-ajax-modal' %}
                    {% else %}
                        {% set link = path('team_team', {teamId: score.team.teamid}) %}
                        {% set extra = 'data-ajax-modal' %}
                    {% endif %}
                {% endif %}
                <a {% if extra is not null %}{{ extra | raw }}{% endif %} {% if link is not null %}href=\"{{ link }}\"{% endif %}>
                    <span class=\"forceWidth\">
                        {% if usedCategories | length > 1 and scoreboard.bestInCategory(score.team, limitToTeamIds) %}
                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            {{ score.team.category.name }}
                        </span>
                        {% endif %}
                        {{ score.team.effectiveName }}
                    </span>
                    {% if showAffiliations %}
                        <span class=\"univ forceWidth\">
                            {% if score.team.affiliation %}
                                {{ score.team.affiliation.name }}
                            {% endif %}
                        </span>
                    {% endif %}
                </a>
            </td>
            {% set totalTime = score.totalTime %}
            {% if scoreInSeconds %}
                {% set totalTime = totalTime | printTimeRelative %}
            {% endif %}
            {% set totalPoints = score.numPoints %}
            <td class=\"scorenc\">{{ totalPoints }}</td>
            <td class=\"scorett\">{{ totalTime }}</td>

            {% if showTeamSubmissions or jury %}
                {% for problem in problems %}
                    {# CSS class for correct/incorrect/neutral results #}
                    {% set scoreCssClass = 'score_neutral' %}
                    {% set matrixItem = scoreboard.matrix[score.team.teamid][problem.probid] %}
                    {% if matrixItem.isCorrect %}
                        {% set scoreCssClass = 'score_correct' %}
                        {% if scoreboard.solvedFirst(score.team, problem) %}
                            {% set scoreCssClass = scoreCssClass ~ ' score_first' %}
                        {% endif %}
                    {% elseif showPending and matrixItem.numSubmissionsPending > 0 %}
                        {% set scoreCssClass = 'score_pending' %}
                    {% elseif matrixItem.numSubmissions > 0 %}
                        {% set scoreCssClass = 'score_incorrect' %}
                    {% endif %}

                    {% set numSubmissions = matrixItem.numSubmissions %}
                    {% if showPending and matrixItem.numSubmissionsPending > 0 %}
                        {% set numSubmissions = numSubmissions ~ ' + ' ~ matrixItem.numSubmissionsPending %}
                    {% endif %}

                    {# If correct, print time scored. The format will vary depending on the scoreboard resolution setting #}
                    {% set time = '' %}
                    {% if matrixItem.isCorrect %}
                        {% set time = matrixItem.time %}
                        {% if scoreInSeconds %}
                            {% set time = time | scoreTime | printTimeRelative %}
                            {% if matrixItem.numSubmissions > 1 %}
                                {% set time = time ~ ' + ' ~ (calculatePenaltyTime(true, matrixItem.numSubmissions) | printTimeRelative) %}
                            {% endif %}
                        {% else %}
                            {% set time = time | scoreTime %}
                        {% endif %}
                    {% endif %}

                    {% set link = null %}
                    {% if jury %}
                        {% set restrict = {probid: problem.probid} %}
                        {% set link = path('jury_team', {teamId: score.team.teamid, restrict: restrict}) %}
                    {% endif %}

                    <td class=\"score_cell\">
                        {% if numSubmissions != '0' %}
                            <a {% if link %}href=\"{{ link }}\"{% endif %}>
                                <div class=\"{{ scoreCssClass }}\">
                                    {% if matrixItem.isCorrect %}{{ time }}{% else %}&nbsp;{% endif %}
                                    <span>
                                        {% if numSubmissions is same as(1) %}
                                            1 try
                                        {% else %}
                                            {{ numSubmissions }} tries
                                        {% endif %}
                                    </span>
                                </div>
                            </a>
                        {% endif %}
                    </td>
                {% endfor %}
            {% endif %}
        </tr>
    {% endfor %}

    {# Output summary of last sort order #}
    {% include 'partials/scoreboard_summary.html.twig' with {sortOrder: previousSortOrder} %}
    </tbody>
</table>

{% if static %}
    {% for score in scores %}
        {% embed 'partials/modal.html.twig' with {'modalId': 'team-modal-' ~ score.team.teamid} %}
            {% block title %}{{ score.team.effectiveName }}{% endblock %}
            {% block content %}
                {% include 'partials/team.html.twig' with {size: 6, team: score.team} %}
            {% endblock %}
        {% endembed %}
    {% endfor %}
{% endif %}

{% if showLegends %}
    <p><br/><br/></p>

    {# only print legend when there's more than one category #}
    {% if limitToTeamIds is null and usedCategories | length > 1 and hasDifferentCategoryColors %}
        <table id=\"categ_legend\" class=\"scoreboard scorelegend {% if jury %}scoreboard_jury{% endif %}\">
            <thead>
            <tr>
                <th scope=\"col\">
                    {% set link = null %}
                    {% if jury %}
                        {% set link = path('jury_team_categories') %}
                    {% endif %}
                    <a {% if link %}href=\"{{ link }}\"{% endif %}>Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            {% for category in scoreboard.categories | filter(category => usedCategories[category.categoryid] is defined) %}
                <tr {% if category.color %}style=\"background: {{ category.color }};\"{% endif %}>
                    <td>
                        {% set link = null %}
                        {% if jury %}
                            {% set link = path('jury_team_category', {'categoryId': category.categoryid}) %}
                        {% endif %}
                        <a {% if link %}href=\"{{ link }}\"{% endif %}>{{ category.name }}</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if showTeamSubmissions or jury %}
        {% set cellColors = {first: 'Solved first', correct: 'Solved', incorrect: 'Tried, incorrect', pending: 'Tried, pending', neutral: 'Untried'} %}
        <table id=\"cell_legend\" class=\"scoreboard scorelegend {% if jury %}scoreboard_jury{% endif %}\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            {% for color, description in cellColors %}
                {% if color != 'pending' or showPending %}
                    <tr class=\"score_{{ color }}\">
                        <td>{{ description }}</td>
                    </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if medalsEnabled %}
        <table class=\"scoreboard scorelegend {% if jury %}scoreboard_jury{% endif %}\">
            <thead>
            <tr>
                <th scope=\"col\">Medals {% if not scoreboard.freezeData.showFinal %}(tentative){% endif %}</th>
            </tr>
            </thead>
            <tbody>
                {% for medalType in ['Gold', 'Silver', 'Bronze'] %}
                    <tr class=\"{{ medalType | lower }}-medal\">
                        <td>{{ medalType }} Medal</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endif %}

<style>
    {% for color,i in backgroundColors %}
        {% set colorClass = color | replace({\"#\": \"_\"}) %}

        .cl{{ colorClass }} {
            background-color: {{ color }};
        }

        {% set cMin = color|hexColorToRGBA(0) %}
        {% set cMax = color|hexColorToRGBA(1) %}

        .cl{{ colorClass }} .forceWidth.toolong:after {
            background: linear-gradient(to right,
                {{ cMin }} 0%,
                {{ cMax }} 96%);
        }
    {% endfor %}
</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
", "partials/scoreboard_table.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/partials/scoreboard_table.html.twig");
    }
}
