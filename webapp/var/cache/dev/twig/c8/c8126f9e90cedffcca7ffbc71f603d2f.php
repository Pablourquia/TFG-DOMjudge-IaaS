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

/* jury/index.html.twig */
class __TwigTemplate_25753f5a89d855c46dc38bae48be5055 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/index.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/index.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Jury Interface";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 6
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "<h1>DOMjudge Jury interface</h1>

<a href=\"https://www.domjudge.org/\">
  <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DOMjudgelogo.svg"), "html", null, true);
        echo "\" id=\"djlogo\" alt=\"DOMjudge logo\" class=\"float-right d-none d-md-block\" title=\"The DOMjudge logo: free as in beer!\">
</a>

<div class=\"row equal mt-3\">
    <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
        ";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 19
            echo "        <div class=\"card mb-3\">
            <div class=\"card-header\">
                Before contest:
            </div>
            <div class=\"card-body\">
                <ul>
                    <li><a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
            echo "\">Contests</a></li>
                    <li><a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executables");
            echo "\">Executables</a></li>
                    <li><a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\">Judgehosts</a></li>
                    <li><a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_languages");
            echo "\">Languages</a></li>
                    <li><a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problems");
            echo "\">Problems</a></li>
                    <li><a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_users");
            echo "\">Users</a></li>
                    <li><a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_teams");
            echo "\">Teams</a></li>
                    <li><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
            echo "\">Team Categories</a></li>
                    <li><a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliations");
            echo "\">Team Affiliations</a></li>
                    <li><a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verifier");
            echo "\">Judging verifier</a></li>
                    <li><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_create_quiz");
            echo "\"> Create questionnaire </a></li>
                </ul>
            </div>
        </div>
        ";
        }
        // line 40
        echo "
        <div class=\"card mb-3\">
            <div class=\"card-header\">
                During contest:
            </div>
            <div class=\"card-body\">
                <ul>
                    ";
        // line 47
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 48
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
            echo "\">Balloon Status</a></li>
                    ";
        }
        // line 50
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLARIFICATION_RW")) {
            // line 51
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\">Clarifications</a></li>
                    ";
        }
        // line 53
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 54
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\">Internal Errors</a></li>
                    ";
        }
        // line 56
        echo "                    ";
        if ((isset($context["have_printing"]) || array_key_exists("have_printing", $context) ? $context["have_printing"] : (function () { throw new RuntimeError('Variable "have_printing" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_print");
            echo "\">Print</a></li>
                    ";
        }
        // line 59
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 60
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\">Rejudgings</a></li>
                        <li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\">Scoreboard</a></li>
                        <li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_index");
            echo "\">Statistics/Analysis</a></li>
                        <li><a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\">Submissions</a></li>
                        ";
            // line 64
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 65
                echo "                            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_queue_tasks");
                echo "\">Queue tasks</a></li>
                        ";
            }
            // line 67
            echo "                        ";
            if ((isset($context["show_shadow_differences"]) || array_key_exists("show_shadow_differences", $context) ? $context["show_shadow_differences"] : (function () { throw new RuntimeError('Variable "show_shadow_differences" does not exist.', 67, $this->source); })())) {
                // line 68
                echo "                            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\">Shadow Differences</a></li>
                            <li><a href=\"";
                // line 69
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_external_contest");
                echo "\">External Contest</a></li>
                        ";
            }
            // line 71
            echo "                    ";
        }
        // line 72
        echo "                </ul>
            </div>
        </div>
    </div>

  <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
    ";
        // line 78
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 79
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">
        Administrator:
      </div>
      <div class=\"card-body\">
        <ul>
          <li><a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config");
            echo "\">Configuration settings</a></li>
          <li><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config_check");
            echo "\">Config checker</a></li>
          <li><a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_import_export");
            echo "\">Import / export</a></li>
          <li><a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_generate_passwords");
            echo "\">Manage team passwords</a></li>
          <li><a href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
            echo "\">Refresh scoreboard cache</a></li>
          <li><a href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog");
            echo "\">Audit log</a></li>
        </ul>
      </div>
    </div>
    ";
        }
        // line 95
        echo "
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        Documentation:
      </div>
      <div class=\"card-body\">
        <ul>
        <li><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/manual/html/index.html"), "html", null, true);
        echo "\">DOMjudge manual</a></li>
        <li><a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/manual/domjudge-team-manual.pdf"), "html", null, true);
        echo "\">Team manual <i class=\"fas fa-file-pdf\"></i></a></li>
        <li><a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.swagger_ui");
        echo "\">API documentation</a><br />
            See also the <a href=\"https://ccs-specs.icpc.io/2021-11/contest_api\">ICPC Contest API</a>.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 104,  351 => 103,  347 => 102,  338 => 95,  330 => 90,  326 => 89,  322 => 88,  318 => 87,  314 => 86,  310 => 85,  302 => 79,  300 => 78,  292 => 72,  289 => 71,  284 => 69,  279 => 68,  276 => 67,  270 => 65,  268 => 64,  264 => 63,  260 => 62,  256 => 61,  251 => 60,  248 => 59,  242 => 57,  239 => 56,  233 => 54,  230 => 53,  224 => 51,  221 => 50,  215 => 48,  213 => 47,  204 => 40,  196 => 35,  192 => 34,  188 => 33,  184 => 32,  180 => 31,  176 => 30,  172 => 29,  168 => 28,  164 => 27,  160 => 26,  156 => 25,  148 => 19,  146 => 18,  138 => 13,  133 => 10,  120 => 9,  105 => 6,  92 => 5,  66 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}{{ parent() }} - Jury Interface{% endblock %}

{% block extrahead %}
{{ parent() }}
{% endblock %}

{% block content %}
<h1>DOMjudge Jury interface</h1>

<a href=\"https://www.domjudge.org/\">
  <img src=\"{{ asset('images/DOMjudgelogo.svg') }}\" id=\"djlogo\" alt=\"DOMjudge logo\" class=\"float-right d-none d-md-block\" title=\"The DOMjudge logo: free as in beer!\">
</a>

<div class=\"row equal mt-3\">
    <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
        {% if is_granted('ROLE_JURY') %}
        <div class=\"card mb-3\">
            <div class=\"card-header\">
                Before contest:
            </div>
            <div class=\"card-body\">
                <ul>
                    <li><a href=\"{{ path('jury_contests') }}\">Contests</a></li>
                    <li><a href=\"{{ path('jury_executables') }}\">Executables</a></li>
                    <li><a href=\"{{ path('jury_judgehosts') }}\">Judgehosts</a></li>
                    <li><a href=\"{{ path('jury_languages') }}\">Languages</a></li>
                    <li><a href=\"{{ path('jury_problems') }}\">Problems</a></li>
                    <li><a href=\"{{ path('jury_users') }}\">Users</a></li>
                    <li><a href=\"{{ path('jury_teams') }}\">Teams</a></li>
                    <li><a href=\"{{ path('jury_team_categories') }}\">Team Categories</a></li>
                    <li><a href=\"{{ path('jury_team_affiliations') }}\">Team Affiliations</a></li>
                    <li><a href=\"{{ path('jury_judging_verifier') }}\">Judging verifier</a></li>
                    <li><a href=\"{{ path('jury_create_quiz') }}\"> Create questionnaire </a></li>
                </ul>
            </div>
        </div>
        {% endif %}

        <div class=\"card mb-3\">
            <div class=\"card-header\">
                During contest:
            </div>
            <div class=\"card-body\">
                <ul>
                    {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_BALLOON') %}
                        <li><a href=\"{{ path('jury_balloons') }}\">Balloon Status</a></li>
                    {% endif %}
                    {% if is_granted('ROLE_CLARIFICATION_RW') %}
                        <li><a href=\"{{ path('jury_clarifications') }}\">Clarifications</a></li>
                    {% endif %}
                    {% if is_granted('ROLE_JURY') %}
                        <li><a href=\"{{ path('jury_internal_errors') }}\">Internal Errors</a></li>
                    {% endif %}
                    {% if have_printing %}
                        <li><a href=\"{{ path('jury_print') }}\">Print</a></li>
                    {% endif %}
                    {% if is_granted('ROLE_JURY') %}
                        <li><a href=\"{{ path('jury_rejudgings') }}\">Rejudgings</a></li>
                        <li><a href=\"{{ path('jury_scoreboard') }}\">Scoreboard</a></li>
                        <li><a href=\"{{ path('analysis_index') }}\">Statistics/Analysis</a></li>
                        <li><a href=\"{{ path('jury_submissions') }}\">Submissions</a></li>
                        {% if is_granted('ROLE_ADMIN') %}
                            <li><a href=\"{{ path('jury_queue_tasks') }}\">Queue tasks</a></li>
                        {% endif %}
                        {% if show_shadow_differences %}
                            <li><a href=\"{{ path('jury_shadow_differences') }}\">Shadow Differences</a></li>
                            <li><a href=\"{{ path('jury_external_contest') }}\">External Contest</a></li>
                        {% endif %}
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>

  <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
    {% if is_granted('ROLE_ADMIN') %}
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        Administrator:
      </div>
      <div class=\"card-body\">
        <ul>
          <li><a href=\"{{ path('jury_config') }}\">Configuration settings</a></li>
          <li><a href=\"{{ path('jury_config_check') }}\">Config checker</a></li>
          <li><a href=\"{{ path('jury_import_export') }}\">Import / export</a></li>
          <li><a href=\"{{ path('jury_generate_passwords') }}\">Manage team passwords</a></li>
          <li><a href=\"{{ path('jury_refresh_cache') }}\">Refresh scoreboard cache</a></li>
          <li><a href=\"{{ path('jury_auditlog') }}\">Audit log</a></li>
        </ul>
      </div>
    </div>
    {% endif %}

    <div class=\"card mb-3\">
      <div class=\"card-header\">
        Documentation:
      </div>
      <div class=\"card-body\">
        <ul>
        <li><a href=\"{{ asset('doc/manual/html/index.html') }}\">DOMjudge manual</a></li>
        <li><a href=\"{{ asset('doc/manual/domjudge-team-manual.pdf') }}\">Team manual <i class=\"fas fa-file-pdf\"></i></a></li>
        <li><a href=\"{{ path('app.swagger_ui') }}\">API documentation</a><br />
            See also the <a href=\"https://ccs-specs.icpc.io/2021-11/contest_api\">ICPC Contest API</a>.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
{% endblock %}", "jury/index.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/index.html.twig");
    }
}
