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

/* jury/partials/analysis_filter.html.twig */
class __TwigTemplate_0905f44f68a9d15e576c7027f993f561 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/analysis_filter.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/analysis_filter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/analysis_filter.html.twig"));

        // line 1
        echo "<div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
    <div class=\"input-group-prepend\">
        <div class=\"input-group-text listtoggles\">Filter:</div>
    </div>";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 6
            echo "
        <label class=\"btn btn-secondary ";
            // line 7
            if (($context["key"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 7, $this->source); })()))) {
                echo "active";
            }
            echo "\">
            <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"";
            // line 8
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
                   ";
            // line 9
            if (($context["key"] == (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 9, $this->source); })()))) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "
        </label>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>

<script>
    \$(function () {
        \$('input[name=viewtype]').on('change', function () {
            window.location = '?view=' + \$(this).val();
        });
    });
</script>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/analysis_filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 12,  68 => 9,  64 => 8,  58 => 7,  55 => 6,  51 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
    <div class=\"input-group-prepend\">
        <div class=\"input-group-text listtoggles\">Filter:</div>
    </div>
    {%- for key, label in filters %}

        <label class=\"btn btn-secondary {% if key == view %}active{% endif %}\">
            <input type=\"radio\" name=\"viewtype\" autocomplete=\"off\" value=\"{{ key }}\"
                   {% if key == view %}checked{% endif %}> {{ label }}
        </label>
    {%- endfor %}
</div>

<script>
    \$(function () {
        \$('input[name=viewtype]').on('change', function () {
            window.location = '?view=' + \$(this).val();
        });
    });
</script>
", "jury/partials/analysis_filter.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/analysis_filter.html.twig");
    }
}
