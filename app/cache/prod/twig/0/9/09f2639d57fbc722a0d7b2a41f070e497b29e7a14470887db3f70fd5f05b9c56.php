<?php

/* PointWebAdminBundle::_menu_admin.html.twig */
class __TwigTemplate_09f2639d57fbc722a0d7b2a41f070e497b29e7a14470887db3f70fd5f05b9c56 extends Twig_Template
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
        $__internal_e3c70e64d21592843b1885666eb3c00d3f6e5b1a6cce4ec61df2d78f656477fe = $this->env->getExtension("native_profiler");
        $__internal_e3c70e64d21592843b1885666eb3c00d3f6e5b1a6cce4ec61df2d78f656477fe->enter($__internal_e3c70e64d21592843b1885666eb3c00d3f6e5b1a6cce4ec61df2d78f656477fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::_menu_admin.html.twig"));

        // line 1
        echo "<li ";
        if ((is_string($__internal_51afc7591295436160c9b7c172f97e1d598e9fe78ce96e89d8867ebc468a8e2d = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_030859c007d5d8ae12149973ee6afc4a2117bf0a41e7f91792a0ec92bcf131c0 = "admin_menu") && ('' === $__internal_030859c007d5d8ae12149973ee6afc4a2117bf0a41e7f91792a0ec92bcf131c0 || 0 === strpos($__internal_51afc7591295436160c9b7c172f97e1d598e9fe78ce96e89d8867ebc468a8e2d, $__internal_030859c007d5d8ae12149973ee6afc4a2117bf0a41e7f91792a0ec92bcf131c0)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("admin_menu");
        echo "\">";
        echo "Menu";
        echo "</a>
</li>
<li class=\"dropdown ";
        // line 4
        if (((is_string($__internal_7bf70bbede516e9240cb46fa3ff7feab019c3be4a449155595a363b10fdaac90 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_98312f830924db47852487f9a1da2fb75f1af196c2a303139daf1d3add79966c = "admin_product") && ('' === $__internal_98312f830924db47852487f9a1da2fb75f1af196c2a303139daf1d3add79966c || 0 === strpos($__internal_7bf70bbede516e9240cb46fa3ff7feab019c3be4a449155595a363b10fdaac90, $__internal_98312f830924db47852487f9a1da2fb75f1af196c2a303139daf1d3add79966c))) || (is_string($__internal_b20cd52c093ad5f8a1bdc4b7a07dee9986d9325012b671d55c09e8bc070ee7a1 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_681d1d3b43e3e04d3a0ee0b297eec869a9e9c42374f938b43180ebfda1aaf0cc = "admin_category") && ('' === $__internal_681d1d3b43e3e04d3a0ee0b297eec869a9e9c42374f938b43180ebfda1aaf0cc || 0 === strpos($__internal_b20cd52c093ad5f8a1bdc4b7a07dee9986d9325012b671d55c09e8bc070ee7a1, $__internal_681d1d3b43e3e04d3a0ee0b297eec869a9e9c42374f938b43180ebfda1aaf0cc))))) {
            echo "active";
        }
        echo "\">
    <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 5
        echo "Produits";
        echo " <b
                class=\"caret\"></b></a>
    <ul class=\"dropdown-menu\">
        <li ";
        // line 8
        if ((is_string($__internal_9ba6190f1bb6b696bfc415a346dec82d9ded92946cdc90d511d4adc118edcbd3 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a94827c1d1615cc913f43886d4954e0263622b7fda2189b0e499799ca51c8002 = "admin_product") && ('' === $__internal_a94827c1d1615cc913f43886d4954e0263622b7fda2189b0e499799ca51c8002 || 0 === strpos($__internal_9ba6190f1bb6b696bfc415a346dec82d9ded92946cdc90d511d4adc118edcbd3, $__internal_a94827c1d1615cc913f43886d4954e0263622b7fda2189b0e499799ca51c8002)))) {
            echo "class=\"active\"";
        }
        echo "><a
                    href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_product");
        echo "\">";
        echo "Produits";
        echo "</a></li>
        <li ";
        // line 10
        if ((is_string($__internal_a5b2442d98a6d09d626bf1242a52361cd55255608ff923abf2ea64eb83ae9e82 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4d0bc7badfb5ca3284115bb2e8e6e5dbf7c1a1c15f0a5ff9dc67158e646a04ca = "admin_category") && ('' === $__internal_4d0bc7badfb5ca3284115bb2e8e6e5dbf7c1a1c15f0a5ff9dc67158e646a04ca || 0 === strpos($__internal_a5b2442d98a6d09d626bf1242a52361cd55255608ff923abf2ea64eb83ae9e82, $__internal_4d0bc7badfb5ca3284115bb2e8e6e5dbf7c1a1c15f0a5ff9dc67158e646a04ca)))) {
            echo "class=\"active\"";
        }
        echo "><a
                    href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\">";
        echo "Catégories";
        echo "</a></li>
    </ul>
</li>
<li ";
        // line 14
        if ((is_string($__internal_d76a7fea81a668890b7cc23a6ac743499265da4ec6f4b72b928aa60972cf7235 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_370b8450634b50c143e30fe29c978e821079a2316aa7fdc862230880987bcb72 = "admin_news") && ('' === $__internal_370b8450634b50c143e30fe29c978e821079a2316aa7fdc862230880987bcb72 || 0 === strpos($__internal_d76a7fea81a668890b7cc23a6ac743499265da4ec6f4b72b928aa60972cf7235, $__internal_370b8450634b50c143e30fe29c978e821079a2316aa7fdc862230880987bcb72)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_news");
        echo "\">";
        echo "News";
        echo "</a>
</li>
<li ";
        // line 17
        if ((is_string($__internal_6560f26597b26c96c139f30c986979a213c57265c32101560cfd9182562be597 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_2d1381b4cc90ad63693a63fb2b213420ce4ce1f341e1089aeab0c596286de643 = "admin_partner") && ('' === $__internal_2d1381b4cc90ad63693a63fb2b213420ce4ce1f341e1089aeab0c596286de643 || 0 === strpos($__internal_6560f26597b26c96c139f30c986979a213c57265c32101560cfd9182562be597, $__internal_2d1381b4cc90ad63693a63fb2b213420ce4ce1f341e1089aeab0c596286de643)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_partner");
        echo "\">";
        echo "Partenaires";
        echo "</a>
</li>
<li ";
        // line 20
        if ((is_string($__internal_c3688844a0095bed72fd3aa012620ea24ac1eab1662fe137cd9d6d2a1d44b351 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b418ba19dc65eee0b5f577d59b51b02436ddc74c4f07da96b2820a15b9958f80 = "admin_guestbook") && ('' === $__internal_b418ba19dc65eee0b5f577d59b51b02436ddc74c4f07da96b2820a15b9958f80 || 0 === strpos($__internal_c3688844a0095bed72fd3aa012620ea24ac1eab1662fe137cd9d6d2a1d44b351, $__internal_b418ba19dc65eee0b5f577d59b51b02436ddc74c4f07da96b2820a15b9958f80)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_guestbook");
        echo "\">";
        echo "Livre d'or";
        echo "</a>
</li>
<li ";
        // line 23
        if ((is_string($__internal_281d9fd42e7b43f7ca00c3e95844885042521c74181f5cce8e07ae84c3c42166 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_3b4a51d82434b34108e3b4b3de074fb76ccff2dd99ad569befbeb3b2d2db4a89 = "admin_faq") && ('' === $__internal_3b4a51d82434b34108e3b4b3de074fb76ccff2dd99ad569befbeb3b2d2db4a89 || 0 === strpos($__internal_281d9fd42e7b43f7ca00c3e95844885042521c74181f5cce8e07ae84c3c42166, $__internal_3b4a51d82434b34108e3b4b3de074fb76ccff2dd99ad569befbeb3b2d2db4a89)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_faq");
        echo "\">";
        echo "F.A.Q";
        echo "</a>
</li>
<li ";
        // line 26
        if ((is_string($__internal_adfb41f21b83a5503a56e4c1f605bf5d56576dea254c812720f9540d1baed9b0 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_484884b0862ddbe51e0862cc0dbb3362bf9823b883b7c9ce1822eb56cef343e7 = "admin_gallery") && ('' === $__internal_484884b0862ddbe51e0862cc0dbb3362bf9823b883b7c9ce1822eb56cef343e7 || 0 === strpos($__internal_adfb41f21b83a5503a56e4c1f605bf5d56576dea254c812720f9540d1baed9b0, $__internal_484884b0862ddbe51e0862cc0dbb3362bf9823b883b7c9ce1822eb56cef343e7)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_gallery");
        echo "\">";
        echo "Galeries";
        echo "</a>
</li>
<li ";
        // line 29
        if ((is_string($__internal_66423954be6bf0385d133acb7c61cac4d4d319460f341d38ae4cbba69c9e7c90 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4cfa8857c4a49cf651b6b729cdfe766fe2dfeeb757d253b0c1fa26752fb8b50d = "admin_folder") && ('' === $__internal_4cfa8857c4a49cf651b6b729cdfe766fe2dfeeb757d253b0c1fa26752fb8b50d || 0 === strpos($__internal_66423954be6bf0385d133acb7c61cac4d4d319460f341d38ae4cbba69c9e7c90, $__internal_4cfa8857c4a49cf651b6b729cdfe766fe2dfeeb757d253b0c1fa26752fb8b50d)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_folder");
        echo "\">";
        echo "Gestion documentaire";
        echo "</a>
</li>
<li ";
        // line 32
        if ((is_string($__internal_2673ec883c779cb34cb65187c8b7680e20aac51e34839a2451ede2831515156e = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e70b811a8826e8807a67489fc6e8cb150be1104b011e71bdc537ddcfa2a9d315 = "admin_contact") && ('' === $__internal_e70b811a8826e8807a67489fc6e8cb150be1104b011e71bdc537ddcfa2a9d315 || 0 === strpos($__internal_2673ec883c779cb34cb65187c8b7680e20aac51e34839a2451ede2831515156e, $__internal_e70b811a8826e8807a67489fc6e8cb150be1104b011e71bdc537ddcfa2a9d315)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("admin_contact");
        echo "\">";
        echo "Contact";
        echo "</a>
</li>
<li ";
        // line 35
        if ((is_string($__internal_33aea905ff2cffec183666474dc756d70cdee57dbc1f389da3fab38750f99a2c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4a1d189ecb6a6694c5478d6695fe471649d5cd4c9f8c00c11e4e7ad91aa3333e = "admin_user") && ('' === $__internal_4a1d189ecb6a6694c5478d6695fe471649d5cd4c9f8c00c11e4e7ad91aa3333e || 0 === strpos($__internal_33aea905ff2cffec183666474dc756d70cdee57dbc1f389da3fab38750f99a2c, $__internal_4a1d189ecb6a6694c5478d6695fe471649d5cd4c9f8c00c11e4e7ad91aa3333e)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\">";
        echo "Utilisateurs";
        echo "</a>
</li>";
        
        $__internal_e3c70e64d21592843b1885666eb3c00d3f6e5b1a6cce4ec61df2d78f656477fe->leave($__internal_e3c70e64d21592843b1885666eb3c00d3f6e5b1a6cce4ec61df2d78f656477fe_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::_menu_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 36,  165 => 35,  158 => 33,  152 => 32,  145 => 30,  139 => 29,  132 => 27,  126 => 26,  119 => 24,  113 => 23,  106 => 21,  100 => 20,  93 => 18,  87 => 17,  80 => 15,  74 => 14,  66 => 11,  60 => 10,  54 => 9,  48 => 8,  42 => 5,  36 => 4,  29 => 2,  22 => 1,);
    }
}
