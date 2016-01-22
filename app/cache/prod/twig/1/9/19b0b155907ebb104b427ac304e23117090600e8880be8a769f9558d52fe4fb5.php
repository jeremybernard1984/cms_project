<?php

/* PointWebProductBundle:Category:index.html.twig */
class __TwigTemplate_19b0b155907ebb104b427ac304e23117090600e8880be8a769f9558d52fe4fb5 extends Twig_Template
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
        $__internal_39047086d36e07fc6d073477a891306930edfbb9358b3e650e8bd168a26606a5 = $this->env->getExtension("native_profiler");
        $__internal_39047086d36e07fc6d073477a891306930edfbb9358b3e650e8bd168a26606a5->enter($__internal_39047086d36e07fc6d073477a891306930edfbb9358b3e650e8bd168a26606a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39047086d36e07fc6d073477a891306930edfbb9358b3e650e8bd168a26606a5->leave($__internal_39047086d36e07fc6d073477a891306930edfbb9358b3e650e8bd168a26606a5_prof);

    }

    // line 2
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_5da4f9209d4d458da7500f137b9b9d96a76626dde0712823c6883332c9d52494 = $this->env->getExtension("native_profiler");
        $__internal_5da4f9209d4d458da7500f137b9b9d96a76626dde0712823c6883332c9d52494->enter($__internal_5da4f9209d4d458da7500f137b9b9d96a76626dde0712823c6883332c9d52494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 3
        echo "    <h1>Liste des categories</h1>
    ";
        // line 4
        $context['_parent'] = (array) $context;
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
            <th class=\"titleTable\">Titre</th>
            <th style=\"width: 15%;\">Actions</th>
            <th style=\"width: 3%;\"></th>
        </tr>
    </table>
        <div class=\"sub_cat\">
        ";
        // line 23
        $context['_parent'] = (array) $context;
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
            // line 24
            echo "            <li>
            ";
            // line 25
            $this->loadTemplate("PointWebProductBundle:Category:sub_cat_table.html.twig", "PointWebProductBundle:Category:index.html.twig", 25)->display($context);
            // line 26
            echo "
            ";
            // line 27
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "childrens", array())) > 0)) {
                // line 28
                echo "            <ol>
                <li id=\"menuChilds-";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\" class=\"menuChilds list-group\"></li>
            </ol>
            ";
            }
            // line 32
            echo "            </li>
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
        // line 34
        echo "        </div>
";
        
        $__internal_5da4f9209d4d458da7500f137b9b9d96a76626dde0712823c6883332c9d52494->leave($__internal_5da4f9209d4d458da7500f137b9b9d96a76626dde0712823c6883332c9d52494_prof);

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
        return array (  129 => 34,  114 => 32,  108 => 29,  105 => 28,  103 => 27,  100 => 26,  98 => 25,  95 => 24,  78 => 23,  63 => 11,  60 => 10,  51 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
