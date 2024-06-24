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

/* __string_template__d018b3770494aa3d16b9c697c3f54aa3c57d8cb2d153b9b37e56fc1b124b9a13 */
class __TwigTemplate_c0af8292b8a1b0fe1bc175ea20fd2e498e0749f2f1864f7c3dcc9a672ad31046 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header");
        echo "
";
        // line 2
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.plan_payment_text", ["[plan]" => twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "plan", [], "any", false, false, false, 2), "[price]" => twig_get_attribute($this->env, $this->source, ($context["plan"] ?? null), "price", [], "any", false, false, false, 2), "[href]" => ($context["url"] ?? null)]);
        echo "
<br /><br />
";
        // line 4
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "vendorplans.plandetails");
        echo "
";
        // line 5
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__d018b3770494aa3d16b9c697c3f54aa3c57d8cb2d153b9b37e56fc1b124b9a13";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\") }}
{{ __(\"vendor_plans.plan_payment_text\", {\"[plan]\": plan.plan, \"[price]\": plan.price, \"[href]\": url}) }}
<br /><br />
{{ snippet(\"vendorplans.plandetails\") }}
{{ snippet(\"footer\") }}", "__string_template__d018b3770494aa3d16b9c697c3f54aa3c57d8cb2d153b9b37e56fc1b124b9a13", "");
    }
}
