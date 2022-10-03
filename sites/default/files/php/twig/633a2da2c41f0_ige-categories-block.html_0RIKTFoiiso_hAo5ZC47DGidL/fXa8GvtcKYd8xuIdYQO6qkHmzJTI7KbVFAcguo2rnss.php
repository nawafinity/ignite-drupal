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

/* modules/custom/igemod/templates/ige-categories-block.html.twig */
class __TwigTemplate_339597efa3c77a9a3ddaaeb16d551b7411d473527c89a8b709727fb8018aacd2 extends \Twig\Template
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
        echo "<section class=\"ige-section\">
  <div class=\"container-xl\">
    <div class=\"ige-section-title ige-section-title--under\">
      <h2>";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Categories"));
        echo "</h2>
    </div>
    <div class=\"ige-section-content\">
      <div class=\"ige-initiatives-list\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 9
            echo "          <div class=\"ige-initiatives-list__item bg-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "field_variant", [], "any", false, false, true, 9), "value", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\">
            ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "name", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/igemod/templates/ige-categories-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  60 => 10,  55 => 9,  51 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ige-section\">
  <div class=\"container-xl\">
    <div class=\"ige-section-title ige-section-title--under\">
      <h2>{{ \"Categories\"|t }}</h2>
    </div>
    <div class=\"ige-section-content\">
      <div class=\"ige-initiatives-list\">
        {% for key,value in entries %}
          <div class=\"ige-initiatives-list__item bg-{{ value.field_variant.value }}\">
            {{ value.name.value }}
          </div>
        {% endfor %}

      </div>
    </div>
  </div>
</section>
", "modules/custom/igemod/templates/ige-categories-block.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\modules\\custom\\igemod\\templates\\ige-categories-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 8);
        static $filters = array("t" => 4, "escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['t', 'escape'],
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
