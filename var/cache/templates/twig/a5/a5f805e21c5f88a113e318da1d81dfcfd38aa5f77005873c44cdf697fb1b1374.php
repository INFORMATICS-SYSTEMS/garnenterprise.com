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

/* __string_template__7496e30c534e10d1533c061aca3f42c5e980684f240ac14d4be5d30d18654aa3 */
class __TwigTemplate_8d70f9195fcc567e267c0b57733e8f53f43b2dbd7d0ab411434b726d373670d4 extends \Twig\Template
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
        echo "<table width=\"600\" style=\" font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" rel=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"50%\" style=\"padding: 0px; padding-bottom: 10px; padding-right: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                ";
        // line 9
        if ($this->getAttribute(($context["pickup_point"] ?? null), "is_selected", [])) {
            // line 10
            echo "                ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "pickup_point");
            echo "
                ";
        } else {
            // line 12
            echo "                ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "ship_to");
            echo "
                ";
        }
        // line 14
        echo "            </td>
            <td width=\"50%\" style=\"padding: 0px; padding-bottom: 10px; padding-left: 40px; -webkit-print-color-adjust: exact; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 17
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "order_date");
        echo "</span>  ";
        echo $this->getAttribute(($context["o"] ?? null), "timestamp", []);
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 20
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "payment");
        echo "</span>  ";
        echo $this->getAttribute(($context["p"] ?? null), "payment", []);
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 23
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "shipping");
        echo "</span>  ";
        echo $this->getAttribute(($context["o"] ?? null), "shippings_method", []);
        echo "
                </p>
                ";
        // line 25
        if ($this->getAttribute(($context["o"] ?? null), "tracking_number", [])) {
            // line 26
            echo "                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: 600; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 27
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "tracking_number");
            echo "</span>  ";
            echo $this->getAttribute(($context["o"] ?? null), "tracking_number", []);
            echo "
                </p>
                ";
        }
        // line 30
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"padding: 0px;\">
        ";
        // line 38
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "products_table");
        echo "
    </td>
</tr>
<tr>
    <td style=\"padding: 0px; border-top: 2px solid #f5f5f5; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">
                ";
        // line 47
        if ($this->getAttribute(($context["o"] ?? null), "notes", [])) {
            // line 48
            echo "                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "customer_notes");
            echo "</h2>
                ";
            // line 49
            echo $this->getAttribute(($context["o"] ?? null), "notes", []);
            echo "
                                ";
        }
        // line 51
        echo "            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; color: #444;\">
                <tbody>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 56
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "subtotal");
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 58
        echo $this->getAttribute(($context["o"] ?? null), "display_subtotal", []);
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">";
        // line 62
        echo $this->getAttribute(($context["o"] ?? null), "tax_name", []);
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 64
        echo $this->getAttribute(($context["o"] ?? null), "tax_total", []);
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 68
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "shipping");
        echo "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 70
        echo $this->getAttribute(($context["o"] ?? null), "display_shipping_cost", []);
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\" align=\"left\">";
        // line 74
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "payment_surcharge");
        echo "
                        </td>
                        <td style=\"font-family: Helvetica, Arial, sans-serif;\" align=\"right\">";
        // line 76
        echo $this->getAttribute(($context["o"] ?? null), "payment_surcharge", []);
        echo "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 80
        if ($this->getAttribute(($context["o"] ?? null), "coupon_code", [])) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "coupon");
            echo " </div> ";
        }
        // line 81
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 82
        if ($this->getAttribute(($context["o"] ?? null), "coupon_code", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "coupon_code", []);
            echo " ";
        }
        // line 83
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 86
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "discount", [])) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "including_discount");
            echo " </div> ";
        }
        // line 87
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 88
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "discount", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "discount", []);
            echo " ";
        }
        // line 89
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 92
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "subtotal_discount", [])) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "order_discount");
            echo " </div> ";
        }
        // line 93
        echo "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 94
        if ($this->getAttribute($this->getAttribute(($context["o"] ?? null), "raw", []), "subtotal_discount", [])) {
            echo " ";
            echo $this->getAttribute(($context["o"] ?? null), "subtotal_discount", []);
            echo " ";
        }
        // line 95
        echo "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-size: 22px; font-weight: 600; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 98
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "total");
        echo "
                        </td>
                        <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 100
        echo $this->getAttribute(($context["o"] ?? null), "total", []);
        echo "
                        </td>
                    </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__7496e30c534e10d1533c061aca3f42c5e980684f240ac14d4be5d30d18654aa3";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 100,  244 => 98,  239 => 95,  233 => 94,  230 => 93,  224 => 92,  219 => 89,  213 => 88,  210 => 87,  204 => 86,  199 => 83,  193 => 82,  190 => 81,  184 => 80,  177 => 76,  172 => 74,  165 => 70,  160 => 68,  153 => 64,  148 => 62,  141 => 58,  136 => 56,  129 => 51,  124 => 49,  119 => 48,  117 => 47,  105 => 38,  95 => 30,  87 => 27,  84 => 26,  82 => 25,  75 => 23,  67 => 20,  59 => 17,  54 => 14,  48 => 12,  42 => 10,  40 => 9,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7496e30c534e10d1533c061aca3f42c5e980684f240ac14d4be5d30d18654aa3", "");
    }
}
