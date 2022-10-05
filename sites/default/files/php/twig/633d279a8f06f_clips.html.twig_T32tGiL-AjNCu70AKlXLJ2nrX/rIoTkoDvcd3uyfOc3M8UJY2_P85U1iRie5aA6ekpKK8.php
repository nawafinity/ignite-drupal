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

/* @ignite/partials/clips.html.twig */
class __TwigTemplate_5908acc883f1b111f0ce080ef4522b2eb71746e4b7c5927664ff94ebf049aff7 extends \Twig\Template
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
        echo "<section class=\"ige-clips\">
  <div data-ige-sliders=\"#clipsConfig\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["ik"]) {
            // line 4
            echo "      <div class=\"ige-clips-item\">
        <div class=\"inner\" style=\"background-image: url(";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 5, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 5, $this->source)), "html", null, true);
            echo "/dist/webassets/images/clips/bg-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["ik"], 5, $this->source), "html", null, true);
            echo ".png)\">
          <svg width=\"46\" height=\"56\" viewBox=\"0 0 66 76\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path d=\"M65.4097 37.8831L0.295101 75.477L0.295105 0.289186L65.4097 37.8831Z\" fill=\"white\"/>
          </svg>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ik'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </div>
</section>

<script type=\"application/json\" id=\"clipsConfig\">
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
";
    }

    public function getTemplateName()
    {
        return "@ignite/partials/clips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ige-clips\">
  <div data-ige-sliders=\"#clipsConfig\">
    {% for ik in 1..10 %}
      <div class=\"ige-clips-item\">
        <div class=\"inner\" style=\"background-image: url({{ base_path ~ directory }}/dist/webassets/images/clips/bg-{{ ik }}.png)\">
          <svg width=\"46\" height=\"56\" viewBox=\"0 0 66 76\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
            <path d=\"M65.4097 37.8831L0.295101 75.477L0.295105 0.289186L65.4097 37.8831Z\" fill=\"white\"/>
          </svg>
        </div>
      </div>
    {% endfor %}
  </div>
</section>

<script type=\"application/json\" id=\"clipsConfig\">
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
", "@ignite/partials/clips.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\partials\\clips.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3);
        static $filters = array("escape" => 5);
        static $functions = array("range" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
