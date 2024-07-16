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

/* __string_template__fc28b2567803d4e34b1de2f555d1422a4f7f2b24ec85ce8e11d1e17eb7e6e804 */
class __TwigTemplate_eaa61660ce1aae61573cdf4493c633b96af78aebf237c6f67ba17553570174d2 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_debt_payout.vendor_days_before_suspend.subject");
    }

    public function getTemplateName()
    {
        return "__string_template__fc28b2567803d4e34b1de2f555d1422a4f7f2b24ec85ce8e11d1e17eb7e6e804";
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
        return new Source("{{ __(\"vendor_debt_payout.vendor_days_before_suspend.subject\") }}", "__string_template__fc28b2567803d4e34b1de2f555d1422a4f7f2b24ec85ce8e11d1e17eb7e6e804", "");
    }
}
