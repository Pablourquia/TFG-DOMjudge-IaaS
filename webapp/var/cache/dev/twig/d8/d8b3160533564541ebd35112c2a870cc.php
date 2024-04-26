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

/* jury/partials/clarification_list.html.twig */
class __TwigTemplate_233b0895d0d032a23e62e40fca9f2d13 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/clarification_list.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/clarification_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/clarification_list.html.twig"));

        // line 1
        echo "<div class=\"table-wrapper\">
<table class=\"data-table table table-striped table-hover table-sm\" style=\"width:auto\">
    <thead>
    <tr>
        <th scope=\"col\">ID</th>
        ";
        // line 6
        if ((isset($context["showExternalId"]) || array_key_exists("showExternalId", $context) ? $context["showExternalId"] : (function () { throw new RuntimeError('Variable "showExternalId" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "            <th scope=\"col\">external ID</th>
        ";
        }
        // line 9
        if ((twig_length_filter($this->env, (isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 9, $this->source); })())) > 1)) {
            // line 10
            echo "            <th scope=\"col\">contest</th>";
        }
        // line 12
        echo "
        <th scope=\"col\">time</th>
        <th scope=\"col\" colspan=\"2\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</th>
        <th scope=\"col\">subject</th>

        <th scope=\"col\">text</th>
        <th scope=\"col\">state</th>
        <th scope=\"col\">who</th>
        ";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 20, $this->source); })())) > 1)) {
            // line 21
            echo "             <th scope=\"col\">queue</th>
        ";
        }
        // line 23
        echo "    </tr>
    </thead>
    <tbody>";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clarifications"]) || array_key_exists("clarifications", $context) ? $context["clarifications"] : (function () { throw new RuntimeError('Variable "clarifications" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["clarification"]) {
            // line 27
            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification", ["id" => twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 27)]);
            // line 28
            echo "
        <tr>
            <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 30), "html", null, true);
            echo "</a></td>
            ";
            // line 31
            if ((isset($context["showExternalId"]) || array_key_exists("showExternalId", $context) ? $context["showExternalId"] : (function () { throw new RuntimeError('Variable "showExternalId" does not exist.', 31, $this->source); })())) {
                // line 32
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 32, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "externalid", [], "any", false, false, false, 32), "html", null, true);
                echo "</a></td>
            ";
            }
            // line 34
            if ((twig_length_filter($this->env, (isset($context["current_contests"]) || array_key_exists("current_contests", $context) ? $context["current_contests"] : (function () { throw new RuntimeError('Variable "current_contests" does not exist.', 34, $this->source); })())) > 1)) {
                // line 35
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 35, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "contest", [], "any", false, false, false, 35), "shortname", [], "any", false, false, false, 35), "html", null, true);
                echo "</a></td>";
            }
            // line 37
            echo "
            <td data-order=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "submittime", [], "any", false, false, false, 38), "html", null, true);
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["clarification"], "submittime", [], "any", false, false, false, 38), null, twig_get_attribute($this->env, $this->source, $context["clarification"], "contest", [], "any", false, false, false, 38)), "html", null, true);
            echo "</a></td>";
            // line 39
            if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 39))) {
                // line 40
                $context["recipientBadge"] = "";
                // line 41
                if ((null === twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 41))) {
                    // line 42
                    $context["recipient"] = "All";
                } else {
                    // line 44
                    $context["recipient"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 44), "effectiveName", [], "any", false, false, false, 44);
                    // line 45
                    $context["recipientBadge"] = $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, $context["clarification"], "recipient", [], "any", false, false, false, 45), "t");
                }
                // line 47
                echo "                <td style=\"text-align: right;\">
                    <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 49
                echo (isset($context["recipientBadge"]) || array_key_exists("recipientBadge", $context) ? $context["recipientBadge"] : (function () { throw new RuntimeError('Variable "recipientBadge" does not exist.', 49, $this->source); })());
                echo "
                    </a>
                </td>
                <td>
                    <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 53, $this->source); })()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 53, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 54, $this->source); })())), "truncate", [0 => (isset($context["teamname_max_length"]) || array_key_exists("teamname_max_length", $context) ? $context["teamname_max_length"] : (function () { throw new RuntimeError('Variable "teamname_max_length" does not exist.', 54, $this->source); })()), 1 => "…"], "method", false, false, false, 54), "html", null, true);
                echo "
                    </a>
                </td>";
            } else {
                // line 58
                $context["sender"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 58), "effectiveName", [], "any", false, false, false, 58);
                // line 59
                $context["senderBadge"] = $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 59), "t");
                // line 60
                echo "                <td style=\"text-align: right;\">
                    <a href=\"";
                // line 61
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 61, $this->source); })()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["sender"]) || array_key_exists("sender", $context) ? $context["sender"] : (function () { throw new RuntimeError('Variable "sender" does not exist.', 61, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 62
                echo (isset($context["senderBadge"]) || array_key_exists("senderBadge", $context) ? $context["senderBadge"] : (function () { throw new RuntimeError('Variable "senderBadge" does not exist.', 62, $this->source); })());
                echo "
                    </a>
                </td>
                <td>
                    <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 66, $this->source); })()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["sender"]) || array_key_exists("sender", $context) ? $context["sender"] : (function () { throw new RuntimeError('Variable "sender" does not exist.', 66, $this->source); })()), "html", null, true);
                echo "\">
                        ";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString((isset($context["sender"]) || array_key_exists("sender", $context) ? $context["sender"] : (function () { throw new RuntimeError('Variable "sender" does not exist.', 67, $this->source); })())), "truncate", [0 => (isset($context["teamname_max_length"]) || array_key_exists("teamname_max_length", $context) ? $context["teamname_max_length"] : (function () { throw new RuntimeError('Variable "teamname_max_length" does not exist.', 67, $this->source); })()), 1 => "…"], "method", false, false, false, 67), "html", null, true);
                echo "
                    </a>
                </td>";
            }
            // line 71
            echo "
            <td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 72, $this->source); })()), "html", null, true);
            echo "\">";
            // line 73
            if (twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 73)) {
                // line 74
                echo "problem ";
                echo $this->extensions['App\Twig\TwigExtension']->problemBadge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["clarification"], "problem", [], "any", false, false, false, 74), "contestProblems", [], "any", false, false, false, 74), "first", [], "any", false, false, false, 74));
            } elseif (twig_get_attribute($this->env, $this->source,             // line 75
$context["clarification"], "category", [], "any", false, false, false, 75)) {
                // line 76
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 76), [], "array", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "category", [], "any", false, false, false, 76), [], "array", false, false, false, 76), "general")) : ("general")), "html", null, true);
            } else {
                // line 78
                echo "general";
            }
            // line 80
            echo "</a></td>

            <td><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 82, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "summary", [], "any", false, false, false, 82), "html", null, true);
            echo "</a></td>";
            // line 83
            $context["claim"] = false;
            // line 84
            if (twig_get_attribute($this->env, $this->source, $context["clarification"], "answered", [], "any", false, false, false, 84)) {
                // line 85
                $context["answered"] = "<i class=\"fas fa-check\" title=\"is answered\"></i>";
            } else {
                // line 87
                $context["answered"] = "<i class=\"fas fa-times\" title=\"not answered\"></i>";
                // line 88
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 88))) {
                    // line 89
                    $context["claim"] = "yes";
                } else {
                    // line 91
                    $context["answered"] = "<i class=\"fas fa-user-lock\" title=\"claimed\"></i>";
                }
            }
            // line 94
            echo "
            <td><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 95, $this->source); })()), "html", null, true);
            echo "\">";
            echo (isset($context["answered"]) || array_key_exists("answered", $context) ? $context["answered"] : (function () { throw new RuntimeError('Variable "answered" does not exist.', 95, $this->source); })());
            echo "</a></td>
            <td><form action=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarification_claim", ["clarId" => twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-inline\">";
            // line 97
            if (((isset($context["claim"]) || array_key_exists("claim", $context) ? $context["claim"] : (function () { throw new RuntimeError('Variable "claim" does not exist.', 97, $this->source); })()) && twig_get_attribute($this->env, $this->source, $context["clarification"], "sender", [], "any", false, false, false, 97))) {
                // line 98
                echo "<button name=\"claimed\" value=\"1\"
                       class=\"btn btn-outline-success btn-sm\">Claim</button>";
            } elseif (( !twig_get_attribute($this->env, $this->source,             // line 100
$context["clarification"], "answered", [], "any", false, false, false, 100) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "username", [], "any", false, false, false, 100) == twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 100)))) {
                // line 101
                echo "                    <button name=\"claimed\" value=\"0\"
                       class=\"btn btn-outline-success btn-sm\">Unclaim</button>";
            } else {
                // line 104
                echo "<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 104, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", true, true, false, 104)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["clarification"], "juryMember", [], "any", false, false, false, 104), "")) : ("")), "html", null, true);
                echo "</a>";
            }
            // line 106
            echo "</form>
            </td>
";
            // line 108
            if ((twig_length_filter($this->env, (isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 108, $this->source); })())) > 1)) {
                // line 109
                echo "            <td data-search=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["queues"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 109), [], "array", true, true, false, 109)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["queues"] ?? null), twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 109), [], "array", false, false, false, 109), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                 <div class=\"input-group-prepend\"><div class=\"input-group-text\" id=\"qig";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 111), "html", null, true);
                echo "\"><i class=\"fab fa-quora\"></i></div></div>
                 ";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["queues"]) || array_key_exists("queues", $context) ? $context["queues"] : (function () { throw new RuntimeError('Variable "queues" does not exist.', 112, $this->source); })()));
                foreach ($context['_seq'] as $context["qk"] => $context["qv"]) {
                    // line 113
                    echo "                 <label class=\"btn btn-sm btn-outline-secondary";
                    if (($context["qk"] == twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 113))) {
                        echo " active";
                    }
                    echo "\">
                 <input class=\"qbut\" type=\"radio\" name=\"queue[";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 114), "html", null, true);
                    echo "]\" data-clarid=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clarification"], "clarid", [], "any", false, false, false, 114), "html", null, true);
                    echo "\" id=\"q_";
                    echo twig_escape_filter($this->env, $context["qk"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["qk"], "html", null, true);
                    echo "\" autocomplete=\"off\"";
                    if (($context["qk"] == twig_get_attribute($this->env, $this->source, $context["clarification"], "queue", [], "any", false, false, false, 114))) {
                        echo " checked";
                    }
                    echo "> ";
                    echo twig_escape_filter($this->env, $context["qv"], "html", null, true);
                    echo "
                 </label>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['qk'], $context['qv'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "            </div>
            </td>
";
            }
            // line 120
            echo "        </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clarification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
    </tbody>
</table>
</div>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/clarification_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 122,  335 => 120,  330 => 117,  309 => 114,  302 => 113,  298 => 112,  294 => 111,  288 => 109,  286 => 108,  282 => 106,  275 => 104,  271 => 101,  269 => 100,  266 => 98,  264 => 97,  261 => 96,  255 => 95,  252 => 94,  248 => 91,  245 => 89,  243 => 88,  241 => 87,  238 => 85,  236 => 84,  234 => 83,  229 => 82,  225 => 80,  222 => 78,  219 => 76,  217 => 75,  214 => 74,  212 => 73,  209 => 72,  206 => 71,  200 => 67,  194 => 66,  187 => 62,  181 => 61,  178 => 60,  176 => 59,  174 => 58,  168 => 54,  162 => 53,  155 => 49,  149 => 48,  146 => 47,  143 => 45,  141 => 44,  138 => 42,  136 => 41,  134 => 40,  132 => 39,  125 => 38,  122 => 37,  115 => 35,  113 => 34,  105 => 32,  103 => 31,  97 => 30,  93 => 28,  91 => 27,  87 => 26,  83 => 23,  79 => 21,  77 => 20,  68 => 14,  64 => 12,  61 => 10,  59 => 9,  55 => 7,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-wrapper\">
<table class=\"data-table table table-striped table-hover table-sm\" style=\"width:auto\">
    <thead>
    <tr>
        <th scope=\"col\">ID</th>
        {% if showExternalId %}
            <th scope=\"col\">external ID</th>
        {% endif %}
        {%- if current_contests | length > 1 %}
            <th scope=\"col\">contest</th>
        {%- endif %}

        <th scope=\"col\">time</th>
        <th scope=\"col\" colspan=\"2\">{{ direction }}</th>
        <th scope=\"col\">subject</th>

        <th scope=\"col\">text</th>
        <th scope=\"col\">state</th>
        <th scope=\"col\">who</th>
        {% if queues | length > 1 %}
             <th scope=\"col\">queue</th>
        {% endif %}
    </tr>
    </thead>
    <tbody>
    {%- for clarification in clarifications %}
        {%- set link = path('jury_clarification', {id: clarification.clarid}) %}

        <tr>
            <td><a href=\"{{ link }}\">{{ clarification.clarid }}</a></td>
            {% if showExternalId %}
                <td><a href=\"{{ link }}\">{{ clarification.externalid }}</a></td>
            {% endif %}
            {%- if current_contests | length > 1 %}
                <td><a href=\"{{ link }}\">{{ clarification.contest.shortname }}</a></td>
            {%- endif %}

            <td data-order=\"{{ clarification.submittime }}\"><a href=\"{{ link }}\">{{ clarification.submittime | printtime(null, clarification.contest) }}</a></td>
            {%- if clarification.sender is null %}
                {%- set recipientBadge = '' %}
                {%- if clarification.recipient is null %}
                    {%- set recipient = 'All' %}
                {%- else %}
                    {%- set recipient = clarification.recipient.effectiveName %}
                    {%- set recipientBadge = clarification.recipient | entityIdBadge('t') %}
                {%- endif %}
                <td style=\"text-align: right;\">
                    <a href=\"{{ link }}\" title=\"{{ recipient }}\">
                        {{ recipientBadge | raw }}
                    </a>
                </td>
                <td>
                    <a href=\"{{ link }}\" title=\"{{ recipient }}\">
                        {{ recipient | u.truncate(teamname_max_length, '…') }}
                    </a>
                </td>
            {%- else %}
                {%- set sender = clarification.sender.effectiveName %}
                {%- set senderBadge = clarification.sender | entityIdBadge('t') %}
                <td style=\"text-align: right;\">
                    <a href=\"{{ link }}\" title=\"{{ sender }}\">
                        {{ senderBadge | raw }}
                    </a>
                </td>
                <td>
                    <a href=\"{{ link }}\" title=\"{{ sender }}\">
                        {{ sender | u.truncate(teamname_max_length, '…') }}
                    </a>
                </td>
            {%- endif %}

            <td><a href=\"{{ link }}\">
                    {%- if clarification.problem -%}
                        problem {{ clarification.problem.contestProblems.first | problemBadge -}}
                    {%- elseif clarification.category -%}
                        {{- categories[clarification.category]|default('general') -}}
                    {%- else -%}
                        general
                    {%- endif -%}
            </a></td>

            <td><a href=\"{{ link }}\">{{ clarification.summary }}</a></td>
            {%- set claim = false %}
            {%- if clarification.answered %}
                {%- set answered = '<i class=\"fas fa-check\" title=\"is answered\"></i>' %}
            {%- else %}
                {%- set answered = '<i class=\"fas fa-times\" title=\"not answered\"></i>' %}
                {%- if clarification.juryMember is empty %}
                    {%- set claim = 'yes' %}
                {%- else %}
                    {%- set answered = '<i class=\"fas fa-user-lock\" title=\"claimed\"></i>' %}
                {%- endif %}
            {%- endif %}

            <td><a href=\"{{ link }}\">{{ answered | raw }}</a></td>
            <td><form action=\"{{ path('jury_clarification_claim', {clarId: clarification.clarid}) }}\" method=\"post\" class=\"form-inline\">
                {%- if claim and clarification.sender -%}
                    <button name=\"claimed\" value=\"1\"
                       class=\"btn btn-outline-success btn-sm\">Claim</button>
                {%- elseif not clarification.answered and app.user.username == clarification.juryMember %}
                    <button name=\"claimed\" value=\"0\"
                       class=\"btn btn-outline-success btn-sm\">Unclaim</button>
                {%- else -%}
                    <a href=\"{{ link }}\">{{ clarification.juryMember | default('') }}</a>
                {%- endif -%}
\t\t</form>
            </td>
{% if queues | length > 1 %}
            <td data-search=\"{{ queues[clarification.queue]|default('') }}\">
            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                 <div class=\"input-group-prepend\"><div class=\"input-group-text\" id=\"qig{{clarification.clarid}}\"><i class=\"fab fa-quora\"></i></div></div>
                 {% for qk,qv in queues %}
                 <label class=\"btn btn-sm btn-outline-secondary{% if qk == clarification.queue %} active{% endif %}\">
                 <input class=\"qbut\" type=\"radio\" name=\"queue[{{ clarification.clarid }}]\" data-clarid=\"{{ clarification.clarid }}\" id=\"q_{{ qk }}\" value=\"{{ qk }}\" autocomplete=\"off\"{% if qk == clarification.queue %} checked{% endif %}> {{ qv }}
                 </label>
                 {% endfor %}
            </div>
            </td>
{% endif %}
        </tr>
    {%- endfor %}

    </tbody>
</table>
</div>
", "jury/partials/clarification_list.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/clarification_list.html.twig");
    }
}
