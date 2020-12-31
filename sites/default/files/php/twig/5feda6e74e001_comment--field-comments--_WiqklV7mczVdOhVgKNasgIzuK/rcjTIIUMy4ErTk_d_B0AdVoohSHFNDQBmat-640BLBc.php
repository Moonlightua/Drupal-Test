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

/* themes/custom/MyLifeBeLike/templates/content/comment/article/comment--field-comments--article.html.twig */
class __TwigTemplate_cfbe5327a4d2cac2591e3aa33d34dc787fa705069ea5308bc645951d1d2470fb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1];
        $filters = ["clean_class" => 1, "escape" => 6, "without" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'without'],
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
        $context["bem_block"] = ((($context["bem_block"] ?? null)) ? (($context["bem_block"] ?? null)) : (\Drupal\Component\Utility\Html::getClass((("comment-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["comment"] ?? null), "bundle", []))) . ((($this->getAttribute(($context["elements"] ?? null), "#view_mode", [], "array") != "default")) ? (("-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["elements"] ?? null), "#view_mode", [], "array")))) : (""))))));
        // line 2
        $context["classes"] = [0 =>         // line 3
($context["bem_block"] ?? null), 1 => (($this->sandbox->ensureToStringAllowed(        // line 4
($context["bem_block"] ?? null)) . "--") . $this->sandbox->ensureToStringAllowed(($context["status"] ?? null)))];
        // line 6
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "js-comment", 1 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div class=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__left\">
    ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "letter_avatar", [])), "html", null, true);
        echo "
  </div>

  <div class=\"";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__right\">
    <header class=\"";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__header\">
      <div class=\"";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__header-item\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null)), "html", null, true);
        echo "</div>
      <div class=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__header-item\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "homepage", [])), "html", null, true);
        echo "</div>
      <div class=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__header-item\">
        <mark class=\"";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__new hidden\"
              data-comment-timestamp=\"";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null)), "html", null, true);
        echo "\"></mark>
      </div>
    </header>
    ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "letter_avatar", "links", "homepage"), "html", null, true);
        echo "

    <footer class=\"";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__footer\">
      <div class=\"";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__footer-item\">
        ";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "links", [])), "html", null, true);
        echo "
      </div>

      <div class=\"";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__footer-item\">
        <span class=\"";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__created\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null)), "html", null, true);
        echo "</span>
      </div>
    </footer>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/MyLifeBeLike/templates/content/comment/article/comment--field-comments--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 28,  129 => 27,  123 => 24,  119 => 23,  115 => 22,  110 => 20,  104 => 17,  100 => 16,  96 => 15,  90 => 14,  84 => 13,  80 => 12,  76 => 11,  70 => 8,  66 => 7,  61 => 6,  59 => 4,  58 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set bem_block = bem_block ?: ('comment-' ~ comment.bundle ~ (elements['#view_mode'] != 'default' ? '-' ~ elements['#view_mode']))|clean_class %}
{% set classes = [
  bem_block,
  bem_block ~ '--' ~ status,
] %}
<article{{ attributes.addClass('js-comment', classes) }}>
  <div class=\"{{ bem_block }}__left\">
    {{ content.letter_avatar }}
  </div>

  <div class=\"{{ bem_block }}__right\">
    <header class=\"{{ bem_block }}__header\">
      <div class=\"{{ bem_block }}__header-item\">{{ author }}</div>
      <div class=\"{{ bem_block }}__header-item\">{{ content.homepage }}</div>
      <div class=\"{{ bem_block }}__header-item\">
        <mark class=\"{{ bem_block }}__new hidden\"
              data-comment-timestamp=\"{{ new_indicator_timestamp }}\"></mark>
      </div>
    </header>
    {{ content|without('letter_avatar', 'links', 'homepage') }}

    <footer class=\"{{ bem_block }}__footer\">
      <div class=\"{{ bem_block }}__footer-item\">
        {{ content.links }}
      </div>

      <div class=\"{{ bem_block }}__footer-item\">
        <span class=\"{{ bem_block }}__created\">{{ created }}</span>
      </div>
    </footer>
  </div>
</article>
", "themes/custom/MyLifeBeLike/templates/content/comment/article/comment--field-comments--article.html.twig", "W:\\domains\\drupal8.localhost\\themes\\custom\\MyLifeBeLike\\templates\\content\\comment\\article\\comment--field-comments--article.html.twig");
    }
}
