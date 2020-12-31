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

/* themes/contrib/glisseo/templates/content/media/media.html.twig */
class __TwigTemplate_89b9882a7476b4ccadf08cee830c5fd36a3e843f4200c9e593cb5c9971c9927c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'media' => [$this, 'block_media'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 2, "if" => 4];
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
        echo "<article";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["bem_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 2
        $this->displayBlock('media', $context, $blocks);
        // line 10
        echo "</article>
";
    }

    // line 2
    public function block_media($context, array $blocks = [])
    {
        // line 3
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_suffix"] ?? null), "contextual_links", [])), "html", null, true);
        echo "
    ";
        // line 4
        if (($context["content"] ?? null)) {
            // line 5
            echo "      ";
            $this->displayBlock('content', $context, $blocks);
            // line 8
            echo "    ";
        }
        // line 9
        echo "  ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/glisseo/templates/content/media/media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 6,  89 => 5,  85 => 9,  82 => 8,  79 => 5,  77 => 4,  72 => 3,  69 => 2,  64 => 10,  62 => 2,  57 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<article{{ attributes.addClass(bem_classes) }}>
  {% block media %}
    {{ title_suffix.contextual_links }}
    {% if content %}
      {% block content %}
        {{ content }}
      {% endblock %}
    {% endif %}
  {% endblock media %}
</article>
", "themes/contrib/glisseo/templates/content/media/media.html.twig", "W:\\domains\\drupal8.localhost\\themes\\contrib\\glisseo\\templates\\content\\media\\media.html.twig");
    }
}
