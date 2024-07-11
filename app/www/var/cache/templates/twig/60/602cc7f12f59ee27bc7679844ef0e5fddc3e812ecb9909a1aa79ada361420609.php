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

/* __string_template__49be86d84f114a0d8f4db96d10f176b3db673dd07d067ce898e7909296861d67 */
class __TwigTemplate_a26921962b0d581bdf3180dedec8b4a0818254a5feb777cba94116333c47ce29 extends \Twig\Template
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
        echo "
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["products_table"] ?? null), "rows", [], "any", false, false, false, 2)) {
            // line 3
            echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" style=\"background-color: #dddddd; -webkit-print-color-adjust: exact;\">
<thead>
    <tr>

        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["products_table"] ?? null), "headers", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 8
                echo "            <th style=\"background-color: #eeeeee; padding: 6px 10px; white-space: nowrap; font-size: 12px; font-family: Arial;\">";
                echo $context["header"];
                echo "</th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </tr>
</thead>
<tbody>
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["products_table"] ?? null), "rows", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 14
                echo "        <tr style=\"padding: 10px; background-color: #ffffff; font-size: 12px; font-family: Arial; border: 1px solid #eeeeee; text-align: center;\">
            ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 16
                    echo "                <td style=\"border: 1px solid #eeeeee; padding:5px; text-align:left;\">
                ";
                    // line 17
                    echo $context["column"];
                    echo "
                </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "</tbody>
</table>";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__49be86d84f114a0d8f4db96d10f176b3db673dd07d067ce898e7909296861d67";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  89 => 20,  80 => 17,  77 => 16,  73 => 15,  70 => 14,  66 => 13,  61 => 10,  52 => 8,  48 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if products_table.rows %}
<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" style=\"background-color: #dddddd; -webkit-print-color-adjust: exact;\">
<thead>
    <tr>

        {% for  header in products_table.headers %}
            <th style=\"background-color: #eeeeee; padding: 6px 10px; white-space: nowrap; font-size: 12px; font-family: Arial;\">{{ header }}</th>
        {% endfor %}
    </tr>
</thead>
<tbody>
    {% for  row in products_table.rows %}
        <tr style=\"padding: 10px; background-color: #ffffff; font-size: 12px; font-family: Arial; border: 1px solid #eeeeee; text-align: center;\">
            {% for  column in row %}
                <td style=\"border: 1px solid #eeeeee; padding:5px; text-align:left;\">
                {{ column }}
                </td>
            {% endfor %}
        </tr>
    {% endfor %}
</tbody>
</table>{% endif %}", "__string_template__49be86d84f114a0d8f4db96d10f176b3db673dd07d067ce898e7909296861d67", "");
    }
}
