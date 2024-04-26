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

/* jury/partials/external_contest_warning_header.html.twig */
class __TwigTemplate_825280d0caa915a60c9f0bc481131485 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/external_contest_warning_header.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/external_contest_warning_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/external_contest_warning_header.html.twig"));

        // line 1
        echo "<h3>
    Warnings
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["externalContestSource"]) || array_key_exists("externalContestSource", $context) ? $context["externalContestSource"] : (function () { throw new RuntimeError('Variable "externalContestSource" does not exist.', 3, $this->source); })()), "externalSourceWarnings", [], "any", false, false, false, 3), "count", [], "any", false, false, false, 3) > 0)) {
            // line 4
            echo "        (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["externalContestSource"]) || array_key_exists("externalContestSource", $context) ? $context["externalContestSource"] : (function () { throw new RuntimeError('Variable "externalContestSource" does not exist.', 4, $this->source); })()), "externalSourceWarnings", [], "any", false, false, false, 4), "count", [], "any", false, false, false, 4), "html", null, true);
            echo ")
    ";
        }
        // line 6
        echo "</h3>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/external_contest_warning_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  52 => 4,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>
    Warnings
    {% if externalContestSource.externalSourceWarnings.count > 0 %}
        ({{ externalContestSource.externalSourceWarnings.count }})
    {% endif %}
</h3>
", "jury/partials/external_contest_warning_header.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/external_contest_warning_header.html.twig");
    }
}
