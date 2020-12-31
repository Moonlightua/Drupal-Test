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

/* themes/contrib/glisseo/templates/field/field.html.twig */
class __TwigTemplate_eec40986f4750429b1d6d85566ad6b47bb72ba4a200a6f1ea6d65d3b0d872f44 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'label' => [$this, 'block_label'],
            'items' => [$this, 'block_items'],
            'item' => [$this, 'block_item'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 18, "block" => 29, "if" => 31, "for" => 47];
        $filters = ["merge" => 18, "escape" => 28];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
                ['merge', 'escape'],
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
        // line 18
        $context["bem_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_classes"] ?? null)), [0 => (((        // line 19
($context["label_display"] ?? null) == "inline")) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "--label-inline")) : (""))]);
        // line 23
        $context["title_classes"] = [0 => ($this->sandbox->ensureToStringAllowed(        // line 24
($context["bem_block"] ?? null)) . "__label"), 1 => ((        // line 25
($context["label_hidden"] ?? null)) ? ("visually-hidden") : (""))];
        // line 28
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["bem_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 29
        $this->displayBlock('field', $context, $blocks);
        // line 67
        echo "</div>
";
    }

    // line 29
    public function block_field($context, array $blocks = [])
    {
        // line 30
        echo "
    ";
        // line 31
        if ( !($context["label_hidden"] ?? null)) {
            // line 32
            echo "      <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">
        ";
            // line 33
            $this->displayBlock('label', $context, $blocks);
            // line 36
            echo "      </div>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('items', $context, $blocks);
        // line 65
        echo "
  ";
    }

    // line 33
    public function block_label($context, array $blocks = [])
    {
        // line 34
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "
        ";
    }

    // line 39
    public function block_items($context, array $blocks = [])
    {
        // line 40
        echo "      ";
        ob_start();
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        $context["content_attributes_not_empty"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "      ";
        if (($context["multiple"] ?? null)) {
            // line 42
            echo "        <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__items")], "method")), "html", null, true);
            echo ">
      ";
        } else {
            // line 44
            echo "        <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__value")], "method")), "html", null, true);
            echo ">
      ";
        }
        // line 46
        echo "
      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "        ";
            ob_start();
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
            $context["item_attributes_not_empty"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 49
            echo "        ";
            if ((($context["multiple"] ?? null) || ($context["item_attributes_not_empty"] ?? null))) {
                // line 50
                echo "          <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__item")], "method")), "html", null, true);
                echo ">
        ";
            }
            // line 53
            $this->displayBlock('item', $context, $blocks);
            // line 56
            echo "
        ";
            // line 57
            if ((($context["multiple"] ?? null) || ($context["item_attributes_not_empty"] ?? null))) {
                // line 58
                echo "          </div>
        ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
      ";
        // line 63
        echo "        </div>
    ";
    }

    // line 53
    public function block_item($context, array $blocks = [])
    {
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["item"] ?? null), "content", [])), "html", null, true);
    }

    public function getTemplateName()
    {
        return "themes/contrib/glisseo/templates/field/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 54,  205 => 53,  200 => 63,  197 => 61,  181 => 58,  179 => 57,  176 => 56,  174 => 53,  168 => 50,  165 => 49,  160 => 48,  143 => 47,  140 => 46,  134 => 44,  128 => 42,  125 => 41,  120 => 40,  117 => 39,  110 => 34,  107 => 33,  102 => 65,  100 => 39,  97 => 38,  93 => 36,  91 => 33,  86 => 32,  84 => 31,  81 => 30,  78 => 29,  73 => 67,  71 => 29,  66 => 28,  64 => 25,  63 => 24,  62 => 23,  60 => 19,  59 => 18,);
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
{%
  set bem_classes = bem_classes|merge([
    label_display == 'inline' ? bem_block ~ '--label-inline',
  ])
%}
{%
  set title_classes = [
    bem_block ~ '__label',
    label_hidden ? 'visually-hidden',
  ]
%}
<div{{ attributes.addClass(bem_classes) }}>
  {% block field %}

    {% if not label_hidden %}
      <div{{ title_attributes.addClass(title_classes) }}>
        {% block label %}
          {{ label }}
        {% endblock %}
      </div>
    {% endif %}

    {% block items %}
      {% set content_attributes_not_empty -%}{{ content_attributes }}{%- endset %}
      {% if (multiple) %}
        <div{{ content_attributes.addClass(bem_block ~ '__items') }}>
      {% else %}
        <div{{ content_attributes.addClass(bem_block ~ '__value') }}>
      {% endif %}

      {% for item in items %}
        {% set item_attributes_not_empty -%}{{ item.attributes }}{%- endset %}
        {% if multiple or item_attributes_not_empty %}
          <div{{ item.attributes.addClass(bem_block ~ '__item') }}>
        {% endif -%}

        {% block item %}
          {{- item.content -}}
        {% endblock %}

        {% if multiple or item_attributes_not_empty %}
          </div>
        {% endif -%}
      {% endfor %}

      {# for __items and __value #}
        </div>
    {% endblock %}

  {% endblock %}
</div>
", "themes/contrib/glisseo/templates/field/field.html.twig", "W:\\domains\\drupal8.localhost\\themes\\contrib\\glisseo\\templates\\field\\field.html.twig");
    }
}
