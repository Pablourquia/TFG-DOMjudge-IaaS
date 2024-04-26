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

/* partials/menu_login_logout_button.html.twig */
class __TwigTemplate_c7b6a7903cadab5f3a2403f6fcd0d4a9 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu_login_logout_button.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu_login_logout_button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/menu_login_logout_button.html.twig"));

        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 2
            echo "    <a class=\"btn btn-info btn-sm justify-content-center\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"
    ";
            // line 3
            if (array_key_exists("confirmLogout", $context)) {
                // line 4
                echo "        onclick=\"return confirmLogout();\"
    ";
            }
            // line 5
            echo ">
        <i class=\"fas fa-sign-out-alt\"></i> Logout
    </a>
";
        } else {
            // line 9
            echo "    <a class=\"btn btn-info btn-sm justify-content-center\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
        <i class=\"fas fa-sign-in-alt\"></i> Login
    </a>
";
        }
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/menu_login_logout_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 9,  59 => 5,  55 => 4,  53 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    <a class=\"btn btn-info btn-sm justify-content-center\" href=\"{{ path('logout') }}\"
    {% if confirmLogout is defined %}
        onclick=\"return confirmLogout();\"
    {% endif %}>
        <i class=\"fas fa-sign-out-alt\"></i> Logout
    </a>
{% else %}
    <a class=\"btn btn-info btn-sm justify-content-center\" href=\"{{ path('login') }}\">
        <i class=\"fas fa-sign-in-alt\"></i> Login
    </a>
{% endif %}
", "partials/menu_login_logout_button.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/partials/menu_login_logout_button.html.twig");
    }
}
