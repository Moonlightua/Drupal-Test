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

/* themes/contrib/glisseo/templates/content/node/node.html.twig */
class __TwigTemplate_5ac6a91070bdb15b605a443181f096250a937d68e8bdd06fae46b93dcb75593f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'node' => [$this, 'block_node'],
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'submitted' => [$this, 'block_submitted'],
            'content' => [$this, 'block_content'],
            'links' => [$this, 'block_links'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "block" => 18, "if" => 20];
        $filters = ["merge" => 2, "escape" => 14, "without" => 45];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['merge', 'escape', 'without'],
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
        $context["bem_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["bem_classes"] ?? null)), [0 => (($this->getAttribute(        // line 3
($context["node"] ?? null), "isPromoted", [], "method")) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "--promoted")) : ("")), 1 => (($this->getAttribute(        // line 4
($context["node"] ?? null), "isSticky", [], "method")) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "--sticky")) : ("")), 2 => (( !$this->getAttribute(        // line 5
($context["node"] ?? null), "isPublished", [], "method")) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "--unpublished")) : (""))]);
        // line 9
        $context["title_classes"] = [0 => ($this->sandbox->ensureToStringAllowed(        // line 10
($context["bem_block"] ?? null)) . "__label"), 1 => ((        // line 11
($context["label_hidden"] ?? null)) ? ("visually-hidden") : (""))];
        // line 14
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["bem_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 18
        $this->displayBlock('node', $context, $blocks);
        // line 58
        echo "</article>
";
    }

    // line 18
    public function block_node($context, array $blocks = [])
    {
        // line 19
        echo "
    ";
        // line 20
        if (($context["display_submitted"] ?? null)) {
            // line 21
            echo "      <header class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__header\">
        ";
            // line 22
            $this->displayBlock('header', $context, $blocks);
            // line 40
            echo "      </header>
    ";
        }
        // line 42
        echo "
    <div";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__content")], "method")), "html", null, true);
        echo ">
      ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "    </div>

    ";
        // line 49
        if ($this->getAttribute(($context["content"] ?? null), "links", [])) {
            // line 50
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__links\">
        ";
            // line 51
            $this->displayBlock('links', $context, $blocks);
            // line 54
            echo "      </div>
    ";
        }
        // line 56
        echo "
  ";
    }

    // line 22
    public function block_header($context, array $blocks = [])
    {
        // line 23
        echo "
          ";
        // line 24
        if ( !($context["page"] ?? null)) {
            // line 25
            echo "            <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__title")], "method")), "html", null, true);
            echo ">
              ";
            // line 26
            $this->displayBlock('title', $context, $blocks);
            // line 29
            echo "            </h2>
          ";
        }
        // line 31
        echo "
          <div";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => ($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "__submitted")], "method")), "html", null, true);
        echo ">
            ";
        // line 33
        $this->displayBlock('submitted', $context, $blocks);
        // line 37
        echo "          </div>

        ";
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        // line 27
        echo "                <a class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__link\" href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</a>
              ";
    }

    // line 33
    public function block_submitted($context, array $blocks = [])
    {
        // line 34
        echo "              ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null)), "html", null, true);
        echo "
              ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
        echo "
            ";
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        // line 45
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "links"), "html", null, true);
        echo "
      ";
    }

    // line 51
    public function block_links($context, array $blocks = [])
    {
        // line 52
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "links", [])), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/glisseo/templates/content/node/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 52,  213 => 51,  206 => 45,  203 => 44,  197 => 35,  192 => 34,  189 => 33,  178 => 27,  175 => 26,  169 => 37,  167 => 33,  163 => 32,  160 => 31,  156 => 29,  154 => 26,  149 => 25,  147 => 24,  144 => 23,  141 => 22,  136 => 56,  132 => 54,  130 => 51,  125 => 50,  123 => 49,  119 => 47,  117 => 44,  113 => 43,  110 => 42,  106 => 40,  104 => 22,  99 => 21,  97 => 20,  94 => 19,  91 => 18,  86 => 58,  84 => 18,  79 => 16,  75 => 15,  70 => 14,  68 => 11,  67 => 10,  66 => 9,  64 => 5,  63 => 4,  62 => 3,  61 => 2,);
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
    node.isPromoted() ? bem_block ~ '--promoted',
    node.isSticky() ? bem_block ~ '--sticky',
    not node.isPublished() ? bem_block ~ '--unpublished',
  ])
%}
{%
  set title_classes = [
    bem_block ~ '__label',
    label_hidden ? 'visually-hidden',
  ]
%}
<article{{ attributes.addClass(bem_classes) }}>
  {{ title_prefix }}
  {{ title_suffix }}

  {% block node %}

    {% if display_submitted %}
      <header class=\"{{ bem_block }}__header\">
        {% block header %}

          {% if not page %}
            <h2{{ title_attributes.addClass(bem_block ~ '__title') }}>
              {% block title %}
                <a class=\"{{ bem_block }}__link\" href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
              {% endblock %}
            </h2>
          {% endif %}

          <div{{ author_attributes.addClass(bem_block ~ '__submitted') }}>
            {% block submitted %}
              {{ date }}
              {{ metadata }}
            {% endblock %}
          </div>

        {% endblock %}
      </header>
    {% endif %}

    <div{{ content_attributes.addClass(bem_block ~ '__content') }}>
      {% block content %}
        {{ content|without('links') }}
      {% endblock %}
    </div>

    {% if content.links %}
      <div class=\"{{ bem_block }}__links\">
        {% block links %}
          {{ content.links }}
        {% endblock %}
      </div>
    {% endif %}

  {% endblock node %}
</article>
", "themes/contrib/glisseo/templates/content/node/node.html.twig", "W:\\domains\\drupal8.localhost\\themes\\contrib\\glisseo\\templates\\content\\node\\node.html.twig");
    }
}
