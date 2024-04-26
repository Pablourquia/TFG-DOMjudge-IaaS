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

/* jury/partials/external_contest_warnings.html.twig */
class __TwigTemplate_63f999408d99ea5cdbd8824b1cb6733f extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/external_contest_warnings.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/external_contest_warnings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/external_contest_warnings.html.twig"));

        // line 1
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/partials/external_contest_warnings.html.twig", 1)->unwrap();
        // line 2
        if (((array_key_exists("refresh", $context) && twig_get_attribute($this->env, $this->source, ($context["refresh"] ?? null), "ajax", [], "any", true, true, false, 2)) && twig_get_attribute($this->env, $this->source, (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 2, $this->source); })()), "ajax", [], "any", false, false, false, 2))) {
            // line 3
            echo "    <div class=\"d-none\" data-new-configuration-info>
        ";
            // line 4
            $this->loadTemplate("jury/partials/external_contest_info.html.twig", "jury/partials/external_contest_warnings.html.twig", 4)->display($context);
            // line 5
            echo "    </div>
    <div class=\"d-none\" data-new-warning-header>
        ";
            // line 7
            $this->loadTemplate("jury/partials/external_contest_warning_header.html.twig", "jury/partials/external_contest_warnings.html.twig", 7)->display($context);
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
<div class=\"warnings-table\">
    ";
        // line 12
        echo twig_call_macro($macros["macros"], "macro_table", [(isset($context["warningTable"]) || array_key_exists("warningTable", $context) ? $context["warningTable"] : (function () { throw new RuntimeError('Variable "warningTable" does not exist.', 12, $this->source); })()), (isset($context["warningTableFields"]) || array_key_exists("warningTableFields", $context) ? $context["warningTableFields"] : (function () { throw new RuntimeError('Variable "warningTableFields" does not exist.', 12, $this->source); })()), 0, ["ordering" => "false", "searching" => "false"]], 12, $context, $this->getSourceContext());
        echo "
</div>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/external_contest_warnings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  65 => 10,  61 => 8,  59 => 7,  55 => 5,  53 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"jury/jury_macros.twig\" as macros %}
{% if refresh is defined and refresh.ajax is defined and refresh.ajax %}
    <div class=\"d-none\" data-new-configuration-info>
        {% include 'jury/partials/external_contest_info.html.twig' %}
    </div>
    <div class=\"d-none\" data-new-warning-header>
        {% include 'jury/partials/external_contest_warning_header.html.twig' %}
    </div>
{% endif %}

<div class=\"warnings-table\">
    {{ macros.table(warningTable, warningTableFields, 0, {ordering: 'false', searching: 'false'}) }}
</div>
", "jury/partials/external_contest_warnings.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/external_contest_warnings.html.twig");
    }
}
