<?php

/* @PointWebAdmin/_js.html.twig */
class __TwigTemplate_c2694816faad5cb7a5adf32a9eaa4123f2a400a41bb8d9a334c71a63f58680f8 extends Twig_Template
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
        $__internal_ff5884dfa41e055877583c170d3f78e7fcfd9936d2be481cac668b3956287766 = $this->env->getExtension("native_profiler");
        $__internal_ff5884dfa41e055877583c170d3f78e7fcfd9936d2be481cac668b3956287766->enter($__internal_ff5884dfa41e055877583c170d3f78e7fcfd9936d2be481cac668b3956287766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebAdmin/_js.html.twig"));

        // line 1
        echo "<!-- bundle de recuperation des routes en js ex. en ajax -->
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
<!-- jQuery -->
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/jquery/dist/v2.1.3/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Core JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<!-- Metis Menu Plugin JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/metisMenu/dist/metisMenu.js"), "html", null, true);
        echo "\"></script>
<!-- CKEditor -->
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/ckeditor_4.5.6/ckeditor.js"), "html", null, true);
        echo "\"></script>
<!-- Datepicker -->
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/bootstrap-datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<!-- DataTables JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- Gestion drag and drop -->
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/jquery.rowsorter.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/jquery-sortable.js"), "html", null, true);
        echo "\"></script>
<!-- fancybox -->
<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/jquery.fancybox.js"), "html", null, true);
        echo "\"></script>
<!-- loader -->
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/pageloader.js"), "html", null, true);
        echo "\"></script>
<!-- Custom Theme JavaScript -->
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
<script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->

<!-- instant click TEST
<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/instantclick.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/loading-indicator.js"), "html", null, true);
        echo "\"></script>
<script data-no-instant>InstantClick.init(50);</script>-->";
        
        $__internal_ff5884dfa41e055877583c170d3f78e7fcfd9936d2be481cac668b3956287766->leave($__internal_ff5884dfa41e055877583c170d3f78e7fcfd9936d2be481cac668b3956287766_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebAdmin/_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  100 => 35,  87 => 25,  82 => 23,  77 => 21,  72 => 19,  68 => 18,  63 => 16,  59 => 15,  54 => 13,  49 => 11,  44 => 9,  39 => 7,  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <!-- bundle de recuperation des routes en js ex. en ajax -->*/
/* <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/* <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/* <!-- jQuery -->*/
/* <script type="text/javascript" src="{{ asset('bower_components/jquery/dist/v2.1.3/jquery-2.1.3.min.js') }}"></script>*/
/* <!-- Bootstrap Core JavaScript -->*/
/* <script type="text/javascript" src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.js') }}"></script>*/
/* <!-- Metis Menu Plugin JavaScript -->*/
/* <script type="text/javascript" src="{{ asset('bower_components/metisMenu/dist/metisMenu.js') }}"></script>*/
/* <!-- CKEditor -->*/
/* <script type="text/javascript" src="{{ asset('bower_components/ckeditor_4.5.6/ckeditor.js') }}"></script>*/
/* <!-- Datepicker -->*/
/* <script type="text/javascript" src="{{ asset('bower_components/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>*/
/* <!-- DataTables JavaScript -->*/
/* <script type="text/javascript" src="{{ asset('bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>*/
/* <!-- Gestion drag and drop -->*/
/* <script type="text/javascript" src="{{ asset('dist/js/jquery.rowsorter.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('dist/js/jquery-sortable.js') }}"></script>*/
/* <!-- fancybox -->*/
/* <script type="text/javascript" src="{{ asset('dist/js/jquery.fancybox.js') }}"></script>*/
/* <!-- loader -->*/
/* <script type="text/javascript" src="{{ asset('dist/js/pageloader.js') }}"></script>*/
/* <!-- Custom Theme JavaScript -->*/
/* <script type="text/javascript" src="{{ asset('dist/js/sb-admin-2.js') }}"></script>*/
/* */
/* <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/* <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/* <!--[if lt IE 9]>*/
/* <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/* <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/* <![endif]-->*/
/* */
/* <!-- instant click TEST*/
/* <script type="text/javascript" src="{{ asset('dist/js/instantclick.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('dist/js/loading-indicator.js') }}"></script>*/
/* <script data-no-instant>InstantClick.init(50);</script>-->*/
