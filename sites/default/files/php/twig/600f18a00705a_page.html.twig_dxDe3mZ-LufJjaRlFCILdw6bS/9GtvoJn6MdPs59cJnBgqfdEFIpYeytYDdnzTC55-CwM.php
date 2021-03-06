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

/* themes/beauty_salon_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_680224f01c654e27d2a05d5df89af27a3171b047488d6615dc725dace8af5ef0 extends \Twig\Template
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
        // line 60
        echo "
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 74
        echo "      </div>

      <!-- End: Header -->

      ";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 78)) {
            // line 79
            echo "        <div class=\"col-md-9\">

          <p class=\"social-media\">
            ";
            // line 82
            if (($context["facebook_url"] ?? null)) {
                // line 83
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 83, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            ";
            }
            // line 85
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 86
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 86, $this->source), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            ";
            }
            // line 88
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 89
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 89, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            ";
            }
            // line 91
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 92
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 92, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            ";
            }
            // line 94
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 95
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 95, $this->source), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            ";
            }
            // line 97
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 98
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 98, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 100
            echo "          </p>

          ";
            // line 102
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 102)) {
                // line 103
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 105
            echo "          
        </div>
      ";
        }
        // line 108
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 116
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 117
            echo "  <div class=\"container-\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 121
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 121, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 127
        echo "

<!-- Start: Top widget -->

";
        // line 131
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 131) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 131)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 131))) {
            // line 132
            echo "  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">

      ";
            // line 136
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 136)) {
                // line 137
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 138
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 141
            echo "
        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 145
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 145)) {
                // line 146
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 146, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 147
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 151
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 151)) {
                // line 152
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 152, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 153
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 157
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 157)) {
                // line 158
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 158, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 159
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 166
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 172
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 172)) {
            // line 173
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 175
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 179
        echo "
<!--End: Highlighted -->


<!--Start: Top Message -->

";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 185)) {
            // line 186
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 188
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 192
        echo "
<!--End: Top Message -->


<!--Start: Title -->

";
        // line 198
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 198) &&  !($context["is_front"] ?? null))) {
            // line 199
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 202
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 207
        echo "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 216
        if ( !($context["is_front"] ?? null)) {
            // line 217
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 221
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 227
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 227)) {
            // line 228
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 228, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 230
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 234
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 237
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 237)) {
            // line 238
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 238, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 240
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 240), 240, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 244
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 247
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 247)) {
            // line 248
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 248, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 250
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 254
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 267
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 267) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 267)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 267))) {
            // line 268
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 272
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 272)) {
                // line 273
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 274
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 274), 274, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 277
            echo "
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 281
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 281)) {
                // line 282
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 282, $this->source), "html", null, true);
                echo ">
            ";
                // line 283
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 283), 283, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 286
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 289
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 289)) {
                // line 290
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 290, $this->source), "html", null, true);
                echo ">
            ";
                // line 291
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 291), 291, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 294
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 297
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 297)) {
                // line 298
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 298, $this->source), "html", null, true);
                echo ">
            ";
                // line 299
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 299), 299, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 302
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 309
        echo "<!--End: Features -->


<!-- Start: Bottom widgets -->
";
        // line 313
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 313) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 313)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 313)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 313))) {
            // line 314
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 318
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 318)) {
                // line 319
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 320
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 320), 320, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 323
            echo "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 327
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 327)) {
                // line 328
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 328, $this->source), "html", null, true);
                echo ">
            ";
                // line 329
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 331
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 335
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 335)) {
                // line 336
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 336, $this->source), "html", null, true);
                echo ">
            ";
                // line 337
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 337), 337, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 339
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 343
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 343)) {
                // line 344
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 344, $this->source), "html", null, true);
                echo ">
            ";
                // line 345
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 345), 345, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 347
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 351
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 351)) {
                // line 352
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 352, $this->source), "html", null, true);
                echo ">
            ";
                // line 353
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 353), 353, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 356
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 363
        echo "<!--End: Bottom widgets -->


<!-- Start: Footer widgets -->
";
        // line 367
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 367) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 367)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 367))) {
            // line 368
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 372
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 372)) {
                // line 373
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 374
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 374), 374, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 377
            echo "
      <div class=\"row footer-list\">

        <!-- Start: Footer First -->
        ";
            // line 381
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 381)) {
                // line 382
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 382, $this->source), "html", null, true);
                echo ">
            ";
                // line 383
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 383), 383, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 386
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 389
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 389)) {
                // line 390
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 390, $this->source), "html", null, true);
                echo ">
            ";
                // line 391
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 391), 391, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 394
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 397
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 397)) {
                // line 398
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 398, $this->source), "html", null, true);
                echo ">
            ";
                // line 399
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 399), 399, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 402
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>

";
        }
        // line 409
        echo "<!--End: Footer widgets -->

<!-- Start: Copyright -->
<div class=\"copyright\">

    <div class=\"container\">

      <span>Copyright © ";
        // line 416
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>

      ";
        // line 418
        if (($context["show_credit_link"] ?? null)) {
            // line 419
            echo "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 421
        echo "
  </div>
</div>
<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/beauty_salon_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  728 => 421,  724 => 419,  722 => 418,  717 => 416,  708 => 409,  699 => 402,  693 => 399,  688 => 398,  686 => 397,  681 => 394,  675 => 391,  670 => 390,  668 => 389,  663 => 386,  657 => 383,  652 => 382,  650 => 381,  644 => 377,  638 => 374,  635 => 373,  633 => 372,  627 => 368,  625 => 367,  619 => 363,  610 => 356,  604 => 353,  599 => 352,  597 => 351,  591 => 347,  585 => 345,  580 => 344,  578 => 343,  572 => 339,  566 => 337,  561 => 336,  559 => 335,  553 => 331,  547 => 329,  542 => 328,  540 => 327,  534 => 323,  528 => 320,  525 => 319,  523 => 318,  517 => 314,  515 => 313,  509 => 309,  500 => 302,  494 => 299,  489 => 298,  487 => 297,  482 => 294,  476 => 291,  471 => 290,  469 => 289,  464 => 286,  458 => 283,  453 => 282,  451 => 281,  445 => 277,  439 => 274,  436 => 273,  434 => 272,  428 => 268,  426 => 267,  411 => 254,  404 => 250,  398 => 248,  396 => 247,  391 => 244,  384 => 240,  378 => 238,  376 => 237,  371 => 234,  364 => 230,  358 => 228,  356 => 227,  348 => 221,  342 => 218,  339 => 217,  337 => 216,  326 => 207,  318 => 202,  313 => 199,  311 => 198,  303 => 192,  296 => 188,  292 => 186,  290 => 185,  282 => 179,  275 => 175,  271 => 173,  269 => 172,  261 => 166,  252 => 159,  244 => 158,  242 => 157,  236 => 153,  228 => 152,  226 => 151,  220 => 147,  212 => 146,  210 => 145,  204 => 141,  198 => 138,  195 => 137,  193 => 136,  187 => 132,  185 => 131,  179 => 127,  173 => 123,  164 => 121,  160 => 120,  155 => 117,  153 => 116,  143 => 108,  138 => 105,  132 => 103,  130 => 102,  126 => 100,  120 => 98,  117 => 97,  111 => 95,  108 => 94,  102 => 92,  99 => 91,  93 => 89,  90 => 88,  84 => 86,  81 => 85,  75 => 83,  73 => 82,  68 => 79,  66 => 78,  60 => 74,  54 => 72,  52 => 71,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/beauty_salon_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\drupalsample\\themes\\beauty_salon_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "for" => 120);
        static $filters = array("escape" => 72, "raw" => 121, "date" => 416);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
