<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b68c87f3c4f2cc96c02187f554e0d6567d723a22098d356f189fd7a7c2f8b807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebUserBundle::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebUserBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b38373e65922cbe3f347dc43c7829f3d846116ee3d97e676a5deab2e6e9f877d = $this->env->getExtension("native_profiler");
        $__internal_b38373e65922cbe3f347dc43c7829f3d846116ee3d97e676a5deab2e6e9f877d->enter($__internal_b38373e65922cbe3f347dc43c7829f3d846116ee3d97e676a5deab2e6e9f877d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b38373e65922cbe3f347dc43c7829f3d846116ee3d97e676a5deab2e6e9f877d->leave($__internal_b38373e65922cbe3f347dc43c7829f3d846116ee3d97e676a5deab2e6e9f877d_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4de34186f6b75b546403e9eee5c4407ddcd46927ebdc1949a0096663a136b125 = $this->env->getExtension("native_profiler");
        $__internal_4de34186f6b75b546403e9eee5c4407ddcd46927ebdc1949a0096663a136b125->enter($__internal_4de34186f6b75b546403e9eee5c4407ddcd46927ebdc1949a0096663a136b125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "<div class=\"container\">
    <div id=\"loginbox\" style=\"margin-top:50px;\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel panel-info\" >
            <div class=\"panel-heading\">
                <div class=\"panel-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "</div>
            </div>

            <div style=\"padding-top:30px\" class=\"panel-body\" >
                ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "                    <div id=\"login-alert\" class=\"alert alert-danger col-sm-12\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 18
        echo "                <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" id=\"loginform\" class=\"form-horizontal\" role=\"form\" >
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>
                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input required=\"required\" id=\"login-username\" type=\"text\" class=\"form-control\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                    </div>
                    <div style=\"margin-bottom: 25px\" class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                        <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <!-- Button -->
                        <div class=\"col-sm-12 controls\">
                            <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-lg btn-primary btn-block\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                            <br>
                            <label class=\"pull-left\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                            </label>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-md-12 control\">
                            <div style=\"border-top: 1px solid#888; padding-top:15px; font-size:85%\" >
                                Si vous n'avez pas de compte,
                                <a href=\"#\" onClick=\"\$('#loginbox').hide(); \$('#signupbox').show()\"> Enregistrez vous ici</a>
                                <br>
                                Mot de passe oublié ? <a href=\"#\">Cliquez ici</a>
                                <br>
                                Pour se connecter avec son compte facebook <a href=\"#\">Cliquez ici</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Pour plus tard -->

    <div id=\"signupbox\" style=\"display:none; margin-top:50px\" class=\"mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2\">
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">Sign Up</div>
                <div style=\"float:right; font-size: 85%; position: relative; top:-10px\"><a id=\"signinlink\" href=\"#\" onclick=\"\$('#signupbox').hide(); \$('#loginbox').show()\">Sign In</a></div>
            </div>
            <div class=\"panel-body\" >
                <form id=\"signupform\" class=\"form-horizontal\" role=\"form\">

                    <div id=\"signupalert\" style=\"display:none\" class=\"alert alert-danger\">
                        <p>Error:</p>
                        <span></span>
                    </div>



                    <div class=\"form-group\">
                        <label for=\"email\" class=\"col-md-3 control-label\">Email</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Email Address\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"firstname\" class=\"col-md-3 control-label\">First Name</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" name=\"firstname\" placeholder=\"First Name\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"lastname\" class=\"col-md-3 control-label\">Last Name</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" name=\"lastname\" placeholder=\"Last Name\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\" class=\"col-md-3 control-label\">Password</label>
                        <div class=\"col-md-9\">
                            <input type=\"password\" class=\"form-control\" name=\"passwd\" placeholder=\"Password\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"icode\" class=\"col-md-3 control-label\">Invitation Code</label>
                        <div class=\"col-md-9\">
                            <input type=\"text\" class=\"form-control\" name=\"icode\" placeholder=\"\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <!-- Button -->
                        <div class=\"col-md-offset-3 col-md-9\">
                            <button id=\"btn-signup\" type=\"button\" class=\"btn btn-info\"><i class=\"icon-hand-right\"></i> &nbsp Sign Up</button>
                            <span style=\"margin-left:8px;\">or</span>
                        </div>
                    </div>

                    <div style=\"border-top: 1px solid #999; padding-top:20px\"  class=\"form-group\">

                        <div class=\"col-md-offset-3 col-md-9\">
                            <button id=\"btn-fbsignup\" type=\"button\" class=\"btn btn-primary\"><i class=\"icon-facebook\"></i>   Sign Up with Facebook</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_4de34186f6b75b546403e9eee5c4407ddcd46927ebdc1949a0096663a136b125->leave($__internal_4de34186f6b75b546403e9eee5c4407ddcd46927ebdc1949a0096663a136b125_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 35,  93 => 32,  84 => 26,  75 => 22,  69 => 19,  64 => 18,  58 => 15,  55 => 14,  53 => 13,  46 => 9,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "PointWebUserBundle::base.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block fos_user_content %}*/
/* <div class="container">*/
/*     <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">*/
/*         <div class="panel panel-info" >*/
/*             <div class="panel-heading">*/
/*                 <div class="panel-title">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</div>*/
/*             </div>*/
/* */
/*             <div style="padding-top:30px" class="panel-body" >*/
/*                 {% if error %}*/
/*                     <div id="login-alert" class="alert alert-danger col-sm-12">*/
/*                         {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <form action="{{ path("fos_user_security_check") }}" method="post" id="loginform" class="form-horizontal" role="form" >*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/*                     <div style="margin-bottom: 25px" class="input-group">*/
/*                         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>*/
/*                         <input required="required" id="login-username" type="text" class="form-control" name="_username" value="{{ last_username }}" placeholder="{{ 'security.login.username'|trans }}">*/
/*                     </div>*/
/*                     <div style="margin-bottom: 25px" class="input-group">*/
/*                         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>*/
/*                         <input id="login-password" type="password" class="form-control" name="_password" placeholder="{{ 'security.login.password'|trans }}">*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <!-- Button -->*/
/*                         <div class="col-sm-12 controls">*/
/*                             <input type="submit" id="_submit" name="_submit" class="btn btn-lg btn-primary btn-block" value="{{ 'security.login.submit'|trans }}"/>*/
/*                             <br>*/
/*                             <label class="pull-left">*/
/*                                 <input type="checkbox" id="remember_me" name="_remember_me" value="on"/> {{ 'security.login.remember_me'|trans }}*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <div class="col-md-12 control">*/
/*                             <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >*/
/*                                 Si vous n'avez pas de compte,*/
/*                                 <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()"> Enregistrez vous ici</a>*/
/*                                 <br>*/
/*                                 Mot de passe oublié ? <a href="#">Cliquez ici</a>*/
/*                                 <br>*/
/*                                 Pour se connecter avec son compte facebook <a href="#">Cliquez ici</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Pour plus tard -->*/
/* */
/*     <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">*/
/*         <div class="panel panel-info">*/
/*             <div class="panel-heading">*/
/*                 <div class="panel-title">Sign Up</div>*/
/*                 <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>*/
/*             </div>*/
/*             <div class="panel-body" >*/
/*                 <form id="signupform" class="form-horizontal" role="form">*/
/* */
/*                     <div id="signupalert" style="display:none" class="alert alert-danger">*/
/*                         <p>Error:</p>*/
/*                         <span></span>*/
/*                     </div>*/
/* */
/* */
/* */
/*                     <div class="form-group">*/
/*                         <label for="email" class="col-md-3 control-label">Email</label>*/
/*                         <div class="col-md-9">*/
/*                             <input type="text" class="form-control" name="email" placeholder="Email Address">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="firstname" class="col-md-3 control-label">First Name</label>*/
/*                         <div class="col-md-9">*/
/*                             <input type="text" class="form-control" name="firstname" placeholder="First Name">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="lastname" class="col-md-3 control-label">Last Name</label>*/
/*                         <div class="col-md-9">*/
/*                             <input type="text" class="form-control" name="lastname" placeholder="Last Name">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="password" class="col-md-3 control-label">Password</label>*/
/*                         <div class="col-md-9">*/
/*                             <input type="password" class="form-control" name="passwd" placeholder="Password">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="icode" class="col-md-3 control-label">Invitation Code</label>*/
/*                         <div class="col-md-9">*/
/*                             <input type="text" class="form-control" name="icode" placeholder="">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <!-- Button -->*/
/*                         <div class="col-md-offset-3 col-md-9">*/
/*                             <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>*/
/*                             <span style="margin-left:8px;">or</span>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">*/
/* */
/*                         <div class="col-md-offset-3 col-md-9">*/
/*                             <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
