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

/* themes/contrib/glisseo/templates/field/field--comment.html.twig */
class __TwigTemplate_5103b8978f20b1058fc1d55980bb5ddfc1852e903f0837181785251dc4170d41 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 14];
        $filters = ["merge" => 2, "escape" => 13, "t" => 16];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'escape', 't'],
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
        // line 2
        $context["bem_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_classes"] ?? null)), [0 => (((        // line 3
($context["label_display"] ?? null) == "inline")) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "--label-inline")) : (""))]);
        // line 7
        $context["title_classes"] = [0 => ($this->sandbox->ensureToStringAllowed(        // line 8
($context["bem_block"] ?? null)) . "__label"), 1 => ((        // line 9
($context["label_hidden"] ?? null)) ? ("visually-hidden") : (""))];
        // line 12
        echo "<a id=\"comments\"></a>
<section";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["bem_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 14
        if ((($context["comments"] ?? null) &&  !($context["label_hidden"] ?? null))) {
            // line 15
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
    <h2";
            // line 16
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__title")], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed(($context["label"] ?? null))));
            echo "</h2>
    ";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 19
        echo "
  <div class=\"";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__content\">
    ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comments"] ?? null)), "html", null, true);
        echo "
  </div>

  ";
        // line 24
        if (($context["comment_form"] ?? null)) {
            // line 25
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__form-container\">
      <h2";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__form-title")], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Add new comment"));
            echo "</h2>
      ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_form"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 30
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/glisseo/templates/field/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 30,  113 => 27,  107 => 26,  102 => 25,  100 => 24,  94 => 21,  90 => 20,  87 => 19,  82 => 17,  76 => 16,  71 => 15,  69 => 14,  65 => 13,  62 => 12,  60 => 9,  59 => 8,  58 => 7,  56 => 3,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%
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
<a id=\"comments\"></a>
<section{{ attributes.addClass(bem_classes) }}>
  {% if comments and not label_hidden %}
    {{ title_prefix }}
    <h2{{ title_attributes.addClass(bem_block ~ '__title') }}>{{ label|t }}</h2>
    {{ title_suffix }}
  {% endif %}

  <div class=\"{{ bem_block }}__content\">
    {{ comments }}
  </div>

  {% if comment_form %}
    <div class=\"{{ bem_block }}__form-container\">
      <h2{{ content_attributes.addClass(bem_block ~ '__form-title') }}>{{ 'Add new comment'|t }}</h2>
      {{ comment_form }}
    </div>
  {% endif %}
</section>
", "themes/contrib/glisseo/templates/field/field--comment.html.twig", "W:\\domains\\drupal8.localhost\\themes\\contrib\\glisseo\\templates\\field\\field--comment.html.twig");
    }
}
