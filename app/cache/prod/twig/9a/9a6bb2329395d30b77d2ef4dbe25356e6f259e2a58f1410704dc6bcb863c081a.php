<?php

/* PointWebAdminBundle::_menuleft_admin.html.twig */
class __TwigTemplate_101b5aed98cf5fd33d63748e0e6debaa005139095bf251e184ebe077d63009aa extends Twig_Template
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
        $__internal_11275d76bbde05da64b88f592fa08fe7eee7e14030f4eda6092dba1673706c4c = $this->env->getExtension("native_profiler");
        $__internal_11275d76bbde05da64b88f592fa08fe7eee7e14030f4eda6092dba1673706c4c->enter($__internal_11275d76bbde05da64b88f592fa08fe7eee7e14030f4eda6092dba1673706c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::_menuleft_admin.html.twig"));

        // line 1
        echo "<div class=\"navbar-default sidebar\" role=\"navigation\">
    <div class=\"sidebar-nav navbar-collapse\">
        <ul class=\"nav\" id=\"side-menu\">
            <!--<li class=\"sidebar-search\">
                <div class=\"input-group custom-search-form\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group
            </li>-->

            <li ";
        // line 16
        if ((is_string($__internal_245f46913aaacaaa69a53011ff1e00e8ec5543631232742f83f9c8d7eee0106e = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f8d5ebf8b5700dcf16d211d8ba5a78dc83edd3f3a2e39d7611bcff6fdf5b2dfb = "point_web_admin_homepage") && ('' === $__internal_f8d5ebf8b5700dcf16d211d8ba5a78dc83edd3f3a2e39d7611bcff6fdf5b2dfb || 0 === strpos($__internal_245f46913aaacaaa69a53011ff1e00e8ec5543631232742f83f9c8d7eee0106e, $__internal_f8d5ebf8b5700dcf16d211d8ba5a78dc83edd3f3a2e39d7611bcff6fdf5b2dfb)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("point_web_admin_homepage");
        echo "\"><i class=\"fa fa-home fa-fw\"></i> ";
        echo "Homepage";
        echo "</a>
            </li>
            <li ";
        // line 19
        if ((is_string($__internal_7d85f1b9e11814cc6c8f5816f7bad124eb1b12d42d8f1a12dc6c34dc6796149a = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7707f6662cc215deb977fe130a7a4a8b8f2d0e6f1fc0d695eea095e6e8f48715 = "admin_menu") && ('' === $__internal_7707f6662cc215deb977fe130a7a4a8b8f2d0e6f1fc0d695eea095e6e8f48715 || 0 === strpos($__internal_7d85f1b9e11814cc6c8f5816f7bad124eb1b12d42d8f1a12dc6c34dc6796149a, $__internal_7707f6662cc215deb977fe130a7a4a8b8f2d0e6f1fc0d695eea095e6e8f48715)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("admin_menu");
        echo "\"><i class=\"fa fa-sitemap fa-fw\"></i> ";
        echo "Menu";
        echo "</a>
            </li>
            <li class=\"";
        // line 22
        if (((is_string($__internal_0f75e83bbbd0ee6481b7593b634feda09f2a5e387d109646c2b6396b21744075 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_ea4eee4457f48f8f0468a704983489f9745036b08f0daa9ed6f5e0616bf07251 = "admin_product") && ('' === $__internal_ea4eee4457f48f8f0468a704983489f9745036b08f0daa9ed6f5e0616bf07251 || 0 === strpos($__internal_0f75e83bbbd0ee6481b7593b634feda09f2a5e387d109646c2b6396b21744075, $__internal_ea4eee4457f48f8f0468a704983489f9745036b08f0daa9ed6f5e0616bf07251))) || (is_string($__internal_25786f67a70a37a688cf80e0bbc18d4dd44762c40087d19348e97d49cf2e8a3f = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_69d8a04522d662b5c5aa03e7800240715e722c70ed0b7e1a64435a861ab96861 = "admin_category") && ('' === $__internal_69d8a04522d662b5c5aa03e7800240715e722c70ed0b7e1a64435a861ab96861 || 0 === strpos($__internal_25786f67a70a37a688cf80e0bbc18d4dd44762c40087d19348e97d49cf2e8a3f, $__internal_69d8a04522d662b5c5aa03e7800240715e722c70ed0b7e1a64435a861ab96861))))) {
            echo "active";
        }
        echo "\">
                <a href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> ";
        // line 23
        echo "Produits";
        echo " <span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li ";
        // line 25
        if ((is_string($__internal_66a3a45ce585793e62c0b3071cc25c7a854bb5a0dd4db2996335cd42769cbd9c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_db32a5e41f93ea17b40753884aa3fe2f2d135ff953969f12bfebde04df421adc = "admin_product") && ('' === $__internal_db32a5e41f93ea17b40753884aa3fe2f2d135ff953969f12bfebde04df421adc || 0 === strpos($__internal_66a3a45ce585793e62c0b3071cc25c7a854bb5a0dd4db2996335cd42769cbd9c, $__internal_db32a5e41f93ea17b40753884aa3fe2f2d135ff953969f12bfebde04df421adc)))) {
            echo "class=\"active\"";
        }
        echo "><a
                                href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("admin_product");
        echo "\"><i class=\"fa fa-shopping-cart fa-fw\"></i> ";
        echo "Produits";
        echo "</a></li>
                    <li ";
        // line 27
        if ((is_string($__internal_68963e5fe71b64e2b5b264eee7eafec424591aded715eb59f68b52900f147820 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f73b5ad3ea33a498878b21e2f52c45d7de94fb43c3eca63dc8de0639faa35cf9 = "admin_category") && ('' === $__internal_f73b5ad3ea33a498878b21e2f52c45d7de94fb43c3eca63dc8de0639faa35cf9 || 0 === strpos($__internal_68963e5fe71b64e2b5b264eee7eafec424591aded715eb59f68b52900f147820, $__internal_f73b5ad3ea33a498878b21e2f52c45d7de94fb43c3eca63dc8de0639faa35cf9)))) {
            echo "class=\"active\"";
        }
        echo "><a
                                href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\"><i class=\"fa fa-shopping-cart fa-fw\"></i> ";
        echo "Catégories";
        echo "</a></li>
                </ul>
            </li>

            <li ";
        // line 32
        if ((is_string($__internal_13e5879b9263f10ce02545b14e2f77f2820bde1642adf49fa03c387bba5be02d = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_9ef4a3a0f092cc9002ecf79bccd13785db027369b8ab24c53162358b693f1576 = "admin_news") && ('' === $__internal_9ef4a3a0f092cc9002ecf79bccd13785db027369b8ab24c53162358b693f1576 || 0 === strpos($__internal_13e5879b9263f10ce02545b14e2f77f2820bde1642adf49fa03c387bba5be02d, $__internal_9ef4a3a0f092cc9002ecf79bccd13785db027369b8ab24c53162358b693f1576)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("admin_news");
        echo "\"><i class=\"fa fa-newspaper-o fa-fw\"></i> ";
        echo "News";
        echo "</a>
            </li>
            <li ";
        // line 35
        if ((is_string($__internal_ffdebc3c940f96702f25c71ad934e64ea42523a819cacdc7a7e26c1ef8aa6ff6 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_42aae39d44e04dd0fa98de95c5a05587b7ebfea80999a84a115c78c6244db286 = "admin_partner") && ('' === $__internal_42aae39d44e04dd0fa98de95c5a05587b7ebfea80999a84a115c78c6244db286 || 0 === strpos($__internal_ffdebc3c940f96702f25c71ad934e64ea42523a819cacdc7a7e26c1ef8aa6ff6, $__internal_42aae39d44e04dd0fa98de95c5a05587b7ebfea80999a84a115c78c6244db286)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"#\"><i class=\"fa fa-graduation-cap fa-fw\"></i> ";
        // line 36
        echo "Partenaires";
        echo " <span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li ";
        // line 38
        if ((is_string($__internal_88f94dba4f66ac69d312b558c585c8238f0b1350a392c5678ab5326bb757ffc7 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b9b3697493e8434727fa4cc31f7a245d0e571b0cadc8e2d217e6a4c4e2102125 = "admin_partner") && ('' === $__internal_b9b3697493e8434727fa4cc31f7a245d0e571b0cadc8e2d217e6a4c4e2102125 || 0 === strpos($__internal_88f94dba4f66ac69d312b558c585c8238f0b1350a392c5678ab5326bb757ffc7, $__internal_b9b3697493e8434727fa4cc31f7a245d0e571b0cadc8e2d217e6a4c4e2102125)))) {
            echo "class=\"active\"";
        }
        echo "><a
                                href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("admin_partner");
        echo "\"><i class=\"fa fa-graduation-cap fa-fw\"></i> ";
        echo "Partenaires";
        echo "</a></li>
                    <li ";
        // line 40
        if ((is_string($__internal_d9f55b9bbbf174e36289382420138cdecd017bceb93b493bfd6987f4f78b0fe2 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5a6ddfa8d6a825cd5110b3e2b9649f6736ae00add05513865542ecb8592d5560 = "admin_partner_category") && ('' === $__internal_5a6ddfa8d6a825cd5110b3e2b9649f6736ae00add05513865542ecb8592d5560 || 0 === strpos($__internal_d9f55b9bbbf174e36289382420138cdecd017bceb93b493bfd6987f4f78b0fe2, $__internal_5a6ddfa8d6a825cd5110b3e2b9649f6736ae00add05513865542ecb8592d5560)))) {
            echo "class=\"active\"";
        }
        echo "><a
                                href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("admin_partner_category");
        echo "\"><i class=\"fa fa-graduation-cap fa-fw\"></i> ";
        echo "Catégories";
        echo "</a></li>
                </ul>


            </li>
            <li ";
        // line 46
        if ((is_string($__internal_5c1e9bccbc28e1c1aa05eb1c2b2f69f2076098906c4899b37b604225a21232d8 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_12e72716ea2bc75d415198f697e4204071c5deaccb4ddcda56660adaef673a26 = "admin_guestbook") && ('' === $__internal_12e72716ea2bc75d415198f697e4204071c5deaccb4ddcda56660adaef673a26 || 0 === strpos($__internal_5c1e9bccbc28e1c1aa05eb1c2b2f69f2076098906c4899b37b604225a21232d8, $__internal_12e72716ea2bc75d415198f697e4204071c5deaccb4ddcda56660adaef673a26)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin_guestbook");
        echo "\"><i class=\"fa fa-book fa-fw\"></i> ";
        echo "Livre d'or";
        echo "</a>
            </li>
            <li ";
        // line 49
        if ((is_string($__internal_7193ff7c397af17d7277490858e458e778e5e8cdb8a7145e32eaf04f90827bf4 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5bef58a3a58fa05435c2684e750f3382212e74de234d5fc594cb1fd74da26805 = "admin_faq") && ('' === $__internal_5bef58a3a58fa05435c2684e750f3382212e74de234d5fc594cb1fd74da26805 || 0 === strpos($__internal_7193ff7c397af17d7277490858e458e778e5e8cdb8a7145e32eaf04f90827bf4, $__internal_5bef58a3a58fa05435c2684e750f3382212e74de234d5fc594cb1fd74da26805)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("admin_faq");
        echo "\"><i class=\"fa fa-question-circle fa-fw\"></i> ";
        echo "F.A.Q";
        echo "</a>
            </li>
            <li ";
        // line 52
        if ((is_string($__internal_b58715df064bde62823194d27fda41c388d5d0960ec486f3e5d653ce6417b220 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4901197159dad590146875244cf31fd145d476bf3668fa353ac22b8ddb3336ef = "admin_gallery") && ('' === $__internal_4901197159dad590146875244cf31fd145d476bf3668fa353ac22b8ddb3336ef || 0 === strpos($__internal_b58715df064bde62823194d27fda41c388d5d0960ec486f3e5d653ce6417b220, $__internal_4901197159dad590146875244cf31fd145d476bf3668fa353ac22b8ddb3336ef)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("admin_gallery");
        echo "\"><i class=\"fa fa-photo fa-fw\"></i> ";
        echo "Galeries";
        echo "</a>
            </li>
            <li ";
        // line 55
        if ((is_string($__internal_ebfed36bf4dbedb48b04850fca6da64d51a5fc24485ccc2ab1832667f6743527 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_154889d4e9e3cc2a5679f4b3258ec08ad20ccdc3b24930ff48ae9c2f88c19590 = "admin_folder") && ('' === $__internal_154889d4e9e3cc2a5679f4b3258ec08ad20ccdc3b24930ff48ae9c2f88c19590 || 0 === strpos($__internal_ebfed36bf4dbedb48b04850fca6da64d51a5fc24485ccc2ab1832667f6743527, $__internal_154889d4e9e3cc2a5679f4b3258ec08ad20ccdc3b24930ff48ae9c2f88c19590)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("admin_folder");
        echo "\"><i class=\"fa fa-folder fa-fw\"></i> ";
        echo "Gestion documentaire";
        echo "</a>
            </li>
            <li ";
        // line 58
        if ((is_string($__internal_3238fc873577e787a2a970bef30cc9a7c5458c6c9354a252a02e3763189cb56e = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_151c3a8650c7e4e5101826496c4b24917dd699ffb88339eee58993e183979be9 = "admin_contact") && ('' === $__internal_151c3a8650c7e4e5101826496c4b24917dd699ffb88339eee58993e183979be9 || 0 === strpos($__internal_3238fc873577e787a2a970bef30cc9a7c5458c6c9354a252a02e3763189cb56e, $__internal_151c3a8650c7e4e5101826496c4b24917dd699ffb88339eee58993e183979be9)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("admin_contact");
        echo "\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
        echo "Contact";
        echo "</a>
            </li>
            <li ";
        // line 61
        if ((is_string($__internal_fcb04ab0714515d2ea080241d92536a35f6ca47fed23600fe78262b3b2d11091 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4a8c0a6c06a04c94f85621873fe82d98ffd38858c4146b7dfcb7ecb9154a65a4 = "admin_user") && ('' === $__internal_4a8c0a6c06a04c94f85621873fe82d98ffd38858c4146b7dfcb7ecb9154a65a4 || 0 === strpos($__internal_fcb04ab0714515d2ea080241d92536a35f6ca47fed23600fe78262b3b2d11091, $__internal_4a8c0a6c06a04c94f85621873fe82d98ffd38858c4146b7dfcb7ecb9154a65a4)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\"><i class=\"fa fa-group fa-fw\"></i> ";
        echo "Utilisateurs";
        echo "</a>
            </li>




            <!-- EXEMPLE MENU 3 NIVEAUX
            <li>
                <a href=\"#\"><i class=\"fa fa-sitemap fa-fw\"></i> Multi-Level Dropdown<span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li>
                        <a href=\"#\">Second Level Item</a>
                    </li>
                    <li>
                        <a href=\"#\">Third Level <span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-third-level\">
                            <li>
                                <a href=\"#\">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level
                    </li>
                </ul>
                <!-- /.nav-second-level
            </li>
            -->

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->";
        
        $__internal_11275d76bbde05da64b88f592fa08fe7eee7e14030f4eda6092dba1673706c4c->leave($__internal_11275d76bbde05da64b88f592fa08fe7eee7e14030f4eda6092dba1673706c4c_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::_menuleft_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 62,  220 => 61,  213 => 59,  207 => 58,  200 => 56,  194 => 55,  187 => 53,  181 => 52,  174 => 50,  168 => 49,  161 => 47,  155 => 46,  145 => 41,  139 => 40,  133 => 39,  127 => 38,  122 => 36,  116 => 35,  109 => 33,  103 => 32,  94 => 28,  88 => 27,  82 => 26,  76 => 25,  71 => 23,  65 => 22,  58 => 20,  52 => 19,  45 => 17,  39 => 16,  22 => 1,);
    }
}
/* <div class="navbar-default sidebar" role="navigation">*/
/*     <div class="sidebar-nav navbar-collapse">*/
/*         <ul class="nav" id="side-menu">*/
/*             <!--<li class="sidebar-search">*/
/*                 <div class="input-group custom-search-form">*/
/*                     <input type="text" class="form-control" placeholder="Search...">*/
/*                                 <span class="input-group-btn">*/
/*                                 <button class="btn btn-default" type="button">*/
/*                                     <i class="fa fa-search"></i>*/
/*                                 </button>*/
/*                             </span>*/
/*                 </div>*/
/*                 <!-- /input-group*/
/*             </li>-->*/
/* */
/*             <li {% if app.request.attributes.get('_route') starts with 'point_web_admin_homepage' %}class="active"{% endif %}>*/
/*                 <a href="{{ path('point_web_admin_homepage') }}"><i class="fa fa-home fa-fw"></i> {{ "Homepage" }}</a>*/
/*             </li>*/
/*             <li {% if app.request.attributes.get('_route') starts with 'admin_menu' %}class="active"{% endif %}>*/
/*                 <a href="{{ path('admin_menu') }}"><i class="fa fa-sitemap fa-fw"></i> {{ "Menu" }}</a>*/
/*             </li>*/
/*             <li class="{% if app.request.attributes.get('_route') starts with 'admin_product' or app.request.attributes.get('_route') starts with 'admin_category' %}active{% endif %}">*/
/*                 <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> {{ "Produits" }} <span class="fa arrow"></span></a>*/
/*                 <ul class="nav nav-second-level">*/
/*                     <li {% if app.request.attributes.get('_route') starts with 'admin_product' %}class="active"{% endif %}><a*/
/*                                 href="{{ path('admin_product') }}"><i class="fa fa-shopping-cart fa-fw"></i> {{ "Produits" }}</a></li>*/
/*                     <li {% if app.request.attributes.get('_route') starts with 'admin_category' %}class="active"{% endif %}><a*/
/*                                 href="{{ path('admin_category') }}"><i class="fa fa-shopping-cart fa-fw"></i> {{ "Catégories" }}</a></li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/*             <li {% if app.request.attributes.get('_route') starts with 'admin_news' %}class="active"{% endif %}>*/
/*                 <a href="{{ path('admin_news') }}"><i class="fa fa-newspaper-o fa-fw"></i> {{ "News" }}</a>*/
/*             </li>*/
/*             <li {% if app.request.attributes.get('_route') starts with 'admin_partner' %}class="active"{% endif %}>*/
/*                 <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> {{ "Partenaires" }} <span class="fa arrow"></span></a>*/
/*                 <ul class="nav nav-second-level">*/
/*                     <li {% if app.request.attributes.get('_route') starts with 'admin_partner' %}class="active"{% endif %}><a*/
/*                                 href="{{ path('admin_partner') }}"><i class="fa fa-graduation-cap fa-fw"></i> {{ "Partenaires" }}</a></li>*/
/*                     <li {% if app.request.attributes.get('_route') starts with 'admin_partner_category' %}class="active"{% endif %}><a*/
/*                                 href="{{ path('admin_partner_category') }}"><i class="fa fa-graduation-cap fa-fw"></i> {{ "Catégories" }}</a></li>*/
/*                 </ul>*/
/* */
/* */
/*             </li>*/
/*             <li {% if app.request.attributes.get('_route') starts with 'admin_guestbook' %}class="active"{% endif %}>*/
/*                 <a href="{{ path('admin_guestbook') }}"><i class="fa fa-book fa-fw"></i> {{ "Livre d'or" }}</a>*/
/*             </li>*/
/*             <li {% if app.request.attributes.get('_route') starts with 'admin_faq' %}class="active"{% endif %}>*/
/*                 <a href="{{ path('admin_faq') }}"><i class="fa fa-question-circle fa-fw"></i> {{ "F.A.Q" }}</a>*/
/*             </li>*/
/*             <li {% if app.request.attributes.get('_route') starts with 'admin_gallery' %}class="active"{% endif %}>*/
/*                 <a href="{{ path('admin_gallery') }}"><i class="fa fa-photo fa-fw"></i> {{ "Galeries" }}</a>*/
/*             </li>*/
/*             <li {% if app.request.attributes.get('_route') starts with 'admin_folder' %}class="active"{% endif %}>*/
/*                 <a href="{{ path('admin_folder') }}"><i class="fa fa-folder fa-fw"></i> {{ "Gestion documentaire" }}</a>*/
/*             </li>*/
/*             <li {% if app.request.attributes.get('_route') starts with 'admin_contact' %}class="active"{% endif %}>*/
/*                 <a href="{{ path('admin_contact') }}"><i class="fa fa-comments-o fa-fw"></i> {{ "Contact" }}</a>*/
/*             </li>*/
/*             <li {% if app.request.attributes.get('_route') starts with 'admin_user' %}class="active"{% endif %}>*/
/*                 <a href="{{ path('admin_user') }}"><i class="fa fa-group fa-fw"></i> {{ "Utilisateurs" }}</a>*/
/*             </li>*/
/* */
/* */
/* */
/* */
/*             <!-- EXEMPLE MENU 3 NIVEAUX*/
/*             <li>*/
/*                 <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>*/
/*                 <ul class="nav nav-second-level">*/
/*                     <li>*/
/*                         <a href="#">Second Level Item</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">Third Level <span class="fa arrow"></span></a>*/
/*                         <ul class="nav nav-third-level">*/
/*                             <li>*/
/*                                 <a href="#">Third Level Item</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <!-- /.nav-third-level*/
/*                     </li>*/
/*                 </ul>*/
/*                 <!-- /.nav-second-level*/
/*             </li>*/
/*             -->*/
/* */
/*         </ul>*/
/*     </div>*/
/*     <!-- /.sidebar-collapse -->*/
/* </div>*/
/* <!-- /.navbar-static-side -->*/
