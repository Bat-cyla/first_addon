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

/* __string_template__64156e4c3e858b4931a9999bbefda90236b4e077085679a849d0e837bb0086c6 */
class __TwigTemplate_c63374c2b1e7b1dcf40d25289c48b85744813e50d5e24ba80bcca7c7fbc6a2cd extends \Twig\Template
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
        echo "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "ship_to");
        echo "</h2>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_firstname", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <strong>";
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_firstname", [], "any", false, false, false, 4);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_lastname", [], "any", false, false, false, 4);
            echo "</strong>
        ";
        } else {
            // line 6
            echo "            <strong>";
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "firstname", [], "any", false, false, false, 6);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "lastname", [], "any", false, false, false, 6);
            echo "</strong>
        ";
        }
        // line 8
        echo "    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_address", [], "any", false, false, false, 10);
        echo " <br>";
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_address_2", [], "any", false, false, false, 10);
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_city", [], "any", false, false, false, 13);
        echo ", ";
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_state_descr", [], "any", false, false, false, 13);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_zipcode", [], "any", false, false, false, 13);
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_country_descr", [], "any", false, false, false, 16);
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_phone", [], "any", false, false, false, 19)) {
            // line 20
            echo "            <span dir=\"ltr\">";
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "s_phone", [], "any", false, false, false, 20);
            echo "</span>
        ";
        } else {
            // line 22
            echo "            <span dir=\"ltr\">";
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "phone", [], "any", false, false, false, 22);
            echo "</span>
        ";
        }
        // line 24
        echo "    </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__64156e4c3e858b4931a9999bbefda90236b4e077085679a849d0e837bb0086c6";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 24,  97 => 22,  91 => 20,  89 => 19,  83 => 16,  73 => 13,  65 => 10,  61 => 8,  53 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">{{__(\"ship_to\")}}</h2>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        {% if u.s_firstname %}
            <strong>{{u.s_firstname}} {{u.s_lastname}}</strong>
        {% else %}
            <strong>{{u.firstname}} {{u.lastname}}</strong>
        {% endif %}
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        {{u.s_address}} <br>{{u.s_address_2}}
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        {{u.s_city}}, {{u.s_state_descr}} {{u.s_zipcode}}
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        {{u.s_country_descr}}
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        {% if u.s_phone %}
            <span dir=\"ltr\">{{u.s_phone}}</span>
        {% else %}
            <span dir=\"ltr\">{{u.phone}}</span>
        {% endif %}
    </p>
", "__string_template__64156e4c3e858b4931a9999bbefda90236b4e077085679a849d0e837bb0086c6", "");
    }
}
