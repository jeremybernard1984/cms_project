<?php

/* PointWebAdminBundle::_menuleft_admin.html.twig */
class __TwigTemplate_69a113691c2ae9ca2e466eaf882e6c96328b753a24b5da3e2c23d01e91d41a20 extends Twig_Template
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
        $__internal_6079dfff218e7cde36c33b661561d8f257a6a547b3a7ff126136db69bfa870fa = $this->env->getExtension("native_profiler");
        $__internal_6079dfff218e7cde36c33b661561d8f257a6a547b3a7ff126136db69bfa870fa->enter($__internal_6079dfff218e7cde36c33b661561d8f257a6a547b3a7ff126136db69bfa870fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle::_menuleft_admin.html.twig"));

        // line 1
        echo "<div class=\"navbar-default sidebar\" role=\"navigation\">
    <div class=\"sidebar-nav navbar-collapse\">
        <ul class=\"nav\" id=\"side-menu\">
            ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAdminBundle:Default:userEntity"));
        echo "
            <!--
            <li class=\"sidebar-search\">
                <div class=\"input-group custom-search-form\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
                                <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"button\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                </div>

            </li>
            -->
            <li ";
        // line 18
        if ((is_string($__internal_0842321b866d06b9b3481dcbc9c3e1698e1ab2c2e48c98271958de8de7972ebf = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e46b239c09ee7f3c563f50180a19498765c667496af08b4cb5e416c08a2e0aa6 = "point_web_admin_homepage") && ('' === $__internal_e46b239c09ee7f3c563f50180a19498765c667496af08b4cb5e416c08a2e0aa6 || 0 === strpos($__internal_0842321b866d06b9b3481dcbc9c3e1698e1ab2c2e48c98271958de8de7972ebf, $__internal_e46b239c09ee7f3c563f50180a19498765c667496af08b4cb5e416c08a2e0aa6)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("point_web_admin_homepage");
        echo "\"><i class=\"fa fa-home fa-fw\"></i> ";
        echo "Homepage";
        echo "</a>
            </li>
            <li ";
        // line 21
        if ((is_string($__internal_2c72b4300909041678ed5342722b423994dbdd5860170ee5b6f4bea5c7fd07ab = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c9af1f1cf2cc3897c06f4487b163422d4b8cc435aa98400867c8dc2d98c09fa5 = "admin_menu") && ('' === $__internal_c9af1f1cf2cc3897c06f4487b163422d4b8cc435aa98400867c8dc2d98c09fa5 || 0 === strpos($__internal_2c72b4300909041678ed5342722b423994dbdd5860170ee5b6f4bea5c7fd07ab, $__internal_c9af1f1cf2cc3897c06f4487b163422d4b8cc435aa98400867c8dc2d98c09fa5)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("admin_menu");
        echo "\"><i class=\"fa fa-sitemap fa-fw\"></i> ";
        echo "Menu";
        echo "</a>
            </li>
            <li class=\"";
        // line 24
        if (((is_string($__internal_6aeb774dc443645837e4e7056e24430cb38dae9ba333eef425dd24b8e83ad52b = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_9efd7256c3e0e65f151a680acd0a668655966b9b98c13c3ba59373d862b6bd41 = "admin_product") && ('' === $__internal_9efd7256c3e0e65f151a680acd0a668655966b9b98c13c3ba59373d862b6bd41 || 0 === strpos($__internal_6aeb774dc443645837e4e7056e24430cb38dae9ba333eef425dd24b8e83ad52b, $__internal_9efd7256c3e0e65f151a680acd0a668655966b9b98c13c3ba59373d862b6bd41))) || (is_string($__internal_28d6e7cd15da2d8965c79b7a4fe625c72d6f24a9d50ebc652d32e73a4aa7cb04 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c516f75590cae298b4326bb28f9e72c46c3a4ac3b915694eeceb659e8ce8e1b7 = "admin_category") && ('' === $__internal_c516f75590cae298b4326bb28f9e72c46c3a4ac3b915694eeceb659e8ce8e1b7 || 0 === strpos($__internal_28d6e7cd15da2d8965c79b7a4fe625c72d6f24a9d50ebc652d32e73a4aa7cb04, $__internal_c516f75590cae298b4326bb28f9e72c46c3a4ac3b915694eeceb659e8ce8e1b7))))) {
            echo "active";
        }
        echo "\">
                <a href=\"#\"><i class=\"fa fa-shopping-cart fa-fw\"></i> ";
        // line 25
        echo "Produits";
        echo " <span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li ";
        // line 27
        if ((is_string($__internal_c7a2f331c39900d4f810a0c86f59e89ade53dd34128812f9e0e66c36b683a94d = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6d0854a601d9ad04bcbab6b59c814e4fe755b4733ed47a364a9f3e1aaae31966 = "admin_product") && ('' === $__internal_6d0854a601d9ad04bcbab6b59c814e4fe755b4733ed47a364a9f3e1aaae31966 || 0 === strpos($__internal_c7a2f331c39900d4f810a0c86f59e89ade53dd34128812f9e0e66c36b683a94d, $__internal_6d0854a601d9ad04bcbab6b59c814e4fe755b4733ed47a364a9f3e1aaae31966)))) {
            echo "class=\"active\"";
        }
        echo "><a
                                href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_product");
        echo "\"><i class=\"fa fa-shopping-cart fa-fw\"></i> ";
        echo "Produits";
        echo "</a></li>
                    <li ";
        // line 29
        if ((is_string($__internal_d5e5a1bed518ca47691f9b7438bb8825219451af8206a735791eb261c7484d1f = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_648da915ab14759e1512ed8e4ef9b852f3f46a77a0b103f9e646adc3d604c110 = "admin_category") && ('' === $__internal_648da915ab14759e1512ed8e4ef9b852f3f46a77a0b103f9e646adc3d604c110 || 0 === strpos($__internal_d5e5a1bed518ca47691f9b7438bb8825219451af8206a735791eb261c7484d1f, $__internal_648da915ab14759e1512ed8e4ef9b852f3f46a77a0b103f9e646adc3d604c110)))) {
            echo "class=\"active\"";
        }
        echo "><a
                                href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_category");
        echo "\"><i class=\"fa fa-shopping-cart fa-fw\"></i> ";
        echo "Catégories";
        echo "</a></li>
                </ul>
            </li>

            <li ";
        // line 34
        if ((is_string($__internal_3bca8760315c885915eb2772034b68708659b79d512507f0243ae2e0d3cf8465 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_876a2e5a1cb3ac22346db25636a3f3a2d090d751b77781649edf1f94a18b97c0 = "admin_news") && ('' === $__internal_876a2e5a1cb3ac22346db25636a3f3a2d090d751b77781649edf1f94a18b97c0 || 0 === strpos($__internal_3bca8760315c885915eb2772034b68708659b79d512507f0243ae2e0d3cf8465, $__internal_876a2e5a1cb3ac22346db25636a3f3a2d090d751b77781649edf1f94a18b97c0)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("admin_news");
        echo "\"><i class=\"fa fa-newspaper-o fa-fw\"></i> ";
        echo "News";
        echo "</a>
            </li>
            <li ";
        // line 37
        if ((is_string($__internal_5b1a819f20469e0d8c56ce3546127703ef2a13430fb61ea8bfa9b9c2d35b1984 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d104e2aaada4e0e6190f29d7f3f3f797eff61e2f21505c47ee5813482f7de48f = "admin_partner") && ('' === $__internal_d104e2aaada4e0e6190f29d7f3f3f797eff61e2f21505c47ee5813482f7de48f || 0 === strpos($__internal_5b1a819f20469e0d8c56ce3546127703ef2a13430fb61ea8bfa9b9c2d35b1984, $__internal_d104e2aaada4e0e6190f29d7f3f3f797eff61e2f21505c47ee5813482f7de48f)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"#\"><i class=\"fa fa-graduation-cap fa-fw\"></i> ";
        // line 38
        echo "Partenaires";
        echo " <span class=\"fa arrow\"></span></a>
                <ul class=\"nav nav-second-level\">
                    <li ";
        // line 40
        if ((is_string($__internal_78df764423ba040c4ed0fc4eecfef0d8ddf356caf53d0b449f7ccca9394cde3a = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_1fa16320ec2bf488bfc379faee1b79a055252234d2ac0bf86a5aebfa8039deb1 = "admin_partner") && ('' === $__internal_1fa16320ec2bf488bfc379faee1b79a055252234d2ac0bf86a5aebfa8039deb1 || 0 === strpos($__internal_78df764423ba040c4ed0fc4eecfef0d8ddf356caf53d0b449f7ccca9394cde3a, $__internal_1fa16320ec2bf488bfc379faee1b79a055252234d2ac0bf86a5aebfa8039deb1)))) {
            echo "class=\"active\"";
        }
        echo "><a
                                href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("admin_partner");
        echo "\"><i class=\"fa fa-graduation-cap fa-fw\"></i> ";
        echo "Partenaires";
        echo "</a></li>
                    <li ";
        // line 42
        if ((is_string($__internal_f31cc13dae08e5e29a2551aa21dd9f79046767cd3bcfc98939b594fde9f28a7a = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_ab9d463e2f79abb6745e74d913916e99ac5327fb2d6a2b84fe26d9dbe734b72c = "admin_partner_category") && ('' === $__internal_ab9d463e2f79abb6745e74d913916e99ac5327fb2d6a2b84fe26d9dbe734b72c || 0 === strpos($__internal_f31cc13dae08e5e29a2551aa21dd9f79046767cd3bcfc98939b594fde9f28a7a, $__internal_ab9d463e2f79abb6745e74d913916e99ac5327fb2d6a2b84fe26d9dbe734b72c)))) {
            echo "class=\"active\"";
        }
        echo "><a
                                href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("admin_partner_category");
        echo "\"><i class=\"fa fa-graduation-cap fa-fw\"></i> ";
        echo "Catégories";
        echo "</a></li>
                </ul>


            </li>
            <li ";
        // line 48
        if ((is_string($__internal_224bc98e7ee97f0c7eadf4b8349d512aaafd875fb1ad196e97e5241030d3a4bc = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7091865b54e17eba0dc9d5b8457ebb5850a480cf3997256e977305a35655d3f7 = "admin_guestbook") && ('' === $__internal_7091865b54e17eba0dc9d5b8457ebb5850a480cf3997256e977305a35655d3f7 || 0 === strpos($__internal_224bc98e7ee97f0c7eadf4b8349d512aaafd875fb1ad196e97e5241030d3a4bc, $__internal_7091865b54e17eba0dc9d5b8457ebb5850a480cf3997256e977305a35655d3f7)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("admin_guestbook");
        echo "\"><i class=\"fa fa-book fa-fw\"></i> ";
        echo "Livre d'or";
        echo "</a>
            </li>
            <li ";
        // line 51
        if ((is_string($__internal_e86e04662a8dbb5a256464d1e6938e78604b692cd42516e993d67598d5f21c12 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_268f053e371f90b9472a168082b1b4f84e11672af5e2b6c98032b4d2ec7be399 = "admin_faq") && ('' === $__internal_268f053e371f90b9472a168082b1b4f84e11672af5e2b6c98032b4d2ec7be399 || 0 === strpos($__internal_e86e04662a8dbb5a256464d1e6938e78604b692cd42516e993d67598d5f21c12, $__internal_268f053e371f90b9472a168082b1b4f84e11672af5e2b6c98032b4d2ec7be399)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("admin_faq");
        echo "\"><i class=\"fa fa-question-circle fa-fw\"></i> ";
        echo "F.A.Q";
        echo "</a>
            </li>
            <li ";
        // line 54
        if ((is_string($__internal_5812d8fea5578b6335d524f90018b0e3c909ce80cb06415e2275035ca0b8d681 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_143ab471ff5a4e585198dbc4925f78ece2ec8c4fbb3054d83faf6315d64804bf = "admin_gallery") && ('' === $__internal_143ab471ff5a4e585198dbc4925f78ece2ec8c4fbb3054d83faf6315d64804bf || 0 === strpos($__internal_5812d8fea5578b6335d524f90018b0e3c909ce80cb06415e2275035ca0b8d681, $__internal_143ab471ff5a4e585198dbc4925f78ece2ec8c4fbb3054d83faf6315d64804bf)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("admin_gallery");
        echo "\"><i class=\"fa fa-photo fa-fw\"></i> ";
        echo "Galeries";
        echo "</a>
            </li>
            <li ";
        // line 57
        if ((is_string($__internal_621199c7146d557e77811fb218dcdd024ace65d19f82b6706b10d42c4d656f15 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_2064c9465c226ff04094fb6788950fd2fa012f6f655fc9eed34068f763707ef7 = "admin_folder") && ('' === $__internal_2064c9465c226ff04094fb6788950fd2fa012f6f655fc9eed34068f763707ef7 || 0 === strpos($__internal_621199c7146d557e77811fb218dcdd024ace65d19f82b6706b10d42c4d656f15, $__internal_2064c9465c226ff04094fb6788950fd2fa012f6f655fc9eed34068f763707ef7)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("admin_folder");
        echo "\"><i class=\"fa fa-folder fa-fw\"></i> ";
        echo "Gestion documentaire";
        echo "</a>
            </li>
            <li ";
        // line 60
        if ((is_string($__internal_5e649cd9dc6e95365085aa11eda83aa0f3c323783b38dbd4e3be86375505c149 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6438765eba80db1e3c5d61c79024c13261266260e59ebccb2d677e17252ca02c = "admin_contact") && ('' === $__internal_6438765eba80db1e3c5d61c79024c13261266260e59ebccb2d677e17252ca02c || 0 === strpos($__internal_5e649cd9dc6e95365085aa11eda83aa0f3c323783b38dbd4e3be86375505c149, $__internal_6438765eba80db1e3c5d61c79024c13261266260e59ebccb2d677e17252ca02c)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("admin_contact");
        echo "\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
        echo "Contact";
        echo "</a>
            </li>
            <li ";
        // line 63
        if ((is_string($__internal_40157fa4af26d9d6ab37c3a153d98c615eec376d4497daead99050d78fdada1c = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c0c9f649c46b258ceb72a3ef156a98db99a6e254d15550d4f0c14a09f67eabaa = "admin_user") && ('' === $__internal_c0c9f649c46b258ceb72a3ef156a98db99a6e254d15550d4f0c14a09f67eabaa || 0 === strpos($__internal_40157fa4af26d9d6ab37c3a153d98c615eec376d4497daead99050d78fdada1c, $__internal_c0c9f649c46b258ceb72a3ef156a98db99a6e254d15550d4f0c14a09f67eabaa)))) {
            echo "class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 64
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
        
        $__internal_6079dfff218e7cde36c33b661561d8f257a6a547b3a7ff126136db69bfa870fa->leave($__internal_6079dfff218e7cde36c33b661561d8f257a6a547b3a7ff126136db69bfa870fa_prof);

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
        return array (  231 => 64,  225 => 63,  218 => 61,  212 => 60,  205 => 58,  199 => 57,  192 => 55,  186 => 54,  179 => 52,  173 => 51,  166 => 49,  160 => 48,  150 => 43,  144 => 42,  138 => 41,  132 => 40,  127 => 38,  121 => 37,  114 => 35,  108 => 34,  99 => 30,  93 => 29,  87 => 28,  81 => 27,  76 => 25,  70 => 24,  63 => 22,  57 => 21,  50 => 19,  44 => 18,  27 => 4,  22 => 1,);
    }
}
/* <div class="navbar-default sidebar" role="navigation">*/
/*     <div class="sidebar-nav navbar-collapse">*/
/*         <ul class="nav" id="side-menu">*/
/*             {{ render(controller("PointWebAdminBundle:Default:userEntity")) }}*/
/*             <!--*/
/*             <li class="sidebar-search">*/
/*                 <div class="input-group custom-search-form">*/
/*                     <input type="text" class="form-control" placeholder="Search...">*/
/*                                 <span class="input-group-btn">*/
/*                                 <button class="btn btn-default" type="button">*/
/*                                     <i class="fa fa-search"></i>*/
/*                                 </button>*/
/*                             </span>*/
/*                 </div>*/
/* */
/*             </li>*/
/*             -->*/
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
