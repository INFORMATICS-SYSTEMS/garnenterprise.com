<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__d02f734fde3826bc671aa5fd3dda0e5c5ed1075065b322e2fd6748f864f755a8 */
class __TwigTemplate_250d4f0d07b7143653e8e5905753fdc234902e72869d8f73fa13bb261330f2eb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "vendor_data_premoderation.notification.approved.message", [0 =>         // line 2
($context["products_count"] ?? null), "[product]" =>         // line 3
($context["product_name"] ?? null)]);
    }

    public function getTemplateName()
    {
        return "__string_template__d02f734fde3826bc671aa5fd3dda0e5c5ed1075065b322e2fd6748f864f755a8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d02f734fde3826bc671aa5fd3dda0e5c5ed1075065b322e2fd6748f864f755a8", "");
    }
}
