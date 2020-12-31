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

/* themes/custom/MyLifeBeLike/templates/theme/dlog-hero--dlog-node-article.html.twig */
class __TwigTemplate_31a1a5beffedd8df1185fb931067cd24db7040c2abe8d23dacff130948215331 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 10, "for" => 12];
        $filters = ["escape" => 9, "image_style" => 11, "t" => 15, "raw" => 35];
        $functions = ["file_url" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 'image_style', 't', 'raw'],
                ['file_url']
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
        $context["bem_block"] = "dlog-hero";
        // line 2
        $context["classes"] = [0 =>         // line 3
($context["bem_block"] ?? null), 1 => (((        // line 4
($context["image"] ?? null) && ($context["video"] ?? null))) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "--image-and-video")) : ("")), 2 => (((        // line 5
($context["image"] ?? null) &&  !($context["video"] ?? null))) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "--image")) : ("")), 3 => (( !        // line 6
($context["image"] ?? null)) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "--plain")) : ("")), 4 => ((        // line 7
($context["subtitle"] ?? null)) ? (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "--subtitle")) : (($this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)) . "--no-subtitle")))];
        // line 9
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 10
        if ((($context["image"] ?? null) && ($context["video"] ?? null))) {
            // line 11
            echo "    <video poster=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed(($context["image"] ?? null)), "dlog_hero"), "html", null, true);
            echo "\" autoplay loop muted class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__video\">
      ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["video"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["video_uri"]) {
                // line 13
                echo "        <source src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($context["video_uri"])]), "html", null, true);
                echo "\" type=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["type"]), "html", null, true);
                echo "\">
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['video_uri'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Your browser does not support the video tag"));
            echo "
    </video>
  ";
        } elseif (        // line 17
($context["image"] ?? null)) {
            // line 18
            echo "    <img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed(($context["image"] ?? null)), "dlog_hero"), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "\" class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__image\">
  ";
        }
        // line 20
        echo "

  <div class=\"";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__content\">
    ";
        // line 23
        if (($context["tags"] ?? null)) {
            // line 24
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__tags\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 26
                echo "          <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tag"], "path", [])), "html", null, true);
                echo "\" class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
                echo "__tag\">
            ";
                // line 27
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tag"], "label", [])), "html", null, true);
                echo "
          </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "      </div>
    ";
        }
        // line 32
        echo "    <h1 class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__title\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h1>

    ";
        // line 34
        if (($context["subtitle"] ?? null)) {
            // line 35
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__subtitle\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["subtitle"] ?? null)));
            echo "</div>
    ";
        }
        // line 37
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/MyLifeBeLike/templates/theme/dlog-hero--dlog-node-article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 37,  160 => 35,  158 => 34,  150 => 32,  146 => 30,  137 => 27,  130 => 26,  126 => 25,  121 => 24,  119 => 23,  115 => 22,  111 => 20,  101 => 18,  99 => 17,  93 => 15,  82 => 13,  78 => 12,  71 => 11,  69 => 10,  64 => 9,  62 => 7,  61 => 6,  60 => 5,  59 => 4,  58 => 3,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set bem_block = 'dlog-hero' %}
{% set classes = [
  bem_block,
  image and video ? bem_block ~ '--image-and-video',
  image and not video ? bem_block ~ '--image',
  not image ? bem_block ~ '--plain',
  subtitle ? bem_block ~ '--subtitle' : bem_block ~ '--no-subtitle',
] %}
<div{{ attributes.addClass(classes) }}>
  {% if image and video %}
    <video poster=\"{{ image|image_style('dlog_hero') }}\" autoplay loop muted class=\"{{ bem_block }}__video\">
      {% for type, video_uri in video %}
        <source src=\"{{ file_url(video_uri) }}\" type=\"{{ type }}\">
      {% endfor %}
      {{ 'Your browser does not support the video tag'|t }}
    </video>
  {% elseif image %}
    <img src=\"{{ image|image_style('dlog_hero') }}\" alt=\"{{ title }}\" class=\"{{ bem_block }}__image\">
  {% endif %}


  <div class=\"{{ bem_block }}__content\">
    {% if tags %}
      <div class=\"{{ bem_block }}__tags\">
        {% for tag in tags %}
          <a href=\"{{ tag.path }}\" class=\"{{ bem_block }}__tag\">
            {{ tag.label }}
          </a>
        {% endfor %}
      </div>
    {% endif %}
    <h1 class=\"{{ bem_block }}__title\">{{ title }}</h1>

    {% if subtitle %}
      <div class=\"{{ bem_block }}__subtitle\">{{ subtitle|raw }}</div>
    {% endif %}
  </div>
</div>
", "themes/custom/MyLifeBeLike/templates/theme/dlog-hero--dlog-node-article.html.twig", "W:\\domains\\drupal8.localhost\\themes\\custom\\MyLifeBeLike\\templates\\theme\\dlog-hero--dlog-node-article.html.twig");
    }
}
