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

/* jury/submission.html.twig */
class __TwigTemplate_83cd3cf0920552d72f7aaa9772a97274 extends Template
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
        // line 2
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submission.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submission.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/submission.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/submission.html.twig", 2);
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

        echo "Submission s";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 4, $this->source); })()), "submitid", [], "any", false, false, false, 4), "html", null, true);
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
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nv.d3.min.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nv.d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/FileSaver.min.js"), "html", null, true);
        echo "\"></script>
    <style>
        .judging-table td a, .judging-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .judging-table tr.disabled td a {
            color: silver
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 27, $this->source); })()), "externalJudgements", [], "any", false, false, false, 27), "empty", [], "any", false, false, false, 27)) {
            // line 28
            echo "        ";
            $context["externalJudgement"] = null;
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "        ";
            $context["externalJudgement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 30, $this->source); })()), "externalJudgements", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30);
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if ((isset($context["claimWarning"]) || array_key_exists("claimWarning", $context) ? $context["claimWarning"] : (function () { throw new RuntimeError('Variable "claimWarning" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "        <div class=\"alert alert-warning\">
            ";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["claimWarning"]) || array_key_exists("claimWarning", $context) ? $context["claimWarning"] : (function () { throw new RuntimeError('Variable "claimWarning" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if ((isset($context["requestedOutputCount"]) || array_key_exists("requestedOutputCount", $context) ? $context["requestedOutputCount"] : (function () { throw new RuntimeError('Variable "requestedOutputCount" does not exist.', 39, $this->source); })())) {
            // line 40
            echo "        <div class=\"alert alert-warning\">
            Waiting for ";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["requestedOutputCount"]) || array_key_exists("requestedOutputCount", $context) ? $context["requestedOutputCount"] : (function () { throw new RuntimeError('Variable "requestedOutputCount" does not exist.', 41, $this->source); })()), "html", null, true);
            echo " team output(s) (or full debug package) to be grabbed and uploaded.
        </div>
    ";
        }
        // line 44
        echo "
    <div class=\"mb-3\">
        <h1 style=\"display: inline;\">
            Submission ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 47, $this->source); })()), "submitid", [], "any", false, false, false, 47), "html", null, true);
        echo "
            ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 48, $this->source); })()), "originalSubmission", [], "any", false, false, false, 48)) {
            // line 49
            echo "                ";
            $context["origSubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 49, $this->source); })()), "originalSubmission", [], "any", false, false, false, 49), "submitid", [], "any", false, false, false, 49)]);
            // line 50
            echo "                (resubmit of <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["origSubmissionUrl"]) || array_key_exists("origSubmissionUrl", $context) ? $context["origSubmissionUrl"] : (function () { throw new RuntimeError('Variable "origSubmissionUrl" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\">s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 50, $this->source); })()), "originalSubmission", [], "any", false, false, false, 50), "submitid", [], "any", false, false, false, 50), "html", null, true);
            echo "</a>)
            ";
        }
        // line 52
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 52, $this->source); })()), "resubmissions", [], "any", false, false, false, 52))) {
            // line 53
            echo "                (resubmitted as";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 54, $this->source); })()), "resubmissions", [], "any", false, false, false, 54));
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
            foreach ($context['_seq'] as $context["_key"] => $context["resubmission"]) {
                // line 55
                $context["resubmissionUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 55)]);
                // line 56
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["resubmissionUrl"]) || array_key_exists("resubmissionUrl", $context) ? $context["resubmissionUrl"] : (function () { throw new RuntimeError('Variable "resubmissionUrl" does not exist.', 56, $this->source); })()), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["resubmission"], "submitid", [], "any", false, false, false, 56), "html", null, true);
                echo "</a>";
                // line 57
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 57)) {
                    echo ",";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resubmission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo ")
            ";
        }
        // line 61
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 61, $this->source); })()), "valid", [], "any", false, false, false, 61)) {
            // line 62
            echo "                (ignored)
            ";
        }
        // line 64
        echo "        </h1>
        ";
        // line 65
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 66
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 66, $this->source); })()), "valid", [], "any", false, false, false, 66)) {
                // line 67
                echo "                ";
                $context["action"] = "ignore";
                // line 68
                echo "            ";
            } else {
                // line 69
                echo "                ";
                $context["action"] = "unignore";
                // line 70
                echo "            ";
            }
            // line 71
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_update_status", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 71, $this->source); })()), "submitid", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" method=\"post\"
                  style=\"display: inline; \">
                <input type=\"hidden\" name=\"valid\" value=\"";
            // line 73
            if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 73, $this->source); })()), "valid", [], "any", false, false, false, 73)) {
                echo "0";
            } else {
                echo "1";
            }
            echo "\"/>
                <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\"
                       value=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 75, $this->source); })())), "html", null, true);
            echo " this submission\"
                       onclick=\"return confirm('Really ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 76, $this->source); })()), "html", null, true);
            echo " submission s";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 76, $this->source); })()), "submitid", [], "any", false, false, false, 76), "html", null, true);
            echo "?');\"/>
            </form>
        ";
        }
        // line 79
        echo "
        ";
        // line 80
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/submission.html.twig", 80)->display(twig_array_merge($context, ["table" => "submission", "id" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 80, $this->source); })()), "submitid", [], "any", false, false, false, 80)]));
        // line 81
        echo "    </div>

    ";
        // line 83
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 83, $this->source); })()), "valid", [], "any", false, false, false, 83)) {
            // line 84
            echo "        <div class=\"alert alert-danger\">This submission is not used during scoreboard calculations.</div>
    ";
        }
        // line 86
        echo "
    ";
        // line 87
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 87, $this->source); })()), "contestProblem", [], "any", false, false, false, 87)) {
            // line 88
            echo "        <div class=\"alert alert-danger\">
            This submission is for a problem that is not part (anymore) of the contest of the submission.
        </div>
    ";
        }
        // line 92
        echo "
    ";
        // line 94
        echo "    <div class=\"submission-summary mb-2\">
        <span>
            <i class=\"fas fa-users\" title=\"Team:\"></i>
            <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 97, $this->source); })()), "team", [], "any", false, false, false, 97), "teamid", [], "any", false, false, false, 97), "cid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 97, $this->source); })()), "contest", [], "any", false, false, false, 97), "cid", [], "any", false, false, false, 97)]), "html", null, true);
        echo "\">
                ";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 98, $this->source); })()), "team", [], "any", false, false, false, 98), "effectiveName", [], "any", false, false, false, 98), "html", null, true);
        echo " ";
        echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 98, $this->source); })()), "team", [], "any", false, false, false, 98), "t");
        echo "
            </a>
        </span>

        ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102)) {
            // line 103
            echo "            <span>
                <i class=\"fas fa-user\" title=\"User:\"></i>
                <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user", ["userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "userid", [], "any", false, false, false, 105), "cid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 105, $this->source); })()), "contest", [], "any", false, false, false, 105), "cid", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\">
                    ";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "username", [], "any", false, false, false, 106), "html", null, true);
            echo " ";
            echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "u");
            echo "
                </a>
            </span>
        ";
        }
        // line 110
        echo "
        <span>
            <i class=\"fas fa-trophy\" title=\"Contest:\"></i>
            <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 113, $this->source); })()), "contest", [], "any", false, false, false, 113), "cid", [], "any", false, false, false, 113)]), "html", null, true);
        echo "\">
                ";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 114, $this->source); })()), "contest", [], "any", false, false, false, 114), "shortname", [], "any", false, false, false, 114), "html", null, true);
        echo "
                ";
        // line 115
        echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 115, $this->source); })()), "contest", [], "any", false, false, false, 115), "c");
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-book-open\" title=\"Problem:\"></i>
            <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 121, $this->source); })()), "problem", [], "any", false, false, false, 121), "probid", [], "any", false, false, false, 121)]), "html", null, true);
        echo "\">
                ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 122, $this->source); })()), "contestProblem", [], "any", false, false, false, 122)) {
            // line 123
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 123, $this->source); })()), "contestProblem", [], "any", false, false, false, 123), "shortname", [], "any", false, false, false, 123), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 123, $this->source); })()), "problem", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123), "html", null, true);
            echo "
                ";
        } else {
            // line 125
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 125, $this->source); })()), "problem", [], "any", false, false, false, 125), "name", [], "any", false, false, false, 125), "html", null, true);
            echo "
                ";
        }
        // line 127
        echo "                ";
        echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 127, $this->source); })()), "problem", [], "any", false, false, false, 127), "p");
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-comments\" title=\"Language:\"></i>
            <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language", ["langId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 133, $this->source); })()), "language", [], "any", false, false, false, 133), "langid", [], "any", false, false, false, 133)]), "html", null, true);
        echo "\">
                ";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 134, $this->source); })()), "language", [], "any", false, false, false, 134), "name", [], "any", false, false, false, 134), "html", null, true);
        echo "
                ";
        // line 135
        echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 135, $this->source); })()), "language", [], "any", false, false, false, 135));
        echo "
            </a>
        </span>

        <span>
            <i class=\"fas fa-clock\" title=\"Submittime:\"></i>
            <span title=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 141, $this->source); })()), "submittime", [], "any", false, false, false, 141), "Y-m-d H:i:s (T)"), "html", null, true);
        echo "\">
                ";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 142, $this->source); })()), "submittime", [], "any", false, false, false, 142), null, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 142, $this->source); })()), "contest", [], "any", false, false, false, 142)), "html", null, true);
        echo "
            </span>
        </span>

        <span>
            <i class=\"fas fa-stopwatch\" title=\"Allowed runtime:\"></i>
            ";
        // line 148
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 148, $this->source); })()), "problem", [], "any", false, false, false, 148), "timelimit", [], "any", false, false, false, 148) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 148, $this->source); })()), "language", [], "any", false, false, false, 148), "timeFactor", [], "any", false, false, false, 148)), "html", null, true);
        echo "s
        </span>

        <span>
            <i class=\"fas fa-code\" title=\"Source code:\"></i>
            <a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_source", ["submission" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 153, $this->source); })()), "submitid", [], "any", false, false, false, 153)]), "html", null, true);
        echo "\">
                View ";
        // line 154
        echo $this->extensions['App\Twig\TwigExtension']->printFiles(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 154, $this->source); })()), "files", [], "any", false, false, false, 154));
        echo "
            </a>
        </span>

        ";
        // line 158
        if ( !twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 158, $this->source); })()))) {
            // line 159
            echo "            ";
            $context["externalSubmissionUrl"] = $this->extensions['App\Twig\TwigExtension']->externalCcsUrl((isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 159, $this->source); })()));
            // line 160
            echo "            ";
            if ( !twig_test_empty((isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 160, $this->source); })()))) {
                // line 161
                echo "                <span>
                    <i class=\"fas fa-link\" title=\"External link:\"></i>
                    <a href=\"";
                // line 163
                echo twig_escape_filter($this->env, (isset($context["externalSubmissionUrl"]) || array_key_exists("externalSubmissionUrl", $context) ? $context["externalSubmissionUrl"] : (function () { throw new RuntimeError('Variable "externalSubmissionUrl" does not exist.', 163, $this->source); })()), "html", null, true);
                echo "\" target=\"_blank\">
                        View in external CCS
                    </a>
                </span>
            ";
            }
            // line 168
            echo "        ";
        }
        // line 169
        echo "    </div>

    ";
        // line 171
        if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 171, $this->source); })()), "externalid", [], "any", false, false, false, 171)) {
            // line 172
            echo "        <div class=\"mb-2\">
            External ID:
            ";
            // line 174
            if (twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 174, $this->source); })()))) {
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 175, $this->source); })()), "externalid", [], "any", false, false, false, 175), "html", null, true);
            } else {
                // line 177
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl((isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 177, $this->source); })())), "html", null, true);
                echo "\" target=\"_blank\">";
                // line 178
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 178, $this->source); })()), "externalid", [], "any", false, false, false, 178), "html", null, true);
                // line 179
                echo "</a>";
            }
            // line 181
            if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 181, $this->source); })()))) {
                // line 182
                echo ", ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 182, $this->source); })()), "result", [], "any", false, false, false, 182));
                echo "
            ";
            }
            // line 184
            echo "        </div>
    ";
        }
        // line 186
        echo "
    ";
        // line 187
        if ((((( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 187, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 187, $this->source); })()), "result", [], "any", false, false, false, 187))) &&  !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 187, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 187, $this->source); })()), "result", [], "any", false, false, false, 187))) && (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 187, $this->source); })()), "result", [], "any", false, false, false, 187) != twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 187, $this->source); })()), "result", [], "any", false, false, false, 187)))) {
            // line 188
            echo "        <div class=\"alert alert-danger\">
            <strong>Results differ!</strong>
            <hr>
            <p>
                This submission was judged as
                ";
            // line 193
            if (twig_test_empty((isset($context["external_ccs_submission_url"]) || array_key_exists("external_ccs_submission_url", $context) ? $context["external_ccs_submission_url"] : (function () { throw new RuntimeError('Variable "external_ccs_submission_url" does not exist.', 193, $this->source); })()))) {
                // line 194
                echo "                    ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 194, $this->source); })()), "result", [], "any", false, false, false, 194));
                echo " by the external CCS
                ";
            } else {
                // line 196
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->externalCcsUrl((isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 196, $this->source); })())), "html", null, true);
                echo "\" target=\"_blank\">
                        ";
                // line 197
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 197, $this->source); })()), "result", [], "any", false, false, false, 197));
                echo " by the external CCS
                    </a>
                ";
            }
            // line 200
            echo ", but as ";
            echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 200, $this->source); })()), "result", [], "any", false, false, false, 200));
            echo "
                by DOMjudge.
            </p>

            ";
            // line 204
            $this->loadTemplate("jury/partials/verify_form.html.twig", "jury/submission.html.twig", 204)->display(twig_array_merge($context, ["label" => "Shadow difference verified", "judging" =>             // line 206
(isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 206, $this->source); })()), "form_action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_difference_verify", ["extjudgementid" => twig_get_attribute($this->env, $this->source,             // line 207
(isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 207, $this->source); })()), "extjudgementid", [], "any", false, false, false, 207)]), "show_form" => true, "show_icat" => false]));
            // line 210
            echo "        </div>
    ";
        }
        // line 212
        echo "
    ";
        // line 213
        if ((( !(isset($context["sameTestcaseIds"]) || array_key_exists("sameTestcaseIds", $context) ? $context["sameTestcaseIds"] : (function () { throw new RuntimeError('Variable "sameTestcaseIds" does not exist.', 213, $this->source); })()) &&  !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 213, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 213, $this->source); })()), "result", [], "any", false, false, false, 213)))) {
            // line 214
            echo "        <div class=\"alert alert-danger\">The problem's testcases have changed since this judging has been performed. We recommend rejudging the whole problem.</div>
    ";
        }
        // line 216
        echo "
    ";
        // line 217
        if (((twig_length_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 217, $this->source); })())) > 1) || ((twig_length_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 217, $this->source); })())) == 1) && (null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 217, $this->source); })()))))) {
            // line 218
            echo "        <h2>Judgings</h2>
        <table class=\"judging-table table table-striped table-hover table-sm\" style=\"width: auto;\">
            <thead>
            <tr>
                <td></td>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">start</th>
                <th scope=\"col\">max runtime</th>
                <th scope=\"col\">judgehost</th>
                <th scope=\"col\">result</th>
                <th scope=\"col\">rejudging</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 232, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 233
                echo "                ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 233, $this->source); })()), "submitid", [], "any", false, false, false, 233), "jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 233)]);
                // line 234
                echo "                <tr ";
                if ( !twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 234)) {
                    echo "class=\"disabled\"";
                }
                echo ">
                    <td>
                        <a href=\"";
                // line 236
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 236, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 237
                if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 237, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 237, $this->source); })()), "judgingid", [], "any", false, false, false, 237) == twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 237)))) {
                    // line 238
                    echo "                                <i class=\"fas fa-long-arrow-alt-right\"></i>
                            ";
                } else {
                    // line 240
                    echo "                                &nbsp;
                            ";
                }
                // line 242
                echo "                        </a>
                    </td>
                    <td><a href=\"";
                // line 244
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 244, $this->source); })()), "html", null, true);
                echo "\">j";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 244), "html", null, true);
                echo "</a></td>
                    <td><a href=\"";
                // line 245
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 245, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 245), null, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 245, $this->source); })()), "contest", [], "any", false, false, false, 245)), "html", null, true);
                echo "</a></td>
                    <td>
                        <a href=\"";
                // line 247
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 247, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 248
                if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["maxRunTimes"]) || array_key_exists("maxRunTimes", $context) ? $context["maxRunTimes"] : (function () { throw new RuntimeError('Variable "maxRunTimes" does not exist.', 248, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 248), [], "array", false, false, false, 248))) {
                    // line 249
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maxRunTimes"]) || array_key_exists("maxRunTimes", $context) ? $context["maxRunTimes"] : (function () { throw new RuntimeError('Variable "maxRunTimes" does not exist.', 249, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["judging"], "judgingId", [], "any", false, false, false, 249), [], "array", false, false, false, 249), "html", null, true);
                    echo "s
                            ";
                }
                // line 251
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 254
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 254, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 255
                echo $this->extensions['App\Twig\TwigExtension']->printHosts(twig_get_attribute($this->env, $this->source, $context["judging"], "judgehosts", [], "any", false, false, false, 255));
                echo "
                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 259
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 259, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 260
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 260), twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 260), true);
                echo "
                            ";
                // line 261
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "stillBusy", [], "any", false, false, false, 261)) {
                    // line 262
                    echo "                                (&hellip;)
                            ";
                }
                // line 264
                echo "                        </a>
                    </td>
                    <td>
                        <a href=\"";
                // line 267
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 267, $this->source); })()), "html", null, true);
                echo "\">
                            ";
                // line 268
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 268))) {
                    // line 269
                    echo "                                r";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 269), "rejudgingid", [], "any", false, false, false, 269), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["judging"], "rejudging", [], "any", false, false, false, 269), "reason", [], "any", false, false, false, 269), "html", null, true);
                    echo ")
                            ";
                }
                // line 271
                echo "                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            echo "            </tbody>
        </table>
    ";
        }
        // line 278
        echo "
    ";
        // line 279
        if ( !twig_test_empty((isset($context["unjudgableReasons"]) || array_key_exists("unjudgableReasons", $context) ? $context["unjudgableReasons"] : (function () { throw new RuntimeError('Variable "unjudgableReasons" does not exist.', 279, $this->source); })()))) {
            // line 280
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["unjudgableReasons"]) || array_key_exists("unjudgableReasons", $context) ? $context["unjudgableReasons"] : (function () { throw new RuntimeError('Variable "unjudgableReasons" does not exist.', 280, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                // line 281
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $context["reason"], "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 283
            echo "    ";
        }
        // line 284
        echo "
    ";
        // line 285
        if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 285, $this->source); })())) ||  !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 285, $this->source); })())))) {
            // line 286
            echo "
        ";
            // line 287
            $this->loadTemplate("jury/partials/submission_graph.html.twig", "jury/submission.html.twig", 287)->display($context);
            // line 288
            echo "
        ";
            // line 289
            if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 289, $this->source); })()))) {
                // line 290
                echo "
            ";
                // line 292
                echo "            <div class=\"mb-2\">
                <h2 style=\"display: inline;\">
                    Judging j";
                // line 294
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 294, $this->source); })()), "judgingid", [], "any", false, false, false, 294), "html", null, true);
                echo "
                    ";
                // line 295
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 295, $this->source); })()), "rejudging", [], "any", false, false, false, 295)) {
                    // line 296
                    echo "                        (rejudging
                        <a href=\"";
                    // line 297
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudging", ["rejudgingId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 297, $this->source); })()), "rejudging", [], "any", false, false, false, 297), "rejudgingid", [], "any", false, false, false, 297)]), "html", null, true);
                    echo "\">
                            r";
                    // line 298
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 298, $this->source); })()), "rejudging", [], "any", false, false, false, 298), "rejudgingid", [], "any", false, false, false, 298), "html", null, true);
                    echo "</a>, reason: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 298, $this->source); })()), "rejudging", [], "any", false, false, false, 298), "reason", [], "any", false, false, false, 298), "html", null, true);
                    echo ")
                    ";
                } elseif ( !twig_get_attribute($this->env, $this->source,                 // line 299
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 299, $this->source); })()), "valid", [], "any", false, false, false, 299)) {
                    // line 300
                    echo "                        (Invalid)
                    ";
                }
                // line 302
                echo "                </h2>
                &nbsp;
                ";
                // line 304
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 304, $this->source); })()), "debugPackages", [], "any", false, false, false, 304)) > 0)) {
                    // line 305
                    echo "                   ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 305, $this->source); })()), "debugPackages", [], "any", false, false, false, 305));
                    foreach ($context['_seq'] as $context["_key"] => $context["debug_package"]) {
                        // line 306
                        echo "                       <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_full_debug", ["debug_package_id" => twig_get_attribute($this->env, $this->source, $context["debug_package"], "debugPackageId", [], "any", false, false, false, 306)]), "html", null, true);
                        echo "\">
                           <button class=\"btn btn-sm btn-outline-secondary\" >
                               <i class=\"fas fa-download\"></i>
                               Debug Package (";
                        // line 309
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["debug_package"], "judgehost", [], "any", false, false, false, 309), "hostname", [], "any", false, false, false, 309), "html", null, true);
                        echo ")
                           </button>
                       </a>
                   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['debug_package'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 313
                    echo "                ";
                } else {
                    // line 314
                    echo "                    ";
                    if ( !(isset($context["requestedOutputCount"]) || array_key_exists("requestedOutputCount", $context) ? $context["requestedOutputCount"] : (function () { throw new RuntimeError('Variable "requestedOutputCount" does not exist.', 314, $this->source); })())) {
                        // line 315
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request_full_debug", ["jid" => twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 315, $this->source); })()), "judgingid", [], "any", false, false, false, 315)]), "html", null, true);
                        echo "\">
                            <button class=\"btn btn-sm btn-outline-secondary\" >
                                <i class=\"fas fa-upload\"></i>
                                Retrieve Full Debug Package
                            </button>
                        </a>
                    ";
                    }
                    // line 322
                    echo "                ";
                }
                // line 323
                echo "                &nbsp;
                ";
                // line 324
                if ( !twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 324, $this->source); })()), "verified", [], "any", false, false, false, 324)) {
                    // line 325
                    echo "                    <form action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 325, $this->source); })()), "submitid", [], "any", false, false, false, 325), "jid" => twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 325, $this->source); })()), "judgingid", [], "any", false, false, false, 325)]), "html", null, true);
                    echo "\"
                          method=\"post\" style=\"display: inline;\">
                        ";
                    // line 327
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 327, $this->source); })()), "juryMember", [], "any", false, false, false, 327))) {
                        // line 328
                        echo "                            (claimed by ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 328, $this->source); })()), "juryMember", [], "any", false, false, false, 328), "html", null, true);
                        echo ")
                            <input type=\"hidden\" name=\"forceclaim\" value=\"1\"/>
                        ";
                    }
                    // line 331
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "user", [], "any", false, false, false, 331), "username", [], "any", false, false, false, 331) == twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 331, $this->source); })()), "juryMember", [], "any", false, false, false, 331))) {
                        // line 332
                        echo "                            <input type=\"submit\" value=\"unclaim\" name=\"unclaim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        ";
                    } else {
                        // line 334
                        echo "                            <input type=\"submit\" value=\"claim\" name=\"claim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        ";
                    }
                    // line 336
                    echo "                    </form>
                ";
                }
                // line 338
                echo "                &nbsp;
                ";
                // line 339
                if (((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 339, $this->source); })())) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 339, $this->source); })()), "result", [], "any", false, false, false, 339)))) {
                    // line 340
                    if (( !(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 340, $this->source); })()) ||  !twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 340, $this->source); })()), "started", [], "any", false, false, false, 340))) {
                        // line 341
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_create_tasks", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 341, $this->source); })()), "submitid", [], "any", false, false, false, 341)]), "html", null, true);
                        echo "\">
                            <button class=\"btn btn-sm btn-outline-secondary\" >
                                <i class=\"fas fa-gavel\"></i>
                                Judge submission
                            </button>
                        </a>";
                    }
                }
                // line 349
                echo "            </div>
        ";
            }
            // line 351
            echo "
        <div class=\"mb-2\">
            <div>
                Result:
                ";
            // line 355
            if (((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 355, $this->source); })())) || twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 355, $this->source); })()), "result", [], "any", false, false, false, 355)))) {
                // line 356
                if (((isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 356, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 356, $this->source); })()), "started", [], "any", false, false, false, 356))) {
                    // line 357
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("");
                } else {
                    // line 359
                    echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult("queued");
                }
            } else {
                // line 362
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 362, $this->source); })()), "result", [], "any", false, false, false, 362));
            }
            // line 364
            if (twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 364, $this->source); })()), "stillBusy", [], "any", false, false, false, 364)) {
                // line 365
                echo "(&hellip;)";
            }
            // line 367
            if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 367, $this->source); })()))) {
                // line 368
                $context["lastSubmissionLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 368, $this->source); })()), "submitid", [], "any", false, false, false, 368)]);
                // line 369
                echo "<span class=\"lastresult\">
                    (<a href=\"";
                // line 370
                echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 370, $this->source); })()), "html", null, true);
                echo "\">s";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 370, $this->source); })()), "submitid", [], "any", false, false, false, 370), "html", null, true);
                echo "</a>: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 370, $this->source); })()), "result", [], "any", false, false, false, 370), "html", null, true);
                echo ")";
                // line 371
                echo "</span>";
            }
            // line 373
            if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 373, $this->source); })()))) {
                // line 374
                echo "                    (external: ";
                echo $this->extensions['App\Twig\TwigExtension']->printValidJuryResult(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 374, $this->source); })()), "result", [], "any", false, false, false, 374));
                echo ")";
            }
            // line 376
            if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 376, $this->source); })())) &&  !twig_test_empty((isset($context["judgehosts"]) || array_key_exists("judgehosts", $context) ? $context["judgehosts"] : (function () { throw new RuntimeError('Variable "judgehosts" does not exist.', 376, $this->source); })())))) {
                // line 377
                echo ", Judgehost(s):
                    ";
                // line 378
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["judgehosts"]) || array_key_exists("judgehosts", $context) ? $context["judgehosts"] : (function () { throw new RuntimeError('Variable "judgehosts" does not exist.', 378, $this->source); })()));
                foreach ($context['_seq'] as $context["judgehostid"] => $context["hostname"]) {
                    // line 379
                    echo "                        ";
                    $context["judgehostLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["judgehostid" => $context["judgehostid"]]);
                    // line 380
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["judgehostLink"]) || array_key_exists("judgehostLink", $context) ? $context["judgehostLink"] : (function () { throw new RuntimeError('Variable "judgehostLink" does not exist.', 380, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo $this->extensions['App\Twig\TwigExtension']->printHost($context["hostname"]);
                    echo "</a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['judgehostid'], $context['hostname'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 381
                echo " -
                    <span class=\"judgetime\">Judging started: ";
                // line 382
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 382, $this->source); })()), "starttime", [], "any", false, false, false, 382), "H:i:s"), "html", null, true);
                // line 383
                if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 383, $this->source); })()), "endtime", [], "any", false, false, false, 383)) {
                    // line 384
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 384, $this->source); })()), "starttime", [], "any", false, false, false, 384), twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 384, $this->source); })()), "endtime", [], "any", false, false, false, 384)), "html", null, true);
                    echo "s";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 385
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 385, $this->source); })()), "valid", [], "any", false, false, false, 385) || twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 385, $this->source); })()), "rejudging", [], "any", false, false, false, 385))) {
                    // line 386
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 386, $this->source); })()), "starttime", [], "any", false, false, false, 386)), "html", null, true);
                    echo "]";
                } else {
                    // line 388
                    echo "&nbsp;[aborted]";
                }
                // line 390
                echo "</span>
                ";
            }
            // line 392
            if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 392, $this->source); })()))) {
                // line 393
                echo "                    <span class=\"judgetime\">(external judging started: ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 393, $this->source); })()), "starttime", [], "any", false, false, false, 393), "H:i:s"), "html", null, true);
                // line 394
                if (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 394, $this->source); })()), "endtime", [], "any", false, false, false, 394)) {
                    // line 395
                    echo ", finished in ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 395, $this->source); })()), "starttime", [], "any", false, false, false, 395), twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 395, $this->source); })()), "endtime", [], "any", false, false, false, 395)), "html", null, true);
                    echo "s";
                } else {
                    // line 397
                    echo "&nbsp;[still judging - busy ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 397, $this->source); })()), "starttime", [], "any", false, false, false, 397)), "html", null, true);
                    echo "]";
                }
                // line 399
                echo ")</span>";
            }
            // line 401
            if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 401, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 401, $this->source); })()), "result", [], "any", false, false, false, 401) != "compiler-error"))) {
                // line 402
                echo ", max/sum runtime:
                    ";
                // line 403
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 403, $this->source); })()), "maxRuntime", [], "any", false, false, false, 403), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 403, $this->source); })()), "sumRuntime", [], "any", false, false, false, 403), 2, ".", ""), "html", null, true);
                echo "s";
                // line 404
                if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 404, $this->source); })()))) {
                    // line 405
                    echo "<span class=\"lastruntime\">
                        (<a href=\"";
                    // line 406
                    echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 406, $this->source); })()), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 406, $this->source); })()), "submitid", [], "any", false, false, false, 406), "html", null, true);
                    echo "</a>:
                            ";
                    // line 407
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 407, $this->source); })()), "maxRuntime", [], "any", false, false, false, 407), 2, ".", ""), "html", null, true);
                    // line 408
                    echo "/";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 408, $this->source); })()), "sumRuntime", [], "any", false, false, false, 408), 2, ".", ""), "html", null, true);
                    echo "s)
                    </span>";
                }
            }
            // line 412
            if ((( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 412, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 412, $this->source); })()), "result", [], "any", false, false, false, 412) != "compiler-error")) && (twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 412, $this->source); })()), "result", [], "any", false, false, false, 412) != null))) {
                // line 413
                echo ", external max/sum runtime:
                    ";
                // line 414
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 414, $this->source); })()), "maxRuntime", [], "any", false, false, false, 414), 2, ".", ""), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 414, $this->source); })()), "sumRuntime", [], "any", false, false, false, 414), 2, ".", ""), "html", null, true);
                echo "s
                ";
            }
            // line 416
            echo "            </div>

            ";
            // line 419
            echo "            ";
            if (( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 419, $this->source); })())) || ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 419, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 419, $this->source); })()), "result", [], "any", false, false, false, 419) != "compiler-error")))) {
                // line 420
                echo "                <table>
                    <tr>
                        <td>testcase runs:</td>
                        <td>
                            ";
                // line 424
                if ((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 424, $this->source); })()))) {
                    // line 425
                    echo "                                ";
                    $context["judgingDone"] = false;
                    // line 426
                    echo "                            ";
                } else {
                    // line 427
                    echo "                                ";
                    $context["judgingDone"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 427, $this->source); })()), "endtime", [], "any", false, false, false, 427));
                    // line 428
                    echo "                            ";
                }
                // line 429
                echo "                            ";
                echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 429, $this->source); })()), (isset($context["judgingDone"]) || array_key_exists("judgingDone", $context) ? $context["judgingDone"] : (function () { throw new RuntimeError('Variable "judgingDone" does not exist.', 429, $this->source); })()));
                echo "
                            ";
                // line 430
                if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 430, $this->source); })())) && (isset($context["runsOutstanding"]) || array_key_exists("runsOutstanding", $context) ? $context["runsOutstanding"] : (function () { throw new RuntimeError('Variable "runsOutstanding" does not exist.', 430, $this->source); })()))) {
                    // line 431
                    echo "                                ";
                    if (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 431, $this->source); })()), "judgeCompletely", [], "any", false, false, false, 431)) {
                        // line 432
                        echo "                                    <i class=\"fas fa-balance-scale\" title=\"remaining test cases requested to be judged\"></i>
                                ";
                    } elseif ( !(null === twig_get_attribute($this->env, $this->source,                     // line 433
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 433, $this->source); })()), "result", [], "any", false, false, false, 433))) {
                        // line 434
                        echo "                                    <form action=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_request_remaining", ["judgingId" => twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 434, $this->source); })()), "judgingid", [], "any", false, false, false, 434)]), "html", null, true);
                        echo "\" method=\"post\"
                                          style=\"display: inline; \">
                                        <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\" value=\"judge remaining\" />
                                    </form>
                                ";
                    }
                    // line 439
                    echo "                            ";
                }
                // line 440
                echo "                        </td>
                    </tr>
                    ";
                // line 442
                if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 442, $this->source); })()))) {
                    // line 443
                    echo "                        <tr class=\"lasttcruns\">
                            <td>
                                <a href=\"";
                    // line 445
                    echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 445, $this->source); })()), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 445, $this->source); })()), "submitid", [], "any", false, false, false, 445), "html", null, true);
                    echo "</a> runs:
                            </td>
                            <td>
                                ";
                    // line 448
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults((isset($context["lastRuns"]) || array_key_exists("lastRuns", $context) ? $context["lastRuns"] : (function () { throw new RuntimeError('Variable "lastRuns" does not exist.', 448, $this->source); })()),  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 448, $this->source); })()), "endtime", [], "any", false, false, false, 448)));
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 452
                echo "                    ";
                if ( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 452, $this->source); })()))) {
                    // line 453
                    echo "                        <tr>
                            <td>external runs:</td>
                            <td>
                                ";
                    // line 456
                    echo $this->extensions['App\Twig\TwigExtension']->displayTestcaseResults((isset($context["externalRuns"]) || array_key_exists("externalRuns", $context) ? $context["externalRuns"] : (function () { throw new RuntimeError('Variable "externalRuns" does not exist.', 456, $this->source); })()),  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 456, $this->source); })()), "endtime", [], "any", false, false, false, 456)), true);
                    echo "
                            </td>
                        </tr>
                    ";
                }
                // line 460
                echo "                </table>

                ";
                // line 463
                echo "                ";
                if ( !(null === (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 463, $this->source); })()))) {
                    // line 464
                    echo "                    <span class=\"testcases_prev\">
                    <a href=\"javascript:togglelastruns();\">show/hide</a>
                    results of previous <a href=\"";
                    // line 466
                    echo twig_escape_filter($this->env, (isset($context["lastSubmissionLink"]) || array_key_exists("lastSubmissionLink", $context) ? $context["lastSubmissionLink"] : (function () { throw new RuntimeError('Variable "lastSubmissionLink" does not exist.', 466, $this->source); })()), "html", null, true);
                    echo "\">submission s";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastSubmission"]) || array_key_exists("lastSubmission", $context) ? $context["lastSubmission"] : (function () { throw new RuntimeError('Variable "lastSubmission" does not exist.', 466, $this->source); })()), "submitid", [], "any", false, false, false, 466), "html", null, true);
                    echo "</a>
                        ";
                    // line 467
                    if (twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 467, $this->source); })()), "verifyComment", [], "any", false, false, false, 467)) {
                        // line 468
                        echo "                            <span class=\"prevsubmit\">(verify comment: '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastJudging"]) || array_key_exists("lastJudging", $context) ? $context["lastJudging"] : (function () { throw new RuntimeError('Variable "lastJudging" does not exist.', 468, $this->source); })()), "verifyComment", [], "any", false, false, false, 468), "html", null, true);
                        echo "')</span>
                        ";
                    }
                    // line 470
                    echo "                </span>
                ";
                }
                // line 472
                echo "            ";
            }
            // line 473
            echo "        </div>

        <script>
            \$(function () {
                togglelastruns();
            });
        </script>

        ";
            // line 482
            echo "        ";
            if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 482, $this->source); })())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 482, $this->source); })()), "result", [], "any", false, false, false, 482)))) {
                // line 483
                echo "            ";
                $this->loadTemplate("jury/partials/verify_form.html.twig", "jury/submission.html.twig", 483)->display(twig_array_merge($context, ["label" => "Verified", "judging" =>                 // line 485
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 485, $this->source); })()), "form_action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verify", ["judgingId" => twig_get_attribute($this->env, $this->source,                 // line 486
(isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 486, $this->source); })()), "judgingid", [], "any", false, false, false, 486)]), "show_form" =>  !((                // line 487
(isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 487, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 487, $this->source); })()), "verified", [], "any", false, false, false, 487)) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 487, $this->source); })()), "valid", [], "any", false, false, false, 487)), "show_icat" => true]));
                // line 489
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 489, $this->source); })()), "contestProblem", [], "any", false, false, false, 489) && (isset($context["icat_url"]) || array_key_exists("icat_url", $context) ? $context["icat_url"] : (function () { throw new RuntimeError('Variable "icat_url" does not exist.', 489, $this->source); })()))) {
                    // line 490
                    echo "                <script>
                    \$(function () {
                        \$('#post-to-icat').on('click', function () {
                            postVerifyCommentToICAT(
                                '";
                    // line 494
                    echo twig_escape_filter($this->env, (isset($context["icat_url"]) || array_key_exists("icat_url", $context) ? $context["icat_url"] : (function () { throw new RuntimeError('Variable "icat_url" does not exist.', 494, $this->source); })()), "html", null, true);
                    echo "/insert_entry.php',
                                '";
                    // line 495
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 495, $this->source); })()), "user", [], "any", false, false, false, 495), "username", [], "any", false, false, false, 495), "html", null, true);
                    echo "',
                                '";
                    // line 496
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 496, $this->source); })()), "team", [], "any", false, false, false, 496), "teamid", [], "any", false, false, false, 496), "html", null, true);
                    echo "',
                                '";
                    // line 497
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 497, $this->source); })()), "contestProblem", [], "any", false, false, false, 497), "shortname", [], "any", false, false, false, 497), "html", null, true);
                    echo "',
                                '";
                    // line 498
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 498, $this->source); })()), "externalid", [], "any", false, false, false, 498), "html", null, true);
                    echo "'
                            );
                            alert('Comment posted to iCAT.');
                            return false;
                        });
                    });
                </script>
            ";
                }
                // line 506
                echo "        ";
            } elseif ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 506, $this->source); })()))) {
                // line 507
                echo "            <div class=\"alert alert-warning\">Judging is not ready yet!</div>
        ";
            }
            // line 509
            echo "
        ";
            // line 511
            echo "        ";
            $context["color"] = "#6666FF";
            // line 512
            echo "        ";
            $context["message"] = "not finished yet";
            // line 513
            echo "        ";
            $context["output"] = null;
            // line 514
            echo "        ";
            if ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 514, $this->source); })()))) {
                // line 515
                echo "            ";
                $context["output"] = twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 515, $this->source); })()), "outputCompile", [0 => true], "method", false, false, false, 515);
                // line 516
                echo "        ";
            }
            // line 517
            echo "        ";
            if ( !(null === (isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 517, $this->source); })()))) {
                // line 518
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 518, $this->source); })()), "result", [], "any", false, false, false, 518) == "compiler-error")) {
                    // line 519
                    echo "                ";
                    $context["message"] = "unsuccessful";
                    // line 520
                    echo "            ";
                } else {
                    // line 521
                    echo "                ";
                    $context["message"] = "successful";
                    // line 522
                    echo "                ";
                    if ( !twig_test_empty((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 522, $this->source); })()))) {
                        // line 523
                        echo "                    ";
                        $context["outputLines"] = $this->extensions['App\Twig\TwigExtension']->lineCount((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 523, $this->source); })()));
                        // line 524
                        echo "                    ";
                        if (((isset($context["outputLines"]) || array_key_exists("outputLines", $context) ? $context["outputLines"] : (function () { throw new RuntimeError('Variable "outputLines" does not exist.', 524, $this->source); })()) == 1)) {
                            // line 525
                            echo "                        ";
                            $context["message"] = ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 525, $this->source); })()) . " (with 1 line of output)");
                            // line 526
                            echo "                    ";
                        } else {
                            // line 527
                            echo "                        ";
                            $context["message"] = ((((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 527, $this->source); })()) . " (with ") . (isset($context["outputLines"]) || array_key_exists("outputLines", $context) ? $context["outputLines"] : (function () { throw new RuntimeError('Variable "outputLines" does not exist.', 527, $this->source); })())) . " lines of output)");
                            // line 528
                            echo "                    ";
                        }
                        // line 529
                        echo "                ";
                    }
                    // line 530
                    echo "            ";
                }
                // line 531
                echo "        ";
            }
            // line 532
            echo "        <h3>
            <a class=\"collapse-link\" href=\"javascript:collapse('#detailcompile')\">
                Compilation <span class=\"compile-";
            // line 534
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 534, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 534, $this->source); })()), "html", null, true);
            echo "</span>
            </a>
        </h3>
        ";
            // line 537
            if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 537, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 537, $this->source); })()), "compileMetadata", [], "any", false, false, false, 537)))) {
                // line 538
                echo "            ";
                echo $this->extensions['App\Twig\TwigExtension']->printMetadata(twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 538, $this->source); })()), "compileMetadata", [], "any", false, false, false, 538));
                echo "
            <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                    data-target=\"#collapseExample-compilemeta\"
                    aria-expanded=\"false\">
                show complete compilation metadata
            </button>
            <div class=\"collapse\" id=\"collapseExample-compilemeta\">
                <div class=\"card card-body output_text\">";
                // line 545
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 545, $this->source); })()), "compileMetadata", [], "any", false, false, false, 545), "html", null, true);
                echo "</div>
            </div>
            <hr>
            <br>
        ";
            }
            // line 550
            echo "        <div class=\"card mb-3 ";
            if (((null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 550, $this->source); })())) || (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 550, $this->source); })()), "result", [], "any", false, false, false, 550) != "compiler-error"))) {
                echo "d-none";
            }
            echo "\"
            id=\"detailcompile\">
            <div class=\"card-header\">Compilation output</div>
        ";
            // line 553
            if (twig_test_empty((isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 553, $this->source); })()))) {
                // line 554
                echo "            <div class=\"card-body nodata\">There were no compiler errors or warnings.</div>
        ";
            } else {
                // line 556
                echo "            <div class=\"card-body\"><pre class=\"output_text\">";
                echo twig_escape_filter($this->env, (isset($context["output"]) || array_key_exists("output", $context) ? $context["output"] : (function () { throw new RuntimeError('Variable "output" does not exist.', 556, $this->source); })()), "html", null, true);
                echo "</pre></div>
        ";
            }
            // line 558
            echo "        </div>

        ";
            // line 560
            if (( !(null === (isset($context["externalJudgement"]) || array_key_exists("externalJudgement", $context) ? $context["externalJudgement"] : (function () { throw new RuntimeError('Variable "externalJudgement" does not exist.', 560, $this->source); })())) || ( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 560, $this->source); })())) && (twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 560, $this->source); })()), "result", [], "any", false, false, false, 560) != "compiler-error")))) {
                // line 561
                echo "            ";
                // line 562
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["runs"]) || array_key_exists("runs", $context) ? $context["runs"] : (function () { throw new RuntimeError('Variable "runs" does not exist.', 562, $this->source); })()));
                foreach ($context['_seq'] as $context["runIdx"] => $context["run"]) {
                    // line 563
                    echo "                ";
                    $context["externalRun"] = null;
                    // line 564
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["externalRuns"] ?? null), $context["runIdx"], [], "array", true, true, false, 564)) {
                        // line 565
                        echo "                    ";
                        $context["externalRun"] = twig_get_attribute($this->env, $this->source, (isset($context["externalRuns"]) || array_key_exists("externalRuns", $context) ? $context["externalRuns"] : (function () { throw new RuntimeError('Variable "externalRuns" does not exist.', 565, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 565);
                        // line 566
                        echo "                ";
                    }
                    // line 567
                    echo "                <div id=\"run-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 567), "html", null, true);
                    echo "\"
                     style=\"margin-bottom: 20px;\"
                     class=\"card run ";
                    // line 569
                    if ((twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 569) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 569), "runresult", [], "any", false, false, false, 569) == "correct"))) {
                        echo "run_correct";
                    }
                    echo "\">
                    <div class=\"card-header\">
                        Run #";
                    // line 571
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 571), "html", null, true);
                    echo "
                        ";
                    // line 572
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "origInputFilename", [], "any", false, false, false, 572))) {
                        // line 573
                        echo "                            | <span class=\"filename\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "origInputFilename", [], "any", false, false, false, 573), "html", null, true);
                        echo ".in</span>
                        ";
                    } else {
                        // line 575
                        echo "                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 575))) {
                            // line 576
                            echo "                                | ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 576), "html", null, true);
                            echo "
                            ";
                        }
                        // line 578
                        echo "                        ";
                    }
                    // line 579
                    echo "                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 579))) {
                        // line 580
                        echo "                            |
                            ";
                        // line 581
                        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 581), "runresult", [], "any", false, false, false, 581))) {
                            // line 582
                            echo "                                <span class=\"sol ";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 582), "runresult", [], "any", false, false, false, 582) == "correct")) {
                                echo "sol_correct";
                            } else {
                                echo "sol_incorrect";
                            }
                            echo "\">
                                    ";
                            // line 583
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 583), "runresult", [], "any", false, false, false, 583), "html", null, true);
                            echo "
                                </span>
                                ";
                            // line 585
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 585), "runresult", [], "any", false, false, false, 585) == "timelimit")) {
                                // line 586
                                echo "                                    ";
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 586, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 586), "terminated", [], "any", false, false, false, 586)) {
                                    // line 587
                                    echo "                                        <b>(terminated)</b>
                                    ";
                                } else {
                                    // line 589
                                    echo "                                        <b>(finished late)</b>
                                    ";
                                }
                                // line 591
                                echo "                                ";
                            }
                            // line 592
                            echo "                            ";
                        } else {
                            // line 593
                            echo "                                <span class=\"sol sol_queued\">
                                   ";
                            // line 594
                            if ((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 594, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 594), "hostname", [], "any", false, false, false, 594))) {
                                // line 595
                                echo "                                       queued
                                   ";
                            } else {
                                // line 597
                                echo "                                       judging
                                   ";
                            }
                            // line 599
                            echo "                                </span>
                            ";
                        }
                        // line 601
                        echo "                        ";
                    }
                    // line 602
                    echo "                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 602, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 602), "hostname", [], "any", false, false, false, 602))) {
                        // line 603
                        echo "                            ";
                        $context["judgehostLink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost", ["judgehostid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 603, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 603), "judgehostid", [], "any", false, false, false, 603)]);
                        // line 604
                        echo "                            | <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["judgehostLink"]) || array_key_exists("judgehostLink", $context) ? $context["judgehostLink"] : (function () { throw new RuntimeError('Variable "judgehostLink" does not exist.', 604, $this->source); })()), "html", null, true);
                        echo "\">";
                        echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 604, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 604), "hostname", [], "any", false, false, false, 604));
                        echo "</a>
                        ";
                    }
                    // line 606
                    echo "                        ";
                    if (( !(null === (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 606, $this->source); })())) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 606, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 606)))) {
                        // line 607
                        echo "                            ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 607, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 607))) {
                            // line 608
                            echo "                                (external:
                                <span class=\"sol ";
                            // line 609
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 609, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 609), "result", [], "any", false, false, false, 609) == "correct")) {
                                echo "sol_correct";
                            } else {
                                echo "sol_incorrect";
                            }
                            echo "\">
                                    ";
                            // line 610
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["externalRun"]) || array_key_exists("externalRun", $context) ? $context["externalRun"] : (function () { throw new RuntimeError('Variable "externalRun" does not exist.', 610, $this->source); })()), "firstExternalRun", [], "any", false, false, false, 610), "result", [], "any", false, false, false, 610), "html", null, true);
                            // line 611
                            echo "</span>";
                            // line 612
                            echo ")
                            ";
                        }
                        // line 614
                        echo "                        ";
                    }
                    // line 615
                    echo "                        <span style=\"float: right;\">
                            <a href=\"";
                    // line 616
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 616, $this->source); })()), "problem", [], "any", false, false, false, 616), "probid", [], "any", false, false, false, 616), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 616), "type" => "input"]), "html", null, true);
                    echo "\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Input
                                </button>
                            </a>
                            <a href=\"";
                    // line 622
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 622, $this->source); })()), "problem", [], "any", false, false, false, 622), "probid", [], "any", false, false, false, 622), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 622), "type" => "output"]), "html", null, true);
                    echo "\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Reference Output
                                </button>
                            </a>
                            ";
                    // line 628
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 628))) {
                        // line 629
                        echo "                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_team_output", ["submission" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 629, $this->source); })()), "submitid", [], "any", false, false, false, 629), "run" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 629), "runid", [], "any", false, false, false, 629), "contest" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 629, $this->source); })()), "contest", [], "any", false, false, false, 629), "cid", [], "any", false, false, false, 629)]), "html", null, true);
                        echo "\">
                                    <button class=\"btn btn-sm btn-outline-secondary\" >
                                        <i class=\"fas fa-download\"></i>
                                        ";
                        // line 632
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 632, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 632), "is_output_run_truncated", [], "any", false, false, false, 632)) {
                            // line 633
                            echo "                                            Truncated
                                        ";
                        }
                        // line 635
                        echo "                                        Team Output
                                    </button>
                                </a>
                                ";
                        // line 638
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 638, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 638), "is_output_run_truncated", [], "any", false, false, false, 638)) {
                            // line 639
                            echo "                                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request_output", ["jid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 639), "judgingid", [], "any", false, false, false, 639), "jrid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 639), "runid", [], "any", false, false, false, 639)]), "html", null, true);
                            echo "\">
                                        <button class=\"btn btn-sm btn-outline-secondary\" >
                                            <i class=\"fas fa-upload\"></i>
                                            Retrieve Full Team Output
                                        </button>
                                    </a>
                                ";
                        }
                        // line 646
                        echo "                            ";
                    }
                    // line 647
                    echo "                        </span>
                    </div>
                    <div class=\"card-body\">
                    ";
                    // line 650
                    if (( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 650)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 650, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 650), "cpu_time", [], "any", false, false, false, 650))) {
                        // line 651
                        echo "                    <span style=\"display:inline; margin-left: 5px;\">
\t\t        <i class=\"fas fa-stopwatch\" title=\"runtime\"></i>
                        ";
                        // line 653
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 653, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 653), "cpu_time", [], "any", false, false, false, 653), "html", null, true);
                        echo "s
                        CPU";
                        // line 654
                        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 654, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 654), "metadata", [], "any", false, false, false, 654))) {
                            echo ",
                            ";
                            // line 655
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 655, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 655), "wall_time", [], "any", false, false, false, 655), "html", null, true);
                            echo "s wall,
\t\t            <i class=\"fas fa-memory\" title=\"RAM\"></i>
                            ";
                            // line 657
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 657, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 657), "memory", [], "any", false, false, false, 657), "html", null, true);
                            echo ",
\t\t            <i class=\"far fa-question-circle\" title=\"exit-code\"></i>
                            exit code:
                            ";
                            // line 660
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 660, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 660), "exitcode", [], "any", false, false, false, 660), "html", null, true);
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 660, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 660), "signal", [], "any", false, false, false, 660) > 0)) {
                                echo ",
                                signal: ";
                                // line 661
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 661, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 661), "signal", [], "any", false, false, false, 661), "html", null, true);
                                echo "
                            ";
                            }
                            // line 663
                            echo "                            <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                                    data-target=\"#collapseExample-";
                            // line 664
                            echo twig_escape_filter($this->env, $context["runIdx"], "html", null, true);
                            echo "\"
                                    aria-expanded=\"false\">
                                show complete metadata
                            </button>
                            ";
                            // line 668
                            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 668, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 668), "output_limit", [], "any", false, false, false, 668)) {
                                // line 669
                                echo "                                <div class=\"alert alert-warning\">
                                    The submission output (<code>";
                                // line 670
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 670, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 670), "output_limit", [], "any", false, false, false, 670), "html", null, true);
                                echo "</code>) was
                                    truncated because of the configured output limit.
                                </div>
                            ";
                            }
                            // line 674
                            echo "                            <div class=\"collapse\" id=\"collapseExample-";
                            echo twig_escape_filter($this->env, $context["runIdx"], "html", null, true);
                            echo "\">
                                  <div class=\"card card-body output_text\">";
                            // line 675
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 675, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 675), "metadata", [], "any", false, false, false, 675), "html", null, true);
                            echo "</div>
                            </div>
                        ";
                        }
                        // line 678
                        echo "                    </span>
                    ";
                    }
                    // line 680
                    echo "                    ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "description", [], "any", false, false, false, 680))) {
                        // line 681
                        echo "                        <p><em>
                            ";
                        // line 682
                        echo $this->extensions['App\Twig\TwigExtension']->descriptionExpand(twig_get_attribute($this->env, $this->source, $context["run"], "description", [0 => true], "method", false, false, false, 682));
                        echo "
                        </em></p>
                    ";
                    }
                    // line 685
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 685, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 685), "image_thumb", [], "any", false, false, false, 685)) {
                        // line 686
                        echo "                        <span style=\"float:right; border: 3px solid #438ec3; margin: 5px; padding: 5px;\">
                            ";
                        // line 687
                        $context["imgUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 687, $this->source); })()), "problem", [], "any", false, false, false, 687), "probid", [], "any", false, false, false, 687), "rank" => twig_get_attribute($this->env, $this->source, $context["run"], "rank", [], "any", false, false, false, 687), "type" => "image"]);
                        // line 688
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["imgUrl"]) || array_key_exists("imgUrl", $context) ? $context["imgUrl"] : (function () { throw new RuntimeError('Variable "imgUrl" does not exist.', 688, $this->source); })()), "html", null, true);
                        echo "\">
                                <img src=\"data:image/";
                        // line 689
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "imageType", [], "any", false, false, false, 689), "html", null, true);
                        echo ";base64,";
                        echo twig_escape_filter($this->env, base64_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 689, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 689), "image_thumb", [], "any", false, false, false, 689)), "html", null, true);
                        echo "\"/>
                            </a>
                        </span>
                    ";
                    }
                    // line 693
                    echo "
                    ";
                    // line 694
                    $context["runDone"] = false;
                    // line 695
                    echo "                    ";
                    if ((( !(null === $context["run"]) &&  !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 695))) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 695), "runresult", [], "any", false, false, false, 695)))) {
                        // line 696
                        echo "                        ";
                        $context["runDone"] = true;
                        // line 697
                        echo "                    ";
                    }
                    // line 698
                    echo "                    ";
                    if ( !(isset($context["runDone"]) || array_key_exists("runDone", $context) ? $context["runDone"] : (function () { throw new RuntimeError('Variable "runDone" does not exist.', 698, $this->source); })())) {
                        // line 699
                        echo "                        <p class=\"nodata\">
                            ";
                        // line 700
                        if (( !(null === (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 700, $this->source); })())) && twig_get_attribute($this->env, $this->source, (isset($context["selectedJudging"]) || array_key_exists("selectedJudging", $context) ? $context["selectedJudging"] : (function () { throw new RuntimeError('Variable "selectedJudging" does not exist.', 700, $this->source); })()), "result", [], "any", false, false, false, 700))) {
                            // line 701
                            echo "                                Run not used for final result.
                            ";
                        } else {
                            // line 703
                            echo "                                Run not started/finished yet.
                            ";
                        }
                        // line 705
                        echo "                        </p>
                    ";
                    } else {
                        // line 707
                        echo "                        ";
                        if (( !(null === twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 707)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 707), "runresult", [], "any", false, false, false, 707)))) {
                            // line 708
                            echo "                            ";
                            if ((isset($context["combinedRunCompare"]) || array_key_exists("combinedRunCompare", $context) ? $context["combinedRunCompare"] : (function () { throw new RuntimeError('Variable "combinedRunCompare" does not exist.', 708, $this->source); })())) {
                                // line 709
                                echo "                                <h5>Validator output</h5>
                                ";
                                // line 710
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 710, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 710), "output_diff", [], "any", false, false, false, 710))) {
                                    // line 711
                                    echo "                                    <p class=\"nodata\">There was no validator output.</p>
                                ";
                                } else {
                                    // line 713
                                    echo "                                    <pre class=\"output_text\">
";
                                    // line 714
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 714, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 714), "output_diff", [], "any", false, false, false, 714));
                                    echo "</pre>
                                ";
                                }
                                // line 716
                                echo "                            ";
                            } else {
                                // line 717
                                echo "                                <h5>Diff output</h5>
                                ";
                                // line 718
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 718, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 718), "output_diff", [], "any", false, false, false, 718))) {
                                    // line 719
                                    echo "                                    <p class=\"nodata\">There was no diff output.</p>
                                ";
                                } else {
                                    // line 721
                                    echo "                                    <pre class=\"output_text\">
";
                                    // line 722
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 722, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 722), "output_diff", [], "any", false, false, false, 722));
                                    echo "</pre>
                                ";
                                }
                                // line 724
                                echo "
                                ";
                                // line 725
                                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], "firstJudgingRun", [], "any", false, false, false, 725), "runresult", [], "any", false, false, false, 725) != "correct")) {
                                    // line 726
                                    echo "                                    ";
                                    echo $this->extensions['App\Twig\TwigExtension']->runDiff(twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 726, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 726));
                                    echo "
                                ";
                                }
                                // line 728
                                echo "                            ";
                            }
                            // line 729
                            echo "
                            ";
                            // line 730
                            if ((isset($context["combinedRunCompare"]) || array_key_exists("combinedRunCompare", $context) ? $context["combinedRunCompare"] : (function () { throw new RuntimeError('Variable "combinedRunCompare" does not exist.', 730, $this->source); })())) {
                                // line 731
                                echo "                                <h5>Validator/Submission interaction</h5>
                                ";
                                // line 732
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 732, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 732), "output_run", [], "any", false, false, false, 732))) {
                                    // line 733
                                    echo "                                    <p class=\"nodata\">There was no interaction log.</p>
                                ";
                                } else {
                                    // line 735
                                    echo "                                    ";
                                    echo $this->extensions['App\Twig\TwigExtension']->interactiveLog(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 735, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 735), "output_run", [], "any", false, false, false, 735));
                                    echo "
                                ";
                                }
                                // line 737
                                echo "                            ";
                            } else {
                                // line 738
                                echo "                                <h5>Program output</h5>
                                ";
                                // line 739
                                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 739, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 739), "output_run", [], "any", false, false, false, 739))) {
                                    // line 740
                                    echo "                                    <p class=\"nodata\">There was no program output.</p>
                                ";
                                } else {
                                    // line 742
                                    echo "                                    <pre class=\"output_text\">
";
                                    // line 743
                                    echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 743, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 743), "output_run", [], "any", false, false, false, 743));
                                    echo "</pre>
                                ";
                                }
                                // line 745
                                echo "                            ";
                            }
                            // line 746
                            echo "
                            <h5>Program error output</h5>
                            ";
                            // line 748
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 748, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 748), "output_error", [], "any", false, false, false, 748))) {
                                // line 749
                                echo "                                <p class=\"nodata\">There was no stderr output.</p>
                            ";
                            } else {
                                // line 751
                                echo "                                <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 751, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 751), "output_error", [], "any", false, false, false, 751));
                                echo "</pre>
                            ";
                            }
                            // line 753
                            echo "
                            <h5>Judging system output (info/debug/errors)</h5>
                            ";
                            // line 755
                            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 755, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 755), "output_system", [], "any", false, false, false, 755))) {
                                // line 756
                                echo "                                <p class=\"nodata\">There was no judging system output.</p>
                            ";
                            } else {
                                // line 758
                                echo "                                <pre class=\"output_text\">";
                                echo $this->extensions['App\Twig\TwigExtension']->parseRunDiff(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["runsOutput"]) || array_key_exists("runsOutput", $context) ? $context["runsOutput"] : (function () { throw new RuntimeError('Variable "runsOutput" does not exist.', 758, $this->source); })()), $context["runIdx"], [], "array", false, false, false, 758), "output_system", [], "any", false, false, false, 758));
                                echo "</pre>
                            ";
                            }
                            // line 760
                            echo "                        ";
                        }
                        // line 761
                        echo "                    ";
                    }
                    // line 762
                    echo "
                    </div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['runIdx'], $context['run'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 766
                echo "
            <script>
                function display_correctruns(show) {
                    elements = document.getElementsByClassName('run_correct');
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].style.display = show ? 'block' : 'none';
                    }
                }

                display_correctruns(false);
            </script>
        ";
            }
            // line 777
            echo " ";
            // line 778
            echo "
    ";
        }
        // line 779
        echo " ";
        // line 780
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1935 => 780,  1933 => 779,  1929 => 778,  1927 => 777,  1913 => 766,  1904 => 762,  1901 => 761,  1898 => 760,  1892 => 758,  1888 => 756,  1886 => 755,  1882 => 753,  1876 => 751,  1872 => 749,  1870 => 748,  1866 => 746,  1863 => 745,  1858 => 743,  1855 => 742,  1851 => 740,  1849 => 739,  1846 => 738,  1843 => 737,  1837 => 735,  1833 => 733,  1831 => 732,  1828 => 731,  1826 => 730,  1823 => 729,  1820 => 728,  1814 => 726,  1812 => 725,  1809 => 724,  1804 => 722,  1801 => 721,  1797 => 719,  1795 => 718,  1792 => 717,  1789 => 716,  1784 => 714,  1781 => 713,  1777 => 711,  1775 => 710,  1772 => 709,  1769 => 708,  1766 => 707,  1762 => 705,  1758 => 703,  1754 => 701,  1752 => 700,  1749 => 699,  1746 => 698,  1743 => 697,  1740 => 696,  1737 => 695,  1735 => 694,  1732 => 693,  1723 => 689,  1718 => 688,  1716 => 687,  1713 => 686,  1710 => 685,  1704 => 682,  1701 => 681,  1698 => 680,  1694 => 678,  1688 => 675,  1683 => 674,  1676 => 670,  1673 => 669,  1671 => 668,  1664 => 664,  1661 => 663,  1656 => 661,  1651 => 660,  1645 => 657,  1640 => 655,  1636 => 654,  1632 => 653,  1628 => 651,  1626 => 650,  1621 => 647,  1618 => 646,  1607 => 639,  1605 => 638,  1600 => 635,  1596 => 633,  1594 => 632,  1587 => 629,  1585 => 628,  1576 => 622,  1567 => 616,  1564 => 615,  1561 => 614,  1557 => 612,  1555 => 611,  1553 => 610,  1545 => 609,  1542 => 608,  1539 => 607,  1536 => 606,  1528 => 604,  1525 => 603,  1522 => 602,  1519 => 601,  1515 => 599,  1511 => 597,  1507 => 595,  1505 => 594,  1502 => 593,  1499 => 592,  1496 => 591,  1492 => 589,  1488 => 587,  1485 => 586,  1483 => 585,  1478 => 583,  1469 => 582,  1467 => 581,  1464 => 580,  1461 => 579,  1458 => 578,  1452 => 576,  1449 => 575,  1443 => 573,  1441 => 572,  1437 => 571,  1430 => 569,  1424 => 567,  1421 => 566,  1418 => 565,  1415 => 564,  1412 => 563,  1407 => 562,  1405 => 561,  1403 => 560,  1399 => 558,  1393 => 556,  1389 => 554,  1387 => 553,  1378 => 550,  1370 => 545,  1359 => 538,  1357 => 537,  1349 => 534,  1345 => 532,  1342 => 531,  1339 => 530,  1336 => 529,  1333 => 528,  1330 => 527,  1327 => 526,  1324 => 525,  1321 => 524,  1318 => 523,  1315 => 522,  1312 => 521,  1309 => 520,  1306 => 519,  1303 => 518,  1300 => 517,  1297 => 516,  1294 => 515,  1291 => 514,  1288 => 513,  1285 => 512,  1282 => 511,  1279 => 509,  1275 => 507,  1272 => 506,  1261 => 498,  1257 => 497,  1253 => 496,  1249 => 495,  1245 => 494,  1239 => 490,  1236 => 489,  1234 => 487,  1233 => 486,  1232 => 485,  1230 => 483,  1227 => 482,  1217 => 473,  1214 => 472,  1210 => 470,  1204 => 468,  1202 => 467,  1196 => 466,  1192 => 464,  1189 => 463,  1185 => 460,  1178 => 456,  1173 => 453,  1170 => 452,  1163 => 448,  1155 => 445,  1151 => 443,  1149 => 442,  1145 => 440,  1142 => 439,  1133 => 434,  1131 => 433,  1128 => 432,  1125 => 431,  1123 => 430,  1118 => 429,  1115 => 428,  1112 => 427,  1109 => 426,  1106 => 425,  1104 => 424,  1098 => 420,  1095 => 419,  1091 => 416,  1084 => 414,  1081 => 413,  1079 => 412,  1072 => 408,  1070 => 407,  1064 => 406,  1061 => 405,  1059 => 404,  1054 => 403,  1051 => 402,  1049 => 401,  1046 => 399,  1041 => 397,  1036 => 395,  1034 => 394,  1031 => 393,  1029 => 392,  1025 => 390,  1022 => 388,  1017 => 386,  1015 => 385,  1011 => 384,  1009 => 383,  1007 => 382,  1004 => 381,  993 => 380,  990 => 379,  986 => 378,  983 => 377,  981 => 376,  976 => 374,  974 => 373,  971 => 371,  964 => 370,  961 => 369,  959 => 368,  957 => 367,  954 => 365,  952 => 364,  949 => 362,  945 => 359,  942 => 357,  940 => 356,  938 => 355,  932 => 351,  928 => 349,  917 => 341,  915 => 340,  913 => 339,  910 => 338,  906 => 336,  902 => 334,  898 => 332,  895 => 331,  888 => 328,  886 => 327,  880 => 325,  878 => 324,  875 => 323,  872 => 322,  861 => 315,  858 => 314,  855 => 313,  845 => 309,  838 => 306,  833 => 305,  831 => 304,  827 => 302,  823 => 300,  821 => 299,  815 => 298,  811 => 297,  808 => 296,  806 => 295,  802 => 294,  798 => 292,  795 => 290,  793 => 289,  790 => 288,  788 => 287,  785 => 286,  783 => 285,  780 => 284,  777 => 283,  768 => 281,  763 => 280,  761 => 279,  758 => 278,  753 => 275,  744 => 271,  736 => 269,  734 => 268,  730 => 267,  725 => 264,  721 => 262,  719 => 261,  715 => 260,  711 => 259,  704 => 255,  700 => 254,  695 => 251,  689 => 249,  687 => 248,  683 => 247,  676 => 245,  670 => 244,  666 => 242,  662 => 240,  658 => 238,  656 => 237,  652 => 236,  644 => 234,  641 => 233,  637 => 232,  621 => 218,  619 => 217,  616 => 216,  612 => 214,  610 => 213,  607 => 212,  603 => 210,  601 => 207,  600 => 206,  599 => 204,  591 => 200,  585 => 197,  580 => 196,  574 => 194,  572 => 193,  565 => 188,  563 => 187,  560 => 186,  556 => 184,  550 => 182,  548 => 181,  545 => 179,  543 => 178,  539 => 177,  536 => 175,  534 => 174,  530 => 172,  528 => 171,  524 => 169,  521 => 168,  513 => 163,  509 => 161,  506 => 160,  503 => 159,  501 => 158,  494 => 154,  490 => 153,  482 => 148,  473 => 142,  469 => 141,  460 => 135,  456 => 134,  452 => 133,  442 => 127,  436 => 125,  428 => 123,  426 => 122,  422 => 121,  413 => 115,  409 => 114,  405 => 113,  400 => 110,  391 => 106,  387 => 105,  383 => 103,  381 => 102,  372 => 98,  368 => 97,  363 => 94,  360 => 92,  354 => 88,  352 => 87,  349 => 86,  345 => 84,  343 => 83,  339 => 81,  337 => 80,  334 => 79,  326 => 76,  322 => 75,  313 => 73,  307 => 71,  304 => 70,  301 => 69,  298 => 68,  295 => 67,  292 => 66,  290 => 65,  287 => 64,  283 => 62,  280 => 61,  276 => 59,  260 => 57,  254 => 56,  252 => 55,  235 => 54,  233 => 53,  230 => 52,  222 => 50,  219 => 49,  217 => 48,  213 => 47,  208 => 44,  202 => 41,  199 => 40,  197 => 39,  194 => 38,  188 => 35,  185 => 34,  183 => 33,  180 => 32,  177 => 31,  174 => 30,  171 => 29,  168 => 28,  166 => 27,  163 => 26,  150 => 25,  124 => 11,  120 => 10,  116 => 9,  112 => 8,  107 => 7,  94 => 6,  66 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var \\App\\Entity\\ExternalJudgement externalJudgement #}
{% extends \"jury/base.html.twig\" %}

{% block title %}Submission s{{ submission.submitid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/nv.d3.min.css') }}\">
    <script src=\"{{ asset('js/d3.min.js') }}\"></script>
    <script src=\"{{ asset('js/nv.d3.min.js') }}\"></script>
    <script src=\"{{ asset('js/FileSaver.min.js') }}\"></script>
    <style>
        .judging-table td a, .judging-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .judging-table tr.disabled td a {
            color: silver
        }
    </style>
{% endblock %}

{% block content %}

    {% if submission.externalJudgements.empty %}
        {% set externalJudgement = null %}
    {% else %}
        {% set externalJudgement = submission.externalJudgements.first %}
    {% endif %}

    {% if claimWarning %}
        <div class=\"alert alert-warning\">
            {{ claimWarning }}
        </div>
    {% endif %}

    {% if requestedOutputCount %}
        <div class=\"alert alert-warning\">
            Waiting for {{ requestedOutputCount }} team output(s) (or full debug package) to be grabbed and uploaded.
        </div>
    {% endif %}

    <div class=\"mb-3\">
        <h1 style=\"display: inline;\">
            Submission {{ submission.submitid }}
            {% if submission.originalSubmission %}
                {% set origSubmissionUrl = path('jury_submission', {submitId: submission.originalSubmission.submitid}) %}
                (resubmit of <a href=\"{{ origSubmissionUrl }}\">s{{ submission.originalSubmission.submitid }}</a>)
            {% endif %}
            {% if submission.resubmissions is not empty %}
                (resubmitted as
                {%- for resubmission in submission.resubmissions -%}
                    {% set resubmissionUrl = path('jury_submission', {submitId: resubmission.submitid}) %}
                    <a href=\"{{ resubmissionUrl }}\">s{{ resubmission.submitid }}</a>
                    {%- if not loop.last -%},{%- endif -%}
                {%- endfor -%}
                )
            {% endif %}
            {% if not submission.valid %}
                (ignored)
            {% endif %}
        </h1>
        {% if is_granted('ROLE_ADMIN') %}
            {% if submission.valid %}
                {% set action = 'ignore' %}
            {% else %}
                {% set action = 'unignore' %}
            {% endif %}
            <form action=\"{{ path('jury_submission_update_status', {'submitId': submission.submitid}) }}\" method=\"post\"
                  style=\"display: inline; \">
                <input type=\"hidden\" name=\"valid\" value=\"{% if submission.valid %}0{% else %}1{% endif %}\"/>
                <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\"
                       value=\"{{ action | upper }} this submission\"
                       onclick=\"return confirm('Really {{ action }} submission s{{ submission.submitid }}?');\"/>
            </form>
        {% endif %}

        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'submission', id: submission.submitid} %}
    </div>

    {% if not submission.valid %}
        <div class=\"alert alert-danger\">This submission is not used during scoreboard calculations.</div>
    {% endif %}

    {% if not submission.contestProblem %}
        <div class=\"alert alert-danger\">
            This submission is for a problem that is not part (anymore) of the contest of the submission.
        </div>
    {% endif %}

    {# Condensed submission info on a single line with icons #}
    <div class=\"submission-summary mb-2\">
        <span>
            <i class=\"fas fa-users\" title=\"Team:\"></i>
            <a href=\"{{ path('jury_team', {teamId: submission.team.teamid, cid: submission.contest.cid}) }}\">
                {{ submission.team.effectiveName }} {{ submission.team | entityIdBadge('t') }}
            </a>
        </span>

        {% if submission.user %}
            <span>
                <i class=\"fas fa-user\" title=\"User:\"></i>
                <a href=\"{{ path('jury_user', {userId: submission.user.userid, cid: submission.contest.cid}) }}\">
                    {{ submission.user.username }} {{ submission.user | entityIdBadge('u') }}
                </a>
            </span>
        {% endif %}

        <span>
            <i class=\"fas fa-trophy\" title=\"Contest:\"></i>
            <a href=\"{{ path('jury_contest', {'contestId': submission.contest.cid}) }}\">
                {{ submission.contest.shortname }}
                {{ submission.contest | entityIdBadge('c') }}
            </a>
        </span>

        <span>
            <i class=\"fas fa-book-open\" title=\"Problem:\"></i>
            <a href=\"{{ path('jury_problem', {'probId': submission.problem.probid}) }}\">
                {% if submission.contestProblem %}
                    {{ submission.contestProblem.shortname }}: {{ submission.problem.name }}
                {% else %}
                    {{ submission.problem.name }}
                {% endif %}
                {{ submission.problem | entityIdBadge('p') }}
            </a>
        </span>

        <span>
            <i class=\"fas fa-comments\" title=\"Language:\"></i>
            <a href=\"{{ path('jury_language', {'langId': submission.language.langid}) }}\">
                {{ submission.language.name }}
                {{ submission.language | entityIdBadge }}
            </a>
        </span>

        <span>
            <i class=\"fas fa-clock\" title=\"Submittime:\"></i>
            <span title=\"{{ submission.submittime | printtime('Y-m-d H:i:s (T)') }}\">
                {{ submission.submittime | printtime(null, submission.contest) }}
            </span>
        </span>

        <span>
            <i class=\"fas fa-stopwatch\" title=\"Allowed runtime:\"></i>
            {{ submission.problem.timelimit * submission.language.timeFactor }}s
        </span>

        <span>
            <i class=\"fas fa-code\" title=\"Source code:\"></i>
            <a href=\"{{ path('jury_submission_source', {submission: submission.submitid}) }}\">
                View {{ submission.files | printFiles }}
            </a>
        </span>

        {% if external_ccs_submission_url is not empty %}
            {% set externalSubmissionUrl = submission | externalCcsUrl %}
            {% if externalSubmissionUrl is not empty %}
                <span>
                    <i class=\"fas fa-link\" title=\"External link:\"></i>
                    <a href=\"{{ externalSubmissionUrl }}\" target=\"_blank\">
                        View in external CCS
                    </a>
                </span>
            {% endif %}
        {% endif %}
    </div>

    {% if submission.externalid %}
        <div class=\"mb-2\">
            External ID:
            {% if external_ccs_submission_url is empty %}
                {{- submission.externalid -}}
            {% else %}
                <a href=\"{{ submission | externalCcsUrl }}\" target=\"_blank\">
                    {{- submission.externalid -}}
                </a>
            {%- endif -%}
            {%- if externalJudgement is not null -%}
                , {{ externalJudgement.result | printValidJuryResult }}
            {% endif %}
        </div>
    {% endif %}

    {% if externalJudgement is not null and externalJudgement.result is not empty and selectedJudging is not null and selectedJudging.result is not empty and externalJudgement.result != selectedJudging.result %}
        <div class=\"alert alert-danger\">
            <strong>Results differ!</strong>
            <hr>
            <p>
                This submission was judged as
                {% if external_ccs_submission_url is empty %}
                    {{ externalJudgement.result | printValidJuryResult }} by the external CCS
                {% else %}
                    <a href=\"{{ submission | externalCcsUrl }}\" target=\"_blank\">
                        {{ externalJudgement.result | printValidJuryResult }} by the external CCS
                    </a>
                {% endif -%}
                , but as {{ selectedJudging.result | printValidJuryResult }}
                by DOMjudge.
            </p>

            {% include 'jury/partials/verify_form.html.twig' with {
                label: 'Shadow difference verified',
                judging: externalJudgement,
                form_action: path('jury_shadow_difference_verify', {extjudgementid: externalJudgement.extjudgementid}),
                show_form: true,
                show_icat: false} %}
        </div>
    {% endif %}

    {% if not sameTestcaseIds and selectedJudging is not null and selectedJudging.result is not empty %}
        <div class=\"alert alert-danger\">The problem's testcases have changed since this judging has been performed. We recommend rejudging the whole problem.</div>
    {% endif %}

    {% if judgings | length > 1 or (judgings | length == 1 and selectedJudging is null) %}
        <h2>Judgings</h2>
        <table class=\"judging-table table table-striped table-hover table-sm\" style=\"width: auto;\">
            <thead>
            <tr>
                <td></td>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">start</th>
                <th scope=\"col\">max runtime</th>
                <th scope=\"col\">judgehost</th>
                <th scope=\"col\">result</th>
                <th scope=\"col\">rejudging</th>
            </tr>
            </thead>
            <tbody>
            {% for judging in judgings %}
                {% set link = path('jury_submission', {submitId: submission.submitid, jid: judging.judgingid}) %}
                <tr {% if not judging.valid %}class=\"disabled\"{% endif %}>
                    <td>
                        <a href=\"{{ link }}\">
                            {% if selectedJudging is not null and selectedJudging.judgingid == judging.judgingid %}
                                <i class=\"fas fa-long-arrow-alt-right\"></i>
                            {% else %}
                                &nbsp;
                            {% endif %}
                        </a>
                    </td>
                    <td><a href=\"{{ link }}\">j{{ judging.judgingid }}</a></td>
                    <td><a href=\"{{ link }}\">{{ judging.starttime | printtime(null, submission.contest) }}</a></td>
                    <td>
                        <a href=\"{{ link }}\">
                            {% if maxRunTimes[judging.judgingId] is not null %}
                                {{ maxRunTimes[judging.judgingId] }}s
                            {% endif %}
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ link }}\">
                            {{ judging.judgehosts | printHosts }}
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ link }}\">
                            {{ judging.result | printResult(judging.valid, true) }}
                            {% if judging.stillBusy %}
                                (&hellip;)
                            {% endif %}
                        </a>
                    </td>
                    <td>
                        <a href=\"{{ link }}\">
                            {% if judging.rejudging is not null %}
                                r{{ judging.rejudging.rejudgingid }} ({{ judging.rejudging.reason }})
                            {% endif %}
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if unjudgableReasons is not empty %}
        {% for reason in unjudgableReasons %}
            <div class=\"alert alert-danger\">{{ reason }}</div>
        {% endfor %}
    {% endif %}

    {% if selectedJudging is not null or externalJudgement is not null %}

        {% include 'jury/partials/submission_graph.html.twig' %}

        {% if selectedJudging is not null %}

            {# Show judging information #}
            <div class=\"mb-2\">
                <h2 style=\"display: inline;\">
                    Judging j{{ selectedJudging.judgingid }}
                    {% if selectedJudging.rejudging %}
                        (rejudging
                        <a href=\"{{ path('jury_rejudging', {rejudgingId: selectedJudging.rejudging.rejudgingid}) }}\">
                            r{{ selectedJudging.rejudging.rejudgingid }}</a>, reason: {{ selectedJudging.rejudging.reason }})
                    {% elseif not selectedJudging.valid %}
                        (Invalid)
                    {% endif %}
                </h2>
                &nbsp;
                {% if selectedJudging.debugPackages | length > 0 %}
                   {% for debug_package in selectedJudging.debugPackages %}
                       <a href=\"{{ path('download_full_debug', {'debug_package_id': debug_package.debugPackageId }) }}\">
                           <button class=\"btn btn-sm btn-outline-secondary\" >
                               <i class=\"fas fa-download\"></i>
                               Debug Package ({{ debug_package.judgehost.hostname }})
                           </button>
                       </a>
                   {% endfor %}
                {% else %}
                    {% if not requestedOutputCount %}
                        <a href=\"{{ path('request_full_debug', {'jid': selectedJudging.judgingid}) }}\">
                            <button class=\"btn btn-sm btn-outline-secondary\" >
                                <i class=\"fas fa-upload\"></i>
                                Retrieve Full Debug Package
                            </button>
                        </a>
                    {% endif %}
                {% endif %}
                &nbsp;
                {% if not selectedJudging.verified %}
                    <form action=\"{{ path('jury_submission', {submitId: submission.submitid, jid: selectedJudging.judgingid}) }}\"
                          method=\"post\" style=\"display: inline;\">
                        {% if selectedJudging.juryMember is not empty %}
                            (claimed by {{ selectedJudging.juryMember }})
                            <input type=\"hidden\" name=\"forceclaim\" value=\"1\"/>
                        {% endif %}
                        {% if app.user.username == selectedJudging.juryMember %}
                            <input type=\"submit\" value=\"unclaim\" name=\"unclaim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        {% else %}
                            <input type=\"submit\" value=\"claim\" name=\"claim\" class=\"btn btn-outline-secondary btn-sm\"/>
                        {% endif %}
                    </form>
                {% endif %}
                &nbsp;
                {% if selectedJudging is null or selectedJudging.result is empty %}
                    {%- if not selectedJudging or not selectedJudging.started %}
                        <a href=\"{{ path('jury_submission_create_tasks', {'submitId': submission.submitid}) }}\">
                            <button class=\"btn btn-sm btn-outline-secondary\" >
                                <i class=\"fas fa-gavel\"></i>
                                Judge submission
                            </button>
                        </a>
                    {%- endif %}
                {%- endif %}
            </div>
        {% endif %}

        <div class=\"mb-2\">
            <div>
                Result:
                {% if selectedJudging is null or selectedJudging.result is empty %}
                    {%- if selectedJudging and selectedJudging.started %}
                        {{- '' | printValidJuryResult -}}
                    {%- else %}
                        {{- 'queued' | printValidJuryResult -}}
                    {%- endif %}
                {%- else %}
                    {{- selectedJudging.result | printValidJuryResult -}}
                {%- endif %}
                {%- if submission.stillBusy -%}
                    (&hellip;)
                {%- endif -%}
                {%- if lastJudging is not null -%}
                    {% set lastSubmissionLink = path('jury_submission', {submitId: lastSubmission.submitid}) %}{#-
                -#}<span class=\"lastresult\">
                    (<a href=\"{{ lastSubmissionLink }}\">s{{ lastSubmission.submitid }}</a>: {{ lastJudging.result }}){#-
                -#}</span>
                {%- endif -%}
                {%- if externalJudgement is not null %}
                    (external: {{ externalJudgement.result | printValidJuryResult }})
                {%- endif %}
                {%- if selectedJudging is not null and judgehosts is not empty -%}
                    , Judgehost(s):
                    {% for judgehostid, hostname in judgehosts %}
                        {% set judgehostLink = path('jury_judgehost', {judgehostid: judgehostid}) %}
                        <a href=\"{{ judgehostLink }}\">{{ hostname | printHost }}</a>
                    {% endfor %} -
                    <span class=\"judgetime\">Judging started: {{ selectedJudging.starttime | printtime('H:i:s') }}
                        {%- if selectedJudging.endtime -%}
                            , finished in {{ selectedJudging.starttime | printtimediff(selectedJudging.endtime) }}s
                        {%- elseif selectedJudging.valid or selectedJudging.rejudging -%}
                            &nbsp;[still judging - busy {{ selectedJudging.starttime | printtimediff }}]
                        {%- else -%}
                            &nbsp;[aborted]
                        {%- endif -%}
                    </span>
                {% endif -%}
                {%- if externalJudgement is not null %}
                    <span class=\"judgetime\">(external judging started: {{ externalJudgement.starttime | printtime('H:i:s') }}
                        {%- if externalJudgement.endtime -%}
                            , finished in {{ externalJudgement.starttime | printtimediff(externalJudgement.endtime) }}s
                        {%- else -%}
                            &nbsp;[still judging - busy {{ externalJudgement.starttime | printtimediff }}]
                        {%- endif -%}
                    )</span>
                {%- endif -%}
                {%- if selectedJudging is not null and selectedJudging.result != 'compiler-error' -%}
                    , max/sum runtime:
                    {{ selectedJudging.maxRuntime | number_format(2, '.', '') }}/{{ selectedJudging.sumRuntime | number_format(2, '.', '') }}s
                    {%- if lastJudging is not null -%}
                        <span class=\"lastruntime\">
                        (<a href=\"{{ lastSubmissionLink }}\">s{{ lastSubmission.submitid }}</a>:
                            {{ lastJudging.maxRuntime | number_format(2, '.', '') }}{#-
                        -#}/{{ lastJudging.sumRuntime | number_format(2, '.', '') }}s)
                    </span>
                    {%- endif -%}
                {% endif -%}
                {%- if externalJudgement is not null and externalJudgement.result != 'compiler-error' and externalJudgement.result != null -%}
                    , external max/sum runtime:
                    {{ externalJudgement.maxRuntime | number_format(2, '.', '') }}/{{ externalJudgement.sumRuntime | number_format(2, '.', '') }}s
                {% endif %}
            </div>

            {# Display testcase results #}
            {% if externalJudgement is not null or (selectedJudging is not null and selectedJudging.result != 'compiler-error') %}
                <table>
                    <tr>
                        <td>testcase runs:</td>
                        <td>
                            {% if selectedJudging is null %}
                                {% set judgingDone = false %}
                            {% else %}
                                {% set judgingDone = selectedJudging.endtime is not empty %}
                            {% endif %}
                            {{ runs | displayTestcaseResults(judgingDone) }}
                            {% if selectedJudging is not null and runsOutstanding %}
                                {% if selectedJudging.judgeCompletely %}
                                    <i class=\"fas fa-balance-scale\" title=\"remaining test cases requested to be judged\"></i>
                                {% elseif selectedJudging.result is not null %}
                                    <form action=\"{{ path('jury_submission_request_remaining', {'judgingId': selectedJudging.judgingid}) }}\" method=\"post\"
                                          style=\"display: inline; \">
                                        <input type=\"submit\" class=\"btn btn-outline-secondary btn-sm\" value=\"judge remaining\" />
                                    </form>
                                {% endif %}
                            {% endif %}
                        </td>
                    </tr>
                    {% if lastJudging is not null %}
                        <tr class=\"lasttcruns\">
                            <td>
                                <a href=\"{{ lastSubmissionLink }}\">s{{ lastSubmission.submitid }}</a> runs:
                            </td>
                            <td>
                                {{ lastRuns | displayTestcaseResults(lastJudging.endtime is not empty) }}
                            </td>
                        </tr>
                    {% endif %}
                    {% if externalJudgement is not null %}
                        <tr>
                            <td>external runs:</td>
                            <td>
                                {{ externalRuns | displayTestcaseResults(externalJudgement.endtime is not empty, true) }}
                            </td>
                        </tr>
                    {% endif %}
                </table>

                {# Show JS toggle of previous submission results #}
                {% if lastJudging is not null %}
                    <span class=\"testcases_prev\">
                    <a href=\"javascript:togglelastruns();\">show/hide</a>
                    results of previous <a href=\"{{ lastSubmissionLink }}\">submission s{{ lastSubmission.submitid }}</a>
                        {% if lastJudging.verifyComment %}
                            <span class=\"prevsubmit\">(verify comment: '{{ lastJudging.verifyComment }}')</span>
                        {% endif %}
                </span>
                {% endif %}
            {% endif %}
        </div>

        <script>
            \$(function () {
                togglelastruns();
            });
        </script>

        {# Show verify info, but only when a result is known #}
        {% if selectedJudging is not null and selectedJudging.result is not empty %}
            {% include 'jury/partials/verify_form.html.twig' with {
                label: 'Verified',
                judging: selectedJudging,
                form_action: path('jury_judging_verify', {judgingId: selectedJudging.judgingid}),
                show_form: not (verificationRequired and selectedJudging.verified and selectedJudging.valid),
                show_icat: true} %}
            {% if submission.contestProblem and icat_url %}
                <script>
                    \$(function () {
                        \$('#post-to-icat').on('click', function () {
                            postVerifyCommentToICAT(
                                '{{ icat_url }}/insert_entry.php',
                                '{{ app.user.username }}',
                                '{{ submission.team.teamid }}',
                                '{{ submission.contestProblem.shortname }}',
                                '{{ submission.externalid }}'
                            );
                            alert('Comment posted to iCAT.');
                            return false;
                        });
                    });
                </script>
            {% endif %}
        {% elseif selectedJudging is not null %}
            <div class=\"alert alert-warning\">Judging is not ready yet!</div>
        {% endif %}

        {# Display compile output #}
        {% set color = '#6666FF' %}
        {% set message = 'not finished yet' %}
        {% set output = null %}
        {% if selectedJudging is not null %}
            {% set output = selectedJudging.outputCompile(true) %}
        {% endif %}
        {% if output is not null %}
            {% if selectedJudging.result == 'compiler-error' %}
                {% set message = 'unsuccessful' %}
            {% else %}
                {% set message = 'successful' %}
                {% if output is not empty %}
                    {% set outputLines = output | lineCount %}
                    {% if outputLines == 1 %}
                        {% set message = message ~ ' (with 1 line of output)' %}
                    {% else %}
                        {% set message = message ~ ' (with ' ~ outputLines ~ ' lines of output)' %}
                    {% endif %}
                {% endif %}
            {% endif %}
        {% endif %}
        <h3>
            <a class=\"collapse-link\" href=\"javascript:collapse('#detailcompile')\">
                Compilation <span class=\"compile-{{ message }}\">{{ message }}</span>
            </a>
        </h3>
        {% if selectedJudging is not null and selectedJudging.compileMetadata is not null %}
            {{ selectedJudging.compileMetadata | printMetadata }}
            <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                    data-target=\"#collapseExample-compilemeta\"
                    aria-expanded=\"false\">
                show complete compilation metadata
            </button>
            <div class=\"collapse\" id=\"collapseExample-compilemeta\">
                <div class=\"card card-body output_text\">{{ selectedJudging.compileMetadata }}</div>
            </div>
            <hr>
            <br>
        {% endif %}
        <div class=\"card mb-3 {% if selectedJudging is null or selectedJudging.result != 'compiler-error' %}d-none{% endif%}\"
            id=\"detailcompile\">
            <div class=\"card-header\">Compilation output</div>
        {% if output is empty %}
            <div class=\"card-body nodata\">There were no compiler errors or warnings.</div>
        {% else %}
            <div class=\"card-body\"><pre class=\"output_text\">{{ output }}</pre></div>
        {% endif %}
        </div>

        {% if externalJudgement is not null or (selectedJudging is not null and selectedJudging.result != 'compiler-error') %}
            {# Show run info. Only when compilation was successful or we have an external judgement #}
            {% for runIdx, run in runs %}
                {% set externalRun = null %}
                {% if externalRuns[runIdx] is defined %}
                    {% set externalRun = externalRuns[runIdx] %}
                {% endif %}
                <div id=\"run-{{run.rank}}\"
                     style=\"margin-bottom: 20px;\"
                     class=\"card run {% if run.firstJudgingRun and run.firstJudgingRun.runresult == 'correct' %}run_correct{% endif %}\">
                    <div class=\"card-header\">
                        Run #{{ run.rank }}
                        {% if run.origInputFilename is not null %}
                            | <span class=\"filename\">{{ run.origInputFilename }}.in</span>
                        {% else %}
                            {% if run.description is not null %}
                                | {{ run.description(true) }}
                            {% endif %}
                        {% endif %}
                        {% if run.firstJudgingRun is not null %}
                            |
                            {% if run.firstJudgingRun.runresult is not null %}
                                <span class=\"sol {% if run.firstJudgingRun.runresult == 'correct' %}sol_correct{% else %}sol_incorrect{% endif %}\">
                                    {{ run.firstJudgingRun.runresult }}
                                </span>
                                {% if run.firstJudgingRun.runresult == 'timelimit' %}
                                    {% if runsOutput[runIdx].terminated %}
                                        <b>(terminated)</b>
                                    {% else %}
                                        <b>(finished late)</b>
                                    {% endif %}
                                {% endif %}
                            {% else %}
                                <span class=\"sol sol_queued\">
                                   {% if runsOutput[runIdx].hostname is null %}
                                       queued
                                   {% else %}
                                       judging
                                   {% endif %}
                                </span>
                            {% endif %}
                        {% endif %}
                        {% if runsOutput[runIdx].hostname is not null %}
                            {% set judgehostLink = path('jury_judgehost', {judgehostid: runsOutput[runIdx].judgehostid}) %}
                            | <a href=\"{{ judgehostLink }}\">{{ runsOutput[runIdx].hostname | printHost }}</a>
                        {% endif %}
                        {% if externalRun is not null and externalRun.firstExternalRun is not null %}
                            {% if externalRun.firstExternalRun is not null %}
                                (external:
                                <span class=\"sol {% if externalRun.firstExternalRun.result == 'correct' %}sol_correct{% else %}sol_incorrect{% endif %}\">
                                    {{ externalRun.firstExternalRun.result }}{#-
                                -#}</span>{#-
                                -#})
                            {% endif %}
                        {% endif %}
                        <span style=\"float: right;\">
                            <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': submission.problem.probid, 'rank': run.rank, 'type': 'input'}) }}\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Input
                                </button>
                            </a>
                            <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': submission.problem.probid, 'rank': run.rank, 'type': 'output'}) }}\">
                                <button class=\"btn btn-sm btn-outline-secondary\" >
                                    <i class=\"fas fa-download\"></i>
                                    Reference Output
                                </button>
                            </a>
                            {% if run.firstJudgingRun is not null %}
                                <a href=\"{{ path('jury_submission_team_output', {'submission': submission.submitid, 'run': run.firstJudgingRun.runid, 'contest': submission.contest.cid}) }}\">
                                    <button class=\"btn btn-sm btn-outline-secondary\" >
                                        <i class=\"fas fa-download\"></i>
                                        {% if runsOutput[runIdx].is_output_run_truncated %}
                                            Truncated
                                        {% endif %}
                                        Team Output
                                    </button>
                                </a>
                                {% if runsOutput[runIdx].is_output_run_truncated %}
                                    <a href=\"{{ path('request_output', {'jid': run.firstJudgingRun.judgingid, 'jrid': run.firstJudgingRun.runid}) }}\">
                                        <button class=\"btn btn-sm btn-outline-secondary\" >
                                            <i class=\"fas fa-upload\"></i>
                                            Retrieve Full Team Output
                                        </button>
                                    </a>
                                {% endif %}
                            {% endif %}
                        </span>
                    </div>
                    <div class=\"card-body\">
                    {% if run.firstJudgingRun is not null and runsOutput[runIdx].cpu_time %}
                    <span style=\"display:inline; margin-left: 5px;\">
\t\t        <i class=\"fas fa-stopwatch\" title=\"runtime\"></i>
                        {{ runsOutput[runIdx].cpu_time }}s
                        CPU{% if runsOutput[runIdx].metadata is not null %},
                            {{ runsOutput[runIdx].wall_time }}s wall,
\t\t            <i class=\"fas fa-memory\" title=\"RAM\"></i>
                            {{ runsOutput[runIdx].memory }},
\t\t            <i class=\"far fa-question-circle\" title=\"exit-code\"></i>
                            exit code:
                            {{ runsOutput[runIdx].exitcode }}{% if runsOutput[runIdx].signal > 0 %},
                                signal: {{ runsOutput[runIdx].signal }}
                            {% endif %}
                            <button class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"collapse\"
                                    data-target=\"#collapseExample-{{ runIdx }}\"
                                    aria-expanded=\"false\">
                                show complete metadata
                            </button>
                            {% if runsOutput[runIdx].output_limit %}
                                <div class=\"alert alert-warning\">
                                    The submission output (<code>{{ runsOutput[runIdx].output_limit }}</code>) was
                                    truncated because of the configured output limit.
                                </div>
                            {% endif %}
                            <div class=\"collapse\" id=\"collapseExample-{{ runIdx }}\">
                                  <div class=\"card card-body output_text\">{{ runsOutput[runIdx].metadata }}</div>
                            </div>
                        {% endif %}
                    </span>
                    {% endif %}
                    {% if run.description is not null %}
                        <p><em>
                            {{ run.description(true) | descriptionExpand }}
                        </em></p>
                    {% endif %}
                    {% if runsOutput[runIdx].image_thumb %}
                        <span style=\"float:right; border: 3px solid #438ec3; margin: 5px; padding: 5px;\">
                            {% set imgUrl = path('jury_problem_testcase_fetch', {'probId': submission.problem.probid, 'rank': run.rank, 'type': 'image'}) %}
                            <a href=\"{{ imgUrl }}\">
                                <img src=\"data:image/{{ run.imageType }};base64,{{ runsOutput[runIdx].image_thumb | base64 }}\"/>
                            </a>
                        </span>
                    {% endif %}

                    {% set runDone = false %}
                    {% if run is not null and run.firstJudgingRun is not null and run.firstJudgingRun.runresult is not null %}
                        {% set runDone = true %}
                    {% endif %}
                    {% if not runDone %}
                        <p class=\"nodata\">
                            {% if selectedJudging is not null and selectedJudging.result %}
                                Run not used for final result.
                            {% else %}
                                Run not started/finished yet.
                            {% endif %}
                        </p>
                    {% else %}
                        {% if run.firstJudgingRun is not null and run.firstJudgingRun.runresult is not null %}
                            {% if combinedRunCompare %}
                                <h5>Validator output</h5>
                                {% if runsOutput[runIdx].output_diff is empty %}
                                    <p class=\"nodata\">There was no validator output.</p>
                                {% else %}
                                    <pre class=\"output_text\">
{{ runsOutput[runIdx].output_diff | parseRunDiff }}</pre>
                                {% endif %}
                            {% else %}
                                <h5>Diff output</h5>
                                {% if runsOutput[runIdx].output_diff is empty %}
                                    <p class=\"nodata\">There was no diff output.</p>
                                {% else %}
                                    <pre class=\"output_text\">
{{ runsOutput[runIdx].output_diff | parseRunDiff }}</pre>
                                {% endif %}

                                {% if run.firstJudgingRun.runresult != 'correct' %}
                                    {{ runsOutput[runIdx] | runDiff }}
                                {% endif %}
                            {% endif %}

                            {% if combinedRunCompare %}
                                <h5>Validator/Submission interaction</h5>
                                {% if runsOutput[runIdx].output_run is empty %}
                                    <p class=\"nodata\">There was no interaction log.</p>
                                {% else %}
                                    {{ runsOutput[runIdx].output_run | interactiveLog }}
                                {% endif %}
                            {% else %}
                                <h5>Program output</h5>
                                {% if runsOutput[runIdx].output_run is empty %}
                                    <p class=\"nodata\">There was no program output.</p>
                                {% else %}
                                    <pre class=\"output_text\">
{{ runsOutput[runIdx].output_run | parseRunDiff }}</pre>
                                {% endif %}
                            {% endif %}

                            <h5>Program error output</h5>
                            {% if runsOutput[runIdx].output_error is empty %}
                                <p class=\"nodata\">There was no stderr output.</p>
                            {% else %}
                                <pre class=\"output_text\">{{ runsOutput[runIdx].output_error | parseRunDiff }}</pre>
                            {% endif %}

                            <h5>Judging system output (info/debug/errors)</h5>
                            {% if runsOutput[runIdx].output_system is empty %}
                                <p class=\"nodata\">There was no judging system output.</p>
                            {% else %}
                                <pre class=\"output_text\">{{ runsOutput[runIdx].output_system | parseRunDiff }}</pre>
                            {% endif %}
                        {% endif %}
                    {% endif %}

                    </div>
                </div>
            {% endfor %}

            <script>
                function display_correctruns(show) {
                    elements = document.getElementsByClassName('run_correct');
                    for (var i = 0; i < elements.length; i++) {
                        elements[i].style.display = show ? 'block' : 'none';
                    }
                }

                display_correctruns(false);
            </script>
        {% endif %} {# selectedJudging.result != 'compiler-error' #}

    {% endif %} {# selectedJudging is not null or externalJudgement is not null #}

{% endblock %}
", "jury/submission.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/submission.html.twig");
    }
}
