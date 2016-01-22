<?php

/* PointWebAdminBundle::menu_admin.html.twig */
class __TwigTemplate_6f880b86ad1a8fc42d8f2d679a34b0b59617c3a50985f091e9a717c15af4cf08 extends Twig_Template
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
        $__internal_cb37b87321af23c7f0d1a3854e91ad60090945e86b4f035dd2572a9164e21e35 = $this->env->getExtension("native_profiler");
        $__internal_cb37b87321af23c7f0d1a3854e91ad60090945e86b4f035dd2572a9164e21e35->enter($__internal_cb37b87321af23c7f0d1a3854e91ad60090945e86b4f035dd2572a9164e21e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::menu_admin.html.twig"));

        // line 1
        echo "<li ";
        if ((is_string($__internal_b41d1754bef7fe3f40f89ce9f24e19bcfe97aabf5970c89a34f5cd068d8d384f = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7b0b09934f41dfd013ebd5b85d3453026f0772818d950f53562ff25221fbd81b = "point_web_admin_homepage") && ('' === $__internal_7b0b09934f41dfd013ebd5b85d3453026f0772818d950f53562ff25221fbd81b || 0 === strpos($__internal_b41d1754bef7fe3f40f89ce9f24e19bcfe97aabf5970c89a34f5cd068d8d384f, $__internal_7b0b09934f41dfd013ebd5b85d3453026f0772818d950f53562ff25221fbd81b)))) {
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
        if ((is_string($__internal_6feb59faef81bdbf27ea5de2c9e85ce2717d292aecf96df255776ef05cfa1210 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_2683effcc75669bbf0c339cfae1f06b332ca5a97f4c75a6b3cd953c73aa2755c = "admin_menu") && ('' === $__internal_2683effcc75669bbf0c339cfae1f06b332ca5a97f4c75a6b3cd953c73aa2755c || 0 === strpos($__internal_6feb59faef81bdbf27ea5de2c9e85ce2717d292aecf96df255776ef05cfa1210, $__internal_2683effcc75669bbf0c339cfae1f06b332ca5a97f4c75a6b3cd953c73aa2755c)))) {
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
            if ((is_string($__internal_3e5b2cbf3c024476d975d0517cd14094e0559da40f2dd64dfabb70350b5611d3 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_effc06b92581ac45a8108faa1d7f6f65d9ab387138f19bc6ef052d742bec0bb2 = "admin_page") && ('' === $__internal_effc06b92581ac45a8108faa1d7f6f65d9ab387138f19bc6ef052d742bec0bb2 || 0 === strpos($__internal_3e5b2cbf3c024476d975d0517cd14094e0559da40f2dd64dfabb70350b5611d3, $__internal_effc06b92581ac45a8108faa1d7f6f65d9ab387138f19bc6ef052d742bec0bb2)))) {
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
            if (((is_string($__internal_ccb06c6a517fbab8971a8742d12875f3ec31a12873d66fd7828f00774d874259 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_1565a7cb2cc13d142905f88605f304e3c819bc0831a1eb880a3a8ab72fff3de4 = "admin_product") && ('' === $__internal_1565a7cb2cc13d142905f88605f304e3c819bc0831a1eb880a3a8ab72fff3de4 || 0 === strpos($__internal_ccb06c6a517fbab8971a8742d12875f3ec31a12873d66fd7828f00774d874259, $__internal_1565a7cb2cc13d142905f88605f304e3c819bc0831a1eb880a3a8ab72fff3de4))) || (is_string($__internal_4f22d8bbd60932b3309d567796ecb2bc6cecb3e3ea964c159767e8cd7f1730de = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d132b03be345b3624245bf60f2176c0d428534c6dafffae62e41712f534b626f = "admin_category") && ('' === $__internal_d132b03be345b3624245bf60f2176c0d428534c6dafffae62e41712f534b626f || 0 === strpos($__internal_4f22d8bbd60932b3309d567796ecb2bc6cecb3e3ea964c159767e8cd7f1730de, $__internal_d132b03be345b3624245bf60f2176c0d428534c6dafffae62e41712f534b626f))))) {
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
            if ((is_string($__internal_616a4ace3d036e78881ebcf7afc78d3008b54394991215cbd8330600d82c1070 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5e4d53856b52747415c66df2de5ccfb09759e83bf2b629c0d3b605506f9dcb15 = "admin_product") && ('' === $__internal_5e4d53856b52747415c66df2de5ccfb09759e83bf2b629c0d3b605506f9dcb15 || 0 === strpos($__internal_616a4ace3d036e78881ebcf7afc78d3008b54394991215cbd8330600d82c1070, $__internal_5e4d53856b52747415c66df2de5ccfb09759e83bf2b629c0d3b605506f9dcb15)))) {
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
            if ((is_string($__internal_67f03db0842ec699720870b488a9fcaf4da597ef05c10be7856a39ec7742c541 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_66184404ae34295a858113e726d241df88d25c65eb5b902cfeada886f547ea11 = "admin_product_category") && ('' === $__internal_66184404ae34295a858113e726d241df88d25c65eb5b902cfeada886f547ea11 || 0 === strpos($__internal_67f03db0842ec699720870b488a9fcaf4da597ef05c10be7856a39ec7742c541, $__internal_66184404ae34295a858113e726d241df88d25c65eb5b902cfeada886f547ea11)))) {
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
            if ((is_string($__internal_36cc9688b496b928516aa98798fa9e11a4cb10b2e6572a77901adf3028545a58 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f9de5b12cfb1b78737247b7dbfa1acd8d591c82fa65426dfd31ad92b46a43d83 = "admin_news") && ('' === $__internal_f9de5b12cfb1b78737247b7dbfa1acd8d591c82fa65426dfd31ad92b46a43d83 || 0 === strpos($__internal_36cc9688b496b928516aa98798fa9e11a4cb10b2e6572a77901adf3028545a58, $__internal_f9de5b12cfb1b78737247b7dbfa1acd8d591c82fa65426dfd31ad92b46a43d83)))) {
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
            if ((is_string($__internal_207f156202ab6aa985377529a531a16fe0a0e029990990c30bfd5add7e0a959f = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_fd571dbfec0990a18be41f8a6654e3a4eef450c0d0e5006b37183d1af425e175 = "admin_partner") && ('' === $__internal_fd571dbfec0990a18be41f8a6654e3a4eef450c0d0e5006b37183d1af425e175 || 0 === strpos($__internal_207f156202ab6aa985377529a531a16fe0a0e029990990c30bfd5add7e0a959f, $__internal_fd571dbfec0990a18be41f8a6654e3a4eef450c0d0e5006b37183d1af425e175)))) {
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
            if ((is_string($__internal_aee4b23c2e8b41ea820a2194adf300f737508003819ee08bb18cf5fbdae9a3d9 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a0baacf73c0e46e0b2c9cc122fa376a6ab48e20e718b4aa9b3d178d44b4037b6 = "admin_partner") && ('' === $__internal_a0baacf73c0e46e0b2c9cc122fa376a6ab48e20e718b4aa9b3d178d44b4037b6 || 0 === strpos($__internal_aee4b23c2e8b41ea820a2194adf300f737508003819ee08bb18cf5fbdae9a3d9, $__internal_a0baacf73c0e46e0b2c9cc122fa376a6ab48e20e718b4aa9b3d178d44b4037b6)))) {
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
            if ((is_string($__internal_c717b07edd2720ccbb89b6031b78c09dc78865674af95ee12d1111f565abe33f = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_89e8de9e3d38cf201e0c455b897ef8625dcaef13480724fa245b1ff60507d48a = "admin_partner_category") && ('' === $__internal_89e8de9e3d38cf201e0c455b897ef8625dcaef13480724fa245b1ff60507d48a || 0 === strpos($__internal_c717b07edd2720ccbb89b6031b78c09dc78865674af95ee12d1111f565abe33f, $__internal_89e8de9e3d38cf201e0c455b897ef8625dcaef13480724fa245b1ff60507d48a)))) {
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
            if ((is_string($__internal_8378d56e38e1a1facd9b4539f01e22be10f5e6c1e4578cad828e5bcde2b58a02 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5e35a3c945124e85ebd035ad7fadbdc35a7b27af055a4fc13c9c0c6eeca091dc = "admin_guestbook") && ('' === $__internal_5e35a3c945124e85ebd035ad7fadbdc35a7b27af055a4fc13c9c0c6eeca091dc || 0 === strpos($__internal_8378d56e38e1a1facd9b4539f01e22be10f5e6c1e4578cad828e5bcde2b58a02, $__internal_5e35a3c945124e85ebd035ad7fadbdc35a7b27af055a4fc13c9c0c6eeca091dc)))) {
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
            if ((is_string($__internal_3b38aa14887b350872bec651dbed7ae922b52f7983401b72e3182427b1a31f26 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_1d3a857b33ce0f2e9a970091e123ee35a828b4c47808391d6056d455b4946de5 = "admin_faq") && ('' === $__internal_1d3a857b33ce0f2e9a970091e123ee35a828b4c47808391d6056d455b4946de5 || 0 === strpos($__internal_3b38aa14887b350872bec651dbed7ae922b52f7983401b72e3182427b1a31f26, $__internal_1d3a857b33ce0f2e9a970091e123ee35a828b4c47808391d6056d455b4946de5)))) {
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
            if ((is_string($__internal_39007710b6c7b56623fcf53ba6019133892fa62c0a18c8a1a7e87cc4344ef80f = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_42b1836b1d2c387d3281e0a940a7dc8cc76636d43f9bdf32ed1386eebc707033 = "admin_gallery") && ('' === $__internal_42b1836b1d2c387d3281e0a940a7dc8cc76636d43f9bdf32ed1386eebc707033 || 0 === strpos($__internal_39007710b6c7b56623fcf53ba6019133892fa62c0a18c8a1a7e87cc4344ef80f, $__internal_42b1836b1d2c387d3281e0a940a7dc8cc76636d43f9bdf32ed1386eebc707033)))) {
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
            if ((is_string($__internal_f3f2be49276e6fe0cc41e028a1f9ef65438de96920e48c959f6209e5f24ca990 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_8b48298435eb4196078301276e904c568904c97d330a948321eadfc919e4781e = "admin_map") && ('' === $__internal_8b48298435eb4196078301276e904c568904c97d330a948321eadfc919e4781e || 0 === strpos($__internal_f3f2be49276e6fe0cc41e028a1f9ef65438de96920e48c959f6209e5f24ca990, $__internal_8b48298435eb4196078301276e904c568904c97d330a948321eadfc919e4781e)))) {
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
            if ((is_string($__internal_97a36f74092a894fc337725f3cdb29c9d1761aa1a9f978176d40248de9beab76 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_00c1dce279a0df0183403172967c060b08ac2728899c61e304c80006d989aae2 = "admin_folder") && ('' === $__internal_00c1dce279a0df0183403172967c060b08ac2728899c61e304c80006d989aae2 || 0 === strpos($__internal_97a36f74092a894fc337725f3cdb29c9d1761aa1a9f978176d40248de9beab76, $__internal_00c1dce279a0df0183403172967c060b08ac2728899c61e304c80006d989aae2)))) {
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
        if ((is_string($__internal_c622e444880d831d2f1c7653d601eb9b9bdcb67932f9a7218038b849d0c76d53 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6a692db10a5167ffd36152c592471f817176bc05b0b0202edf3aae1ee7a24438 = "admin_contact") && ('' === $__internal_6a692db10a5167ffd36152c592471f817176bc05b0b0202edf3aae1ee7a24438 || 0 === strpos($__internal_c622e444880d831d2f1c7653d601eb9b9bdcb67932f9a7218038b849d0c76d53, $__internal_6a692db10a5167ffd36152c592471f817176bc05b0b0202edf3aae1ee7a24438)))) {
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
        if ((is_string($__internal_11cb84a3e9b065816ef932a9bf24bef752dc3d25825cc3ae42fea83cfcce26e6 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4d6a30ab5ef27baf802b0b2e78b1017dddfbda2c2639b5a0e1c118c212223ebb = "admin_user") && ('' === $__internal_4d6a30ab5ef27baf802b0b2e78b1017dddfbda2c2639b5a0e1c118c212223ebb || 0 === strpos($__internal_11cb84a3e9b065816ef932a9bf24bef752dc3d25825cc3ae42fea83cfcce26e6, $__internal_4d6a30ab5ef27baf802b0b2e78b1017dddfbda2c2639b5a0e1c118c212223ebb)))) {
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
        
        $__internal_cb37b87321af23c7f0d1a3854e91ad60090945e86b4f035dd2572a9164e21e35->leave($__internal_cb37b87321af23c7f0d1a3854e91ad60090945e86b4f035dd2572a9164e21e35_prof);

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
