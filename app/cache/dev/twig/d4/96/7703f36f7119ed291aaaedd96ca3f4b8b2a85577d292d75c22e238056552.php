<?php

/* ::base2.html.twig */
class __TwigTemplate_d4967703f36f7119ed291aaaedd96ca3f4b8b2a85577d292d75c22e238056552 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headscript' => array($this, 'block_headscript'),
            'body' => array($this, 'block_body'),
            'footerscript' => array($this, 'block_footerscript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>     
    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- MetisMenu CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/plugins/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Iconos - Fonts Foundation Zurb -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/css/foundation-icons/foundation-icons/foundation-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    ";
        // line 34
        $this->displayBlock('headscript', $context, $blocks);
        echo " 
  </head>
  <body>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div id=\"wrapper\">

              

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- Contenido -->
<!-- Page Content --><br><br>

        <div id=\"page-wrapper\">
\t<div class=\"row\">
                <div class=\"col-lg-12\">
                  
                 ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        echo " 
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                  
        </div>
        <!-- /#page-wrapper -->  
<!-- Fin Contenido -->
     </div>
    <!-- /#wrapper -->
    <!-- jQuery Version 1.11.0 -->
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/plugins/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/censo/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 72
        $this->displayBlock('footerscript', $context, $blocks);
        // line 73
        echo "
</body>

</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenidos";
    }

    // line 34
    public function block_headscript($context, array $blocks = array())
    {
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 72
    public function block_footerscript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 72,  153 => 50,  148 => 34,  142 => 10,  134 => 73,  132 => 72,  128 => 71,  122 => 68,  116 => 65,  110 => 62,  95 => 50,  76 => 34,  63 => 24,  57 => 21,  51 => 18,  45 => 15,  39 => 12,  34 => 10,  23 => 1,);
    }
}
