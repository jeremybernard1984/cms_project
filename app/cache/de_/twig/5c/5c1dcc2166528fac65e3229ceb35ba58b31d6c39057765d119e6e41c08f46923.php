<?php

/* @PointWebUser/base.html.twig */
class __TwigTemplate_fee10609e812c5567f81082d9f968034e28945dbde2aac37685ba73a0feef634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c81ef40eba80a25a1bf5af9a506db89788d7482f6cf3d901296133b9d356132f = $this->env->getExtension("native_profiler");
        $__internal_c81ef40eba80a25a1bf5af9a506db89788d7482f6cf3d901296133b9d356132f->enter($__internal_c81ef40eba80a25a1bf5af9a506db89788d7482f6cf3d901296133b9d356132f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebUser/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
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
</head>
<body>
<div id=\"wrapper\">



    <div class=\"container\">
        <div class=\"center-div\">
            ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 21
        echo "            <div class=\"row\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 23
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "                        <div class=\"alert alert-info flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" role=\"alert\">
                            ";
                // line 25
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 32
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 34
        echo "                </div>
            </div>
        </div>

    </div>
</div>
<!-- /#wrapper -->

";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "</body>
<footer>
    ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "</footer>
</html>";
        
        $__internal_c81ef40eba80a25a1bf5af9a506db89788d7482f6cf3d901296133b9d356132f->leave($__internal_c81ef40eba80a25a1bf5af9a506db89788d7482f6cf3d901296133b9d356132f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0297f17af07e04c2e0e7319f9ed6506b5add502d53c9bc147bd9ad3ae525ca7a = $this->env->getExtension("native_profiler");
        $__internal_0297f17af07e04c2e0e7319f9ed6506b5add502d53c9bc147bd9ad3ae525ca7a->enter($__internal_0297f17af07e04c2e0e7319f9ed6506b5add502d53c9bc147bd9ad3ae525ca7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ESPACE D'ADMINISTRATION";
        
        $__internal_0297f17af07e04c2e0e7319f9ed6506b5add502d53c9bc147bd9ad3ae525ca7a->leave($__internal_0297f17af07e04c2e0e7319f9ed6506b5add502d53c9bc147bd9ad3ae525ca7a_prof);

    }

    // line 32
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c893b21597ba09d313be147ee85f322b4b7ba23b61cbc4dd19c512fb2b130a1 = $this->env->getExtension("native_profiler");
        $__internal_1c893b21597ba09d313be147ee85f322b4b7ba23b61cbc4dd19c512fb2b130a1->enter($__internal_1c893b21597ba09d313be147ee85f322b4b7ba23b61cbc4dd19c512fb2b130a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 33
        echo "                    ";
        
        $__internal_1c893b21597ba09d313be147ee85f322b4b7ba23b61cbc4dd19c512fb2b130a1->leave($__internal_1c893b21597ba09d313be147ee85f322b4b7ba23b61cbc4dd19c512fb2b130a1_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c222c392c098dc420ef6d22864adf7a18325f9d338153aabf2eaeaaf044ea87 = $this->env->getExtension("native_profiler");
        $__internal_3c222c392c098dc420ef6d22864adf7a18325f9d338153aabf2eaeaaf044ea87->enter($__internal_3c222c392c098dc420ef6d22864adf7a18325f9d338153aabf2eaeaaf044ea87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "    ";
        $this->loadTemplate("PointWebAdminBundle::_js.html.twig", "@PointWebUser/base.html.twig", 43)->display($context);
        
        $__internal_3c222c392c098dc420ef6d22864adf7a18325f9d338153aabf2eaeaaf044ea87->leave($__internal_3c222c392c098dc420ef6d22864adf7a18325f9d338153aabf2eaeaaf044ea87_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2c0149e836580d492d6ba2709b95cf6312851329bd66746d59e713b8b0755fca = $this->env->getExtension("native_profiler");
        $__internal_2c0149e836580d492d6ba2709b95cf6312851329bd66746d59e713b8b0755fca->enter($__internal_2c0149e836580d492d6ba2709b95cf6312851329bd66746d59e713b8b0755fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "
    ";
        
        $__internal_2c0149e836580d492d6ba2709b95cf6312851329bd66746d59e713b8b0755fca->leave($__internal_2c0149e836580d492d6ba2709b95cf6312851329bd66746d59e713b8b0755fca_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebUser/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 48,  169 => 47,  161 => 43,  155 => 42,  148 => 33,  142 => 32,  130 => 5,  122 => 50,  120 => 47,  116 => 45,  114 => 42,  104 => 34,  102 => 32,  97 => 29,  91 => 28,  82 => 25,  77 => 24,  72 => 23,  68 => 22,  65 => 21,  59 => 18,  55 => 17,  50 => 16,  48 => 15,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}ESPACE D'ADMINISTRATION{% endblock %}</title>*/
/*     {{ render(controller("PointWebAdminBundle:Default:headerAdmin")) }}*/
/* </head>*/
/* <body>*/
/* <div id="wrapper">*/
/* */
/* */
/* */
/*     <div class="container">*/
/*         <div class="center-div">*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% endif %}*/
/*             <div class="row">*/
/*                 {% for type, messages in app.session.flashbag.all() %}*/
/*                     {% for message in messages %}*/
/*                         <div class="alert alert-info flash-{{ type }}" role="alert">*/
/*                             {{ message }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                     {% block fos_user_content %}*/
/*                     {% endblock fos_user_content %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* <!-- /#wrapper -->*/
/* */
/* {% block javascripts %}*/
/*     {% include 'PointWebAdminBundle::_js.html.twig' %}*/
/* {% endblock %}*/
/* </body>*/
/* <footer>*/
/*     {% block footer %}*/
/* */
/*     {% endblock %}*/
/* </footer>*/
/* </html>*/
