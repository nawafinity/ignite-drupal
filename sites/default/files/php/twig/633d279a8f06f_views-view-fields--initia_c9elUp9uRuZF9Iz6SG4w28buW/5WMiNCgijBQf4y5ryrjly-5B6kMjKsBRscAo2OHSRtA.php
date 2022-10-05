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
class __TwigTemplate_1de47843a6da06cc4821e916a3173d3a23401d6d08d56eeca809364589aed4e1 extends \Twig\Template
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
      ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_start_date", [], "any", false, false, true, 11), "content", [], "any", false, false, true, 11)) {
            // line 12
            echo "        ";
            $context["today"] = twig_date_format_filter($this->env, "now", "U");
            // line 13
            echo "        ";
            $context["start_date"] = twig_date_format_filter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_start_date", [], "any", false, false, true, 13), "content", [], "any", false, false, true, 13), 13, $this->source)), "U");
            // line 14
            echo "        ";
            $context["difference"] = (($context["start_date"] ?? null) - ($context["today"] ?? null));
            // line 15
            echo "        ";
            $context["days_left"] = twig_round((((($context["difference"] ?? null) / 60) / 60) / 24), 0, "ceil");
            // line 16
            echo "
        <h5><span class=\"badge bg-secondary\">";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["days_left"] ?? null), 17, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Days left"));
            echo "</span></h5>
      ";
        }
        // line 19
        echo "      <h4 class=\"card-title mt-4\">";
        (((twig_length_filter($this->env, ($context["title"] ?? null)) > 20)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_slice($this->env, ($context["title"] ?? null), 0, 80) . "..."), "html", null, true))) : (print (($context["title"] ?? null))));
        echo "</h4>
      <p class=\"card-text mt-4\">";
        // line 20
        (((twig_length_filter($this->env, ($context["summary"] ?? null)) > 40)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_slice($this->env, ($context["summary"] ?? null), 0, 40) . "..."), "html", null, true))) : (print (($context["summary"] ?? null))));
        echo "</p>
      <a href=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_number_format_filter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "nid", [], "any", false, false, true, 21), "content", [], "any", false, false, true, 21), 21, $this->source)))]), "html", null, true);
        echo "\"
         class=\"btn btn-primary float-end\">";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Register Now"));
        echo "</a>
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
        return array (  98 => 22,  94 => 21,  90 => 20,  85 => 19,  78 => 17,  75 => 16,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  61 => 11,  52 => 9,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
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
      {% if fields.field_start_date.content %}
        {% set today = 'now'|date('U') %}
        {% set start_date = fields.field_start_date.content|striptags|date('U') %}
        {% set difference = start_date - today %}
        {% set days_left = (difference / 60 / 60 / 24)|round(0, 'ceil') %}

        <h5><span class=\"badge bg-secondary\">{{ days_left }} {{ \"Days left\"|t }}</span></h5>
      {% endif %}
      <h4 class=\"card-title mt-4\">{{ title|length > 20 ? title|slice(0, 80)|raw ~ '...' : title|raw }}</h4>
      <p class=\"card-text mt-4\">{{ summary|length > 40 ? summary|slice(0, 40)|raw ~ '...' : summary|raw }}</p>
      <a href=\"{{ url('entity.node.canonical', {'node': fields.nid.content|striptags|number_format}) }}\"
         class=\"btn btn-primary float-end\">{{ \"Register Now\"|t }}</a>
    </div>
  </div>
</div>
", "themes/ignite/templates/views/views-view-fields--initiatives.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\views\\views-view-fields--initiatives.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 9);
        static $filters = array("trim" => 1, "striptags" => 1, "escape" => 9, "date" => 12, "round" => 15, "t" => 17, "length" => 19, "raw" => 19, "slice" => 19, "number_format" => 21);
        static $functions = array("file_url" => 9, "url" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['trim', 'striptags', 'escape', 'date', 'round', 't', 'length', 'raw', 'slice', 'number_format'],
                ['file_url', 'url']
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
