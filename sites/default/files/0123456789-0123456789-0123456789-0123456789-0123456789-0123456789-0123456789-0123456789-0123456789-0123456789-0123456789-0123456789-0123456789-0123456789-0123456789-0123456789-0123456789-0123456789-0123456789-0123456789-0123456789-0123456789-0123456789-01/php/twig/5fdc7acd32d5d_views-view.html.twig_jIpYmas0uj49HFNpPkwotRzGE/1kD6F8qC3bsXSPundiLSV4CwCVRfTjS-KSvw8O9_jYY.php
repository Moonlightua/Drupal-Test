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

/* themes/contrib/glisseo/templates/views/views-view.html.twig */
class __TwigTemplate_82891cac8fe405c8a2121307f678c33656c07d79202ec2d92b40fdb0dc885b1a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'filters' => [$this, 'block_filters'],
            'attachment_before' => [$this, 'block_attachment_before'],
            'content' => [$this, 'block_content'],
            'content_empty' => [$this, 'block_content_empty'],
            'pager' => [$this, 'block_pager'],
            'attachment_after' => [$this, 'block_attachment_after'],
            'more' => [$this, 'block_more'],
            'footer' => [$this, 'block_footer'],
            'feed' => [$this, 'block_feed'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 9, "block" => 10];
        $filters = ["clean_class" => 1, "escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
        $context["bem_block"] = \Drupal\Component\Utility\Html::getClass(((("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["id"] ?? null)))) . "-") . $this->sandbox->ensureToStringAllowed(($context["display_id"] ?? null))));
        // line 2
        $context["classes"] = [0 =>         // line 3
($context["bem_block"] ?? null), 1 => ((        // line 4
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null)))) : (""))];
        // line 6
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 9
        if (($context["title"] ?? null)) {
            // line 10
            echo "    ";
            $this->displayBlock('title', $context, $blocks);
            // line 13
            echo "  ";
        }
        // line 14
        echo "
  ";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 17
        if (($context["header"] ?? null)) {
            // line 18
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__header\">
      ";
            // line 19
            $this->displayBlock('header', $context, $blocks);
            // line 22
            echo "    </div>
  ";
        }
        // line 24
        echo "
  ";
        // line 25
        if (($context["exposed"] ?? null)) {
            // line 26
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__filters\">
      ";
            // line 27
            $this->displayBlock('filters', $context, $blocks);
            // line 30
            echo "    </div>
  ";
        }
        // line 32
        echo "
  ";
        // line 33
        if (($context["attachment_before"] ?? null)) {
            // line 34
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__attachment ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__attachment--before\">
      ";
            // line 35
            $this->displayBlock('attachment_before', $context, $blocks);
            // line 38
            echo "    </div>
  ";
        }
        // line 40
        echo "
  ";
        // line 41
        if (($context["rows"] ?? null)) {
            // line 42
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__content\">
      ";
            // line 43
            $this->displayBlock('content', $context, $blocks);
            // line 46
            echo "    </div>
  ";
        } elseif (        // line 47
($context["empty"] ?? null)) {
            // line 48
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__content ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__content--empty\">
      ";
            // line 49
            $this->displayBlock('content_empty', $context, $blocks);
            // line 52
            echo "    </div>
  ";
        }
        // line 54
        echo "
  ";
        // line 55
        if (($context["pager"] ?? null)) {
            // line 56
            echo "    ";
            $this->displayBlock('pager', $context, $blocks);
            // line 59
            echo "  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if (($context["attachment_after"] ?? null)) {
            // line 62
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__attachment ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__attachment--after\">
      ";
            // line 63
            $this->displayBlock('attachment_after', $context, $blocks);
            // line 66
            echo "    </div>
  ";
        }
        // line 68
        echo "
  ";
        // line 69
        if (($context["more"] ?? null)) {
            // line 70
            echo "    ";
            $this->displayBlock('more', $context, $blocks);
            // line 73
            echo "  ";
        }
        // line 74
        echo "
  ";
        // line 75
        if (($context["footer"] ?? null)) {
            // line 76
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__footer\">
      ";
            // line 77
            $this->displayBlock('footer', $context, $blocks);
            // line 80
            echo "    </div>
  ";
        }
        // line 82
        echo "
  ";
        // line 83
        if (($context["feed_icons"] ?? null)) {
            // line 84
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__feed-icons\">
      ";
            // line 85
            $this->displayBlock('feed', $context, $blocks);
            // line 88
            echo "    </div>
  ";
        }
        // line 90
        echo "</div>
";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        // line 11
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "
    ";
    }

    // line 19
    public function block_header($context, array $blocks = [])
    {
        // line 20
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
        echo "
      ";
    }

    // line 27
    public function block_filters($context, array $blocks = [])
    {
        // line 28
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
        echo "
      ";
    }

    // line 35
    public function block_attachment_before($context, array $blocks = [])
    {
        // line 36
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null)), "html", null, true);
        echo "
      ";
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        // line 44
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
        echo "
      ";
    }

    // line 49
    public function block_content_empty($context, array $blocks = [])
    {
        // line 50
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
        echo "
      ";
    }

    // line 56
    public function block_pager($context, array $blocks = [])
    {
        // line 57
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true);
        echo "
    ";
    }

    // line 63
    public function block_attachment_after($context, array $blocks = [])
    {
        // line 64
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null)), "html", null, true);
        echo "
      ";
    }

    // line 70
    public function block_more($context, array $blocks = [])
    {
        // line 71
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true);
        echo "
    ";
    }

    // line 77
    public function block_footer($context, array $blocks = [])
    {
        // line 78
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
        echo "
      ";
    }

    // line 85
    public function block_feed($context, array $blocks = [])
    {
        // line 86
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/glisseo/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 86,  352 => 85,  345 => 78,  342 => 77,  335 => 71,  332 => 70,  325 => 64,  322 => 63,  315 => 57,  312 => 56,  305 => 50,  302 => 49,  295 => 44,  292 => 43,  285 => 36,  282 => 35,  275 => 28,  272 => 27,  265 => 20,  262 => 19,  255 => 11,  252 => 10,  247 => 90,  243 => 88,  241 => 85,  236 => 84,  234 => 83,  231 => 82,  227 => 80,  225 => 77,  220 => 76,  218 => 75,  215 => 74,  212 => 73,  209 => 70,  207 => 69,  204 => 68,  200 => 66,  198 => 63,  191 => 62,  189 => 61,  186 => 60,  183 => 59,  180 => 56,  178 => 55,  175 => 54,  171 => 52,  169 => 49,  162 => 48,  160 => 47,  157 => 46,  155 => 43,  150 => 42,  148 => 41,  145 => 40,  141 => 38,  139 => 35,  132 => 34,  130 => 33,  127 => 32,  123 => 30,  121 => 27,  116 => 26,  114 => 25,  111 => 24,  107 => 22,  105 => 19,  100 => 18,  98 => 17,  93 => 15,  90 => 14,  87 => 13,  84 => 10,  82 => 9,  77 => 7,  72 => 6,  70 => 4,  69 => 3,  68 => 2,  66 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set bem_block = ('view-' ~ id|clean_class ~ '-' ~ display_id)|clean_class %}
{% set classes = [
  bem_block,
  dom_id ? 'js-view-dom-id-' ~ dom_id,
] %}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}

  {% if title %}
    {% block title %}
      {{ title }}
    {% endblock %}
  {% endif %}

  {{ title_suffix }}

  {% if header %}
    <div class=\"{{ bem_block }}__header\">
      {% block header %}
        {{ header }}
      {% endblock %}
    </div>
  {% endif %}

  {% if exposed %}
    <div class=\"{{ bem_block }}__filters\">
      {% block filters %}
        {{ exposed }}
      {% endblock %}
    </div>
  {% endif %}

  {% if attachment_before %}
    <div class=\"{{ bem_block }}__attachment {{ bem_block }}__attachment--before\">
      {% block attachment_before %}
        {{ attachment_before }}
      {% endblock attachment_before %}
    </div>
  {% endif %}

  {% if rows %}
    <div class=\"{{ bem_block }}__content\">
      {% block content %}
        {{ rows }}
      {% endblock %}
    </div>
  {% elseif empty %}
    <div class=\"{{ bem_block }}__content {{ bem_block }}__content--empty\">
      {% block content_empty %}
        {{ empty }}
      {% endblock %}
    </div>
  {% endif %}

  {% if pager %}
    {% block pager %}
      {{ pager }}
    {% endblock %}
  {% endif %}

  {% if attachment_after %}
    <div class=\"{{ bem_block }}__attachment {{ bem_block }}__attachment--after\">
      {% block attachment_after %}
        {{ attachment_after }}
      {% endblock %}
    </div>
  {% endif %}

  {% if more %}
    {% block more %}
      {{ more }}
    {% endblock %}
  {% endif %}

  {% if footer %}
    <div class=\"{{ bem_block }}__footer\">
      {% block footer %}
        {{ footer }}
      {% endblock %}
    </div>
  {% endif %}

  {% if feed_icons %}
    <div class=\"{{ bem_block }}__feed-icons\">
      {% block feed %}
        {{ feed_icons }}
      {% endblock %}
    </div>
  {% endif %}
</div>
", "themes/contrib/glisseo/templates/views/views-view.html.twig", "W:\\domains\\drupal8.localhost\\themes\\contrib\\glisseo\\templates\\views\\views-view.html.twig");
    }
}
