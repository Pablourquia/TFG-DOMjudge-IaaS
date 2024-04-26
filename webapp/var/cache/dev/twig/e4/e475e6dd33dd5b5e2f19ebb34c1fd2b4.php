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

/* jury/analysis/problem.html.twig */
class __TwigTemplate_665b746585a3e1882995e21e19cfe091 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/problem.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/problem.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/problem.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/analysis/problem.html.twig", 1);
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

        echo "Analysis - Problem ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 3, $this->source); })()), "probid", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
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
.row.equal {
  display: flex;
  flex-wrap: wrap;
}
.card {
  height: 100%;
}

/* Don't show x-axis ticks/ticklines for max runtimes chart*/
#maxruntime .nv-x.nv-axis .tick {
  display: none;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "      <h1>Problem ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 28, $this->source); })()), "probid", [], "any", false, false, false, 28), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "</h1>
        ";
        // line 29
        $this->loadTemplate("jury/partials/analysis_filter.html.twig", "jury/analysis/problem.html.twig", 29)->display($context);
        // line 30
        echo "     </div>
    <div class=\"col-lg-3 col-sm-6 mt-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Misc Statistics
        </div>
        <div class=\"card-body\">
          <dl class=\"row\">
            <dt class=\"col-sm-6\"># Submissions</dt>
            <dd class=\"col-sm-6\">";
        // line 39
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 39, $this->source); })())), "html", null, true);
        echo "</dd>

            <dt class=\"col-sm-6\"># Correct</dt>
            <dd class=\"col-sm-6\">";
        // line 42
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "correct", [], "array", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "correct", [], "array", false, false, false, 42), 0)) : (0)), "html", null, true);
        echo " <span class=\"text-muted\">(";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 42, $this->source); })()), "correct_percentage", [], "any", false, false, false, 42), 2), "html", null, true);
        echo "%)</span></dd>

            <dt class=\"col-sm-6\"># Teams Attempted</dt>
            <dd class=\"col-sm-6\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 45, $this->source); })()), "num_teams_attempted", [], "any", false, false, false, 45), "html", null, true);
        echo "</dd>

            <dt class=\"col-sm-6\"># Teams Correct</dt>
            <dd class=\"col-sm-6\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 48, $this->source); })()), "num_teams_correct", [], "any", false, false, false, 48), "html", null, true);
        echo " <span class=\"text-muted\">(";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 48, $this->source); })()), "teams_correct_percentage", [], "any", false, false, false, 48), 2), "html", null, true);
        echo "%)</dd>
          </dl>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 col-sm-6 mt-3\" id=\"judging_results\">
      <div class=\"card\">
        <div class=\"card-header\">
          Judging Results
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 275px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-lg-5 col-sm-12 mt-3\" id=\"submission_times\">
      <div class=\"card\">
        <div class=\"card-header\">
          Submissions over Time
        </div>
        <div class=\"card-body\">
            <svg style=\"height: 275px\"></svg>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row equal mt-3\">
    <div class=\"col-12\" id=\"maxruntime\">
      <div class=\"card\">
        <div class=\"card-header\">
          Max Runtimes
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 600px\"></svg>
        </div>
      </div>
   </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 87
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 88
        echo "<script>
";
        // line 90
        $context["colors"] = ["correct" => "#01df01", "wrong-answer" => "red", "timelimit" => "orange", "run-error" => "#ff3399", "compiler-error" => "grey", "no-output" => "purple", "frozen" => "blue", "output-limit" => "black"];
        // line 101
        echo "\$(function(){
    var run_max_times = [
      {
        key: \"Max Runtimes\",
        values: [
          ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
            // line 107
            echo "            {
              \"id\"    : ";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 108), "html", null, true);
            echo ",
              \"label\" : \"j";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 109), "html", null, true);
            echo "\",
              \"value\" : ";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "maxRuntime", [], "method", false, false, false, 110), "html", null, true);
            echo ",
              \"team\"  : \"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 111), "team", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true);
            echo "\",
              \"submittime\"  : \"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 112), "submittime", [], "any", false, false, false, 112), null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 112), "contest", [], "any", false, false, false, 112)), "html", null, true);
            echo "\",
              \"color\" : \"";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 113, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["j"], "result", [], "any", false, false, false, 113), [], "array", false, false, false, 113), "html", null, true);
            echo "\",
              \"firstfile\" : \"";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 114), "files", [], "any", false, false, false, 114), 0, [], "array", false, false, false, 114), "filename", [], "any", false, false, false, 114), "html", null, true);
            echo "\",
            },
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        ]
      }
    ];
    nv.addGraph(function() {
      var chart = nv.models.discreteBarChart()
          .x(function(d) { return d.label })
          .y(function(d) { return d.value })
          .valueFormat(d3.format('.3f'))
          .staggerLabels(run_max_times[0].values.length > 10)
          .forceY([0, ";
        // line 126
        echo twig_escape_filter($this->env, ((isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 126, $this->source); })()) * 1.2), "html", null, true);
        echo "])
          .showValues(false)
          .margin({bottom: 90})
          .duration(250)
        ;


      chart.yAxis
        .tickFormat(d3.format('.3f'))
        .axisLabel('Runtime(in s)');
      chart.xAxis.axisLabel(\"Judgings\");
      d3.select('#maxruntime svg')
          .datum(run_max_times)
          .call(chart);
      // Clicking on one of the bars takes you to the judgment
      chart.discretebar.dispatch.on('elementClick', function(e) {
        window.location = \"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => "_JUDGING_ID_"]);
        echo "\".replace('_JUDGING_ID_', e.data.id);
      });
      // More useful tooltip
      chart.tooltip.contentGenerator(function (obj) {
        var format = d3.format(\".3f\");
        return '<div style=\"background: LightCyan;\">'
\t  + '<b>Team:</b> ' + obj.data.team + '<br/>'
          + '<b>Submitted:</b> ' + obj.data.submittime + '<br/>'
          + '<b>First file:</b> <tt>' + obj.data.firstfile + '</tt><br/>'
          + '<b>max. Runtime:</b> ' + format(obj.data.value) + 's</b><br/>'
          + '<small>click to view judging</small>'
          + '</div>';
      });

      // Create our timelimit line
      d3.select('#maxruntime svg')
        .append('line')
        .attr({id: 'maxline'})
        .style(\"stroke\", \"#F00\");

      // update the line in case the chart dimensions have changed
      var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
      updateline = function(){
        line = d3.select('#maxruntime svg #maxline')
        .attr({
          x1: chart.margin().left,
          y1: chart.yAxis.scale()(";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 168, $this->source); })()), "html", null, true);
        echo ")+ chart.margin().top,
          x2: +svgsize - chart.margin().right,
          y2: chart.yAxis.scale()(";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["timelimit"]) || array_key_exists("timelimit", $context) ? $context["timelimit"] : (function () { throw new RuntimeError('Variable "timelimit" does not exist.', 170, $this->source); })()), "html", null, true);
        echo ") + chart.margin().top,
        })
      }
      updateline();
      nv.utils.windowResize(function() {
        updateline();
        chart.update()
      });
      return chart;
    });

    //////////////////////////////////////
    // Results by type
    var judging_results = [
      {
        key: \"Judging Results\",
        values: [
          ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 187, $this->source); })()));
        foreach ($context['_seq'] as $context["result"] => $context["count"]) {
            // line 188
            echo "            {
              \"label\" : \"";
            // line 189
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
              \"value\" : ";
            // line 190
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo ",
              \"color\" : \"";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 191, $this->source); })()), $context["result"], [], "array", false, false, false, 191), "html", null, true);
            echo "\",
            },
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['result'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "        ]
      }
    ];
    nv.addGraph(function() {
      var chart = nv.models.discreteBarChart()
          .x(function(d) { return d.label })
          .y(function(d) { return d.value })
          .valueFormat(d3.format('.0f'))
          .staggerLabels(run_max_times[0].values.length > 2)
          .margin({bottom: 90})
          .duration(250)
          ;
      chart.yAxis
        .tickFormat(d3.format('.0f'))
        .axisLabel('Number of submissions');
      chart.xAxis.axisLabel(\"Judgement\");
      d3.select('#judging_results svg')
          .datum(judging_results)
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
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "correct", 1 => "wrong-answer", 2 => "timelimit", 3 => "run-error", 4 => "compiler-error", 5 => "no-output"]);
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 226
            echo "      {
        key: \"";
            // line 227
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
        color: \"";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 228, $this->source); })()), $context["result"], [], "array", false, false, false, 228), "html", null, true);
            echo "\",
        values: [
          ";
            // line 231
            echo "          ";
            // line 232
            echo "          [0,0],
          ";
            // line 233
            $context["count"] = 0;
            // line 234
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 234, $this->source); })()), function ($__submission__) use ($context, $macros) { $context["submission"] = $__submission__; return twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 234); }));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 235
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 235) == $context["result"])) {
                    $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 235, $this->source); })()) + 1);
                }
                // line 236
                echo "            [ ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 236) - twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 236, $this->source); })()), "starttime", [], "any", false, false, false, 236)) / 60.0), "html", null, true);
                echo ",
              ";
                // line 237
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 237, $this->source); })()), "html", null, true);
                echo "
            ],
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "        ]
      },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "    ];
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
        // line 255
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 255, $this->source); })()), "endtime", [], "any", false, false, false, 255) - twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 255, $this->source); })()), "starttime", [], "any", false, false, false, 255)) / 60), "html", null, true);
        echo "])
          .forceY([0, ";
        // line 256
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 256, $this->source); })())) * 1.1), "html", null, true);
        echo "])
          ;
      chart.xAxis     //Chart x-axis settings
          .axisLabel('Contest Time(minutes)')
          .tickFormat(d3.format('d'));

      chart.yAxis     //Chart y-axis settings
          .axisLabel('Total Submissions')
          .tickFormat(d3.format('d'));

      d3.select('#submission_times svg')
          .datum(submission_stats)
          .call(chart);
      nv.utils.windowResize(chart.update);
      return chart;
    });







})
</script>
";
        // line 281
        $this->loadTemplate("jury/analysis/download_graphs.html.twig", "jury/analysis/problem.html.twig", 281)->display($context);
        // line 282
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/analysis/problem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 282,  568 => 281,  540 => 256,  536 => 255,  522 => 243,  514 => 240,  505 => 237,  500 => 236,  495 => 235,  490 => 234,  488 => 233,  485 => 232,  483 => 231,  478 => 228,  474 => 227,  471 => 226,  467 => 225,  434 => 194,  425 => 191,  421 => 190,  417 => 189,  414 => 188,  410 => 187,  390 => 170,  385 => 168,  356 => 142,  337 => 126,  326 => 117,  317 => 114,  313 => 113,  309 => 112,  305 => 111,  301 => 110,  297 => 109,  293 => 108,  290 => 107,  286 => 106,  279 => 101,  277 => 90,  274 => 88,  261 => 87,  208 => 48,  202 => 45,  194 => 42,  188 => 39,  177 => 30,  175 => 29,  168 => 28,  155 => 27,  126 => 10,  122 => 9,  118 => 8,  114 => 7,  110 => 6,  97 => 5,  67 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}Analysis - Problem {{ problem.probid }} {{ current_contest.shortname | default('') }} - {{ parent() }}{% endblock %}

{% block extrahead %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{asset('css/nv.d3.min.css')}}\">
<script src=\"{{asset('js/d3.min.js')}}\"></script>
<script src=\"{{asset('js/nv.d3.min.js')}}\"></script>
<script src=\"{{asset('js/FileSaver.min.js')}}\"></script>
<style>
.row.equal {
  display: flex;
  flex-wrap: wrap;
}
.card {
  height: 100%;
}

/* Don't show x-axis ticks/ticklines for max runtimes chart*/
#maxruntime .nv-x.nv-axis .tick {
  display: none;
}
</style>
{% endblock %}

{% block content %}
      <h1>Problem {{ problem.probid }}: {{ problem.name }}</h1>
        {% include 'jury/partials/analysis_filter.html.twig' %}
     </div>
    <div class=\"col-lg-3 col-sm-6 mt-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Misc Statistics
        </div>
        <div class=\"card-body\">
          <dl class=\"row\">
            <dt class=\"col-sm-6\"># Submissions</dt>
            <dd class=\"col-sm-6\">{{ submissions|length }}</dd>

            <dt class=\"col-sm-6\"># Correct</dt>
            <dd class=\"col-sm-6\">{{ results['correct']|default(0) }} <span class=\"text-muted\">({{ misc.correct_percentage|number_format(2) }}%)</span></dd>

            <dt class=\"col-sm-6\"># Teams Attempted</dt>
            <dd class=\"col-sm-6\">{{ misc.num_teams_attempted }}</dd>

            <dt class=\"col-sm-6\"># Teams Correct</dt>
            <dd class=\"col-sm-6\">{{misc.num_teams_correct}} <span class=\"text-muted\">({{  misc.teams_correct_percentage|number_format(2) }}%)</dd>
          </dl>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 col-sm-6 mt-3\" id=\"judging_results\">
      <div class=\"card\">
        <div class=\"card-header\">
          Judging Results
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 275px\"></svg>
        </div>
      </div>
    </div>
    <div class=\"col-lg-5 col-sm-12 mt-3\" id=\"submission_times\">
      <div class=\"card\">
        <div class=\"card-header\">
          Submissions over Time
        </div>
        <div class=\"card-body\">
            <svg style=\"height: 275px\"></svg>
        </div>
      </div>
    </div>
  </div>
  <div class=\"row equal mt-3\">
    <div class=\"col-12\" id=\"maxruntime\">
      <div class=\"card\">
        <div class=\"card-header\">
          Max Runtimes
        </div>
        <div class=\"card-body\">
          <svg style=\"height: 600px\"></svg>
        </div>
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
\$(function(){
    var run_max_times = [
      {
        key: \"Max Runtimes\",
        values: [
          {% for j in judgings %}
            {
              \"id\"    : {{ j.judgingid }},
              \"label\" : \"j{{ j.judgingid }}\",
              \"value\" : {{ j.maxRuntime() }},
              \"team\"  : \"{{ j.submission.team.name }}\",
              \"submittime\"  : \"{{ j.submission.submittime | printtime(null, j.submission.contest) }}\",
              \"color\" : \"{{ colors[j.result] }}\",
              \"firstfile\" : \"{{ j.submission.files[0].filename }}\",
            },
          {% endfor %}
        ]
      }
    ];
    nv.addGraph(function() {
      var chart = nv.models.discreteBarChart()
          .x(function(d) { return d.label })
          .y(function(d) { return d.value })
          .valueFormat(d3.format('.3f'))
          .staggerLabels(run_max_times[0].values.length > 10)
          .forceY([0, {{ timelimit*1.20 }}])
          .showValues(false)
          .margin({bottom: 90})
          .duration(250)
        ;


      chart.yAxis
        .tickFormat(d3.format('.3f'))
        .axisLabel('Runtime(in s)');
      chart.xAxis.axisLabel(\"Judgings\");
      d3.select('#maxruntime svg')
          .datum(run_max_times)
          .call(chart);
      // Clicking on one of the bars takes you to the judgment
      chart.discretebar.dispatch.on('elementClick', function(e) {
        window.location = \"{{ path('jury_submission_by_judging', {'jid': '_JUDGING_ID_' }) }}\".replace('_JUDGING_ID_', e.data.id);
      });
      // More useful tooltip
      chart.tooltip.contentGenerator(function (obj) {
        var format = d3.format(\".3f\");
        return '<div style=\"background: LightCyan;\">'
\t  + '<b>Team:</b> ' + obj.data.team + '<br/>'
          + '<b>Submitted:</b> ' + obj.data.submittime + '<br/>'
          + '<b>First file:</b> <tt>' + obj.data.firstfile + '</tt><br/>'
          + '<b>max. Runtime:</b> ' + format(obj.data.value) + 's</b><br/>'
          + '<small>click to view judging</small>'
          + '</div>';
      });

      // Create our timelimit line
      d3.select('#maxruntime svg')
        .append('line')
        .attr({id: 'maxline'})
        .style(\"stroke\", \"#F00\");

      // update the line in case the chart dimensions have changed
      var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
      updateline = function(){
        line = d3.select('#maxruntime svg #maxline')
        .attr({
          x1: chart.margin().left,
          y1: chart.yAxis.scale()({{timelimit}})+ chart.margin().top,
          x2: +svgsize - chart.margin().right,
          y2: chart.yAxis.scale()({{timelimit}}) + chart.margin().top,
        })
      }
      updateline();
      nv.utils.windowResize(function() {
        updateline();
        chart.update()
      });
      return chart;
    });

    //////////////////////////////////////
    // Results by type
    var judging_results = [
      {
        key: \"Judging Results\",
        values: [
          {% for result,count in results %}
            {
              \"label\" : \"{{result}}\",
              \"value\" : {{ count }},
              \"color\" : \"{{ colors[result] }}\",
            },
          {% endfor %}
        ]
      }
    ];
    nv.addGraph(function() {
      var chart = nv.models.discreteBarChart()
          .x(function(d) { return d.label })
          .y(function(d) { return d.value })
          .valueFormat(d3.format('.0f'))
          .staggerLabels(run_max_times[0].values.length > 2)
          .margin({bottom: 90})
          .duration(250)
          ;
      chart.yAxis
        .tickFormat(d3.format('.0f'))
        .axisLabel('Number of submissions');
      chart.xAxis.axisLabel(\"Judgement\");
      d3.select('#judging_results svg')
          .datum(judging_results)
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

      d3.select('#submission_times svg')
          .datum(submission_stats)
          .call(chart);
      nv.utils.windowResize(chart.update);
      return chart;
    });







})
</script>
{% include 'jury/analysis/download_graphs.html.twig' %}

{% endblock %}
", "jury/analysis/problem.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/analysis/problem.html.twig");
    }
}
