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

/* __string_template__5353e04272135bb2d35fba0e16f08cea3ca0c9c4d6792e54723b5bb2801f9c6c */
class __TwigTemplate_0ce254a1540685167980dcb2eda74d987ae9377885dc3a6408c4e0a247f79091 extends \Twig\Template
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
        $context["parts"] = [0 => twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "city", [], "any", false, false, false, 1)];
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "state_descr", [], "any", false, false, false, 2)) {
            // line 3
            echo "    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
            $context["parts"] = twig_array_merge(($context["parts"] ?? null), [0 => twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "state_descr", [], "any", false, false, false, 3)]);
            echo "</p>
";
        }
        // line 5
        echo "
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 6
        echo twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "address", [], "any", false, false, false, 6);
        echo "</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 7
        echo twig_join_filter(($context["parts"] ?? null), ", ");
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "zipcode", [], "any", false, false, false, 7);
        echo "</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "country_descr", [], "any", false, false, false, 8);
        echo " </p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\"><span dir=\"ltr\">";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "phone", [], "any", false, false, false, 9);
        echo " </span></p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "users_department", [], "any", false, false, false, 10);
        echo " </p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "website", [], "any", false, false, false, 11);
        echo " </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__5353e04272135bb2d35fba0e16f08cea3ca0c9c4d6792e54723b5bb2801f9c6c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  68 => 10,  64 => 9,  60 => 8,  54 => 7,  50 => 6,  47 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set parts = [c.city] %}
{% if c.state_descr %}
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">{% set parts = parts|merge([c.state_descr]) %}</p>
{% endif %}

<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">{{ c.address }}</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">{{ parts|join(', ') }} {{ c.zipcode }}</p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">{{ c.country_descr }} </p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\"><span dir=\"ltr\">{{ c.phone }} </span></p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">{{ c.users_department }} </p>
<p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">{{ c.website }} </p>
", "__string_template__5353e04272135bb2d35fba0e16f08cea3ca0c9c4d6792e54723b5bb2801f9c6c", "");
    }
}
