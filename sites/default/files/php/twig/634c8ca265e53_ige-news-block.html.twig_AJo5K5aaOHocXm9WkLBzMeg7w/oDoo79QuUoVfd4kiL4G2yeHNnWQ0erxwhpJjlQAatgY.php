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

/* modules/custom/igemod/templates/ige-news-block.html.twig */
class __TwigTemplate_d56f415b38343a62cf9db4d836424cf362ce7719e95ec5b6d8b964bde4a8e9ad extends \Twig\Template
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
        echo "<section class=\"ige-news\">
  <div class=\"container-xl\">
    <div class=\"ige-news-title d-flex justify-content-between\">
      <h2>";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("News"));
        echo "</h2>
      <a href=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "media-center\" class=\"btn btn-primary\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Show All"));
        echo "</a>
    </div>
    <div class=\"ige-news-list\">
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 9
            echo "        <div class=\"ige-news-list__item\">
          <div class=\"ige-news-item\">
            <div class=\"card border-0 mx-2 rounded-2 overflow-hidden\">
              <div class=\"image\">
                <img src=\"";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "field_news_thumb", [], "any", false, false, true, 13), "entity", [], "any", false, false, true, 13), "uri", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13), 13, $this->source), "medium")), "html", null, true);
            echo "\" />
              </div>
              <div class=\"card-body\">
                <h4 class=\"card-title\">";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, true, 16), "value", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</h4>
                ";
            // line 17
            $context["body"] = twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "body", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source)));
            // line 18
            echo "                <p class=\"card-text mt-3\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 18, $this->source)) > 80)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 18, $this->source), 0, 80) . "...")) : (($context["body"] ?? null))), "html", null, true);
            echo "</p>
                <span class=\"mt-3 text-info\">";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "created", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source), "M d, Y"), "html", null, true);
            echo "</span>
                <a href=\"";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "news/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary float-none float-lg-end\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Read More"));
            echo "</a>
              </div>
            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/igemod/templates/ige-news-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  87 => 20,  83 => 19,  78 => 18,  76 => 17,  72 => 16,  66 => 13,  60 => 9,  56 => 8,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ige-news\">
  <div class=\"container-xl\">
    <div class=\"ige-news-title d-flex justify-content-between\">
      <h2>{{ \"News\"|t }}</h2>
      <a href=\"{{ url('<front>') }}media-center\" class=\"btn btn-primary\">{{ \"Show All\"|t }}</a>
    </div>
    <div class=\"ige-news-list\">
      {% for key,value in entries %}
        <div class=\"ige-news-list__item\">
          <div class=\"ige-news-item\">
            <div class=\"card border-0 mx-2 rounded-2 overflow-hidden\">
              <div class=\"image\">
                <img src=\"{{ file_url(value.field_news_thumb.entity.uri.value|image_style('medium')) }}\" />
              </div>
              <div class=\"card-body\">
                <h4 class=\"card-title\">{{ value.title.value }}</h4>
                {% set body = value.body.value|striptags|trim %}
                <p class=\"card-text mt-3\">{{ body|length > 80 ? body|slice(0, 80)|raw ~ '...' : body }}</p>
                <span class=\"mt-3 text-info\">{{ value.created.value|date('M d, Y') }}</span>
                <a href=\"{{ url('<front>') }}news/{{ value.id }}\" class=\"btn btn-sm btn-primary float-none float-lg-end\">{{ \"Read More\"|t }}</a>
              </div>
            </div>
          </div>
        </div>
      {% endfor %}
    </div>
  </div>
</section>
", "modules/custom/igemod/templates/ige-news-block.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\modules\\custom\\igemod\\templates\\ige-news-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 8, "set" => 17);
        static $filters = array("t" => 4, "escape" => 13, "image_style" => 13, "trim" => 17, "striptags" => 17, "length" => 18, "raw" => 18, "slice" => 18, "date" => 19);
        static $functions = array("url" => 5, "file_url" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set'],
                ['t', 'escape', 'image_style', 'trim', 'striptags', 'length', 'raw', 'slice', 'date'],
                ['url', 'file_url']
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
