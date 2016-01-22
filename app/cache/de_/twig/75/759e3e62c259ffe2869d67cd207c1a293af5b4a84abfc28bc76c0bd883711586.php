<?php

/* PointWebAppBundle::knp_breadcrumb.html.twig */
class __TwigTemplate_4e2edb335e2ddffa7fbf43a317458bef7145d0291a40f80506028fa43212bb9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f4f7d18f93794ff0e10185315d8b1b90ede17252dfd61682f9917d6b3b9a65a = $this->env->getExtension("native_profiler");
        $__internal_6f4f7d18f93794ff0e10185315d8b1b90ede17252dfd61682f9917d6b3b9a65a->enter($__internal_6f4f7d18f93794ff0e10185315d8b1b90ede17252dfd61682f9917d6b3b9a65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAppBundle::knp_breadcrumb.html.twig"));

        // line 1
        $this->displayBlock('root', $context, $blocks);
        
        $__internal_6f4f7d18f93794ff0e10185315d8b1b90ede17252dfd61682f9917d6b3b9a65a->leave($__internal_6f4f7d18f93794ff0e10185315d8b1b90ede17252dfd61682f9917d6b3b9a65a_prof);

    }

    public function block_root($context, array $blocks = array())
    {
        $__internal_ca793ab10022d756b3e30e219729e0242363b0e16a35f43a4f486022c9c9644f = $this->env->getExtension("native_profiler");
        $__internal_ca793ab10022d756b3e30e219729e0242363b0e16a35f43a4f486022c9c9644f->enter($__internal_ca793ab10022d756b3e30e219729e0242363b0e16a35f43a4f486022c9c9644f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "breadcrumbsArray", array())) {
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "breadcrumbsArray", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 4
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo "<a href=\"/\" title=\"Go to Home\" class=\"tip-bottom\"><i class=\"icon-home\"></i> Home</a>";
                } elseif ( !$this->getAttribute(                // line 5
$context["loop"], "last", array())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "uri", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["link"], "label", array())), "html", null, true);
                    echo "</a>";
                } else {
                    // line 7
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "uri", array()), "html", null, true);
                    echo "\" class=\"current\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["link"], "label", array())), "html", null, true);
                    echo "</a>";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    ";
        }
        
        $__internal_ca793ab10022d756b3e30e219729e0242363b0e16a35f43a4f486022c9c9644f->leave($__internal_ca793ab10022d756b3e30e219729e0242363b0e16a35f43a4f486022c9c9644f_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::knp_breadcrumb.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 10,  66 => 7,  58 => 5,  55 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block root %}*/
/*     {% if item.breadcrumbsArray %}*/
/*         {%- for  link in item.breadcrumbsArray %}*/
/*             {%- if loop.index == 1 %}<a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>*/
/*             {%- elseif not loop.last %}<a href="{{ link.uri }}">{{ link.label | trans }}</a>*/
/*             {%- else %}*/
/*                 <a href="{{ link.uri }}" class="current">{{ link.label | trans }}</a>*/
/*             {%- endif %}*/
/*         {%- endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
