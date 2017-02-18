<?php

/* themes/moma/templates/node--2col-teaser.html.twig */
class __TwigTemplate_e2f4abb6b54c7e0e7da344231c7742fcba1e2de47e8de213a2ba703a3522656c extends Twig_Template
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
        $tags = array("if" => 75);
        $filters = array("without" => 103, "length" => 107);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('without', 'length'),
                array()
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

        // line 70
        echo "<article id=\"node-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "id", array()), "html", null, true));
        echo "\" ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">

  ";
        // line 73
        echo "  <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo ">

    <div class=\"columns medium-8\">";
        // line 75
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_thumbnail", array())) {
            // line 76
            echo "      <div class=\"img-responsive\">
        ";
            // line 77
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_thumbnail", array()), "html", null, true));
            echo "
      </div>
      ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 79
(isset($context["content"]) ? $context["content"] : null), "field_image", array()), "0", array(), "array")) {
            // line 80
            echo "      <div class=\"img-responsive\">
        ";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()), "0", array(), "array"), "html", null, true));
            echo "
      </div>
      ";
        }
        // line 84
        echo "    </div>

    <div class=\"columns medium-4\">
      ";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
      ";
        // line 88
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 89
            echo "        <h4";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true));
            echo ">
          <a href=\"";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
        </h4>
      ";
        }
        // line 93
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
      ";
        // line 94
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 95
            echo "        <div>
          ";
            // line 96
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
          <div";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_attributes"]) ? $context["author_attributes"] : null), "html", null, true));
            echo ">
            ";
            // line 98
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true));
            echo "
            ";
            // line 99
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 103
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "comment", "links", "field_tags", "field_image", "field_thumbnail"), "html", null, true));
        echo "
    </div>
  </div>

  ";
        // line 107
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tags", array())) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 108
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_tags", array()), "html", null, true));
            echo "
  ";
        }
        // line 110
        echo "
  ";
        // line 111
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "html", null, true));
        echo "
  ";
        // line 112
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true));
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/moma/templates/node--2col-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 112,  150 => 111,  147 => 110,  141 => 108,  139 => 107,  131 => 103,  124 => 99,  120 => 98,  116 => 97,  112 => 96,  109 => 95,  107 => 94,  102 => 93,  94 => 90,  89 => 89,  87 => 88,  83 => 87,  78 => 84,  72 => 81,  69 => 80,  67 => 79,  62 => 77,  59 => 76,  57 => 75,  51 => 73,  43 => 70,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a node.*/
/*  **/
/*  * Available variables:*/
/*  * - node: Full node entity.*/
/*  *   - id: The node ID.*/
/*  *   - bundle: The type of the node, for example, "page" or "article".*/
/*  *   - authorid: The user ID of the node author.*/
/*  *   - createdtime: Time the node was published formatted in Unix timestamp.*/
/*  *   - changedtime: Time the node was changed formatted in Unix timestamp.*/
/*  * - label: The title of the node.*/
/*  * - content: All node items. Use {{ content }} to print them all,*/
/*  *   or print a subset such as {{ content.field_example }}. Use*/
/*  *   {{ content|without('field_example') }} to temporarily suppress the printing*/
/*  *   of a given child element.*/
/*  * - author_picture: The node author user entity, rendered using the "compact"*/
/*  *   view mode.*/
/*  * - metadata: Metadata for this node.*/
/*  * - date: Themed creation date field.*/
/*  * - author_name: Themed author name field.*/
/*  * - url: Direct URL of the current node.*/
/*  * - display_submitted: Whether submission information should be displayed.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   The attributes.class element may contain one or more of the following*/
/*  *   classes:*/
/*  *   - node: The current template type (also known as a "theming hook").*/
/*  *   - node--type-[type]: The current node type. For example, if the node is an*/
/*  *     "Article" it would result in "node--type-article". Note that the machine*/
/*  *     name will often be in a short form of the human readable label.*/
/*  *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a*/
/*  *     teaser would result in: "node--view-mode-teaser", and*/
/*  *     full: "node--view-mode-full".*/
/*  *   The following are controlled through the node publishing options.*/
/*  *   - node--promoted: Appears on nodes promoted to the front page.*/
/*  *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in*/
/*  *     teaser listings.*/
/*  *   - node--unpublished: Appears on unpublished nodes visible only to site*/
/*  *     admins.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - content_attributes: Same as attributes, except applied to the main*/
/*  *   content tag that appears in the template.*/
/*  * - author_attributes: Same as attributes, except applied to the author of*/
/*  *   the node tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - view_mode: View mode; for example, "teaser" or "full".*/
/*  * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.*/
/*  * - page: Flag for the full page state. Will be true if view_mode is 'full'.*/
/*  * - readmore: Flag for more state. Will be true if the teaser content of the*/
/*  *   node cannot hold the main body content.*/
/*  * - logged_in: Flag for authenticated user status. Will be true when the*/
/*  *   current user is a logged-in member.*/
/*  * - is_admin: Flag for admin user status. Will be true when the current user*/
/*  *   is an administrator.*/
/*  **/
/*  * @see template_preprocess_node()*/
/*  **/
/*  * @todo Remove the id attribute (or make it a class), because if that gets*/
/*  *   rendered twice on a page this is invalid CSS for example: two lists*/
/*  *   in different view modes.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <article id="node-{{ node.id }}" {{ attributes }}>*/
/* */
/*   {# We hide the comments and links now so that we can render them later. #}*/
/*   <div{{ content_attributes }}>*/
/* */
/*     <div class="columns medium-8">{% if content.field_thumbnail %}*/
/*       <div class="img-responsive">*/
/*         {{ content.field_thumbnail }}*/
/*       </div>*/
/*       {% elseif content.field_image['0'] %}*/
/*       <div class="img-responsive">*/
/*         {{ content.field_image['0'] }}*/
/*       </div>*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*     <div class="columns medium-4">*/
/*       {{ title_prefix }}*/
/*       {% if not page %}*/
/*         <h4{{ title_attributes }}>*/
/*           <a href="{{ url }}" rel="bookmark">{{ label }}</a>*/
/*         </h4>*/
/*       {% endif %}*/
/*       {{ title_suffix }}*/
/*       {% if display_submitted %}*/
/*         <div>*/
/*           {{ author_picture }}*/
/*           <div{{ author_attributes }}>*/
/*             {{ date }}*/
/*             {{ metadata }}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {{ content|without('comment', 'links', 'field_tags','field_image','field_thumbnail') }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% if content.field_tags|length and not is_front %}*/
/*     {{ content.field_tags }}*/
/*   {% endif %}*/
/* */
/*   {{ content.links }}*/
/*   {{ content.comment }}*/
/* </article>*/
/* */
