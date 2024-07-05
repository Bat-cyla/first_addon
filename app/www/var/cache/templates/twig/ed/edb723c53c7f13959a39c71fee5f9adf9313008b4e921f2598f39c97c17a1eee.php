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

/* __string_template__fa7733cf54ec262556c233dfa756467ff82127c6209cd707d9a258aac4e4f5ad */
class __TwigTemplate_b2dcdbe1693a5f2ea492502ae6fe158a7a07c2bec9eb2c93e349765952eb6488 extends \Twig\Template
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
        echo ($context["company_name"] ?? null);
        echo ": ";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "update_profile_notification");
    }

    public function getTemplateName()
    {
        return "__string_template__fa7733cf54ec262556c233dfa756467ff82127c6209cd707d9a258aac4e4f5ad";
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
        return new Source("{{ company_name }}: {{ __(\"update_profile_notification\") }}", "__string_template__fa7733cf54ec262556c233dfa756467ff82127c6209cd707d9a258aac4e4f5ad", "");
    }
}
