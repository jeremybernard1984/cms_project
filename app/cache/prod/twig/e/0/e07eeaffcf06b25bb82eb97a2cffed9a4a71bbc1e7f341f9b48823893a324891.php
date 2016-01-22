<?php

/* PointWebEcommerceBundle:Administration:Produits/layout/index1.html.twig */
class __TwigTemplate_e07eeaffcf06b25bb82eb97a2cffed9a4a71bbc1e7f341f9b48823893a324891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebEcommerceBundle:Administration:Produits/layout/index1.html.twig", 1);
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
        $__internal_55062c9d9d6433c9231ca2364b9933f3bab0e7b50c3ea220a48303c907ea4587 = $this->env->getExtension("native_profiler");
        $__internal_55062c9d9d6433c9231ca2364b9933f3bab0e7b50c3ea220a48303c907ea4587->enter($__internal_55062c9d9d6433c9231ca2364b9933f3bab0e7b50c3ea220a48303c907ea4587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebEcommerceBundle:Administration:Produits/layout/index1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55062c9d9d6433c9231ca2364b9933f3bab0e7b50c3ea220a48303c907ea4587->leave($__internal_55062c9d9d6433c9231ca2364b9933f3bab0e7b50c3ea220a48303c907ea4587_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_a88382318d57de3d1be97000993260f50001ed746abf8041c622a88241eb2d69 = $this->env->getExtension("native_profiler");
        $__internal_a88382318d57de3d1be97000993260f50001ed746abf8041c622a88241eb2d69->enter($__internal_a88382318d57de3d1be97000993260f50001ed746abf8041c622a88241eb2d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Produits list</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "disponible", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ecommerce_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-book\"></i>Voir</a>
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_ecommerce_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-edit\"></i>editer</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_ecommerce_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_a88382318d57de3d1be97000993260f50001ed746abf8041c622a88241eb2d69->leave($__internal_a88382318d57de3d1be97000993260f50001ed746abf8041c622a88241eb2d69_prof);

    }

    public function getTemplateName()
    {
        return "PointWebEcommerceBundle:Administration:Produits/layout/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  88 => 27,  78 => 23,  74 => 22,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
