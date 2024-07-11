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

/* __string_template__de995868f0766be59bee0b24594a8554a169d50bff39cc9be05e5b6649c4f552 */
class __TwigTemplate_a884fa21212ea917992c8435282be382aa8de7c318e41b134d10a4f557fe8d1b extends \Twig\Template
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
        echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tbody>
<tr>
    <td style=\"width: 100%; height: 100%;vertical-align: top;\" align=\"center\">
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600px\">
        <tbody style=\"font-family: arial;\">
        <tr>
            <td style=\"padding: 17px 25px 40px; background: #F57171;\" align=\"center\" valign=\"top\" width=\"600px\">
                <h1 style=\"color: #fff; text-transform: uppercase; font-size: 40px; font-weight: bold;margin: 10px 0 0;\">
                ";
        // line 10
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "gift_certificate");
        echo "
                </h1>
                <h2 style=\"font-size: 50px; font-weight: normal; color: #fff; margin: 0px; line-height: 1.2em;\">
                ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "amount", [], "any", false, false, false, 13);
        echo "
                </h2>
                <p style=\"color: #fff; margin: 0 0 12px; font-size: 12px\">
                    ";
        // line 16
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "gift_cert_code");
        echo "
                </p>
                <span style=\"background: #fff; padding: 5px 20px; font-size: 19px; font-weight: lighter; border-radius: 2px;\">
                ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "gift_cert_code", [], "any", false, false, false, 19);
        echo "</span>
            </td>
        </tr>
        <tr>
            <td style=\"padding: 30px 0px 80px;\" valign=\"middle\" width=\"600px\">
                <div style=\"padding: 10px;\">";
        // line 24
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "info");
        echo "
                </div>
                <div>";
        // line 26
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "products_table");
        echo "
                </div>
                <div style=\"padding: 30px 20px 0px 20px; text-align: right;\">
                    ";
        // line 29
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "shop_now");
        echo " : <a href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "storefront_url", [], "any", false, false, false, 29);
        echo "\" target=\"_blank\">";
        echo twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "storefront_url", [], "any", false, false, false, 29);
        echo "</a>
                </div>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__de995868f0766be59bee0b24594a8554a169d50bff39cc9be05e5b6649c4f552";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  79 => 26,  74 => 24,  66 => 19,  60 => 16,  54 => 13,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
<tbody>
<tr>
    <td style=\"width: 100%; height: 100%;vertical-align: top;\" align=\"center\">
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600px\">
        <tbody style=\"font-family: arial;\">
        <tr>
            <td style=\"padding: 17px 25px 40px; background: #F57171;\" align=\"center\" valign=\"top\" width=\"600px\">
                <h1 style=\"color: #fff; text-transform: uppercase; font-size: 40px; font-weight: bold;margin: 10px 0 0;\">
                {{ __(\"gift_certificate\") }}
                </h1>
                <h2 style=\"font-size: 50px; font-weight: normal; color: #fff; margin: 0px; line-height: 1.2em;\">
                {{ gift_certificate.amount }}
                </h2>
                <p style=\"color: #fff; margin: 0 0 12px; font-size: 12px\">
                    {{ __(\"gift_cert_code\") }}
                </p>
                <span style=\"background: #fff; padding: 5px 20px; font-size: 19px; font-weight: lighter; border-radius: 2px;\">
                {{ gift_certificate.gift_cert_code }}</span>
            </td>
        </tr>
        <tr>
            <td style=\"padding: 30px 0px 80px;\" valign=\"middle\" width=\"600px\">
                <div style=\"padding: 10px;\">{{ snippet(\"info\") }}
                </div>
                <div>{{ snippet(\"products_table\") }}
                </div>
                <div style=\"padding: 30px 20px 0px 20px; text-align: right;\">
                    {{__(\"shop_now\")}} : <a href=\"{{c.storefront_url}}\" target=\"_blank\">{{c.storefront_url}}</a>
                </div>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>", "__string_template__de995868f0766be59bee0b24594a8554a169d50bff39cc9be05e5b6649c4f552", "");
    }
}
