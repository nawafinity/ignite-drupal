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

/* themes/ignite/templates/customize/page--node--%.html.twig */
class __TwigTemplate_b6cb875348efcdc7f92bafb2c54410cae2fcc18799f1fe2d18b489bb7c946254 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header_content' => [$this, 'block_header_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ignite/layout/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["header_full"] = true;
        // line 6
        $context["header_bg"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["background"] ?? null), "entity", [], "any", false, false, true, 6), "fileuri", [], "any", false, false, true, 6), 6, $this->source))));
        // line 1
        $this->parent = $this->loadTemplate("@ignite/layout/page.html.twig", "themes/ignite/templates/customize/page--node--%.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_header_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "  <div class=\"ige-header-content\">
    <div class=\"container-xl\">
      <div class=\"row gy-5\">
        <div class=\"col-12 col-xl-8\">
          <div class=\"ige-header-content__title\">
            <h3>";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "</h3>
          </div>
          <div class=\"ige-header-content__description\">
            <p>";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "fields", [], "any", false, false, true, 17), "field_initiative_summary", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</p>
          </div>

          <div class=\"ige-header-content__details\">

            <div class=\"mt-5\">
              <a href=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "initiatives\" class=\"btn btn-info btn-explorer\">
                <span class=\"text\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Register Now"));
        echo "</span>
                <img src=\"";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 25, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 25, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/btnarrow.svg\"
                     alt=\"";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Register Now"));
        echo "\" class=\"arrow\"/>
              </a>
            </div>
          </div>
        </div>
        <div class=\"col-12 col-xl-4\">
          <div class=\"ige-header-content__videobtn\">
            <img src=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 33, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 33, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/play-btn.svg\"
                 alt=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Play Video"));
        echo "\"/>
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/customize/page--node--%.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 34,  101 => 33,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  70 => 17,  64 => 14,  57 => 9,  53 => 8,  48 => 1,  46 => 6,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@ignite/layout/page.html.twig\" %}
{% set header_full = true %}

{#{% set background = node.fields.field_initiative_background %}#}

{% set header_bg = file_url(background.entity.fileuri|striptags|trim) %}

{% block header_content %}
  <div class=\"ige-header-content\">
    <div class=\"container-xl\">
      <div class=\"row gy-5\">
        <div class=\"col-12 col-xl-8\">
          <div class=\"ige-header-content__title\">
            <h3>{{ node.label }}</h3>
          </div>
          <div class=\"ige-header-content__description\">
            <p>{{ node.fields.field_initiative_summary.value }}</p>
          </div>

          <div class=\"ige-header-content__details\">

            <div class=\"mt-5\">
              <a href=\"{{ url(\"<front>\") }}initiatives\" class=\"btn btn-info btn-explorer\">
                <span class=\"text\">{{ \"Register Now\"|t }}</span>
                <img src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/btnarrow.svg\"
                     alt=\"{{ \"Register Now\"|t }}\" class=\"arrow\"/>
              </a>
            </div>
          </div>
        </div>
        <div class=\"col-12 col-xl-4\">
          <div class=\"ige-header-content__videobtn\">
            <img src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/play-btn.svg\"
                 alt=\"{{ \"Play Video\"|t }}\"/>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "themes/ignite/templates/customize/page--node--%.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\customize\\page--node--%.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2);
        static $filters = array("trim" => 6, "striptags" => 6, "escape" => 14, "t" => 24);
        static $functions = array("file_url" => 6, "url" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['trim', 'striptags', 'escape', 't'],
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
