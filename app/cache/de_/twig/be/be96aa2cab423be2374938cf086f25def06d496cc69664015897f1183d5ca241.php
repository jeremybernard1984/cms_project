<?php

/* @PointWebUser/User/menu_left_user.html.twig */
class __TwigTemplate_d145d06319aae3d5382cf1e406c20ed56a9ca261bb2758575e7950d66ca6edf4 extends Twig_Template
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
        $__internal_7308009893ee07d52ab398cfae3676293913f9ba79e32638749a5a9ecb5ac0f9 = $this->env->getExtension("native_profiler");
        $__internal_7308009893ee07d52ab398cfae3676293913f9ba79e32638749a5a9ecb5ac0f9->enter($__internal_7308009893ee07d52ab398cfae3676293913f9ba79e32638749a5a9ecb5ac0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebUser/User/menu_left_user.html.twig"));

        // line 1
        echo "<div class=\"left_user bg-gris\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array())) {
            // line 3
            echo "        <img class=\"img-thumbnail thumbnailmenuleft\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "AssetPath", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "name", array()), "html", null, true);
            echo "\">
    ";
        } else {
            // line 5
            echo "        <img class=\"img-thumbnail thumbnailmenuleft\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("images/default-user-icon-profile.png")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 7
        echo "    <div class=\"left_user_txt\">
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "<br>
        <span class=\"rolesLeft\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 11
            echo "                ";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </span>
    <div class=\"btn-group\">
        <a class=\"btn btn btn-primary btn-sm\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Messages\" href=\"#\" disabled=\"disabled\">
            <i class=\"fa fa-envelope\"></i>
        </a>
        <a class=\"btn btn btn-primary btn-sm\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Éditer\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"fa fa-user\"></i>
        </a>
        <a class=\"btn btn btn-danger btn-sm\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Déconnecter\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
            <i class=\"fa fa-power-off\"></i>
        </a>
    </div>
    </div>
    <div style=\"clear: both\"></div>
</div>";
        
        $__internal_7308009893ee07d52ab398cfae3676293913f9ba79e32638749a5a9ecb5ac0f9->leave($__internal_7308009893ee07d52ab398cfae3676293913f9ba79e32638749a5a9ecb5ac0f9_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebUser/User/menu_left_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  73 => 18,  66 => 13,  57 => 11,  53 => 10,  46 => 8,  43 => 7,  35 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="left_user bg-gris">*/
/*     {% if user.image %}*/
/*         <img class="img-thumbnail thumbnailmenuleft" src="{{ absolute_url(asset(user.image.AssetPath)) }}" alt="{{ user.image.name }}">*/
/*     {% else %}*/
/*         <img class="img-thumbnail thumbnailmenuleft" src="{{ absolute_url(asset('images/default-user-icon-profile.png')) }}" alt="{{ user.username }}">*/
/*     {% endif %}*/
/*     <div class="left_user_txt">*/
/*         {{ user.firstName }} {{ user.lastName }}<br>*/
/*         <span class="rolesLeft">*/
/*             {% for role in user.roles %}*/
/*                 {{ role }}<br>*/
/*             {% endfor %}*/
/*         </span>*/
/*     <div class="btn-group">*/
/*         <a class="btn btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Messages" href="#" disabled="disabled">*/
/*             <i class="fa fa-envelope"></i>*/
/*         </a>*/
/*         <a class="btn btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Éditer" href="{{ path('admin_user_edit', {'id':user.id}) }}">*/
/*             <i class="fa fa-user"></i>*/
/*         </a>*/
/*         <a class="btn btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Déconnecter" href="{{ path("fos_user_security_logout") }}">*/
/*             <i class="fa fa-power-off"></i>*/
/*         </a>*/
/*     </div>*/
/*     </div>*/
/*     <div style="clear: both"></div>*/
/* </div>*/
