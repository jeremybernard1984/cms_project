<?php

/* PointWebAdminBundle::_top_admin.html.twig */
class __TwigTemplate_c9c5ef274682f38b73ccb31271ff3849176eb9ae99b7162ef10c56062c759c8f extends Twig_Template
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
        $__internal_c8d7b254721d24afcea0e94fa2d3871f68571c7359685a2bc36e73f8d50aab8a = $this->env->getExtension("native_profiler");
        $__internal_c8d7b254721d24afcea0e94fa2d3871f68571c7359685a2bc36e73f8d50aab8a->enter($__internal_c8d7b254721d24afcea0e94fa2d3871f68571c7359685a2bc36e73f8d50aab8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::_top_admin.html.twig"));

        // line 1
        echo "<div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
    </button>
    <div class=\"brand_menu_top\">
    <img class=\"logo_menu_top\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("images/logo_cms_project.png")), "html", null, true);
        echo "\" alt=\"CMS Project\">
        <span class=\"txt_menu_top\">CMS-project : <span style=\"color: #fff\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "clientName", array()), "html", null, true);
        echo "</span> </span>
    </div>
</div>
<!-- /.navbar-header -->

<ul class=\"nav navbar-top-links navbar-right\">
    <!-- /.dropdown -->
    <li class=\"dropdown\">
        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"fa fa-cogs fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
        </a>
        <ul class=\"dropdown-menu dropdown-user\">
            ";
        // line 22
        if ((isset($context["roleSuperAdmin"]) ? $context["roleSuperAdmin"] : $this->getContext($context, "roleSuperAdmin"))) {
            // line 23
            echo "            <li>
                <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("admin_reglage_edit", array("id" => "1"));
            echo "\">
                    <i class=\"fa fa-gear fa-fw\"></i>";
            // line 25
            echo "Réglages du site";
            echo "
                </a>
            </li>

            <li class=\"divider\"></li>
            ";
        }
        // line 31
        echo "            <li>
                <a title=\"Éditer\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => (isset($context["userId"]) ? $context["userId"] : $this->getContext($context, "userId")))), "html", null, true);
        echo "\">
                    <i class=\"fa fa-user\"></i> Éditer le profile
                </a>
            </li>
            <li>
                ";
        // line 37
        $this->displayBlock('body_head_login', $context, $blocks);
        // line 42
        echo "            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
    <li class=\"dropdown\">
        <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\"><i class=\"fa fa-sign-out fa-fw\"></i></a>
    </li>
</ul>
<!-- /.navbar-top-links -->";
        
        $__internal_c8d7b254721d24afcea0e94fa2d3871f68571c7359685a2bc36e73f8d50aab8a->leave($__internal_c8d7b254721d24afcea0e94fa2d3871f68571c7359685a2bc36e73f8d50aab8a_prof);

    }

    // line 37
    public function block_body_head_login($context, array $blocks = array())
    {
        $__internal_ca06b0b8d71bbc6f9af413420898c50cfe97e5a1042d64c08bfc6c0f00140a37 = $this->env->getExtension("native_profiler");
        $__internal_ca06b0b8d71bbc6f9af413420898c50cfe97e5a1042d64c08bfc6c0f00140a37->enter($__internal_ca06b0b8d71bbc6f9af413420898c50cfe97e5a1042d64c08bfc6c0f00140a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_head_login"));

        // line 38
        echo "                    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                        <i class=\"fa fa-sign-out fa-fw\"></i> Déconnexion
                    </a>
                ";
        
        $__internal_ca06b0b8d71bbc6f9af413420898c50cfe97e5a1042d64c08bfc6c0f00140a37->leave($__internal_ca06b0b8d71bbc6f9af413420898c50cfe97e5a1042d64c08bfc6c0f00140a37_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::_top_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 38,  102 => 37,  91 => 48,  83 => 42,  81 => 37,  73 => 32,  70 => 31,  61 => 25,  57 => 24,  54 => 23,  52 => 22,  37 => 10,  33 => 9,  23 => 1,);
    }
}
/* <div class="navbar-header">*/
/*     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*     </button>*/
/*     <div class="brand_menu_top">*/
/*     <img class="logo_menu_top" src="{{ absolute_url(asset('images/logo_cms_project.png')) }}" alt="CMS Project">*/
/*         <span class="txt_menu_top">CMS-project : <span style="color: #fff">{{ reglage.clientName }}</span> </span>*/
/*     </div>*/
/* </div>*/
/* <!-- /.navbar-header -->*/
/* */
/* <ul class="nav navbar-top-links navbar-right">*/
/*     <!-- /.dropdown -->*/
/*     <li class="dropdown">*/
/*         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*             <i class="fa fa-cogs fa-fw"></i>  <i class="fa fa-caret-down"></i>*/
/*         </a>*/
/*         <ul class="dropdown-menu dropdown-user">*/
/*             {% if roleSuperAdmin %}*/
/*             <li>*/
/*                 <a href="{{ path('admin_reglage_edit', {'id': '1'}) }}">*/
/*                     <i class="fa fa-gear fa-fw"></i>{{ "Réglages du site" }}*/
/*                 </a>*/
/*             </li>*/
/* */
/*             <li class="divider"></li>*/
/*             {% endif %}*/
/*             <li>*/
/*                 <a title="Éditer" href="{{ path('admin_user_edit', {'id':userId}) }}">*/
/*                     <i class="fa fa-user"></i> Éditer le profile*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 {% block body_head_login %}*/
/*                     <a href="{{ path("fos_user_security_logout") }}">*/
/*                         <i class="fa fa-sign-out fa-fw"></i> Déconnexion*/
/*                     </a>*/
/*                 {% endblock %}*/
/*             </li>*/
/*         </ul>*/
/*         <!-- /.dropdown-user -->*/
/*     </li>*/
/*     <!-- /.dropdown -->*/
/*     <li class="dropdown">*/
/*         <a href="{{ path("point_web_app_homepage") }}"><i class="fa fa-sign-out fa-fw"></i></a>*/
/*     </li>*/
/* </ul>*/
/* <!-- /.navbar-top-links -->*/
