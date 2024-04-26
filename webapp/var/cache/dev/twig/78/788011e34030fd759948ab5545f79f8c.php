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

/* jury/config_check.html.twig */
class __TwigTemplate_8d81860b3f81e45e38549521bb5f5f4e extends Template
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
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/config_check.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/config_check.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/config_check.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/config_check.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/config_check.html.twig", 1);
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

        echo "Configuration check - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<div class=\"card w-40 float-right m-5\">
  <div class=\"card-body\">
  <h5 class=\"card-title\">System information</h5>
  <table class=\"w-100\">
  <tr><td>DOMjudge:</td><td id=\"dj_version\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["DOMJUDGE_VERSION"]) || array_key_exists("DOMJUDGE_VERSION", $context) ? $context["DOMJUDGE_VERSION"] : (function () { throw new RuntimeError('Variable "DOMJUDGE_VERSION" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</td></tr>
  <tr><td>Environment:</td><td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "environment", [], "any", false, false, false, 12), "html", null, true);
        echo "</td></tr>
  <tr><td>Debug:</td><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "debug", [], "any", false, false, false, 13)), "html", null, true);
        echo "</td></tr>
  <tr><td colspan=\"2\">&nbsp;</td></tr>
  <tr><td>PHP:</td><td>";
        // line 15
        echo twig_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
        echo "</td></tr>
  <tr><td>Symfony:</td><td>";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("\\Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "</td></tr>
  <tr><td>Twig:</td><td>";
        // line 17
        echo twig_escape_filter($this->env, twig_constant("\\Twig\\Environment::VERSION"), "html", null, true);
        echo "</td></tr>
  </table>
  </div>
</div>

<h1>Configuration check</h1>

<div class=\"card m-3 bg-light\">
  <div class=\"card-body\">
  <h5 class=\"card-title\">Installation locations</h5>
  <table>
  <tr><td>Base url (use in submit client):</td><td><kbd>";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("root");
        echo "</kbd></td></tr>
  <tr><td>API url (use in <kbd>restapi.secret</kbd>):</td><td><kbd>";
        // line 29
        echo twig_escape_filter($this->env, twig_trim_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("current_api_root"), "/", "right"), "html", null, true);
        echo "</kbd></td></tr>
  <tr><td colspan=\"2\">&nbsp;</td></tr>
  <tr><td>DOMserver installation path:</td><td><kbd>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 31, $this->source); })()), "project", [], "any", false, false, false, 31), "html", null, true);
        echo "</kbd></td></tr>
  <tr><td>Logos/images are under:</td><td><kbd>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 32, $this->source); })()), "project", [], "any", false, false, false, 32), "html", null, true);
        echo "/webapp/public/images/</kbd></td></tr>
  <tr><td>Custom CSS is under:</td><td><kbd>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 33, $this->source); })()), "project", [], "any", false, false, false, 33), "html", null, true);
        echo "/webapp/public/css/custom/</kbd></td></tr>
  <tr><td>Custom JavaScript is under:</td><td><kbd>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 34, $this->source); })()), "project", [], "any", false, false, false, 34), "html", null, true);
        echo "/webapp/public/js/custom/</kbd></td></tr>
  <tr><td>Documentation files are under:</td><td><kbd>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 35, $this->source); })()), "project", [], "any", false, false, false, 35), "html", null, true);
        echo "/webapp/public/docs/</kbd></td></tr>
  <tr><td>DOMjudge console binary:</td><td><kbd>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 36, $this->source); })()), "project", [], "any", false, false, false, 36), "html", null, true);
        echo "/webapp/bin/console</kbd></td></tr>
  <tr><td>Log directory:</td><td><kbd>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dir"]) || array_key_exists("dir", $context) ? $context["dir"] : (function () { throw new RuntimeError('Variable "dir" does not exist.', 37, $this->source); })()), "log", [], "any", false, false, false, 37), "html", null, true);
        echo "</kbd></td></tr>
  </table>
  </div>
</div>

<h2>Checks</h2>

";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["resultgroup"] => $context["groupresults"]) {
            // line 45
            echo "<h3 class=\"mt-3 ml-3\">";
            echo twig_escape_filter($this->env, $context["resultgroup"], "html", null, true);
            echo "</h3>

<div class=\"accordion w-50 ml-5\" id=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_replace_filter($context["resultgroup"], [" " => ""]), "html", null, true);
            echo "\" role=\"tablist\" aria-multiselectable=\"true\">

";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupresults"]);
            foreach ($context['_seq'] as $context["test"] => $context["testresult"]) {
                // line 50
                echo "  <div class=\"card\">
    <h6 class=\"card-header result ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testresult"], "result", [], "any", false, false, false, 51), "html", null, true);
                echo "\" role=\"tab\" id=\"heading";
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\">
      <a class=\"collapsed d-block text-dark pt-0 pb-0\" data-toggle=\"collapse\" href=\"#collapse";
                // line 52
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapse";
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\" data-parent=\"#";
                echo twig_escape_filter($this->env, twig_replace_filter($context["resultgroup"], [" " => ""]), "html", null, true);
                echo "\">
        ";
                // line 53
                if ((twig_get_attribute($this->env, $this->source, $context["testresult"], "result", [], "any", false, false, false, 53) == "O")) {
                    // line 54
                    echo "        <i class=\"fas fa-check text-success\"></i>
        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 55
$context["testresult"], "result", [], "any", false, false, false, 55) == "W")) {
                    // line 56
                    echo "        <i class=\"fas fa-exclamation-triangle text-warning\"></i>
        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 57
$context["testresult"], "result", [], "any", false, false, false, 57) == "E")) {
                    // line 58
                    echo "        <i class=\"fas fa-skull-crossbones text-danger\"></i>
        ";
                }
                // line 60
                echo "        <i class=\"fa fa-chevron-down float-right\"></i>
        ";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testresult"], "caption", [], "any", false, false, false, 61), "html", null, true);
                echo "
      </a>
    </h6>

    <div id=\"collapse";
                // line 65
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\" class=\"collapse collapsed\" role=\"tabpanel\" aria-labelledby=\"heading";
                echo twig_escape_filter($this->env, $context["test"], "html", null, true);
                echo "\">
      <div class=\"card-body\">
        ";
                // line 67
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["testresult"], "desc", [], "any", false, false, false, 67);
                // line 68
                echo "        ";
                if (( !twig_get_attribute($this->env, $this->source, $context["testresult"], "escape", [], "any", true, true, false, 68) || twig_get_attribute($this->env, $this->source, $context["testresult"], "escape", [], "any", false, false, false, 68))) {
                    // line 69
                    echo "          ";
                    $context["description"] = twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 69, $this->source); })()));
                    // line 70
                    echo "        ";
                }
                // line 71
                echo "        ";
                echo twig_replace_filter((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 71, $this->source); })()), ["
" => "<br />
"]);
                echo "
      </div>
    </div>
  </div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['test'], $context['testresult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['resultgroup'], $context['groupresults'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
<div class=\"mt-5 mb-5\">
All checks complete. <i class=\"fas fa-clipboard-check\"></i>
</div>

<details>
<summary class=\"text-muted\">Timing information</summary>
<ul>
";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stopwatch"]) || array_key_exists("stopwatch", $context) ? $context["stopwatch"] : (function () { throw new RuntimeError('Variable "stopwatch" does not exist.', 88, $this->source); })()), "sections", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 89
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 89)) {
                // line 90
                echo "  <li><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "id", [], "any", false, false, false, 90), "html", null, true);
                echo "</strong>
    <ul>
    ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["section"], "events", [], "any", false, false, false, 92));
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 93
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 93) != "__section__")) {
                        // line 94
                        echo "      <li>";
                        echo twig_escape_filter($this->env, $context["event"], "html", null, true);
                        echo "</li>
      ";
                    }
                    // line 96
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "    </ul>
  </li>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "</ul>
</details>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/config_check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 101,  336 => 97,  330 => 96,  324 => 94,  321 => 93,  317 => 92,  311 => 90,  308 => 89,  304 => 88,  294 => 80,  286 => 77,  271 => 71,  268 => 70,  265 => 69,  262 => 68,  260 => 67,  253 => 65,  246 => 61,  243 => 60,  239 => 58,  237 => 57,  234 => 56,  232 => 55,  229 => 54,  227 => 53,  219 => 52,  213 => 51,  210 => 50,  206 => 49,  201 => 47,  195 => 45,  191 => 44,  181 => 37,  177 => 36,  173 => 35,  169 => 34,  165 => 33,  161 => 32,  157 => 31,  152 => 29,  148 => 28,  134 => 17,  130 => 16,  126 => 15,  121 => 13,  117 => 12,  113 => 11,  107 => 7,  94 => 6,  68 => 4,  54 => 1,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Configuration check - {{ parent() }}{% endblock %}

{% block content %}
<div class=\"card w-40 float-right m-5\">
  <div class=\"card-body\">
  <h5 class=\"card-title\">System information</h5>
  <table class=\"w-100\">
  <tr><td>DOMjudge:</td><td id=\"dj_version\">{{ DOMJUDGE_VERSION }}</td></tr>
  <tr><td>Environment:</td><td>{{ app.environment }}</td></tr>
  <tr><td>Debug:</td><td>{{ app.debug|printYesNo }}</td></tr>
  <tr><td colspan=\"2\">&nbsp;</td></tr>
  <tr><td>PHP:</td><td>{{ constant('PHP_VERSION') }}</td></tr>
  <tr><td>Symfony:</td><td>{{ constant('\\\\Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}</td></tr>
  <tr><td>Twig:</td><td>{{ constant('\\\\Twig\\\\Environment::VERSION') }}</td></tr>
  </table>
  </div>
</div>

<h1>Configuration check</h1>

<div class=\"card m-3 bg-light\">
  <div class=\"card-body\">
  <h5 class=\"card-title\">Installation locations</h5>
  <table>
  <tr><td>Base url (use in submit client):</td><td><kbd>{{ url('root') }}</kbd></td></tr>
  <tr><td>API url (use in <kbd>restapi.secret</kbd>):</td><td><kbd>{{ url('current_api_root') | trim('/', 'right') }}</kbd></td></tr>
  <tr><td colspan=\"2\">&nbsp;</td></tr>
  <tr><td>DOMserver installation path:</td><td><kbd>{{ dir.project }}</kbd></td></tr>
  <tr><td>Logos/images are under:</td><td><kbd>{{ dir.project }}/webapp/public/images/</kbd></td></tr>
  <tr><td>Custom CSS is under:</td><td><kbd>{{ dir.project }}/webapp/public/css/custom/</kbd></td></tr>
  <tr><td>Custom JavaScript is under:</td><td><kbd>{{ dir.project }}/webapp/public/js/custom/</kbd></td></tr>
  <tr><td>Documentation files are under:</td><td><kbd>{{ dir.project }}/webapp/public/docs/</kbd></td></tr>
  <tr><td>DOMjudge console binary:</td><td><kbd>{{ dir.project }}/webapp/bin/console</kbd></td></tr>
  <tr><td>Log directory:</td><td><kbd>{{ dir.log }}</kbd></td></tr>
  </table>
  </div>
</div>

<h2>Checks</h2>

{% for resultgroup,groupresults in results %}
<h3 class=\"mt-3 ml-3\">{{ resultgroup }}</h3>

<div class=\"accordion w-50 ml-5\" id=\"{{ resultgroup|replace({' ':''}) }}\" role=\"tablist\" aria-multiselectable=\"true\">

{% for test,testresult in groupresults %}
  <div class=\"card\">
    <h6 class=\"card-header result {{ testresult.result }}\" role=\"tab\" id=\"heading{{ test }}\">
      <a class=\"collapsed d-block text-dark pt-0 pb-0\" data-toggle=\"collapse\" href=\"#collapse{{ test }}\" aria-expanded=\"true\" aria-controls=\"collapse{{ test }}\" data-parent=\"#{{ resultgroup|replace({' ':''}) }}\">
        {% if testresult.result == 'O' %}
        <i class=\"fas fa-check text-success\"></i>
        {% elseif testresult.result == 'W' %}
        <i class=\"fas fa-exclamation-triangle text-warning\"></i>
        {% elseif testresult.result == 'E' %}
        <i class=\"fas fa-skull-crossbones text-danger\"></i>
        {% endif %}
        <i class=\"fa fa-chevron-down float-right\"></i>
        {{ testresult.caption }}
      </a>
    </h6>

    <div id=\"collapse{{ test }}\" class=\"collapse collapsed\" role=\"tabpanel\" aria-labelledby=\"heading{{ test }}\">
      <div class=\"card-body\">
        {% set description = testresult.desc %}
        {% if testresult.escape is not defined or testresult.escape %}
          {% set description = description | escape %}
        {% endif %}
        {{ description | replace({\"\\n\":\"<br />\\n\"}) | raw }}
      </div>
    </div>
  </div>

{% endfor %}
</div>

{% endfor %}

<div class=\"mt-5 mb-5\">
All checks complete. <i class=\"fas fa-clipboard-check\"></i>
</div>

<details>
<summary class=\"text-muted\">Timing information</summary>
<ul>
{% for section in stopwatch.sections %}
  {% if section.id %}
  <li><strong>{{ section.id }}</strong>
    <ul>
    {% for event in section.events %}
      {% if event.name != '__section__' %}
      <li>{{ event }}</li>
      {% endif %}
    {% endfor %}
    </ul>
  </li>
  {% endif %}
{% endfor %}
</ul>
</details>

{% endblock %}
", "jury/config_check.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/config_check.html.twig");
    }
}
