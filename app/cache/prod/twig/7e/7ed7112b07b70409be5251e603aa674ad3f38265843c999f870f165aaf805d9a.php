<?php

/* PointWebAppBundle:Mail:contact.txt.twig */
class __TwigTemplate_27238e72e81b003f703fbd5ed9424e2815f02dedf26fb696ebfc00be5b7035f5 extends Twig_Template
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
        $__internal_33051fc295ff27e99c5803d07929327559419df422916fc6eed2d2a74234db81 = $this->env->getExtension("native_profiler");
        $__internal_33051fc295ff27e99c5803d07929327559419df422916fc6eed2d2a74234db81->enter($__internal_33051fc295ff27e99c5803d07929327559419df422916fc6eed2d2a74234db81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Mail:contact.txt.twig"));

        // line 1
        echo "Vous avez reçu le message suivant via votre site web

Nom : ";
        // line 3
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname", array());
        echo "
Prénom : ";
        // line 4
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname", array());
        echo "
Téléphone : ";
        // line 5
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone", array());
        echo "
Email : ";
        // line 6
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array());
        echo "
Adresse : ";
        // line 7
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address", array());
        echo "
Code postal : ";
        // line 8
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "zipCode", array());
        echo "
Ville : ";
        // line 9
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city", array());
        echo "
Message : ";
        // line 10
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "message", array());
        echo "
Date de création : ";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createDate", array()), "d-m-Y");
        echo "
";
        
        $__internal_33051fc295ff27e99c5803d07929327559419df422916fc6eed2d2a74234db81->leave($__internal_33051fc295ff27e99c5803d07929327559419df422916fc6eed2d2a74234db81_prof);

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
        return array (  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* Vous avez reçu le message suivant via votre site web*/
/* */
/* Nom : {{ entity.lastname }}*/
/* Prénom : {{ entity.firstname }}*/
/* Téléphone : {{ entity.phone }}*/
/* Email : {{ entity.email }}*/
/* Adresse : {{ entity.address }}*/
/* Code postal : {{ entity.zipCode }}*/
/* Ville : {{ entity.city }}*/
/* Message : {{ entity.message }}*/
/* Date de création : {{ entity.createDate|date('d-m-Y') }}*/
/* */
