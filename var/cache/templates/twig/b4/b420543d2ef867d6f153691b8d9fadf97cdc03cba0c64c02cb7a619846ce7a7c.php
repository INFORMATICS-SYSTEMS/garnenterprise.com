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

/* __string_template__ffaae7f56e2fa49622cd2875ec61c8868f609d069b9c34129bc4fe64a6adfa03 */
class __TwigTemplate_321677f115898d9248913481f722bdce9f7ee8621da9b548fa03006fc50d27d1 extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header", ["title" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "change_order_status_o_subj", ["[order]" => $this->getAttribute(($context["order_info"] ?? null), "order_id", [])])]);
        echo "
    ";
        // line 2
        if ($this->getAttribute(($context["order_info"] ?? null), "firstname", [])) {
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello_name", ["[name]" => $this->getAttribute(($context["order_info"] ?? null), "firstname", [])]);
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello");
            echo ",  ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "customer");
            echo " ";
        }
        // line 3
        echo "    <br />
    ";
        // line 4
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "change_order_status_default_text", ["[status]" => $this->getAttribute(($context["order_status"] ?? null), "description", [])]);
        echo "
    <br />
    <br /> ";
        // line 6
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->includeDocFunction($this->env, $context, "order.summary", $this->getAttribute(($context["order_info"] ?? null), "order_id", []));
        echo "
  ";
        // line 7
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__ffaae7f56e2fa49622cd2875ec61c8868f609d069b9c34129bc4fe64a6adfa03";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  53 => 6,  48 => 4,  45 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ffaae7f56e2fa49622cd2875ec61c8868f609d069b9c34129bc4fe64a6adfa03", "");
    }
}
