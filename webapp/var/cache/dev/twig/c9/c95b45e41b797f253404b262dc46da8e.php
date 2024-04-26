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

/* partials/javascript_print.html.twig */
class __TwigTemplate_0576cccf0946f06e34188774da883edc extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript_print.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript_print.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript_print.html.twig"));

        // line 1
        echo "<script>
    function detectLanguage(filename) {
        var parts = filename.toLowerCase().split('.').reverse();
        if (parts.length < 2) return;

        // language ID

        var elt = document.getElementById('print_langid');
        // the 'autodetect' option has empty value
        if (elt.value !== '') return;

        var langid = getMainExtension(parts[0]);
        for (var i = 0; i < elt.length; i++) {
            if (elt.options[i].value === langid) {
                elt.selectedIndex = i;
            }
        }

    }
</script>
";
        // line 21
        $this->loadTemplate("partials/javascript_language_detect.html.twig", "partials/javascript_print.html.twig", 21)->display($context);
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/javascript_print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    function detectLanguage(filename) {
        var parts = filename.toLowerCase().split('.').reverse();
        if (parts.length < 2) return;

        // language ID

        var elt = document.getElementById('print_langid');
        // the 'autodetect' option has empty value
        if (elt.value !== '') return;

        var langid = getMainExtension(parts[0]);
        for (var i = 0; i < elt.length; i++) {
            if (elt.options[i].value === langid) {
                elt.selectedIndex = i;
            }
        }

    }
</script>
{% include 'partials/javascript_language_detect.html.twig' %}
", "partials/javascript_print.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/partials/javascript_print.html.twig");
    }
}
