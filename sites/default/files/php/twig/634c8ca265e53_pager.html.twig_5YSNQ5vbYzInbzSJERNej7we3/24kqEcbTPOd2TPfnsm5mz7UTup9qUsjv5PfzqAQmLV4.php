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

/* themes/ignite/templates/customize/pager.html.twig */
class __TwigTemplate_bd46537ec15b6d77a06cd40986ea1fc671d1a4542326e933324c567f3ecebe93 extends \Twig\Template
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
        // line 35
        if (($context["items"] ?? null)) {
            // line 36
            echo "  <section class=\"my-px-40\">
    <div class=\"container-xl d-flex justify-content-center\">
      <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 38, $this->source), "html", null, true);
            echo "\">
        <h4 id=\"";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 39, $this->source), "html", null, true);
            echo "\" class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
        <ul class=\"pagination pager__items js-pager__items\">
          ";
            // line 42
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42)) {
                // line 43
                echo "            <li class=\"page-item pager__item pager__item--first\">
              <a href=\"";
                // line 44
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 44), "href", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "\"
                 title=\"";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 45), "attributes", [], "any", false, false, true, 45), 45, $this->source), "href", "title"), "html", null, true);
                echo "
                 class=\"page-link\"
              >
                <span class=\"visually-hidden\">";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                echo "</span>
                <span aria-hidden=\"true\">";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 49), "text", [], "any", true, true, true, 49)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 49), "text", [], "any", false, false, true, 49), 49, $this->source), t("« First"))) : (t("« First"))), "html", null, true);
                echo "</span>
              </a>
            </li>
          ";
            }
            // line 53
            echo "          ";
            // line 54
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 54)) {
                // line 55
                echo "            <li class=\"page-item pager__item pager__item--previous\">
              <a href=\"";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 56), "href", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\"
                 class=\"page-link\"
                 rel=\"prev\"";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 58), "attributes", [], "any", false, false, true, 58), 58, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
                <span class=\"visually-hidden\">";
                // line 59
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                echo "</span>
                <span aria-hidden=\"true\">";
                // line 60
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 60), "text", [], "any", true, true, true, 60)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 60), "text", [], "any", false, false, true, 60), 60, $this->source), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
                echo "</span>
              </a>
            </li>
          ";
            }
            // line 64
            echo "          ";
            // line 65
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 65)) {
                // line 66
                echo "            <li class=\"page-item pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
          ";
            }
            // line 68
            echo "          ";
            // line 69
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 69));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 70
                echo "            <li class=\"page-item pager__item";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active") : ("")));
                echo "\">
              ";
                // line 71
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 72
                    echo "                ";
                    $context["title"] = t("Current page");
                    // line 73
                    echo "              ";
                } else {
                    // line 74
                    echo "                ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 75
                    echo "              ";
                }
                // line 76
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 76, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 76), 76, $this->source), "href", "title"), "html", null, true);
                echo " class=\"page-link\">
            <span class=\"visually-hidden\">
              ";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                echo "
            </span>";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 80, $this->source), "html", null, true);
                // line 81
                echo "</a>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "          ";
            // line 85
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 85)) {
                // line 86
                echo "            <li class=\"page-item pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
          ";
            }
            // line 88
            echo "          ";
            // line 89
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 89)) {
                // line 90
                echo "            <li class=\"page-item pager__item pager__item--next\">
              <a href=\"";
                // line 91
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 91), "href", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\"
                 class=\"page-link\"
                 rel=\"next\"";
                // line 93
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 93), "attributes", [], "any", false, false, true, 93), 93, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
                <span class=\"visually-hidden\">";
                // line 94
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                echo "</span>
                <span aria-hidden=\"true\">";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 95), "text", [], "any", true, true, true, 95)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 95), "text", [], "any", false, false, true, 95), 95, $this->source), t("Next ›"))) : (t("Next ›"))), "html", null, true);
                echo "</span>
              </a>
            </li>
          ";
            }
            // line 99
            echo "          ";
            // line 100
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 100)) {
                // line 101
                echo "            <li class=\"page-item pager__item pager__item--last\">
              <a href=\"";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 102), "href", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "\"
                 class=\"page-link\"
                 title=\"";
                // line 104
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 104), "attributes", [], "any", false, false, true, 104), 104, $this->source), "href", "title"), "html", null, true);
                echo ">
                <span class=\"visually-hidden\">";
                // line 105
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                echo "</span>
                <span aria-hidden=\"true\">";
                // line 106
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 106), "text", [], "any", true, true, true, 106)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 106), "text", [], "any", false, false, true, 106), 106, $this->source), t("Last »"))) : (t("Last »"))), "html", null, true);
                echo "</span>
              </a>
            </li>
          ";
            }
            // line 110
            echo "        </ul>
      </nav>
    </div>
  </section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/customize/pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 110,  236 => 106,  232 => 105,  226 => 104,  221 => 102,  218 => 101,  215 => 100,  213 => 99,  206 => 95,  202 => 94,  198 => 93,  191 => 91,  188 => 90,  185 => 89,  183 => 88,  179 => 86,  176 => 85,  174 => 84,  166 => 81,  164 => 80,  160 => 78,  150 => 76,  147 => 75,  144 => 74,  141 => 73,  138 => 72,  136 => 71,  131 => 70,  126 => 69,  124 => 68,  120 => 66,  117 => 65,  115 => 64,  108 => 60,  104 => 59,  100 => 58,  93 => 56,  90 => 55,  87 => 54,  85 => 53,  78 => 49,  74 => 48,  66 => 45,  62 => 44,  59 => 43,  56 => 42,  49 => 39,  45 => 38,  41 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a pager.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 *
 * @ingroup themeable
 */
#}
{% if items %}
  <section class=\"my-px-40\">
    <div class=\"container-xl d-flex justify-content-center\">
      <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
        <h4 id=\"{{ heading_id }}\" class=\"visually-hidden\">{{ 'Pagination'|t }}</h4>
        <ul class=\"pagination pager__items js-pager__items\">
          {# Print first item if we are not on the first page. #}
          {% if items.first %}
            <li class=\"page-item pager__item pager__item--first\">
              <a href=\"{{ items.first.href }}\"
                 title=\"{{ 'Go to first page'|t }}\"{{ items.first.attributes|without('href', 'title') }}
                 class=\"page-link\"
              >
                <span class=\"visually-hidden\">{{ 'First page'|t }}</span>
                <span aria-hidden=\"true\">{{ items.first.text|default('« First'|t) }}</span>
              </a>
            </li>
          {% endif %}
          {# Print previous item if we are not on the first page. #}
          {% if items.previous %}
            <li class=\"page-item pager__item pager__item--previous\">
              <a href=\"{{ items.previous.href }}\" title=\"{{ 'Go to previous page'|t }}\"
                 class=\"page-link\"
                 rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel') }}>
                <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
                <span aria-hidden=\"true\">{{ items.previous.text|default('‹ Previous'|t) }}</span>
              </a>
            </li>
          {% endif %}
          {# Add an ellipsis if there are further previous pages. #}
          {% if ellipses.previous %}
            <li class=\"page-item pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
          {% endif %}
          {# Now generate the actual pager piece. #}
          {% for key, item in items.pages %}
            <li class=\"page-item pager__item{{ current == key ? ' is-active' : '' }}\">
              {% if current == key %}
                {% set title = 'Current page'|t %}
              {% else %}
                {% set title = 'Go to page @key'|t({'@key': key}) %}
              {% endif %}
              <a href=\"{{ item.href }}\" title=\"{{ title }}\"{{ item.attributes|without('href', 'title') }} class=\"page-link\">
            <span class=\"visually-hidden\">
              {{ current == key ? 'Current page'|t : 'Page'|t }}
            </span>
                {{- key -}}
              </a>
            </li>
          {% endfor %}
          {# Add an ellipsis if there are further next pages. #}
          {% if ellipses.next %}
            <li class=\"page-item pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
          {% endif %}
          {# Print next item if we are not on the last page. #}
          {% if items.next %}
            <li class=\"page-item pager__item pager__item--next\">
              <a href=\"{{ items.next.href }}\" title=\"{{ 'Go to next page'|t }}\"
                 class=\"page-link\"
                 rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel') }}>
                <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
                <span aria-hidden=\"true\">{{ items.next.text|default('Next ›'|t) }}</span>
              </a>
            </li>
          {% endif %}
          {# Print last item if we are not on the last page. #}
          {% if items.last %}
            <li class=\"page-item pager__item pager__item--last\">
              <a href=\"{{ items.last.href }}\"
                 class=\"page-link\"
                 title=\"{{ 'Go to last page'|t }}\"{{ items.last.attributes|without('href', 'title') }}>
                <span class=\"visually-hidden\">{{ 'Last page'|t }}</span>
                <span aria-hidden=\"true\">{{ items.last.text|default('Last »'|t) }}</span>
              </a>
            </li>
          {% endif %}
        </ul>
      </nav>
    </div>
  </section>
{% endif %}
", "themes/ignite/templates/customize/pager.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\customize\\pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 35, "for" => 69, "set" => 72);
        static $filters = array("escape" => 38, "t" => 39, "without" => 45, "default" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 't', 'without', 'default'],
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
