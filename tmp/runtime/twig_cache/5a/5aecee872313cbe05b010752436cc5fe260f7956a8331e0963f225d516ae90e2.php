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

/* ./survey/questions/answer/multiplechoice/rows/answer_row.twig */
class __TwigTemplate_ac833141228ed701c5ee23a60bba8d5d7b188f048b15dee402390f2f45bb6dda extends Template
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
        // line 21
        echo "
<!-- answer_row -->
<div id='javatbd";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 23, $this->source);
        echo "' class=\"bootstrap-buttons-div col-12 ";
        echo $this->sandbox->ensureToStringAllowed(($context["max_buttons_row"] ?? null), 23, $this->source);
        echo " mb-1\">
    <div class=\"form-check col-12 ";
        // line 24
        if ((($context["checkedState"] ?? null) != "")) {
            echo " active ";
        }
        echo "\">
    <input
        type=\"checkbox\"
        name=\"";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 27, $this->source);
        echo "\"
        data-name=\"";
        // line 28
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 28, $this->source);
        echo "\"
        class=\"btn-check button-item\"
        id=\"answer";
        // line 30
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 30, $this->source);
        echo "\"
        ";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(($context["checkedState"] ?? null), 31, $this->source);
        echo "
        value=\"Y\"
    />
    <label for=\"answer";
        // line 34
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 34, $this->source);
        echo "\"
           class=\"col-12 btn btn-primary ";
        // line 35
        echo $this->sandbox->ensureToStringAllowed(($context["button_size_class"] ?? null), 35, $this->source);
        echo "\">";
        echo $this->sandbox->ensureToStringAllowed(($context["question"] ?? null), 35, $this->source);
        echo "</label>
    <input
        type=\"hidden\"
        name=\"java";
        // line 38
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 38, $this->source);
        echo "\"
        id=\"java";
        // line 39
        echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 39, $this->source);
        echo "\"
        value=\"";
        // line 40
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 40), "encode", [0 => ($context["sValue"] ?? null)], "method", false, false, true, 40), 40, $this->source);
        echo "\"
    />
    </div>
</div>
<!-- end of answer_row -->
";
    }

    public function getTemplateName()
    {
        return "./survey/questions/answer/multiplechoice/rows/answer_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 40,  92 => 39,  88 => 38,  80 => 35,  76 => 34,  70 => 31,  66 => 30,  61 => 28,  57 => 27,  49 => 24,  43 => 23,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "./survey/questions/answer/multiplechoice/rows/answer_row.twig", "C:\\wamp64\\www\\limesurvey\\themes\\question\\bootstrap_buttons_multi\\survey\\questions\\answer\\multiplechoice\\rows\\answer_row.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                []
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
