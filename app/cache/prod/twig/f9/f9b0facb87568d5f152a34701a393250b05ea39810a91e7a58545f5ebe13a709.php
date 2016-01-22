<?php

/* PointWebAdminBundle::menu_admin.html.twig */
class __TwigTemplate_ce21b0645a79d54bacb5b717106e6658b8f66a0dfcab9c131f283793681a842c extends Twig_Template
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
        $__internal_32561de8fdaee5342f582c967207ef25268628ab92bef1a47bfa4d08cd8852df = $this->env->getExtension("native_profiler");
        $__internal_32561de8fdaee5342f582c967207ef25268628ab92bef1a47bfa4d08cd8852df->enter($__internal_32561de8fdaee5342f582c967207ef25268628ab92bef1a47bfa4d08cd8852df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::menu_admin.html.twig"));

        // line 1
        echo "<li ";
        if ((is_string($__internal_27718696d3f39a9f171d0062abc6f28f4182683f7c7b39560d32079f309ae62a = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_343a8cf51a265f4ce2eb34451516c831478526d5b071fa8a5d0f89db5d268be1 = "point_web_admin_homepage") && ('' === $__internal_343a8cf51a265f4ce2eb34451516c831478526d5b071fa8a5d0f89db5d268be1 || 0 === strpos($__internal_27718696d3f39a9f171d0062abc6f28f4182683f7c7b39560d32079f309ae62a, $__internal_343a8cf51a265f4ce2eb34451516c831478526d5b071fa8a5d0f89db5d268be1)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("point_web_admin_homepage");
        echo "\"><i class=\"fa fa-home fa-fw\"></i> ";
        echo "Dashboard";
        echo "</a>
</li>
<li ";
        // line 4
        if ((is_string($__internal_020f1b388dc99aab7f625db020418d1638c78a395c50c716f196ae04bfd7bb17 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e00748f15252202f2ce52b02b95a7237efe9c0def4b929c81decf6a5b1d267b3 = "admin_menu") && ('' === $__internal_e00748f15252202f2ce52b02b95a7237efe9c0def4b929c81decf6a5b1d267b3 || 0 === strpos($__internal_020f1b388dc99aab7f625db020418d1638c78a395c50c716f196ae04bfd7bb17, $__internal_e00748f15252202f2ce52b02b95a7237efe9c0def4b929c81decf6a5b1d267b3)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_menu");
        echo "\"><i class=\"fa fa-sitemap fa-fw\"></i> ";
        echo "Menu";
        echo "</a>
</li>
";
        // line 7
        if ($this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "menuPage", array())) {
            // line 8
            echo "<li ";
            if ((is_string($__internal_424c223ef0ed45bafc2aa1b2d8b93c2420a4d0aee9b6aa6994a5a4e8e4ed24ac = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_04dbb607c3ef917073f8059402601da1469f2d0ccba7e2171d4ccae1ac255ee2 = "admin_page") && ('' === $__internal_04dbb607c3ef917073f8059402601da1469f2d0ccba7e2171d4ccae1ac255ee2 || 0 === strpos($__internal_424c223ef0ed45bafc2aa1b2d8b93c2420a4d0aee9b6aa6994a5a4e8e4ed24ac, $__internal_04dbb607c3ef917073f8059402601da1469f2d0ccba7e2171d4ccae1ac255ee2)))) {
                echo "class=\"active\"";
            }
            echo ">
    <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("admin_page");
            echo "\"><i class=\"fa fa-file-o fa-fw\"></i> ";
            echo "Pages";
            echo "</a>
</li>
";
        }
        // line 12
        if ($this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "menuProduct", array())) {
            // line 13
            echo "<li class=\"";
            if (((is_string($__internal_f4a5e2abb8e60fcb759ab5349923b8d80e04e143a5325cc5e40adefc0f98e395 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_95e8ba0ceca028bf81d934baad47155d86a9a366775ed59936ece76d8e99c448 = "admin_product") && ('' === $__internal_95e8ba0ceca028bf81d934baad47155d86a9a366775ed59936ece76d8e99c448 || 0 === strpos($__internal_f4a5e2abb8e60fcb759ab5349923b8d80e04e143a5325cc5e40adefc0f98e395, $__internal_95e8ba0ceca028bf81d934baad47155d86a9a366775ed59936ece76d8e99c448))) || (is_string($__internal_0a5ca41c2fe174926f0da13863ed2f5a39f5e74cf4c05fe6b778d282307a1ef3 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6e0eb7f01f8a17e4289b779437f03a95587da5c1be7da1b6df9f59f0bf409566 = "admin_category") && ('' === $__internal_6e0eb7f01f8a17e4289b779437f03a95587da5c1be7da1b6df9f59f0bf409566 || 0 === strpos($__internal_0a5ca41c2fe174926f0da13863ed2f5a39f5e74cf4c05fe6b778d282307a1ef3, $__internal_6e0eb7f01f8a17e4289b779437f03a95587da5c1be7da1b6df9f59f0bf409566))))) {
                echo "active";
            }
            echo "\">
    <a href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> ";
            // line 14
            echo "Produits";
            echo " <span class=\"fa arrow\"></span></a>
    <ul class=\"nav nav-second-level\">
        <li ";
            // line 16
            if ((is_string($__internal_82dbbf4f285f4ec1431dc0a80cee4d5d6c91d10fa77bbc78d646843689162798 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b9fd49b90ec8a8605efcd327daeab489ef37aeef6044a6840d436393969b8c33 = "admin_product") && ('' === $__internal_b9fd49b90ec8a8605efcd327daeab489ef37aeef6044a6840d436393969b8c33 || 0 === strpos($__internal_82dbbf4f285f4ec1431dc0a80cee4d5d6c91d10fa77bbc78d646843689162798, $__internal_b9fd49b90ec8a8605efcd327daeab489ef37aeef6044a6840d436393969b8c33)))) {
                echo "class=\"active\"";
            }
            echo "><a
                    href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("admin_product");
            echo "\"><i class=\"fa fa-shopping-cart fa-fw\"></i> ";
            echo "Produits";
            echo "</a></li>
        <li ";
            // line 18
            if ((is_string($__internal_39b5d156bc528f025c6668fc9361a544ba383b499b811d33d3e6e3d7e1c715c8 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_69eda3df5da7927764f846176c5868e3858cb9ff3b952b652b238f499adb7e44 = "admin_product_category") && ('' === $__internal_69eda3df5da7927764f846176c5868e3858cb9ff3b952b652b238f499adb7e44 || 0 === strpos($__internal_39b5d156bc528f025c6668fc9361a544ba383b499b811d33d3e6e3d7e1c715c8, $__internal_69eda3df5da7927764f846176c5868e3858cb9ff3b952b652b238f499adb7e44)))) {
                echo "class=\"active\"";
            }
            echo "><a
                    href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("admin_product_category");
            echo "\"><i class=\"fa fa-shopping-cart fa-fw\"></i> ";
            echo "Catégories";
            echo "</a></li>
    </ul>
</li>
";
        }
        // line 23
        if ($this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "menuNews", array())) {
            // line 24
            echo "<li ";
            if ((is_string($__internal_dc5c199fedbfe845fe37e126de66ac6a2db717118061fd978442aa652dc7ff58 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_ab79c0ba6137a80740a0cba5e93e7304b0a7a08b2e73d15d26083bf23eb4e8e4 = "admin_news") && ('' === $__internal_ab79c0ba6137a80740a0cba5e93e7304b0a7a08b2e73d15d26083bf23eb4e8e4 || 0 === strpos($__internal_dc5c199fedbfe845fe37e126de66ac6a2db717118061fd978442aa652dc7ff58, $__internal_ab79c0ba6137a80740a0cba5e93e7304b0a7a08b2e73d15d26083bf23eb4e8e4)))) {
                echo "class=\"active\"";
            }
            echo ">
    <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("admin_news");
            echo "\"><i class=\"fa fa-newspaper-o fa-fw\"></i> ";
            echo "News";
            echo "</a>
</li>
";
        }
        // line 28
        if ($this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "menuPartner", array())) {
            // line 29
            echo "<li ";
            if ((is_string($__internal_4a505f1ab4d21cd7511dab0e6da7d4c9c1b37b2b77c7b9f05cdf06c3b95dac07 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_0f6f3af88acf66c96a0f27b0352163d61c0e0ccc571ffba48940acb6a904413d = "admin_partner") && ('' === $__internal_0f6f3af88acf66c96a0f27b0352163d61c0e0ccc571ffba48940acb6a904413d || 0 === strpos($__internal_4a505f1ab4d21cd7511dab0e6da7d4c9c1b37b2b77c7b9f05cdf06c3b95dac07, $__internal_0f6f3af88acf66c96a0f27b0352163d61c0e0ccc571ffba48940acb6a904413d)))) {
                echo "class=\"active\"";
            }
            echo ">
    <a href=\"#\"><i class=\"fa fa-graduation-cap fa-fw\"></i> ";
            // line 30
            echo "Partenaires";
            echo " <span class=\"fa arrow\"></span></a>
    <ul class=\"nav nav-second-level\">
        <li ";
            // line 32
            if ((is_string($__internal_f998a6956370d07ae1a3159e97721ed3d012298858bbff8b7b7e3988076fe247 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_848593a363949afb550f6cd21221b8034bebee030edbad94186c73542628cfb0 = "admin_partner") && ('' === $__internal_848593a363949afb550f6cd21221b8034bebee030edbad94186c73542628cfb0 || 0 === strpos($__internal_f998a6956370d07ae1a3159e97721ed3d012298858bbff8b7b7e3988076fe247, $__internal_848593a363949afb550f6cd21221b8034bebee030edbad94186c73542628cfb0)))) {
                echo "class=\"active\"";
            }
            echo "><a
                    href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("admin_partner");
            echo "\"><i class=\"fa fa-graduation-cap fa-fw\"></i> ";
            echo "Partenaires";
            echo "</a></li>
        <li ";
            // line 34
            if ((is_string($__internal_a2a83e75c289e78fd7144b4d1237dee6602d227924703ffe71c2d7b855d89ec1 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5c217ca27a306a6e5e81dc11a27bdfebfe8fe46b04a8fa4a2797989a1269c68d = "admin_partner_category") && ('' === $__internal_5c217ca27a306a6e5e81dc11a27bdfebfe8fe46b04a8fa4a2797989a1269c68d || 0 === strpos($__internal_a2a83e75c289e78fd7144b4d1237dee6602d227924703ffe71c2d7b855d89ec1, $__internal_5c217ca27a306a6e5e81dc11a27bdfebfe8fe46b04a8fa4a2797989a1269c68d)))) {
                echo "class=\"active\"";
            }
            echo "><a
                    href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("admin_partner_category");
            echo "\"><i class=\"fa fa-graduation-cap fa-fw\"></i> ";
            echo "Catégories";
            echo "</a></li>
    </ul>
</li>
";
        }
        // line 39
        if ($this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "menuGuestBook", array())) {
            // line 40
            echo "<li ";
            if ((is_string($__internal_4eff15d70865c43faf2279d7f639b2596150aace35a5dd81b0b9b68be53b76ef = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_af022a2c11e208e3a15a5308ef60626e03227bee6063c87033fad77e9fc37797 = "admin_guestbook") && ('' === $__internal_af022a2c11e208e3a15a5308ef60626e03227bee6063c87033fad77e9fc37797 || 0 === strpos($__internal_4eff15d70865c43faf2279d7f639b2596150aace35a5dd81b0b9b68be53b76ef, $__internal_af022a2c11e208e3a15a5308ef60626e03227bee6063c87033fad77e9fc37797)))) {
                echo "class=\"active\"";
            }
            echo ">
    <a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("admin_guestbook");
            echo "\"><i class=\"fa fa-book fa-fw\"></i> ";
            echo "Livre d'or";
            echo "</a>
</li>
";
        }
        // line 44
        if ($this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "menuFaq", array())) {
            // line 45
            echo "<li ";
            if ((is_string($__internal_a305cb04f9ded772b2416eb5be802961ab9d7a7d86a48ce61f86c72c7702b708 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b8f1bff25650b00130a1d5af37db4864150f8fd2895bf1e09c6270cae702cc0d = "admin_faq") && ('' === $__internal_b8f1bff25650b00130a1d5af37db4864150f8fd2895bf1e09c6270cae702cc0d || 0 === strpos($__internal_a305cb04f9ded772b2416eb5be802961ab9d7a7d86a48ce61f86c72c7702b708, $__internal_b8f1bff25650b00130a1d5af37db4864150f8fd2895bf1e09c6270cae702cc0d)))) {
                echo "class=\"active\"";
            }
            echo ">
    <a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("admin_faq");
            echo "\"><i class=\"fa fa-question-circle fa-fw\"></i> ";
            echo "F.A.Q";
            echo "</a>
</li>
";
        }
        // line 49
        if ($this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "menuGallery", array())) {
            // line 50
            echo "<li ";
            if ((is_string($__internal_0f7ba1d795db691c988802d651da1fe25800b94f738b7997ee798e4ab908d209 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b2177dca938bf01f7d47fd0dbb3d0d11c14f5676f3e24dd87a4ecbbacc14b77f = "admin_gallery") && ('' === $__internal_b2177dca938bf01f7d47fd0dbb3d0d11c14f5676f3e24dd87a4ecbbacc14b77f || 0 === strpos($__internal_0f7ba1d795db691c988802d651da1fe25800b94f738b7997ee798e4ab908d209, $__internal_b2177dca938bf01f7d47fd0dbb3d0d11c14f5676f3e24dd87a4ecbbacc14b77f)))) {
                echo "class=\"active\"";
            }
            echo ">
    <a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("admin_gallery");
            echo "\"><i class=\"fa fa-photo fa-fw\"></i> ";
            echo "Galeries";
            echo "</a>
</li>
";
        }
        // line 54
        if ($this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "menuMap", array())) {
            // line 55
            echo "<li ";
            if ((is_string($__internal_e7c20d8f4bd0a447f295099a3d682df17ead334cb1110668e661f9f25c725a60 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a9c966f611b51cb71b207bfdd156fc3e02d15d934a969359090db1ecae1cfef1 = "admin_map") && ('' === $__internal_a9c966f611b51cb71b207bfdd156fc3e02d15d934a969359090db1ecae1cfef1 || 0 === strpos($__internal_e7c20d8f4bd0a447f295099a3d682df17ead334cb1110668e661f9f25c725a60, $__internal_a9c966f611b51cb71b207bfdd156fc3e02d15d934a969359090db1ecae1cfef1)))) {
                echo "class=\"active\"";
            }
            echo ">
    <a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("admin_map");
            echo "\"><i class=\"fa fa-map-marker fa-fw\"></i> ";
            echo "Maps Google";
            echo "</a>
</li>
";
        }
        // line 59
        if ($this->getAttribute((isset($context["reglage"]) ? $context["reglage"] : $this->getContext($context, "reglage")), "menuFolder", array())) {
            // line 60
            echo "<li ";
            if ((is_string($__internal_474cd4e04caad2176c511c497deaf9ebeb76f39f5047ba3e3338c7372733a7c3 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5af22bd6ab5423c953bf11e15da515a406ecfe78041218bf8a71ca785a60bcae = "admin_folder") && ('' === $__internal_5af22bd6ab5423c953bf11e15da515a406ecfe78041218bf8a71ca785a60bcae || 0 === strpos($__internal_474cd4e04caad2176c511c497deaf9ebeb76f39f5047ba3e3338c7372733a7c3, $__internal_5af22bd6ab5423c953bf11e15da515a406ecfe78041218bf8a71ca785a60bcae)))) {
                echo "class=\"active\"";
            }
            echo ">
    <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("admin_folder");
            echo "\"><i class=\"fa fa-folder fa-fw\"></i> ";
            echo "Gestion documentaire";
            echo "</a>
</li>
";
        }
        // line 64
        echo "<li ";
        if ((is_string($__internal_2c32e74cdf7093e8524ae35368eebdf041bae993ebe41191d8940b7978753545 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_133299943a0ab2d80bc5f688b32e128161fec74d3388c9fb095580688c9a8122 = "admin_contact") && ('' === $__internal_133299943a0ab2d80bc5f688b32e128161fec74d3388c9fb095580688c9a8122 || 0 === strpos($__internal_2c32e74cdf7093e8524ae35368eebdf041bae993ebe41191d8940b7978753545, $__internal_133299943a0ab2d80bc5f688b32e128161fec74d3388c9fb095580688c9a8122)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("admin_contact");
        echo "\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
        echo "Contact";
        echo "</a>
</li>

<li ";
        // line 68
        if ((is_string($__internal_a601720aaee259bdbabd68da314c01ea82379d989d87b9e0e42908ad85a57202 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7d3800e7848d411481758a81c0e514770c2a059fc1af3d51a5829fdeddaed3cd = "admin_user") && ('' === $__internal_7d3800e7848d411481758a81c0e514770c2a059fc1af3d51a5829fdeddaed3cd || 0 === strpos($__internal_a601720aaee259bdbabd68da314c01ea82379d989d87b9e0e42908ad85a57202, $__internal_7d3800e7848d411481758a81c0e514770c2a059fc1af3d51a5829fdeddaed3cd)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\"><i class=\"fa fa-group fa-fw\"></i> ";
        echo "Utilisateurs";
        echo "</a>
</li>
";
        
        $__internal_32561de8fdaee5342f582c967207ef25268628ab92bef1a47bfa4d08cd8852df->leave($__internal_32561de8fdaee5342f582c967207ef25268628ab92bef1a47bfa4d08cd8852df_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::menu_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 69,  265 => 68,  257 => 65,  250 => 64,  242 => 61,  235 => 60,  233 => 59,  225 => 56,  218 => 55,  216 => 54,  208 => 51,  201 => 50,  199 => 49,  191 => 46,  184 => 45,  182 => 44,  174 => 41,  167 => 40,  165 => 39,  156 => 35,  150 => 34,  144 => 33,  138 => 32,  133 => 30,  126 => 29,  124 => 28,  116 => 25,  109 => 24,  107 => 23,  98 => 19,  92 => 18,  86 => 17,  80 => 16,  75 => 14,  68 => 13,  66 => 12,  58 => 9,  51 => 8,  49 => 7,  42 => 5,  36 => 4,  29 => 2,  22 => 1,);
    }
}
/* <li {% if app.request.attributes.get('_route') starts with 'point_web_admin_homepage' %}class="active"{% endif %}>*/
/*     <a href="{{ path('point_web_admin_homepage') }}"><i class="fa fa-home fa-fw"></i> {{ "Dashboard" }}</a>*/
/* </li>*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_menu' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_menu') }}"><i class="fa fa-sitemap fa-fw"></i> {{ "Menu" }}</a>*/
/* </li>*/
/* {% if reglage.menuPage %}*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_page' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_page') }}"><i class="fa fa-file-o fa-fw"></i> {{ "Pages" }}</a>*/
/* </li>*/
/* {% endif %}*/
/* {% if reglage.menuProduct %}*/
/* <li class="{% if app.request.attributes.get('_route') starts with 'admin_product' or app.request.attributes.get('_route') starts with 'admin_category' %}active{% endif %}">*/
/*     <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> {{ "Produits" }} <span class="fa arrow"></span></a>*/
/*     <ul class="nav nav-second-level">*/
/*         <li {% if app.request.attributes.get('_route') starts with 'admin_product' %}class="active"{% endif %}><a*/
/*                     href="{{ path('admin_product') }}"><i class="fa fa-shopping-cart fa-fw"></i> {{ "Produits" }}</a></li>*/
/*         <li {% if app.request.attributes.get('_route') starts with 'admin_product_category' %}class="active"{% endif %}><a*/
/*                     href="{{ path('admin_product_category') }}"><i class="fa fa-shopping-cart fa-fw"></i> {{ "Catégories" }}</a></li>*/
/*     </ul>*/
/* </li>*/
/* {% endif %}*/
/* {% if reglage.menuNews %}*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_news' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_news') }}"><i class="fa fa-newspaper-o fa-fw"></i> {{ "News" }}</a>*/
/* </li>*/
/* {% endif %}*/
/* {% if reglage.menuPartner %}*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_partner' %}class="active"{% endif %}>*/
/*     <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> {{ "Partenaires" }} <span class="fa arrow"></span></a>*/
/*     <ul class="nav nav-second-level">*/
/*         <li {% if app.request.attributes.get('_route') starts with 'admin_partner' %}class="active"{% endif %}><a*/
/*                     href="{{ path('admin_partner') }}"><i class="fa fa-graduation-cap fa-fw"></i> {{ "Partenaires" }}</a></li>*/
/*         <li {% if app.request.attributes.get('_route') starts with 'admin_partner_category' %}class="active"{% endif %}><a*/
/*                     href="{{ path('admin_partner_category') }}"><i class="fa fa-graduation-cap fa-fw"></i> {{ "Catégories" }}</a></li>*/
/*     </ul>*/
/* </li>*/
/* {% endif %}*/
/* {% if reglage.menuGuestBook %}*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_guestbook' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_guestbook') }}"><i class="fa fa-book fa-fw"></i> {{ "Livre d'or" }}</a>*/
/* </li>*/
/* {% endif %}*/
/* {% if reglage.menuFaq %}*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_faq' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_faq') }}"><i class="fa fa-question-circle fa-fw"></i> {{ "F.A.Q" }}</a>*/
/* </li>*/
/* {% endif %}*/
/* {% if reglage.menuGallery %}*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_gallery' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_gallery') }}"><i class="fa fa-photo fa-fw"></i> {{ "Galeries" }}</a>*/
/* </li>*/
/* {% endif %}*/
/* {% if reglage.menuMap %}*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_map' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_map') }}"><i class="fa fa-map-marker fa-fw"></i> {{ "Maps Google" }}</a>*/
/* </li>*/
/* {% endif %}*/
/* {% if reglage.menuFolder %}*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_folder' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_folder') }}"><i class="fa fa-folder fa-fw"></i> {{ "Gestion documentaire" }}</a>*/
/* </li>*/
/* {% endif %}*/
/* <li {% if app.request.attributes.get('_route') starts with 'admin_contact' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_contact') }}"><i class="fa fa-comments-o fa-fw"></i> {{ "Contact" }}</a>*/
/* </li>*/
/* */
/* <li {% if app.request.attributes.get('_route') starts with 'admin_user' %}class="active"{% endif %}>*/
/*     <a href="{{ path('admin_user') }}"><i class="fa fa-group fa-fw"></i> {{ "Utilisateurs" }}</a>*/
/* </li>*/
/* */
