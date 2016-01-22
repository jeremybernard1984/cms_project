<?php

/* PointWebProductBundle:Category:index.html.twig */
class __TwigTemplate_2cfa9c63ad1f1cce0bc59d6853ec1dd74a200a9a979ff4e118a0b67b629c86a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:Category:index.html.twig", 1);
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
        $__internal_6ca66a6b6015638c36bc89e7f726a4f6c6ac89b97070d6827f2cb6b5d83d354e = $this->env->getExtension("native_profiler");
        $__internal_6ca66a6b6015638c36bc89e7f726a4f6c6ac89b97070d6827f2cb6b5d83d354e->enter($__internal_6ca66a6b6015638c36bc89e7f726a4f6c6ac89b97070d6827f2cb6b5d83d354e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ca66a6b6015638c36bc89e7f726a4f6c6ac89b97070d6827f2cb6b5d83d354e->leave($__internal_6ca66a6b6015638c36bc89e7f726a4f6c6ac89b97070d6827f2cb6b5d83d354e_prof);

    }

    // line 2
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_bc052373d8dee56601f575b9fa823429b12450631a733078338778df885888ab = $this->env->getExtension("native_profiler");
        $__internal_bc052373d8dee56601f575b9fa823429b12450631a733078338778df885888ab->enter($__internal_bc052373d8dee56601f575b9fa823429b12450631a733078338778df885888ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        echo $this->env->getExtension('routing')->getPath("admin_category_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    </div>
    <table class=\"table table-striped table-bordered table-hover sortable\">
        <tr style=\"background-color:#d4dddc;\">
            <th style=\"width: 2%;\"></th>
            <th style=\"width: 3%;\"></th>
            <th style=\"width: 3%;\"></th>
            <th class=\"titleTable\">Titre</th>
            <th style=\"width: 15%;\">Actions</th>
            <th style=\"width: 3%;\"></th>
        </tr>
    </table>
        <div class=\"sub_cat\">
            ";
        // line 36
        echo "            ";
        echo $this->getAttribute($this, "list", array(0 => (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), 1 => (isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), 2 => (isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))), "method");
        echo "
        </div>
";
        
        $__internal_bc052373d8dee56601f575b9fa823429b12450631a733078338778df885888ab->leave($__internal_bc052373d8dee56601f575b9fa823429b12450631a733078338778df885888ab_prof);

    }

    // line 24
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
            $__internal_2282f7a197dad9c2d56fcd066bff131167d20ac305b051a5a12c6f25b400cb9c = $this->env->getExtension("native_profiler");
            $__internal_2282f7a197dad9c2d56fcd066bff131167d20ac305b051a5a12c6f25b400cb9c->enter($__internal_2282f7a197dad9c2d56fcd066bff131167d20ac305b051a5a12c6f25b400cb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "list"));

            // line 25
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
                // line 26
                echo "                        <ol>
                            <li>
                                ";
                // line 28
                $this->loadTemplate("PointWebProductBundle:Category:sub_cat_table.html.twig", "PointWebProductBundle:Category:index.html.twig", 28)->display($context);
                // line 29
                echo "                                ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "__children", array())) != 0)) {
                    // line 30
                    echo "                                    ";
                    echo $this->getAttribute($this, "list", array(0 => $this->getAttribute($context["entity"], "__children", array()), 1 => (isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), 2 => (isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))), "method");
                    echo "
                                ";
                }
                // line 32
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
            // line 35
            echo "            ";
            
            $__internal_2282f7a197dad9c2d56fcd066bff131167d20ac305b051a5a12c6f25b400cb9c->leave($__internal_2282f7a197dad9c2d56fcd066bff131167d20ac305b051a5a12c6f25b400cb9c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 35,  140 => 32,  134 => 30,  131 => 29,  129 => 28,  125 => 26,  107 => 25,  90 => 24,  79 => 36,  63 => 11,  60 => 10,  51 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
/*         <a href="{{ path('admin_category_new') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/*     </div>*/
/*     <table class="table table-striped table-bordered table-hover sortable">*/
/*         <tr style="background-color:#d4dddc;">*/
/*             <th style="width: 2%;"></th>*/
/*             <th style="width: 3%;"></th>*/
/*             <th style="width: 3%;"></th>*/
/*             <th class="titleTable">Titre</th>*/
/*             <th style="width: 15%;">Actions</th>*/
/*             <th style="width: 3%;"></th>*/
/*         </tr>*/
/*     </table>*/
/*         <div class="sub_cat">*/
/*             {% macro list(entities,deleteForms,pictures) %}*/
/*                     {% for entity in entities %}*/
/*                         <ol>*/
/*                             <li>*/
/*                                 {% include 'PointWebProductBundle:Category:sub_cat_table.html.twig' %}*/
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
