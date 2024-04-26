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

/* team/submit_modal.html.twig */
class __TwigTemplate_b8bf5b53a29e1891e328a87010553c86 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/submit_modal.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/submit_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/submit_modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    Submit ";
        // line 6
        if ( !(null === (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 6, $this->source); })()))) {
            echo "problem ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        }
        // line 7
        echo "                </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            ";
        // line 12
        if ((twig_test_empty((isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 12, $this->source); })())) || ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 12, $this->source); })()), "freezeData", [], "any", false, false, false, 12), "started", [], "any", false, false, false, 12)))) {
            // line 13
            echo "                <div class=\"modal-body\">
                    <div class=\"alert alert-danger\" role=\"alert\">Contest has not yet started - cannot submit.</div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                </div>
            ";
        } elseif ( !twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 19, $this->source); })()), "allowSubmit", [], "any", false, false, false, 19)) {
            // line 20
            echo "                <div class=\"modal-body\">
                    ";
            // line 21
            $this->loadTemplate("partials/alert.html.twig", "team/submit_modal.html.twig", 21)->display(twig_array_merge($context, ["type" => "danger", "message" => "Submissions (temporarily) disabled."]));
            // line 22
            echo "                </div>
            ";
        } else {
            // line 24
            echo "                ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
            echo "
                <div class=\"modal-body\">
                    ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "code", [], "any", false, false, false, 26), 'row');
            echo "
                    <div class=\"alert alert-warning\" id=\"files_not_modified\" style=\"display:none;\"></div>
                    ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "problem", [], "any", false, false, false, 28), 'row');
            echo "
                    ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "language", [], "any", false, false, false, 29), 'row');
            echo "
                    <div class=\"form-group\" data-entry-point>
                        ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "entry_point", [], "any", false, false, false, 31), 'label');
            echo "
                        ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "entry_point", [], "any", false, false, false, 32), 'widget');
            echo "
                        ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "entry_point", [], "any", false, false, false, 33), 'help');
            echo "
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn-success btn\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </div>
                ";
            // line 42
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
            echo "
            ";
        }
        // line 44
        echo "        </div>
    </div>

    <script>
        const fileInput = document.getElementById('submit_problem_code');
        fileInput.addEventListener('change', (event) => {
            const five_minutes_in_ms = 5 * 60 * 1000;
            const now = Date.now();
            const filesNotModified = document.getElementById('files_not_modified');
            filesNotModified.style.display = 'none';

            var atLeastOneFileRecent = false;
            var fileInfoHtml = '';
            const files = event.target.files;
            for (let file of files) {
                const date = new Date(file.lastModified);
                const ago = humanReadableTimeDiff((now - date)/1000) + ' ago';
                if (date > now - five_minutes_in_ms) {
                    atLeastOneFileRecent = true;
                }
                size = humanReadableBytes(file.size);
                fileInfoHtml += `<li><span class=\"filename\">\${file.name}</span>, \${size}, last modified \${ago}</li>`;
            }
            if (!atLeastOneFileRecent) {
                filesNotModified.style.display = 'block';
                filesNotModified.innerHTML =
                    'None of the selected files has been recently modified:' +
                    '<ul>' + fileInfoHtml + '</ul>';
            }
        });
    </script>
</div>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "team/submit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  126 => 42,  114 => 33,  110 => 32,  106 => 31,  101 => 29,  97 => 28,  92 => 26,  86 => 24,  82 => 22,  80 => 21,  77 => 20,  75 => 19,  67 => 13,  65 => 12,  58 => 7,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    Submit {% if problem is not null %}problem {{ problem.name }}{% endif %}
                </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            {% if current_team_contest is empty or (not is_granted('ROLE_JURY') and not current_team_contest.freezeData.started) %}
                <div class=\"modal-body\">
                    <div class=\"alert alert-danger\" role=\"alert\">Contest has not yet started - cannot submit.</div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                </div>
            {% elseif not current_team_contest.allowSubmit %}
                <div class=\"modal-body\">
                    {% include 'partials/alert.html.twig' with {'type': 'danger', 'message': 'Submissions (temporarily) disabled.'} %}
                </div>
            {% else %}
                {{ form_start(form) }}
                <div class=\"modal-body\">
                    {{ form_row(form.code) }}
                    <div class=\"alert alert-warning\" id=\"files_not_modified\" style=\"display:none;\"></div>
                    {{ form_row(form.problem) }}
                    {{ form_row(form.language) }}
                    <div class=\"form-group\" data-entry-point>
                        {{ form_label(form.entry_point) }}
                        {{ form_widget(form.entry_point) }}
                        {{ form_help(form.entry_point) }}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn-success btn\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </div>
                {{ form_end(form) }}
            {% endif %}
        </div>
    </div>

    <script>
        const fileInput = document.getElementById('submit_problem_code');
        fileInput.addEventListener('change', (event) => {
            const five_minutes_in_ms = 5 * 60 * 1000;
            const now = Date.now();
            const filesNotModified = document.getElementById('files_not_modified');
            filesNotModified.style.display = 'none';

            var atLeastOneFileRecent = false;
            var fileInfoHtml = '';
            const files = event.target.files;
            for (let file of files) {
                const date = new Date(file.lastModified);
                const ago = humanReadableTimeDiff((now - date)/1000) + ' ago';
                if (date > now - five_minutes_in_ms) {
                    atLeastOneFileRecent = true;
                }
                size = humanReadableBytes(file.size);
                fileInfoHtml += `<li><span class=\"filename\">\${file.name}</span>, \${size}, last modified \${ago}</li>`;
            }
            if (!atLeastOneFileRecent) {
                filesNotModified.style.display = 'block';
                filesNotModified.innerHTML =
                    'None of the selected files has been recently modified:' +
                    '<ul>' + fileInfoHtml + '</ul>';
            }
        });
    </script>
</div>
", "team/submit_modal.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/team/submit_modal.html.twig");
    }
}
