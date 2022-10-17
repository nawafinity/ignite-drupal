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
class __TwigTemplate_3a2d8240860a5ff5489d1dfcc316e829 extends \Twig\Template
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
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_background", [], "any", false, false, true, 8), "content", [], "any", false, false, true, 8)) {
            echo " style=\"background-image: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_background", [], "any", false, false, true, 8), "content", [], "any", false, false, true, 8), 8, $this->source)))), "html", null, true);
            echo ")\" ";
        }
        echo "></div>
    <div class=\"card-body\">
      <div class=\"header\">
      </div>
      <div class=\"description\">
        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_start_date", [], "any", false, false, true, 13), "content", [], "any", false, false, true, 13)) {
            // line 14
            echo "          ";
            $context["today"] = twig_date_format_filter($this->env, "now", "U");
            // line 15
            echo "          ";
            $context["start_date"] = twig_date_format_filter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_start_date", [], "any", false, false, true, 15), "content", [], "any", false, false, true, 15), 15, $this->source)), "U");
            // line 16
            echo "          ";
            $context["difference"] = (($context["start_date"] ?? null) - ($context["today"] ?? null));
            // line 17
            echo "          ";
            $context["days_left"] = twig_round((((($context["difference"] ?? null) / 60) / 60) / 24), 0, "ceil");
            // line 18
            echo "
          <h5><span class=\"badge bg-secondary\">";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["days_left"] ?? null), 19, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Days left"));
            echo "</span></h5>
        ";
        }
        // line 21
        echo "        <h4 class=\"card-title mt-4\">";
        (((twig_length_filter($this->env, ($context["title"] ?? null)) > 20)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_slice($this->env, ($context["title"] ?? null), 0, 30) . "..."), "html", null, true))) : (print (($context["title"] ?? null))));
        echo "</h4>
        <p class=\"card-text mt-4\">";
        // line 22
        (((twig_length_filter($this->env, ($context["summary"] ?? null)) > 40)) ? (print ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (twig_slice($this->env, ($context["summary"] ?? null), 0, 30) . "..."), "html", null, true))) : (print (($context["summary"] ?? null))));
        echo "</p>
        <a href=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("entity.node.canonical", ["node" => twig_number_format_filter($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "nid", [], "any", false, false, true, 23), "content", [], "any", false, false, true, 23), 23, $this->source)))]), "html", null, true);
        echo "\"
           class=\"btn btn-success float-start\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Register Now"));
        echo "</a>
      </div>
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
        return array (  100 => 24,  96 => 23,  92 => 22,  87 => 21,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  68 => 15,  65 => 14,  63 => 13,  51 => 8,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ignite/templates/views/views-view-fields--initiatives.html.twig", "C:\\laragon\\www\\ignite-drupal\\themes\\ignite\\templates\\views\\views-view-fields--initiatives.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 8);
        static $filters = array("trim" => 1, "striptags" => 1, "escape" => 8, "date" => 14, "round" => 17, "t" => 19, "length" => 21, "raw" => 21, "slice" => 21, "number_format" => 23);
        static $functions = array("file_url" => 8, "url" => 23);

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
