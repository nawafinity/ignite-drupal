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

/* @ignite/partials/header.html.twig */
class __TwigTemplate_a5f217c14e523b6178f819b2b86e8b96402743478d792d4452f8778b62bf2801 extends \Twig\Template
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
        echo "<header
  class=\"ige-header";
        // line 2
        if (($context["is_front"] ?? null)) {
            echo " ige-header-full";
        } else {
            echo " shadow-sm";
        }
        echo "\" ";
        if (($context["is_front"] ?? null)) {
            echo " style=\"background-image: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 2, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 2, $this->source)), "html", null, true);
            echo "/dist/webassets/images/bgs/header-bg.webp)\" ";
        }
        echo ">
  ";
        // line 3
        if (($context["is_front"] ?? null)) {
            // line 4
            echo "    <svg class=\"ige-header-illus\"
         data-src=\"";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 5, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 5, $this->source)), "html", null, true);
            echo "/dist/webassets/images/illustrations/ilus-header.svg\"/>
  ";
        }
        // line 7
        echo "
  ";
        // line 8
        $this->loadTemplate("@ignite/partials/navbar.html.twig", "@ignite/partials/header.html.twig", 8)->display($context);
        // line 9
        echo "
  ";
        // line 10
        if (($context["is_front"] ?? null)) {
            // line 11
            echo "    <div class=\"ige-header-content\">
      <div class=\"container-xl\">
        <div class=\"row gy-5\">
          <div class=\"col-12 col-xl-8\">
            <div class=\"ige-header-content__title\">
              <h3>";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("A new era for the content industry in Saudi Arabia"));
            echo "</h3>
            </div>
            <div class=\"ige-header-content__description\">
              <p>";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("An executive program that aims to make the Kingdom of Saudi Arabia a leading country in the digital content sector and its platforms by 2030."));
            echo "</p>
            </div>

            <div class=\"ige-header-content__details\">
              <div class=\"inner\">
                <div>
                  <img src=\"";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 25, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 25, $this->source)), "html", null, true);
            echo "/dist/webassets/images/icons/user.svg\"
                       alt=\"";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Game Design"));
            echo "\"/>
                  <strong>";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Game Design"));
            echo "</strong>
                </div>
                <div>
                  <img src=\"";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 30, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 30, $this->source)), "html", null, true);
            echo "/dist/webassets/images/icons/video.svg\"
                       alt=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Advertising Industry"));
            echo "\"/>
                  <strong>";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Advertising Industry"));
            echo "</strong>
                </div>
                <div>
                  <img src=\"";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 35, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 35, $this->source)), "html", null, true);
            echo "/dist/webassets/images/icons/waves.svg\"
                       alt=\"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sound Design"));
            echo "\"/>
                  <strong>";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sound Design"));
            echo "</strong>
                </div>
                <div>
                  <img src=\"";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 40, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 40, $this->source)), "html", null, true);
            echo "/dist/webassets/images/icons/film.svg\"
                       alt=\"";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Video Industry"));
            echo "\"/>
                  <strong>";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Video Industry"));
            echo "</strong>
                </div>
              </div>

              <div class=\"mt-5\">
                <a href=\"";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "initiatives\" class=\"btn btn-info btn-explorer\">
                  <span class=\"text\">";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Explore Initiatives"));
            echo "</span>
                  <img src=\"";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 49, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 49, $this->source)), "html", null, true);
            echo "/dist/webassets/images/icons/btnarrow.svg\"
                       alt=\"";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Explore Initiatives"));
            echo "\" class=\"arrow\"/>
                </a>
              </div>
            </div>
          </div>
          <div class=\"col-12 col-xl-4\">
            <div class=\"ige-header-content__videobtn\">
              <img src=\"";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 57, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 57, $this->source)), "html", null, true);
            echo "/dist/webassets/images/icons/play-btn.svg\"
                   alt=\"";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Play Video"));
            echo "\"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 65
        echo "</header>
";
    }

    public function getTemplateName()
    {
        return "@ignite/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 65,  182 => 58,  178 => 57,  168 => 50,  164 => 49,  160 => 48,  156 => 47,  148 => 42,  144 => 41,  140 => 40,  134 => 37,  130 => 36,  126 => 35,  120 => 32,  116 => 31,  112 => 30,  106 => 27,  102 => 26,  98 => 25,  89 => 19,  83 => 16,  76 => 11,  74 => 10,  71 => 9,  69 => 8,  66 => 7,  61 => 5,  58 => 4,  56 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header
  class=\"ige-header{% if is_front %} ige-header-full{% else %} shadow-sm{% endif %}\" {% if is_front %} style=\"background-image: url({{ base_path ~ directory }}/dist/webassets/images/bgs/header-bg.webp)\" {% endif %}>
  {% if is_front %}
    <svg class=\"ige-header-illus\"
         data-src=\"{{ base_path ~ directory }}/dist/webassets/images/illustrations/ilus-header.svg\"/>
  {% endif %}

  {% include \"@ignite/partials/navbar.html.twig\" %}

  {% if is_front %}
    <div class=\"ige-header-content\">
      <div class=\"container-xl\">
        <div class=\"row gy-5\">
          <div class=\"col-12 col-xl-8\">
            <div class=\"ige-header-content__title\">
              <h3>{{ \"A new era for the content industry in Saudi Arabia\"|t }}</h3>
            </div>
            <div class=\"ige-header-content__description\">
              <p>{{ \"An executive program that aims to make the Kingdom of Saudi Arabia a leading country in the digital content sector and its platforms by 2030.\"|t }}</p>
            </div>

            <div class=\"ige-header-content__details\">
              <div class=\"inner\">
                <div>
                  <img src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/user.svg\"
                       alt=\"{{ \"Game Design\"|t }}\"/>
                  <strong>{{ \"Game Design\"|t }}</strong>
                </div>
                <div>
                  <img src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/video.svg\"
                       alt=\"{{ \"Advertising Industry\"|t }}\"/>
                  <strong>{{ \"Advertising Industry\"|t }}</strong>
                </div>
                <div>
                  <img src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/waves.svg\"
                       alt=\"{{ \"Sound Design\"|t }}\"/>
                  <strong>{{ \"Sound Design\"|t }}</strong>
                </div>
                <div>
                  <img src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/film.svg\"
                       alt=\"{{ \"Video Industry\"|t }}\"/>
                  <strong>{{ \"Video Industry\"|t }}</strong>
                </div>
              </div>

              <div class=\"mt-5\">
                <a href=\"{{ url(\"<front>\") }}initiatives\" class=\"btn btn-info btn-explorer\">
                  <span class=\"text\">{{ \"Explore Initiatives\"|t }}</span>
                  <img src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/btnarrow.svg\"
                       alt=\"{{ \"Explore Initiatives\"|t }}\" class=\"arrow\"/>
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
  {% endif %}
</header>
", "@ignite/partials/header.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\partials\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "include" => 8);
        static $filters = array("escape" => 2, "t" => 16);
        static $functions = array("url" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
