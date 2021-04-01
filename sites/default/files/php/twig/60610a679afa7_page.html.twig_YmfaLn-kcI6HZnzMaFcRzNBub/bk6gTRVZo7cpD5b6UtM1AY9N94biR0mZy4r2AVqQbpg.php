<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/integrity/templates/page.html.twig */
class __TwigTemplate_0078c7ec7c15371bf7dbcaf76dc4a9231be4d020558bfb17497ec6e6cc6838e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 89, "for" => 93, "autoescape" => 94];
        $filters = ["t" => 77, "escape" => 80, "raw" => 95];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'autoescape'],
                ['t', 'escape', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 75
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
      <div class=\"full-width-bg\">
        <div class=\"section layout-container clearfix\">
          ";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"section layout-container clearfix\">
        <div class=\"col-md-12 col-sm-12\">
        ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
        echo "
        </div>
      </div>
    </header>
    ";
        // line 89
        if ((($context["is_front"] ?? null) && ($context["slider_contents"] ?? null))) {
            // line 90
            echo "      <!-- CAROUSEL -->
      <div id=\"myCarousel\" class=\"carousel slide\">
        <div class=\"carousel-inner\">
          ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_contents"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["slider"]) {
                // line 94
                echo "              ";
                // line 95
                echo "                ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider"]));
                echo "
              ";
                // line 97
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['slider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "        </div>
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">‹</a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">›</a>
      </div>
    ";
        }
        // line 104
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 105
            echo "      <div class=\"highlighted\">
        <aside class=\"layout-container section clearfix\" role=\"complementary\">
          ";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 111
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 112
            echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 114
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 118
        echo "
    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 121
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 125
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
            ";
        // line 126
        if (($context["title"] ?? null)) {
            // line 127
            echo "              <h1 class=\"title\" id=\"page-title\">
                ";
            // line 128
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
              </h1>
            ";
        }
        // line 131
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
            ";
        // line 132
        if (($context["tabs"] ?? null)) {
            // line 133
            echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tabs"));
            echo "\">
                ";
            // line 134
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
            echo "
              </nav>
            ";
        }
        // line 137
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
            ";
        // line 138
        if (($context["action_links"] ?? null)) {
            // line 139
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
            echo "</ul>
            ";
        }
        // line 141
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          </section>
        </main>
        ";
        // line 144
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 145
            echo "          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 151
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 152
            echo "          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 154
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 158
        echo "      </div>
    </div>
    ";
        // line 160
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", []))) {
            // line 161
            echo "      <div id=\"featured-bottom-wrapper\">
        <aside id=\"featured-bottom\" class=\"section layout-container clearfix\" role=\"complementary\">
          ";
            // line 163
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", [])), "html", null, true);
            echo "
          ";
            // line 164
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])), "html", null, true);
            echo "
          ";
            // line 165
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_third", [])), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 169
        echo "    <footer class=\"site-footer\">
      <div class=\"layout-container\">
        ";
        // line 171
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 172
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 173
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
            ";
            // line 174
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
            ";
            // line 175
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
            ";
            // line 176
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 179
        echo "      </div>
      <div class=\"sub-footer\">
        <div class=\"layout-container\">
          ";
        // line 182
        if ($this->getAttribute(($context["page"] ?? null), "sub_footer", [])) {
            // line 183
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 184
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer", [])), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 187
        echo "          <hr>
          <div class=\"credited\"><p class=\"text-center\">Integrity ported to drupal by <a href=\"http://dropthemes.in\">DropThemes.in</a></p></div>
        </div>
      </div>
    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/integrity/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 187,  294 => 184,  291 => 183,  289 => 182,  284 => 179,  278 => 176,  274 => 175,  270 => 174,  266 => 173,  263 => 172,  261 => 171,  257 => 169,  250 => 165,  246 => 164,  242 => 163,  238 => 161,  236 => 160,  232 => 158,  225 => 154,  221 => 152,  218 => 151,  211 => 147,  207 => 145,  205 => 144,  198 => 141,  192 => 139,  190 => 138,  185 => 137,  179 => 134,  174 => 133,  172 => 132,  167 => 131,  161 => 128,  158 => 127,  156 => 126,  152 => 125,  145 => 121,  140 => 118,  133 => 114,  129 => 112,  126 => 111,  119 => 107,  115 => 105,  112 => 104,  105 => 99,  98 => 97,  93 => 95,  91 => 94,  87 => 93,  82 => 90,  80 => 89,  73 => 85,  65 => 80,  59 => 77,  55 => 75,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/integrity/templates/page.html.twig", "/app/themes/integrity/templates/page.html.twig");
    }
}
