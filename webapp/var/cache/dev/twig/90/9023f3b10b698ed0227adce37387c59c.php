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

/* partials/javascript_language_detect.html.twig */
class __TwigTemplate_52f6e81db0dbc036a1e345d2b268b2cf extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript_language_detect.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript_language_detect.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript_language_detect.html.twig"));

        // line 2
        echo "<script>
    function getMainExtension(ext) {
        switch (ext) {
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["submission_languages"]) || array_key_exists("submission_languages", $context) ? $context["submission_languages"] : (function () { throw new RuntimeError('Variable "submission_languages" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 6
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["language"], "extensions", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 7
                echo "            case '";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["extension"]), "html", null, true);
                echo "':
                return '";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 8), "html", null, true);
                echo "';
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            default:
                return '';
        }
    }

    function getEntryPoint(mainext) {
        switch (mainext) {
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["submission_languages"]) || array_key_exists("submission_languages", $context) ? $context["submission_languages"] : (function () { throw new RuntimeError('Variable "submission_languages" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 19
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["language"], "requireEntryPoint", [], "any", false, false, false, 19)) {
                // line 20
                echo "            case '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 20), "html", null, true);
                echo "':
                return '";
                // line 21
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["language"], "entryPointDescription", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["language"], "entryPointDescription", [], "any", false, false, false, 21), "Entry point")) : ("Entry point")), "html", null, true);
                echo "';
                ";
            }
            // line 23
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            default:
                return '';
        }
    }
</script>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/javascript_language_detect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 24,  105 => 23,  100 => 21,  95 => 20,  92 => 19,  88 => 18,  79 => 11,  73 => 10,  65 => 8,  60 => 7,  55 => 6,  51 => 5,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var language \\App\\Entity\\Language #}
<script>
    function getMainExtension(ext) {
        switch (ext) {
                {% for language in submission_languages %}
                {% for extension in language.extensions %}
            case '{{ extension|lower }}':
                return '{{ language.langid }}';
                {% endfor %}
                {% endfor %}
            default:
                return '';
        }
    }

    function getEntryPoint(mainext) {
        switch (mainext) {
                {% for language in submission_languages %}
                {% if language.requireEntryPoint %}
            case '{{ language.langid }}':
                return '{{ language.entryPointDescription | default('Entry point') }}';
                {% endif %}
                {% endfor %}
            default:
                return '';
        }
    }
</script>
", "partials/javascript_language_detect.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/partials/javascript_language_detect.html.twig");
    }
}
