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

/* themes/ignite/templates/views/views-view-unformatted--frontpage.html.twig */
class __TwigTemplate_df0112caf6b164a6681c98dea5a2c4958cff04d77b5d09dede7f706d6e2d6ffa extends \Twig\Template
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
        // line 18
        echo "<section class=\"my-px-60\">
  <div class=\"container-fluid overflow-hidden\">
    <div class=\"ige-block-initiatives__list\" data-ige-sliders=\"#initiativesConfig\">
      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 22
            echo "        ";
            $context["row_classes"] = [0 => ((            // line 23
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 25
            echo "
        <div class=\"list-item col-12 col-lg-4\">";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            // line 28
            echo "</div>
        <!-- END Section:Events -->
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>
    <script type=\"application/json\" id=\"initiativesConfig\">
      {
        \"slidesToShow\": 4,
        \"slidesToScroll\": 4,
        \"speed\": 600,
        \"infinite\": true,
        \"autoplay\": true,
        \"responsive\": [{
          \"breakpoint\": 576,
          \"settings\": {
            \"slidesToShow\": 1,
            \"slidesToScroll\": 1
          }
        }, {
          \"breakpoint\": 768,
          \"settings\": {
            \"slidesToShow\": 2,
            \"slidesToScroll\": 2
          }
        }, {
          \"breakpoint\": 995,
          \"settings\": {
            \"slidesToShow\": 2,
            \"slidesToScroll\": 2
          }
        }, {
          \"breakpoint\": 1200,
          \"settings\": {
            \"slidesToShow\": 2,
            \"slidesToScroll\": 2
          }
        }, {
          \"breakpoint\": 1400,
          \"settings\": {
            \"slidesToShow\": 4,
            \"slidesToScroll\": 4
          }
        }]
      }

    </script>
  </div>
</section>



<!-- Section:Events -->
";
        // line 80
        echo "
";
        // line 84
        echo "
";
        // line 90
        echo "
";
        // line 99
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/views/views-view-unformatted--frontpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 99,  121 => 90,  118 => 84,  115 => 80,  65 => 31,  57 => 28,  55 => 27,  52 => 25,  50 => 23,  48 => 22,  44 => 21,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}
<section class=\"my-px-60\">
  <div class=\"container-fluid overflow-hidden\">
    <div class=\"ige-block-initiatives__list\" data-ige-sliders=\"#initiativesConfig\">
      {% for row in rows %}
        {% set row_classes = [
          default_row_class ? 'views-row',
        ] %}

        <div class=\"list-item col-12 col-lg-4\">
          {{- row.content -}}
        </div>
        <!-- END Section:Events -->
      {% endfor %}
    </div>
    <script type=\"application/json\" id=\"initiativesConfig\">
      {
        \"slidesToShow\": 4,
        \"slidesToScroll\": 4,
        \"speed\": 600,
        \"infinite\": true,
        \"autoplay\": true,
        \"responsive\": [{
          \"breakpoint\": 576,
          \"settings\": {
            \"slidesToShow\": 1,
            \"slidesToScroll\": 1
          }
        }, {
          \"breakpoint\": 768,
          \"settings\": {
            \"slidesToShow\": 2,
            \"slidesToScroll\": 2
          }
        }, {
          \"breakpoint\": 995,
          \"settings\": {
            \"slidesToShow\": 2,
            \"slidesToScroll\": 2
          }
        }, {
          \"breakpoint\": 1200,
          \"settings\": {
            \"slidesToShow\": 2,
            \"slidesToScroll\": 2
          }
        }, {
          \"breakpoint\": 1400,
          \"settings\": {
            \"slidesToShow\": 4,
            \"slidesToScroll\": 4
          }
        }]
      }

    </script>
  </div>
</section>



<!-- Section:Events -->
{#<section id=\"events\" class=\"section\">#}

{#  <div class=\"section-inner\">#}
{#    <div class=\"container mt-5\">#}
{#      <h2 class=\"section-title\">{{ \"IGNITE<br>Initiatives\"|t }}</h2>#}

{#      <div class=\"row gy-3 list\">#}
{#        {% for row in rows %}#}
{#          {% set row_classes = [#}
{#            default_row_class ? 'views-row',#}
{#          ] %}#}

{#          <div class=\"list-item col-12 col-lg-4\">#}
{#            {{- row.content -}}#}
{#          </div>#}
{#          <!-- END Section:Events -->#}
{#        {% endfor %}#}
{#      </div>#}
{#    </div>#}
{#  </div>#}

{#</section>#}
", "themes/ignite/templates/views/views-view-unformatted--frontpage.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\views\\views-view-unformatted--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 21, "set" => 22);
        static $filters = array("escape" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
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
