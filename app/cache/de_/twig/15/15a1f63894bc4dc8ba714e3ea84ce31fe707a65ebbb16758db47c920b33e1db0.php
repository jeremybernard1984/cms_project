<?php

/* PointWebAppBundle:Mail:guestbook.txt.twig */
class __TwigTemplate_6fca8b67c0c4016d1881494d9374ccc0684a5baebf05926cad001af162915fbd extends Twig_Template
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
        $__internal_ab1424973661829ee505051330a0da69aa2aa196a31ef71ae8b10f0fff78a770 = $this->env->getExtension("native_profiler");
        $__internal_ab1424973661829ee505051330a0da69aa2aa196a31ef71ae8b10f0fff78a770->enter($__internal_ab1424973661829ee505051330a0da69aa2aa196a31ef71ae8b10f0fff78a770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Mail:guestbook.txt.twig"));

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
        
        $__internal_ab1424973661829ee505051330a0da69aa2aa196a31ef71ae8b10f0fff78a770->leave($__internal_ab1424973661829ee505051330a0da69aa2aa196a31ef71ae8b10f0fff78a770_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Mail:guestbook.txt.twig";
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
