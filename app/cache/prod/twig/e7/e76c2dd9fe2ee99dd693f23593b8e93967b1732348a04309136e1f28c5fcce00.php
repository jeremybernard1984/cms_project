<?php

/* PointWebAdminBundle:Default:dropzone.html.twig */
class __TwigTemplate_5838eb94ce040c48483e1a82a0d57d5613d62cdf92bd2004d97891ca721652e5 extends Twig_Template
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
        $__internal_6d59cf227b6c83c4cc34ff10848d63bbc2badc84208a52075200f5d823038708 = $this->env->getExtension("native_profiler");
        $__internal_6d59cf227b6c83c4cc34ff10848d63bbc2badc84208a52075200f5d823038708->enter($__internal_6d59cf227b6c83c4cc34ff10848d63bbc2badc84208a52075200f5d823038708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Default:dropzone.html.twig"));

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
        
        $__internal_6d59cf227b6c83c4cc34ff10848d63bbc2badc84208a52075200f5d823038708->leave($__internal_6d59cf227b6c83c4cc34ff10848d63bbc2badc84208a52075200f5d823038708_prof);

    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle:Default:dropzone.html.twig";
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
