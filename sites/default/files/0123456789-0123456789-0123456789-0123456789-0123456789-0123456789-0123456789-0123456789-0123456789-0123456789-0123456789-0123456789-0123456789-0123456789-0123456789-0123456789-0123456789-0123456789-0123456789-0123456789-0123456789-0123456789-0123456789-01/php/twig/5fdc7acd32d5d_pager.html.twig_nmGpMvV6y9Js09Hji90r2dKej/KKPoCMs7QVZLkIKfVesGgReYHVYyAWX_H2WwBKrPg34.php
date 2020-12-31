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

/* themes/contrib/glisseo/templates/navigation/pager.html.twig */
class __TwigTemplate_49fc21e681715f8e62517c60a26dff667dd594d591a952215351c22b6c71823d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 32, "spaceless" => 33, "for" => 62, "set" => 65];
        $filters = ["t" => 35, "escape" => 40, "without" => 40, "default" => 42];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'spaceless', 'for', 'set'],
                ['t', 'escape', 'without', 'default'],
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
        // line 32
        if (($context["items"] ?? null)) {
            // line 33
            echo "  ";
            ob_start();
            // line 34
            echo "    <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
      <h4 id=\"pagination-heading\" class=\"visually-hidden\">";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination"));
            echo "</h4>
      <ul class=\"pager__items js-pager__items\">
        ";
            // line 38
            echo "        ";
            if ($this->getAttribute(($context["items"] ?? null), "first", [])) {
                // line 39
                echo "          <li class=\"pager__item pager__item--first\">
            <a href=\"";
                // line 40
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", []), "attributes", [])), "href", "title"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 41
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("First page"));
                echo "</span>
              <span aria-hidden=\"true\">";
                // line 42
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "first", [], "any", false, true), "text", [])), t("« First"))) : (t("« First"))), "html", null, true);
                echo "</span>
            </a>
          </li>
        ";
            }
            // line 46
            echo "        ";
            // line 47
            echo "        ";
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 48
                echo "          <li class=\"pager__item pager__item--previous\">
            <a href=\"";
                // line 49
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 50
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page"));
                echo "</span>
              <span aria-hidden=\"true\">";
                // line 51
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [])), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
                echo "</span>
            </a>
          </li>
        ";
            }
            // line 55
            echo "        ";
            // line 56
            echo "        ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "previous", [])) {
                // line 57
                echo "          <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">
            &hellip;
          </li>
        ";
            }
            // line 61
            echo "        ";
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 63
                echo "          <li class=\"pager__item";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                echo "\">
            ";
                // line 64
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 65
                    echo "              ";
                    $context["title"] = t("Current page");
                    // line 66
                    echo "            ";
                } else {
                    // line 67
                    echo "              ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 68
                    echo "            ";
                }
                // line 69
                echo "            <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "href", "title"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">
              ";
                // line 71
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>";
                // line 73
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                // line 74
                echo "</a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        ";
            // line 78
            echo "        ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "next", [])) {
                // line 79
                echo "          <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">
            &hellip;
          </li>
        ";
            }
            // line 83
            echo "        ";
            // line 84
            echo "        ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 85
                echo "          <li class=\"pager__item pager__item--next\">
            <a href=\"";
                // line 86
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 87
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page"));
                echo "</span>
              <span aria-hidden=\"true\">";
                // line 88
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [])), t("Next ›"))) : (t("Next ›"))), "html", null, true);
                echo "</span>
            </a>
          </li>
        ";
            }
            // line 92
            echo "        ";
            // line 93
            echo "        ";
            if ($this->getAttribute(($context["items"] ?? null), "last", [])) {
                // line 94
                echo "          <li class=\"pager__item pager__item--last\">
            <a href=\"";
                // line 95
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", []), "attributes", [])), "href", "title"), "html", null, true);
                echo ">
              <span class=\"visually-hidden\">";
                // line 96
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last page"));
                echo "</span>
              <span aria-hidden=\"true\">";
                // line 97
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "last", [], "any", false, true), "text", [])), t("Last »"))) : (t("Last »"))), "html", null, true);
                echo "</span>
            </a>
          </li>
        ";
            }
            // line 101
            echo "      </ul>
    </nav>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/glisseo/templates/navigation/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 101,  239 => 97,  235 => 96,  227 => 95,  224 => 94,  221 => 93,  219 => 92,  212 => 88,  208 => 87,  200 => 86,  197 => 85,  194 => 84,  192 => 83,  186 => 79,  183 => 78,  181 => 77,  173 => 74,  171 => 73,  167 => 71,  157 => 69,  154 => 68,  151 => 67,  148 => 66,  145 => 65,  143 => 64,  138 => 63,  133 => 62,  131 => 61,  125 => 57,  122 => 56,  120 => 55,  113 => 51,  109 => 50,  101 => 49,  98 => 48,  95 => 47,  93 => 46,  86 => 42,  82 => 41,  74 => 40,  71 => 39,  68 => 38,  63 => 35,  60 => 34,  57 => 33,  55 => 32,);
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
 * Theme override to display a pager.
 *
 * Available variables:
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 */
#}
{% if items %}
  {% spaceless %}
    <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
      <h4 id=\"pagination-heading\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
      <ul class=\"pager__items js-pager__items\">
        {# Print first item if we are not on the first page. #}
        {% if items.first %}
          <li class=\"pager__item pager__item--first\">
            <a href=\"{{ items.first.href }}\" title=\"{{ 'Go to first page'|t }}\"{{ items.first.attributes|without('href', 'title') }}>
              <span class=\"visually-hidden\">{{ 'First page'|t }}</span>
              <span aria-hidden=\"true\">{{ items.first.text|default('« First'|t) }}</span>
            </a>
          </li>
        {% endif %}
        {# Print previous item if we are not on the first page. #}
        {% if items.previous %}
          <li class=\"pager__item pager__item--previous\">
            <a href=\"{{ items.previous.href }}\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel') }}>
              <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
              <span aria-hidden=\"true\">{{ items.previous.text|default('‹ Previous'|t) }}</span>
            </a>
          </li>
        {% endif %}
        {# Add an ellipsis if there are further previous pages. #}
        {% if ellipses.previous %}
          <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">
            &hellip;
          </li>
        {% endif %}
        {# Now generate the actual pager piece. #}
        {% for key, item in items.pages %}
          <li class=\"pager__item{{ current == key ? ' pager__item--active' : '' }}\">
            {% if current == key %}
              {% set title = 'Current page'|t %}
            {% else %}
              {% set title = 'Go to page @key'|t({'@key': key}) %}
            {% endif %}
            <a href=\"{{ item.href }}\" title=\"{{ title }}\"{{ item.attributes|without('href', 'title') }}>
            <span class=\"visually-hidden\">
              {{ current == key ? 'Current page'|t : 'Page'|t }}
            </span>
              {{- key -}}
            </a>
          </li>
        {% endfor %}
        {# Add an ellipsis if there are further next pages. #}
        {% if ellipses.next %}
          <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">
            &hellip;
          </li>
        {% endif %}
        {# Print next item if we are not on the last page. #}
        {% if items.next %}
          <li class=\"pager__item pager__item--next\">
            <a href=\"{{ items.next.href }}\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel') }}>
              <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
              <span aria-hidden=\"true\">{{ items.next.text|default('Next ›'|t) }}</span>
            </a>
          </li>
        {% endif %}
        {# Print last item if we are not on the last page. #}
        {% if items.last %}
          <li class=\"pager__item pager__item--last\">
            <a href=\"{{ items.last.href }}\" title=\"{{ 'Go to last page'|t }}\"{{ items.last.attributes|without('href', 'title') }}>
              <span class=\"visually-hidden\">{{ 'Last page'|t }}</span>
              <span aria-hidden=\"true\">{{ items.last.text|default('Last »'|t) }}</span>
            </a>
          </li>
        {% endif %}
      </ul>
    </nav>
  {% endspaceless %}
{% endif %}
", "themes/contrib/glisseo/templates/navigation/pager.html.twig", "W:\\domains\\drupal8.localhost\\themes\\contrib\\glisseo\\templates\\navigation\\pager.html.twig");
    }
}
