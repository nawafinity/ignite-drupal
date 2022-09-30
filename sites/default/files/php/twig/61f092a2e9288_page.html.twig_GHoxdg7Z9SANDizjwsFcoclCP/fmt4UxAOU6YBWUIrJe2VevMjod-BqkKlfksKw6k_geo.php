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

/* themes/ignite/templates/layout/page.html.twig */
class __TwigTemplate_5365ecb24f16622d1b5f135cdede7a9ef7cb93cfed40ce55e9c3da4ef5cf8be0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- header -->
<header class=\"header\">
\t<nav class=\"navbar navbar-expand-lg navbar-light bg-white\">
\t\t<div class=\"container\">
\t\t\t";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_branding", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "

\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_menu", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "

\t\t\t\t";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_additional_menu", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
<!-- header-end -->

<!-- Carousel -->
";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "carousel_area", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "


<!-- END Carousel -->
<!-- main-area -->
\t<main>
\t\t";
        // line 27
        $this->displayBlock('main', $context, $blocks);
        // line 30
        echo "</main>
<!-- END main -->

\t";
        // line 33
        if (($context["is_front"] ?? null)) {
            // line 34
            echo "\t<!-- Widget:Sponsor -->
\t\t<section id=\"sponsors\" class=\"section section-sponsors\"> <section class=\"section-inner\">
\t\t\t<div class=\"container\">
\t\t\t\t<h2 class=\"section-title\">";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("IGNITE<br/>Members"));
            echo "</h2>
\t\t\t\t<div class=\"list-inline text-center owl-carousel owl-theme\">
\t\t\t\t\t<div class=\"list-inline-item\">
\t\t\t\t\t\t<img src=\"";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 40, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 40, $this->source)), "html", null, true);
            echo "/dist/img/sponsors/mcit.png\" alt=\"وزارة الإتصالات\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-inline-item\">
\t\t\t\t\t\t<img src=\"";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 43, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 43, $this->source)), "html", null, true);
            echo "/dist/img/sponsors/moi.png\" alt=\"وزارة الإستثمار\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-inline-item\">
\t\t\t\t\t\t<img src=\"";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 46, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 46, $this->source)), "html", null, true);
            echo "/dist/img/sponsors/saip.png\" alt=\"الهيئة السعودية للملكية الفكرية\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-inline-item\">
\t\t\t\t\t\t<img src=\"";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 49, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 49, $this->source)), "html", null, true);
            echo "/dist/img/sponsors/gcam.png\" alt=\"الهيئة العامة للإعلام المرئي والمسموع\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-inline-item\">
\t\t\t\t\t\t<img src=\"";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 52, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 52, $this->source)), "html", null, true);
            echo "/dist/img/sponsors/citc.png\" alt=\"هيئة الاتصالات وتقنية المعلومات\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-inline-item\">
\t\t\t\t\t\t<img src=\"";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 55, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 55, $this->source)), "html", null, true);
            echo "/dist/img/sponsors/mom.png\" alt=\"وزارة الإعلام\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-inline-item\">
\t\t\t\t\t\t<img src=\"";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 58, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 58, $this->source)), "html", null, true);
            echo "/dist/img/sponsors/moc.png\" alt=\"وزارة الثقافة\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-inline-item\">
\t\t\t\t\t\t<img src=\"";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 61, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 61, $this->source)), "html", null, true);
            echo "/dist/img/sponsors/saip.png\" alt=\"الهيئة السعودية للملكية الفكرية\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-inline-item\">
\t\t\t\t\t\t<img src=\"";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 64, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 64, $this->source)), "html", null, true);
            echo "/dist/img/sponsors/snss.png\" alt=\"الإتحاد السعودي للرياضات الإلكترونية\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>
\t</section>
\t<!-- END Widget:Sponsor -->
";
        }
        // line 73
        echo "

<!-- footer -->
<footer class=\"footer\">
\t<div class=\"footer-inner\">
\t\t<div class=\"container pt-5\">
\t\t\t<div class=\"footer-brand\">
\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 82, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 82, $this->source)), "html", null, true);
        echo "/dist/img/logo-white.png\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 82, $this->source), "html", null, true);
        echo "\"/>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Copyright -->
\t\t\t<div class=\"footer-copyright py-3 mt-3\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row gy-3 gy-lg-0\">
\t\t\t\t\t\t<div class=\"col-12 col-lg-6 text-center text-lg-start\">
\t\t\t\t\t\t\t<ul class=\"links\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "getId", [], "method", false, false, true, 93) == "en")) {
            // line 94
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "/en/form/contact-en\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact Us"));
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
            echo "/form/contact\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contact Us"));
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<front>"));
        echo "/terms\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Terms"));
        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "getId", [], "method", false, false, true, 103) == "en")) {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"/\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Change Lanuage"));
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 106
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"/en\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Change Lanuage"));
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-12 col-lg-6\">
\t\t\t\t\t\t\t<div class=\"footer-social float-none float-lg-end\">
\t\t\t\t\t\t\t\t<a href=\"https://twitter.com/saudiignite\" target=\"_blank\" rel=\"noopener\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/channel/UCLvNzfPMn3hdDgg76x-1YNg\" target=\"_blank\" rel=\"noopener\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/saudiignite/\" target=\"_blank\" rel=\"noopener\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-instagram\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"https://www.linkedin.com/company/79969251\" target=\"_blank\" rel=\"noopener\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- / Copyright -->
\t\t</div>
\t</div>
</footer>
<!-- footer-end -->
";
    }

    // line 27
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 28,  262 => 27,  231 => 108,  225 => 106,  219 => 104,  217 => 103,  209 => 100,  205 => 98,  197 => 96,  189 => 94,  187 => 93,  171 => 82,  160 => 73,  148 => 64,  142 => 61,  136 => 58,  130 => 55,  124 => 52,  118 => 49,  112 => 46,  106 => 43,  100 => 40,  94 => 37,  89 => 34,  87 => 33,  82 => 30,  80 => 27,  71 => 21,  60 => 13,  55 => 11,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ignite/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\ignite\\themes\\ignite\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 27, "if" => 33);
        static $filters = array("escape" => 5, "t" => 37);
        static $functions = array("url" => 94);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
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
