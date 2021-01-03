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

/* themes/contrib/glisseo/templates/navigation/menu.html.twig */
class __TwigTemplate_662b69fbab1d452240e53cebd2292cd94ca077660df3b853ec618bb9649dcdac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 1, "macro" => 10, "if" => 12, "set" => 14, "for" => 17];
        $filters = ["length" => 18, "merge" => 19, "escape" => 22];
        $functions = ["link" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'set', 'for'],
                ['length', 'merge', 'escape'],
                ['link']
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
        $context["menus"] = $this;
        // line 2
        echo "
";
        // line 7
        echo "
";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["bem_block"] ?? null), ($context["bem_modifiers"] ?? null)));
        echo "

";
    }

    // line 10
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__bem_block__ = null, $__bem_modifiers__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "bem_block" => $__bem_block__,
            "bem_modifiers" => $__bem_modifiers__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 11
            echo "  ";
            $context["menus"] = $this;
            // line 12
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 13
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 14
                    echo "      ";
                    $context["classes"] = [0 =>                     // line 15
($context["bem_block"] ?? null)];
                    // line 17
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["bem_modifiers"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["bem_modifier"]) {
                        // line 18
                        echo "        ";
                        if (twig_length_filter($this->env, $context["bem_modifier"])) {
                            // line 19
                            echo "          ";
                            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [0 => (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "--") . $this->sandbox->ensureToStringAllowed($context["bem_modifier"]))]);
                            // line 20
                            echo "        ";
                        }
                        // line 21
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bem_modifier'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                    echo ">
        ";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 24
                        echo "          ";
                        $context["classes"] = [0 => ($this->sandbox->ensureToStringAllowed(                        // line 25
($context["bem_block"] ?? null)) . "__item"), 1 => (($this->getAttribute(                        // line 26
$context["item"], "is_expanded", [])) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__item--expanded")) : ("")), 2 => (($this->getAttribute(                        // line 27
$context["item"], "is_collapsed", [])) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__item--collapsed")) : ("")), 3 => (($this->getAttribute(                        // line 28
$context["item"], "in_active_trail", [])) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__item--active-trail")) : (""))];
                        // line 30
                        echo "          <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                        echo ">
            ";
                        // line 31
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__link")]]), "html", null, true);
                        echo "
            ";
                        // line 32
                        if ($this->getAttribute($context["item"], "below", [])) {
                            // line 33
                            echo "              ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
            ";
                        }
                        // line 35
                        echo "          </li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "      </ul>
    ";
                } else {
                    // line 39
                    echo "      <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__submenu")], "method")), "html", null, true);
                    echo ">
        ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 41
                        echo "          ";
                        $context["classes"] = [0 => ($this->sandbox->ensureToStringAllowed(                        // line 42
($context["bem_block"] ?? null)) . "__item"), 1 => ($this->sandbox->ensureToStringAllowed(                        // line 43
($context["bem_block"] ?? null)) . "__item--submenu"), 2 => (($this->getAttribute(                        // line 44
$context["item"], "is_expanded", [])) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__item--expanded")) : ("")), 3 => (($this->getAttribute(                        // line 45
$context["item"], "is_collapsed", [])) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__item--collapsed")) : ("")), 4 => (($this->getAttribute(                        // line 46
$context["item"], "in_active_trail", [])) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__item--active-trail")) : (""))];
                        // line 48
                        echo "          <li";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                        echo ">
            ";
                        // line 49
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__link"), 1 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__link--submenu")]]), "html", null, true);
                        echo "
            ";
                        // line 50
                        if ($this->getAttribute($context["item"], "below", [])) {
                            // line 51
                            echo "              ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                            echo "
            ";
                        }
                        // line 53
                        echo "          </li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "      </ul>
    ";
                }
                // line 57
                echo "  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/contrib/glisseo/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 57,  204 => 55,  197 => 53,  191 => 51,  189 => 50,  185 => 49,  180 => 48,  178 => 46,  177 => 45,  176 => 44,  175 => 43,  174 => 42,  172 => 41,  168 => 40,  163 => 39,  159 => 37,  152 => 35,  146 => 33,  144 => 32,  140 => 31,  135 => 30,  133 => 28,  132 => 27,  131 => 26,  130 => 25,  128 => 24,  124 => 23,  119 => 22,  113 => 21,  110 => 20,  107 => 19,  104 => 18,  99 => 17,  97 => 15,  95 => 14,  92 => 13,  89 => 12,  86 => 11,  70 => 10,  63 => 8,  60 => 7,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}

{{ menus.menu_links(items, attributes, 0, bem_block, bem_modifiers) }}

{% macro menu_links(items, attributes, menu_level, bem_block, bem_modifiers) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      {% set classes = [
        bem_block,
      ] %}
      {% for bem_modifier in bem_modifiers %}
        {% if bem_modifier|length %}
          {% set classes = classes|merge([bem_block ~ '--' ~ bem_modifier]) %}
        {% endif %}
      {% endfor %}
      <ul{{ attributes.addClass(classes) }}>
        {% for item in items %}
          {% set classes = [
            bem_block ~ '__item',
            item.is_expanded ? bem_block ~ '__item--expanded',
            item.is_collapsed ? bem_block ~ '__item--collapsed',
            item.in_active_trail ? bem_block ~ '__item--active-trail',
          ] %}
          <li{{ item.attributes.addClass(classes) }}>
            {{ link(item.title, item.url, { 'class': [bem_block ~ '__link'] }) }}
            {% if item.below %}
              {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
            {% endif %}
          </li>
        {% endfor %}
      </ul>
    {% else %}
      <ul{{ attributes.addClass(bem_block ~ '__submenu') }}>
        {% for item in items %}
          {% set classes = [
            bem_block ~ '__item',
            bem_block ~ '__item--submenu',
            item.is_expanded ? bem_block ~ '__item--expanded',
            item.is_collapsed ? bem_block ~ '__item--collapsed',
            item.in_active_trail ? bem_block ~ '__item--active-trail',
          ] %}
          <li{{ item.attributes.addClass(classes) }}>
            {{ link(item.title, item.url, { 'class': [bem_block ~ '__link', bem_block ~ '__link--submenu'] }) }}
            {% if item.below %}
              {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
            {% endif %}
          </li>
        {% endfor %}
      </ul>
    {% endif %}
  {% endif %}
{% endmacro %}
", "themes/contrib/glisseo/templates/navigation/menu.html.twig", "W:\\domains\\drupal8.localhost\\themes\\contrib\\glisseo\\templates\\navigation\\menu.html.twig");
    }
}
