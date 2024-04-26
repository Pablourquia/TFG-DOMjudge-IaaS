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

/* jury/jury_macros.twig */
class __TwigTemplate_eab25c16cda067088717f5a68b354ab4 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/jury_macros.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/jury_macros.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/jury_macros.twig"));

        // line 14
        echo "
";
        // line 20
        echo "
";
        // line 35
        echo "
";
        // line 55
        echo "
";
        // line 87
        echo "
";
        // line 195
        echo "
";
        // line 230
        echo "
";
        // line 246
        echo "
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function macro_select2_extrahead(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "select2_extrahead"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "select2_extrahead"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "select2_extrahead"));

            // line 2
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/select2.min.css"), "html", null, true);
            echo "\">
    <link rel=\"stylesheet\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/select2-bootstrap.min.css"), "html", null, true);
            echo "\">
    <script src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2.min.js"), "html", null, true);
            echo "\"></script>
    <script>
        \$(function () {
            \$.fn.select2.defaults.set(\"theme\", \"bootstrap\");

            \$('select[multiple]').select2();
        });
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_toggle_extrahead(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "toggle_extrahead"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "toggle_extrahead"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "toggle_extrahead"));

            // line 16
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-toggle.min.css"), "html", null, true);
            echo "\">
    <script src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-toggle.min.js"), "html", null, true);
            echo "\"></script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 21
    public function macro_toggle_autosubmit_extrafooter(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "toggle_autosubmit_extrafooter"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "toggle_autosubmit_extrafooter"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "toggle_autosubmit_extrafooter"));

            // line 22
            echo "    <script>
        \$(function() {
            \$('[data-toggle]').on('change', function() {
                var \$form = \$(this).closest('form');
                // We use a timeout of 300 ms here since the animation looks super
                // ugly if we do not do this.
                setTimeout(function() {
                    \$form.submit();
                }, 300);
            });
        });
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 36
    public function macro_coloris_extrahead(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "coloris_extrahead"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "coloris_extrahead"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "coloris_extrahead"));

            // line 37
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/coloris.min.css"), "html", null, true);
            echo "\">
    <script src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/coloris.min.js"), "html", null, true);
            echo "\"></script>

    <script>
        function bindColor() {
            Coloris({
                el: '[data-color-picker]',
                clearButton: {
                    show: true
                }
            });
        }

        \$(function() {
            bindColor();
        });
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 56
    public function macro_table_extrahead(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_extrahead"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_extrahead"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_extrahead"));

            // line 57
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dataTables.bootstrap4.min.css"), "html", null, true);
            echo "\">
    <script src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dataTables.bootstrap4.min.js"), "html", null, true);
            echo "\"></script>
    <style>
        .data-table td a:not(.showlink), .data-table td a:hover:not(.showlink) {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .data-table th {
            white-space: nowrap;
        }

        .data-table td {
            white-space: nowrap;
            padding-top: 1px;
            padding-bottom: 1px;
        }

        .dataTables_filter {
            text-align: inherit;
        }

        .table-wrapper {
            display: inline-block;
        }
    </style>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 88
    public function macro_table($__data__ = null, $__fields__ = null, $__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "fields" => $__fields__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table"));

            // line 89
            echo "
    <div class=\"table-wrapper\">
        <table class=\"data-table table table-sm table-striped\" style=\"width:auto\">
            <thead class=\"\">
            <tr>";
            // line 94
            $context["num_actions"] = $this->extensions['App\Twig\TwigExtension']->numTableActions((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 94, $this->source); })()));
            // line 95
            $context["default_sort"] = 0;
            // line 96
            $context["default_sort_order"] = "asc";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 97, $this->source); })()));
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
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 98
                if (((twig_get_attribute($this->env, $this->source, $context["column"], "default_sort", [], "any", true, true, false, 98)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["column"], "default_sort", [], "any", false, false, false, 98), false)) : (false))) {
                    // line 99
                    $context["default_sort"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 99);
                    // line 100
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "default_sort_order", [], "any", true, true, false, 100)) {
                        // line 101
                        $context["default_sort_order"] = twig_get_attribute($this->env, $this->source, $context["column"], "default_sort_order", [], "any", false, false, false, 101);
                    }
                }
                // line 104
                echo "
                    <th scope=\"col\" class=\"";
                // line 106
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "sort", [], "any", true, true, false, 106) && twig_get_attribute($this->env, $this->source, $context["column"], "sort", [], "any", false, false, false, 106))) {
                    echo "sortable";
                }
                // line 107
                if (( !twig_get_attribute($this->env, $this->source, $context["column"], "search", [], "any", true, true, false, 107) || twig_get_attribute($this->env, $this->source, $context["column"], "search", [], "any", false, false, false, 107))) {
                    echo " searchable";
                }
                echo "\">";
                // line 108
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 108), "html", null, true));
                // line 109
                echo "</th>";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            if (((isset($context["num_actions"]) || array_key_exists("num_actions", $context) ? $context["num_actions"] : (function () { throw new RuntimeError('Variable "num_actions" does not exist.', 111, $this->source); })()) > 0)) {
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["num_actions"]) || array_key_exists("num_actions", $context) ? $context["num_actions"] : (function () { throw new RuntimeError('Variable "num_actions" does not exist.', 112, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 113
                    echo "
                        <th scope=\"col\"></th>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 117
            echo "
            </tr>
            </thead>
            <tbody>";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 121, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 122
                echo "
                <tr class=\"";
                // line 123
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "cssclass", [], "any", true, true, false, 123)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], "cssclass", [], "any", false, false, false, 123), "")) : ("")), "html", null, true);
                echo "\"";
                // line 124
                if (twig_get_attribute($this->env, $this->source, $context["row"], "style", [], "any", true, true, false, 124)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "style", [], "any", false, false, false, 124), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 125, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                    // line 126
                    $context["item"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "data", [], "any", false, false, false, 126), $context["key"], [], "any", false, false, false, 126);
                    // line 127
                    echo "
                        <td
                           class=\"";
                    // line 129
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssclass", [], "any", true, true, false, 129)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssclass", [], "any", false, false, false, 129), "")) : ("")), "html", null, true);
                    if ((($context["key"] == "status") && !twig_in_filter("disabled", twig_get_attribute($this->env, $this->source, $context["row"], "cssclass", [], "any", false, false, false, 129)))) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->statusClass(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 129, $this->source); })()), "value", [], "any", false, false, false, 129)), "html", null, true);
                    }
                    echo "\"";
                    // line 130
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", true, true, false, 130)) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 130, $this->source); })()), "title", [], "any", false, false, false, 130), "html", null, true);
                        echo "\"";
                    }
                    // line 131
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "filterKey", [], "any", true, true, false, 131) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "filterValue", [], "any", true, true, false, 131))) {
                        echo " data-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 131, $this->source); })()), "filterKey", [], "any", false, false, false, 131), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 131, $this->source); })()), "filterValue", [], "any", false, false, false, 131), "html", null, true);
                        echo "\"";
                    }
                    // line 132
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "sortvalue", [], "any", true, true, false, 132)) {
                        echo " data-sort=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 132, $this->source); })()), "sortvalue", [], "any", false, false, false, 132), "html", null, true);
                        echo "\"";
                    }
                    // line 133
                    echo "                                ";
                    if ((((twig_get_attribute($this->env, $this->source, $context["column"], "render", [], "any", true, true, false, 133)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["column"], "render", [], "any", false, false, false, 133), "")) : ("")) == "entity_id_badge")) {
                        echo "style=\"text-align: right;\" ";
                    }
                    echo ">";
                    // line 134
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", true, true, false, 134)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 134, $this->source); })()), "link", [], "any", false, false, false, 134), "html", null, true);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "showlink", [], "any", true, true, false, 134)) {
                            echo " class=\"showlink\"";
                        }
                        echo ">";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 135
$context["row"], "link", [], "any", true, true, false, 135)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 135), "html", null, true);
                        echo "\">";
                    }
                    // line 136
                    echo "                            ";
                    if (($context["key"] == "status")) {
                        // line 137
                        echo $this->extensions['App\Twig\TwigExtension']->statusIcon(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", true, true, false, 137)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, false, false, 137), ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 137)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 137), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 137)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 137), "")) : ("")))));
                    } elseif ((                    // line 138
$context["key"] == "country")) {
                        // line 139
                        echo $this->extensions['App\Twig\TwigExtension']->countryFlag(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", true, true, false, 139)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, false, false, 139), ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 139)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 139), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 139)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 139), "")) : ("")))));
                    } elseif ((                    // line 140
$context["key"] == "affiliation_logo")) {
                        // line 141
                        echo $this->extensions['App\Twig\TwigExtension']->affiliationLogo(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", true, true, false, 141)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, false, false, 141), ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 141)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 141), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 141)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 141), "")) : ("")))), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 141, $this->source); })()), "title", [], "any", false, false, false, 141));
                    } elseif ((                    // line 142
$context["key"] == "warning_content")) {
                        // line 143
                        echo $this->extensions['App\Twig\TwigExtension']->printWarningContent(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 143, $this->source); })()), "value", [], "any", false, false, false, 143));
                    } elseif ((((twig_get_attribute($this->env, $this->source,                     // line 144
$context["column"], "render", [], "any", true, true, false, 144)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["column"], "render", [], "any", false, false, false, 144), "")) : ("")) == "entity_id_badge")) {
                        // line 145
                        echo "                            ";
                        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 145, $this->source); })()), "value", [], "any", false, false, false, 145)) {
                            echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 145, $this->source); })()), "value", [], "any", false, false, false, 145), ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "idPrefix", [], "any", true, true, false, 145)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "idPrefix", [], "any", false, false, false, 145), "")) : ("")));
                        }
                        // line 146
                        echo "                            ";
                    } else {
                        // line 147
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", true, true, false, 147)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, false, false, 147), ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 147)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 147), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 147)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 147), "")) : ("")))), "html", null, true);
                    }
                    // line 149
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", true, true, false, 149)) {
                        echo "<i class=\"fas fa-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 149, $this->source); })()), "icon", [], "any", false, false, false, 149), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 150
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", true, true, false, 150) || twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", true, true, false, 150))) {
                        echo "</a>";
                    }
                    // line 151
                    echo "                        </td>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "actions", [], "any", false, false, false, 153));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 154
                    echo "
                        <td>";
                    // line 156
                    if ($context["action"]) {
                        // line 157
                        echo "
                                <a ";
                        // line 158
                        if ((twig_get_attribute($this->env, $this->source, $context["action"], "disabled", [], "any", true, true, false, 158) && twig_get_attribute($this->env, $this->source, $context["action"], "disabled", [], "any", false, false, false, 158))) {
                            echo "class=\"disabled\"";
                        }
                        echo " ";
                        if (twig_get_attribute($this->env, $this->source, $context["action"], "link", [], "any", true, true, false, 158)) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "link", [], "any", false, false, false, 158), "html", null, true);
                            echo "\"";
                        }
                        echo " title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 158), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, $context["action"], "ajaxModal", [], "any", true, true, false, 158) && twig_get_attribute($this->env, $this->source, $context["action"], "ajaxModal", [], "any", false, false, false, 158))) {
                            echo "data-ajax-modal";
                        }
                        echo ">
                                    <i class=\"fas fa-";
                        // line 159
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 159), "html", null, true);
                        echo "\"></i>
                                </a>";
                    }
                    // line 162
                    echo "
                        </td>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "
            </tbody>
        </table>
    </div>
    <script>
        \$().ready(function () {
            \$('.data-table').DataTable({
                \"paging\": false,
                \"retrieve\": true,
                \"searching\": ";
            // line 177
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "searching", [], "any", true, true, false, 177)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "searching", [], "any", false, false, false, 177), "true")) : ("true")), "html", null, true);
            echo ",
                \"ordering\": ";
            // line 178
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ordering", [], "any", true, true, false, 178)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ordering", [], "any", false, false, false, 178), "true")) : ("true")), "html", null, true);
            echo ",
                \"order\": [[ ";
            // line 179
            echo twig_escape_filter($this->env, (isset($context["default_sort"]) || array_key_exists("default_sort", $context) ? $context["default_sort"] : (function () { throw new RuntimeError('Variable "default_sort" does not exist.', 179, $this->source); })()), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, (isset($context["default_sort_order"]) || array_key_exists("default_sort_order", $context) ? $context["default_sort_order"] : (function () { throw new RuntimeError('Variable "default_sort_order" does not exist.', 179, $this->source); })()), "html", null, true);
            echo "']],
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['sortable'], bSortable: true},
                    {aTargets: ['searchable'], bSearchable: true},
                    {aTargets: ['_all'], bSortable: false, bSearchable: false}
                ],
            });
        });
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 196
    public function macro_collection_scripts(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_scripts"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_scripts"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "collection_scripts"));

            // line 197
            echo "    <script>
        var \$collectionHolder;

        \$(function () {
            \$collectionHolder = \$('[data-collection-holder]');
            \$collectionHolder.data('index', \$collectionHolder.find('tr').length);
            \$('[data-add]').on('click', function () {
                addCollectionItem(\$collectionHolder);
            });

            \$('[data-delete]').on('click', function () {
                \$(this).closest('tr').remove();
            });

            function addCollectionItem(\$collectionHolder) {
                var prototype = \$('[data-prototype]').text();
                var index = \$collectionHolder.data('index');
                prototype = prototype.replace(/__name__/g, index);
                \$collectionHolder.data('index', index + 1);
                var \$prototype = \$(prototype);
                \$prototype.find('[data-delete]').on('click', function () {
                    \$(this).closest('tr').remove();
                });

                \$collectionHolder.append(\$prototype);

                if (\$collectionHolder.data('after-add')) {
                    window[\$collectionHolder.data('after-add')]();
                }
            }
        });
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 231
    public function macro_progress_bar($__message__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "message" => $__message__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress_bar"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress_bar"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress_bar"));

            // line 232
            echo "    <div class=\"alert alert-info\">
        ";
            // line 233
            if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 233, $this->source); })()))) {
                // line 234
                echo "            <p>";
                echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 234, $this->source); })()), "html", null, true);
                echo "</p>
        ";
            }
            // line 236
            echo "        <div class=\"progress mt-2 mb-2\">
            <div id=\"progress-bar-progress\"
                 class=\"progress-bar progress-bar-animated progress-bar-striped\" style=\"width: 0%;\">
                0%
            </div>
        </div>
        <div id=\"progress-bar-log\"></div>
        <div class=\"mt-4\" id=\"progress-bar-message\"></div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 247
    public function macro_progress_loader($__url__ = null, $__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress_loader"));

            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress_loader"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "progress_loader"));

            // line 248
            echo "    <script>
        \$(function () {
            var \$progress = \$('#progress-bar-progress');
            var \$log = \$('#progress-bar-log');
            var \$message = \$('#progress-bar-message');

            var currentData = '';

            var consume = function(responseReader) {
                return responseReader.read().then(function(result) {
                    if (result.done) { return; }

                    var chunk = new TextDecoder().decode(result.value);
                    currentData += chunk;

                    if (currentData[currentData.length - 1] === \"}\") {
                        // Make sure we start at the last {
                        var data = JSON.parse(currentData.substring(currentData.lastIndexOf('{')));
                        currentData = '';

                        \$progress
                            .attr('style', 'width: ' + data.progress + '%;')
                            .text(data.progress + '%');

                        if (data.progress == '100') {
                            \$progress
                                .removeClass('progress-bar-animated')
                                .removeClass('progress-bar-striped')
                                .addClass('bg-success');
                        }

                        if (data.message) {
                            \$message.html(data.message);
                            return;
                        }

                        if (data.redirect) {
                            window.location.replace(data.redirect);
                            return;
                        }

                        \$log.html(data.log);
                    }

                    return consume(responseReader);
                });
            };
            fetch('";
            // line 295
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 295, $this->source); })()), "html", null, true);
            echo "', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    ";
            // line 299
            if ((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 299, $this->source); })())) {
                echo "'Content-Type': 'application/x-www-form-urlencoded',";
            }
            // line 300
            echo "                },
                ";
            // line 301
            if ((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 301, $this->source); })())) {
                echo "body: '";
                echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 301, $this->source); })());
                echo "',";
            }
            // line 302
            echo "            }).then(function(response) {
                return consume(response.body.getReader());
            });
        });
    </script>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            
            $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "jury/jury_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  936 => 302,  930 => 301,  927 => 300,  923 => 299,  916 => 295,  867 => 248,  844 => 247,  817 => 236,  811 => 234,  809 => 233,  806 => 232,  784 => 231,  734 => 197,  713 => 196,  677 => 179,  673 => 178,  669 => 177,  658 => 168,  651 => 165,  644 => 162,  639 => 159,  621 => 158,  618 => 157,  616 => 156,  613 => 154,  609 => 153,  603 => 151,  599 => 150,  592 => 149,  589 => 147,  586 => 146,  581 => 145,  579 => 144,  577 => 143,  575 => 142,  573 => 141,  571 => 140,  569 => 139,  567 => 138,  565 => 137,  562 => 136,  556 => 135,  547 => 134,  541 => 133,  535 => 132,  527 => 131,  521 => 130,  514 => 129,  510 => 127,  508 => 126,  504 => 125,  497 => 124,  494 => 123,  491 => 122,  487 => 121,  482 => 117,  474 => 113,  470 => 112,  468 => 111,  454 => 109,  452 => 108,  447 => 107,  443 => 106,  440 => 104,  436 => 101,  434 => 100,  432 => 99,  430 => 98,  413 => 97,  411 => 96,  409 => 95,  407 => 94,  401 => 89,  377 => 88,  332 => 60,  328 => 59,  324 => 58,  321 => 57,  300 => 56,  265 => 38,  260 => 37,  239 => 36,  209 => 22,  188 => 21,  168 => 18,  164 => 17,  161 => 16,  140 => 15,  113 => 5,  109 => 4,  105 => 3,  102 => 2,  81 => 1,  67 => 246,  64 => 230,  61 => 195,  58 => 87,  55 => 55,  52 => 35,  49 => 20,  46 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro select2_extrahead() %}

    <link rel=\"stylesheet\" href=\"{{ asset('css/select2.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/select2-bootstrap.min.css') }}\">
    <script src=\"{{ asset('js/select2.min.js') }}\"></script>
    <script>
        \$(function () {
            \$.fn.select2.defaults.set(\"theme\", \"bootstrap\");

            \$('select[multiple]').select2();
        });
    </script>
{% endmacro %}

{% macro toggle_extrahead() %}

    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-toggle.min.css') }}\">
    <script src=\"{{ asset('js/bootstrap-toggle.min.js') }}\"></script>
{% endmacro %}

{% macro toggle_autosubmit_extrafooter() %}
    <script>
        \$(function() {
            \$('[data-toggle]').on('change', function() {
                var \$form = \$(this).closest('form');
                // We use a timeout of 300 ms here since the animation looks super
                // ugly if we do not do this.
                setTimeout(function() {
                    \$form.submit();
                }, 300);
            });
        });
    </script>
{% endmacro %}

{% macro coloris_extrahead() %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/coloris.min.css') }}\">
    <script src=\"{{ asset('js/coloris.min.js') }}\"></script>

    <script>
        function bindColor() {
            Coloris({
                el: '[data-color-picker]',
                clearButton: {
                    show: true
                }
            });
        }

        \$(function() {
            bindColor();
        });
    </script>
{% endmacro %}

{% macro table_extrahead() %}

    <link rel=\"stylesheet\" href=\"{{ asset('css/dataTables.bootstrap4.min.css') }}\">
    <script src=\"{{ asset('js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('js/dataTables.bootstrap4.min.js') }}\"></script>
    <style>
        .data-table td a:not(.showlink), .data-table td a:hover:not(.showlink) {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .data-table th {
            white-space: nowrap;
        }

        .data-table td {
            white-space: nowrap;
            padding-top: 1px;
            padding-bottom: 1px;
        }

        .dataTables_filter {
            text-align: inherit;
        }

        .table-wrapper {
            display: inline-block;
        }
    </style>
{% endmacro %}

{% macro table(data, fields, options) %}

    <div class=\"table-wrapper\">
        <table class=\"data-table table table-sm table-striped\" style=\"width:auto\">
            <thead class=\"\">
            <tr>
                {%- set num_actions = data | numTableActions %}
                {%- set default_sort = 0 %}
                {%- set default_sort_order = 'asc' %}
                {%- for key,column in fields %}
                    {%- if column.default_sort|default(false) %}
                        {%- set default_sort = loop.index0 %}
                        {%- if column.default_sort_order is defined %}
                            {%- set default_sort_order = column.default_sort_order %}
                        {%- endif %}
                    {%- endif %}

                    <th scope=\"col\" class=\"
                        {%- if column.sort is defined and column.sort %}sortable{%- endif %}
                        {%- if (column.search is not defined) or column.search %} searchable{%- endif %}\">
                        {{- column.title|nl2br -}}
                    </th>
                {%- endfor %}
                {%- if num_actions > 0 %}
                    {%- for i in 1..num_actions %}

                        <th scope=\"col\"></th>
                    {%- endfor %}
                {%- endif %}

            </tr>
            </thead>
            <tbody>
            {%- for row in data %}

                <tr class=\"{{ row.cssclass|default('') }}\"
                        {%- if row.style is defined %} style=\"{{ row.style }}\"{% endif %}>
                    {%- for key,column in fields %}
                        {%- set item = attribute(row.data, key) %}

                        <td
                           class=\"{{ item.cssclass|default('') }}{% if key == \"status\" and 'disabled' not in row.cssclass %} {{ item.value|statusClass() }}{% endif %}\"
                                {%- if item.title is defined %} title=\"{{ item.title }}\"{% endif %}
                                {%- if item.filterKey is defined and item.filterValue is defined %} data-{{ item.filterKey }}=\"{{ item.filterValue }}\"{% endif %}
                                {%- if item.sortvalue is defined %} data-sort=\"{{ item.sortvalue }}\"{% endif %}
                                {% if (column.render | default('')) == \"entity_id_badge\" %}style=\"text-align: right;\" {% endif %}>
                            {%- if item.link is defined %}<a href=\"{{ item.link }}\" {%- if item.showlink is defined %} class=\"showlink\"{% endif %}>
                            {%- elseif row.link is defined %}<a href=\"{{ row.link }}\">{% endif %}
                            {% if key == \"status\" %}
                            {{- (item.value|default(item.default|default('')))|statusIcon -}}
                            {% elseif key == \"country\" %}
                            {{- (item.value|default(item.default|default('')))|countryFlag -}}
                            {% elseif key == \"affiliation_logo\" %}
                            {{- (item.value|default(item.default|default('')))|affiliationLogo(item.title) -}}
                            {% elseif key == \"warning_content\" %}
                            {{- item.value|printWarningContent -}}
                            {% elseif (column.render | default('')) == \"entity_id_badge\" %}
                            {% if item.value %}{{- item.value|entityIdBadge(item.idPrefix|default('')) -}}{% endif %}
                            {% else %}
                            {{- (item.value|default(item.default|default(''))) -}}
                            {% endif %}
                            {% if item.icon is defined %}<i class=\"fas fa-{{ item.icon }}\"></i>{%- endif %}
                            {%- if item.link is defined or row.link is defined -%}</a>{% endif %}
                        </td>
                    {%- endfor %}
                    {%- for action in row.actions %}

                        <td>
                            {%- if action %}

                                <a {% if action.disabled is defined and action.disabled %}class=\"disabled\"{% endif %} {% if action.link is defined %}href=\"{{ action.link }}\"{% endif %} title=\"{{ action.title }}\" {% if action.ajaxModal is defined and action.ajaxModal %}data-ajax-modal{% endif %}>
                                    <i class=\"fas fa-{{ action.icon }}\"></i>
                                </a>
                            {%- endif %}

                        </td>
                    {%- endfor %}

                </tr>
            {%- endfor %}

            </tbody>
        </table>
    </div>
    <script>
        \$().ready(function () {
            \$('.data-table').DataTable({
                \"paging\": false,
                \"retrieve\": true,
                \"searching\": {{ options.searching | default('true') }},
                \"ordering\": {{ options.ordering | default('true') }},
                \"order\": [[ {{ default_sort }}, '{{ default_sort_order }}']],
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['sortable'], bSortable: true},
                    {aTargets: ['searchable'], bSearchable: true},
                    {aTargets: ['_all'], bSortable: false, bSearchable: false}
                ],
            });
        });
    </script>
{% endmacro %}

{% macro collection_scripts() %}
    <script>
        var \$collectionHolder;

        \$(function () {
            \$collectionHolder = \$('[data-collection-holder]');
            \$collectionHolder.data('index', \$collectionHolder.find('tr').length);
            \$('[data-add]').on('click', function () {
                addCollectionItem(\$collectionHolder);
            });

            \$('[data-delete]').on('click', function () {
                \$(this).closest('tr').remove();
            });

            function addCollectionItem(\$collectionHolder) {
                var prototype = \$('[data-prototype]').text();
                var index = \$collectionHolder.data('index');
                prototype = prototype.replace(/__name__/g, index);
                \$collectionHolder.data('index', index + 1);
                var \$prototype = \$(prototype);
                \$prototype.find('[data-delete]').on('click', function () {
                    \$(this).closest('tr').remove();
                });

                \$collectionHolder.append(\$prototype);

                if (\$collectionHolder.data('after-add')) {
                    window[\$collectionHolder.data('after-add')]();
                }
            }
        });
    </script>
{% endmacro %}

{% macro progress_bar(message = '') %}
    <div class=\"alert alert-info\">
        {% if message is not empty %}
            <p>{{ message }}</p>
        {% endif %}
        <div class=\"progress mt-2 mb-2\">
            <div id=\"progress-bar-progress\"
                 class=\"progress-bar progress-bar-animated progress-bar-striped\" style=\"width: 0%;\">
                0%
            </div>
        </div>
        <div id=\"progress-bar-log\"></div>
        <div class=\"mt-4\" id=\"progress-bar-message\"></div>
    </div>
{% endmacro %}

{% macro progress_loader(url, data = null) %}
    <script>
        \$(function () {
            var \$progress = \$('#progress-bar-progress');
            var \$log = \$('#progress-bar-log');
            var \$message = \$('#progress-bar-message');

            var currentData = '';

            var consume = function(responseReader) {
                return responseReader.read().then(function(result) {
                    if (result.done) { return; }

                    var chunk = new TextDecoder().decode(result.value);
                    currentData += chunk;

                    if (currentData[currentData.length - 1] === \"}\") {
                        // Make sure we start at the last {
                        var data = JSON.parse(currentData.substring(currentData.lastIndexOf('{')));
                        currentData = '';

                        \$progress
                            .attr('style', 'width: ' + data.progress + '%;')
                            .text(data.progress + '%');

                        if (data.progress == '100') {
                            \$progress
                                .removeClass('progress-bar-animated')
                                .removeClass('progress-bar-striped')
                                .addClass('bg-success');
                        }

                        if (data.message) {
                            \$message.html(data.message);
                            return;
                        }

                        if (data.redirect) {
                            window.location.replace(data.redirect);
                            return;
                        }

                        \$log.html(data.log);
                    }

                    return consume(responseReader);
                });
            };
            fetch('{{ url }}', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    {% if data %}'Content-Type': 'application/x-www-form-urlencoded',{% endif %}
                },
                {% if data %}body: '{{ data | raw }}',{% endif %}
            }).then(function(response) {
                return consume(response.body.getReader());
            });
        });
    </script>
{% endmacro %}
", "jury/jury_macros.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/jury_macros.twig");
    }
}
