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

/* ./subviews/print/print_question.twig */
class __TwigTemplate_8a8b2cb10b876c8babff5079210b2031953c2bd7f549e05dbb0fc65cfabc5c69 extends Template
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
        echo "<div id=\"question";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "qid", [], "any", false, false, true, 1), 1, $this->source);
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "class", [], "any", false, false, true, 1), 1, $this->source);
        echo " question-wrapper\">
    <div class=\"q-text\">
        <h3>";
        // line 3
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "number", [], "any", false, false, true, 3), 3, $this->source);
        echo " ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "code", [], "any", false, false, true, 3)) ? ((("[" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "code", [], "any", false, false, true, 3), 3, $this->source)) . "]")) : (""));
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "text", [], "any", false, false, true, 3), 3, $this->source);
        echo "
            <span class=\"mandatory\">";
        // line 4
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "mandatory", [], "any", false, false, true, 4), 4, $this->source);
        echo "</span>
        </h3>
        <p class=\"q-scenaria\">";
        // line 6
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "scenario", [], "any", false, false, true, 6), 6, $this->source);
        echo "</p>
        <p class=\"q-type-help\">";
        // line 7
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "type_help", [], "any", false, false, true, 7), 7, $this->source);
        echo "</p>
        <p class=\"q-man-message\">";
        // line 8
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "man_message", [], "any", false, false, true, 8), 8, $this->source);
        echo "</p>
        <p class=\"q-validation\">";
        // line 9
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "valid_message", [], "any", false, false, true, 9), 9, $this->source);
        echo "</p>
        <p class=\"q-fvalidation\">";
        // line 10
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "file_valid_message", [], "any", false, false, true, 10), 10, $this->source);
        echo "</p>
    </div>
    <div class=\"q-answer\">
        ";
        // line 13
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "answer", [], "any", false, false, true, 13), 13, $this->source);
        echo "
    </div>
    <div class=\"q-help\">
        ";
        // line 16
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "help", [], "any", false, false, true, 16), 16, $this->source);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "./subviews/print/print_question.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 16,  81 => 13,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  54 => 4,  47 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/print/print_question.twig", "C:\\wamp64\\www\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\print\\print_question.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
