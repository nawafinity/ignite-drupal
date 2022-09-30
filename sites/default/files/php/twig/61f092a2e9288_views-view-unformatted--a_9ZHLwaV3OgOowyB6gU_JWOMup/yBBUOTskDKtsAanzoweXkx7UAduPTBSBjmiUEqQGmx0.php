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

/* themes/ignite/templates/views/views-view-unformatted--about.html.twig */
class __TwigTemplate_008c1f53a1f2ec524e54ed3d51f752e7cfeea5410bd115453842c468fadb7626 extends \Twig\Template
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
        // line 18
        echo "<div class=\"page-header\" style=\"background-image: url(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [($this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 18, $this->source) . "/dist/img/bg/bg-about.jpg")]), "html", null, true);
        echo ");\"></div>

<!-- Section:Events -->

<div id=\"about-items\" class=\"section\">

\t<div class=\"section-inner\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<h1 class=\"section-title\">";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("What is"));
        echo "
\t\t\t\t\t\t<br><img style=\"width: 225px\" src=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [($this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 29, $this->source) . "/dist/img/logo.svg")]), "html", null, true);
        echo "\" alt=\"Ignite\"/>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("?"));
        echo "
\t\t\t\t\t</h1>
\t\t\t\t\t<p class=\"fs-4\">
\t\t\t\t\t\t";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("A program that brings together a number of government agencies with a view to regulate and activate digital content markets in KSA through"));
        echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row mt-5\">
\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<h1 class=\"font-weight-bolder text-ig-blue\">";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Regulation"));
        echo "</h1>
\t\t\t\t\t<p>";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Facilitate engagement of private sector and entrepreneurs in the market through development of rules and regulations"));
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<h1 class=\"font-weight-bolder text-ig-green\">";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Governance"));
        echo "</h1>
\t\t\t\t\t<p>";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("An integrated governance that stimulates expansion and growth and encourages innovation"));
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t<h1 class=\"font-weight-bolder text-ig-red\">";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Development"));
        echo "</h1>
\t\t\t\t\t<p>";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Stimulate digital content market and attract various investments"));
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"bg-primary mt-5\" dir=\"ltr\">
\t\t\t<div class=\"container p-5\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-6 col-md-2\">
\t\t\t\t\t\t<div class=\"about-item green\">
\t\t\t\t\t\t\t<div class=\"icon\">I</div>
\t\t\t\t\t\t\t<span class=\"title\">Invigorate</span>
\t\t\t\t\t\t\t<div class=\"description\">";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Preparation of digital content in KSA"));
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-2\">
\t\t\t\t\t\t<div class=\"about-item blue\">
\t\t\t\t\t\t\t<div class=\"icon\">G</div>
\t\t\t\t\t\t\t<span class=\"title\">Grow</span>
\t\t\t\t\t\t\t<div class=\"description\">";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Development of investment potentials in digital content and its platforms"));
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-2\">
\t\t\t\t\t\t<div class=\"about-item red\">
\t\t\t\t\t\t\t<div class=\"icon\">N</div>
\t\t\t\t\t\t\t<span class=\"title\">Nurture</span>
\t\t\t\t\t\t\t<div class=\"description\">";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sponsorship of local digital advertising sector"));
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-2\">
\t\t\t\t\t\t<div class=\"about-item blue\">
\t\t\t\t\t\t\t<div class=\"icon\">I</div>
\t\t\t\t\t\t\t<span class=\"title\">Improve</span>
\t\t\t\t\t\t\t<div class=\"description\">";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Access to talents in digital content and its platforms markets"));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-2\">
\t\t\t\t\t\t<div class=\"about-item red\">
\t\t\t\t\t\t\t<div class=\"icon\">T</div>
\t\t\t\t\t\t\t<span class=\"title\">Transform</span>
\t\t\t\t\t\t\t<div class=\"description\">";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Development of infrastructure of digital content and its platforms in KSA"));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6 col-md-2\">
\t\t\t\t\t\t<div class=\"about-item green\">
\t\t\t\t\t\t\t<div class=\"icon\">E</div>
\t\t\t\t\t\t\t<span class=\"title\">Enable</span>
\t\t\t\t\t\t\t<div class=\"description\">";
        // line 98
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Governance of the sector and improve relevant legislation"));
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div id=\"\" class=\"section m-5\">
\t<div class=\"container\">
\t\t<div class=\"row gy-5\">
\t\t\t<div class=\"col-12 col-md-6 text-center text-lg-start\">
\t\t\t\t<div class=\"d-inline-block d-lg-flex\">
\t\t\t\t\t<img src=\"";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [($this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 113, $this->source) . "/dist/img/logos/red-badge.png")]), "html", null, true);
        echo "\" alt=\"\" class=\"d-none d-lg-block\" style=\"height: 80px; width: 80px;\"/>
\t\t\t\t\t<h1 style=\"font-size: 200px;\" class=\"text-ig-red\">36</h1>
\t\t\t\t\t<p class=\"d-inline-block d-lg-block ms-4 align-self-center fs-3 text-primary\">
\t\t\t\t\t\t";
        // line 116
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("quality initiatives to improve content market"));
        echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-6 text-center text-lg-start\">
\t\t\t\t<div class=\"list\">
\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t<div class=\"border border-5 border-success border-top-0 border-bottom-0 border-end-0 ps-3\">
\t\t\t\t\t\t\t<h4 class=\"text-ig-blue\">";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Financing initiatives"));
        echo "</h4>
\t\t\t\t\t\t\t<p class=\"fs-5\">";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("to develop local content"));
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t<div class=\"border border-5 border-success border-top-0 border-bottom-0 border-end-0 ps-3\">
\t\t\t\t\t\t\t<h4 class=\"text-ig-blue\">";
        // line 130
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Regulatory initiatives"));
        echo "</h4>
\t\t\t\t\t\t\t<p class=\"fs-5\">";
        // line 131
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("To ease labor, data protection and privacy and property rights regulations"));
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"list-item\">
\t\t\t\t\t\t<div class=\"border border-5 border-success border-top-0 border-bottom-0 border-end-0 ps-3\">
\t\t\t\t\t\t\t<h4 class=\"text-ig-blue\">";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Training and qualification initiatives"));
        echo "</h4>
\t\t\t\t\t\t\t<p class=\"fs-5\">";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Establishment of specialized academies to provide scholarships and stimulate creative excellence"));
        echo "</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div id=\"members\" class=\"section\">
\t<div class=\"section-header position-relative\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\" style=\"height: 200px\">
\t\t\t\t<div class=\"col-12 col-lg-8 align-self-center\">
\t\t\t\t\t<h1 class=\"text-white\">";
        // line 154
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Members of Digital Content Council"));
        echo "</h1>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12 col-lg-4\">
\t\t\t\t\t";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 159
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["row"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["content"] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 159), "field_member_top", [], "any", false, false, true, 159), "value", [], "any", false, false, true, 159) == "1")) {
                // line 160
                echo "\t\t\t\t\t\t  ";
                $context["photo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["row"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["content"] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 160), "field_member_photo", [], "any", false, false, true, 160), "entity", [], "any", false, false, true, 160), "fileuri", [], "any", false, false, true, 160);
                echo "          
\t\t\t\t\t\t  ";
                // line 161
                $context["entity"] = twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["row"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["content"] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 161);
                echo "          

\t\t\t\t\t\t\t<div class=\"member-item-master position-absolute\" ";
                // line 163
                if (($context["photo"] ?? null)) {
                    echo " style=\"background-image: url(";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [twig_trim_filter(strip_tags($this->sandbox->ensureToStringAllowed(($context["photo"] ?? null), 163, $this->source)))]), "html", null, true);
                    echo ")\" ";
                }
                echo ">

\t\t\t\t\t\t\t\t<div class=\"member-item-body d-flex flex-row justify-content-center\" style=\"height: 100%;\">
\t\t\t\t\t\t\t\t\t<div class=\"align-self-end mb-3 text-center\" style=\"z-index: 2;\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t";
                // line 168
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "title", [], "any", false, false, true, 168), "value", [], "any", false, false, true, 168), 168, $this->source))), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-white\">
\t\t\t\t\t\t\t\t\t\t";
                // line 171
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_member_name", [], "any", false, false, true, 171), "value", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t</h6>

\t\t\t\t\t\t\t\t\t\t";
                // line 175
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            }
            // line 181
            echo "
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"section-inner mt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row members-list\">
\t\t\t\t";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 193
            echo "\t\t\t\t\t";
            $context["row_classes"] = [0 => ((($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 194
            echo "
\t\t\t\t\t<div class=\"col-12 col-md-4 col-lg-3\">";
            // line 196
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
            // line 197
            echo "</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/views/views-view-unformatted--about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 199,  336 => 197,  334 => 196,  331 => 194,  328 => 193,  324 => 192,  313 => 183,  306 => 181,  298 => 175,  292 => 171,  286 => 168,  274 => 163,  269 => 161,  264 => 160,  261 => 159,  257 => 158,  250 => 154,  232 => 139,  228 => 138,  218 => 131,  214 => 130,  206 => 125,  202 => 124,  191 => 116,  185 => 113,  167 => 98,  156 => 90,  145 => 82,  135 => 75,  125 => 68,  115 => 61,  99 => 48,  95 => 47,  89 => 44,  85 => 43,  79 => 40,  75 => 39,  65 => 32,  57 => 29,  53 => 28,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/ignite/templates/views/views-view-unformatted--about.html.twig", "C:\\xampp\\htdocs\\ignite\\themes\\ignite\\templates\\views\\views-view-unformatted--about.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 158, "if" => 159, "set" => 160);
        static $filters = array("escape" => 18, "t" => 28, "trim" => 163, "striptags" => 163);
        static $functions = array("file_url" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 't', 'trim', 'striptags'],
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
