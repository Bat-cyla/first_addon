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

/* __string_template__c4bbc39813feddd356392d1cb9868bfe4224d09fef46349281a5cf87bca12aaf */
class __TwigTemplate_d598c0efc2d01e35705028d860cecd4a1a0957b4e6df8d5b2ea038a7742102e2 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "update_profile_notification")]);
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
    <strong>
      ";
        // line 7
        if ((($context["api_access_status"] ?? null) == "enabled")) {
            // line 8
            echo "        <br>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "api_access_has_been_enabled");
            echo "<br>
      ";
        } elseif ((        // line 9
($context["api_access_status"] ?? null) == "disabled")) {
            // line 10
            echo "        <br>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "api_access_has_been_disabled");
            echo "<br>
      ";
        }
        // line 12
        echo "    </strong>
    <br>
    <h4 class=\"with-subline\">";
        // line 14
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "user_account_information");
        echo "</h4>
    <table border=\"0\" width=\"100%\" class=\"info\">
      <tr>
        <td><b>";
        // line 17
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "login_url");
        echo ":</b></td>
        <td><a href=\"";
        // line 18
        echo ($context["login_url"] ?? null);
        echo "\">";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["login_url"] ?? null));
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 21
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "email");
        echo ":</b></td>
        <td><a>";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["user_data"] ?? null), "email", [], "any", false, false, false, 22);
        echo "</a></td>
      </tr>
      <tr>
        <td><b>";
        // line 25
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "password");
        echo ":</b></td>
        <td> *********** (<a href=\"";
        // line 26
        echo ($context["forgot_pass_url"] ?? null);
        echo "\">";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "forgot_password_question");
        echo "</a>)</td>
      </tr>
    </table>
  ";
        // line 29
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__c4bbc39813feddd356392d1cb9868bfe4224d09fef46349281a5cf87bca12aaf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 29,  111 => 26,  107 => 25,  101 => 22,  97 => 21,  89 => 18,  85 => 17,  79 => 14,  75 => 12,  69 => 10,  67 => 9,  62 => 8,  60 => 7,  54 => 4,  51 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c4bbc39813feddd356392d1cb9868bfe4224d09fef46349281a5cf87bca12aaf", "");
    }
}
