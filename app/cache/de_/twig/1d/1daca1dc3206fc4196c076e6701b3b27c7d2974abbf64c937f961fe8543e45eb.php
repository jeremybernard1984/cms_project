<?php

/* PointWebUserBundle:User:index.html.twig */
class __TwigTemplate_db1bb6c1366a7d175166532b6388530e24caece934ac022490697d35447480b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebUserBundle:User:index.html.twig", 1);
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
        $__internal_2b50305526183a79df0f4fd146986695f8240979e40daf60331415c6bae03c69 = $this->env->getExtension("native_profiler");
        $__internal_2b50305526183a79df0f4fd146986695f8240979e40daf60331415c6bae03c69->enter($__internal_2b50305526183a79df0f4fd146986695f8240979e40daf60331415c6bae03c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b50305526183a79df0f4fd146986695f8240979e40daf60331415c6bae03c69->leave($__internal_2b50305526183a79df0f4fd146986695f8240979e40daf60331415c6bae03c69_prof);

    }

    // line 2
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_4e2efd8c7f3dc02f5d3d2b2c665eb5a5cbff3ad60bf37a72dfe69cb26fa5777c = $this->env->getExtension("native_profiler");
        $__internal_4e2efd8c7f3dc02f5d3d2b2c665eb5a5cbff3ad60bf37a72dfe69cb26fa5777c->enter($__internal_4e2efd8c7f3dc02f5d3d2b2c665eb5a5cbff3ad60bf37a72dfe69cb26fa5777c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 3
        echo "    <h1>Liste des utilisateurs</h1>
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
        echo $this->env->getExtension('routing')->getPath("admin_user_new");
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    </div>

    <table id=\"dataTables\" class=\"table table-striped table-bordered table-hover sortable\" >
        <thead>
        <tr>
            <th style=\"width: 2%;\"></th>
            <th style=\"width: 4%;\"></th>
            <th>Nom d'utilisateur</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Roles</th>
            <th style=\"width: 15%;\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            if (($this->getAttribute($context["entity"], "enabled", array()) == true)) {
                echo "<i class=\"fa fa-eye\"></i>";
            } else {
                echo "<i class=\"fa fa-eye-slash\" style=\"color:#d4dddc;\"></i>";
            }
            echo "</td>
                <td style=\"width: 4%;\">
                    ";
            // line 32
            echo "                    ";
            if ( !(null === $this->getAttribute($context["entity"], "image", array()))) {
                // line 33
                echo "                        <a class=\"fancybox\" href=\"../../";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "AssetPath", array()), "html", null, true);
                echo "\">
                            <img src=\"../../";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "AssetPath", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "image", array()), "name", array()), "html", null, true);
                echo "\" height=\"60\">
                        </a>
                    ";
            } else {
                // line 37
                echo "                        -
                    ";
            }
            // line 39
            echo "                </td>
                <td class=\"titleTable\"><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["entity"], "lastName", array())), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul class=\"role_table\">
                        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 46
                echo "                            <li>";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "</li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    </ul>
                </td>
                <td>
                    <div class=\"btn-group\">
                        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary fancybox\" data-fancybox-type=\"iframe\" data-width=\"75%\"><i class=\"fa fa-eye\"></i></a>
                        <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                        <a href=\"#\" onClick=\"
                                if(confirm('Voulez-vous Supprimer cet enregistrement ?'))
                                document.forms.Suppr";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form.submit();
                                else
                                return false;
                                \" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a>
                    </div>
                    <form action=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" name=\"Suppr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "Form\" style=\"display: none;\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                        ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["deleteForms"]) ? $context["deleteForms"] : $this->getContext($context, "deleteForms")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'widget');
            echo "
                    </form>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </tbody>
    </table>
";
        
        $__internal_4e2efd8c7f3dc02f5d3d2b2c665eb5a5cbff3ad60bf37a72dfe69cb26fa5777c->leave($__internal_4e2efd8c7f3dc02f5d3d2b2c665eb5a5cbff3ad60bf37a72dfe69cb26fa5777c_prof);

    }

    public function getTemplateName()
    {
        return "PointWebUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 68,  183 => 63,  176 => 61,  168 => 56,  162 => 53,  158 => 52,  152 => 48,  143 => 46,  139 => 45,  133 => 42,  127 => 41,  121 => 40,  118 => 39,  114 => 37,  106 => 34,  101 => 33,  98 => 32,  89 => 29,  86 => 28,  82 => 27,  63 => 11,  60 => 10,  51 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* {% block content_right %}*/
/*     <h1>Liste des utilisateurs</h1>*/
/*     {% for message in app.session.flashbag.get('info') %}*/
/*         <div class="alert alert-success alert-dismissable">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*             {{ message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="btAjout">*/
/*         <a href="{{ path('admin_user_new') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/*     </div>*/
/* */
/*     <table id="dataTables" class="table table-striped table-bordered table-hover sortable" >*/
/*         <thead>*/
/*         <tr>*/
/*             <th style="width: 2%;"></th>*/
/*             <th style="width: 4%;"></th>*/
/*             <th>Nom d'utilisateur</th>*/
/*             <th>Nom</th>*/
/*             <th>Email</th>*/
/*             <th>Roles</th>*/
/*             <th style="width: 15%;">Actions</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td>{% if entity.enabled == true %}<i class="fa fa-eye"></i>{% else %}<i class="fa fa-eye-slash" style="color:#d4dddc;"></i>{% endif %}</td>*/
/*                 <td style="width: 4%;">*/
/*                     {# On vérifie qu'une image soit bien associée à l'article #}*/
/*                     {% if entity.image is not null %}*/
/*                         <a class="fancybox" href="../../{{ entity.image.AssetPath }}">*/
/*                             <img src="../../{{ entity.image.AssetPath }}" alt="{{ entity.image.name }}" height="60">*/
/*                         </a>*/
/*                     {% else %}*/
/*                         -*/
/*                     {% endif %}*/
/*                 </td>*/
/*                 <td class="titleTable"><a href="{{ path('admin_user_show', { 'id': entity.id }) }}">{{ entity.username }}</a></td>*/
/*                 <td>{{ entity.firstName }} {{ entity.lastName|capitalize }}</td>*/
/*                 <td>{{ entity.email }}</td>*/
/*                 <td>*/
/*                     <ul class="role_table">*/
/*                         {% for role in entity.roles %}*/
/*                             <li>{{ role }}</li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </td>*/
/*                 <td>*/
/*                     <div class="btn-group">*/
/*                         <a href="{{ path('admin_user_show', {'id':entity.id}) }}" class="btn btn-primary fancybox" data-fancybox-type="iframe" data-width="75%"><i class="fa fa-eye"></i></a>*/
/*                         <a href="{{ path('admin_user_edit', {'id':entity.id}) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                         <a href="#" onClick="*/
/*                                 if(confirm('Voulez-vous Supprimer cet enregistrement ?'))*/
/*                                 document.forms.Suppr{{ entity.id }}Form.submit();*/
/*                                 else*/
/*                                 return false;*/
/*                                 " class="btn btn-danger"><i class="fa fa-trash"></i></a>*/
/*                     </div>*/
/*                     <form action="{{ path('admin_user_delete', {'id': entity.id}) }}" method="post" name="Suppr{{ entity.id }}Form" style="display: none;">*/
/*                         <input type="hidden" name="_method" value="DELETE" />*/
/*                         {{ form_widget(deleteForms[entity.id]) }}*/
/*                     </form>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
