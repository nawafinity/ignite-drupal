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

/* themes/ignite/templates/customize/page--contact.html.twig */
class __TwigTemplate_5161ba91e8f8dde32ab1262eddb5aab7484c4d3ba2159328e45769b24b5d45c9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $context["page_title"] = t("Contact Us");
        // line 1
        $this->parent = $this->loadTemplate("@ignite/layout/page.html.twig", "themes/ignite/templates/customize/page--contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"ige-section\">
\t\t<div class=\"ige-section-content mb-5\">
\t\t\t<div class=\"container-xl\">
        <div class=\"mb-5\">
          <div class=\"row\">
            <div class=\"col-12 col-lg-6\">
              <div class=\"bg-info text-white rounded-3 p-3 text-center\">
                <h4>";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Follow Us"));
        echo "</h4>
                <div class=\"mt-3\">
                  ....
                </div>
              </div>
            </div>
            <div class=\"col-12 col-lg-6\">
              sad
            </div>
          </div>
        </div>
\t\t\t\t";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/customize/page--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  64 => 11,  55 => 4,  51 => 3,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@ignite/layout/page.html.twig\" %}
{% set page_title = \"Contact Us\"|t %}
{% block main %}
\t<div class=\"ige-section\">
\t\t<div class=\"ige-section-content mb-5\">
\t\t\t<div class=\"container-xl\">
        <div class=\"mb-5\">
          <div class=\"row\">
            <div class=\"col-12 col-lg-6\">
              <div class=\"bg-info text-white rounded-3 p-3 text-center\">
                <h4>{{ \"Follow Us\"|t }}</h4>
                <div class=\"mt-3\">
                  ....
                </div>
              </div>
            </div>
            <div class=\"col-12 col-lg-6\">
              sad
            </div>
          </div>
        </div>
\t\t\t\t{{ page.content }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "themes/ignite/templates/customize/page--contact.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\customize\\page--contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2);
        static $filters = array("t" => 2, "escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['t', 'escape'],
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
