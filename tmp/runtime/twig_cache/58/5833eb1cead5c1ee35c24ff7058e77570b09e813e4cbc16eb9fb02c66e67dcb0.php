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

/* __string_template__429ed495ddf9233b50b6ab75deacf71a000d5fb31a39179fcb0064c7ffe3b928 */
class __TwigTemplate_dfc6de0d0e8249e096de9b272ef7c1728f0fda1fdcf62198a1e835541666b352 extends Template
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
        // line 20
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 21), 21, $this->source);
        echo "\" dir=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 21), 21, $this->source);
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "languagecode", [], "any", false, false, true, 21), 21, $this->source);
        echo " dir-";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "dir", [], "any", false, false, true, 21), 21, $this->source);
        echo " ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 21), "html", [], "any", false, false, true, 21), 21, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 21), "html", [], "any", false, false, true, 21), 21, $this->source);
        echo ">
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
        <title>";
        // line 24
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["print"] ?? null), "sitename", [], "any", false, false, true, 24), 24, $this->source);
        echo " - ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyls_title", [], "any", false, false, true, 24), 24, $this->source);
        echo "</title>
    </head>
    <body>

    ";
        // line 29
        echo "    <x-test id=\"action::printableSurvey\"></x-test>

    <div id=\"limesurvey\">
            <h1>";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyls_title", [], "any", false, false, true, 32), 32, $this->source);
        echo "</h1>

            <div class=\"survey-description\">";
        // line 34
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyls_description", [], "any", false, false, true, 34), 34, $this->source);
        echo "</div>

            <div class=\"survey-welcome\">";
        // line 36
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyls_welcometext", [], "any", false, false, true, 36), 36, $this->source);
        echo "</div>

            <p class=\"x-questions\">";
        // line 38
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["print"] ?? null), "therearexquestions", [], "any", false, false, true, 38), 38, $this->source);
        echo "</p>

            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["print"] ?? null), "groups", [], "any", false, false, true, 40));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 41
            echo "                ";
            $context["groupTemplate"] = "./subviews/print/print_group.twig";
            // line 42
            echo "                ";
            echo twig_include($this->env, $context, $this->sandbox->ensureToStringAllowed(($context["groupTemplate"] ?? null), 42, $this->source));
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
            ";
        // line 45
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["print"] ?? null), "privacy", [], "any", false, false, true, 45), 45, $this->source);
        echo "
            
            <p class=\"submit-by\">
                ";
        // line 48
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["print"] ?? null), "end", [], "any", false, false, true, 48), 48, $this->source);
        echo "<br />
                ";
        // line 49
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["print"] ?? null), "submit_by", [], "any", false, false, true, 49), 49, $this->source);
        echo "<br />
                ";
        // line 50
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["print"] ?? null), "submit_text", [], "any", false, false, true, 50), 50, $this->source);
        echo "<br />
                ";
        // line 51
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["print"] ?? null), "thanks", [], "any", false, false, true, 51), 51, $this->source);
        echo "<br />
            </p>

        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "__string_template__429ed495ddf9233b50b6ab75deacf71a000d5fb31a39179fcb0064c7ffe3b928";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 51,  146 => 50,  142 => 49,  138 => 48,  132 => 45,  129 => 44,  112 => 42,  109 => 41,  92 => 40,  87 => 38,  82 => 36,  77 => 34,  72 => 32,  67 => 29,  58 => 24,  42 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__429ed495ddf9233b50b6ab75deacf71a000d5fb31a39179fcb0064c7ffe3b928", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 40, "set" => 41);
        static $filters = array();
        static $functions = array("include" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                [],
                ['include']
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
