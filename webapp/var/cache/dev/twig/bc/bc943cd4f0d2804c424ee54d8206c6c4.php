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

/* jury/partials/judgehost_judgings.html.twig */
class __TwigTemplate_83b81f844ef67750341cca5f58641fd9 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/judgehost_judgings.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/judgehost_judgings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/judgehost_judgings.html.twig"));

        // line 1
        if ( !(isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <div class=\"alert alert-warning\">No judgings</div>
";
        } else {
            // line 4
            echo "    <table class=\"data-table table table-sm table-striped col-lg-4\">
        <thead>
        <tr>
            <th>ID</th>
            <th>started</th>
            <th>runtime</th>
            <th>result</th>
            <th>valid</th>
            <th>verified</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 17
                echo "            ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 17)]);
                // line 18
                echo "            <tr class=\"";
                if ( !twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 18)) {
                    echo "disabled";
                }
                echo "\">
                <td><a href=\"";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judging"], "judgingid", [], "any", false, false, false, 19), "html", null, true);
                echo "</a></td>
                <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 20)), "html", null, true);
                echo "</a></td>
                <td>
                    <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 22, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "aborted", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                            [aborted]
                        ";
                } else {
                    // line 26
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtimediff(twig_get_attribute($this->env, $this->source, $context["judging"], "starttime", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, $context["judging"], "endtime", [], "any", false, false, false, 26)), "html", null, true);
                    echo "
                        ";
                }
                // line 28
                echo "                    </a>
                </td>
                <td>
                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 31, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 32
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 32));
                echo "
                        ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "stillBusy", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                            (&hellip;)
                        ";
                }
                // line 36
                echo "                    </a>
                </td>
                <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 38, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 38)), "html", null, true);
                echo "</a></td>
                <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 39, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["judging"], "verified", [], "any", false, false, false, 39)), "html", null, true);
                echo "</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
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
        return "jury/partials/judgehost_judgings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 42,  138 => 39,  132 => 38,  128 => 36,  124 => 34,  122 => 33,  118 => 32,  114 => 31,  109 => 28,  103 => 26,  99 => 24,  97 => 23,  93 => 22,  86 => 20,  80 => 19,  73 => 18,  70 => 17,  66 => 16,  52 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not judgings %}
    <div class=\"alert alert-warning\">No judgings</div>
{% else %}
    <table class=\"data-table table table-sm table-striped col-lg-4\">
        <thead>
        <tr>
            <th>ID</th>
            <th>started</th>
            <th>runtime</th>
            <th>result</th>
            <th>valid</th>
            <th>verified</th>
        </tr>
        </thead>
        <tbody>
        {% for judging in judgings %}
            {% set link = path('jury_submission_by_judging', {jid: judging.judgingid}) %}
            <tr class=\"{% if not judging.valid %}disabled{% endif %}\">
                <td><a href=\"{{ link }}\">{{ judging.judgingid }}</a></td>
                <td><a href=\"{{ link }}\">{{ judging.starttime | printtime }}</a></td>
                <td>
                    <a href=\"{{ link }}\">
                        {% if judging.aborted %}
                            [aborted]
                        {% else %}
                            {{ judging.starttime | printtimediff(judging.endtime) }}
                        {% endif %}
                    </a>
                </td>
                <td>
                    <a href=\"{{ link }}\">
                        {{ judging.result | printResult(judging.valid) }}
                        {% if judging.stillBusy %}
                            (&hellip;)
                        {% endif %}
                    </a>
                </td>
                <td><a href=\"{{ link }}\">{{ judging.valid | printYesNo }}</a></td>
                <td><a href=\"{{ link }}\">{{ judging.verified | printYesNo }}</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endif %}
", "jury/partials/judgehost_judgings.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/judgehost_judgings.html.twig");
    }
}
