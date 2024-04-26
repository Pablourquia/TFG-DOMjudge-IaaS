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

/* jury/clarifications.html.twig */
class __TwigTemplate_552ec9a6d5c787a27062b12ad50fc63f extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/clarifications.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/clarifications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/clarifications.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/clarifications.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/clarifications.html.twig", 1);
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

        echo "Clarifications - ";
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
    <style>
        .data-table td a, .data-table td a:hover {
            display: inline;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
    <h1>Clarifications</h1>";
        // line 20
        if (twig_test_empty((isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "
        <div class=\"alert alert-danger\">No active contests</div>";
        } else {
            // line 24
            echo "
        <div class=\"float-right\">
        <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_new");
            echo "\" class=\"btn btn-primary btn-sm\">
                <i class=\"fas fa-envelope\"></i> Send clarification
        </a>
        </div>

        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
            <div class=\"input-group-prepend\">
                <div class=\"input-group-text listtoggles\">Filter:</div>
            </div>
            <label class=\"btn btn-secondary ";
            // line 35
            if ((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 35, $this->source); })()))) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"all\"
                       ";
            // line 37
            if ((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 37, $this->source); })()))) {
                echo "checked";
            }
            echo "> All
            </label>
            <label class=\"btn btn-secondary ";
            // line 39
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 39, $this->source); })()) == "new")) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"new\"
                       ";
            // line 41
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 41, $this->source); })()) == "new")) {
                echo "checked";
            }
            echo "> New
            </label>
            <label class=\"btn btn-secondary ";
            // line 43
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 43, $this->source); })()) == "old")) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"old\"
                       ";
            // line 45
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 45, $this->source); })()) == "old")) {
                echo "checked";
            }
            echo "> Handled
            </label>
            <label class=\"btn btn-secondary ";
            // line 47
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 47, $this->source); })()) == "general")) {
                echo "active";
            }
            echo "\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"general\"
                       ";
            // line 49
            if (((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 49, $this->source); })()) == "general")) {
                echo "checked";
            }
            echo "> General
            </label>
        </div>

        ";
            // line 53
            if ((twig_length_filter($this->env, (isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 53, $this->source); })())) > 0)) {
                // line 54
                echo "            <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
                <div class=\"input-group-prepend\">
                    <div class=\"input-group-text listtoggles\">Queue:</div>
                </div>
                <label class=\"btn btn-secondary ";
                // line 58
                if ((null === (isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 58, $this->source); })()))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"all\"
                           ";
                // line 60
                if (((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 60, $this->source); })()) == "all")) {
                    echo "checked";
                }
                echo "> All
                </label>
                <label class=\"btn btn-secondary ";
                // line 62
                if (( !(null === (isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 62, $this->source); })())) && ((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 62, $this->source); })()) == ""))) {
                    echo "active";
                }
                echo "\">
                    <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"unassigned\"
                           ";
                // line 64
                if (((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 64, $this->source); })()) == "unassigned")) {
                    echo "checked";
                }
                echo "> Unassigned
                </label>";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 66, $this->source); })()));
                foreach ($context['_seq'] as $context["queue"] => $context["name"]) {
                    // line 67
                    echo "                    <label class=\"btn btn-secondary ";
                    if (((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 67, $this->source); })()) == $context["queue"])) {
                        echo "active";
                    }
                    echo "\">
                        <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $context["queue"], "html", null, true);
                    echo "\"
                               ";
                    // line 69
                    if (((isset($context["currentQueue"]) || array_key_exists("currentQueue", $context) ? $context["currentQueue"] : (function () { throw new RuntimeError('Variable "currentQueue" does not exist.', 69, $this->source); })()) == $context["queue"])) {
                        echo "checked";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "
                    </label>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['queue'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "            </div>
        ";
            }
            // line 74
            echo "
        ";
            // line 75
            if (((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 75, $this->source); })())) || ((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 75, $this->source); })()) == "new"))) {
                // line 76
                echo "            <h3 id=\"newrequests\">New requests</h3>";
                // line 77
                if ((twig_length_filter($this->env, (isset($context["newClarifications"]) || array_key_exists("newClarifications", $context) ? $context["newClarifications"] : (function () { throw new RuntimeError('Variable "newClarifications" does not exist.', 77, $this->source); })())) == 0)) {
                    // line 78
                    echo "                <p class=\"nodata\">No new clarification requests.</p>";
                } else {
                    // line 80
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 80)->display(twig_array_merge($context, ["clarifications" => (isset($context["newClarifications"]) || array_key_exists("newClarifications", $context) ? $context["newClarifications"] : (function () { throw new RuntimeError('Variable "newClarifications" does not exist.', 80, $this->source); })()), "direction" => "from"]));
                }
                // line 82
                echo "        ";
            }
            // line 83
            echo "
        ";
            // line 84
            if (((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 84, $this->source); })())) || ((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 84, $this->source); })()) == "handled"))) {
                // line 85
                echo "            <h3 id=\"oldrequests\" class=\"mt-4\">Handled requests</h3>";
                // line 86
                if ((twig_length_filter($this->env, (isset($context["oldClarifications"]) || array_key_exists("oldClarifications", $context) ? $context["oldClarifications"] : (function () { throw new RuntimeError('Variable "oldClarifications" does not exist.', 86, $this->source); })())) == 0)) {
                    // line 87
                    echo "                <p class=\"nodata\">No old clarification requests.</p>";
                } else {
                    // line 89
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 89)->display(twig_array_merge($context, ["clarifications" => (isset($context["oldClarifications"]) || array_key_exists("oldClarifications", $context) ? $context["oldClarifications"] : (function () { throw new RuntimeError('Variable "oldClarifications" does not exist.', 89, $this->source); })()), "direction" => "from"]));
                }
                // line 91
                echo "        ";
            }
            // line 92
            echo "
        ";
            // line 93
            if (((null === (isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 93, $this->source); })())) || ((isset($context["currentFilter"]) || array_key_exists("currentFilter", $context) ? $context["currentFilter"] : (function () { throw new RuntimeError('Variable "currentFilter" does not exist.', 93, $this->source); })()) == "general"))) {
                // line 94
                echo "            <h3 id=\"clarifications\" class=\"mt-4\">General clarifications</h3>";
                // line 95
                if ((twig_length_filter($this->env, (isset($context["generalClarifications"]) || array_key_exists("generalClarifications", $context) ? $context["generalClarifications"] : (function () { throw new RuntimeError('Variable "generalClarifications" does not exist.', 95, $this->source); })())) == 0)) {
                    // line 96
                    echo "                <p class=\"nodata\">No general clarifications.</p>";
                } else {
                    // line 98
                    $this->loadTemplate("jury/partials/clarification_list.html.twig", "jury/clarifications.html.twig", 98)->display(twig_array_merge($context, ["clarifications" => (isset($context["generalClarifications"]) || array_key_exists("generalClarifications", $context) ? $context["generalClarifications"] : (function () { throw new RuntimeError('Variable "generalClarifications" does not exist.', 98, $this->source); })()), "direction" => "to"]));
                }
                // line 100
                echo "        ";
            }
        }
        // line 102
        echo "
    <script>
        function doSwitch() {
            // Fallback the queue to all, since it might not be defined.
            window.location = '";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications", ["queue" => "REPLACE_QUEUE", "filter" => "REPLACE_FILTER"]), "html", null, true);
        echo "'
                .replace('REPLACE_QUEUE', \$('input[name=queue]:checked').val() || 'all')
                .replace('REPLACE_FILTER', \$('input[name=filter]:checked').val())
                .replace('&amp;', '&');
        }
        \$().ready(function () {
            var table = \$('.data-table').DataTable({
                \"paging\": false,
                \"ordering\": true,
                \"order\": [],
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['_all'], bSortable: true, bSearchable: true}
                ],
                // Left align the filter box. Modified from the Bootstrap 5 default at
                // https://datatables.net/reference/option/dom
                'dom': \"<'row'f>\" +
                       \"<'row'<'col-sm-12'tr>>\" +
                       \"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>\",
            });
            \$('.qbut').on('change', function () {
                var icon = \$(\"#qig\" + \$(this).attr('data-clarid') );
                icon.html('<i class=\"fas fa-spinner fa-spin\"></i>');
                var parenttd = \$(this).closest('td');
                var parenttr = \$(this).closest('tr');
                var newname = \$(this).closest('label').text().trim();
                \$.post(\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_queue", ["clarId" => 12345]);
        echo "\".replace('12345', \$(this).attr('data-clarid')),
                    {'queue': \$(this).val()})
                    .done(function( data ) {
                        if ( data ) {
                            parenttd.attr('data-search', newname);
                            table.rows(parenttr).invalidate();
                            icon.html('<i class=\"fas fa-check\"></i>');
                        } else {
                            icon.html('<i class=\"fas fa-times\"></i>');
                        }
                    });
            });

            \$('input[name=queue]').on('change', doSwitch);
            \$('input[name=filter]').on('change', doSwitch);
        });
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/clarifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 137,  356 => 106,  350 => 102,  346 => 100,  343 => 98,  340 => 96,  338 => 95,  336 => 94,  334 => 93,  331 => 92,  328 => 91,  325 => 89,  322 => 87,  320 => 86,  318 => 85,  316 => 84,  313 => 83,  310 => 82,  307 => 80,  304 => 78,  302 => 77,  300 => 76,  298 => 75,  295 => 74,  291 => 72,  279 => 69,  275 => 68,  268 => 67,  264 => 66,  258 => 64,  251 => 62,  244 => 60,  237 => 58,  231 => 54,  229 => 53,  220 => 49,  213 => 47,  206 => 45,  199 => 43,  192 => 41,  185 => 39,  178 => 37,  171 => 35,  159 => 26,  155 => 24,  151 => 21,  149 => 20,  146 => 17,  133 => 16,  113 => 8,  108 => 7,  95 => 6,  69 => 4,  55 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Clarifications - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
    <style>
        .data-table td a, .data-table td a:hover {
            display: inline;
        }
    </style>
{% endblock %}

{% block content %}

    <h1>Clarifications</h1>

    {%- if current_contests is empty %}

        <div class=\"alert alert-danger\">No active contests</div>
    {%- else %}

        <div class=\"float-right\">
        <a href=\"{{ path('jury_clarification_new') }}\" class=\"btn btn-primary btn-sm\">
                <i class=\"fas fa-envelope\"></i> Send clarification
        </a>
        </div>

        <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
            <div class=\"input-group-prepend\">
                <div class=\"input-group-text listtoggles\">Filter:</div>
            </div>
            <label class=\"btn btn-secondary {% if currentFilter is null %}active{% endif %}\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"all\"
                       {% if currentFilter is null %}checked{% endif %}> All
            </label>
            <label class=\"btn btn-secondary {% if currentFilter == 'new' %}active{% endif %}\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"new\"
                       {% if currentFilter == 'new' %}checked{% endif %}> New
            </label>
            <label class=\"btn btn-secondary {% if currentFilter == 'old' %}active{% endif %}\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"old\"
                       {% if currentFilter == 'old' %}checked{% endif %}> Handled
            </label>
            <label class=\"btn btn-secondary {% if currentFilter == 'general' %}active{% endif %}\">
                <input type=\"radio\" name=\"filter\" autocomplete=\"off\" value=\"general\"
                       {% if currentFilter == 'general' %}checked{% endif %}> General
            </label>
        </div>

        {% if queues | length > 0 %}
            <div class=\"btn-group btn-group-toggle btn-group-sm mb-3\" data-toggle=\"buttons\">
                <div class=\"input-group-prepend\">
                    <div class=\"input-group-text listtoggles\">Queue:</div>
                </div>
                <label class=\"btn btn-secondary {% if currentQueue is null %}active{% endif %}\">
                    <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"all\"
                           {% if currentQueue == \"all\" %}checked{% endif %}> All
                </label>
                <label class=\"btn btn-secondary {% if currentQueue is not null and currentQueue == '' %}active{% endif %}\">
                    <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"unassigned\"
                           {% if currentQueue == \"unassigned\" %}checked{% endif %}> Unassigned
                </label>
                {%- for queue, name in queues %}
                    <label class=\"btn btn-secondary {% if currentQueue == queue %}active{% endif %}\">
                        <input type=\"radio\" name=\"queue\" autocomplete=\"off\" value=\"{{ queue }}\"
                               {% if currentQueue == queue %}checked{% endif %}> {{ name }}
                    </label>
                {%- endfor %}
            </div>
        {% endif %}

        {% if currentFilter is null or currentFilter == 'new' %}
            <h3 id=\"newrequests\">New requests</h3>
            {%- if newClarifications | length == 0 %}
                <p class=\"nodata\">No new clarification requests.</p>
            {%- else %}
                {%- include 'jury/partials/clarification_list.html.twig' with {clarifications: newClarifications, direction: 'from'} %}
            {%- endif %}
        {% endif %}

        {% if currentFilter is null or currentFilter == 'handled' %}
            <h3 id=\"oldrequests\" class=\"mt-4\">Handled requests</h3>
            {%- if oldClarifications | length == 0 %}
                <p class=\"nodata\">No old clarification requests.</p>
            {%- else %}
                {%- include 'jury/partials/clarification_list.html.twig' with {clarifications: oldClarifications, direction: 'from'} %}
            {%- endif %}
        {% endif %}

        {% if currentFilter is null or currentFilter == 'general' %}
            <h3 id=\"clarifications\" class=\"mt-4\">General clarifications</h3>
            {%- if generalClarifications | length == 0 %}
                <p class=\"nodata\">No general clarifications.</p>
            {%- else %}
                {%- include 'jury/partials/clarification_list.html.twig' with {clarifications: generalClarifications, direction: 'to'} %}
            {%- endif %}
        {% endif %}
    {%- endif %}

    <script>
        function doSwitch() {
            // Fallback the queue to all, since it might not be defined.
            window.location = '{{ path('jury_clarifications', {'queue': 'REPLACE_QUEUE', 'filter': 'REPLACE_FILTER'}) }}'
                .replace('REPLACE_QUEUE', \$('input[name=queue]:checked').val() || 'all')
                .replace('REPLACE_FILTER', \$('input[name=filter]:checked').val())
                .replace('&amp;', '&');
        }
        \$().ready(function () {
            var table = \$('.data-table').DataTable({
                \"paging\": false,
                \"ordering\": true,
                \"order\": [],
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['_all'], bSortable: true, bSearchable: true}
                ],
                // Left align the filter box. Modified from the Bootstrap 5 default at
                // https://datatables.net/reference/option/dom
                'dom': \"<'row'f>\" +
                       \"<'row'<'col-sm-12'tr>>\" +
                       \"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>\",
            });
            \$('.qbut').on('change', function () {
                var icon = \$(\"#qig\" + \$(this).attr('data-clarid') );
                icon.html('<i class=\"fas fa-spinner fa-spin\"></i>');
                var parenttd = \$(this).closest('td');
                var parenttr = \$(this).closest('tr');
                var newname = \$(this).closest('label').text().trim();
                \$.post(\"{{ path('jury_clarification_change_queue', {'clarId': 12345}) }}\".replace('12345', \$(this).attr('data-clarid')),
                    {'queue': \$(this).val()})
                    .done(function( data ) {
                        if ( data ) {
                            parenttd.attr('data-search', newname);
                            table.rows(parenttr).invalidate();
                            icon.html('<i class=\"fas fa-check\"></i>');
                        } else {
                            icon.html('<i class=\"fas fa-times\"></i>');
                        }
                    });
            });

            \$('input[name=queue]').on('change', doSwitch);
            \$('input[name=filter]').on('change', doSwitch);
        });
    </script>

{% endblock %}
", "jury/clarifications.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/clarifications.html.twig");
    }
}
