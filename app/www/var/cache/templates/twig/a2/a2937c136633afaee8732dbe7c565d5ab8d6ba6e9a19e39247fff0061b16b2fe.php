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

/* __string_template__ba1a0599b30fa99bcd76c045154813d53f3b158df16e5b355d4c4ad611d1167f */
class __TwigTemplate_231f8c25302bf1f5a970a847421f929de12d7de31f53d55d17f37f04a245a888 extends \Twig\Template
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
        // line 1
        echo "<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold;\">";
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "discount", [], "any", false, false, false, 1);
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__ba1a0599b30fa99bcd76c045154813d53f3b158df16e5b355d4c4ad611d1167f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold;\">{{ p.discount }}</strong></p>", "__string_template__ba1a0599b30fa99bcd76c045154813d53f3b158df16e5b355d4c4ad611d1167f", "");
    }
}
