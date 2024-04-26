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

/* jury/menu.html.twig */
class __TwigTemplate_4cfa7a781893542a860f9e38b4ff1476 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/menu.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "debug", [], "any", false, false, false, 1)) {
            echo " devmode ";
        }
        echo "\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
        echo "\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    ";
        // line 7
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "attributes", [], "any", false, false, false, 7), "get", [0 => "_route"], "method", false, false, false, 7);
        // line 8
        echo "
    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_ajax_updates");
        echo "\">
        <ul class=\"navbar-nav mr-auto\">

            ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON")) {
            // line 13
            echo "                <li class=\"nav-item ";
            if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 13, $this->source); })()) == "jury_balloons")) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
            echo "\">
                        <i class=\"fas fa-map-marker-alt\"></i> balloons
                        <span class=\"badge badge-info\" id=\"num-alerts-balloons\"></span>
                    </a>
                </li>
            ";
        }
        // line 20
        echo "
            ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "                <li class=\"nav-item dropdown ";
            if (((is_string($__internal_compile_0 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 22, $this->source); })())) && is_string($__internal_compile_1 = "jury_judgehost") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1))) || ((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 22, $this->source); })()) == "jury_internal_errors"))) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-gavel\"></i> judgehosts
                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item ";
            // line 29
            if ((is_string($__internal_compile_2 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 29, $this->source); })())) && is_string($__internal_compile_3 = "jury_judgehost") && ('' === $__internal_compile_3 || 0 === strpos($__internal_compile_2, $__internal_compile_3)))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\" id=\"menu_judgehosts\">
                            <i class=\"fas fa-server fa-fw\"></i> judgehosts <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
                        </a>
                        <a class=\"dropdown-item dropdown-disabled ";
            // line 32
            if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 32, $this->source); })()) == "jury_internal_errors")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\" id=\"menu_internal_error\">
                            <i class=\"fas fa-bolt fa-fw\"></i> internal error <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
                        </a>
                    </div>
                </li>
            ";
        }
        // line 38
        echo "
            ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLARIFICATION_RW")) {
            // line 40
            echo "                <li class=\"nav-item ";
            if ((is_string($__internal_compile_4 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 40, $this->source); })())) && is_string($__internal_compile_5 = "jury_clarification") && ('' === $__internal_compile_5 || 0 === strpos($__internal_compile_4, $__internal_compile_5)))) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\" id=\"menu_clarifications\"><i class=\"fas fa-comments\"></i> clarifications <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span></a>
                </li>
            ";
        }
        // line 44
        echo "
            ";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 46
            echo "                <li class=\"nav-item ";
            if ((is_string($__internal_compile_6 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 46, $this->source); })())) && is_string($__internal_compile_7 = "jury_submission") && ('' === $__internal_compile_7 || 0 === strpos($__internal_compile_6, $__internal_compile_7)))) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\"><i class=\"fas fa-file-code\"></i> submissions</a>
                </li>

                ";
            // line 50
            if ((isset($context["show_shadow_differences"]) || array_key_exists("show_shadow_differences", $context) ? $context["show_shadow_differences"] : (function () { throw new RuntimeError('Variable "show_shadow_differences" does not exist.', 50, $this->source); })())) {
                // line 51
                echo "                    <li class=\"nav-item dropdown ";
                if ((((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 51, $this->source); })()) == "jury_shadow_differences") || (is_string($__internal_compile_8 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 51, $this->source); })())) && is_string($__internal_compile_9 = "jury_external_contest") && ('' === $__internal_compile_9 || 0 === strpos($__internal_compile_8, $__internal_compile_9))))) {
                    echo "active";
                }
                echo "\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownShadow\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-copy\"></i> shadowing
                            <span class=\"badge badge-danger\" id=\"num-alerts-shadowdifferences\"></span>
                            <span class=\"badge badge-warning\" id=\"num-alerts-externalcontest\"></span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item ";
                // line 58
                if ((null === (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 58, $this->source); })()))) {
                    echo "dropdown-disabled";
                }
                echo " ";
                if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 58, $this->source); })()) == "jury_shadow_differences")) {
                    echo "active";
                }
                echo "\"
                                ";
                // line 59
                if ( !(null === (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 59, $this->source); })()))) {
                    echo "href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                    echo "\"";
                }
                echo " id=\"menu_shadow_differences\">
                                <i class=\"fas fa-not-equal fa-fw\"></i> shadow differences <span class=\"badge badge-danger\" id=\"num-alerts-shadowdifferences-sub\"></span>
                            </a>
                            <a class=\"dropdown-item ";
                // line 62
                if ((null === (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 62, $this->source); })()))) {
                    echo "dropdown-disabled";
                }
                echo " ";
                if ((is_string($__internal_compile_10 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 62, $this->source); })())) && is_string($__internal_compile_11 = "jury_external_contest") && ('' === $__internal_compile_11 || 0 === strpos($__internal_compile_10, $__internal_compile_11)))) {
                    echo "active";
                }
                echo "\"
                                ";
                // line 63
                if ( !(null === (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 63, $this->source); })()))) {
                    echo "href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_external_contest");
                    echo "\"";
                }
                echo " id=\"menu_external_contest\">
                                <i class=\"fas fa-laptop-code fa-fw\"></i> external contest <span class=\"badge badge-warning\" id=\"num-alerts-externalcontest-sub\"></span>
                            </a>
                        </div>
                    </li>
                ";
            }
            // line 69
            echo "
                <li class=\"nav-item ";
            // line 70
            if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 70, $this->source); })()) == "jury_rejudgings")) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\" id=\"menu_rejudgings\"><i class=\"fas fa-sync\"></i> rejudgings <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span></a>
                </li>
            ";
        }
        // line 74
        echo "
            ";
        // line 75
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 76
            echo "                <li class=\"nav-item ";
            if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 76, $this->source); })()) == "jury_scoreboard")) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\"><i class=\"fas fa-list-ol\"></i> scoreboard</a>
                </li>
            ";
        }
        // line 80
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 81
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> team</a>
                </li>
            ";
        }
        // line 85
        echo "        </ul>

        ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "debug", [], "any", false, false, false, 87)) {
            // line 88
            echo "            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <i class=\"fa-brands fa-dev fa-2x devmode-icon\"></i>
                </li>
            </ul>
        ";
        }
        // line 94
        echo "
        <ul class=\"navbar-nav ml-auto\">

            ";
        // line 98
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 99
            echo "                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-user\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101), "getUsername", [], "method", false, false, false, 101), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        ";
            // line 104
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "getName", [], "method", false, false, false, 104))) {
                // line 105
                echo "                            <a class=\"dropdown-item disabled\" href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "getName", [], "method", false, false, false, 105), "html", null, true);
                echo "</a>
                        ";
            }
            // line 107
            echo "
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
                            <i class=\"fas fa-bell-slash fa-fw\"></i> Disable Notifications
                        </a>
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
                            <i class=\"fas fa-bell fa-fw\"></i> Enable Notifications
                        </a>

                        ";
            // line 115
            if ((array_key_exists("refresh", $context) && (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 115, $this->source); })()))) {
                // line 116
                echo "                            <a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
                                <i class=\"fas fa-sync-alt fa-fw\"></i> <span id=\"refresh-toggle\">
                  ";
                // line 118
                if ((isset($context["refresh_flag"]) || array_key_exists("refresh_flag", $context) ? $context["refresh_flag"] : (function () { throw new RuntimeError('Variable "refresh_flag" does not exist.', 118, $this->source); })())) {
                    // line 119
                    echo "                      Disable Refresh
                  ";
                } else {
                    // line 121
                    echo "                      Enable Refresh
                  ";
                }
                // line 123
                echo "                </span>
                                ";
                // line 124
                if ((isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 124, $this->source); })())) {
                    // line 125
                    echo "                                    <span class=\"small text-muted\">(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["refresh"]) || array_key_exists("refresh", $context) ? $context["refresh"] : (function () { throw new RuntimeError('Variable "refresh" does not exist.', 125, $this->source); })()), "after", [], "any", false, false, false, 125), "html", null, true);
                    echo "s)</span>
                                ";
                }
                // line 127
                echo "                            </a>
                        ";
            }
            // line 129
            echo "
                        <a class=\"dropdown-item\" href=\"";
            // line 130
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout </a>
                    </div>
                </li>
            ";
        } else {
            // line 134
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"";
            // line 135
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"fas fa-sign-in-alt fa-fw\"></i> log in</a>
                </li>
            ";
        }
        // line 138
        echo "
            ";
        // line 139
        $this->loadTemplate("partials/menu_change_contest.html.twig", "jury/menu.html.twig", 139)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 139, $this->source); })()), "contests" => (isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 139, $this->source); })()), "change_path" => "jury_change_contest", "show_no_contest" => true]));
        // line 140
        echo "        </ul>
        ";
        // line 141
        $this->loadTemplate("partials/menu_countdown.html.twig", "jury/menu.html.twig", 141)->display(twig_array_merge($context, ["contest" => (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 141, $this->source); })())]));
        // line 142
        echo "    </div>
</nav>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 142,  378 => 141,  375 => 140,  373 => 139,  370 => 138,  364 => 135,  361 => 134,  354 => 130,  351 => 129,  347 => 127,  341 => 125,  339 => 124,  336 => 123,  332 => 121,  328 => 119,  326 => 118,  322 => 116,  320 => 115,  310 => 107,  304 => 105,  302 => 104,  296 => 101,  292 => 99,  289 => 98,  284 => 94,  276 => 88,  274 => 87,  270 => 85,  264 => 82,  261 => 81,  258 => 80,  252 => 77,  245 => 76,  243 => 75,  240 => 74,  234 => 71,  228 => 70,  225 => 69,  212 => 63,  202 => 62,  192 => 59,  182 => 58,  169 => 51,  167 => 50,  161 => 47,  154 => 46,  152 => 45,  149 => 44,  143 => 41,  136 => 40,  134 => 39,  131 => 38,  118 => 32,  108 => 29,  95 => 22,  93 => 21,  90 => 20,  81 => 14,  74 => 13,  72 => 12,  66 => 9,  63 => 8,  61 => 7,  53 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top {% if app.debug %} devmode {% endif %}\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"{{ path('jury_index') }}\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\" aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    {% set current_route = app.request.attributes.get('_route') %}

    <div class=\"collapse navbar-collapse\" id=\"menuDefault\" data-update-url=\"{{ path('jury_ajax_updates') }}\">
        <ul class=\"navbar-nav mr-auto\">

            {% if is_granted('ROLE_BALLOON') %}
                <li class=\"nav-item {% if current_route == 'jury_balloons' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('jury_balloons') }}\">
                        <i class=\"fas fa-map-marker-alt\"></i> balloons
                        <span class=\"badge badge-info\" id=\"num-alerts-balloons\"></span>
                    </a>
                </li>
            {% endif %}

            {% if is_granted('ROLE_ADMIN') %}
                <li class=\"nav-item dropdown {% if current_route starts with 'jury_judgehost' or current_route == 'jury_internal_errors' %}active{% endif %}\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownJudgehosts\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-gavel\"></i> judgehosts
                        <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts\"></span>
                        <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors\"></span>
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item {% if current_route starts with 'jury_judgehost' %}active{% endif %}\" href=\"{{ path('jury_judgehosts') }}\" id=\"menu_judgehosts\">
                            <i class=\"fas fa-server fa-fw\"></i> judgehosts <span class=\"badge badge-warning\" id=\"num-alerts-judgehosts-sub\"></span>
                        </a>
                        <a class=\"dropdown-item dropdown-disabled {% if current_route == 'jury_internal_errors' %}active{% endif %}\" href=\"{{ path('jury_internal_errors') }}\" id=\"menu_internal_error\">
                            <i class=\"fas fa-bolt fa-fw\"></i> internal error <span class=\"badge badge-danger\" id=\"num-alerts-internalerrors-sub\"></span>
                        </a>
                    </div>
                </li>
            {% endif %}

            {% if is_granted('ROLE_CLARIFICATION_RW') %}
                <li class=\"nav-item {% if current_route starts with 'jury_clarification' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('jury_clarifications') }}\" id=\"menu_clarifications\"><i class=\"fas fa-comments\"></i> clarifications <span class=\"badge badge-info\" id=\"num-alerts-clarifications\"></span></a>
                </li>
            {% endif %}

            {% if is_granted('ROLE_JURY') %}
                <li class=\"nav-item {% if current_route starts with 'jury_submission' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('jury_submissions') }}\"><i class=\"fas fa-file-code\"></i> submissions</a>
                </li>

                {% if show_shadow_differences %}
                    <li class=\"nav-item dropdown {% if current_route == 'jury_shadow_differences' or current_route starts with 'jury_external_contest' %}active{% endif %}\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownShadow\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-copy\"></i> shadowing
                            <span class=\"badge badge-danger\" id=\"num-alerts-shadowdifferences\"></span>
                            <span class=\"badge badge-warning\" id=\"num-alerts-externalcontest\"></span>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item {% if current_contest is null %}dropdown-disabled{% endif %} {% if current_route == 'jury_shadow_differences' %}active{% endif %}\"
                                {% if current_contest is not null %}href=\"{{ path('jury_shadow_differences') }}\"{% endif %} id=\"menu_shadow_differences\">
                                <i class=\"fas fa-not-equal fa-fw\"></i> shadow differences <span class=\"badge badge-danger\" id=\"num-alerts-shadowdifferences-sub\"></span>
                            </a>
                            <a class=\"dropdown-item {% if current_contest is null %}dropdown-disabled{% endif %} {% if current_route starts with 'jury_external_contest' %}active{% endif %}\"
                                {% if current_contest is not null %}href=\"{{ path('jury_external_contest') }}\"{% endif%} id=\"menu_external_contest\">
                                <i class=\"fas fa-laptop-code fa-fw\"></i> external contest <span class=\"badge badge-warning\" id=\"num-alerts-externalcontest-sub\"></span>
                            </a>
                        </div>
                    </li>
                {% endif %}

                <li class=\"nav-item {% if current_route == 'jury_rejudgings' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('jury_rejudgings') }}\" id=\"menu_rejudgings\"><i class=\"fas fa-sync\"></i> rejudgings <span class=\"badge badge-info\" id=\"num-alerts-rejudgings\"></span></a>
                </li>
            {% endif %}

            {% if is_granted('ROLE_JURY') or is_granted('ROLE_BALLOON') %}
                <li class=\"nav-item {% if current_route == 'jury_scoreboard' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('jury_scoreboard') }}\"><i class=\"fas fa-list-ol\"></i> scoreboard</a>
                </li>
            {% endif %}
            {% if is_granted('ROLE_TEAM') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"{{ path('team_index') }}\"><i class=\"fas fa-arrow-right\"></i> team</a>
                </li>
            {% endif %}
        </ul>

        {% if app.debug %}
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <i class=\"fa-brands fa-dev fa-2x devmode-icon\"></i>
                </li>
            </ul>
        {% endif %}

        <ul class=\"navbar-nav ml-auto\">

            {# Render user information + logout button #}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-user\"></i> {{ app.user.getUsername() }}
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        {% if app.user and app.user.getName() %}
                            <a class=\"dropdown-item disabled\" href=\"#\">{{ app.user.getName() }}</a>
                        {% endif %}

                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_disable\">
                            <i class=\"fas fa-bell-slash fa-fw\"></i> Disable Notifications
                        </a>
                        <a class=\"dropdown-item d-none\" href=\"#\" id=\"notify_enable\">
                            <i class=\"fas fa-bell fa-fw\"></i> Enable Notifications
                        </a>

                        {% if refresh is defined and refresh %}
                            <a class=\"dropdown-item\" href=\"#\" id=\"refresh-navitem\">
                                <i class=\"fas fa-sync-alt fa-fw\"></i> <span id=\"refresh-toggle\">
                  {% if refresh_flag %}
                      Disable Refresh
                  {% else %}
                      Enable Refresh
                  {% endif %}
                </span>
                                {% if refresh %}
                                    <span class=\"small text-muted\">({{ refresh.after }}s)</span>
                                {% endif %}
                            </a>
                        {% endif %}

                        <a class=\"dropdown-item\" href=\"{{ path('logout') }}\"><i class=\"fas fa-sign-out-alt fa-fw\"></i>Logout </a>
                    </div>
                </li>
            {% else %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" target=\"_top\" href=\"{{ path('login') }}\"><i class=\"fas fa-sign-in-alt fa-fw\"></i> log in</a>
                </li>
            {% endif %}

            {% include 'partials/menu_change_contest.html.twig' with {contest: current_contest, contests: current_contests, change_path: 'jury_change_contest', show_no_contest: true} %}
        </ul>
        {% include 'partials/menu_countdown.html.twig' with {contest: current_contest} %}
    </div>
</nav>
", "jury/menu.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/menu.html.twig");
    }
}
