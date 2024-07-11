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

/* __string_template__c97037893fc15e66145c0f93346d257590e22016a690d36134456aab35d20c3c */
class __TwigTemplate_24acebd42159d8824bdb8b23bc8de2262201357bebb793aec881d2d8cfa11fee extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "send_via", [], "any", false, false, false, 1) == "P")) {
            // line 2
            echo "<p>
    ";
            // line 3
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "gift_cert_from");
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "sender", [], "any", false, false, false, 3);
            echo "
</p>
<p>
    ";
            // line 6
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "gift_cert_to");
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "recipient", [], "any", false, false, false, 6);
            echo "
</p>
<p>
    ";
            // line 9
            echo twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "address", [], "any", false, false, false, 9);
            echo "<br />
    ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "address_2", [], "any", false, false, false, 10)) {
                // line 11
                echo "        ";
                echo twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "address_2", [], "any", false, false, false, 11);
                echo "<br />
    ";
            }
            // line 13
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "phone", [], "any", false, false, false, 13)) {
                // line 14
                echo "        <span dir=\"ltr\">";
                echo twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "phone", [], "any", false, false, false, 14);
                echo "</span><br />
    ";
            }
            // line 16
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "city", [], "any", false, false, false, 16);
            echo ",&nbsp;";
            echo twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "descr_country", [], "any", false, false, false, 16);
            echo ",&nbsp;";
            echo twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "descr_state", [], "any", false, false, false, 16);
            echo "<br />
    ";
            // line 17
            echo twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "zipcode", [], "any", false, false, false, 17);
            echo "
</p>
";
        }
        // line 20
        echo "
";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "message", [], "any", false, false, false, 21)) {
            // line 22
            echo "<div>";
            echo twig_get_attribute($this->env, $this->source, ($context["gift_certificate"] ?? null), "message", [], "any", false, false, false, 22);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__c97037893fc15e66145c0f93346d257590e22016a690d36134456aab35d20c3c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 22,  97 => 21,  94 => 20,  88 => 17,  79 => 16,  73 => 14,  70 => 13,  64 => 11,  62 => 10,  58 => 9,  50 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if gift_certificate.send_via == 'P' %}
<p>
    {{ __(\"gift_cert_from\") }}: {{ gift_certificate.sender }}
</p>
<p>
    {{ __(\"gift_cert_to\") }}: {{ gift_certificate.recipient }}
</p>
<p>
    {{ gift_certificate.address }}<br />
    {% if gift_certificate.address_2 %}
        {{ gift_certificate.address_2 }}<br />
    {% endif %}
    {% if gift_certificate.phone %}
        <span dir=\"ltr\">{{ gift_certificate.phone }}</span><br />
    {% endif %}
    {{ gift_certificate.city }},&nbsp;{{ gift_certificate.descr_country }},&nbsp;{{ gift_certificate.descr_state }}<br />
    {{ gift_certificate.zipcode }}
</p>
{% endif %}

{% if gift_certificate.message %}
<div>{{ gift_certificate.message }}</div>
{% endif %}", "__string_template__c97037893fc15e66145c0f93346d257590e22016a690d36134456aab35d20c3c", "");
    }
}
