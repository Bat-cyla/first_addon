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

/* __string_template__0f980e231ad220577e29cc6407325f26b7e676f14e3eb7caa43bbd42e4dc785e */
class __TwigTemplate_a0e3d1bb8fc885a5ae3cec11e5759ba5360ef6e17cfdb77972436827f5cd8605 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "usergroup_activated")]);
        echo "
    ";
        // line 2
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_usergroup_activated", ["[usergroups]" => ($context["usergroups"] ?? null)]);
        echo "
  ";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__0f980e231ad220577e29cc6407325f26b7e676f14e3eb7caa43bbd42e4dc785e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\", {\"title\": __(\"usergroup_activated\") } ) }}
    {{ __(\"text_usergroup_activated\", {\"[usergroups]\": usergroups}) }}
  {{ snippet(\"footer\") }}", "__string_template__0f980e231ad220577e29cc6407325f26b7e676f14e3eb7caa43bbd42e4dc785e", "");
    }
}
