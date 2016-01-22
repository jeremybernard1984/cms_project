<?php

/* PointWebProductBundle:PartnerCategory:index1.html.twig */
class __TwigTemplate_f437b2ac01cbf004bc08cb419d6e5b1417aea2f3b4ee0d39bc11de31f1b6be50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:PartnerCategory:index1.html.twig", 1);
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
        $__internal_4cd6af4d445b40899181c35cdd95b9a7aceeefbc82c0a4a67cd335a67013456a = $this->env->getExtension("native_profiler");
        $__internal_4cd6af4d445b40899181c35cdd95b9a7aceeefbc82c0a4a67cd335a67013456a->enter($__internal_4cd6af4d445b40899181c35cdd95b9a7aceeefbc82c0a4a67cd335a67013456a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:PartnerCategory:index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd6af4d445b40899181c35cdd95b9a7aceeefbc82c0a4a67cd335a67013456a->leave($__internal_4cd6af4d445b40899181c35cdd95b9a7aceeefbc82c0a4a67cd335a67013456a_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_a2308c95dde831fe9f67e77f43e9a54006b53e470fb1f4f50b61e01401c5fea5 = $this->env->getExtension("native_profiler");
        $__internal_a2308c95dde831fe9f67e77f43e9a54006b53e470fb1f4f50b61e01401c5fea5->enter($__internal_a2308c95dde831fe9f67e77f43e9a54006b53e470fb1f4f50b61e01401c5fea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Liste des Catégories</h1>
    <div class=\"list-group\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "            <div class=\"list-group-item\">
                ";
            // line 8
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "pictures", array())) > 0)) {
                // line 9
                echo "                    <div class=\"row-picture\">
                        <img class=\"circle\"
                             src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method"), "html", null, true);
                echo "\"
                             alt=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "pictures", array()), 0, array()), "name", array()), "html", null, true);
                echo "\">
                    </div>
                ";
            } else {
                // line 15
                echo "                    <div class=\"row-action-primary\">
                        <i class=\"mdi-file-folder\"></i>
                    </div>
                ";
            }
            // line 19
            echo "                <div class=\"row-content\">
                    <h4 class=\"list-group-item-heading menuParentHead\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-eye\"></i> Voir</a>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                                    class=\"fa fa-pencil\"></i> Modifier</a>
                        ";
            // line 25
            if ((twig_length_filter($this->env, $this->getAttribute($context["entity"], "childrens", array())) > 0)) {
                // line 26
                echo "                            <span href=\"#\" class=\"menuParent\"
                                  data-url=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_submenu", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"
                                  data-id=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\">
                            </span>
                        ";
            }
            // line 31
            echo "                    </h4>

                    <p class=\"list-group-item-text\">";
            // line 33
            echo $this->getAttribute($context["entity"], "description", array());
            echo "</p>
                </div>

                <div id=\"menuChilds-";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" class=\"menuChilds list-group\"></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>

    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("admin_category_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("admin_product");
        echo "\" class=\"btn btn-primary\">Modifier les produits</a>
";
        
        $__internal_a2308c95dde831fe9f67e77f43e9a54006b53e470fb1f4f50b61e01401c5fea5->leave($__internal_a2308c95dde831fe9f67e77f43e9a54006b53e470fb1f4f50b61e01401c5fea5_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:PartnerCategory:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 42,  128 => 41,  124 => 39,  115 => 36,  109 => 33,  105 => 31,  99 => 28,  95 => 27,  92 => 26,  90 => 25,  85 => 23,  80 => 21,  76 => 20,  73 => 19,  67 => 15,  61 => 12,  57 => 11,  53 => 9,  51 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
