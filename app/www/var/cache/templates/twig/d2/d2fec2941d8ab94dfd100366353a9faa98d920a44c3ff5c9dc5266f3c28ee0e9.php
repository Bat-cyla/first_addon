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

/* __string_template__96c3c326c4c0a79e53099ae76172b429f0523daad67468243cceaf70c048bced */
class __TwigTemplate_86cf2e9b0ba5f423f4e6be08644787e6d0c143cbb843136e899b0a69eadaf28e extends \Twig\Template
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
        } else {
            // line 9
            echo "                     ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
            echo "
                     ";
        }
        // line 10
        echo "<br/>
                      ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["certificate_status"] ?? null), "email_header", [], "any", false, false, false, 11);
        echo "<br />
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
        return "__string_template__96c3c326c4c0a79e53099ae76172b429f0523daad67468243cceaf70c048bced";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  64 => 11,  61 => 10,  55 => 9,  52 => 8,  50 => 7,  44 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set title %}
{{__(\"cp_your_cart\")}} 
{% endset %}
{{ snippet(\"header\", {\"title\": title }  ) }}

<p>
                     {% if gift_cert_data.recipient %}
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
                  {{ include_doc(\"gift_certificate.default\", gift_cert_data.gift_cert_id) }}{{ snippet(\"footer\") }}", "__string_template__96c3c326c4c0a79e53099ae76172b429f0523daad67468243cceaf70c048bced", "");
    }
}
