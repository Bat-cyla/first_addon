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

/* __string_template__081c73203e4fd46f49d361439d1fdf1516be0666cd4a33541ae2be7bd5ea2890 */
class __TwigTemplate_658557b3c0c412baa24081a06d746e64c901f18f7aa87ad9b48f8e4e4fcb6dab extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "cp_your_cart");
    }

    public function getTemplateName()
    {
        return "__string_template__081c73203e4fd46f49d361439d1fdf1516be0666cd4a33541ae2be7bd5ea2890";
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
        return new Source("{{ company_name }}: {{ __(\"cp_your_cart\") }}", "__string_template__081c73203e4fd46f49d361439d1fdf1516be0666cd4a33541ae2be7bd5ea2890", "");
    }
}
