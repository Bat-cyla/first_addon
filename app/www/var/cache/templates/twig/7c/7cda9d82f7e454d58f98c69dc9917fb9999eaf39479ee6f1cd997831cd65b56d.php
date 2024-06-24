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

/* __string_template__2f1e167f136eaeb577d91a4056244881e138c433246fefc43f96b46bec44cd21 */
class __TwigTemplate_9f787ccff1838e5579637ab9c9a6cb7159dddcc9e53aecbe201620606543e2f3 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_plans.plan_payment");
    }

    public function getTemplateName()
    {
        return "__string_template__2f1e167f136eaeb577d91a4056244881e138c433246fefc43f96b46bec44cd21";
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
        return new Source("{{ __(\"vendor_plans.plan_payment\") }}", "__string_template__2f1e167f136eaeb577d91a4056244881e138c433246fefc43f96b46bec44cd21", "");
    }
}
