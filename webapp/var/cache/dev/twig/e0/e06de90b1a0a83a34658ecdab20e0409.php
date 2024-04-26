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

/* jury/partials/external_contest_info.html.twig */
class __TwigTemplate_f53f87e23a3191ad29973dca7886bf31 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/external_contest_info.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/external_contest_info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/external_contest_info.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-lg-6\">
        <table class=\"table table-sm table-striped\">
            <tr>
                <th>ID</th>
                <td>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalContestSource"]) || array_key_exists("externalContestSource", $context) ? $context["externalContestSource"] : (function () { throw new RuntimeError('Variable "externalContestSource" does not exist.', 6, $this->source); })()), "extsourceid", [], "any", false, false, false, 6), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Source</th>
                <td>
                    ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalContestSource"]) || array_key_exists("externalContestSource", $context) ? $context["externalContestSource"] : (function () { throw new RuntimeError('Variable "externalContestSource" does not exist.', 11, $this->source); })()), "getReadableType", [], "any", false, false, false, 11), "html", null, true);
        echo "
                    at
                    <code>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalContestSource"]) || array_key_exists("externalContestSource", $context) ? $context["externalContestSource"] : (function () { throw new RuntimeError('Variable "externalContestSource" does not exist.', 13, $this->source); })()), "source", [], "any", false, false, false, 13), "html", null, true);
        echo "</code>
                </td>
            </tr>
            ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["externalContestSource"]) || array_key_exists("externalContestSource", $context) ? $context["externalContestSource"] : (function () { throw new RuntimeError('Variable "externalContestSource" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16)) {
            // line 17
            echo "                <tr>
                    <th>Username</th>
                    <td><code>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalContestSource"]) || array_key_exists("externalContestSource", $context) ? $context["externalContestSource"] : (function () { throw new RuntimeError('Variable "externalContestSource" does not exist.', 19, $this->source); })()), "username", [], "any", false, false, false, 19), "html", null, true);
            echo "</code></td>
                </tr>
            ";
        }
        // line 22
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["externalContestSource"]) || array_key_exists("externalContestSource", $context) ? $context["externalContestSource"] : (function () { throw new RuntimeError('Variable "externalContestSource" does not exist.', 22, $this->source); })()), "password", [], "any", false, false, false, 22)) {
            // line 23
            echo "                <tr>
                    <th>Password</th>
                    <td>
                        <code data-password-hidden>
                            ••••••••
                        </code>
                        <code data-password class=\"d-none\">
                            ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalContestSource"]) || array_key_exists("externalContestSource", $context) ? $context["externalContestSource"] : (function () { throw new RuntimeError('Variable "externalContestSource" does not exist.', 30, $this->source); })()), "password", [], "any", false, false, false, 30), "html", null, true);
            echo "
                        </code>
                    </td>
                </tr>
            ";
        }
        // line 35
        echo "            <tr>
                <th>Command</th>
                <td>
                    <code>";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["webappDir"]) || array_key_exists("webappDir", $context) ? $context["webappDir"] : (function () { throw new RuntimeError('Variable "webappDir" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "/bin/console import:eventfeed ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 38, $this->source); })()), "cid", [], "any", false, false, false, 38), "html", null, true);
        echo "</code>
                </td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    ";
        // line 44
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["externalContestSource"]) || array_key_exists("externalContestSource", $context) ? $context["externalContestSource"] : (function () { throw new RuntimeError('Variable "externalContestSource" does not exist.', 44, $this->source); })()), "lastPollTime", [], "any", false, false, false, 44)) {
            // line 45
            echo "                        Event feed reader never checked in.
                    ";
        } else {
            // line 47
            echo "                        ";
            echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 47, $this->source); })()), "html", null, true);
            echo ", last checked in ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, (isset($context["externalContestSource"]) || array_key_exists("externalContestSource", $context) ? $context["externalContestSource"] : (function () { throw new RuntimeError('Variable "externalContestSource" does not exist.', 47, $this->source); })()), "lastPollTime", [], "any", false, false, false, 47)), "html", null, true);
            echo "s ago.
                    ";
        }
        // line 49
        echo "                </td>
            </tr>
            <tr>
                <th>Last event ID</th>
                <td>
                    ";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "lastEventId", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["externalContestSource"] ?? null), "lastEventId", [], "any", false, false, false, 54), "-")) : ("-")), "html", null, true);
        echo "
                </td>
            </tr>
            <tr>
                <th>External contest information</th>
                <td>
                    Valid: ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["sourceService"]) || array_key_exists("sourceService", $context) ? $context["sourceService"] : (function () { throw new RuntimeError('Variable "sourceService" does not exist.', 60, $this->source); })()), "validContestSource", [], "any", false, false, false, 60)), "html", null, true);
        echo "<br/>
                    ";
        // line 61
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["sourceService"]) || array_key_exists("sourceService", $context) ? $context["sourceService"] : (function () { throw new RuntimeError('Variable "sourceService" does not exist.', 61, $this->source); })()), "validContestSource", [], "any", false, false, false, 61)) {
            // line 62
            echo "                        Error: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sourceService"]) || array_key_exists("sourceService", $context) ? $context["sourceService"] : (function () { throw new RuntimeError('Variable "sourceService" does not exist.', 62, $this->source); })()), "loadingError", [], "any", false, false, false, 62), "html", null, true);
            echo "
                    ";
        } else {
            // line 64
            echo "                        ID: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sourceService"]) || array_key_exists("sourceService", $context) ? $context["sourceService"] : (function () { throw new RuntimeError('Variable "sourceService" does not exist.', 64, $this->source); })()), "contestId", [], "any", false, false, false, 64), "html", null, true);
            echo "<br/>
                        Name: ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sourceService"]) || array_key_exists("sourceService", $context) ? $context["sourceService"] : (function () { throw new RuntimeError('Variable "sourceService" does not exist.', 65, $this->source); })()), "contestName", [], "any", false, false, false, 65), "html", null, true);
            echo "<br/>
                        Start time: ";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["sourceService"]) || array_key_exists("sourceService", $context) ? $context["sourceService"] : (function () { throw new RuntimeError('Variable "sourceService" does not exist.', 66, $this->source); })()), "contestStartTime", [], "any", false, false, false, 66), "Y-m-d H:i:s (T)"), "html", null, true);
            echo "<br/>
                        Duration: ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sourceService"]) || array_key_exists("sourceService", $context) ? $context["sourceService"] : (function () { throw new RuntimeError('Variable "sourceService" does not exist.', 67, $this->source); })()), "contestDuration", [], "any", false, false, false, 67), "html", null, true);
            echo "
                    ";
        }
        // line 69
        echo "                </td>
            </tr>
        </table>
    </div>
</div>

<style>
    code[data-password], code[data-password-hidden] {
        cursor: pointer;
    }
</style>

<script>
    \$(function() {
        var \$password = \$('code[data-password]');
        var \$passwordHidden = \$('code[data-password-hidden]');
        \$password.on('click', function() {
            \$password.addClass('d-none');
            \$passwordHidden.removeClass('d-none');
        });
        \$passwordHidden.on('click', function() {
            \$passwordHidden.addClass('d-none');
            \$password.removeClass('d-none');
        });
    });
</script>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/external_contest_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 69,  175 => 67,  171 => 66,  167 => 65,  162 => 64,  156 => 62,  154 => 61,  150 => 60,  141 => 54,  134 => 49,  126 => 47,  122 => 45,  120 => 44,  109 => 38,  104 => 35,  96 => 30,  87 => 23,  84 => 22,  78 => 19,  74 => 17,  72 => 16,  66 => 13,  61 => 11,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-6\">
        <table class=\"table table-sm table-striped\">
            <tr>
                <th>ID</th>
                <td>{{ externalContestSource.extsourceid }}</td>
            </tr>
            <tr>
                <th>Source</th>
                <td>
                    {{ externalContestSource.getReadableType }}
                    at
                    <code>{{ externalContestSource.source }}</code>
                </td>
            </tr>
            {% if externalContestSource.username %}
                <tr>
                    <th>Username</th>
                    <td><code>{{ externalContestSource.username }}</code></td>
                </tr>
            {% endif %}
            {% if externalContestSource.password %}
                <tr>
                    <th>Password</th>
                    <td>
                        <code data-password-hidden>
                            ••••••••
                        </code>
                        <code data-password class=\"d-none\">
                            {{ externalContestSource.password }}
                        </code>
                    </td>
                </tr>
            {% endif %}
            <tr>
                <th>Command</th>
                <td>
                    <code>{{ webappDir }}/bin/console import:eventfeed {{ current_contest.cid }}</code>
                </td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    {% if not externalContestSource.lastPollTime %}
                        Event feed reader never checked in.
                    {% else %}
                        {{ status }}, last checked in {{ externalContestSource.lastPollTime | printtimediff }}s ago.
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th>Last event ID</th>
                <td>
                    {{ externalContestSource.lastEventId | default('-') }}
                </td>
            </tr>
            <tr>
                <th>External contest information</th>
                <td>
                    Valid: {{ sourceService.validContestSource | printYesNo }}<br/>
                    {% if not sourceService.validContestSource %}
                        Error: {{ sourceService.loadingError }}
                    {% else %}
                        ID: {{ sourceService.contestId }}<br/>
                        Name: {{ sourceService.contestName }}<br/>
                        Start time: {{ sourceService.contestStartTime | printtime('Y-m-d H:i:s (T)') }}<br/>
                        Duration: {{ sourceService.contestDuration }}
                    {% endif %}
                </td>
            </tr>
        </table>
    </div>
</div>

<style>
    code[data-password], code[data-password-hidden] {
        cursor: pointer;
    }
</style>

<script>
    \$(function() {
        var \$password = \$('code[data-password]');
        var \$passwordHidden = \$('code[data-password-hidden]');
        \$password.on('click', function() {
            \$password.addClass('d-none');
            \$passwordHidden.removeClass('d-none');
        });
        \$passwordHidden.on('click', function() {
            \$passwordHidden.addClass('d-none');
            \$password.removeClass('d-none');
        });
    });
</script>
", "jury/partials/external_contest_info.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/external_contest_info.html.twig");
    }
}
