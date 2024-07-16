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

/* __string_template__c5170bc2d9ddbb3a320fd32bd3f4c8641a99b4bca3c0be67a0f2c89a929e8621 */
class __TwigTemplate_cc9e91c97282a5ded5dfa8b073d98279dac575dc3b1591129b4b6779f92c2fe0 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "gift_certificate");
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["certificate_info"] ?? null), "gift_cert_code", [], "any", false, false, false, 2);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["certificate_status"] ?? null), "email_subj", [], "any", false, false, false, 2);
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
            echo ",
                     ";
        }
        // line 11
        echo "<br/>
                      ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["certificate_status"] ?? null), "email_header", [], "any", false, false, false, 12);
        echo "<br />
                     ";
        // line 13
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "gift_cert_from");
        echo ": ";
        echo twig_get_attribute($this->env, $this->source, ($context["gift_cert_data"] ?? null), "sender", [], "any", false, false, false, 13);
        echo "    ";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "gift_cert_to");
        echo ": ";
        echo twig_get_attribute($this->env, $this->source, ($context["gift_cert_data"] ?? null), "recipient", [], "any", false, false, false, 13);
        echo "<br />
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
        return "__string_template__c5170bc2d9ddbb3a320fd32bd3f4c8641a99b4bca3c0be67a0f2c89a929e8621";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  75 => 13,  71 => 12,  68 => 11,  62 => 10,  56 => 8,  54 => 7,  48 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set title %}
{{__(\"gift_certificate\")}} {{ certificate_info.gift_cert_code }} {{ certificate_status.email_subj }}
{% endset %}
{{ snippet(\"header\", {\"title\": title }  ) }}

<p>
                     {% if gift_cert_data.recipient %}
                     {{__(\"hello_name\", {\"[name]\" : gift_cert_data.recipient})}}
                     {% else %}
                     {{ __(\"hello\") }},
                     {% endif %}<br/>
                      {{ certificate_status.email_header }}<br />
                     {{__(\"gift_cert_from\")}}: {{gift_cert_data.sender}}    {{__(\"gift_cert_to\")}}: {{gift_cert_data.recipient}}<br />
                     </p>
                </td>
           </tr>

           <tr>
                <td width=\"600px\" valign=\"top\" align=\"center\" >
                  {{ include_doc(\"gift_certificate.default\", gift_cert_data.gift_cert_id) }}{{ snippet(\"footer\") }}", "__string_template__c5170bc2d9ddbb3a320fd32bd3f4c8641a99b4bca3c0be67a0f2c89a929e8621", "");
    }
}
