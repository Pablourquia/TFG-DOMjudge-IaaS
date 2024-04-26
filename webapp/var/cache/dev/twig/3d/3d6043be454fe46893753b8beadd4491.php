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

/* jury/tsv/accounts.tsv.twig */
class __TwigTemplate_9839d5ab05e3392fcdd0e5b84ef8c405 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/tsv/accounts.tsv.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/tsv/accounts.tsv.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/tsv/accounts.tsv.twig"));

        // line 1
        echo "accounts\t1
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 3)), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "fullname", [], "any", false, false, false, 3)), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "username", [], "any", false, false, false, 3)), "html", null, true);
            echo "\t";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->toTsvField(twig_get_attribute($this->env, $this->source, $context["row"], "password", [], "any", false, false, false, 3)), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/tsv/accounts.tsv.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 3,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("accounts\t1
{% for row in data %}
{{ row.type|tsvField }}\t{{ row.fullname|tsvField }}\t{{ row.username|tsvField }}\t{{ row.password|tsvField }}
{% endfor %}
", "jury/tsv/accounts.tsv.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/tsv/accounts.tsv.twig");
    }
}
