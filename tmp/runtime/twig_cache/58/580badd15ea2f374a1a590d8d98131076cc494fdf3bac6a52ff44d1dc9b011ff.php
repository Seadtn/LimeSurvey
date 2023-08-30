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

/* __string_template__8827ad693bc9e9d9bbba868a4ab7d3bf184a668f2cab47f4ad0b506457f800d9 */
class __TwigTemplate_cb3b0b2c56408d70c2df7920ff7e58a0a65d297072b462819368d5184b784ec7 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Survey's texts -->
<div class=\"card card-primary h-100\">
    <!-- Default panel contents -->
    <div class=\"card-header\">
        <h5 class=\"card-title\">";
        // line 5
        echo gT("Text elements");
        echo "</h5>
        <a class=\"float-end btn btn-outline-secondary btn-xs pjax\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo gT("Survey text elements");
        echo "\" href=\"";
        echo LS_Twig_Extension::createUrl("surveyAdministration/rendersidemenulink", ["subaction" => "surveytexts", "surveyid" => ($context["surveyid"] ?? null)]);
        echo "\">
          <i class=\"ri-tools-line\"></i>
        </a>
    </div>
    <!-- List group -->
    <ul class=\"list-group list-group-flush\">
            <!-- Description -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4 card-label\">
                    ";
        // line 16
        echo gT("Description:");
        echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                        ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_description", [], "any", false, false, true, 19) != "")) {
            // line 20
            echo "                            <span id=\"description\" class=\"line-clamp-3\">
                                ";
            // line 21
            echo LS_Twig_Extension::getExpressionManagerOutput($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_description", [], "any", false, false, true, 21), 21, $this->source));
            echo "
                            </span>
                            ";
            // line 23
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_description", [], "any", false, false, true, 23)) > 50)) {
                // line 24
                echo "                                ";
                echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_description", [], "any", false, false, true, 24), 24, $this->source), "description_text");
                echo "
                            ";
            }
            // line 26
            echo "                        ";
        }
        // line 27
        echo "
                </div>
            </div>
        </li>
        <!-- Welcome -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4 card-label\">
                    ";
        // line 35
        echo gT("Welcome:");
        echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                        ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_welcometext", [], "any", false, false, true, 38) != "")) {
            // line 39
            echo "                            ";
            echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_welcometext", [], "any", false, false, true, 39), 39, $this->source), "welcome_text");
            echo "
                        ";
        }
        // line 41
        echo "                </div>
            </div>
        </li>

        <!-- End message -->
        <li class=\"list-group-item p-0 border-0\">
            <div class=\"ls-flex-row col-12\">
                <div class=\"col-4 card-label\">
                    ";
        // line 49
        echo gT("End message:");
        echo "
                </div>
                <div class=\"col-8 ls-card-grid__description\">
                    ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_endtext", [], "any", false, false, true, 52) != "")) {
            // line 53
            echo "                        ";
            echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_endtext", [], "any", false, false, true, 53), 53, $this->source), "end_text");
            echo "
                    ";
        }
        // line 55
        echo "                </div>
            </div>
        </li>
        ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, ($context["oSurvey"] ?? null), "showsurveypolicynotice", [], "any", false, false, true, 58) > 0)) {
            // line 59
            echo "                    <!-- Data security notice -->
                    <li class=\"list-group-item p-0 border-0\">
                        <div class=\"ls-flex-row col-12\">
                            <div class=\"col-4 card-label\">
                                 ";
            // line 63
            echo gT("Privacy policy text:");
            echo "
                            </div>
                            <div class=\"col-8 ls-card-grid__description\">
                                ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_notice", [], "any", false, false, true, 66) != "")) {
                // line 67
                echo "                                    ";
                echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_notice", [], "any", false, false, true, 67), 67, $this->source), "security_notice");
                echo "
                                ";
            }
            // line 69
            echo "                            </div>
                        </div>
                    </li>
                    <!-- Data security notice error -->
                    <li class=\"list-group-item p-0 border-0\">
                        <div class=\"ls-flex-row col-12\">
                            <div class=\"col-4 card-label\">
                                ";
            // line 76
            echo gT("Privacy policy error text:");
            echo "
                            </div>
                            <div class=\"col-8 ls-card-grid__description\">
                                ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_error", [], "any", false, false, true, 79) != "")) {
                // line 80
                echo "                                    ";
                echo LS_Twig_Extension::getTextDisplayWidget($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_error", [], "any", false, false, true, 80), 80, $this->source), "security_error");
                echo "
                                ";
            }
            // line 82
            echo "                            </div>
                        </div>
                    </li>
                    <!-- Data security notice label -->
                    <li class=\"list-group-item p-0 border-0\">
                        <div class=\"ls-flex-row col-12\">
                            <div class=\"col-4 card-label\">
                                ";
            // line 89
            echo gT("Privacy policy label text:");
            echo "
                            </div>
                            <div class=\"col-8 ls-card-grid__description\">
                                ";
            // line 92
            if ((twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_notice_label", [], "any", false, false, true, 92) != "")) {
                // line 93
                echo "                                    ";
                echo LS_Twig_Extension::getExpressionManagerOutput($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["surveyTextContent"] ?? null), "surveyls_policy_notice_label", [], "any", false, false, true, 93), 93, $this->source));
                echo "
                                ";
            }
            // line 95
            echo "                            </div>
                        </div>
                    </li>
            ";
        }
        // line 99
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "__string_template__8827ad693bc9e9d9bbba868a4ab7d3bf184a668f2cab47f4ad0b506457f800d9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 99,  212 => 95,  206 => 93,  204 => 92,  198 => 89,  189 => 82,  183 => 80,  181 => 79,  175 => 76,  166 => 69,  160 => 67,  158 => 66,  152 => 63,  146 => 59,  144 => 58,  139 => 55,  133 => 53,  131 => 52,  125 => 49,  115 => 41,  109 => 39,  107 => 38,  101 => 35,  91 => 27,  88 => 26,  82 => 24,  80 => 23,  75 => 21,  72 => 20,  70 => 19,  64 => 16,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8827ad693bc9e9d9bbba868a4ab7d3bf184a668f2cab47f4ad0b506457f800d9", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19);
        static $filters = array("length" => 23);
        static $functions = array("gT" => 5, "createUrl" => 6, "getExpressionManagerOutput" => 21, "getTextDisplayWidget" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['length'],
                ['gT', 'createUrl', 'getExpressionManagerOutput', 'getTextDisplayWidget']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
