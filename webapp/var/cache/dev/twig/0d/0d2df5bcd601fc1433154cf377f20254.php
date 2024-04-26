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

/* jury/config.html.twig */
class __TwigTemplate_c578cf5eea4ef980ad2b281b749aeacb extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/config.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/config.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/config.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/config.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/config.html.twig", 1);
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

        echo "Configuration - ";
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
        echo twig_call_macro($macros["macros"], "macro_toggle_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
    ";
        // line 9
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 9, $context, $this->getSourceContext());
        echo "
    <style>
        .btn.toggle-on {
            right: initial;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <h1>Configuration</h1>

    <form method=\"post\">
        <ul class=\"nav nav-pills nav-fill\" id=\"configtablist\" role=\"tablist\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 23
            echo "                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link ";
            // line 24
            echo (((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24) == "Scoring")) ? ("active") : (""));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24), [" " => ""]), "html", null, true);
            echo "-tab\" data-toggle=\"tab\" href=\"#";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24), [" " => ""]), "html", null, true);
            echo "\" role=\"tab\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </ul>

        <div class=\"tab-content mb-2\" id=\"configtab\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "            <div class=\"tab-pane fade ";
            echo (((twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31) == "Scoring")) ? ("show active") : (""));
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31), [" " => ""]), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31), [" " => ""]), "html", null, true);
            echo "-tab\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <ul class=\"list-group list-group-flush\">
                            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "data", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 36
                echo "                                <li class=\"list-group-item\" style=\"padding:0;padding-top:10px;\">
                                    <div class=\"form-group\">
                                        <label
                                        ";
                // line 39
                if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 39), [0 => "int", 1 => "string", 2 => "bool"]) || ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 39) == "array_val") &&  !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 39))))) {
                    // line 40
                    echo "                                            for=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 40), "html", null, true);
                    echo "\"
                                            ";
                    // line 41
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 41) == "bool")) {
                        echo " onclick=\"\$('#config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 41), "html", null, true);
                        echo "').bootstrapToggle('toggle')\"";
                    }
                    // line 42
                    echo "                                        ";
                }
                // line 43
                echo "                                        >";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 43), ["_" => " "])), "html", null, true);
                echo ":</label>
                                        ";
                // line 44
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 44) == "bool")) {
                    // line 45
                    echo "                                            <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\"
                                                   data-off=\"No\"
                                                   name=\"config_";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 47), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 47), "html", null, true);
                    echo "\"
                                                ";
                    // line 48
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 48) == 1)) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
                                            <br/>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 50
$context["option"], "type", [], "any", false, false, false, 50) == "int")) {
                    // line 51
                    echo "                                            ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 51))) {
                        // line 52
                        echo "                                                <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                       style=\"margin-left:5px;width:15em;text-align:right;display:inline-block;\"
                                                       name=\"config_";
                        // line 54
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 54), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 54), "html", null, true);
                        echo "\">
                                                    ";
                        // line 55
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 55));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 56
                            echo "                                                        <option ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 56) == $context["value"])) {
                                echo "selected";
                            }
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 58
                        echo "                                                </select>
                                            ";
                    } else {
                        // line 60
                        echo "                                                <input class=\"form-control form-control-sm\"
                                                       style=\"margin-left:5px;width:7em;text-align:right;display:inline-block;\"
                                                       type=\"number\"
                                                       name=\"config_";
                        // line 63
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 63), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 63), "html", null, true);
                        echo "\"
                                                       value=\"";
                        // line 64
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 64), "html", null, true);
                        echo "\">
                                            ";
                    }
                    // line 66
                    echo "                                            <br/>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 67
$context["option"], "type", [], "any", false, false, false, 67) == "string")) {
                    // line 68
                    echo "                                            ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 68))) {
                        // line 69
                        echo "                                                <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                        style=\"width:30em;display: block;\"
                                                        name=\"config_";
                        // line 71
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 71), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 71), "html", null, true);
                        echo "\">
                                                    ";
                        // line 72
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 72));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 73
                            echo "                                                        <option ";
                            if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 73) == $context["value"])) {
                                echo "selected";
                            }
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 75
                        echo "                                                </select>
                                            ";
                    } else {
                        // line 77
                        echo "                                                <input class=\"form-control form-control-sm\" style=\"width:30em;\" type=\"text\"
                                                       name=\"config_";
                        // line 78
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 78), "html", null, true);
                        echo "\" id=\"config_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 78), "html", null, true);
                        echo "\"
                                                       value=\"";
                        // line 79
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 79), "html", null, true);
                        echo "\">
                                            ";
                    }
                    // line 81
                    echo "                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 81) == "array_keyval")) {
                    // line 82
                    echo "                                            <br/>
                                            <div data-collection>
                                                ";
                    // line 84
                    $context["counter"] = 0;
                    // line 85
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 85));
                    foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                        // line 86
                        echo "                                                    <div data-collection-item class=\"mb-2\">
                                                        ";
                        // line 87
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 87))) {
                            // line 88
                            echo "                                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                                    style=\"width:10em;text-align:right;display:inline-block;\"
                                                                    name=\"config_";
                            // line 90
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 90), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 90, $this->source); })()), "html", null, true);
                            echo "][key]\">
                                                                ";
                            // line 91
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 91));
                            foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                                // line 92
                                echo "                                                                    <option ";
                                if (($context["key"] == $context["value"])) {
                                    echo "selected";
                                }
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                                echo "\" label=\"";
                                echo twig_escape_filter($this->env, ((array_key_exists("label", $context)) ? (_twig_default_filter($context["label"], "empty option")) : ("empty option")), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                                echo "</option>
                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 94
                            echo "                                                            </select>
                                                        ";
                        } else {
                            // line 96
                            echo "                                                            <input class=\"form-control form-control-sm\"
                                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                                   value=\"";
                            // line 98
                            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                            echo "\"
                                                                   name=\"config_";
                            // line 99
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 99), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 99, $this->source); })()), "html", null, true);
                            echo "][key]\"
                                                                   id=\"config_";
                            // line 100
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 100), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 100, $this->source); })()), "html", null, true);
                            echo "__key_\">
                                                        ";
                        }
                        // line 102
                        echo "                                                        ";
                        if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 102))) {
                            // line 103
                            echo "                                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                                    style=\"width:30em;display:inline-block;\"
                                                                    name=\"config_";
                            // line 105
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 105), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 105, $this->source); })()), "html", null, true);
                            echo "][val]\">
                                                                ";
                            // line 106
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 106));
                            foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                                // line 107
                                echo "                                                                    <option ";
                                if (($context["val"] == $context["value"])) {
                                    echo "selected";
                                }
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                                echo "</option>
                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 109
                            echo "                                                            </select>
                                                        ";
                        } else {
                            // line 111
                            echo "                                                            <input class=\"form-control form-control-sm\"
                                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                                   value=\"";
                            // line 113
                            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                            echo "\"
                                                                   name=\"config_";
                            // line 114
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 114), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 114, $this->source); })()), "html", null, true);
                            echo "][val]\"
                                                                   id=\"config_";
                            // line 115
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 115), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 115, $this->source); })()), "html", null, true);
                            echo "__val\">
                                                            ";
                        }
                        // line 117
                        echo "                                                        ";
                        $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 117, $this->source); })()) + 1);
                        // line 118
                        echo "                                                    </div>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "                                                <script type=\"text/template\" data-index=\"";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 120, $this->source); })()), "html", null, true);
                    echo "\">
                                                    <div data-collection-item class=\"mb-2\">
                                                        ";
                    // line 122
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 122))) {
                        // line 123
                        echo "                                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                                    style=\"width:10em;text-align:right;display:inline-block;\"
                                                                    name=\"config_";
                        // line 125
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 125), "html", null, true);
                        echo "[__idx__][key]\">
                                                                ";
                        // line 126
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "key_options", [], "any", false, false, false, 126));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 127
                            echo "                                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 129
                        echo "                                                            </select>
                                                        ";
                    } else {
                        // line 131
                        echo "                                                            <input class=\"form-control form-control-sm\"
                                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                                   name=\"config_";
                        // line 133
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 133), "html", null, true);
                        echo "[__idx__][key]\"
                                                                   id=\"config_";
                        // line 134
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 134), "html", null, true);
                        echo "___idx____key_\">
                                                        ";
                    }
                    // line 136
                    echo "                                                        ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 136))) {
                        // line 137
                        echo "                                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                                    style=\"width:30em;display:inline-block;\"
                                                                    name=\"config_";
                        // line 139
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 139), "html", null, true);
                        echo "[__idx__][val]\">
                                                                ";
                        // line 140
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value_options", [], "any", false, false, false, 140));
                        foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                            // line 141
                            echo "                                                                    <option value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "</option>
                                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 143
                        echo "                                                            </select>
                                                        ";
                    } else {
                        // line 145
                        echo "                                                            <input class=\"form-control form-control-sm\"
                                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                                   name=\"config_";
                        // line 147
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 147), "html", null, true);
                        echo "[__idx__][val]\"
                                                                   id=\"config_";
                        // line 148
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 148), "html", null, true);
                        echo "___idx____val\">
                                                        ";
                    }
                    // line 150
                    echo "                                                    </div>
                                                </script>
                                            </div>
                                            <br/>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 154
$context["option"], "type", [], "any", false, false, false, 154) == "array_val")) {
                    // line 155
                    echo "                                            <br/>
                                                ";
                    // line 156
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 156))) {
                        // line 157
                        echo "                                                    <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                            style=\"width:30em;display:inline-block;\"
                                                            multiple
                                                            name=\"config_";
                        // line 160
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160), "html", null, true);
                        echo "[]\"
                                                            id=\"config_";
                        // line 161
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 161), "html", null, true);
                        echo "\">
                                                        ";
                        // line 162
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, false, 162));
                        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                            // line 163
                            echo "                                                            <option ";
                            if (twig_in_filter($context["value"], twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 163))) {
                                echo "selected";
                            }
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "</option>
                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 165
                        echo "                                                    </select>
                                                ";
                    } else {
                        // line 167
                        echo "                                                    <div data-collection>
                                                        ";
                        // line 168
                        $context["counter"] = 0;
                        // line 169
                        echo "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 169));
                        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                            // line 170
                            echo "                                                            <div data-collection-item class=\"mb-2\">
                                                                <input class=\"form-control form-control-sm\"
                                                                       style=\"width:30em;display:inline-block;\" type=\"text\"
                                                                       value=\"";
                            // line 173
                            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                            echo "\"
                                                                       name=\"config_";
                            // line 174
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 174), "html", null, true);
                            echo "[";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 174, $this->source); })()), "html", null, true);
                            echo "]\"
                                                                       id=\"config_";
                            // line 175
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 175), "html", null, true);
                            echo "_";
                            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 175, $this->source); })()), "html", null, true);
                            echo "_\">
                                                            </div>
                                                            ";
                            // line 177
                            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 177, $this->source); })()) + 1);
                            // line 178
                            echo "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 179
                        echo "                                                        <script type=\"text/template\" data-index=\"";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 179, $this->source); })()), "html", null, true);
                        echo "\">
                                                            <div data-collection-item class=\"mb-2\">
                                                                <input class=\"form-control form-control-sm\"
                                                                       style=\"width:30em;display:inline-block;\" type=\"text\"
                                                                       name=\"config_";
                        // line 183
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 183), "html", null, true);
                        echo "[__idx__]\"
                                                                       id=\"config_";
                        // line 184
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 184), "html", null, true);
                        echo "___idx___\">
                                                            </div>
                                                        </script>
                                                    </div>
                                                ";
                    }
                    // line 189
                    echo "                                        ";
                }
                // line 190
                echo "                                        <div class=\"small text-muted\">";
                echo $this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 190));
                echo "</div>
                                    </div>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "                        </ul>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "        </div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Save all changes\" id=\"save\" name=\"save\">
    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 204
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 205
        echo "    <script>
        \$(function () {
            function addDeleteLink(\$collectionItem) {
                var \$removeFormButton = \$('<button type=\"button\" class=\"btn btn-sm btn-danger\"><i class=\"fas fa-trash\"></i></button>');
                \$collectionItem.append(\$removeFormButton);

                \$removeFormButton.on('click', function(e) {
                    \$collectionItem.remove();
                });
            }

            function addCollectionItem(\$collection, \$addButton) {
                var \$template = \$('script[type=\"text/template\"]', \$collection);
                var template = \$template.text();
                var index = \$template.data('index');
                var newRow = template;
                newRow = newRow.replace(/__idx__/g, index);
                \$template.data('index', index + 1);
                var \$newRow = \$(newRow);
                \$addButton.before(\$newRow);
                addDeleteLink(\$newRow);
            }

            function addAddLink(\$collection) {
                var \$addButton = \$('<button type=\"button\" class=\"btn btn-sm btn-secondary\"><i class=\"fas fa-plus\"></i></button>');
                \$collection.append(\$addButton);

                \$addButton.on('click', function (e) {
                    addCollectionItem(\$collection, \$addButton);
                });
            }

            \$('[data-collection]').each(function() {
                var \$collection = \$(this);

                addAddLink(\$collection);

                \$('[data-collection-item]', \$collection).each(function() {
                    addDeleteLink(\$(this));
                })
            })
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  753 => 205,  740 => 204,  724 => 199,  714 => 194,  703 => 190,  700 => 189,  692 => 184,  688 => 183,  680 => 179,  674 => 178,  672 => 177,  665 => 175,  659 => 174,  655 => 173,  650 => 170,  645 => 169,  643 => 168,  640 => 167,  636 => 165,  621 => 163,  617 => 162,  613 => 161,  609 => 160,  604 => 157,  602 => 156,  599 => 155,  597 => 154,  591 => 150,  586 => 148,  582 => 147,  578 => 145,  574 => 143,  563 => 141,  559 => 140,  555 => 139,  551 => 137,  548 => 136,  543 => 134,  539 => 133,  535 => 131,  531 => 129,  520 => 127,  516 => 126,  512 => 125,  508 => 123,  506 => 122,  500 => 120,  493 => 118,  490 => 117,  483 => 115,  477 => 114,  473 => 113,  469 => 111,  465 => 109,  450 => 107,  446 => 106,  440 => 105,  436 => 103,  433 => 102,  426 => 100,  420 => 99,  416 => 98,  412 => 96,  408 => 94,  391 => 92,  387 => 91,  381 => 90,  377 => 88,  375 => 87,  372 => 86,  367 => 85,  365 => 84,  361 => 82,  358 => 81,  353 => 79,  347 => 78,  344 => 77,  340 => 75,  325 => 73,  321 => 72,  315 => 71,  311 => 69,  308 => 68,  306 => 67,  303 => 66,  298 => 64,  292 => 63,  287 => 60,  283 => 58,  268 => 56,  264 => 55,  258 => 54,  254 => 52,  251 => 51,  249 => 50,  242 => 48,  236 => 47,  232 => 45,  230 => 44,  225 => 43,  222 => 42,  216 => 41,  211 => 40,  209 => 39,  204 => 36,  200 => 35,  188 => 31,  184 => 30,  179 => 27,  164 => 24,  161 => 23,  157 => 22,  151 => 18,  138 => 17,  118 => 9,  114 => 8,  109 => 7,  96 => 6,  70 => 4,  56 => 1,  54 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Configuration - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.toggle_extrahead() }}
    {{ macros.select2_extrahead() }}
    <style>
        .btn.toggle-on {
            right: initial;
        }
    </style>
{% endblock %}

{% block content %}
    <h1>Configuration</h1>

    <form method=\"post\">
        <ul class=\"nav nav-pills nav-fill\" id=\"configtablist\" role=\"tablist\">
            {% for category in options %}
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link {{ (category.name == 'Scoring') ? 'active' : '' }}\" id=\"{{ category.name|replace({' ': ''}) }}-tab\" data-toggle=\"tab\" href=\"#{{ category.name|replace({' ': ''}) }}\" role=\"tab\">{{ category.name }}</a>
                </li>
            {% endfor %}
        </ul>

        <div class=\"tab-content mb-2\" id=\"configtab\">
        {% for category in options %}
            <div class=\"tab-pane fade {{ (category.name == 'Scoring') ? 'show active' : '' }}\" id=\"{{ category.name|replace({' ': ''}) }}\" role=\"tabpanel\" aria-labelledby=\"{{ category.name|replace({' ': ''}) }}-tab\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <ul class=\"list-group list-group-flush\">
                            {% for option in category.data %}
                                <li class=\"list-group-item\" style=\"padding:0;padding-top:10px;\">
                                    <div class=\"form-group\">
                                        <label
                                        {% if option.type in ['int','string','bool'] or option.type == 'array_val' and option.options is not null %}
                                            for=\"config_{{ option.name }}\"
                                            {% if option.type =='bool' %} onclick=\"\$('#config_{{ option.name }}').bootstrapToggle('toggle')\"{% endif %}
                                        {% endif %}
                                        >{{ option.name | replace({'_': ' '}) | capitalize }}:</label>
                                        {% if option.type == 'bool' %}
                                            <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\"
                                                   data-off=\"No\"
                                                   name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\"
                                                {% if option.value == 1 %} checked=\"checked\"{% endif %}>
                                            <br/>
                                        {% elseif option.type == 'int' %}
                                            {% if option.options is not null %}
                                                <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                       style=\"margin-left:5px;width:15em;text-align:right;display:inline-block;\"
                                                       name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\">
                                                    {% for value, label in option.options %}
                                                        <option {% if option.value == value %}selected{% endif %} value=\"{{ value }}\">{{ label }}</option>
                                                    {% endfor %}
                                                </select>
                                            {% else %}
                                                <input class=\"form-control form-control-sm\"
                                                       style=\"margin-left:5px;width:7em;text-align:right;display:inline-block;\"
                                                       type=\"number\"
                                                       name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\"
                                                       value=\"{{ option.value }}\">
                                            {% endif %}
                                            <br/>
                                        {% elseif option.type == 'string' %}
                                            {% if option.options is not null %}
                                                <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                        style=\"width:30em;display: block;\"
                                                        name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\">
                                                    {% for value, label in option.options %}
                                                        <option {% if option.value == value %}selected{% endif %} value=\"{{ value }}\">{{ label }}</option>
                                                    {% endfor %}
                                                </select>
                                            {% else %}
                                                <input class=\"form-control form-control-sm\" style=\"width:30em;\" type=\"text\"
                                                       name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\"
                                                       value=\"{{ option.value }}\">
                                            {% endif %}
                                        {% elseif option.type == 'array_keyval' %}
                                            <br/>
                                            <div data-collection>
                                                {% set counter = 0 %}
                                                {% for key,val in option.value %}
                                                    <div data-collection-item class=\"mb-2\">
                                                        {% if option.key_options is not null %}
                                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                                    style=\"width:10em;text-align:right;display:inline-block;\"
                                                                    name=\"config_{{ option.name }}[{{ counter }}][key]\">
                                                                {% for value, label in option.key_options %}
                                                                    <option {% if key == value %}selected{% endif %} value=\"{{ value }}\" label=\"{{ label | default('empty option') }}\">{{ label }}</option>
                                                                {% endfor %}
                                                            </select>
                                                        {% else %}
                                                            <input class=\"form-control form-control-sm\"
                                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                                   value=\"{{ key }}\"
                                                                   name=\"config_{{ option.name }}[{{ counter }}][key]\"
                                                                   id=\"config_{{ option.name }}_{{ counter }}__key_\">
                                                        {% endif %}
                                                        {% if option.value_options is not null %}
                                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                                    style=\"width:30em;display:inline-block;\"
                                                                    name=\"config_{{ option.name }}[{{ counter }}][val]\">
                                                                {% for value, label in option.value_options %}
                                                                    <option {% if val == value %}selected{% endif %} value=\"{{ value }}\">{{ label }}</option>
                                                                {% endfor %}
                                                            </select>
                                                        {% else %}
                                                            <input class=\"form-control form-control-sm\"
                                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                                   value=\"{{ val }}\"
                                                                   name=\"config_{{ option.name }}[{{ counter }}][val]\"
                                                                   id=\"config_{{ option.name }}_{{ counter }}__val\">
                                                            {% endif %}
                                                        {% set counter = counter + 1 %}
                                                    </div>
                                                {% endfor %}
                                                <script type=\"text/template\" data-index=\"{{ counter }}\">
                                                    <div data-collection-item class=\"mb-2\">
                                                        {% if option.key_options is not null %}
                                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                                    style=\"width:10em;text-align:right;display:inline-block;\"
                                                                    name=\"config_{{ option.name }}[__idx__][key]\">
                                                                {% for value, label in option.key_options %}
                                                                    <option value=\"{{ value }}\">{{ label }}</option>
                                                                {% endfor %}
                                                            </select>
                                                        {% else %}
                                                            <input class=\"form-control form-control-sm\"
                                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                                   name=\"config_{{ option.name }}[__idx__][key]\"
                                                                   id=\"config_{{ option.name }}___idx____key_\">
                                                        {% endif %}
                                                        {% if option.value_options is not null %}
                                                            <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                                    style=\"width:30em;display:inline-block;\"
                                                                    name=\"config_{{ option.name }}[__idx__][val]\">
                                                                {% for value, label in option.value_options %}
                                                                    <option value=\"{{ value }}\">{{ label }}</option>
                                                                {% endfor %}
                                                            </select>
                                                        {% else %}
                                                            <input class=\"form-control form-control-sm\"
                                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                                   name=\"config_{{ option.name }}[__idx__][val]\"
                                                                   id=\"config_{{ option.name }}___idx____val\">
                                                        {% endif %}
                                                    </div>
                                                </script>
                                            </div>
                                            <br/>
                                        {% elseif option.type == 'array_val' %}
                                            <br/>
                                                {% if option.options is not null %}
                                                    <select class=\"form-control form-control-sm custom-select custom-select-sm\"
                                                            style=\"width:30em;display:inline-block;\"
                                                            multiple
                                                            name=\"config_{{ option.name }}[]\"
                                                            id=\"config_{{ option.name }}\">
                                                        {% for value in option.options %}
                                                            <option {% if value in option.value %}selected{% endif %} value=\"{{ value }}\">{{ value }}</option>
                                                        {% endfor %}
                                                    </select>
                                                {% else %}
                                                    <div data-collection>
                                                        {% set counter = 0 %}
                                                        {% for val in option.value %}
                                                            <div data-collection-item class=\"mb-2\">
                                                                <input class=\"form-control form-control-sm\"
                                                                       style=\"width:30em;display:inline-block;\" type=\"text\"
                                                                       value=\"{{ val }}\"
                                                                       name=\"config_{{ option.name }}[{{ counter }}]\"
                                                                       id=\"config_{{ option.name }}_{{ counter }}_\">
                                                            </div>
                                                            {% set counter = counter + 1 %}
                                                        {% endfor %}
                                                        <script type=\"text/template\" data-index=\"{{ counter }}\">
                                                            <div data-collection-item class=\"mb-2\">
                                                                <input class=\"form-control form-control-sm\"
                                                                       style=\"width:30em;display:inline-block;\" type=\"text\"
                                                                       name=\"config_{{ option.name }}[__idx__]\"
                                                                       id=\"config_{{ option.name }}___idx___\">
                                                            </div>
                                                        </script>
                                                    </div>
                                                {% endif %}
                                        {% endif %}
                                        <div class=\"small text-muted\">{{ option.description | markdown_to_html }}</div>
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        {% endfor %}
        </div>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Save all changes\" id=\"save\" name=\"save\">
    </form>
{% endblock %}

{% block extrafooter %}
    <script>
        \$(function () {
            function addDeleteLink(\$collectionItem) {
                var \$removeFormButton = \$('<button type=\"button\" class=\"btn btn-sm btn-danger\"><i class=\"fas fa-trash\"></i></button>');
                \$collectionItem.append(\$removeFormButton);

                \$removeFormButton.on('click', function(e) {
                    \$collectionItem.remove();
                });
            }

            function addCollectionItem(\$collection, \$addButton) {
                var \$template = \$('script[type=\"text/template\"]', \$collection);
                var template = \$template.text();
                var index = \$template.data('index');
                var newRow = template;
                newRow = newRow.replace(/__idx__/g, index);
                \$template.data('index', index + 1);
                var \$newRow = \$(newRow);
                \$addButton.before(\$newRow);
                addDeleteLink(\$newRow);
            }

            function addAddLink(\$collection) {
                var \$addButton = \$('<button type=\"button\" class=\"btn btn-sm btn-secondary\"><i class=\"fas fa-plus\"></i></button>');
                \$collection.append(\$addButton);

                \$addButton.on('click', function (e) {
                    addCollectionItem(\$collection, \$addButton);
                });
            }

            \$('[data-collection]').each(function() {
                var \$collection = \$(this);

                addAddLink(\$collection);

                \$('[data-collection-item]', \$collection).each(function() {
                    addDeleteLink(\$(this));
                })
            })
        });
    </script>
{% endblock %}
", "jury/config.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/config.html.twig");
    }
}
