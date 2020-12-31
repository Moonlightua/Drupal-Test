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

/* modules/custom/dlog_blog/templates/dlog-blog-random-posts.html.twig */
class __TwigTemplate_076ab3ce914676144ff3009c6cf46e819624e986bafa744c7a25f23839860286 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 3, "for" => 10];
        $filters = ["escape" => 2, "length" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'length'],
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
        $context["bem_block"] = "dlog-blog-random-posts";
        // line 2
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["bem_block"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 3
        if (twig_length_filter($this->env, ($context["items"] ?? null))) {
            // line 4
            echo "    <h2 class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__title\">
      <span>
        Random posts
      </span>
    </h2>
    <div class=\"";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__items\">
      ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 11
                echo "        <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
                echo "__item\">
          ";
                // line 12
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"]), "html", null, true);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </div>
  ";
        }
        // line 17
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "modules/custom/dlog_blog/templates/dlog-blog-random-posts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  95 => 15,  86 => 12,  81 => 11,  77 => 10,  73 => 9,  64 => 4,  62 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set bem_block = 'dlog-blog-random-posts' %}
<div {{ attributes.addClass(bem_block) }}>
  {% if items|length %}
    <h2 class=\"{{ bem_block }}__title\">
      <span>
        Random posts
      </span>
    </h2>
    <div class=\"{{ bem_block }}__items\">
      {% for item in items %}
        <div class=\"{{ bem_block }}__item\">
          {{ item }}
        </div>
      {% endfor %}
    </div>
  {% endif %}
</div>

", "modules/custom/dlog_blog/templates/dlog-blog-random-posts.html.twig", "W:\\domains\\drupal8.localhost\\modules\\custom\\dlog_blog\\templates\\dlog-blog-random-posts.html.twig");
    }
}
