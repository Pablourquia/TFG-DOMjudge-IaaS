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

/* jury/partials/clarification_form.html.twig */
class __TwigTemplate_f02c8a8798ac555190904374e450218d extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/clarification_form.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/clarification_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/clarification_form.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_send");
        echo "\" method=\"post\" id=\"sendclar\" onsubmit=\"return confirmClar();\">

";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "clarid", [], "any", true, true, false, 3)) {
            // line 4
            echo "<input type=\"hidden\" name=\"id\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 4, $this->source); })()), "clarid", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
";
        }
        // line 6
        echo "
<div class=\"form-group\">
<label for=\"sendto\">Send to:</label>
<select id=\"sendto\" name=\"sendto\" class=\"custom-select\">
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["clarform"]) || array_key_exists("clarform", $context) ? $context["clarform"] : (function () { throw new RuntimeError('Variable "clarform" does not exist.', 10, $this->source); })()), "teams", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["id"] => $context["team"]) {
            // line 11
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "toteam", [], "any", true, true, false, 11) && (twig_get_attribute($this->env, $this->source, (isset($context["clarform"]) || array_key_exists("clarform", $context) ? $context["clarform"] : (function () { throw new RuntimeError('Variable "clarform" does not exist.', 11, $this->source); })()), "toteam", [], "any", false, false, false, 11) == $context["id"]))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["team"], "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</select>
</div>

<div class=\"form-group\">
<label for=\"subject\">Subject:</label>
<select name=\"problem\" id=\"subject\" class=\"custom-select\">
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["clarform"]) || array_key_exists("clarform", $context) ? $context["clarform"] : (function () { throw new RuntimeError('Variable "clarform" does not exist.', 19, $this->source); })()), "subjects", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["contest"] => $context["subject"]) {
            // line 20
            echo "<optgroup label=\"";
            echo twig_escape_filter($this->env, $context["contest"], "html", null, true);
            echo "\">
";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["subject"]);
            foreach ($context['_seq'] as $context["id"] => $context["descr"]) {
                // line 22
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "onsubject", [], "any", true, true, false, 22) && (twig_get_attribute($this->env, $this->source, (isset($context["clarform"]) || array_key_exists("clarform", $context) ? $context["clarform"] : (function () { throw new RuntimeError('Variable "clarform" does not exist.', 22, $this->source); })()), "onsubject", [], "any", false, false, false, 22) == $context["id"]))) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["descr"], "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['descr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "</optgroup>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contest'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</select>
</div>

<div class=\"form-group\">
<label for=\"bodytext\">Message:</label>
<textarea class=\"form-control\" name=\"bodytext\" id=\"bodytext\" rows=\"8\" cols=\"85\" required>";
        // line 31
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "quotedtext", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "quotedtext", [], "any", false, false, false, 31), "")) : ("")), "html", null, true);
        echo "</textarea>
</div>

<div class=\"row\">
<div class=\"col-sm\">
<div class=\"form-group\">
<button type=\"submit\" name=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-envelope\"></i> Send</button>
</div>
</div>

<div class=\"col-sm text-right\">
";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["clarform"] ?? null), "answers", [], "any", true, true, false, 42) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clarform"]) || array_key_exists("clarform", $context) ? $context["clarform"] : (function () { throw new RuntimeError('Variable "clarform" does not exist.', 42, $this->source); })()), "answers", [], "any", false, false, false, 42)) > 0))) {
            // line 43
            echo "<div class=\"input-group\">
<div class=\"input-group-prepend\">
<div class=\"input-group-text\"><i class=\"fas fa-fish\"></i></div>
</div>
<select class=\"custom-select form-control-sm\" id=\"clar_answers\">
<option selected value=\"_default\">Add canned answer...</option>
";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["clarform"]) || array_key_exists("clarform", $context) ? $context["clarform"] : (function () { throw new RuntimeError('Variable "clarform" does not exist.', 49, $this->source); })()), "answers", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                echo "<option>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "</select>
</div>
";
        }
        // line 55
        echo "</div>

</div>

</form>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/clarification_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 55,  172 => 52,  163 => 50,  159 => 49,  151 => 43,  149 => 42,  135 => 31,  128 => 26,  121 => 24,  106 => 22,  102 => 21,  97 => 20,  93 => 19,  85 => 13,  70 => 11,  66 => 10,  60 => 6,  54 => 4,  52 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{ path('jury_clarification_send') }}\" method=\"post\" id=\"sendclar\" onsubmit=\"return confirmClar();\">

{% if origclar.clarid is defined %}
<input type=\"hidden\" name=\"id\" value=\"{{ origclar.clarid }}\">
{% endif %}

<div class=\"form-group\">
<label for=\"sendto\">Send to:</label>
<select id=\"sendto\" name=\"sendto\" class=\"custom-select\">
{% for id,team in clarform.teams %}
<option value=\"{{id}}\"{% if clarform.toteam is defined and clarform.toteam == id %} selected{% endif %}>{{team}}</option>
{% endfor %}
</select>
</div>

<div class=\"form-group\">
<label for=\"subject\">Subject:</label>
<select name=\"problem\" id=\"subject\" class=\"custom-select\">
{% for contest,subject in clarform.subjects %}
<optgroup label=\"{{ contest }}\">
{% for id,descr in subject %}
<option value=\"{{id}}\"{% if clarform.onsubject is defined and clarform.onsubject == id %} selected{% endif %}>{{descr}}</option>
{% endfor %}
</optgroup>
{% endfor %}
</select>
</div>

<div class=\"form-group\">
<label for=\"bodytext\">Message:</label>
<textarea class=\"form-control\" name=\"bodytext\" id=\"bodytext\" rows=\"8\" cols=\"85\" required>{{ clarform.quotedtext|default(\"\") }}</textarea>
</div>

<div class=\"row\">
<div class=\"col-sm\">
<div class=\"form-group\">
<button type=\"submit\" name=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-envelope\"></i> Send</button>
</div>
</div>

<div class=\"col-sm text-right\">
{% if clarform.answers is defined and clarform.answers|length > 0 %}
<div class=\"input-group\">
<div class=\"input-group-prepend\">
<div class=\"input-group-text\"><i class=\"fas fa-fish\"></i></div>
</div>
<select class=\"custom-select form-control-sm\" id=\"clar_answers\">
<option selected value=\"_default\">Add canned answer...</option>
{% for item in clarform.answers %}
<option>{{ item }}</option>
{% endfor %}
</select>
</div>
{% endif %}
</div>

</div>

</form>
", "jury/partials/clarification_form.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/clarification_form.html.twig");
    }
}
