<?php

/* @PointWebAdmin/menu_admin.html.twig */
class __TwigTemplate_70aead859ad93620dd40db5dfcc05027bdb34c1e7d4318ddbe42844aad196dc9 extends Twig_Template
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
        $__internal_2efd2563cc80a4c5eb98c2f31285de6d91d03439a5fb93a826f7394574141d31 = $this->env->getExtension("native_profiler");
        $__internal_2efd2563cc80a4c5eb98c2f31285de6d91d03439a5fb93a826f7394574141d31->enter($__internal_2efd2563cc80a4c5eb98c2f31285de6d91d03439a5fb93a826f7394574141d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebAdmin/menu_admin.html.twig"));

        // line 1
        echo "<li ";
        if ((is_string($__internal_52b0ec53cb8ec56d125ac07ae059a4d497f311df2020df83f255e343936e74a8 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_95604e45a6fd3317ec6a764dc4974d419e241492ea5d32b4dfafb4670b77875c = "point_web_admin_homepage") && ('' === $__internal_95604e45a6fd3317ec6a764dc4974d419e241492ea5d32b4dfafb4670b77875c || 0 === strpos($__internal_52b0ec53cb8ec56d125ac07ae059a4d497f311df2020df83f255e343936e74a8, $__internal_95604e45a6fd3317ec6a764dc4974d419e241492ea5d32b4dfafb4670b77875c)))) {
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
        if ((is_string($__internal_9c533f94f728cb0ddb7d56f8370bcba4f67a129286ef2d3bd7ab48bc8b4acf9c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_0c74982af96a320255b825db25458a1134bac8e306036200d99b4f6f2b919862 = "admin_menu") && ('' === $__internal_0c74982af96a320255b825db25458a1134bac8e306036200d99b4f6f2b919862 || 0 === strpos($__internal_9c533f94f728cb0ddb7d56f8370bcba4f67a129286ef2d3bd7ab48bc8b4acf9c, $__internal_0c74982af96a320255b825db25458a1134bac8e306036200d99b4f6f2b919862)))) {
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
            if ((is_string($__internal_b4d4b444a28f79b6ddc5db4fea9379d4c4bcb7c35d5d735f27f5ae1403c28ae5 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_dfead21b04797cd3f0916b31d5fc680007394038c73e9a41e7f056edfbf029d7 = "admin_page") && ('' === $__internal_dfead21b04797cd3f0916b31d5fc680007394038c73e9a41e7f056edfbf029d7 || 0 === strpos($__internal_b4d4b444a28f79b6ddc5db4fea9379d4c4bcb7c35d5d735f27f5ae1403c28ae5, $__internal_dfead21b04797cd3f0916b31d5fc680007394038c73e9a41e7f056edfbf029d7)))) {
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
            if (((is_string($__internal_e25d441d65076421f7bca906e4e4052d944d88eee3d9129264581e9cfc3cb46b = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b2e6988fbf8bc0c94314aaf642b731cbe74b37adf318474bef9750a37760b340 = "admin_product") && ('' === $__internal_b2e6988fbf8bc0c94314aaf642b731cbe74b37adf318474bef9750a37760b340 || 0 === strpos($__internal_e25d441d65076421f7bca906e4e4052d944d88eee3d9129264581e9cfc3cb46b, $__internal_b2e6988fbf8bc0c94314aaf642b731cbe74b37adf318474bef9750a37760b340))) || (is_string($__internal_98f27d9bcb3525c6ca15ca4eaf0096c42c85cffcd081d72797a38ff6df13a964 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_acece26d3e5c1c87163cb240079d13984d9663e414db19fe41a5b22057fe2c61 = "admin_category") && ('' === $__internal_acece26d3e5c1c87163cb240079d13984d9663e414db19fe41a5b22057fe2c61 || 0 === strpos($__internal_98f27d9bcb3525c6ca15ca4eaf0096c42c85cffcd081d72797a38ff6df13a964, $__internal_acece26d3e5c1c87163cb240079d13984d9663e414db19fe41a5b22057fe2c61))))) {
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
            if ((is_string($__internal_f7d8a31387ef3e340c682dbd75b8ee668972dfa97c9a05ec076f73fb07c5ba26 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_68641a7135a0f0038bedb8aa93ceffb04994a8744d7604d1c122f51b6201d14c = "admin_product") && ('' === $__internal_68641a7135a0f0038bedb8aa93ceffb04994a8744d7604d1c122f51b6201d14c || 0 === strpos($__internal_f7d8a31387ef3e340c682dbd75b8ee668972dfa97c9a05ec076f73fb07c5ba26, $__internal_68641a7135a0f0038bedb8aa93ceffb04994a8744d7604d1c122f51b6201d14c)))) {
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
            if ((is_string($__internal_7e08185870bde7ecf7b6c9df5cee99248341b6f4d1a96281159d38dbf9b7c75a = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_445fb2a39e6d2f4f07b3a0bc74f658240db779cf14ce4b5bca095ab5f42adb23 = "admin_product_category") && ('' === $__internal_445fb2a39e6d2f4f07b3a0bc74f658240db779cf14ce4b5bca095ab5f42adb23 || 0 === strpos($__internal_7e08185870bde7ecf7b6c9df5cee99248341b6f4d1a96281159d38dbf9b7c75a, $__internal_445fb2a39e6d2f4f07b3a0bc74f658240db779cf14ce4b5bca095ab5f42adb23)))) {
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
            if ((is_string($__internal_65e5e40ea315229a326a667ff3483fe71222cc1071e1b8d77ec51816ecb3072c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c94fa081bc16120d9510ab62099892d117e4a985d2014435f17ca99474853080 = "admin_news") && ('' === $__internal_c94fa081bc16120d9510ab62099892d117e4a985d2014435f17ca99474853080 || 0 === strpos($__internal_65e5e40ea315229a326a667ff3483fe71222cc1071e1b8d77ec51816ecb3072c, $__internal_c94fa081bc16120d9510ab62099892d117e4a985d2014435f17ca99474853080)))) {
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
            if ((is_string($__internal_8cb4f305ae57353a952d38a511d4ba69590214e7740e7d9c8c8efe424420558c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_37684fc414c78f924f2e01195bc4a7d687d1be4bd3ac080ab66444f27e6b9266 = "admin_partner") && ('' === $__internal_37684fc414c78f924f2e01195bc4a7d687d1be4bd3ac080ab66444f27e6b9266 || 0 === strpos($__internal_8cb4f305ae57353a952d38a511d4ba69590214e7740e7d9c8c8efe424420558c, $__internal_37684fc414c78f924f2e01195bc4a7d687d1be4bd3ac080ab66444f27e6b9266)))) {
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
            if ((is_string($__internal_2c100da92bd4544e452372b4f9537be0a40db4991f21548321d29c2fbc2ca52e = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_3e17704feda8b0c3ba5fdad42a6954db8ded4b1dd3bcf1859df1969fecb8cc14 = "admin_partner") && ('' === $__internal_3e17704feda8b0c3ba5fdad42a6954db8ded4b1dd3bcf1859df1969fecb8cc14 || 0 === strpos($__internal_2c100da92bd4544e452372b4f9537be0a40db4991f21548321d29c2fbc2ca52e, $__internal_3e17704feda8b0c3ba5fdad42a6954db8ded4b1dd3bcf1859df1969fecb8cc14)))) {
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
            if ((is_string($__internal_059c4f9e7bf75996457d251d74242a7cdf16c7ee29ea38fa8ebb7cb5849533cb = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_2b00bc4fa37e082567f32dabd3ffce11f37d8f8e6f55eb40239d29abbdc0c63b = "admin_partner_category") && ('' === $__internal_2b00bc4fa37e082567f32dabd3ffce11f37d8f8e6f55eb40239d29abbdc0c63b || 0 === strpos($__internal_059c4f9e7bf75996457d251d74242a7cdf16c7ee29ea38fa8ebb7cb5849533cb, $__internal_2b00bc4fa37e082567f32dabd3ffce11f37d8f8e6f55eb40239d29abbdc0c63b)))) {
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
            if ((is_string($__internal_555f3fd3d35abd858420586d2cab179644f3512e147ab98ae50193d33f75cddd = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_45d2b9e8a3f4c3803c75162adaed722409bb3467367823f8bdefe349a8499bec = "admin_guestbook") && ('' === $__internal_45d2b9e8a3f4c3803c75162adaed722409bb3467367823f8bdefe349a8499bec || 0 === strpos($__internal_555f3fd3d35abd858420586d2cab179644f3512e147ab98ae50193d33f75cddd, $__internal_45d2b9e8a3f4c3803c75162adaed722409bb3467367823f8bdefe349a8499bec)))) {
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
            if ((is_string($__internal_39c73aaeb5cc6c0755fd898c3aa9686ba30739a4334b24afb5ec6102f5331649 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_30b767560d4956533e074f639959d796324b8d2e9fb988dfce5f87ac4eacaa99 = "admin_faq") && ('' === $__internal_30b767560d4956533e074f639959d796324b8d2e9fb988dfce5f87ac4eacaa99 || 0 === strpos($__internal_39c73aaeb5cc6c0755fd898c3aa9686ba30739a4334b24afb5ec6102f5331649, $__internal_30b767560d4956533e074f639959d796324b8d2e9fb988dfce5f87ac4eacaa99)))) {
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
            if ((is_string($__internal_a1e852c29199d770522d3c9bcedbf13bb904c87df925c2d1ad70de7a91573bfb = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_415ee3560668255c3a5b42a4c1765174063a1037251aa264d3218dd766f4ac56 = "admin_gallery") && ('' === $__internal_415ee3560668255c3a5b42a4c1765174063a1037251aa264d3218dd766f4ac56 || 0 === strpos($__internal_a1e852c29199d770522d3c9bcedbf13bb904c87df925c2d1ad70de7a91573bfb, $__internal_415ee3560668255c3a5b42a4c1765174063a1037251aa264d3218dd766f4ac56)))) {
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
            if ((is_string($__internal_7c8447be146db3358d027c09e5811f79091ccf443c67b419895d632be525e7ee = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_8c2c52f77884de9c2e270530129ef577d7290fec3ece729c9d443f85186ceac7 = "admin_map") && ('' === $__internal_8c2c52f77884de9c2e270530129ef577d7290fec3ece729c9d443f85186ceac7 || 0 === strpos($__internal_7c8447be146db3358d027c09e5811f79091ccf443c67b419895d632be525e7ee, $__internal_8c2c52f77884de9c2e270530129ef577d7290fec3ece729c9d443f85186ceac7)))) {
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
            if ((is_string($__internal_f69ac43292aaf2e3676f413b5fb720c726cb91ebab6ce3f2d152cd8aa91ffba3 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_709d8c59bc7fcf94d37b61b3ceeb9e22185ecbc2913f45fd6f444c9c886a4411 = "admin_folder") && ('' === $__internal_709d8c59bc7fcf94d37b61b3ceeb9e22185ecbc2913f45fd6f444c9c886a4411 || 0 === strpos($__internal_f69ac43292aaf2e3676f413b5fb720c726cb91ebab6ce3f2d152cd8aa91ffba3, $__internal_709d8c59bc7fcf94d37b61b3ceeb9e22185ecbc2913f45fd6f444c9c886a4411)))) {
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
        if ((is_string($__internal_cd84f54a6ec05b7d9ddf678d4ef80468d191ce65974e97e13a6da5a249ce75aa = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_64150f8e43a7a3dbec8f347471611851db2205fe7f8af9ddaab2e886dd96c657 = "admin_contact") && ('' === $__internal_64150f8e43a7a3dbec8f347471611851db2205fe7f8af9ddaab2e886dd96c657 || 0 === strpos($__internal_cd84f54a6ec05b7d9ddf678d4ef80468d191ce65974e97e13a6da5a249ce75aa, $__internal_64150f8e43a7a3dbec8f347471611851db2205fe7f8af9ddaab2e886dd96c657)))) {
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
        if ((is_string($__internal_adfe3d15f321c5362a6f5da67aff257072dc6bc5b03ed53873ddfcceff6ab22c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f0458456caa8d770fae271c549631c7af53275bb4f94a9781714c9bf68c1e4dc = "admin_user") && ('' === $__internal_f0458456caa8d770fae271c549631c7af53275bb4f94a9781714c9bf68c1e4dc || 0 === strpos($__internal_adfe3d15f321c5362a6f5da67aff257072dc6bc5b03ed53873ddfcceff6ab22c, $__internal_f0458456caa8d770fae271c549631c7af53275bb4f94a9781714c9bf68c1e4dc)))) {
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
        
        $__internal_2efd2563cc80a4c5eb98c2f31285de6d91d03439a5fb93a826f7394574141d31->leave($__internal_2efd2563cc80a4c5eb98c2f31285de6d91d03439a5fb93a826f7394574141d31_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebAdmin/menu_admin.html.twig";
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
