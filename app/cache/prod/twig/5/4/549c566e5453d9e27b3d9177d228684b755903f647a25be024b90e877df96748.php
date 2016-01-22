<?php

/* PointWebAdminBundle:Menu:index1.html.twig */
class __TwigTemplate_549c566e5453d9e27b3d9177d228684b755903f647a25be024b90e877df96748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebAdminBundle:Menu:index1.html.twig", 1);
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
        $__internal_39758914222b5b6c0ac58584efec3e98172ecab634444b2de1c5ac7720ed5a20 = $this->env->getExtension("native_profiler");
        $__internal_39758914222b5b6c0ac58584efec3e98172ecab634444b2de1c5ac7720ed5a20->enter($__internal_39758914222b5b6c0ac58584efec3e98172ecab634444b2de1c5ac7720ed5a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Menu:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39758914222b5b6c0ac58584efec3e98172ecab634444b2de1c5ac7720ed5a20->leave($__internal_39758914222b5b6c0ac58584efec3e98172ecab634444b2de1c5ac7720ed5a20_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_3b8d1b01fdb7dfead853732a6cf0d48c4ab8b0e79ddf87b64c59db93961d47e4 = $this->env->getExtension("native_profiler");
        $__internal_3b8d1b01fdb7dfead853732a6cf0d48c4ab8b0e79ddf87b64c59db93961d47e4->enter($__internal_3b8d1b01fdb7dfead853732a6cf0d48c4ab8b0e79ddf87b64c59db93961d47e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des menus</h1>

    <div class=\"list-group\">
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "            <div class=\"list-group-item\">
                ";
            // line 9
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                // line 10
                echo "                    <div class=\"row-picture\">
                        <img class=\"circle\"
                             src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method"), "html", null, true);
                echo "\"
                             alt=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array()), "name", array()), "html", null, true);
                echo "\">
                    </div>
                ";
            } else {
                // line 16
                echo "                    <div class=\"row-action-primary\">
                        <i class=\"mdi-file-folder\"></i>
                    </div>
                ";
            }
            // line 20
            echo "                <div class=\"row-content\">
                    <h4 class=\"list-group-item-heading menuParentHead\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-pencil\"></i> Modifier</a>
                        ";
            // line 26
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "childrens", array())) > 0)) {
                // line 27
                echo "                            <span href=\"#\" class=\"menuParent\"
                                  data-url=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_menu_submenu", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"
                                  data-id=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\">
                            </span>
                        ";
            }
            // line 32
            echo "                    </h4>

                    <p class=\"list-group-item-text\">";
            // line 34
            echo $this->getAttribute($context["entity"], "description", array());
            echo "</p>
                </div>

                <div id=\"menuChilds-";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" class=\"menuChilds list-group\"></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>

    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("admin_menu_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
";
        
        $__internal_3b8d1b01fdb7dfead853732a6cf0d48c4ab8b0e79ddf87b64c59db93961d47e4->leave($__internal_3b8d1b01fdb7dfead853732a6cf0d48c4ab8b0e79ddf87b64c59db93961d47e4_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Menu:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  125 => 40,  116 => 37,  110 => 34,  106 => 32,  100 => 29,  96 => 28,  93 => 27,  91 => 26,  86 => 24,  81 => 22,  77 => 21,  74 => 20,  68 => 16,  62 => 13,  58 => 12,  54 => 10,  52 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
