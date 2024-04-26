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

/* jury/user.html.twig */
class __TwigTemplate_09cc5246ccd4f76fa2c856338a6fdea8 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/user.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/user.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/user.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/user.html.twig", 1);
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

        echo "User ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })()), "userid", [], "any", false, false, false, 4), "html", null, true);
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
    <h1>User ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "userid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>Login</th>
                    <td class=\"teamid\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35)) {
            // line 36
            echo "                            <a href=\"mailto:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 38
            echo "                            -
                        ";
        }
        // line 40
        echo "                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>
                        ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "password", [], "any", false, false, false, 45)) {
            // line 46
            echo "                            Set
                        ";
        } else {
            // line 48
            echo "                            Not set
                        ";
        }
        // line 50
        echo "                    </td>
                </tr>
                <tr>
                    <th>IP address</th>
                    <td>
                        ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "ipAddress", [], "any", false, false, false, 55)) {
            // line 56
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "ipAddress", [], "any", false, false, false, 56), "html", null, true);
            echo "
                        ";
        } else {
            // line 58
            echo "                            -
                        ";
        }
        // line 60
        echo "                    </td>
                </tr>
                <tr>
                    <th>Enabled</th>
                    <td>
                        ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "enabled", [], "any", false, false, false, 65)), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <th>Roles</th>
                    <td>
                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "userRoles", [], "any", false, false, false, 71));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 72
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 72), "html", null, true);
            echo "<br>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "                            No roles assigned
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </td>
                </tr>
                <tr>
                    <th>Team</th>
                    ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "team", [], "any", false, false, false, 80)) {
            // line 81
            echo "                        <td class=\"teamid\">
                            <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })()), "team", [], "any", false, false, false, 82), "teamid", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">
                                ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "team", [], "any", false, false, false, 83), "effectiveName", [], "any", false, false, false, 83), "html", null, true);
            echo " ";
            echo $this->extensions['App\Twig\TwigExtension']->entityIdBadge(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "team", [], "any", false, false, false, 83), "t");
            echo "
                            </a>
                        </td>
                    ";
        } else {
            // line 87
            echo "                        <td>-</td>
                    ";
        }
        // line 89
        echo "                </tr>
            </table>
        </div>

        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>First login</th>
                    <td>
                        ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "firstLogin", [], "any", false, false, false, 98)) {
            // line 99
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "firstLogin", [], "any", false, false, false, 99), "D d M Y H:i:s T"), "html", null, true);
            echo "
                        ";
        } else {
            // line 101
            echo "                            -
                        ";
        }
        // line 103
        echo "                    </td>
                </tr>
                <tr>
                    <th>Last login</th>
                    <td>
                        ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "lastLogin", [], "any", false, false, false, 108)) {
            // line 109
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 109, $this->source); })()), "lastLogin", [], "any", false, false, false, 109), "D d M Y H:i:s T"), "html", null, true);
            echo "
                        ";
        } else {
            // line 111
            echo "                            -
                        ";
        }
        // line 113
        echo "                    </td>
                </tr>
                <tr>
                    <th>Last API login</th>
                    <td>
                        ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "lastApiLogin", [], "any", false, false, false, 118)) {
            // line 119
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "lastApiLogin", [], "any", false, false, false, 119), "D d M Y H:i:s T"), "html", null, true);
            echo "
                        ";
        } else {
            // line 121
            echo "                            -
                        ";
        }
        // line 123
        echo "                    </td>
                </tr>
                <tr>
                    <th>Last IP</th>
                    <td>
                        ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "lastIpAddress", [], "any", false, false, false, 128)) {
            // line 129
            echo "                            ";
            echo $this->extensions['App\Twig\TwigExtension']->printHost(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "lastIpAddress", [], "any", false, false, false, 129), true);
            echo "
                        ";
        } else {
            // line 131
            echo "                            -
                        ";
        }
        // line 133
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"button-row\">";
        // line 140
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 141
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_edit", ["userId" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 141, $this->source); })()), "userid", [], "any", false, false, false, 141)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 142
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_user_delete", ["userId" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 142, $this->source); })()), "userid", [], "any", false, false, false, 142)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 144
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/user.html.twig", 144)->display(twig_array_merge($context, ["table" => "user", "id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 144, $this->source); })()), "userid", [], "any", false, false, false, 144), "buttonClass" => "btn-secondary"]));
        // line 145
        echo "    </div>

    <h2>Submissions for ";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 147, $this->source); })()), "name", [], "any", false, false, false, 147), "html", null, true);
        echo "</h2>

    <div data-ajax-refresh-target>";
        // line 150
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/user.html.twig", 150)->display(twig_array_merge($context, ["showTestcases" => false]));
        // line 151
        echo "    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "jury/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 151,  410 => 150,  405 => 147,  401 => 145,  398 => 144,  393 => 142,  389 => 141,  387 => 140,  379 => 133,  375 => 131,  369 => 129,  367 => 128,  360 => 123,  356 => 121,  350 => 119,  348 => 118,  341 => 113,  337 => 111,  331 => 109,  329 => 108,  322 => 103,  318 => 101,  312 => 99,  310 => 98,  299 => 89,  295 => 87,  286 => 83,  282 => 82,  279 => 81,  277 => 80,  271 => 76,  264 => 74,  256 => 72,  251 => 71,  242 => 65,  235 => 60,  231 => 58,  225 => 56,  223 => 55,  216 => 50,  212 => 48,  208 => 46,  206 => 45,  199 => 40,  195 => 38,  187 => 36,  185 => 35,  177 => 30,  173 => 28,  167 => 25,  163 => 23,  161 => 22,  156 => 20,  146 => 13,  143 => 12,  130 => 11,  115 => 8,  110 => 7,  97 => 6,  69 => 4,  55 => 1,  53 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}User {{ user.userid }} - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}

    <h1>User {{ user.name }}</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>{{ user.userid }}</td>
                </tr>
                {% if showExternalId(user) %}
                    <tr>
                        <th>External ID</th>
                        <td>{{ user.externalid }}</td>
                    </tr>
                {% endif %}
                <tr>
                    <th>Login</th>
                    <td class=\"teamid\">{{ user.username }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>
                        {% if user.email %}
                            <a href=\"mailto:{{ user.email }}\">{{ user.email }}</a>
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>
                        {% if user.password %}
                            Set
                        {% else %}
                            Not set
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>IP address</th>
                    <td>
                        {% if user.ipAddress %}
                            {{ user.ipAddress }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Enabled</th>
                    <td>
                        {{ user.enabled | printYesNo }}
                    </td>
                </tr>
                <tr>
                    <th>Roles</th>
                    <td>
                        {% for role in user.userRoles %}
                            {{ role.description }}<br>
                        {% else %}
                            No roles assigned
                        {% endfor %}
                    </td>
                </tr>
                <tr>
                    <th>Team</th>
                    {% if user.team %}
                        <td class=\"teamid\">
                            <a href=\"{{ path('jury_team', {'teamId': user.team.teamid}) }}\">
                                {{ user.team.effectiveName }} {{ user.team | entityIdBadge('t') }}
                            </a>
                        </td>
                    {% else %}
                        <td>-</td>
                    {% endif %}
                </tr>
            </table>
        </div>

        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>First login</th>
                    <td>
                        {% if user.firstLogin %}
                            {{ user.firstLogin | printtime('D d M Y H:i:s T') }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Last login</th>
                    <td>
                        {% if user.lastLogin %}
                            {{ user.lastLogin | printtime('D d M Y H:i:s T') }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Last API login</th>
                    <td>
                        {% if user.lastApiLogin %}
                            {{ user.lastApiLogin | printtime('D d M Y H:i:s T') }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <th>Last IP</th>
                    <td>
                        {% if user.lastIpAddress %}
                            {{ user.lastIpAddress | printHost(true) }}
                        {% else %}
                            -
                        {% endif %}
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class=\"button-row\">
        {%- if is_granted('ROLE_ADMIN') -%}
            {{ button(path('jury_user_edit', {'userId': user.userid}), 'Edit', 'primary', 'edit') }}
            {{ button(path('jury_user_delete', {'userId': user.userid}), 'Delete', 'danger', 'trash-alt', true) }}
        {% endif %}
        {% include 'jury/partials/rejudge_form.html.twig' with {table: 'user', id: user.userid, buttonClass: 'btn-secondary'} %}
    </div>

    <h2>Submissions for {{ user.name }}</h2>

    <div data-ajax-refresh-target>
        {%- include 'jury/partials/submission_list.html.twig' with {showTestcases: false} %}
    </div>

{% endblock %}
", "jury/user.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/user.html.twig");
    }
}
