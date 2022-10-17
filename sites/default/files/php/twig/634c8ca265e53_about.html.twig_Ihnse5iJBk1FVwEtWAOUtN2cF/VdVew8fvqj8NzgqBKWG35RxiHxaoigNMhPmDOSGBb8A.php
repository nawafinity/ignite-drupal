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

/* @ignite/partials/widgets/about.html.twig */
class __TwigTemplate_b893ecfdd55ef84b01514298e82bfeb38c7c624fe84fae2a87f3306cebb42f52 extends \Twig\Template
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
        echo "<div class=\"ige-block-about\">
  <svg class=\"ige-block-about__illus\" data-src=\"";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 2, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 2, $this->source)), "html", null, true);
        echo "/dist/webassets/images/illustrations/ilus-green.svg\"/>
  <div class=\"ige-block-about__content\">
    <div class=\"container-xl\">
      <div class=\"ige-block-about__title d-flex flex-column flex-xl-row align-items-center\">
        <h3 class=\"mt-3 mt-xl-0\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Initiatives"));
        echo "</h3>
        <svg class=\"ige-block-about__logo\" data-src=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 7, $this->source)), "html", null, true);
        echo "/dist/webassets/images/logos/ige-logo.svg\"/>
      </div>

      <p>";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("An executive program that aims to make the Kingdom of Saudi Arabia a leading country in the digital content sector and its platforms by 2030."));
        echo "</p>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ignite/partials/widgets/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  53 => 7,  49 => 6,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ige-block-about\">
  <svg class=\"ige-block-about__illus\" data-src=\"{{ base_path ~ directory }}/dist/webassets/images/illustrations/ilus-green.svg\"/>
  <div class=\"ige-block-about__content\">
    <div class=\"container-xl\">
      <div class=\"ige-block-about__title d-flex flex-column flex-xl-row align-items-center\">
        <h3 class=\"mt-3 mt-xl-0\">{{ \"Initiatives\"|t }}</h3>
        <svg class=\"ige-block-about__logo\" data-src=\"{{ base_path ~ directory }}/dist/webassets/images/logos/ige-logo.svg\"/>
      </div>

      <p>{{ \"An executive program that aims to make the Kingdom of Saudi Arabia a leading country in the digital content sector and its platforms by 2030.\"|t }}</p>
    </div>
  </div>
</div>
", "@ignite/partials/widgets/about.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\partials\\widgets\\about.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2, "t" => 6);
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
