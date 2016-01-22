<?php

/* PointWebProductBundle:Product:show.html.twig */
class __TwigTemplate_b4be8e90f8f266d0485d06a01d2e8f948db583e06c395aa76fa106bca50e6cd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:Product:show.html.twig", 1);
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
        $__internal_8aa197d6ddf4b3cc3bdcbec8857de8b1415ea5587014c6e1d83bfddb2e0c755c = $this->env->getExtension("native_profiler");
        $__internal_8aa197d6ddf4b3cc3bdcbec8857de8b1415ea5587014c6e1d83bfddb2e0c755c->enter($__internal_8aa197d6ddf4b3cc3bdcbec8857de8b1415ea5587014c6e1d83bfddb2e0c755c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebProductBundle:Product:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aa197d6ddf4b3cc3bdcbec8857de8b1415ea5587014c6e1d83bfddb2e0c755c->leave($__internal_8aa197d6ddf4b3cc3bdcbec8857de8b1415ea5587014c6e1d83bfddb2e0c755c_prof);

    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        $__internal_10370526c134c40016479adc513007d230e5a8d0e310471621733fe48b8a9ff8 = $this->env->getExtension("native_profiler");
        $__internal_10370526c134c40016479adc513007d230e5a8d0e310471621733fe48b8a9ff8->enter($__internal_10370526c134c40016479adc513007d230e5a8d0e310471621733fe48b8a9ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right"));

        // line 4
        echo "    <h1>Produit</h1>


    <div class=\"panel panel-info\">
    <div class=\"panel-heading\">Titre</div>
        <div class=\"panel-body\">
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
    <div class=\"panel-heading\">Référence</div>
        <div class=\"panel-body\">
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference", array()), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Description</div>
        <div class=\"panel-body\">
            ";
        // line 23
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Titre Catégorie</div>
            <div class=\"panel-body\">
                ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "html", null, true);
        echo "
            </div>
    </div>

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Lien vidéo</div>
        <div class=\"panel-body\">
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "urlLink", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"col-xs-6\" >
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Prix</div>
            <div class=\"panel-body\">
                ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price", array()), "html", null, true);
        echo " €
            </div>
        </div>
    </div>
    <div class=\"col-xs-6\" >
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Prix promotion</div>
            <div class=\"panel-body\">
                ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "promotionPrice", array()), "html", null, true);
        echo " €
            </div>
        </div>
    </div>
    <div class=\"col-xs-6\" >
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Date de début de la promotion</div>
            <div class=\"panel-body\">
                ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "promotionStartDate", array()), "m/d/Y"), "html", null, true);
        echo "
            </div>
        </div>
    </div>
    <div class=\"col-xs-6\" >
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Date de fin de la promotion</div>
            <div class=\"panel-body\">
                ";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "promotionEndDate", array()), "m/d/Y"), "html", null, true);
        echo "
            </div>
        </div>
    </div>


    <div class=\"col-xs-12\" >
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">En ligne ?</div>
            <div class=\"panel-body\">
                ";
        // line 77
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo " Oui ";
        } else {
            echo " Non ";
        }
        // line 78
        echo "            </div>
        </div>
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Position</div>
            <div class=\"panel-body\">
                ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
            </div>
        </div>
    ";
        // line 86
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 87
            echo "        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Fichiers</div>
            <div class=\"panel-body\">
                <div id=\"gallery\" style=\"display:none;\">
                    ";
            // line 91
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 92
                echo "                        <img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                             data-image=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                             data-description=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                </div>
            </div>
        </div>
    ";
        }
        // line 100
        echo "    </div>



            <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("admin_product");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la
                liste</a>
            <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i>
                Modifier</a>
 ";
        // line 108
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
        
        $__internal_10370526c134c40016479adc513007d230e5a8d0e310471621733fe48b8a9ff8->leave($__internal_10370526c134c40016479adc513007d230e5a8d0e310471621733fe48b8a9ff8_prof);

    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 108,  209 => 106,  204 => 104,  198 => 100,  192 => 96,  184 => 94,  180 => 93,  173 => 92,  169 => 91,  163 => 87,  161 => 86,  155 => 83,  148 => 78,  142 => 77,  129 => 67,  118 => 59,  107 => 51,  96 => 43,  86 => 36,  76 => 29,  67 => 23,  57 => 16,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
