<?php

/* PointWebUserBundle:User:show.html.twig */
class __TwigTemplate_76f81cc7fc52349c7eb781994be4e17972e06f7d0f95051de1e187b4d30349ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72f0674543839507966a4daaf059baa52d603cfcf7d142ca48b55329e4776bc6 = $this->env->getExtension("native_profiler");
        $__internal_72f0674543839507966a4daaf059baa52d603cfcf7d142ca48b55329e4776bc6->enter($__internal_72f0674543839507966a4daaf059baa52d603cfcf7d142ca48b55329e4776bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebUserBundle:User:show.html.twig"));

        // line 1
        echo "            <!DOCTYPE html>
            <html lang=\"fr\">
            <head>
                <meta charset=\"UTF-8\"/>
                <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
                ";
        // line 6
        $this->loadTemplate("PointWebAdminBundle::_header.html.twig", "PointWebUserBundle:User:show.html.twig", 6)->display($context);
        // line 7
        echo "                <style>
                    .panel-heading, .panel-footer{
                        text-align: center;font-weight:bold;
                    }
                    .img-view{
                        text-align: center;float: left;width: 150px;height:220px;font-size: 10px;border: 10px solid #fff;overflow: hidden;
                    }
                    .img-view img{
                        width: 100%;
                    }
                </style>
            </head>
            <body style=\"background: #fff;\">
            <div id=\"wrapper\">

                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        Utilisateur
                    </div>
                    <div class=\"panel-body\">

                        <div class=\"col-lg-8\">
                            <div class=\"col-lg-12\">
                                <label>Nom d'utilisateur :</label>
                                ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-lg-12\">
                                <label>Prénom :</label>
                                ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstName", array()), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-lg-12\">
                                <label>Nom :</label>
                                ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastName", array()), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-lg-12\">
                                <label>Email :</label>
                                ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "
                            </div>
                            <div class=\"col-lg-12\">
                                <label>Actif ?</label>
                                ";
        // line 47
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enabled", array()) == true)) {
            echo "Oui";
        } else {
            echo "Non";
        }
        // line 48
        echo "                            </div>
                            <div class=\"col-lg-12\">
                                <label>Rôle(s) :</label>
                                <ul class=\"role_table\">
                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 53
            echo "                                        <li style=\"padding: 10px\">";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class=\"panel-footer\">
                        <a href=\"javascript:parent.jQuery.fancybox.close();\">Fermer la fenêtre</a>
                    </div>
                </div>

            </div>
            <!-- /#wrapper -->
            ";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "            </body>
            <footer>
                ";
        // line 73
        $this->displayBlock('footer', $context, $blocks);
        // line 76
        echo "            </footer>
            </html>
";
        
        $__internal_72f0674543839507966a4daaf059baa52d603cfcf7d142ca48b55329e4776bc6->leave($__internal_72f0674543839507966a4daaf059baa52d603cfcf7d142ca48b55329e4776bc6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e7411f1813523139f75a2f1a5a9ca5c9bc46e0a32d7b7c839aaf0fe650b0533 = $this->env->getExtension("native_profiler");
        $__internal_7e7411f1813523139f75a2f1a5a9ca5c9bc46e0a32d7b7c839aaf0fe650b0533->enter($__internal_7e7411f1813523139f75a2f1a5a9ca5c9bc46e0a32d7b7c839aaf0fe650b0533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION SERCO POINT-WEB";
        
        $__internal_7e7411f1813523139f75a2f1a5a9ca5c9bc46e0a32d7b7c839aaf0fe650b0533->leave($__internal_7e7411f1813523139f75a2f1a5a9ca5c9bc46e0a32d7b7c839aaf0fe650b0533_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_75a7bc912a30659e71165d2001a5e7971725cda2599b95cf641acdd1e14dacdb = $this->env->getExtension("native_profiler");
        $__internal_75a7bc912a30659e71165d2001a5e7971725cda2599b95cf641acdd1e14dacdb->enter($__internal_75a7bc912a30659e71165d2001a5e7971725cda2599b95cf641acdd1e14dacdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "                ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebUserBundle:User:show.html.twig", 69)->display($context);
        // line 70
        echo "            ";
        
        $__internal_75a7bc912a30659e71165d2001a5e7971725cda2599b95cf641acdd1e14dacdb->leave($__internal_75a7bc912a30659e71165d2001a5e7971725cda2599b95cf641acdd1e14dacdb_prof);

    }

    // line 73
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e3de69f6ee6532589347d8ae7f671c02308601a857ff85932470cc20c2f706cf = $this->env->getExtension("native_profiler");
        $__internal_e3de69f6ee6532589347d8ae7f671c02308601a857ff85932470cc20c2f706cf->enter($__internal_e3de69f6ee6532589347d8ae7f671c02308601a857ff85932470cc20c2f706cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 74
        echo "
                ";
        
        $__internal_e3de69f6ee6532589347d8ae7f671c02308601a857ff85932470cc20c2f706cf->leave($__internal_e3de69f6ee6532589347d8ae7f671c02308601a857ff85932470cc20c2f706cf_prof);

    }

    public function getTemplateName()
    {
        return "PointWebUserBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 74,  176 => 73,  169 => 70,  166 => 69,  160 => 68,  148 => 5,  139 => 76,  137 => 73,  133 => 71,  131 => 68,  116 => 55,  107 => 53,  103 => 52,  97 => 48,  91 => 47,  84 => 43,  77 => 39,  70 => 35,  63 => 31,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/*             <!DOCTYPE html>*/
/*             <html lang="fr">*/
/*             <head>*/
/*                 <meta charset="UTF-8"/>*/
/*                 <title>{% block title %}ESPACE D'ADMINISTRATION SERCO POINT-WEB{% endblock %}</title>*/
/*                 {% include 'PointWebAdminBundle::_header.html.twig' %}*/
/*                 <style>*/
/*                     .panel-heading, .panel-footer{*/
/*                         text-align: center;font-weight:bold;*/
/*                     }*/
/*                     .img-view{*/
/*                         text-align: center;float: left;width: 150px;height:220px;font-size: 10px;border: 10px solid #fff;overflow: hidden;*/
/*                     }*/
/*                     .img-view img{*/
/*                         width: 100%;*/
/*                     }*/
/*                 </style>*/
/*             </head>*/
/*             <body style="background: #fff;">*/
/*             <div id="wrapper">*/
/* */
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading">*/
/*                         Utilisateur*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/* */
/*                         <div class="col-lg-8">*/
/*                             <div class="col-lg-12">*/
/*                                 <label>Nom d'utilisateur :</label>*/
/*                                 {{ entity.username }}*/
/*                             </div>*/
/*                             <div class="col-lg-12">*/
/*                                 <label>Prénom :</label>*/
/*                                 {{ entity.firstName }}*/
/*                             </div>*/
/*                             <div class="col-lg-12">*/
/*                                 <label>Nom :</label>*/
/*                                 {{ entity.lastName }}*/
/*                             </div>*/
/*                             <div class="col-lg-12">*/
/*                                 <label>Email :</label>*/
/*                                 {{ entity.email }}*/
/*                             </div>*/
/*                             <div class="col-lg-12">*/
/*                                 <label>Actif ?</label>*/
/*                                 {% if entity.enabled == true %}{{ 'Oui' }}{% else %}{{ 'Non' }}{% endif %}*/
/*                             </div>*/
/*                             <div class="col-lg-12">*/
/*                                 <label>Rôle(s) :</label>*/
/*                                 <ul class="role_table">*/
/*                                     {% for role in entity.roles %}*/
/*                                         <li style="padding: 10px">{{ role }}</li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                     </div>*/
/*                     <div class="panel-footer">*/
/*                         <a href="javascript:parent.jQuery.fancybox.close();">Fermer la fenêtre</a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <!-- /#wrapper -->*/
/*             {% block javascripts %}*/
/*                 {% include 'PointWebAdminBundle::_js.html.twig' %}*/
/*             {% endblock %}*/
/*             </body>*/
/*             <footer>*/
/*                 {% block footer %}*/
/* */
/*                 {% endblock %}*/
/*             </footer>*/
/*             </html>*/
/* */
