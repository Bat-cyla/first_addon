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

/* __string_template__77c51c12057167c6ea6787003ff66e39e0557540a781c8fd16447a4d0e9a0621 */
class __TwigTemplate_8df1937f6f20c2a5bee00ae4c086b27a0c058aa2b1da6e8c9b75a4b5aaa9f16c extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header");
        echo "

  <table>
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
        foreach ($context['_seq'] as $context["element_id"] => $context["element"]) {
            // line 5
            if ((twig_get_attribute($this->env, $this->source, $context["element"], "element_type", [], "any", false, false, false, 5) == twig_constant("FORM_SEPARATOR"))) {
                // line 6
                echo "<tr>
    <td colspan=\"2\"><hr width=\"100%\" /></td>
</tr>
";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 9
$context["element"], "element_type", [], "any", false, false, false, 9) == twig_constant("FORM_HEADER"))) {
                // line 10
                echo "<tr>
    <td colspan=\"2\"><b>";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["element"], "description", [], "any", false, false, false, 11);
                echo "</b></td>
</tr>
";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 13
$context["element"], "element_type", [], "any", false, false, false, 13) != twig_constant("FORM_FILE"))) {
                // line 14
                echo "<tr>
    <td>";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["element"], "description", [], "any", false, false, false, 15);
                echo ":&nbsp;</td>
    <td>
        ";
                // line 17
                $context["value"] = (($__internal_compile_0 = ($context["form_values"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["element_id"]] ?? null) : null);
                // line 18
                echo "
        ";
                // line 19
                if (((twig_get_attribute($this->env, $this->source, $context["element"], "element_type", [], "any", false, false, false, 19) == twig_constant("FORM_SELECT")) || (twig_get_attribute($this->env, $this->source, $context["element"], "element_type", [], "any", false, false, false, 19) == twig_constant("FORM_RADIO")))) {
                    // line 20
                    echo "            ";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["element"], "variants", [], "any", false, false, false, 20)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["value"] ?? null)] ?? null) : null), "description", [], "any", false, false, false, 20);
                    echo "
        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 21
$context["element"], "element_type", [], "any", false, false, false, 21) == twig_constant("FORM_CHECKBOX"))) {
                    // line 22
                    echo "            ";
                    if ((($context["value"] ?? null) == "Y")) {
                        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "yes");
                    } else {
                        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "no");
                    }
                    // line 23
                    echo "        ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "element_type", [], "any", false, false, false, 23) == twig_constant("FORM_TEXTAREA"))) {
                    // line 24
                    echo "            ";
                    echo twig_nl2br(twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true));
                    echo "
        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 25
$context["element"], "element_type", [], "any", false, false, false, 25) == twig_constant("FORM_DATE"))) {
                    // line 26
                    echo "            ";
                    echo $this->extensions['Tygh\Twig\TwigCoreExtension']->dateFilter(($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "Appearance", [], "any", false, false, false, 26), "date_format", [], "any", false, false, false, 26));
                    echo "
        ";
                } else {
                    // line 28
                    echo "            ";
                    echo ($context["value"] ?? null);
                    echo "
        ";
                }
                // line 30
                echo "    </td>
</tr>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['element_id'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>

";
        // line 36
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__77c51c12057167c6ea6787003ff66e39e0557540a781c8fd16447a4d0e9a0621";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  126 => 34,  117 => 30,  111 => 28,  105 => 26,  103 => 25,  98 => 24,  95 => 23,  88 => 22,  86 => 21,  81 => 20,  79 => 19,  76 => 18,  74 => 17,  69 => 15,  66 => 14,  64 => 13,  59 => 11,  56 => 10,  54 => 9,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__77c51c12057167c6ea6787003ff66e39e0557540a781c8fd16447a4d0e9a0621", "");
    }
}
