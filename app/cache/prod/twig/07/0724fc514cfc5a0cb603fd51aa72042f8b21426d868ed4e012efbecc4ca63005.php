<?php

/* PointWebAdminBundle::_menutop_admin.html.twig */
class __TwigTemplate_9f6c047d0ecfe60776721f759fbf23cb85b0b6df231cbb52443fb03991e52ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body_head_login' => array($this, 'block_body_head_login'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a4cfd88edf0f73f7fb7aa751ffd039830ccb6c967e431c3472bcf3cd05c023f = $this->env->getExtension("native_profiler");
        $__internal_6a4cfd88edf0f73f7fb7aa751ffd039830ccb6c967e431c3472bcf3cd05c023f->enter($__internal_6a4cfd88edf0f73f7fb7aa751ffd039830ccb6c967e431c3472bcf3cd05c023f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::_menutop_admin.html.twig"));

        // line 1
        echo "<div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"index.html\">Administration de OUF !</a>
</div>
<!-- /.navbar-header -->

<ul class=\"nav navbar-top-links navbar-right\">
    <!-- /.dropdown -->
    <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
        </a>
        <ul class=\"dropdown-menu dropdown-user\">
            <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
            </li>
            <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
            </li>
            <li class=\"divider\"></li>
            <li>
                ";
        // line 25
        $this->displayBlock('body_head_login', $context, $blocks);
        // line 33
        echo "            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->";
        
        $__internal_6a4cfd88edf0f73f7fb7aa751ffd039830ccb6c967e431c3472bcf3cd05c023f->leave($__internal_6a4cfd88edf0f73f7fb7aa751ffd039830ccb6c967e431c3472bcf3cd05c023f_prof);

    }

    // line 25
    public function block_body_head_login($context, array $blocks = array())
    {
        $__internal_bf0ae39ec0ba4952d6c66ee39328ec6bb2a6c698d7b3a60089e2c90d4639fc28 = $this->env->getExtension("native_profiler");
        $__internal_bf0ae39ec0ba4952d6c66ee39328ec6bb2a6c698d7b3a60089e2c90d4639fc28->enter($__internal_bf0ae39ec0ba4952d6c66ee39328ec6bb2a6c698d7b3a60089e2c90d4639fc28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_head_login"));

        // line 26
        echo "                    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"
                   class=\"mdi-action-exit-to-app\"
                   data-toggle=\"tooltip\"
                   data-placement=\"bottom\" title=\"Se déconnecter\">
                    <i class=\"fa fa-sign-out fa-fw\"></i> Logout
                </a>
                ";
        
        $__internal_bf0ae39ec0ba4952d6c66ee39328ec6bb2a6c698d7b3a60089e2c90d4639fc28->leave($__internal_bf0ae39ec0ba4952d6c66ee39328ec6bb2a6c698d7b3a60089e2c90d4639fc28_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::_menutop_admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  64 => 25,  51 => 33,  49 => 25,  23 => 1,);
    }
}
/* <div class="navbar-header">*/
/*     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*     </button>*/
/*     <a class="navbar-brand" href="index.html">Administration de OUF !</a>*/
/* </div>*/
/* <!-- /.navbar-header -->*/
/* */
/* <ul class="nav navbar-top-links navbar-right">*/
/*     <!-- /.dropdown -->*/
/*     <li class="dropdown">*/
/*         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*             <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>*/
/*         </a>*/
/*         <ul class="dropdown-menu dropdown-user">*/
/*             <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>*/
/*             </li>*/
/*             <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>*/
/*             </li>*/
/*             <li class="divider"></li>*/
/*             <li>*/
/*                 {% block body_head_login %}*/
/*                     <a href="{{ path("fos_user_security_logout") }}"*/
/*                    class="mdi-action-exit-to-app"*/
/*                    data-toggle="tooltip"*/
/*                    data-placement="bottom" title="Se déconnecter">*/
/*                     <i class="fa fa-sign-out fa-fw"></i> Logout*/
/*                 </a>*/
/*                 {% endblock %}*/
/*             </li>*/
/*         </ul>*/
/*         <!-- /.dropdown-user -->*/
/*     </li>*/
/*     <!-- /.dropdown -->*/
/* </ul>*/
/* <!-- /.navbar-top-links -->*/
