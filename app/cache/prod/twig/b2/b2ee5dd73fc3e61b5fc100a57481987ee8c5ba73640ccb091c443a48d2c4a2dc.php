<?php

/* PointWebAdminBundle::_menutop_admin.html.twig */
class __TwigTemplate_f5b2ba51359102f25d38a5ae00b58dae03e940102ccedb9a428322b543955873 extends Twig_Template
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
    }

    // line 25
    public function block_body_head_login($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::_menutop_admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 26,  58 => 25,  48 => 33,  46 => 25,  20 => 1,);
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
