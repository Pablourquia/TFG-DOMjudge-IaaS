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

/* jury/judge_tasks.html.twig */
class __TwigTemplate_16106c50a1202ba7d1931a6928862506 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/judge_tasks.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/judge_tasks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/judge_tasks.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/judge_tasks.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/judge_tasks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Judge tasks for queue task ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["queueTask"]) || array_key_exists("queueTask", $context) ? $context["queueTask"] : (function () { throw new RuntimeError('Variable "queueTask" does not exist.', 4, $this->source); })()), "queueTaskid", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "
    <h1>Judge tasks for queue task ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["queueTask"]) || array_key_exists("queueTask", $context) ? $context["queueTask"] : (function () { throw new RuntimeError('Variable "queueTask" does not exist.', 13, $this->source); })()), "queueTaskid", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    ";
        // line 15
        if ( !(null === (isset($context["firstJudgeTask"]) || array_key_exists("firstJudgeTask", $context) ? $context["firstJudgeTask"] : (function () { throw new RuntimeError('Variable "firstJudgeTask" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"table table-sm table-striped\">
                    <tr>
                        <th>Submission</th>
                        <td>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["firstJudgeTask"]) || array_key_exists("firstJudgeTask", $context) ? $context["firstJudgeTask"] : (function () { throw new RuntimeError('Variable "firstJudgeTask" does not exist.', 22, $this->source); })()), "firstJudgingRun", [], "any", false, false, false, 22), "judging", [], "any", false, false, false, 22), "submission", [], "any", false, false, false, 22), "submitid", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">
                                ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["firstJudgeTask"]) || array_key_exists("firstJudgeTask", $context) ? $context["firstJudgeTask"] : (function () { throw new RuntimeError('Variable "firstJudgeTask" does not exist.', 23, $this->source); })()), "firstJudgingRun", [], "any", false, false, false, 23), "judging", [], "any", false, false, false, 23), "submission", [], "any", false, false, false, 23), "submitid", [], "any", false, false, false, 23), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Judging</th>
                        <td>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => twig_get_attribute($this->env, $this->source, (isset($context["firstJudgeTask"]) || array_key_exists("firstJudgeTask", $context) ? $context["firstJudgeTask"] : (function () { throw new RuntimeError('Variable "firstJudgeTask" does not exist.', 30, $this->source); })()), "jobId", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
                                ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firstJudgeTask"]) || array_key_exists("firstJudgeTask", $context) ? $context["firstJudgeTask"] : (function () { throw new RuntimeError('Variable "firstJudgeTask" does not exist.', 31, $this->source); })()), "jobId", [], "any", false, false, false, 31), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Priority</th>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["judgeTaksPriority"]) || array_key_exists("judgeTaksPriority", $context) ? $context["judgeTaksPriority"] : (function () { throw new RuntimeError('Variable "judgeTaksPriority" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                        <th>UUID</th>
                        <td class=\"text-monospace small\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["firstJudgeTask"]) || array_key_exists("firstJudgeTask", $context) ? $context["firstJudgeTask"] : (function () { throw new RuntimeError('Variable "firstJudgeTask" does not exist.', 41, $this->source); })()), "uuid", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    </tr>
                </table>
            </div>
        </div>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        echo twig_call_macro($macros["macros"], "macro_table", [(isset($context["judgeTasksTable"]) || array_key_exists("judgeTasksTable", $context) ? $context["judgeTasksTable"] : (function () { throw new RuntimeError('Variable "judgeTasksTable" does not exist.', 48, $this->source); })()), (isset($context["tableFields"]) || array_key_exists("tableFields", $context) ? $context["tableFields"] : (function () { throw new RuntimeError('Variable "tableFields" does not exist.', 48, $this->source); })()), (isset($context["numActions"]) || array_key_exists("numActions", $context) ? $context["numActions"] : (function () { throw new RuntimeError('Variable "numActions" does not exist.', 48, $this->source); })()), ["ordering" => "false"]], 48, $context, $this->getSourceContext());
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/judge_tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 48,  204 => 47,  195 => 41,  188 => 37,  179 => 31,  175 => 30,  165 => 23,  161 => 22,  153 => 16,  151 => 15,  146 => 13,  143 => 12,  130 => 11,  115 => 8,  110 => 7,  97 => 6,  69 => 4,  55 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Judge tasks for queue task {{ queueTask.queueTaskid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Judge tasks for queue task {{ queueTask.queueTaskid }}</h1>

    {% if firstJudgeTask is not null %}
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <table class=\"table table-sm table-striped\">
                    <tr>
                        <th>Submission</th>
                        <td>
                            <a href=\"{{ path('jury_submission', {'submitId': firstJudgeTask.firstJudgingRun.judging.submission.submitid }) }}\">
                                {{ firstJudgeTask.firstJudgingRun.judging.submission.submitid }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Judging</th>
                        <td>
                            <a href=\"{{ path('jury_submission_by_judging', {'jid': firstJudgeTask.jobId }) }}\">
                                {{ firstJudgeTask.jobId }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Priority</th>
                        <td>{{ judgeTaksPriority }}</td>
                    </tr>
                    <tr>
                        <th>UUID</th>
                        <td class=\"text-monospace small\">{{ firstJudgeTask.uuid }}</td>
                    </tr>
                </table>
            </div>
        </div>
    {% endif %}

    {{ macros.table(judgeTasksTable, tableFields, numActions, {'ordering': 'false'}) }}

{% endblock %}

", "jury/judge_tasks.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/judge_tasks.html.twig");
    }
}
