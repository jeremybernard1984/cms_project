<?php

/* PointWebAdminBundle:Default:dropzone.html.twig */
class __TwigTemplate_050f3db502f518cb7704c05fa3997e3b2fb17d7dfad3b862b9138b49dffb1892 extends Twig_Template
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
        $__internal_8b2095bdf7776987cc3f615ac4cf6dbbed5301116d54fcc0039bf6f5a1d9c898 = $this->env->getExtension("native_profiler");
        $__internal_8b2095bdf7776987cc3f615ac4cf6dbbed5301116d54fcc0039bf6f5a1d9c898->enter($__internal_8b2095bdf7776987cc3f615ac4cf6dbbed5301116d54fcc0039bf6f5a1d9c898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PointWebAdminBundle:Default:dropzone.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
</head>
<body style=\"width: 100%; height: 125px\">
<form enctype=\"multipart/form-data\" class=\"dropzone\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("point_web_admin_update");
        echo "\" method=\"post\"
      id=\"pointweb_dropzone_form\">
    <input type=\"file\" name=\"dropzoneFiles[]\" multiple/>
</form>
<script>
    var form = \$(\"#pointweb_dropzone_form\");
    var input = form.find(\"input\");
    input.on('change', function (event) {
        var progressBar = \$('<div class=\"col-lg-12 progress progress-striped active\" id=\"progressBarFile\"><div class=\"progress-bar\" style=\"width: 100%\"></div></div>');
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
        
        $__internal_8b2095bdf7776987cc3f615ac4cf6dbbed5301116d54fcc0039bf6f5a1d9c898->leave($__internal_8b2095bdf7776987cc3f615ac4cf6dbbed5301116d54fcc0039bf6f5a1d9c898_prof);

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
