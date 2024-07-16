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

/* __string_template__bbbc23e7f0b3a73c313138c7a6764dde5fa328e7321cceb6d5ac8fefb2b7c7b3 */
class __TwigTemplate_454b795cd2c64d0304e269a3c4a47646b5efcb0a65172d056b858513284ec2b9 extends \Twig\Template
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
        ob_start();
        // line 2
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "cp_your_cart");
        echo " 
";
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => ($context["title"] ?? null)]);
        echo "
<p>
                     ";
        // line 6
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "cp_hello ");
        echo "
                     <br />
                     </p>
                </td>
           </tr>
           <tr>
                <td width=\"600px\" valign=\"top\" align=\"center\" >
                 ";
        // line 13
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__bbbc23e7f0b3a73c313138c7a6764dde5fa328e7321cceb6d5ac8fefb2b7c7b3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  49 => 6,  44 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set title %}
{{__(\"cp_your_cart\")}} 
{% endset %}
{{ snippet(\"header\", {\"title\": title }  ) }}
<p>
                     {{ __(\"cp_hello \") }}
                     <br />
                     </p>
                </td>
           </tr>
           <tr>
                <td width=\"600px\" valign=\"top\" align=\"center\" >
                 {{ snippet(\"footer\") }}", "__string_template__bbbc23e7f0b3a73c313138c7a6764dde5fa328e7321cceb6d5ac8fefb2b7c7b3", "");
    }
}
