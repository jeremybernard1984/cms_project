<?php

/* PointWebGuestBookBundle:GuestBook:show.html.twig */
class __TwigTemplate_c099b1ab8f2acee6ff4db5709e75bfb5170c5907bf364259a313edab3fbdd3df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebGuestBookBundle:GuestBook:show.html.twig", 1);
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
        $__internal_6c61cea8e639a15503ab4a734f0d04f64ffdff19674026893e2424b2b19a6c81 = $this->env->getExtension("native_profiler");
        $__internal_6c61cea8e639a15503ab4a734f0d04f64ffdff19674026893e2424b2b19a6c81->enter($__internal_6c61cea8e639a15503ab4a734f0d04f64ffdff19674026893e2424b2b19a6c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebGuestBookBundle:GuestBook:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c61cea8e639a15503ab4a734f0d04f64ffdff19674026893e2424b2b19a6c81->leave($__internal_6c61cea8e639a15503ab4a734f0d04f64ffdff19674026893e2424b2b19a6c81_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_8e083563c1de4fdffc4e639bbc1686c6e06562073d1f5ede2488ac8d5b4e1dc4 = $this->env->getExtension("native_profiler");
        $__internal_8e083563c1de4fdffc4e639bbc1686c6e06562073d1f5ede2488ac8d5b4e1dc4->enter($__internal_8e083563c1de4fdffc4e639bbc1686c6e06562073d1f5ede2488ac8d5b4e1dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Modifier le commentaire</h1>

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
        <div class=\"panel-heading\">Email</div>
        <div class=\"panel-body\">
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Commentaire</div>
        <div class=\"panel-body\">
            ";
        // line 27
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "comment", array());
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Notation</div>
        <div class=\"panel-body\">
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notation", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Position</div>
        <div class=\"panel-body\">
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">En ligne</div>
        <div class=\"panel-body\">
            ";
        // line 45
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 46
        echo "        </div>
    </div>



    <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("admin_guestbook");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la
        liste</a>
    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_guestbook_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i>
        Modifier</a>
    ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_8e083563c1de4fdffc4e639bbc1686c6e06562073d1f5ede2488ac8d5b4e1dc4->leave($__internal_8e083563c1de4fdffc4e639bbc1686c6e06562073d1f5ede2488ac8d5b4e1dc4_prof);

    }

    public function getTemplateName()
    {
        return "PointWebGuestBookBundle:GuestBook:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 55,  119 => 53,  114 => 51,  107 => 46,  101 => 45,  92 => 39,  83 => 33,  74 => 27,  65 => 21,  56 => 15,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
