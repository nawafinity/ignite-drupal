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

/* @ignite/partials/navbar.html.twig */
class __TwigTemplate_9554f79183b76c457a550b743cdedede extends \Twig\Template
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
        $context["navbar_classes"] = (((($context["is_front"] ?? null) || ($context["header_full"] ?? null))) ? ("bg-transparent navbar-dark") : ("navbar-light bg-white"));
        // line 2
        echo "
<nav class=\"navbar navbar-expand-xl ";
        // line 3
        if (($context["navbar_classes"] ?? null)) {
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_classes"] ?? null), 3, $this->source), "html", null, true);
        }
        echo "\">
  <div class=\"container-xl\">
    <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\">
      <svg class=\"logo\" data-src=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 6, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 6, $this->source)), "html", null, true);
        echo "/dist/webassets/images/logos/ige-logo.svg\" fill=\"currentColor\"/>
    </a>

    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#navbarContent\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"offcanvas offcanvas-start text-bg-dark\" tabindex=\"-1\" id=\"navbarContent\">
      <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasDarkNavbarLabel\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Menu"));
        echo "</h5>
        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"offcanvas\"
                aria-label=\"Close\"></button>
      </div>
      <div class=\"offcanvas-body\">
        ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_menu", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "

        ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_additional_menu", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "@ignite/partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  75 => 20,  67 => 15,  55 => 6,  51 => 5,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ignite/partials/navbar.html.twig", "C:\\laragon\\www\\ignite-drupal\\themes\\ignite\\templates\\partials\\navbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3);
        static $filters = array("escape" => 3, "t" => 15);
        static $functions = array("url" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
                ['url']
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
