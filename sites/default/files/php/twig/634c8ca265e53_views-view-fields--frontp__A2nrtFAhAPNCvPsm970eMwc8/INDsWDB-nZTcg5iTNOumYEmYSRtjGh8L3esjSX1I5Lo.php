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
    <div
      class=\"image\"";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_background", [], "any", false, false, true, 6), "content", [], "any", false, false, true, 6)) {
            echo " style=\"background-image: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_background", [], "any", false, false, true, 6), "content", [], "any", false, false, true, 6), 6, $this->source)))), "html", null, true);
            echo ")\" ";
        }
        echo "></div>
    <div class=\"card-body\">
      <div class=\"header\">
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_logo", [], "any", false, false, true, 9), "content", [], "any", false, false, true, 9)) {
            // line 10
            echo "          <div class=\"logo\">
            <img src=\"";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_logo", [], "any", false, false, true, 11), "content", [], "any", false, false, true, 11), 11, $this->source)))), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 11, $this->source), "html", null, true);
            echo "\"/>
          </div>
        ";
        }
        // line 14
        echo "      </div>
      <div class=\"description\">
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_start_date", [], "any", false, false, true, 16), "content", [], "any", false, false, true, 16)) {
            // line 17
            echo "          ";
            $context["today"] = twig_date_format_filter($this->env, "now", "U");
            // line 18
            echo "          ";
            $context["start_date"] = twig_date_format_filter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_start_date", [], "any", false, false, true, 18), "content", [], "any", false, false, true, 18), 18, $this->source)), "U");
            // line 19
            echo "          ";
            $context["difference"] = (($context["start_date"] ?? null) - ($context["today"] ?? null));
            // line 20
            echo "          ";
            $context["days_left"] = twig_round((((($context["difference"] ?? null) / 60) / 60) / 24), 0, "ceil");
            // line 21
            echo "
          <h5><span class=\"badge bg-secondary\">";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["days_left"] ?? null), 22, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Days left"));
            echo "</span></h5>
        ";
        }
        // line 24
        echo "        <h4 class=\"card-title mt-4\">";
        (((twig_length_filter($this->env, ($context["title"] ?? null)) > 20)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_slice($this->env, ($context["title"] ?? null), 0, 30) . "..."), "html", null, true))) : (print (($context["title"] ?? null))));
        echo "</h4>
        <p class=\"card-text mt-4\">";
        // line 25
        (((twig_length_filter($this->env, ($context["summary"] ?? null)) > 40)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_slice($this->env, ($context["summary"] ?? null), 0, 30) . "..."), "html", null, true))) : (print (($context["summary"] ?? null))));
        echo "</p>
        <a href=\"";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_number_format_filter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "nid", [], "any", false, false, true, 26), "content", [], "any", false, false, true, 26), 26, $this->source)))]), "html", null, true);
        echo "\"
           class=\"btn btn-success float-start\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Register Now"));
        echo "</a>
      </div>
    </div>
  </div>
</div>

";
        // line 38
        echo "
";
        // line 50
        echo "
";
        // line 53
        echo "
";
        // line 56
        echo "
";
        // line 59
        echo "
";
        // line 64
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
        return array (  136 => 64,  133 => 59,  130 => 56,  127 => 53,  124 => 50,  121 => 38,  112 => 27,  108 => 26,  104 => 25,  99 => 24,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  75 => 16,  71 => 14,  63 => 11,  60 => 10,  58 => 9,  48 => 6,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set title = fields.title.content|striptags|trim %}
{% set summary = fields.field_initiative_summary.content|striptags|trim %}
<div class=\"ige-block-initiatives__item\">
  <div class=\"card mx-2 rounded-2 overflow-hidden\">
    <div
      class=\"image\"{% if fields.field_initiative_background.content %} style=\"background-image: url({{ file_url(fields.field_initiative_background.content|striptags|trim) }})\" {% endif %}></div>
    <div class=\"card-body\">
      <div class=\"header\">
        {% if fields.field_initiative_logo.content %}
          <div class=\"logo\">
            <img src=\"{{ file_url(fields.field_initiative_logo.content|striptags|trim) }}\" alt=\"{{ title }}\"/>
          </div>
        {% endif %}
      </div>
      <div class=\"description\">
        {% if fields.field_start_date.content %}
          {% set today = 'now'|date('U') %}
          {% set start_date = fields.field_start_date.content|striptags|date('U') %}
          {% set difference = start_date - today %}
          {% set days_left = (difference / 60 / 60 / 24)|round(0, 'ceil') %}

          <h5><span class=\"badge bg-secondary\">{{ days_left }} {{ \"Days left\"|t }}</span></h5>
        {% endif %}
        <h4 class=\"card-title mt-4\">{{ title|length > 20 ? title|slice(0, 30)|raw ~ '...' : title|raw }}</h4>
        <p class=\"card-text mt-4\">{{ summary|length > 40 ? summary|slice(0, 30)|raw ~ '...' : summary|raw }}</p>
        <a href=\"{{ url('entity.node.canonical', {'node': fields.nid.content|striptags|number_format}) }}\"
           class=\"btn btn-success float-start\">{{ \"Register Now\"|t }}</a>
      </div>
    </div>
  </div>
</div>

{# <div class=\"events-item\"> #}
{#  <div class=\"card\" {% if fields.field_initiative_background.content %} style=\"background-image: url({{ file_url(fields.field_initiative_background.content|striptags|trim) }})\" {% endif %}> #}
{#    <div class=\"card-face card-front\"> #}
{#      <div class=\"card-body d-flex flex-column align-items-center align-content-center justify-content-center\"> #}
{#        <h3 class=\"text-white\">{{ fields.title.content }}</h3> #}

{#        <button data-role=\"swipe\" class=\"btn btn-link mt-3\" style=\"z-index: -1;\">{{ 'Register Now'|t }}</button> #}
{#      </div> #}
{#    </div> #}
{#    <div class=\"card-face card-back\"> #}
{#      <div class=\"card-body h-100 overflow-auto text-white\"> #}
{#        {% if fields.field_initiative_logo.content %} #}
{#          <img src=\"{{ file_url(fields.field_initiative_logo.content|striptags|trim) }}\" class=\"img-fluid mb-2\" alt=\"{{ fields.title.content }}\"/> #}
{#        {% endif %} #}
{#        <div class=\"event-item__description\"> #}
{#          {{ fields.field_initiative_summary.content|striptags }} #}
{#        </div> #}

{#        <div class=\"event-item__target\"> #}
{#          <strong class=\"d-block mb-2\">{{ \"Target Group\"|t }}</strong> #}

{#          <span>{{ fields.field_initiative_target.content|raw }}</span> #}
{#        </div> #}

{#        <div class=\"mt-2\"> #}
{#          <button data-role=\"swipe\" class=\"btn btn-link text-white\">{{ \"Back\"|t}}</button> #}

{#          {% if fields.field_initiative_register_link.content %} #}
{#            <a href=\"{{ url('<front>') }}/{{fields.field_initiative_register_link.content}}\" class=\"btn btn-link text-white\">{{ \"Register Now\"|t}}</a> #}
{#          {% endif %} #}
{#        </div> #}


{#        #}{#        <div class=\"mt-auto text-center\"> #}
{#      #}{#          <b class=\"d-block\">{{ 'Target group'|t }}</b> #}
{#        #}{#          <span>{{ fields.field_initiative_target.content }}</span> #}
{#        #}{#        </div> #}
{#      </div> #}
{#    </div> #}
{#  </div> #}
{# </div> #}
", "themes/ignite/templates/views/views-view-fields--frontpage.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\views\\views-view-fields--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 6);
        static $filters = array("trim" => 1, "striptags" => 1, "escape" => 6, "date" => 17, "round" => 20, "t" => 22, "length" => 24, "raw" => 24, "slice" => 24, "number_format" => 26);
        static $functions = array("file_url" => 6, "url" => 26);

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
