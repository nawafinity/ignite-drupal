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

/* @ignite/partials/widgets/about_details.html.twig */
class __TwigTemplate_d01e94483bd4c42980e3c5423044271d9c7d942022f3216a1daf40ed7a2c5705 extends \Twig\Template
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
  <div class=\"container-xl\">
    <div class=\"ige-about-tabs\">
      <div class=\"my-px-40\">
        <div class=\"ige-section-title\">
          <h2>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Ignite Paths"));
        echo "</h2>
        </div>
        <div class=\"ige-section-description\">
          <div id=\"paths\">
            <div class=\"ige-about-collapse\">
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\" data-bs-target=\"#path-0\"
                      aria-expanded=\"true\" aria-controls=\"path-0\">
                <svg data-src=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 13, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 13, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/c-ghust.svg\" fill=\"currentColor\"
                     class=\"icon-35 me-2\"/>
                <span>";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Game Design"));
        echo "</span>
              </button>
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\" data-bs-target=\"#path-1\"
                      aria-expanded=\"false\" aria-controls=\"path-1\">
                <svg data-src=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 19, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 19, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/c-video.svg\" fill=\"currentColor\"
                     class=\"icon-35 me-2\"/>
                <span>";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Advertising Industry"));
        echo "</span>
              </button>
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\" data-bs-target=\"#path-2\"
                      aria-expanded=\"false\" aria-controls=\"path-2\">
                <svg data-src=\"";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 25, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 25, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/c-audio.svg\" fill=\"currentColor\"
                     class=\"icon-35 me-2\"/>
                <span>";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Acoustics Design"));
        echo "</span>
              </button>
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\" data-bs-target=\"#path-3\"
                      aria-expanded=\"false\" aria-controls=\"path-3\">
                <svg data-src=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 31, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 31, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/c-play.svg\" fill=\"currentColor\"
                     class=\"icon-35 me-2\"/>
                <span>";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Video Industry"));
        echo "</span>
              </button>
            </div>
            <div class=\"mt-3\">
              <div class=\"ige-about-paths__content collapse show\" id=\"path-0\" data-bs-parent=\"#paths\"> malesuada fames
                ac
                turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna
                eget.
              </div>
              <div class=\"ige-about-paths__content collapse \" id=\"path-1\" data-bs-parent=\"#paths\"> malesuada fames ac
                turpis
                egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget.
              </div>
              <div class=\"ige-about-paths__content collapse \" id=\"path-2\" data-bs-parent=\"#paths\"> malesuada fames ac
                turpis
                egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget.
              </div>
              <div class=\"ige-about-paths__content collapse \" id=\"path-3\" data-bs-parent=\"#paths\"> malesuada fames ac
                turpis
                egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"my-px-40\">
        <div class=\"ige-section-title\">
          <h2>";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Initiatives Types"));
        echo "</h2>
        </div>
        <div class=\"ige-section-description\">
          <div id=\"initstypes\">
            <div class=\"ige-about-collapse\">
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\"
                      data-bs-target=\"#initype-0\"
                      aria-expanded=\"true\" aria-controls=\"path-0\">
                <svg data-src=\"";
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 68, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 68, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/graduation.svg\"
                     fill=\"currentColor\" class=\"icon-35 me-2\"/>
                <span>Training and Qualification</span>
              </button>
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\"
                      data-bs-target=\"#initype-1\"
                      aria-expanded=\"false\" aria-controls=\"path-1\">
                <svg data-src=\"";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 75, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 75, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/funding.svg\" fill=\"currentColor\"
                     class=\"icon-35 me-2\"/>
                <span>";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Funding Initiatives"));
        echo "</span>
              </button>
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\"
                      data-bs-target=\"#initype-2\"
                      aria-expanded=\"false\" aria-controls=\"path-2\">
                <svg data-src=\"";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 82, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 82, $this->source)), "html", null, true);
        echo "/dist/webassets/images/icons/org.svg\" fill=\"currentColor\"
                     class=\"icon-35 me-2\"/>
                <span>";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Organizational Initiatives"));
        echo "</span>
              </button>
            </div>
            <div class=\"mt-3\">
              <div class=\"ige-about-paths__content collapse show\" id=\"initype-0\" data-bs-parent=\"#initstypes\"> malesuada
                fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit
                dolor
                magna eget.
              </div>
              <div class=\"ige-about-paths__content collapse \" id=\"initype-1\" data-bs-parent=\"#initstypes\"> malesuada
                fames
                ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor
                magna
                eget.
              </div>
              <div class=\"ige-about-paths__content collapse \" id=\"initype-2\" data-bs-parent=\"#initstypes\"> malesuada
                fames
                ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor
                magna
                eget.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "@ignite/partials/widgets/about_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 84,  161 => 82,  153 => 77,  148 => 75,  138 => 68,  127 => 60,  97 => 33,  92 => 31,  85 => 27,  80 => 25,  73 => 21,  68 => 19,  61 => 15,  56 => 13,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ige-section my-px-30\">
  <div class=\"container-xl\">
    <div class=\"ige-about-tabs\">
      <div class=\"my-px-40\">
        <div class=\"ige-section-title\">
          <h2>{{ \"Ignite Paths\"|t }}</h2>
        </div>
        <div class=\"ige-section-description\">
          <div id=\"paths\">
            <div class=\"ige-about-collapse\">
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\" data-bs-target=\"#path-0\"
                      aria-expanded=\"true\" aria-controls=\"path-0\">
                <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/c-ghust.svg\" fill=\"currentColor\"
                     class=\"icon-35 me-2\"/>
                <span>{{ \"Game Design\"|t }}</span>
              </button>
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\" data-bs-target=\"#path-1\"
                      aria-expanded=\"false\" aria-controls=\"path-1\">
                <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/c-video.svg\" fill=\"currentColor\"
                     class=\"icon-35 me-2\"/>
                <span>{{ \"Advertising Industry\"|t }}</span>
              </button>
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\" data-bs-target=\"#path-2\"
                      aria-expanded=\"false\" aria-controls=\"path-2\">
                <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/c-audio.svg\" fill=\"currentColor\"
                     class=\"icon-35 me-2\"/>
                <span>{{ \"Acoustics Design\"|t }}</span>
              </button>
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\" data-bs-target=\"#path-3\"
                      aria-expanded=\"false\" aria-controls=\"path-3\">
                <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/c-play.svg\" fill=\"currentColor\"
                     class=\"icon-35 me-2\"/>
                <span>{{ \"Video Industry\"|t }}</span>
              </button>
            </div>
            <div class=\"mt-3\">
              <div class=\"ige-about-paths__content collapse show\" id=\"path-0\" data-bs-parent=\"#paths\"> malesuada fames
                ac
                turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna
                eget.
              </div>
              <div class=\"ige-about-paths__content collapse \" id=\"path-1\" data-bs-parent=\"#paths\"> malesuada fames ac
                turpis
                egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget.
              </div>
              <div class=\"ige-about-paths__content collapse \" id=\"path-2\" data-bs-parent=\"#paths\"> malesuada fames ac
                turpis
                egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget.
              </div>
              <div class=\"ige-about-paths__content collapse \" id=\"path-3\" data-bs-parent=\"#paths\"> malesuada fames ac
                turpis
                egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna eget.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"my-px-40\">
        <div class=\"ige-section-title\">
          <h2>{{ \"Initiatives Types\"|t }}</h2>
        </div>
        <div class=\"ige-section-description\">
          <div id=\"initstypes\">
            <div class=\"ige-about-collapse\">
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\"
                      data-bs-target=\"#initype-0\"
                      aria-expanded=\"true\" aria-controls=\"path-0\">
                <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/graduation.svg\"
                     fill=\"currentColor\" class=\"icon-35 me-2\"/>
                <span>Training and Qualification</span>
              </button>
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\"
                      data-bs-target=\"#initype-1\"
                      aria-expanded=\"false\" aria-controls=\"path-1\">
                <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/funding.svg\" fill=\"currentColor\"
                     class=\"icon-35 me-2\"/>
                <span>{{ \"Funding Initiatives\"|t }}</span>
              </button>
              <button class=\"btn btn-link ige-about-collapse__item\" data-bs-toggle=\"collapse\"
                      data-bs-target=\"#initype-2\"
                      aria-expanded=\"false\" aria-controls=\"path-2\">
                <svg data-src=\"{{ base_path ~ directory }}/dist/webassets/images/icons/org.svg\" fill=\"currentColor\"
                     class=\"icon-35 me-2\"/>
                <span>{{ \"Organizational Initiatives\"|t }}</span>
              </button>
            </div>
            <div class=\"mt-3\">
              <div class=\"ige-about-paths__content collapse show\" id=\"initype-0\" data-bs-parent=\"#initstypes\"> malesuada
                fames ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit
                dolor
                magna eget.
              </div>
              <div class=\"ige-about-paths__content collapse \" id=\"initype-1\" data-bs-parent=\"#initstypes\"> malesuada
                fames
                ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor
                magna
                eget.
              </div>
              <div class=\"ige-about-paths__content collapse \" id=\"initype-2\" data-bs-parent=\"#initstypes\"> malesuada
                fames
                ac turpis egestas sed tempus urna et pharetra pharetra massa massa ultricies mi quis hendrerit dolor
                magna
                eget.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

", "@ignite/partials/widgets/about_details.html.twig", "F:\\WorkSpace\\public_html\\ignite-drupal\\themes\\ignite\\templates\\partials\\widgets\\about_details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 6, "escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t', 'escape'],
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
