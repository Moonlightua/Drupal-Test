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

/* themes/contrib/glisseo/templates/content/block/block.html.twig */
class __TwigTemplate_0cd1700ece953f5f53825205784549ba8ffba7570a387040b653b32989eed26e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'block' => [$this, 'block_block'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["do" => 9, "block" => 11, "if" => 13];
        $filters = ["escape" => 10];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['do', 'block', 'if'],
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
        // line 9
        $this->getAttribute(($context["attributes"] ?? null), "removeAttribute", [0 => "id"], "method");
        // line 10
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["bem_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 11
        $this->displayBlock('block', $context, $blocks);
        // line 28
        echo "</div>
";
    }

    // line 11
    public function block_block($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
    ";
        // line 13
        if (($context["label"] ?? null)) {
            // line 14
            echo "      <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__title")], "method")), "html", null, true);
            echo ">
        ";
            // line 15
            $this->displayBlock('title', $context, $blocks);
            // line 18
            echo "      </div>
    ";
        }
        // line 20
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

    <div";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__content")], "method")), "html", null, true);
        echo ">
      ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "    </div>
  ";
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        // line 16
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "
        ";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        // line 24
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/glisseo/templates/content/block/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 24,  120 => 23,  113 => 16,  110 => 15,  105 => 26,  103 => 23,  99 => 22,  93 => 20,  89 => 18,  87 => 15,  82 => 14,  80 => 13,  75 => 12,  72 => 11,  67 => 28,  65 => 11,  60 => 10,  58 => 9,);
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
 * Theme override to display a block.
 *
 * @see template_preprocess_block()
 */
#}
{% do attributes.removeAttribute('id') %}
<div{{ attributes.addClass(bem_classes) }}>
  {% block block %}
    {{ title_prefix }}
    {% if label %}
      <div{{ title_attributes.addClass(bem_block ~ '__title') }}>
        {% block title %}
          {{ label }}
        {% endblock title %}
      </div>
    {% endif %}
    {{ title_suffix }}

    <div{{ content_attributes.addClass(bem_block ~ '__content') }}>
      {% block content %}
        {{ content }}
      {% endblock content %}
    </div>
  {% endblock block %}
</div>
", "themes/contrib/glisseo/templates/content/block/block.html.twig", "W:\\domains\\drupal8.localhost\\themes\\contrib\\glisseo\\templates\\content\\block\\block.html.twig");
    }
}
