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

/* partials/problem_list.html.twig */
class __TwigTemplate_bf45100c990db11a1ae095d9b0e9f938 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/problem_list.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/problem_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/problem_list.html.twig"));

        // line 2
        echo "
<h1 class=\"mt-4 text-center\">";
        // line 3
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 3), "Contest")) : ("Contest")), "html", null, true);
        echo " problems</h1>

";
        // line 5
        if (twig_test_empty((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "    <div class=\"alert alert-secondary\">No problem texts available at this point.</div>
";
        } else {
            // line 8
            echo "    <div class=\"container\">
        <div class=\"row problem-list\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 10, $this->source); })()), 3, []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 11
                echo "                <div class=\"col-md-12\">
                    <div class=\"card-deck my-md-3\">
                        ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 14
                    echo "                            ";
                    if (twig_test_empty($context["problem"])) {
                        // line 15
                        echo "                                <div class=\"card\" style=\"border: none;\"></div>
                            ";
                    } else {
                        // line 17
                        echo "                                ";
                        $context["numsamples"] = twig_get_attribute($this->env, $this->source, (isset($context["samples"]) || array_key_exists("samples", $context) ? $context["samples"] : (function () { throw new RuntimeError('Variable "samples" does not exist.', 17, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 17), [], "array", false, false, false, 17);
                        // line 18
                        echo "                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h2 class=\"card-title\">
                                            ";
                        // line 21
                        echo $this->extensions['App\Twig\TwigExtension']->problemBadge($context["problem"]);
                        echo "
                                        </h2>
                                        <h3 class=\"card-subtitle mb-2 text-muted\">
                                            ";
                        // line 24
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                        echo "
                                        </h3>
                                        ";
                        // line 26
                        if ((isset($context["showLimits"]) || array_key_exists("showLimits", $context) ? $context["showLimits"] : (function () { throw new RuntimeError('Variable "showLimits" does not exist.', 26, $this->source); })())) {
                            // line 27
                            echo "                                            <h4 class=\"card-subtitle mb-2 text-muted\">
                                                Limits: ";
                            // line 28
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 28), "timelimit", [], "any", false, false, false, 28), "html", null, true);
                            echo "
                                                second";
                            // line 30
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 30), "timelimit", [], "any", false, false, false, 30) > 1)) {
                                echo "s";
                            }
                            // line 31
                            if ((isset($context["timeFactorDiffers"]) || array_key_exists("timeFactorDiffers", $context) ? $context["timeFactorDiffers"] : (function () { throw new RuntimeError('Variable "timeFactorDiffers" does not exist.', 31, $this->source); })())) {
                                // line 32
                                echo "<sup>*</sup>
                                                ";
                            }
                            // line 34
                            echo "                                                /
                                                ";
                            // line 35
                            echo App\Utils\Utils::printSize((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, true, false, 35), "memlimit", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, true, false, 35), "memlimit", [], "any", false, false, false, 35), (isset($context["defaultMemoryLimit"]) || array_key_exists("defaultMemoryLimit", $context) ? $context["defaultMemoryLimit"] : (function () { throw new RuntimeError('Variable "defaultMemoryLimit" does not exist.', 35, $this->source); })()))) : ((isset($context["defaultMemoryLimit"]) || array_key_exists("defaultMemoryLimit", $context) ? $context["defaultMemoryLimit"] : (function () { throw new RuntimeError('Variable "defaultMemoryLimit" does not exist.', 35, $this->source); })()))) * 1024));
                            echo "
                                            </h4>
                                        ";
                        }
                        // line 38
                        echo "
                                        ";
                        // line 39
                        if (array_key_exists("stats", $context)) {
                            // line 40
                            echo "                                            <div class=\"mt-3\">
                                                ";
                            // line 41
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable([0 => true, 1 => false]);
                            foreach ($context['_seq'] as $context["_key"] => $context["correct"]) {
                                // line 42
                                echo "                                                    <div class=\"problem-stats d-flex justify-content-center\">
                                                        ";
                                // line 43
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(range(0, (twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 43, $this->source); })()), "numBuckets", [], "any", false, false, false, 43) - 1)));
                                foreach ($context['_seq'] as $context["_key"] => $context["bucket"]) {
                                    // line 44
                                    echo "                                                            ";
                                    if ($context["correct"]) {
                                        // line 45
                                        echo "                                                                ";
                                        $context["index"] = "correct";
                                        // line 46
                                        echo "                                                                ";
                                        $context["maxBucketSize"] = twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 46, $this->source); })()), "maxBucketSizeCorrect", [], "any", false, false, false, 46);
                                        // line 47
                                        echo "                                                            ";
                                    } else {
                                        // line 48
                                        echo "                                                                ";
                                        $context["index"] = "incorrect";
                                        // line 49
                                        echo "                                                                ";
                                        $context["maxBucketSize"] = twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 49, $this->source); })()), "maxBucketSizeIncorrect", [], "any", false, false, false, 49);
                                        // line 50
                                        echo "                                                            ";
                                    }
                                    // line 51
                                    echo "                                                            ";
                                    $context["stat"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 51, $this->source); })()), "problems", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 51), "probid", [], "any", false, false, false, 51), [], "array", false, false, false, 51), (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 51, $this->source); })()), [], "array", false, false, false, 51), $context["bucket"], [], "array", false, false, false, 51);
                                    // line 52
                                    echo "                                                            ";
                                    $context["count"] = twig_get_attribute($this->env, $this->source, (isset($context["stat"]) || array_key_exists("stat", $context) ? $context["stat"] : (function () { throw new RuntimeError('Variable "stat" does not exist.', 52, $this->source); })()), "count", [], "any", false, false, false, 52);
                                    // line 53
                                    echo "                                                            ";
                                    if (((isset($context["maxBucketSize"]) || array_key_exists("maxBucketSize", $context) ? $context["maxBucketSize"] : (function () { throw new RuntimeError('Variable "maxBucketSize" does not exist.', 53, $this->source); })()) == 0)) {
                                        // line 54
                                        echo "                                                                ";
                                        $context["bucket"] = 0;
                                        // line 55
                                        echo "                                                            ";
                                    } else {
                                        // line 56
                                        echo "                                                                ";
                                        $context["bucket"] = twig_round((((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 56, $this->source); })()) / (isset($context["maxBucketSize"]) || array_key_exists("maxBucketSize", $context) ? $context["maxBucketSize"] : (function () { throw new RuntimeError('Variable "maxBucketSize" does not exist.', 56, $this->source); })())) * 9), 0, "ceil");
                                        // line 57
                                        echo "                                                            ";
                                    }
                                    // line 58
                                    echo "                                                            ";
                                    if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 58, $this->source); })()) == 1)) {
                                        // line 59
                                        echo "                                                                ";
                                        $context["submissionText"] = "submission";
                                        // line 60
                                        echo "                                                            ";
                                    } else {
                                        // line 61
                                        echo "                                                                ";
                                        $context["submissionText"] = "submissions";
                                        // line 62
                                        echo "                                                            ";
                                    }
                                    // line 63
                                    echo "                                                            ";
                                    if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 63, $this->source); })()), "freezeData", [], "any", false, false, false, 63), "showFinal", [], "any", false, false, false, 63) && twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 63, $this->source); })()), "freezetime", [], "any", false, false, false, 63)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat"]) || array_key_exists("stat", $context) ? $context["stat"] : (function () { throw new RuntimeError('Variable "stat" does not exist.', 63, $this->source); })()), "end", [], "any", false, false, false, 63), "timestamp", [], "any", false, false, false, 63) >= twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 63, $this->source); })()), "freezetime", [], "any", false, false, false, 63)))) {
                                        // line 64
                                        echo "                                                                ";
                                        $context["maxBucketSize"] = max(1, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 64, $this->source); })()), "maxBucketSizeCorrect", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 64, $this->source); })()), "maxBucketSizeIncorrect", [], "any", false, false, false, 64));
                                        // line 65
                                        echo "                                                                ";
                                        $context["bucket"] = twig_round((((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 65, $this->source); })()) / (isset($context["maxBucketSize"]) || array_key_exists("maxBucketSize", $context) ? $context["maxBucketSize"] : (function () { throw new RuntimeError('Variable "maxBucketSize" does not exist.', 65, $this->source); })())) * 9), 0, "ceil");
                                        // line 66
                                        echo "                                                                ";
                                        $context["itemClass"] = (("frozen" . "-") . $context["bucket"]);
                                        // line 67
                                        echo "                                                                ";
                                        $context["label"] = ((((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 67, $this->source); })()) . " ") . (isset($context["submissionText"]) || array_key_exists("submissionText", $context) ? $context["submissionText"] : (function () { throw new RuntimeError('Variable "submissionText" does not exist.', 67, $this->source); })())) . " in freeze");
                                        // line 68
                                        echo "                                                            ";
                                    } else {
                                        // line 69
                                        echo "                                                                ";
                                        $context["itemClass"] = (((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 69, $this->source); })()) . "-") . $context["bucket"]);
                                        // line 70
                                        echo "                                                                ";
                                        $context["label"] = (((((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 70, $this->source); })()) . " ") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 70, $this->source); })())) . " ") . (isset($context["submissionText"]) || array_key_exists("submissionText", $context) ? $context["submissionText"] : (function () { throw new RuntimeError('Variable "submissionText" does not exist.', 70, $this->source); })()));
                                        // line 71
                                        echo "                                                            ";
                                    }
                                    // line 72
                                    echo "                                                            <div
                                                                class=\"problem-stats-item ";
                                    // line 73
                                    echo twig_escape_filter($this->env, (isset($context["itemClass"]) || array_key_exists("itemClass", $context) ? $context["itemClass"] : (function () { throw new RuntimeError('Variable "itemClass" does not exist.', 73, $this->source); })()), "html", null, true);
                                    echo "\"
                                                                data-toggle=\"tooltip\"
                                                                data-placement=\"top\"
                                                                data-html=\"true\"
                                                                title=\"Between ";
                                    // line 77
                                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat"]) || array_key_exists("stat", $context) ? $context["stat"] : (function () { throw new RuntimeError('Variable "stat" does not exist.', 77, $this->source); })()), "start", [], "any", false, false, false, 77), "timestamp", [], "any", false, false, false, 77), null, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 77, $this->source); })())), "html", null, true);
                                    echo " and ";
                                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stat"]) || array_key_exists("stat", $context) ? $context["stat"] : (function () { throw new RuntimeError('Variable "stat" does not exist.', 77, $this->source); })()), "end", [], "any", false, false, false, 77), "timestamp", [], "any", false, false, false, 77), null, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 77, $this->source); })())), "html", null, true);
                                    echo ":<br/>";
                                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 77, $this->source); })()), "html", null, true);
                                    echo "\">
                                                            </div>
                                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bucket'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 80
                                echo "                                                    </div>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['correct'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 82
                            echo "                                            </div>
                                            <div>
                                                <br/>
                                            </div>
                                        ";
                        }
                        // line 87
                        echo "
                                        <div class=\"text-center\">
                                            ";
                        // line 89
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 89), "problemtextType", [], "any", false, false, false, 89))) {
                            // line 90
                            echo "                                                <a class=\"btn btn-secondary\" role=\"button\"
                                                   href=\"";
                            // line 91
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["problem_text_path"]) || array_key_exists("problem_text_path", $context) ? $context["problem_text_path"] : (function () { throw new RuntimeError('Variable "problem_text_path" does not exist.', 91, $this->source); })()), ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 91)]), "html", null, true);
                            echo "\">
                                                    <i class=\"fas fa-file-";
                            // line 92
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 92), "problemtextType", [], "any", false, false, false, 92), "html", null, true);
                            echo "\"></i>
                                                    text
                                                </a>
                                            ";
                        }
                        // line 96
                        echo "
                                            ";
                        // line 97
                        if (((isset($context["numsamples"]) || array_key_exists("numsamples", $context) ? $context["numsamples"] : (function () { throw new RuntimeError('Variable "numsamples" does not exist.', 97, $this->source); })()) > 0)) {
                            // line 98
                            echo "                                                <a class=\"btn btn-secondary\" role=\"button\"
                                                   href=\"";
                            // line 99
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["problem_sample_zip_path"]) || array_key_exists("problem_sample_zip_path", $context) ? $context["problem_sample_zip_path"] : (function () { throw new RuntimeError('Variable "problem_sample_zip_path" does not exist.', 99, $this->source); })()), ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 99)]), "html", null, true);
                            echo "\">
                                                    <i class=\"fas fa-file-archive\"></i> samples
                                                </a>
                                            ";
                        }
                        // line 103
                        echo "
                                            ";
                        // line 104
                        if (((array_key_exists("show_submit_button", $context)) ? (_twig_default_filter((isset($context["show_submit_button"]) || array_key_exists("show_submit_button", $context) ? $context["show_submit_button"] : (function () { throw new RuntimeError('Variable "show_submit_button" does not exist.', 104, $this->source); })()), false)) : (false))) {
                            // line 105
                            echo "                                                ";
                            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || ( !(null === (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 105, $this->source); })())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 105, $this->source); })()), "freezeData", [], "any", false, false, false, 105), "started", [], "any", false, false, false, 105)))) {
                                // line 106
                                echo "                                                    <a class=\"justify-content-center\" data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submit", ["problem" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 106)]), "html", null, true);
                                echo "\">
                                                        <span class=\"btn btn-success\">
                                                            <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                                                        </span>
                                                    </a>
                                                ";
                            } else {
                                // line 112
                                echo "                                                    <a class=\"justify-content-center\">
                                                        <span class=\"btn btn-success disabled\" disabled>
                                                            <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                                                        </span>
                                                    </a>
                                                ";
                            }
                            // line 118
                            echo "                                            ";
                        }
                        // line 119
                        echo "                                        </div>

                                        ";
                        // line 121
                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 121), "attachments", [], "any", false, false, false, 121)) > 0)) {
                            // line 122
                            echo "                                            <hr/>
                                            <ol class=\"text-center list-group list-group-flush\">
                                                ";
                            // line 124
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 124), "attachments", [], "any", false, false, false, 124));
                            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                                // line 125
                                echo "                                                    <li class=\"list-group-item\">
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"";
                                // line 127
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["problem_attachment_path"]) || array_key_exists("problem_attachment_path", $context) ? $context["problem_attachment_path"] : (function () { throw new RuntimeError('Variable "problem_attachment_path" does not exist.', 127, $this->source); })()), ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 127), "attachmentId" => twig_get_attribute($this->env, $this->source, $context["attachment"], "attachmentid", [], "any", false, false, false, 127)]), "html", null, true);
                                echo "\">
                                                            <i class=\"";
                                // line 128
                                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->fileTypeIcon(twig_get_attribute($this->env, $this->source, $context["attachment"], "type", [], "any", false, false, false, 128)), "html", null, true);
                                echo "\"></i> ";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 128), "html", null, true);
                                echo "
                                                        </a>
                                                    </li>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 132
                            echo "                                            </ol>
                                        ";
                        }
                        // line 134
                        echo "
                                    </div>
                                </div>
                                <div class=\"w-100 d-none d-sm-block d-md-block d-lg-none\"><!-- wrap every 2 on sm--></div>
                            ";
                    }
                    // line 139
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "        </div>

        ";
            // line 145
            if (((isset($context["showLimits"]) || array_key_exists("showLimits", $context) ? $context["showLimits"] : (function () { throw new RuntimeError('Variable "showLimits" does not exist.', 145, $this->source); })()) && (isset($context["timeFactorDiffers"]) || array_key_exists("timeFactorDiffers", $context) ? $context["timeFactorDiffers"] : (function () { throw new RuntimeError('Variable "timeFactorDiffers" does not exist.', 145, $this->source); })()))) {
                // line 146
                echo "            <div class=\"row\">
                <div class=\"col-md-12 my-sm-3\">
                    <div class=\" alert alert-secondary\" role=\"alert\">
                        * language time factors apply
                    </div>
                </div>
            </div>
        ";
            }
            // line 154
            echo "    </div>
";
        }
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/problem_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 154,  399 => 146,  397 => 145,  393 => 143,  385 => 140,  379 => 139,  372 => 134,  368 => 132,  356 => 128,  352 => 127,  348 => 125,  344 => 124,  340 => 122,  338 => 121,  334 => 119,  331 => 118,  323 => 112,  313 => 106,  310 => 105,  308 => 104,  305 => 103,  298 => 99,  295 => 98,  293 => 97,  290 => 96,  283 => 92,  279 => 91,  276 => 90,  274 => 89,  270 => 87,  263 => 82,  256 => 80,  243 => 77,  236 => 73,  233 => 72,  230 => 71,  227 => 70,  224 => 69,  221 => 68,  218 => 67,  215 => 66,  212 => 65,  209 => 64,  206 => 63,  203 => 62,  200 => 61,  197 => 60,  194 => 59,  191 => 58,  188 => 57,  185 => 56,  182 => 55,  179 => 54,  176 => 53,  173 => 52,  170 => 51,  167 => 50,  164 => 49,  161 => 48,  158 => 47,  155 => 46,  152 => 45,  149 => 44,  145 => 43,  142 => 42,  138 => 41,  135 => 40,  133 => 39,  130 => 38,  124 => 35,  121 => 34,  117 => 32,  115 => 31,  111 => 30,  107 => 28,  104 => 27,  102 => 26,  97 => 24,  91 => 21,  86 => 18,  83 => 17,  79 => 15,  76 => 14,  72 => 13,  68 => 11,  64 => 10,  60 => 8,  56 => 6,  54 => 5,  49 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# problem \\App\\Entity\\ContestProblem #}

<h1 class=\"mt-4 text-center\">{{ contest.name | default('Contest') }} problems</h1>

{% if problems is empty %}
    <div class=\"alert alert-secondary\">No problem texts available at this point.</div>
{% else %}
    <div class=\"container\">
        <div class=\"row problem-list\">
            {% for row in problems|batch(3, []) %}
                <div class=\"col-md-12\">
                    <div class=\"card-deck my-md-3\">
                        {% for problem in row %}
                            {% if problem is empty %}
                                <div class=\"card\" style=\"border: none;\"></div>
                            {% else %}
                                {% set numsamples = samples[problem.probid] %}
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h2 class=\"card-title\">
                                            {{ problem | problemBadge }}
                                        </h2>
                                        <h3 class=\"card-subtitle mb-2 text-muted\">
                                            {{ problem.problem.name }}
                                        </h3>
                                        {% if showLimits %}
                                            <h4 class=\"card-subtitle mb-2 text-muted\">
                                                Limits: {{ problem.problem.timelimit }}
                                                second
                                                {%- if problem.problem.timelimit > 1 %}s{% endif %}
                                                {%- if timeFactorDiffers -%}
                                                    <sup>*</sup>
                                                {% endif %}
                                                /
                                                {{ ((problem.problem.memlimit | default(defaultMemoryLimit)) * 1024) | printSize }}
                                            </h4>
                                        {% endif %}

                                        {% if stats is defined %}
                                            <div class=\"mt-3\">
                                                {% for correct in [true, false] %}
                                                    <div class=\"problem-stats d-flex justify-content-center\">
                                                        {% for bucket in 0..stats.numBuckets - 1 %}
                                                            {% if correct %}
                                                                {% set index = 'correct' %}
                                                                {% set maxBucketSize = stats.maxBucketSizeCorrect %}
                                                            {% else %}
                                                                {% set index = 'incorrect' %}
                                                                {% set maxBucketSize = stats.maxBucketSizeIncorrect %}
                                                            {% endif %}
                                                            {% set stat = stats.problems[problem.problem.probid][index][bucket] %}
                                                            {% set count = stat.count %}
                                                            {% if maxBucketSize == 0 %}
                                                                {% set bucket = 0 %}
                                                            {% else %}
                                                                {% set bucket = (count / maxBucketSize * 9) | round(0, 'ceil') %}
                                                            {% endif %}
                                                            {% if count == 1 %}
                                                                {% set submissionText = 'submission' %}
                                                            {% else %}
                                                                {% set submissionText = 'submissions' %}
                                                            {% endif %}
                                                            {% if not contest.freezeData.showFinal and contest.freezetime and stat.end.timestamp >= contest.freezetime %}
                                                                {% set maxBucketSize = max(1, stats.maxBucketSizeCorrect, stats.maxBucketSizeIncorrect) %}
                                                                {% set bucket = (count / maxBucketSize * 9) | round(0, 'ceil') %}
                                                                {% set itemClass = 'frozen' ~ '-' ~ bucket %}
                                                                {% set label = count ~ ' ' ~ submissionText ~ ' in freeze' %}
                                                            {% else %}
                                                                {% set itemClass = index ~ '-' ~ bucket %}
                                                                {% set label = count ~ ' ' ~ index ~ ' ' ~ submissionText %}
                                                            {% endif %}
                                                            <div
                                                                class=\"problem-stats-item {{ itemClass }}\"
                                                                data-toggle=\"tooltip\"
                                                                data-placement=\"top\"
                                                                data-html=\"true\"
                                                                title=\"Between {{ stat.start.timestamp | printtime(null, contest) }} and {{ stat.end.timestamp | printtime(null, contest) }}:<br/>{{ label }}\">
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                {% endfor %}
                                            </div>
                                            <div>
                                                <br/>
                                            </div>
                                        {% endif %}

                                        <div class=\"text-center\">
                                            {% if problem.problem.problemtextType is not empty %}
                                                <a class=\"btn btn-secondary\" role=\"button\"
                                                   href=\"{{ path(problem_text_path, {'probId': problem.probid}) }}\">
                                                    <i class=\"fas fa-file-{{ problem.problem.problemtextType }}\"></i>
                                                    text
                                                </a>
                                            {% endif %}

                                            {% if numsamples > 0 %}
                                                <a class=\"btn btn-secondary\" role=\"button\"
                                                   href=\"{{ path(problem_sample_zip_path, {'probId': problem.probid}) }}\">
                                                    <i class=\"fas fa-file-archive\"></i> samples
                                                </a>
                                            {% endif %}

                                            {% if show_submit_button | default(false) %}
                                                {% if is_granted('ROLE_JURY') or (current_team_contest is not null and current_team_contest.freezeData.started) %}
                                                    <a class=\"justify-content-center\" data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"{{ path('team_submit', {problem: problem.probid}) }}\">
                                                        <span class=\"btn btn-success\">
                                                            <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                                                        </span>
                                                    </a>
                                                {% else %}
                                                    <a class=\"justify-content-center\">
                                                        <span class=\"btn btn-success disabled\" disabled>
                                                            <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                                                        </span>
                                                    </a>
                                                {% endif %}
                                            {% endif %}
                                        </div>

                                        {% if problem.problem.attachments | length > 0 %}
                                            <hr/>
                                            <ol class=\"text-center list-group list-group-flush\">
                                                {% for attachment in problem.problem.attachments %}
                                                    <li class=\"list-group-item\">
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"{{ path(problem_attachment_path, {'probId': problem.probid, 'attachmentId': attachment.attachmentid}) }}\">
                                                            <i class=\"{{ attachment.type | fileTypeIcon }}\"></i> {{ attachment.name }}
                                                        </a>
                                                    </li>
                                                {% endfor %}
                                            </ol>
                                        {% endif %}

                                    </div>
                                </div>
                                <div class=\"w-100 d-none d-sm-block d-md-block d-lg-none\"><!-- wrap every 2 on sm--></div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% endfor %}
        </div>

        {% if showLimits and timeFactorDiffers %}
            <div class=\"row\">
                <div class=\"col-md-12 my-sm-3\">
                    <div class=\" alert alert-secondary\" role=\"alert\">
                        * language time factors apply
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
{% endif %}
", "partials/problem_list.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/partials/problem_list.html.twig");
    }
}
