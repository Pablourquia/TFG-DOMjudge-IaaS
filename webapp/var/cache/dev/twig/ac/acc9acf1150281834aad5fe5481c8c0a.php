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

/* jury/shadow_differences.html.twig */
class __TwigTemplate_e4cdcbc85a5a92a6d3caf7dcdd696ef5 extends Template
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
            'extrafooter' => [$this, 'block_extrafooter'],
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/shadow_differences.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/shadow_differences.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/shadow_differences.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/shadow_differences.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/shadow_differences.html.twig", 1);
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

        echo "Shadow differences - ";
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
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
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
    <h1>Shadow differences</h1>";
        // line 16
        if (twig_test_empty((isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "        <div class=\"alert alert-danger\">No active contest</div>";
        } else {
            // line 19
            echo "        <div data-shadow-matrix>
            ";
            // line 20
            $this->loadTemplate("jury/partials/shadow_matrix.html.twig", "jury/shadow_differences.html.twig", 20)->display($context);
            // line 21
            echo "        </div>

        <h2 class=\"mt-4\">Details</h2>

        Show submissions:
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
                // line 28
                echo "
                <label class=\"btn btn-secondary ";
                // line 29
                if (($context["idx"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 29, $this->source); })()))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"
                           ";
                // line 31
                if (($context["idx"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 31, $this->source); })()))) {
                    echo "checked";
                }
                echo "> ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "
                </label>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </div>
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["verificationViewTypes"]) || array_key_exists("verificationViewTypes", $context) ? $context["verificationViewTypes"] : (function () { throw new RuntimeError('Variable "verificationViewTypes" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["idx"] => $context["type"]) {
                // line 37
                echo "
                <label class=\"btn btn-secondary ";
                // line 38
                if (($context["idx"] == (isset($context["verificationView"]) || array_key_exists("verificationView", $context) ? $context["verificationView"] : (function () { throw new RuntimeError('Variable "verificationView" does not exist.', 38, $this->source); })()))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"verificationviewtype\" autocomplete=\"off\" value=\"";
                // line 39
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"
                           ";
                // line 40
                if (($context["idx"] == (isset($context["verificationView"]) || array_key_exists("verificationView", $context) ? $context["verificationView"] : (function () { throw new RuntimeError('Variable "verificationView" does not exist.', 40, $this->source); })()))) {
                    echo "checked";
                }
                echo "> ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "
                </label>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </div>

        <form action=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
            echo "\" method=\"get\">
            <input type=\"hidden\" name=\"view\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 46, $this->source); })()), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 46, $this->source); })()), [], "array", false, false, false, 46), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"verificationview\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["verificationViewTypes"]) || array_key_exists("verificationViewTypes", $context) ? $context["verificationViewTypes"] : (function () { throw new RuntimeError('Variable "verificationViewTypes" does not exist.', 47, $this->source); })()), (isset($context["verificationView"]) || array_key_exists("verificationView", $context) ? $context["verificationView"] : (function () { throw new RuntimeError('Variable "verificationView" does not exist.', 47, $this->source); })()), [], "array", false, false, false, 47), "html", null, true);
            echo "\"/>
            <div class=\"form-row\">
                <div class=\"form-group col-md-4\">
                    <label for=\"oldverdict\">External verdict</label>
                    <select style=\"width: 100%\" class=\"select2 form-control\" name=\"external\"
                            id=\"external\">
                        <option value=\"all\" ";
            // line 53
            if (((isset($context["external"]) || array_key_exists("external", $context) ? $context["external"] : (function () { throw new RuntimeError('Variable "external" does not exist.', 53, $this->source); })()) == "all")) {
                echo "selected";
            }
            echo ">all</option>";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["verdicts"]) || array_key_exists("verdicts", $context) ? $context["verdicts"] : (function () { throw new RuntimeError('Variable "verdicts" does not exist.', 54, $this->source); })()));
            foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
                // line 55
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo "\"
                                    ";
                // line 56
                if (((isset($context["external"]) || array_key_exists("external", $context) ? $context["external"] : (function () { throw new RuntimeError('Variable "external" does not exist.', 56, $this->source); })()) == $context["verdict"])) {
                    echo "selected";
                }
                echo ">
                                ";
                // line 57
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo "
                            </option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "
                    </select>
                </div>
                <div class=\"form-group col-md-4\">
                    <label for=\"newverdict\">Local verdict</label>
                    <select style=\"width: 100%\" class=\"select2 form-control\" name=\"local\" id=\"local\">
                        <option value=\"all\" ";
            // line 66
            if (((isset($context["local"]) || array_key_exists("local", $context) ? $context["local"] : (function () { throw new RuntimeError('Variable "local" does not exist.', 66, $this->source); })()) == "all")) {
                echo "selected";
            }
            echo ">all</option>";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["verdicts"]) || array_key_exists("verdicts", $context) ? $context["verdicts"] : (function () { throw new RuntimeError('Variable "verdicts" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["verdict"] => $context["abbreviation"]) {
                // line 68
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo "\" ";
                if (((isset($context["local"]) || array_key_exists("local", $context) ? $context["local"] : (function () { throw new RuntimeError('Variable "local" does not exist.', 68, $this->source); })()) == $context["verdict"])) {
                    echo "selected";
                }
                echo ">
                                ";
                // line 69
                echo twig_escape_filter($this->env, $context["verdict"], "html", null, true);
                echo "
                            </option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['verdict'], $context['abbreviation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "
                    </select>
                </div>
                <div class=\"form-group col-md-2\">
                    <label>&nbsp;</label>
                    <input class=\"btn btn-primary form-control\" type=\"submit\" value=\"Filter\"/>
                </div>
                <div class=\"form-group col-md-2\">
                    <label>&nbsp;</label>
                    <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => twig_get_attribute($this->env, $this->source, (isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 81, $this->source); })()), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 81, $this->source); })()), [], "array", false, false, false, 81), "verificationview" => twig_get_attribute($this->env, $this->source, (isset($context["verificationViewTypes"]) || array_key_exists("verificationViewTypes", $context) ? $context["verificationViewTypes"] : (function () { throw new RuntimeError('Variable "verificationViewTypes" does not exist.', 81, $this->source); })()), (isset($context["verificationView"]) || array_key_exists("verificationView", $context) ? $context["verificationView"] : (function () { throw new RuntimeError('Variable "verificationView" does not exist.', 81, $this->source); })()), [], "array", false, false, false, 81)]), "html", null, true);
            echo "\"
                       class=\"btn btn-secondary form-control\">Clear</a>
                </div>
            </div>
        </form>

        <div data-ajax-refresh-target data-ajax-refresh-after=\"updateMatrix\">
            ";
            // line 88
            $this->loadTemplate("jury/partials/shadow_submissions.html.twig", "jury/shadow_differences.html.twig", 88)->display($context);
            // line 89
            echo "        </div>
    ";
        }
        // line 91
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 94
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 95
        if ( !twig_test_empty((isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 95, $this->source); })()))) {
            // line 96
            echo "        <script>
            \$(function () {
                \$('input[name=viewtype]').on('change', function () {
                    window.location = '";
            // line 99
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => "REPLACE_ME", "verificationview" => twig_get_attribute($this->env, $this->source, (isset($context["verificationViewTypes"]) || array_key_exists("verificationViewTypes", $context) ? $context["verificationViewTypes"] : (function () { throw new RuntimeError('Variable "verificationViewTypes" does not exist.', 99, $this->source); })()), (isset($context["verificationView"]) || array_key_exists("verificationView", $context) ? $context["verificationView"] : (function () { throw new RuntimeError('Variable "verificationView" does not exist.', 99, $this->source); })()), [], "array", false, false, false, 99), "external" => (isset($context["external"]) || array_key_exists("external", $context) ? $context["external"] : (function () { throw new RuntimeError('Variable "external" does not exist.', 99, $this->source); })()), "local" => (isset($context["local"]) || array_key_exists("local", $context) ? $context["local"] : (function () { throw new RuntimeError('Variable "local" does not exist.', 99, $this->source); })())]), "js"), "html", null, true);
            echo "'.replace('REPLACE_ME', \$(this).val());
                });
                \$('input[name=verificationviewtype]').on('change', function () {
                    window.location = '";
            // line 102
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences", ["view" => twig_get_attribute($this->env, $this->source, (isset($context["viewTypes"]) || array_key_exists("viewTypes", $context) ? $context["viewTypes"] : (function () { throw new RuntimeError('Variable "viewTypes" does not exist.', 102, $this->source); })()), (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 102, $this->source); })()), [], "array", false, false, false, 102), "verificationview" => "REPLACE_ME", "external" => (isset($context["external"]) || array_key_exists("external", $context) ? $context["external"] : (function () { throw new RuntimeError('Variable "external" does not exist.', 102, $this->source); })()), "local" => (isset($context["local"]) || array_key_exists("local", $context) ? $context["local"] : (function () { throw new RuntimeError('Variable "local" does not exist.', 102, $this->source); })())]), "js"), "html", null, true);
            echo "'.replace('REPLACE_ME', \$(this).val());
                });

                \$('.select2').select2();

                window.updateMatrix = function () {
                    var \$matrixData = \$('[data-new-shadow-matrix]');
                    var \$matrix = \$('[data-shadow-matrix]');
                    \$matrix.html(\$matrixData.children());
                }
            });
        </script>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/shadow_differences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 102,  371 => 99,  366 => 96,  364 => 95,  351 => 94,  337 => 91,  333 => 89,  331 => 88,  321 => 81,  310 => 72,  302 => 69,  293 => 68,  289 => 67,  284 => 66,  276 => 60,  268 => 57,  262 => 56,  257 => 55,  253 => 54,  248 => 53,  239 => 47,  235 => 46,  231 => 45,  227 => 43,  215 => 40,  211 => 39,  205 => 38,  202 => 37,  198 => 36,  195 => 34,  183 => 31,  179 => 30,  173 => 29,  170 => 28,  166 => 27,  159 => 21,  157 => 20,  154 => 19,  151 => 17,  149 => 16,  146 => 13,  133 => 12,  118 => 9,  114 => 8,  109 => 7,  96 => 6,  70 => 4,  56 => 1,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Shadow differences - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
    {{ macros.select2_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Shadow differences</h1>

    {%- if current_contests is empty %}
        <div class=\"alert alert-danger\">No active contest</div>
    {%- else %}
        <div data-shadow-matrix>
            {% include 'jury/partials/shadow_matrix.html.twig' %}
        </div>

        <h2 class=\"mt-4\">Details</h2>

        Show submissions:
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
            {%- for idx, type in viewTypes %}

                <label class=\"btn btn-secondary {% if idx == view %}active{% endif %}\">
                    <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"{{ type }}\"
                           {% if idx == view %}checked{% endif %}> {{ type }}
                </label>
            {%- endfor %}
        </div>
        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
            {%- for idx, type in verificationViewTypes %}

                <label class=\"btn btn-secondary {% if idx == verificationView %}active{% endif %}\">
                    <input type=\"radio\" name=\"verificationviewtype\" autocomplete=\"off\" value=\"{{ type }}\"
                           {% if idx == verificationView %}checked{% endif %}> {{ type }}
                </label>
            {%- endfor %}
        </div>

        <form action=\"{{ path('jury_shadow_differences') }}\" method=\"get\">
            <input type=\"hidden\" name=\"view\" value=\"{{ viewTypes[view] }}\"/>
            <input type=\"hidden\" name=\"verificationview\" value=\"{{ verificationViewTypes[verificationView] }}\"/>
            <div class=\"form-row\">
                <div class=\"form-group col-md-4\">
                    <label for=\"oldverdict\">External verdict</label>
                    <select style=\"width: 100%\" class=\"select2 form-control\" name=\"external\"
                            id=\"external\">
                        <option value=\"all\" {% if external == 'all' %}selected{% endif %}>all</option>
                        {%- for verdict, abbreviation in verdicts %}
                            <option value=\"{{ verdict }}\"
                                    {% if external == verdict %}selected{% endif %}>
                                {{ verdict }}
                            </option>
                        {%- endfor %}

                    </select>
                </div>
                <div class=\"form-group col-md-4\">
                    <label for=\"newverdict\">Local verdict</label>
                    <select style=\"width: 100%\" class=\"select2 form-control\" name=\"local\" id=\"local\">
                        <option value=\"all\" {% if local == 'all' %}selected{% endif %}>all</option>
                        {%- for verdict, abbreviation in verdicts %}
                            <option value=\"{{ verdict }}\" {% if local == verdict %}selected{% endif %}>
                                {{ verdict }}
                            </option>
                        {%- endfor %}

                    </select>
                </div>
                <div class=\"form-group col-md-2\">
                    <label>&nbsp;</label>
                    <input class=\"btn btn-primary form-control\" type=\"submit\" value=\"Filter\"/>
                </div>
                <div class=\"form-group col-md-2\">
                    <label>&nbsp;</label>
                    <a href=\"{{ path('jury_shadow_differences', {view: viewTypes[view], verificationview: verificationViewTypes[verificationView]}) }}\"
                       class=\"btn btn-secondary form-control\">Clear</a>
                </div>
            </div>
        </form>

        <div data-ajax-refresh-target data-ajax-refresh-after=\"updateMatrix\">
            {% include 'jury/partials/shadow_submissions.html.twig' %}
        </div>
    {% endif %}

{% endblock %}

{% block extrafooter %}
    {%- if current_contests is not empty %}
        <script>
            \$(function () {
                \$('input[name=viewtype]').on('change', function () {
                    window.location = '{{ path('jury_shadow_differences', {view: 'REPLACE_ME', verificationview: verificationViewTypes[verificationView], external: external, local: local}) | escape('js') }}'.replace('REPLACE_ME', \$(this).val());
                });
                \$('input[name=verificationviewtype]').on('change', function () {
                    window.location = '{{ path('jury_shadow_differences', {view: viewTypes[view], verificationview: 'REPLACE_ME', external: external, local: local}) | escape('js') }}'.replace('REPLACE_ME', \$(this).val());
                });

                \$('.select2').select2();

                window.updateMatrix = function () {
                    var \$matrixData = \$('[data-new-shadow-matrix]');
                    var \$matrix = \$('[data-shadow-matrix]');
                    \$matrix.html(\$matrixData.children());
                }
            });
        </script>
    {% endif %}
{% endblock %}
", "jury/shadow_differences.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/shadow_differences.html.twig");
    }
}
