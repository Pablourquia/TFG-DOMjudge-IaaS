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

/* jury/refresh_scoreboard.html.twig */
class __TwigTemplate_143f86c6b435373a936e0824793781bd extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/refresh_scoreboard.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/refresh_scoreboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/refresh_scoreboard.html.twig"));

        // line 1
        echo "<div class=\"alert alert-warning\">
    <strong>Warning:</strong> Refresh scoreboard cache
    <hr>
    <p>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</p>
    <form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
        echo "\" method=\"POST\">
        ";
        // line 6
        if ( !twig_test_empty((isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "            <input type=\"hidden\" name=\"cid\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 7, $this->source); })()), "cid", [], "any", false, false, false, 7), "html", null, true);
            echo "\"/>
        ";
        }
        // line 9
        echo "        <input type=\"submit\" name=\"refresh\" value=\"Recalculate caches now\" class=\"btn btn-primary\"/>
    </form>
</div>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/refresh_scoreboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  61 => 7,  59 => 6,  55 => 5,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"alert alert-warning\">
    <strong>Warning:</strong> Refresh scoreboard cache
    <hr>
    <p>{{ message }}</p>
    <form action=\"{{ path('jury_refresh_cache') }}\" method=\"POST\">
        {% if current_contest is not empty %}
            <input type=\"hidden\" name=\"cid\" value=\"{{ current_contest.cid }}\"/>
        {% endif %}
        <input type=\"submit\" name=\"refresh\" value=\"Recalculate caches now\" class=\"btn btn-primary\"/>
    </form>
</div>
", "jury/refresh_scoreboard.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/refresh_scoreboard.html.twig");
    }
}
