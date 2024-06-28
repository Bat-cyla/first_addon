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

/* __string_template__3082038f64bc04e4cfe38563c6dd67d783e98c66002fd3938c9fcc456c59a311 */
class __TwigTemplate_b4c098755c0581c186fd6f9f8d6d22ba2f2efee25cd86c1ab6f402124b01ee31 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "new_profile_notification")]);
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


  ";
        // line 24
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__3082038f64bc04e4cfe38563c6dd67d783e98c66002fd3938c9fcc456c59a311";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  92 => 19,  88 => 18,  82 => 15,  78 => 14,  70 => 11,  66 => 10,  60 => 7,  54 => 4,  51 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\", {\"title\": __(\"new_profile_notification\")} ) }}
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


  {{ snippet(\"footer\") }}", "__string_template__3082038f64bc04e4cfe38563c6dd67d783e98c66002fd3938c9fcc456c59a311", "");
    }
}
