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

/* themes/custom/MyLifeBeLike/templates/content/node/blog-article/field--node--field-comments--article.html.twig */
class __TwigTemplate_466c4e2584f69e402db82c2ba1d7128df392f47c82afa25e4beea64cd34a6577 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 8];
        $filters = ["clean_class" => 1, "replace" => 1, "escape" => 7, "t" => 10];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'replace', 'escape', 't'],
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
        $context["bem_block"] = ((\Drupal\Component\Utility\Html::getClass(((($this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null)) . "-") . $this->sandbox->ensureToStringAllowed(($context["bundle"] ?? null))) . (((($context["view_mode"] ?? null) != "default")) ? (("-" . $this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)))) : ("")))) . "__") . \Drupal\Component\Utility\Html::getClass(twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["field_name"] ?? null)), [($this->sandbox->ensureToStringAllowed(($context["bundle"] ?? null)) . "__") => ""])));
        // line 2
        $context["bem_element_prefix"] = ((($context["bem_element_prefix"] ?? null)) ? (($context["bem_element_prefix"] ?? null)) : (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "")));
        // line 3
        $context["classes"] = ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : ([0 =>         // line 4
($context["bem_block"] ?? null)]));
        // line 6
        echo "<a id=\"comments\"></a>
<section";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["bem_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 8
        if ((($context["comments"] ?? null) &&  !($context["label_hidden"] ?? null))) {
            // line 9
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
    <h2";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_element_prefix"] ?? null)) . "__title")], "method")), "html", null, true);
            echo "><span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed(($context["label"] ?? null))));
            echo "</span></h2>
    ";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 13
        echo "
  <div class=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_element_prefix"] ?? null)), "html", null, true);
        echo "-content\">
    ";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comments"] ?? null)), "html", null, true);
        echo "
  </div>

  ";
        // line 18
        if (($context["comment_form"] ?? null)) {
            // line 19
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_element_prefix"] ?? null)), "html", null, true);
            echo "-form-container\">
      <h2";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_element_prefix"] ?? null)) . "-form-title")], "method")), "html", null, true);
            echo "><span>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Add new comment"));
            echo "</span></h2>
      ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_form"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 24
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/MyLifeBeLike/templates/content/node/blog-article/field--node--field-comments--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 24,  113 => 21,  107 => 20,  102 => 19,  100 => 18,  94 => 15,  90 => 14,  87 => 13,  82 => 11,  76 => 10,  71 => 9,  69 => 8,  65 => 7,  62 => 6,  60 => 4,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set bem_block = (entity_type ~ '-' ~ bundle ~ (view_mode != 'default' ? '-' ~ view_mode))|clean_class ~ '__' ~ field_name|replace({(bundle ~ '__'): ''})|clean_class %}
{% set bem_element_prefix = bem_element_prefix ?: bem_block ~ '' %}
{% set classes = classes ?: [
  bem_block,
] %}
<a id=\"comments\"></a>
<section{{ attributes.addClass(bem_classes) }}>
  {% if comments and not label_hidden %}
    {{ title_prefix }}
    <h2{{ title_attributes.addClass(bem_element_prefix ~ '__title') }}><span>{{ label|t }}</span></h2>
    {{ title_suffix }}
  {% endif %}

  <div class=\"{{ bem_element_prefix }}-content\">
    {{ comments }}
  </div>

  {% if comment_form %}
    <div class=\"{{ bem_element_prefix }}-form-container\">
      <h2{{ content_attributes.addClass(bem_element_prefix ~ '-form-title') }}><span>{{ 'Add new comment'|t }}</span></h2>
      {{ comment_form }}
    </div>
  {% endif %}
</section>
", "themes/custom/MyLifeBeLike/templates/content/node/blog-article/field--node--field-comments--article.html.twig", "W:\\domains\\drupal8.localhost\\themes\\custom\\MyLifeBeLike\\templates\\content\\node\\blog-article\\field--node--field-comments--article.html.twig");
    }
}
