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

/* jury/partials/contest_form.html.twig */
class __TwigTemplate_b1a1d9cc4be4cf57688359f77b95d8a3 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/contest_form.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/contest_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/contest_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"row\">
    <div class=\"col-lg-4\">

        ";
        // line 6
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'errors');
        echo "

        ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "offsetExists", [0 => "externalid"], "method", false, false, false, 8)) {
            // line 9
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "externalid", [], "any", false, false, false, 9), 'row');
            echo "
        ";
        }
        // line 11
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "shortname", [], "any", false, false, false, 11), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "activatetimeString", [], "any", false, false, false, 13), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "starttimeString", [], "any", false, false, false, 14), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "starttimeEnabled", [], "any", false, false, false, 15), 'row');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "freezetimeString", [], "any", false, false, false, 16), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "endtimeString", [], "any", false, false, false, 17), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "unfreezetimeString", [], "any", false, false, false, 18), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "deactivatetimeString", [], "any", false, false, false, 19), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "allowSubmit", [], "any", false, false, false, 20), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "processBalloons", [], "any", false, false, false, 21), 'row');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "medalsEnabled", [], "any", false, false, false, 22), 'row');
        echo "
        <div data-medals-field>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "medalCategories", [], "any", false, false, false, 24), 'row');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "goldMedals", [], "any", false, false, false, 25), 'row');
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "silverMedals", [], "any", false, false, false, 26), 'row');
        echo "
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "bronzeMedals", [], "any", false, false, false, 27), 'row');
        echo "
        </div>
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "public", [], "any", false, false, false, 29), 'row');
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "openToAllTeams", [], "any", false, false, false, 30), 'row');
        echo "
        <div data-teams-field>
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "teams", [], "any", false, false, false, 32), 'row');
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "teamCategories", [], "any", false, false, false, 33), 'row');
        echo "
        </div>
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "enabled", [], "any", false, false, false, 35), 'row');
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "bannerFile", [], "any", false, false, false, 36), 'row');
        echo "
        ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "offsetExists", [0 => "clearBanner"], "method", false, false, false, 37)) {
            // line 38
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "clearBanner", [], "any", false, false, false, 38), 'row');
            echo "
        ";
        }
        // line 40
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "warningMessage", [], "any", false, false, false, 40), 'row');
        echo "
    </div>
    <div class=\"col-lg-6\">
        <h5>Specification of contest times</h5>
        <div>Each of the contest times can be specified as absolute time or relative
        to the start time (except for start time itself). Use up to 6 subsecond
        decimals and a timezone from the
        <a target=\"_blank\" href=\"https://en.wikipedia.org/wiki/List_of_tz_database_time_zones\">
            time zone database</a>.</div>
        <div class=\"mt-3\"><table>
        <tr><td>Absolute time format:</td><td><kbd>YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone</kbd></td></tr>
        <tr><td>Relative time format:</td><td><kbd>±[HHH]H:MM[:SS[.uuuuuu]]</kbd></td></tr>
        </table></div>
    </div>
</div>
<table class=\"table table-sm table-striped\">
    <thead>
    <tr>
        <th>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "problems", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "prototype", [], "any", false, false, false, 58), "problem", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "label", [], "any", false, false, false, 58), "html", null, true);
        echo "</th>
        <th>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "problems", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "prototype", [], "any", false, false, false, 59), "shortname", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59), "html", null, true);
        echo "</th>
        <th>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "problems", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "prototype", [], "any", false, false, false, 60), "points", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "label", [], "any", false, false, false, 60), "html", null, true);
        echo "</th>
        <th>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "problems", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "prototype", [], "any", false, false, false, 61), "allowSubmit", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "label", [], "any", false, false, false, 61), "html", null, true);
        echo "</th>
        <th>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "problems", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "prototype", [], "any", false, false, false, 62), "allowJudge", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "label", [], "any", false, false, false, 62), "html", null, true);
        echo "</th>
        <th>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "problems", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "prototype", [], "any", false, false, false, 63), "color", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "label", [], "any", false, false, false, 63), "html", null, true);
        echo "</th>
        <th>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "problems", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "prototype", [], "any", false, false, false, 64), "lazyEvalResults", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "label", [], "any", false, false, false, 64), "html", null, true);
        echo "</th>
        <th></th>
    </tr>
    </thead>
    <tbody data-collection-holder data-after-add=\"bindColor\">
    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "problems", [], "any", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 70
            echo "        <tr>
            <td>
                ";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 72), 'errors');
            echo "
                ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 73), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 76), 'errors');
            echo "
                ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 77), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 80), 'errors');
            echo "
                ";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 81), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "allowSubmit", [], "any", false, false, false, 84), 'errors');
            echo "
                ";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "allowSubmit", [], "any", false, false, false, 85), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "allowJudge", [], "any", false, false, false, 88), 'errors');
            echo "
                ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "allowJudge", [], "any", false, false, false, 89), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 92), 'errors');
            echo "
                ";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 93), 'widget');
            echo "
            </td>
            <td>
                ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 96), 'errors');
            echo "
                ";
            // line 97
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["problem"], "lazyEvalResults", [], "any", false, false, false, 97), 'widget');
            echo "
            </td>
            <td>
                <button type=\"button\" data-delete class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </tbody>
    <tfoot>
    <tr>
        <td colspan=\"7\"></td>
        <td>
            <button type=\"button\" data-add class=\"btn btn-success\"><i class=\"fas fa-plus\"></i></button>
        </td>
    </tr>
    </tfoot>
</table>

<script type=\"text/html\" data-prototype>
    <tr>
        <td>";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "problems", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "prototype", [], "any", false, false, false, 117), "problem", [], "any", false, false, false, 117), 'widget');
        echo "</td>
        <td>";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "problems", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "prototype", [], "any", false, false, false, 118), "shortname", [], "any", false, false, false, 118), 'widget');
        echo "</td>
        <td>";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "problems", [], "any", false, false, false, 119), "vars", [], "any", false, false, false, 119), "prototype", [], "any", false, false, false, 119), "points", [], "any", false, false, false, 119), 'widget');
        echo "</td>
        <td>";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "problems", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "prototype", [], "any", false, false, false, 120), "allowSubmit", [], "any", false, false, false, 120), 'widget');
        echo "</td>
        <td>";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "problems", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "prototype", [], "any", false, false, false, 121), "allowJudge", [], "any", false, false, false, 121), 'widget');
        echo "</td>
        <td>";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "problems", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "prototype", [], "any", false, false, false, 122), "color", [], "any", false, false, false, 122), 'widget');
        echo "</td>
        <td>";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "problems", [], "any", false, false, false, 123), "vars", [], "any", false, false, false, 123), "prototype", [], "any", false, false, false, 123), "lazyEvalResults", [], "any", false, false, false, 123), 'widget');
        echo "</td>
        <td>
            <button type=\"button\" data-delete class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
        </td>
    </tr>
</script>

";
        // line 130
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), 'form_end');
        echo "

<script>
    \$(function () {
        function showHideTeams() {
            if (\$('#contest_openToAllTeams_1').is(':checked')) {
                \$('[data-teams-field]').show();
            } else {
                \$('[data-teams-field]').hide();
            }
        }

        \$('#contest_openToAllTeams_1, #contest_openToAllTeams_0').on('change', showHideTeams);
        showHideTeams();

        function showHideMedals() {
            if (\$('#contest_medalsEnabled_0').is(':checked')) {
                \$('[data-medals-field]').show();
            } else {
                \$('[data-medals-field]').hide();
            }
        }

        \$('#contest_medalsEnabled_1, #contest_medalsEnabled_0').on('change', showHideMedals);
        showHideMedals();
    })
</script>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/contest_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 130,  346 => 123,  342 => 122,  338 => 121,  334 => 120,  330 => 119,  326 => 118,  322 => 117,  307 => 104,  294 => 97,  290 => 96,  284 => 93,  280 => 92,  274 => 89,  270 => 88,  264 => 85,  260 => 84,  254 => 81,  250 => 80,  244 => 77,  240 => 76,  234 => 73,  230 => 72,  226 => 70,  222 => 69,  214 => 64,  210 => 63,  206 => 62,  202 => 61,  198 => 60,  194 => 59,  190 => 58,  168 => 40,  162 => 38,  160 => 37,  156 => 36,  152 => 35,  147 => 33,  143 => 32,  138 => 30,  134 => 29,  129 => 27,  125 => 26,  121 => 25,  117 => 24,  112 => 22,  108 => 21,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  67 => 11,  61 => 9,  59 => 8,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<div class=\"row\">
    <div class=\"col-lg-4\">

        {# These are the errors related to removed intervals #}
        {{ form_errors(form) }}

        {% if form.offsetExists('externalid') %}
            {{ form_row(form.externalid) }}
        {% endif %}
        {{ form_row(form.shortname) }}
        {{ form_row(form.name) }}
        {{ form_row(form.activatetimeString) }}
        {{ form_row(form.starttimeString) }}
        {{ form_row(form.starttimeEnabled) }}
        {{ form_row(form.freezetimeString) }}
        {{ form_row(form.endtimeString) }}
        {{ form_row(form.unfreezetimeString) }}
        {{ form_row(form.deactivatetimeString) }}
        {{ form_row(form.allowSubmit) }}
        {{ form_row(form.processBalloons) }}
        {{ form_row(form.medalsEnabled) }}
        <div data-medals-field>
            {{ form_row(form.medalCategories) }}
            {{ form_row(form.goldMedals) }}
            {{ form_row(form.silverMedals) }}
            {{ form_row(form.bronzeMedals) }}
        </div>
        {{ form_row(form.public) }}
        {{ form_row(form.openToAllTeams) }}
        <div data-teams-field>
            {{ form_row(form.teams) }}
            {{ form_row(form.teamCategories) }}
        </div>
        {{ form_row(form.enabled) }}
        {{ form_row(form.bannerFile) }}
        {% if form.offsetExists('clearBanner') %}
            {{ form_row(form.clearBanner) }}
        {% endif %}
        {{ form_row(form.warningMessage) }}
    </div>
    <div class=\"col-lg-6\">
        <h5>Specification of contest times</h5>
        <div>Each of the contest times can be specified as absolute time or relative
        to the start time (except for start time itself). Use up to 6 subsecond
        decimals and a timezone from the
        <a target=\"_blank\" href=\"https://en.wikipedia.org/wiki/List_of_tz_database_time_zones\">
            time zone database</a>.</div>
        <div class=\"mt-3\"><table>
        <tr><td>Absolute time format:</td><td><kbd>YYYY-MM-DD HH:MM:SS[.uuuuuu] timezone</kbd></td></tr>
        <tr><td>Relative time format:</td><td><kbd>±[HHH]H:MM[:SS[.uuuuuu]]</kbd></td></tr>
        </table></div>
    </div>
</div>
<table class=\"table table-sm table-striped\">
    <thead>
    <tr>
        <th>{{ form.problems.vars.prototype.problem.vars.label }}</th>
        <th>{{ form.problems.vars.prototype.shortname.vars.label }}</th>
        <th>{{ form.problems.vars.prototype.points.vars.label }}</th>
        <th>{{ form.problems.vars.prototype.allowSubmit.vars.label }}</th>
        <th>{{ form.problems.vars.prototype.allowJudge.vars.label }}</th>
        <th>{{ form.problems.vars.prototype.color.vars.label }}</th>
        <th>{{ form.problems.vars.prototype.lazyEvalResults.vars.label }}</th>
        <th></th>
    </tr>
    </thead>
    <tbody data-collection-holder data-after-add=\"bindColor\">
    {% for problem in form.problems %}
        <tr>
            <td>
                {{ form_errors(problem.problem) }}
                {{ form_widget(problem.problem) }}
            </td>
            <td>
                {{ form_errors(problem.shortname) }}
                {{ form_widget(problem.shortname) }}
            </td>
            <td>
                {{ form_errors(problem.points) }}
                {{ form_widget(problem.points) }}
            </td>
            <td>
                {{ form_errors(problem.allowSubmit) }}
                {{ form_widget(problem.allowSubmit) }}
            </td>
            <td>
                {{ form_errors(problem.allowJudge) }}
                {{ form_widget(problem.allowJudge) }}
            </td>
            <td>
                {{ form_errors(problem.color) }}
                {{ form_widget(problem.color) }}
            </td>
            <td>
                {{ form_errors(problem.lazyEvalResults) }}
                {{ form_widget(problem.lazyEvalResults) }}
            </td>
            <td>
                <button type=\"button\" data-delete class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
            </td>
        </tr>
    {% endfor %}
    </tbody>
    <tfoot>
    <tr>
        <td colspan=\"7\"></td>
        <td>
            <button type=\"button\" data-add class=\"btn btn-success\"><i class=\"fas fa-plus\"></i></button>
        </td>
    </tr>
    </tfoot>
</table>

<script type=\"text/html\" data-prototype>
    <tr>
        <td>{{ form_widget(form.problems.vars.prototype.problem) }}</td>
        <td>{{ form_widget(form.problems.vars.prototype.shortname) }}</td>
        <td>{{ form_widget(form.problems.vars.prototype.points) }}</td>
        <td>{{ form_widget(form.problems.vars.prototype.allowSubmit) }}</td>
        <td>{{ form_widget(form.problems.vars.prototype.allowJudge) }}</td>
        <td>{{ form_widget(form.problems.vars.prototype.color) }}</td>
        <td>{{ form_widget(form.problems.vars.prototype.lazyEvalResults) }}</td>
        <td>
            <button type=\"button\" data-delete class=\"btn btn-danger\"><i class=\"fas fa-trash-alt\"></i></button>
        </td>
    </tr>
</script>

{{ form_end(form) }}

<script>
    \$(function () {
        function showHideTeams() {
            if (\$('#contest_openToAllTeams_1').is(':checked')) {
                \$('[data-teams-field]').show();
            } else {
                \$('[data-teams-field]').hide();
            }
        }

        \$('#contest_openToAllTeams_1, #contest_openToAllTeams_0').on('change', showHideTeams);
        showHideTeams();

        function showHideMedals() {
            if (\$('#contest_medalsEnabled_0').is(':checked')) {
                \$('[data-medals-field]').show();
            } else {
                \$('[data-medals-field]').hide();
            }
        }

        \$('#contest_medalsEnabled_1, #contest_medalsEnabled_0').on('change', showHideMedals);
        showHideMedals();
    })
</script>
", "jury/partials/contest_form.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/contest_form.html.twig");
    }
}
