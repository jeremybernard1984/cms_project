<?php

/* PointWebAdminBundle::menu_admin.html.twig */
class __TwigTemplate_f3b7681667a48c8d111e6688924b98206f35a9c1bb16133d3b7b12e829329d42 extends Twig_Template
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
        $__internal_5d8cb2422b12d18f76da908d321c637fa7484622a51323d66e7bb23961731058 = $this->env->getExtension("native_profiler");
        $__internal_5d8cb2422b12d18f76da908d321c637fa7484622a51323d66e7bb23961731058->enter($__internal_5d8cb2422b12d18f76da908d321c637fa7484622a51323d66e7bb23961731058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::menu_admin.html.twig"));

        // line 1
        echo "<li ";
        if ((is_string($__internal_fa91828095dd5772cbcb4c2ad6530e604b52301f14ded35746d53aa9e6d38729 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_85522be3a40c9ba62b24401ba14f936262b8990fec9a24368e92e1855ad757b1 = "point_web_admin_homepage") && ('' === $__internal_85522be3a40c9ba62b24401ba14f936262b8990fec9a24368e92e1855ad757b1 || 0 === strpos($__internal_fa91828095dd5772cbcb4c2ad6530e604b52301f14ded35746d53aa9e6d38729, $__internal_85522be3a40c9ba62b24401ba14f936262b8990fec9a24368e92e1855ad757b1)))) {
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
        if ((is_string($__internal_293b6371486172f186e0bde718fec82cdbabd417025e6f7f74e61dcbc1c09e6c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6e8ce392aefdfa1f221f66fedc55fa7c62db56345b5ad03e0a57c272f0d663eb = "admin_menu") && ('' === $__internal_6e8ce392aefdfa1f221f66fedc55fa7c62db56345b5ad03e0a57c272f0d663eb || 0 === strpos($__internal_293b6371486172f186e0bde718fec82cdbabd417025e6f7f74e61dcbc1c09e6c, $__internal_6e8ce392aefdfa1f221f66fedc55fa7c62db56345b5ad03e0a57c272f0d663eb)))) {
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
            if ((is_string($__internal_4a5552cc8f861be0a220ac938334c2568dcb518029f9333f442ad3489bcbdc40 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_dee601572e7d98714751f356f75fc59041a97b2c5cb489e22db414890daf122c = "admin_page") && ('' === $__internal_dee601572e7d98714751f356f75fc59041a97b2c5cb489e22db414890daf122c || 0 === strpos($__internal_4a5552cc8f861be0a220ac938334c2568dcb518029f9333f442ad3489bcbdc40, $__internal_dee601572e7d98714751f356f75fc59041a97b2c5cb489e22db414890daf122c)))) {
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
            if (((is_string($__internal_f485e1d1351028748a025fcf17d48649bd10011b9aac37a94b592257f26db61e = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_117d6a1e3c6dcc887864a28dcb44e6a8e4b28c666c6a3983e179c51487b7e188 = "admin_product") && ('' === $__internal_117d6a1e3c6dcc887864a28dcb44e6a8e4b28c666c6a3983e179c51487b7e188 || 0 === strpos($__internal_f485e1d1351028748a025fcf17d48649bd10011b9aac37a94b592257f26db61e, $__internal_117d6a1e3c6dcc887864a28dcb44e6a8e4b28c666c6a3983e179c51487b7e188))) || (is_string($__internal_3b6b417a18685cb40d7dfd6f5ee629b38f99048705935959a17925a6c09ce3eb = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7bb75f8b0b500d13426c9f353a8ffa077ce77fabd920621585577e8e2798f65d = "admin_category") && ('' === $__internal_7bb75f8b0b500d13426c9f353a8ffa077ce77fabd920621585577e8e2798f65d || 0 === strpos($__internal_3b6b417a18685cb40d7dfd6f5ee629b38f99048705935959a17925a6c09ce3eb, $__internal_7bb75f8b0b500d13426c9f353a8ffa077ce77fabd920621585577e8e2798f65d))))) {
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
            if ((is_string($__internal_f3432536ea9246a1d655f5f2345f69c11e9c2cbe0f49353fcc4e8e3c99233ad4 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_29ed7b0bedf3b76907356790a30b484f0b4dac845bd302d042444f1a587f8fc6 = "admin_product") && ('' === $__internal_29ed7b0bedf3b76907356790a30b484f0b4dac845bd302d042444f1a587f8fc6 || 0 === strpos($__internal_f3432536ea9246a1d655f5f2345f69c11e9c2cbe0f49353fcc4e8e3c99233ad4, $__internal_29ed7b0bedf3b76907356790a30b484f0b4dac845bd302d042444f1a587f8fc6)))) {
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
            if ((is_string($__internal_384a656c0b984d14bcf140196d45402767781618a78d7150d225aff8074de783 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_ea59162b319d25d69b2dd9d0887022c99aa36770407177617c2d709b2134b788 = "admin_product_category") && ('' === $__internal_ea59162b319d25d69b2dd9d0887022c99aa36770407177617c2d709b2134b788 || 0 === strpos($__internal_384a656c0b984d14bcf140196d45402767781618a78d7150d225aff8074de783, $__internal_ea59162b319d25d69b2dd9d0887022c99aa36770407177617c2d709b2134b788)))) {
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
            if ((is_string($__internal_9307d54c247774f4260d2c392fa9479d7f64ae9dbffcf425958c737c61c4de76 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_500d9ea17eb7462387b1c07282a01df46d6d8a9f177dd0fa28b48b54c8feedbe = "admin_news") && ('' === $__internal_500d9ea17eb7462387b1c07282a01df46d6d8a9f177dd0fa28b48b54c8feedbe || 0 === strpos($__internal_9307d54c247774f4260d2c392fa9479d7f64ae9dbffcf425958c737c61c4de76, $__internal_500d9ea17eb7462387b1c07282a01df46d6d8a9f177dd0fa28b48b54c8feedbe)))) {
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
            if ((is_string($__internal_91ede6d85451634b6237ccb2cb87d06895616218e02876462bcb1ccb42a58ee6 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_65b74a62abd17fccaa29e9e84a5441f45fec57bcc51fe942163ac974dec7c603 = "admin_partner") && ('' === $__internal_65b74a62abd17fccaa29e9e84a5441f45fec57bcc51fe942163ac974dec7c603 || 0 === strpos($__internal_91ede6d85451634b6237ccb2cb87d06895616218e02876462bcb1ccb42a58ee6, $__internal_65b74a62abd17fccaa29e9e84a5441f45fec57bcc51fe942163ac974dec7c603)))) {
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
            if ((is_string($__internal_42450e66c60aafdeeed5323a5a83858a1143e5c439525920e9e6ec55d96634f8 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_3a7cb1f144cdfe28d58272436a1a8495b887d6f4e956ba8bc99586a7e93b9b21 = "admin_partner") && ('' === $__internal_3a7cb1f144cdfe28d58272436a1a8495b887d6f4e956ba8bc99586a7e93b9b21 || 0 === strpos($__internal_42450e66c60aafdeeed5323a5a83858a1143e5c439525920e9e6ec55d96634f8, $__internal_3a7cb1f144cdfe28d58272436a1a8495b887d6f4e956ba8bc99586a7e93b9b21)))) {
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
            if ((is_string($__internal_1ab121b0265b6da4d286e197b69ba8821eacadfdfe9f923a850fb2ae1203774b = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5c4f6e4ba1b18fb9db9bbdecf2673765e4eaf3cd0e45a02c7ce727c92e47c744 = "admin_partner_category") && ('' === $__internal_5c4f6e4ba1b18fb9db9bbdecf2673765e4eaf3cd0e45a02c7ce727c92e47c744 || 0 === strpos($__internal_1ab121b0265b6da4d286e197b69ba8821eacadfdfe9f923a850fb2ae1203774b, $__internal_5c4f6e4ba1b18fb9db9bbdecf2673765e4eaf3cd0e45a02c7ce727c92e47c744)))) {
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
            if ((is_string($__internal_f630592efe5b67c36e1fe56ce39d1ad63f8c2443d751faf9d1a200c7b3fa5183 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_170cd1de1eed2e39969d7fa5749fdc60c994a10305804b48628507db59f9af5c = "admin_guestbook") && ('' === $__internal_170cd1de1eed2e39969d7fa5749fdc60c994a10305804b48628507db59f9af5c || 0 === strpos($__internal_f630592efe5b67c36e1fe56ce39d1ad63f8c2443d751faf9d1a200c7b3fa5183, $__internal_170cd1de1eed2e39969d7fa5749fdc60c994a10305804b48628507db59f9af5c)))) {
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
            if ((is_string($__internal_44271ef39bbe24551ac95a50c1e50562c94a1eebe60f03585b78f9ec6bf48ac0 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_1c61f36e6bb9b3b52daa1b0311ae84f9b01bae234bfe6f706d03bc37a1346009 = "admin_faq") && ('' === $__internal_1c61f36e6bb9b3b52daa1b0311ae84f9b01bae234bfe6f706d03bc37a1346009 || 0 === strpos($__internal_44271ef39bbe24551ac95a50c1e50562c94a1eebe60f03585b78f9ec6bf48ac0, $__internal_1c61f36e6bb9b3b52daa1b0311ae84f9b01bae234bfe6f706d03bc37a1346009)))) {
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
            if ((is_string($__internal_77b7ec6a82eb9dc9341c980deca07e0e03119e804dab9f630f54edceea0dea2b = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f590cd4d3b83deb7f12724658073dde40a45cc61b11519d70b0d47f8be6f2dad = "admin_gallery") && ('' === $__internal_f590cd4d3b83deb7f12724658073dde40a45cc61b11519d70b0d47f8be6f2dad || 0 === strpos($__internal_77b7ec6a82eb9dc9341c980deca07e0e03119e804dab9f630f54edceea0dea2b, $__internal_f590cd4d3b83deb7f12724658073dde40a45cc61b11519d70b0d47f8be6f2dad)))) {
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
            if ((is_string($__internal_892edbdbc701734bc755b3f1cd55828d4fb080648c96dc064db606da2b3c2f0e = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_50e3aba63c41911a9254b562500d68a563c91cfc36f5dd9bdae1f42c793d7bfb = "admin_map") && ('' === $__internal_50e3aba63c41911a9254b562500d68a563c91cfc36f5dd9bdae1f42c793d7bfb || 0 === strpos($__internal_892edbdbc701734bc755b3f1cd55828d4fb080648c96dc064db606da2b3c2f0e, $__internal_50e3aba63c41911a9254b562500d68a563c91cfc36f5dd9bdae1f42c793d7bfb)))) {
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
            if ((is_string($__internal_4604c22bb479a739101be764f9bfca186950a6129a02349606c4b9413c21fd00 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b8f272dfd199395be72403b2c32fddb8338768d98c825255ec9cc6ad2b81f106 = "admin_folder") && ('' === $__internal_b8f272dfd199395be72403b2c32fddb8338768d98c825255ec9cc6ad2b81f106 || 0 === strpos($__internal_4604c22bb479a739101be764f9bfca186950a6129a02349606c4b9413c21fd00, $__internal_b8f272dfd199395be72403b2c32fddb8338768d98c825255ec9cc6ad2b81f106)))) {
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
        if ((is_string($__internal_7dba63820106f6a4fde9d4abea3956e4519823d39a74f88cea4e19484050f6db = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_57f255565f5562c39c481452c0cc0e7116f5a9e501869e11fff83e95f712d9b6 = "admin_contact") && ('' === $__internal_57f255565f5562c39c481452c0cc0e7116f5a9e501869e11fff83e95f712d9b6 || 0 === strpos($__internal_7dba63820106f6a4fde9d4abea3956e4519823d39a74f88cea4e19484050f6db, $__internal_57f255565f5562c39c481452c0cc0e7116f5a9e501869e11fff83e95f712d9b6)))) {
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
        if ((is_string($__internal_ee93b6c1a92a798fb746a05a3e964ad3b870377fbdf5e25c9c0b8f1896e9a8a3 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_635906018bf018812d3779cd59a60a5d6656d9b067a2cae0bed57db503d7e8e9 = "admin_user") && ('' === $__internal_635906018bf018812d3779cd59a60a5d6656d9b067a2cae0bed57db503d7e8e9 || 0 === strpos($__internal_ee93b6c1a92a798fb746a05a3e964ad3b870377fbdf5e25c9c0b8f1896e9a8a3, $__internal_635906018bf018812d3779cd59a60a5d6656d9b067a2cae0bed57db503d7e8e9)))) {
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
        
        $__internal_5d8cb2422b12d18f76da908d321c637fa7484622a51323d66e7bb23961731058->leave($__internal_5d8cb2422b12d18f76da908d321c637fa7484622a51323d66e7bb23961731058_prof);

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
