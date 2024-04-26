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

/* jury/check_judgings.html.twig */
class __TwigTemplate_736b5aa375d1a19b208f602eff88706b extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/check_judgings.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/check_judgings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/check_judgings.html.twig"));

        // line 2
        $macros["checkJudgings"] = $this->macros["checkJudgings"] = $this;
        // line 3
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/check_judgings.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/check_judgings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Judging verifier - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 7
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 8
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    <h1>Judging verifier</h1>

    <p>
        ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["numChecked"]) || array_key_exists("numChecked", $context) ? $context["numChecked"] : (function () { throw new RuntimeError('Variable "numChecked" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " submissions checked:
        ";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["unexpected"]) || array_key_exists("unexpected", $context) ? $context["unexpected"] : (function () { throw new RuntimeError('Variable "unexpected" does not exist.', 18, $this->source); })())), "html", null, true);
        echo " unexpected results,
        ";
        // line 19
        if ((isset($context["verifyMultiple"]) || array_key_exists("verifyMultiple", $context) ? $context["verifyMultiple"] : (function () { throw new RuntimeError('Variable "verifyMultiple" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 20, $this->source); })())), "html", null, true);
            echo " automatically verified (multiple outcomes),
        ";
        } else {
            // line 22
            echo "            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 22, $this->source); })())), "html", null, true);
            echo " to check manually,
        ";
        }
        // line 24
        echo "        ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["verified"]) || array_key_exists("verified", $context) ? $context["verified"] : (function () { throw new RuntimeError('Variable "verified" does not exist.', 24, $this->source); })())), "html", null, true);
        echo " automatically verified
        <br>
        ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["numUnchecked"]) || array_key_exists("numUnchecked", $context) ? $context["numUnchecked"] : (function () { throw new RuntimeError('Variable "numUnchecked" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " submissions not checked:
        ";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["earlier"]) || array_key_exists("earlier", $context) ? $context["earlier"] : (function () { throw new RuntimeError('Variable "earlier" does not exist.', 27, $this->source); })())), "html", null, true);
        echo " verified earlier,
        ";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["nomatch"]) || array_key_exists("nomatch", $context) ? $context["nomatch"] : (function () { throw new RuntimeError('Variable "nomatch" does not exist.', 28, $this->source); })())), "html", null, true);
        echo " without magic string
    </p>

    ";
        // line 60
        echo "
    ";
        // line 61
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["unexpected", "Unexpected results", (isset($context["unexpected"]) || array_key_exists("unexpected", $context) ? $context["unexpected"] : (function () { throw new RuntimeError('Variable "unexpected" does not exist.', 61, $this->source); })())], 61, $context, $this->getSourceContext());
        echo "
    ";
        // line 62
        if ((isset($context["verifyMultiple"]) || array_key_exists("verifyMultiple", $context) ? $context["verifyMultiple"] : (function () { throw new RuntimeError('Variable "verifyMultiple" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "        ";
            echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["multiple", "Automatically verified (multiple outcomes)", (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 63, $this->source); })()), true], 63, $context, $this->getSourceContext());
            echo "
    ";
        } else {
            // line 65
            echo "        ";
            echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["multiple", "Check manually", (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 65, $this->source); })())], 65, $context, $this->getSourceContext());
            echo "
        ";
            // line 66
            if ( !twig_test_empty((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 66, $this->source); })()))) {
                // line 67
                echo "            <form action=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verifier");
                echo "\" method=\"post\">
                <input type=\"hidden\" name=\"verify_multiple\" value=\"1\">
                <p>
                    Verify all multiple outcome submissions:
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Verify</button>
                </p>
            </form>
        ";
            }
            // line 75
            echo "    ";
        }
        // line 76
        echo "    ";
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["verified", "Automatically verified", (isset($context["verified"]) || array_key_exists("verified", $context) ? $context["verified"] : (function () { throw new RuntimeError('Variable "verified" does not exist.', 76, $this->source); })()), true], 76, $context, $this->getSourceContext());
        echo "
    ";
        // line 77
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["earlier", "Verified earlier", (isset($context["earlier"]) || array_key_exists("earlier", $context) ? $context["earlier"] : (function () { throw new RuntimeError('Variable "earlier" does not exist.', 77, $this->source); })()), true], 77, $context, $this->getSourceContext());
        echo "
    ";
        // line 78
        echo twig_call_macro($macros["checkJudgings"], "macro_verifyResults", ["nomatch", "Without magic string", (isset($context["nomatch"]) || array_key_exists("nomatch", $context) ? $context["nomatch"] : (function () { throw new RuntimeError('Variable "nomatch" does not exist.', 78, $this->source); })()), true], 78, $context, $this->getSourceContext());
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 31
    public function macro_verifyResults($__id__ = null, $__header__ = null, $__results__ = null, $__collapse__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "header" => $__header__,
            "results" => $__results__,
            "collapse" => $__collapse__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "verifyResults"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "verifyResults"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "verifyResults"));

            // line 32
            echo "        ";
            if ( !twig_test_empty((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 32, $this->source); })()))) {
                // line 33
                echo "            <h2><a class=\"collapse-link\" href=\"javascript:collapse('#detail";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 33, $this->source); })()), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 33, $this->source); })()), "html", null, true);
                echo "</a></h2>
            <ul id=\"detail";
                // line 34
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 34, $this->source); })()), "html", null, true);
                echo "\"";
                if (((array_key_exists("collapse", $context)) ? (_twig_default_filter((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 34, $this->source); })()), false)) : (false))) {
                    echo " class=\"d-none\"";
                }
                echo ">
                ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 35, $this->source); })()));
                foreach ($context['_seq'] as $context["submitId"] => $context["result"]) {
                    // line 36
                    echo "                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => $context["submitId"]]), "html", null, true);
                    echo "\">s";
                    echo twig_escape_filter($this->env, $context["submitId"], "html", null, true);
                    echo "</a>
                    ";
                    // line 37
                    if ((twig_get_attribute($this->env, $this->source, $context["result"], "files", [], "any", true, true, false, 37) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "files", [], "any", false, false, false, 37)) > 0))) {
                        // line 38
                        echo "                        (";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "files", [], "any", false, false, false, 38), 0, 3));
                        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                            // line 39
                            echo "                            <code>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 39), "html", null, true);
                            echo "</code>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo ")
                    ";
                    }
                    // line 42
                    echo "                    ";
                    if (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 42, $this->source); })()) == "unexpected")) {
                        // line 43
                        echo "                        has unexpected result '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "actual", [], "any", false, false, false, 43), "html", null, true);
                        echo "', should be one of: ";
                        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["result"], "expected", [], "any", false, false, false, 43), ", "), "html", null, true);
                        echo "
                    ";
                    } elseif (((                    // line 44
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 44, $this->source); })()) == "multiple") && twig_get_attribute($this->env, $this->source, $context["result"], "verified", [], "any", false, false, false, 44))) {
                        // line 45
                        echo "                        verified as ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "actual", [], "any", false, false, false, 45), "html", null, true);
                        echo " out of multiple possible outcomes (";
                        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["result"], "expected", [], "any", false, false, false, 45), ", "), "html", null, true);
                        echo ")
                    ";
                    } elseif ((                    // line 46
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 46, $this->source); })()) == "multiple")) {
                        // line 47
                        echo "                        is judged as ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "actual", [], "any", false, false, false, 47), "html", null, true);
                        echo " but has multiple possible outcomes (";
                        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["result"], "expected", [], "any", false, false, false, 47), ", "), "html", null, true);
                        echo ")
                    ";
                    } elseif ((                    // line 48
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 48, $this->source); })()) == "verified")) {
                        // line 49
                        echo "                        verified as '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "actual", [], "any", false, false, false, 49), "html", null, true);
                        echo "'
                    ";
                    } elseif ((                    // line 50
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 50, $this->source); })()) == "nomatch")) {
                        // line 51
                        echo "                        expected results unknown, leaving submission unchecked
                    ";
                    } elseif ((                    // line 52
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 52, $this->source); })()) == "earlier")) {
                        // line 53
                        echo "                        already verified earlier
                    ";
                    }
                    // line 55
                    echo "                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['submitId'], $context['result'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "            </ul>
        ";
            }
            // line 59
            echo "    ";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "jury/check_judgings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 59,  380 => 57,  373 => 55,  369 => 53,  367 => 52,  364 => 51,  362 => 50,  357 => 49,  355 => 48,  348 => 47,  346 => 46,  339 => 45,  337 => 44,  330 => 43,  327 => 42,  323 => 40,  314 => 39,  309 => 38,  307 => 37,  300 => 36,  296 => 35,  288 => 34,  281 => 33,  278 => 32,  253 => 31,  237 => 78,  233 => 77,  228 => 76,  225 => 75,  213 => 67,  211 => 66,  206 => 65,  200 => 63,  198 => 62,  194 => 61,  191 => 60,  185 => 28,  181 => 27,  177 => 26,  171 => 24,  165 => 22,  159 => 20,  157 => 19,  153 => 18,  149 => 17,  143 => 13,  130 => 12,  115 => 9,  110 => 8,  97 => 7,  71 => 5,  57 => 1,  55 => 3,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import _self as checkJudgings %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Judging verifier - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Judging verifier</h1>

    <p>
        {{ numChecked }} submissions checked:
        {{ unexpected | length }} unexpected results,
        {% if verifyMultiple %}
            {{ multiple | length }} automatically verified (multiple outcomes),
        {% else %}
            {{ multiple | length }} to check manually,
        {% endif %}
        {{ verified | length }} automatically verified
        <br>
        {{ numUnchecked }} submissions not checked:
        {{ earlier | length }} verified earlier,
        {{ nomatch | length }} without magic string
    </p>

    {% macro verifyResults(id, header, results, collapse) %}
        {% if results is not empty %}
            <h2><a class=\"collapse-link\" href=\"javascript:collapse('#detail{{ id }}')\">{{ header }}</a></h2>
            <ul id=\"detail{{ id }}\"{% if collapse | default(false) %} class=\"d-none\"{% endif %}>
                {% for submitId,result in results %}
                    <li><a href=\"{{ path('jury_submission', {'submitId': submitId}) }}\">s{{ submitId }}</a>
                    {% if result.files is defined and result.files|length > 0 %}
                        ({% for file in result.files[:3] %}
                            <code>{{ file.filename }}</code>
                        {% endfor %})
                    {% endif %}
                    {% if id == 'unexpected' %}
                        has unexpected result '{{ result.actual }}', should be one of: {{ result.expected|join(', ') }}
                    {% elseif id == 'multiple' and result.verified %}
                        verified as {{ result.actual }} out of multiple possible outcomes ({{ result.expected|join(', ') }})
                    {% elseif id == 'multiple' %}
                        is judged as {{ result.actual }} but has multiple possible outcomes ({{ result.expected|join(', ') }})
                    {% elseif id == 'verified' %}
                        verified as '{{ result.actual }}'
                    {% elseif id == 'nomatch' %}
                        expected results unknown, leaving submission unchecked
                    {% elseif id == 'earlier' %}
                        already verified earlier
                    {% endif %}
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endmacro %}

    {{ checkJudgings.verifyResults('unexpected', 'Unexpected results', unexpected) }}
    {% if verifyMultiple %}
        {{ checkJudgings.verifyResults('multiple', 'Automatically verified (multiple outcomes)', multiple, true) }}
    {% else %}
        {{ checkJudgings.verifyResults('multiple', 'Check manually', multiple) }}
        {% if multiple is not empty %}
            <form action=\"{{ path('jury_judging_verifier') }}\" method=\"post\">
                <input type=\"hidden\" name=\"verify_multiple\" value=\"1\">
                <p>
                    Verify all multiple outcome submissions:
                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Verify</button>
                </p>
            </form>
        {% endif %}
    {% endif %}
    {{ checkJudgings.verifyResults('verified', 'Automatically verified', verified, true) }}
    {{ checkJudgings.verifyResults('earlier', 'Verified earlier', earlier, true) }}
    {{ checkJudgings.verifyResults('nomatch', 'Without magic string', nomatch, true) }}

{% endblock %}
", "jury/check_judgings.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/check_judgings.html.twig");
    }
}
