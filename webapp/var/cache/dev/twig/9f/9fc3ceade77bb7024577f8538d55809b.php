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

/* jury/partials/rejudging_submissions.html.twig */
class __TwigTemplate_ca3559b629432df6bc9984055818f4b8 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_submissions.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_submissions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudging_submissions.html.twig"));

        // line 1
        if ((array_key_exists("ajax", $context) && (isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <span class=\"d-none\" data-new-todo>
        ";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["todo"]) || array_key_exists("todo", $context) ? $context["todo"] : (function () { throw new RuntimeError('Variable "todo" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "
    </span>
    <div class=\"d-none\" data-new-rejudging-buttons>
        ";
            // line 6
            $this->loadTemplate("jury/partials/rejudging_buttons.html.twig", "jury/partials/rejudging_submissions.html.twig", 6)->display($context);
            // line 7
            echo "    </div>
    <div class=\"d-none\" data-new-rejudging-matrix>
        ";
            // line 9
            $this->loadTemplate("jury/partials/rejudging_matrix.html.twig", "jury/partials/rejudging_submissions.html.twig", 9)->display($context);
            // line 10
            echo "    </div>
";
        }
        // line 13
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/partials/rejudging_submissions.html.twig", 13)->display(twig_array_merge($context, ["showContest" => true]));
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/rejudging_submissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  65 => 10,  63 => 9,  59 => 7,  57 => 6,  51 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if ajax is defined and ajax %}
    <span class=\"d-none\" data-new-todo>
        {{ todo }}
    </span>
    <div class=\"d-none\" data-new-rejudging-buttons>
        {% include 'jury/partials/rejudging_buttons.html.twig' %}
    </div>
    <div class=\"d-none\" data-new-rejudging-matrix>
        {% include 'jury/partials/rejudging_matrix.html.twig' %}
    </div>
{% endif %}

{%- include 'jury/partials/submission_list.html.twig' with {showContest: true} %}
", "jury/partials/rejudging_submissions.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/rejudging_submissions.html.twig");
    }
}
