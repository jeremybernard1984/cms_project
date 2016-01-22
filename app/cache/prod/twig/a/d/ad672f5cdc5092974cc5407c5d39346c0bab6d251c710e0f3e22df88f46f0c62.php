<?php

/* PointWebProductBundle:PartnerCategory:sub.html.twig */
class __TwigTemplate_ad672f5cdc5092974cc5407c5d39346c0bab6d251c710e0f3e22df88f46f0c62 extends Twig_Template
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
        $__internal_b3792f3583400c7a597cf265b1afe2a17bde25f3a94ad49f7ed62daffe95f6c0 = $this->env->getExtension("native_profiler");
        $__internal_b3792f3583400c7a597cf265b1afe2a17bde25f3a94ad49f7ed62daffe95f6c0->enter($__internal_b3792f3583400c7a597cf265b1afe2a17bde25f3a94ad49f7ed62daffe95f6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:PartnerCategory:sub.html.twig"));

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "childrens", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "    <div class=\"list-group-item\">
        ";
            // line 3
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "pictures", array())) > 0)) {
                // line 4
                echo "            <div class=\"row-picture\">
                <img class=\"circle\"
                     src=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "pictures", array()), 0, array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method"), "html", null, true);
                echo "\"
                     alt=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "pictures", array()), 0, array()), "name", array()), "html", null, true);
                echo "\">
            </div>
        ";
            } else {
                // line 10
                echo "            <div class=\"row-action-primary\">
                <i class=\"mdi-file-folder\"></i>
            </div>
        ";
            }
            // line 14
            echo "        <div class=\"row-content\">
            <h4 class=\"list-group-item-heading menuParentHead\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                            class=\"fa fa-eye\"></i> Voir</a>
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                            class=\"fa fa-pencil\"></i> Modifier</a>
                ";
            // line 20
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "childrens", array())) > 0)) {
                // line 21
                echo "                    <span href=\"#\" class=\"menuParent\"
                          data-url=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_submenu", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\"
                          data-id=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">
                    </span>
                ";
            }
            // line 26
            echo "
            </h4>
            <div class=\"list-group-item-text\">";
            // line 28
            echo $this->getAttribute($context["category"], "description", array());
            echo "</div>

        </div>

        <div id=\"menuChilds-";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\" class=\"menuChilds list-group\"></div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b3792f3583400c7a597cf265b1afe2a17bde25f3a94ad49f7ed62daffe95f6c0->leave($__internal_b3792f3583400c7a597cf265b1afe2a17bde25f3a94ad49f7ed62daffe95f6c0_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:PartnerCategory:sub.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  87 => 28,  83 => 26,  77 => 23,  73 => 22,  70 => 21,  68 => 20,  63 => 18,  58 => 16,  54 => 15,  51 => 14,  45 => 10,  39 => 7,  35 => 6,  31 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }
}
