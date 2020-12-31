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

/* core/themes/stable/templates/content-edit/filter-guidelines.html.twig */
class __TwigTemplate_eb76b25139d4ab899b2b492350258f1c9ede086621cffddcb0dc58afcd1a4a30 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 20];
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
        // line 20
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  <h4>";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["format"] ?? null), "label", [])), "html", null, true);
        echo "</h4>
  ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tips"] ?? null)), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/content-edit/filter-guidelines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  60 => 21,  55 => 20,);
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
 * Theme override for guidelines for a text format.
 *
 * Available variables:
 * - format: Contains information about the current text format, including the
 *   following:
 *   - name: The name of the text format, potentially unsafe and needs to be
 *     escaped.
 *   - format: The machine name of the text format, e.g. 'basic_html'.
 * - attributes: HTML attributes for the containing element.
 * - tips: Descriptions and a CSS ID in the form of 'module-name/filter-id'
 *   (only used when 'long' is TRUE) for each filter in one or more text
 *   formats.
 *
 * @see template_preprocess_filter_tips()
 */
#}
<div{{ attributes }}>
  <h4>{{ format.label }}</h4>
  {{ tips }}
</div>
", "core/themes/stable/templates/content-edit/filter-guidelines.html.twig", "W:\\domains\\drupal8.localhost\\core\\themes\\stable\\templates\\content-edit\\filter-guidelines.html.twig");
    }
}
