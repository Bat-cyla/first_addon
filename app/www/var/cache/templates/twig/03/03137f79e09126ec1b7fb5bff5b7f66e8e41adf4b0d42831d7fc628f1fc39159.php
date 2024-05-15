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

/* __string_template__369f6160afc6184a6885818bdd52553acdaf1ede220735bdea317aec0b38eb01 */
class __TwigTemplate_55ee9534c4dfaf3436d5e0ac4514db7fa357301dab30295de3cd3d90170f0464 extends \Twig\Template
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
        echo ($context["company_name"] ?? null);
        echo ": ";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "product_reviews.text_new_post_notification");
    }

    public function getTemplateName()
    {
        return "__string_template__369f6160afc6184a6885818bdd52553acdaf1ede220735bdea317aec0b38eb01";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__369f6160afc6184a6885818bdd52553acdaf1ede220735bdea317aec0b38eb01", "");
    }
}
