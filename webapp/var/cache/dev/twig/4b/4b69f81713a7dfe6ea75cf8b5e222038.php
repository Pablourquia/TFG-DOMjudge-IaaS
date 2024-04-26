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

/* jury/partials/country_select.html.twig */
class __TwigTemplate_fa2df87b14dc3792c71b75150e923b99 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/country_select.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/country_select.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/country_select.html.twig"));

        // line 1
        echo "<script>
    var alpha3_alpha2_country_mapping = ";
        // line 2
        echo json_encode((isset($context["alpha3_alpha2_country_mapping"]) || array_key_exists("alpha3_alpha2_country_mapping", $context) ? $context["alpha3_alpha2_country_mapping"] : (function () { throw new RuntimeError('Variable "alpha3_alpha2_country_mapping" does not exist.', 2, $this->source); })()));
        echo ";

    var template = function(element) {
        var imgBase = \"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("flags/4x3/nl.svg"), "html", null, true);
        echo "\";

        var img = element.element == undefined ||
            element.element.value == undefined ||
            element.element.value == \"\"
            ? ''
            : '<img src=\"' + imgBase.replace(\"nl.svg\", alpha3_alpha2_country_mapping[element.element.value].toLowerCase() + \".svg\", 1) + '\" class=\"countryflag\" alt=\"\">&nbsp;';

        return img + element.text;
    };

    \$('";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "').select2({
        templateResult: template,
        templateSelection: template,

        // Prevent escaping
        escapeMarkup: function(t) {
            return t;
        },
        theme: \"bootstrap\"
    });

</script>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/country_select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  55 => 5,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    var alpha3_alpha2_country_mapping = {{ alpha3_alpha2_country_mapping | json_encode | raw }};

    var template = function(element) {
        var imgBase = \"{{ asset('flags/4x3/nl.svg') }}\";

        var img = element.element == undefined ||
            element.element.value == undefined ||
            element.element.value == \"\"
            ? ''
            : '<img src=\"' + imgBase.replace(\"nl.svg\", alpha3_alpha2_country_mapping[element.element.value].toLowerCase() + \".svg\", 1) + '\" class=\"countryflag\" alt=\"\">&nbsp;';

        return img + element.text;
    };

    \$('{{ field }}').select2({
        templateResult: template,
        templateSelection: template,

        // Prevent escaping
        escapeMarkup: function(t) {
            return t;
        },
        theme: \"bootstrap\"
    });

</script>
", "jury/partials/country_select.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/country_select.html.twig");
    }
}
