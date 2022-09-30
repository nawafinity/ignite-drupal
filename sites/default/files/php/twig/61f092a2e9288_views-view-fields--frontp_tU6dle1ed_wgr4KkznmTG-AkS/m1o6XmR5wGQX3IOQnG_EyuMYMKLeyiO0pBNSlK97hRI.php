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
class __TwigTemplate_55ed356d843acc99d31f0798f244e806a9cbe78dd2ecf103bec0fddd3a5d90a3 extends \Twig\Template
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
        echo "<div class=\"events-item\">
\t<div class=\"card\" ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_background", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2)) {
            echo " style=\"background-image: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [twig_trim_filter(strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_background", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2), 2, $this->source)))]), "html", null, true);
            echo ")\" ";
        }
        echo ">
\t\t<div class=\"card-face card-front\">
\t\t\t<div class=\"card-body d-flex flex-column align-items-center align-content-center justify-content-center\">
\t\t\t\t<h3 class=\"text-white\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 5), "content", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h3>

\t\t\t\t<button data-role=\"swipe\" class=\"btn btn-link mt-3\" style=\"z-index: -1;\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Register Now"));
        echo "</button>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"card-face card-back\">
\t\t\t<div class=\"card-body h-100 overflow-auto text-white\">
\t\t\t\t";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_logo", [], "any", false, false, true, 12), "content", [], "any", false, false, true, 12)) {
            // line 13
            echo "\t\t\t\t\t<img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [twig_trim_filter(strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_logo", [], "any", false, false, true, 13), "content", [], "any", false, false, true, 13), 13, $this->source)))]), "html", null, true);
            echo "\" class=\"img-fluid mb-2\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 13), "content", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\"/>
\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t<div class=\"event-item__description\">
\t\t\t\t\t";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_summary", [], "any", false, false, true, 16), "content", [], "any", false, false, true, 16), 16, $this->source)), "html", null, true);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"event-item__target\">
\t\t\t\t\t<strong class=\"d-block mb-2\">";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Target Group"));
        echo "</strong>

\t\t\t\t\t<span>";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_target", [], "any", false, false, true, 22), "content", [], "any", false, false, true, 22), 22, $this->source));
        echo "</span>
\t\t\t\t</div>

\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t<button data-role=\"swipe\" class=\"btn btn-link text-white\">";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Back"));
        echo "</button>

\t\t\t\t\t";
        // line 28
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_register_link", [], "any", false, false, true, 28), "content", [], "any", false, false, true, 28)) {
            // line 29
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_initiative_register_link", [], "any", false, false, true, 29), "content", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\" class=\"btn btn-link text-white\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Register Now"));
            echo "</a>
\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t</div>


\t\t\t\t";
        // line 35
        echo "\t\t\t";
        // line 36
        echo "\t\t\t\t";
        // line 37
        echo "\t\t\t\t";
        // line 38
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
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
        return array (  125 => 38,  123 => 37,  121 => 36,  119 => 35,  114 => 31,  104 => 29,  102 => 28,  97 => 26,  90 => 22,  85 => 20,  78 => 16,  75 => 15,  67 => 13,  65 => 12,  57 => 7,  52 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ignite/templates/views/views-view-fields--frontpage.html.twig", "C:\\xampp\\htdocs\\ignite\\themes\\ignite\\templates\\views\\views-view-fields--frontpage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 2, "trim" => 2, "striptags" => 2, "t" => 7, "raw" => 22);
        static $functions = array("file_url" => 2, "url" => 29);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trim', 'striptags', 't', 'raw'],
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
