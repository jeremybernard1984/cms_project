<?php

/* PointWebAppBundle:Contact:show.html.twig */
class __TwigTemplate_ae05d5ade1b3ff54cb3add504d7044569c313ab1caecd8a67cc0730885ccada5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAppBundle:Contact:show.html.twig", 1);
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
        $__internal_11b77a3e52b0ec89357828349f8d8c6489d6eda584f59651c693a40c694d93a3 = $this->env->getExtension("native_profiler");
        $__internal_11b77a3e52b0ec89357828349f8d8c6489d6eda584f59651c693a40c694d93a3->enter($__internal_11b77a3e52b0ec89357828349f8d8c6489d6eda584f59651c693a40c694d93a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle:Contact:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11b77a3e52b0ec89357828349f8d8c6489d6eda584f59651c693a40c694d93a3->leave($__internal_11b77a3e52b0ec89357828349f8d8c6489d6eda584f59651c693a40c694d93a3_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_a674364e52ad8936deb261640b23fc130f30d24e37f2acb21d7944e073459cd9 = $this->env->getExtension("native_profiler");
        $__internal_a674364e52ad8936deb261640b23fc130f30d24e37f2acb21d7944e073459cd9->enter($__internal_a674364e52ad8936deb261640b23fc130f30d24e37f2acb21d7944e073459cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        
        $__internal_a674364e52ad8936deb261640b23fc130f30d24e37f2acb21d7944e073459cd9->leave($__internal_a674364e52ad8936deb261640b23fc130f30d24e37f2acb21d7944e073459cd9_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Contact:show.html.twig";
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
