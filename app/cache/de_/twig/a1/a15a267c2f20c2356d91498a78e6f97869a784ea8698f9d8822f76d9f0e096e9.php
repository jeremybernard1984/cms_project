<?php

/* PointWebAppBundle:Mail:contact.txt.twig */
class __TwigTemplate_03e453d0f2f45d6f83d184da8a7c75c6e3189648dcaa642f2ace4bbdcf5fb9c7 extends Twig_Template
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
        $__internal_825346367d00dd8ae35c56144567605f156105137ee311a30a45b1472d0a2491 = $this->env->getExtension("native_profiler");
        $__internal_825346367d00dd8ae35c56144567605f156105137ee311a30a45b1472d0a2491->enter($__internal_825346367d00dd8ae35c56144567605f156105137ee311a30a45b1472d0a2491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Mail:contact.txt.twig"));

        // line 1
        echo "Vous avez reçu le message suivant via votre site web

<div class=\"panel panel-info\">
    <div class=\"panel-heading\">Nom</div>
    <div class=\"panel-body\">
        ";
        // line 6
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname", array());
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
    <div class=\"panel-heading\">Téléphone</div>
    <div class=\"panel-body\">
        ";
        // line 18
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone", array());
        echo "
    </div>
</div>
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">Email</div>
    <div class=\"panel-body\">
        ";
        // line 24
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array());
        echo "
    </div>
</div>
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">Adresse</div>
    <div class=\"panel-body\">
        ";
        // line 30
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address", array());
        echo "
    </div>
</div>
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">Code postal</div>
    <div class=\"panel-body\">
        ";
        // line 36
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "zipCode", array());
        echo "
    </div>
</div>
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">Ville</div>
    <div class=\"panel-body\">
        ";
        // line 42
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city", array());
        echo "
    </div>
</div>
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">Message</div>
    <div class=\"panel-body\">
        ";
        // line 48
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "message", array());
        echo "
    </div>
</div>
<div class=\"panel panel-info\">
    <div class=\"panel-heading\">Date de création</div>
    <div class=\"panel-body\">
        ";
        // line 54
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createDate", array()), "d-m-Y");
        echo "
    </div>
</div>";
        
        $__internal_825346367d00dd8ae35c56144567605f156105137ee311a30a45b1472d0a2491->leave($__internal_825346367d00dd8ae35c56144567605f156105137ee311a30a45b1472d0a2491_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Mail:contact.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 54,  92 => 48,  83 => 42,  74 => 36,  65 => 30,  56 => 24,  47 => 18,  38 => 12,  29 => 6,  22 => 1,);
    }
}
/* Vous avez reçu le message suivant via votre site web*/
/* */
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Nom</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.lastname }}*/
/*     </div>*/
/* </div>*/
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Prénom</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.firstname }}*/
/*     </div>*/
/* </div>*/
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Téléphone</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.phone }}*/
/*     </div>*/
/* </div>*/
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Email</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.email }}*/
/*     </div>*/
/* </div>*/
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Adresse</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.address }}*/
/*     </div>*/
/* </div>*/
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Code postal</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.zipCode }}*/
/*     </div>*/
/* </div>*/
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Ville</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.city }}*/
/*     </div>*/
/* </div>*/
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Message</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.message }}*/
/*     </div>*/
/* </div>*/
/* <div class="panel panel-info">*/
/*     <div class="panel-heading">Date de création</div>*/
/*     <div class="panel-body">*/
/*         {{ entity.createDate|date('d-m-Y') }}*/
/*     </div>*/
/* </div>*/
