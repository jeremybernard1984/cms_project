<?php

/* PointWebAdminBundle::_menutop_admin.html.twig */
class __TwigTemplate_d7622f61b72d908271921f74900a6ed3c02b32d4c0e5fa670184020951bc09ee extends Twig_Template
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
        $__internal_3c34a5f13a1a9906caffe2f4b5404260f1e65522ad4167afe8fad3613b96c0f4 = $this->env->getExtension("native_profiler");
        $__internal_3c34a5f13a1a9906caffe2f4b5404260f1e65522ad4167afe8fad3613b96c0f4->enter($__internal_3c34a5f13a1a9906caffe2f4b5404260f1e65522ad4167afe8fad3613b96c0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::_menutop_admin.html.twig"));

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
        
        $__internal_3c34a5f13a1a9906caffe2f4b5404260f1e65522ad4167afe8fad3613b96c0f4->leave($__internal_3c34a5f13a1a9906caffe2f4b5404260f1e65522ad4167afe8fad3613b96c0f4_prof);

    }

    // line 25
    public function block_body_head_login($context, array $blocks = array())
    {
        $__internal_f62facdb3c8f891a9e4d523a56b6a927e58bf693e4c37ba763e7cb0d8759d3a2 = $this->env->getExtension("native_profiler");
        $__internal_f62facdb3c8f891a9e4d523a56b6a927e58bf693e4c37ba763e7cb0d8759d3a2->enter($__internal_f62facdb3c8f891a9e4d523a56b6a927e58bf693e4c37ba763e7cb0d8759d3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_head_login"));

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
        
        $__internal_f62facdb3c8f891a9e4d523a56b6a927e58bf693e4c37ba763e7cb0d8759d3a2->leave($__internal_f62facdb3c8f891a9e4d523a56b6a927e58bf693e4c37ba763e7cb0d8759d3a2_prof);

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
