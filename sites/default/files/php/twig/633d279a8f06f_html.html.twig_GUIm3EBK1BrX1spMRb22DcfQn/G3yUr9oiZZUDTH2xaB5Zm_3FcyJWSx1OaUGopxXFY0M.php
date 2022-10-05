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

/* themes/ignite/templates/layout/html.html.twig */
class __TwigTemplate_3420c671741a802ed97485497b739d5701eb9f2c6d0bba29b19427d593b9e1d5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'styles' => [$this, 'block_styles'],
            'scripts' => [$this, 'block_scripts'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        $context["body_classes"] = [0 => ((        // line 48
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 49
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 49, $this->source))))), 2 => ((        // line 50
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 50, $this->source)))) : ("")), 3 => ((        // line 51
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 4 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 52
($context["theme"] ?? null), "settings", [], "any", false, false, true, 52), "navbar_position", [], "any", false, false, true, 52)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 52), "navbar_position", [], "any", false, false, true, 52), 52, $this->source))) : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 53
($context["theme"] ?? null), "has_glyphicons", [], "any", false, false, true, 53)) ? ("has-glyphicons") : (""))];
        // line 55
        echo "<!DOCTYPE html>
<html ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 56, $this->source), "html", null, true);
        echo ">
<head>
  <head-placeholder token=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 58, $this->source));
        echo "\"></head-placeholder>
  <title>";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["head_title"] ?? null), "title", [], "any", false, false, true, 59)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["head_title"] ?? null), "title", [], "any", false, false, true, 59), 59, $this->source)))));
            echo " | ";
        }
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["head_title"] ?? null), "name", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "</title>

  <css-placeholder token=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 61, $this->source));
        echo "\"></css-placeholder>
  <js-placeholder token=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 62, $this->source));
        echo "\"></js-placeholder>

  ";
        // line 64
        if (((($__internal_compile_0 = ($context["html_attributes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["dir"] ?? null) : null) == "ltr")) {
            // line 65
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ignite/styles"), "html", null, true);
            echo "
  ";
        } elseif (((($__internal_compile_1 =         // line 66
($context["html_attributes"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["dir"] ?? null) : null) == "rtl")) {
            // line 67
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("ignite/styles_rtl"), "html", null, true);
        }
        // line 70
        $this->displayBlock('styles', $context, $blocks);
        // line 75
        echo "</head>
<body";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
        echo ">
<a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
  ";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
</a>

";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 81, $this->source), "html", null, true);
        echo "
";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 82, $this->source), "html", null, true);
        echo "
";
        // line 83
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 83, $this->source), "html", null, true);
        echo "
<js-bottom-placeholder token=\"";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 84, $this->source));
        echo "\"></js-bottom-placeholder>

";
        // line 86
        $this->displayBlock('scripts', $context, $blocks);
        // line 87
        echo "</body>
</html>
";
    }

    // line 70
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "    <style>

    </style>
  ";
    }

    // line 86
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 86,  137 => 71,  133 => 70,  127 => 87,  125 => 86,  120 => 84,  116 => 83,  112 => 82,  108 => 81,  102 => 78,  97 => 76,  94 => 75,  92 => 70,  88 => 67,  86 => 66,  81 => 65,  79 => 64,  74 => 62,  70 => 61,  61 => 59,  57 => 58,  52 => 56,  49 => 55,  47 => 53,  46 => 52,  45 => 51,  44 => 50,  43 => 49,  42 => 48,  41 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default dist implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - \$css: An array of CSS files for the current page.
 * - \$language: (object) The language the site is being displayed in.
 *   \$language->language contains its textual representation.
 *   \$language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - \$rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - \$grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - \$head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - \$head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the \$head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - \$head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - \$styles: Style tags necessary to import all CSS files for the page.
 * - \$scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - \$page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - \$page: The rendered page content.
 * - \$page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - \$classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @ingroup templates
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
#}
{% set body_classes = [
  logged_in ? 'user-logged-in',
  not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
  node_type ? 'page-node-type-' ~ node_type|clean_class,
  db_offline ? 'db-offline',
  theme.settings.navbar_position ? 'navbar-is-' ~ theme.settings.navbar_position,
  theme.has_glyphicons ? 'has-glyphicons',
] %}
<!DOCTYPE html>
<html {{ html_attributes }}>
<head>
  <head-placeholder token=\"{{ placeholder_token|raw }}\"></head-placeholder>
  <title>{% if head_title.title %}{{ head_title.title|striptags|trim|t }} | {% endif %}{{ head_title.name }}</title>

  <css-placeholder token=\"{{ placeholder_token|raw }}\"></css-placeholder>
  <js-placeholder token=\"{{ placeholder_token|raw }}\"></js-placeholder>

  {% if html_attributes['dir'] == 'ltr' %}
    {{ attach_library('ignite/styles') }}
  {% elseif html_attributes['dir'] == 'rtl' %}
    {{ attach_library('ignite/styles_rtl') }}
  {%- endif -%}

  {% block styles %}
    <style>

    </style>
  {% endblock %}
</head>
<body{{ attributes.addClass(body_classes) }}>
<a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
  {{ 'Skip to main content'|t }}
</a>

{{ page_top }}
{{ page }}
{{ page_bottom }}
<js-bottom-placeholder token=\"{{ placeholder_token|raw }}\"></js-bottom-placeholder>

{% block scripts %}{% endblock %}
</body>
</html>
", "themes/ignite/templates/layout/html.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 47, "if" => 59, "block" => 70);
        static $filters = array("clean_class" => 49, "escape" => 56, "raw" => 58, "t" => 59, "trim" => 59, "striptags" => 59);
        static $functions = array("attach_library" => 65);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'raw', 't', 'trim', 'striptags'],
                ['attach_library']
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
