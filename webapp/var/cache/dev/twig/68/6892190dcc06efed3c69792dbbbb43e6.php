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

/* jury/partials/rejudge_form.html.twig */
class __TwigTemplate_2c1aec87143189593de7052e01a381c0 extends Template
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
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->enter($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudge_form.html.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudge_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudge_form.html.twig"));

        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    ";
        $context["buttonText"] = ((("Rejudge all for " . (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 4, $this->source); })())) . " ") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })()));
        // line 5
        echo "    ";
        $context["questionText"] = (("Rejudge all submissions for this " . (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })())) . "?");
        // line 6
        echo "    ";
        $context["buttonDisabled"] = false;
        // line 7
        echo "    ";
        $context["isRestart"] = false;
        // line 8
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "        ";
            $context["includeAllButton"] = true;
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["includeAllButton"] = false;
            // line 12
            echo "    ";
        }
        // line 13
        echo "    ";
        if ( !array_key_exists("buttonClass", $context)) {
            // line 14
            echo "        ";
            $context["buttonClass"] = "btn-outline-primary btn-sm";
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (((((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 17, $this->source); })()) == "submission") && array_key_exists("submission", $context)) && array_key_exists("judgings", $context))) {
            // line 18
            echo "        ";
            $context["buttonText"] = "Rejudge this submission";
            // line 19
            echo "        ";
            $context["questionText"] = (("Rejudge submission s" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })())) . "?");
            // line 20
            echo "        ";
            $context["includeAllButton"] = false;
            // line 21
            echo "        ";
            // line 22
            echo "        ";
            $context["validResult"] = false;
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 24
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "                ";
                    $context["validResult"] = twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 25);
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
        ";
            // line 29
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 30
                echo "            ";
                if ( !(isset($context["validResult"]) || array_key_exists("validResult", $context) ? $context["validResult"] : (function () { throw new RuntimeError('Variable "validResult" does not exist.', 30, $this->source); })())) {
                    // line 31
                    echo "                ";
                    $context["questionText"] = (("Restart judging of PENDING submission s" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })())) . ", are you sure?");
                    // line 32
                    echo "                ";
                    $context["buttonText"] = "Restart judging";
                    // line 33
                    echo "                ";
                    $context["isRestart"] = true;
                    // line 34
                    echo "            ";
                } elseif (((isset($context["validResult"]) || array_key_exists("validResult", $context) ? $context["validResult"] : (function () { throw new RuntimeError('Variable "validResult" does not exist.', 34, $this->source); })()) == "correct")) {
                    // line 35
                    echo "                ";
                    $context["questionText"] = (("Rejudge CORRECT submission s" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })())) . ", are you sure?");
                    // line 36
                    echo "            ";
                }
                // line 37
                echo "        ";
            } else {
                // line 38
                echo "            ";
                if (( !(isset($context["validResult"]) || array_key_exists("validResult", $context) ? $context["validResult"] : (function () { throw new RuntimeError('Variable "validResult" does not exist.', 38, $this->source); })()) || ((isset($context["validResult"]) || array_key_exists("validResult", $context) ? $context["validResult"] : (function () { throw new RuntimeError('Variable "validResult" does not exist.', 38, $this->source); })()) == "correct"))) {
                    // line 39
                    echo "                ";
                    $context["buttonDisabled"] = true;
                    // line 40
                    echo "            ";
                }
                // line 41
                echo "        ";
            }
            // line 42
            echo "    ";
        }
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_0_);
        // line 44
        echo "
<button type=\"button\" class=\"btn ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["buttonClass"]) || array_key_exists("buttonClass", $context) ? $context["buttonClass"] : (function () { throw new RuntimeError('Variable "buttonClass" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
    <i class=\"fas fa-sync\"></i> Rejudge
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["buttonText"]) || array_key_exists("buttonText", $context) ? $context["buttonText"] : (function () { throw new RuntimeError('Variable "buttonText" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_create_rejudge");
        echo "\" method=\"post\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"table\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "\"/>";
        // line 63
        if ((isset($context["includeAllButton"]) || array_key_exists("includeAllButton", $context) ? $context["includeAllButton"] : (function () { throw new RuntimeError('Variable "includeAllButton" does not exist.', 63, $this->source); })())) {
            // line 64
            echo "
                        <div class=\"custom-control custom-checkbox form-group\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"include_all\" name=\"include_all\">
                            <label class=\"custom-control-label\" for=\"include_all\">Include pending/correct
                                submissions</label>
                        </div>";
        }
        // line 71
        echo "
                    ";
        // line 72
        if ((isset($context["isRestart"]) || array_key_exists("isRestart", $context) ? $context["isRestart"] : (function () { throw new RuntimeError('Variable "isRestart" does not exist.', 72, $this->source); })())) {
            // line 73
            echo "                        <input type=\"hidden\" id=\"auto_apply\" name=\"auto_apply\" value=\"1\">
                        <input type=\"hidden\" name=\"repeat\" id=\"repeat\" value=\"1\">
                        <input type=\"hidden\" name=\"reason\" id=\"reason\" value=\"\">
                    ";
        } else {
            // line 77
            echo "                    <div class=\"custom-control custom-checkbox form-group\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"auto_apply\" name=\"auto_apply\">
                        <label class=\"custom-control-label\" for=\"auto_apply\">Automatically apply judging(s) when ready</label>
                    </div>
                    <div id=\"rejudge-repeat\" class=\"form-group\">
                        <label for=\"repeat\">Number of times to repeat this rejudging</label>
                        <input type=\"number\" class=\"form-control\" name=\"repeat\" id=\"repeat\" value=\"1\" min=\"1\" max=\"999\" step=\"1\">
                    </div>
                    <div id=\"rejudge-reason\" class=\"form-group\">
                        <label for=\"reason\">Reason</label>
                        <input type=\"text\" class=\"form-control\" name=\"reason\" id=\"reason\" maxlength=\"255\">
                    </div>
                    <div id=\"rejudge-priority\" class=\"form-group\">
                        <label for=\"priority\">Priority</label>
                        <select class=\"form-control\" name=\"priority\" id=\"priority\">
                            <option value=\"low\">low</option>
                            <option value=\"default\" selected>default</option>
                            <option value=\"high\">high</option>
                        </select>
                    </div>
                    ";
        }
        // line 98
        echo "                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <input type=\"submit\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["buttonText"]) || array_key_exists("buttonText", $context) ? $context["buttonText"] : (function () { throw new RuntimeError('Variable "buttonText" does not exist.', 101, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary\">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    \$(function () {
        \$('#full_rejudge').on('change', function () {
            if (\$(this).is(':checked')) {
                \$('#rejudge-reason').removeClass('d-none');
            } else {
                \$('#rejudge-reason').addClass('d-none');
            }
        });
    });
</script>
";
        
        $__internal_b91a4435ea3baf1e2b6bfda56133dace->leave($__internal_b91a4435ea3baf1e2b6bfda56133dace_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/rejudge_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 101,  252 => 98,  229 => 77,  223 => 73,  221 => 72,  218 => 71,  210 => 64,  208 => 63,  205 => 62,  201 => 61,  196 => 59,  188 => 54,  176 => 45,  173 => 44,  171 => 3,  167 => 42,  164 => 41,  161 => 40,  158 => 39,  155 => 38,  152 => 37,  149 => 36,  146 => 35,  143 => 34,  140 => 33,  137 => 32,  134 => 31,  131 => 30,  129 => 29,  126 => 28,  120 => 27,  117 => 26,  114 => 25,  111 => 24,  106 => 23,  103 => 22,  101 => 21,  98 => 20,  95 => 19,  92 => 18,  90 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  49 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Output a rejudge form #}

{% apply spaceless %}
    {% set buttonText = 'Rejudge all for ' ~ table ~ ' ' ~ id %}
    {% set questionText = 'Rejudge all submissions for this ' ~ table ~ '?' %}
    {% set buttonDisabled = false %}
    {% set isRestart = false %}
    {% if is_granted('ROLE_ADMIN') %}
        {% set includeAllButton = true %}
    {% else %}
        {% set includeAllButton = false %}
    {% endif %}
    {% if buttonClass is not defined %}
        {% set buttonClass = 'btn-outline-primary btn-sm' %}
    {% endif %}

    {% if table == 'submission' and submission is defined and judgings is defined %}
        {% set buttonText = 'Rejudge this submission' %}
        {% set questionText = 'Rejudge submission s' ~ id ~ '?' %}
        {% set includeAllButton = false %}
        {# Check if we have a valid result #}
        {% set validResult = false %}
        {% for judging in judgings %}
            {% if judging.valid %}
                {% set validResult = judging.result %}
            {% endif %}
        {% endfor %}

        {% if is_granted('ROLE_ADMIN') %}
            {% if not validResult %}
                {% set questionText = 'Restart judging of PENDING submission s' ~ id ~ ', are you sure?' %}
                {% set buttonText = 'Restart judging' %}
                {% set isRestart = true %}
            {% elseif validResult == 'correct' %}
                {% set questionText = 'Rejudge CORRECT submission s' ~ id ~ ', are you sure?' %}
            {% endif %}
        {% else %}
            {% if not validResult or validResult == 'correct' %}
                {% set buttonDisabled = true %}
            {% endif %}
        {% endif %}
    {% endif %}
{% endapply %}

<button type=\"button\" class=\"btn {{ buttonClass }}\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
    <i class=\"fas fa-sync\"></i> Rejudge
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ buttonText }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"{{ path('jury_create_rejudge') }}\" method=\"post\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"table\" value=\"{{ table }}\"/>
                    <input type=\"hidden\" name=\"id\" value=\"{{ id }}\"/>
                    {%- if includeAllButton %}

                        <div class=\"custom-control custom-checkbox form-group\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"include_all\" name=\"include_all\">
                            <label class=\"custom-control-label\" for=\"include_all\">Include pending/correct
                                submissions</label>
                        </div>
                    {%- endif %}

                    {% if isRestart %}
                        <input type=\"hidden\" id=\"auto_apply\" name=\"auto_apply\" value=\"1\">
                        <input type=\"hidden\" name=\"repeat\" id=\"repeat\" value=\"1\">
                        <input type=\"hidden\" name=\"reason\" id=\"reason\" value=\"\">
                    {% else %}
                    <div class=\"custom-control custom-checkbox form-group\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"auto_apply\" name=\"auto_apply\">
                        <label class=\"custom-control-label\" for=\"auto_apply\">Automatically apply judging(s) when ready</label>
                    </div>
                    <div id=\"rejudge-repeat\" class=\"form-group\">
                        <label for=\"repeat\">Number of times to repeat this rejudging</label>
                        <input type=\"number\" class=\"form-control\" name=\"repeat\" id=\"repeat\" value=\"1\" min=\"1\" max=\"999\" step=\"1\">
                    </div>
                    <div id=\"rejudge-reason\" class=\"form-group\">
                        <label for=\"reason\">Reason</label>
                        <input type=\"text\" class=\"form-control\" name=\"reason\" id=\"reason\" maxlength=\"255\">
                    </div>
                    <div id=\"rejudge-priority\" class=\"form-group\">
                        <label for=\"priority\">Priority</label>
                        <select class=\"form-control\" name=\"priority\" id=\"priority\">
                            <option value=\"low\">low</option>
                            <option value=\"default\" selected>default</option>
                            <option value=\"high\">high</option>
                        </select>
                    </div>
                    {% endif %}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <input type=\"submit\" value=\"{{ buttonText }}\" class=\"btn btn-primary\">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    \$(function () {
        \$('#full_rejudge').on('change', function () {
            if (\$(this).is(':checked')) {
                \$('#rejudge-reason').removeClass('d-none');
            } else {
                \$('#rejudge-reason').addClass('d-none');
            }
        });
    });
</script>
", "jury/partials/rejudge_form.html.twig", "/home/usuario/domjudge-8.2.3/webapp/templates/jury/partials/rejudge_form.html.twig");
    }
}
