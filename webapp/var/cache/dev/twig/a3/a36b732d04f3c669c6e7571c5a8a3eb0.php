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

/* jury/partials/judgehosts_form.html.twig */
class __TwigTemplate_f50d4c9c18230743dd7538b9c68b97e2 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/judgehosts_form.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/judgehosts_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/judgehosts_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

<table class=\"table table-sm table-striped\">
    <thead>
    <tr>
        <th>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "judgehosts", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "prototype", [], "any", false, false, false, 6), "hostname", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "label", [], "any", false, false, false, 6), "html", null, true);
        echo "</th>
        <th>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "judgehosts", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "prototype", [], "any", false, false, false, 7), "enabled", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "label", [], "any", false, false, false, 7), "html", null, true);
        echo "</th>
        <th>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "judgehosts", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "prototype", [], "any", false, false, false, 8), "hidden", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "label", [], "any", false, false, false, 8), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody data-collection-holder>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "judgehosts", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["judgehost"]) {
            // line 13
            echo "        <tr>
            <td style=\"width: 20%\">
                ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["judgehost"], "hostname", [], "any", false, false, false, 15), 'widget');
            echo "
            </td>
            <td style=\"width: 10%\">
                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["judgehost"], "enabled", [], "any", false, false, false, 18), 'widget');
            echo "
                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["judgehost"], "enabled", [], "any", false, false, false, 19), 'errors');
            echo "
            </td>
            <td style=\"width: 10%\">
                ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["judgehost"], "hidden", [], "any", false, false, false, 22), 'widget');
            echo "
                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["judgehost"], "hidden", [], "any", false, false, false, 23), 'errors');
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judgehost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </tbody>
</table>

";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "save", [], "any", false, false, false, 30), 'widget');
        echo "

";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/judgehosts_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 32,  112 => 30,  107 => 27,  97 => 23,  93 => 22,  87 => 19,  83 => 18,  77 => 15,  73 => 13,  69 => 12,  62 => 8,  58 => 7,  54 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

<table class=\"table table-sm table-striped\">
    <thead>
    <tr>
        <th>{{ form.judgehosts.vars.prototype.hostname.vars.label }}</th>
        <th>{{ form.judgehosts.vars.prototype.enabled.vars.label }}</th>
        <th>{{ form.judgehosts.vars.prototype.hidden.vars.label }}</th>
    </tr>
    </thead>
    <tbody data-collection-holder>
    {% for judgehost in form.judgehosts %}
        <tr>
            <td style=\"width: 20%\">
                {{ form_widget(judgehost.hostname) }}
            </td>
            <td style=\"width: 10%\">
                {{ form_widget(judgehost.enabled) }}
                {{ form_errors(judgehost.enabled) }}
            </td>
            <td style=\"width: 10%\">
                {{ form_widget(judgehost.hidden) }}
                {{ form_errors(judgehost.hidden) }}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>

{{ form_widget(form.save) }}

{{ form_end(form) }}
", "jury/partials/judgehosts_form.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/judgehosts_form.html.twig");
    }
}
