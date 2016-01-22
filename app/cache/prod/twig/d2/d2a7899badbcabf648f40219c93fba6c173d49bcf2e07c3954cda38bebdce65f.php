<?php

/* PointWebAdminBundle:Menu:index.html.twig */
class __TwigTemplate_745040b8b18d9845a14c6503b913ec38e69e91126b34d00bcc0ddbffe7c0836d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Menu:index.html.twig", 1);
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
        $__internal_da677814e634085629f7e7c4b5e248f531d01893500bf804cdad0655b3a04990 = $this->env->getExtension("native_profiler");
        $__internal_da677814e634085629f7e7c4b5e248f531d01893500bf804cdad0655b3a04990->enter($__internal_da677814e634085629f7e7c4b5e248f531d01893500bf804cdad0655b3a04990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Menu:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da677814e634085629f7e7c4b5e248f531d01893500bf804cdad0655b3a04990->leave($__internal_da677814e634085629f7e7c4b5e248f531d01893500bf804cdad0655b3a04990_prof);

    }

    // line 2
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_39a8eaafb8b0201dfed265b95c5d4de95fe52cacdd7fdcafb639df6798d3e53a = $this->env->getExtension("native_profiler");
        $__internal_39a8eaafb8b0201dfed265b95c5d4de95fe52cacdd7fdcafb639df6798d3e53a->enter($__internal_39a8eaafb8b0201dfed265b95c5d4de95fe52cacdd7fdcafb639df6798d3e53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

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
        echo $this->env->getExtension('routing')->getPath("admin_menu_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    </div>
    <div class=\"sub_cat\">
        ";
        // line 26
        echo "        ";
        echo $this->getAttribute($this, "list", array(0 => (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), 1 => (isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), 2 => (isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))), "method");
        echo "
    </div>
";
        
        $__internal_39a8eaafb8b0201dfed265b95c5d4de95fe52cacdd7fdcafb639df6798d3e53a->leave($__internal_39a8eaafb8b0201dfed265b95c5d4de95fe52cacdd7fdcafb639df6798d3e53a_prof);

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
            $__internal_ae578842daaf04e0219898055e491ada1ec561c8351bd4cb3d8cdaf0549c3a61 = $this->env->getExtension("native_profiler");
            $__internal_ae578842daaf04e0219898055e491ada1ec561c8351bd4cb3d8cdaf0549c3a61->enter($__internal_ae578842daaf04e0219898055e491ada1ec561c8351bd4cb3d8cdaf0549c3a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "list"));

            // line 15
            echo "            ";
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
                echo "                <ol>
                    <li>
                        ";
                // line 18
                $this->loadTemplate("PointWebAdminBundle:Menu:sub_menu_table.html.twig", "PointWebAdminBundle:Menu:index.html.twig", 18)->display($context);
                // line 19
                echo "                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "__children", array())) != 0)) {
                    // line 20
                    echo "                            ";
                    echo $this->getAttribute($this, "list", array(0 => $this->getAttribute($context["entity"], "__children", array()), 1 => (isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), 2 => (isset($context["pictures"]) ? $context["pictures"] : $this->getContext($context, "pictures"))), "method");
                    echo "
                        ";
                }
                // line 22
                echo "                    </li>
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
            echo "        ";
            
            $__internal_ae578842daaf04e0219898055e491ada1ec561c8351bd4cb3d8cdaf0549c3a61->leave($__internal_ae578842daaf04e0219898055e491ada1ec561c8351bd4cb3d8cdaf0549c3a61_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Menu:index.html.twig";
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
/*         <a href="{{ path('admin_menu_new') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/*     </div>*/
/*     <div class="sub_cat">*/
/*         {% macro list(entities,deleteForms,pictures) %}*/
/*             {% for entity in entities %}*/
/*                 <ol>*/
/*                     <li>*/
/*                         {% include 'PointWebAdminBundle:Menu:sub_menu_table.html.twig' %}*/
/*                         {% if entity.__children|length != 0 %}*/
/*                             {{ _self.list(entity.__children,deleteForms,pictures) }}*/
/*                         {% endif %}*/
/*                     </li>*/
/*                 </ol>*/
/*             {% endfor %}*/
/*         {% endmacro %}*/
/*         {{ _self.list(entities,deleteForms,pictures) }}*/
/*     </div>*/
/* {% endblock %}*/
