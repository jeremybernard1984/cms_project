<?php

/* PointWebAdminBundle::menu_admin.html.twig */
class __TwigTemplate_b149f60c13ce414a6d288076e39afc8603439c769b5edbaef32254df939b7312 extends Twig_Template
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
        $__internal_03f2391d27581ddc408a556a7b04014b94917a2901faa02e352a7440179b8fb8 = $this->env->getExtension("native_profiler");
        $__internal_03f2391d27581ddc408a556a7b04014b94917a2901faa02e352a7440179b8fb8->enter($__internal_03f2391d27581ddc408a556a7b04014b94917a2901faa02e352a7440179b8fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::menu_admin.html.twig"));

        // line 1
        echo "<li ";
        if ((is_string($__internal_d0f8670a561f197c75075313f392f1598a3df601f4ec94694855149691b12fb6 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_64a6ae07a5ef5a52777343e3a10a271a1d8510a290ec863ec65b0a757a966737 = "point_web_admin_homepage") && ('' === $__internal_64a6ae07a5ef5a52777343e3a10a271a1d8510a290ec863ec65b0a757a966737 || 0 === strpos($__internal_d0f8670a561f197c75075313f392f1598a3df601f4ec94694855149691b12fb6, $__internal_64a6ae07a5ef5a52777343e3a10a271a1d8510a290ec863ec65b0a757a966737)))) {
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
        if ((is_string($__internal_5c245bd038c01b1a89b59e74eefdf11298f0c4b5005dee5c2441314789310fa0 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_cf039cf44e70f7dbec4a7f32667b5695fc05d0d038b3542ee2c49810516410db = "admin_menu") && ('' === $__internal_cf039cf44e70f7dbec4a7f32667b5695fc05d0d038b3542ee2c49810516410db || 0 === strpos($__internal_5c245bd038c01b1a89b59e74eefdf11298f0c4b5005dee5c2441314789310fa0, $__internal_cf039cf44e70f7dbec4a7f32667b5695fc05d0d038b3542ee2c49810516410db)))) {
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
            if ((is_string($__internal_f19eb1035938ba5bc096b49eab21d7f3d6a1947b1387e5e0ee31c7b4bd8d6da8 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6be6ffb05717dc95991f0785f4c2659773fa6cd1438dd0253d9fb4cbc1a73e05 = "admin_page") && ('' === $__internal_6be6ffb05717dc95991f0785f4c2659773fa6cd1438dd0253d9fb4cbc1a73e05 || 0 === strpos($__internal_f19eb1035938ba5bc096b49eab21d7f3d6a1947b1387e5e0ee31c7b4bd8d6da8, $__internal_6be6ffb05717dc95991f0785f4c2659773fa6cd1438dd0253d9fb4cbc1a73e05)))) {
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
            if (((is_string($__internal_16c406046556bee44045a977b0435ffd23eb75c46f35dbbfe2bff0910b86e156 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_eaa80881e676cc8c8ebfd15a575069ad70a6e098461595582d635168d0779480 = "admin_product") && ('' === $__internal_eaa80881e676cc8c8ebfd15a575069ad70a6e098461595582d635168d0779480 || 0 === strpos($__internal_16c406046556bee44045a977b0435ffd23eb75c46f35dbbfe2bff0910b86e156, $__internal_eaa80881e676cc8c8ebfd15a575069ad70a6e098461595582d635168d0779480))) || (is_string($__internal_6a9001f4f62717a131285d718ebb6889215ba0f92247095d6d635e39dcaed1d1 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d5082c477df3a1de5a0559a793f50e65b18aa3808815282239f276a417c8d4c5 = "admin_category") && ('' === $__internal_d5082c477df3a1de5a0559a793f50e65b18aa3808815282239f276a417c8d4c5 || 0 === strpos($__internal_6a9001f4f62717a131285d718ebb6889215ba0f92247095d6d635e39dcaed1d1, $__internal_d5082c477df3a1de5a0559a793f50e65b18aa3808815282239f276a417c8d4c5))))) {
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
            if ((is_string($__internal_c87d87948a94e51df21231671f2cae865bebce023c69dcfed71a79b811b91997 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_8aa0b84a8a8b802fafb717bea93a99a35c6586c95fe7effac579dfe1ebe7c4b7 = "admin_product") && ('' === $__internal_8aa0b84a8a8b802fafb717bea93a99a35c6586c95fe7effac579dfe1ebe7c4b7 || 0 === strpos($__internal_c87d87948a94e51df21231671f2cae865bebce023c69dcfed71a79b811b91997, $__internal_8aa0b84a8a8b802fafb717bea93a99a35c6586c95fe7effac579dfe1ebe7c4b7)))) {
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
            if ((is_string($__internal_ec243239d54d1e19c6c060c0bc9d6bbc49af67887f039e197f6999e356fa5602 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7c8bf6ef7266af44380938b282b01e77efc9004051a0d30911823876aef4bb06 = "admin_product_category") && ('' === $__internal_7c8bf6ef7266af44380938b282b01e77efc9004051a0d30911823876aef4bb06 || 0 === strpos($__internal_ec243239d54d1e19c6c060c0bc9d6bbc49af67887f039e197f6999e356fa5602, $__internal_7c8bf6ef7266af44380938b282b01e77efc9004051a0d30911823876aef4bb06)))) {
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
            if ((is_string($__internal_26b4200f919d8a6312e8e020965bd835c3345e8e8b65ada72ae4f1332e8a038c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_51bb78a335fd97e3121dffcbd6ecf0d25a599af73dc20c65b74bd4fd43a5f29c = "admin_news") && ('' === $__internal_51bb78a335fd97e3121dffcbd6ecf0d25a599af73dc20c65b74bd4fd43a5f29c || 0 === strpos($__internal_26b4200f919d8a6312e8e020965bd835c3345e8e8b65ada72ae4f1332e8a038c, $__internal_51bb78a335fd97e3121dffcbd6ecf0d25a599af73dc20c65b74bd4fd43a5f29c)))) {
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
            if ((is_string($__internal_d18571bcdb90ef4c5043749a3ca419efe3447d68313e733b8097a11e41cacefb = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6bb7d9c96e3ab81c382c03b240709e300cae918e5dfbd3ccee237e4ae6b551c3 = "admin_partner") && ('' === $__internal_6bb7d9c96e3ab81c382c03b240709e300cae918e5dfbd3ccee237e4ae6b551c3 || 0 === strpos($__internal_d18571bcdb90ef4c5043749a3ca419efe3447d68313e733b8097a11e41cacefb, $__internal_6bb7d9c96e3ab81c382c03b240709e300cae918e5dfbd3ccee237e4ae6b551c3)))) {
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
            if ((is_string($__internal_ae50a85afea98393bb7808399caaa689ab8d837613beeba0d641759c808bd259 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7e025af922be5edbf5c91561e2a4cd924e9221f76fb6dd37b2f906ed80db5f34 = "admin_partner") && ('' === $__internal_7e025af922be5edbf5c91561e2a4cd924e9221f76fb6dd37b2f906ed80db5f34 || 0 === strpos($__internal_ae50a85afea98393bb7808399caaa689ab8d837613beeba0d641759c808bd259, $__internal_7e025af922be5edbf5c91561e2a4cd924e9221f76fb6dd37b2f906ed80db5f34)))) {
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
            if ((is_string($__internal_0d339e46ad40fe0c495069c043e123492fc51b770a3b19ee42f81c1530d0ebf8 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e970cfb0fb7a4ef45bc6d6da2306650e3add3eafc7d9e67714b5cec02896c03c = "admin_partner_category") && ('' === $__internal_e970cfb0fb7a4ef45bc6d6da2306650e3add3eafc7d9e67714b5cec02896c03c || 0 === strpos($__internal_0d339e46ad40fe0c495069c043e123492fc51b770a3b19ee42f81c1530d0ebf8, $__internal_e970cfb0fb7a4ef45bc6d6da2306650e3add3eafc7d9e67714b5cec02896c03c)))) {
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
            if ((is_string($__internal_9df53451e7a5f08efa00f55c73f980daea978d69322d4970c26646fddc1e1f4c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_05b70f921477cf85957dd87dc2bbca97fee5eae7f89c397801293d94ab2ac213 = "admin_guestbook") && ('' === $__internal_05b70f921477cf85957dd87dc2bbca97fee5eae7f89c397801293d94ab2ac213 || 0 === strpos($__internal_9df53451e7a5f08efa00f55c73f980daea978d69322d4970c26646fddc1e1f4c, $__internal_05b70f921477cf85957dd87dc2bbca97fee5eae7f89c397801293d94ab2ac213)))) {
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
            if ((is_string($__internal_f8f4c3d71103c6aaf9eac212bb740eeed4e09ca7c20be9435413ca527080e8fe = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d418a2ff5752600fd7b6bd9f80c8b976f994228e1cd176f1cb91742e827df68b = "admin_faq") && ('' === $__internal_d418a2ff5752600fd7b6bd9f80c8b976f994228e1cd176f1cb91742e827df68b || 0 === strpos($__internal_f8f4c3d71103c6aaf9eac212bb740eeed4e09ca7c20be9435413ca527080e8fe, $__internal_d418a2ff5752600fd7b6bd9f80c8b976f994228e1cd176f1cb91742e827df68b)))) {
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
            if ((is_string($__internal_49ebed78fd08b9965f0976026453f818b46f49a12bf456512a33eab94d566880 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_3da16000ad8c7b23cadbd7adcff7f4c51e76e778a3e32bf6e80ae82144b97879 = "admin_gallery") && ('' === $__internal_3da16000ad8c7b23cadbd7adcff7f4c51e76e778a3e32bf6e80ae82144b97879 || 0 === strpos($__internal_49ebed78fd08b9965f0976026453f818b46f49a12bf456512a33eab94d566880, $__internal_3da16000ad8c7b23cadbd7adcff7f4c51e76e778a3e32bf6e80ae82144b97879)))) {
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
            if ((is_string($__internal_5a6edc36bbb823e238ba433c49fae71af9d67d5cf2a6770252d00f191b84f4d2 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5ddcbdaffe0c8f9f9ffc91773fcc876a425b70fb59c78320098e8560d85c9cda = "admin_map") && ('' === $__internal_5ddcbdaffe0c8f9f9ffc91773fcc876a425b70fb59c78320098e8560d85c9cda || 0 === strpos($__internal_5a6edc36bbb823e238ba433c49fae71af9d67d5cf2a6770252d00f191b84f4d2, $__internal_5ddcbdaffe0c8f9f9ffc91773fcc876a425b70fb59c78320098e8560d85c9cda)))) {
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
            if ((is_string($__internal_a293285f9a1b684a148814bb64c01c60ad8f72ac86814de6b4223ba8687c778d = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_90d8e1010ffa24f0d07eab4e65d1166a2c292151ca4e50aefe669b3cd705c112 = "admin_folder") && ('' === $__internal_90d8e1010ffa24f0d07eab4e65d1166a2c292151ca4e50aefe669b3cd705c112 || 0 === strpos($__internal_a293285f9a1b684a148814bb64c01c60ad8f72ac86814de6b4223ba8687c778d, $__internal_90d8e1010ffa24f0d07eab4e65d1166a2c292151ca4e50aefe669b3cd705c112)))) {
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
        if ((is_string($__internal_050f83d06888b3aa7d9108e5350abe991a079f5f815a073350b44db090c408f5 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a3335d4fb6ba66dabb626fed68c7c027847e311ce828d91aafcc7c0d15338f1c = "admin_contact") && ('' === $__internal_a3335d4fb6ba66dabb626fed68c7c027847e311ce828d91aafcc7c0d15338f1c || 0 === strpos($__internal_050f83d06888b3aa7d9108e5350abe991a079f5f815a073350b44db090c408f5, $__internal_a3335d4fb6ba66dabb626fed68c7c027847e311ce828d91aafcc7c0d15338f1c)))) {
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
        if ((is_string($__internal_d95f11a102edcf7ba463b2db7c0000689c21989b37c08e40ebf6161104ab8e19 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c3af22ffac13dd749343592c6e9336b2a35cde328a455a8c3b7514f2b6cf9dd8 = "admin_user") && ('' === $__internal_c3af22ffac13dd749343592c6e9336b2a35cde328a455a8c3b7514f2b6cf9dd8 || 0 === strpos($__internal_d95f11a102edcf7ba463b2db7c0000689c21989b37c08e40ebf6161104ab8e19, $__internal_c3af22ffac13dd749343592c6e9336b2a35cde328a455a8c3b7514f2b6cf9dd8)))) {
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
        
        $__internal_03f2391d27581ddc408a556a7b04014b94917a2901faa02e352a7440179b8fb8->leave($__internal_03f2391d27581ddc408a556a7b04014b94917a2901faa02e352a7440179b8fb8_prof);

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
