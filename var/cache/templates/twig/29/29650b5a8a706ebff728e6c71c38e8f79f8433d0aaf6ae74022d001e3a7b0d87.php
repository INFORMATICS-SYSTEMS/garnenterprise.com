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

/* __string_template__562244d252ed458e0658ede9ef7811ec976874f0c14c6353ea2d67d301e4d933 */
class __TwigTemplate_b6f2414687c4ddf3903000bedce5944ff99a55e29aeacfdb8e2ef0d33643c78e extends \Twig\Template
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
        if ((($context["status"] ?? null) == "Y")) {
            echo "    ";
            $context["text_status"] = $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "approved");
        } else {
            echo "    ";
            $context["text_status"] = $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "disapproved");
        }
        echo ($context["company_name"] ?? null);
        echo ": ";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "products_approval_status_changed", ["[status]" => ($context["text_status"] ?? null)]);
    }

    public function getTemplateName()
    {
        return "__string_template__562244d252ed458e0658ede9ef7811ec976874f0c14c6353ea2d67d301e4d933";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__562244d252ed458e0658ede9ef7811ec976874f0c14c6353ea2d67d301e4d933", "");
    }
}
