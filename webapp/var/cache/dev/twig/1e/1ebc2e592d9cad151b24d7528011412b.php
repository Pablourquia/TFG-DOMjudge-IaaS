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

/* security/login.html.twig */
class __TwigTemplate_947c7e7abac7264cdc212b260a667754 extends Template
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
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "DOMjudge Login";
        
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style_login.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 9
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_b91a4435ea3baf1e2b6bfda56133dace = $this->extensions["Sentry\\SentryBundle\\Tracing\\Twig\\TwigTracingExtension"];
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    ";
        // line 12
        $context["hasaltmethods"] = ((twig_in_filter("xheaders",         // line 13
(isset($context["allowed_authmethods"]) || array_key_exists("allowed_authmethods", $context) ? $context["allowed_authmethods"] : (function () { throw new RuntimeError('Variable "allowed_authmethods" does not exist.', 13, $this->source); })())) && (isset($context["auth_xheaders_present"]) || array_key_exists("auth_xheaders_present", $context) ? $context["auth_xheaders_present"] : (function () { throw new RuntimeError('Variable "auth_xheaders_present" does not exist.', 13, $this->source); })())) || (twig_in_filter("ipaddress",         // line 14
(isset($context["allowed_authmethods"]) || array_key_exists("allowed_authmethods", $context) ? $context["allowed_authmethods"] : (function () { throw new RuntimeError('Variable "allowed_authmethods" does not exist.', 14, $this->source); })())) && (twig_length_filter($this->env, (isset($context["auth_ipaddress_users"]) || array_key_exists("auth_ipaddress_users", $context) ? $context["auth_ipaddress_users"] : (function () { throw new RuntimeError('Variable "auth_ipaddress_users" does not exist.', 14, $this->source); })())) > 0)));
        // line 15
        echo "    ";
        $context["showregular"] = ( !(isset($context["hasaltmethods"]) || array_key_exists("hasaltmethods", $context) ? $context["hasaltmethods"] : (function () { throw new RuntimeError('Variable "hasaltmethods" does not exist.', 15, $this->source); })()) || (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })()));
        // line 16
        echo "
    <div class=\"form-signin\" id=\"loginform\">
        <img class=\"mb-4\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DOMjudgelogo.svg"), "html", null, true);
        echo "\" alt=\"DOMjudge\" width=\"72\">
        ";
        // line 19
        $this->loadTemplate("partials/messages.html.twig", "security/login.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20))) {
            // line 21
            echo "            ";
            $context["message"] = (("You are currently automatically logged in as " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21)) . ".
Use the form below to change login.");
            // line 23
            echo "            ";
            $this->loadTemplate("partials/alert.html.twig", "security/login.html.twig", 23)->display(twig_array_merge($context, ["type" => "success"]));
            // line 24
            echo "        ";
        }
        // line 25
        echo "
        <br class=\"clearfix\">

        ";
        // line 28
        if ((isset($context["hasaltmethods"]) || array_key_exists("hasaltmethods", $context) ? $context["hasaltmethods"] : (function () { throw new RuntimeError('Variable "hasaltmethods" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "            <div class=\"additional-logins mr-2\">
                <a class=\"float-right text-muted\" href=\"#\" title=\"more auth methods\"
                   onclick=\"collapse('.regularLoginform'); return false;\" role=\"button\">
                    <i class=\"fas fa-user-ninja\"></i>
                </a>
                ";
            // line 34
            if ((twig_in_filter("xheaders", (isset($context["allowed_authmethods"]) || array_key_exists("allowed_authmethods", $context) ? $context["allowed_authmethods"] : (function () { throw new RuntimeError('Variable "allowed_authmethods" does not exist.', 34, $this->source); })())) && (isset($context["auth_xheaders_present"]) || array_key_exists("auth_xheaders_present", $context) ? $context["auth_xheaders_present"] : (function () { throw new RuntimeError('Variable "auth_xheaders_present" does not exist.', 34, $this->source); })()))) {
                // line 35
                echo "                    <h1 class=\"h3 mb-3 font-weight-normal\">Preconfigured Sign In</h1>
                    <form action=\"";
                // line 36
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
                echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
                echo "\">
                        <input type=\"hidden\" name=\"_username\" value=\"__INVALID__\">
                        <div class=\"login-content\">
                            <p>
                                You can log in using credentials that have been configured by your
                                administrator.
                            </p>
                        </div>
                        <button class=\"mt-auto btn btn-lg btn-success btn-block\" type=\"submit\"
                                name=\"loginmethod\" value=\"xheaders\">
                            Log in using computer credentials
                        </button>
                    </form>
                    <script>
                        \$(function () {
                            \$('button[name=loginmethod]').focus();
                        });
                    </script>
                ";
            }
            // line 57
            echo "
                ";
            // line 58
            if ((twig_in_filter("ipaddress", (isset($context["allowed_authmethods"]) || array_key_exists("allowed_authmethods", $context) ? $context["allowed_authmethods"] : (function () { throw new RuntimeError('Variable "allowed_authmethods" does not exist.', 58, $this->source); })())) && (twig_length_filter($this->env, (isset($context["auth_ipaddress_users"]) || array_key_exists("auth_ipaddress_users", $context) ? $context["auth_ipaddress_users"] : (function () { throw new RuntimeError('Variable "auth_ipaddress_users" does not exist.', 58, $this->source); })())) > 0))) {
                // line 59
                echo "                    <h1 class=\"h3 mb-3 font-weight-normal\">Sign in with IP</h1>
                    <form action=\"";
                // line 60
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
                echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
                echo "\">
                        <input type=\"hidden\" name=\"loginmethod\" value=\"ipaddress\">
                        <div class=\"login-content\">
                            <p>
                                You can log in automatically to an account based on your IP Address.
                                ";
                // line 67
                if (((isset($context["auth_ipaddress_users"]) || array_key_exists("auth_ipaddress_users", $context) ? $context["auth_ipaddress_users"] : (function () { throw new RuntimeError('Variable "auth_ipaddress_users" does not exist.', 67, $this->source); })()) == 1)) {
                    echo "The accounts associated with your IP are shown below.
                                ";
                } else {
                    // line 68
                    echo "The account associated with your IP is shown below.";
                }
                // line 69
                echo "                            </p>
                        </div>

                        ";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["auth_ipaddress_users"]) || array_key_exists("auth_ipaddress_users", $context) ? $context["auth_ipaddress_users"] : (function () { throw new RuntimeError('Variable "auth_ipaddress_users" does not exist.', 72, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                    // line 73
                    echo "                            <button class=\"btn btn-lg btn-success btn-block\" type=\"submit\"
                                    name=\"_username\" value=\"";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 74), "html", null, true);
                    echo "\">
                                Log in as ";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 75), "html", null, true);
                    echo "
                            </button>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                    </form>
                    <script>
                        \$(function () {
                            \$('button[name=_username]:first').focus();
                        });
                    </script>
                ";
            }
            // line 85
            echo "            </div>

            <div class=\"vertical-line regularLoginform";
            // line 87
            if ( !(isset($context["showregular"]) || array_key_exists("showregular", $context) ? $context["showregular"] : (function () { throw new RuntimeError('Variable "showregular" does not exist.', 87, $this->source); })())) {
                echo " d-none";
            }
            echo "\"></div>
        ";
        }
        // line 89
        echo "
        <div class=\"main-login ml-2 regularLoginform ";
        // line 90
        if ( !(isset($context["showregular"]) || array_key_exists("showregular", $context) ? $context["showregular"] : (function () { throw new RuntimeError('Variable "showregular" does not exist.', 90, $this->source); })())) {
            echo " d-none";
        }
        echo "\">
            <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
            <form action=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                <div class=\"login-content\">
                    ";
        // line 95
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 95, $this->source); })())) {
            // line 96
            echo "                        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 96, $this->source); })()), "messageKey", [], "any", false, false, false, 96), "html", null, true);
            echo "</div>
                    ";
        }
        // line 98
        echo "
                    <div class=\"form-group\">
                        <label for=\"username\" class=\"sr-only\">Username</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\"
                               placeholder=\"Username\" required autofocus>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                        <input type=\"password\" id=\"inputPassword\" name=\"_password\"
                               class=\"form-control\" spellcheck=\"false\"
                               placeholder=\"Password\" required autocomplete=\"current-password\">
                    </div>
                </div>
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
                ";
        // line 112
        if ((isset($context["allow_registration"]) || array_key_exists("allow_registration", $context) ? $context["allow_registration"] : (function () { throw new RuntimeError('Variable "allow_registration" does not exist.', 112, $this->source); })())) {
            // line 113
            echo "                    <div class=\"mt-3\">
                        Don't have an account?<br/>
                        <a href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Register now</a>.
                    </div>
                ";
        }
        // line 118
        echo "            </form>
        </div>

        <p class=\"mt-5 mb-3 small text-muted\" id=\"dj_version\">DOMjudge ";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["DOMJUDGE_VERSION"]) || array_key_exists("DOMJUDGE_VERSION", $context) ? $context["DOMJUDGE_VERSION"] : (function () { throw new RuntimeError('Variable "DOMJUDGE_VERSION" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "</p>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 121,  366 => 118,  360 => 115,  356 => 113,  354 => 112,  338 => 98,  332 => 96,  330 => 95,  325 => 93,  321 => 92,  314 => 90,  311 => 89,  304 => 87,  300 => 85,  291 => 78,  282 => 75,  278 => 74,  275 => 73,  271 => 72,  266 => 69,  263 => 68,  258 => 67,  250 => 62,  245 => 60,  242 => 59,  240 => 58,  237 => 57,  215 => 38,  210 => 36,  207 => 35,  205 => 34,  198 => 29,  196 => 28,  191 => 25,  188 => 24,  185 => 23,  181 => 21,  178 => 20,  176 => 19,  172 => 18,  168 => 16,  165 => 15,  163 => 14,  162 => 13,  161 => 12,  158 => 11,  145 => 10,  121 => 9,  105 => 6,  92 => 5,  67 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}DOMjudge Login{% endblock %}

{% block extrahead %}
    <link rel=\"stylesheet\" href=\"{{ asset('style_login.css') }}\">
{% endblock %}

{% block messages %}{% endblock %}
{% block body %}

    {% set hasaltmethods =
        (\"xheaders\" in allowed_authmethods and auth_xheaders_present) or
        (\"ipaddress\" in allowed_authmethods and auth_ipaddress_users|length > 0) %}
    {% set showregular = not hasaltmethods or error %}

    <div class=\"form-signin\" id=\"loginform\">
        <img class=\"mb-4\" src=\"{{ asset('images/DOMjudgelogo.svg') }}\" alt=\"DOMjudge\" width=\"72\">
        {% include 'partials/messages.html.twig' %}
        {% if app.user is not null %}
            {% set message = 'You are currently automatically logged in as ' ~ app.user.username ~ '.
Use the form below to change login.' %}
            {% include 'partials/alert.html.twig' with {type: 'success'} %}
        {% endif %}

        <br class=\"clearfix\">

        {% if hasaltmethods %}
            <div class=\"additional-logins mr-2\">
                <a class=\"float-right text-muted\" href=\"#\" title=\"more auth methods\"
                   onclick=\"collapse('.regularLoginform'); return false;\" role=\"button\">
                    <i class=\"fas fa-user-ninja\"></i>
                </a>
                {% if \"xheaders\" in allowed_authmethods and auth_xheaders_present %}
                    <h1 class=\"h3 mb-3 font-weight-normal\">Preconfigured Sign In</h1>
                    <form action=\"{{ path('login') }}\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"{{ csrf_token('authenticate') }}\">
                        <input type=\"hidden\" name=\"_username\" value=\"__INVALID__\">
                        <div class=\"login-content\">
                            <p>
                                You can log in using credentials that have been configured by your
                                administrator.
                            </p>
                        </div>
                        <button class=\"mt-auto btn btn-lg btn-success btn-block\" type=\"submit\"
                                name=\"loginmethod\" value=\"xheaders\">
                            Log in using computer credentials
                        </button>
                    </form>
                    <script>
                        \$(function () {
                            \$('button[name=loginmethod]').focus();
                        });
                    </script>
                {% endif %}

                {% if \"ipaddress\" in allowed_authmethods and auth_ipaddress_users|length > 0 %}
                    <h1 class=\"h3 mb-3 font-weight-normal\">Sign in with IP</h1>
                    <form action=\"{{ path('login') }}\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\"
                               value=\"{{ csrf_token('authenticate') }}\">
                        <input type=\"hidden\" name=\"loginmethod\" value=\"ipaddress\">
                        <div class=\"login-content\">
                            <p>
                                You can log in automatically to an account based on your IP Address.
                                {% if auth_ipaddress_users == 1 %}The accounts associated with your IP are shown below.
                                {% else %}The account associated with your IP is shown below.{% endif %}
                            </p>
                        </div>

                        {% for u in auth_ipaddress_users %}
                            <button class=\"btn btn-lg btn-success btn-block\" type=\"submit\"
                                    name=\"_username\" value=\"{{ u.username }}\">
                                Log in as {{ u.username }}
                            </button>
                        {% endfor %}
                    </form>
                    <script>
                        \$(function () {
                            \$('button[name=_username]:first').focus();
                        });
                    </script>
                {% endif %}
            </div>

            <div class=\"vertical-line regularLoginform{% if not showregular %} d-none{% endif %}\"></div>
        {% endif %}

        <div class=\"main-login ml-2 regularLoginform {% if not showregular %} d-none{% endif %}\">
            <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
            <form action=\"{{ path('login') }}\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                <div class=\"login-content\">
                    {% if error %}
                        <div class=\"alert alert-danger\">{{ error.messageKey }}</div>
                    {% endif %}

                    <div class=\"form-group\">
                        <label for=\"username\" class=\"sr-only\">Username</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\"
                               placeholder=\"Username\" required autofocus>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                        <input type=\"password\" id=\"inputPassword\" name=\"_password\"
                               class=\"form-control\" spellcheck=\"false\"
                               placeholder=\"Password\" required autocomplete=\"current-password\">
                    </div>
                </div>
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
                {% if allow_registration %}
                    <div class=\"mt-3\">
                        Don't have an account?<br/>
                        <a href=\"{{ path('register') }}\">Register now</a>.
                    </div>
                {% endif %}
            </form>
        </div>

        <p class=\"mt-5 mb-3 small text-muted\" id=\"dj_version\">DOMjudge {{ DOMJUDGE_VERSION }}</p>
    </div>

{% endblock %}
", "security/login.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/security/login.html.twig");
    }
}
