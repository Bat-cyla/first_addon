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

/* __string_template__05d1026d632ef267645236352b277eca2f4438198a0d4f629924a349e8eecd31 */
class __TwigTemplate_434ed7098d6bda486de957c4da6d9915cf6c816f8cc699a375108f994233ca2d extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => ($context["title"] ?? null)]);
        echo "
<p>
                     ";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "cp_hello ");
        echo "
                     <br />
                     </p>
                </td>
           </tr>
           <tr>
                <td width=\"600px\" valign=\"top\" align=\"center\" >
                 ";
        // line 10
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__05d1026d632ef267645236352b277eca2f4438198a0d4f629924a349e8eecd31";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\", {\"title\": title }  ) }}
<p>
                     {{ __(\"cp_hello \") }}
                     <br />
                     </p>
                </td>
           </tr>
           <tr>
                <td width=\"600px\" valign=\"top\" align=\"center\" >
                 {{ snippet(\"footer\") }}", "__string_template__05d1026d632ef267645236352b277eca2f4438198a0d4f629924a349e8eecd31", "");
    }
}
