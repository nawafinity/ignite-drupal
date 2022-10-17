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

/* themes/ignite/templates/customize/page--front.html.twig */
class __TwigTemplate_45bf4bd6402f9fb7bfe21a730eb251f830ad89a40df5955cc7854c026f95d1ed extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@ignite/layout/page.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        $this->loadTemplate("@ignite/partials/sponsors.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 4)->display($context);
        // line 5
        echo "
  <div class=\"mt-2\">
    ";
        // line 7
        $this->loadTemplate("@ignite/partials/clips.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 7)->display($context);
        // line 8
        echo "    <div class=\"text-primary\">
      ";
        // line 9
        $this->loadTemplate("@ignite/partials/texts.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 9)->display($context);
        // line 10
        echo "    </div>
  </div>
  <div class=\"mt-2\">
    ";
        // line 13
        $this->loadTemplate("@ignite/partials/clips.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 13)->display($context);
        // line 14
        echo "    <div class=\"text-primary\">
      ";
        // line 15
        $this->loadTemplate("@ignite/partials/texts.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 15)->display($context);
        // line 16
        echo "    </div>
  </div>

  <section class=\"my-px-40\">
    <div class=\"container-xl\">
      ";
        // line 21
        $this->loadTemplate("@ignite/partials/widgets/about.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 21)->display($context);
        // line 22
        echo "    </div>
  </section>

  ";
        // line 25
        $this->loadTemplate("@ignite/partials/widgets/statistics.html.twig", "themes/ignite/templates/customize/page--front.html.twig", 25)->display($context);
        // line 26
        echo "
  <section class=\"ige-categories\">
    <div class=\"container-xl\">
      <div class=\"ige-categories-list\">
        <div class=\"ige-categories-list__item bg bg-info\">
          <div class=\"ige-categories-item\">
            <div class=\"ige-categories-item__icon\">
              <svg data-src=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 33, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 33, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/c-ghust.svg\"/>
            </div>
            <div class=\"ige-categories-item__illus\">
              <svg data-src=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 36, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 36, $this->source)), "html", null, true);
        echo "/dist/webassets/images/illustrations/circles.svg\"/>
            </div>
            <div class=\"ige-categories-item__description\">
              <h3>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Game Design"));
        echo "</h3>
              <p></p>
              <a class=\"btn btn-light text-primary text-start d-flex justify-content-between explore\"
                 href=\"";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("view.initiatives.initiatives_page"));
        echo "\">
                <span>";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Explore Initiatives"));
        echo "</span>
                <svg data-src=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 44, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 44, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/arrow.svg\" class=\"arrow\"/>
              </a>
            </div>
          </div>
        </div>
        <div class=\"ige-categories-list__item bg bg-primary\">
          <div class=\"ige-categories-item\">
            <div class=\"ige-categories-item__icon\">
              <svg data-src=\"";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 52, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 52, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/c-video.svg\"/>
            </div>
            <div class=\"ige-categories-item__illus\">
              <svg data-src=\"";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 55, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 55, $this->source)), "html", null, true);
        echo "/dist/webassets/images/illustrations/shake.svg\"/>
            </div>
            <div class=\"ige-categories-item__description\">
              <h3>";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Advertising Industry"));
        echo "</h3>
              <p></p>
              <a class=\"btn btn-light text-primary text-start d-flex justify-content-between explore\"
                 href=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("view.initiatives.initiatives_page"));
        echo "\">
                <span>";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Explore Initiatives"));
        echo "</span>
                <svg data-src=\"";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 63, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 63, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/arrow.svg\" class=\"arrow\"/>
              </a>
            </div>
          </div>
        </div>
        <div class=\"ige-categories-list__item bg bg-success\">
          <div class=\"ige-categories-item\">
            <div class=\"ige-categories-item__icon\">
              <svg data-src=\"";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 71, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 71, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/c-audio.svg\"/>
            </div>
            <div class=\"ige-categories-item__illus\">
              <svg data-src=\"";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 74, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 74, $this->source)), "html", null, true);
        echo "/dist/webassets/images/illustrations/undercircle.svg\"/>
            </div>
            <div class=\"ige-categories-item__description\">
              <h3>";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Acoustics Design"));
        echo "</h3>
              <p></p>
              <a class=\"btn btn-light text-primary text-start d-flex justify-content-between explore\"
                 href=\"";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("view.initiatives.initiatives_page"));
        echo "\">
                <span>";
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Explore Initiatives"));
        echo "</span>
                <svg data-src=\"";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 82, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 82, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/arrow.svg\" class=\"arrow\"/>
              </a>
            </div>
          </div>
        </div>
        <div class=\"ige-categories-list__item bg bg-danger\">
          <div class=\"ige-categories-item\">
            <div class=\"ige-categories-item__icon\">
              <svg data-src=\"";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 90, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 90, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/c-play.svg\"/>
            </div>
            <div class=\"ige-categories-item__illus\">
              <svg data-src=\"";
        // line 93
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 93, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 93, $this->source)), "html", null, true);
        echo "/dist/webassets/images/illustrations/stepstep.svg\"/>
            </div>
            <div class=\"ige-categories-item__description\">
              <h3>";
        // line 96
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Video Industry"));
        echo "</h3>
              <p></p>
              <a class=\"btn btn-light text-primary text-start d-flex justify-content-between explore\"
                 href=\"";
        // line 99
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("view.initiatives.initiatives_page"));
        echo "\">
                <span>";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Explore Initiatives"));
        echo "</span>
                <svg data-src=\"";
        // line 101
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 101, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 101, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/arrow.svg\" class=\"arrow\"/>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  ";
        // line 110
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
        echo "

  ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "news_area", [], "any", false, false, true, 112), 112, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/customize/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 112,  252 => 110,  240 => 101,  236 => 100,  232 => 99,  226 => 96,  220 => 93,  214 => 90,  203 => 82,  199 => 81,  195 => 80,  189 => 77,  183 => 74,  177 => 71,  166 => 63,  162 => 62,  158 => 61,  152 => 58,  146 => 55,  140 => 52,  129 => 44,  125 => 43,  121 => 42,  115 => 39,  109 => 36,  103 => 33,  94 => 26,  92 => 25,  87 => 22,  85 => 21,  78 => 16,  76 => 15,  73 => 14,  71 => 13,  66 => 10,  64 => 9,  61 => 8,  59 => 7,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@ignite/layout/page.html.twig\" %}

{% block main %}
  {% include \"@ignite/partials/sponsors.html.twig\" %}

  <div class=\"mt-2\">
    {% include \"@ignite/partials/clips.html.twig\" %}
    <div class=\"text-primary\">
      {% include \"@ignite/partials/texts.html.twig\" %}
    </div>
  </div>
  <div class=\"mt-2\">
    {% include \"@ignite/partials/clips.html.twig\" %}
    <div class=\"text-primary\">
      {% include \"@ignite/partials/texts.html.twig\" %}
    </div>
  </div>

  <section class=\"my-px-40\">
    <div class=\"container-xl\">
      {% include \"@ignite/partials/widgets/about.html.twig\" %}
    </div>
  </section>

  {% include \"@ignite/partials/widgets/statistics.html.twig\" %}

  <section class=\"ige-categories\">
    <div class=\"container-xl\">
      <div class=\"ige-categories-list\">
        <div class=\"ige-categories-list__item bg bg-info\">
          <div class=\"ige-categories-item\">
            <div class=\"ige-categories-item__icon\">
              <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/c-ghust.svg\"/>
            </div>
            <div class=\"ige-categories-item__illus\">
              <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/illustrations/circles.svg\"/>
            </div>
            <div class=\"ige-categories-item__description\">
              <h3>{{ \"Game Design\"|t }}</h3>
              <p></p>
              <a class=\"btn btn-light text-primary text-start d-flex justify-content-between explore\"
                 href=\"{{ path('view.initiatives.initiatives_page') }}\">
                <span>{{ \"Explore Initiatives\"|t }}</span>
                <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/arrow.svg\" class=\"arrow\"/>
              </a>
            </div>
          </div>
        </div>
        <div class=\"ige-categories-list__item bg bg-primary\">
          <div class=\"ige-categories-item\">
            <div class=\"ige-categories-item__icon\">
              <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/c-video.svg\"/>
            </div>
            <div class=\"ige-categories-item__illus\">
              <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/illustrations/shake.svg\"/>
            </div>
            <div class=\"ige-categories-item__description\">
              <h3>{{ \"Advertising Industry\"|t }}</h3>
              <p></p>
              <a class=\"btn btn-light text-primary text-start d-flex justify-content-between explore\"
                 href=\"{{ path('view.initiatives.initiatives_page') }}\">
                <span>{{ \"Explore Initiatives\"|t }}</span>
                <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/arrow.svg\" class=\"arrow\"/>
              </a>
            </div>
          </div>
        </div>
        <div class=\"ige-categories-list__item bg bg-success\">
          <div class=\"ige-categories-item\">
            <div class=\"ige-categories-item__icon\">
              <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/c-audio.svg\"/>
            </div>
            <div class=\"ige-categories-item__illus\">
              <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/illustrations/undercircle.svg\"/>
            </div>
            <div class=\"ige-categories-item__description\">
              <h3>{{ \"Acoustics Design\"|t }}</h3>
              <p></p>
              <a class=\"btn btn-light text-primary text-start d-flex justify-content-between explore\"
                 href=\"{{ path('view.initiatives.initiatives_page') }}\">
                <span>{{ \"Explore Initiatives\"|t }}</span>
                <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/arrow.svg\" class=\"arrow\"/>
              </a>
            </div>
          </div>
        </div>
        <div class=\"ige-categories-list__item bg bg-danger\">
          <div class=\"ige-categories-item\">
            <div class=\"ige-categories-item__icon\">
              <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/c-play.svg\"/>
            </div>
            <div class=\"ige-categories-item__illus\">
              <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/illustrations/stepstep.svg\"/>
            </div>
            <div class=\"ige-categories-item__description\">
              <h3>{{ \"Video Industry\"|t }}</h3>
              <p></p>
              <a class=\"btn btn-light text-primary text-start d-flex justify-content-between explore\"
                 href=\"{{ path('view.initiatives.initiatives_page') }}\">
                <span>{{ \"Explore Initiatives\"|t }}</span>
                <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/arrow.svg\" class=\"arrow\"/>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{ page.content }}

  {{ page.news_area }}
{% endblock %}
", "themes/ignite/templates/customize/page--front.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\customize\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 4);
        static $filters = array("escape" => 33, "t" => 39);
        static $functions = array("path" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape', 't'],
                ['path']
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
