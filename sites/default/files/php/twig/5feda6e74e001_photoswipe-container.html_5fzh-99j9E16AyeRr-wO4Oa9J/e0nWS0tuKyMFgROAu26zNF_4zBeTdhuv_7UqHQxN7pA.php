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

/* modules/contrib/photoswipe/templates/photoswipe-container.html.twig */
class __TwigTemplate_ed1f0a94d0a21bee07fba26288a6a81f6741258eabef667d1ca8fd2713d4e799 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["t" => 37];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t'],
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
        echo "<div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">

  ";
        // line 8
        echo "  <div class=\"pswp__bg\"></div>

  ";
        // line 11
        echo "  <div class=\"pswp__scroll-wrap\">

    ";
        // line 18
        echo "
    <div class=\"pswp__container\">
      <div class=\"pswp__item\"></div>
      <div class=\"pswp__item\"></div>
      <div class=\"pswp__item\"></div>
    </div>

    ";
        // line 29
        echo "    <div class=\"pswp__ui pswp__ui--hidden\">

      <div class=\"pswp__top-bar\">

        ";
        // line 34
        echo "
        <div class=\"pswp__counter\"></div>

        <button class=\"pswp__button pswp__button--close\" title=\"";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close (Esc)"));
        echo "\"></button>

        <button class=\"pswp__button pswp__button--share\" title=\"";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share"));
        echo "\"></button>

        <button class=\"pswp__button pswp__button--fs\" title=\"";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle fullscreen"));
        echo "\"></button>

        <button class=\"pswp__button pswp__button--zoom\" title=\"";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Zoom in/out"));
        echo "\"></button>

        ";
        // line 50
        echo "
        <div class=\"pswp__preloader\">
          <div class=\"pswp__preloader__icn\">
            <div class=\"pswp__preloader__cut\">
              <div class=\"pswp__preloader__donut\"></div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
        <div class=\"pswp__share-tooltip\"></div>
      </div>

      <button class=\"pswp__button pswp__button--arrow--left\" title=\"";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous (arrow left)"));
        echo "\">
      </button>

      <button class=\"pswp__button pswp__button--arrow--right\" title=\"";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next (arrow right)"));
        echo "\">
      </button>

      <div class=\"pswp__caption\">
        <div class=\"pswp__caption__center\"></div>
      </div>

    </div>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/photoswipe/templates/photoswipe-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 67,  123 => 64,  107 => 50,  102 => 43,  97 => 41,  92 => 39,  87 => 37,  82 => 34,  76 => 29,  67 => 18,  63 => 11,  59 => 8,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Root element of PhotoSwipe. Must have class pswp. #}
<div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">

  {#
    Background of PhotoSwipe.
    It's a separate element as animating opacity is faster than rgba().
  #}
  <div class=\"pswp__bg\"></div>

  {# Slides wrapper with overflow:hidden. #}
  <div class=\"pswp__scroll-wrap\">

    {#
      Container that holds slides.
      PhotoSwipe keeps only 3 of them in the DOM to save memory.
      Don't modify these 3 pswp__item elements, data is added later on.
    #}

    <div class=\"pswp__container\">
      <div class=\"pswp__item\"></div>
      <div class=\"pswp__item\"></div>
      <div class=\"pswp__item\"></div>
    </div>

    {#
      Default (PhotoSwipeUI_Default) interface on top of sliding area.
      Can be changed.
    #}
    <div class=\"pswp__ui pswp__ui--hidden\">

      <div class=\"pswp__top-bar\">

        {# Controls are self-explanatory. Order can be changed. #}

        <div class=\"pswp__counter\"></div>

        <button class=\"pswp__button pswp__button--close\" title=\"{{ 'Close (Esc)'|t }}\"></button>

        <button class=\"pswp__button pswp__button--share\" title=\"{{ 'Share'|t }}\"></button>

        <button class=\"pswp__button pswp__button--fs\" title=\"{{ 'Toggle fullscreen'|t }}\"></button>

        <button class=\"pswp__button pswp__button--zoom\" title=\"{{ 'Zoom in/out'|t }}\"></button>

        {#
          Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR
          Element will get class pswp__preloader--active when preloader is
          running.
        #}

        <div class=\"pswp__preloader\">
          <div class=\"pswp__preloader__icn\">
            <div class=\"pswp__preloader__cut\">
              <div class=\"pswp__preloader__donut\"></div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
        <div class=\"pswp__share-tooltip\"></div>
      </div>

      <button class=\"pswp__button pswp__button--arrow--left\" title=\"{{ 'Previous (arrow left)'|t }}\">
      </button>

      <button class=\"pswp__button pswp__button--arrow--right\" title=\"{{ 'Next (arrow right)'|t }}\">
      </button>

      <div class=\"pswp__caption\">
        <div class=\"pswp__caption__center\"></div>
      </div>

    </div>

  </div>

</div>
", "modules/contrib/photoswipe/templates/photoswipe-container.html.twig", "W:\\domains\\drupal8.localhost\\modules\\contrib\\photoswipe\\templates\\photoswipe-container.html.twig");
    }
}
