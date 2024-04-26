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

/* jury/partials/team_score_and_submissions.html.twig */
class __TwigTemplate_ad106d94dac5d5127a245810f781720d extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/team_score_and_submissions.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/team_score_and_submissions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/team_score_and_submissions.html.twig"));

        // line 1
        if ((array_key_exists("scoreboard", $context) &&  !(null === (isset($context["scoreboard"]) || array_key_exists("scoreboard", $context) ? $context["scoreboard"] : (function () { throw new RuntimeError('Variable "scoreboard" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "    <h2 class=\"mt-2\">Score</h2>

    ";
            // line 4
            $this->loadTemplate("partials/scoreboard_table.html.twig", "jury/partials/team_score_and_submissions.html.twig", 4)->display(twig_array_merge($context, ["displayRank" => true, "jury" => true]));
        }
        // line 6
        echo "
<h2 class=\"mt-2\">
    Submissions
    ";
        // line 9
        if ((isset($context["restrictionText"]) || array_key_exists("restrictionText", $context) ? $context["restrictionText"] : (function () { throw new RuntimeError('Variable "restrictionText" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "    <small class=\"text-muted\">
        restricted to ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["restrictionText"]) || array_key_exists("restrictionText", $context) ? $context["restrictionText"] : (function () { throw new RuntimeError('Variable "restrictionText" does not exist.', 11, $this->source); })()), "html", null, true);
            echo " (<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 11, $this->source); })()), "teamid", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\">show all</a>)
    </small>
    ";
        }
        // line 14
        echo "</h2>";
        // line 15
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/partials/team_score_and_submissions.html.twig", 15)->display(twig_array_merge($context, ["showTestcases" => false]));
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/team_score_and_submissions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  73 => 14,  65 => 11,  62 => 10,  60 => 9,  55 => 6,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if scoreboard is defined and scoreboard is not null %}
    <h2 class=\"mt-2\">Score</h2>

    {% include 'partials/scoreboard_table.html.twig' with {displayRank: true, jury: true} %}
{% endif %}

<h2 class=\"mt-2\">
    Submissions
    {% if restrictionText %}
    <small class=\"text-muted\">
        restricted to {{ restrictionText }} (<a href=\"{{ path('jury_team', {'teamId': team.teamid}) }}\">show all</a>)
    </small>
    {% endif %}
</h2>
{%- include 'jury/partials/submission_list.html.twig' with {showTestcases: false} %}
", "jury/partials/team_score_and_submissions.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/team_score_and_submissions.html.twig");
    }
}
