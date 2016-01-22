<?php

/* PointWebAppBundle::_footer.html.twig */
class __TwigTemplate_fdc70893b7207e84deff0bab61944c23cd9ac2758fca5baf7fec621d0eeca60c extends Twig_Template
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
        return array (  40 => 11,  36 => 10,  32 => 9,  25 => 5,  19 => 1,);
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
