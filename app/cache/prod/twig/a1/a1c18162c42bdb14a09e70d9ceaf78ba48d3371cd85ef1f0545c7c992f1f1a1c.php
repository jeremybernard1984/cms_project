<?php

/* PointWebAppBundle::_footer.html.twig */
class __TwigTemplate_5f06a1aea1fad74afbaae1c0361e8a292c1cee9c6667167fc73b78c65bdfea37 extends Twig_Template
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
        $__internal_c1563eeb8af223aa70c8e80503feafbf619d06cc04e3205f05e85a18111b4a04 = $this->env->getExtension("native_profiler");
        $__internal_c1563eeb8af223aa70c8e80503feafbf619d06cc04e3205f05e85a18111b4a04->enter($__internal_c1563eeb8af223aa70c8e80503feafbf619d06cc04e3205f05e85a18111b4a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::_footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
<footer>
        <div class=\"row footer\">
            <div class=\"col-lg-6\">
                <p>Copyright &copy; ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"text-right col-lg-6\">
                <p>
                    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("page_detail", array("id" => 2));
        echo "\">Mentions légales</a> |
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("point_web_app_contact");
        echo "\">contact</a> |
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("point_web_admin_homepage");
        echo "\">
                        Log in <span class=\"glyphicon glyphicon-log-in\"></span>
                    </a>
                </p>
            </div>
        </div>
</footer>";
        
        $__internal_c1563eeb8af223aa70c8e80503feafbf619d06cc04e3205f05e85a18111b4a04->leave($__internal_c1563eeb8af223aa70c8e80503feafbf619d06cc04e3205f05e85a18111b4a04_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  39 => 10,  35 => 9,  28 => 5,  22 => 1,);
    }
}
/* <!-- Footer -->*/
/* <footer>*/
/*         <div class="row footer">*/
/*             <div class="col-lg-6">*/
/*                 <p>Copyright &copy; {{ "now"|date("Y") }}</p>*/
/*             </div>*/
/*             <div class="text-right col-lg-6">*/
/*                 <p>*/
/*                     <a href="{{ path("page_detail",  { 'id': 2 })  }}">Mentions légales</a> |*/
/*                     <a href="{{ path("point_web_app_contact") }}">contact</a> |*/
/*                     <a href="{{ path("point_web_admin_homepage") }}">*/
/*                         Log in <span class="glyphicon glyphicon-log-in"></span>*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* </footer>*/
