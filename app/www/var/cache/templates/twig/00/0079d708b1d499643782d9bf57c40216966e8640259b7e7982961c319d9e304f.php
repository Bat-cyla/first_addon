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

/* __string_template__2b65bdc543161385e1279cf6d9629ddd040712a5f3c6e42c8a7865546eb217d7 */
class __TwigTemplate_fe94276142ae90ee39f1d4d67ca4860548004e1ebd8670cc480fc22ad21a2ff2 extends \Twig\Template
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
        echo "
                ";
        // line 2
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header");
        echo "
";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_debt_payout.vendor_days_before_suspend.message", ["[marketplace]" => ($context["marketplace"] ?? null)]);
        echo "
";
        // line 4
        if (($context["reason"] ?? null)) {
            // line 5
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "reason");
            echo ": ";
            echo ($context["reason"] ?? null);
            echo "
    <br /><br />
";
        }
        // line 8
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "__string_template__2b65bdc543161385e1279cf6d9629ddd040712a5f3c6e42c8a7865546eb217d7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  50 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
                {{ snippet(\"header\") }}
{{ __(\"vendor_debt_payout.vendor_days_before_suspend.message\", {\"[marketplace]\": marketplace}) }}
{% if reason %}
    {{ __(\"reason\") }}: {{ reason }}
    <br /><br />
{% endif %}
{{ snippet(\"footer\") }}
            ", "__string_template__2b65bdc543161385e1279cf6d9629ddd040712a5f3c6e42c8a7865546eb217d7", "");
    }
}