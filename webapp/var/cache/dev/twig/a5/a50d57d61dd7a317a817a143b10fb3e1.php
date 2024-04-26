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

/* jury/entity_id_badge.html.twig */
class __TwigTemplate_8fd12f86a33df0031cc9266e2b5939d6 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/entity_id_badge.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/entity_id_badge.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/entity_id_badge.html.twig"));

        // line 1
        echo "<span class=\"badge badge-secondary id-badge\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        if ( !(null === (isset($context["externalId"]) || array_key_exists("externalId", $context) ? $context["externalId"] : (function () { throw new RuntimeError('Variable "externalId" does not exist.', 1, $this->source); })()))) {
            echo "External ID: ";
            echo twig_escape_filter($this->env, (isset($context["externalId"]) || array_key_exists("externalId", $context) ? $context["externalId"] : (function () { throw new RuntimeError('Variable "externalId" does not exist.', 1, $this->source); })()), "html", null, true);
            echo ", ";
        }
        echo "Internal ID: ";
        echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 1, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 2
        if ( !(null === (isset($context["externalId"]) || array_key_exists("externalId", $context) ? $context["externalId"] : (function () { throw new RuntimeError('Variable "externalId" does not exist.', 2, $this->source); })()))) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["externalId"]) || array_key_exists("externalId", $context) ? $context["externalId"] : (function () { throw new RuntimeError('Variable "externalId" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["idPrefix"]) || array_key_exists("idPrefix", $context) ? $context["idPrefix"] : (function () { throw new RuntimeError('Variable "idPrefix" does not exist.', 5, $this->source); })()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/entity_id_badge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 7,  66 => 5,  60 => 3,  58 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"badge badge-secondary id-badge\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{% if externalId is not null %}External ID: {{ externalId }}, {% endif %}Internal ID: {{ idPrefix }}{{ id }}\">
    {% if externalId is not null %}
        {{ externalId }}
    {% else %}
        {{ idPrefix }}{{ id }}
    {% endif %}
</span>
", "jury/entity_id_badge.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/entity_id_badge.html.twig");
    }
}
