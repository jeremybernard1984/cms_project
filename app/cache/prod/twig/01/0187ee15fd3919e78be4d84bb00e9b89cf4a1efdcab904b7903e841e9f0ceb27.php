<?php

/* PointWebAdminBundle:Default:dropzone.html.twig */
class __TwigTemplate_a2def29da70290568f371b51a56582411c54a48aba62fd13109bc9c92b60d9fd extends Twig_Template
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
        $__internal_945d945d52b7d8f81ce75d370625eaac1d18e18114f89f4b8bd7f435beee2a78 = $this->env->getExtension("native_profiler");
        $__internal_945d945d52b7d8f81ce75d370625eaac1d18e18114f89f4b8bd7f435beee2a78->enter($__internal_945d945d52b7d8f81ce75d370625eaac1d18e18114f89f4b8bd7f435beee2a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Default:dropzone.html.twig"));

        // line 1
        echo "<html>
<head>
    <script type=\"text/javascript\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.11.4.custom/external/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.11.4.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
</head>
<body style=\"background:#fff;\" >
<form enctype=\"multipart/form-data\" class=\"dropzone\" action=\"";
        // line 9
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
        
        $__internal_945d945d52b7d8f81ce75d370625eaac1d18e18114f89f4b8bd7f435beee2a78->leave($__internal_945d945d52b7d8f81ce75d370625eaac1d18e18114f89f4b8bd7f435beee2a78_prof);

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
        return array (  44 => 9,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <script type="text/javascript" src="{{ asset('jquery-ui-1.11.4.custom/external/jquery/jquery.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('jquery-ui-1.11.4.custom/jquery-ui.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>*/
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