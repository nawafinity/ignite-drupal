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

/* @ignite/partials/sponsors.html.twig */
class __TwigTemplate_c114fdf5a3de1d8f1466fec2db9bab06a4134e3a35d8ea9659a89ebf3451ed23 extends \Twig\Template
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
        echo "<section class=\"ige-sponsors\">
  <div data-ige-sliders=\"#sponsorsConfig\">
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 5, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 5, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/mcit.png\" alt=\"وزارة الإتصالات وتقنية المعلومات\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 10, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 10, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/moi.png\" alt=\"وزارة الإستثمار\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 15, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 15, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/mom.png\" alt=\"وزارة الإعلام\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 20, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 20, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/moc.png\" alt=\"وزارة الثقافة\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 25, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 25, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/hrsd.png\" alt=\"وزارة الموارد البشرية و التنمية الاجتماعية\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 30, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 30, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/citc.png\" alt=\"هيئة الاتصالات وتقنية المعلومات\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 35, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 35, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/sdaia.png\" alt=\"الهيئة السعودية للبيانات والذكاء الإصطناعي\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 40, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 40, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/saip.png\" alt=\"الهيئة السعودية للملكية الفكرية\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 45, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 45, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/gcam.png\" alt=\"الهيئة العامة للإعلام المرئي والمسموع\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 50, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 50, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/rcfrc.png\" alt=\"الهيئة الملكية لتطوير مدينة الرياض\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 55, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 55, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/lcgpa.png\" alt=\"هيئة المحتوى المحلي والمشتريات الحكومية\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 60, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 60, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/zatca.png\" alt=\"هيئة الزكاة والضريبة والجمارك\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 65, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 65, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/lqp.png\" alt=\"برنامج جودة الحياة\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 70, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 70, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/snss.png\" alt=\"الإتحاد السعودي للرياضات الإلكترونية\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 75, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 75, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/cdf.png\" alt=\"صندوق التنمية الثقافي\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 80, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 80, $this->source)), "html", null, true);
        echo "/dist/webassets/images/sponsors/saudico.png\" alt=\"مكتب إنشاء الشركات السعودية العالمية\"/>
      </div>
    </div>
  </div>
  <script type=\"application/json\" id=\"sponsorsConfig\">
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
            \"slidesToShow\": 3,
            \"slidesToScroll\": 3
          }
        },
        {
          \"breakpoint\": 768,
          \"settings\": {
            \"slidesToShow\": 3,
            \"slidesToScroll\": 3
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
        return "@ignite/partials/sponsors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 80,  157 => 75,  149 => 70,  141 => 65,  133 => 60,  125 => 55,  117 => 50,  109 => 45,  101 => 40,  93 => 35,  85 => 30,  77 => 25,  69 => 20,  61 => 15,  53 => 10,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ige-sponsors\">
  <div data-ige-sliders=\"#sponsorsConfig\">
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/mcit.png\" alt=\"وزارة الإتصالات وتقنية المعلومات\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/moi.png\" alt=\"وزارة الإستثمار\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/mom.png\" alt=\"وزارة الإعلام\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/moc.png\" alt=\"وزارة الثقافة\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/hrsd.png\" alt=\"وزارة الموارد البشرية و التنمية الاجتماعية\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/citc.png\" alt=\"هيئة الاتصالات وتقنية المعلومات\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/sdaia.png\" alt=\"الهيئة السعودية للبيانات والذكاء الإصطناعي\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/saip.png\" alt=\"الهيئة السعودية للملكية الفكرية\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/gcam.png\" alt=\"الهيئة العامة للإعلام المرئي والمسموع\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/rcfrc.png\" alt=\"الهيئة الملكية لتطوير مدينة الرياض\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/lcgpa.png\" alt=\"هيئة المحتوى المحلي والمشتريات الحكومية\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/zatca.png\" alt=\"هيئة الزكاة والضريبة والجمارك\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/lqp.png\" alt=\"برنامج جودة الحياة\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/snss.png\" alt=\"الإتحاد السعودي للرياضات الإلكترونية\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/cdf.png\" alt=\"صندوق التنمية الثقافي\"/>
      </div>
    </div>
    <div class=\"ige-sponsors-item\">
      <div class=\"inner\">
        <img src=\"{{ base_path ~ directory }}/dist/webassets/images/sponsors/saudico.png\" alt=\"مكتب إنشاء الشركات السعودية العالمية\"/>
      </div>
    </div>
  </div>
  <script type=\"application/json\" id=\"sponsorsConfig\">
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
            \"slidesToShow\": 3,
            \"slidesToScroll\": 3
          }
        },
        {
          \"breakpoint\": 768,
          \"settings\": {
            \"slidesToShow\": 3,
            \"slidesToScroll\": 3
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
", "@ignite/partials/sponsors.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\partials\\sponsors.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
