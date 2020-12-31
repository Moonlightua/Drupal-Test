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

/* themes/custom/MyLifeBeLike/templates/field/field--paragraph--field-title.html.twig */
class __TwigTemplate_9bb8c2a59df621c858f35cba332e6ad302cbee57f1f64fa01907295567348d63 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 19];
        $filters = ["escape" => 24];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
        echo "

";
        // line 19
        $context["paragraph"] = $this->getAttribute(($context["element"] ?? null), "#object", [], "array");
        // line 20
        $context["attribute"] = $this->getAttribute(($context["element"] ?? null), "#bundle", [], "array");
        // line 21
        $context["classes"] = ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : ([0 => "paragraph-title", 1 => ($context["attribute"] ?? null)]));
        // line 22
        $context["title_wrapper"] = $this->getAttribute(($context["paragraph"] ?? null), "getBehaviorSetting", [0 => "site_paragraphs_paragraph_title", 1 => "title_wrapper", 2 => "h2"], "method");
        // line 23
        echo "
<";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_wrapper"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, [], "array"), "content", [])), "html", null, true);
        echo "
</";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_wrapper"] ?? null)), "html", null, true);
        echo ">


";
    }

    public function getTemplateName()
    {
        return "themes/custom/MyLifeBeLike/templates/field/field--paragraph--field-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  75 => 25,  70 => 24,  67 => 23,  65 => 22,  63 => 21,  61 => 20,  59 => 19,  55 => 17,);
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
 * Default theme implementation to present field.
 *
 * Available variables:
 * - attributes: HTML attributes for containing element.
 * - classes: An array of classes for main wrapper.
 * - bem_block: The BEM block class.
 * - entity_type: The name of entity type, which field belongs to.
 * - bundle: The entity bundle name for the field.
 * - view_mode: The view mode used to render field.
 *
 * @see glisseo_preprocess_field()
 */
#}


{% set paragraph = element['#object'] %}
{% set attribute = element['#bundle'] %}
{% set classes = classes ?: [ 'paragraph-title', attribute] %}
{% set title_wrapper = paragraph.getBehaviorSetting('site_paragraphs_paragraph_title', 'title_wrapper', 'h2') %}

<{{ title_wrapper }}{{ attributes.addClass(classes) }}>
{{ items[0].content }}
</{{ title_wrapper }}>


", "themes/custom/MyLifeBeLike/templates/field/field--paragraph--field-title.html.twig", "W:\\domains\\drupal8.localhost\\themes\\custom\\MyLifeBeLike\\templates\\field\\field--paragraph--field-title.html.twig");
    }
}
