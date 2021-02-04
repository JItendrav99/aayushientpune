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

/* __string_template__4bba61292cf8136eae6c5576f3e280da41afb6b70529449cad602bd9e494d222 */
class __TwigTemplate_cbeadc19c204208e2f1e2456095d55d6c2a0ff004c25ee8e1a084d98e9797868 extends \Twig\Template
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
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "a", [], "any", false, false, true, 1)) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "b", [], "any", false, false, true, 1)))) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "a", [], "any", false, false, true, 1) + twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "b", [], "any", false, false, true, 1)), "html", null, true);
        } else {
            echo "c";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__4bba61292cf8136eae6c5576f3e280da41afb6b70529449cad602bd9e494d222";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4bba61292cf8136eae6c5576f3e280da41afb6b70529449cad602bd9e494d222", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("length" => 1, "escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['length', 'escape'],
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
