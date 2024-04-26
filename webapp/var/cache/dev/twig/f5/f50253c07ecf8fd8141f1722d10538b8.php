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

/* public/menu.html.twig */
class __TwigTemplate_3f270f38c9c96512607b2483d3de740e extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/menu.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-light bg-light fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
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
        if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 12, $this->source); })()), [0 => "public_index", 1 => "public_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
        echo "\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>
            <li class=\"nav-item ";
        // line 15
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 15, $this->source); })()) == "public_problems")) {
            echo "active";
        }
        echo "\">
                ";
        // line 16
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || ( !(null === (isset($context["current_public_contest"]) || array_key_exists("current_public_contest", $context) ? $context["current_public_contest"] : (function () { throw new RuntimeError('Variable "current_public_contest" does not exist.', 16, $this->source); })())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["current_public_contest"]) || array_key_exists("current_public_contest", $context) ? $context["current_public_contest"] : (function () { throw new RuntimeError('Variable "current_public_contest" does not exist.', 16, $this->source); })()), "freezeData", [], "any", false, false, false, 16), "started", [], "any", false, false, false, 16)))) {
            // line 17
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problems");
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
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 26
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\">
                        <i class=\"fas fa-arrow-right\"></i> Team
                    </a>
                </li>
            ";
        }
        // line 32
        echo "
            ";
        // line 33
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 34
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            ";
        }
        // line 38
        echo "        </ul>

        ";
        // line 40
        $this->loadTemplate("partials/menu_login_logout_button.html.twig", "public/menu.html.twig", 40)->display($context);
        // line 41
        echo "
        <ul class=\"navbar-nav\">
            ";
        // line 43
        if ((twig_length_filter($this->env, (isset($context["current_public_contests"]) || array_key_exists("current_public_contests", $context) ? $context["current_public_contests"] : (function () { throw new RuntimeError('Variable "current_public_contests" does not exist.', 43, $this->source); })())) > 1)) {
            // line 44
            echo "                ";
            $this->loadTemplate("partials/menu_change_contest.html.twig", "public/menu.html.twig", 44)->display(twig_array_merge($context, ["contest" => (isset($context["current_public_contest"]) || array_key_exists("current_public_contest", $context) ? $context["current_public_contest"] : (function () { throw new RuntimeError('Variable "current_public_contest" does not exist.', 44, $this->source); })()), "contests" => (isset($context["current_public_contests"]) || array_key_exists("current_public_contests", $context) ? $context["current_public_contests"] : (function () { throw new RuntimeError('Variable "current_public_contests" does not exist.', 44, $this->source); })()), "change_path" => "public_change_contest", "show_no_contest" => false]));
            // line 45
            echo "            ";
        }
        // line 46
        echo "        </ul>

        ";
        // line 48
        $this->loadTemplate("partials/menu_countdown.html.twig", "public/menu.html.twig", 48)->display(twig_array_merge($context, ["contest" => (isset($context["current_public_contest"]) || array_key_exists("current_public_contest", $context) ? $context["current_public_contest"] : (function () { throw new RuntimeError('Variable "current_public_contest" does not exist.', 48, $this->source); })())]));
        // line 49
        echo "    </div>
</nav>
";
        // line 51
        $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "public/menu.html.twig", 51)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => (isset($context["current_public_contest"]) || array_key_exists("current_public_contest", $context) ? $context["current_public_contest"] : (function () { throw new RuntimeError('Variable "current_public_contest" does not exist.', 51, $this->source); })())]));
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "public/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 51,  151 => 49,  149 => 48,  145 => 46,  142 => 45,  139 => 44,  137 => 43,  133 => 41,  131 => 40,  127 => 38,  121 => 35,  118 => 34,  116 => 33,  113 => 32,  105 => 27,  102 => 26,  100 => 25,  96 => 23,  92 => 21,  84 => 17,  82 => 16,  76 => 15,  71 => 13,  65 => 12,  60 => 9,  58 => 8,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-light bg-light fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"{{ path('public_index') }}\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\"
            aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    {% set current_route = app.request.attributes.get('_route') %}

    <div class=\"collapse navbar-collapse\" id=\"menuDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item {% if current_route in ['public_index', 'public_team'] %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('public_index') }}\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>
            <li class=\"nav-item {% if current_route == 'public_problems' %}active{% endif %}\">
                {% if is_granted('ROLE_JURY') or (current_public_contest is not null and current_public_contest.freezeData.started) %}
                    <a class=\"nav-link\" href=\"{{ path('public_problems') }}\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                {% else %}
                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                {% endif %}
            </li>

            {% if is_granted('ROLE_TEAM') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('team_index') }}\">
                        <i class=\"fas fa-arrow-right\"></i> Team
                    </a>
                </li>
            {% endif %}

            {% if is_granted('ROLE_JURY') or is_granted('ROLE_BALLOON') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_index') }}\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            {% endif %}
        </ul>

        {% include 'partials/menu_login_logout_button.html.twig' %}

        <ul class=\"navbar-nav\">
            {% if current_public_contests | length > 1 %}
                {% include 'partials/menu_change_contest.html.twig' with {contest: current_public_contest, contests: current_public_contests, change_path: 'public_change_contest', show_no_contest: false} %}
            {% endif %}
        </ul>

        {% include 'partials/menu_countdown.html.twig' with {contest: current_public_contest} %}
    </div>
</nav>
{% include 'partials/scoreboard_progress_bar.html.twig' with {margin: -9, contest: current_public_contest} %}
", "public/menu.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/public/menu.html.twig");
    }
}
