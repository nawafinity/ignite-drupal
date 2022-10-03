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

/* themes/ignite/templates/views/views-view-unformatted--media_center.html.twig */
class __TwigTemplate_99e59f33c1b2fa1054d226e7aa543500ca0259658635ae8063dd8a42488f0f08 extends \Twig\Template
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
        echo "<div class=\"page-header\" style=\"background-image: url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 18, $this->source) . "/dist/img/bg/bg-news.jpg")), "html", null, true);
        echo ");\"></div>

<!-- Section:Events -->

<div class=\"section news\">

\t<div class=\"section-inner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row gy-3\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h1 class=\"section-title\">";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("News"));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 34
            echo "\t\t\t\t\t\t";
            $context["row_classes"] = [0 => ((($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 35
            echo "
\t\t\t\t\t\t<div class=\"col-12 col-md-4\">";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            // line 38
            echo "</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"row mt-5 p-5 justify-content-center text-center\">
\t\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-lg\">مكتبة الصورة</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn text-white bg-ig-blue btn-lg\">هوية IGNITE</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn text-white bg-ig-green btn-lg\">تواصل معنا</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/views/views-view-unformatted--media_center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 40,  73 => 38,  71 => 37,  68 => 35,  65 => 34,  61 => 33,  53 => 28,  39 => 18,);
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
<div class=\"page-header\" style=\"background-image: url({{ file_url(directory ~ '/dist/img/bg/bg-news.jpg') }});\"></div>

<!-- Section:Events -->

<div class=\"section news\">

\t<div class=\"section-inner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row gy-3\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h1 class=\"section-title\">{{ \"News\"|t }}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t{% for row in rows %}
\t\t\t\t\t\t{% set row_classes = [default_row_class ? 'views-row',] %}

\t\t\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t\t\t{{- row.content -}}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>

\t\t\t\t<div class=\"row mt-5 p-5 justify-content-center text-center\">
\t\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-lg\">مكتبة الصورة</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn text-white bg-ig-blue btn-lg\">هوية IGNITE</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn text-white bg-ig-green btn-lg\">تواصل معنا</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
", "themes/ignite/templates/views/views-view-unformatted--media_center.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\views\\views-view-unformatted--media_center.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 33, "set" => 34);
        static $filters = array("escape" => 18, "t" => 28);
        static $functions = array("file_url" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['escape', 't'],
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
