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

/* jury/problem_testcases.html.twig */
class __TwigTemplate_15767670983421b9dd1c77e616bac4c1 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem_testcases.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem_testcases.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/problem_testcases.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem_testcases.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem_testcases.html.twig", 1);
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

        echo "Testcases for p";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 4, $this->source); })()), "probid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>Testcases for p";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 13, $this->source); })()), "probid", [], "any", false, false, false, 13), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"mb-2\">
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 16, $this->source); })()), "probid", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">Back to problem p";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 16, $this->source); })()), "probid", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
    </div>

    <form method=\"post\" enctype=\"multipart/form-data\">

    ";
        // line 21
        if (twig_test_empty((isset($context["testcases"]) || array_key_exists("testcases", $context) ? $context["testcases"] : (function () { throw new RuntimeError('Variable "testcases" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "        <p class=\"nodata\">No testcase(s) yet.</p>
    ";
        } else {
            // line 24
            echo "        <table class=\"table table-sm table-striped table-hover testcases\">
            <thead>
            <tr>
                ";
            // line 27
            if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 27, $this->source); })())) {
                // line 28
                echo "                    <th></th>
                ";
            }
            // line 30
            echo "                <th class=\"testrank\">#</th>
                <th class=\"testsample\">sample</th>
                <th>download</th>
                <th>size</th>
                <th>md5</th>
                ";
            // line 35
            if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 35, $this->source); })())) {
                // line 36
                echo "                    <th>upload new</th>
                ";
            }
            // line 38
            echo "                <th>description / image</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["testcases"]) || array_key_exists("testcases", $context) ? $context["testcases"] : (function () { throw new RuntimeError('Variable "testcases" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["rank"] => $context["testcase"]) {
                // line 43
                echo "                <tr>
                    ";
                // line 44
                if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 44, $this->source); })())) {
                    // line 45
                    echo "                        <td rowspan=\"2\">
                            <a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_testcase_delete", ["testcaseId" => twig_get_attribute($this->env, $this->source, $context["testcase"], "testcaseid", [], "any", false, false, false, 46)]), "html", null, true);
                    echo "\"
                               title=\"delete testcase ";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "testcaseid", [], "any", false, false, false, 47), "html", null, true);
                    echo "\"
                               onclick=\"confirm('Proceed with the deletion of testcase ";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "testcaseid", [], "any", false, false, false, 48), "html", null, true);
                    echo "?');\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </a>
                        </td>
                    ";
                }
                // line 53
                echo "                    <td rowspan=\"2\" class=\"testrank\">
                        ";
                // line 54
                if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 54, $this->source); })())) {
                    // line 55
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_move", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 55, $this->source); })()), "probid", [], "any", false, false, false, 55), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 55), "direction" => "up"]), "html", null, true);
                    echo "\"
                               title=\"Move testcase up\"><i class=\"fas fa-arrow-up\"></i></a><br>
                        ";
                }
                // line 58
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 58), "html", null, true);
                echo "
                        ";
                // line 59
                if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 59, $this->source); })())) {
                    // line 60
                    echo "                            <br>
                            <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_move", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 61, $this->source); })()), "probid", [], "any", false, false, false, 61), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 61), "direction" => "down"]), "html", null, true);
                    echo "\"
                               title=\"Move testcase down\"><i class=\"fas fa-arrow-down\"></i></a>
                        ";
                }
                // line 64
                echo "                    </td>
                    <td rowspan=\"2\" class=\"testsample\">
                        <input type=\"checkbox\" name=\"sample[";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 66), "html", null, true);
                echo "]\" value=\"sample\"
                               ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["testcase"], "sample", [], "any", false, false, false, 67)) {
                    echo "checked";
                }
                echo " />
                    </td>
                    <td class=\"filename\">
                        <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 70, $this->source); })()), "probid", [], "any", false, false, false, 70), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 70), "type" => "input"]), "html", null, true);
                echo "\">
                            ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "downloadName", [], "any", false, false, false, 71), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["extensionMapping"]) || array_key_exists("extensionMapping", $context) ? $context["extensionMapping"] : (function () { throw new RuntimeError('Variable "extensionMapping" does not exist.', 71, $this->source); })()), "input", [], "any", false, false, false, 71), "html", null, true);
                echo "
                        </a>
                    </td>
                    <td class=\"size\">
                        ";
                // line 75
                echo App\Utils\Utils::printSize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 75, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 75), [], "array", false, false, false, 75), "input_size", [], "any", false, false, false, 75));
                echo "
                    </td>
                    <td class=\"md5 small\">
                        ";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "md5sumInput", [], "any", false, false, false, 78), "html", null, true);
                echo "
                    </td>
                    ";
                // line 80
                if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 80, $this->source); })())) {
                    // line 81
                    echo "                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_input[";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 82), "html", null, true);
                    echo "]\" id=\"update_input_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 82), "html", null, true);
                    echo "\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_input_";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 83), "html", null, true);
                    echo "\">new input file</label>
                        </div></td>
                    ";
                }
                // line 86
                echo "                    <td class=\"testdesc\">
                        <span class=\"testcase-description\">";
                // line 87
                echo $this->extensions['App\Twig\TwigExtension']->descriptionExpand(twig_get_attribute($this->env, $this->source, $context["testcase"], "description", [0 => true], "method", false, false, false, 87));
                echo "</span>
                        ";
                // line 88
                if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 88, $this->source); })())) {
                    // line 89
                    echo "                            <textarea class=\"d-none form-control testcase-description-field\" name=\"description[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 89), "html", null, true);
                    echo "]\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "description", [0 => true], "method", false, false, false, 89), "html", null, true);
                    echo "</textarea>
                            <button type=\"button\" class=\"float-right testcase-edit-description btn btn-secondary btn-sm\">Edit</button>
                        ";
                }
                // line 92
                echo "                    </td>
                </tr>
                <tr>
                    <td class=\"filename\">
                        <a href=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 96, $this->source); })()), "probid", [], "any", false, false, false, 96), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 96), "type" => "output"]), "html", null, true);
                echo "\">
                            ";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "downloadName", [], "any", false, false, false, 97), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["extensionMapping"]) || array_key_exists("extensionMapping", $context) ? $context["extensionMapping"] : (function () { throw new RuntimeError('Variable "extensionMapping" does not exist.', 97, $this->source); })()), "output", [], "any", false, false, false, 97), "html", null, true);
                echo "
                        </a>
                    </td>
                    <td class=\"size\">
                        ";
                // line 101
                echo App\Utils\Utils::printSize(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 101, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 101), [], "array", false, false, false, 101), "output_size", [], "any", false, false, false, 101));
                echo "
                    </td>
                    <td class=\"md5 small\">
                        ";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "md5sumOutput", [], "any", false, false, false, 104), "html", null, true);
                echo "
                    </td>
                    ";
                // line 106
                if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 106, $this->source); })())) {
                    // line 107
                    echo "                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_output[";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 108), "html", null, true);
                    echo "]\" id=\"update_output_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 108), "html", null, true);
                    echo "\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_output_";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 109), "html", null, true);
                    echo "\">new output file</label>
                        </div></td>
                    ";
                }
                // line 112
                echo "                    <td class=\"testimage\">
                        ";
                // line 113
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 113, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 113), [], "array", false, false, false, 113), "image_size", [], "any", false, false, false, 113) > 0)) {
                    // line 114
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 114, $this->source); })()), "probid", [], "any", false, false, false, 114), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 114), "type" => "image"]), "html", null, true);
                    echo "\">
                                <span class=\"filename\">p";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 115, $this->source); })()), "probid", [], "any", false, false, false, 115), "html", null, true);
                    echo ".t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 115), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["testcaseData"]) || array_key_exists("testcaseData", $context) ? $context["testcaseData"] : (function () { throw new RuntimeError('Variable "testcaseData" does not exist.', 115, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 115), [], "array", false, false, false, 115), "image_type", [], "any", false, false, false, 115), "html", null, true);
                    echo "</span>
                            </a>
                            ";
                    // line 117
                    if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 117, $this->source); })())) {
                        // line 118
                        echo "                            &nbsp;
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[";
                        // line 120
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 120), "html", null, true);
                        echo "]\" id=\"update_image_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 120), "html", null, true);
                        echo "\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_";
                        // line 121
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 121), "html", null, true);
                        echo "\">replace image</label>
                            </div>
                            ";
                    }
                    // line 124
                    echo "                        ";
                } else {
                    // line 125
                    echo "                            ";
                    if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 125, $this->source); })())) {
                        // line 126
                        echo "                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[";
                        // line 127
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 127), "html", null, true);
                        echo "]\" id=\"update_image_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 127), "html", null, true);
                        echo "\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_";
                        // line 128
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 128), "html", null, true);
                        echo "\">add an image</label>
                            </div>
                            ";
                    } else {
                        // line 131
                        echo "                            <span class=\"nodata\">No image</span>
                            ";
                    }
                    // line 133
                    echo "                        ";
                }
                // line 134
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rank'], $context['testcase'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "            </tbody>
        </table>
    ";
        }
        // line 140
        echo "
    ";
        // line 141
        if ((isset($context["allowEdit"]) || array_key_exists("allowEdit", $context) ? $context["allowEdit"] : (function () { throw new RuntimeError('Variable "allowEdit" does not exist.', 141, $this->source); })())) {
            // line 142
            echo "        <h2>Create new testcase</h2>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_input\" id=\"add_input\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_input\">Input testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_output\" id=\"add_output\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_output\">Output testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"add_sample\" name=\"add_sample\">
                    <label class=\"custom-control-label\" for=\"add_sample\">Sample testcase</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <label for=\"add_desc\">Description</label>
                <textarea name=\"add_desc\" id=\"add_desc\" rows=\"5\" class=\"form-control\"></textarea>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_image\" id=\"add_image\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_image\">Image</label>
                </div>
            </div>
        </div>

        <input type=\"submit\" class=\"btn btn-primary\" value=\"Submit all changes\">
    ";
        }
        // line 189
        echo "
    </form>

    <script>
        \$(function() {
            \$('.testcase-edit-description').on('click', function() {
                var \$button = \$(this);
                var \$description = \$button.parent().find('.testcase-description');
                var \$descriptionInput = \$button.parent().find('.testcase-description-field');

                if (\$description.hasClass('d-none')) {
                    \$description.removeClass('d-none');
                    \$descriptionInput.addClass('d-none');
                    \$button.text('Edit');
                    \$descriptionInput.val(\$description.text());
                } else {
                    \$description.addClass('d-none');
                    \$descriptionInput.removeClass('d-none');
                    \$button.text('Cancel');
                }
            });
        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/problem_testcases.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 189,  461 => 142,  459 => 141,  456 => 140,  451 => 137,  443 => 134,  440 => 133,  436 => 131,  430 => 128,  424 => 127,  421 => 126,  418 => 125,  415 => 124,  409 => 121,  403 => 120,  399 => 118,  397 => 117,  388 => 115,  383 => 114,  381 => 113,  378 => 112,  372 => 109,  366 => 108,  363 => 107,  361 => 106,  356 => 104,  350 => 101,  341 => 97,  337 => 96,  331 => 92,  322 => 89,  320 => 88,  316 => 87,  313 => 86,  307 => 83,  301 => 82,  298 => 81,  296 => 80,  291 => 78,  285 => 75,  276 => 71,  272 => 70,  264 => 67,  260 => 66,  256 => 64,  250 => 61,  247 => 60,  245 => 59,  240 => 58,  233 => 55,  231 => 54,  228 => 53,  220 => 48,  216 => 47,  212 => 46,  209 => 45,  207 => 44,  204 => 43,  200 => 42,  194 => 38,  190 => 36,  188 => 35,  181 => 30,  177 => 28,  175 => 27,  170 => 24,  166 => 22,  164 => 21,  154 => 16,  146 => 13,  143 => 12,  130 => 11,  115 => 8,  110 => 7,  97 => 6,  69 => 4,  55 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Testcases for p{{ problem.probid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Testcases for p{{ problem.probid }} - {{ problem.name }}</h1>

    <div class=\"mb-2\">
        <a href=\"{{ path('jury_problem', {'probId': problem.probid}) }}\">Back to problem p{{ problem.probid }}</a>
    </div>

    <form method=\"post\" enctype=\"multipart/form-data\">

    {% if testcases is empty %}
        <p class=\"nodata\">No testcase(s) yet.</p>
    {% else %}
        <table class=\"table table-sm table-striped table-hover testcases\">
            <thead>
            <tr>
                {% if allowEdit %}
                    <th></th>
                {% endif %}
                <th class=\"testrank\">#</th>
                <th class=\"testsample\">sample</th>
                <th>download</th>
                <th>size</th>
                <th>md5</th>
                {% if allowEdit %}
                    <th>upload new</th>
                {% endif %}
                <th>description / image</th>
            </tr>
            </thead>
            <tbody>
            {% for rank, testcase in testcases %}
                <tr>
                    {% if allowEdit %}
                        <td rowspan=\"2\">
                            <a href=\"{{  path('jury_testcase_delete', {'testcaseId': testcase.testcaseid}) }}\"
                               title=\"delete testcase {{ testcase.testcaseid }}\"
                               onclick=\"confirm('Proceed with the deletion of testcase {{ testcase.testcaseid }}?');\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </a>
                        </td>
                    {% endif %}
                    <td rowspan=\"2\" class=\"testrank\">
                        {% if allowEdit %}
                            <a href=\"{{ path('jury_problem_testcase_move', {'probId': problem.probid, 'rank': testcase.rank, 'direction': 'up'}) }}\"
                               title=\"Move testcase up\"><i class=\"fas fa-arrow-up\"></i></a><br>
                        {% endif %}
                        {{ testcase.rank }}
                        {% if allowEdit %}
                            <br>
                            <a href=\"{{ path('jury_problem_testcase_move', {'probId': problem.probid, 'rank': testcase.rank, 'direction': 'down'}) }}\"
                               title=\"Move testcase down\"><i class=\"fas fa-arrow-down\"></i></a>
                        {% endif %}
                    </td>
                    <td rowspan=\"2\" class=\"testsample\">
                        <input type=\"checkbox\" name=\"sample[{{ testcase.rank }}]\" value=\"sample\"
                               {% if testcase.sample %}checked{% endif %} />
                    </td>
                    <td class=\"filename\">
                        <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': problem.probid, 'rank': testcase.rank, 'type': 'input'}) }}\">
                            {{ testcase.downloadName }}.{{ extensionMapping.input }}
                        </a>
                    </td>
                    <td class=\"size\">
                        {{ testcaseData[testcase.rank].input_size | printSize }}
                    </td>
                    <td class=\"md5 small\">
                        {{ testcase.md5sumInput }}
                    </td>
                    {% if allowEdit %}
                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_input[{{ testcase.rank }}]\" id=\"update_input_{{testcase.rank}}\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_input_{{testcase.rank}}\">new input file</label>
                        </div></td>
                    {% endif %}
                    <td class=\"testdesc\">
                        <span class=\"testcase-description\">{{ testcase.description(true) | descriptionExpand }}</span>
                        {% if allowEdit %}
                            <textarea class=\"d-none form-control testcase-description-field\" name=\"description[{{ testcase.rank }}]\">{{ testcase.description(true) }}</textarea>
                            <button type=\"button\" class=\"float-right testcase-edit-description btn btn-secondary btn-sm\">Edit</button>
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <td class=\"filename\">
                        <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': problem.probid, 'rank': testcase.rank, 'type': 'output'}) }}\">
                            {{ testcase.downloadName }}.{{ extensionMapping.output }}
                        </a>
                    </td>
                    <td class=\"size\">
                        {{ testcaseData[testcase.rank].output_size | printSize }}
                    </td>
                    <td class=\"md5 small\">
                        {{ testcase.md5sumOutput }}
                    </td>
                    {% if allowEdit %}
                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_output[{{ testcase.rank }}]\" id=\"update_output_{{testcase.rank}}\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_output_{{testcase.rank}}\">new output file</label>
                        </div></td>
                    {% endif %}
                    <td class=\"testimage\">
                        {% if testcaseData[testcase.rank].image_size > 0 %}
                            <a href=\"{{ path('jury_problem_testcase_fetch', {'probId': problem.probid, 'rank': testcase.rank, 'type': 'image'}) }}\">
                                <span class=\"filename\">p{{ problem.probid }}.t{{ testcase.rank }}.{{ testcaseData[testcase.rank].image_type }}</span>
                            </a>
                            {% if allowEdit %}
                            &nbsp;
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[{{ testcase.rank }}]\" id=\"update_image_{{testcase.rank}}\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_{{testcase.rank}}\">replace image</label>
                            </div>
                            {% endif %}
                        {% else %}
                            {% if allowEdit %}
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[{{ testcase.rank }}]\" id=\"update_image_{{testcase.rank}}\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_{{testcase.rank}}\">add an image</label>
                            </div>
                            {% else %}
                            <span class=\"nodata\">No image</span>
                            {% endif %}
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endif %}

    {% if allowEdit %}
        <h2>Create new testcase</h2>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_input\" id=\"add_input\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_input\">Input testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_output\" id=\"add_output\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_output\">Output testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"add_sample\" name=\"add_sample\">
                    <label class=\"custom-control-label\" for=\"add_sample\">Sample testcase</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <label for=\"add_desc\">Description</label>
                <textarea name=\"add_desc\" id=\"add_desc\" rows=\"5\" class=\"form-control\"></textarea>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_image\" id=\"add_image\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_image\">Image</label>
                </div>
            </div>
        </div>

        <input type=\"submit\" class=\"btn btn-primary\" value=\"Submit all changes\">
    {% endif %}

    </form>

    <script>
        \$(function() {
            \$('.testcase-edit-description').on('click', function() {
                var \$button = \$(this);
                var \$description = \$button.parent().find('.testcase-description');
                var \$descriptionInput = \$button.parent().find('.testcase-description-field');

                if (\$description.hasClass('d-none')) {
                    \$description.removeClass('d-none');
                    \$descriptionInput.addClass('d-none');
                    \$button.text('Edit');
                    \$descriptionInput.val(\$description.text());
                } else {
                    \$description.addClass('d-none');
                    \$descriptionInput.removeClass('d-none');
                    \$button.text('Cancel');
                }
            });
        });
    </script>

{% endblock %}
", "jury/problem_testcases.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/problem_testcases.html.twig");
    }
}
