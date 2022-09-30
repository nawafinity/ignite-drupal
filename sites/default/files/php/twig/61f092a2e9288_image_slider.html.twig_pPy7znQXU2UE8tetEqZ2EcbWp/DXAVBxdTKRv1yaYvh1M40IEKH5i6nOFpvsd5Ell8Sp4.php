<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/ignite/templates/override/image_slider.html.twig */
class __TwigTemplate_13e52cbae59b3aa797229df0372f9ceb8de496f8f47953de6330dbb971439504 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Carousel -->
<div id=\"mainSlider\" class=\"carousel slide carousel-fade slider\" data-bs-ride=\"carousel\">
  <div class=\"carousel-indicators\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "image", [], "any", false, false, true, 4));
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            // line 5
            echo "      <button type=\"button\" data-bs-target=\"#mainSlider\" data-bs-slide-to=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 5, $this->source), "html", null, true);
            echo "\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 5, $this->source), "html", null, true);
            echo "\"
              ";
            // line 6
            if (($context["key"] == 0)) {
                echo "class=\"active\"";
            }
            echo "></button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </div>

  <div class=\"carousel-inner h-100\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "image", [], "any", false, false, true, 11));
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            // line 12
            echo "      <div class=\"carousel-item";
            if (($context["key"] == 0)) {
                echo " active";
            }
            echo " h-100\">
        <div class=\"w-100 h-100 slider-item\" style=\"background-image: url(";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "image_url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo ")\"></div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </div>
  <button
    class=\"carousel-control-prev\"
    type=\"button\"
    data-bs-target=\"#mainSlider\"
    data-bs-slide=\"prev\"
  >
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous"));
        echo "</span>
  </button>
  <button
    class=\"carousel-control-next\"
    type=\"button\"
    data-bs-target=\"#mainSlider\"
    data-bs-slide=\"next\"
  >
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next"));
        echo "</span>
  </button>
</div>
<!-- END Carousel -->
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/override/image_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 33,  100 => 24,  90 => 16,  81 => 13,  74 => 12,  70 => 11,  65 => 8,  55 => 6,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ignite/templates/override/image_slider.html.twig", "C:\\xampp\\htdocs\\ignite\\themes\\ignite\\templates\\override\\image_slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4, "if" => 6);
        static $filters = array("escape" => 5, "t" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
