<?php

/* PointWebAdminBundle::_menuleft_admin.html.twig */
class __TwigTemplate_f581b0f73557e32c20341c480e3d19d7f00fa07c9b75cb5adcb30db5030a2388 extends Twig_Template
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
        $__internal_3435187ac73d319a24790b2519cf9c891ce50a90b3bb785d7a9303e58eedbca7 = $this->env->getExtension("native_profiler");
        $__internal_3435187ac73d319a24790b2519cf9c891ce50a90b3bb785d7a9303e58eedbca7->enter($__internal_3435187ac73d319a24790b2519cf9c891ce50a90b3bb785d7a9303e58eedbca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::_menuleft_admin.html.twig"));

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
        if ((is_string($__internal_5d69af7dbbe53bcde2ffeb14f15a6939cbbf61e2a78412446e8665f1f5a8b1e6 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_76fecb7610680a5bf55fce5304cc8f2a8d2e0a716f5f3edb102ace0dfe74d18b = "point_web_admin_homepage") && ('' === $__internal_76fecb7610680a5bf55fce5304cc8f2a8d2e0a716f5f3edb102ace0dfe74d18b || 0 === strpos($__internal_5d69af7dbbe53bcde2ffeb14f15a6939cbbf61e2a78412446e8665f1f5a8b1e6, $__internal_76fecb7610680a5bf55fce5304cc8f2a8d2e0a716f5f3edb102ace0dfe74d18b)))) {
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
        if ((is_string($__internal_58a9893fd58fdbdca126b2b9f6898c2e7ebc306732f79749ca58f07915b866eb = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d4caa46a27355b849a27c5a40c04da728edca55153f461f1e92c7221d8bff59a = "admin_menu") && ('' === $__internal_d4caa46a27355b849a27c5a40c04da728edca55153f461f1e92c7221d8bff59a || 0 === strpos($__internal_58a9893fd58fdbdca126b2b9f6898c2e7ebc306732f79749ca58f07915b866eb, $__internal_d4caa46a27355b849a27c5a40c04da728edca55153f461f1e92c7221d8bff59a)))) {
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
        if (((is_string($__internal_ebe1417ae718f4ca5e39a9e2860fc78338f10cdc65de1f95f7af564d87d32ee3 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_36aff3d1a5659ac4ce829ed15ebbc87e7b2b36872b80174044ee12393c176f24 = "admin_product") && ('' === $__internal_36aff3d1a5659ac4ce829ed15ebbc87e7b2b36872b80174044ee12393c176f24 || 0 === strpos($__internal_ebe1417ae718f4ca5e39a9e2860fc78338f10cdc65de1f95f7af564d87d32ee3, $__internal_36aff3d1a5659ac4ce829ed15ebbc87e7b2b36872b80174044ee12393c176f24))) || (is_string($__internal_6e71f923b68b74bb18e195a1fe4025fdda48ae5f95c2b6702886fd056231aa41 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_988b286b7cc1b2fe8b6b09ed895b0f8350eab33b072df04177eb41271fa75805 = "admin_category") && ('' === $__internal_988b286b7cc1b2fe8b6b09ed895b0f8350eab33b072df04177eb41271fa75805 || 0 === strpos($__internal_6e71f923b68b74bb18e195a1fe4025fdda48ae5f95c2b6702886fd056231aa41, $__internal_988b286b7cc1b2fe8b6b09ed895b0f8350eab33b072df04177eb41271fa75805))))) {
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
        if ((is_string($__internal_aad2d297fac93bb9ee1571a677c36860af725a05e9df561e440428967f580388 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5bdc5f7c349ff3c00d94c00ae8cc80fb7e17d7214de6bdc80a79236fd52e1d1a = "admin_product") && ('' === $__internal_5bdc5f7c349ff3c00d94c00ae8cc80fb7e17d7214de6bdc80a79236fd52e1d1a || 0 === strpos($__internal_aad2d297fac93bb9ee1571a677c36860af725a05e9df561e440428967f580388, $__internal_5bdc5f7c349ff3c00d94c00ae8cc80fb7e17d7214de6bdc80a79236fd52e1d1a)))) {
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
        if ((is_string($__internal_a76972cc4289bbf05b049b0122f41a9455f22ab059a2ba9b932416e7c6c3f0f8 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_8aadf1ebd60f00bcab279cce1d71818ef5182d531736950907a5a1f9ccdbae17 = "admin_category") && ('' === $__internal_8aadf1ebd60f00bcab279cce1d71818ef5182d531736950907a5a1f9ccdbae17 || 0 === strpos($__internal_a76972cc4289bbf05b049b0122f41a9455f22ab059a2ba9b932416e7c6c3f0f8, $__internal_8aadf1ebd60f00bcab279cce1d71818ef5182d531736950907a5a1f9ccdbae17)))) {
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
        if ((is_string($__internal_2993eea08cf621c66a0843e27daeaedc1984129abf0957448ae54f7f71b34e9f = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_fe81a377bcb034a75427e0b74fc70133cc2c32e73f5d0eee6e06aa77887d23a2 = "admin_news") && ('' === $__internal_fe81a377bcb034a75427e0b74fc70133cc2c32e73f5d0eee6e06aa77887d23a2 || 0 === strpos($__internal_2993eea08cf621c66a0843e27daeaedc1984129abf0957448ae54f7f71b34e9f, $__internal_fe81a377bcb034a75427e0b74fc70133cc2c32e73f5d0eee6e06aa77887d23a2)))) {
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
        if ((is_string($__internal_4784dd3937a63c137a12f3dbe390c992d47fd3c370d9b318d36093172724c57c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c3229755f9c00b94ffc2c43744e480f16c72ef39e24d0632b9726471250f0cd3 = "admin_partner") && ('' === $__internal_c3229755f9c00b94ffc2c43744e480f16c72ef39e24d0632b9726471250f0cd3 || 0 === strpos($__internal_4784dd3937a63c137a12f3dbe390c992d47fd3c370d9b318d36093172724c57c, $__internal_c3229755f9c00b94ffc2c43744e480f16c72ef39e24d0632b9726471250f0cd3)))) {
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
        if ((is_string($__internal_298d3ca81e8513b2799dd7eae4e90521d74fae6d58e112bfb556edc607acea12 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_41280b14cfb549f622af4a3ca88955c3d30308c104f88bfdff7ad4c5d1c440a4 = "admin_partner") && ('' === $__internal_41280b14cfb549f622af4a3ca88955c3d30308c104f88bfdff7ad4c5d1c440a4 || 0 === strpos($__internal_298d3ca81e8513b2799dd7eae4e90521d74fae6d58e112bfb556edc607acea12, $__internal_41280b14cfb549f622af4a3ca88955c3d30308c104f88bfdff7ad4c5d1c440a4)))) {
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
        if ((is_string($__internal_d3367c5dec0b550cb8435e0d701912dc2994b1d0f1d927111809ec51360e5758 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_8b38f53d8926b4bf7227ee0ebd671e66038df24be282a49ed39d559b92a762f5 = "admin_partner_category") && ('' === $__internal_8b38f53d8926b4bf7227ee0ebd671e66038df24be282a49ed39d559b92a762f5 || 0 === strpos($__internal_d3367c5dec0b550cb8435e0d701912dc2994b1d0f1d927111809ec51360e5758, $__internal_8b38f53d8926b4bf7227ee0ebd671e66038df24be282a49ed39d559b92a762f5)))) {
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
        if ((is_string($__internal_aab94d21214e229ee3b00c75a6c6b2c4f572f6aeebc52ce03eaef857f6fc7c36 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_346d2019bf50fdccb11248a838aaa833a01eb408097d14d25830e65336fd8069 = "admin_guestbook") && ('' === $__internal_346d2019bf50fdccb11248a838aaa833a01eb408097d14d25830e65336fd8069 || 0 === strpos($__internal_aab94d21214e229ee3b00c75a6c6b2c4f572f6aeebc52ce03eaef857f6fc7c36, $__internal_346d2019bf50fdccb11248a838aaa833a01eb408097d14d25830e65336fd8069)))) {
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
        if ((is_string($__internal_0f56baf4a8caf8b2f29e91219c6c186f1cc94af7df74ca34680b5cc5fce8e1d3 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a984b339c0bf64ceea95b707f366355c7581211f0dc16bfe72201fd74ae441eb = "admin_faq") && ('' === $__internal_a984b339c0bf64ceea95b707f366355c7581211f0dc16bfe72201fd74ae441eb || 0 === strpos($__internal_0f56baf4a8caf8b2f29e91219c6c186f1cc94af7df74ca34680b5cc5fce8e1d3, $__internal_a984b339c0bf64ceea95b707f366355c7581211f0dc16bfe72201fd74ae441eb)))) {
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
        if ((is_string($__internal_6c575106db3dd628cd9aa7d56c75b5984c1452176602fc64120ca79b9fc84f90 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f3583c3dc4e0dad7b881a2454b8a69fa16b5d38375ab75e14f7108fd8bb87d7a = "admin_gallery") && ('' === $__internal_f3583c3dc4e0dad7b881a2454b8a69fa16b5d38375ab75e14f7108fd8bb87d7a || 0 === strpos($__internal_6c575106db3dd628cd9aa7d56c75b5984c1452176602fc64120ca79b9fc84f90, $__internal_f3583c3dc4e0dad7b881a2454b8a69fa16b5d38375ab75e14f7108fd8bb87d7a)))) {
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
        if ((is_string($__internal_b2cbc46fc0c95836c56766fd4c6b2e61ea0d8ba88127d98fbafe1e79bb8a0760 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e3be42ff60a92e72af1b5ef7e878549e26b6d11006fad68084e5220240e378c4 = "admin_folder") && ('' === $__internal_e3be42ff60a92e72af1b5ef7e878549e26b6d11006fad68084e5220240e378c4 || 0 === strpos($__internal_b2cbc46fc0c95836c56766fd4c6b2e61ea0d8ba88127d98fbafe1e79bb8a0760, $__internal_e3be42ff60a92e72af1b5ef7e878549e26b6d11006fad68084e5220240e378c4)))) {
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
        if ((is_string($__internal_bdeea0f9f3d12e2085e68ecf4f8572af88ce9a1adc4c0fbdeec0d8d22260d414 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_2da69be8ea5e2437f4e1598bdec4a9d13de2795e6b83227dc1b3834a81277c5a = "admin_contact") && ('' === $__internal_2da69be8ea5e2437f4e1598bdec4a9d13de2795e6b83227dc1b3834a81277c5a || 0 === strpos($__internal_bdeea0f9f3d12e2085e68ecf4f8572af88ce9a1adc4c0fbdeec0d8d22260d414, $__internal_2da69be8ea5e2437f4e1598bdec4a9d13de2795e6b83227dc1b3834a81277c5a)))) {
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
        if ((is_string($__internal_38e4fd619221978be39408bd2437c2fe07998fe9415342e77cd3dc09ad827553 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_2be72d94b1046b47a1c47e4342c35ef1e7d26aa08fcf95cd4f6523d15c8d3b4a = "admin_user") && ('' === $__internal_2be72d94b1046b47a1c47e4342c35ef1e7d26aa08fcf95cd4f6523d15c8d3b4a || 0 === strpos($__internal_38e4fd619221978be39408bd2437c2fe07998fe9415342e77cd3dc09ad827553, $__internal_2be72d94b1046b47a1c47e4342c35ef1e7d26aa08fcf95cd4f6523d15c8d3b4a)))) {
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
        if ((is_string($__internal_ed5358f69a300f946199c305824f4fb807a9353cac61be3b3418c508b91d51ed = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_ee469dc979ed15e18782f215b55a069ed682aefee8ec8baff6df3247a9369001 = "admin_ecommerce") && ('' === $__internal_ee469dc979ed15e18782f215b55a069ed682aefee8ec8baff6df3247a9369001 || 0 === strpos($__internal_ed5358f69a300f946199c305824f4fb807a9353cac61be3b3418c508b91d51ed, $__internal_ee469dc979ed15e18782f215b55a069ed682aefee8ec8baff6df3247a9369001)))) {
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
        
        $__internal_3435187ac73d319a24790b2519cf9c891ce50a90b3bb785d7a9303e58eedbca7->leave($__internal_3435187ac73d319a24790b2519cf9c891ce50a90b3bb785d7a9303e58eedbca7_prof);

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
        return array (  239 => 65,  233 => 64,  226 => 62,  220 => 61,  213 => 59,  207 => 58,  200 => 56,  194 => 55,  187 => 53,  181 => 52,  174 => 50,  168 => 49,  161 => 47,  155 => 46,  145 => 41,  139 => 40,  133 => 39,  127 => 38,  122 => 36,  116 => 35,  109 => 33,  103 => 32,  94 => 28,  88 => 27,  82 => 26,  76 => 25,  71 => 23,  65 => 22,  58 => 20,  52 => 19,  45 => 17,  39 => 16,  22 => 1,);
    }
}
