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

/* team/partials/clarification_content.html.twig */
class __TwigTemplate_02f2df9c5f50d8701cefb618184b31fe extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/clarification_content.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/clarification_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/clarification_content.html.twig"));

        // line 1
        echo "<div class=\"container clarificationform\">
    ";
        // line 2
        $this->loadTemplate("team/partials/clarification.html.twig", "team/partials/clarification_content.html.twig", 2)->display(twig_array_merge($context, ["clarification" => (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 2, $this->source); })())]));
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clarification"]) || array_key_exists("clarification", $context) ? $context["clarification"] : (function () { throw new RuntimeError('Variable "clarification" does not exist.', 3, $this->source); })()), "replies", [], "any", false, false, false, 3), function ($__reply__) use ($context, $macros) { $context["reply"] = $__reply__; return twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 3, $this->source); })()), "canViewClarification", [0 => $context["reply"]], "method", false, false, false, 3); }));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
            // line 4
            echo "        ";
            $this->loadTemplate("team/partials/clarification.html.twig", "team/partials/clarification_content.html.twig", 4)->display(twig_array_merge($context, ["clarification" => $context["reply"]]));
            // line 5
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>

<div class=\"collapse mt-3 container clarificationform\" id=\"collapsereplyform\">
    <div class=\"card card-body\">
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "recipient", [], "any", false, false, false, 11), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "subject", [], "any", false, false, false, 12), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "message", [], "any", false, false, false, 13), 'row');
        echo "
        <div class=\"form-group\">
            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-envelope\"></i> Send
            </button>
        </div>
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/clarification_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  104 => 13,  100 => 12,  96 => 11,  92 => 10,  86 => 6,  72 => 5,  69 => 4,  51 => 3,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container clarificationform\">
    {% include 'team/partials/clarification.html.twig' with {clarification: clarification } %}
    {% for reply in clarification.replies | filter(reply => team.canViewClarification(reply)) %}
        {% include 'team/partials/clarification.html.twig' with {clarification: reply } %}
    {% endfor %}
</div>

<div class=\"collapse mt-3 container clarificationform\" id=\"collapsereplyform\">
    <div class=\"card card-body\">
        {{ form_start(form) }}
        {{ form_row(form.recipient) }}
        {{ form_row(form.subject) }}
        {{ form_row(form.message) }}
        <div class=\"form-group\">
            <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-envelope\"></i> Send
            </button>
        </div>
        {{ form_end(form) }}
    </div>
</div>
", "team/partials/clarification_content.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/team/partials/clarification_content.html.twig");
    }
}
