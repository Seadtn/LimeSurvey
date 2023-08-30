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

/* ./subviews/content/submit_preview.twig */
class __TwigTemplate_df74882608a5f44624283f55e6e6bb1bf02d808fce04c654041c9c1cabed634b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'endtext' => [$this, 'block_endtext'],
            'printanswer' => [$this, 'block_printanswer'],
            'publicstatistics' => [$this, 'block_publicstatistics'],
            'endurl' => [$this, 'block_endurl'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "./subviews/content/submit.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("./subviews/content/submit.twig", "./subviews/content/submit_preview.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_endtext($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <div class=\"alert alert-warning\"><strong class=\"h4 text-danger\">";
        echo gT("Did Not Save");
        echo " </strong>
        ";
        // line 23
        echo gT("Your survey responses have not been recorded. This survey is not yet active.");
        echo "
    </div>
    ";
        // line 25
        $this->displayParentBlock("endtext", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_printanswer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 29), "aPrintAnswers", [], "any", false, false, true, 29), "show", [], "any", false, false, true, 29) == true)) {
            // line 30
            echo "        <!--  Link to Print Answer Preview -->
        <div class=\"";
            // line 31
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 31), "submitwrapperdiva", [], "any", false, false, true, 31), 31, $this->source);
            echo " disabled\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 31), "submitwrapperdiv", [], "any", false, false, true, 31), 31, $this->source);
            echo ">
            <a href=\"#\" title=\" ";
            // line 32
            echo gT("Note: This link only works if the survey is activated.");
            echo "\" class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 32), "submitwrapperdivaa", [], "any", false, false, true, 32), 32, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 32), "submitwrapperdivaa", [], "any", false, false, true, 32), 32, $this->source);
            echo ">
                ";
            // line 33
            echo gT("Print your answers.");
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 38
    public function block_publicstatistics($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        // line 40
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 40), "aPublicStatistics", [], "any", false, false, true, 40), "show", [], "any", false, false, true, 40) == true)) {
            // line 41
            echo "        <!-- Link to Public statistics -->
        <div class=\"";
            // line 42
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 42), "submitwrapperdivb", [], "any", false, false, true, 42), 42, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 42), "submitwrapperdivb", [], "any", false, false, true, 42), 42, $this->source);
            echo ">
            <a href=\"#\" title=\" ";
            // line 43
            echo gT("Note: This link only works if the survey is activated.");
            echo "\" class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 43), "submitwrapperdivba", [], "any", false, false, true, 43), 43, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 43), "submitwrapperdivba", [], "any", false, false, true, 43), 43, $this->source);
            echo ">
                ";
            // line 44
            echo gT("View the statistics for this survey.");
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 49
    public function block_endurl($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 50), "sSurveylsUrl", [], "any", false, false, true, 50)) {
            // line 51
            echo "        <a href=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 51), "sSurveylsUrl", [], "any", false, false, true, 51), 51, $this->source);
            echo "\">";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aCompleted", [], "any", false, false, true, 51), "sSurveylsUrlDescription", [], "any", false, false, true, 51), 51, $this->source);
            echo "
        ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "autoredirect", [], "any", false, false, true, 52) == "Y")) {
                // line 53
                echo "            <small class=\"text-info\">";
                echo gT("Note: Automatically loading the end URL works only if the survey is activated.");
                echo "</small>
        ";
            }
            // line 55
            echo "        </a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "./subviews/content/submit_preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 55,  157 => 53,  155 => 52,  148 => 51,  145 => 50,  141 => 49,  132 => 44,  124 => 43,  118 => 42,  115 => 41,  112 => 40,  110 => 39,  106 => 38,  97 => 33,  89 => 32,  83 => 31,  80 => 30,  77 => 29,  75 => 28,  71 => 27,  65 => 25,  60 => 23,  55 => 22,  51 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/submit_preview.twig", "C:\\wamp64\\www\\limesurvey\\themes\\survey\\vanilla\\views\\subviews\\content\\submit_preview.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 29);
        static $filters = array();
        static $functions = array("gT" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['gT']
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
