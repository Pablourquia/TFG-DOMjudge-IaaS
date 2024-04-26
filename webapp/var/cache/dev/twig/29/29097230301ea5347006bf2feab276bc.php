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

/* team/partials/submission.html.twig */
class __TwigTemplate_04593c2915a66b1616a7553d64d562f6 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission.html.twig"));

        // line 1
        if (((twig_test_empty((isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 1, $this->source); })())) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 1, $this->source); })()), "submission", [], "any", false, false, false, 1), "submittime", [], "any", false, false, false, 1) >= twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 1, $this->source); })()), "endtime", [], "any", false, false, false, 1))) || ((isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 1, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 1, $this->source); })()), "verified", [], "any", false, false, false, 1)))) {
            // line 2
            echo "    <div class=\"alert alert-danger\">Submission not found for this team or not judged yet.</div>
";
        } else {
            // line 4
            echo "    <div class=\"container\">
        ";
            // line 5
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 5, $this->source); })()), "valid", [], "any", false, false, false, 5)) {
                // line 6
                echo "            <div class=\"alert alert-warning\">This submission is being ignored. It is not used in determining your
                score.
            </div>
        ";
            }
            // line 10
            echo "
        <div class=\"d-flex flex-row\">
            <div class=\"p-2\">
                Problem:
                <b>
                        <span class=\"probid\">
                            ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 16, $this->source); })()), "submission", [], "any", false, false, false, 16), "contestProblem", [], "any", false, false, false, 16), "shortname", [], "any", false, false, false, 16), "html", null, true);
            echo "</span> -
                    ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 17, $this->source); })()), "submission", [], "any", false, false, false, 17), "contestProblem", [], "any", false, false, false, 17), "problem", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "
                </b>
            </div>
            <div class=\"p-2\">
                Submitted:
                <b>";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 22, $this->source); })()), "submission", [], "any", false, false, false, 22), "submittime", [], "any", false, false, false, 22), null, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 22, $this->source); })())), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                Language:
                <b>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 26, $this->source); })()), "submission", [], "any", false, false, false, 26), "language", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</b>
            </div>
            ";
            // line 28
            if ( !(isset($context["showCompile"]) || array_key_exists("showCompile", $context) ? $context["showCompile"] : (function () { throw new RuntimeError('Variable "showCompile" does not exist.', 28, $this->source); })())) {
                // line 29
                echo "                <div class=\"p-2\">
                    Compilation:
                    ";
                // line 31
                if ((twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 31, $this->source); })()), "result", [], "any", false, false, false, 31) == "compiler-error")) {
                    // line 32
                    echo "                        <span class=\"badge badge-danger\">failed</span>
                    ";
                } else {
                    // line 34
                    echo "                        <span class=\"badge badge-success\">successful</span>
                    ";
                }
                // line 36
                echo "                </div>
            ";
            }
            // line 38
            echo "        </div>

        ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 40, $this->source); })()), "result", [], "any", false, false, false, 40) != "compiler-error")) {
                // line 41
                echo "            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    Result: ";
                // line 43
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 43, $this->source); })()), "result", [], "any", false, false, false, 43));
                echo "
                </div>
            </div>
        ";
            }
            // line 47
            echo "
        ";
            // line 48
            if ((isset($context["allowDownload"]) || array_key_exists("allowDownload", $context) ? $context["allowDownload"] : (function () { throw new RuntimeError('Variable "allowDownload" does not exist.', 48, $this->source); })())) {
                // line 49
                echo "            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    <a title=\"Download submission ZIP\" aria-label=\"download submission zip\" class=\"btn btn-primary\" href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submission_download", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 51, $this->source); })()), "submission", [], "any", false, false, false, 51), "submitid", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\">
                        <i class=\"fa fa-file-archive\"></i> Download submission ZIP
                    </a>
                </div>
            </div>
        ";
            }
            // line 57
            echo "
        ";
            // line 58
            if ((isset($context["showCompile"]) || array_key_exists("showCompile", $context) ? $context["showCompile"] : (function () { throw new RuntimeError('Variable "showCompile" does not exist.', 58, $this->source); })())) {
                // line 59
                echo "            <hr/>
            <h6 class=\"text-center\">
                Compilation
                ";
                // line 62
                if ((twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 62, $this->source); })()), "result", [], "any", false, false, false, 62) == "compiler-error")) {
                    // line 63
                    echo "                    <span class=\"badge badge-danger\">failed</span>
                ";
                } else {
                    // line 65
                    echo "                    <span class=\"badge badge-success\">successful</span>
                ";
                }
                // line 67
                echo "                with the following output
            </h6>
            ";
                // line 69
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 69, $this->source); })()), "outputCompile", [0 => true], "method", false, false, false, 69))) {
                    // line 70
                    echo "                <pre class=\"output_text pre-scrollable\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 70, $this->source); })()), "outputCompile", [0 => true], "method", false, false, false, 70), "html", null, true);
                    echo "</pre>
            ";
                } else {
                    // line 72
                    echo "                <p class=\"nodata\">There were no compiler errors or warnings.</p>
            ";
                }
                // line 74
                echo "        ";
            }
            // line 75
            echo "
        ";
            // line 76
            if (((isset($context["showSampleOutput"]) || array_key_exists("showSampleOutput", $context) ? $context["showSampleOutput"] : (function () { throw new RuntimeError('Variable "showSampleOutput" does not exist.', 76, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 76, $this->source); })()), "result", [], "any", false, false, false, 76) != "compiler-error"))) {
                // line 77
                echo "            <hr/>
            <h4 class=\"text-center\">Run(s) on the provided sample data</h4>

            ";
                // line 80
                if (twig_test_empty((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 80, $this->source); })()))) {
                    // line 81
                    echo "                <p class=\"nodata\">No sample cases available.</p>
            ";
                } else {
                    // line 83
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 83, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                        // line 84
                        echo "                    <h5 id=\"run-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 84), "rank", [], "any", false, false, false, 84), "html", null, true);
                        echo "\" class=\"text-center mt-4\">Run ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 84), "rank", [], "any", false, false, false, 84), "html", null, true);
                        echo "</h5>

                    ";
                        // line 86
                        $context["judgingRun"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 86), "judgingRuns", [], "any", false, false, false, 86), "first", [], "any", false, false, false, 86);
                        // line 87
                        echo "                    ";
                        if ((((isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 87, $this->source); })()) == null) || (twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 87, $this->source); })()), "runresult", [], "any", false, false, false, 87) == null))) {
                            // line 88
                            echo "                        <p class=\"nodata\">Run not finished yet.</p>
                    ";
                        } else {
                            // line 90
                            echo "                        <div class=\"row\">
                            <div class=\"col-md-";
                            // line 91
                            echo twig_escape_filter($this->env, ((array_key_exists("size", $context)) ? (_twig_default_filter((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 91, $this->source); })()), 4)) : (4)), "html", null, true);
                            echo "\">
                                <table class=\"table table-sm table-striped\">
                                    <tr>
                                        <th>Description</th>
                                        <td>";
                            // line 95
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 95), "description", [0 => true], "method", false, false, false, 95), "html", null, true);
                            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Runtime</th>
                                        <td>";
                            // line 99
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 99, $this->source); })()), "runtime", [], "any", false, false, false, 99), "html", null, true);
                            echo " sec</td>
                                    </tr>
                                    <tr>
                                        <th>Result</th>
                                        <td>
                                            ";
                            // line 104
                            echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, (isset($context["judgingRun"]) || array_key_exists("judgingRun", $context) ? $context["judgingRun"] : (function () { throw new RuntimeError('Variable "judgingRun" does not exist.', 104, $this->source); })()), "runresult", [], "any", false, false, false, 104));
                            echo "
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        ";
                            // line 111
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["judging"]) || array_key_exists("judging", $context) ? $context["judging"] : (function () { throw new RuntimeError('Variable "judging" does not exist.', 111, $this->source); })()), "submission", [], "any", false, false, false, 111), "problem", [], "any", false, false, false, 111), "combinedRunCompare", [], "any", false, false, false, 111)) {
                                // line 112
                                echo "                            <h6 class=\"mt-3\">Jury/Submission interaction</h6>
                            ";
                                // line 113
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_run", [], "any", false, false, false, 113))) {
                                    // line 114
                                    echo "                                <p class=\"nodata\">There was no interaction log.</p>
                            ";
                                } else {
                                    // line 116
                                    echo "                                ";
                                    echo $this->extensions['App\Twig\TwigExtension']->interactiveLog(twig_get_attribute($this->env, $this->source, $context["run"], "output_run", [], "any", false, false, false, 116), true);
                                    echo "
                            ";
                                }
                                // line 118
                                echo "                        ";
                            } else {
                                // line 119
                                echo "                            <h6 class=\"mt-3\">Program output</h6>
                            ";
                                // line 120
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_run", [], "any", false, false, false, 120))) {
                                    // line 121
                                    echo "                                <pre class=\"output_text\">
";
                                    // line 122
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "output_run", [], "any", false, false, false, 122), "html", null, true);
                                    echo "</pre>
                            ";
                                } else {
                                    // line 124
                                    echo "                                <p class=\"nodata\">There was no program output.</p>
                            ";
                                }
                                // line 126
                                echo "
                            <h6 class=\"mt-3\">Diff output</h6>
                            ";
                                // line 128
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_diff", [], "any", false, false, false, 128))) {
                                    // line 129
                                    echo "                                <pre class=\"output_text\">
";
                                    // line 130
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "output_diff", [], "any", false, false, false, 130), "html", null, true);
                                    echo "</pre>
                            ";
                                } else {
                                    // line 132
                                    echo "                                <p class=\"nodata\">There was no diff output.</p>
                            ";
                                }
                                // line 134
                                echo "
                            <h6 class=\"mt-3\">Error output (info/debug/errors)</h6>
                            ";
                                // line 136
                                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_error", [], "any", false, false, false, 136))) {
                                    // line 137
                                    echo "                                <pre class=\"output_text\">
";
                                    // line 138
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "output_error", [], "any", false, false, false, 138), "html", null, true);
                                    echo "</pre>
                            ";
                                } else {
                                    // line 140
                                    echo "                                <p class=\"nodata\">There was no stderr output.</p>
                            ";
                                }
                                // line 142
                                echo "                        ";
                            }
                            // line 143
                            echo "                    ";
                        }
                        // line 144
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    echo "            ";
                }
                echo " ";
                // line 146
                echo "        ";
            }
            echo " ";
            // line 147
            echo "    </div>
";
        }
        // line 148
        echo " ";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 148,  355 => 147,  351 => 146,  347 => 145,  341 => 144,  338 => 143,  335 => 142,  331 => 140,  326 => 138,  323 => 137,  321 => 136,  317 => 134,  313 => 132,  308 => 130,  305 => 129,  303 => 128,  299 => 126,  295 => 124,  290 => 122,  287 => 121,  285 => 120,  282 => 119,  279 => 118,  273 => 116,  269 => 114,  267 => 113,  264 => 112,  262 => 111,  252 => 104,  244 => 99,  237 => 95,  230 => 91,  227 => 90,  223 => 88,  220 => 87,  218 => 86,  210 => 84,  205 => 83,  201 => 81,  199 => 80,  194 => 77,  192 => 76,  189 => 75,  186 => 74,  182 => 72,  176 => 70,  174 => 69,  170 => 67,  166 => 65,  162 => 63,  160 => 62,  155 => 59,  153 => 58,  150 => 57,  141 => 51,  137 => 49,  135 => 48,  132 => 47,  125 => 43,  121 => 41,  119 => 40,  115 => 38,  111 => 36,  107 => 34,  103 => 32,  101 => 31,  97 => 29,  95 => 28,  90 => 26,  83 => 22,  75 => 17,  71 => 16,  63 => 10,  57 => 6,  55 => 5,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if judging is empty or judging.submission.submittime >= current_team_contest.endtime or (verificationRequired and not judging.verified) %}
    <div class=\"alert alert-danger\">Submission not found for this team or not judged yet.</div>
{% else %}
    <div class=\"container\">
        {% if not judging.valid %}
            <div class=\"alert alert-warning\">This submission is being ignored. It is not used in determining your
                score.
            </div>
        {% endif %}

        <div class=\"d-flex flex-row\">
            <div class=\"p-2\">
                Problem:
                <b>
                        <span class=\"probid\">
                            {{ judging.submission.contestProblem.shortname }}</span> -
                    {{ judging.submission.contestProblem.problem.name }}
                </b>
            </div>
            <div class=\"p-2\">
                Submitted:
                <b>{{ judging.submission.submittime | printtime(null, current_team_contest) }}</b>
            </div>
            <div class=\"p-2\">
                Language:
                <b>{{ judging.submission.language.name }}</b>
            </div>
            {% if not showCompile %}
                <div class=\"p-2\">
                    Compilation:
                    {% if judging.result == 'compiler-error' %}
                        <span class=\"badge badge-danger\">failed</span>
                    {% else %}
                        <span class=\"badge badge-success\">successful</span>
                    {% endif %}
                </div>
            {% endif %}
        </div>

        {% if judging.result != 'compiler-error' %}
            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    Result: {{ judging.result | printResult }}
                </div>
            </div>
        {% endif %}

        {% if allowDownload %}
            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    <a title=\"Download submission ZIP\" aria-label=\"download submission zip\" class=\"btn btn-primary\" href=\"{{ path('team_submission_download', {'submitId': judging.submission.submitid}) }}\">
                        <i class=\"fa fa-file-archive\"></i> Download submission ZIP
                    </a>
                </div>
            </div>
        {% endif %}

        {% if showCompile %}
            <hr/>
            <h6 class=\"text-center\">
                Compilation
                {% if judging.result == 'compiler-error' %}
                    <span class=\"badge badge-danger\">failed</span>
                {% else %}
                    <span class=\"badge badge-success\">successful</span>
                {% endif %}
                with the following output
            </h6>
            {% if judging.outputCompile(true) is not empty %}
                <pre class=\"output_text pre-scrollable\">{{ judging.outputCompile(true) }}</pre>
            {% else %}
                <p class=\"nodata\">There were no compiler errors or warnings.</p>
            {% endif %}
        {% endif %}

        {% if showSampleOutput and judging.result != 'compiler-error' %}
            <hr/>
            <h4 class=\"text-center\">Run(s) on the provided sample data</h4>

            {% if runs is empty %}
                <p class=\"nodata\">No sample cases available.</p>
            {% else %}
                {% for run in runs %}
                    <h5 id=\"run-{{ run.0.rank }}\" class=\"text-center mt-4\">Run {{ run.0.rank }}</h5>

                    {% set judgingRun = run.0.judgingRuns.first %}
                    {% if judgingRun == null or judgingRun.runresult == null %}
                        <p class=\"nodata\">Run not finished yet.</p>
                    {% else %}
                        <div class=\"row\">
                            <div class=\"col-md-{{ size|default(4) }}\">
                                <table class=\"table table-sm table-striped\">
                                    <tr>
                                        <th>Description</th>
                                        <td>{{ run.0.description(true) }}</td>
                                    </tr>
                                    <tr>
                                        <th>Runtime</th>
                                        <td>{{ judgingRun.runtime }} sec</td>
                                    </tr>
                                    <tr>
                                        <th>Result</th>
                                        <td>
                                            {{ judgingRun.runresult | printResult }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        {% if judging.submission.problem.combinedRunCompare %}
                            <h6 class=\"mt-3\">Jury/Submission interaction</h6>
                            {% if run.output_run is empty %}
                                <p class=\"nodata\">There was no interaction log.</p>
                            {% else %}
                                {{ run.output_run | interactiveLog(true) }}
                            {% endif %}
                        {% else %}
                            <h6 class=\"mt-3\">Program output</h6>
                            {% if run.output_run is not empty %}
                                <pre class=\"output_text\">
{{ run.output_run }}</pre>
                            {% else %}
                                <p class=\"nodata\">There was no program output.</p>
                            {% endif %}

                            <h6 class=\"mt-3\">Diff output</h6>
                            {% if run.output_diff is not empty %}
                                <pre class=\"output_text\">
{{ run.output_diff }}</pre>
                            {% else %}
                                <p class=\"nodata\">There was no diff output.</p>
                            {% endif %}

                            <h6 class=\"mt-3\">Error output (info/debug/errors)</h6>
                            {% if run.output_error is not empty %}
                                <pre class=\"output_text\">
{{ run.output_error }}</pre>
                            {% else %}
                                <p class=\"nodata\">There was no stderr output.</p>
                            {% endif %}
                        {% endif %}
                    {% endif %}
                {% endfor %}
            {% endif %} {# not runs is empty #}
        {% endif %} {# showSampleOutput and judging.result != 'compiler-error' #}
    </div>
{% endif %} {# not (judging is empty or judging.submission.submittime >= current_team_contest.endtime or (verificationRequired and not judging.verified)) #}
", "team/partials/submission.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/team/partials/submission.html.twig");
    }
}
