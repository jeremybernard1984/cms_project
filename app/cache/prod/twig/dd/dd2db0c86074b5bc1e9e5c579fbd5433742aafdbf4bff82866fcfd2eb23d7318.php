<?php

/* PointWebProductBundle:Product:index.html.twig */
class __TwigTemplate_e01385d167cc90a5df341879fca4238e94c50d6015b40f02e7c8bd9f68a8d3a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:Product:index.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f43021e4ef956853910f0816e84411b3c822f951b1810796037adb0070b8b7d = $this->env->getExtension("native_profiler");
        $__internal_5f43021e4ef956853910f0816e84411b3c822f951b1810796037adb0070b8b7d->enter($__internal_5f43021e4ef956853910f0816e84411b3c822f951b1810796037adb0070b8b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Product:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f43021e4ef956853910f0816e84411b3c822f951b1810796037adb0070b8b7d->leave($__internal_5f43021e4ef956853910f0816e84411b3c822f951b1810796037adb0070b8b7d_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_b7cf6259404acec996dd2a8f286fda827de186cc3ec51ac50a1ead854c81d7f5 = $this->env->getExtension("native_profiler");
        $__internal_b7cf6259404acec996dd2a8f286fda827de186cc3ec51ac50a1ead854c81d7f5->enter($__internal_b7cf6259404acec996dd2a8f286fda827de186cc3ec51ac50a1ead854c81d7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "
    <h1>Liste des produits</h1>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        <div class=\"alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    <a style=\"float: left\" href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_product_category");
        echo "\" class=\"btn btn-primary\">Modifier les catégories</a>
    <div class=\"btAjout\">
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_product_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    </div>
    ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["entitiesSansCat"]) ? $context["entitiesSansCat"] : $this->getContext($context, "entitiesSansCat"))) > 0)) {
            // line 17
            echo "        ";
            $this->loadTemplate("PointWebProductBundle:Product:products_table.html.twig", "PointWebProductBundle:Product:index.html.twig", 17)->display($context);
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div class=\"panel-group\" id=\"accordion\">
    ";
        // line 50
        echo "    ";
        echo $this->getAttribute($this, "list", array(0 => (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 1 => (isset($context["listProducts"]) ? $context["listProducts"] : $this->getContext($context, "listProducts")), 2 => (isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms"))), "method");
        echo "
    </div>
";
        
        $__internal_b7cf6259404acec996dd2a8f286fda827de186cc3ec51ac50a1ead854c81d7f5->leave($__internal_b7cf6259404acec996dd2a8f286fda827de186cc3ec51ac50a1ead854c81d7f5_prof);

    }

    // line 20
    public function getlist($__categories__ = null, $__listProducts__ = null, $__deleteForms__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "categories" => $__categories__,
            "listProducts" => $__listProducts__,
            "deleteForms" => $__deleteForms__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_95bb5ffa544716496d5e74566d8e057b1ae1a82849797178834fba0a54222f45 = $this->env->getExtension("native_profiler");
            $__internal_95bb5ffa544716496d5e74566d8e057b1ae1a82849797178834fba0a54222f45->enter($__internal_95bb5ffa544716496d5e74566d8e057b1ae1a82849797178834fba0a54222f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "list"));

            // line 21
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 22
                echo "            ";
                if (($this->getAttribute($context["category"], "lvl", array()) == 0)) {
                    // line 23
                    echo "                    <p class=\"list_cat_title\">Liste des catégories : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                    echo "</p>
            ";
                } else {
                    // line 25
                    echo "                ";
                    if (($this->getAttribute($context["category"], "lvl", array()) == 1)) {
                        // line 26
                        echo "                    <div class=\"panel panel-primary\" style=\"margin-top: 5px\">
                ";
                    } else {
                        // line 28
                        echo "                    <div class=\"panel panel-primary \"
                         style=\"margin: 5px ";
                        // line 29
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "lvl", array()), "html", null, true);
                        echo "0px;\">
                ";
                    }
                    // line 31
                    echo "                    <div class=\"panel-heading ";
                    if (($this->getAttribute($context["category"], "lvl", array()) != 1)) {
                        echo "opacity70";
                    }
                    echo "\">
                        <h3 class=\"panel-title\">
                            <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                    echo "\">
                                ";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                    echo "
                                <i class=\"fa fa-bars\" style=\"float: right\"></i>
                            </a>
                        </h3>
                    </div>
                    <div id=\"collapse-";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                    echo "\" class=\"panel-collapse collapse out\" data-parent=\"#accordion\">
                        ";
                    // line 40
                    $this->loadTemplate("PointWebProductBundle:Product:sub_products_table.html.twig", "PointWebProductBundle:Product:index.html.twig", 40)->display($context);
                    // line 41
                    echo "                    </div>
                </div>
            ";
                }
                // line 44
                echo "            ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "__children", array())) != 0)) {
                    // line 45
                    echo "                ";
                    echo $this->getAttribute($this, "list", array(0 => $this->getAttribute($context["category"], "__children", array()), 1 => (isset($context["listProducts"]) ? $context["listProducts"] : $this->getContext($context, "listProducts")), 2 => (isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms"))), "method");
                    echo "
            ";
                }
                // line 47
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
    ";
            
            $__internal_95bb5ffa544716496d5e74566d8e057b1ae1a82849797178834fba0a54222f45->leave($__internal_95bb5ffa544716496d5e74566d8e057b1ae1a82849797178834fba0a54222f45_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 48,  193 => 47,  187 => 45,  184 => 44,  179 => 41,  177 => 40,  173 => 39,  165 => 34,  161 => 33,  153 => 31,  148 => 29,  145 => 28,  141 => 26,  138 => 25,  132 => 23,  129 => 22,  111 => 21,  94 => 20,  83 => 50,  80 => 19,  77 => 18,  74 => 17,  72 => 16,  67 => 14,  61 => 12,  52 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/* */
/*     <h1>Liste des produits</h1>*/
/*     {% for message in app.session.flashbag.get('info') %}*/
/*         <div class="alert alert-success alert-dismissable">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*             {{ message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <a style="float: left" href="{{ path('admin_product_category') }}" class="btn btn-primary">Modifier les catégories</a>*/
/*     <div class="btAjout">*/
/*         <a href="{{ path('admin_product_new') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/*     </div>*/
/*     {% if entitiesSansCat|length > 0 %}*/
/*         {% include 'PointWebProductBundle:Product:products_table.html.twig' %}*/
/*     {% endif %}*/
/*     <div class="panel-group" id="accordion">*/
/*     {% macro list(categories,listProducts,deleteForms) %}*/
/*         {% for category in categories %}*/
/*             {% if category.lvl == 0 %}*/
/*                     <p class="list_cat_title">Liste des catégories : {{ category.title }}</p>*/
/*             {% else %}*/
/*                 {% if category.lvl == 1 %}*/
/*                     <div class="panel panel-primary" style="margin-top: 5px">*/
/*                 {% else %}*/
/*                     <div class="panel panel-primary "*/
/*                          style="margin: 5px {{ category.lvl }}0px;">*/
/*                 {% endif %}*/
/*                     <div class="panel-heading {% if category.lvl != 1 %}opacity70{% endif %}">*/
/*                         <h3 class="panel-title">*/
/*                             <a data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ category.id }}">*/
/*                                 {{ category.title }}*/
/*                                 <i class="fa fa-bars" style="float: right"></i>*/
/*                             </a>*/
/*                         </h3>*/
/*                     </div>*/
/*                     <div id="collapse-{{ category.id }}" class="panel-collapse collapse out" data-parent="#accordion">*/
/*                         {% include 'PointWebProductBundle:Product:sub_products_table.html.twig' %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if category.__children|length != 0 %}*/
/*                 {{ _self.list(category.__children,listProducts,deleteForms) }}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*     {% endmacro %}*/
/*     {{ _self.list(categories,listProducts,deleteForms) }}*/
/*     </div>*/
/* {% endblock %}*/
