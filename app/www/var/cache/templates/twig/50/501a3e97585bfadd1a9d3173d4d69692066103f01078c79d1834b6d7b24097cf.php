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

/* __string_template__ca172b818b7c13c5b1ead9f47055b009824ebcf919db3da104afafec86ccaadb */
class __TwigTemplate_55341162a9daf69af7c3136de917c96abe26fd48abadf87abafff38a5df18729 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "update_profile_notification_header")]);
        echo "
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "firstname", [], "any", false, false, false, 2)) {
            echo " ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello_name", ["[name]" => twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "firstname", [], "any", false, false, false, 2)]);
            echo " ";
        } else {
            echo " ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
            echo ", ";
        }
        // line 3
        echo "    <br>
    ";
        // line 4
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "update_profile_notification_header");
        echo "
    <br>
    <br>
    <h4 class=\"with-subline\">";
        // line 7
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "user_account_information");
        echo "</h4>
    <table border=\"0\" width=\"100%\" class=\"info\">
      <tr>
        <td><b>";
        // line 10
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "login_url");
        echo ":</b></td>
        <td><a href=\"";
        // line 11
        echo ($context["login_url"] ?? null);
        echo "\">";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["login_url"] ?? null));
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 14
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "email");
        echo ":</b></td>
        <td><a>";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "email", [], "any", false, false, false, 15);
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 18
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "password");
        echo ":</b></td>
        <td> *********** (<a href=\"";
        // line 19
        echo ($context["forgot_pass_url"] ?? null);
        echo "\">";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "forgot_password_question");
        echo "</a>)</td>
      </tr>
    </table>
    <br>
    <table class=\"info\" width=\"269\" align=\"left\">
      <tr>
        <td>
          <h4 class=\"with-subline\">";
        // line 26
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "billing_address");
        echo "</h4>
          <strong>";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "b_firstname", [], "any", false, false, false, 27);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "b_lastname", [], "any", false, false, false, 27);
        echo "</strong><br>
          ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "b_address_2", [], "any", false, false, false, 28);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "b_address", [], "any", false, false, false, 28);
        echo "<br>
          ";
        // line 29
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "b_city", [], "any", false, false, false, 29);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "b_country", [], "any", false, false, false, 29);
        echo " <br>
          ";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "b_phone", [], "any", false, false, false, 30);
        echo " <br>
        </td>
      </tr>
    </table>

    <table class=\"info\" width=\"269\" align=\"left\">
      <tr>
        <td>
          <h4 class=\"with-subline\">";
        // line 38
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "shipping");
        echo " ";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "address");
        echo "</h4>
          <strong>";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "s_firstname", [], "any", false, false, false, 39);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "s_lastname", [], "any", false, false, false, 39);
        echo "</strong><br>
          ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "s_address_2", [], "any", false, false, false, 40);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "s_address", [], "any", false, false, false, 40);
        echo "<br>
          ";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "s_city", [], "any", false, false, false, 41);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "s_country", [], "any", false, false, false, 41);
        echo " <br>
          ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "s_phone", [], "any", false, false, false, 42);
        echo " <br>
        </td>
      </tr>
    </table>

  ";
        // line 47
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__ca172b818b7c13c5b1ead9f47055b009824ebcf919db3da104afafec86ccaadb";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 47,  161 => 42,  155 => 41,  149 => 40,  143 => 39,  137 => 38,  126 => 30,  120 => 29,  114 => 28,  108 => 27,  104 => 26,  92 => 19,  88 => 18,  82 => 15,  78 => 14,  70 => 11,  66 => 10,  60 => 7,  54 => 4,  51 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\", {\"title\": __(\"update_profile_notification_header\")} ) }}
    {% if user_data.firstname %} {{__(\"hello_name\", {\"[name]\" : user_data.firstname})}} {% else %} {{ __(\"hello\") }}, {% endif %}
    <br>
    {{ __(\"update_profile_notification_header\") }}
    <br>
    <br>
    <h4 class=\"with-subline\">{{ __(\"user_account_information\") }}</h4>
    <table border=\"0\" width=\"100%\" class=\"info\">
      <tr>
        <td><b>{{ __(\"login_url\") }}:</b></td>
        <td><a href=\"{{ login_url }}\">{{ login_url|puny_decode }}</a></td>
      </tr>
      <tr>
        <td><b>{{ __(\"email\") }}:</b></td>
        <td><a>{{ user_data.email }}</a></td>
      </tr>
      <tr>
        <td><b>{{ __(\"password\") }}:</b></td>
        <td> *********** (<a href=\"{{ forgot_pass_url }}\">{{ __(\"forgot_password_question\") }}</a>)</td>
      </tr>
    </table>
    <br>
    <table class=\"info\" width=\"269\" align=\"left\">
      <tr>
        <td>
          <h4 class=\"with-subline\">{{ __(\"billing_address\") }}</h4>
          <strong>{{ user_data.b_firstname }} {{ user_data.b_lastname }}</strong><br>
          {{ user_data.b_address_2 }} {{ user_data.b_address }}<br>
          {{ user_data.b_city }} {{ user_data.b_country }} <br>
          {{ user_data.b_phone }} <br>
        </td>
      </tr>
    </table>

    <table class=\"info\" width=\"269\" align=\"left\">
      <tr>
        <td>
          <h4 class=\"with-subline\">{{ __(\"shipping\") }} {{ __(\"address\") }}</h4>
          <strong>{{ user_data.s_firstname }} {{ user_data.s_lastname }}</strong><br>
          {{ user_data.s_address_2 }} {{ user_data.s_address }}<br>
          {{ user_data.s_city }} {{ user_data.s_country }} <br>
          {{ user_data.s_phone }} <br>
        </td>
      </tr>
    </table>

  {{ snippet(\"footer\") }}", "__string_template__ca172b818b7c13c5b1ead9f47055b009824ebcf919db3da104afafec86ccaadb", "");
    }
}
