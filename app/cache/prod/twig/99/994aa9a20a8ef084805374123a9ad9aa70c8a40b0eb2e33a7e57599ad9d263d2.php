<?php

/* PointWebAdminBundle:Menu:index.html.twig */
class __TwigTemplate_7ca904304730f91822e943ef5ca25627bdb9076f6bc5e3b5d061bebdbc927aa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Menu:index.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8570289a8bb0706ec3dd907d3f0cb4f9b9db872d1015df9325ab425ce18ad02e = $this->env->getExtension("native_profiler");
        $__internal_8570289a8bb0706ec3dd907d3f0cb4f9b9db872d1015df9325ab425ce18ad02e->enter($__internal_8570289a8bb0706ec3dd907d3f0cb4f9b9db872d1015df9325ab425ce18ad02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Menu:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8570289a8bb0706ec3dd907d3f0cb4f9b9db872d1015df9325ab425ce18ad02e->leave($__internal_8570289a8bb0706ec3dd907d3f0cb4f9b9db872d1015df9325ab425ce18ad02e_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_24886f7d8a17c0469da43bc12c6cfa6941ddb01bc5d5bf692a4b385049ebc6b6 = $this->env->getExtension("native_profiler");
        $__internal_24886f7d8a17c0469da43bc12c6cfa6941ddb01bc5d5bf692a4b385049ebc6b6->enter($__internal_24886f7d8a17c0469da43bc12c6cfa6941ddb01bc5d5bf692a4b385049ebc6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des menus</h1>

    <div class=\"list-group\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "            <div class=\"list-group-item\">
                ";
            // line 9
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                // line 10
                echo "                    <div class=\"row-picture\">
                        <img class=\"circle\"
                             src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method"), "html", null, true);
                echo "\"
                             alt=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array()), "name", array()), "html", null, true);
                echo "\">
                    </div>
                ";
            } else {
                // line 16
                echo "                    <div class=\"row-action-primary\">
                        <i class=\"mdi-file-folder\"></i>
                    </div>
                ";
            }
            // line 20
            echo "                <div class=\"row-content\">
                    <h4 class=\"list-group-item-heading menuParentHead\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-pencil\"></i> Modifier</a>
                        ";
            // line 26
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "childrens", array())) > 0)) {
                // line 27
                echo "                            <span href=\"#\" class=\"menuParent\"
                                  data-url=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_submenu", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"
                                  data-id=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\">
                            </span>
                        ";
            }
            // line 32
            echo "                    </h4>

                    <p class=\"list-group-item-text\">";
            // line 34
            echo $this->getAttribute($context["entity"], "description", array());
            echo "</p>
                </div>

                <div id=\"menuChilds-";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" class=\"menuChilds list-group\"></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>

    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("admin_menu_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
";
        
        $__internal_24886f7d8a17c0469da43bc12c6cfa6941ddb01bc5d5bf692a4b385049ebc6b6->leave($__internal_24886f7d8a17c0469da43bc12c6cfa6941ddb01bc5d5bf692a4b385049ebc6b6_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Menu:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  125 => 40,  116 => 37,  110 => 34,  106 => 32,  100 => 29,  96 => 28,  93 => 27,  91 => 26,  86 => 24,  81 => 22,  77 => 21,  74 => 20,  68 => 16,  62 => 13,  58 => 12,  54 => 10,  52 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Liste des menus</h1>*/
/* */
/*     <div class="list-group">*/
/*         {% for entity in entities %}*/
/*             <div class="list-group-item">*/
/*                 {% if entity.pictures|length >0 %}*/
/*                     <div class="row-picture">*/
/*                         <img class="circle"*/
/*                              src="{{ entity.pictures.0.getWebPath(base) }}"*/
/*                              alt="{{ entity.pictures.0.name }}">*/
/*                     </div>*/
/*                 {% else %}*/
/*                     <div class="row-action-primary">*/
/*                         <i class="mdi-file-folder"></i>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <div class="row-content">*/
/*                     <h4 class="list-group-item-heading menuParentHead">{{ entity.title }}*/
/*                         <a href="{{ path('admin_menu_show', {'id':entity.id}) }}" class="btn btn-primary"><i*/
/*                                     class="fa fa-eye"></i> Voir</a>*/
/*                         <a href="{{ path('admin_menu_edit', {'id':entity.id}) }}" class="btn btn-primary"><i*/
/*                                     class="fa fa-pencil"></i> Modifier</a>*/
/*                         {% if entity.childrens|length > 0 %}*/
/*                             <span href="#" class="menuParent"*/
/*                                   data-url="{{ path('admin_menu_submenu', {'id':entity.id}) }}"*/
/*                                   data-id="{{ entity.id }}">*/
/*                             </span>*/
/*                         {% endif %}*/
/*                     </h4>*/
/* */
/*                     <p class="list-group-item-text">{{ entity.description|raw }}</p>*/
/*                 </div>*/
/* */
/*                 <div id="menuChilds-{{ entity.id }}" class="menuChilds list-group"></div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     <a href="{{ path('admin_menu_new') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/* {% endblock %}*/
/* */
