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

/* core/themes/stable/templates/admin/image-scale-summary.html.twig */
class __TwigTemplate_4a2fead474a96161a0f4252643bbcad0668539624d7845380b3872fb8ba3505b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 17, "trans" => 21];
        $filters = ["escape" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 17
        if (($this->getAttribute(($context["data"] ?? null), "width", []) && $this->getAttribute(($context["data"] ?? null), "height", []))) {
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "width", [])), "html", null, true);
            echo "×";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["data"] ?? null), "height", [])), "html", null, true);
        } else {
            // line 20
            if ($this->getAttribute(($context["data"] ?? null), "width", [])) {
                // line 21
                echo "    ";
                echo t("width @data.width", array("@data.width" => $this->getAttribute(                // line 22
($context["data"] ?? null), "width", []), ));
                // line 24
                echo "  ";
            } elseif ($this->getAttribute(($context["data"] ?? null), "height", [])) {
                // line 25
                echo "    ";
                echo t("height @data.height", array("@data.height" => $this->getAttribute(                // line 26
($context["data"] ?? null), "height", []), ));
                // line 28
                echo "  ";
            }
        }
        // line 30
        echo "
";
        // line 31
        if ($this->getAttribute(($context["data"] ?? null), "upscale", [])) {
            // line 32
            echo "  ";
            echo t("(upscaling allowed)", array());
        }
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/image-scale-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  82 => 31,  79 => 30,  75 => 28,  73 => 26,  71 => 25,  68 => 24,  66 => 22,  64 => 21,  62 => 20,  57 => 18,  55 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a summary of an image scale effect.
 *
 * Available variables:
 * - data: The current configuration for this resize effect, including:
 *   - width: The width of the resized image.
 *   - height: The height of the resized image.
 *   - upscale: If images larger than their original size can scale.
 * - effect: The effect information, including:
 *   - id: The effect identifier.
 *   - label: The effect name.
 *   - description: The effect description.
 */
#}
{% if data.width and data.height -%}
  {{ data.width }}×{{ data.height }}
{%- else -%}
  {% if data.width %}
    {% trans %}
      width {{ data.width }}
    {% endtrans %}
  {% elseif data.height %}
    {% trans %}
      height {{ data.height }}
    {% endtrans %}
  {% endif %}
{%- endif %}

{% if data.upscale %}
  {% trans %}
    (upscaling allowed)
  {% endtrans %}
{% endif %}
", "core/themes/stable/templates/admin/image-scale-summary.html.twig", "W:\\domains\\drupal8.localhost\\core\\themes\\stable\\templates\\admin\\image-scale-summary.html.twig");
    }
}
