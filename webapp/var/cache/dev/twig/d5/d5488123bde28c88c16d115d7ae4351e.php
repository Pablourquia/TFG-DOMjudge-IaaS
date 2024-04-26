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

/* jury/partials/submission_graph.html.twig */
class __TwigTemplate_ae7f0e0d6fe3b163ea74d10de310610a extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_graph.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_graph.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/submission_graph.html.twig"));

        // line 1
        $context["timelimit"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 1, $this->source); })()), "problem", [], "any", false, false, false, 1), "timelimit", [], "any", false, false, false, 1) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 1, $this->source); })()), "language", [], "any", false, false, false, 1), "timeFactor", [], "any", false, false, false, 1));
        // line 2
        echo "<div>
    ";
        // line 3
        if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "        <div style=\"display: inline-block\" id=\"testcaseruntime\">
            <h3 id=\"graphs\">Testcase Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    ";
        }
        // line 9
        echo "    ";
        if (( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 9, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 9, $this->source); })()), "result", [], "any", false, false, false, 9)))) {
            // line 10
            echo "        <div style=\"display: inline-block\" id=\"externalruntime\">
            <h3 id=\"graphs\">External Testcase Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    ";
        }
        // line 15
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 15, $this->source); })())) > 1)) {
            // line 16
            echo "        <div style=\"display: inline-block\" id=\"maxruntime\">
            <h3 id=\"graphs\">Max Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    ";
        }
        // line 21
        echo "</div>

<script>
    ";
        // line 24
        $context["colors"] = ["correct" => "#28a745", "wrong-answer" => "#dc3545", "timelimit" => "orange", "run-error" => "#ff3399", "compiler-error" => "grey", "no-output" => "purple", "frozen" => "blue", "output-limit" => "black"];
        // line 34
        echo "    function create_chart(data, maxY) {
        var tickStep = 1;
        if (maxY <= 2) {
            tickStep = 0.2;
        } else if (maxY <= 5) {
            tickStep = 0.5;
        }
        maxY += tickStep;
        var chart = nv.models.multiBarChart()
            .x(function (d) {
                return d.label
            })
            .y(function (d) {
                return d.value
            })
            .showControls(false)
            .reduceXTicks(true)
            .forceY([0, maxY])
            .duration(250)
            .showLegend(false)
        ;
        var tickValues = [];
        for (i = 0; i <= maxY; i += tickStep) {
            tickValues.push(i);
        }
        chart.yAxis
            .tickValues(tickValues)
            .axisLabel('Runtime (in s)');
        return chart;
    }

    \$(function () {
        var maxY = ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 66, $this->source); })()), "html", null, true);
        echo ";
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
            // line 68
            echo "        maxY = Math.max(maxY, ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["maxRunTimes"] ?? null), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 68), [], "array", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["maxRunTimes"] ?? null), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 68), [], "array", false, false, false, 68), 0)) : (0)), "html", null, true);
            echo ");
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 70, $this->source); })())) > 1)) {
            // line 71
            echo "        var run_max_times = [
            {
                key: \"Max Runtime\",
                values: [
                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 75, $this->source); })()), function ($__judging__) use ($context, $macros) { $context["judging"] = $__judging__; return (twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 75) && (twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 75) != "aborted")); }));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 76
                echo "                    {
                        \"label\": \"j";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 77), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 77), "html", null, true);
                echo ")\",
                        \"value\": ";
                // line 78
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["maxRunTimes"] ?? null), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 78), [], "array", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["maxRunTimes"] ?? null), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 78), [], "array", false, false, false, 78), 0)) : (0)), "html", null, true);
                echo ",
                        \"color\": \"";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 79, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 79), [], "array", false, false, false, 79), "html", null, true);
                echo "\",
                    },
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(run_max_times, maxY);
            chart.tooltip.contentGenerator(function (obj) {
                var format = d3.format(\".3f\");
                return \"<b>\" + obj.data.label + \"</b><br><b>max runtime:</b> \" + format(obj.data.value) + \"s\";
            });
            chart.xAxis.axisLabel(\"Judging\");
            d3.select('#maxruntime svg')
                .datum(run_max_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#maxruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()(";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 100, $this->source); })()), "html", null, true);
            echo ") + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()(";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 102, $this->source); })()), "html", null, true);
            echo ") + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        ";
        }
        // line 109
        echo "
        ";
        // line 110
        if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 110, $this->source); })()))) {
            // line 111
            echo "        var testcase_times = [
            {
                key: \"Runtime\",
                values: [
                    ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 115, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                // line 116
                echo "                    {
                        \"label\": \"";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 117), "html", null, true);
                echo "\",
                        \"value\": ";
                // line 118
                if (twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 118)) {
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, true, false, 118), "runtime", [], "any", true, true, false, 118)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, true, false, 118), "runtime", [], "any", false, false, false, 118), 0)) : (0)), "html", null, true);
                } else {
                    echo "0";
                }
                echo ",
                        \"color\": \"";
                // line 119
                if (twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 119)) {
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 119), "runresult", [], "any", false, false, false, 119), [], "array", true, true, false, 119)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 119), "runresult", [], "any", false, false, false, 119), [], "array", false, false, false, 119), "grey")) : ("grey")), "html", null, true);
                } else {
                    echo "grey";
                }
                echo "\",
                        \"description\": \"";
                // line 120
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", true, true, false, 120)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 120), twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 120))) : (twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 120))), "js"), "html", null, true);
                echo "\",
                    },
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(testcase_times, maxY);
            chart.tooltip.contentGenerator(function (obj) {
                var format = d3.format(\".3f\");
                return \"<b>Testcase \" + obj.data.description + \"</b><br><b>Runtime:</b> \" + format(obj.data.value) + \"s\";
            });
            chart.xAxis.axisLabel(\"Testcase Rank\");
            d3.select('#testcaseruntime svg')
                .datum(testcase_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#testcaseruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()(";
            // line 141
            echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 141, $this->source); })()), "html", null, true);
            echo ") + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()(";
            // line 143
            echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 143, $this->source); })()), "html", null, true);
            echo ") + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        ";
        }
        // line 150
        echo "
        ";
        // line 152
        echo "        ";
        if (( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 152, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 152, $this->source); })()), "result", [], "any", false, false, false, 152)))) {
            // line 153
            echo "        var external_times = [
            {
                key: \"Runtime\",
                values: [
                    ";
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["externalRuns"]) || array_key_exists("externalRuns", $context) ? $context["externalRuns"] : (function () { throw new RuntimeError('Variable "externalRuns" does not exist.', 157, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                // line 158
                echo "                    {
                        \"label\": \"";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 159), "html", null, true);
                echo "\",
                        \"value\": ";
                // line 160
                if (twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 160)) {
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, true, false, 160), "runtime", [], "any", true, true, false, 160)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, true, false, 160), "runtime", [], "any", false, false, false, 160), 0)) : (0)), "html", null, true);
                } else {
                    echo "0";
                }
                echo ",
                        \"color\": \"";
                // line 161
                if (twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 161)) {
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 161), "result", [], "any", false, false, false, 161), [], "array", true, true, false, 161)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstExternalRun", [], "any", false, false, false, 161), "result", [], "any", false, false, false, 161), [], "array", false, false, false, 161), "grey")) : ("grey")), "html", null, true);
                } else {
                    echo "grey";
                }
                echo "\",
                        \"description\": \"";
                // line 162
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", true, true, false, 162)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 162), twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 162))) : (twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 162))), "html", null, true);
                echo "\",
                    },
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(external_times, maxY);
            chart.tooltip.contentGenerator(function (obj) {
                var format = d3.format(\".3f\");
                return \"<b>Testcase \" + obj.data.description + \"</b><br><b>Runtime:</b> \" + format(obj.data.value) + \"s\";
            });
            chart.xAxis.axisLabel(\"Testcase Rank\");
            d3.select('#externalruntime svg')
                .datum(external_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#externalruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()(";
            // line 183
            echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 183, $this->source); })()), "html", null, true);
            echo ") + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()(";
            // line 185
            echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 185, $this->source); })()), "html", null, true);
            echo ") + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        ";
        }
        // line 192
        echo "    })
</script>

";
        // line 195
        $this->loadTemplate("jury/analysis/download_graphs.html.twig", "jury/partials/submission_graph.html.twig", 195)->display($context);
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/submission_graph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 195,  373 => 192,  363 => 185,  358 => 183,  338 => 165,  329 => 162,  321 => 161,  313 => 160,  309 => 159,  306 => 158,  302 => 157,  296 => 153,  293 => 152,  290 => 150,  280 => 143,  275 => 141,  255 => 123,  246 => 120,  238 => 119,  230 => 118,  226 => 117,  223 => 116,  219 => 115,  213 => 111,  211 => 110,  208 => 109,  198 => 102,  193 => 100,  173 => 82,  164 => 79,  160 => 78,  154 => 77,  151 => 76,  147 => 75,  141 => 71,  138 => 70,  129 => 68,  125 => 67,  121 => 66,  87 => 34,  85 => 24,  80 => 21,  73 => 16,  70 => 15,  63 => 10,  60 => 9,  53 => 4,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set timelimit = submission.problem.timelimit * submission.language.timeFactor %}
<div>
    {% if selectedJudging is not null %}
        <div style=\"display: inline-block\" id=\"testcaseruntime\">
            <h3 id=\"graphs\">Testcase Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    {% endif %}
    {% if externalJudgement is not null and externalJudgement.result is not null %}
        <div style=\"display: inline-block\" id=\"externalruntime\">
            <h3 id=\"graphs\">External Testcase Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    {% endif %}
    {% if judgings|length > 1 %}
        <div style=\"display: inline-block\" id=\"maxruntime\">
            <h3 id=\"graphs\">Max Runtimes</h3>
            <svg style=\"width:500px; height:250px;\"></svg>
        </div>
    {% endif %}
</div>

<script>
    {% set colors = {
        'correct':        '#28a745',
        'wrong-answer':   '#dc3545',
        'timelimit':      'orange',
        'run-error':      '#ff3399',
        'compiler-error': 'grey',
        'no-output':      'purple',
        'frozen':         'blue',
        'output-limit':   'black',
    } %}
    function create_chart(data, maxY) {
        var tickStep = 1;
        if (maxY <= 2) {
            tickStep = 0.2;
        } else if (maxY <= 5) {
            tickStep = 0.5;
        }
        maxY += tickStep;
        var chart = nv.models.multiBarChart()
            .x(function (d) {
                return d.label
            })
            .y(function (d) {
                return d.value
            })
            .showControls(false)
            .reduceXTicks(true)
            .forceY([0, maxY])
            .duration(250)
            .showLegend(false)
        ;
        var tickValues = [];
        for (i = 0; i <= maxY; i += tickStep) {
            tickValues.push(i);
        }
        chart.yAxis
            .tickValues(tickValues)
            .axisLabel('Runtime (in s)');
        return chart;
    }

    \$(function () {
        var maxY = {{ timelimit }};
        {% for judging in judgings %}
        maxY = Math.max(maxY, {{ maxRunTimes[judging.judgingId]|default(0) }});
        {% endfor %}
        {% if judgings|length > 1 %}
        var run_max_times = [
            {
                key: \"Max Runtime\",
                values: [
                    {% for judging in judgings | filter(judging => judging.result and judging.result != 'aborted') %}
                    {
                        \"label\": \"j{{ judging.judgingid }} ({{ judging.result }})\",
                        \"value\": {{ maxRunTimes[judging.judgingId]|default(0) }},
                        \"color\": \"{{ colors[judging.result] }}\",
                    },
                    {% endfor %}
                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(run_max_times, maxY);
            chart.tooltip.contentGenerator(function (obj) {
                var format = d3.format(\".3f\");
                return \"<b>\" + obj.data.label + \"</b><br><b>max runtime:</b> \" + format(obj.data.value) + \"s\";
            });
            chart.xAxis.axisLabel(\"Judging\");
            d3.select('#maxruntime svg')
                .datum(run_max_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#maxruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()({{ timelimit }}) + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()({{ timelimit }}) + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        {% endif %}

        {% if selectedJudging is not null %}
        var testcase_times = [
            {
                key: \"Runtime\",
                values: [
                    {% for run in runs %}
                    {
                        \"label\": \"{{ run.rank }}\",
                        \"value\": {% if run.firstJudgingRun %}{{ run.firstJudgingRun.runtime|default(0) }}{% else %}0{% endif %},
                        \"color\": \"{% if run.firstJudgingRun %}{{ colors[run.firstJudgingRun.runresult]|default('grey') }}{% else %}grey{% endif %}\",
                        \"description\": \"{{ run.description(true)|default(run.rank)|escape(\"js\") }}\",
                    },
                    {% endfor %}
                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(testcase_times, maxY);
            chart.tooltip.contentGenerator(function (obj) {
                var format = d3.format(\".3f\");
                return \"<b>Testcase \" + obj.data.description + \"</b><br><b>Runtime:</b> \" + format(obj.data.value) + \"s\";
            });
            chart.xAxis.axisLabel(\"Testcase Rank\");
            d3.select('#testcaseruntime svg')
                .datum(testcase_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#testcaseruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()({{ timelimit }}) + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()({{ timelimit }}) + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        {% endif %}

        {# TODO: merge this in the above graph? #}
        {% if externalJudgement is not null and externalJudgement.result is not null %}
        var external_times = [
            {
                key: \"Runtime\",
                values: [
                    {% for run in externalRuns %}
                    {
                        \"label\": \"{{ run.rank }}\",
                        \"value\": {% if run.firstExternalRun %}{{ run.firstExternalRun.runtime|default(0) }}{% else %}0{% endif %},
                        \"color\": \"{% if run.firstExternalRun %}{{ colors[run.firstExternalRun.result]|default('grey') }}{% else %}grey{% endif %}\",
                        \"description\": \"{{ run.description|default(run.rank) }}\",
                    },
                    {% endfor %}
                ]
            }
        ];
        nv.addGraph(function () {
            var chart = create_chart(external_times, maxY);
            chart.tooltip.contentGenerator(function (obj) {
                var format = d3.format(\".3f\");
                return \"<b>Testcase \" + obj.data.description + \"</b><br><b>Runtime:</b> \" + format(obj.data.value) + \"s\";
            });
            chart.xAxis.axisLabel(\"Testcase Rank\");
            d3.select('#externalruntime svg')
                .datum(external_times)
                .call(chart);
            var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
            var line = d3.select('#externalruntime svg')
                .append('line')
                .attr({
                    x1: chart.margin().left,
                    y1: chart.yAxis.scale()({{ timelimit }}) + chart.margin().top,
                    x2: +svgsize - chart.margin().right,
                    y2: chart.yAxis.scale()({{ timelimit }}) + chart.margin().top,
                })
                .style(\"stroke\", \"#F00\");
            nv.utils.windowResize(chart.update);
            return chart;
        });
        {% endif %}
    })
</script>

{% include 'jury/analysis/download_graphs.html.twig' %}
", "jury/partials/submission_graph.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/submission_graph.html.twig");
    }
}
