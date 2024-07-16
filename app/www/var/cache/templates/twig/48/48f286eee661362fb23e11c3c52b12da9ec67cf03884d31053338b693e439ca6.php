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

/* __string_template__e99578040da4085f6b53b2bd4ed88b698d3775bf84123f58b8e579d89252f10a */
class __TwigTemplate_5452878e6ede450ad5ed4ea72e31ccd07b50b498b89b99f44bfb54929812a235 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "change_order_status_b_subj", ["[order]" => twig_get_attribute($this->env, $this->source, ($context["order_info"] ?? null), "order_id", [], "any", false, false, false, 1)]);
    }

    public function getTemplateName()
    {
        return "__string_template__e99578040da4085f6b53b2bd4ed88b698d3775bf84123f58b8e579d89252f10a";
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
        return new Source("{{ company_name }}: {{ __(\"change_order_status_b_subj\", {\"[order]\": order_info.order_id}) }}", "__string_template__e99578040da4085f6b53b2bd4ed88b698d3775bf84123f58b8e579d89252f10a", "");
    }
}
