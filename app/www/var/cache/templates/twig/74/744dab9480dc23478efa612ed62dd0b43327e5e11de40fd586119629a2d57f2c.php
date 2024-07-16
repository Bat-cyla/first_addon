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

/* __string_template__8e73e26a51025fbe9afcaf25b7f082fc21ed1453541fcff9570359934d6e5b56 */
class __TwigTemplate_521dbd35bd46057f09a3ff1e35d7501cab28f68f87800e8beefdd7aa755ef8f8 extends \Twig\Template
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
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["gift_cert_data"] ?? null), "recipient", [], "any", false, false, false, 7)) {
            // line 8
            echo "                     ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello_name", ["[name]" => twig_get_attribute($this->env, $this->source, ($context["gift_cert_data"] ?? null), "recipient", [], "any", false, false, false, 8)]);
            echo "
                     ";
        } else {
            // line 10
            echo "                     ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
            echo "
                     ";
        }
        // line 11
        echo "<br/>
                      ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["certificate_status"] ?? null), "email_header", [], "any", false, false, false, 12);
        echo "<br />
                     <br />
                     </p>
                </td>
           </tr>

           <tr>
                <td width=\"600px\" valign=\"top\" align=\"center\" >
                  ";
        // line 20
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->includeDocFunction($this->env, $context, "gift_certificate.default", twig_get_attribute($this->env, $this->source, ($context["gift_cert_data"] ?? null), "gift_cert_id", [], "any", false, false, false, 20));
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__8e73e26a51025fbe9afcaf25b7f082fc21ed1453541fcff9570359934d6e5b56";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  67 => 12,  64 => 11,  58 => 10,  52 => 8,  50 => 7,  44 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set title %}
{{__(\"cp_your_cart\")}} 
{% endset %}
{{ snippet(\"header\", {\"title\": title }  ) }}

<p>
                     {% if gift_cert_data.recipient %}
                     {{__(\"hello_name\", {\"[name]\" : gift_cert_data.recipient})}}
                     {% else %}
                     {{ __(\"hello\") }}
                     {% endif %}<br/>
                      {{ certificate_status.email_header }}<br />
                     <br />
                     </p>
                </td>
           </tr>

           <tr>
                <td width=\"600px\" valign=\"top\" align=\"center\" >
                  {{ include_doc(\"gift_certificate.default\", gift_cert_data.gift_cert_id) }}{{ snippet(\"footer\") }}", "__string_template__8e73e26a51025fbe9afcaf25b7f082fc21ed1453541fcff9570359934d6e5b56", "");
    }
}
