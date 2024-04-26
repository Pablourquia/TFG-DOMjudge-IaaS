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

/* jury/executable.html.twig */
class __TwigTemplate_153a67880edca277742d923075a62ca4 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/executable.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/executable.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/executable.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/executable.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/executable.html.twig", 1);
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

        echo "Executable ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 4, $this->source); })()), "execid", [], "any", false, false, false, 4), "html", null, true);
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
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ace/ace.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ace/ext-modelist.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 10
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 10, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "
    <h1>Executable <code>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 15, $this->source); })()), "execid", [], "any", false, false, false, 15), "html", null, true);
        echo "</code></h1>

    <div class=\"mb-4\">";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 19
            echo "<p>
                ";
            // line 20
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_download", ["execId" => twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 20, $this->source); })()), "execid", [], "any", false, false, false, 20)]), "Download ZIP", "secondary", "file-download");
            echo "
                ";
            // line 21
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_delete", ["execId" => twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 21, $this->source); })()), "execid", [], "any", false, false, false, 21)]), "Delete", "danger", "trash-alt", true);
            echo "
            </p>
        ";
        }
        // line 24
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Description</th>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 35, $this->source); })()), "type", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Used as ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38), "html", null, true);
        echo " script</th>
                    <td>
                        ";
        // line 40
        $context["used"] = false;
        // line 41
        echo "                        ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 41, $this->source); })()), "type", [], "any", false, false, false, 41) == "compare") && ((isset($context["default_compare"]) || array_key_exists("default_compare", $context) ? $context["default_compare"] : (function () { throw new RuntimeError('Variable "default_compare" does not exist.', 41, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 41, $this->source); })()), "execid", [], "any", false, false, false, 41)))) {
            // line 42
            echo "                            <em>default compare</em>
                            ";
            // line 43
            $context["used"] = true;
            // line 44
            echo "                        ";
        } elseif (((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 44, $this->source); })()), "type", [], "any", false, false, false, 44) == "run") && ((isset($context["default_run"]) || array_key_exists("default_run", $context) ? $context["default_run"] : (function () { throw new RuntimeError('Variable "default_run" does not exist.', 44, $this->source); })()) == twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 44, $this->source); })()), "execid", [], "any", false, false, false, 44)))) {
            // line 45
            echo "                            <em>default run</em>
                            ";
            // line 46
            $context["used"] = true;
            // line 47
            echo "                        ";
        }
        // line 48
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48) == "compare")) {
            // line 49
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 49, $this->source); })()), "problemsCompare", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 50
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\">
                                    p";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 51), "html", null, true);
                echo "
                                </a>
                                ";
                // line 53
                $context["used"] = true;
                // line 54
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 55, $this->source); })()), "type", [], "any", false, false, false, 55) == "run")) {
            // line 56
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 56, $this->source); })()), "problemsRun", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 57
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">
                                    p";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 58), "html", null, true);
                echo "
                                </a>
                                ";
                // line 60
                $context["used"] = true;
                // line 61
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                        ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 62, $this->source); })()), "type", [], "any", false, false, false, 62) == "compile")) {
            // line 63
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 63, $this->source); })()), "languages", [], "any", false, false, false, 63));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 64
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_language", ["langId" => twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\">
                                    ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "langid", [], "any", false, false, false, 65), "html", null, true);
                echo "
                                </a>
                                ";
                // line 67
                $context["used"] = true;
                // line 68
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                        ";
        }
        // line 70
        echo "                        ";
        if ( !(isset($context["used"]) || array_key_exists("used", $context) ? $context["used"] : (function () { throw new RuntimeError('Variable "used" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "                            <span class=\"nodata\">none</span>
                        ";
        }
        // line 73
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    <h1>Content</h1>

    ";
        // line 81
        if ( !twig_test_empty((isset($context["skippedBinary"]) || array_key_exists("skippedBinary", $context) ? $context["skippedBinary"] : (function () { throw new RuntimeError('Variable "skippedBinary" does not exist.', 81, $this->source); })()))) {
            // line 82
            echo "        <div class=\"alert alert-warning\">
            We exclude these files from editing since we could not detect their encoding (e.g. they are binary files):
            <ul>
                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["skippedBinary"]) || array_key_exists("skippedBinary", $context) ? $context["skippedBinary"] : (function () { throw new RuntimeError('Variable "skippedBinary" does not exist.', 85, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 86
                echo "                    <li><code>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "filename", [], "any", false, false, false, 86), "html", null, true);
                echo "</code></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "            </ul>
        </div>
    ";
        }
        // line 91
        echo "
    ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_start');
        echo "

    ";
        // line 94
        if ( !(isset($context["filenames"]) || array_key_exists("filenames", $context) ? $context["filenames"] : (function () { throw new RuntimeError('Variable "filenames" does not exist.', 94, $this->source); })())) {
            // line 95
            echo "        <p class=\"nodata\">No files in this executable.</p>
    ";
        } else {
            // line 97
            echo "        <ul class=\"nav nav-tabs source-tab-nav\" role=\"tablist\">";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filenames"]) || array_key_exists("filenames", $context) ? $context["filenames"] : (function () { throw new RuntimeError('Variable "filenames" does not exist.', 98, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["idx"] => $context["filename"]) {
                // line 99
                echo "                <li class=\"nav-item\">
                    <a class=\"nav-link ";
                // line 100
                if ((((null === (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 100, $this->source); })())) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 100)) || ((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 100, $this->source); })()) == $context["idx"]))) {
                    echo "active";
                }
                echo "\" data-toggle=\"tab\"
                       href=\"#source-";
                // line 101
                echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                echo "\" role=\"tab\"><code>";
                echo twig_escape_filter($this->env, $context["filename"], "html", null, true);
                echo "</code>";
                if (twig_get_attribute($this->env, $this->source, (isset($context["executableBits"]) || array_key_exists("executableBits", $context) ? $context["executableBits"] : (function () { throw new RuntimeError('Variable "executableBits" does not exist.', 101, $this->source); })()), $context["idx"], [], "array", false, false, false, 101)) {
                    echo " <sub>x-bit</sub>";
                }
                echo "</a>
                </li>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['filename'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "        </ul>
        <div class=\"tab-content source-tab\">";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["filenames"]) || array_key_exists("filenames", $context) ? $context["filenames"] : (function () { throw new RuntimeError('Variable "filenames" does not exist.', 106, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["idx"] => $context["filename"]) {
                // line 107
                echo "                <div class=\"tab-pane fade ";
                if ((((null === (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 107, $this->source); })())) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 107)) || ((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 107, $this->source); })()) == $context["idx"]))) {
                    echo "show active";
                }
                echo "\" id=\"source-";
                echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                echo "\"
                     role=\"tabpanel\">
                    <div class=\"mb-1\">
                        <a class=\"btn btn-secondary btn-sm\"
                           href=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_download_single", ["execId" => twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 111, $this->source); })()), "execid", [], "any", false, false, false, 111), "rank" => twig_get_attribute($this->env, $this->source, (isset($context["ranks"]) || array_key_exists("ranks", $context) ? $context["ranks"] : (function () { throw new RuntimeError('Variable "ranks" does not exist.', 111, $this->source); })()), $context["idx"], [], "array", false, false, false, 111)]), "html", null, true);
                echo "\">
                            <i class=\"fas fa-download\"></i> Download file
                        </a>
                        ";
                // line 114
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 115
                    echo "                            <a class=\"btn btn-secondary btn-sm\"
                               data-ajax-modal
                               href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable_delete_single", ["execId" => twig_get_attribute($this->env, $this->source, (isset($context["executable"]) || array_key_exists("executable", $context) ? $context["executable"] : (function () { throw new RuntimeError('Variable "executable" does not exist.', 117, $this->source); })()), "execid", [], "any", false, false, false, 117), "rankToDelete" => twig_get_attribute($this->env, $this->source, (isset($context["ranks"]) || array_key_exists("ranks", $context) ? $context["ranks"] : (function () { throw new RuntimeError('Variable "ranks" does not exist.', 117, $this->source); })()), $context["idx"], [], "array", false, false, false, 117)]), "html", null, true);
                    echo "\">
                                <i class=\"fas fa-trash\"></i> Delete file
                            </a>
                        ";
                }
                // line 121
                echo "                    </div>

                    ";
                // line 123
                echo $this->extensions['App\Twig\TwigExtension']->codeEditor(twig_get_attribute($this->env, $this->source, (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 123, $this->source); })()), $context["idx"], [], "array", false, false, false, 123), $context["idx"], null, $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), ("form_source" . $context["idx"]), twig_get_attribute($this->env, $this->source, (isset($context["aceFilenames"]) || array_key_exists("aceFilenames", $context) ? $context["aceFilenames"] : (function () { throw new RuntimeError('Variable "aceFilenames" does not exist.', 123, $this->source); })()), $context["idx"], [], "array", false, false, false, 123));
                echo "
                    <script>
                        \$(function () {
                            \$('#form_source";
                // line 126
                echo twig_escape_filter($this->env, $context["idx"], "html", null, true);
                echo "').closest('.form-group').hide();
                        });
                    </script>
                </div>";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['filename'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
            // line 135
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), 'widget');
            echo "
            </div>
        </div>
        ";
            // line 138
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), 'form_end');
            echo "
    ";
        }
        // line 140
        echo "
    ";
        // line 141
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 142
            echo "        <hr>
        <i>or</i>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
            // line 147
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["uploadForm"]) || array_key_exists("uploadForm", $context) ? $context["uploadForm"] : (function () { throw new RuntimeError('Variable "uploadForm" does not exist.', 147, $this->source); })()), 'form', ["id" => "execUploadForm"]);
            echo "
            </div>
        </div>
    ";
        }
        // line 151
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/executable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 151,  517 => 147,  510 => 142,  508 => 141,  505 => 140,  500 => 138,  494 => 135,  488 => 131,  470 => 126,  464 => 123,  460 => 121,  453 => 117,  449 => 115,  447 => 114,  441 => 111,  429 => 107,  412 => 106,  409 => 104,  387 => 101,  381 => 100,  378 => 99,  361 => 98,  359 => 97,  355 => 95,  353 => 94,  348 => 92,  345 => 91,  340 => 88,  331 => 86,  327 => 85,  322 => 82,  320 => 81,  310 => 73,  306 => 71,  303 => 70,  300 => 69,  294 => 68,  292 => 67,  287 => 65,  282 => 64,  277 => 63,  274 => 62,  268 => 61,  266 => 60,  261 => 58,  256 => 57,  251 => 56,  248 => 55,  242 => 54,  240 => 53,  235 => 51,  230 => 50,  225 => 49,  222 => 48,  219 => 47,  217 => 46,  214 => 45,  211 => 44,  209 => 43,  206 => 42,  203 => 41,  201 => 40,  196 => 38,  190 => 35,  183 => 31,  174 => 24,  168 => 21,  164 => 20,  161 => 19,  159 => 18,  154 => 15,  151 => 14,  138 => 13,  123 => 10,  119 => 9,  115 => 8,  110 => 7,  97 => 6,  69 => 4,  55 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Executable {{ executable.execid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    <script src=\"{{ asset('js/ace/ace.js') }}\"></script>
    <script src=\"{{ asset('js/ace/ext-modelist.js') }}\"></script>
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>Executable <code>{{ executable.execid }}</code></h1>

    <div class=\"mb-4\">
        {%- if is_granted('ROLE_ADMIN') -%}
            <p>
                {{ button(path('jury_executable_download', {'execId': executable.execid}), 'Download ZIP', 'secondary', 'file-download') }}
                {{ button(path('jury_executable_delete', {'execId': executable.execid}), 'Delete', 'danger', 'trash-alt', true) }}
            </p>
        {% endif %}
    </div>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Description</th>
                    <td>{{ executable.description }}</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>{{ executable.type }}</td>
                </tr>
                <tr>
                    <th>Used as {{ executable.type }} script</th>
                    <td>
                        {% set used = false %}
                        {% if executable.type == 'compare' and default_compare == executable.execid %}
                            <em>default compare</em>
                            {% set used = true %}
                        {% elseif executable.type == 'run' and default_run == executable.execid %}
                            <em>default run</em>
                            {% set used = true %}
                        {% endif %}
                        {% if executable.type == 'compare' %}
                            {% for problem in executable.problemsCompare %}
                                <a href=\"{{ path('jury_problem', {'probId': problem.probid}) }}\">
                                    p{{ problem.probid }}
                                </a>
                                {% set used = true %}
                            {% endfor %}
                        {% elseif executable.type == 'run' %}
                            {% for problem in executable.problemsRun %}
                                <a href=\"{{ path('jury_problem', {'probId': problem.probid}) }}\">
                                    p{{ problem.probid }}
                                </a>
                                {% set used = true %}
                            {% endfor %}
                        {% elseif executable.type == 'compile' %}
                            {% for language in executable.languages %}
                                <a href=\"{{ path('jury_language', {'langId': language.langid}) }}\">
                                    {{ language.langid }}
                                </a>
                                {% set used = true %}
                            {% endfor %}
                        {% endif %}
                        {% if not used %}
                            <span class=\"nodata\">none</span>
                        {% endif %}
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <h1>Content</h1>

    {% if skippedBinary is not empty %}
        <div class=\"alert alert-warning\">
            We exclude these files from editing since we could not detect their encoding (e.g. they are binary files):
            <ul>
                {% for data in skippedBinary %}
                    <li><code>{{ data.filename }}</code></li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}

    {{ form_start(form) }}

    {% if not filenames %}
        <p class=\"nodata\">No files in this executable.</p>
    {% else %}
        <ul class=\"nav nav-tabs source-tab-nav\" role=\"tablist\">
            {%- for idx, filename in filenames %}
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if (selected is null and loop.first) or selected == idx %}active{% endif %}\" data-toggle=\"tab\"
                       href=\"#source-{{ idx }}\" role=\"tab\"><code>{{ filename }}</code>{%  if (executableBits[idx]) %} <sub>x-bit</sub>{% endif %}</a>
                </li>
            {%- endfor %}
        </ul>
        <div class=\"tab-content source-tab\">
            {%- for idx, filename in filenames %}
                <div class=\"tab-pane fade {% if (selected is null and loop.first) or selected == idx %}show active{% endif %}\" id=\"source-{{ idx }}\"
                     role=\"tabpanel\">
                    <div class=\"mb-1\">
                        <a class=\"btn btn-secondary btn-sm\"
                           href=\"{{ path('jury_executable_download_single', {execId: executable.execid, rank: ranks[idx]}) }}\">
                            <i class=\"fas fa-download\"></i> Download file
                        </a>
                        {% if is_granted('ROLE_ADMIN') %}
                            <a class=\"btn btn-secondary btn-sm\"
                               data-ajax-modal
                               href=\"{{ path('jury_executable_delete_single', {execId: executable.execid, rankToDelete: ranks[idx]}) }}\">
                                <i class=\"fas fa-trash\"></i> Delete file
                            </a>
                        {% endif %}
                    </div>

                    {{ files[idx] | codeEditor(idx, null, is_granted('ROLE_ADMIN'), 'form_source' ~ idx, aceFilenames[idx]) }}
                    <script>
                        \$(function () {
                            \$('#form_source{{ idx }}').closest('.form-group').hide();
                        });
                    </script>
                </div>
            {%- endfor %}
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form_widget(form) }}
            </div>
        </div>
        {{ form_end(form) }}
    {% endif %}

    {% if is_granted('ROLE_ADMIN') %}
        <hr>
        <i>or</i>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                {{ form(uploadForm, { 'id': 'execUploadForm'}) }}
            </div>
        </div>
    {% endif %}

{% endblock %}
", "jury/executable.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/executable.html.twig");
    }
}
