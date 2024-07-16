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

/* __string_template__d18f30ed385ce00b38a88ccd1b49a804204768294c5c1d9c118e13b74cdde3ec */
class __TwigTemplate_fc1de72815ff8b956b53717227250c3bea7e54d76f3162617c566cfe2e08c6d1 extends \Twig\Template
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
        // line 9
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "cp_hello ");
        echo "
                     
                      
                     <br />
                     </p>
                </td>
           </tr>

           <tr>
                <td width=\"600px\" valign=\"top\" align=\"center\" >
                  ";
        // line 19
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->includeDocFunction($this->env, $context, "gift_certificate.default", twig_get_attribute($this->env, $this->source, ($context["gift_cert_data"] ?? null), "gift_cert_id", [], "any", false, false, false, 19));
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__d18f30ed385ce00b38a88ccd1b49a804204768294c5c1d9c118e13b74cdde3ec";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  52 => 9,  44 => 4,  39 => 2,  37 => 1,);
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
                  {{ include_doc(\"gift_certificate.default\", gift_cert_data.gift_cert_id) }}{{ snippet(\"footer\") }}", "__string_template__d18f30ed385ce00b38a88ccd1b49a804204768294c5c1d9c118e13b74cdde3ec", "");
    }
}
