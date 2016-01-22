<?php

/* @PointWebAdmin/Menu/sub.html.twig */
class __TwigTemplate_5047fae69cd6d82112384a484a5770b8d665a57c39c70232c58401559b707983 extends Twig_Template
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
        $__internal_9765c208386495c4a136614365dc31c298feff522c47e8f8a764c94c7c89df61 = $this->env->getExtension("native_profiler");
        $__internal_9765c208386495c4a136614365dc31c298feff522c47e8f8a764c94c7c89df61->enter($__internal_9765c208386495c4a136614365dc31c298feff522c47e8f8a764c94c7c89df61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebAdmin/Menu/sub.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "childrens", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 2
            echo "    <div class=\"list-group-item\">
        ";
            // line 3
            if ((twig_length_filter($this->env, $this->getAttribute($context["menu"], "pictures", array())) > 0)) {
                // line 4
                echo "            <div class=\"row-picture\">
                <img class=\"circle\"
                     src=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["menu"], "pictures", array()), 0, array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method"), "html", null, true);
                echo "\"
                     alt=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["menu"], "pictures", array()), 0, array()), "name", array()), "html", null, true);
                echo "\">
            </div>
        ";
            } else {
                // line 10
                echo "            <div class=\"row-action-primary\">
                <i class=\"mdi-file-folder\"></i>
            </div>
        ";
            }
            // line 14
            echo "        <div class=\"row-content\">
            <h4 class=\"list-group-item-heading menuParentHead\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "title", array()), "html", null, true);
            echo "
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_show", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                            class=\"fa fa-eye\"></i> Voir</a>
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                            class=\"fa fa-pencil\"></i> Modifier</a>
                ";
            // line 20
            if ((twig_length_filter($this->env, $this->getAttribute($context["menu"], "childrens", array())) > 0)) {
                // line 21
                echo "                    <span href=\"#\" class=\"menuParent\"
                          data-url=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_submenu", array("id" => $this->getAttribute($context["menu"], "id", array()))), "html", null, true);
                echo "\"
                          data-id=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
                echo "\">
                    </span>
                ";
            }
            // line 26
            echo "            </h4>

            <p class=\"list-group-item-text\">";
            // line 28
            echo $this->getAttribute($context["menu"], "description", array());
            echo "</p>
        </div>

        <div id=\"menuChilds-";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "id", array()), "html", null, true);
            echo "\" class=\"menuChilds list-group\"></div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9765c208386495c4a136614365dc31c298feff522c47e8f8a764c94c7c89df61->leave($__internal_9765c208386495c4a136614365dc31c298feff522c47e8f8a764c94c7c89df61_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebAdmin/Menu/sub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  87 => 28,  83 => 26,  77 => 23,  73 => 22,  70 => 21,  68 => 20,  63 => 18,  58 => 16,  54 => 15,  51 => 14,  45 => 10,  39 => 7,  35 => 6,  31 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for menu in entity.childrens %}*/
/*     <div class="list-group-item">*/
/*         {% if menu.pictures|length >0 %}*/
/*             <div class="row-picture">*/
/*                 <img class="circle"*/
/*                      src="{{ menu.pictures.0.getWebPath(base) }}"*/
/*                      alt="{{ menu.pictures.0.name }}">*/
/*             </div>*/
/*         {% else %}*/
/*             <div class="row-action-primary">*/
/*                 <i class="mdi-file-folder"></i>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="row-content">*/
/*             <h4 class="list-group-item-heading menuParentHead">{{ menu.title }}*/
/*                 <a href="{{ path('admin_menu_show', {'id':menu.id}) }}" class="btn btn-primary"><i*/
/*                             class="fa fa-eye"></i> Voir</a>*/
/*                 <a href="{{ path('admin_menu_edit', {'id':menu.id}) }}" class="btn btn-primary"><i*/
/*                             class="fa fa-pencil"></i> Modifier</a>*/
/*                 {% if menu.childrens|length > 0 %}*/
/*                     <span href="#" class="menuParent"*/
/*                           data-url="{{ path('admin_menu_submenu', {'id':menu.id}) }}"*/
/*                           data-id="{{ menu.id }}">*/
/*                     </span>*/
/*                 {% endif %}*/
/*             </h4>*/
/* */
/*             <p class="list-group-item-text">{{ menu.description|raw }}</p>*/
/*         </div>*/
/* */
/*         <div id="menuChilds-{{ menu.id }}" class="menuChilds list-group"></div>*/
/*     </div>*/
/* {% endfor %}*/
/* */
