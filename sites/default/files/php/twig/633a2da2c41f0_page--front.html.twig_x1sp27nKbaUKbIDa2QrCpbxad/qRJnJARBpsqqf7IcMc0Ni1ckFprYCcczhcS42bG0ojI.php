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

/* themes/ignite/templates/customize/page--front.html.twig */
class __TwigTemplate_5c84f56c9f86a6c53bf16fb00767b56e6bb6c3643020e3a0aea15acc3247a32e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ignite/layout/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@ignite/layout/page.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        $this->loadTemplate("@ignite/partials/sponsors.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 4)->display($context);
        // line 5
        echo "
  <div class=\"mt-2\">
    ";
        // line 7
        $this->loadTemplate("@ignite/partials/clips.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 7)->display($context);
        // line 8
        echo "    <div class=\"my-2 text-primary\">
      ";
        // line 9
        $this->loadTemplate("@ignite/partials/texts.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 9)->display($context);
        // line 10
        echo "    </div>
  </div>
  <div class=\"mt-2\">
    ";
        // line 13
        $this->loadTemplate("@ignite/partials/clips.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 13)->display($context);
        // line 14
        echo "    <div class=\"my-2 text-primary\">
      ";
        // line 15
        $this->loadTemplate("@ignite/partials/texts.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 15)->display($context);
        // line 16
        echo "    </div>
  </div>

  <section class=\"my-px-40\">
    <div class=\"container-xl\">
      ";
        // line 21
        $this->loadTemplate("@ignite/partials/widgets/about.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 21)->display($context);
        // line 22
        echo "    </div>
  </section>

  ";
        // line 25
        $this->loadTemplate("@ignite/partials/widgets/statistics.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 25)->display($context);
        // line 26
        echo "
  ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "

  ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "news_area", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/customize/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  97 => 27,  94 => 26,  92 => 25,  87 => 22,  85 => 21,  78 => 16,  76 => 15,  73 => 14,  71 => 13,  66 => 10,  64 => 9,  61 => 8,  59 => 7,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@ignite/layout/page.html.twig\" %}

{% block main %}
  {% include \"@ignite/partials/sponsors.html.twig\" %}

  <div class=\"mt-2\">
    {% include \"@ignite/partials/clips.html.twig\" %}
    <div class=\"my-2 text-primary\">
      {% include \"@ignite/partials/texts.html.twig\" %}
    </div>
  </div>
  <div class=\"mt-2\">
    {% include \"@ignite/partials/clips.html.twig\" %}
    <div class=\"my-2 text-primary\">
      {% include \"@ignite/partials/texts.html.twig\" %}
    </div>
  </div>

  <section class=\"my-px-40\">
    <div class=\"container-xl\">
      {% include \"@ignite/partials/widgets/about.html.twig\" %}
    </div>
  </section>

  {% include \"@ignite/partials/widgets/statistics.html.twig\" %}

  {{ page.content }}

  {{ page.news_area }}
{% endblock %}
", "themes/ignite/templates/customize/page--front.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\customize\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 4);
        static $filters = array("escape" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
