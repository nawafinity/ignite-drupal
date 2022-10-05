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

/* themes/ignite/templates/views/node--initiative.html.twig */
class __TwigTemplate_ce57adb252ac822dac9c979c604a55ee434aeb561b1c60f2a5537c24490f7afc extends \Twig\Template
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
        echo "<section class=\"ige-section my-px-30\">
  <div class=\"ige-section-content\">
    <div class=\"container-xl\">
      <div class=\"row\">
        <div class=\"col-12 col-lg-8\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h2 class=\"card-title d-flex\">";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "label", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</h2>

              ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "fields", [], "any", false, false, true, 10), "field_initiatives_details", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10), 10, $this->source));
        echo "

            </div>
          </div>
        </div>
        <div class=\"col-12 col-lg-4\">
          <div class=\"d-flex flex-column gap-3\">
            <div class=\"card bg-dark text-white text-center\">
              <div class=\"card-body\">
                <div class=\"row\">
                  <div class=\"col-12 col-lg-3\">
                    <box-icon name=\"time-five\" color=\"white\" size=\"lg\"/>
                  </div>
                  <div class=\"col-12 col-lg-9\">
                    <h5 class=\"card-title\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Registration period"));
        echo "</h5>
                    <div>";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "fields", [], "any", false, false, true, 25), "field_registration_period", [], "any", false, false, true, 25), "value", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "</div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"card\">
              <div class=\"card-body\">
                <h5 class=\"card-title d-flex flex-row align-items-center gap-3\">
                  <svg width=\"68\" height=\"68\" viewBox=\"0 0 68 68\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <rect width=\"68\" height=\"68\" rx=\"16\" fill=\"#00C864\"/>
                    <path
                      d=\"M40.983 17.3333H27.0163C20.9497 17.3333 17.333 20.95 17.333 27.0166V40.9833C17.333 47.05 20.9497 50.6666 27.0163 50.6666H40.983C47.0497 50.6666 50.6663 47.05 50.6663 40.9833V27.0166C50.6663 20.95 47.0497 17.3333 40.983 17.3333ZM30.6163 38.8333L26.8663 42.5833C26.6163 42.8333 26.2997 42.95 25.983 42.95C25.6663 42.95 25.333 42.8333 25.0997 42.5833L23.8497 41.3333C23.3497 40.85 23.3497 40.05 23.8497 39.5666C24.333 39.0833 25.1163 39.0833 25.6163 39.5666L25.983 39.9333L28.8497 37.0666C29.333 36.5833 30.1163 36.5833 30.6163 37.0666C31.0997 37.55 31.0997 38.35 30.6163 38.8333ZM30.6163 27.1666L26.8663 30.9166C26.6163 31.1666 26.2997 31.2833 25.983 31.2833C25.6663 31.2833 25.333 31.1666 25.0997 30.9166L23.8497 29.6666C23.3497 29.1833 23.3497 28.3833 23.8497 27.9C24.333 27.4166 25.1163 27.4166 25.6163 27.9L25.983 28.2666L28.8497 25.4C29.333 24.9166 30.1163 24.9166 30.6163 25.4C31.0997 25.8833 31.0997 26.6833 30.6163 27.1666ZM43.2663 41.7H34.5163C33.833 41.7 33.2663 41.1333 33.2663 40.45C33.2663 39.7666 33.833 39.2 34.5163 39.2H43.2663C43.9663 39.2 44.5163 39.7666 44.5163 40.45C44.5163 41.1333 43.9663 41.7 43.2663 41.7ZM43.2663 30.0333H34.5163C33.833 30.0333 33.2663 29.4666 33.2663 28.7833C33.2663 28.1 33.833 27.5333 34.5163 27.5333H43.2663C43.9663 27.5333 44.5163 28.1 44.5163 28.7833C44.5163 29.4666 43.9663 30.0333 43.2663 30.0333Z\"
                      fill=\"white\"/>
                  </svg>

                  <span>";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Registration criteria"));
        echo "</span>
                </h5>

                <div class=\"mt-3\">
                  ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "fields", [], "any", false, false, true, 44), "field_registration_criteria", [], "any", false, false, true, 44), "value", [], "any", false, false, true, 44), 44, $this->source));
        echo "
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_registration_form", [], "any", false, false, true, 52)) {
            // line 53
            echo "        <div class=\"my-px-30\">
          ";
            // line 54
            $context["label_hidden"] = "yes";
            // line 55
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(Drupal\twig_tweak\TwigTweakExtension::viewFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_registration_form", [], "any", false, false, true, 55), 55, $this->source)), "label_hidden"), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 58
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/ignite/templates/views/node--initiative.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 58,  117 => 55,  115 => 54,  112 => 53,  110 => 52,  99 => 44,  92 => 40,  74 => 25,  70 => 24,  53 => 10,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ige-section my-px-30\">
  <div class=\"ige-section-content\">
    <div class=\"container-xl\">
      <div class=\"row\">
        <div class=\"col-12 col-lg-8\">
          <div class=\"card\">
            <div class=\"card-body\">
              <h2 class=\"card-title d-flex\">{{ node.label }}</h2>

              {{ node.fields.field_initiatives_details.value|raw }}

            </div>
          </div>
        </div>
        <div class=\"col-12 col-lg-4\">
          <div class=\"d-flex flex-column gap-3\">
            <div class=\"card bg-dark text-white text-center\">
              <div class=\"card-body\">
                <div class=\"row\">
                  <div class=\"col-12 col-lg-3\">
                    <box-icon name=\"time-five\" color=\"white\" size=\"lg\"/>
                  </div>
                  <div class=\"col-12 col-lg-9\">
                    <h5 class=\"card-title\">{{ \"Registration period\"|t }}</h5>
                    <div>{{ node.fields.field_registration_period.value }}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"card\">
              <div class=\"card-body\">
                <h5 class=\"card-title d-flex flex-row align-items-center gap-3\">
                  <svg width=\"68\" height=\"68\" viewBox=\"0 0 68 68\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <rect width=\"68\" height=\"68\" rx=\"16\" fill=\"#00C864\"/>
                    <path
                      d=\"M40.983 17.3333H27.0163C20.9497 17.3333 17.333 20.95 17.333 27.0166V40.9833C17.333 47.05 20.9497 50.6666 27.0163 50.6666H40.983C47.0497 50.6666 50.6663 47.05 50.6663 40.9833V27.0166C50.6663 20.95 47.0497 17.3333 40.983 17.3333ZM30.6163 38.8333L26.8663 42.5833C26.6163 42.8333 26.2997 42.95 25.983 42.95C25.6663 42.95 25.333 42.8333 25.0997 42.5833L23.8497 41.3333C23.3497 40.85 23.3497 40.05 23.8497 39.5666C24.333 39.0833 25.1163 39.0833 25.6163 39.5666L25.983 39.9333L28.8497 37.0666C29.333 36.5833 30.1163 36.5833 30.6163 37.0666C31.0997 37.55 31.0997 38.35 30.6163 38.8333ZM30.6163 27.1666L26.8663 30.9166C26.6163 31.1666 26.2997 31.2833 25.983 31.2833C25.6663 31.2833 25.333 31.1666 25.0997 30.9166L23.8497 29.6666C23.3497 29.1833 23.3497 28.3833 23.8497 27.9C24.333 27.4166 25.1163 27.4166 25.6163 27.9L25.983 28.2666L28.8497 25.4C29.333 24.9166 30.1163 24.9166 30.6163 25.4C31.0997 25.8833 31.0997 26.6833 30.6163 27.1666ZM43.2663 41.7H34.5163C33.833 41.7 33.2663 41.1333 33.2663 40.45C33.2663 39.7666 33.833 39.2 34.5163 39.2H43.2663C43.9663 39.2 44.5163 39.7666 44.5163 40.45C44.5163 41.1333 43.9663 41.7 43.2663 41.7ZM43.2663 30.0333H34.5163C33.833 30.0333 33.2663 29.4666 33.2663 28.7833C33.2663 28.1 33.833 27.5333 34.5163 27.5333H43.2663C43.9663 27.5333 44.5163 28.1 44.5163 28.7833C44.5163 29.4666 43.9663 30.0333 43.2663 30.0333Z\"
                      fill=\"white\"/>
                  </svg>

                  <span>{{ \"Registration criteria\"|t }}</span>
                </h5>

                <div class=\"mt-3\">
                  {{ node.fields.field_registration_criteria.value|raw }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {% if node.field_registration_form %}
        <div class=\"my-px-30\">
          {% set label_hidden = \"yes\" %}
          {{ node.field_registration_form|view|without('label_hidden') }}
        </div>
      {% endif %}
    </div>
  </div>
</section>
", "themes/ignite/templates/views/node--initiative.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\views\\node--initiative.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 52, "set" => 54);
        static $filters = array("escape" => 8, "raw" => 10, "t" => 24, "without" => 55, "view" => 55);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'raw', 't', 'without', 'view'],
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
