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

/* modules/custom/igemod/templates/ige-initiatives-carousel-block.html.twig */
class __TwigTemplate_49ccbf600b66fcea10940a812a91422c extends \Twig\Template
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
        echo "<section class=\"ige-section\">
  <div class=\"container-fluid\">
    <div class=\"ige-section-description\">
      <div class=\"ige-initiatives-carousel\" data-ige-sliders=\"#initiativesSliderConfig\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 6
            echo "          ";
            $context["summary"] = twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "field_initiative_summary", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), 6, $this->source)));
            // line 7
            echo "
          <div class=\"ige-initiatives-carousel__item bg-primary\">
            <div class=\"ige-initiatives-carousel__item-bg\"
              ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "field_initiative_background", [], "any", false, false, true, 10), "entity", [], "any", false, false, true, 10), "fileuri", [], "any", false, false, true, 10)) {
                echo " style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "field_initiative_background", [], "any", false, false, true, 10), "entity", [], "any", false, false, true, 10), "fileuri", [], "any", false, false, true, 10), 10, $this->source)))), "html", null, true);
                echo ")\" ";
            }
            echo "></div>
            <div class=\"inner\">
              <div class=\"ige-initiatives-carousel__item-logo\">
                ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "field_initiative_logo", [], "any", false, false, true, 13), "entity", [], "any", false, false, true, 13), "fileuri", [], "any", false, false, true, 13)) {
                // line 14
                echo "                  <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "field_initiative_logo", [], "any", false, false, true, 14), "entity", [], "any", false, false, true, 14), "uri", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source), "thumbnail")), "html", null, true);
                echo "\"/>
                ";
            }
            // line 16
            echo "              </div>
              ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "field_start_date", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17)) {
                // line 18
                echo "                ";
                $context["today"] = twig_date_format_filter($this->env, "now", "U");
                // line 19
                echo "                ";
                $context["start_date"] = twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "field_start_date", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source), "U");
                // line 20
                echo "                ";
                $context["difference"] = (($context["start_date"] ?? null) - ($context["today"] ?? null));
                // line 21
                echo "                ";
                $context["days_left"] = twig_round((((($context["difference"] ?? null) / 60) / 60) / 24), 0, "ceil");
                // line 22
                echo "
                <div class=\"ige-initiatives-carousel__item-flag\">";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["days_left"] ?? null), 23, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Days left"));
                echo "</div>
              ";
            }
            // line 25
            echo "              <div class=\"ige-initiatives-carousel__item-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</div>
              <div class=\"ige-initiatives-carousel__item-description\">";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["summary"] ?? null), 26, $this->source), "html", null, true);
            echo "</div>
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      </div>
    </div>
  </div>
</section>
<script type=\"application/json\" id=\"initiativesSliderConfig\">
  {
    \"slidesToShow\": 1,
    \"slidesToScroll\": 1,
    \"speed\": 300,
    \"infinite\": true,
    \"autoplay\": true,
    \"arrow\": true
  }

</script>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/igemod/templates/ige-initiatives-carousel-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  107 => 26,  102 => 25,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  78 => 17,  75 => 16,  69 => 14,  67 => 13,  57 => 10,  52 => 7,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/igemod/templates/ige-initiatives-carousel-block.html.twig", "C:\\laragon\\www\\ignite-drupal\\modules\\custom\\igemod\\templates\\ige-initiatives-carousel-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5, "set" => 6, "if" => 10);
        static $filters = array("trim" => 6, "striptags" => 6, "escape" => 10, "image_style" => 14, "date" => 18, "round" => 21, "t" => 23);
        static $functions = array("file_url" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['trim', 'striptags', 'escape', 'image_style', 'date', 'round', 't'],
                ['file_url']
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
