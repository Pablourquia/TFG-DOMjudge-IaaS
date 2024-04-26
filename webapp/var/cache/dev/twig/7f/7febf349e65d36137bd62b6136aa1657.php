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

/* jury/clarification.html.twig */
class __TwigTemplate_12d8906a7aadb53c4b2c8166896d9f33 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/clarification.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/clarification.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/clarification.html.twig"));

        // line 3
        $context["origclar"] = twig_first($this->env, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 3, $this->source); })()));
        // line 4
        $context["claimed"] = ( !twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 4, $this->source); })()), "answered", [], "any", false, false, false, 4) && twig_get_attribute($this->env, $this->source, ($context["origclar"] ?? null), "from_jurymember", [], "any", true, true, false, 4));
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/clarification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Clarification ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 6, $this->source); })()), "clarid", [], "any", false, false, false, 6), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 8
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 9
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
<div class=\"container clarificationform\">
";
        // line 15
        if ((isset($context["claimed"]) || array_key_exists("claimed", $context) ? $context["claimed"] : (function () { throw new RuntimeError('Variable "claimed" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "<div class=\"alert alert-info\" role=\"alert\">
<i class=\"fas fa-user-lock\"></i> Claimed by <strong>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 17, $this->source); })()), "from_jurymember", [], "any", false, false, false, 17), "html", null, true);
            echo "</strong>
";
            // line 18
            if (twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 18, $this->source); })()), "jurymember_is_me", [], "any", false, false, false, 18)) {
                echo "(it's you!)";
            }
            // line 19
            echo "</div>
";
        }
        // line 21
        echo "

";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["clar"]) {
            // line 24
            echo "
<div class=\"card mb-3 ";
            // line 25
            if ( !twig_get_attribute($this->env, $this->source, $context["clar"], "from_team", [], "any", true, true, false, 25)) {
                echo "border-primary";
            }
            echo "\">
<div class=\"card-header\"><div class=\"row\">
<div class=\"col-sm\">
    Clarification ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 28), "html", null, true);
            echo "
    ";
            // line 29
            if ((isset($context["showExternalId"]) || array_key_exists("showExternalId", $context) ? $context["showExternalId"] : (function () { throw new RuntimeError('Variable "showExternalId" does not exist.', 29, $this->source); })())) {
                // line 30
                echo "        (external ID: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "externalid", [], "any", false, false, false, 30), "html", null, true);
                echo ")
    ";
            }
            // line 32
            echo "</div>
<div class=\"col-sm text-muted text-right\">";
            // line 33
            echo $this->extensions['App\Twig\TwigExtension']->printtimeHover(twig_get_attribute($this->env, $this->source, $context["clar"], "time", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, $context["clar"], "contest", [], "any", false, false, false, 33));
            echo "</div>
</div></div>
<div class=\"card-body\">
<div class=\"card-title\">
<div class=\"row\">
<div class=\"col-sm\">
From:
";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["clar"], "from_team", [], "any", true, true, false, 40)) {
                // line 41
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clar"], "from_team", [], "any", false, false, false, 41), "teamid", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "from_teamname", [], "any", false, false, false, 41), "html", null, true);
                echo " ";
                echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, $context["clar"], "from_team", [], "any", false, false, false, 41), "t");
                echo "</a>
";
            } else {
                // line 43
                echo "Jury
    ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["clar"], "from_jurymember", [], "any", true, true, false, 44)) {
                    // line 45
                    echo "        (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "from_jurymember", [], "any", false, false, false, 45), "html", null, true);
                    echo ")
    ";
                }
            }
            // line 48
            echo "</div>

<div class=\"col-sm\">
    Subject:
    <span class=\"clarification-subject\">
        ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, $context["clar"], "subjectlink", [], "any", true, true, false, 53)) {
                // line 54
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "subjectlink", [], "any", false, false, false, 54), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "subject", [], "any", false, false, false, 54), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 56
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "subject", [], "any", false, false, false, 56), "html", null, true);
                echo "
        ";
            }
            // line 58
            echo "        <button class=\"btn btn-sm btn-link clarification-subject-change-button\">
            <i class=\"far fa-edit\" title=\"Change subject\"></i>
        </button>
    </span>
<span class=\"clarification-subject-form\" data-current-selected-subject=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "categoryid", [], "any", false, false, false, 62), "html", null, true);
            echo "\" data-clarification-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
<form action=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_subject", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-inline\">
<select name=\"subject\" class=\"subject custom-select custom-select-sm\">
";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["clarform"]) || array_key_exists("clarform", $context) ? $context["clarform"] : (function () { throw new RuntimeError('Variable "clarform" does not exist.', 65, $this->source); })()), "subjects", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["contest"] => $context["subject"]) {
                // line 66
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, $context["contest"], "html", null, true);
                echo "\">
";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["subject"]);
                foreach ($context['_seq'] as $context["id"] => $context["descr"]) {
                    // line 68
                    echo "<option value=\"";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["clar"], "categoryid", [], "any", false, false, false, 68) == $context["id"])) {
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
                // line 70
                echo "</optgroup>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['contest'], $context['subject'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "</select>
<button type=\"button\" class=\"close clarification-subject-cancel-button ml-2\" aria-label=\"Cancel\">
  <span aria-hidden=\"true\">&times;</span>
</button>
</form>
</span>
</div>
</div>

<div class=\"row\">
<div class=\"col-sm\">To:
";
            // line 83
            if (twig_get_attribute($this->env, $this->source, $context["clar"], "to_team", [], "any", true, true, false, 83)) {
                // line 84
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clar"], "to_team", [], "any", false, false, false, 84), "teamid", [], "any", false, false, false, 84)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "to_teamname", [], "any", false, false, false, 84), "html", null, true);
                echo " ";
                echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, $context["clar"], "to_team", [], "any", false, false, false, 84), "t");
                echo "</a>
";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 85
$context["clar"], "from_team", [], "any", true, true, false, 85)) {
                // line 86
                echo "Jury
";
            } else {
                // line 88
                echo "<strong>All</strong>
";
            }
            // line 90
            echo "</div>

<div class=\"col-sm\">Queue: <span class=\"clarification-queue\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "queue", [], "any", false, false, false, 92), "html", null, true);
            echo "
<button class=\"btn btn-sm btn-link clarification-queue-change-button\"><i class=\"far fa-edit\" title=\"Change queue\"></i></button></span>
<span class=\"clarification-queue-form\" data-current-selected-queue=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "queueid", [], "any", false, false, false, 94), "html", null, true);
            echo "\" data-clarification-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 94), "html", null, true);
            echo "\">
<form action=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_change_queue", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clar"], "clarid", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-inline\">
<select name=\"queue\" class=\"queue custom-select custom-select-sm\">
<option value=\"unassigned\">Unassigned issues</option>
";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["clarform"]) || array_key_exists("clarform", $context) ? $context["clarform"] : (function () { throw new RuntimeError('Variable "clarform" does not exist.', 98, $this->source); })()), "queues", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["qid"] => $context["queue"]) {
                // line 99
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $context["qid"], "html", null, true);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["clar"], "queueid", [], "any", false, false, false, 99) == $context["qid"])) {
                    echo " selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["queue"], "html", null, true);
                echo "</option>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['qid'], $context['queue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "</select>
<button type=\"button\" class=\"close clarification-queue-cancel-button ml-2\" aria-label=\"Cancel\">
  <span aria-hidden=\"true\">&times;</span>
</button>
</form>
</span>

</div>

</div>
</div>

<div class=\"card-text\"><pre class=\"output-text bg-light p-3\">";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->wrapUnquoted(twig_get_attribute($this->env, $this->source, $context["clar"], "body", [], "any", false, false, false, 113), 78), "html", null, true);
            echo "</pre></div>

</div>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
<div class=\"knoppenbalk\">
<div class=\"row\">
<div class=\"col-sm\"><button class=\"btn btn-secondary btn-sm\" data-toggle=\"collapse\" data-target=\"#collapsereplyform\"
 aria-expanded=\"false\" aria-controls=\"collapsereplyform\"><i class=\"fa fa-reply\"></i> reply</button>
</div>

<div class=\"col-sm text-center\">
<form action=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_claim", ["clarId" => twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 127, $this->source); })()), "clarid", [], "any", false, false, false, 127)]), "html", null, true);
        echo "\" method=\"post\">

";
        // line 129
        if ((isset($context["claimed"]) || array_key_exists("claimed", $context) ? $context["claimed"] : (function () { throw new RuntimeError('Variable "claimed" does not exist.', 129, $this->source); })())) {
            // line 130
            if (twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 130, $this->source); })()), "jurymember_is_me", [], "any", false, false, false, 130)) {
                // line 131
                echo "<button class=\"btn btn-sm btn-outline-success\" name=\"claimed\" value=\"0\" type=\"submit\"><i class=\"fas fa-lock-open\"></i> unclaim</button>
";
            } else {
                // line 133
                echo "<button class=\"btn btn-sm btn-outline-success\" name=\"claimed\" value=\"1\" type=\"submit\"><i class=\"fas fa-user-secret\"></i> steal</button>
";
            }
        } else {
            // line 136
            echo "<button class=\"btn btn-sm btn-success\" name=\"claimed\" value=\"1\" type=\"submit\" ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 136, $this->source); })()), "answered", [], "any", false, false, false, 136)) {
                echo "disabled";
            }
            echo "><i class=\"fas fa-lock\"></i> claim</button>
";
        }
        // line 138
        echo "
</form>
</div>

<div class=\"col-sm text-right\">
<form action=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_set_answered", ["clarId" => twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 143, $this->source); })()), "clarid", [], "any", false, false, false, 143)]), "html", null, true);
        echo "\" method=\"post\">

";
        // line 145
        if (twig_get_attribute($this->env, $this->source, (isset($context["origclar"]) || array_key_exists("origclar", $context) ? $context["origclar"] : (function () { throw new RuntimeError('Variable "origclar" does not exist.', 145, $this->source); })()), "answered", [], "any", false, false, false, 145)) {
            // line 146
            echo "<button class=\"btn btn-sm btn-outline-warning\" name=\"answered\" value=\"0\" type=\"submit\"><i class=\"fas fa-times\"></i> set unanswered</button>
";
        } else {
            // line 148
            echo "<button class=\"btn btn-sm btn-warning\" name=\"answered\" value=\"1\" type=\"submit\"><i class=\"fas fa-check\"></i> set answered</button>
";
        }
        // line 150
        echo "</form>
</div>

</div>
</div>

</div>

<div class=\"mt-4 collapse container clarificationform\" id=\"collapsereplyform\"><div class=\"card\">
<div class=\"card-header\">Send clarification</div>
<div class=\"card-body\">";
        // line 161
        $this->loadTemplate("jury/partials/clarification_form.html.twig", "jury/clarification.html.twig", 161)->display($context);
        // line 162
        echo "</div>
</div></div>

<div class=\"mb-5\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 167
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrafooter"));

        // line 168
        echo "<script>
    \$(function() {
        \$(['subject', 'queue']).each(function(_, field) {
            \$('.clarification-' + field + '-change-button').on('click', function () {
                \$(this).closest('.clarification-' + field).hide();
                \$(this).closest('div').find('.clarification-' + field + '-form').show();
            });
            \$('.clarification-' + field + '-cancel-button').on('click', function () {
                \$(this).closest('.clarification-' + field + '-form').hide();
                \$(this).closest('div').find('.clarification-' + field).show();
            });
            \$('.clarification-' + field + '-form select').on('change', function () {
                var \$select = \$(this);
                var \$form = \$select.closest('.clarification-' + field + '-form');
                var clarId = \$form.data('clarification-id');
                var value = \$select.find(':selected').text();
                if (confirm('Are you sure you want to change the ' + field + ' of clarification ' + clarId + ' to \"' + value + '\"?')) {
                    \$form.find('form').submit();
                } else {
                    \$select.val(\$form.data('current-selected-' + field));
                }
            });
        });
        \$('#clar_answers').change(clarificationAppendAnswer);
     });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/clarification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 168,  495 => 167,  478 => 162,  476 => 161,  464 => 150,  460 => 148,  456 => 146,  454 => 145,  449 => 143,  442 => 138,  434 => 136,  429 => 133,  425 => 131,  423 => 130,  421 => 129,  416 => 127,  406 => 119,  394 => 113,  380 => 101,  365 => 99,  361 => 98,  355 => 95,  349 => 94,  344 => 92,  340 => 90,  336 => 88,  332 => 86,  330 => 85,  321 => 84,  319 => 83,  306 => 72,  299 => 70,  284 => 68,  280 => 67,  275 => 66,  271 => 65,  266 => 63,  260 => 62,  254 => 58,  248 => 56,  240 => 54,  238 => 53,  231 => 48,  224 => 45,  222 => 44,  219 => 43,  209 => 41,  207 => 40,  197 => 33,  194 => 32,  188 => 30,  186 => 29,  182 => 28,  174 => 25,  171 => 24,  167 => 23,  163 => 21,  159 => 19,  155 => 18,  151 => 17,  148 => 16,  146 => 15,  142 => 13,  129 => 12,  113 => 9,  100 => 8,  72 => 6,  58 => 1,  56 => 4,  54 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}

{% set origclar = list|first %}
{% set claimed = not origclar.answered and origclar.from_jurymember is defined %}

{% block title %}Clarification {{ origclar.clarid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
{% endblock %}

{% block content %}

<div class=\"container clarificationform\">
{% if claimed %}
<div class=\"alert alert-info\" role=\"alert\">
<i class=\"fas fa-user-lock\"></i> Claimed by <strong>{{ origclar.from_jurymember }}</strong>
{% if origclar.jurymember_is_me %}(it's you!){% endif %}
</div>
{% endif %}


{% for clar in list %}

<div class=\"card mb-3 {% if clar.from_team is not defined %}border-primary{% endif %}\">
<div class=\"card-header\"><div class=\"row\">
<div class=\"col-sm\">
    Clarification {{ clar.clarid }}
    {% if showExternalId %}
        (external ID: {{ clar.externalid }})
    {% endif %}
</div>
<div class=\"col-sm text-muted text-right\">{{ clar.time | printtimeHover(clar.contest) }}</div>
</div></div>
<div class=\"card-body\">
<div class=\"card-title\">
<div class=\"row\">
<div class=\"col-sm\">
From:
{% if clar.from_team is defined %}
<a href=\"{{ path('jury_team', {teamId: clar.from_team.teamid}) }}\">{{ clar.from_teamname }} {{ clar.from_team | entityIdBadge('t') }}</a>
{% else %}
Jury
    {% if clar.from_jurymember is defined %}
        ({{ clar.from_jurymember }})
    {% endif %}
{% endif %}
</div>

<div class=\"col-sm\">
    Subject:
    <span class=\"clarification-subject\">
        {% if clar.subjectlink is defined %}
            <a href=\"{{ clar.subjectlink }}\">{{ clar.subject }}</a>
        {% else %}
            {{ clar.subject }}
        {% endif %}
        <button class=\"btn btn-sm btn-link clarification-subject-change-button\">
            <i class=\"far fa-edit\" title=\"Change subject\"></i>
        </button>
    </span>
<span class=\"clarification-subject-form\" data-current-selected-subject=\"{{ clar.categoryid }}\" data-clarification-id=\"{{clar.clarid}}\">
<form action=\"{{ path('jury_clarification_change_subject', {'clarId': clar.clarid }) }}\" method=\"post\" class=\"form-inline\">
<select name=\"subject\" class=\"subject custom-select custom-select-sm\">
{% for contest,subject in clarform.subjects %}
<optgroup label=\"{{ contest }}\">
{% for id,descr in subject %}
<option value=\"{{id}}\"{% if clar.categoryid == id %} selected{% endif %}>{{descr}}</option>
{% endfor %}
</optgroup>
{% endfor %}
</select>
<button type=\"button\" class=\"close clarification-subject-cancel-button ml-2\" aria-label=\"Cancel\">
  <span aria-hidden=\"true\">&times;</span>
</button>
</form>
</span>
</div>
</div>

<div class=\"row\">
<div class=\"col-sm\">To:
{% if clar.to_team is defined %}
<a href=\"{{ path('jury_team', {teamId: clar.to_team.teamid}) }}\">{{ clar.to_teamname }} {{ clar.to_team | entityIdBadge('t') }}</a>
{% elseif clar.from_team is defined %}
Jury
{% else %}
<strong>All</strong>
{% endif %}
</div>

<div class=\"col-sm\">Queue: <span class=\"clarification-queue\">{{ clar.queue }}
<button class=\"btn btn-sm btn-link clarification-queue-change-button\"><i class=\"far fa-edit\" title=\"Change queue\"></i></button></span>
<span class=\"clarification-queue-form\" data-current-selected-queue=\"{{ clar.queueid }}\" data-clarification-id=\"{{clar.clarid}}\">
<form action=\"{{ path('jury_clarification_change_queue', {'clarId': clar.clarid }) }}\" method=\"post\" class=\"form-inline\">
<select name=\"queue\" class=\"queue custom-select custom-select-sm\">
<option value=\"unassigned\">Unassigned issues</option>
{% for qid,queue in clarform.queues %}
<option value=\"{{qid}}\"{% if clar.queueid == qid %} selected{% endif %}>{{queue}}</option>
{% endfor %}
</select>
<button type=\"button\" class=\"close clarification-queue-cancel-button ml-2\" aria-label=\"Cancel\">
  <span aria-hidden=\"true\">&times;</span>
</button>
</form>
</span>

</div>

</div>
</div>

<div class=\"card-text\"><pre class=\"output-text bg-light p-3\">{{ clar.body|wrapUnquoted(78) }}</pre></div>

</div>
</div>

{% endfor %}

<div class=\"knoppenbalk\">
<div class=\"row\">
<div class=\"col-sm\"><button class=\"btn btn-secondary btn-sm\" data-toggle=\"collapse\" data-target=\"#collapsereplyform\"
 aria-expanded=\"false\" aria-controls=\"collapsereplyform\"><i class=\"fa fa-reply\"></i> reply</button>
</div>

<div class=\"col-sm text-center\">
<form action=\"{{ path('jury_clarification_claim', {'clarId': origclar.clarid}) }}\" method=\"post\">

{% if claimed %}
{% if origclar.jurymember_is_me %}
<button class=\"btn btn-sm btn-outline-success\" name=\"claimed\" value=\"0\" type=\"submit\"><i class=\"fas fa-lock-open\"></i> unclaim</button>
{% else %}
<button class=\"btn btn-sm btn-outline-success\" name=\"claimed\" value=\"1\" type=\"submit\"><i class=\"fas fa-user-secret\"></i> steal</button>
{% endif %}
{% else %}
<button class=\"btn btn-sm btn-success\" name=\"claimed\" value=\"1\" type=\"submit\" {% if origclar.answered %}disabled{% endif %}><i class=\"fas fa-lock\"></i> claim</button>
{% endif %}

</form>
</div>

<div class=\"col-sm text-right\">
<form action=\"{{ path('jury_clarification_set_answered', {'clarId': origclar.clarid}) }}\" method=\"post\">

{% if origclar.answered %}
<button class=\"btn btn-sm btn-outline-warning\" name=\"answered\" value=\"0\" type=\"submit\"><i class=\"fas fa-times\"></i> set unanswered</button>
{% else %}
<button class=\"btn btn-sm btn-warning\" name=\"answered\" value=\"1\" type=\"submit\"><i class=\"fas fa-check\"></i> set answered</button>
{% endif %}
</form>
</div>

</div>
</div>

</div>

<div class=\"mt-4 collapse container clarificationform\" id=\"collapsereplyform\"><div class=\"card\">
<div class=\"card-header\">Send clarification</div>
<div class=\"card-body\">
{%- include 'jury/partials/clarification_form.html.twig' %}
</div>
</div></div>

<div class=\"mb-5\"></div>
{% endblock %}
{% block extrafooter %}
<script>
    \$(function() {
        \$(['subject', 'queue']).each(function(_, field) {
            \$('.clarification-' + field + '-change-button').on('click', function () {
                \$(this).closest('.clarification-' + field).hide();
                \$(this).closest('div').find('.clarification-' + field + '-form').show();
            });
            \$('.clarification-' + field + '-cancel-button').on('click', function () {
                \$(this).closest('.clarification-' + field + '-form').hide();
                \$(this).closest('div').find('.clarification-' + field).show();
            });
            \$('.clarification-' + field + '-form select').on('change', function () {
                var \$select = \$(this);
                var \$form = \$select.closest('.clarification-' + field + '-form');
                var clarId = \$form.data('clarification-id');
                var value = \$select.find(':selected').text();
                if (confirm('Are you sure you want to change the ' + field + ' of clarification ' + clarId + ' to \"' + value + '\"?')) {
                    \$form.find('form').submit();
                } else {
                    \$select.val(\$form.data('current-selected-' + field));
                }
            });
        });
        \$('#clar_answers').change(clarificationAppendAnswer);
     });
</script>
{% endblock %}
", "jury/clarification.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/clarification.html.twig");
    }
}
