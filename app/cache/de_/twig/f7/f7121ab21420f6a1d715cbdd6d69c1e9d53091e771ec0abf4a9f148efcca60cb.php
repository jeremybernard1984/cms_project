<?php

/* PointWebUserBundle:User:show.html.twig */
class __TwigTemplate_4d52ffa83721d54ea7bb418eebf93ce35be968f0b2c536e545888b23eb7ab360 extends Twig_Template
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
        $__internal_66060fd7cb60aecf92f41363d5abf642b362c9e076a0814122a28e637f05f5f6 = $this->env->getExtension("native_profiler");
        $__internal_66060fd7cb60aecf92f41363d5abf642b362c9e076a0814122a28e637f05f5f6->enter($__internal_66060fd7cb60aecf92f41363d5abf642b362c9e076a0814122a28e637f05f5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebUserBundle:User:show.html.twig"));

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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAdminBundle:Default:headerAdmin"));
        echo "
                <style>
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
        
        $__internal_66060fd7cb60aecf92f41363d5abf642b362c9e076a0814122a28e637f05f5f6->leave($__internal_66060fd7cb60aecf92f41363d5abf642b362c9e076a0814122a28e637f05f5f6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_93efaa8648ab160709ae42147a1a837eb18b281f545d9a291bce9692e9c99b29 = $this->env->getExtension("native_profiler");
        $__internal_93efaa8648ab160709ae42147a1a837eb18b281f545d9a291bce9692e9c99b29->enter($__internal_93efaa8648ab160709ae42147a1a837eb18b281f545d9a291bce9692e9c99b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_93efaa8648ab160709ae42147a1a837eb18b281f545d9a291bce9692e9c99b29->leave($__internal_93efaa8648ab160709ae42147a1a837eb18b281f545d9a291bce9692e9c99b29_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f59f8d25e65b9a304f4f0fbcfb1cfcba666a7ba08597830a8a15856189aa54da = $this->env->getExtension("native_profiler");
        $__internal_f59f8d25e65b9a304f4f0fbcfb1cfcba666a7ba08597830a8a15856189aa54da->enter($__internal_f59f8d25e65b9a304f4f0fbcfb1cfcba666a7ba08597830a8a15856189aa54da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "                ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "PointWebUserBundle:User:show.html.twig", 69)->display($context);
        // line 70
        echo "            ";
        
        $__internal_f59f8d25e65b9a304f4f0fbcfb1cfcba666a7ba08597830a8a15856189aa54da->leave($__internal_f59f8d25e65b9a304f4f0fbcfb1cfcba666a7ba08597830a8a15856189aa54da_prof);

    }

    // line 73
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4adb01d89585fb02a191e66f89bfd99bf11e186ed1e8e8ad625fe8a59b67923b = $this->env->getExtension("native_profiler");
        $__internal_4adb01d89585fb02a191e66f89bfd99bf11e186ed1e8e8ad625fe8a59b67923b->enter($__internal_4adb01d89585fb02a191e66f89bfd99bf11e186ed1e8e8ad625fe8a59b67923b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 74
        echo "
                ";
        
        $__internal_4adb01d89585fb02a191e66f89bfd99bf11e186ed1e8e8ad625fe8a59b67923b->leave($__internal_4adb01d89585fb02a191e66f89bfd99bf11e186ed1e8e8ad625fe8a59b67923b_prof);

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
        return array (  182 => 74,  176 => 73,  169 => 70,  166 => 69,  160 => 68,  148 => 5,  139 => 76,  137 => 73,  133 => 71,  131 => 68,  116 => 55,  107 => 53,  103 => 52,  97 => 48,  91 => 47,  84 => 43,  77 => 39,  70 => 35,  63 => 31,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/*             <!DOCTYPE html>*/
/*             <html lang="fr">*/
/*             <head>*/
/*                 <meta charset="UTF-8"/>*/
/*                 <title>{% block title %}ESPACE D'ADMINISTRATION{% endblock %}</title>*/
/*                 {{ render(controller("PointWebAdminBundle:Default:headerAdmin")) }}*/
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
