<?php

/* PointWebAdminBundle:Menu:show.html.twig */
class __TwigTemplate_85a95fb261eeb9ad2e40c0728b70084aaf1a736d7e08bbd7118c7cf646c4abd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Menu:show.html.twig", 1);
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
        $__internal_daa8d32cd6990b755684550a17d4dcd148e425070e63a1a13e0b820fa4607cc0 = $this->env->getExtension("native_profiler");
        $__internal_daa8d32cd6990b755684550a17d4dcd148e425070e63a1a13e0b820fa4607cc0->enter($__internal_daa8d32cd6990b755684550a17d4dcd148e425070e63a1a13e0b820fa4607cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Menu:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daa8d32cd6990b755684550a17d4dcd148e425070e63a1a13e0b820fa4607cc0->leave($__internal_daa8d32cd6990b755684550a17d4dcd148e425070e63a1a13e0b820fa4607cc0_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_b90e5e7c07e1d918a508b9dab2be1b10eb22d695142a6b3ac4d9a6a90f16bd93 = $this->env->getExtension("native_profiler");
        $__internal_b90e5e7c07e1d918a508b9dab2be1b10eb22d695142a6b3ac4d9a6a90f16bd93->enter($__internal_b90e5e7c07e1d918a508b9dab2be1b10eb22d695142a6b3ac4d9a6a90f16bd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Menu</h1>

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Titre</div>
        <div class=\"panel-body\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Description</div>
        <div class=\"panel-body\">
            ";
        // line 15
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
        echo "
        </div>
    </div>
    ";
        // line 18
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parent", array()) != null)) {
            // line 19
            echo "        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Menu père</div>
            <div class=\"panel-body\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "parent", array()), "title", array()), "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        // line 26
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 27
            echo "
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Fichiers</div>
            <div class=\"panel-body\">
                <div id=\"gallery\" style=\"display:none;\">
                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 33
                echo "                        <img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                             data-image=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                             data-description=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                </div>
            </div>
        </div>

    ";
        }
        // line 42
        echo "
    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("admin_menu");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
    <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i>
        Modifier</a>
    ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_b90e5e7c07e1d918a508b9dab2be1b10eb22d695142a6b3ac4d9a6a90f16bd93->leave($__internal_b90e5e7c07e1d918a508b9dab2be1b10eb22d695142a6b3ac4d9a6a90f16bd93_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Menu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  123 => 44,  119 => 43,  116 => 42,  109 => 37,  101 => 35,  97 => 34,  90 => 33,  86 => 32,  79 => 27,  76 => 26,  69 => 22,  64 => 19,  62 => 18,  56 => 15,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Menu</h1>*/
/* */
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Titre</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.title }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Description</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.description|raw }}*/
/*         </div>*/
/*     </div>*/
/*     {% if entity.parent != null %}*/
/*         <div class="panel panel-info">*/
/*             <div class="panel-heading">Menu père</div>*/
/*             <div class="panel-body">*/
/*                 {{ entity.parent.title }}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/*     {% if entity.pictures|length >0 %}*/
/* */
/*         <div class="panel panel-info">*/
/*             <div class="panel-heading">Fichiers</div>*/
/*             <div class="panel-body">*/
/*                 <div id="gallery" style="display:none;">*/
/*                     {% for picture in entity.pictures %}*/
/*                         <img alt="{{ picture.name }}" src="{{ asset(picture.getWebPath(base)) }}"*/
/*                              data-image="{{ asset(picture.getWebPath(base)) }}"*/
/*                              data-description="{{ picture.description }}">*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <a href="{{ path('admin_menu') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*     <a href="{{ path('admin_menu_edit', { 'id': entity.id }) }}" class="btn btn-primary"><i class="fa fa-pencil"></i>*/
/*         Modifier</a>*/
/*     {{ form(delete_form) }}*/
/* {% endblock %}*/
/* */
