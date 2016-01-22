<?php

/* @PointWebApp/Contact/show.html.twig */
class __TwigTemplate_82491a8eb4336e95cb9933895b2a8785809067d116df96c9d4946b15db91e07f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "@PointWebApp/Contact/show.html.twig", 1);
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
        $__internal_008cc80d72ac66d042e2f8ffee804943ae89d1452e00b2d05f267fbcd41b42d5 = $this->env->getExtension("native_profiler");
        $__internal_008cc80d72ac66d042e2f8ffee804943ae89d1452e00b2d05f267fbcd41b42d5->enter($__internal_008cc80d72ac66d042e2f8ffee804943ae89d1452e00b2d05f267fbcd41b42d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebApp/Contact/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_008cc80d72ac66d042e2f8ffee804943ae89d1452e00b2d05f267fbcd41b42d5->leave($__internal_008cc80d72ac66d042e2f8ffee804943ae89d1452e00b2d05f267fbcd41b42d5_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_08476b2c4a27dc2a1a9a4624c1ba8a948c4ea96f8f71708ac3be6d513a761baa = $this->env->getExtension("native_profiler");
        $__internal_08476b2c4a27dc2a1a9a4624c1ba8a948c4ea96f8f71708ac3be6d513a761baa->enter($__internal_08476b2c4a27dc2a1a9a4624c1ba8a948c4ea96f8f71708ac3be6d513a761baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Contact</h1>

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Nom</div>
        <div class=\"panel-body\">
            ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Prénom</div>
        <div class=\"panel-body\">
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Téléphone</div>
        <div class=\"panel-body\">
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Email</div>
        <div class=\"panel-body\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Adresse</div>
        <div class=\"panel-body\">
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "address", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Code postal</div>
        <div class=\"panel-body\">
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "zipCode", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Ville</div>
        <div class=\"panel-body\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "city", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Message</div>
        <div class=\"panel-body\">
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "message", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Date de création</div>
        <div class=\"panel-body\">
            ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createDate", array()), "d-m-Y"), "html", null, true);
        echo "
        </div>
    </div>

    <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("admin_contact");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la
        liste</a>
";
        
        $__internal_08476b2c4a27dc2a1a9a4624c1ba8a948c4ea96f8f71708ac3be6d513a761baa->leave($__internal_08476b2c4a27dc2a1a9a4624c1ba8a948c4ea96f8f71708ac3be6d513a761baa_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebApp/Contact/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 61,  119 => 57,  110 => 51,  101 => 45,  92 => 39,  83 => 33,  74 => 27,  65 => 21,  56 => 15,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block  content_right %}*/
/*     <h1>Contact</h1>*/
/* */
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Nom</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.lastname }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Prénom</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.firstname }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Téléphone</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.phone }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Email</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.email }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Adresse</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.address }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Code postal</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.zipCode }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Ville</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.city }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Message</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.message }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Date de création</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.createDate|date('d-m-Y') }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <a href="{{ path('admin_contact') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la*/
/*         liste</a>*/
/* {% endblock %}*/
/* */
