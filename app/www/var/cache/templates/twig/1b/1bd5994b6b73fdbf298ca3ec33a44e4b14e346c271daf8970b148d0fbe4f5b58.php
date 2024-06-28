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

/* __string_template__f6b327d0aa19d18d6aa8551fa045adb608b36658c282a31ec36c45d54e6ab90b */
class __TwigTemplate_fd6e037be26dd5d3e247ebd493495d241fc442cdab7d11fd262dfbad2603e727 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "usergroup_activated");
    }

    public function getTemplateName()
    {
        return "__string_template__f6b327d0aa19d18d6aa8551fa045adb608b36658c282a31ec36c45d54e6ab90b";
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
        return new Source("{{ company_name }}: {{ __(\"usergroup_activated\") }}", "__string_template__f6b327d0aa19d18d6aa8551fa045adb608b36658c282a31ec36c45d54e6ab90b", "");
    }
}
