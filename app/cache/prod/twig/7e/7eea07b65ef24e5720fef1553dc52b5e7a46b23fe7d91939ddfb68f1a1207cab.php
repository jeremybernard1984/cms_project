<?php

/* PointWebProductBundle:ProductCategory:index.html.twig */
class __TwigTemplate_2326948609144254fd61aa6b9dd7096574ea33a375162814d396bed7666f1ea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:ProductCategory:index.html.twig", 1);
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
        $__internal_c577056e77b106a49354ecd33c627db82c80a957ee7bca94e71416cb9e130ff6 = $this->env->getExtension("native_profiler");
        $__internal_c577056e77b106a49354ecd33c627db82c80a957ee7bca94e71416cb9e130ff6->enter($__internal_c577056e77b106a49354ecd33c627db82c80a957ee7bca94e71416cb9e130ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:ProductCategory:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c577056e77b106a49354ecd33c627db82c80a957ee7bca94e71416cb9e130ff6->leave($__internal_c577056e77b106a49354ecd33c627db82c80a957ee7bca94e71416cb9e130ff6_prof);

    }

    // line 2
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_d157e4791987474ae8cb2b2e104017f44e6edb34f576ce54b993377c8f215089 = $this->env->getExtension("native_profiler");
        $__internal_d157e4791987474ae8cb2b2e104017f44e6edb34f576ce54b993377c8f215089->enter($__internal_d157e4791987474ae8cb2b2e104017f44e6edb34f576ce54b993377c8f215089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 3
        echo "    <h1>Liste des categories</h1>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "        <div class=\"alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    <div class=\"btAjout\">
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_product_category_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    </div>
        <div class=\"sub_cat\">
            ";
        // line 26
        echo "            ";
        echo $this->getAttribute($this, "list", array(0 => (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), 1 => (isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), 2 => (isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))), "method");
        echo "
        </div>
";
        
        $__internal_d157e4791987474ae8cb2b2e104017f44e6edb34f576ce54b993377c8f215089->leave($__internal_d157e4791987474ae8cb2b2e104017f44e6edb34f576ce54b993377c8f215089_prof);

    }

    // line 14
    public function getlist($__entities__ = null, $__deleteForms__ = null, $__pictures__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entities" => $__entities__,
            "deleteForms" => $__deleteForms__,
            "pictures" => $__pictures__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_11e545df8f6b266c77d1c7ce5aec6673cb57cf9910d133cd62392749c8f4860e = $this->env->getExtension("native_profiler");
            $__internal_11e545df8f6b266c77d1c7ce5aec6673cb57cf9910d133cd62392749c8f4860e->enter($__internal_11e545df8f6b266c77d1c7ce5aec6673cb57cf9910d133cd62392749c8f4860e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "list"));

            // line 15
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 16
                echo "                        <ol>
                            <li>
                                ";
                // line 18
                $this->loadTemplate("PointWebProductBundle:ProductCategory:sub_cat_table.html.twig", "PointWebProductBundle:ProductCategory:index.html.twig", 18)->display($context);
                // line 19
                echo "                                ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "__children", array())) != 0)) {
                    // line 20
                    echo "                                    ";
                    echo $this->getAttribute($this, "list", array(0 => $this->getAttribute($context["entity"], "__children", array()), 1 => (isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), 2 => (isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))), "method");
                    echo "
                                ";
                }
                // line 22
                echo "                            </li>
                        </ol>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
            
            $__internal_11e545df8f6b266c77d1c7ce5aec6673cb57cf9910d133cd62392749c8f4860e->leave($__internal_11e545df8f6b266c77d1c7ce5aec6673cb57cf9910d133cd62392749c8f4860e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:ProductCategory:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 25,  130 => 22,  124 => 20,  121 => 19,  119 => 18,  115 => 16,  97 => 15,  80 => 14,  69 => 26,  63 => 11,  60 => 10,  51 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* {% block content_right %}*/
/*     <h1>Liste des categories</h1>*/
/*     {% for message in app.session.flashbag.get('info') %}*/
/*         <div class="alert alert-success alert-dismissable">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*             {{ message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="btAjout">*/
/*         <a href="{{ path('admin_product_category_new') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/*     </div>*/
/*         <div class="sub_cat">*/
/*             {% macro list(entities,deleteForms,pictures) %}*/
/*                     {% for entity in entities %}*/
/*                         <ol>*/
/*                             <li>*/
/*                                 {% include 'PointWebProductBundle:ProductCategory:sub_cat_table.html.twig' %}*/
/*                                 {% if entity.__children|length != 0 %}*/
/*                                     {{ _self.list(entity.__children,deleteForms,pictures) }}*/
/*                                 {% endif %}*/
/*                             </li>*/
/*                         </ol>*/
/*                     {% endfor %}*/
/*             {% endmacro %}*/
/*             {{ _self.list(entities,deleteForms,pictures) }}*/
/*         </div>*/
/* {% endblock %}*/
