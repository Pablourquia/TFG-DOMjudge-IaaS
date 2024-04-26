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

/* team/partials/submission_list.html.twig */
class __TwigTemplate_e7f5a363e375d7aec7ee16406561782d extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission_list.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/submission_list.html.twig"));

        // line 3
        echo "
";
        // line 4
        if (twig_test_empty((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "    <div class=\"alert alert-warning\">No submissions</div>
";
        } else {
            // line 7
            echo "    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">time</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            <th scope=\"col\">result</th>
            ";
            // line 14
            if ((isset($context["allowDownload"]) || array_key_exists("allowDownload", $context) ? $context["allowDownload"] : (function () { throw new RuntimeError('Variable "allowDownload" does not exist.', 14, $this->source); })())) {
                // line 15
                echo "                <th scope=\"col\"></th>
            ";
            }
            // line 17
            echo "        </tr>
        </thead>
        <tbody>";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 21
                echo "            ";
                $context["link"] = null;
                // line 22
                echo "            ";
                if ((((((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 22) < twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 22, $this->source); })()), "endtime", [], "any", false, false, false, 22)) && twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 22)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22), "result", [], "any", false, false, false, 22))) && ( !(isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 22, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 22), "first", [], "any", false, false, false, 22), "verified", [], "any", false, false, false, 22)))) {
                    // line 23
                    echo "                ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 23)]);
                    // line 24
                    echo "            ";
                }
                // line 25
                echo "
            ";
                // line 26
                $context["classes"] = "";
                // line 27
                echo "            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["submission"], "valid", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                ";
                    $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 28, $this->source); })()) . " ignore");
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "            ";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30)) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30), "seen", [], "any", false, false, false, 30))) {
                    // line 31
                    echo "                ";
                    $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 31, $this->source); })()) . " unseen");
                    // line 32
                    echo "            ";
                }
                // line 33
                echo "            <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 33, $this->source); })()), "html", null, true);
                echo "\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 35
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 35, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 35, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">
                        ";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 36), null, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 36)), "html", null, true);
                echo "
                    </a>
                </td>
                <td class=\"probid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 40
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 40, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 40, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
                        ";
                // line 41
                echo $this->extensions['App\Twig\TwigExtension']->problemBadge(twig_get_attribute($this->env, $this->source, $context["submission"], "contestProblem", [], "any", false, false, false, 41));
                echo "
                    </a>
                </td>
                <td class=\"langid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 45
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 45, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 45, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
                echo "\">
                        ";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 46), "langid", [], "any", false, false, false, 46), "html", null, true);
                echo "
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 50
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 50, $this->source); })())) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 50, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 51
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 51) > twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 51), "endtime", [], "any", false, false, false, 51))) {
                    // line 52
                    echo "                            ";
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("too-late");
                } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 53
$context["submission"], "judgings", [], "any", false, false, false, 53), "first", [], "any", false, false, false, 53)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 53), "first", [], "any", false, false, false, 53), "result", [], "any", false, false, false, 53)))) {
                    // line 54
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("");
                } elseif ((                // line 55
(isset($context["verificationRequired"]) || array_key_exists("verificationRequired", $context) ? $context["verificationRequired"] : (function () { throw new RuntimeError('Variable "verificationRequired" does not exist.', 55, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), "verified", [], "any", false, false, false, 55))) {
                    // line 56
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("");
                } else {
                    // line 58
                    echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 58), "first", [], "any", false, false, false, 58), "result", [], "any", false, false, false, 58));
                }
                // line 60
                echo "                    </a>
                </td>
        ";
                // line 62
                if ((isset($context["allowDownload"]) || array_key_exists("allowDownload", $context) ? $context["allowDownload"] : (function () { throw new RuntimeError('Variable "allowDownload" does not exist.', 62, $this->source); })())) {
                    // line 63
                    echo "                <td>
                    <a title=\"Download submission ZIP\" aria-label=\"download submission zip\" class=\"btn btn-light\" href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submission_download", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 64)]), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-file-archive\"></i>
                    </a>
                </td>
        ";
                }
                // line 69
                echo "            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        </tbody>
    </table>
";
        }
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/submission_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 71,  209 => 69,  201 => 64,  198 => 63,  196 => 62,  192 => 60,  189 => 58,  186 => 56,  184 => 55,  182 => 54,  180 => 53,  177 => 52,  175 => 51,  168 => 50,  161 => 46,  151 => 45,  144 => 41,  134 => 40,  127 => 36,  119 => 35,  113 => 33,  110 => 32,  107 => 31,  104 => 30,  101 => 29,  98 => 28,  95 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 23,  81 => 22,  78 => 21,  74 => 20,  70 => 17,  66 => 15,  64 => 14,  55 => 7,  51 => 5,  49 => 4,  46 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# Render a list of submissions for a team page #}
{# @var submission \\App\\Entity\\Submission #}

{% if submissions is empty %}
    <div class=\"alert alert-warning\">No submissions</div>
{% else %}
    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">time</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            <th scope=\"col\">result</th>
            {% if allowDownload %}
                <th scope=\"col\"></th>
            {% endif %}
        </tr>
        </thead>
        <tbody>
        {%- for submission in submissions %}
            {% set link = null %}
            {% if submission.submittime < current_team_contest.endtime and submission.result and submission.judgings.first is not empty and submission.judgings.first.result is not empty and (not verificationRequired or submission.judgings.first.verified) %}
                {% set link = path('team_submission', {submitId: submission.submitid}) %}
            {% endif %}

            {% set classes = '' %}
            {% if not submission.valid %}
                {% set classes = classes ~ ' ignore' %}
            {% endif %}
            {% if submission.judgings.first is empty or not submission.judgings.first.seen %}
                {% set classes = classes ~ ' unseen' %}
            {% endif %}
            <tr class=\"{{ classes }}\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" {% if link %}href=\"{{ link }}\"{% endif %}>
                        {{ submission.submittime | printtime(null, submission.contest) }}
                    </a>
                </td>
                <td class=\"probid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" {% if link %}href=\"{{ link }}\"{% endif %} title=\"{{ submission.problem.name }}\">
                        {{ submission.contestProblem | problemBadge }}
                    </a>
                </td>
                <td class=\"langid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" {% if link %}href=\"{{ link }}\"{% endif %} title=\"{{ submission.language.name }}\">
                        {{ submission.language.langid }}
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" {% if link %}href=\"{{ link }}\"{% endif %}>
                        {%- if submission.submittime > submission.contest.endtime %}
                            {{ 'too-late' | printResult }}
                        {%- elseif submission.judgings.first is empty or submission.judgings.first.result is empty %}
                            {{- '' | printResult -}}
                        {%- elseif verificationRequired and not submission.judgings.first.verified %}
                            {{- '' | printResult -}}
                        {%- else %}
                            {{- submission.judgings.first.result | printResult -}}
                        {%- endif %}
                    </a>
                </td>
        {% if allowDownload %}
                <td>
                    <a title=\"Download submission ZIP\" aria-label=\"download submission zip\" class=\"btn btn-light\" href=\"{{ path('team_submission_download', {'submitId': submission.submitid}) }}\">
                        <i class=\"fa fa-file-archive\"></i>
                    </a>
                </td>
        {% endif %}
            </tr>
        {%- endfor %}
        </tbody>
    </table>
{% endif %}
", "team/partials/submission_list.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/team/partials/submission_list.html.twig");
    }
}
