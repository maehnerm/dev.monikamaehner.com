<?php

/* themes/moma/templates/page.html.twig */
class __TwigTemplate_09f43c2b869ec07927682c494ec9406a3819bd5d83d9346ab8fb405fc3114123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 58, "if" => 71, "spaceless" => 153);
        $filters = array("t" => 105, "date" => 219);
        $functions = array("path" => 105, "file_url" => 173);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'spaceless'),
                array('t', 'date'),
                array('path', 'file_url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 57
        echo "
";
        // line 58
        $context["main_grid"] = "large-9 large-centered";
        // line 59
        echo "
<div class=\"off-canvas-wrapper\">
  <div class=\"inner-wrap off-canvas-wrapper-inner\" id=\"inner-wrap\" data-off-canvas-wrapper>
    <aside id=\"left-off-canvas-menu\" class=\"off-canvas left-off-canvas-menu position-left\" role=\"complementary\" data-off-canvas>
      ";
        // line 63
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_off_canvas", array()), "html", null, true));
        echo "
    </aside>

    <aside id=\"right-off-canvas-menu\" class=\"off-canvas right-off-canvas-menu position-right\" role=\"complementary\" data-off-canvas>
      ";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_off_canvas", array()), "html", null, true));
        echo "
    </aside>

    <div class=\"off-canvas-content\" data-off-canvas-content>
      ";
        // line 71
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "meta_header", array())) {
            // line 72
            echo "
        ";
            // line 73
            if ((isset($context["meta_header_grid"]) ? $context["meta_header_grid"] : null)) {
                // line 74
                echo "          <div class=\"row\">
            <div class=\"large-12 columns\">
              ";
                // line 76
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "meta_header", array()), "html", null, true));
                echo "
            </div>
          </div>
        ";
            } else {
                // line 80
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "meta_header", array()), "html", null, true));
                echo "
        ";
            }
            // line 82
            echo "
      ";
        }
        // line 84
        echo "
      ";
        // line 85
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 86
            echo "        <div class=\"main-header\">
          <div class=\"row\">
            <div class=\"site-logo columns\">
              ";
            // line 89
            if ((isset($context["linked_logo"]) ? $context["linked_logo"] : null)) {
                // line 90
                echo "                ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linked_logo"]) ? $context["linked_logo"] : null), "html", null, true));
                echo "
              ";
            }
            // line 92
            echo "            </div>
            <div class=\"medium-8 columns\">
              ";
            // line 94
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 99
        echo "
      <div class=\"row\">
        ";
        // line 101
        if ((isset($context["show_account_info"]) ? $context["show_account_info"] : null)) {
            // line 102
            echo "          <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) ? ("large-6") : ("large-4 columns large-offset-8"))));
            echo " columns hide-for-small\">
            <p>
              ";
            // line 104
            if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
                // line 105
                echo "                <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.page")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("My Account")));
                echo "</a>
                <a href=\"";
                // line 106
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.logout")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Logout")));
                echo "</a>
              ";
            } else {
                // line 108
                echo "                <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.login")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Login")));
                echo "</a>
                <a href=\"";
                // line 109
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.register")));
                echo "\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sign Up")));
                echo "</a>
              ";
            }
            // line 111
            echo "            </p>
          </div>
        ";
        }
        // line 114
        echo "        ";
        if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
            // line 115
            echo "          <div class=\"large-6 columns hide-for-small\">
            <h1>";
            // line 116
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
            echo "</h1>
          </div>
        ";
        }
        // line 119
        echo "        ";
        if ((isset($context["show_account_info"]) ? $context["show_account_info"] : null)) {
            // line 120
            echo "          <div class=\"show-for-small\">
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 123
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.login")));
            echo "\" class=\"radius button\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Login")));
            echo "</a>
              </p>
            </div>
            <div class=\"six mobile-two columns\">
              <p>
                <a href=\"";
            // line 128
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("user.register")));
            echo "\" class=\"radius success button\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Sign Up")));
            echo "</a>
              </p>
            </div>
          </div>
        ";
        }
        // line 133
        echo "      </div>

      ";
        // line 135
        if (((isset($context["messages"]) ? $context["messages"] : null) &&  !(isset($context["zurb_foundation_messages_modal"]) ? $context["zurb_foundation_messages_modal"] : null))) {
            // line 136
            echo "      <div class=\"l-messages row\">
        <div class=\"large-12 columns\">
          ";
            // line 138
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 142
        echo "
      ";
        // line 143
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 144
            echo "      <div class=\"l-help row\">
        <div class=\"large-12 columns\">
          ";
            // line 146
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
      ";
        }
        // line 150
        echo "
      <main id=\"main\" role=\"main\">
        ";
        // line 152
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 153
            echo "          ";
            ob_start();
            // line 154
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
          ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 156
            echo "        ";
        }
        // line 157
        echo "        <a id=\"main-content\"></a>
        ";
        // line 158
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
            echo " ";
        }
        // line 159
        echo "
        <div class=\"row\">
          <section class=\"intro-content ";
        // line 161
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_grid"]) ? $context["main_grid"] : null), "html", null, true));
        echo " columns\" >
            ";
        // line 162
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          </section>
        </div>


        ";
        // line 167
        if ((isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 168
            echo "        <div class=\"l-banner\">
            <div class=\"l-banner__background parallax\" style=\"background-image:url('/monikamaehner.com/themes/moma/images/banner_strauss.jpg');\" ></div>
        </div>
        ";
        } else {
            // line 172
            echo "        <div class=\"l-banner\">
            <div class=\"l-banner__background parallax\" style=\"background-image:url(";
            // line 173
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "field_thumbnail", array()), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
            echo ");\" ></div>
        </div>
        ";
        }
        // line 176
        echo "
        ";
        // line 177
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_parallax", array())) {
            // line 178
            echo "        <div class=\"row\">
          <section class=\"";
            // line 179
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_grid"]) ? $context["main_grid"] : null), "html", null, true));
            echo " columns\">
            ";
            // line 180
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_parallax", array()), "html", null, true));
            echo "
          </section>
        </div>
        ";
        }
        // line 184
        echo "
      </main>
      ";
        // line 186
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 187
            echo "        <div id=\"sidebar-first\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_first_grid"]) ? $context["sidebar_first_grid"] : null), "html", null, true));
            echo " columns sidebar \">
          ";
            // line 188
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 191
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 192
            echo "        <div id=\"sidebar-second\" class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_sec_grid"]) ? $context["sidebar_sec_grid"] : null), "html", null, true));
            echo " columns sidebar\">
          ";
            // line 193
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 196
        echo "
      ";
        // line 197
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array()))) {
            // line 198
            echo "        <footer class=\"row\">
          ";
            // line 199
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 200
                echo "            <div id=\"footer-first\" class=\"large-4 columns\">
              ";
                // line 201
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 204
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array())) {
                // line 205
                echo "            <div id=\"footer-middle\" class=\"large-4 columns\">
              ";
                // line 206
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_middle", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 209
            echo "          ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array())) {
                // line 210
                echo "            <div id=\"footer-last\" class=\"large-4 columns\">
              ";
                // line 211
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_last", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 214
            echo "        </footer>
      ";
        }
        // line 216
        echo "      <div class=\"bottom-bar panel\">
        <div class=\"row\">
          <div class=\"large-12 columns\">
          &copy; ";
        // line 219
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("All rights reserved.")));
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/moma/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 219,  403 => 216,  399 => 214,  393 => 211,  390 => 210,  387 => 209,  381 => 206,  378 => 205,  375 => 204,  369 => 201,  366 => 200,  364 => 199,  361 => 198,  359 => 197,  356 => 196,  350 => 193,  345 => 192,  342 => 191,  336 => 188,  331 => 187,  329 => 186,  325 => 184,  318 => 180,  314 => 179,  311 => 178,  309 => 177,  306 => 176,  300 => 173,  297 => 172,  291 => 168,  289 => 167,  281 => 162,  277 => 161,  273 => 159,  267 => 158,  264 => 157,  261 => 156,  255 => 154,  252 => 153,  250 => 152,  246 => 150,  239 => 146,  235 => 144,  233 => 143,  230 => 142,  223 => 138,  219 => 136,  217 => 135,  213 => 133,  203 => 128,  193 => 123,  188 => 120,  185 => 119,  179 => 116,  176 => 115,  173 => 114,  168 => 111,  161 => 109,  154 => 108,  147 => 106,  140 => 105,  138 => 104,  132 => 102,  130 => 101,  126 => 99,  118 => 94,  114 => 92,  108 => 90,  106 => 89,  101 => 86,  99 => 85,  96 => 84,  92 => 82,  86 => 80,  79 => 76,  75 => 74,  73 => 73,  70 => 72,  68 => 71,  61 => 67,  54 => 63,  48 => 59,  46 => 58,  43 => 57,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Zurb Foundations's theme implementation to display a single page.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  * - logo: The url of the logo image, as defined in theme settings.*/
/*  * - linked_logo: The logo image, linked to <front>.*/
/*  * - site_name: The name of the site. This is empty when displaying the site*/
/*  *   name has been disabled in the theme settings.*/
/*  * - linked_site_name: The name of the site that also links to <front>.*/
/*  * - site_slogan: The slogan of the site. This is empty when displaying the site*/
/*  *   slogan has been disabled in theme settings.*/
/*  * - hide_site_name: A flag indicating if the site name has been toggled off on*/
/*  *   the theme settings page. If hidden, the "visually-hidden" class is added*/
/*  *   to make the site name visually hidden, but still accessible.*/
/*  * - hide_site_slogan: A flag indicating if the site slogan has been toggled off*/
/*  *   on the theme settings page. If hidden, the "visually-hidden" class is*/
/*  *   added to make the site slogan visually hidden, but still accessible.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - messages: Status and error messages. Should be displayed prominently.*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.meta_header*/
/*  * - page.header*/
/*  * - page.help*/
/*  * - page.highlighted*/
/*  * - page.content*/
/*  * - page.sidebar_first*/
/*  * - page.sidebar_second*/
/*  * - page.footer_first*/
/*  * - page.footer_middle*/
/*  * - page.footer_last*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see bartik_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* {% set main_grid = 'large-9 large-centered' %}*/
/* */
/* <div class="off-canvas-wrapper">*/
/*   <div class="inner-wrap off-canvas-wrapper-inner" id="inner-wrap" data-off-canvas-wrapper>*/
/*     <aside id="left-off-canvas-menu" class="off-canvas left-off-canvas-menu position-left" role="complementary" data-off-canvas>*/
/*       {{ page.left_off_canvas }}*/
/*     </aside>*/
/* */
/*     <aside id="right-off-canvas-menu" class="off-canvas right-off-canvas-menu position-right" role="complementary" data-off-canvas>*/
/*       {{ page.right_off_canvas }}*/
/*     </aside>*/
/* */
/*     <div class="off-canvas-content" data-off-canvas-content>*/
/*       {% if page.meta_header %}*/
/* */
/*         {% if meta_header_grid %}*/
/*           <div class="row">*/
/*             <div class="large-12 columns">*/
/*               {{ page.meta_header }}*/
/*             </div>*/
/*           </div>*/
/*         {% else %}*/
/*           {{ page.meta_header }}*/
/*         {% endif %}*/
/* */
/*       {% endif %}*/
/* */
/*       {% if page.header %}*/
/*         <div class="main-header">*/
/*           <div class="row">*/
/*             <div class="site-logo columns">*/
/*               {% if linked_logo %}*/
/*                 {{ linked_logo }}*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="medium-8 columns">*/
/*               {{ page.header }}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <div class="row">*/
/*         {% if show_account_info %}*/
/*           <div class="{{ site_slogan ? 'large-6' : 'large-4 columns large-offset-8' }} columns hide-for-small">*/
/*             <p>*/
/*               {% if logged_in %}*/
/*                 <a href="{{ path('user.page') }}">{{ 'My Account'|t }}</a>*/
/*                 <a href="{{ path('user.logout') }}">{{ 'Logout'|t }}</a>*/
/*               {% else %}*/
/*                 <a href="{{ path('user.login') }}">{{ 'Login'|t }}</a>*/
/*                 <a href="{{ path('user.register') }}">{{ 'Sign Up'|t }}</a>*/
/*               {% endif %}*/
/*             </p>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if site_slogan %}*/
/*           <div class="large-6 columns hide-for-small">*/
/*             <h1>{{ site_slogan }}</h1>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if show_account_info %}*/
/*           <div class="show-for-small">*/
/*             <div class="six mobile-two columns">*/
/*               <p>*/
/*                 <a href="{{ path('user.login') }}" class="radius button">{{ 'Login'|t }}</a>*/
/*               </p>*/
/*             </div>*/
/*             <div class="six mobile-two columns">*/
/*               <p>*/
/*                 <a href="{{ path('user.register') }}" class="radius success button">{{ 'Sign Up'|t }}</a>*/
/*               </p>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       {% if messages and not zurb_foundation_messages_modal %}*/
/*       <div class="l-messages row">*/
/*         <div class="large-12 columns">*/
/*           {{ messages }}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.help %}*/
/*       <div class="l-help row">*/
/*         <div class="large-12 columns">*/
/*           {{ page.help }}*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       <main id="main" role="main">*/
/*         {% if page.highlighted %}*/
/*           {% spaceless %}*/
/*             {{ page.highlighted }}*/
/*           {% endspaceless %}*/
/*         {% endif %}*/
/*         <a id="main-content"></a>*/
/*         {% if breadcrumb %} {{ breadcrumb }} {% endif %}*/
/* */
/*         <div class="row">*/
/*           <section class="intro-content {{ main_grid }} columns" >*/
/*             {{ page.content }}*/
/*           </section>*/
/*         </div>*/
/* */
/* */
/*         {% if is_front %}*/
/*         <div class="l-banner">*/
/*             <div class="l-banner__background parallax" style="background-image:url('/monikamaehner.com/themes/moma/images/banner_strauss.jpg');" ></div>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="l-banner">*/
/*             <div class="l-banner__background parallax" style="background-image:url({{file_url(node.field_thumbnail.entity.uri.value)}});" ></div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if page.after_parallax %}*/
/*         <div class="row">*/
/*           <section class="{{ main_grid }} columns">*/
/*             {{ page.after_parallax }}*/
/*           </section>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*       </main>*/
/*       {% if page.sidebar_first %}*/
/*         <div id="sidebar-first" class="{{ sidebar_first_grid }} columns sidebar ">*/
/*           {{ page.sidebar_first }}*/
/*         </div>*/
/*       {% endif %}*/
/*       {% if page.sidebar_second %}*/
/*         <div id="sidebar-second" class="{{ sidebar_sec_grid }} columns sidebar">*/
/*           {{ page.sidebar_second }}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.footer_first or page.footer_middle or page.footer_last %}*/
/*         <footer class="row">*/
/*           {% if page.footer_first %}*/
/*             <div id="footer-first" class="large-4 columns">*/
/*               {{ page.footer_first }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.footer_middle %}*/
/*             <div id="footer-middle" class="large-4 columns">*/
/*               {{ page.footer_middle }}*/
/*             </div>*/
/*           {% endif %}*/
/*           {% if page.footer_last %}*/
/*             <div id="footer-last" class="large-4 columns">*/
/*               {{ page.footer_last }}*/
/*             </div>*/
/*           {% endif %}*/
/*         </footer>*/
/*       {% endif %}*/
/*       <div class="bottom-bar panel">*/
/*         <div class="row">*/
/*           <div class="large-12 columns">*/
/*           &copy; {{ "now"|date('Y') }} {{ site_name }} {{ 'All rights reserved.'|t }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
