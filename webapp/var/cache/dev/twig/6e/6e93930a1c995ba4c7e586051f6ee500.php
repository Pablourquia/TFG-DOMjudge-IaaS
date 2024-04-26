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

/* jury/language.html.twig */
class __TwigTemplate_c2ab0f2c0c17759d6ea5e8ccdba9ef2d extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/language.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/language.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/language.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/language.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/language.html.twig", 1);
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

        echo "Language ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 4, $this->source); })()), "langid", [], "any", false, false, false, 4), "html", null, true);
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
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_toggle_extrahead", [], 9, $context, $this->getSourceContext());
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
    <h1>Language ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID/extension</th>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 21, $this->source); })()), "langid", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 23
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 26, $this->source); })()), "externalid", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 29
        echo "                <tr>
                    <th>Entry point</th>
                    <td>
                        ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 32, $this->source); })()), "requireEntryPoint", [], "any", false, false, false, 32)), "html", null, true);
        echo "
                        ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 33, $this->source); })()), "requireEntryPoint", [], "any", false, false, false, 33) && twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 33, $this->source); })()), "entryPointDescription", [], "any", false, false, false, 33))) {
            // line 34
            echo "                            (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 34, $this->source); })()), "entryPointDescription", [], "any", false, false, false, 34), "html", null, true);
            echo ")
                        ";
        }
        // line 36
        echo "                    </td>
                </tr>
                <tr>
                    <th>Allow submit</th>
                    <td>
                        <form action=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_toggle_submit", ["langId" => twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 41, $this->source); })()), "langid", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                            <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\" data-off=\"No\"
                                   name=\"allow_submit\" ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 43, $this->source); })()), "allowSubmit", [], "any", false, false, false, 43)) {
            echo "checked";
        }
        echo ">
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Allow judge</th>
                    <td>
                        <form action=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_toggle_judge", ["langId" => twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 50, $this->source); })()), "langid", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\" method=\"post\" class=\"d-inline\">
                            <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\" data-off=\"No\"
                                   name=\"allow_judge\" ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 52, $this->source); })()), "allowJudge", [], "any", false, false, false, 52)) {
            echo "checked";
        }
        echo ">
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Time factor</th>
                    <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 58, $this->source); })()), "timeFactor", [], "any", false, false, false, 58), "html", null, true);
        echo " &times;</td>
                </tr>
                <tr>
                    <th>Compile script</th>
                    <td>
                        ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 63, $this->source); })()), "compileExecutable", [], "any", false, false, false, 63)) {
            // line 64
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 64, $this->source); })()), "compileExecutable", [], "any", false, false, false, 64), "execid", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 64, $this->source); })()), "compileExecutable", [], "any", false, false, false, 64), "execid", [], "any", false, false, false, 64), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 66
            echo "                            <span class=\"nodata\">none specified</span>
                        ";
        }
        // line 68
        echo "                    </td>
                </tr>
                <tr>
                    <th>Extensions</th>
                    <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 72, $this->source); })()), "extensions", [], "any", false, false, false, 72), ", "), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Filter files passed to compiler by extension list</th>
                    <td>
                        ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 77, $this->source); })()), "filterCompilerFiles", [], "any", false, false, false, 77)), "html", null, true);
        echo "
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"button-row\">";
        // line 85
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 86
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_edit", ["langId" => twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 86, $this->source); })()), "langid", [], "any", false, false, false, 86)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 87
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_delete", ["langId" => twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 87, $this->source); })()), "langid", [], "any", false, false, false, 87)]), "Delete", "danger", "trash-alt", true);
            echo "
            ";
            // line 88
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language_request_remaining", ["langId" => twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 88, $this->source); })()), "langid", [], "any", false, false, false, 88)]), "Judge remaining testcases", "secondary", "gavel");
            echo "
        ";
        }
        // line 90
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/language.html.twig", 90)->display(twig_array_merge($context, ["table" => "language", "id" => twig_get_attribute($this->env, $this->source, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 90, $this->source); })()), "langid", [], "any", false, false, false, 90), "buttonClass" => "btn-secondary"]));
        // line 91
        echo "    </div>

    <h3>Recent submissions</h3>

    <div data-ajax-refresh-target>";
        // line 96
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/language.html.twig", 96)->display(twig_array_merge($context, ["showTestcases" => false]));
        // line 97
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 101
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 102
        echo "    ";
        echo twig_call_macro($macros["macros"], "macro_toggle_autosubmit_extrafooter", [], 102, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 102,  322 => 101,  307 => 97,  305 => 96,  299 => 91,  296 => 90,  291 => 88,  287 => 87,  283 => 86,  281 => 85,  271 => 77,  263 => 72,  257 => 68,  253 => 66,  245 => 64,  243 => 63,  235 => 58,  224 => 52,  219 => 50,  207 => 43,  202 => 41,  195 => 36,  189 => 34,  187 => 33,  183 => 32,  178 => 29,  172 => 26,  168 => 24,  166 => 23,  161 => 21,  151 => 14,  148 => 13,  135 => 12,  120 => 9,  116 => 8,  111 => 7,  98 => 6,  70 => 4,  56 => 1,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Language {{ language.langid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
    {{ macros.toggle_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Language {{ language.name }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID/extension</th>
                    <td>{{ language.langid }}</td>
                </tr>
                {% if showExternalId(language) %}
                    <tr>
                        <th>External ID</th>
                        <td>{{ language.externalid }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Entry point</th>
                    <td>
                        {{ language.requireEntryPoint | printYesNo }}
                        {% if language.requireEntryPoint and language.entryPointDescription %}
                            ({{ language.entryPointDescription }})
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Allow submit</th>
                    <td>
                        <form action=\"{{ path('jury_language_toggle_submit', {'langId': language.langid}) }}\" method=\"post\" class=\"d-inline\">
                            <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\" data-off=\"No\"
                                   name=\"allow_submit\" {% if language.allowSubmit %}checked{% endif %}>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Allow judge</th>
                    <td>
                        <form action=\"{{ path('jury_language_toggle_judge', {'langId': language.langid}) }}\" method=\"post\" class=\"d-inline\">
                            <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\" data-off=\"No\"
                                   name=\"allow_judge\" {% if language.allowJudge %}checked{% endif %}>
                        </form>
                    </td>
                </tr>
                <tr>
                    <th>Time factor</th>
                    <td>{{ language.timeFactor }} &times;</td>
                </tr>
                <tr>
                    <th>Compile script</th>
                    <td>
                        {% if language.compileExecutable %}
                            <a href=\"{{ path('jury_executable', {'execId': language.compileExecutable.execid}) }}\">{{ language.compileExecutable.execid }}</a>
                        {% else %}
                            <span class=\"nodata\">none specified</span>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Extensions</th>
                    <td>{{ language.extensions | join(', ') }}</td>
                </tr>
                <tr>
                    <th>Filter files passed to compiler by extension list</th>
                    <td>
                        {{ language.filterCompilerFiles | printYesNo }}
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"button-row\">
        {%- if is_granted('ROLE_ADMIN') -%}
            {{ button(path('jury_language_edit', {'langId': language.langid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_language_delete', {'langId': language.langid}), 'Delete', 'danger', 'trash-alt', true) }}
            {{ button(path('jury_language_request_remaining', {'langId': language.langid}), 'Judge remaining testcases', 'secondary', 'gavel') }}
        {% endif %}
        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'language', id: language.langid, buttonClass: 'btn-secondary'} %}
    </div>

    <h3>Recent submissions</h3>

    <div data-ajax-refresh-target>
        {%- include 'jury/partials/submission_list.html.twig' with {showTestcases: false} %}
    </div>

{% endblock %}

{% block extrafooter %}
    {{ macros.toggle_autosubmit_extrafooter() }}
{% endblock %}
", "jury/language.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/language.html.twig");
    }
}
