<?php

/* themes/moma/templates/block--system-branding-block.html.twig */
class __TwigTemplate_7e987127dabaf3f9217c2cd31a1d2985697f9260a8e6d636451105065aa63b93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 15, "if" => 16);
        $filters = array("t" => 18);
        $functions = array("path" => 18);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'if'),
                array('t'),
                array('path')
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

        // line 15
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "  ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 17
            echo "  <div class=\"large-4 columns\">
    <a href=\"";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
    </a>
  </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/moma/templates/block--system-branding-block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  56 => 18,  53 => 17,  50 => 16,  44 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a branding block.*/
/*  **/
/*  * Each branding element variable (logo, name, slogan) is only available if*/
/*  * enabled in the block configuration.*/
/*  **/
/*  * Available variables:*/
/*  * - site_logo: Logo for site as defined in Appearance or theme settings.*/
/*  * - site_name: Name for site as defined in Site information settings.*/
/*  * - site_slogan: Slogan for site as defined in Site information settings.*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if site_logo %}*/
/*   <div class="large-4 columns">*/
/*     <a href="{{ path('<front>') }}" title="{{ 'Home'|t }}" rel="home">*/
/*       <img src="{{ site_logo }}" alt="{{ 'Home'|t }}" />*/
/*     </a>*/
/*   </div>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
