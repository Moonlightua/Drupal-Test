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

/* modules/contrib/youtube/templates/youtube-video.html.twig */
class __TwigTemplate_7b3adc2b5daae407409898e048721b579574f9a74b0542e11e4c03022b4d5f4b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 28];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 28
        echo "<figure";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  <iframe";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo " allowfullscreen></iframe>
</figure>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/youtube/templates/youtube-video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 29,  55 => 28,);
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
 * Default theme implementation to display an embedded YouTube video.
 *
 * Available variables:
 * - video_id: The ID of the YouTube video. Used to construct the iframe's src.
 * - entity_title: The title of the entity with the YouTube video field value.
 * - settings: An array of settings selected in the module's configuration and
 *   in the field's display settings.
 * - content_attributes: array of HTML attributes populated by modules, intended
 *   to be added to the iframe of the embedded YouTube video player.
 *   - src: The URL of the YouTube video to be embedded. Contains a query string
 *     with parameter values derived from options selected in the module's
 *     configuration and the field's display settings.
 *   - width: A pixel or percentage value, derived from the display settings.
 *   - height: A pixel or percentage value, derived from the display settings.
 *   - id: A valid HTML ID and guaranteed unique.
 *   - title: A title value, assigned for accessibility.
 * - attributes: array of HTML attributes populated by modules, intended to be
 *   added to the element wrapping the embedded YouTube video player.
 *
 * @see template_preprocess_youtube_video()
 *
 * @ingroup themeable
 */
#}
<figure{{ attributes }}>
  <iframe{{ content_attributes }} allowfullscreen></iframe>
</figure>
", "modules/contrib/youtube/templates/youtube-video.html.twig", "W:\\domains\\drupal8.localhost\\modules\\contrib\\youtube\\templates\\youtube-video.html.twig");
    }
}
