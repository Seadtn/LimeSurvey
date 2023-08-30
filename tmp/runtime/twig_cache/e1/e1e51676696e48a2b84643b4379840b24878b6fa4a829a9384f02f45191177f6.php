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

/* /survey/questions/answer/multiplechoice/answer.twig */
class __TwigTemplate_154d048d0f3715fe09a6eac6ca73b3681e1bd82f08eaa47a172dff2d1cd34d3f extends Template
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
        // line 12
        echo "<!-- Multiple Choice -->

<!-- answer -->

";
        // line 16
        $context["button_size_class"] = ((((twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 16) == "default") || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 16)))) ? ("") : (("btn-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "button_size", [], "any", false, false, true, 16), 16, $this->source))));
        // line 17
        $context["max_buttons_row"] = ((((twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 17) == "default") || twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 17)))) ? ("col-md-2") : (twig_get_attribute($this->env, $this->source, ($context["question_template_attribute"] ?? null), "max_buttons_row", [], "any", false, false, true, 17)));
        // line 18
        echo "<input type=\"hidden\" name=\"MULTI";
        echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 18, $this->source);
        echo "\" value=\"";
        echo $this->sandbox->ensureToStringAllowed(($context["anscount"] ?? null), 18, $this->source);
        echo "\" />
<div class=\"";
        // line 19
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 19, $this->source);
        echo " row ";
        echo $this->sandbox->ensureToStringAllowed(($context["extraclass"] ?? null), 19, $this->source);
        echo "\" >
    <div class=\"list-unstyled form-inline btn-toolbar col-12 \" data-bs-toggle=\"buttons\" role=\"group\" aria-labelledby=\"ls-question-text-";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 20, $this->source);
        echo "\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aRows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aRow"]) {
            // line 22
            echo "            ";
            $context["aRow"] = twig_array_merge(twig_array_merge($this->sandbox->ensureToStringAllowed($context["aRow"], 22, $this->source), ["button_size_class" => ($context["button_size_class"] ?? null)]), ["max_buttons_row" => ($context["max_buttons_row"] ?? null)]);
            // line 23
            echo "            ";
            $context["rowTemplate"] = ((twig_get_attribute($this->env, $this->source, $context["aRow"], "other", [], "any", false, false, true, 23)) ? ("./survey/questions/answer/multiplechoice/rows/answer_row_other.twig") : ("./survey/questions/answer/multiplechoice/rows/answer_row.twig"));
            // line 24
            echo "            ";
            $this->loadTemplate(($context["rowTemplate"] ?? null), "/survey/questions/answer/multiplechoice/answer.twig", 24)->display(twig_array_merge($context, $context["aRow"]));
            // line 25
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
    <!-- other -->
    ";
        // line 28
        if (twig_in_filter(($context["other"] ?? null), twig_get_array_keys_filter(($context["aRows"] ?? null)))) {
            // line 29
            echo "    <div class=\"d-none col-12\" id=\"";
            echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 29, $this->source);
            echo "other-div\">
            <div class=\"mb-3 text-item other-text-item form-check\">
                ";
            // line 31
            echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(($context["othertext"] ?? null), 31, $this->source));
            echo "
                <input
                    class=\"form-control input-sm ";
            // line 33
            echo $this->sandbox->ensureToStringAllowed(($context["kpclass"] ?? null), 33, $this->source);
            echo " bootstrap-other-input\"
                    type=\"text\"
                    name=\"";
            // line 35
            echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 35, $this->source);
            echo "other\"
                    id=\"answer";
            // line 36
            echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 36, $this->source);
            echo "other\"
                    value=\"";
            // line 37
            echo $this->sandbox->ensureToStringAllowed(($context["sValue"] ?? null), 37, $this->source);
            echo "\"
                    aria-labelledby=\"label-";
            // line 38
            echo $this->sandbox->ensureToStringAllowed(($context["myfname"] ?? null), 38, $this->source);
            echo "-other\"
                    data-name=\"";
            // line 39
            echo $this->sandbox->ensureToStringAllowed(($context["name"] ?? null), 39, $this->source);
            echo "other\"
                />
            </div>
    </div>
    ";
        }
        // line 44
        echo "</div>

<!-- end of answer -->
";
    }

    public function getTemplateName()
    {
        return "/survey/questions/answer/multiplechoice/answer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 44,  144 => 39,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  123 => 33,  118 => 31,  112 => 29,  110 => 28,  106 => 26,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  66 => 21,  62 => 20,  56 => 19,  49 => 18,  47 => 17,  45 => 16,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/multiplechoice/answer.twig", "C:\\wamp64\\www\\limesurvey\\themes\\question\\bootstrap_buttons_multi\\survey\\questions\\answer\\multiplechoice\\answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "for" => 21, "include" => 24, "if" => 28);
        static $filters = array("merge" => 22, "keys" => 28);
        static $functions = array("processString" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'include', 'if'],
                ['merge', 'keys'],
                ['processString']
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
