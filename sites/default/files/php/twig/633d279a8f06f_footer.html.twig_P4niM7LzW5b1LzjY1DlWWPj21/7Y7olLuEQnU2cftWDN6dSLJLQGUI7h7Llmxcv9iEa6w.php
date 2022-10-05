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

/* @ignite/partials/footer.html.twig */
class __TwigTemplate_02c43d748e2727b5d010f204d18e91dfa36c4b136bac2223900da9ae579ebf74 extends \Twig\Template
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
        echo "<footer class=\"ige-footer\">
  <div class=\"container-xl\">
    <div class=\"row gy-5\">
      <div
        class=\"col-12 col-xl-10  d-flex flex-column flex-xl-row align-items-center align-content-center align-content-xl-start text-center text-xl-start\">
        <div class=\"ige-footer-logo\">
          <svg data-src=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 7, $this->source)), "html", null, true);
        echo "/dist/webassets/images/logos/ige-logo.svg\" fill=\"currentColor\" />
        </div>

        <div class=\"ige-footer-content mt-3 mt-xl-0 ms-xl-5\">
          <div class=\"list-inline\">
            <div class=\"list-inline-item\">
              <a href=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo "</a>
            </div>
            <div class=\"list-inline-item\">
              <a href=\"";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "about\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("About"));
        echo "</a>
            </div>
            <div class=\"list-inline-item\">
              <a href=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "initiatives\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Initiatives"));
        echo "</a>
            </div>
            <div class=\"list-inline-item\">
              <a href=\"";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "contact\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact"));
        echo "</a>
            </div>
          </div>

          <p class=\"mt-3\">";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("An executive program that aims to make the Kingdom of Saudi Arabia a leading country in the digital content sector and its platforms by 2030."));
        echo "</p>
        </div>
      </div>
      <div class=\"col-12 col-xl-2 d-flex justify-content-center justify-content-xl-end\">
        <div class=\"ige-footer-socials\">
          <div class=\"list-inline\">
            <div class=\"list-inline-item\">
              <a href=\"#\">
                <box-icon type=\"logo\" name=\"facebook\" class=\"icon\"></box-icon>
              </a>
            </div>
            <div class=\"list-inline-item\">
              <a href=\"#\">
                <box-icon type=\"logo\" name=\"twitter\" class=\"icon\"></box-icon>
              </a>
            </div>
            <div class=\"list-inline-item\">
              <a href=\"#\">
                <box-icon type=\"logo\" name=\"youtube\" class=\"icon\"></box-icon>
              </a>
            </div>
            <div class=\"list-inline-item\">
              <a href=\"#\">
                <box-icon type=\"logo\" name=\"linkedin\" class=\"icon\"></box-icon>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</footer>

";
    }

    public function getTemplateName()
    {
        return "@ignite/partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  80 => 22,  72 => 19,  64 => 16,  56 => 13,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"ige-footer\">
  <div class=\"container-xl\">
    <div class=\"row gy-5\">
      <div
        class=\"col-12 col-xl-10  d-flex flex-column flex-xl-row align-items-center align-content-center align-content-xl-start text-center text-xl-start\">
        <div class=\"ige-footer-logo\">
          <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/logos/ige-logo.svg\" fill=\"currentColor\" />
        </div>

        <div class=\"ige-footer-content mt-3 mt-xl-0 ms-xl-5\">
          <div class=\"list-inline\">
            <div class=\"list-inline-item\">
              <a href=\"{{ url('<front>') }}\">{{ \"Home\"|t }}</a>
            </div>
            <div class=\"list-inline-item\">
              <a href=\"{{ url('<front>') }}about\">{{ \"About\"|t }}</a>
            </div>
            <div class=\"list-inline-item\">
              <a href=\"{{ url('<front>') }}initiatives\">{{ \"Initiatives\"|t }}</a>
            </div>
            <div class=\"list-inline-item\">
              <a href=\"{{ url('<front>') }}contact\">{{ \"Contact\"|t }}</a>
            </div>
          </div>

          <p class=\"mt-3\">{{ \"An executive program that aims to make the Kingdom of Saudi Arabia a leading country in the digital content sector and its platforms by 2030.\"|t }}</p>
        </div>
      </div>
      <div class=\"col-12 col-xl-2 d-flex justify-content-center justify-content-xl-end\">
        <div class=\"ige-footer-socials\">
          <div class=\"list-inline\">
            <div class=\"list-inline-item\">
              <a href=\"#\">
                <box-icon type=\"logo\" name=\"facebook\" class=\"icon\"></box-icon>
              </a>
            </div>
            <div class=\"list-inline-item\">
              <a href=\"#\">
                <box-icon type=\"logo\" name=\"twitter\" class=\"icon\"></box-icon>
              </a>
            </div>
            <div class=\"list-inline-item\">
              <a href=\"#\">
                <box-icon type=\"logo\" name=\"youtube\" class=\"icon\"></box-icon>
              </a>
            </div>
            <div class=\"list-inline-item\">
              <a href=\"#\">
                <box-icon type=\"logo\" name=\"linkedin\" class=\"icon\"></box-icon>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</footer>

", "@ignite/partials/footer.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\partials\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 7, "t" => 13);
        static $functions = array("url" => 13);

        try {
            $this->sandbox->checkSecurity(
                [],
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
