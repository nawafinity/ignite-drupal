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

/* @ignite/partials/texts.html.twig */
class __TwigTemplate_7c134b20e55df8daf020cfbe6f09b4c0b62fac87a0de8c04f5b1d2858305e096 extends \Twig\Template
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
        echo "<section class=\"ige-texts overflow-hidden\">
  <div data-ige-sliders=\"#textsConfig\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["ik"]) {
            // line 4
            echo "      <div class=\"ige-texts-item\">
        <div class=\"inner mx-3 text-center\">
          <span class=\"fs-1\">";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("A Place to  Create"));
            echo "</span>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ik'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </div>

  <script type=\"application/json\" id=\"textsConfig\">
    {
      \"slidesToShow\": 5,
      \"slidesToScroll\": 5,
      \"speed\": 600,
      \"infinite\": true,
      \"autoplay\": true,
      \"responsive\": [
        {
          \"breakpoint\": 576,
          \"settings\": {
            \"slidesToShow\": 2,
            \"slidesToScroll\": 2
          }
        },
        {
          \"breakpoint\": 768,
          \"settings\": {
            \"slidesToShow\": 2,
            \"slidesToScroll\": 2
          }
        },
        {
          \"breakpoint\": 995,
          \"settings\": {
            \"slidesToShow\": 3,
            \"slidesToScroll\": 3
          }
        },
        {
          \"breakpoint\": 1200,
          \"settings\": {
            \"slidesToShow\": 4,
            \"slidesToScroll\": 4
          }
        },
        {
          \"breakpoint\": 1400,
          \"settings\": {
            \"slidesToShow\": 5,
            \"slidesToScroll\": 5
          }
        }
      ]
    }
  </script>
</section>
";
    }

    public function getTemplateName()
    {
        return "@ignite/partials/texts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  51 => 6,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ige-texts overflow-hidden\">
  <div data-ige-sliders=\"#textsConfig\">
    {% for ik in 1..10 %}
      <div class=\"ige-texts-item\">
        <div class=\"inner mx-3 text-center\">
          <span class=\"fs-1\">{{ \"A Place to  Create\"|t }}</span>
        </div>
      </div>
    {% endfor %}
  </div>

  <script type=\"application/json\" id=\"textsConfig\">
    {
      \"slidesToShow\": 5,
      \"slidesToScroll\": 5,
      \"speed\": 600,
      \"infinite\": true,
      \"autoplay\": true,
      \"responsive\": [
        {
          \"breakpoint\": 576,
          \"settings\": {
            \"slidesToShow\": 2,
            \"slidesToScroll\": 2
          }
        },
        {
          \"breakpoint\": 768,
          \"settings\": {
            \"slidesToShow\": 2,
            \"slidesToScroll\": 2
          }
        },
        {
          \"breakpoint\": 995,
          \"settings\": {
            \"slidesToShow\": 3,
            \"slidesToScroll\": 3
          }
        },
        {
          \"breakpoint\": 1200,
          \"settings\": {
            \"slidesToShow\": 4,
            \"slidesToScroll\": 4
          }
        },
        {
          \"breakpoint\": 1400,
          \"settings\": {
            \"slidesToShow\": 5,
            \"slidesToScroll\": 5
          }
        }
      ]
    }
  </script>
</section>
", "@ignite/partials/texts.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\partials\\texts.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3);
        static $filters = array("t" => 6);
        static $functions = array("range" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['t'],
                ['range']
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
