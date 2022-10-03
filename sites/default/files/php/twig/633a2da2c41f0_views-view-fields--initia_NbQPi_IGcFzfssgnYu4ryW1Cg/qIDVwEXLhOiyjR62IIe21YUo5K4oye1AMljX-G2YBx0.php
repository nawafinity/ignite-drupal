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

/* themes/ignite/templates/views/views-view-fields--initiatives.html.twig */
class __TwigTemplate_85910c92630f4a1759742cb8c6786094da6628e44774dc0a4e500f9fe631682e extends \Twig\Template
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
        $context["title"] = twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 1), "content", [], "any", false, false, true, 1), 1, $this->source)));
        // line 2
        $context["summary"] = twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_summary", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2), 2, $this->source)));
        // line 3
        $context["background"] = twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_background", [], "any", false, false, true, 3);
        // line 4
        echo "
<div class=\"ige-block-initiatives__item\">
  <div class=\"card mx-2 rounded-2 overflow-hidden\">

    <div
      class=\"image\"";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_background", [], "any", false, false, true, 9), "content", [], "any", false, false, true, 9)) {
            echo " style=\"background-image: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_background", [], "any", false, false, true, 9), "content", [], "any", false, false, true, 9), 9, $this->source)))), "html", null, true);
            echo ")\" ";
        }
        echo "></div>
    <div class=\"card-body\">
      <h5><span class=\"badge bg-secondary\">14 Days Left</span></h5>
      <h4 class=\"card-title mt-4\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 12), "content", [], "any", false, false, true, 12), 12, $this->source))), "html", null, true);
        echo "</h4>
      <p class=\"card-text mt-4\">Some quick example text to build on the card title and make up the bulk of
        the card's content.</p>
      <a href=\"#\" class=\"btn btn-primary float-end\">Register Now</a>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/views/views-view-fields--initiatives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  52 => 9,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set title = fields.title.content|striptags|trim %}
{% set summary = fields.field_initiative_summary.content|striptags|trim %}
{% set background = fields.field_initiative_background %}

<div class=\"ige-block-initiatives__item\">
  <div class=\"card mx-2 rounded-2 overflow-hidden\">

    <div
      class=\"image\"{% if fields.field_initiative_background.content %} style=\"background-image: url({{ file_url(fields.field_initiative_background.content|striptags|trim) }})\" {% endif %}></div>
    <div class=\"card-body\">
      <h5><span class=\"badge bg-secondary\">14 Days Left</span></h5>
      <h4 class=\"card-title mt-4\">{{ fields.title.content|striptags|trim }}</h4>
      <p class=\"card-text mt-4\">Some quick example text to build on the card title and make up the bulk of
        the card's content.</p>
      <a href=\"#\" class=\"btn btn-primary float-end\">Register Now</a>
    </div>
  </div>
</div>
", "themes/ignite/templates/views/views-view-fields--initiatives.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\views\\views-view-fields--initiatives.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 9);
        static $filters = array("trim" => 1, "striptags" => 1, "escape" => 9);
        static $functions = array("file_url" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['trim', 'striptags', 'escape'],
                ['file_url']
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
