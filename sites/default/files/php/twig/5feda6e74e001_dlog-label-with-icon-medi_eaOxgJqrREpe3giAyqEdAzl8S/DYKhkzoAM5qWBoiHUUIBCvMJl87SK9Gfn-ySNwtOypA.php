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

/* modules/custom/dlog/templates/dlog-label-with-icon-media-formatter.html.twig */
class __TwigTemplate_75d67dbcff6e09170ce7c7218426f07f3d544c2d2bec7f4dca93f22ef757ef24 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 15];
        $filters = ["clean_class" => 4, "escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        $context["bem_block"] = "dlog-label-with-icon-media-formatter";
        // line 2
        $context["classes"] = [0 =>         // line 3
($context["bem_block"] ?? null), 1 => (($this->sandbox->ensureToStringAllowed(        // line 4
($context["bem_block"] ?? null)) . "--") . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["media_type"] ?? null))))];
        // line 6
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <a href=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener nofollow\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__icon\">

  </a>

  <div class=\"";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__content\">

    <a href=\"";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener nofollow\" class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__label\">
      ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "
      ";
        // line 15
        if (($context["filesize"] ?? null)) {
            // line 16
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__filesize\">
          ";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filesize"] ?? null)), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 20
        echo "    </a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/dlog/templates/dlog-label-with-icon-media-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 20,  97 => 17,  92 => 16,  90 => 15,  86 => 14,  80 => 13,  75 => 11,  66 => 7,  61 => 6,  59 => 4,  58 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set bem_block = 'dlog-label-with-icon-media-formatter' %}
{% set classes = [
    bem_block,
    bem_block ~ '--' ~ media_type|clean_class
] %}
<div {{ attributes.addClass(classes) }}>
  <a href=\"{{ url }}\" target=\"_blank\" rel=\"noopener nofollow\" class=\"{{ bem_block }}__icon\">

  </a>

  <div class=\"{{ bem_block }}__content\">

    <a href=\"{{ url }}\" target=\"_blank\" rel=\"noopener nofollow\" class=\"{{ bem_block }}__label\">
      {{ label }}
      {% if filesize %}
        <div class=\"{{ bem_block }}__filesize\">
          {{ filesize }}
        </div>
      {% endif %}
    </a>
  </div>
</div>
", "modules/custom/dlog/templates/dlog-label-with-icon-media-formatter.html.twig", "W:\\domains\\drupal8.localhost\\modules\\custom\\dlog\\templates\\dlog-label-with-icon-media-formatter.html.twig");
    }
}
