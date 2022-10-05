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

/* themes/ignite/templates/views/views-view-fields--frontpage.html.twig */
class __TwigTemplate_024a946f7a991a0f7876311e34bb6f28ccc56948d524f43905e6f1450d775ab5 extends \Twig\Template
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
        echo "<div class=\"ige-block-initiatives__item\">
  <div class=\"card mx-2 rounded-2 overflow-hidden\">
    <div class=\"image\"";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_background", [], "any", false, false, true, 5), "content", [], "any", false, false, true, 5)) {
            echo " style=\"background-image: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_background", [], "any", false, false, true, 5), "content", [], "any", false, false, true, 5), 5, $this->source)))), "html", null, true);
            echo ")\" ";
        }
        echo "></div>
    <div class=\"card-body\">
      ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_start_date", [], "any", false, false, true, 7), "content", [], "any", false, false, true, 7)) {
            // line 8
            echo "        ";
            $context["today"] = twig_date_format_filter($this->env, "now", "U");
            // line 9
            echo "        ";
            $context["start_date"] = twig_date_format_filter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_start_date", [], "any", false, false, true, 9), "content", [], "any", false, false, true, 9), 9, $this->source)), "U");
            // line 10
            echo "        ";
            $context["difference"] = (($context["start_date"] ?? null) - ($context["today"] ?? null));
            // line 11
            echo "        ";
            $context["days_left"] = twig_round((((($context["difference"] ?? null) / 60) / 60) / 24), 0, "ceil");
            // line 12
            echo "
        <h5><span class=\"badge bg-secondary\">";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["days_left"] ?? null), 13, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Days left"));
            echo "</span></h5>
      ";
        }
        // line 15
        echo "      <h4 class=\"card-title mt-4\">";
        (((twig_length_filter($this->env, ($context["title"] ?? null)) > 20)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_slice($this->env, ($context["title"] ?? null), 0, 80) . "..."), "html", null, true))) : (print (($context["title"] ?? null))));
        echo "</h4>
      <p class=\"card-text mt-4\">";
        // line 16
        (((twig_length_filter($this->env, ($context["summary"] ?? null)) > 40)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_slice($this->env, ($context["summary"] ?? null), 0, 40) . "..."), "html", null, true))) : (print (($context["summary"] ?? null))));
        echo "</p>
      <a href=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_number_format_filter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "nid", [], "any", false, false, true, 17), "content", [], "any", false, false, true, 17), 17, $this->source)))]), "html", null, true);
        echo "\" class=\"btn btn-link float-end\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Register Now"));
        echo "</a>
    </div>
  </div>
</div>

";
        // line 27
        echo "
";
        // line 39
        echo "
";
        // line 42
        echo "
";
        // line 45
        echo "
";
        // line 48
        echo "
";
        // line 53
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/views/views-view-fields--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 53,  111 => 48,  108 => 45,  105 => 42,  102 => 39,  99 => 27,  89 => 17,  85 => 16,  80 => 15,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  56 => 7,  47 => 5,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set title = fields.title.content|striptags|trim %}
{% set summary = fields.field_initiative_summary.content|striptags|trim %}
<div class=\"ige-block-initiatives__item\">
  <div class=\"card mx-2 rounded-2 overflow-hidden\">
    <div class=\"image\"{% if fields.field_initiative_background.content %} style=\"background-image: url({{ file_url(fields.field_initiative_background.content|striptags|trim) }})\" {% endif %}></div>
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
      <a href=\"{{ url('entity.node.canonical', {'node': fields.nid.content|striptags|number_format}) }}\" class=\"btn btn-link float-end\">{{ 'Register Now'|t }}</a>
    </div>
  </div>
</div>

{#<div class=\"events-item\">#}
{#\t<div class=\"card\" {% if fields.field_initiative_background.content %} style=\"background-image: url({{ file_url(fields.field_initiative_background.content|striptags|trim) }})\" {% endif %}>#}
{#\t\t<div class=\"card-face card-front\">#}
{#\t\t\t<div class=\"card-body d-flex flex-column align-items-center align-content-center justify-content-center\">#}
{#\t\t\t\t<h3 class=\"text-white\">{{ fields.title.content }}</h3>#}

{#\t\t\t\t<button data-role=\"swipe\" class=\"btn btn-link mt-3\" style=\"z-index: -1;\">{{ 'Register Now'|t }}</button>#}
{#\t\t\t</div>#}
{#\t\t</div>#}
{#\t\t<div class=\"card-face card-back\">#}
{#\t\t\t<div class=\"card-body h-100 overflow-auto text-white\">#}
{#\t\t\t\t{% if fields.field_initiative_logo.content %}#}
{#\t\t\t\t\t<img src=\"{{ file_url(fields.field_initiative_logo.content|striptags|trim) }}\" class=\"img-fluid mb-2\" alt=\"{{ fields.title.content }}\"/>#}
{#\t\t\t\t{% endif %}#}
{#\t\t\t\t<div class=\"event-item__description\">#}
{#\t\t\t\t\t{{ fields.field_initiative_summary.content|striptags }}#}
{#\t\t\t\t</div>#}

{#\t\t\t\t<div class=\"event-item__target\">#}
{#\t\t\t\t\t<strong class=\"d-block mb-2\">{{ \"Target Group\"|t }}</strong>#}

{#\t\t\t\t\t<span>{{ fields.field_initiative_target.content|raw }}</span>#}
{#\t\t\t\t</div>#}

{#\t\t\t\t<div class=\"mt-2\">#}
{#\t\t\t\t\t<button data-role=\"swipe\" class=\"btn btn-link text-white\">{{ \"Back\"|t}}</button>#}

{#\t\t\t\t\t{% if fields.field_initiative_register_link.content %}#}
{#\t\t\t\t\t\t<a href=\"{{ url('<front>') }}/{{fields.field_initiative_register_link.content}}\" class=\"btn btn-link text-white\">{{ \"Register Now\"|t}}</a>#}
{#\t\t\t\t\t{% endif %}#}
{#\t\t\t\t</div>#}


{#\t\t\t\t#}{#        <div class=\"mt-auto text-center\">#}
{#\t\t\t#}{#          <b class=\"d-block\">{{ 'Target group'|t }}</b>#}
{#\t\t\t\t#}{#          <span>{{ fields.field_initiative_target.content }}</span>#}
{#\t\t\t\t#}{#        </div>#}
{#\t\t\t</div>#}
{#\t\t</div>#}
{#\t</div>#}
{#</div>#}
", "themes/ignite/templates/views/views-view-fields--frontpage.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\views\\views-view-fields--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5);
        static $filters = array("trim" => 1, "striptags" => 1, "escape" => 5, "date" => 8, "round" => 11, "t" => 13, "length" => 15, "raw" => 15, "slice" => 15, "number_format" => 17);
        static $functions = array("file_url" => 5, "url" => 17);

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
