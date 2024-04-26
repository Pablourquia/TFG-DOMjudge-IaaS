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

/* jury/analysis/team.html.twig */
class __TwigTemplate_74810863d30cb5fcad5f023f43bce0b4 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/team.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/analysis/team.html.twig"));

        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/analysis/team.html.twig", 1);
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

        echo "Analysis - Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 3, $this->source); })()), "effectiveName", [], "any", false, false, false, 3), "html", null, true);
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
        echo "      <h1>Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 28, $this->source); })()), "teamid", [], "any", false, false, false, 28), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 28, $this->source); })()), "effectiveName", [], "any", false, false, false, 28), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"col-lg-3 col-sm-6 mt-3\">
      <div class=\"card\">
        <div class=\"card-header\">
          Misc Statistics
        </div>
        <div class=\"card-body\">
          <dl class=\"row\">
            <dt class=\"col-sm-6\"># Submissions</dt>
            <dd class=\"col-sm-6\">";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 38, $this->source); })())), "html", null, true);
        echo "</dd>

            <dt class=\"col-sm-6\"># Correct</dt>
            <dd class=\"col-sm-6\">";
        // line 41
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "correct", [], "array", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "correct", [], "array", false, false, false, 41), 0)) : (0)), "html", null, true);
        echo " <span class=\"text-muted\">(";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["misc"]) || array_key_exists("misc", $context) ? $context["misc"] : (function () { throw new RuntimeError('Variable "misc" does not exist.', 41, $this->source); })()), "correct_percentage", [], "any", false, false, false, 41), 2), "html", null, true);
        echo "%)</span></dd>
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
  <div class=\"row equal\">
  ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 69
            echo "      <div class=\"col-3 mt-3\" id=\"maxruntime_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
        <div class=\"card\">
          <div class=\"card-header\">
            Max Runtimes for problem ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "name", [], "any", false, false, false, 72), "html", null, true);
            echo "
          </div>
          <div class=\"card-body\">
            <svg style=\"height: 200px\"></svg>
          </div>
        </div>
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 82
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 83
        echo "<script>
";
        // line 85
        $context["colors"] = ["correct" => "#01df01", "wrong-answer" => "red", "timelimit" => "orange", "run-error" => "#ff3399", "compiler-error" => "grey", "no-output" => "purple", "frozen" => "blue", "output-limit" => "black"];
        // line 96
        echo "\$(function(){

    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 99
            echo "      var run_max_times_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 99), "html", null, true);
            echo " = [
        {
          key: \"Max Runtimes\",
          values: [
            ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 103, $this->source); })()), function ($__j__) use ($context, $macros) { $context["j"] = $__j__; return (twig_get_attribute($this->env, $this->source, $context["j"], "result", [], "any", false, false, false, 103) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 103), "problem", [], "any", false, false, false, 103) == $context["problem"])); }));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 104
                echo "              {
                \"id\"    : ";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 105), "html", null, true);
                echo ",
                \"label\" : \"j";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "judgingid", [], "any", false, false, false, 106), "html", null, true);
                echo "\",
                \"value\" : ";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["j"], "maxRuntime", [], "method", false, false, false, 107), "html", null, true);
                echo ",
                \"valid\" : ";
                // line 108
                echo ((twig_get_attribute($this->env, $this->source, $context["j"], "valid", [], "any", false, false, false, 108)) ? ("true") : ("false"));
                echo ",
                \"submittime\"  : \"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 109), "submittime", [], "any", false, false, false, 109), null, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 109), "contest", [], "any", false, false, false, 109)), "html", null, true);
                echo "\",
                \"color\" : \"";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 110, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["j"], "result", [], "any", false, false, false, 110), [], "array", false, false, false, 110), "html", null, true);
                echo "\",
\t\t\"firstfile\" : \"";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["j"], "submission", [], "any", false, false, false, 111), "files", [], "any", false, false, false, 111), 0, [], "array", false, false, false, 111), "filename", [], "any", false, false, false, 111), "html", null, true);
                echo "\",
              },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "          ]
        }
      ];
      nv.addGraph(function() {
        var chart = nv.models.discreteBarChart()
            .x(function(d) { return d.label })
            .y(function(d) { return d.value })
            .valueFormat(d3.format('.3f'))
            .staggerLabels(run_max_times_";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 122), "html", null, true);
            echo "[0].values.length > 10)
            .showValues(false)
            .forceY([0, ";
            // line 124
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["problem"], "timelimit", [], "any", false, false, false, 124) * 1.2), "html", null, true);
            echo "])
            .margin({bottom: 90})
            .duration(250)
          ;


        chart.yAxis
          .tickFormat(d3.format('.3f'))
          .axisLabel('Runtime(in s)');
        chart.xAxis.axisLabel(\"Judgings\");
        d3.select('#maxruntime_";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 134), "html", null, true);
            echo " svg')
            .datum(run_max_times_";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 135), "html", null, true);
            echo ")
            .call(chart);
        // Clicking on one of the bars takes you to the judgment
        chart.discretebar.dispatch.on('elementClick', function(e) {
          window.location = \"";
            // line 139
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submission_by_judging", ["jid" => "_JUDGING_ID_"]);
            echo "\".replace('_JUDGING_ID_', e.data.id);
        });
        // More useful tooltip
        chart.tooltip.contentGenerator(function (obj) {
          var format = d3.format(\".3f\");
          var prepend = \"\";
          if (!obj.data.valid) {
            prepend = \"<b>(INVALID)</b><br>\"
          }
        return prepend
          + '<div style=\"background: LightCyan;\">'
          + '<b>Submitted:</b> ' + obj.data.submittime + '<br/>'
          + '<b>First file:</b> <tt>' + obj.data.firstfile + '</tt><br/>'
          + '<b>max. Runtime:</b> ' + format(obj.data.value) + 's</b><br/>'
          + '<small>click to view judging</small>'
          + '</div>';
        });

        // Create our timelimit line
        d3.select('#maxruntime_";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 158), "html", null, true);
            echo " svg')
          .append('line')
          .attr({id: 'maxline'})
          .style(\"stroke\", \"#F00\");

        var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
        updateline_";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 164), "html", null, true);
            echo " = function(){
          line = d3.select('#maxruntime_";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 165), "html", null, true);
            echo " svg #maxline')
          .attr({
            x1: chart.margin().left,
            y1: chart.yAxis.scale()(";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "timelimit", [], "any", false, false, false, 168), "html", null, true);
            echo ")+ chart.margin().top,
            x2: +svgsize - chart.margin().right,
            y2: chart.yAxis.scale()(";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "timelimit", [], "any", false, false, false, 170), "html", null, true);
            echo ") + chart.margin().top,
          })
        }
        updateline_";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 173), "html", null, true);
            echo "();
        nv.utils.windowResize(function() {
          updateline_";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 175), "html", null, true);
            echo "();
          chart.update()
        });
        return chart;
      });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "

    //////////////////////////////////////
    // Results by type
    var judging_results = [
      {
        key: \"Judging Results\",
        values: [
          ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 189, $this->source); })()));
        foreach ($context['_seq'] as $context["result"] => $context["count"]) {
            // line 190
            echo "            {
              \"label\" : \"";
            // line 191
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
              \"value\" : ";
            // line 192
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo ",
              \"color\" : \"";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 193, $this->source); })()), $context["result"], [], "array", false, false, false, 193), "html", null, true);
            echo "\",
            },
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['result'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "        ]
      }
    ];
    nv.addGraph(function() {
      var chart = nv.models.discreteBarChart()
          .x(function(d) { return d.label })
          .y(function(d) { return d.value })
          .valueFormat(d3.format('.0f'))
          .staggerLabels(judging_results[0].values.length > 2)
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
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "correct", 1 => "wrong-answer", 2 => "timelimit", 3 => "run-error", 4 => "compiler-error", 5 => "no-output"]);
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 228
            echo "      {
        key: \"";
            // line 229
            echo twig_escape_filter($this->env, $context["result"], "html", null, true);
            echo "\",
        color: \"";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 230, $this->source); })()), $context["result"], [], "array", false, false, false, 230), "html", null, true);
            echo "\",
        values: [
          ";
            // line 233
            echo "          ";
            // line 234
            echo "          [0,0],
          ";
            // line 235
            $context["count"] = 0;
            // line 236
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 236, $this->source); })()), function ($__submission__) use ($context, $macros) { $context["submission"] = $__submission__; return twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 236); }));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 237
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 237) == $context["result"])) {
                    $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 237, $this->source); })()) + 1);
                }
                // line 238
                echo "            [ ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 238) - twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 238, $this->source); })()), "starttime", [], "any", false, false, false, 238)) / 60.0), "html", null, true);
                echo ",
              ";
                // line 239
                echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 239, $this->source); })()), "html", null, true);
                echo "
            ],
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "        ]
      },
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
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
        // line 257
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 257, $this->source); })()), "endtime", [], "any", false, false, false, 257) - twig_get_attribute($this->env, $this->source, (isset($context["current_contest"]) || array_key_exists("current_contest", $context) ? $context["current_contest"] : (function () { throw new RuntimeError('Variable "current_contest" does not exist.', 257, $this->source); })()), "starttime", [], "any", false, false, false, 257)) / 60), "html", null, true);
        echo "])
          .forceY([0, ";
        // line 258
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 258, $this->source); })())) * 1.1), "html", null, true);
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
        // line 277
        $this->loadTemplate("jury/analysis/download_graphs.html.twig", "jury/analysis/team.html.twig", 277)->display($context);
        // line 278
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/analysis/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 278,  602 => 277,  580 => 258,  576 => 257,  562 => 245,  554 => 242,  545 => 239,  540 => 238,  535 => 237,  530 => 236,  528 => 235,  525 => 234,  523 => 233,  518 => 230,  514 => 229,  511 => 228,  507 => 227,  474 => 196,  465 => 193,  461 => 192,  457 => 191,  454 => 190,  450 => 189,  440 => 181,  428 => 175,  423 => 173,  417 => 170,  412 => 168,  406 => 165,  402 => 164,  393 => 158,  371 => 139,  364 => 135,  360 => 134,  347 => 124,  342 => 122,  332 => 114,  323 => 111,  319 => 110,  315 => 109,  311 => 108,  307 => 107,  303 => 106,  299 => 105,  296 => 104,  292 => 103,  284 => 99,  280 => 98,  276 => 96,  274 => 85,  271 => 83,  258 => 82,  233 => 72,  226 => 69,  222 => 68,  190 => 41,  184 => 38,  168 => 28,  155 => 27,  126 => 10,  122 => 9,  118 => 8,  114 => 7,  110 => 6,  97 => 5,  67 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% block title %}Analysis - Team {{ team.effectiveName }} {{ current_contest.shortname | default('') }} - {{ parent() }}{% endblock %}

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
      <h1>Team {{ team.teamid }}: {{ team.effectiveName }}</h1>
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
  <div class=\"row equal\">
  {% for problem in problems %}
      <div class=\"col-3 mt-3\" id=\"maxruntime_{{problem.probid}}\">
        <div class=\"card\">
          <div class=\"card-header\">
            Max Runtimes for problem {{ problem.name }}
          </div>
          <div class=\"card-body\">
            <svg style=\"height: 200px\"></svg>
          </div>
        </div>
      </div>
  {% endfor %}
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

    {% for problem in problems %}
      var run_max_times_{{problem.probid}} = [
        {
          key: \"Max Runtimes\",
          values: [
            {% for j in judgings | filter(j => j.result and j.submission.problem == problem) %}
              {
                \"id\"    : {{ j.judgingid }},
                \"label\" : \"j{{ j.judgingid }}\",
                \"value\" : {{ j.maxRuntime() }},
                \"valid\" : {{ j.valid ? \"true\":\"false\" }},
                \"submittime\"  : \"{{ j.submission.submittime | printtime(null, j.submission.contest) }}\",
                \"color\" : \"{{ colors[j.result] }}\",
\t\t\"firstfile\" : \"{{ j.submission.files[0].filename }}\",
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
            .staggerLabels(run_max_times_{{problem.probid}}[0].values.length > 10)
            .showValues(false)
            .forceY([0, {{ problem.timelimit*1.20 }}])
            .margin({bottom: 90})
            .duration(250)
          ;


        chart.yAxis
          .tickFormat(d3.format('.3f'))
          .axisLabel('Runtime(in s)');
        chart.xAxis.axisLabel(\"Judgings\");
        d3.select('#maxruntime_{{problem.probid}} svg')
            .datum(run_max_times_{{problem.probid}})
            .call(chart);
        // Clicking on one of the bars takes you to the judgment
        chart.discretebar.dispatch.on('elementClick', function(e) {
          window.location = \"{{ path('jury_submission_by_judging', {'jid': '_JUDGING_ID_' }) }}\".replace('_JUDGING_ID_', e.data.id);
        });
        // More useful tooltip
        chart.tooltip.contentGenerator(function (obj) {
          var format = d3.format(\".3f\");
          var prepend = \"\";
          if (!obj.data.valid) {
            prepend = \"<b>(INVALID)</b><br>\"
          }
        return prepend
          + '<div style=\"background: LightCyan;\">'
          + '<b>Submitted:</b> ' + obj.data.submittime + '<br/>'
          + '<b>First file:</b> <tt>' + obj.data.firstfile + '</tt><br/>'
          + '<b>max. Runtime:</b> ' + format(obj.data.value) + 's</b><br/>'
          + '<small>click to view judging</small>'
          + '</div>';
        });

        // Create our timelimit line
        d3.select('#maxruntime_{{problem.probid}} svg')
          .append('line')
          .attr({id: 'maxline'})
          .style(\"stroke\", \"#F00\");

        var svgsize = chart.container.clientWidth || chart.container.parentNode.clientWidth;
        updateline_{{problem.probid}} = function(){
          line = d3.select('#maxruntime_{{problem.probid}} svg #maxline')
          .attr({
            x1: chart.margin().left,
            y1: chart.yAxis.scale()({{problem.timelimit}})+ chart.margin().top,
            x2: +svgsize - chart.margin().right,
            y2: chart.yAxis.scale()({{problem.timelimit}}) + chart.margin().top,
          })
        }
        updateline_{{problem.probid}}();
        nv.utils.windowResize(function() {
          updateline_{{problem.probid}}();
          chart.update()
        });
        return chart;
      });
    {% endfor %}


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
          .staggerLabels(judging_results[0].values.length > 2)
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
", "jury/analysis/team.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/analysis/team.html.twig");
    }
}
