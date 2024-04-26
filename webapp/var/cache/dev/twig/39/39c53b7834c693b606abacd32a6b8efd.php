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

/* jury/partials/submission_list.html.twig */
class __TwigTemplate_d2d92d8a2055d5284699227419a6921f extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_list.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_list.html.twig"));

        // line 3
        echo "
";
        // line 4
        if ( !array_key_exists("showExternalResult", $context)) {
            // line 5
            echo "    ";
            $context["showExternalResult"] = false;
        }
        // line 7
        if ( !array_key_exists("showExternalTestcases", $context)) {
            // line 8
            echo "    ";
            $context["showExternalTestcases"] = false;
        }
        // line 10
        echo "
";
        // line 11
        $context["rowSpan"] = 1;
        // line 12
        $context["tdExtraClass"] = "";
        // line 13
        if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 13, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "    ";
            $context["rowSpan"] = 3;
            // line 15
            echo "    ";
            $context["tdExtraClass"] = " thick-border";
        }
        // line 17
        echo "
";
        // line 18
        if (twig_test_empty((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 18, $this->source); })()))) {
            // line 19
            echo "    <div class=\"alert alert-warning\">No submissions</div>
";
        } else {
            // line 21
            echo "    <div>
        <span class=\"badge badge-info\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 22, $this->source); })()), "total", [], "any", false, false, false, 22), "html", null, true);
            echo " submitted</span>
        <span class=\"badge badge-success\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 23, $this->source); })()), "correct", [], "any", false, false, false, 23), "html", null, true);
            echo " correct</span>

        ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 25, $this->source); })()), "unverified", [], "any", false, false, false, 25) > 0)) {
                // line 26
                echo "            <span class=\"badge badge-warning\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 26, $this->source); })()), "unverified", [], "any", false, false, false, 26), "html", null, true);
                echo " unverified</span>
        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 29, $this->source); })()), "ignored", [], "any", false, false, false, 29) > 0)) {
                // line 30
                echo "            <span class=\"badge badge-dark\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 30, $this->source); })()), "ignored", [], "any", false, false, false, 30), "html", null, true);
                echo " ignored</span>
        ";
            }
            // line 32
            echo "
        ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 33, $this->source); })()), "judging", [], "any", false, false, false, 33) > 0)) {
                // line 34
                echo "            <span class=\"badge badge-primary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 34, $this->source); })()), "judging", [], "any", false, false, false, 34), "html", null, true);
                echo " judging</span>
        ";
            }
            // line 36
            echo "
        ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 37, $this->source); })()), "queued", [], "any", false, false, false, 37) > 0)) {
                // line 38
                echo "            <span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 38, $this->source); })()), "queued", [], "any", false, false, false, 38), "html", null, true);
                echo " queued (from ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 38, $this->source); })()), "perteam", [], "any", false, false, false, 38), "html", null, true);
                echo " teams)</span>
        ";
            }
            // line 40
            echo "    </div>

    <table class=\"data-table table table-hover table";
            // line 42
            if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 42, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 42, $this->source); })()))) {
                echo "-3";
            }
            echo "-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            ";
            // line 45
            if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 45, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 45, $this->source); })()))) {
                // line 46
                echo "                <th scope=\"col\" colspan=\"2\">ID</th>
            ";
            } else {
                // line 48
                echo "                <th scope=\"col\">ID</th>
            ";
            }
            // line 50
            if ((isset($context["showContest"]) || array_key_exists("showContest", $context) ? $context["showContest"] : (function () { throw new RuntimeError('Variable "showContest" does not exist.', 50, $this->source); })())) {
                // line 51
                echo "
                <th scope=\"col\">contest</th>";
            }
            // line 54
            echo "
            <th scope=\"col\">time</th>
            <th scope=\"col\" colspan=\"2\">team</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            ";
            // line 59
            if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 59, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 59, $this->source); })()))) {
                // line 60
                echo "                <th scope=\"col\" colspan=\"2\">result</th>
            ";
            } else {
                // line 62
                echo "                <th scope=\"col\">result</th>
            ";
            }
            // line 64
            echo "            ";
            if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 64, $this->source); })()) &&  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 64, $this->source); })()))) {
                // line 65
                echo "                <th scope=\"col\">external result</th>
            ";
            }
            // line 67
            echo "            ";
            if (( !(isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 67, $this->source); })()) ||  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 67, $this->source); })()))) {
                // line 68
                echo "                <th scope=\"col\">verified</th>
                <th scope=\"col\">by</th>
            ";
            }
            // line 71
            if (array_key_exists("rejudging", $context)) {
                // line 72
                echo "
                <th scope=\"col\">old result</th>";
            }
            // line 75
            if ((array_key_exists("showTestcases", $context) && (isset($context["showTestcases"]) || array_key_exists("showTestcases", $context) ? $context["showTestcases"] : (function () { throw new RuntimeError('Variable "showTestcases" does not exist.', 75, $this->source); })()))) {
                // line 76
                echo "
                <th scope=\"col\" class=\"not-sortable not-searchable\">test results</th>";
            }
            // line 79
            echo "
        </tr>
        </thead>
        <tbody>";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 83, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 84
                if (array_key_exists("rejudging", $context)) {
                    // line 85
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 85), "rejudgingid" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 85, $this->source); })()), "rejudgingid", [], "any", false, false, false, 85)]);
                } else {
                    // line 87
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 87)]);
                }
                // line 89
                echo "
            <tr class=\"";
                // line 90
                if ( !twig_get_attribute($this->env, $this->source, $context["submission"], "valid", [], "any", false, false, false, 90)) {
                    echo "ignore";
                }
                echo "\"
                data-problem-id=\"";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 91), "probid", [], "any", false, false, false, 91), "html", null, true);
                echo "\"
                data-team-id=\"";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "team", [], "any", false, false, false, 92), "teamid", [], "any", false, false, false, 92), "html", null, true);
                echo "\"
                data-category-id=\"";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "team", [], "any", false, false, false, 93), "category", [], "any", false, false, false, 93), "categoryid", [], "any", false, false, false, 93), "html", null, true);
                echo "\"
                data-language-id=\"";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 94), "langid", [], "any", false, false, false, 94), "html", null, true);
                echo "\"
                data-submission-id=\"";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 95), "html", null, true);
                echo "\"
                data-result=\"";
                // line 96
                echo $this->extensions['App\Twig\TwigExtension']->printValidJurySubmissionResult($context["submission"], false);
                echo "\">
                ";
                // line 97
                if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 97, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 97, $this->source); })()))) {
                    // line 98
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 98, $this->source); })()), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 99
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 99, $this->source); })()), "html", null, true);
                    echo "\">
                            Local
                        </a>
                    </td>
                ";
                }
                // line 104
                echo "                <td class=\"";
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 104, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 105, $this->source); })()), "html", null, true);
                echo "\">
                        s";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 106), "html", null, true);
                echo "
                        ";
                // line 107
                if (twig_get_attribute($this->env, $this->source, $context["submission"], "externalid", [], "any", false, false, false, 107)) {
                    // line 108
                    echo "                            (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "externalid", [], "any", false, false, false, 108), "html", null, true);
                    echo ")
                        ";
                }
                // line 110
                echo "                    </a>
                </td>";
                // line 112
                if ((isset($context["showContest"]) || array_key_exists("showContest", $context) ? $context["showContest"] : (function () { throw new RuntimeError('Variable "showContest" does not exist.', 112, $this->source); })())) {
                    // line 113
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 113, $this->source); })()), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 113, $this->source); })()), "html", null, true);
                    echo "\">c";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 113), "cid", [], "any", false, false, false, 113), "html", null, true);
                    echo "</a></td>";
                }
                // line 115
                echo "
                <td rowspan=\"";
                // line 116
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 116, $this->source); })()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 116, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 117
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 117, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 117), null, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 117)), "html", null, true);
                echo "</a>
                </td>
                <td rowspan=\"";
                // line 119
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 119, $this->source); })()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 119, $this->source); })()), "html", null, true);
                echo "\" style=\"text-align: right;\">
                    <a href=\"";
                // line 120
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 120, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 121
                echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, $context["submission"], "team", [], "any", false, false, false, 121), "t");
                echo "
                    </a>
                </td>
                <td rowspan=\"";
                // line 124
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 124, $this->source); })()), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 124, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 125
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 125, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "team", [], "any", false, false, false, 126), "effectiveName", [], "any", false, false, false, 126)), "truncate", [0 => (isset($context["teamname_max_length"]) || array_key_exists("teamname_max_length", $context) ? $context["teamname_max_length"] : (function () { throw new RuntimeError('Variable "teamname_max_length" does not exist.', 126, $this->source); })()), 1 => "…"], "method", false, false, false, 126), "html", null, true);
                echo "
                    </a>
                </td>
                <td class=\"probid";
                // line 129
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 129, $this->source); })()), "html", null, true);
                echo "\" rowspan=\"";
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 129, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 130
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 130, $this->source); })()), "html", null, true);
                echo "\"
                       title=\"";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 131), "name", [], "any", false, false, false, 131), "html", null, true);
                echo "\">";
                echo $this->extensions['App\Twig\TwigExtension']->problemBadge(twig_get_attribute($this->env, $this->source, $context["submission"], "contestProblem", [], "any", false, false, false, 131));
                echo "</a>
                </td>
                <td class=\"langid";
                // line 133
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 133, $this->source); })()), "html", null, true);
                echo "\" rowspan=\"";
                echo twig_escape_filter($this->env, (isset($context["rowSpan"]) || array_key_exists("rowSpan", $context) ? $context["rowSpan"] : (function () { throw new RuntimeError('Variable "rowSpan" does not exist.', 133, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 134
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 134, $this->source); })()), "html", null, true);
                echo "\"
                       title=\"";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 135), "name", [], "any", false, false, false, 135), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 135), "langid", [], "any", false, false, false, 135), "html", null, true);
                echo "</a>
                </td>
                ";
                // line 137
                if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 137, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 137, $this->source); })()))) {
                    // line 138
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 138, $this->source); })()), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 139
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 139, $this->source); })()), "html", null, true);
                    echo "\">
                            Local
                        </a>
                    </td>
                ";
                }
                // line 144
                echo "                <td class=\"";
                echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 144, $this->source); })()), "html", null, true);
                echo "\">
                    <a href=\"";
                // line 145
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 145, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 146
                echo $this->extensions['App\Twig\TwigExtension']->printValidJurySubmissionResult($context["submission"]);
                echo "
                    </a>
                </td>
                ";
                // line 149
                if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 149, $this->source); })()) &&  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 149, $this->source); })()))) {
                    // line 150
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 150), "empty", [], "any", false, false, false, 150)) {
                        // line 151
                        echo "                        ";
                        $context["externalJudgement"] = null;
                        // line 152
                        echo "                    ";
                    } else {
                        // line 153
                        echo "                        ";
                        $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 153), "first", [], "any", false, false, false, 153);
                        // line 154
                        echo "                    ";
                    }
                    // line 155
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 155, $this->source); })()), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 156
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 156, $this->source); })()), "html", null, true);
                    echo "\">
                            ";
                    // line 157
                    if ((null === twig_get_attribute($this->env, $this->source, $context["submission"], "externalid", [], "any", false, false, false, 157))) {
                        // line 158
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("n / a");
                    } elseif (((null ===                     // line 159
(isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 159, $this->source); })())) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 159, $this->source); })()), "result", [], "any", false, false, false, 159)))) {
                        // line 160
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("pending");
                    } else {
                        // line 162
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 162, $this->source); })()), "result", [], "any", false, false, false, 162));
                    }
                    // line 164
                    echo "                        </a>
                    </td>
                ";
                }
                // line 167
                echo "                ";
                if (( !(isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 167, $this->source); })()) ||  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 167, $this->source); })()))) {
                    // line 168
                    $context["claim"] = false;
                    // line 169
                    if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 169), "first", [], "any", false, false, false, 169)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 169), "first", [], "any", false, false, false, 169), "result", [], "any", false, false, false, 169)))) {
                        // line 170
                        $context["verified"] = "";
                        // line 171
                        $context["juryMember"] = "";
                    } else {
                        // line 173
                        $context["juryMember"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 173), "first", [], "any", false, false, false, 173), "juryMember", [], "any", false, false, false, 173);
                        // line 174
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 174), "first", [], "any", false, false, false, 174), "verified", [], "any", false, false, false, 174)) {
                            // line 175
                            $context["verified"] = "yes";
                        } else {
                            // line 177
                            $context["verified"] = "no";
                            // line 178
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 178), "first", [], "any", false, false, false, 178), "juryMember", [], "any", false, false, false, 178))) {
                                // line 179
                                $context["claim"] = true;
                            } else {
                                // line 181
                                $context["verified"] = "claimed";
                            }
                        }
                    }
                    // line 185
                    if ((isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 185, $this->source); })())) {
                        // line 186
                        $context["claimArg"] = ["claim" => 1];
                    } else {
                        // line 188
                        $context["claimArg"] = ["unclaim" => 1];
                    }
                    // line 190
                    echo "                    <td class=\"";
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 190, $this->source); })()), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 190, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["verified"]) || array_key_exists("verified", $context) ? $context["verified"] : (function () { throw new RuntimeError('Variable "verified" does not exist.', 190, $this->source); })()), "html", null, true);
                    echo "</a></td>
                    ";
                    // line 191
                    if (( !(isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 191, $this->source); })()) ||  !(isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 191, $this->source); })()))) {
                        // line 192
                        echo "                        <td class=\"";
                        echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 192, $this->source); })()), "html", null, true);
                        echo "\">";
                        // line 193
                        if (array_key_exists("rejudging", $context)) {
                            // line 194
                            $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge((isset($context["claimArg"]) || array_key_exists("claimArg", $context) ? $context["claimArg"] : (function () { throw new RuntimeError('Variable "claimArg" does not exist.', 194, $this->source); })()), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 194), "rejudgingid" => twig_get_attribute($this->env, $this->source, (isset($context["rejudging"]) || array_key_exists("rejudging", $context) ? $context["rejudging"] : (function () { throw new RuntimeError('Variable "rejudging" does not exist.', 194, $this->source); })()), "rejudgingid", [], "any", false, false, false, 194)]));
                        } else {
                            // line 196
                            $context["claimLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", twig_array_merge((isset($context["claimArg"]) || array_key_exists("claimArg", $context) ? $context["claimArg"] : (function () { throw new RuntimeError('Variable "claimArg" does not exist.', 196, $this->source); })()), ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 196)]));
                        }
                        // line 198
                        if ((isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 198, $this->source); })())) {
                            // line 199
                            echo "<a class=\"btn btn-outline-secondary btn-sm\"
                                   href=\"";
                            // line 200
                            echo twig_escape_filter($this->env, (isset($context["claimLink"]) || array_key_exists("claimLink", $context) ? $context["claimLink"] : (function () { throw new RuntimeError('Variable "claimLink" does not exist.', 200, $this->source); })()), "html", null, true);
                            echo "\">claim</a>";
                        } elseif ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                         // line 201
$context["submission"], "judgings", [], "any", false, false, false, 201), "first", [], "any", false, false, false, 201) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 201), "first", [], "any", false, false, false, 201), "verified", [], "any", false, false, false, 201)) && ((isset($context["juryMember"]) || array_key_exists("juryMember", $context) ? $context["juryMember"] : (function () { throw new RuntimeError('Variable "juryMember" does not exist.', 201, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201), "username", [], "any", false, false, false, 201)))) {
                            // line 202
                            echo "<a class=\"btn btn-info btn-sm\" href=\"";
                            echo twig_escape_filter($this->env, (isset($context["claimLink"]) || array_key_exists("claimLink", $context) ? $context["claimLink"] : (function () { throw new RuntimeError('Variable "claimLink" does not exist.', 202, $this->source); })()), "html", null, true);
                            echo "\">unclaim</a>";
                        } else {
                            // line 204
                            echo "<a href=\"";
                            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 204, $this->source); })()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (isset($context["juryMember"]) || array_key_exists("juryMember", $context) ? $context["juryMember"] : (function () { throw new RuntimeError('Variable "juryMember" does not exist.', 204, $this->source); })()), "html", null, true);
                            echo "</a>";
                        }
                        // line 206
                        echo "</td>
                    ";
                    }
                    // line 208
                    echo "                ";
                }
                // line 209
                if (array_key_exists("rejudging", $context)) {
                    // line 210
                    echo "
                    <td class=\"";
                    // line 211
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 211, $this->source); })()), "html", null, true);
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 211)]), "html", null, true);
                    echo "\">
                            ";
                    // line 212
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, $context["submission"], "oldResult", [], "any", false, false, false, 212));
                    echo "
                        </a></td>";
                }
                // line 215
                if ((array_key_exists("showTestcases", $context) && (isset($context["showTestcases"]) || array_key_exists("showTestcases", $context) ? $context["showTestcases"] : (function () { throw new RuntimeError('Variable "showTestcases" does not exist.', 215, $this->source); })()))) {
                    // line 216
                    echo "
                    <td class=\"testcase-results";
                    // line 217
                    echo twig_escape_filter($this->env, (isset($context["tdExtraClass"]) || array_key_exists("tdExtraClass", $context) ? $context["tdExtraClass"] : (function () { throw new RuntimeError('Variable "tdExtraClass" does not exist.', 217, $this->source); })()), "html", null, true);
                    echo "\">";
                    // line 218
                    echo $this->extensions['App\Twig\TwigExtension']->testcaseResults($context["submission"]);
                    // line 219
                    echo "</td>";
                }
                // line 221
                echo "
            </tr>
            ";
                // line 223
                if (((isset($context["showExternalResult"]) || array_key_exists("showExternalResult", $context) ? $context["showExternalResult"] : (function () { throw new RuntimeError('Variable "showExternalResult" does not exist.', 223, $this->source); })()) && (isset($context["showExternalTestcases"]) || array_key_exists("showExternalTestcases", $context) ? $context["showExternalTestcases"] : (function () { throw new RuntimeError('Variable "showExternalTestcases" does not exist.', 223, $this->source); })()))) {
                    // line 224
                    echo "                <tr>
                    ";
                    // line 225
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 225), "empty", [], "any", false, false, false, 225)) {
                        // line 226
                        echo "                        ";
                        $context["externalJudgement"] = null;
                        // line 227
                        echo "                    ";
                    } else {
                        // line 228
                        echo "                        ";
                        $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "externalJudgements", [], "any", false, false, false, 228), "first", [], "any", false, false, false, 228);
                        // line 229
                        echo "                    ";
                    }
                    // line 230
                    echo "                    ";
                    if ( !twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 230, $this->source); })()))) {
                        // line 231
                        echo "                        ";
                        $context["externalSubmissionUrl"] = $this->extensions['App\Twig\TwigExtension']->externalCcsUrl($context["submission"]);
                        // line 232
                        echo "                    ";
                    } else {
                        // line 233
                        echo "                        ";
                        $context["externalSubmissionUrl"] = null;
                        // line 234
                        echo "                    ";
                    }
                    // line 235
                    echo "                    <td rowspan=\"2\">
                        <a ";
                    // line 236
                    if ( !(null === (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 236, $this->source); })()))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 236, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            External
                        </a>
                    </td>
                    <td rowspan=\"2\">
                        <a ";
                    // line 241
                    if ( !(null === (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 241, $this->source); })()))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 241, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 242
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "externalid", [], "any", false, false, false, 242), "html", null, true);
                    echo "
                        </a>
                    </td>
                    <td>
                        <a ";
                    // line 246
                    if ( !(null === (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 246, $this->source); })()))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 246, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            External
                        </a>
                    </td>
                    <td>
                        <a ";
                    // line 251
                    if ( !(null === (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 251, $this->source); })()))) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 251, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 252
                    if (((null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 252, $this->source); })())) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 252, $this->source); })()), "result", [], "any", false, false, false, 252)))) {
                        // line 253
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("pending");
                    } else {
                        // line 255
                        echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 255, $this->source); })()), "result", [], "any", false, false, false, 255));
                    }
                    // line 257
                    echo "                        </a>
                    </td>
                    <td class=\"testcase-results\">";
                    // line 260
                    echo $this->extensions['App\Twig\TwigExtension']->testcaseResults($context["submission"], true);
                    // line 261
                    echo "</td>
                </tr>
                <tr>
                    <td colspan=\"3\" class=\"inline-verify-form\">
                        ";
                    // line 265
                    if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 265, $this->source); })()))) {
                        // line 266
                        echo "                            ";
                        $this->loadTemplate("jury/partials/verify_form.html.twig", "jury/partials/submission_list.html.twig", 266)->display(twig_array_merge($context, ["label" => "Shadow difference verified", "judging" =>                         // line 268
(isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 268, $this->source); })()), "form_action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_difference_verify", ["extjudgementid" => twig_get_attribute($this->env, $this->source,                         // line 269
(isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 269, $this->source); })()), "extjudgementid", [], "any", false, false, false, 269)]), "show_form" => true, "show_icat" => false]));
                        // line 272
                        echo "                        ";
                    }
                    // line 273
                    echo "                    </td>
                </tr>
            ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 277
            echo "
        </tbody>
    </table>
";
        }
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/submission_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  736 => 277,  719 => 273,  716 => 272,  714 => 269,  713 => 268,  711 => 266,  709 => 265,  703 => 261,  701 => 260,  697 => 257,  694 => 255,  691 => 253,  689 => 252,  681 => 251,  669 => 246,  662 => 242,  654 => 241,  642 => 236,  639 => 235,  636 => 234,  633 => 233,  630 => 232,  627 => 231,  624 => 230,  621 => 229,  618 => 228,  615 => 227,  612 => 226,  610 => 225,  607 => 224,  605 => 223,  601 => 221,  598 => 219,  596 => 218,  593 => 217,  590 => 216,  588 => 215,  583 => 212,  577 => 211,  574 => 210,  572 => 209,  569 => 208,  565 => 206,  558 => 204,  553 => 202,  551 => 201,  548 => 200,  545 => 199,  543 => 198,  540 => 196,  537 => 194,  535 => 193,  531 => 192,  529 => 191,  520 => 190,  517 => 188,  514 => 186,  512 => 185,  507 => 181,  504 => 179,  502 => 178,  500 => 177,  497 => 175,  495 => 174,  493 => 173,  490 => 171,  488 => 170,  486 => 169,  484 => 168,  481 => 167,  476 => 164,  473 => 162,  470 => 160,  468 => 159,  466 => 158,  464 => 157,  460 => 156,  455 => 155,  452 => 154,  449 => 153,  446 => 152,  443 => 151,  440 => 150,  438 => 149,  432 => 146,  428 => 145,  423 => 144,  415 => 139,  410 => 138,  408 => 137,  401 => 135,  397 => 134,  391 => 133,  384 => 131,  380 => 130,  374 => 129,  368 => 126,  364 => 125,  358 => 124,  352 => 121,  348 => 120,  342 => 119,  335 => 117,  329 => 116,  326 => 115,  317 => 113,  315 => 112,  312 => 110,  306 => 108,  304 => 107,  300 => 106,  296 => 105,  291 => 104,  283 => 99,  278 => 98,  276 => 97,  272 => 96,  268 => 95,  264 => 94,  260 => 93,  256 => 92,  252 => 91,  246 => 90,  243 => 89,  240 => 87,  237 => 85,  235 => 84,  218 => 83,  213 => 79,  209 => 76,  207 => 75,  203 => 72,  201 => 71,  196 => 68,  193 => 67,  189 => 65,  186 => 64,  182 => 62,  178 => 60,  176 => 59,  169 => 54,  165 => 51,  163 => 50,  159 => 48,  155 => 46,  153 => 45,  145 => 42,  141 => 40,  133 => 38,  131 => 37,  128 => 36,  122 => 34,  120 => 33,  117 => 32,  111 => 30,  109 => 29,  106 => 28,  100 => 26,  98 => 25,  93 => 23,  89 => 22,  86 => 21,  82 => 19,  80 => 18,  77 => 17,  73 => 15,  70 => 14,  68 => 13,  66 => 12,  64 => 11,  61 => 10,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  46 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# Render a list of submissions for a jury page #}
{# @var \\App\\Entity\\ExternalJudgement externalJudgement #}

{% if showExternalResult is not defined %}
    {% set showExternalResult = false %}
{% endif %}
{% if showExternalTestcases is not defined %}
    {% set showExternalTestcases = false %}
{% endif %}

{% set rowSpan = 1 %}
{% set tdExtraClass = '' %}
{% if showExternalResult and showExternalTestcases %}
    {% set rowSpan = 3 %}
    {% set tdExtraClass = ' thick-border' %}
{% endif %}

{% if submissions is empty %}
    <div class=\"alert alert-warning\">No submissions</div>
{% else %}
    <div>
        <span class=\"badge badge-info\">{{ submissionCounts.total }} submitted</span>
        <span class=\"badge badge-success\">{{ submissionCounts.correct }} correct</span>

        {% if submissionCounts.unverified > 0 %}
            <span class=\"badge badge-warning\">{{ submissionCounts.unverified }} unverified</span>
        {% endif %}

        {% if submissionCounts.ignored > 0 %}
            <span class=\"badge badge-dark\">{{ submissionCounts.ignored }} ignored</span>
        {% endif %}

        {% if submissionCounts.judging > 0 %}
            <span class=\"badge badge-primary\">{{ submissionCounts.judging }} judging</span>
        {% endif %}

        {% if submissionCounts.queued > 0 %}
            <span class=\"badge badge-danger\">{{ submissionCounts.queued }} queued (from {{submissionCounts.perteam}} teams)</span>
        {% endif %}
    </div>

    <table class=\"data-table table table-hover table{% if showExternalResult and showExternalTestcases %}-3{% endif %}-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            {% if showExternalResult and showExternalTestcases %}
                <th scope=\"col\" colspan=\"2\">ID</th>
            {% else %}
                <th scope=\"col\">ID</th>
            {% endif %}
            {%- if showContest %}

                <th scope=\"col\">contest</th>
            {%- endif %}

            <th scope=\"col\">time</th>
            <th scope=\"col\" colspan=\"2\">team</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            {% if showExternalResult and showExternalTestcases %}
                <th scope=\"col\" colspan=\"2\">result</th>
            {% else %}
                <th scope=\"col\">result</th>
            {% endif %}
            {% if showExternalResult and not showExternalTestcases %}
                <th scope=\"col\">external result</th>
            {% endif %}
            {% if not showExternalResult or not showExternalTestcases %}
                <th scope=\"col\">verified</th>
                <th scope=\"col\">by</th>
            {% endif %}
            {%- if rejudging is defined %}

                <th scope=\"col\">old result</th>
            {%- endif %}
            {%- if showTestcases is defined and showTestcases %}

                <th scope=\"col\" class=\"not-sortable not-searchable\">test results</th>
            {%- endif %}

        </tr>
        </thead>
        <tbody>
        {%- for submission in submissions %}
            {%- if rejudging is defined %}
                {%- set link = path('jury_submission', {submitId: submission.submitid, rejudgingid: rejudging.rejudgingid}) %}
            {%- else %}
                {%- set link = path('jury_submission', {submitId: submission.submitid}) %}
            {%- endif %}

            <tr class=\"{% if not submission.valid %}ignore{% endif %}\"
                data-problem-id=\"{{ submission.problem.probid }}\"
                data-team-id=\"{{ submission.team.teamid }}\"
                data-category-id=\"{{ submission.team.category.categoryid }}\"
                data-language-id=\"{{ submission.language.langid }}\"
                data-submission-id=\"{{ submission.submitid }}\"
                data-result=\"{{ submission | printValidJurySubmissionResult(false) }}\">
                {% if showExternalResult and showExternalTestcases %}
                    <td class=\"{{ tdExtraClass }}\">
                        <a href=\"{{ link }}\">
                            Local
                        </a>
                    </td>
                {% endif %}
                <td class=\"{{ tdExtraClass }}\">
                    <a href=\"{{ link }}\">
                        s{{ submission.submitid }}
                        {% if submission.externalid %}
                            ({{ submission.externalid }})
                        {% endif %}
                    </a>
                </td>
                {%- if showContest %}
                    <td class=\"{{ tdExtraClass }}\"><a href=\"{{ link }}\">c{{ submission.contest.cid }}</a></td>
                {%- endif %}

                <td rowspan=\"{{ rowSpan }}\" class=\"{{ tdExtraClass }}\">
                    <a href=\"{{ link }}\">{{ submission.submittime | printtime(null, submission.contest) }}</a>
                </td>
                <td rowspan=\"{{ rowSpan }}\" class=\"{{ tdExtraClass }}\" style=\"text-align: right;\">
                    <a href=\"{{ link }}\">
                        {{ submission.team | entityIdBadge('t') }}
                    </a>
                </td>
                <td rowspan=\"{{ rowSpan }}\" class=\"{{ tdExtraClass }}\">
                    <a href=\"{{ link }}\">
                        {{ submission.team.effectiveName | u.truncate(teamname_max_length, '…') }}
                    </a>
                </td>
                <td class=\"probid{{ tdExtraClass }}\" rowspan=\"{{ rowSpan }}\">
                    <a href=\"{{ link }}\"
                       title=\"{{ submission.problem.name }}\">{{ submission.contestProblem | problemBadge }}</a>
                </td>
                <td class=\"langid{{ tdExtraClass }}\" rowspan=\"{{ rowSpan }}\">
                    <a href=\"{{ link }}\"
                       title=\"{{ submission.language.name }}\">{{ submission.language.langid }}</a>
                </td>
                {% if showExternalResult and showExternalTestcases %}
                    <td class=\"{{ tdExtraClass }}\">
                        <a href=\"{{ link }}\">
                            Local
                        </a>
                    </td>
                {% endif %}
                <td class=\"{{ tdExtraClass }}\">
                    <a href=\"{{ link }}\">
                        {{ submission | printValidJurySubmissionResult }}
                    </a>
                </td>
                {% if showExternalResult and not showExternalTestcases %}
                    {% if submission.externalJudgements.empty %}
                        {% set externalJudgement = null %}
                    {% else %}
                        {% set externalJudgement = submission.externalJudgements.first %}
                    {% endif %}
                    <td class=\"{{ tdExtraClass }}\">
                        <a href=\"{{ link }}\">
                            {% if submission.externalid is null %}
                                {{- 'n / a' | printValidJuryResult -}}
                            {% elseif externalJudgement is null or externalJudgement.result is empty %}
                                {{- 'pending' | printValidJuryResult -}}
                            {% else %}
                                {{- externalJudgement.result | printValidJuryResult -}}
                            {% endif %}
                        </a>
                    </td>
                {% endif %}
                {% if not showExternalResult or not showExternalTestcases %}
                    {%- set claim = false %}
                    {%- if submission.judgings.first is empty or submission.judgings.first.result is empty -%}
                        {%- set verified = '' %}
                        {%- set juryMember = '' %}
                    {%- else %}
                        {%- set juryMember = submission.judgings.first.juryMember %}
                        {%- if submission.judgings.first.verified %}
                            {%- set verified = 'yes' %}
                        {%- else %}
                            {%- set verified = 'no' %}
                            {%- if submission.judgings.first.juryMember is empty %}
                                {%- set claim = true %}
                            {%- else %}
                                {%- set verified = 'claimed' %}
                            {%- endif %}
                        {%- endif %}
                    {%- endif %}
                    {%- if claim %}
                        {%- set claimArg = {claim: 1} %}
                    {%- else %}
                        {%- set claimArg = {unclaim: 1} %}
                    {%- endif %}
                    <td class=\"{{ tdExtraClass }}\"><a href=\"{{ link }}\">{{ verified }}</a></td>
                    {% if not showExternalResult or not showExternalTestcases %}
                        <td class=\"{{ tdExtraClass }}\">
                            {%- if rejudging is defined %}
                                {%- set claimLink = path('jury_submission', claimArg | merge({submitId: submission.submitid, rejudgingid: rejudging.rejudgingid})) %}
                            {%- else %}
                                {%- set claimLink = path('jury_submission', claimArg | merge({submitId: submission.submitid})) %}
                            {%- endif %}
                            {%- if claim -%}
                                <a class=\"btn btn-outline-secondary btn-sm\"
                                   href=\"{{ claimLink }}\">claim</a>
                            {%- elseif (not submission.judgings.first or not submission.judgings.first.verified) and juryMember == app.user.username -%}
                                <a class=\"btn btn-info btn-sm\" href=\"{{ claimLink }}\">unclaim</a>
                            {%- else -%}
                                <a href=\"{{ link }}\">{{ juryMember }}</a>
                            {%- endif -%}
                        </td>
                    {% endif %}
                {% endif %}
                {%- if rejudging is defined %}

                    <td class=\"{{ tdExtraClass }}\"><a href=\"{{ path('jury_submission', {submitId: submission.submitid}) }}\">
                            {{ submission.oldResult | printValidJuryResult }}
                        </a></td>
                {%- endif %}
                {%- if showTestcases is defined and showTestcases %}

                    <td class=\"testcase-results{{ tdExtraClass }}\">
                        {{- submission | testcaseResults -}}
                    </td>
                {%- endif %}

            </tr>
            {% if showExternalResult and showExternalTestcases %}
                <tr>
                    {% if submission.externalJudgements.empty %}
                        {% set externalJudgement = null %}
                    {% else %}
                        {% set externalJudgement = submission.externalJudgements.first %}
                    {% endif %}
                    {% if external_ccs_submission_url is not empty %}
                        {% set externalSubmissionUrl = submission | externalCcsUrl %}
                    {% else %}
                        {% set externalSubmissionUrl = null %}
                    {% endif %}
                    <td rowspan=\"2\">
                        <a {% if externalSubmissionUrl is not null %}href=\"{{ externalSubmissionUrl }}\"{% endif %}>
                            External
                        </a>
                    </td>
                    <td rowspan=\"2\">
                        <a {% if externalSubmissionUrl is not null %}href=\"{{ externalSubmissionUrl }}\"{% endif %}>
                            {{ submission.externalid }}
                        </a>
                    </td>
                    <td>
                        <a {% if externalSubmissionUrl is not null %}href=\"{{ externalSubmissionUrl }}\"{% endif %}>
                            External
                        </a>
                    </td>
                    <td>
                        <a {% if externalSubmissionUrl is not null %}href=\"{{ externalSubmissionUrl }}\"{% endif %}>
                            {% if externalJudgement is null or externalJudgement.result is empty %}
                                {{- 'pending' | printValidJuryResult -}}
                            {% else %}
                                {{- externalJudgement.result | printValidJuryResult -}}
                            {% endif %}
                        </a>
                    </td>
                    <td class=\"testcase-results\">
                        {{- submission | testcaseResults(true) -}}
                    </td>
                </tr>
                <tr>
                    <td colspan=\"3\" class=\"inline-verify-form\">
                        {% if externalJudgement is not null %}
                            {% include 'jury/partials/verify_form.html.twig' with {
                                label: 'Shadow difference verified',
                                judging: externalJudgement,
                                form_action: path('jury_shadow_difference_verify', {extjudgementid: externalJudgement.extjudgementid}),
                                show_form: true,
                                show_icat: false} %}
                        {% endif %}
                    </td>
                </tr>
            {% endif %}
        {%- endfor %}

        </tbody>
    </table>
{% endif %}
", "jury/partials/submission_list.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/submission_list.html.twig");
    }
}
