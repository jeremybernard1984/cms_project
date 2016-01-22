<?php

/* PointWebProductBundle:Default:all_products.html.twig */
class __TwigTemplate_4feda39e2f4755aa3d3f961dcd6a67a72efaa06f845730513275b82240f049a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebProductBundle:Default:all_products.html.twig", 1);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5303351545e9a5e26060c348d3d259f0e159576b7ae058db18248cf48f654886 = $this->env->getExtension("native_profiler");
        $__internal_5303351545e9a5e26060c348d3d259f0e159576b7ae058db18248cf48f654886->enter($__internal_5303351545e9a5e26060c348d3d259f0e159576b7ae058db18248cf48f654886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Default:all_products.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5303351545e9a5e26060c348d3d259f0e159576b7ae058db18248cf48f654886->leave($__internal_5303351545e9a5e26060c348d3d259f0e159576b7ae058db18248cf48f654886_prof);

    }

    // line 2
    public function block_slider($context, array $blocks = array())
    {
        $__internal_bd8b040ce56969094d616ab566b00f8fd6042f5a1166fb07ef6e7dd0f7b6e2b9 = $this->env->getExtension("native_profiler");
        $__internal_bd8b040ce56969094d616ab566b00f8fd6042f5a1166fb07ef6e7dd0f7b6e2b9->enter($__internal_bd8b040ce56969094d616ab566b00f8fd6042f5a1166fb07ef6e7dd0f7b6e2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 3
        echo "
";
        
        $__internal_bd8b040ce56969094d616ab566b00f8fd6042f5a1166fb07ef6e7dd0f7b6e2b9->leave($__internal_bd8b040ce56969094d616ab566b00f8fd6042f5a1166fb07ef6e7dd0f7b6e2b9_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_f8dede062b62ce7984b6342dc6e5a411d802c97bc234d0c3275fbf3c9ba4e07b = $this->env->getExtension("native_profiler");
        $__internal_f8dede062b62ce7984b6342dc6e5a411d802c97bc234d0c3275fbf3c9ba4e07b->enter($__internal_f8dede062b62ce7984b6342dc6e5a411d802c97bc234d0c3275fbf3c9ba4e07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "title", array()), "html", null, true);
        echo "
                <small>Nos voyages</small>
            </h1>

            ";
        // line 15
        echo "            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("point_web_app_homepage");
        echo "\">Accueil</a></li>
                <li class=\"active\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_menu"]) ? $context["current_menu"] : $this->getContext($context, "current_menu")), "title", array()), "html", null, true);
        echo "</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    ";
        // line 58
        echo "        ";
        echo $this->getAttribute($this, "list", array(0 => (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 1 => (isset($context["listProducts"]) ? $context["listProducts"] : $this->getContext($context, "listProducts"))), "method");
        echo "
    </div>
";
        
        $__internal_f8dede062b62ce7984b6342dc6e5a411d802c97bc234d0c3275fbf3c9ba4e07b->leave($__internal_f8dede062b62ce7984b6342dc6e5a411d802c97bc234d0c3275fbf3c9ba4e07b_prof);

    }

    // line 23
    public function getlist($__categories__ = null, $__listProducts__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "categories" => $__categories__,
            "listProducts" => $__listProducts__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5206f30a99e1776d3ce7c312d01c58ffb41e85050b3f8ba5958029d82db4300a = $this->env->getExtension("native_profiler");
            $__internal_5206f30a99e1776d3ce7c312d01c58ffb41e85050b3f8ba5958029d82db4300a->enter($__internal_5206f30a99e1776d3ce7c312d01c58ffb41e85050b3f8ba5958029d82db4300a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "list"));

            // line 24
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "            ";
                if (($this->getAttribute($context["category"], "lvl", array()) != 0)) {
                    // line 26
                    echo "                <div class=\"row\"";
                    if (($this->getAttribute($context["category"], "lvl", array()) != 1)) {
                        echo " style =\"margin: 5px ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "lvl", array()), "html", null, true);
                        echo "8px;border: 1px solid #ccc\" ";
                    }
                    echo ">
                    <div class=\"col-md-12\">
                        <h3 class=\"title-page\">";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                    echo "</h3>
                    </div>

                    ";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["listProducts"]) ? $context["listProducts"] : $this->getContext($context, "listProducts")));
                    foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                        // line 32
                        echo "                    ";
                        if (($this->getAttribute($context["entity"], "ProductCategory", array()) == $this->getAttribute($context["category"], "title", array()))) {
                            // line 33
                            echo "                        <div class=\"col-md-3\">
                            <div class=\"img-portfolio-col3\">
                                <a href=\"";
                            // line 35
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_detail", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                            echo "\">
                                    ";
                            // line 36
                            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                                // line 37
                                echo "                                        <img class=\"img-responsive img-hover\" src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                                echo "\" alt=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array(), "array"), "name", array()), "html", null, true);
                                echo "\">
                                    ";
                            } else {
                                // line 39
                                echo "                                        <img class=\"img-responsive img-hover\" src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/sans_image_700x450.jpg"), "html", null, true);
                                echo "\" alt=\"http://placehold.it/700x450\">
                                    ";
                            }
                            // line 41
                            echo "                                </a>
                            </div>
                            <h4>
                                <a href=\"";
                            // line 44
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_detail", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                            echo "</a>
                            </h4>
                            <p>";
                            // line 46
                            echo twig_truncate_filter($this->env, $this->getAttribute($context["entity"], "resum", array()), 200, false, "...");
                            echo "</p>
                        </div>
                    ";
                        }
                        // line 49
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "                </div>
            ";
                }
                // line 52
                echo "            ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "__children", array())) != 0)) {
                    // line 53
                    echo "                ";
                    echo $this->getAttribute($this, "list", array(0 => $this->getAttribute($context["category"], "__children", array()), 1 => (isset($context["listProducts"]) ? $context["listProducts"] : $this->getContext($context, "listProducts"))), "method");
                    echo "
            ";
                }
                // line 55
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
        ";
            
            $__internal_5206f30a99e1776d3ce7c312d01c58ffb41e85050b3f8ba5958029d82db4300a->leave($__internal_5206f30a99e1776d3ce7c312d01c58ffb41e85050b3f8ba5958029d82db4300a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Default:all_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 56,  203 => 55,  197 => 53,  194 => 52,  190 => 50,  184 => 49,  178 => 46,  171 => 44,  166 => 41,  160 => 39,  152 => 37,  150 => 36,  146 => 35,  142 => 33,  139 => 32,  135 => 31,  129 => 28,  119 => 26,  116 => 25,  111 => 24,  95 => 23,  84 => 58,  75 => 17,  71 => 16,  68 => 15,  61 => 10,  55 => 6,  49 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block slider %}*/
/* */
/* {% endblock %}*/
/* {% block content %}*/
/*     <!-- Page Heading/Breadcrumbs -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1 class="page-header">*/
/*                 {{ current_menu.title }}*/
/*                 <small>Nos voyages</small>*/
/*             </h1>*/
/* */
/*             {#{ knp_menu_render('breadcrumb', {'currentClass': 'active'}) }#}*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="{{ path('point_web_app_homepage')}}">Accueil</a></li>*/
/*                 <li class="active">{{ current_menu.title }}</li>*/
/*             </ol>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.row -->*/
/* */
/*     {% macro list(categories,listProducts) %}*/
/*         {% for category in categories %}*/
/*             {% if category.lvl != 0 %}*/
/*                 <div class="row"{% if category.lvl != 1 %} style ="margin: 5px {{ category.lvl }}8px;border: 1px solid #ccc" {% endif %}>*/
/*                     <div class="col-md-12">*/
/*                         <h3 class="title-page">{{ category.title }}</h3>*/
/*                     </div>*/
/* */
/*                     {% for entity in listProducts %}*/
/*                     {% if entity.ProductCategory == category.title %}*/
/*                         <div class="col-md-3">*/
/*                             <div class="img-portfolio-col3">*/
/*                                 <a href="{{ path('product_detail', {'id':entity.id}) }}">*/
/*                                     {% if entity.pictures|length >0 %}*/
/*                                         <img class="img-responsive img-hover" src="{{ asset(entity.pictures[0].getWebPath(base)) }}" alt="{{ entity.pictures[0].name }}">*/
/*                                     {% else %}*/
/*                                         <img class="img-responsive img-hover" src="{{ asset('images/sans_image_700x450.jpg') }}" alt="http://placehold.it/700x450">*/
/*                                     {% endif %}*/
/*                                 </a>*/
/*                             </div>*/
/*                             <h4>*/
/*                                 <a href="{{ path('product_detail', {'id':entity.id}) }}">{{ entity.title }}</a>*/
/*                             </h4>*/
/*                             <p>{{ entity.resum | truncate(200, false, '...') | raw }}</p>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if category.__children|length != 0 %}*/
/*                 {{ _self.list(category.__children,listProducts) }}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         {% endmacro %}*/
/*         {{ _self.list(categories,listProducts) }}*/
/*     </div>*/
/* {% endblock %}*/
