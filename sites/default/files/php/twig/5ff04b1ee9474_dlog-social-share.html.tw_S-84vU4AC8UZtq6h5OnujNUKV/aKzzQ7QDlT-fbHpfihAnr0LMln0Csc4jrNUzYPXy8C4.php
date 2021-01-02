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

/* modules/custom/dlog/templates/dlog-social-share.html.twig */
class __TwigTemplate_53ace9ba4cc0828dccdd27a38c1c70a1e3e9bf46ee91b3896d4288f4256cce4c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "for" => 11];
        $filters = ["escape" => 8];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
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
        $context["share_links"] = ["vk" => ((("https://vk.com/share.php?url=" . $this->sandbox->ensureToStringAllowed(        // line 2
($context["url"] ?? null))) . "&title=") . $this->sandbox->ensureToStringAllowed(($context["label"] ?? null))), "facebook" => ("https://facebook.com/sharer/sharer.php/u=" . $this->sandbox->ensureToStringAllowed(        // line 3
($context["url"] ?? null))), "twitter" => ((("https://twitter.com/intent/tweet?url=" . $this->sandbox->ensureToStringAllowed(        // line 4
($context["url"] ?? null))) . "&text=") . $this->sandbox->ensureToStringAllowed(($context["label"] ?? null))), "telegram" => ((("https://telegram.me/share/url?=" . $this->sandbox->ensureToStringAllowed(        // line 5
($context["url"] ?? null))) . "&text=") . $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)))];
        // line 7
        $context["bem_block"] = "dlog-social-share";
        // line 8
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["bem_block"] ?? null)], "method")), "html", null, true);
        echo ">
  <div class=\"";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__label\">Share /</div>
    <div class=\"";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__links\">
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["share_links"] ?? null));
        foreach ($context['_seq'] as $context["social_network"] => $context["share_url"]) {
            // line 12
            echo "      <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["share_url"]), "html", null, true);
            echo "\"
         class=\"";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__link ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
            echo "__link--";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["social_network"]), "html", null, true);
            echo "\"
         rel=\"noopener nofollow\" target=\"_blank\">
      </a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['social_network'], $context['share_url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/dlog/templates/dlog-social-share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  85 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  63 => 8,  61 => 7,  59 => 5,  58 => 4,  57 => 3,  56 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set share_links = {
  'vk': 'https://vk.com/share.php?url=' ~ url ~ '&title=' ~ label,
  'facebook': 'https://facebook.com/sharer/sharer.php/u=' ~ url,
  'twitter': 'https://twitter.com/intent/tweet?url=' ~ url ~ '&text=' ~ label,
  'telegram': 'https://telegram.me/share/url?=' ~ url ~ '&text=' ~ label,
}%}
{% set bem_block = 'dlog-social-share' %}
<div{{ attributes.addClass(bem_block) }}>
  <div class=\"{{ bem_block }}__label\">Share /</div>
    <div class=\"{{ bem_block }}__links\">
      {% for social_network, share_url in share_links %}
      <a href=\"{{ share_url }}\"
         class=\"{{ bem_block }}__link {{ bem_block }}__link--{{ social_network }}\"
         rel=\"noopener nofollow\" target=\"_blank\">
      </a>
      {% endfor %}
    </div>

</div>
", "modules/custom/dlog/templates/dlog-social-share.html.twig", "W:\\domains\\drupal8.localhost\\modules\\custom\\dlog\\templates\\dlog-social-share.html.twig");
    }
}
