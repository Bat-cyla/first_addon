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

/* __string_template__10ec63eda641a1b4c01b90da31efa5c0e6c63138ace706fc4b1039770a8ce4c8 */
class __TwigTemplate_4ac38fc520ee42963368a957c429d8da5dc625d713fb9f296d2e3572d8c35e7a extends \Twig\Template
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
        echo ($context["form_title"] ?? null);
    }

    public function getTemplateName()
    {
        return "__string_template__10ec63eda641a1b4c01b90da31efa5c0e6c63138ace706fc4b1039770a8ce4c8";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__10ec63eda641a1b4c01b90da31efa5c0e6c63138ace706fc4b1039770a8ce4c8", "");
    }
}
