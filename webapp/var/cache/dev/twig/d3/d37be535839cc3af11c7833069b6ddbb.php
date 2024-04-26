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

/* team/partials/index_content.html.twig */
class __TwigTemplate_7a0fe4f55d0f21ea117ec2b5d061e144 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/index_content.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/index_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/index_content.html.twig"));

        // line 1
        if (twig_test_empty((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 2, $this->source); })()), "effectiveName", [], "any", false, false, false, 2), "html", null, true);
            echo "</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">There's no active contest for you (yet).</h2>
";
        } elseif ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 4, $this->source); })()), "freezeData", [], "any", false, false, false, 4), "started", [], "any", false, false, false, 4)) {
            // line 5
            echo "    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 5, $this->source); })()), "effectiveName", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">
        Contest ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printContestStart((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 7, $this->source); })())), "html", null, true);
            echo "
    </h2>
";
        } else {
            // line 10
            echo "
    <div id=\"teamscoresummary\">
        ";
            // line 12
            $context["displayRank"] =  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 12, $this->source); })()), "freezeData", [], "any", false, false, false, 12), "showFrozen", [], "any", false, false, false, 12);
            // line 13
            echo "        ";
            $this->loadTemplate("partials/scoreboard_table.html.twig", "team/partials/index_content.html.twig", 13)->display(twig_array_merge($context, ["displayRank" => (isset($context["displayRank"]) || array_key_exists("displayRank", $context) ? $context["displayRank"] : (function () { throw new RuntimeError('Variable "displayRank" does not exist.', 13, $this->source); })()), "jury" => false, "public" => false]));
            // line 14
            echo "    </div>

    <div class=\"mt-4\" data-flash-messages>
        ";
            // line 17
            $this->loadTemplate("partials/messages.html.twig", "team/partials/index_content.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 18, $this->source); })()), "allowSubmit", [], "any", false, false, false, 18)) {
                // line 19
                echo "            ";
                $this->loadTemplate("partials/alert.html.twig", "team/partials/index_content.html.twig", 19)->display(twig_array_merge($context, ["type" => "danger", "message" => "Submissions (temporarily) disabled."]));
                // line 20
                echo "        ";
            }
            // line 21
            echo "    </div>

    <div class=\"row\">
        <div class=\"col\">
            <h1 class=\"teamoverview\">Submissions</h1>

            ";
            // line 27
            $this->loadTemplate("team/partials/submission_list.html.twig", "team/partials/index_content.html.twig", 27)->display($context);
            // line 28
            echo "        </div>
        <div class=\"col\">
            <h1 class=\"teamoverview\">Clarifications</h1>
            ";
            // line 31
            if (twig_test_empty((isset($context["clarifications"]) || array_key_exists("clarifications", $context) ? $context["clarifications"] : (function () { throw new RuntimeError('Variable "clarifications" does not exist.', 31, $this->source); })()))) {
                // line 32
                echo "                <p class=\"nodata\">No clarifications.</p>
            ";
            } else {
                // line 34
                echo "                ";
                $this->loadTemplate("team/partials/clarification_list.html.twig", "team/partials/index_content.html.twig", 34)->display(twig_array_merge($context, ["clarifications" => (isset($context["clarifications"]) || array_key_exists("clarifications", $context) ? $context["clarifications"] : (function () { throw new RuntimeError('Variable "clarifications" does not exist.', 34, $this->source); })())]));
                // line 35
                echo "            ";
            }
            // line 36
            echo "
            <h1 class=\"teamoverview\">Clarification Requests</h1>
            ";
            // line 38
            if (twig_test_empty((isset($context["clarificationRequests"]) || array_key_exists("clarificationRequests", $context) ? $context["clarificationRequests"] : (function () { throw new RuntimeError('Variable "clarificationRequests" does not exist.', 38, $this->source); })()))) {
                // line 39
                echo "                <p class=\"nodata\">No clarification request.</p>
            ";
            } else {
                // line 41
                echo "                ";
                $this->loadTemplate("team/partials/clarification_list.html.twig", "team/partials/index_content.html.twig", 41)->display(twig_array_merge($context, ["clarifications" => (isset($context["clarificationRequests"]) || array_key_exists("clarificationRequests", $context) ? $context["clarificationRequests"] : (function () { throw new RuntimeError('Variable "clarificationRequests" does not exist.', 41, $this->source); })())]));
                // line 42
                echo "            ";
            }
            // line 43
            echo "
            <div class=\"m-1\">
                <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_clarification_add");
            echo "\" class=\"btn btn-secondary btn-sm\" data-ajax-modal>
                    request clarification
                </a>
            </div>
        </div>
    </div>
";
        }
        // line 52
        echo "
";
        // line 53
        if ((array_key_exists("ajax", $context) && (isset($context["ajax"]) || array_key_exists("ajax", $context) ? $context["ajax"] : (function () { throw new RuntimeError('Variable "ajax" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "    ";
            $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/partials/index_content.html.twig", 54)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 54, $this->source); })())]));
        }
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/index_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 54,  153 => 53,  150 => 52,  140 => 45,  136 => 43,  133 => 42,  130 => 41,  126 => 39,  124 => 38,  120 => 36,  117 => 35,  114 => 34,  110 => 32,  108 => 31,  103 => 28,  101 => 27,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  82 => 17,  77 => 14,  74 => 13,  72 => 12,  68 => 10,  62 => 7,  56 => 5,  54 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if contest is empty %}
    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">{{ team.effectiveName }}</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">There's no active contest for you (yet).</h2>
{% elseif not contest.freezeData.started %}
    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">{{ team.effectiveName }}</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">
        Contest {{ contest | printContestStart }}
    </h2>
{% else %}

    <div id=\"teamscoresummary\">
        {% set displayRank = not contest.freezeData.showFrozen %}
        {% include 'partials/scoreboard_table.html.twig' with {displayRank: displayRank, jury: false, public: false} %}
    </div>

    <div class=\"mt-4\" data-flash-messages>
        {% include 'partials/messages.html.twig' %}
        {% if not contest.allowSubmit %}
            {% include 'partials/alert.html.twig' with {'type': 'danger', 'message': 'Submissions (temporarily) disabled.'} %}
        {% endif %}
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <h1 class=\"teamoverview\">Submissions</h1>

            {% include 'team/partials/submission_list.html.twig' %}
        </div>
        <div class=\"col\">
            <h1 class=\"teamoverview\">Clarifications</h1>
            {% if clarifications is empty %}
                <p class=\"nodata\">No clarifications.</p>
            {% else %}
                {% include 'team/partials/clarification_list.html.twig' with {clarifications: clarifications} %}
            {% endif %}

            <h1 class=\"teamoverview\">Clarification Requests</h1>
            {% if clarificationRequests is empty %}
                <p class=\"nodata\">No clarification request.</p>
            {% else %}
                {% include 'team/partials/clarification_list.html.twig' with {clarifications: clarificationRequests} %}
            {% endif %}

            <div class=\"m-1\">
                <a href=\"{{ path('team_clarification_add') }}\" class=\"btn btn-secondary btn-sm\" data-ajax-modal>
                    request clarification
                </a>
            </div>
        </div>
    </div>
{% endif %}

{% if ajax is defined and ajax %}
    {% include 'partials/scoreboard_progress_bar.html.twig' with {margin: -9, contest: current_team_contest} %}
{% endif %}
", "team/partials/index_content.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/team/partials/index_content.html.twig");
    }
}
