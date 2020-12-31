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

/* core/themes/stable/templates/content-edit/filter-tips.html.twig */
class __TwigTemplate_f4305e83bf44813164b89604191adaff9b22787ba01c4422ed340dce48432816 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 19, "for" => 24];
        $filters = ["t" => 20, "length" => 23, "escape" => 27];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t', 'length', 'escape'],
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
        // line 19
        if (($context["multiple"] ?? null)) {
            // line 20
            echo "  <h2>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Text Formats"));
            echo "</h2>
";
        }
        // line 22
        echo "
";
        // line 23
        if (twig_length_filter($this->env, ($context["tips"] ?? null))) {
            // line 24
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tips"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 25
                echo "
    ";
                // line 26
                if (($context["multiple"] ?? null)) {
                    // line 27
                    echo "      <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
                    echo ">
      <h3>";
                    // line 28
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tip"], "name", [])), "html", null, true);
                    echo "</h3>
    ";
                }
                // line 30
                echo "
    ";
                // line 31
                if (twig_length_filter($this->env, $this->getAttribute($context["tip"], "list", []))) {
                    // line 32
                    echo "      <ul>
      ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tip"], "list", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 34
                        echo "        <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tip"], "attributes", [])), "html", null, true);
                        echo ">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "tip", [])), "html", null, true);
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "      </ul>
    ";
                }
                // line 38
                echo "
    ";
                // line 39
                if (($context["multiple"] ?? null)) {
                    // line 40
                    echo "      </div>
    ";
                }
                // line 42
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/content-edit/filter-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 42,  120 => 40,  118 => 39,  115 => 38,  111 => 36,  100 => 34,  96 => 33,  93 => 32,  91 => 31,  88 => 30,  83 => 28,  78 => 27,  76 => 26,  73 => 25,  68 => 24,  66 => 23,  63 => 22,  57 => 20,  55 => 19,);
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
 * Theme override for a set of filter tips.
 *
 * Available variables:
 * - tips: Descriptions and a CSS ID in the form of 'module-name/filter-id'
 *   (only used when 'long' is TRUE) for each filter in one or more text
 *   formats.
 * - long: A flag indicating whether the passed-in filter tips contain extended
 *   explanations, i.e. intended to be output on the path 'filter/tips'
 *   (TRUE), or are in a short format, i.e. suitable to be displayed below a
 *   form element. Defaults to FALSE.
 * - multiple: A flag indicating there is more than one filter tip.
 *
 * @see template_preprocess_filter_tips()
 */
#}
{% if multiple %}
  <h2>{{ 'Text Formats'|t }}</h2>
{% endif %}

{% if tips|length %}
  {% for name, tip in tips %}

    {% if multiple %}
      <div{{ attributes }}>
      <h3>{{ tip.name }}</h3>
    {% endif %}

    {% if tip.list|length %}
      <ul>
      {% for item in tip.list %}
        <li{{ tip.attributes }}>{{ item.tip }}</li>
      {% endfor %}
      </ul>
    {% endif %}

    {% if multiple %}
      </div>
    {% endif %}

  {% endfor %}
{% endif %}
", "core/themes/stable/templates/content-edit/filter-tips.html.twig", "W:\\domains\\drupal8.localhost\\core\\themes\\stable\\templates\\content-edit\\filter-tips.html.twig");
    }
}
