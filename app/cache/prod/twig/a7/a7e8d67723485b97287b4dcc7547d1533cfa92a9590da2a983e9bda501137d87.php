<?php

/* PointWebAdminBundle::_menuleft_admin.html.twig */
class __TwigTemplate_6ebc9b3dcfa361b8e1a52161761d5c461b4b114aa71c88a02ff167b50c7f4c53 extends Twig_Template
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
        if ((is_string($__internal_22fc44b4ed4732840e67a4f3dcb1f62013ef118ffcea9a35ddf175684e464935 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_031be10b26a284953fe3e0b59ff892cd1ce238a2c7a5b21e6715e37a32b25e87 = "point_web_admin_homepage") && ('' === $__internal_031be10b26a284953fe3e0b59ff892cd1ce238a2c7a5b21e6715e37a32b25e87 || 0 === strpos($__internal_22fc44b4ed4732840e67a4f3dcb1f62013ef118ffcea9a35ddf175684e464935, $__internal_031be10b26a284953fe3e0b59ff892cd1ce238a2c7a5b21e6715e37a32b25e87)))) {
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
        if ((is_string($__internal_8f33a1339257c8a4562b1be6360f38ab65c63367f41ff22f4856da4141431517 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_95fadbba89be2dd416fe5a8dad58f57627aff2bc91d7ffd0d8c6d89f4b473e9d = "admin_menu") && ('' === $__internal_95fadbba89be2dd416fe5a8dad58f57627aff2bc91d7ffd0d8c6d89f4b473e9d || 0 === strpos($__internal_8f33a1339257c8a4562b1be6360f38ab65c63367f41ff22f4856da4141431517, $__internal_95fadbba89be2dd416fe5a8dad58f57627aff2bc91d7ffd0d8c6d89f4b473e9d)))) {
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
        if (((is_string($__internal_dcf8ee347f2bff97f40dcdb0e42acbcc1c6ac15564d538d99f273cdd63a49158 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_80aab1d6f98f2eaaa9266abd6f9d07c1e52bd96f3df1b338338a620c5dd488c7 = "admin_product") && ('' === $__internal_80aab1d6f98f2eaaa9266abd6f9d07c1e52bd96f3df1b338338a620c5dd488c7 || 0 === strpos($__internal_dcf8ee347f2bff97f40dcdb0e42acbcc1c6ac15564d538d99f273cdd63a49158, $__internal_80aab1d6f98f2eaaa9266abd6f9d07c1e52bd96f3df1b338338a620c5dd488c7))) || (is_string($__internal_2fd1aaffb2efbe1b777792e2216d80942b5e96c53412c9dfcea3a8e882984c53 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_357cd8ae9985e5fdb5a5fe5a4b915e520d1cda74b972b4a2b7816051f960dd80 = "admin_category") && ('' === $__internal_357cd8ae9985e5fdb5a5fe5a4b915e520d1cda74b972b4a2b7816051f960dd80 || 0 === strpos($__internal_2fd1aaffb2efbe1b777792e2216d80942b5e96c53412c9dfcea3a8e882984c53, $__internal_357cd8ae9985e5fdb5a5fe5a4b915e520d1cda74b972b4a2b7816051f960dd80))))) {
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
        if ((is_string($__internal_33873ef4c8889cd499ccbcd3f2955f64b19e6d70011f1a3d209bb6cbc238725c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7ff4976de146ffdd35da7d78b72e6f525fd323435d3de338f5429bd889416f65 = "admin_product") && ('' === $__internal_7ff4976de146ffdd35da7d78b72e6f525fd323435d3de338f5429bd889416f65 || 0 === strpos($__internal_33873ef4c8889cd499ccbcd3f2955f64b19e6d70011f1a3d209bb6cbc238725c, $__internal_7ff4976de146ffdd35da7d78b72e6f525fd323435d3de338f5429bd889416f65)))) {
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
        if ((is_string($__internal_b2965d75f59caedcf8771f97a1b340fba8566c0e0faf170c210d0b11e07683ef = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_12e69d033c7225ec1ce93061520cc08f27bdcd34c3ca2fbd1a4e2be1c0875c17 = "admin_category") && ('' === $__internal_12e69d033c7225ec1ce93061520cc08f27bdcd34c3ca2fbd1a4e2be1c0875c17 || 0 === strpos($__internal_b2965d75f59caedcf8771f97a1b340fba8566c0e0faf170c210d0b11e07683ef, $__internal_12e69d033c7225ec1ce93061520cc08f27bdcd34c3ca2fbd1a4e2be1c0875c17)))) {
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
        if ((is_string($__internal_ed7354f48d29963b2b111f8962fe34fe18ed1ecc04f7d16549371d126656007c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4b2251d83e72e2371d9d3ed158157b57edab05b421191daf57972119feb44da6 = "admin_news") && ('' === $__internal_4b2251d83e72e2371d9d3ed158157b57edab05b421191daf57972119feb44da6 || 0 === strpos($__internal_ed7354f48d29963b2b111f8962fe34fe18ed1ecc04f7d16549371d126656007c, $__internal_4b2251d83e72e2371d9d3ed158157b57edab05b421191daf57972119feb44da6)))) {
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
        if ((is_string($__internal_2a150744885b131bf11873411b1892a6e4be0625a6b98c7c0f280e7c94891e54 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c8482b1955b7652cee9d70fef26eaa0abe3e979d7eb74bf60e9e9969dab0efb8 = "admin_partner") && ('' === $__internal_c8482b1955b7652cee9d70fef26eaa0abe3e979d7eb74bf60e9e9969dab0efb8 || 0 === strpos($__internal_2a150744885b131bf11873411b1892a6e4be0625a6b98c7c0f280e7c94891e54, $__internal_c8482b1955b7652cee9d70fef26eaa0abe3e979d7eb74bf60e9e9969dab0efb8)))) {
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
        if ((is_string($__internal_819ee31d834e3437c516dcd188b0c589d4be35127138a28029418a61330df459 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_0e449dc691f5651970851288b6ec4e7d280f83c5ac25c440bd12fdabde42e5d4 = "admin_partner") && ('' === $__internal_0e449dc691f5651970851288b6ec4e7d280f83c5ac25c440bd12fdabde42e5d4 || 0 === strpos($__internal_819ee31d834e3437c516dcd188b0c589d4be35127138a28029418a61330df459, $__internal_0e449dc691f5651970851288b6ec4e7d280f83c5ac25c440bd12fdabde42e5d4)))) {
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
        if ((is_string($__internal_44eed7e1cb978b2685b22aa1b3f37074b41478ed4c29f946ed819e2b14b5d3da = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a4373b274d76058841c352d126c22e33629debeca137a56aba522bca4553f158 = "admin_partner_category") && ('' === $__internal_a4373b274d76058841c352d126c22e33629debeca137a56aba522bca4553f158 || 0 === strpos($__internal_44eed7e1cb978b2685b22aa1b3f37074b41478ed4c29f946ed819e2b14b5d3da, $__internal_a4373b274d76058841c352d126c22e33629debeca137a56aba522bca4553f158)))) {
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
        if ((is_string($__internal_20df1781e0ca493bf211e3f9ccbc05737ed5cade994dd2cd5fa148ec99d91cc4 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c478bf12f4ca7fe92ec5cf3588bac8765990375e8f0b88674e62c936793911e7 = "admin_guestbook") && ('' === $__internal_c478bf12f4ca7fe92ec5cf3588bac8765990375e8f0b88674e62c936793911e7 || 0 === strpos($__internal_20df1781e0ca493bf211e3f9ccbc05737ed5cade994dd2cd5fa148ec99d91cc4, $__internal_c478bf12f4ca7fe92ec5cf3588bac8765990375e8f0b88674e62c936793911e7)))) {
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
        if ((is_string($__internal_c6b2caedb8c1935b7427a5270476033b4b4b478b403db09cf01af8cdfc0ca4f4 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_bd64c5c504b5579ed02bd7e2958be2cef7174bc3484f69b53f92c8aa14906294 = "admin_faq") && ('' === $__internal_bd64c5c504b5579ed02bd7e2958be2cef7174bc3484f69b53f92c8aa14906294 || 0 === strpos($__internal_c6b2caedb8c1935b7427a5270476033b4b4b478b403db09cf01af8cdfc0ca4f4, $__internal_bd64c5c504b5579ed02bd7e2958be2cef7174bc3484f69b53f92c8aa14906294)))) {
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
        if ((is_string($__internal_0445f75a9e1c5597da213903cce475e4abac0f88e06b0d1c972b9008084e8780 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_bc061faf77387342b96e3ed5bf08bd9451f03cdc74d922dd9872acaefab5370e = "admin_gallery") && ('' === $__internal_bc061faf77387342b96e3ed5bf08bd9451f03cdc74d922dd9872acaefab5370e || 0 === strpos($__internal_0445f75a9e1c5597da213903cce475e4abac0f88e06b0d1c972b9008084e8780, $__internal_bc061faf77387342b96e3ed5bf08bd9451f03cdc74d922dd9872acaefab5370e)))) {
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
        if ((is_string($__internal_06d167fc60fb42f6ca8403da52db4c13b7d3b688a343cbc60d5608f47fa1086a = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_823b9c0dfb3009f8fffed60454858b7cc8bda70312a934750a752143a73c1e0e = "admin_folder") && ('' === $__internal_823b9c0dfb3009f8fffed60454858b7cc8bda70312a934750a752143a73c1e0e || 0 === strpos($__internal_06d167fc60fb42f6ca8403da52db4c13b7d3b688a343cbc60d5608f47fa1086a, $__internal_823b9c0dfb3009f8fffed60454858b7cc8bda70312a934750a752143a73c1e0e)))) {
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
        if ((is_string($__internal_d95c21b18894339855fa0a53cb5b2993d7fb1575854300c80f610a4131bc2ad0 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c3a52a63fab1e7c03f7fc82f9b9e174301b958c0079b42d97732954fb0108470 = "admin_contact") && ('' === $__internal_c3a52a63fab1e7c03f7fc82f9b9e174301b958c0079b42d97732954fb0108470 || 0 === strpos($__internal_d95c21b18894339855fa0a53cb5b2993d7fb1575854300c80f610a4131bc2ad0, $__internal_c3a52a63fab1e7c03f7fc82f9b9e174301b958c0079b42d97732954fb0108470)))) {
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
        if ((is_string($__internal_eeecd82b5e91fa948a0f23c6409be1a7e56ecce20d9e0ff0b5f6dc72ebcaaba4 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7864c708e4e911d4f2eb01ac5ae60880c773681f2715d506423c8d8b22bb8441 = "admin_user") && ('' === $__internal_7864c708e4e911d4f2eb01ac5ae60880c773681f2715d506423c8d8b22bb8441 || 0 === strpos($__internal_eeecd82b5e91fa948a0f23c6409be1a7e56ecce20d9e0ff0b5f6dc72ebcaaba4, $__internal_7864c708e4e911d4f2eb01ac5ae60880c773681f2715d506423c8d8b22bb8441)))) {
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
            <li ";
        // line 64
        if ((is_string($__internal_0411b6c5737eaf2dfc38d3139f2b58bd77c62bbe5fcca6f00f944933f47e7150 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_0781a1a875db9d0b76d0f4f81444bd231694ca0b0479cc932d19e15c1778bbb5 = "admin_ecommerce") && ('' === $__internal_0781a1a875db9d0b76d0f4f81444bd231694ca0b0479cc932d19e15c1778bbb5 || 0 === strpos($__internal_0411b6c5737eaf2dfc38d3139f2b58bd77c62bbe5fcca6f00f944933f47e7150, $__internal_0781a1a875db9d0b76d0f4f81444bd231694ca0b0479cc932d19e15c1778bbb5)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("admin_ecommerce");
        echo "\"><i class=\"fa fa-credit-card fa-fw\"></i> Gestion du e-commerce</a>
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
        return array (  236 => 65,  230 => 64,  223 => 62,  217 => 61,  210 => 59,  204 => 58,  197 => 56,  191 => 55,  184 => 53,  178 => 52,  171 => 50,  165 => 49,  158 => 47,  152 => 46,  142 => 41,  136 => 40,  130 => 39,  124 => 38,  119 => 36,  113 => 35,  106 => 33,  100 => 32,  91 => 28,  85 => 27,  79 => 26,  73 => 25,  68 => 23,  62 => 22,  55 => 20,  49 => 19,  42 => 17,  36 => 16,  19 => 1,);
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
/*             <li {% if app.request.attributes.get('_route') starts with 'admin_ecommerce' %}class="active"{% endif %}>*/
/*                 <a href="{{ path('admin_ecommerce') }}"><i class="fa fa-credit-card fa-fw"></i> Gestion du e-commerce</a>*/
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
