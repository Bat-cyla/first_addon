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

/* __string_template__25548220e8e8a479caecee0ea86259b26b8788a8aa5b21529e0f8d5afcc3b080 */
class __TwigTemplate_a764994a95696c6f73a285a015e5a72a1763e6079f0212e9442d53396d7f0d90 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "gift_certificate");
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["certificate_info"] ?? null), "gift_cert_code", [], "any", false, false, false, 1);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["certificate_status"] ?? null), "email_subj", [], "any", false, false, false, 1);
    }

    public function getTemplateName()
    {
        return "__string_template__25548220e8e8a479caecee0ea86259b26b8788a8aa5b21529e0f8d5afcc3b080";
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
        return new Source("{{ company_name }}: {{ __(\"gift_certificate\") }} {{ certificate_info.gift_cert_code }} {{ certificate_status.email_subj }}", "__string_template__25548220e8e8a479caecee0ea86259b26b8788a8aa5b21529e0f8d5afcc3b080", "");
    }
}
