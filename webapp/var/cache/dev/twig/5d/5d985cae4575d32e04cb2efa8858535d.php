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

/* jury/judgehost.html.twig */
class __TwigTemplate_edec48293b648142042c54ec9d60daa1 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/judgehost.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/judgehost.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/judgehost.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/judgehost.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/judgehost.html.twig", 1);
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

        echo "Judgehost ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 4, $this->source); })()), "hostname", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Judgehost ";
        // line 13
        echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 13, $this->source); })()), "hostname", [], "any", false, false, false, 13));
        echo "</h1>

    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 15, $this->source); })()), "hidden", [], "any", false, false, false, 15)) {
            // line 16
            echo "        <div class=\"alert alert-warning\">This judgehost is currently hidden.</div>
    ";
        }
        // line 18
        echo "
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 24, $this->source); })()), "judgehostid", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Enabled</th>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 28, $this->source); })()), "enabled", [], "any", false, false, false, 28)), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        ";
        // line 33
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 33, $this->source); })()), "polltime", [], "any", false, false, false, 33)) {
            // line 34
            echo "                            Judgehost never checked in.
                        ";
        } else {
            // line 36
            echo "                            <span class=\"";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->statusClass((isset($context["statusIcon"]) || array_key_exists("statusIcon", $context) ? $context["statusIcon"] : (function () { throw new RuntimeError('Variable "statusIcon" does not exist.', 36, $this->source); })())), "html", null, true);
            echo "\">";
            echo $this->extensions['App\Twig\TwigExtension']->statusIcon((isset($context["statusIcon"]) || array_key_exists("statusIcon", $context) ? $context["statusIcon"] : (function () { throw new RuntimeError('Variable "statusIcon" does not exist.', 36, $this->source); })()));
            echo "</span> ";
            echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 36, $this->source); })()), "html", null, true);
            echo ",
                            last checked in ";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 37, $this->source); })()), "polltime", [], "any", false, false, false, 37)), "html", null, true);
            echo "s ago.
                        ";
        }
        // line 39
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 47
            if (twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 47, $this->source); })()), "enabled", [], "any", false, false, false, 47)) {
                // line 48
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_disable", ["judgehostid" => twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 48, $this->source); })()), "judgehostid", [], "any", false, false, false, 48)]);
                // line 49
                echo "                ";
                $context["icon"] = "pause";
                // line 50
                echo "                ";
                $context["action"] = "Disable";
                // line 51
                echo "                ";
                $context["class"] = "warning";
            } else {
                // line 53
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_enable", ["judgehostid" => twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 53, $this->source); })()), "judgehostid", [], "any", false, false, false, 53)]);
                // line 54
                echo "                ";
                $context["icon"] = "play";
                // line 55
                echo "                ";
                $context["action"] = "Enable";
                // line 56
                echo "                ";
                $context["class"] = "success";
            }
            // line 58
            echo $this->extensions['App\Twig\TwigExtension']->button((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 58, $this->source); })()), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 58, $this->source); })()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 58, $this->source); })()), (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 58, $this->source); })()));
            echo "
            ";
            // line 59
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_delete", ["judgehostid" => twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 59, $this->source); })()), "judgehostid", [], "any", false, false, false, 59)]), "Delete judgehost", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 61
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/judgehost.html.twig", 61)->display(twig_array_merge($context, ["table" => "judgehost", "id" => twig_get_attribute($this->env, $this->source, (isset($context["judgehost"]) || array_key_exists("judgehost", $context) ? $context["judgehost"] : (function () { throw new RuntimeError('Variable "judgehost" does not exist.', 61, $this->source); })()), "judgehostid", [], "any", false, false, false, 61), "buttonClass" => "btn-primary"]));
        // line 62
        echo "    </div>

    <h3>Recent judgings</h3>

    <div data-ajax-refresh-target>
        ";
        // line 67
        $this->loadTemplate("jury/partials/judgehost_judgings.html.twig", "jury/judgehost.html.twig", 67)->display($context);
        // line 68
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/judgehost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 68,  255 => 67,  248 => 62,  245 => 61,  240 => 59,  236 => 58,  232 => 56,  229 => 55,  226 => 54,  224 => 53,  220 => 51,  217 => 50,  214 => 49,  212 => 48,  210 => 47,  208 => 46,  200 => 39,  195 => 37,  186 => 36,  182 => 34,  180 => 33,  172 => 28,  165 => 24,  157 => 18,  153 => 16,  151 => 15,  146 => 13,  143 => 12,  130 => 11,  115 => 8,  110 => 7,  97 => 6,  69 => 4,  55 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Judgehost {{ judgehost.hostname }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Judgehost {{ judgehost.hostname | printHost }}</h1>

    {% if judgehost.hidden %}
        <div class=\"alert alert-warning\">This judgehost is currently hidden.</div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>{{ judgehost.judgehostid }}</td>
                </tr>
                <tr>
                    <th>Enabled</th>
                    <td>{{ judgehost.enabled | printYesNo }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        {% if not judgehost.polltime %}
                            Judgehost never checked in.
                        {% else %}
                            <span class=\"{{ statusIcon|statusClass }}\">{{ statusIcon|statusIcon }}</span> {{ status }},
                            last checked in {{ judgehost.polltime | printtimediff }}s ago.
                        {% endif %}
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"mb-4\">
        {%- if is_granted('ROLE_ADMIN') -%}
            {%- if judgehost.enabled -%}
                {% set url = path('jury_judgehost_disable', {judgehostid: judgehost.judgehostid}) %}
                {% set icon = 'pause' %}
                {% set action = 'Disable' %}
                {% set class = 'warning' %}
            {%- else -%}
                {% set url = path('jury_judgehost_enable', {judgehostid: judgehost.judgehostid}) %}
                {% set icon = 'play' %}
                {% set action = 'Enable' %}
                {% set class = 'success' %}
            {%- endif -%}
            {{ button(url, action, class, icon) }}
            {{ button(path('jury_judgehost_delete', {'judgehostid': judgehost.judgehostid}), 'Delete judgehost', 'danger', 'trash-alt', true) }}
        {% endif %}
        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'judgehost', id: judgehost.judgehostid, buttonClass: 'btn-primary'} %}
    </div>

    <h3>Recent judgings</h3>

    <div data-ajax-refresh-target>
        {% include 'jury/partials/judgehost_judgings.html.twig' %}
    </div>

{% endblock %}
", "jury/judgehost.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/judgehost.html.twig");
    }
}
