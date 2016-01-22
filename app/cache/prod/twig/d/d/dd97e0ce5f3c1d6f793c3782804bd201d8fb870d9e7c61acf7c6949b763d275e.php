<?php

/* PointWebAdminBundle::_menu_admin.html.twig */
class __TwigTemplate_dd97e0ce5f3c1d6f793c3782804bd201d8fb870d9e7c61acf7c6949b763d275e extends Twig_Template
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
        $__internal_c09492246e434798e06a557ad224c5c1a3ead6acabc33ffa8dc3f4eeef8b4391 = $this->env->getExtension("native_profiler");
        $__internal_c09492246e434798e06a557ad224c5c1a3ead6acabc33ffa8dc3f4eeef8b4391->enter($__internal_c09492246e434798e06a557ad224c5c1a3ead6acabc33ffa8dc3f4eeef8b4391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::_menu_admin.html.twig"));

        // line 1
        echo "<li ";
        if ((is_string($__internal_030b8e1ef9c2e9fbe9e36e3507f55df61bb27f26542e4b5b384068e3595b5882 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f3660937a5fda6d603ebcc4e329af92bf3b09bc3e7130178a5185996d53c9cc7 = "admin_menu") && ('' === $__internal_f3660937a5fda6d603ebcc4e329af92bf3b09bc3e7130178a5185996d53c9cc7 || 0 === strpos($__internal_030b8e1ef9c2e9fbe9e36e3507f55df61bb27f26542e4b5b384068e3595b5882, $__internal_f3660937a5fda6d603ebcc4e329af92bf3b09bc3e7130178a5185996d53c9cc7)))) {
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
        if (((is_string($__internal_9e00f32a7728b98d2f84ea10b47e94480f66143675ee9d1e213ddc78e7157106 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_bd7f15270863fd478a463f2617795f46b9e1ee448855d412afef95cef2dcfbc8 = "admin_product") && ('' === $__internal_bd7f15270863fd478a463f2617795f46b9e1ee448855d412afef95cef2dcfbc8 || 0 === strpos($__internal_9e00f32a7728b98d2f84ea10b47e94480f66143675ee9d1e213ddc78e7157106, $__internal_bd7f15270863fd478a463f2617795f46b9e1ee448855d412afef95cef2dcfbc8))) || (is_string($__internal_68bf2a947cb14d101c713e3069b9b53a6b080b4e3825f2ad7b1b94a006f1e28a = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4a63e678afcf6d839512c8baa0a578942ffaefb3cc245e373d7aebd6c12cf7c1 = "admin_category") && ('' === $__internal_4a63e678afcf6d839512c8baa0a578942ffaefb3cc245e373d7aebd6c12cf7c1 || 0 === strpos($__internal_68bf2a947cb14d101c713e3069b9b53a6b080b4e3825f2ad7b1b94a006f1e28a, $__internal_4a63e678afcf6d839512c8baa0a578942ffaefb3cc245e373d7aebd6c12cf7c1))))) {
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
        if ((is_string($__internal_ac51f4b3a4dfe47fb9a5ab3810135ad4097ec4fee5ce1150b50d5418cfe74954 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_be480767f6c44e190350b92ec7c5732bffcba4b8a4028300ca14603806aa38f6 = "admin_product") && ('' === $__internal_be480767f6c44e190350b92ec7c5732bffcba4b8a4028300ca14603806aa38f6 || 0 === strpos($__internal_ac51f4b3a4dfe47fb9a5ab3810135ad4097ec4fee5ce1150b50d5418cfe74954, $__internal_be480767f6c44e190350b92ec7c5732bffcba4b8a4028300ca14603806aa38f6)))) {
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
        if ((is_string($__internal_5db5f03a6eed7bd01f75351d55aa7a26e262bc9536c0a583cd42431a60de1d0c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_eddc20495c7a306dc7683bc0d5a3091ad7c057278a7b27d6a71fbe6cb7f01de5 = "admin_category") && ('' === $__internal_eddc20495c7a306dc7683bc0d5a3091ad7c057278a7b27d6a71fbe6cb7f01de5 || 0 === strpos($__internal_5db5f03a6eed7bd01f75351d55aa7a26e262bc9536c0a583cd42431a60de1d0c, $__internal_eddc20495c7a306dc7683bc0d5a3091ad7c057278a7b27d6a71fbe6cb7f01de5)))) {
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
        if ((is_string($__internal_8677c9ebfcc7e63ae7e61062977016805477bca5e2125b8ff38adc83369fb6aa = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b76e3bebeaef35dc230638607a54f226f5bda1c2245080f2f9fc49cf5f93648c = "admin_news") && ('' === $__internal_b76e3bebeaef35dc230638607a54f226f5bda1c2245080f2f9fc49cf5f93648c || 0 === strpos($__internal_8677c9ebfcc7e63ae7e61062977016805477bca5e2125b8ff38adc83369fb6aa, $__internal_b76e3bebeaef35dc230638607a54f226f5bda1c2245080f2f9fc49cf5f93648c)))) {
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
        if ((is_string($__internal_d78806f02d252564caccab20db410baea5964e0725fb521dc88d404d4296f5bd = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_05727d26efde8da020717c0a5df7311826c59b1202dba68ccbd596274a6d7126 = "admin_partner") && ('' === $__internal_05727d26efde8da020717c0a5df7311826c59b1202dba68ccbd596274a6d7126 || 0 === strpos($__internal_d78806f02d252564caccab20db410baea5964e0725fb521dc88d404d4296f5bd, $__internal_05727d26efde8da020717c0a5df7311826c59b1202dba68ccbd596274a6d7126)))) {
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
        if ((is_string($__internal_5ec5794e5b8bfe4b78558c2d4c42af6f6729af9e0c47bf1c5b55cd59edb7045e = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b038d5a73b2ecd30ce187d96f6b7e2b07035216c854b7774ebbc0b65b129a7f4 = "admin_guestbook") && ('' === $__internal_b038d5a73b2ecd30ce187d96f6b7e2b07035216c854b7774ebbc0b65b129a7f4 || 0 === strpos($__internal_5ec5794e5b8bfe4b78558c2d4c42af6f6729af9e0c47bf1c5b55cd59edb7045e, $__internal_b038d5a73b2ecd30ce187d96f6b7e2b07035216c854b7774ebbc0b65b129a7f4)))) {
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
        if ((is_string($__internal_d0bced5fe549f9fc6a659e6f73475865a069f7b00669441159bca6b65adbb3cd = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d1e5a2fa07df281e32e8ca57ae45aacae7ac2124e1c9753e3bd2bf952348ccf9 = "admin_faq") && ('' === $__internal_d1e5a2fa07df281e32e8ca57ae45aacae7ac2124e1c9753e3bd2bf952348ccf9 || 0 === strpos($__internal_d0bced5fe549f9fc6a659e6f73475865a069f7b00669441159bca6b65adbb3cd, $__internal_d1e5a2fa07df281e32e8ca57ae45aacae7ac2124e1c9753e3bd2bf952348ccf9)))) {
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
        if ((is_string($__internal_a28b90714b8eb28bab667692a0dc6e2a32d07d0a46e51ca4560a5173e61e8dff = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a58b55b67b0f8faa3b49038618e14eded05df09ac36608b619eb5140a317a965 = "admin_gallery") && ('' === $__internal_a58b55b67b0f8faa3b49038618e14eded05df09ac36608b619eb5140a317a965 || 0 === strpos($__internal_a28b90714b8eb28bab667692a0dc6e2a32d07d0a46e51ca4560a5173e61e8dff, $__internal_a58b55b67b0f8faa3b49038618e14eded05df09ac36608b619eb5140a317a965)))) {
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
        if ((is_string($__internal_461d08d5b2160a0b41a1e34f756bc2ec1b44c7595b434bffe0d6867ce95faa24 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6d20788d0d49ec59b56b2576312a5d33f7c3367ea67908d358351531aa0f7771 = "admin_folder") && ('' === $__internal_6d20788d0d49ec59b56b2576312a5d33f7c3367ea67908d358351531aa0f7771 || 0 === strpos($__internal_461d08d5b2160a0b41a1e34f756bc2ec1b44c7595b434bffe0d6867ce95faa24, $__internal_6d20788d0d49ec59b56b2576312a5d33f7c3367ea67908d358351531aa0f7771)))) {
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
        if ((is_string($__internal_2fd59746ee6f2cb4167482521ba831b4d0c7c0688d86a65674c549cbcb2310cd = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_31473d7a72896644eec09b88c828ba6000e5fc15e52bd8b977d247082942c97c = "admin_contact") && ('' === $__internal_31473d7a72896644eec09b88c828ba6000e5fc15e52bd8b977d247082942c97c || 0 === strpos($__internal_2fd59746ee6f2cb4167482521ba831b4d0c7c0688d86a65674c549cbcb2310cd, $__internal_31473d7a72896644eec09b88c828ba6000e5fc15e52bd8b977d247082942c97c)))) {
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
        if ((is_string($__internal_fbc7a22e32a75bb7419ac3a2ba972f43ebc6e23deaeb7bed36bac2871eb925f7 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_33bfaf77116d82895c5d4585da17d5b06da8fc9ac25aa53ddd4b2d1052ffea66 = "admin_user") && ('' === $__internal_33bfaf77116d82895c5d4585da17d5b06da8fc9ac25aa53ddd4b2d1052ffea66 || 0 === strpos($__internal_fbc7a22e32a75bb7419ac3a2ba972f43ebc6e23deaeb7bed36bac2871eb925f7, $__internal_33bfaf77116d82895c5d4585da17d5b06da8fc9ac25aa53ddd4b2d1052ffea66)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("admin_user");
        echo "\">";
        echo "Utilisateurs";
        echo "</a>
</li>
<li ";
        // line 38
        if ((is_string($__internal_72b3e908f0b15621ec55a6f77902adbd5ab9b797215b714acb4067e644a76755 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_99e1b6ed23579675c95cd9e849acc64c94851648a07c3b72903cd16a4095d784 = "admin_ecommerce") && ('' === $__internal_99e1b6ed23579675c95cd9e849acc64c94851648a07c3b72903cd16a4095d784 || 0 === strpos($__internal_72b3e908f0b15621ec55a6f77902adbd5ab9b797215b714acb4067e644a76755, $__internal_99e1b6ed23579675c95cd9e849acc64c94851648a07c3b72903cd16a4095d784)))) {
            echo "class=\"active\"";
        }
        echo ">
    <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("admin_ecommerce");
        echo "\">Gestion du e-commerce</a>
</li>";
        
        $__internal_c09492246e434798e06a557ad224c5c1a3ead6acabc33ffa8dc3f4eeef8b4391->leave($__internal_c09492246e434798e06a557ad224c5c1a3ead6acabc33ffa8dc3f4eeef8b4391_prof);

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
        return array (  184 => 39,  178 => 38,  171 => 36,  165 => 35,  158 => 33,  152 => 32,  145 => 30,  139 => 29,  132 => 27,  126 => 26,  119 => 24,  113 => 23,  106 => 21,  100 => 20,  93 => 18,  87 => 17,  80 => 15,  74 => 14,  66 => 11,  60 => 10,  54 => 9,  48 => 8,  42 => 5,  36 => 4,  29 => 2,  22 => 1,);
    }
}
