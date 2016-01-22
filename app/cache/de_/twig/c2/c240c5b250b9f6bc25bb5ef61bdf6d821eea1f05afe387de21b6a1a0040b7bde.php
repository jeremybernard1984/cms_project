<?php

/* @PointWebApp/Mail/guestbook.txt.twig */
class __TwigTemplate_f5d9794d03ad1dd6d4698590ce0ddc6fe6de9b4fbd122f051de63301aaa4f3f4 extends Twig_Template
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
        $__internal_9691dd7b93ff93c17350345154102d5d304476daf7e5f914fca1de0ce58b5189 = $this->env->getExtension("native_profiler");
        $__internal_9691dd7b93ff93c17350345154102d5d304476daf7e5f914fca1de0ce58b5189->enter($__internal_9691dd7b93ff93c17350345154102d5d304476daf7e5f914fca1de0ce58b5189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/Mail/guestbook.txt.twig"));

        // line 1
        echo "Le commentaire suivant à été fait via votre site web

<div class=\"panel panel-info\">
    <div class=\"panel-heading\">Nom</div>
    <div class=\"panel-body\">
        ";
        // line 6
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array());
        echo "
    </div>
</div>
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">Prénom</div>
    <div class=\"panel-body\">
        ";
        // line 12
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname", array());
        echo "
    </div>
</div>
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">Email</div>
    <div class=\"panel-body\">
        ";
        // line 18
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array());
        echo "
    </div>
</div>

<div class=\"panel panel-info\">
    <div class=\"panel-heading\">Commentaire</div>
    <div class=\"panel-body\">
        ";
        // line 25
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment", array());
        echo "
    </div>
</div>
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">Date de création</div>
    <div class=\"panel-body\">
        ";
        // line 31
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createDate", array()), "d-m-Y");
        echo "
    </div>
</div>";
        
        $__internal_9691dd7b93ff93c17350345154102d5d304476daf7e5f914fca1de0ce58b5189->leave($__internal_9691dd7b93ff93c17350345154102d5d304476daf7e5f914fca1de0ce58b5189_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/Mail/guestbook.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 31,  57 => 25,  47 => 18,  38 => 12,  29 => 6,  22 => 1,);
    }
}
/* Le commentaire suivant à été fait via votre site web*/
/* */
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Nom</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.title }}*/
/*     </div>*/
/* </div>*/
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Prénom</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.firstname }}*/
/*     </div>*/
/* </div>*/
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Email</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.email }}*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Commentaire</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.comment }}*/
/*     </div>*/
/* </div>*/
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Date de création</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.createDate|date('d-m-Y') }}*/
/*     </div>*/
/* </div>*/
