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

/* @ignite/layout/page.html.twig */
class __TwigTemplate_af2b5a9f14a5bc55e35a30fa4cb43a067cc773eede1f9c96029116ba49e7eb78 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->loadTemplate("@ignite/partials/header.html.twig", "@ignite/layout/page.html.twig", 2)->display($context);
        // line 3
        echo "

<!-- END Carousel -->
<!-- main-area -->
<main>
  ";
        // line 8
        if (($context["page_title"] ?? null)) {
            // line 9
            echo "    <div class=\"ige-page-title my-px-30\">
      <div class=\"container-xl\">
        <div class=\"inner\">
          <h2 class=\"m-0 p-0\">";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title"] ?? null), 12, $this->source), "html", null, true);
            echo "</h2>
        </div>
      </div>
    </div>
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        $this->displayBlock('main', $context, $blocks);
        // line 21
        echo "</main>
<!-- END main -->


";
        // line 26
        $this->loadTemplate("@ignite/partials/footer.html.twig", "@ignite/layout/page.html.twig", 26)->display($context);
    }

    // line 18
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@ignite/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  79 => 18,  75 => 26,  69 => 21,  67 => 18,  64 => 17,  56 => 12,  51 => 9,  49 => 8,  42 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Header #}
{% include '@ignite/partials/header.html.twig' %}


<!-- END Carousel -->
<!-- main-area -->
<main>
  {% if page_title %}
    <div class=\"ige-page-title my-px-30\">
      <div class=\"container-xl\">
        <div class=\"inner\">
          <h2 class=\"m-0 p-0\">{{ page_title }}</h2>
        </div>
      </div>
    </div>
  {% endif %}

  {% block main %}
    {{ page.content }}
  {% endblock %}
</main>
<!-- END main -->


{# Footer #}
{% include '@ignite/partials/footer.html.twig' %}
", "@ignite/layout/page.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 2, "if" => 8, "block" => 18);
        static $filters = array("escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if', 'block'],
                ['escape'],
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
