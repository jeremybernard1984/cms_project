<?php

/* PointWebGedBundle:Folder:show.html.twig */
class __TwigTemplate_94ef1585742fbe2ec89ac0b38a16dabe116f52a6686216ab3afa544721f875b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGedBundle:Folder:show.html.twig", 1);
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
        $__internal_ecfeddfcf1b78777d844f8fc7310c1715b85f7b3c6a57ebc111f419d378f757a = $this->env->getExtension("native_profiler");
        $__internal_ecfeddfcf1b78777d844f8fc7310c1715b85f7b3c6a57ebc111f419d378f757a->enter($__internal_ecfeddfcf1b78777d844f8fc7310c1715b85f7b3c6a57ebc111f419d378f757a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGedBundle:Folder:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecfeddfcf1b78777d844f8fc7310c1715b85f7b3c6a57ebc111f419d378f757a->leave($__internal_ecfeddfcf1b78777d844f8fc7310c1715b85f7b3c6a57ebc111f419d378f757a_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_e84244e6bb4cc3e85363d06c00814bbc0a93393b56142394fcb4aad1c9fa1901 = $this->env->getExtension("native_profiler");
        $__internal_e84244e6bb4cc3e85363d06c00814bbc0a93393b56142394fcb4aad1c9fa1901->enter($__internal_e84244e6bb4cc3e85363d06c00814bbc0a93393b56142394fcb4aad1c9fa1901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Galerie</h1>

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Nom</div>
        <div class=\"panel-body\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
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
    
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Position</div>
        <div class=\"panel-body\">
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
        </div>
    </div>
    ";
        // line 25
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 26
            echo "
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Fichiers</div>
            <div class=\"panel-body\">
                <div id=\"gallery\" style=\"display:none;\">
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 32
                echo "                        <img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                             data-image=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                             data-description=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                </div>
            </div>
        </div>

    ";
        }
        // line 41
        echo "
    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("admin_folder");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la liste</a>
    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_folder_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i>
        Modifier</a>
    ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_e84244e6bb4cc3e85363d06c00814bbc0a93393b56142394fcb4aad1c9fa1901->leave($__internal_e84244e6bb4cc3e85363d06c00814bbc0a93393b56142394fcb4aad1c9fa1901_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGedBundle:Folder:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  118 => 43,  114 => 42,  111 => 41,  104 => 36,  96 => 34,  92 => 33,  85 => 32,  81 => 31,  74 => 26,  72 => 25,  66 => 22,  56 => 15,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block  content_right %}*/
/*     <h1>Galerie</h1>*/
/* */
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Nom</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.name }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Description</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.description|raw }}*/
/*         </div>*/
/*     </div>*/
/*     */
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Position</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.position }}*/
/*         </div>*/
/*     </div>*/
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
/*     <a href="{{ path('admin_folder') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la liste</a>*/
/*     <a href="{{ path('admin_folder_edit', { 'id': entity.id }) }}" class="btn btn-primary"><i class="fa fa-pencil"></i>*/
/*         Modifier</a>*/
/*     {{ form(delete_form) }}*/
/* {% endblock %}*/
/* */
