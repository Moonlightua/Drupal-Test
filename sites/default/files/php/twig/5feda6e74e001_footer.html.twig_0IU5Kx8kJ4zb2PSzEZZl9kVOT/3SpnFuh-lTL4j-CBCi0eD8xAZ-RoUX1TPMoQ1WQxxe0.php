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

/* @MyLifeBeLike/include/footer.html.twig */
class __TwigTemplate_1e4c0021a05850a7ad8d0b10f94eaaa27275df20b75ea0e5c77bfd7f19e8eb11 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 1, "set" => 2];
        $filters = ["escape" => 3, "date" => 13];
        $functions = ["drupal_block" => 9];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set'],
                ['escape', 'date'],
                ['drupal_block']
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
        $context["social_links"] = $this->loadTemplate("@MyLifeBeLike/include/social-links.html.twig", "@MyLifeBeLike/include/footer.html.twig", 1)->unwrap();
        // line 2
        $context["bem_block"] = "footer";
        // line 3
        echo "<footer class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "\">
  <div class=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__content\">
    ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["social_links"]->getlinks("footer-social"));
        echo "

    <div class=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__menu\">

      ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("system_menu_block:footer"), "html", null, true);
        echo "

    </div>
    <div class=\"";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__copyright\">
      &copy; ";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <strong>Desire</strong>. All rights reserved.
    </div>
      <div class=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__up\">
         <a href=\"#\">UP</a>
      </div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "@MyLifeBeLike/include/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 15,  88 => 13,  84 => 12,  78 => 9,  73 => 7,  68 => 5,  64 => 4,  59 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import '@MyLifeBeLike/include/social-links.html.twig' as social_links %}
{% set bem_block = \"footer\" %}
<footer class=\"{{ bem_block }}\">
  <div class=\"{{ bem_block }}__content\">
    {{ social_links.links('footer-social') }}

    <div class=\"{{ bem_block }}__menu\">

      {{ drupal_block('system_menu_block:footer') }}

    </div>
    <div class=\"{{ bem_block }}__copyright\">
      &copy; {{ 'now'|date('Y') }} <strong>Desire</strong>. All rights reserved.
    </div>
      <div class=\"{{ bem_block }}__up\">
         <a href=\"#\">UP</a>
      </div>
  </div>
</footer>
", "@MyLifeBeLike/include/footer.html.twig", "W:\\domains\\drupal8.localhost\\themes\\custom\\MyLifeBeLike\\templates\\include\\footer.html.twig");
    }
}
