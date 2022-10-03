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

/* themes/ignite/templates/customize/page--about.html.twig */
class __TwigTemplate_62fb01055c086db649b4b7659b0c2ddd6b65fc400ad8dc33acb0e2af6b2c55c0 extends \Twig\Template
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
        $context["page_title"] = t("About Ignite");
        // line 1
        $this->parent = $this->loadTemplate("@ignite/layout/page.html.twig", "themes/ignite/templates/customize/page--about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  <section class=\"my-px-20\">
    <div class=\"container-xl\">
      ";
        // line 7
        $this->loadTemplate("@ignite/partials/widgets/about.html.twig", "themes/ignite/templates/customize/page--about.html.twig", 7)->display($context);
        // line 8
        echo "    </div>
  </section>

  <section class=\"my-px-30\">
    <div class=\"container\">
      <div class=\"ige-about-exp\">
        <div class=\"row\">
          <div class=\"col-12 col-lg-2 ige-about-exp__item\">
            <div class=\"ige-about-exp__icon\">
              <span>I</span>
            </div>
            <div class=\"ige-about-exp__title\">
              <h4>";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Invigorate"));
        echo "</h4>
            </div>
            <div class=\"ige-about-exp__description\">
              <p>";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Preparation of digital content in KSA"));
        echo "</p>
            </div>
          </div>
          <div class=\"col-12 col-lg-2 ige-about-exp__item\">
            <div class=\"ige-about-exp__icon\">
              <span>G</span>
            </div>
            <div class=\"ige-about-exp__title\">
              <h4>";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Grow"));
        echo "</h4>
            </div>
            <div class=\"ige-about-exp__description\">
              <p>";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Development of investment potentials in digital content and its platforms"));
        echo "</p>
            </div>
          </div>
          <div class=\"col-12 col-lg-2 ige-about-exp__item\">
            <div class=\"ige-about-exp__icon\">
              <span>N</span>
            </div>
            <div class=\"ige-about-exp__title\">
              <h4>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Nurture"));
        echo "</h4>
            </div>
            <div class=\"ige-about-exp__description\">
              <p>";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sponsorship of local digital advertising sector"));
        echo "</p>
            </div>
          </div>
          <div class=\"col-12 col-lg-2 ige-about-exp__item\">
            <div class=\"ige-about-exp__icon\">
              <span>I</span>
            </div>
            <div class=\"ige-about-exp__title\">
              <h4>";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Improve"));
        echo "</h4>
            </div>
            <div class=\"ige-about-exp__description\">
              <p>";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Access to talents in digital content and its platforms markets"));
        echo "</p>
            </div>
          </div>
          <div class=\"col-12 col-lg-2 ige-about-exp__item\">
            <div class=\"ige-about-exp__icon\">
              <span>T</span>
            </div>
            <div class=\"ige-about-exp__title\">
              <h4>";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Transform"));
        echo "</h4>
            </div>
            <div class=\"ige-about-exp__description\">
              <p>";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Development of infrastructure of digital content and its platforms in KSA"));
        echo "</p>
            </div>
          </div>
          <div class=\"col-12 col-lg-2 ige-about-exp__item\">
            <div class=\"ige-about-exp__icon\">
              <span>E</span>
            </div>
            <div class=\"ige-about-exp__title\">
              <h4>";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Enable"));
        echo "</h4>
            </div>
            <div class=\"ige-about-exp__description\">
              <p>";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Governance of the sector and improve relevant legislation"));
        echo "</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  ";
        // line 86
        $this->loadTemplate("@ignite/partials/widgets/statistics.html.twig", "themes/ignite/templates/customize/page--about.html.twig", 86)->display($context);
        // line 87
        echo "
  ";
        // line 88
        $this->loadTemplate("@ignite/partials/widgets/about_details.html.twig", "themes/ignite/templates/customize/page--about.html.twig", 88)->display($context);
        // line 89
        echo "
  ";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/customize/page--about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 90,  184 => 89,  182 => 88,  179 => 87,  177 => 86,  166 => 78,  160 => 75,  149 => 67,  143 => 64,  132 => 56,  126 => 53,  115 => 45,  109 => 42,  98 => 34,  92 => 31,  81 => 23,  75 => 20,  61 => 8,  59 => 7,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@ignite/layout/page.html.twig\" %}
{% set page_title = \"About Ignite\"|t %}

{% block main %}
  <section class=\"my-px-20\">
    <div class=\"container-xl\">
      {% include \"@ignite/partials/widgets/about.html.twig\" %}
    </div>
  </section>

  <section class=\"my-px-30\">
    <div class=\"container\">
      <div class=\"ige-about-exp\">
        <div class=\"row\">
          <div class=\"col-12 col-lg-2 ige-about-exp__item\">
            <div class=\"ige-about-exp__icon\">
              <span>I</span>
            </div>
            <div class=\"ige-about-exp__title\">
              <h4>{{ \"Invigorate\"|t }}</h4>
            </div>
            <div class=\"ige-about-exp__description\">
              <p>{{ \"Preparation of digital content in KSA\"|t }}</p>
            </div>
          </div>
          <div class=\"col-12 col-lg-2 ige-about-exp__item\">
            <div class=\"ige-about-exp__icon\">
              <span>G</span>
            </div>
            <div class=\"ige-about-exp__title\">
              <h4>{{ \"Grow\"|t }}</h4>
            </div>
            <div class=\"ige-about-exp__description\">
              <p>{{ \"Development of investment potentials in digital content and its platforms\"|t }}</p>
            </div>
          </div>
          <div class=\"col-12 col-lg-2 ige-about-exp__item\">
            <div class=\"ige-about-exp__icon\">
              <span>N</span>
            </div>
            <div class=\"ige-about-exp__title\">
              <h4>{{ \"Nurture\"|t }}</h4>
            </div>
            <div class=\"ige-about-exp__description\">
              <p>{{ \"Sponsorship of local digital advertising sector\"|t }}</p>
            </div>
          </div>
          <div class=\"col-12 col-lg-2 ige-about-exp__item\">
            <div class=\"ige-about-exp__icon\">
              <span>I</span>
            </div>
            <div class=\"ige-about-exp__title\">
              <h4>{{ \"Improve\"|t }}</h4>
            </div>
            <div class=\"ige-about-exp__description\">
              <p>{{ \"Access to talents in digital content and its platforms markets\"|t }}</p>
            </div>
          </div>
          <div class=\"col-12 col-lg-2 ige-about-exp__item\">
            <div class=\"ige-about-exp__icon\">
              <span>T</span>
            </div>
            <div class=\"ige-about-exp__title\">
              <h4>{{ \"Transform\"|t }}</h4>
            </div>
            <div class=\"ige-about-exp__description\">
              <p>{{ \"Development of infrastructure of digital content and its platforms in KSA\"|t }}</p>
            </div>
          </div>
          <div class=\"col-12 col-lg-2 ige-about-exp__item\">
            <div class=\"ige-about-exp__icon\">
              <span>E</span>
            </div>
            <div class=\"ige-about-exp__title\">
              <h4>{{ \"Enable\"|t }}</h4>
            </div>
            <div class=\"ige-about-exp__description\">
              <p>{{ \"Governance of the sector and improve relevant legislation\"|t }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {% include \"@ignite/partials/widgets/statistics.html.twig\" %}

  {% include \"@ignite/partials/widgets/about_details.html.twig\" %}

  {{ page.content }}
{% endblock %}
", "themes/ignite/templates/customize/page--about.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\customize\\page--about.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "include" => 7);
        static $filters = array("t" => 2, "escape" => 90);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
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
