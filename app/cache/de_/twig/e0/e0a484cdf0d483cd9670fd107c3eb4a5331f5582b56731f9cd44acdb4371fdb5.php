<?php

/* @PointWebAdmin/Default/dropzone.html.twig */
class __TwigTemplate_abac0c0dead02f1b05b3f9124a23481970752aaaecc3a4adb10df45c62a424c5 extends Twig_Template
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
        $__internal_7c61b9e5792998d80db73c72bec8fee3fc444168071cc226a37f03aec9d02ccd = $this->env->getExtension("native_profiler");
        $__internal_7c61b9e5792998d80db73c72bec8fee3fc444168071cc226a37f03aec9d02ccd->enter($__internal_7c61b9e5792998d80db73c72bec8fee3fc444168071cc226a37f03aec9d02ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PointWebAdmin/Default/dropzone.html.twig"));

        // line 1
        echo "<html>
<head>
    <script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/jquery-ui-1.11.4.custom/external/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/jquery-ui-1.11.4.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
</head>
<body style=\"background:#fff;\" >
<form enctype=\"multipart/form-data\" class=\"dropzone\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\" method=\"post\"
      id=\"pointweb_dropzone_form\">
    <div style=\" background: url('../images/download-icon.png') no-repeat center 25px;\"></div>
    <input type=\"file\" name=\"dropzoneFiles[]\" multiple/>
</form>
<script>
    var form = \$(\"#pointweb_dropzone_form\");
    var input = form.find(\"input\");
    input.on('change', function (event) {
        var progressBar = \$('<div class=\"progress progress-striped active col-lg-10\" id=\"progressBarFile\"><div class=\"progress-bar\" style=\"width: 100%\"></div></div>');
        \$(parent.document).find('#dropZoneFile').after(progressBar);
        files = event.target.files;
        var data = new FormData();
        \$.each(files, function (key, value) {
            data.append(key, value);
        });
        \$.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: data,
            cache: false,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (result) {
                progressBar.remove();
                parent.prepareNewFileForm(result);
            }
        });
    });
</script>
</body>
</html>";
        
        $__internal_7c61b9e5792998d80db73c72bec8fee3fc444168071cc226a37f03aec9d02ccd->leave($__internal_7c61b9e5792998d80db73c72bec8fee3fc444168071cc226a37f03aec9d02ccd_prof);

    }

    public function getTemplateName()
    {
        return "@PointWebAdmin/Default/dropzone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <script type="text/javascript" src="{{ asset('bower_components/jquery-ui-1.11.4.custom/external/jquery/jquery.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bower_components/jquery-ui-1.11.4.custom/jquery-ui.min.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('dist/css/sb-admin-2.css') }}" type="text/css" media="all"/>*/
/* </head>*/
/* <body style="background:#fff;" >*/
/* <form enctype="multipart/form-data" class="dropzone" action="{{ path('point_web_admin_update') }}" method="post"*/
/*       id="pointweb_dropzone_form">*/
/*     <div style=" background: url('../images/download-icon.png') no-repeat center 25px;"></div>*/
/*     <input type="file" name="dropzoneFiles[]" multiple/>*/
/* </form>*/
/* <script>*/
/*     var form = $("#pointweb_dropzone_form");*/
/*     var input = form.find("input");*/
/*     input.on('change', function (event) {*/
/*         var progressBar = $('<div class="progress progress-striped active col-lg-10" id="progressBarFile"><div class="progress-bar" style="width: 100%"></div></div>');*/
/*         $(parent.document).find('#dropZoneFile').after(progressBar);*/
/*         files = event.target.files;*/
/*         var data = new FormData();*/
/*         $.each(files, function (key, value) {*/
/*             data.append(key, value);*/
/*         });*/
/*         $.ajax({*/
/*             url: form.attr('action'),*/
/*             type: form.attr('method'),*/
/*             data: data,*/
/*             cache: false,*/
/*             dataType: 'json',*/
/*             processData: false,*/
/*             contentType: false,*/
/*             success: function (result) {*/
/*                 progressBar.remove();*/
/*                 parent.prepareNewFileForm(result);*/
/*             }*/
/*         });*/
/*     });*/
/* </script>*/
/* </body>*/
/* </html>*/