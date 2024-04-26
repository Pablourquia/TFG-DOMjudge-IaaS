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

/* partials/scoreboard.html.twig */
class __TwigTemplate_a1702953b3d4e25b2108d9dbf3b8b541 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/scoreboard.html.twig"));

        // line 1
        if ( !array_key_exists("static", $context)) {
            // line 2
            echo "    ";
            $context["static"] = false;
        }
        // line 4
        echo "
";
        // line 5
        if ((((array_key_exists("ajax", $context) && (isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 5, $this->source); })())) &&  !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 5, $this->source); })())) && (isset($context["public"]) || array_key_exists("public", $context) ? $context["public"] : (function () { throw new RuntimeError('Variable "public" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "    <div class=\"d-none\">
        ";
            // line 7
            $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "partials/scoreboard.html.twig", 7)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 7, $this->source); })())]));
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ((null === (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "    <p class=\"nodata\">No active contest</p>
";
        } else {
            // line 14
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 14, $this->source); })()), "warningMessage", [], "any", false, false, false, 14)) {
                // line 15
                echo "        <div class=\"alert alert-danger\" role=\"alert\">
            ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 16, $this->source); })()), "warningMessage", [], "any", false, false, false, 16), "html", null, true);
                echo "
        </div>
    ";
            }
            // line 19
            echo "
    <div class=\"card\">
        <div class=\"card-header\" style=\"font-family: Roboto, sans-serif; display: flex;\">
            <span style=\"font-weight: bold;\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
            <span id=\"contesttimer\" style=\"color: DimGray; margin-left: auto;\">
                ";
            // line 24
            if ((null === (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 24, $this->source); })()))) {
                // line 25
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printContestStart((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 25, $this->source); })())), "html", null, true);
                echo "
                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 26, $this->source); })()), "freezeData", [], "any", false, false, false, 26), "showFinal", [0 => (isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 26, $this->source); })())], "method", false, false, false, 26)) {
                // line 27
                echo "                    ";
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 27, $this->source); })()), "finalizetime", [], "any", false, false, false, 27))) {
                    // line 28
                    echo "                        preliminary results - not final
                    ";
                } else {
                    // line 30
                    echo "                        final standings
                    ";
                }
                // line 32
                echo "                ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 32, $this->source); })()), "freezeData", [], "any", false, false, false, 32), "stopped", [], "any", false, false, false, 32)) {
                // line 33
                echo "                    contest over, waiting for results
                ";
            } elseif (            // line 34
(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 34, $this->source); })())) {
                // line 35
                echo "                    ";
                $context["now"] = twig_date_format_filter($this->env, "now", "U");
                // line 36
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printremainingminutes((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 36, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 36, $this->source); })()), "endtime", [], "any", false, false, false, 36)), "html", null, true);
                echo "
                ";
            } else {
                // line 38
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 38, $this->source); })()), "freezeData", [], "any", false, false, false, 38), "started", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "                        started:
                    ";
                } else {
                    // line 41
                    echo "                        starts:
                    ";
                }
                // line 43
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 43, $this->source); })()), "starttime", [], "any", false, false, false, 43)), "html", null, true);
                echo " - ends: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 43, $this->source); })()), "endtime", [], "any", false, false, false, 43)), "html", null, true);
                echo "
                ";
            }
            // line 45
            echo "            </span>
        </div>

        ";
            // line 48
            if ((isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 48, $this->source); })())) {
                // line 49
                echo "            ";
                $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "partials/scoreboard.html.twig", 49)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 49, $this->source); })())]));
                // line 50
                echo "        ";
            }
            // line 51
            echo "    </div> ";
            // line 52
            echo "
    ";
            // line 53
            if (((null === (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 53, $this->source); })())) &&  !(isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 53, $this->source); })()))) {
                // line 54
                echo "        ";
                // line 55
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["groupedAffiliations"]) || array_key_exists("groupedAffiliations", $context) ? $context["groupedAffiliations"] : (function () { throw new RuntimeError('Variable "groupedAffiliations" does not exist.', 55, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["affiliationGroupRow"]) {
                    // line 56
                    echo "            <br/><br/>
            <div class=\"card-deck\">
                ";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["affiliationGroupRow"]);
                    foreach ($context['_seq'] as $context["category"] => $context["affiliations"]) {
                        // line 59
                        echo "                    <div class=\"card\" style=\"font-family: Roboto, sans-serif;\">
                        <div class=\"card-header\">";
                        // line 60
                        echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                        echo "</div>
                        <div class=\"card-body\">
                            <ul class=\"list-group list-group-flush\">
                                ";
                        // line 63
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["affiliations"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["affiliation"]) {
                            // line 64
                            echo "                                    <li class=\"list-group-item\">
                                        ";
                            // line 65
                            $context["affiliationLogo"] = $this->env->getFilter('assetPath')->getCallable()(twig_get_attribute($this->env, $this->source, $context["affiliation"], "id", [], "any", false, false, false, 65), "affiliation");
                            // line 66
                            echo "                                        ";
                            if ((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 66, $this->source); })())) {
                                // line 67
                                echo "                                            <img loading=\"lazy\" class=\"affiliation-logo\"
                                                 src=\"";
                                // line 68
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["affiliationLogo"]) || array_key_exists("affiliationLogo", $context) ? $context["affiliationLogo"] : (function () { throw new RuntimeError('Variable "affiliationLogo" does not exist.', 68, $this->source); })())), "html", null, true);
                                echo "\" alt=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 68), "html", null, true);
                                echo "\"
                                                 title=\"";
                                // line 69
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 69), "html", null, true);
                                echo "\">
                                        ";
                            }
                            // line 71
                            echo "                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["affiliation"], "name", [], "any", false, false, false, 71), "html", null, true);
                            echo "
                                    </li>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 74
                        echo "                            </ul>
                        </div>
                    </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['category'], $context['affiliations'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "                ";
                    if ((twig_length_filter($this->env, $context["affiliationGroupRow"]) < 3)) {
                        // line 79
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range((twig_length_filter($this->env, $context["affiliationGroupRow"]) + 1), 3));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 80
                            echo "                        <div class=\"card\" style=\"border: none;\"></div>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 82
                        echo "                ";
                    }
                    // line 83
                    echo "            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affiliationGroupRow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "    ";
            } else {
                // line 86
                echo "
        ";
                // line 87
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 87, $this->source); })()), "freezeData", [], "any", false, false, false, 87), "showFrozen", [0 => false], "method", false, false, false, 87)) {
                    // line 88
                    echo "            <div class=\"alert alert-warning\" role=\"alert\" style=\"font-size: 80%;\">
                ";
                    // line 89
                    if ((isset($context["jury"]) || array_key_exists("jury", $context) ? $context["jury"] : (function () { throw new RuntimeError('Variable "jury" does not exist.', 89, $this->source); })())) {
                        // line 90
                        echo "                    <a href=\"";
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
                        echo "\">The public scoreboard</a>
                    was frozen with ";
                        // line 91
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 91, $this->source); })()), "minutesRemaining", [], "any", false, false, false, 91), "html", null, true);
                        echo " minutes remaining
                ";
                    } else {
                        // line 93
                        echo "                    The scoreboard was frozen with ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 93, $this->source); })()), "minutesRemaining", [], "any", false, false, false, 93), "html", null, true);
                        echo " minutes remaining - solutions
                    submitted in the last ";
                        // line 94
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 94, $this->source); })()), "minutesRemaining", [], "any", false, false, false, 94), "html", null, true);
                        echo " minutes of the contest ";
                        if ((isset($context["showPending"]) || array_key_exists("showPending", $context) ? $context["showPending"] : (function () { throw new RuntimeError('Variable "showPending" does not exist.', 94, $this->source); })())) {
                            echo "are still shown as pending";
                        } else {
                            echo "are not shown";
                        }
                        echo ".
                ";
                    }
                    // line 96
                    echo "            </div>
        ";
                }
                // line 98
                echo "
        ";
                // line 99
                if (( !(isset($context["static"]) || array_key_exists("static", $context) ? $context["static"] : (function () { throw new RuntimeError('Variable "static" does not exist.', 99, $this->source); })()) && (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 100
(isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 100, $this->source); })()), "affiliations", [], "any", false, false, false, 100)) > 1) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 101
(isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 101, $this->source); })()), "countries", [], "any", false, false, false, 101)) > 1)) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 102
(isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 102, $this->source); })()), "categories", [], "any", false, false, false, 102)) > 1)))) {
                    // line 103
                    echo "\t<div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary btn-sm m-2 dropdown-toggle\" data-toggle=\"dropdown\"
                aria-haspopup=\"true\" aria-expanded=\"false\" id=\"filter-toggle\">
                <i class=\"fas fa-filter\"></i>
                ";
                    // line 107
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 107, $this->source); })()), "filteredOn", [], "any", false, false, false, 107))) {
                        // line 108
                        echo "                    Filter
                ";
                    } else {
                        // line 110
                        echo "                    Filtered (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 110, $this->source); })()), "filteredOn", [], "any", false, false, false, 110), "html", null, true);
                        echo ")
                ";
                    }
                    // line 112
                    echo "            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"filter-toggle\">
                <form method=\"get\">
                    <div class=\"filterbox\">
                        <div class=\"form-row\">
                        ";
                    // line 118
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 118, $this->source); })()), "affiliations", [], "any", false, false, false, 118)) > 1)) {
                        // line 119
                        echo "                            <div class=\"form-group\">
                            <label for=\"scoreboard-filter-affil\">Affiliations</label>
                            <select id=\"scoreboard-filter-affil\" class=\"form-control mr-2\" multiple size=\"8\" name=\"affiliations[]\">
                                ";
                        // line 122
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 122, $this->source); })()), "affiliations", [], "any", false, false, false, 122));
                        foreach ($context['_seq'] as $context["affiliationId"] => $context["affiliation"]) {
                            // line 123
                            echo "                                    <option ";
                            if (twig_in_filter($context["affiliationId"], twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 123, $this->source); })()), "affiliations", [], "any", false, false, false, 123))) {
                                echo "selected";
                            }
                            // line 124
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["affiliationId"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["affiliation"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['affiliationId'], $context['affiliation'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 126
                        echo "                            </select>
                            </div>
                        ";
                    }
                    // line 129
                    echo "                        ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 129, $this->source); })()), "countries", [], "any", false, false, false, 129)) > 1)) {
                        // line 130
                        echo "                            <div class=\"form-group\">
                            <label for=\"scoreboard-filter-country\">Countries</label>
                            <select id=\"scoreboard-filter-country\" class=\"form-control mr-2\" multiple size=\"8\" name=\"countries[]\">
                                ";
                        // line 133
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 133, $this->source); })()), "countries", [], "any", false, false, false, 133));
                        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                            // line 134
                            echo "                                    <option ";
                            if (twig_in_filter($context["country"], twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 134, $this->source); })()), "countries", [], "any", false, false, false, 134))) {
                                echo "selected";
                            }
                            // line 135
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["country"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["alpha3_countries"]) || array_key_exists("alpha3_countries", $context) ? $context["alpha3_countries"] : (function () { throw new RuntimeError('Variable "alpha3_countries" does not exist.', 135, $this->source); })()), $context["country"], [], "array", false, false, false, 135), "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 137
                        echo "                            </select>
                            </div>
                        ";
                    }
                    // line 140
                    echo "                        ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 140, $this->source); })()), "categories", [], "any", false, false, false, 140)) > 1)) {
                        // line 141
                        echo "                            <div class=\"form-group\">
                            <label for=\"scoreboard-filter-category\">Categories</label>
                            <select id=\"scoreboard-filter-category\" class=\"form-control mr-2\" multiple size=\"8\" name=\"categories[]\">
                                ";
                        // line 144
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["filterValues"]) || array_key_exists("filterValues", $context) ? $context["filterValues"] : (function () { throw new RuntimeError('Variable "filterValues" does not exist.', 144, $this->source); })()), "categories", [], "any", false, false, false, 144));
                        foreach ($context['_seq'] as $context["categoryId"] => $context["category"]) {
                            // line 145
                            echo "                                    <option ";
                            if (twig_in_filter($context["categoryId"], twig_get_attribute($this->env, $this->source, (isset($context["scoreFilter"]) || array_key_exists("scoreFilter", $context) ? $context["scoreFilter"] : (function () { throw new RuntimeError('Variable "scoreFilter" does not exist.', 145, $this->source); })()), "categories", [], "any", false, false, false, 145))) {
                                echo "selected";
                            }
                            // line 146
                            echo "                                            value=\"";
                            echo twig_escape_filter($this->env, $context["categoryId"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['categoryId'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 148
                        echo "                            </select>
                            </div>
                        ";
                    }
                    // line 151
                    echo "                        </div>
                        <input type=\"submit\" class=\"btn btn-primary btn-sm align-top\" name=\"filter\" value=\"filter\"/>
                        <input type=\"submit\" class=\"btn btn-secondary btn-sm align-top\" name=\"clear\" value=\"clear\"/>
                    </div>
                </form>
            </div>
        </div>
        ";
                } else {
                    // line 158
                    echo " ";
                    // line 159
                    echo "            <br/>
        ";
                }
                // line 160
                echo " ";
                // line 161
                echo "
        ";
                // line 162
                $this->loadTemplate("partials/scoreboard_table.html.twig", "partials/scoreboard.html.twig", 162)->display(twig_array_merge($context, ["displayRank" => true, "showLegends" => true]));
                // line 163
                echo "
    ";
            }
            // line 164
            echo " ";
            // line 165
            echo "
    <p id=\"lastmod\">
        Last Update: ";
            // line 167
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(null, "D d M Y H:i:s T"), "html", null, true);
            echo "<br/>
        using <a href=\"https://www.domjudge.org/\" target=\"_top\">DOMjudge</a>
    </p>
";
        }
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 167,  471 => 165,  469 => 164,  465 => 163,  463 => 162,  460 => 161,  458 => 160,  454 => 159,  452 => 158,  442 => 151,  437 => 148,  426 => 146,  421 => 145,  417 => 144,  412 => 141,  409 => 140,  404 => 137,  393 => 135,  388 => 134,  384 => 133,  379 => 130,  376 => 129,  371 => 126,  360 => 124,  355 => 123,  351 => 122,  346 => 119,  344 => 118,  336 => 112,  330 => 110,  326 => 108,  324 => 107,  318 => 103,  316 => 102,  315 => 101,  314 => 100,  313 => 99,  310 => 98,  306 => 96,  295 => 94,  290 => 93,  285 => 91,  280 => 90,  278 => 89,  275 => 88,  273 => 87,  270 => 86,  267 => 85,  260 => 83,  257 => 82,  250 => 80,  245 => 79,  242 => 78,  233 => 74,  223 => 71,  218 => 69,  212 => 68,  209 => 67,  206 => 66,  204 => 65,  201 => 64,  197 => 63,  191 => 60,  188 => 59,  184 => 58,  180 => 56,  175 => 55,  173 => 54,  171 => 53,  168 => 52,  166 => 51,  163 => 50,  160 => 49,  158 => 48,  153 => 45,  145 => 43,  141 => 41,  137 => 39,  134 => 38,  128 => 36,  125 => 35,  123 => 34,  120 => 33,  117 => 32,  113 => 30,  109 => 28,  106 => 27,  104 => 26,  99 => 25,  97 => 24,  92 => 22,  87 => 19,  81 => 16,  78 => 15,  75 => 14,  71 => 12,  69 => 11,  66 => 10,  62 => 8,  60 => 7,  57 => 6,  55 => 5,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if static is not defined %}
    {% set static = false %}
{% endif %}

{% if ajax is defined and ajax and not static and public %}
    <div class=\"d-none\">
        {% include 'partials/scoreboard_progress_bar.html.twig' with {contest: current_contest} %}
    </div>
{% endif %}

{% if current_contest is null %}
    <p class=\"nodata\">No active contest</p>
{% else %}
    {% if current_contest.warningMessage %}
        <div class=\"alert alert-danger\" role=\"alert\">
            {{ current_contest.warningMessage }}
        </div>
    {% endif %}

    <div class=\"card\">
        <div class=\"card-header\" style=\"font-family: Roboto, sans-serif; display: flex;\">
            <span style=\"font-weight: bold;\">{{ current_contest.name }}</span>
            <span id=\"contesttimer\" style=\"color: DimGray; margin-left: auto;\">
                {% if scoreboard is null %}
                    {{ current_contest | printContestStart }}
                {% elseif scoreboard.freezeData.showFinal(jury) %}
                    {% if current_contest.finalizetime is empty %}
                        preliminary results - not final
                    {% else %}
                        final standings
                    {% endif %}
                {% elseif scoreboard.freezeData.stopped %}
                    contest over, waiting for results
                {% elseif static %}
                    {% set now = 'now'|date('U') %}
                    {{ now | printremainingminutes(current_contest.endtime) }}
                {% else %}
                    {% if current_contest.freezeData.started %}
                        started:
                    {% else %}
                        starts:
                    {% endif %}
                    {{ current_contest.starttime | printtime }} - ends: {{ current_contest.endtime | printtime }}
                {% endif %}
            </span>
        </div>

        {% if static %}
            {% include 'partials/scoreboard_progress_bar.html.twig' with {contest: current_contest} %}
        {% endif %}
    </div> {# card #}

    {% if scoreboard is null and not jury %}
        {# Display a list of teams by group. This is targeted for World Finals, but looks nice anyway #}
        {% for affiliationGroupRow in groupedAffiliations %}
            <br/><br/>
            <div class=\"card-deck\">
                {% for category, affiliations in affiliationGroupRow %}
                    <div class=\"card\" style=\"font-family: Roboto, sans-serif;\">
                        <div class=\"card-header\">{{ category }}</div>
                        <div class=\"card-body\">
                            <ul class=\"list-group list-group-flush\">
                                {% for affiliation in affiliations %}
                                    <li class=\"list-group-item\">
                                        {% set affiliationLogo = affiliation.id | assetPath('affiliation') %}
                                        {% if affiliationLogo %}
                                            <img loading=\"lazy\" class=\"affiliation-logo\"
                                                 src=\"{{ asset(affiliationLogo) }}\" alt=\"{{ affiliation.name }}\"
                                                 title=\"{{ affiliation.name }}\">
                                        {% endif %}
                                        {{ affiliation.name }}
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                {% endfor %}
                {% if affiliationGroupRow | length < 3 %}
                    {% for i in (affiliationGroupRow | length + 1)..3 %}
                        <div class=\"card\" style=\"border: none;\"></div>
                    {% endfor %}
                {% endif %}
            </div>
        {% endfor %}
    {% else %}

        {% if scoreboard.freezeData.showFrozen(false) %}
            <div class=\"alert alert-warning\" role=\"alert\" style=\"font-size: 80%;\">
                {% if jury %}
                    <a href=\"{{ path('public_index') }}\">The public scoreboard</a>
                    was frozen with {{ current_contest.minutesRemaining }} minutes remaining
                {% else %}
                    The scoreboard was frozen with {{ current_contest.minutesRemaining }} minutes remaining - solutions
                    submitted in the last {{ current_contest.minutesRemaining }} minutes of the contest {% if showPending %}are still shown as pending{% else %}are not shown{% endif %}.
                {% endif %}
            </div>
        {% endif %}

        {% if not static and
            (filterValues.affiliations | length > 1 or
             filterValues.countries | length > 1 or
             filterValues.categories | length > 1) %}
\t<div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary btn-sm m-2 dropdown-toggle\" data-toggle=\"dropdown\"
                aria-haspopup=\"true\" aria-expanded=\"false\" id=\"filter-toggle\">
                <i class=\"fas fa-filter\"></i>
                {% if scoreFilter.filteredOn is empty %}
                    Filter
                {% else %}
                    Filtered ({{ scoreFilter.filteredOn }})
                {% endif %}
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"filter-toggle\">
                <form method=\"get\">
                    <div class=\"filterbox\">
                        <div class=\"form-row\">
                        {% if filterValues.affiliations | length > 1 %}
                            <div class=\"form-group\">
                            <label for=\"scoreboard-filter-affil\">Affiliations</label>
                            <select id=\"scoreboard-filter-affil\" class=\"form-control mr-2\" multiple size=\"8\" name=\"affiliations[]\">
                                {% for affiliationId, affiliation in filterValues.affiliations %}
                                    <option {% if affiliationId in scoreFilter.affiliations %}selected{% endif %}
                                            value=\"{{ affiliationId }}\">{{ affiliation }}</option>
                                {% endfor %}
                            </select>
                            </div>
                        {% endif %}
                        {% if filterValues.countries | length > 1 %}
                            <div class=\"form-group\">
                            <label for=\"scoreboard-filter-country\">Countries</label>
                            <select id=\"scoreboard-filter-country\" class=\"form-control mr-2\" multiple size=\"8\" name=\"countries[]\">
                                {% for country in filterValues.countries %}
                                    <option {% if country in scoreFilter.countries %}selected{% endif %}
                                            value=\"{{ country }}\">{{ alpha3_countries[country] }}</option>
                                {% endfor %}
                            </select>
                            </div>
                        {% endif %}
                        {% if filterValues.categories | length > 1 %}
                            <div class=\"form-group\">
                            <label for=\"scoreboard-filter-category\">Categories</label>
                            <select id=\"scoreboard-filter-category\" class=\"form-control mr-2\" multiple size=\"8\" name=\"categories[]\">
                                {% for categoryId, category in filterValues.categories %}
                                    <option {% if categoryId in scoreFilter.categories %}selected{% endif %}
                                            value=\"{{ categoryId }}\">{{ category }}</option>
                                {% endfor %}
                            </select>
                            </div>
                        {% endif %}
                        </div>
                        <input type=\"submit\" class=\"btn btn-primary btn-sm align-top\" name=\"filter\" value=\"filter\"/>
                        <input type=\"submit\" class=\"btn btn-secondary btn-sm align-top\" name=\"clear\" value=\"clear\"/>
                    </div>
                </form>
            </div>
        </div>
        {% else %} {# not static and filterValues*length>1 #}
            <br/>
        {% endif %} {# not static and filterValues*length>1 #}

        {% include 'partials/scoreboard_table.html.twig' with {displayRank: true, showLegends: true} %}

    {% endif %} {# not scoreboard is null and not jury #}

    <p id=\"lastmod\">
        Last Update: {{ null | printtime('D d M Y H:i:s T') }}<br/>
        using <a href=\"https://www.domjudge.org/\" target=\"_top\">DOMjudge</a>
    </p>
{% endif %}
", "partials/scoreboard.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/partials/scoreboard.html.twig");
    }
}
