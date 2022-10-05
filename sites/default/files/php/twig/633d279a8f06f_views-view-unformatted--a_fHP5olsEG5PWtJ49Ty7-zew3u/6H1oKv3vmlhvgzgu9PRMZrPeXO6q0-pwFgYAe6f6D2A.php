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
class __TwigTemplate_e87c2044145c8402b0387045f9d9ecb18569b82b4ff21d2f6a43cfb063202c88 extends \Twig\Template
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
        echo "<!-- Section:Events -->
<section class=\"ige-section my-px-60\">
  <div class=\"container-xl\">
    <div class=\"ige-section-title ige-section-title--under\">
      <h2>";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Ignite Council Members"));
        echo "</h2>
    </div>
    <div class=\"ige-section-content\">
      <div class=\"ige-about-members\">
        <div class=\"row g-3\">
          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 28
            echo "            ";
            $context["photo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = $context["row"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["content"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 28), "field_member_photo", [], "any", false, false, true, 28), "entity", [], "any", false, false, true, 28), "fileuri", [], "any", false, false, true, 28);
            // line 29
            echo "            ";
            $context["entity"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = (($__internal_compile_3 = $context["row"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["content"] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 29);
            // line 30
            echo "            <div
              class=\"";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = (($__internal_compile_5 = $context["row"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["content"] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 31), "field_member_top", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31) == "1")) {
                echo "col-12";
            } else {
                echo "col-6";
            }
            echo "\">
              <div class=\"ige-about-members__item\">
                <div class=\"card ige-about-member\">
                  <div class=\"d-flex flex-row\">
                    <div class=\"ige-about-member__photo\">
                      <img src=\"";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(twig_trim_filter(twig_striptags($this->sandbox->ensureToStringAllowed(($context["photo"] ?? null), 36, $this->source)))), "html", null, true);
            echo "\"
                           class=\"img-fluid rounded-start\" alt=\"1\">
                    </div>
                    <div class=\"card-body\">
                      <span class=\"ige-about-member__title\">";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_member_prefix", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "</span>
                      <h5 class=\"ige-about-member__name card-title\">";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "title", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "</h5>
                      <p class=\"card-text\">";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "field_member_job_title", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
      </div>
    </div>
  </div>
</section>
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
        return array (  106 => 49,  93 => 42,  89 => 41,  85 => 40,  78 => 36,  66 => 31,  63 => 30,  60 => 29,  57 => 28,  53 => 27,  45 => 22,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}
<!-- Section:Events -->
<section class=\"ige-section my-px-60\">
  <div class=\"container-xl\">
    <div class=\"ige-section-title ige-section-title--under\">
      <h2>{{ \"Ignite Council Members\"|t }}</h2>
    </div>
    <div class=\"ige-section-content\">
      <div class=\"ige-about-members\">
        <div class=\"row g-3\">
          {% for row in rows %}
            {% set photo = row['content']['#row']._entity.field_member_photo.entity.fileuri %}
            {% set entity = row['content']['#row']._entity %}
            <div
              class=\"{% if row['content']['#row']._entity.field_member_top.value == '1' %}col-12{% else %}col-6{% endif %}\">
              <div class=\"ige-about-members__item\">
                <div class=\"card ige-about-member\">
                  <div class=\"d-flex flex-row\">
                    <div class=\"ige-about-member__photo\">
                      <img src=\"{{ file_url(photo|striptags|trim) }}\"
                           class=\"img-fluid rounded-start\" alt=\"1\">
                    </div>
                    <div class=\"card-body\">
                      <span class=\"ige-about-member__title\">{{ entity.field_member_prefix.value }}</span>
                      <h5 class=\"ige-about-member__name card-title\">{{ entity.title.value }}</h5>
                      <p class=\"card-text\">{{ entity.field_member_job_title.value }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</section>
", "themes/ignite/templates/views/views-view-unformatted--about.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\views\\views-view-unformatted--about.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 27, "set" => 28, "if" => 31);
        static $filters = array("t" => 22, "escape" => 36, "trim" => 36, "striptags" => 36);
        static $functions = array("file_url" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['t', 'escape', 'trim', 'striptags'],
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
