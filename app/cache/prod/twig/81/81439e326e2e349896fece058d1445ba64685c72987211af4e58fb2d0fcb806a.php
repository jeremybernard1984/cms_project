<?php

/* PointWebAdminBundle::_menutop_admin.html.twig */
class __TwigTemplate_e9b78597fe891116cc190ee744e422faffe52dd603856cc237314ef88d519915 extends Twig_Template
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
        $__internal_cce10a72b2a7fbbd600340c79302ca208b5bbdf330a7e7144bc4a44ef0010be1 = $this->env->getExtension("native_profiler");
        $__internal_cce10a72b2a7fbbd600340c79302ca208b5bbdf330a7e7144bc4a44ef0010be1->enter($__internal_cce10a72b2a7fbbd600340c79302ca208b5bbdf330a7e7144bc4a44ef0010be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::_menutop_admin.html.twig"));

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
        <span class=\"txt_menu_top\">CMS-project : <span style=\"color: #fff\">Nom de l'entreprise</span> </span>
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
            <li>
                <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_reglage_edit", array("id" => "1"));
        echo "\">
                    <i class=\"fa fa-gear fa-fw\"></i>";
        // line 24
        echo "Réglages du site";
        echo "
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                ";
        // line 29
        $this->displayBlock('body_head_login', $context, $blocks);
        // line 37
        echo "            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->";
        
        $__internal_cce10a72b2a7fbbd600340c79302ca208b5bbdf330a7e7144bc4a44ef0010be1->leave($__internal_cce10a72b2a7fbbd600340c79302ca208b5bbdf330a7e7144bc4a44ef0010be1_prof);

    }

    // line 29
    public function block_body_head_login($context, array $blocks = array())
    {
        $__internal_37132510d4e968e0ac2162ee22faa5783da1fe2e0b267ad39619c37e165c78a5 = $this->env->getExtension("native_profiler");
        $__internal_37132510d4e968e0ac2162ee22faa5783da1fe2e0b267ad39619c37e165c78a5->enter($__internal_37132510d4e968e0ac2162ee22faa5783da1fe2e0b267ad39619c37e165c78a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_head_login"));

        // line 30
        echo "                    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"
                   class=\"mdi-action-exit-to-app\"
                   data-toggle=\"tooltip\"
                   data-placement=\"bottom\" title=\"Se déconnecter\">
                    <i class=\"fa fa-sign-out fa-fw\"></i> Déconnexion
                </a>
                ";
        
        $__internal_37132510d4e968e0ac2162ee22faa5783da1fe2e0b267ad39619c37e165c78a5->leave($__internal_37132510d4e968e0ac2162ee22faa5783da1fe2e0b267ad39619c37e165c78a5_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::_menutop_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  77 => 29,  64 => 37,  62 => 29,  54 => 24,  50 => 23,  33 => 9,  23 => 1,);
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
/*         <span class="txt_menu_top">CMS-project : <span style="color: #fff">Nom de l'entreprise</span> </span>*/
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
/*             <li>*/
/*                 <a href="{{ path('admin_reglage_edit', {'id': '1'}) }}">*/
/*                     <i class="fa fa-gear fa-fw"></i>{{ "Réglages du site" }}*/
/*                 </a>*/
/*             </li>*/
/*             <li class="divider"></li>*/
/*             <li>*/
/*                 {% block body_head_login %}*/
/*                     <a href="{{ path("fos_user_security_logout") }}"*/
/*                    class="mdi-action-exit-to-app"*/
/*                    data-toggle="tooltip"*/
/*                    data-placement="bottom" title="Se déconnecter">*/
/*                     <i class="fa fa-sign-out fa-fw"></i> Déconnexion*/
/*                 </a>*/
/*                 {% endblock %}*/
/*             </li>*/
/*         </ul>*/
/*         <!-- /.dropdown-user -->*/
/*     </li>*/
/*     <!-- /.dropdown -->*/
/* </ul>*/
/* <!-- /.navbar-top-links -->*/
