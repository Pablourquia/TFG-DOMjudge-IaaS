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

/* team/menu.html.twig */
class __TwigTemplate_ad9f2940fe170ec487a3eae833a9c6b5 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/menu.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
        echo "\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\"
            aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    ";
        // line 8
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8);
        // line 9
        echo "
    <div class=\"collapse navbar-collapse\" id=\"menuDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item ";
        // line 12
        if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 12, $this->source); })()), [0 => "team_index", 1 => "team_clarification", 2 => "team_clarification_add", 3 => "team_submission"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
        echo "\"><i class=\"fas fa-home\"></i> Home</a>
            </li>
            <li class=\"nav-item ";
        // line 15
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 15, $this->source); })()) == "team_problems")) {
            echo "active";
        }
        echo "\">
                ";
        // line 16
        if (( !(null === (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 16, $this->source); })())) && ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 16, $this->source); })()), "freezeData", [], "any", false, false, false, 16), "started", [], "any", false, false, false, 16)))) {
            // line 17
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problems");
            echo "\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                ";
        } else {
            // line 21
            echo "                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                ";
        }
        // line 23
        echo "            </li>
            ";
        // line 24
        if ((isset($context["have_printing"]) || array_key_exists("have_printing", $context) ? $context["have_printing"] : (function () { throw new RuntimeError('Variable "have_printing" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                <li class=\"nav-item ";
            if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 25, $this->source); })()) == "team_print")) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_print");
            echo "\"><i class=\"fas fa-file-alt\"></i> Print</a>
                </li>
            ";
        }
        // line 29
        echo "            <li class=\"nav-item ";
        if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 29, $this->source); })()), [0 => "team_scoreboard", 1 => "team_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_scoreboard");
        echo "\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>
            ";
        // line 32
        if ( !twig_test_empty((isset($context["doc_links"]) || array_key_exists("doc_links", $context) ? $context["doc_links"] : (function () { throw new RuntimeError('Variable "doc_links" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "                <li class=\"nav-item ";
            if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 33, $this->source); })()), [0 => "team_docs"])) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_docs");
            echo "\"><i class=\"fas fa-file-alt\"></i> Docs</a>
                </li>
            ";
        }
        // line 37
        echo "
            ";
        // line 38
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 39
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            ";
        }
        // line 43
        echo "        </ul>

        <div id=\"submitbut\">
            ";
        // line 46
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || ( !(null === (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 46, $this->source); })())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 46, $this->source); })()), "freezeData", [], "any", false, false, false, 46), "started", [], "any", false, false, false, 46)))) {
            // line 47
            echo "                <a class=\"nav-link justify-content-center\" data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submit");
            echo "\">
                    <span class=\"btn btn-success btn-sm\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </span>
                </a>
            ";
        } else {
            // line 53
            echo "                <a class=\"nav-link justify-content-center\">
                    <span class=\"btn btn-success btn-sm disabled\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </span>
                </a>
            ";
        }
        // line 59
        echo "        </div>

        ";
        // line 61
        $this->loadTemplate("partials/menu_login_logout_button.html.twig", "team/menu.html.twig", 61)->display(twig_array_merge($context, ["confirmLogout" => true]));
        // line 62
        echo "
        <ul class=\"navbar-nav\">
            ";
        // line 64
        if ((twig_length_filter($this->env, (isset($context["current_team_contests"]) || array_key_exists("current_team_contests", $context) ? $context["current_team_contests"] : (function () { throw new RuntimeError('Variable "current_team_contests" does not exist.', 64, $this->source); })())) > 1)) {
            // line 65
            echo "                ";
            $this->loadTemplate("partials/menu_change_contest.html.twig", "team/menu.html.twig", 65)->display(twig_array_merge($context, ["contest" => (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 65, $this->source); })()), "contests" => (isset($context["current_team_contests"]) || array_key_exists("current_team_contests", $context) ? $context["current_team_contests"] : (function () { throw new RuntimeError('Variable "current_team_contests" does not exist.', 65, $this->source); })()), "change_path" => "team_change_contest", "show_no_contest" => false]));
            // line 66
            echo "            ";
        }
        // line 67
        echo "        </ul>

        ";
        // line 69
        $this->loadTemplate("partials/menu_countdown.html.twig", "team/menu.html.twig", 69)->display(twig_array_merge($context, ["contest" => (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 69, $this->source); })())]));
        // line 70
        echo "    </div>
</nav>
";
        // line 72
        $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/menu.html.twig", 72)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 72, $this->source); })())]));
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "team/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 72,  204 => 70,  202 => 69,  198 => 67,  195 => 66,  192 => 65,  190 => 64,  186 => 62,  184 => 61,  180 => 59,  172 => 53,  162 => 47,  160 => 46,  155 => 43,  149 => 40,  146 => 39,  144 => 38,  141 => 37,  135 => 34,  128 => 33,  126 => 32,  121 => 30,  114 => 29,  108 => 26,  101 => 25,  99 => 24,  96 => 23,  92 => 21,  84 => 17,  82 => 16,  76 => 15,  71 => 13,  65 => 12,  60 => 9,  58 => 8,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"{{ path('team_index') }}\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\"
            aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    {% set current_route = app.request.attributes.get('_route') %}

    <div class=\"collapse navbar-collapse\" id=\"menuDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item {% if current_route in ['team_index', 'team_clarification', 'team_clarification_add', 'team_submission'] %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('team_index') }}\"><i class=\"fas fa-home\"></i> Home</a>
            </li>
            <li class=\"nav-item {% if current_route == 'team_problems' %}active{% endif %}\">
                {% if current_team_contest is not null and (is_granted('ROLE_JURY') or current_team_contest.freezeData.started) %}
                    <a class=\"nav-link\" href=\"{{ path('team_problems') }}\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                {% else %}
                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                {% endif %}
            </li>
            {% if have_printing %}
                <li class=\"nav-item {% if current_route == 'team_print' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('team_print') }}\"><i class=\"fas fa-file-alt\"></i> Print</a>
                </li>
            {% endif %}
            <li class=\"nav-item {% if current_route in ['team_scoreboard', 'team_team'] %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('team_scoreboard') }}\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>
            {% if doc_links is not empty %}
                <li class=\"nav-item {% if current_route in ['team_docs'] %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('team_docs') }}\"><i class=\"fas fa-file-alt\"></i> Docs</a>
                </li>
            {% endif %}

            {% if is_granted('ROLE_JURY') or is_granted('ROLE_BALLOON') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_index') }}\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            {% endif %}
        </ul>

        <div id=\"submitbut\">
            {% if is_granted('ROLE_JURY') or (current_team_contest is not null and current_team_contest.freezeData.started) %}
                <a class=\"nav-link justify-content-center\" data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"{{ path('team_submit') }}\">
                    <span class=\"btn btn-success btn-sm\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </span>
                </a>
            {% else %}
                <a class=\"nav-link justify-content-center\">
                    <span class=\"btn btn-success btn-sm disabled\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </span>
                </a>
            {% endif %}
        </div>

        {% include 'partials/menu_login_logout_button.html.twig' with {confirmLogout: true} %}

        <ul class=\"navbar-nav\">
            {% if current_team_contests | length > 1 %}
                {% include 'partials/menu_change_contest.html.twig' with {contest: current_team_contest, contests: current_team_contests, change_path: 'team_change_contest', show_no_contest: false} %}
            {% endif %}
        </ul>

        {% include 'partials/menu_countdown.html.twig' with {contest: current_team_contest} %}
    </div>
</nav>
{% include 'partials/scoreboard_progress_bar.html.twig' with {margin: -9, contest: current_team_contest} %}
", "team/menu.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/team/menu.html.twig");
    }
}
