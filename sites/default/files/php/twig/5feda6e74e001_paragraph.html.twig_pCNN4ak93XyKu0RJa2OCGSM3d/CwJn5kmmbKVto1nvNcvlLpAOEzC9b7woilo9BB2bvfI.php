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

/* themes/contrib/glisseo/templates/content/paragraph/paragraph.html.twig */
class __TwigTemplate_4232ec85b0c1b398e16d92ce3b1e3d71f25bb2679a542c8ba3b32fa19ad43a4d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 2];
        $filters = ["escape" => 1];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
        $this->displayBlock('paragraph', $context, $blocks);
        // line 11
        echo "</div>
";
    }

    // line 2
    public function block_paragraph($context, array $blocks = [])
    {
        // line 3
        echo "
    <div class=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bem_block"] ?? null)), "html", null, true);
        echo "__content\">
      ";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "    </div>

  ";
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
        return "themes/contrib/glisseo/templates/content/paragraph/paragraph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 6,  87 => 5,  81 => 8,  79 => 5,  75 => 4,  72 => 3,  69 => 2,  64 => 11,  62 => 2,  57 => 1,);
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
  {% block paragraph %}

    <div class=\"{{ bem_block }}__content\">
      {% block content %}
        {{ content }}
      {% endblock %}
    </div>

  {% endblock paragraph %}
</div>
", "themes/contrib/glisseo/templates/content/paragraph/paragraph.html.twig", "W:\\domains\\drupal8.localhost\\themes\\contrib\\glisseo\\templates\\content\\paragraph\\paragraph.html.twig");
    }
}
