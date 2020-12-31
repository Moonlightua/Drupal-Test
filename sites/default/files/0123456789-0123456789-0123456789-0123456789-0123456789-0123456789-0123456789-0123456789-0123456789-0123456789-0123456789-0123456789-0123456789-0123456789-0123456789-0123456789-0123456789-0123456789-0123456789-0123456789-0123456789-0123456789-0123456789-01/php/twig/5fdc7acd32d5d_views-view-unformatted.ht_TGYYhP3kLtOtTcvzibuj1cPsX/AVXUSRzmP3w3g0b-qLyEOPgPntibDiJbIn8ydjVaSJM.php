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

/* themes/contrib/glisseo/templates/views/views-view-unformatted.html.twig */
class __TwigTemplate_99f4cf1e8b612ecd6d2a1b79eec59428eb349dd806e8b3859d4a8c5ee9ab29f6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'rows' => [$this, 'block_rows'],
            'row' => [$this, 'block_row'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 3, "block" => 6, "for" => 13];
        $filters = ["clean_class" => 1, "escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'for'],
                ['clean_class', 'escape'],
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
        // line 1
        $context["bem_block"] = ((($context["bem_block"] ?? null)) ? (($context["bem_block"] ?? null)) : (\Drupal\Component\Utility\Html::getClass(((("view-" . $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["view"] ?? null), "storage", []), "id", [], "method"))) . "-") . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["view"] ?? null), "current_display", []))))));
        // line 2
        $context["bem_element"] = ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__row");
        // line 3
        if (($context["title"] ?? null)) {
            // line 4
            echo "<div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__rows\">
  <h3 class=\"";
            // line 5
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__rows-title\">
    ";
            // line 6
            $this->displayBlock('title', $context, $blocks);
            // line 9
            echo "  </h3>
  ";
        }
        // line 11
        echo "
  ";
        // line 12
        $this->displayBlock('rows', $context, $blocks);
        // line 27
        echo "
  ";
        // line 28
        if (($context["title"] ?? null)) {
            // line 29
            echo "</div>
";
        }
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        // line 7
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "
    ";
    }

    // line 12
    public function block_rows($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 14
            echo "      ";
            $this->displayBlock('row', $context, $blocks);
            // line 25
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  ";
    }

    // line 14
    public function block_row($context, array $blocks = [])
    {
        // line 15
        echo "        ";
        $context["row_classes"] = [0 => ((        // line 16
($context["default_row_class"] ?? null)) ? (($context["bem_element"] ?? null)) : (""))];
        // line 18
        echo "        
        <div";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["row"] ?? null), "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null)], "method")), "html", null, true);
        echo ">
          ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "        </div>
      ";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        // line 21
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["row"] ?? null), "content", [])), "html", null, true);
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/glisseo/templates/views/views-view-unformatted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 21,  169 => 20,  164 => 23,  162 => 20,  158 => 19,  155 => 18,  153 => 16,  151 => 15,  148 => 14,  144 => 26,  130 => 25,  127 => 14,  109 => 13,  106 => 12,  99 => 7,  96 => 6,  90 => 29,  88 => 28,  85 => 27,  83 => 12,  80 => 11,  76 => 9,  74 => 6,  70 => 5,  65 => 4,  63 => 3,  61 => 2,  59 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set bem_block = bem_block ?: ('view-' ~ view.storage.id() ~ '-' ~ view.current_display)|clean_class %}
{% set bem_element = bem_block ~ '__row' %}
{% if title %}
<div class=\"{{ bem_block }}__rows\">
  <h3 class=\"{{ bem_block }}__rows-title\">
    {% block title %}
      {{ title }}
    {% endblock %}
  </h3>
  {% endif %}

  {% block rows %}
    {% for row in rows %}
      {% block row %}
        {% set row_classes = [
          default_row_class ? bem_element,
        ] %}
        
        <div{{ row.attributes.addClass(row_classes) }}>
          {% block content %}
            {{ row.content }}
          {% endblock %}
        </div>
      {% endblock %}
    {% endfor %}
  {% endblock %}

  {% if title %}
</div>
{% endif %}
", "themes/contrib/glisseo/templates/views/views-view-unformatted.html.twig", "W:\\domains\\drupal8.localhost\\themes\\contrib\\glisseo\\templates\\views\\views-view-unformatted.html.twig");
    }
}
