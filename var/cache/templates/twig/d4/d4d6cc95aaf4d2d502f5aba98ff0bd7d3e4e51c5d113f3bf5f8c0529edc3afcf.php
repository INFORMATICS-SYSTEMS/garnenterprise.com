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

/* __string_template__d0f005ea4e3ab3a36e91f7c1ef60ad97f7ab30c2f1a0c7690112319f9efcb92c */
class __TwigTemplate_8c06036bd2e131f2a7afc492e5ef347f7698aa4f9cb2e4a3c34f59082cc39205 extends \Twig\Template
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
            // line 2
            echo "    ";
            $context["text_status"] = $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "approved");
        } else {
            // line 4
            echo "    ";
            $context["text_status"] = $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "disapproved");
        }
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header");
        echo "

  ";
        // line 9
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello");
        echo ",<br /><br />

";
        // line 11
        if ((($context["status"] ?? null) == "Y")) {
            // line 12
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "products_approval_status_approved");
            echo "<br />
";
        } else {
            // line 14
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "products_approval_status_disapproved");
            echo "<br />
";
        }
        // line 16
        echo "
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "    ";
            echo $this->getAttribute($context["loop"], "index", []);
            echo ") <a href=\"";
            echo $this->getAttribute($context["product"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["product"], "product", []);
            echo "</a><br />
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        // line 21
        if ((($context["status"] ?? null) == "Y")) {
            // line 22
            echo "    <br />";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_shoppers_can_order_products");
            echo "
";
        }
        // line 24
        if (($context["reason"] ?? null)) {
            // line 25
            echo "    <p>";
            echo ($context["reason"] ?? null);
            echo "</p>
";
        }
        // line 27
        echo "
";
        // line 28
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__d0f005ea4e3ab3a36e91f7c1ef60ad97f7ab30c2f1a0c7690112319f9efcb92c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 28,  127 => 27,  121 => 25,  119 => 24,  113 => 22,  111 => 21,  108 => 20,  87 => 18,  70 => 17,  67 => 16,  61 => 14,  55 => 12,  53 => 11,  48 => 9,  43 => 7,  40 => 6,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d0f005ea4e3ab3a36e91f7c1ef60ad97f7ab30c2f1a0c7690112319f9efcb92c", "");
    }
}
