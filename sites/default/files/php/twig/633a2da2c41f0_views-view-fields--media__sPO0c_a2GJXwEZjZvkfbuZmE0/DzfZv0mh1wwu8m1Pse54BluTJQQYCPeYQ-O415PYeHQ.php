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

/* themes/ignite/templates/views/views-view-fields--media_center.html.twig */
class __TwigTemplate_92c725737aebf51760a760c1807a0d6326debf8c3a7d73f6c44eb7b3561e14e9 extends \Twig\Template
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
        echo "<div class=\"news-item\" data-aos=\"zoom-in\" onClick=\"window.location.href = '";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 1), "content", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "'\">
    <div class=\"news-item-body d-flex flex-row justify-content-center\" ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_news_thumb", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2)) {
            echo " style=\"background-image: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_news_thumb", [], "any", false, false, true, 2), "content", [], "any", false, false, true, 2), 2, $this->source)))), "html", null, true);
            echo ")\" ";
        }
        echo ">

        <div class=\"align-self-end mb-3 text-center\">
            <h5 class=\"text-white\">
                ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 6), "content", [], "any", false, false, true, 6), 6, $this->source))), "html", null, true);
        echo "
            </h5>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/views/views-view-fields--media_center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"news-item\" data-aos=\"zoom-in\" onClick=\"window.location.href = '{{ fields.view_node.content }}'\">
    <div class=\"news-item-body d-flex flex-row justify-content-center\" {% if fields.field_news_thumb.content %} style=\"background-image: url({{ file_url(fields.field_news_thumb.content|striptags|trim) }})\" {% endif %}>

        <div class=\"align-self-end mb-3 text-center\">
            <h5 class=\"text-white\">
                {{ fields.title.content|striptags|trim }}
            </h5>
        </div>
    </div>
</div>
", "themes/ignite/templates/views/views-view-fields--media_center.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\views\\views-view-fields--media_center.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2);
        static $filters = array("escape" => 1, "trim" => 2, "striptags" => 2);
        static $functions = array("file_url" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trim', 'striptags'],
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
