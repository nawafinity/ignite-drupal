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

/* @ignite/layout/page.html.twig */
class __TwigTemplate_890258174e34b6fa856ba45ac98c3d985d76aa390c179b593c2051ca70a49fb4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header_content' => [$this, 'block_header_content'],
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<header
  class=\"ige-header";
        // line 3
        if ((($context["is_front"] ?? null) || ($context["header_full"] ?? null))) {
            echo " ige-header-full";
        } else {
            echo " shadow-sm";
        }
        echo "\" ";
        if (($context["is_front"] ?? null)) {
            echo " style=\"background-image: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 3, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 3, $this->source)), "html", null, true);
            echo "/dist/webassets/images/bgs/header-bg.webp)\"";
        }
        echo " ";
        if (($context["header_bg"] ?? null)) {
            echo " style=\"background-image: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_bg"] ?? null), 3, $this->source), "html", null, true);
            echo ")\"";
        }
        echo ">
  ";
        // line 4
        if (($context["is_front"] ?? null)) {
            // line 5
            echo "    <svg class=\"ige-header-illus\"
         data-src=\"";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 6, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 6, $this->source)), "html", null, true);
            echo "/dist/webassets/images/illustrations/ilus-header.svg\"/>
  ";
        }
        // line 8
        echo "
  ";
        // line 9
        $this->loadTemplate("@ignite/partials/navbar.html.twig", "@ignite/layout/page.html.twig", 9)->display($context);
        // line 10
        echo "
  ";
        // line 11
        if (($context["is_front"] ?? null)) {
            // line 12
            echo "    <div class=\"ige-header-content\">
      <div class=\"container-xl\">
        <div class=\"row gy-5\">
          <div class=\"col-12 col-xl-8\">
            <div class=\"ige-header-content__title\">
              <h3>";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("A new era for the content industry in Saudi Arabia"));
            echo "</h3>
            </div>
            <div class=\"ige-header-content__description\">
              <p>";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("An executive program that aims to make the Kingdom of Saudi Arabia a leading country in the digital content sector and its platforms by 2030."));
            echo "</p>
            </div>

            <div class=\"ige-header-content__details\">
              <div class=\"inner\">
                <div>
                  <img src=\"";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 26, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 26, $this->source)), "html", null, true);
            echo "/dist/webassets/images/icons/user.svg\"
                       alt=\"";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Game Design"));
            echo "\"/>
                  <strong>";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Game Design"));
            echo "</strong>
                </div>
                <div>
                  <img src=\"";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 31, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 31, $this->source)), "html", null, true);
            echo "/dist/webassets/images/icons/video.svg\"
                       alt=\"";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Advertising Industry"));
            echo "\"/>
                  <strong>";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Advertising Industry"));
            echo "</strong>
                </div>
                <div>
                  <img src=\"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 36, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 36, $this->source)), "html", null, true);
            echo "/dist/webassets/images/icons/waves.svg\"
                       alt=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sound Design"));
            echo "\"/>
                  <strong>";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sound Design"));
            echo "</strong>
                </div>
                <div>
                  <img src=\"";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 41, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 41, $this->source)), "html", null, true);
            echo "/dist/webassets/images/icons/film.svg\"
                       alt=\"";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Video Industry"));
            echo "\"/>
                  <strong>";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Video Industry"));
            echo "</strong>
                </div>
              </div>

              <div class=\"mt-5\">
                <a href=\"";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "initiatives\" class=\"btn btn-info btn-explorer\">
                  <span class=\"text\">";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Explore Initiatives"));
            echo "</span>
                  <img src=\"";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 50, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 50, $this->source)), "html", null, true);
            echo "/dist/webassets/images/icons/btnarrow.svg\"
                       alt=\"";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Explore Initiatives"));
            echo "\" class=\"arrow\"/>
                </a>
              </div>
            </div>
          </div>
          <div class=\"col-12 col-xl-4\">
            <div class=\"ige-header-content__videobtn\">
              <img src=\"";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 58, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 58, $this->source)), "html", null, true);
            echo "/dist/webassets/images/icons/play-btn.svg\"
                   alt=\"";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Play Video"));
            echo "\"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 66
        echo "
  ";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tara"] ?? null), 67, $this->source), "html", null, true);
        echo "

  ";
        // line 69
        $this->displayBlock('header_content', $context, $blocks);
        // line 70
        echo "
</header>


<!-- END Carousel -->
<!-- main-area -->
<main>
  ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_area", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "

  ";
        // line 79
        if (($context["page_title"] ?? null)) {
            // line 80
            echo "    <div class=\"ige-page-title my-px-30\">
      <div class=\"container-xl\">
        <div class=\"inner\">
          <h2 class=\"m-0 p-0\">";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title"] ?? null), 83, $this->source), "html", null, true);
            echo "</h2>
        </div>
      </div>
    </div>
  ";
        }
        // line 88
        echo "
  ";
        // line 89
        $this->displayBlock('main', $context, $blocks);
        // line 92
        echo "</main>
<!-- END main -->


";
        // line 97
        $this->loadTemplate("@ignite/partials/footer.html.twig", "@ignite/layout/page.html.twig", 97)->display($context);
    }

    // line 69
    public function block_header_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 89
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@ignite/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 90,  260 => 89,  254 => 69,  250 => 97,  244 => 92,  242 => 89,  239 => 88,  231 => 83,  226 => 80,  224 => 79,  219 => 77,  210 => 70,  208 => 69,  203 => 67,  200 => 66,  190 => 59,  186 => 58,  176 => 51,  172 => 50,  168 => 49,  164 => 48,  156 => 43,  152 => 42,  148 => 41,  142 => 38,  138 => 37,  134 => 36,  128 => 33,  124 => 32,  120 => 31,  114 => 28,  110 => 27,  106 => 26,  97 => 20,  91 => 17,  84 => 12,  82 => 11,  79 => 10,  77 => 9,  74 => 8,  69 => 6,  66 => 5,  64 => 4,  44 => 3,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Header #}
<header
  class=\"ige-header{% if is_front or header_full %} ige-header-full{% else %} shadow-sm{% endif %}\" {% if is_front %} style=\"background-image: url({{ base_path ~ directory }}/dist/webassets/images/bgs/header-bg.webp)\"{% endif %} {% if header_bg %} style=\"background-image: url({{ header_bg }})\"{% endif %}>
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

  {{ tara }}

  {% block header_content %}{% endblock %}

</header>


<!-- END Carousel -->
<!-- main-area -->
<main>
  {{ page.top_area }}

  {% if page_title %}
    <div class=\"ige-page-title my-px-30\">
      <div class=\"container-xl\">
        <div class=\"inner\">
          <h2 class=\"m-0 p-0\">{{ page_title }}</h2>
        </div>
      </div>
    </div>
  {% endif %}

  {% block main %}
    {{ page.content }}
  {% endblock %}
</main>
<!-- END main -->


{# Footer #}
{% include '@ignite/partials/footer.html.twig' %}
", "@ignite/layout/page.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "include" => 9, "block" => 69);
        static $filters = array("escape" => 3, "t" => 17);
        static $functions = array("url" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include', 'block'],
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
