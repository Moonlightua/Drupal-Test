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

/* themes/contrib/glisseo/templates/content/taxonomy-term/taxonomy-term.html.twig */
class __TwigTemplate_af79418c22f006e898e40285644e1d8e4eef4f821414e97f5e38267ca0ba63b0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'taxonomy_term' => [$this, 'block_taxonomy_term'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 5, "if" => 6];
        $filters = ["escape" => 1];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['escape'],
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
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["bem_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 5
        $this->displayBlock('taxonomy_term', $context, $blocks);
        // line 21
        echo "</div>
";
    }

    // line 5
    public function block_taxonomy_term($context, array $blocks = [])
    {
        // line 6
        echo "    ";
        if ( !($context["page"] ?? null)) {
            // line 7
            echo "      <h2 class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__title\">
        ";
            // line 8
            $this->displayBlock('title', $context, $blocks);
            // line 11
            echo "      </h2>
    ";
        }
        // line 13
        echo "

    <div class=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__content\">
      ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "    </div>
  ";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        // line 9
        echo "          <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
        echo "</a>
        ";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        // line 17
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/glisseo/templates/content/taxonomy-term/taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 17,  123 => 16,  114 => 9,  111 => 8,  106 => 19,  104 => 16,  100 => 15,  96 => 13,  92 => 11,  90 => 8,  85 => 7,  82 => 6,  79 => 5,  74 => 21,  72 => 5,  67 => 3,  63 => 2,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div{{ attributes.addClass(bem_classes) }}>
  {{ title_prefix }}
  {{ title_suffix }}

  {% block taxonomy_term %}
    {% if not page %}
      <h2 class=\"{{ bem_block }}__title\">
        {% block title %}
          <a href=\"{{ url }}\">{{ name }}</a>
        {% endblock %}
      </h2>
    {% endif %}


    <div class=\"{{ bem_block }}__content\">
      {% block content %}
        {{ content }}
      {% endblock %}
    </div>
  {% endblock taxonomy_term %}
</div>
", "themes/contrib/glisseo/templates/content/taxonomy-term/taxonomy-term.html.twig", "W:\\domains\\drupal8.localhost\\themes\\contrib\\glisseo\\templates\\content\\taxonomy-term\\taxonomy-term.html.twig");
    }
}
