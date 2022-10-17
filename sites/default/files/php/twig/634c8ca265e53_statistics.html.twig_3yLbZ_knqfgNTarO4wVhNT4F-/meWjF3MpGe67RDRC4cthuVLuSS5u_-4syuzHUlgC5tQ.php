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

/* @ignite/partials/widgets/statistics.html.twig */
class __TwigTemplate_d96b0fe02b22e7a00d7d7879169caa1712e0cbdb7021ff6faefbd4aaa34fc276 extends \Twig\Template
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
        echo "<section class=\"ige-statistics\">
  <div class=\"container-xl\">
    <div class=\"ige-statistics-title\">
      <svg data-src=\"";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 4, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 4, $this->source)), "html", null, true);
        echo "/dist/webassets/images/logos/ige-logo.svg\"></svg>
      <h3>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("In Numbers"));
        echo "</h3>
    </div>

    <div class=\"ige-statistics-content text-center\">
      <div class=\"ige-statistics-item\">
        <svg data-src=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 10, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 10, $this->source)), "html", null, true);
        echo "/dist/webassets/images/stats/agency.svg\"
             class=\"ige-statistics-item__icon\"
             fill=\"currentColor\"/>
        <h5 class=\"ige-statistics-item__title position-relative\">";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Government Entity"));
        echo "</h5>
        <p class=\"ige-statistics-item__count position-relative\">+20</p>
      </div>
      <div class=\"ige-statistics-item\">
        <svg data-src=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 17, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 17, $this->source)), "html", null, true);
        echo "/dist/webassets/images/stats/loginproc.svg\"
             class=\"ige-statistics-item__icon\"
             fill=\"currentColor\"/>
        <h5 class=\"ige-statistics-item__title\">";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Registration"));
        echo "</h5>
        <p class=\"ige-statistics-item__count\">2K</p>
      </div>
      <div class=\"ige-statistics-item\">
        <svg data-src=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 24, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 24, $this->source)), "html", null, true);
        echo "/dist/webassets/images/stats/inits.svg\"
             class=\"ige-statistics-item__icon\"
             fill=\"currentColor\"/>
        <h5 class=\"ige-statistics-item__title\">";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Initiative"));
        echo "</h5>
        <p class=\"ige-statistics-item__count\">+36</p>
      </div>
      <div class=\"ige-statistics-item\">
        <svg data-src=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 31, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 31, $this->source)), "html", null, true);
        echo "/dist/webassets/images/stats/paths.svg\"
             class=\"ige-statistics-item__icon\"
             fill=\"currentColor\"/>
        <h5 class=\"ige-statistics-item__title\">";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Paths"));
        echo "</h5>
        <p class=\"ige-statistics-item__count\">4</p>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@ignite/partials/widgets/statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  95 => 31,  88 => 27,  82 => 24,  75 => 20,  69 => 17,  62 => 13,  56 => 10,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ige-statistics\">
  <div class=\"container-xl\">
    <div class=\"ige-statistics-title\">
      <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/logos/ige-logo.svg\"></svg>
      <h3>{{ \"In Numbers\"|t }}</h3>
    </div>

    <div class=\"ige-statistics-content text-center\">
      <div class=\"ige-statistics-item\">
        <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/stats/agency.svg\"
             class=\"ige-statistics-item__icon\"
             fill=\"currentColor\"/>
        <h5 class=\"ige-statistics-item__title position-relative\">{{ \"Government Entity\"|t }}</h5>
        <p class=\"ige-statistics-item__count position-relative\">+20</p>
      </div>
      <div class=\"ige-statistics-item\">
        <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/stats/loginproc.svg\"
             class=\"ige-statistics-item__icon\"
             fill=\"currentColor\"/>
        <h5 class=\"ige-statistics-item__title\">{{ \"Registration\"|t }}</h5>
        <p class=\"ige-statistics-item__count\">2K</p>
      </div>
      <div class=\"ige-statistics-item\">
        <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/stats/inits.svg\"
             class=\"ige-statistics-item__icon\"
             fill=\"currentColor\"/>
        <h5 class=\"ige-statistics-item__title\">{{ \"Initiative\"|t }}</h5>
        <p class=\"ige-statistics-item__count\">+36</p>
      </div>
      <div class=\"ige-statistics-item\">
        <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/stats/paths.svg\"
             class=\"ige-statistics-item__icon\"
             fill=\"currentColor\"/>
        <h5 class=\"ige-statistics-item__title\">{{ \"Paths\"|t }}</h5>
        <p class=\"ige-statistics-item__count\">4</p>
      </div>
    </div>
  </div>
</section>
", "@ignite/partials/widgets/statistics.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\partials\\widgets\\statistics.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4, "t" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 't'],
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
