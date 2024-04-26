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

/* team/submit.html.twig */
class __TwigTemplate_feea3973aa2926a54a191862abaea75d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "team/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/submit.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/submit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/submit.html.twig"));

        $this->parent = $this->loadTemplate("team/base.html.twig", "team/submit.html.twig", 1);
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

        echo "Submit - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"container submitform pt-5\">
        ";
        // line 7
        if (( !twig_test_empty((isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 7, $this->source); })())) &&  !twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 7, $this->source); })()), "allowSubmit", [], "any", false, false, false, 7))) {
            // line 8
            echo "            ";
            $this->loadTemplate("partials/alert.html.twig", "team/submit.html.twig", 8)->display(twig_array_merge($context, ["type" => "danger", "message" => "Submissions (temporarily) disabled."]));
            // line 9
            echo "        ";
        } else {
            // line 10
            echo "            <h1 class=\"text-center\">Submit ";
            if ( !(null === (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 10, $this->source); })()))) {
                echo "problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
            }
            echo "</h1>
            ";
            // line 11
            if ((twig_test_empty((isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 11, $this->source); })())) || ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 11, $this->source); })()), "freezeData", [], "any", false, false, false, 11), "started", [], "any", false, false, false, 11)))) {
                // line 12
                echo "                <div class=\"container submitform\">
                    <div class=\"alert alert-danger\" role=\"alert\">Contest has not yet started - cannot submit.</div>
                </div>
            ";
            } else {
                // line 16
                echo "
                ";
                // line 17
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
                echo "
                ";
                // line 18
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "code", [], "any", false, false, false, 18), 'row');
                echo "
                ";
                // line 19
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "problem", [], "any", false, false, false, 19), 'row');
                echo "
                ";
                // line 20
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "language", [], "any", false, false, false, 20), 'row');
                echo "
                <div class=\"form-group\" data-entry-point>
                    ";
                // line 22
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "entry_point", [], "any", false, false, false, 22), 'label');
                echo "
                    ";
                // line 23
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "entry_point", [], "any", false, false, false, 23), 'widget');
                echo "
                    ";
                // line 24
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "entry_point", [], "any", false, false, false, 24), 'help');
                echo "
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn-success btn\"><i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </div>
                ";
                // line 30
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
                echo "

            ";
            }
            // line 33
            echo "        ";
        }
        // line 34
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "team/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 34,  174 => 33,  168 => 30,  159 => 24,  155 => 23,  151 => 22,  146 => 20,  142 => 19,  138 => 18,  134 => 17,  131 => 16,  125 => 12,  123 => 11,  115 => 10,  112 => 9,  109 => 8,  107 => 7,  104 => 6,  91 => 5,  65 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'team/base.html.twig' %}

{% block title %}Submit - {{ parent() }}{% endblock %}

{% block content %}
    <div class=\"container submitform pt-5\">
        {% if current_team_contest is not empty and not current_team_contest.allowSubmit %}
            {% include 'partials/alert.html.twig' with {'type': 'danger', 'message': 'Submissions (temporarily) disabled.'} %}
        {% else %}
            <h1 class=\"text-center\">Submit {% if problem is not null %}problem {{ problem.name }}{% endif %}</h1>
            {% if current_team_contest is empty or (not is_granted('ROLE_JURY') and not current_team_contest.freezeData.started) %}
                <div class=\"container submitform\">
                    <div class=\"alert alert-danger\" role=\"alert\">Contest has not yet started - cannot submit.</div>
                </div>
            {% else %}

                {{ form_start(form) }}
                {{ form_row(form.code) }}
                {{ form_row(form.problem) }}
                {{ form_row(form.language) }}
                <div class=\"form-group\" data-entry-point>
                    {{ form_label(form.entry_point) }}
                    {{ form_widget(form.entry_point) }}
                    {{ form_help(form.entry_point) }}
                </div>
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn-success btn\"><i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </div>
                {{ form_end(form) }}

            {% endif %}
        {% endif %}

    </div>
{% endblock %}
", "team/submit.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/team/submit.html.twig");
    }
}
