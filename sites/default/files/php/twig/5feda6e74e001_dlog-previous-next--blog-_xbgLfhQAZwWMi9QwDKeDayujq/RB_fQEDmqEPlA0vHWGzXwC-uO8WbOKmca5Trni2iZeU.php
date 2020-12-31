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

/* themes/custom/MyLifeBeLike/templates/theme/dlog-previous-next--blog-article.html.twig */
class __TwigTemplate_85fbf442afd2e8a9201205aa976d19aaae92f2b942af5e8641779be6fabe0b83 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 4, "for" => 13];
        $filters = ["escape" => 2, "image_style" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'image_style'],
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
        $context["bem_block"] = "previous-next";
        // line 2
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["bem_block"] ?? null), 1 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "--blog-article")], "method")), "html", null, true);
        echo ">
  <div class=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__previous\">
    ";
        // line 4
        if (($context["previous"] ?? null)) {
            // line 5
            echo "      <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["previous"] ?? null), "url", [])), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__link ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__link--previous\">
        <div class=\"";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__promo-image\" style=\"background-image: url(";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["previous"] ?? null), "promo_uri", [])), "blog_previous_next_image"), "html", null, true);
            echo ")\">

        </div>
        <div class=\"";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__icon ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__icon--previous\"></div>
        <div class=\"";
            // line 10
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__content\">
          ";
            // line 11
            if ($this->getAttribute(($context["previous"] ?? null), "tags", [])) {
                // line 12
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
                echo "__tags\">
                ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["previous"] ?? null), "tags", []));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 14
                    echo "                  <span class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
                    echo "__tag\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tag"], "label", [])), "html", null, true);
                    echo "</span>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "              </div>
          ";
            }
            // line 18
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["previous"] ?? null), "label", [])), "html", null, true);
            echo "
        </div>
      </a>
    ";
        }
        // line 22
        echo "  </div>

  <div class=\"";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__next\">
    ";
        // line 25
        if (($context["next"] ?? null)) {
            // line 26
            echo "      <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["next"] ?? null), "url", [])), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__link ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__link--next\">
        <div class=\"";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__promo-image\" style=\"background-image: url(";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["next"] ?? null), "promo_uri", [])), "blog_previous_next_image"), "html", null, true);
            echo ")\">

        </div>
        <div class=\"";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__icon ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__icon--next\"></div>
        <div class=\"";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__content\">
          ";
            // line 32
            if ($this->getAttribute(($context["next"] ?? null), "tags", [])) {
                // line 33
                echo "            <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
                echo "__tags\">
              ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["next"] ?? null), "tags", []));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 35
                    echo "                <span class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
                    echo "__tag\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tag"], "label", [])), "html", null, true);
                    echo "</span>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "            </div>
          ";
            }
            // line 39
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["next"] ?? null), "label", [])), "html", null, true);
            echo "
        </div>
      </a>
    ";
        }
        // line 43
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/MyLifeBeLike/templates/theme/dlog-previous-next--blog-article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 43,  192 => 39,  188 => 37,  177 => 35,  173 => 34,  168 => 33,  166 => 32,  162 => 31,  156 => 30,  148 => 27,  139 => 26,  137 => 25,  133 => 24,  129 => 22,  121 => 18,  117 => 16,  106 => 14,  102 => 13,  97 => 12,  95 => 11,  91 => 10,  85 => 9,  77 => 6,  68 => 5,  66 => 4,  62 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set bem_block = 'previous-next' %}
<div{{ attributes.addClass(bem_block, bem_block ~ '--blog-article') }}>
  <div class=\"{{ bem_block }}__previous\">
    {% if previous %}
      <a href=\"{{ previous.url }}\" class=\"{{ bem_block }}__link {{ bem_block }}__link--previous\">
        <div class=\"{{ bem_block }}__promo-image\" style=\"background-image: url({{ previous.promo_uri|image_style('blog_previous_next_image') }})\">

        </div>
        <div class=\"{{ bem_block }}__icon {{ bem_block }}__icon--previous\"></div>
        <div class=\"{{ bem_block }}__content\">
          {% if previous.tags %}
              <div class=\"{{ bem_block }}__tags\">
                {% for tag in previous.tags %}
                  <span class=\"{{ bem_block }}__tag\">{{ tag.label }}</span>
                {% endfor %}
              </div>
          {% endif %}
          {{ previous.label }}
        </div>
      </a>
    {% endif %}
  </div>

  <div class=\"{{ bem_block }}__next\">
    {% if next %}
      <a href=\"{{ next.url }}\" class=\"{{ bem_block }}__link {{ bem_block }}__link--next\">
        <div class=\"{{ bem_block }}__promo-image\" style=\"background-image: url({{ next.promo_uri|image_style('blog_previous_next_image') }})\">

        </div>
        <div class=\"{{ bem_block }}__icon {{ bem_block }}__icon--next\"></div>
        <div class=\"{{ bem_block }}__content\">
          {% if next.tags %}
            <div class=\"{{ bem_block }}__tags\">
              {% for tag in next.tags %}
                <span class=\"{{ bem_block }}__tag\">{{ tag.label }}</span>
              {% endfor %}
            </div>
          {% endif %}
          {{ next.label }}
        </div>
      </a>
    {% endif %}
  </div>
</div>
", "themes/custom/MyLifeBeLike/templates/theme/dlog-previous-next--blog-article.html.twig", "W:\\domains\\drupal8.localhost\\themes\\custom\\MyLifeBeLike\\templates\\theme\\dlog-previous-next--blog-article.html.twig");
    }
}
