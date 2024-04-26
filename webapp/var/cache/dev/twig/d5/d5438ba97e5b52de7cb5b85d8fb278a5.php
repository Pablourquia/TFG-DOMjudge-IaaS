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

/* jury/analysis/contest_overview.html.twig */
class __TwigTemplate_ed416cba0005545ecdf030f6ffe61fdc extends Template
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
            'extrafooter' => [$this, 'block_extrafooter'],
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/contest_overview.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/contest_overview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/contest_overview.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/analysis/contest_overview.html.twig", 1);
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

        echo "Analysis - Contest ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "shortname", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["current_contest"] ?? null), "shortname", [], "any", false, false, false, 3), "")) : ("")), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
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
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nv.d3.min.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/d3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nv.d3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/FileSaver.min.js"), "html", null, true);
        echo "\"></script>
<style>
.clickable-row:hover {
  cursor: pointer;
}
.card-body.tablecard{
  overflow-y: auto;
  height: 500px;
  max-height: 500px;
}
.truncate {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
<script>
\$(function() {
    \$(\".clickable-row\").click(function() {
        window.location = \$(this).data(\"href\");
    });
    \$('[data-toggle=\"popover\"]').popover({
      trigger: 'hover',
      html: true
    })
})
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "      <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), "html", null, true);
        echo "</h1>
      ";
        // line 41
        $this->loadTemplate("jury/partials/analysis_filter.html.twig", "jury/analysis/contest_overview.html.twig", 41)->display($context);
        // line 42
        echo "    </div>
    <div class=\"col-md-3 mt-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Contest Stats
        </div>
        <div class=\"card-body\">
          <abbr data-toggle=\"popover\" data-placement=\"bottom\" title=\"Misery Index\" data-content=\"
            This is a measure of how 'bored' contestants are. It is the average number of
            people-minutes spent fruitlessly trying to solve problems at the end of the contest.
            <br>
            Calculated as:<br>
            average across all teams of [3 people x (number of minutes elapsed - minute last problem solved by team t)]
          \">Misery index</abbr>: ";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 55, $this->source); })()), "misery_index", [], "any", false, false, false, 55), 0), "html", null, true);
        echo " minutes<br>
          # Submissions: ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 56, $this->source); })()), "total_submissions", [], "any", false, false, false, 56), "html", null, true);
        echo "<br>
          # Accepted Submissions: ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 57, $this->source); })()), "total_accepted", [], "any", false, false, false, 57), "html", null, true);
        echo " <span class=\"text-muted\">(~";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 57, $this->source); })()), "total_submissions", [], "any", false, false, false, 57) > 0)) ? (((twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 57, $this->source); })()), "total_accepted", [], "any", false, false, false, 57) / twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 57, $this->source); })()), "total_submissions", [], "any", false, false, false, 57)) * 100)) : (0)), 0), "html", null, true);
        echo "%)</span><br>
          # of Teams: ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 58, $this->source); })()), "num_teams", [], "any", false, false, false, 58), "html", null, true);
        echo "<br>

<!--
          # of Teams solving n problems<br>
          <table class=\"table table-sm\">
            <thead>
              <tr>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 65, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 66
            echo "                <th>";
            echo twig_escape_filter($this->env, $context["x"], "html", null, true);
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "              </tr>
            </thead>
            <tbody>
              <tr>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 72, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 73
            echo "                <td>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "teams_solved_n_problems", [], "array", false, true, false, 73), $context["n"], [], "array", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "teams_solved_n_problems", [], "array", false, true, false, 73), $context["n"], [], "array", false, false, false, 73), " ")) : (" ")), "html", null, true);
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "              </tr>
            </tbody>
          </table>
-->
        </div>
      </div>
    </div>
    <div class=\"col-md-4 mt-3\" id=\"graph_languages\">
      <div class=\"card\">
        <div class=\"card-header\">
          Language Stats
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 300px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-md-5 mt-3\" id=\"graph_problems\">
      <div class=\"card\">
        <div class=\"card-header\">
          Problems Attempted/Solved
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 300px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-md-12 mt-3\" id=\"graph_submissions\">
      <div class=\"card\">
        <div class=\"card-header\">
          Submissions Over Time
        </div>
        <div class=\"card-body\">
        <svg style=\"height: 400px\"></svg>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-6 mt-3 mb-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Problems
        </div>
        <div class=\"card-body tablecard\">
          <table class=\"table table-sm table-striped table-hover\">
            <thead>
              <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">name</th>
                <th scope=\"col\">time<br>limit</th>
                <th scope=\"col\">memory<br>limit</th>
                <th scope=\"col\">test<br>cases</th>
                <th scope=\"col\"># <br>attempts/solutions</th>
                <th scope=\"col\"># teams<br>attempted/solved</th>
              </tr>
            </thead>
            <tbody>
            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 133, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 134
            echo "              ";
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["p"], "probid", [], "any", false, false, false, 134);
            // line 135
            echo "              <tr class='clickable-row' data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_problem", ["probid" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 135, $this->source); })()), "view" => (isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new RuntimeError('Variable "view" does not exist.', 135, $this->source); })())]), "html", null, true);
            echo "\">
                <th scope=\"row\">";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 136, $this->source); })()), "html", null, true);
            echo "</th>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["p"], "shortname", [], "any", false, false, false, 137) . " - ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "problem", [], "any", false, false, false, 137), "name", [], "any", false, false, false, 137)), "html", null, true);
            echo "</td>
                <td>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "problem", [], "any", false, false, false, 138), "timelimit", [], "any", false, false, false, 138), "html", null, true);
            echo "</td>
                <td>";
            // line 139
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "problem", [], "any", false, true, false, 139), "memlimit", [], "any", true, true, false, 139)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "problem", [], "any", false, true, false, 139), "memlimit", [], "any", false, false, false, 139), "default")) : ("default")), "html", null, true);
            echo "</td>
                <td>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 140, $this->source); })()), "problem_num_testcases", [], "any", false, false, false, 140), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 140, $this->source); })()), [], "array", false, false, false, 140), "html", null, true);
            echo "</td>
                <td>";
            // line 141
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_attempts", [], "any", false, true, false, 141), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 141, $this->source); })()), [], "array", true, true, false, 141)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_attempts", [], "any", false, true, false, 141), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 141, $this->source); })()), [], "array", false, false, false, 141), 0)) : (0)), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_solutions", [], "any", false, true, false, 141), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 141, $this->source); })()), [], "array", true, true, false, 141)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_solutions", [], "any", false, true, false, 141), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 141, $this->source); })()), [], "array", false, false, false, 141), 0)) : (0)), "html", null, true);
            echo "</td>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 142), "teams_attempted", [], "any", false, true, false, 142), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 142, $this->source); })()), [], "array", true, true, false, 142)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 142), "teams_attempted", [], "any", false, true, false, 142), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 142, $this->source); })()), [], "array", false, false, false, 142), [])) : ([]))), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 142), "teams_solved", [], "any", false, true, false, 142), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 142, $this->source); })()), [], "array", true, true, false, 142)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 142), "teams_solved", [], "any", false, true, false, 142), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 142, $this->source); })()), [], "array", false, false, false, 142), [])) : ([]))), "html", null, true);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 mt-3 mb-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Teams
        </div>
        <div class=\"card-body tablecard\">
          <table class=\"table table-sm table-striped table-hover\">
            <thead>
              <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">affiliation</th>
                <th scope=\"col\" style=\"max-width: 200px\">name</th>
                <th scope=\"col\">#<br>submitted/correct</th>
                <th scope=\"col\"># problems<br>attempted/solved</th>
                <th scope=\"col\">Misery<br>Index</th>
              </tr>
            </thead>
            <tbody>
            ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 168, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 169
            echo "              ";
            $context["id"] = twig_get_attribute($this->env, $this->source, $context["t"], "teamid", [], "any", false, false, false, 169);
            // line 170
            echo "              <tr class=\"clickable-row\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_team", ["teamid" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 170, $this->source); })())]), "html", null, true);
            echo "\">
                <th scope=\"row\" style=\"text-align: right;\">";
            // line 171
            echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge($context["t"], "t");
            echo "</th>
                <td>";
            // line 172
            if (twig_get_attribute($this->env, $this->source, $context["t"], "affiliation", [], "any", false, false, false, 172)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "affiliation", [], "any", false, false, false, 172), "name", [], "any", false, false, false, 172), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                <td class=\"truncate\" style=\"max-width: 200px\">";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "effectiveName", [], "any", false, false, false, 173), "html", null, true);
            echo "</td>
                <td>";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 174, $this->source); })()), "team_stats", [], "any", false, false, false, 174), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 174, $this->source); })()), [], "array", false, false, false, 174), "total_submitted", [], "any", false, false, false, 174), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 174, $this->source); })()), "team_stats", [], "any", false, false, false, 174), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 174, $this->source); })()), [], "array", false, false, false, 174), "total_accepted", [], "any", false, false, false, 174), "html", null, true);
            echo "</td>
                <td>";
            // line 175
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 175, $this->source); })()), "team_stats", [], "any", false, false, false, 175), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 175, $this->source); })()), [], "array", false, false, false, 175), "problems_submitted", [], "any", false, false, false, 175)), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 175, $this->source); })()), "team_stats", [], "any", false, false, false, 175), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 175, $this->source); })()), [], "array", false, false, false, 175), "problems_accepted", [], "any", false, false, false, 175)), "html", null, true);
            echo "</td>
                <td>";
            // line 176
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 176, $this->source); })()), "team_stats", [], "any", false, false, false, 176), (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 176, $this->source); })()), [], "array", false, false, false, 176), "misery_index", [], "any", false, false, false, 176), 0), "html", null, true);
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
      <div class=\"col-md-6 mt-3 mb-3\">
          <div class=\"card\">
              <div class=\"card-header\">
                  Delayed Judgings (by more than ";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delayed_judgings"]) || array_key_exists("delayed_judgings", $context) ? $context["delayed_judgings"] : (function () { throw new RuntimeError('Variable "delayed_judgings" does not exist.', 189, $this->source); })()), "delay", [], "any", false, false, false, 189), "html", null, true);
        echo "s)
              </div>
              <div class=\"card-body tablecard\">
                  ";
        // line 192
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delayed_judgings"]) || array_key_exists("delayed_judgings", $context) ? $context["delayed_judgings"] : (function () { throw new RuntimeError('Variable "delayed_judgings" does not exist.', 192, $this->source); })()), "data", [], "any", false, false, false, 192)) > 0)) {
            // line 193
            echo "                      <table class=\"table table-sm table-striped table-hover\">
                          <thead>
                          <tr>
                              <th scope=\"col\">submit ID</th>
                              <th scope=\"col\">judging ID</th>
                              <th scope=\"col\">submit time</th>
                              <th scope=\"col\">num judgings</th>
                              <th scope=\"col\">time to<br/>first judging</th>
                          </tr>
                          </thead>
                          <tbody>
                          ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["delayed_judgings"]) || array_key_exists("delayed_judgings", $context) ? $context["delayed_judgings"] : (function () { throw new RuntimeError('Variable "delayed_judgings" does not exist.', 204, $this->source); })()), "data", [], "any", false, false, false, 204));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 205
                echo "                              ";
                $context["id"] = twig_get_attribute($this->env, $this->source, $context["j"], "submitid", [], "any", false, false, false, 205);
                // line 206
                echo "                              <tr class='clickable-row' data-href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission", ["submitId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 206, $this->source); })())]), "html", null, true);
                echo "\">
                                  <th scope=\"row\">";
                // line 207
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 207, $this->source); })()), "html", null, true);
                echo "</th>
                                  <td>";
                // line 208
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 208), "html", null, true);
                echo "</td>
                                  <td>";
                // line 209
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["j"], "submittime", [], "any", false, false, false, 209)), "html", null, true);
                echo "</td>
                                  <td>";
                // line 210
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "num_judgings", [], "any", false, false, false, 210), "html", null, true);
                echo "</td>
                                  <td>";
                // line 211
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "timediff", [], "any", false, false, false, 211), 2), "html", null, true);
                echo "s</td>
                              </tr>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                          </tbody>
                      </table>
                      ";
            // line 216
            if ((twig_get_attribute($this->env, $this->source, (isset($context["delayed_judgings"]) || array_key_exists("delayed_judgings", $context) ? $context["delayed_judgings"] : (function () { throw new RuntimeError('Variable "delayed_judgings" does not exist.', 216, $this->source); })()), "overflow", [], "any", false, false, false, 216) > 0)) {
                // line 217
                echo "                          <div class=\"alert alert-warning\">There are ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delayed_judgings"]) || array_key_exists("delayed_judgings", $context) ? $context["delayed_judgings"] : (function () { throw new RuntimeError('Variable "delayed_judgings" does not exist.', 217, $this->source); })()), "overflow", [], "any", false, false, false, 217), "html", null, true);
                echo " more delayed judgings which are not shown.</div>
                      ";
            }
            // line 219
            echo "                  ";
        } else {
            // line 220
            echo "                      <div class=\"alert alert-warning\">There are no judgings delayed so far.</div>
                  ";
        }
        // line 222
        echo "              </div>
          </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 226
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 227
        echo "<script>
";
        // line 229
        $context["colors"] = ["correct" => "#01df01", "wrong-answer" => "red", "timelimit" => "orange", "run-error" => "#ff3399", "compiler-error" => "grey", "no-output" => "purple", "frozen" => "blue", "output-limit" => "black"];
        // line 240
        echo "

//////////////////////////////////////
// Results by language
// bar graph, x axis is language, y axis is # of solutions
// mutlibar, one for attempts, one for solutions
var language_stats = [
  {
    key: \"Attempted\",
    color: 'red',
    values: [
      ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 251, $this->source); })()), "language_stats", [], "any", false, false, false, 251), "total_submissions", [], "any", false, false, false, 251));
        foreach ($context['_seq'] as $context["lang"] => $context["count"]) {
            // line 252
            echo "        {
          \"label\" : \"";
            // line 253
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\",
          \"value\" : ";
            // line 254
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo ",
        },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['lang'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "    ]
  },
  {
    key: \"Accepted\",
    color: 'green',
    values: [
      ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 263, $this->source); })()), "language_stats", [], "any", false, false, false, 263), "total_solutions", [], "any", false, false, false, 263));
        foreach ($context['_seq'] as $context["lang"] => $context["count"]) {
            // line 264
            echo "        {
          \"label\" : \"";
            // line 265
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\",
          \"value\" : ";
            // line 266
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo ",
        },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['lang'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "    ]
  }
];
nv.addGraph(function() {
  var chart = nv.models.multiBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      // .valueFormat(d3.format('.0f'))
      // .staggerLabels(run_max_times[0].values.length > 2)
      .showControls(false)
      .reduceXTicks(false)
      .margin({bottom: 90})
      .duration(250)
      ;
  chart.yAxis
    .tickFormat(d3.format('.0f'))
    .axisLabel('# of Submissions');
  chart.xAxis.axisLabel(\"Language\");
  d3.select('#graph_languages svg')
      .datum(language_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


//////////////////////////////////////
// Results by problem
// Graph, multibar chart, x axis is problem id/shortname, y axis is # of teams
// one bar for #teams attempted(red), second bar for solved(green)
var problem_stats = [
  {
    key: \"Attempted\",
    color: 'red',
    values: [
      ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 304, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prob"]) {
            // line 305
            echo "        {
          \"label\" : \"";
            // line 306
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prob"], "shortname", [], "any", false, false, false, 306), "html", null, true);
            echo "\",
          \"value\" : ";
            // line 307
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 307), "teams_attempted", [], "any", false, true, false, 307), twig_get_attribute($this->env, $this->source, $context["prob"], "probid", [], "any", false, false, false, 307), [], "array", true, true, false, 307)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 307), "teams_attempted", [], "any", false, true, false, 307), twig_get_attribute($this->env, $this->source, $context["prob"], "probid", [], "any", false, false, false, 307), [], "array", false, false, false, 307), [])) : ([]))), "html", null, true);
            echo ",
        },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prob'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo "    ]
  },
  {
    key: \"Accepted\",
    color: 'green',
    values: [
      ";
        // line 316
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 316, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prob"]) {
            // line 317
            echo "        {
          \"label\" : \"";
            // line 318
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prob"], "shortname", [], "any", false, false, false, 318), "html", null, true);
            echo "\",
          \"value\" : ";
            // line 319
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 319), "teams_solved", [], "any", false, true, false, 319), twig_get_attribute($this->env, $this->source, $context["prob"], "probid", [], "any", false, false, false, 319), [], "array", true, true, false, 319)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["misc"] ?? null), "problem_stats", [], "any", false, true, false, 319), "teams_solved", [], "any", false, true, false, 319), twig_get_attribute($this->env, $this->source, $context["prob"], "probid", [], "any", false, false, false, 319), [], "array", false, false, false, 319), [])) : ([]))), "html", null, true);
            echo ",
        },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prob'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "    ]
  }
];
nv.addGraph(function() {
  var chart = nv.models.multiBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      // .valueFormat(d3.format('.0f'))
      // .staggerLabels(run_max_times[0].values.length > 2)
      .showControls(false)
      .reduceXTicks(false)
      .margin({bottom: 90})
      .duration(250)
      ;
  chart.yAxis
    .tickFormat(d3.format('.0f'))
    .axisLabel('# of Teams');
  chart.xAxis.axisLabel(\"Problem\");
  d3.select('#graph_problems svg')
      .datum(problem_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


//////////////////////////////////////
// Submissions over time
// stacked graph of correct, runtime-error, wrong-answer, compiler-error, timelimit, etc
// x-axis is contest time
// y axis is # of submissions

var submission_stats = [
  ";
        // line 355
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "correct", 1 => "wrong-answer", 2 => "timelimit", 3 => "run-error", 4 => "compiler-error", 5 => "no-output"]);
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 356
            echo "  {
    key: \"";
            // line 357
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
    color: \"";
            // line 358
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 358, $this->source); })()), $context["result"], [], "array", false, false, false, 358), "html", null, true);
            echo "\",
    values: [
      ";
            // line 361
            echo "      ";
            // line 362
            echo "      [0,0],
      ";
            // line 363
            $context["count"] = 0;
            // line 364
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 364, $this->source); })()), function ($__submission__) use ($context, $macros) { $context["submission"] = $__submission__; return twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 364); }));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 365
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 365) == $context["result"])) {
                    $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 365, $this->source); })()) + 1);
                }
                // line 366
                echo "        [ ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 366) - twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 366, $this->source); })()), "starttime", [], "any", false, false, false, 366)) / 60.0), "html", null, true);
                echo ",
          ";
                // line 367
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 367, $this->source); })()), "html", null, true);
                echo "
        ],
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 370
            echo "    ]
  },
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "];
nv.addGraph(function() {
  var chart = nv.models.stackedAreaChart()
      // .margin({left: 100})  //Adjust chart margins to give the x-axis some breathing room.
      // .useInteractiveGuideline(true)  //We want nice looking tooltips and a guideline!
      // .transitionDuration(350)  //how fast do you want the lines to transition?
      // .showLegend(true)       //Show the legend, allowing users to turn on/off line series.
      .showControls(false)
      .x(function(d) { return d[0] })   //We can modify the data accessor functions...
      .y(function(d) { return d[1] })   //...in case your data is formatted differently.
      .showYAxis(true)        //Show the y-axis
      .showXAxis(true)        //Show the x-axis
      .forceX([0, ";
        // line 385
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 385, $this->source); })()), "endtime", [], "any", false, false, false, 385) - twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 385, $this->source); })()), "starttime", [], "any", false, false, false, 385)) / 60), "html", null, true);
        echo "])
      .forceY([0, ";
        // line 386
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 386, $this->source); })())) * 1.1), "html", null, true);
        echo "])
      ;
  chart.xAxis     //Chart x-axis settings
      .axisLabel('Contest Time(minutes)')
      .tickFormat(d3.format('d'));

  chart.yAxis     //Chart y-axis settings
      .axisLabel('Total Submissions')
      .tickFormat(d3.format('d'));

  d3.select('#graph_submissions svg')
      .datum(submission_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


</script>
";
        // line 405
        $this->loadTemplate("jury/analysis/download_graphs.html.twig", "jury/analysis/contest_overview.html.twig", 405)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/analysis/contest_overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  837 => 405,  815 => 386,  811 => 385,  797 => 373,  789 => 370,  780 => 367,  775 => 366,  770 => 365,  765 => 364,  763 => 363,  760 => 362,  758 => 361,  753 => 358,  749 => 357,  746 => 356,  742 => 355,  707 => 322,  698 => 319,  694 => 318,  691 => 317,  687 => 316,  679 => 310,  670 => 307,  666 => 306,  663 => 305,  659 => 304,  622 => 269,  613 => 266,  609 => 265,  606 => 264,  602 => 263,  594 => 257,  585 => 254,  581 => 253,  578 => 252,  574 => 251,  561 => 240,  559 => 229,  556 => 227,  543 => 226,  528 => 222,  524 => 220,  521 => 219,  515 => 217,  513 => 216,  509 => 214,  500 => 211,  496 => 210,  492 => 209,  488 => 208,  484 => 207,  479 => 206,  476 => 205,  472 => 204,  459 => 193,  457 => 192,  451 => 189,  439 => 179,  430 => 176,  424 => 175,  418 => 174,  414 => 173,  406 => 172,  402 => 171,  397 => 170,  394 => 169,  390 => 168,  365 => 145,  354 => 142,  348 => 141,  344 => 140,  340 => 139,  336 => 138,  332 => 137,  328 => 136,  323 => 135,  320 => 134,  316 => 133,  256 => 75,  247 => 73,  243 => 72,  237 => 68,  228 => 66,  224 => 65,  214 => 58,  208 => 57,  204 => 56,  200 => 55,  185 => 42,  183 => 41,  178 => 40,  165 => 39,  124 => 10,  120 => 9,  116 => 8,  112 => 7,  108 => 6,  95 => 5,  67 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}Analysis - Contest {{ current_contest.shortname | default('') }} - {{ parent() }}{% endblock %}

{% block extrahead %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{asset('css/nv.d3.min.css')}}\">
<script src=\"{{asset('js/d3.min.js')}}\"></script>
<script src=\"{{asset('js/nv.d3.min.js')}}\"></script>
<script src=\"{{asset('js/FileSaver.min.js')}}\"></script>
<style>
.clickable-row:hover {
  cursor: pointer;
}
.card-body.tablecard{
  overflow-y: auto;
  height: 500px;
  max-height: 500px;
}
.truncate {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
<script>
\$(function() {
    \$(\".clickable-row\").click(function() {
        window.location = \$(this).data(\"href\");
    });
    \$('[data-toggle=\"popover\"]').popover({
      trigger: 'hover',
      html: true
    })
})
</script>
{% endblock %}

{% block content %}
      <h1>{{ current_contest.name }}</h1>
      {% include 'jury/partials/analysis_filter.html.twig' %}
    </div>
    <div class=\"col-md-3 mt-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Contest Stats
        </div>
        <div class=\"card-body\">
          <abbr data-toggle=\"popover\" data-placement=\"bottom\" title=\"Misery Index\" data-content=\"
            This is a measure of how 'bored' contestants are. It is the average number of
            people-minutes spent fruitlessly trying to solve problems at the end of the contest.
            <br>
            Calculated as:<br>
            average across all teams of [3 people x (number of minutes elapsed - minute last problem solved by team t)]
          \">Misery index</abbr>: {{misc.misery_index|number_format(0)}} minutes<br>
          # Submissions: {{ misc.total_submissions }}<br>
          # Accepted Submissions: {{ misc.total_accepted }} <span class=\"text-muted\">(~{{ (misc.total_submissions>0 ? (misc.total_accepted/misc.total_submissions)*100:0)|number_format(0) }}%)</span><br>
          # of Teams: {{ misc.num_teams }}<br>

<!--
          # of Teams solving n problems<br>
          <table class=\"table table-sm\">
            <thead>
              <tr>
                {% for x in range(0, problems|length) %}
                <th>{{x}}</th>
                {% endfor %}
              </tr>
            </thead>
            <tbody>
              <tr>
                {% for n in range(0, problems|length ) %}
                <td>{{ misc['teams_solved_n_problems'][n]|default(' ') }}</td>
                {% endfor %}
              </tr>
            </tbody>
          </table>
-->
        </div>
      </div>
    </div>
    <div class=\"col-md-4 mt-3\" id=\"graph_languages\">
      <div class=\"card\">
        <div class=\"card-header\">
          Language Stats
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 300px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-md-5 mt-3\" id=\"graph_problems\">
      <div class=\"card\">
        <div class=\"card-header\">
          Problems Attempted/Solved
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 300px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-md-12 mt-3\" id=\"graph_submissions\">
      <div class=\"card\">
        <div class=\"card-header\">
          Submissions Over Time
        </div>
        <div class=\"card-body\">
        <svg style=\"height: 400px\"></svg>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-6 mt-3 mb-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Problems
        </div>
        <div class=\"card-body tablecard\">
          <table class=\"table table-sm table-striped table-hover\">
            <thead>
              <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">name</th>
                <th scope=\"col\">time<br>limit</th>
                <th scope=\"col\">memory<br>limit</th>
                <th scope=\"col\">test<br>cases</th>
                <th scope=\"col\"># <br>attempts/solutions</th>
                <th scope=\"col\"># teams<br>attempted/solved</th>
              </tr>
            </thead>
            <tbody>
            {% for p in problems %}
              {% set id=p.probid %}
              <tr class='clickable-row' data-href=\"{{path('analysis_problem', {'probid': id, 'view': view}) }}\">
                <th scope=\"row\">{{ id }}</th>
                <td>{{ p.shortname ~ \" - \" ~ p.problem.name }}</td>
                <td>{{ p.problem.timelimit }}</td>
                <td>{{ p.problem.memlimit|default('default') }}</td>
                <td>{{ misc.problem_num_testcases[id] }}</td>
                <td>{{ misc.problem_attempts[id]|default(0) }} / {{ misc.problem_solutions[id]|default(0) }}</td>
                <td>{{ misc.problem_stats.teams_attempted[id]|default([])|length }} / {{ misc.problem_stats.teams_solved[id]|default([])|length }}</td>
              </tr>
            {% endfor %}
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"col-md-6 mt-3 mb-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Teams
        </div>
        <div class=\"card-body tablecard\">
          <table class=\"table table-sm table-striped table-hover\">
            <thead>
              <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">affiliation</th>
                <th scope=\"col\" style=\"max-width: 200px\">name</th>
                <th scope=\"col\">#<br>submitted/correct</th>
                <th scope=\"col\"># problems<br>attempted/solved</th>
                <th scope=\"col\">Misery<br>Index</th>
              </tr>
            </thead>
            <tbody>
            {% for t in teams %}
              {% set id=t.teamid %}
              <tr class=\"clickable-row\" data-href=\"{{ path('analysis_team', {'teamid':id}) }}\">
                <th scope=\"row\" style=\"text-align: right;\">{{ t | entityIdBadge('t') }}</th>
                <td>{% if t.affiliation %}{{ t.affiliation.name }}{% else %}-{% endif %}</td>
                <td class=\"truncate\" style=\"max-width: 200px\">{{ t.effectiveName }}</td>
                <td>{{ misc.team_stats[id].total_submitted }} / {{ misc.team_stats[id].total_accepted }}</td>
                <td>{{ misc.team_stats[id].problems_submitted|length }} / {{ misc.team_stats[id].problems_accepted|length }}</td>
                <td>{{ misc.team_stats[id].misery_index|number_format(0) }}</td>
              </tr>
            {% endfor %}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row\">
      <div class=\"col-md-6 mt-3 mb-3\">
          <div class=\"card\">
              <div class=\"card-header\">
                  Delayed Judgings (by more than {{ delayed_judgings.delay }}s)
              </div>
              <div class=\"card-body tablecard\">
                  {% if delayed_judgings.data|length > 0 %}
                      <table class=\"table table-sm table-striped table-hover\">
                          <thead>
                          <tr>
                              <th scope=\"col\">submit ID</th>
                              <th scope=\"col\">judging ID</th>
                              <th scope=\"col\">submit time</th>
                              <th scope=\"col\">num judgings</th>
                              <th scope=\"col\">time to<br/>first judging</th>
                          </tr>
                          </thead>
                          <tbody>
                          {% for j in delayed_judgings.data %}
                              {% set id=j.submitid %}
                              <tr class='clickable-row' data-href=\"{{path('jury_submission', {'submitId': id}) }}\">
                                  <th scope=\"row\">{{ id }}</th>
                                  <td>{{ j.judgingid }}</td>
                                  <td>{{ j.submittime | printtime }}</td>
                                  <td>{{ j.num_judgings }}</td>
                                  <td>{{ j.timediff | number_format(2) }}s</td>
                              </tr>
                          {% endfor %}
                          </tbody>
                      </table>
                      {% if delayed_judgings.overflow > 0 %}
                          <div class=\"alert alert-warning\">There are {{ delayed_judgings.overflow }} more delayed judgings which are not shown.</div>
                      {% endif %}
                  {% else %}
                      <div class=\"alert alert-warning\">There are no judgings delayed so far.</div>
                  {% endif %}
              </div>
          </div>
{% endblock %}

{% block extrafooter %}
<script>
{%
set colors = {
  'correct':        '#01df01',
  'wrong-answer':   'red',
  'timelimit':      'orange',
  'run-error':      '#ff3399',
  'compiler-error': 'grey',
  'no-output':      'purple',
  'frozen':         'blue',
  'output-limit':   'black',
}
%}


//////////////////////////////////////
// Results by language
// bar graph, x axis is language, y axis is # of solutions
// mutlibar, one for attempts, one for solutions
var language_stats = [
  {
    key: \"Attempted\",
    color: 'red',
    values: [
      {% for lang,count in misc.language_stats.total_submissions %}
        {
          \"label\" : \"{{lang}}\",
          \"value\" : {{ count }},
        },
      {% endfor %}
    ]
  },
  {
    key: \"Accepted\",
    color: 'green',
    values: [
      {% for lang,count in misc.language_stats.total_solutions %}
        {
          \"label\" : \"{{lang}}\",
          \"value\" : {{ count }},
        },
      {% endfor %}
    ]
  }
];
nv.addGraph(function() {
  var chart = nv.models.multiBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      // .valueFormat(d3.format('.0f'))
      // .staggerLabels(run_max_times[0].values.length > 2)
      .showControls(false)
      .reduceXTicks(false)
      .margin({bottom: 90})
      .duration(250)
      ;
  chart.yAxis
    .tickFormat(d3.format('.0f'))
    .axisLabel('# of Submissions');
  chart.xAxis.axisLabel(\"Language\");
  d3.select('#graph_languages svg')
      .datum(language_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


//////////////////////////////////////
// Results by problem
// Graph, multibar chart, x axis is problem id/shortname, y axis is # of teams
// one bar for #teams attempted(red), second bar for solved(green)
var problem_stats = [
  {
    key: \"Attempted\",
    color: 'red',
    values: [
      {% for prob in problems %}
        {
          \"label\" : \"{{prob.shortname}}\",
          \"value\" : {{ misc.problem_stats.teams_attempted[prob.probid]|default([])|length }},
        },
      {% endfor %}
    ]
  },
  {
    key: \"Accepted\",
    color: 'green',
    values: [
      {% for prob in problems %}
        {
          \"label\" : \"{{prob.shortname}}\",
          \"value\" : {{ misc.problem_stats.teams_solved[prob.probid]|default([])|length }},
        },
      {% endfor %}
    ]
  }
];
nv.addGraph(function() {
  var chart = nv.models.multiBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      // .valueFormat(d3.format('.0f'))
      // .staggerLabels(run_max_times[0].values.length > 2)
      .showControls(false)
      .reduceXTicks(false)
      .margin({bottom: 90})
      .duration(250)
      ;
  chart.yAxis
    .tickFormat(d3.format('.0f'))
    .axisLabel('# of Teams');
  chart.xAxis.axisLabel(\"Problem\");
  d3.select('#graph_problems svg')
      .datum(problem_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


//////////////////////////////////////
// Submissions over time
// stacked graph of correct, runtime-error, wrong-answer, compiler-error, timelimit, etc
// x-axis is contest time
// y axis is # of submissions

var submission_stats = [
  {% for result in ['correct', 'wrong-answer', 'timelimit', 'run-error', 'compiler-error', 'no-output'] %}
  {
    key: \"{{result}}\",
    color: \"{{colors[result]}}\",
    values: [
      {# TODO: make sure these are actually ordered by submittime #}
      {# TODO: also make sure these submissions are in the same contest #}
      [0,0],
      {% set count = 0 %}
      {% for submission in submissions | filter(submission => submission.result) %}
        {% if submission.result == result %}{% set count = count +1 %}{% endif %}
        [ {{ (submission.submittime - current_contest.starttime)/60.0 }},
          {{ count }}
        ],
        {% endfor %}
    ]
  },
  {% endfor %}
];
nv.addGraph(function() {
  var chart = nv.models.stackedAreaChart()
      // .margin({left: 100})  //Adjust chart margins to give the x-axis some breathing room.
      // .useInteractiveGuideline(true)  //We want nice looking tooltips and a guideline!
      // .transitionDuration(350)  //how fast do you want the lines to transition?
      // .showLegend(true)       //Show the legend, allowing users to turn on/off line series.
      .showControls(false)
      .x(function(d) { return d[0] })   //We can modify the data accessor functions...
      .y(function(d) { return d[1] })   //...in case your data is formatted differently.
      .showYAxis(true)        //Show the y-axis
      .showXAxis(true)        //Show the x-axis
      .forceX([0, {{ (current_contest.endtime - current_contest.starttime) / 60 }}])
      .forceY([0, {{ submissions|length *1.10 }}])
      ;
  chart.xAxis     //Chart x-axis settings
      .axisLabel('Contest Time(minutes)')
      .tickFormat(d3.format('d'));

  chart.yAxis     //Chart y-axis settings
      .axisLabel('Total Submissions')
      .tickFormat(d3.format('d'));

  d3.select('#graph_submissions svg')
      .datum(submission_stats)
      .call(chart);
  nv.utils.windowResize(chart.update);
  return chart;
});


</script>
{% include 'jury/analysis/download_graphs.html.twig' %}
{% endblock %}
", "jury/analysis/contest_overview.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/analysis/contest_overview.html.twig");
    }
}
